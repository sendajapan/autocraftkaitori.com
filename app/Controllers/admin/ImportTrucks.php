<?php
namespace App\Controllers\admin;

use App\Controllers\BaseController;

class ImportTrucks extends BaseController
{
    public function index($withImagesOnly = true)
    {
        // Create connection to autocraftjapan database
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

        // Get default kaitori database connection
        $kaitoriDB = \Config\Database::connect();

        // Clear existing trucks from kaitori database
        $kaitoriDB->query("DELETE FROM tbl_vehicles WHERE 1");

        // Get 50 trucks from autocraftjapan (trucks only, with images if required)
        if ($withImagesOnly) {
            // Only get trucks that have images in tb_aucnet_truck_pictures
            // Use a subquery to get the first image for each truck
            $trucks = $autocraftDB->query("
                SELECT v.* 
                FROM tbl_vehicles v
                WHERE v.body_type LIKE '%truck%' 
                    AND (v.featured_image IS NOT NULL OR EXISTS (SELECT 1 FROM tb_aucnet_truck_pictures WHERE veh_id = v.veh_id))
                ORDER BY v.veh_id DESC 
                LIMIT 50
            ")->getResultArray();
        } else {
            // Get all trucks (may or may not have images)
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
            // Check if already exists in kaitori
            $exists = $kaitoriDB->query("
                SELECT veh_id FROM tbl_vehicles WHERE veh_id = ?
            ", [$truck['veh_id']])->getRow();

            if ($exists) {
                continue;
            }

            // Get featured image - priority: 1) tbl_vehicles.featured_image, 2) tb_aucnet_truck_pictures
            $featuredImage = null;
            
            // First check if featured_image exists in tbl_vehicles
            if (!empty($truck['featured_image'])) {
                $featuredImage = $truck['featured_image'];
            } else {
                // Fall back to tb_aucnet_truck_pictures
                $imageRow = $autocraftDB->query("
                    SELECT pic_url FROM tb_aucnet_truck_pictures 
                    WHERE veh_id = ? 
                    LIMIT 1
                ", [$truck['veh_id']])->getRow();
                $featuredImage = $imageRow ? $imageRow->pic_url : null;
            }
            
            // Convert CloudFront/proxy URLs to direct source URLs
            if ($featuredImage) {
                $featuredImage = $this->convertImageUrl($featuredImage);
                $imagesImported++;
            }

            // Prepare data for insert - only use columns that exist in kaitori
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
                
                // Import all images into tb_vehicle_pictures
                $this->importVehicleImages($autocraftDB, $kaitoriDB, $truck['veh_id'], $featuredImage);
                
            } catch (\Exception $e) {
                $errors[] = "Error importing truck {$truck['veh_id']}: " . $e->getMessage();
            }
        }

        // Close connections
        $autocraftDB->close();

        // Return results
        $result = [
            'success' => true,
            'imported' => $imported,
            'images_imported' => $imagesImported,
            'errors' => $errors
        ];

        return $this->response->setJSON($result);
    }

    /**
     * Import all vehicle images from tb_aucnet_truck_pictures to tb_vehicle_pictures
     */
    private function importVehicleImages($autocraftDB, $kaitoriDB, $vehId, $featuredImage)
    {
        // Get all images for this vehicle from autocraftjapan
        $images = $autocraftDB->query("
            SELECT pic_url FROM tb_aucnet_truck_pictures 
            WHERE veh_id = ?
        ", [$vehId])->getResultArray();
        
        if (empty($images)) {
            // If no images in tb_aucnet_truck_pictures but featured_image exists,
            // create a single entry for the featured image
            if ($featuredImage) {
                $kaitoriDB->table('tb_vehicle_pictures')->insert([
                    'veh_id' => $vehId,
                    'pic_url' => $featuredImage
                ]);
            }
            return;
        }
        
        // Insert all images into kaitori's tb_vehicle_pictures
        foreach ($images as $image) {
            $picUrl = $this->convertImageUrl($image['pic_url']);
            if ($picUrl) {
                $kaitoriDB->table('tb_vehicle_pictures')->insert([
                    'veh_id' => $vehId,
                    'pic_url' => $picUrl
                ]);
            }
        }
    }

    /**
     * Convert CloudFront or proxy URLs to direct source URLs
     */
    private function convertImageUrl($url)
    {
        if (empty($url)) {
            return null;
        }

        // If it's already a direct URL from known working domains, return as-is
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

        // Extract actual image URL from autocraftjapan proxy
        if (strpos($url, 'image_proxy.php') !== false) {
            // Parse the image_url parameter
            if (preg_match('/image_url=([^&]+)/', $url, $matches)) {
                return urldecode($matches[1]);
            }
        }

        // For CloudFront URLs, try to use them directly (may work on some browsers)
        // Or return a placeholder if they consistently fail
        if (strpos($url, 'cloudfront.net') !== false) {
            // Option 1: Return as-is (may fail due to hotlink protection)
            // return $url;
            
            // Option 2: Return null to skip problematic CloudFront URLs
            // return null;
            
            // Option 3: Try using a proxy service
            return $url;
        }

        return $url;
    }
}
