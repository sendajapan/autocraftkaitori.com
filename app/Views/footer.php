<!-- Footer Section Starts -->
<section id="footer">

    <!-- <div class="footer-follow">
            <footer class="container d-flex justify-content-between align-items-center">
                    <h4 class="m-0">Follow Us On</h4>
                    <div>
                        <a class="me-2"><img src="<?=base_url('public/assets/images/x.png')?>" class="pe-2" alt="image"></a>
                        <a class="me-2"><img src="<?=base_url('public/assets/images/facebook.png')?>" class="pe-2" alt="image"></a>
                        <a class="me-2"><img src="<?=base_url('public/assets/images/insta.png')?>" class="pe-2" alt="image"></a>
                    </div>
            </footer>
        </div> -->
    <div class="container footer-container">
        <footer class="row footer-main">

            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="<?=base_url()?>"><img style="width:280px;" src="<?=base_url("public/assets/images/Group 3412.png")?>" alt="image"></a>
                <div class="footer-contact-info ps-1 mt-2">
                    <p>Trading in your current vehicle has never been easier. Use our online valuation tool to get an
                        instant estimate.</p>
                    <!-- <div><img src="<?=base_url('public/assets/images/email.png')?>" class="pe-2" alt="image"><span>autohaussac@gmail.com</span></div>
                        <div><img src="<?=base_url('public/assets/images/phone.png')?>" class="pe-2" alt="image"><span>+56-988099163</span></div>
                        <div><img src="<?=base_url('public/assets/images/location.png')?>" class="pe-2" alt="image"><span class="d-inline-flex">Av.Circunvalacion. Zona Franca<br> Durban - South Africa</span></div> -->
                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <h4>Quick Links</h4>
                <ul class="footer-nav list-unstyled ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?=base_url()?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('stock')?>">Stock</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('about')?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('testimonials')?>">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('contact')?>">Contact Us</a>
                    </li>
                </ul>
            </div>



            <div class="col-lg-3 col-md-3 col-sm-6 footer-makes">
                <h4>Browse Cars</h4>
                <ul class="footer-nav list-unstyled ">
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" aria-current="page"
                            href="<?=base_url('make/Honda')?>">Honda</a>
                    </li>
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="<?=base_url('make/Toyota')?>">Toyota</a>
                    </li>
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="<?=base_url('make/Renault')?>">Renault</a>
                    </li>
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="<?=base_url('make/Hyundai')?>">Hyundai</a>
                    </li>
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="<?=base_url('make/Genesis')?>">Genesis</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6  col-sm-6 mb-5">
                <h4 class="text-center">Join to get offer from Autocraft Korea lnc </h4>
                <!-- <div class="email-container">
                
                            <div class="email-input">
                            <input type="text" id="email_id" name="email_id" placeholder="Enter Your Email">
                            <button type="submit" id="submit_subscribe"></button>
                        </div>
               
                </div> -->
                <div class="form-input d-flex flex-column">

                    <input type="text" id="email_id" name="email_id" placeholder="Write Your Email"
                        class="form-control ps-3">
                    <button type="submit" id="submit_subscribe" class="btn btn-secondary">Subscribe</button>
                    <div id="loader" class="d-none text-center mt-3">
                        <div class="spinner-border text-success" role="status"></div>
                    </div>
                    <h6 id="alert_msg" class="d-none alert text-center"></h6>
                </div>
            </div>

            <!-- <div class="col-lg-2 col-md-6 ">
                <div class="social-container">
                    <a href="https://www.facebook.com" class="social-button" target="_blank">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook--v1.png" alt="Facebook">
                        Facebook
                    </a>

                    <a href="https://www.linkedin.com" class="social-button" target="_blank">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" alt="LinkedIn">
                        LinkedIn
                    </a>

                    <a href="https://www.twitter.com" class="social-button" target="_blank">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/x.png" alt="Twitter">
                        X
                    </a>

                    <a href="https://www.instagram.com" class="social-button" target="_blank">
                        <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram">
                        Instagram
                    </a>
                </div>
            </div> -->

        </footer>
    </div>



    <!-- <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer> -->

    <div class="footer-bottom">
        <footer class="container d-flex flex-wrap justify-content-center align-items-center">
            <p class="m-0"><?=date('Y')?> © All rights reserved</p>
            <!-- <div>
                        <a href="">Terms</a>
                        <a href="">Privacy</a>
                        <a href="">Cookies</a>
                    </div> -->

        </footer>
    </div>
</section>


<script type="text/javascript">
<?php 

    $req = service('request');

    if($req->getPost('amount')){
            $price_array = explode("-", $req->getPost('amount'));
            $price = preg_replace('/[^0-9]/','',$price_array);
?>
var price_range_min = <?php echo $price[0]; ?>;
var price_range_max = <?php echo $price[1]; ?>;
<?php }else{ ?>
var price_range_min = 0;
var price_range_max = 10000000;
<?php } ?>

<?php if($req->getPost('cc')){
            $cc_array = explode("-", $req->getPost('cc'));
            $cc = preg_replace('/[^0-9]/','',$cc_array);
?>
var cc_range_min = <?php echo $cc[0]; ?>;
var cc_range_max = <?php echo $cc[1]; ?>;
<?php }else{ ?>
var cc_range_min = 0;
var cc_range_max = 10000;
<?php } ?>

<?php if($req->getPost('km')){
            $km_array = explode("-", $req->getPost('km'));
            $km = preg_replace('/[^0-9]/','',$km_array);
?>
var km_range_min = <?php echo $km[0]; ?>;
var km_range_max = <?php echo $km[1]; ?>;
<?php }else{ ?>
var km_range_min = 0;
var km_range_max = 1000000;
<?php } ?>
</script>



<!-- script ================================================== -->
<script src="<?=base_url('public/assets/js/jquery-1.11.0.min.js')?>"></script>
<script src="<?=base_url('public/assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('public/assets/js/jquery-ui.min.js')?>"></script>
<script src="<?=base_url('public/assets/js/jquery-ui-touch-punch.js')?>"></script>
<script src="<?=base_url('public/assets/js/plugins.js')?>"></script>
<script src="<?=base_url('public/assets/js/script.js')?>"></script>

<script src="<?=base_url('public/assets/js/owl.carousel.min.js')?>"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script> -->
<script src="<?=base_url('public/assets/js/iconify.min.js')?>"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script> -->
<script src="<?=base_url('public/assets/js/jquery.validate.min.js')?>"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
<script src="<?=base_url('public/assets/js/swiper-bundle.min.js')?>"></script>


<script src="https://www.google.com/recaptcha/api.js?render=6LenXaYqAAAAAOpYOl81pk5ADV9DZq2BpNNo-TNr"></script>
<script>
$(document).on('click', '#submit_subscribe', function(e) {

    e.preventDefault();
    var email_id = $('#email_id').val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(email_id)) {

        $("#loader").removeClass("d-none");

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
                        $("#loader").hide();
                        if (data.success) {
                            $('#alert_msg').removeClass('d-none');
                            $('#alert_msg').removeClass('text-danger');
                            $('#alert_msg').addClass('text-success');
                            $('#alert_msg').text(data.success_message).fadeIn();
                            $('#alert_msg').fadeOut(7000);
                        } else {
                            $('#alert_msg').removeClass('d-none');
                            $('#alert_msg').removeClass('text-success');
                            $('#alert_msg').addClass('text-danger');
                            $('#alert_msg').text(data.error_message).fadeIn();
                            $('#alert_msg').fadeOut(7000);
                        }
                    }
                });


            });
        });


    } else {
        $('#alert_msg').removeClass('d-none');
        $('#alert_msg').removeClass('text-success');
        $('#alert_msg').addClass('text-danger');
        $('#alert_msg').text('Please use correct email address');
        $('#alert_msg').fadeIn();
        $('#alert_msg').fadeOut(7000);
    }
});
</script>

</body>

</html>