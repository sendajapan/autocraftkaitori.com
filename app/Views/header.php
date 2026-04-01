<!DOCTYPE html>
<?php
// Get URI segment
$uri = service('uri');
$uri = $uri->getSegment(1);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title><?= $page_title ?></title>
    <?php 
          foreach($meta as $item) {
            $name = isset($item['name']) ? "name='{$item['name']}'" : (isset($item['property']) ? "property='{$item['property']}'" : '');
            $content = $item['content'];
            echo "<meta " . $name . " content='$content'>";
            echo "\n";
        }  
    ?>    

    <link rel="icon" href="<?=base_url('public/assets/images/B1.png');?>" type="image/png">
    <link rel="shortcut icon" href="<?=base_url('public/assets/images/B1.png');?>" type="image/png">
    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/assets/css/vendor.css')?>">

    <!--Bootstrap ================================================== -->
    <link rel="stylesheet" href="<?=base_url('public/assets/css/owl.carousel.min.css')?>" type="text/css">

    <link href="<?=base_url('public/assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/assets/css/style.css')?>">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Roboto"> -->   

    <link rel="stylesheet" href="<?=base_url('public/assets/css/jquery-ui.min.css')?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- script ================================================== -->
    <script src="<?=base_url('public/assets/js/modernizr.js')?>"></script>

    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="<?=base_url('public/assets/css/swiper-bundle.min.css')?>" /> -->


</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">

    <nav class="navbar navbar-expand-lg  navbar-light container-fluid position-relative ">
        <div class="container">
            <a class="navbar-brand" href="<?=base_url('/')?>"><img  src="<?=base_url("public/assets/images/Group 3412.png")?>"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    
                    <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="<?= ($uri=='') ? 'active':''; ?> nav-link px-3" aria-current="page" href="<?=base_url()?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?= ($uri=='stock') ? 'active':''; ?> nav-link px-3" href="<?=base_url('stock')?>">New Arrives</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?= ($uri=='about') ? 'active':''; ?> nav-link px-3" href="<?=base_url('about')?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?= ($uri=='testimonials') ? 'active':''; ?> nav-link px-3" href="<?=base_url('testimonials')?>">Purchase Process</a>
                        </li>   
                   
                        <li class="nav-item">
                            <a class="<?= ($uri=='contact') ? 'active':''; ?> nav-link px-3" href="<?=base_url('contact')?>">Contact Us </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav align-items-center justify-content-end pe-3">
                        <li class="nav-item dropdown language-switcher">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-globe me-2"></i>
                                <span>English</span>
                                <i class="fas fa-caret-down ms-2" style="font-size: 12px;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item active" href="#" data-lang="en">English</a></li>
                                <li><a class="dropdown-item" href="#" data-lang="ja">Japanese</a></li>
                                <li><a class="dropdown-item" href="#" data-lang="ko">Korean</a></li>
                            </ul>
                        </li>
                    </ul>



                </div>

            </div>
        </div>
    </nav>