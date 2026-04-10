<?php
namespace App\Controllers\admin;

use App\Controllers\BaseController;

class ImportTrucks extends BaseController
{
    public function index($withImagesOnly = true)
    {
        $autocraftDB = \Config\Database::connect([
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'autocraftjapan_ci',
            'DBDriver' => 'MySQLi',
            'DBPrefix' => '',
            'pConnect' => false,
            'DBDebug' => true,
            'charset' => 'utf8mb4',
            'DBCollat' => 'utf8mb4_general_ci'
        ]);

        $kaitoriDB = \Config\Database::connect();

        $kaitoriDB->query("DELETE FROM tbl_vehicles WHERE 1");

        if ($withImagesOnly) {
            $trucks = $autocraftDB->query("
                SELECT v.* 
                FROM tbl_vehicles v
                WHERE v.body_type LIKE '%truck%' 
                    AND (v.featured_image IS NOT NULL OR EXISTS (SELECT 1 FROM tb_aucnet_truck_pictures WHERE veh_id = v.veh_id))
                ORDER BY v.veh_id DESC 
                LIMIT 50
            ")->getResultArray();
        } else {
            $trucks = $autocraftDB->query("
                SELECT * FROM tbl_vehicles 
                WHERE body_type LIKE '%truck%' 
                ORDER BY veh_id DESC 
                LIMIT 50
            ")->getResultArray();
        }

        $imported = 0;
        $imagesImported = 0;
        $errors = [];

        foreach ($trucks as $truck) {
            $exists = $kaitoriDB->query("
                SELECT veh_id FROM tbl_vehicles WHERE veh_id = ?
            ", [$truck['veh_id']])->getRow();

            if ($exists) {
                continue;
            }

            $featuredImage = null;
            
            if (!empty($truck['featured_image'])) {
                $featuredImage = $truck['featured_image'];
            } else {
                $imageRow = $autocraftDB->query("
                    SELECT pic_url FROM tb_aucnet_truck_pictures 
                    WHERE veh_id = ? 
                    LIMIT 1
                ", [$truck['veh_id']])->getRow();
                $featuredImage = $imageRow ? $imageRow->pic_url : null;
            }
            
            if ($featuredImage) {
                $featuredImage = $this->convertImageUrl($featuredImage);
                $imagesImported++;
            }

            $data = [
                'veh_id' => $truck['veh_id'],
                'stock_no' => $truck['stock_no'] ?? null,
                'model_code' => $truck['model_code'] ?? null,
                'chassis' => $truck['chassis'] ?? null,
                'engine_no' => $truck['engine_no'] ?? null,
                'engine_type' => $truck['engine_type'] ?? null,
                'body_type' => $truck['body_type'] ?? null,
                'mileage' => $truck['mileage'] ?? null,
                'cc' => $truck['cc'] ?? null,
                'transmission' => $truck['transmission'] ?? null,
                'exterior_color' => $truck['exterior_color'] ?? null,
                'fuel' => $truck['fuel'] ?? null,
                'drive' => $truck['drive'] ?? null,
                'fob_price' => $truck['price'] ?? null,
                'year' => $truck['year'] ?? null,
                'make' => $truck['make'] ?? null,
                'model' => $truck['model'] ?? null,
                'featured_image' => $featuredImage,
                'status' => 'active',
                'display_website' => 1
            ];

            try {
                $kaitoriDB->table('tbl_vehicles')->insert($data);
                $imported++;
                
                $this->importVehicleImages($autocraftDB, $kaitoriDB, $truck['veh_id'], $featuredImage);
                
            } catch (\Exception $e) {
                $errors[] = "Error importing truck {$truck['veh_id']}: " . $e->getMessage();
            }
        }

        $autocraftDB->close();

        $result = [
            'success' => true,
            'imported' => $imported,
            'images_imported' => $imagesImported,
            'errors' => $errors
        ];

        return $this->response->setJSON($result);
    }

   
    private function importVehicleImages($autocraftDB, $kaitoriDB, $vehId, $featuredImage)
    {
        $images = $autocraftDB->query("
            SELECT pic_url FROM tb_aucnet_truck_pictures 
            WHERE veh_id = ?
        ", [$vehId])->getResultArray();
        
        if (!empty($images)) {
            foreach ($images as $image) {
                $picUrl = $this->convertImageUrl($image['pic_url']);
                if ($picUrl) {
                    $kaitoriDB->table('tb_vehicle_pictures')->insert([
                        'veh_id' => $vehId,
                        'pic_url' => $picUrl
                    ]);
                }
            }
            return;
        }
        
        if ($featuredImage) {
            if (preg_match('/_1\.(jpg|jpeg|png)$/i', $featuredImage)) {
                for ($i = 1; $i <= 5; $i++) {
                    $imageUrl = preg_replace('/_1\.(jpg|jpeg|png)$/i', "_{$i}.$1", $featuredImage);
                    $kaitoriDB->table('tb_vehicle_pictures')->insert([
                        'veh_id' => $vehId,
                        'pic_url' => $imageUrl
                    ]);
                }
            } else {
                $kaitoriDB->table('tb_vehicle_pictures')->insert([
                    'veh_id' => $vehId,
                    'pic_url' => $featuredImage
                ]);
            }
        }
    }

 
    private function convertImageUrl($url)
    {
        if (empty($url)) {
            return null;
        }

        $directDomains = [
            'retro-pxe-00001-hs.angpla-net.com',
            'aucnet-image.com',
            'image.aucnet.co.jp',
            'stock.japan-partner.com'
        ];

        foreach ($directDomains as $domain) {
            if (strpos($url, $domain) !== false) {
                return $url;
            }
        }

        if (strpos($url, 'image_proxy.php') !== false) {
            if (preg_match('/image_url=([^&]+)/', $url, $matches)) {
                return urldecode($matches[1]);
            }
        }

        if (strpos($url, 'cloudfront.net') !== false) {
        
            return $url;
        }

        return $url;
    }
}
