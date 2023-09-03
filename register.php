<?php
session_start();
    include"admin/include/config.php";
     function fun(){
                return  header("location:login.php");
            }

    if(isset($_POST['submit']))
    {
    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $contactno=$_POST['contact'];
    $password=$_POST['confirmpassword'];

    $query=mysqli_query($con,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
    if($query)
        {
            
            echo "<script>alert('You are successfully register');</script>".fun();

        }
    else{
            echo "<script>alert('Not register something went worng');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>

    <!-- :::::::::: Favicon Icon ::::::::::  -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

<style type="text/css">
    .img-fluid {
  max-width: 100%;
  height: auto;
}
</style>

<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
    <!-- :::::::::: Css Files ::::::::::  -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!-- :::::::::: Start Header Section :::::::::: -->
      <?php  include"include/header.php";  ?>
 <!-- :::::::::: End Header Section :::::::::: -->

    <!-- :::::::::: Start Breadcomb Section :::::::::: -->
    <div id="breadcrumb-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="breadcrumb-title">REGISTER PAGE</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-area">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


<div class="register-area">
        <div class="container-fluid p-lr-80">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-register-wrapper mt-30">
                        <h4 class="title-secondary">Creat New Account</h4>
                        <p class="m-t-10">Already have an account? <a href="login.php">Log in instead!</a></p>

                        <form  method="POST" name="register" onSubmit="return valid();">
                            <div class="single-form">
                                <input name="fullname" type="text" placeholder="Full Name" required="">
                            </div>
                           
                            <div class="single-form">
                                <input name="email" type="email" placeholder="Email Address" required=" ">
                            </div>
                            <div class="single-form">
                                <input name="contact" type="text" placeholder="Contact" required="">
                            </div>
                            <div class="single-form">
                                <input id="p1" name="password" type="password" placeholder="Password" required="">
                            </div>
                            <div class="single-form">
                                <input id="p2" name="confirmpassword"  type="password" placeholder="Confirm Password">
                            </div>
                            
                           
                            <div class="single-form">
                                <button type="submit" name="submit"  class="box-btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<footer id="footer-section">
        <!-- Start Footer Top Area -->
        <div class="footer-contact-top">
            <div class="container-fluid p-lr-80">
                <div class="row">
                    <!-- Start Single Footer Contact -->
                    <div class="col-lg-3 col-md-3">
                        <div class="single-footer-contact-top-item">
                            <div class="footer-contact-icon animation-fadeInOut-X">
                                <i class="ion-paper-airplane"></i>
                            </div>
                            <div class="footer-contact-info">
                                <h5>FREE SHIPPING & DELIVERY</h5>
                                <span>Free on all products</span>
                            </div>
                        </div>
                    </div> <!-- End Single Footer Contact -->

                    <!-- Start Single Footer Contact -->
                    <div class="col-lg-3 col-md-3">
                        <div class="single-footer-contact-top-item">
                            <div class="footer-contact-icon animation-tada">
                                <i class="ion-ios-telephone"></i>
                            </div>
                            <div class="footer-contact-info">
                                <h5>+0123 456 789 : +0123 456 789</h5>
                                <span>Free Support Line!</span>
                            </div>
                        </div>
                    </div> <!-- End Single Footer Contact -->

                    <!-- Start Single Footer Contact -->
                    <div class="col-lg-3 col-md-3">
                        <div class="single-footer-contact-top-item">
                            <div class="footer-contact-icon animation-tada">
                                <i class="ion-email"></i>
                            </div>
                            <div class="footer-contact-info">
                                <h5>test@demo.com</h5>
                                <span>Orders Support!</span>
                            </div>
                        </div>
                    </div> <!-- End Single Footer Contact -->

                    <!-- Start Single Footer Contact -->
                    <div class="col-lg-3 col-md-3">
                        <div class="single-footer-contact-top-item">
                            <div class="footer-contact-icon animation-rotate360">
                                <i class="ion-android-time"></i>
                            </div>
                            <div class="footer-contact-info">
                                <h5>MON - FRI / 8:00 - 18:00</h5>
                                <span>Working Days/Hours!</span>
                            </div>
                        </div>
                    </div> <!-- End Single Footer Contact -->

                </div>
            </div>
        </div>
        <!-- End Footer Top Area -->

        <!-- Start Footer Middle Area -->
        <div class="footer-middle-area">
            <div class="container-fluid p-lr-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget footer-middle-contact-about">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo_footer.png" alt=""></a>
                            </div>
                            <p>We are a team of designers and developers that create high quality Magento, Prestashop,
                                Opencart.</p>
                            <div class="footer-middle-contact-info">
                                <h6>Contact info:</h6>
                                <span>169-C, Technohub, Dubai Silicon Oasis.</span>
                            </div>
                            <ul class="footer-social-link">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fas fa-rss"></i></a></li>
                                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="footer-widget footer-middle-nav">
                                    <h5 class="footer-widget-title">PRODUCTS</h5>
                                    <ul class="footer-nav">
                                        <li><a href="">Prices Drop</a></li>
                                        <li><a href="">New Products</a></li>
                                        <li><a href="">Best Sales</a></li>
                                        <li><a href="">Contact Us</a></li>
                                        <li><a href="">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="footer-widget footer-middle-nav">
                                    <h5 class="footer-widget-title">OUR COMPANY</h5>
                                    <ul class="footer-nav">
                                        <li><a href="">Delivery</a></li>
                                        <li><a href="">Legal Notice</a></li>
                                        <li><a href="">Secure payment</a></li>
                                        <li><a href="">Sitemap</a></li>
                                        <li><a href="">Stores</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="footer-widget footer-middle-nav">
                                    <h5 class="footer-widget-title">YOUR ACCOUNT</h5>
                                    <ul class="footer-nav">
                                        <li><a href="">Addresses</a></li>
                                        <li><a href="">Credit slips</a></li>
                                        <li><a href="">Orders</a></li>
                                        <li><a href="">Personal info</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Middle Area -->

        <!-- End Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container-fluid p-lr-80">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="news-letter-subscriprion">
                            <h5>SIGN UP TO NEWSLETTER</h5>
                            <form action="#" class="news-letter-subs-form" method="POST">
                                <input type="email" name="news-email" id="news-email" placeholder="Your email address"
                                    required>
                                <button class="box-btn" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-card text-right">
                            <a href=""><i class="fab fa-cc-paypal"></i></a>
                            <a href=""><i class="fab fa-cc-discover"></i></a>
                            <a href=""><i class="fab fa-cc-mastercard"></i></a>
                            <a href=""><i class="fab fa-cc-visa"></i></a>
                        </div>
                        <div class="copy-right-text text-right">
                            <span>Copyright <a href="https://hasthemes.com">HasThemes</a>. All Rights Reserved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Bottom Area -->
    </footer>


    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- :::::::::: Javascript Files, jQuery Vendor Plugins ::::::::::  -->
    <!-- jQuery Vendors JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

      <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/quantity-btn.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.slicknav.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <!-- jQuery main JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/d404c27b1c.js"></script>
</body>

</html>