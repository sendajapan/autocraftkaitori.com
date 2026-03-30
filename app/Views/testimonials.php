
<?= $this->extend('template') ?>


<?= $this->section('content') ?>





    <!-- hero section start  -->
    <section class="top_banner position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                
                <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
                    <h2 class="page-title display-3">Testimonials</h2>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="<?=base_url()?>">Home</a>
                        <span class="breadcrumb-item active" aria-current="page">Reviews</span>
                    </nav>
                </div>
                
            </div>
        </div>
    </section>

    <section id="review">
        <div class=" services-sub container my-5 py-5">
            <h2 class="text-center">What our <span class="text-primary"> Customers Says </span></h2>

            <div class="row">

                <?php foreach ($testimonials as $item) { ?>

                <div class=" mt-5 col-md-4">
                    <div class="reviews-components p-5">
                        <iconify-icon icon="gridicons:quote" class="quote my-2"></iconify-icon>
                        <p>"<?= $item['testimonial_desc'] ?>"</p>
                        <div class="row mt-4">
                            <div class="user_pic col-md-3">
                                <img src="<?=base_url('public/assets/images/Sample_User_Icon.png')?>" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5><?= $item['testimonial_by'] ?></h5>
                                <div class="d-flex">
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                    <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </section>

    

  

    <!-- script ================================================== -->
   
  


<?= $this->endSection() ?>