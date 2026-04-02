<?= $this->extend('template') ?>


<?= $this->section('content') ?>


<!-- hero section start  -->
<section  class="top_banner position-relative overflow-hidden">
    
    <div class="container text-center">
        <div class="row">
            <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
                <h2 class="page-title display-3">Contact Us</h2>
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="<?=base_url()?>">Home</a>
                    <span class="breadcrumb-item active" aria-current="page">Contact</span>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="contact-us-wrap">
    <div class="bg container-fluid">
    </div>


    <div class="contact_section container">
        <div class="row">
            <div class="inquiry-item col-lg-8 col-md-12 col-sm-12">
                <h2 class="fs-3 text-capitalize ">Get In Touch With Us</h2>
                <p>Suggestion and review on how to serve you.<br>
                    We always listen, love your feedback.</p>
                <form id="contact__frm" method="POST" class="form-group flex-wrap">
                    <div class="col-lg-12 mb-1">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control ">
                    </div>
                    <div class="col-lg-12 mb-1">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control ">
                    </div>
                    <div class="col-lg-12 mb-1">
                        <label for="telephone">Contact No</label>
                        <input type="text" name="telephone" id="telephone" class="form-control">
                    </div>
                    <div class="col-lg-12 mb-1">
                        <label for="">How can we help? Write a message</label>
                        <textarea name="message" id="message" class="form-control ps-3" rows="4"></textarea>
                    </div>
                    <!-- <div class="col-lg-12 mb-1 d-flex align-items-baseline">
                        <input type="checkbox" class="form-control-box">
                        <p id="text" style="">Subscribe and get latest updates and offers by Email</p>
                    </div> -->

                    <div id="loader_contact" class="d-none text-center mt-3">  
                                    <div class="spinner-border text-success" role="status"></div>
                            </div>

                            <p id="success_msg" class="d-none alert alert-success">Messege sent successfully</p>
                            <p id="error_msg" class="d-none alert alert-danger">Something went wrong</p>

                    <div class="d-grid">
                        <button id="submit_btn" class="btn btn-primary btn-lg text-uppercase btn-rounded-none mt-3">Contact Us</button>
                    </div>
                </form>
            </div>

            <div class="contact-info col-lg-4 col-md-12 col-sm-12 d-flex flex-column justify-content-center">

                <!-- <div class="card">
                    <div class="d-flex align-items-center">
                        <img src="<?=base_url('public/assets/images/site.png')?>" class="img-fluid" alt="...">
                        <div class="contact-detail">
                                <h5>CONTACT INFORMATION</h5>
                                <p class="m-0">Av.Circunvalacion Mz"C" Sitio<br> 19-F. Zona Franca Durban -<br>South Africa</p>
                        </div>
                    </div>
                </div> -->

         

            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>




<?= $this->section('scripts') ?>

<script src="https://www.google.com/recaptcha/api.js?render=6LenXaYqAAAAAOpYOl81pk5ADV9DZq2BpNNo-TNr"></script>
<script>

        jQuery('#contact__frm').validate({
            rules:{
                name:{
                    required:true
                },
                email:{
                    required:true,
                    email:true
                },
                telephone:{
                    required:true
                },
                message:{
                    required:true
                }
            },messages:{
                name: {
                    required: "*Name is required"
                },
                email: {
                    required: "*Email is required",
                    email: "*Please enter valid email"
                },
                telephone: {
                    required: "*Telephone No is required"
                },
                message: {
                    required: "*Message is required"
                },
            },errorPlacement: function(error,element){
                error.insertBefore(element);
            },
            submitHandler: function(){

                grecaptcha.ready(function() {
                  grecaptcha.execute('6LenXaYqAAAAAOpYOl81pk5ADV9DZq2BpNNo-TNr', {action: 'submit'}).then(function(token) {
                      
                
                        $("#submit_btn").hide();
                        $("#loader_contact").removeClass("d-none");
                        var formData = new FormData(document.getElementById("contact__frm"));
                        formData.append( 'recaptcha_token', token );

                        $.ajax({
                            url: "<?=base_url('contact/submit')?>",
                            method: "POST",
                            data: formData,
                            processData:false,
                            contentType:false,
                            dataType: "json",
                            success:function(data){
                                if(data.success){
                                    $("#submit_btn").show();
                                    $("#loader_contact").addClass("d-none");
                                    $('#contact__frm').trigger('reset');
                                    $("#success_msg").removeClass("d-none");
                                    $('#success_msg').fadeIn();
                                    $('#success_msg').fadeOut(7000);
                                }else{
                                    $("#submit_btn").show();
                                    $("#loader_contact").addClass("d-none");
                                    $("#error_msg").removeClass("d-none");
                                    $('#error_msg').fadeIn();
                                    $('#error_msg').fadeOut(7000);
                                }
                            }
                        });


            });
        });

    }
});

</script>

<?= $this->endSection() ?>