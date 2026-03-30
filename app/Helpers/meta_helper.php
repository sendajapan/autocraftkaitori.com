<?php

function home_meta(){

    $title = 'Autocraft Korea | Trusted Vehicle Importer/Exporter in Korea';
    $meta_description = 'Autocraft Korea is your reliable partner for Importin and exporting high-quality Korean vehicles. Explore our extensive stock of new and used cars.';
    $keywords = 'Autocraft Korea, Korean vehicle exporter, used cars Korea, new cars Korea, Korean car export, high-quality vehicles';

    return meta_tags($title, $meta_description, $keywords);
}

function about_meta(){

	$title = "About Autocraft Korea | Trusted Experts in Vehicle Export/Import";
	$meta_description = 'Learn about Autocraft Korea, a leading exporter and importer of Korean vehicles. Discover our mission, values, and commitment to quality and customer satisfaction.';
    $keywords = 'Autocraft Korea, about us, Korean vehicle exporter, vehicle trading experts, quality Korean cars';

	return meta_tags($title, $meta_description, $keywords);
}

function contact_meta(){

	$title = "Contact Autocraft Korea | Get in Touch for Vehicle Exports/Imports";
	$meta_description = 'Reach out to Autocraft Korea for inquiries about exporting or Importing Korean vehicles. We’re here to assist you with high-quality service and expert advice.';
    $keywords = 'Contact Autocraft Korea, Korean vehicle exporter contact, export inquiries, customer support, export service assistance';

	return meta_tags($title, $meta_description, $keywords);
}

function testimonials_meta(){

	$title = "Customer Testimonials | Why Clients Trust Autocraft Korea";
	$meta_description = "Read what our satisfied clients say about Autocraft Korea. Discover why businesses worldwide trust us for high-quality Korean vehicle.";
	$keywords = 'Autocraft Korea reviews, customer testimonials, trusted Korean exporter, client feedback, quality vehicle export services';

	return meta_tags($title, $meta_description, $keywords);
}

function car_detail_meta($car){

    $title = $car.' - Autocraft Korea';
    $meta_description = 'Autocraft Korea is a car dealer which provides '.$car.' for sale and other models too.';
    $keywords = 'Autocraft Korea, used cars Korea, new cars Korea, quality vehicles, trusted car dealer, car dealership Korea, best used cars, car delivery Korea';

    return meta_tags($title, $meta_description, $keywords);
}

function stock_meta_default(){
	
    $title = 'Explore Our Stock | High-Quality Korean Vehicles for Import/Export';
    $meta_description = 'Browse our wide range of Korean vehicles, including sedans, SUVs, and commercial vehicles. We provide high-quality and competitively priced options.';
    $keywords = 'Korean vehicles, cars for export, used cars stock, new Korean cars, SUVs for Import, Korean commercial vehicles';

    return meta_tags($title, $meta_description, $keywords);
	//return $data;
}

function stock_meta_make($make){
	
    $title = ''.ucwords(strtolower($make)).' Cars For Sale In Korea At Best Price - Autocraft Korea';
    $meta_description = 'Find your dream '.ucwords(strtolower($make)).' cars for sale in Korea with Autocraft Korea! We offer competitive prices and excellent customer service to help you find the perfect vehicle at a great price.';
    $keywords = 'Autocraft Korea stock, used cars for sale, new cars for sale, car inventory Korea, vehicle selection, car stock Korea, buy used cars, buy new cars, car delivery';

	return meta_tags($title, $meta_description, $keywords);
}

function stock_meta_make_model($make, $model){

    $title = ''.ucwords(strtolower($make)).' '.ucwords(strtolower($model)).' For Sale In Korea At Best Price - Autocraft Korea';
    $meta_description = 'Find your dream '.ucwords(strtolower($make)).' '.ucwords(strtolower($model)).' for sale in Korea with Autocraft Korea! We offer competitive prices and excellent customer service to help you find the perfect vehicle at a great price.';
    $keywords = 'Autocraft Korea stock, used cars for sale, new cars for sale, car inventory Korea, vehicle selection, car stock Korea, buy used cars, buy new cars, car delivery';
    return meta_tags($title, $meta_description, $keywords);
}

function stock_meta_condition($veh_condition){

    $title = 'Buy '.$veh_condition.' Cars For Sale In Korea - Autocraft Korea';
    $meta_description = 'Find your dream '.strtolower($veh_condition).' cars for sale in Korea with Autocraft Korea! We offer competitive prices and excellent customer service to help you find the perfect '.strtolower($veh_condition).' vehicles at a great price.';
    $keywords = 'Autocraft Korea stock, used cars for sale, new cars for sale, car inventory Korea, vehicle selection, car stock Korea, buy used cars, buy new cars, car delivery';

    return meta_tags($title, $meta_description, $keywords);
}

function stock_meta_drive($drive){

	if($drive == 'RHD'){$meta_drive='Right';}else{$meta_drive='Left';}
        $h1 = '<h1 class="h4 font-weight-bold">'.$meta_drive.' Hand Drive Cars For Sale In Korea</h1>';
        $title = ''.$meta_drive.' Hand Drive Cars For Sale In Korea - Autocraft Korea';
        $meta_description = 'Find your dream '.strtolower($meta_drive).' hand drive car at Autocraft Korea. We offer a wide selection of '.strtolower($meta_drive).' hand drive cars for sale in Korea at a great price.';
        $keywords = 'Autocraft Korea stock, used cars for sale, new cars for sale, car inventory Korea, vehicle selection, car stock Korea, buy used cars, buy new cars, car delivery';

    return meta_tags($title, $meta_description, $keywords);
}



function meta_tags($title, $meta_description, $keywords){

    $data[] = array('name' => 'description', 'content' => $meta_description);
    $data[] = array('name' => 'keywords', 'content' => $keywords);
    $data[] = array('name' => 'author', 'content' => "Autocraft Korea");
    $data[] = array('name' => 'robots', 'content' => "index,follow");
	$data[] = array('property' => 'og:title', 'content' => $title);
    $data[] = array('property' => 'og:description', 'content' => $meta_description);
    $data[] = array('property' => 'og:url', 'content' => current_url());
    $data[] = array('property' => 'og:type', 'content' => 'website');
    if(strpos($_SERVER['REQUEST_URI'], "page"))
    {   
        $data[] = array('name' => 'robots', 'content' => 'noindex');
    }

    return $data;
}	

?>