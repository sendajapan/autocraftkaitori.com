<?= $this->extend('template') ?>


<?= $this->section('content') ?>


<!-- hero section start  -->
<section class="top_banner position-relative overflow-hidden">


    <div class="container text-center">
        <div class="row">
            <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
                <h2 class="page-title display-3">Stock</h2>
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="<?=base_url()?>">Home</a>
                    <span class="breadcrumb-item active" aria-current="page">Stock</span>
                </nav>
            </div>
        </div>
    </div>


</section>

<section id="search-page" >


    <div class="container search-block">

        <h2 class="text-center mb-4"> <span class="text-p"> Search For Trucks </span></h2>


  



            <form action="<?=base_url('stock')?>" method="post" class="row form-group flex-wrap p-3">
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 p-0">
                <label for="vehicle-make">Manufacturer</label>
                <div class="input-group ">
                    <select name="make" id="vehicle-make" class="form-select form-control">
                        <option selected value=""> Please Select</option>
                        <?php if($makes){
                                        foreach($makes as $item){ ?>
                        <option value="<?=$item?>"><?=$item?></option>
                        <?php } } ?>

                    </select>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 p-0">
                <label for="v_model">Model</label>
                <div class="input-group ">
                    <select name="model" id="v_model" class="form-select form-control">
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
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 p-0">
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
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 p-0">
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
            <div class="col-12 col-md-6 col-lg-2 mt-lg-0 p-0">
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



            
        <div class=" " style="width:100%">
            <div class="d-grid" style="width:100%">
                <input type="submit" name="submit" value="Search For Truck" class="btn btn-secondary search-page-btn ">
            </div>
        </div>
        
    </form>
    </div>

</section>


<section id="cars" class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <div class="stock-filter d-flex justify-content-between mb-4">

                    <div class="tab-bar">
                        <label for="per_page" class="text-white">Show On Page:</label>
                        <select id="per_page" class="fiter">
                            <option value="20" <?php if(session()->per_page=='20'){echo 'selected';} ?>>20 Cars</option>
                            <option value="40" <?php if(session()->per_page=='40'){echo 'selected';} ?>>40 Cars</option>
                            <option value="80" <?php if(session()->per_page=='80'){echo 'selected';} ?>>80 Cars</option>
                        </select>
                    </div>

                    <div class="tab-bar">
                        <label for="sort_by" class="text-white">Sort By:</label>
                        <select id="sort_by" class="fiter">
                            <option value="year_d" <?php if(session()->sort_by=='year_d'){echo 'selected';} ?>>Year:
                                Desc</option>
                            <option value="year_a" <?php if(session()->sort_by=='year_a'){echo 'selected';} ?>>Year: Asc
                            </option>
                            <option value="mileage_d" <?php if(session()->sort_by=='mileage_d'){echo 'selected';} ?>>
                                Mileage: Desc</option>
                            <option value="mileage_a" <?php if(session()->sort_by=='mileage_a'){echo 'selected';} ?>>
                                Mileage: Asc</option>
                            <option value="vehicle_d" <?php if(session()->sort_by=='vehicle_d'){echo 'selected';} ?>>
                                Recent Additions</option>
                        </select>
                    </div>

                </div>

                <div class="d-flex justify-content-between mb-4"><span
                        class="fs-3 fw-bold"><?= $found.' Trucks Found'?></span></div>



                <div class="row stock-section">
                    <?php 
                if($stock){
                    foreach($stock as $item){    
                       
            ?>

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

                    <?php }  }else{ ?>

                    <img src="<?=base_url('public/assets/images/no_cars_search.png');?>" alt="No Cars Found">

                    <?php } ?>

                </div>

            </div>




        </div>


        <?php 
        if ($pager->getPageCount() > 1) : 
            echo $pager->links(); 
        endif    
        ?>

    </div>
</section>


<?= $this->endSection() ?>


<?=$this->section('scripts')?>

<script type="text/javascript">
$(document).on("change", "#per_page", function() {

    var per_page = $("#per_page").val();

    $.ajax({
        url: "<?= base_url('per-page') ?>",
        method: "POST",
        data: {
            per_page: per_page
        },
        dataType: "html",
        success: function() {
            location.reload();
        }

    });

});

$(document).on("change", "#sort_by", function() {

    var sort_by = $("#sort_by").val();

    $.ajax({
        url: "<?= base_url('sort-by') ?>",
        method: "POST",
        data: {
            sort_by: sort_by
        },
        dataType: "html",
        success: function() {
            location.reload();
        }

    });

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
</script>

<?= $this->endSection() ?>