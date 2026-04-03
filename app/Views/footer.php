<!-- Footer Section Starts -->
<section id="footer">
    <div class="footer-wrapper">
        <div class="container">
            <footer class="footer-main">
                <div class="row">
                    <!-- Logo and Description -->
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-about">
                        <a href="<?=base_url()?>">
                            <img src="<?=base_url("public/assets/images/Group 3412.png")?>" alt="Autocraft Kaitori" class="footer-logo">
                        </a>
                        <p class="footer-desc">
                            At Autocraft Kaitori, We Proudly Help You Choose The Perfect Truck, Handle Hassle-Free Export Paperwork, Ensure Secure Overseas Transactions And Provide Access To Comprehensive Shipping Services All Under One Roof. Visit Us Today And Change The Way You Buy And Sell Trucks Forever.
                        </p>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6 col-sm-6 footer-column">
                        <h4>Quick Links</h4>
                        <ul class="footer-links list-unstyled">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li><a href="<?=base_url('stock')?>">New Stock</a></li>
                            <li><a href="<?=base_url('about')?>">About Us</a></li>
                            <li><a href="<?=base_url('purchase-process')?>">Purchase Process</a></li>
                            <li><a href="<?=base_url('contact')?>">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Our Brands -->
                    <div class="col-lg-2 col-md-6 col-sm-6 footer-column">
                        <h4>Our Brands</h4>
                        <ul class="footer-links list-unstyled">
                            <li><a href="<?=base_url('make/Fusu')?>">Fusu</a></li>
                            <li><a href="<?=base_url('make/Isuzu')?>">Isuzu</a></li>
                            <li><a href="<?=base_url('make/Hino')?>">Hino</a></li>
                            <li><a href="<?=base_url('make/Honda')?>">Honda</a></li>
                            <li><a href="<?=base_url('make/Nissan')?>">Nissan</a></li>
                            <li><a href="<?=base_url('make/Mazda')?>">Mazda</a></li>
                        </ul>
                    </div>

                    <!-- Vehicles Type -->
                    <div class="col-lg-2 col-md-6 col-sm-6 footer-column">
                        <h4>Vehicles Type</h4>
                        <ul class="footer-links list-unstyled">
                            <li><a href="<?=base_url('body/SUV')?>">SUV / Crossover</a></li>
                            <li><a href="<?=base_url('body/Coupe')?>">Coupe</a></li>
                            <li><a href="<?=base_url('body/Flatbed')?>">Flatbed Truck</a></li>
                            <li><a href="<?=base_url('body/Dump')?>">Dump Truck</a></li>
                            <li><a href="<?=base_url('body/Tanker')?>">Tanker Truck</a></li>
                            <li><a href="<?=base_url('body/Tipper')?>">Tipper Truck</a></li>
                        </ul>
                    </div>

                    <!-- Connect With Us -->
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-column footer-social">
                        <h4>Connect With Us</h4>
                        <div class="social-icons">
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-x"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">autocraftkaitori <?=date('Y')?>. All rights reserved</p>
            </div>
        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
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