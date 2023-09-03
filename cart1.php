<?php
session_start();
    include"admin/include/config.php";

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
                    <h2 class="breadcrumb-title">Cart Page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-area">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>





<div id="checkout-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="shopping-cart-item">
                        <div class="shopping-cart-page-title">
                            <h4>SHOPPING CART</h4>
                        </div>
                        <div class="shopping-cart-product-block">
                            <ul class="cart-items">
                                <li class="cart-item alert alert-dismissible fade show">
                                    <div class="product-line-grid row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-3 col-6">
                                                    <div class="product-image media-middle">
                                                        <img class="img-fluid" src="assets/img/product-catagory-img-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 offset-lg-0 offset-xl-3 col-sm-9 col-6">
                                                    <div class="product-line-grid-body">
                                                        <div class="product-line-info">
                                                            <a href="" class="label">Chair</a>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="value">$16.51</span>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="size">Size: S</span>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="value">Color: Orange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 offset-md-0 offset-sm-3">
                                            <div class="row">
                                                <div class="col-md-7 col-sm-6 col-9">
                                                    <div class="product-price-quantity-block">
                                                        <div class="add-cart-product-quantity-block quantity">
                                                            <input class="quantity-sys" type="number" step="1" min="1" max="100" value="1"><div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
                                                        </div>
                                                        <span class="product-prices"><strong>$26.99</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-6 col-3 text-right">
                                                    <button class="dismiss-content " type="button" data-dismiss="alert">
                                                        <span aria-hidden="true"><i class="fas fa-trash"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item alert alert-dismissible fade show">
                                    <div class="product-line-grid row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-3 col-6">
                                                    <div class="product-image media-middle">
                                                        <img class="img-fluid" src="assets/img/product-catagory-img-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 offset-lg-0 offset-xl-3 col-sm-9 col-6">
                                                    <div class="product-line-grid-body">
                                                        <div class="product-line-info">
                                                            <a href="" class="label">Sofa</a>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="value">$25.00</span>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="size">Size: S</span>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="value">Color: Orange</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 offset-md-0 offset-sm-3">
                                            <div class="row">
                                                <div class="col-md-7 col-sm-6 col-9">
                                                    <div class="product-price-quantity-block">
                                                        <div class="add-cart-product-quantity-block quantity">
                                                            <input class="quantity-sys" type="number" step="1" min="1" max="100" value="2"><div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
                                                        </div>
                                                        <span class="product-prices"><strong>$50.00</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-6 col-3 text-right">
                                                    <button class="dismiss-content" type="button" data-dismiss="alert">
                                                        <span aria-hidden="true"><i class="fas fa-trash"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a href="index.php" class="continue-link">Continue shopping</a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="total-checkout-block">
                        <div class="checkout-item">
                            <div class="checkout-cost-block">
                                <div class="cart-summary" id="cart-subtotal-products">
                                    <span class="label">3 items</span>
                                    <span class="value">$72.01</span>
                                </div>
                                <div class="cart-summary" id="cart-subtotal-shipping">
                                    <span class="label">Shipping</span>
                                    <span class="value">Free</span>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-item">
                            <div class="checkout-cost-block">
                                <div class="cart-summary" id="cart-summary-line">
                                    <span class="label">Total (tax excl.)</span>
                                    <span class="value">$72.01</span>
                                </div>
                                <div class="cart-summary" id="cart-tax">
                                    <span class="label">Taxes</span>
                                    <span class="value">$0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-btn-link">
                            <a href="" class="box-btn">checkout</a>
                        </div>
                    </div>
                    <ul class="product-delivary-info">
                        <li><i class="fas fa-shield-alt"></i><span> SECURITY POLICY (EDIT WITH MODULE CUSTOMER REASSURANCE)</span></li>
                        <li><i class="fas fa-truck-moving"></i><span> DELIVERY POLICY (EDIT WITH MODULE CUSTOMER REASSURANCE)</span></li>
                        <li><i class="fas fa-exchange-alt"></i><span> RETURN POLICY (EDIT WITH MODULE CUSTOMER REASSURANCE)</span></li>
                    </ul>
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