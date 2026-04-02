<?= $this->extend('template') ?>


<?= $this->section('content') ?>

<?php session()->remove('filter'); ?>

<!-------------------------------------- hero section start  ----------------------->
<section id="hero" class="position-relative overflow-hidden">
    <div class="container hero-content">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="detail mb-4">
    <h1>Your Gateway to Global Truck Exports</h1>
    <p>Reliable trucks, transparent pricing and smooth overseas delivery handled end to end.</p>
    <button class="btn btn-primary">GET A FREE QUOTE</button>
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
<!-------------------------------------- hero section ends  ------------------------->


<!------------------------------------- Form section start  -------------------------->
<section id="search">


    <div class="container search-block">

        <h2 class=" mb-2 text-center text-md-start">Search <span class="text-primary"> Trucks </span></h2>


        <form action="<?=base_url('stock')?>" method="post" class="row form-group flex-wrap px-3" id="form2">
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 px-3">
                <label for="vehicle-make2">Manufacturer</label>
                <div class="input-group ">
                    <select name="make" id="vehicle-make2" class="form-select form-control">
                        <option selected value=""> Please Select</option>
                        <?php if($makes){
                                        foreach($makes as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>

                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 px-3">
                <label for="v_model2">Model</label>
                <div class="input-group ">
                    <select name="model" id="v_model2" class="form-select form-control">
                        <option value="">Please Select</option>
                    </select>

                </div>
            </div>
            <!-- <div class="col-12 col-md-6 col-lg-4 mt-lg-0">

                <div class="input-group ">
                    <select id="veh_condition" name="veh_condition" class="form-select form-control" id="vehicle">
                        <option selected>Condition</option>
                        <?php foreach($veh_condition as $item){
                                    if($item!=""){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div> -->
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 px-3">
           <label for="body_type">Body Type</label>
                <div class="input-group ">
                    <select id="body_type" name="body_type" class="form-select form-control">
                        <option value="">Please Select</option>
                        <?php if($body_types){
                                        foreach($body_types as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 px-3">
            <label for="transmission">Transmission</label>
                <div class="input-group ">
                    <select id="transmission" name="transmission" class="form-select form-control">
                        <option value="">Please Select</option>
                        <?php if($transmissions){
                                        foreach($transmissions as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 px-3">
            <label for="exterior_color">Color</label>
                <div class="input-group ">
                    <select id="exterior_color" name="exterior_color" class="form-select form-control">
                        <option value=""> Please Select</option>
                        <?php if($colors){
                                        foreach($colors as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div>
            <!-- <div class="col-12 col-md-6 col-lg-4 mt-lg-0">
                <div class="input-group ">
                    <select id="fuel" name="fuel" class="form-select form-control">
                        <option value=""> Fuel</option>
                        <?php if($fuels){
                                        foreach($fuels as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>
                    </select>

                </div>
            </div> -->

            <!-- 
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0">

                <div class="input-group">

                    <select id="year_from" name="year_from" class="form-select form-control">
                        <?php for($y=2000; $y<=date("Y"); $y++){ ?>
                        <option <?= ($request->getPost('year_from')==$y) ? "selected": "" ?> value="<?=$y?>">Year From <?=$y?>
                        </option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-lg-0">

                <div class="input-group">

                    <select id="year_to" name="year_to" class="form-select form-control">
                        <?php for($y=date("Y"); $y>=2000; $y--){ ?>
                        <option <?= ($request->getPost('year_to')==$y) ? "selected": "" ?> value="<?=$y?>">Year To <?=$y?>
                        </option>
                        <?php } ?>
                    </select>

                </div>
            </div> -->

            <!-- <div class="ps-3 col-12 col-md-6 col-lg-4 mt-4 mt-lg-0 home-range-slider">
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
            <!-- <div class="ps-3 col-12 col-md-6 col-lg-4 mt-4 mt-lg-0 home-range-slider">
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



            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 ">
                <div class="d-grid" style="margin-top:11px">
                    <input type="submit" name="submit" value="Search Truck" class="btn btn-secondary search-btn">
                </div>
            </div>

        </form>


    </div>

</section>
<!------------------------------------- form section ends  ---------------------------->


<!------------------------------------ Vehicles Type section start---------------------->
<section id="vehicle-types">
    <div class="container">
        <div class="vehicle-types-header d-flex justify-content-between align-items-center mb-4">
            <h3 class="m-0 vehicle-types-title">VEHICLES TYPE</h3>
            <a href="<?=base_url('stock')?>" class="type-show-all-link">Show All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="vehicle-types-wrapper">
            <a href="<?=base_url('stock?body_type=Wing')?>" class="vehicle-type-btn">
                <span class="vehicle-icon">
                    <img src="<?=base_url('public/assets/images/image 686.png')?>" alt="Wing">
                </span>
                <span class="vehicle-label">WING</span>
            </a>
            <a href="<?=base_url('stock?body_type=Dump')?>" class="vehicle-type-btn">
                <span class="vehicle-icon">
                    <img src="<?=base_url('public/assets/images/image 687.png')?>" alt="Dump">
                </span>
                <span class="vehicle-label">DUMP</span>
            </a>
            <a href="<?=base_url('stock?body_type=Flatbed')?>" class="vehicle-type-btn">
                <span class="vehicle-icon">
                    <img src="<?=base_url('public/assets/images/image 687.png')?>" alt="Flatbed">
                </span>
                <span class="vehicle-label">FLATBED</span>
            </a>
            <a href="<?=base_url('stock?body_type=Mixer')?>" class="vehicle-type-btn">
                <span class="vehicle-icon">
                    <img src="<?=base_url('public/assets/images/image 689.png')?>" alt="Mixer">
                </span>
                <span class="vehicle-label">MIXER</span>
            </a>
            <a href="<?=base_url('stock?body_type=Reg+Truck')?>" class="vehicle-type-btn">
                <span class="vehicle-icon">
                    <img src="<?=base_url('public/assets/images/image 690.png')?>" alt="Reg Truck">
                </span>
                <span class="vehicle-label">REG TRUCK</span>
            </a>
        </div>
    </div>
</section>
<!------------------------------------ Vehicles Type section ends ----------------------->


<!--------------------------------------- stock section start ---------------------------->
<section id="stock" >

    <div class="container mt-5">
        <div class="row mt-1">

            <div class="col-lg-12 col-md-12 stockbar">
                <div class="container new-arrivals mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <h2 class="m-0">New Arrivals</h2>
                        <a href="<?=base_url('stock')?>" class="view-all-link">View All <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <?php if($new_arrivals){foreach($new_arrivals as $item){ ?>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card vehicle-card rounded-3">
                                <div class="card-body p-0">
                                    <!-- Product Number Header -->
                                    <div class="product-number-header">
                                        Product Number: <b> <?= $item['veh_id'] ?></b>
                                    </div>
                                    <!-- Image -->
                                    <a class="figure" target="_blank" href="<?= base_url('car/'.$item['slug']) ?>">
                                        <?php if($item['featured_image']){ ?>
                                        <img src="<?=$item['featured_image']?>" class="card-img-top vehicle-card-img"
                                            alt="<?= $item['make'] ?> <?= $item['model'] ?>">
                                        <?php }else{ ?>
                                        <img src="<?=base_url("public/assets/images/test.webp")?>" class="card-img-top vehicle-card-img"
                                            alt="...">
                                        <?php } ?>
                                    </a>
                                    <!-- Vehicle Info -->
                                    <div class="vehicle-card-content">
                                        <h4 class="vehicle-title m-0 px-0 px-sm-1"><?= $item['make'] ?> <?= $item['model'] ?> <?= $item['year'] ?? '' ?> <?= $item['exterior_color'] ?? '' ?></h4>
                                        <p class="vehicle-dimensions text-start text-md-center">Length 625 x Width 225 x Height 333</p>
                                        
                                        <!-- Specs Row -->
                                        <div class="vehicle-specs">
                                            <div class="spec-item">
                                                <span class="spec-label">Mileage</span>
                                                <span class="spec-value"><?= ($item['mileage']) ? number_format($item['mileage']).' KM' : '-'; ?></span>
                                            </div>
                                            <div class="spec-item">
                                                <span class="spec-label">Horsepower</span>
                                                <span class="spec-value"><?= $item['cc'] ?? '-' ?></span>
                                            </div>
                                            <div class="spec-item">
                                                <span class="spec-label">Transmission</span>
                                                <span class="spec-value"><?= $item['transmission'] ?? 'F6' ?></span>
                                            </div>
                                        </div>
                                        
                                        <!-- Price and View Details -->
                                        <div class="vehicle-footer">
                                            <div class="vehicle-price">¥<?= isset($item['price']) ? number_format($item['price']) : 'ASK' ?></div>
                                            <a href="<?= base_url('car/'.$item['slug']) ?>" class="view-details-link">View Details <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>

                </div>

                <div class="container clearance">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <h2 class="m-0">Clearance</h2>
                        <a href="<?=base_url('stock')?>" class="view-all-link">View All <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="clearance-carousel owl-carousel">
                        <?php if($new_arrivals){foreach($new_arrivals as $key => $item){ if($key<8){?>
                        <div class="item">
                            <div class="card vehicle-card rounded-3">
                                <div class="card-body p-0">
                                    <!-- Product Number Header -->
                                    <div class="product-number-header">
                                        Product Number: <?= $item['veh_id'] ?>
                                    </div>
                                    <!-- Image -->
                                    <a class="figure" target="_blank" href="<?= base_url('car/'.$item['slug']) ?>">
                                        <?php if($item['featured_image']){ ?>
                                        <img src="<?=$item['featured_image']?>" class="card-img-top vehicle-card-img"
                                            alt="<?= $item['make'] ?> <?= $item['model'] ?>">
                                        <?php }else{ ?>
                                        <img src="<?=base_url("public/assets/images/test.webp")?>" class="card-img-top vehicle-card-img"
                                            alt="...">
                                        <?php } ?>
                                    </a>
                                    <!-- Vehicle Info -->
                                    <div class="vehicle-card-content">
                                        <h4 class="vehicle-title"><?= $item['make'] ?> <?= $item['model'] ?> <?= $item['year'] ?? '' ?> <?= $item['exterior_color'] ?? '' ?></h4>
                                        <p class="vehicle-dimensions text-start text-md-center">Length 625 x Width 225 x Height 333</p>
                                        
                                        <!-- Specs Row -->
                                        <div class="vehicle-specs">
                                            <div class="spec-item">
                                                <span class="spec-label">Mileage</span>
                                                <span class="spec-value"><?= ($item['mileage']) ? number_format($item['mileage']).' KM' : '-'; ?></span>
                                            </div>
                                            <div class="spec-item">
                                                <span class="spec-label">Horsepower</span>
                                                <span class="spec-value"><?= $item['cc'] ?? '-' ?></span>
                                            </div>
                                            <div class="spec-item">
                                                <span class="spec-label">Transmission</span>
                                                <span class="spec-value"><?= $item['transmission'] ?? 'F6' ?></span>
                                            </div>
                                        </div>
                                        
                                        <!-- Price and View Details -->
                                        <div class="vehicle-footer">
                                            <div class="vehicle-price">¥<?= isset($item['price']) ? number_format($item['price']) : 'ASK' ?></div>
                                            <a href="<?= base_url('car/'.$item['slug']) ?>" class="view-details-link">View Details <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<!--------------------------------------- stock section ends --------------------------->


<!------------------------------------- brands section start  ------------------------->
<section id="makes" class="">
    <div class="container">
        <div class="makes-h d-flex justify-content-between align-items-center w-80">
            <h2 class="ms-0 ms-md-5 text-white">Browse Trucks by Make</h2>
            <a href="<?=base_url('stock')?>" class="show-all-link text-white me-0 me-md-5 ">Show All Models <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="d-flex justify-content-center">
            <div class="makes-carousel owl-carousel">
                <div class="item">
                    <a href="<?=base_url('make/Genesis')?>">
                        <div class="make-card">
                            <img src="<?=base_url("public/assets/images/makes/image 692.png")?>" alt="Genesis">
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="<?=base_url('make/Kia')?>">
                        <div class="make-card">
                            <img src="<?=base_url("public/assets/images/makes/image 691.png")?>" alt="Kia">
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="<?=base_url('make/Renault')?>">
                        <div class="make-card">
                            <img src="<?=base_url("public/assets/images/makes/image 693.png")?>" alt="Renault">
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="<?=base_url('make/Hyundai')?>">
                        <div class="make-card">
                            <img src="<?=base_url("public/assets/images/makes/image 694.png")?>" alt="Hyundai">
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="<?=base_url('make/Toyota')?>">
                        <div class="make-card">
                            <img src="<?=base_url("public/assets/images/makes/image 696.png")?>" alt="Toyota">
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="<?=base_url('make/Honda')?>">
                        <div class="make-card">
                            <img src="<?=base_url("public/assets/images/makes/honda.png")?>" alt="Honda">
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!------------------------------------- brands section ends  --------------------------->


<!---------------------------------------- about us starts  -------------------------->
<section class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-sm-12 about-content">
                <h2>About Us</h2>
                <h4>trusted exporter of high quality commercial trucks to overseas markets around the world</h4>
                <p>Our operations are rooted in transparency, quality control, and customer satisfaction. Every vehicle we offer is carefully selected, inspected and prepared for export to ensure it meets both Japanese standards and the specific requirements of our global clients. From heavy duty trucks and mixers to specialized commercial vehicles, we provide solutions that support businesses across construction, logistics and transportation industries.</p>
                <p>We work closely with buyers, dealers and business partners across multiple countries, offering clear communication, honest pricing, and dependable after-sales support.</p>
                <a href="<?=base_url('about')?>" class="btn read-more-btn">Read More</a>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 about-image text-end">
                <img src="<?=base_url('public/assets/images/about-img.png')?>" alt="About Us - Commercial Truck" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!---------------------------------------- about us ends  ----------------------------->


<!------------------------------------- purchase process start  ----------------------->
<section class="purchase-process">
    <div class="container">
        <h2 class="section-title">Purchase Process</h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 px-1">
                <div class="process-card">
                    <div class="process-image">
                        <img src="<?=base_url('public/assets/images/Image (9).png')?>" alt="Apply for an appraisal">
                    </div>
                    <div class="process-content">
                        <div class="process-number">01</div>
                        <h3 class="process-title text-center">Apply for an appraisal</h3>
                        <p class="process-desc">Please contact your sales representative or the Truck Division. You can contact us by email, phone, or fax, whichever method is most convenient for you.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 px-1">
                <div class="process-card">
                    <div class="process-image">
                        <img src="<?=base_url('public/assets/images/Image (10).png')?>" alt="On-site assessment">
                    </div>
                    <div class="process-content">
                        <div class="process-number">02</div>
                        <h3 class="process-title text-center">On-site assessment</h3>
                        <p class="process-desc">A local representative will visit you and assess your vehicle. Of course, it's free, so please feel free to contact us.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 px-1">
                <div class="process-card">
                    <div class="process-image">
                        <img src="<?=base_url('public/assets/images/Image (11).png')?>" alt="Proposal of amount">
                    </div>
                    <div class="process-content">
                        <div class="process-number">03</div>
                        <h3 class="process-title text-center">Proposal of amount</h3>
                        <p class="process-desc">A specialized department within Enefree will calculate and present a purchase price based on domestic and international demand.</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6 px-1">
                <div class="process-card">
                    <div class="process-image">
                        <img src="<?=base_url('public/assets/images/Image (12).png')?>" alt="Contract conclusion">
                    </div>
                    <div class="process-content">
                        <div class="process-number">04</div>
                        <h3 class="process-title text-center">Contract conclusion</h3>
                        <p class="process-desc">Once you agree to the proposed amount, we will proceed with the contract. We ensure a smooth and transparent process.</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6 px-1">
                <div class="process-card">
                    <div class="process-image">
                        <img src="<?=base_url('public/assets/images/Image (13).png')?>" alt="Vehicle collection">
                    </div>
                    <div class="process-content">
                        <div class="process-number">05</div>
                        <h3 class="process-title text-center">Vehicle collection</h3>
                        <p class="process-desc">We will arrange for the collection of your vehicle at a convenient time and location, ensuring a hassle-free experience.</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6 px-1">
                <div class="process-card">
                    <div class="process-image">
                        <img src="<?=base_url('public/assets/images/Image (14).png')?>" alt="Payment completion">
                    </div>
                    <div class="process-content">
                        <div class="process-number">06</div>
                        <h3 class="process-title text-center">Payment completion</h3>
                        <p class="process-desc">Payment will be completed promptly after vehicle collection. We offer secure and reliable payment methods for your peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------------- purchase process ends  ------------------------>


<!------------------------------------- benefits of purchasing start  -------------------->
<section class="benefits-purchasing">
    <div class="container">
        <h2 class="section-title">Benefits of Purchasing</h2>
        <div class="row g-4">
            <!-- Card 1 - Collage image -->
            <div class="col-lg-4 col-md-6 px-2">
                <div class="benefit-card">
                    <div class="benefit-image-single">
                        <img src="<?=base_url('public/assets/images/Rectangle (3).png')?>" alt="Over 3,000 units traded annually">
                    </div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Over 3,000 units traded annually</h3>
                        <p class="benefit-desc">Enefree has accumulated experience buying and selling from many customers, so you can rest assured that you can leave it to us.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 - Single image -->
            <div class="col-lg-4 col-md-6 px-2">
                <div class="benefit-card">
                    <div class="benefit-image-single">
                        <img src="<?=base_url('public/assets/images/Rectangle (4).png')?>" alt="Logos and sign removal">
                    </div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Logos and sign must be removed</h3>
                        <p class="benefit-desc">At auto auctions overseas, you often see vehicles with company names still on them. Enefree will remove and repaint</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 - Single image -->
            <div class="col-lg-4 col-md-6 px-2">
                <div class="benefit-card">
                    <div class="benefit-image-single">
                        <img src="<?=base_url('public/assets/images/Rectangle (2).png')?>" alt="Accident Trucks">
                    </div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Accident Trucks, flood damaged</h3>
                        <p class="benefit-desc">If you have any problems with your vehicle, such as an unexpected accident, please feel free to contact Enefree.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------------- benefits of purchasing ends  -------------------->


<!------------------------------------- newsletter section start  ---------------------->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="newsletter-content">
                        <h2>Subscribe to Autocraft Kaitori</h2>
                        <p>Stay updated with new trucks, exclusive offers, and industry insights from Japan.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="newsletter-form">
                        <div class="email-input-wrapper">
                            <input type="email" id="newsletter_email" name="newsletter_email" placeholder="Your email address" class="newsletter-input">
                            <button type="submit" id="newsletter_submit" class="newsletter-btn">Sign Up</button>
                        </div>
                        <div id="newsletter_loader" class="d-none text-center mt-3">
                            <div class="spinner-border text-light" role="status"></div>
                        </div>
                        <h6 id="newsletter_alert" class="d-none alert text-center mt-3 mb-0"></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------------- newsletter section ends  ----------------------->




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
                    if ($.fn.niceSelect) {
                        $('#body_type').niceSelect('update');
                    }
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
                    if ($.fn.niceSelect) {
                        $('#exterior_color').niceSelect('update');
                    }
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
                    if ($.fn.niceSelect) {
                        $('#transmission').niceSelect('update');
                    }
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
        if ($.fn.niceSelect) {
            $('#veh_condition').niceSelect('update');
        }


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
        if ($.fn.niceSelect) {
            $('#drive').niceSelect('update');
        }


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
        if ($.fn.niceSelect) {
            $('#year_from').niceSelect('update');
        }

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
        if ($.fn.niceSelect) {
            $('#year_to').niceSelect('update');
        }

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
                    if ($.fn.niceSelect) {
                        $('#vehicle-make').niceSelect('update');
                    }
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

$('.clearance-carousel').owlCarousel({
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    freeMode: true,
    margin: 20,
    dots: false,
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        680: {
            items: 1
        },
        780: {
            items: 2
        },
        992: {
            items: 3
        },
        1299: {
            items: 3
        }
    }
});

$('.makes-carousel').owlCarousel({
    slidesPerView: 5,
    spaceBetween: 2,
    loop: true,
    freeMode: true,
    margin: 5,
    dots: false,
    nav: true,
    navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
    responsive: {
        0: {
            items: 2
        },
        480: {
            items: 2
        },
        768: {
            items: 3
        },
        992: {
            items: 4
        },
         1499: {
            items: 5
        }
    }
});

// Newsletter Subscription
$(document).on('click', '#newsletter_submit', function(e) {
    e.preventDefault();
    var email_id = $('#newsletter_email').val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(email_id)) {

        $("#newsletter_loader").removeClass("d-none");

        grecaptcha.ready(function() {
            grecaptcha.execute('6LenXaYqAAAAAOpYOl81pk5ADV9DZq2BpNNo-TNr', {
                action: 'submit'
            }).then(function(token) {

                $.ajax({
                    url: "<?=base_url('website/subscribtion')?>",
                    method: "POST",
                    data: {
                        email_id: email_id,
                        recaptcha_token: token
                    },
                    dataType: "json",
                    success: function(data) {
                        $("#newsletter_loader").hide();
                        if (data.success) {
                            $('#newsletter_alert').removeClass('d-none');
                            $('#newsletter_alert').removeClass('text-danger');
                            $('#newsletter_alert').addClass('text-success');
                            $('#newsletter_alert').text(data.success_message).fadeIn();
                            $('#newsletter_alert').fadeOut(7000);
                        } else {
                            $('#newsletter_alert').removeClass('d-none');
                            $('#newsletter_alert').removeClass('text-success');
                            $('#newsletter_alert').addClass('text-danger');
                            $('#newsletter_alert').text(data.error_message).fadeIn();
                            $('#newsletter_alert').fadeOut(7000);
                        }
                    }
                });
            });
        });

    } else {
        $('#newsletter_alert').removeClass('d-none');
        $('#newsletter_alert').removeClass('text-success');
        $('#newsletter_alert').addClass('text-danger');
        $('#newsletter_alert').text('Please use correct email address');
        $('#newsletter_alert').fadeIn();
        $('#newsletter_alert').fadeOut(7000);
    }
});
</script>
<?= $this->endSection() ?>