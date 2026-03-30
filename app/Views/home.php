<?= $this->extend('template') ?>


<?= $this->section('content') ?>

<?php session()->remove('filter'); ?>
<!-- hero section start  -->

<section id="hero" class="position-relative overflow-hidden">
    <div class="container hero-content">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="detail mb-4">

                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="card rounded-4 shadow bg-body-tertiary rounded">
                    <div class="card-body p-0">


                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- hero section ends  -->



<!-- Form section start  -->
<section id="search">


    <div class="container search-block">

        <h2 class="text-center mb-4">SEARCH <span class="text-primary"> VEHICLE </span></h2>


        <form action="<?=base_url('stock')?>" method="post" class="row form-group flex-wrap px-3" id="form2">
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">
                <div class="input-group ">

                    <select name="make" id="vehicle-make2" class="form-select form-control">
                        <option selected value=""> Make</option>
                        <?php if($makes){
                                        foreach($makes as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>

                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">
                <div class="input-group ">
                    <select name="model" id="v_model2" class="form-select form-control">
                        <option value="">Model</option>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">

                <div class="input-group ">
                    <select id="veh_condition" name="veh_condition" class="form-select form-control" id="vehicle">
                        <option selected>Condition</option>
                        <?php foreach($veh_condition as $item){
                                    if($item!=""){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">

                <div class="input-group ">
                    <select id="body_type" name="body_type" class="form-select form-control">
                        <option value="">Body Type</option>
                        <?php if($body_types){
                                        foreach($body_types as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">

                <div class="input-group ">
                    <select id="transmission" name="transmission" class="form-select form-control">
                        <option value="">Transmission</option>
                        <?php if($transmissions){
                                        foreach($transmissions as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">

                <div class="input-group ">
                    <select id="exterior_color" name="exterior_color" class="form-select form-control">
                        <option value=""> color</option>
                        <?php if($colors){
                                        foreach($colors as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">
                <div class="input-group ">
                    <select id="fuel" name="fuel" class="form-select form-control">
                        <option value=""> Fuel</option>
                        <?php if($fuels){
                                        foreach($fuels as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">

                <div class="input-group">

                    <select id="year_from" name="year_from" class="form-select form-control">
                        <?php for($y=2000; $y<=date("Y"); $y++){ ?>
                        <option <?= ($request->getPost('year_from')==$y) ? "selected": "" ?> value="<?=$y?>">Year From <?=$y?>
                        </option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0 mb-2">

                <div class="input-group">

                    <select id="year_to" name="year_to" class="form-select form-control">
                        <?php for($y=date("Y"); $y>=2000; $y--){ ?>
                        <option <?= ($request->getPost('year_to')==$y) ? "selected": "" ?> value="<?=$y?>">Year To <?=$y?>
                        </option>
                        <?php } ?>
                    </select>

                </div>
            </div>

            <!-- <div class="ps-3 col-12 col-md-6 col-lg-4 mt-4 mt-lg-0 mb-2 home-range-slider">
                <div class="hero__tab__form">
                    <div class="car-price">
                        <p>CC</p>
                        <div class="price-range-wrap">
                            <div class="cc-range"></div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <label for="cc"></label>
                                    <input type="text" name="cc" id="cc" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="ps-3 col-12 col-md-6 col-lg-4 mt-4 mt-lg-0 mb-2 home-range-slider">
                <div class="hero__tab__form">
                    <div class="car-price">
                        <p>Mileage</p>
                        <div class="price-range-wrap">
                            <div class="km-range"></div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <label for="km"></label>
                                    <input type="text" name="km" id="km" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->



            <div class="col-12 col-md-12 col-lg-12 mt-lg-0 mb-2">
                <div class="d-grid" style="margin-top:33px">
                    <input type="submit" name="submit" value="Search Car" class="btn btn-secondary">
                </div>
            </div>

        </form>


    </div>

</section>
<!-- form section ends  -->



<!--------------------------------------- stock section start ------------------------------ -->


<section id="search" style="margin-bottom: 50px;">

    <div class="container mt-5">
        <div class="row mt-1">

            <div class="col-lg-12 col-md-12 stockbar">
                <div class="container new-arrivals mb-5">
                    <div class="row">
                        <h2 class="mb-4">NEW ARRIVALS</h2>
                        <?php if($new_arrivals){foreach($new_arrivals as $item){ ?>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card rounded-3">
                                <div class="card-body p-0 ">
                                    <a class="figure" target="_blank" href="<?= base_url('car/'.$item['slug']) ?>">
                                        <?php if($item['featured_image']){ ?>
                                        <img src="<?=$item['featured_image']?>" class="card-img-top rounded-3"
                                            alt="...">
                                        <?php }else{ ?>
                                        <img src="<?=base_url("public/assets/images/test.webp")?>" class="card-img-top"
                                            alt="...">
                                        <?php } ?>
                                        <!-- <div class="year-tag"><?= $item['year'] ?></div> -->
                                    </a>
                                    <div class="row px-4">
                                        <div class="col-9 p-0">
                                            <a>
                                                <h4 class="card-title" target="_blank"
                                                    href="<?= base_url('car/'.$item['slug']) ?>">
                                                    <?= $item['make'] ?> <?= $item['model'] ?></h4>
                                            </a>
                                        </div>
                                        <div class="col-3 p-0">
                                            <a href="" class="text-black">ASK</a>
                                        </div>


                                    </div>
                                    <div class="row card-text">
                                        <div
                                            class="col-6 px-1 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-12 col-sm-5 offset-sm-1 col-xs-5 offset-xs-1 d-flex flex-column align-items-baseline detail_box">
                                            <div class="text-nowrap"><i class="fa-solid fa-gauge"></i>
                                                <span><?= ($item['mileage']) ? number_format($item['mileage']).' km' : '-'; ?></span>
                                            </div>
                                            <div class="text-nowrap"><i class="fa-solid fa-palette"></i>
                                                <span><?=$item['exterior_color']?></span>
                                            </div>
                                            <div class="text-nowrap"><i class="fa-solid fa-gas-pump"></i>
                                                <span><?=$item['fuel']?> </span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-6 px-1 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-12 col-sm-5 offset-sm-1 col-xs-5 offset-xs-1 d-flex flex-column align-items-baseline detail_box">
                                            <div class="text-nowrap"><i class="fa-solid fa-calendar"></i>
                                                <span><?=$item['year']?></span>
                                            </div>
                                            <div class="text-nowrap"><i class="fa-solid fa-dharmachakra"></i>
                                                <span><?=$item['drive']?></span>
                                            </div>
                                            <div class="text-nowrap"><i class="fa-solid fa-gears"></i>
                                                <span><?=$item['transmission']?></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php } } ?>
                        <div class="text-end">
                            <a href="<?=base_url("stock")?>" class="btn btn-secondary">View All</a>
                        </div>
                    </div>

                </div>

                <div class="container clearance">
                    <div class="row">
                        <h2 class="mb-4">CLEARANCE</h2>
                        <?php if($new_arrivals){foreach($new_arrivals as $key => $item){ if($key<4){?>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card rounded-3">
                                <div class="card-body p-0 ">
                                    <a class="figure" target="_blank" href="<?= base_url('car/'.$item['slug']) ?>">
                                        <?php if($item['featured_image']){ ?>
                                        <img src="<?=$item['featured_image']?>" class="card-img-top rounded-3"
                                            alt="...">
                                        <?php }else{ ?>
                                        <img src="<?=base_url("public/assets/images/test.webp")?>" class="card-img-top"
                                            alt="...">
                                        <?php } ?>
                                    </a>
                                    <div class="row px-4">
                                        <div class="col-9 p-0">
                                            <a>
                                                <h4 class="card-title" target="_blank"
                                                    href="<?= base_url('car/'.$item['slug']) ?>">
                                                    <?= $item['make'] ?> <?= $item['model'] ?></h4>
                                            </a>
                                        </div>
                                        <div class="col-3 p-0">
                                            <a href="" class="text-black">ASK</a>
                                        </div>


                                    </div>
                                    <div class="row card-text">
                                        <div
                                            class="col-6 px-1 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-12 col-sm-5 offset-sm-1 col-xs-5 offset-xs-1 d-flex flex-column align-items-baseline detail_box">
                                            <div class="text-nowrap"><i class="fa-solid fa-gauge"></i>
                                                <span><?= ($item['mileage']) ? number_format($item['mileage']).' km' : '-'; ?></span>
                                            </div>
                                            <div class="text-nowrap"><i class="fa-solid fa-palette"></i>
                                                <span><?=$item['exterior_color']?></span>
                                            </div>
                                            <div class="text-nowrap"><i class="fa-solid fa-gas-pump"></i>
                                                <span><?=$item['fuel']?> </span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-6 px-1 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-12 col-sm-5 offset-sm-1 col-xs-5 offset-xs-1 d-flex flex-column align-items-baseline detail_box">
                                            <div class="text-nowrap"><i class="fa-solid fa-calendar"></i>
                                                <span><?=$item['year']?></span>
                                            </div>
                                            <div class="text-nowrap"><i class="fa-solid fa-dharmachakra"></i>
                                                <span><?=$item['drive']?></span>
                                            </div>
                                            <div class="text-nowrap"><i class="fa-solid fa-gears"></i>
                                                <span><?=$item['transmission']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } } } ?>
                        <div class="text-end">
                            <a href="<?=base_url("stock")?>" class="btn btn-secondary">View All</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</section>

<!--------------------------------------- stock section ends ------------------------------ -->



<!------------------------------------- our services start  -------------------->

<section class="our-services ">
    <div class="container mb-5">
        <div class="row px-1">

            <h2 class="mb-4">OUR SERVICES</h2>
            <div class="testimonial__slider owl-carousel">
                <div class="testimonial__item">
                    <div class="testimonial__item__author">
                        <div class="service-card d-flex align-items-center flex-column">
                            <img class="services-card__image" src="<?=base_url("public/assets/images/sales.jpg")?>"
                                alt="">
                            <h3>1. New and Used Car Sales</h3>
                            <p>We strive to make car shopping convenient. Explore our range, compare features, and
                                choose confidently.</p>
                            <a href="<?=base_url("about")?>">View details <i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__item__author">
                        <div class="service-card d-flex align-items-center flex-column">
                            <img class="services-card__image" src="<?=base_url("public/assets/images/finance.jpg")?>"
                                alt="">
                            <h3>2. Car Financing and Loans</h3>
                            <p>Offering flexible financing solutions to make car ownership simple and affordable.
                            </p>
                            <a href="<?=base_url("about")?>">View details <i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__item__author">
                        <div class="service-card d-flex align-items-center flex-column">
                            <img class="services-card__image" src="<?=base_url("public/assets/images/trading.jpg")?>"
                                alt="">
                            <h3>3. Car Trade-In and Valuation</h3>
                            <p>Trading in your car is easy with us. Use our online tool or visit for an in-person
                                evaluation.
                            </p>
                            <a href="<?=base_url("about")?>">View details <i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="testimonial__item__author">
                        <div class="service-card d-flex align-items-center flex-column">
                            <img class="services-card__image" src="<?=base_url("public/assets/images/autoparts.jpg")?>"
                                alt="">
                            <h3>4. Auto Parts and Accessories</h3>
                            <p>Access a full range of genuine parts and accessories to keep your car in top condition.
                            </p>
                            <a href="<?=base_url("about")?>">View details <i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>

<!------------------------------------- our services ends  -------------------->

<!------------------------------------- facts section start  -------------------->
<section class="facts mb-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="fact-card">
                    <i class="fa-solid fa-handshake text-center"></i>
                    <h2 class="text-center">5+ years</h2>
                    <p class="text-center">IN EXPORT CAR BUSINESS</p>
                </div>

            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="fact-card">
                    <i class="fa-solid fa-truck text-center"></i>
                    <h2 class="text-center"> 2,000+ vehicles</h2>
                    <p class="text-center">SOLD IN 2024</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="fact-card">
                    <i class="fa-solid fa-earth-americas text-center"></i>
                    <h2 class="text-center">10+ employees</h2>
                    <p class="text-center"> SPEAK DIFFERENT LANGUAGES</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------------- facts section ends  -------------------->


<!------------------------------------- brands section start  -------------------->
<section id="makes">
    <div class="makes-sub container">
        <h2 class="text-white pb-4 m-0">BROWSE CARS BY MAKE</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-lg-2 col-md-4">
                <a href="<?=base_url('make/Genesis')?>">
                    <div class="services-components text-center">
                        <img src="<?=base_url("public/assets/images/makes/Genesis-Logo-2015.png")?>" alt="makes">
                        <h5>GENESIS</h5>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-2 col-md-4">
                <a href="<?=base_url('make/Kia')?>">
                    <div class="services-components text-center">
                        <img src="<?=base_url("public/assets/images/makes/kia 1.png")?>" alt="makes">
                        <h5>KIA</h5>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-2 col-md-4">
                <a href="<?=base_url('make/Renault')?>">
                    <div class="services-components center text-center">
                        <img src="<?=base_url("public/assets/images/makes/Renault.png")?>" alt="makes">
                        <h5>RENAULT</h5>
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-2 col-md-4">
                <a href="<?=base_url('make/Hyundai')?>">
                    <div class="services-components text-center">
                        <img src="<?=base_url("public/assets/images/makes/hyundai.png")?>" alt="makes">
                        <h5>hyundai</h5>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-2 col-md-4">
                <a href="<?=base_url('make/Toyota')?>">
                    <div class="services-components text-center">
                        <img src="<?=base_url("public/assets/images/makes/toyota.png")?>" alt="makes">
                        <h5>TOYOTA</h5>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-2 col-md-4">
                <a href="<?=base_url('make/Honda')?>">
                    <div class="services-components text-center">
                        <img src="<?=base_url("public/assets/images/makes/honda.png")?>" alt="makes">
                        <h5>Honda</h5>
                    </div>
                </a>
            </div>

        </div>
    </div>

</section>
<!------------------------------------- brands section ends  -------------------->







<!------------------------------------- video starts  -------------------->
<section class="video py-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12 video-container">
                <iframe width="100%" height="440" src="https://www.youtube.com/embed/9kubHjOpXg4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-sm-12 video-container px-5">
                <div>
                    <h3 class="text-dark">Performance and Precision in Every Drive</h3>
                </div>
                <p>At Autocraft Korea lnc, we specialize in providing premium quality vehicles that combine cutting-edge
                    performance with reliable durability. Whether you're looking for an everyday commuter or a
                    high-performance machine, we've got you covered.</p>
                <p>

                    Our commitment to excellence extends beyond just selling cars – we ensure every vehicle is
                    inspected, tested, and certified to meet your expectations. Explore our diverse range of models,
                    from eco-friendly options to turbocharged engines built for thrill-seekers.
                </p>
                <p>
                    Feel the power, experience the luxury, and drive with confidence. Autocraft Korea lnc is here to
                    take your
                    driving experience to the next level.
                </p>
                <div class="mt-5">
                    <a href="" class="btn stylish-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!------------------------------------- video ends  -------------------->




<!------------------------------------- resources start  -------------------->

<section class="resources my-5">
    <div class="container py-4">
        <div class="row">
            <h2 class="text-center">RESOURCES</h2>
            <div class="col-12">

                <div class="accordion">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <div class="accordion-title">Top Models</div>
                        <div class="accordion-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>
                                        <a href="<?=base_url('make/Hyundai/model/Santa Fe')?>"> Hyundai Santa Fe</a>
                                    </p>
                                    <p>
                                        <a href="<?=base_url('make/Hyundai/model/Tucson')?>"> Hyundai Tucson</a>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p>
                                        <a href="<?=base_url('make/KIA/model/New Sportage')?>"> KIA Sportage</a>
                                    </p>
                                    <p>
                                        <a href="<?=base_url('make/GMC/model/ACADIA')?>"> GMC ACADIA</a>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p>
                                        <a href="<?=base_url('make/GMC/model/YUKON')?>"> GMC YUKON</a>
                                    </p>
                                    <p>
                                        <a href="<?=base_url('make/RENAULT/model/MEGANE')?>"> RENAULT MEGANE</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <div class="accordion-title">Inventory By Cc</div>
                        <div class="accordion-content">
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-around">
                                    <p>
                                        800cc
                                    </p>
                                    <p>
                                        1000cc
                                    </p>
                                    <p>
                                        1300cc
                                    </p>
                                </div>
                                <div class="col-md-6 d-flex justify-content-around">

                                    <p>
                                        1600cc
                                    </p>
                                    <p>
                                        1800cc
                                    </p>
                                    <p>
                                        2000cc
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <div class="accordion-title">Fuel</div>
                        <div class="accordion-content">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-between">
                                    <p>
                                        Gasoline
                                    </p>
                                    <p>
                                        Diesel
                                    </p>
                                    <p>
                                        Electric
                                    </p>
                                    <p>
                                        Hyoctane
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item">
                        <div class="accordion-title">How to Buy</div>
                        <div class="accordion-content">
                            <p><b>Step-01 Select a vehicle</b><br>We offer a wide selection of over 1,000 vehicles, with
                                our stock regularly updated. Each
                                vehicle listing includes detailed descriptions and pictures, with additional photos
                                available upon request after purchase, prior to scheduled shipment. If you can't find
                                the vehicle you're looking for in our current stock, please reach out via our inquiry
                                form or take advantage of our Auction Agent services.</p>

                            <p><b>Step-02 Request for free quotation</b><br>We are happy to respond to an unlimited
                                number of serious inquiries about any vehicle in our stock. Feel free to ask any
                                questions you may have regarding the vehicle or the purchase process. Upon request, we
                                can also provide a detailed invoice with a full estimate within three working days. This
                                invoice will include the total cost of the vehicle, shipping, and any additional charges
                                based on the chosen shipping method, along with payment details. Please be aware that
                                the quoted amount is valid for a limited time due to potential fluctuations in currency
                                exchange rates and shipping fees.</p>

                            <p><b>Step-03 Complete the payment</b><br>Once you've received your quotation and decide to
                                move forward with the purchase, we kindly ask that payment be completed within 5 working
                                days. While we offer various payment methods, we highly recommend using Telegraphic
                                Transfer (T/T) for a smooth transaction.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!------------------------------------- resouces ends  -------------------->


<?= $this->endSection() ?>



<?=$this->section('scripts')?>

<script type="text/javascript">
$(window).on("load", function() {
    var selected = '';

    var body = $("#body_type").val();
    if (!body == '') {
        $.ajax({
            url: "<?= base_url('get-body-types') ?>",
            type: "POST",
            success: function(response) {

                if (response) {
                    var data = response.split(",");
                    var body_type =
                        '<option selected="selected" value="">Select Body Type</option>';

                    for (var i = 0; i < data.length; i++) {
                        if (data[i] == body) {
                            selected = 'selected';
                        } else {
                            selected = '';
                        }
                        body_type += '<option value="' + data[i] + '" ' + selected + '>' + data[i] +
                            '</option>';
                    }
                    $("#body_type").html(body_type);
                    $('#body_type').niceSelect('update');
                }

            }
        });
    }



    var color = $("#exterior_color").val();
    if (!color == '') {
        $.ajax({
            url: "<?= base_url('get-colors') ?>",
            type: "POST",
            success: function(response) {

                if (response) {
                    var data = response.split(",");
                    var exterior_color = '<option selected="selected" value="">Colors</option>';

                    for (var i = 0; i < data.length; i++) {
                        if (data[i] == color) {
                            selected = 'selected';
                        } else {
                            selected = '';
                        }
                        exterior_color += '<option value="' + data[i] + '" ' + selected + '>' +
                            data[i] + '</option>';
                    }
                    $("#exterior_color").html(exterior_color);
                    $('#exterior_color').niceSelect('update');
                }

            }
        });
    }



    var trans = $("#transmission").val();
    if (!trans == '') {
        $.ajax({
            url: "<?= base_url('get-transmission') ?>",
            type: "POST",
            success: function(response) {

                if (response) {
                    var data = response.split(",");
                    var transmission = '<option selected="selected" value="">Transmission</option>';

                    for (var i = 0; i < data.length; i++) {
                        if (data[i] == trans) {
                            selected = 'selected';
                        } else {
                            selected = '';
                        }
                        transmission += '<option value="' + data[i] + '" ' + selected + '>' + data[
                            i] + '</option>';
                    }
                    $("#transmission").html(transmission);
                    $('#transmission').niceSelect('update');
                }

            }
        });
    }


    var condition = $("#veh_condition").val();
    if (!condition == '') {

        var data = ['New', 'Used'];
        //console.log(data);
        var veh_condition = '<option selected="selected" value="">Condition</option>';

        for (var i = 0; i < data.length; i++) {
            if (data[i] == condition) {
                selected = 'selected';
            } else {
                selected = '';
            }
            veh_condition += '<option value="' + data[i] + '" ' + selected + '>' + data[i] + '</option>';
        }
        $("#veh_condition").html(veh_condition);
        $('#veh_condition').niceSelect('update');


    }


    var handle = $("#drive").val();
    if (!handle == '') {

        var data = ['LHD', 'RHD'];
        var drive = '<option selected="selected" value="">Handle</option>';

        for (var i = 0; i < data.length; i++) {
            if (data[i] == handle) {
                selected = 'selected';
            } else {
                selected = '';
            }
            drive += '<option value="' + data[i] + '" ' + selected + '>' + data[i] + '</option>';
        }
        $("#drive").html(drive);
        $('#drive').niceSelect('update');


    }


    var year_from = $("#year_from").val();
    if (year_from != 2000) {

        var y_f = '';
        for (var i = 2000; i <= new Date().getFullYear(); i++) {
            if (i == year_from) {
                selected = 'selected';
            } else {
                selected = '';
            }
            y_f += "<option value='" + i + "' " + selected + ">" + i + "</option>";
        }

        $("#year_from").html(y_f);
        $('#year_from').niceSelect('update');

    }


    var year_to = $("#year_to").val();
    if (year_to != new Date().getFullYear()) {

        var y_e = '';
        for (var i = new Date().getFullYear(); i >= 2000; i--) {
            if (i == year_to) {
                selected = 'selected';
            } else {
                selected = '';
            }
            y_e += "<option value='" + i + "' " + selected + ">" + i + "</option>";
        }

        $("#year_to").html(y_e);
        $('#year_to').niceSelect('update');

    }


    var make = $("#vehicle-make").val();
    if (!make == '') {
        $.ajax({
            url: "<?= base_url('get-makes') ?>",
            type: "POST",
            success: function(response) {

                if (response) {
                    var data = response.split(",");
                    var make_select = '<option selected="selected" value="">Select Make</option>';

                    for (var i = 0; i < data.length; i++) {
                        if (data[i] == make) {
                            selected = 'selected';
                        } else {
                            selected = '';
                        }
                        make_select += '<option value="' + data[i].trim() + '" ' + selected + '>' +
                            data[i].toUpperCase() + '</option>';
                    }
                    $("#vehicle-make").html(make_select);
                    $('#vehicle-make').niceSelect('update');
                }

            }
        });

        $.ajax({
            url: "<?= base_url('get-models') ?>",
            type: "POST",
            data: {
                make: make
            },
            success: function(response) {

                if (response) {
                    var data = response.split(",");
                    var model_select = '<option selected="selected" value="">Select Model</option>';

                    for (var i = 0; i < data.length; i++) {
                        model_select += '<option value="' + data[i].trim() + '">' + data[i]
                            .toUpperCase() + '</option>';
                        model_html = '<li data-value="' + data[i].trim() + '" class="option">' +
                            data[i].toUpperCase() + '</li>';
                    }
                    $("#v_model").html(model_select);
                    $('#v_model').niceSelect('update');
                } else {
                    $("#v_model").html(
                        '<option selected="selected" value="">No Model Available</option>');
                    $('#v_model').niceSelect('update');
                }
            }
        });
    }

});






$(document).on("change", "#vehicle-make", function() {

    var make = $("#vehicle-make").val();

    if (!make == '') {

        $.ajax({
            url: "<?= base_url('get-models') ?>",
            type: "POST",
            data: {
                make: make
            },
            success: function(response) {

                if (response) {
                    var data = response.split(",");
                    var model_select = '<option selected="selected" value="">Select Model</option>';

                    for (var i = 0; i < data.length; i++) {
                        model_select += '<option value="' + data[i].trim() + '">' + data[i]
                            .toUpperCase() + '</option>';
                    }
                    $("#v_model").html(model_select);

                } else {
                    $("#v_model").html(
                        '<option selected="selected" value="">No Model Available</option>');

                }
            }
        });
    } else {
        $("#v_model").html('<option selected="selected" value="">Select Model</option>');

    }
});

$(document).on("change", "#vehicle-make2", function() {

    var make = $("#vehicle-make2").val();

    if (!make == '') {

        $.ajax({
            url: "<?= base_url('get-models') ?>",
            type: "POST",
            data: {
                make: make
            },
            success: function(response) {

                if (response) {
                    var data = response.split(",");
                    var model_select = '<option selected="selected" value="">Select Model</option>';

                    for (var i = 0; i < data.length; i++) {
                        model_select += '<option value="' + data[i].trim() + '">' + data[i]
                            .toUpperCase() + '</option>';
                    }
                    $("#v_model2").html(model_select);

                } else {
                    $("#v_model2").html(
                        '<option selected="selected" value="">No Model Available</option>');

                }
            }
        });
    } else {
        $("#v_model2").html('<option selected="selected" value="">Select Model</option>');

    }
});
</script>
<script>
// JavaScript to toggle the dropdown
document.querySelectorAll('.accordion-title').forEach(item => {
    item.addEventListener('click', () => {
        // Toggle active class for arrow direction
        item.classList.toggle('active');

        // Toggle display of content
        const content = item.nextElementSibling;
        if (content.style.display === 'block') {
            content.style.display = 'none';
        } else {
            content.style.display = 'block';
        }
    });
});

$('.testimonial__slider').owlCarousel({
    slidesPerView: 3,
    spaceBetween: 40,
    loop: true,
    freeMode: true,
    margin: 40,
    dots: false,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        760: {
            items: 3
        },
        1560: {
            items: 3
        },
        1960: {
            items: 3
        }
    }
});
</script>
<?= $this->endSection() ?>