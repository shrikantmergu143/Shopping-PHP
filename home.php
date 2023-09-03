
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kavir | Responsive eCommerce HTML Template</title>

    <!-- :::::::::: Favicon Icon ::::::::::  -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!-- :::::::::: Css Files ::::::::::  -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- :::::::::: Start Header Section :::::::::: -->
    <header id="header-section" class="header-section--home-3">
        <!--  Start Header Top  -->
        <div class="header-top-area">
            <div class="container-fluid  p-lr-80">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <!--  Start Header Top Info -->
                        <div class="header-top-info">
                            <div class="header-top-info-left">
                                <div class="header-phone">
                                    <i class="ion-ios-telephone"></i>
                                    Call Us : <a href="tel://+0123-456-789">+0123-456-789</a>
                                </div>
                                <div class="header-email">
                                    <i class="ion-android-drafts"></i>
                                    Email : <a href="mailto://demo@hasthemes.com">demo@hasthemes.com</a>
                                </div>
                            </div>
                            <div class="header-top-info-right header-top-info-right--home-3">
                                <div id="header-account">
                                    <select class="child-dropdown" onchange="location = this.value;">
                                        <option value="login.html">Log In</option>
                                        <option value="register.html">Sign Up</option>
                                        <option value="my-account.html">Account</option>
                                        <option value="cart.html">Cart</option>
                                        <option value="checkout.html">Checkout</option>
                                        <option value="compare.html">Compare</option>
                                        <option value="wishlist.html">Wishlist</option>
                                    </select>
                                </div>
                                <div id="header-currency">
                                    <select class="child-dropdown" onchange="location = this.value;">
                                        <option value="usd">USD</option>
                                        <option value="euro">EURO</option>
                                    </select>
                                </div>
                                <div id="header-lang">
                                    <select class="child-dropdown" onchange="location = this.value;">
                                        <option value="english">English</option>
                                        <option value="Banga">Bangla</option>
                                    </select>
                                </div>
                            </div>
                            <!--  Start Header Cart  -->
                            <div class="header-cart header-cart--home-3 orangered-bg ">
                                <button type="button" class="add_cart_open">
                                    <i class="ion-bag"></i>
                                    <span class="item_total"> 3 Items</span> : $72.01
                                </button>

                                <div class="header-cart-deatils">
                                    <ul class="header-item-add-cart">
                                        <li>
                                            <div class="header-add-cart-img">
                                                <a href="details.html"><img src="assets/img/product-catagory-img-1.jpg"
                                                        alt=""></a>
                                                <span class="header-product-quantity">1x</span>
                                            </div>
                                            <div class="header-add-cart-img-info">
                                                <a href="details.html"><span
                                                        class="header-add-cart-product-name">Chair</span></a>
                                                <span class="header-add-cart-product-price">$16.51</span>
                                                <span class="header-add-cart-product-size"><strong>Size:</strong>
                                                    S</span>
                                                <span class="header-add-cart-product-color"><strong>Color:</strong>
                                                    Black</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="header-add-cart-img">
                                                <a href="details.html"><img src="assets/img/product-catagory-img-2.jpg"
                                                        alt=""></a>
                                                <span class="header-product-quantity">2x</span>
                                            </div>
                                            <div class="header-add-cart-img-info">
                                                <a href="details.html"><span
                                                        class="header-add-cart-product-name">Sofa</span></a>
                                                <span class="header-add-cart-product-price">$50.00</span>
                                                <span class="header-add-cart-product-size"><strong>Size:</strong>
                                                    S</span>
                                                <span class="header-add-cart-product-color"><strong>Color:</strong>
                                                    Black</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="header-cart-infos">
                                        <div class="header-cart-left-info"><span>Subtotal</span></div>
                                        <div class="header-cart-right-info"><span>$66.51</span></div>
                                    </div>
                                    <div class="header-cart-infos">
                                        <div class="header-cart-left-info"><span>Shipping</span></div>
                                        <div class="header-cart-right-info"><span>Free</span></div>
                                    </div>
                                    <div class="header-cart-infos">
                                        <div class="header-cart-left-info"><span>Taxes</span></div>
                                        <div class="header-cart-right-info"><span>$5.50</span></div>
                                    </div>
                                    <div class="header-cart-infos">
                                        <div class="header-cart-left-info"><span>Total</span></div>
                                        <div class="header-cart-right-info"><span>$72.01</span></div>
                                    </div>
                                    <div class="border-separator"></div>
                                    <a href="checkout.html" class="cart-check-out-btn">Checkout</a>
                                </div>
                            </div> <!--  Start Header Cart  -->
                        </div> <!--  End Header Top Info  -->

                    </div>
                </div>
            </div>
        </div> <!--  Start Header Top  -->

        <!--  Start Header Sticky  -->
        <div class="header-sticky-area home--3 d-none d-lg-block">
            <div class="container-fluid p-lr-80">
                <div class="row align-items-center">

                    <!--  Start Header Logo  -->
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-md-12 col-xl-12 align-self-center">
                                <div class="header-logo header-logo__color">
                                    <a href="index.html">
                                        <img src="assets/img/home-3/logo.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!--  End Header Logo  -->
                    <div class="col-lg-9 d-lg-block d-none ">
                        <nav class="header-menu">
                            <ul class="menu-content">
                                <li class="active"><a href="#">Home <i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="position-static"><a href="#">Shop <i class="fas fa-chevron-down"></i></a>
                                    <ul class="mega-sub-menu d-flex flex-wrap">
                                        <li>
                                            <a class="menu-title" href="#">Shop Grid</a>
                                            <ul class="submenu-item">
                                                <li><a href="shop.html">Default Shop</a></li>
                                                <li><a href="shop-3-column.html">Grid Column 3</a></li>
                                                <li><a href="shop-4-column.html">Grid Column 4</a></li>
                                                <li><a href="shop-left-sidebar.html">Grid left sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Grid Right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="menu-title" href="#">Shop List</a>
                                            <ul class="submenu-item">
                                                <li><a href="shop-list.html">List</a></li>
                                                <li><a href="shop-list-left-sidebar.html">List Left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">List Right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="menu-title" href="#">Shop Single</a>
                                            <ul class="submenu-item">
                                                <li><a href="single-product.html">Single</a></li>
                                                <li><a href="single-product-variable.html">Variable</a></li>

                                                <li><a href="single-product-tabstyle2.html">Tabs 2</a></li>
                                                <li><a href="single-product-tabstyle3.html">Tabs 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="menu-title" href="#">Shop Single</a>
                                            <ul class="submenu-item">
                                                <li><a href="single-product-slider.html">Slider</a></li>
                                                <li><a href="single-product-gallery-left.html">Gallery Left sidebar</a>
                                                </li>
                                                <li><a href="single-product-gallery-right.html">Gallery Right
                                                        sidebar</a></li>
                                                <li><a href="single-product-sticky-left.html">Sticky Left sidebar</a>
                                                </li>
                                                <li><a href="single-product-sticky-right.html">Sticky Right sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="custom-banner">
                                            <a href="shop-4-column.html"><img src="assets/img/promo-img-wide-1.jpg"
                                                    alt="" class="img-responsive"></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="position-static">
                                    <a href="#">Custom Menu <i class="fas fa-chevron-down"></i></a>
                                    <ul class="mega-sub-menu">
                                        <li class="custom-menu">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="menu-block">
                                                        <h6 class="custom-title">Women is Clothes &amp; Fashion</h6>
                                                        <p>Shop women is clothing and accessories and get inspired by
                                                            the latest fashion trends.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="menu-block">
                                                        <h6 class="custom-title">Simple Style</h6>
                                                        <p>A new flattering style with all the comfort of our linen.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="menu-block">
                                                        <h6 class="custom-title">Easy Layers</h6>
                                                        <p>Endless styling possibilities in a collection full of
                                                            versatile pieces.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-banner">
                                                <a href="shop-4-column.html"><img src="assets/img/promo-img-wide-1.jpg"
                                                        alt="" class="img-responsive"></a>
                                            </div>
                                        </li>
                                    </ul> <!--  mega sub menu -->
                                </li>
                                <li><a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Blog Grid <i class="fas fa-chevron-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog List <i class="fas fa-chevron-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog Single <i class="fas fa-chevron-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-single-right-sidebar.html">Blog Single Right
                                                        Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--  Start Header Search  -->
                    <div class="col-lg-1 d-none d-lg-block text-right">
                        <button id="onclick-toogle-btn"><i class="ion-ios-search-strong"></i></button>
                        <div class="header-search-form" id="toogle-search">
                            <form action="#" method="post">
                                <input type="search" name="search" class="product-item-search"
                                    placeholder="Search our catalog">
                                <button type="submit" class="product-item-search-btn"><i
                                        class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div> <!--  End Header Search  -->
                </div>
            </div>
        </div> <!--  End Header Sticky  -->

        <!--  Start Mobile Middle Area -->
        <div class="header-mobile-area home--3 d-block d-lg-none m-tb-20">
            <div class="container-fluid p-lr-80">
                <div class="row align-items-center">
                    <!--  Start Header Logo  -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12 col-xl-12 align-self-center">
                                <div class="header-logo header-logo__color">
                                    <a href="index.html">
                                        <img src="assets/img/home-3/logo.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!--  End Header Logo  -->
                </div>
            </div>
        </div> <!--  End Mobile Middle Area -->

        <!-- Start Mobile device Menu area -->
        <div class="header-mobile-menu d-block d-lg-none">
            <div class="container-fluid p-lr-80">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <nav>
                                <ul class="mobile-menu">
                                    <li>
                                        <a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                            <li><a href="index-4.html">Home 04</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">CheckOut</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop Grid</a>
                                                <ul>
                                                    <li><a href="shop.html">Default Shop</a></li>
                                                    <li><a href="shop-3-column.html">Grid Column 3</a></li>
                                                    <li><a href="shop-4-column.html">Grid Column 4</a></li>
                                                    <li><a href="shop-left-sidebar.html">Grid Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-list.html">Shop List</a>
                                                <ul>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="single-product.html">Shop Single</a>
                                                <ul>
                                                    <li><a href="single-product.html">Single</a></li>
                                                    <li><a href="single-product-variable.html">Variable</a></li>
                                                    <li><a href="single-product-tabstyle2.html">Tab 2</a></li>
                                                    <li><a href="single-product-tabstyle3.html">Tab 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="single-product.html">Shop Single</a>
                                                <ul>
                                                    <li><a href="single-product-slider.html">Slider</a></li>
                                                    <li><a href="single-product-gallery-left.html">Gallery Left
                                                            Sidebar</a></li>
                                                    <li><a href="single-product-gallery-right.html">Gallery Right
                                                            Sidebar</a></li>
                                                    <li><a href="single-product-sticky-left.html">Sticky Left
                                                            Sidebar</a></li>
                                                    <li><a href="single-product-sticky-right.html">Sticky Right
                                                            Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="custom-banner">
                                                <a href="shop-4-column.html"><img src="assets/img/promo-img-wide-1.jpg"
                                                        alt="" class="img-responsive"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">Custom Menu</a>
                                        <ul>
                                            <li>
                                                <strong>Women Is Clothes & Fashion</strong>
                                                <p>Shop Women Is Clothing And Accessories And Get Inspired By The Latest
                                                    Fashion Trends.</p>
                                            </li>
                                            <li>
                                                <strong>Simple Style</strong>
                                                <p>A New Flattering Style With All The Comfort Of Our Linen.</p>
                                            </li>
                                            <li>
                                                <strong>Easy Layers</strong>
                                                <p>Endless Styling Possibilities In A Collection Full Of Versatile
                                                    Pieces.</p>
                                            </li>
                                            <li class="custom-banner">
                                                <a href="shop-4-column.html"><img src="assets/img/promo-img-wide-1.jpg"
                                                        alt="" class="img-responsive"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="#">Blog Grid</a>
                                                <ul>
                                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                                    </li>
                                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right
                                                            Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Blog List</a>
                                                <ul>
                                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                                    </li>
                                                    <li><a href="blog-list-right-sidebar.html">Blog List Right
                                                            Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Blog Single</a>
                                                <ul>
                                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left
                                                            Sidebar</a></li>
                                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right
                                                            Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Mobile device Menu area -->

        <div class="col-12 d-lg-none d-md-block align-self-center m-tb-20">
            <div class="header-search-form-sm">
                <form action="#" method="post">
                    <input type="search" name="search" class="product-item-search" placeholder="Search our catalog">
                    <button type="submit" class="product-item-search-btn"><i class="ion-ios-search-strong"></i></button>
                </form>
            </div>
        </div>
    </header> <!-- :::::::::: End Header Section :::::::::: -->


    <!-- :::::::::: Start Hero Slider Section :::::::::: -->
    <div id="hero-slider" class="m-b-30">
        <div class="owl-carousel hero-slider-slide hero-slider--3">
            <div class="single-hero-slider-item" style="background-image: url('assets/img/home-3/hero-slider-1.jpg');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 offset-md-1 col-sm-8 col-xs-10">
                            <div class="slider-content">
                                <h3 class="slider-heading-sub">A W 2016 - 17</h3>
                                <h1 class="slider-heading-primary">NEW COLLECTION WITH AMYRA.</h1>
                                <a href="shop.html" class="box-btn box-btn-lg orangered-bg-hover">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider-item" style="background-image: url('assets/img/home-3/hero-slider-2.jpg');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 offset-md-1 col-sm-8 col-xs-10">
                            <div class="slider-content">
                                <h3 class="slider-heading-sub">WOMEN’S STYLE 2017</h3>
                                <h1 class="slider-heading-primary">STYLISH GENUINE LEATHER BAG</h1>
                                <a href="shop.html" class="box-btn box-btn-lg orangered-bg-hover">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- :::::::::: End Hero Slider Section :::::::::: -->

    <!-- :::::::::: Start Promo Section :::::::::: -->
    <div id="promo-section" class="promo-section--3 ">
        <div class="container-fluid p-lr-80">
            <div class="row">

                <!--  Start Single Promo Item  -->
                <div class="custom-col custom-col--1">
                    <div class="single-promo-item">
                        <div class="promo-img promo-img-banner zoom-hover">
                            <a href="shop.html"> <img src="assets/img/home-3/promo-img-banner-1.jpg" alt=""> </a>
                        </div>
                    </div>
                </div> <!--  End Single Promo Item  -->

                <!--  Start Single Promo Item  -->
                <div class="custom-col custom-col--2">
                    <div class="single-promo-item">
                        <div class="promo-img promo-img-banner zoom-hover">
                            <a href="shop.html"> <img src="assets/img/home-3/promo-img-banner-2.jpg" alt=""> </a>
                        </div>
                    </div>
                    <div class="single-promo-item">
                        <div class="promo-img promo-img-banner zoom-hover">
                            <a href="shop.html"> <img src="assets/img/home-3/promo-img-banner-3.jpg" alt=""> </a>
                        </div>
                    </div>
                </div> <!--  End Single Promo Item  -->

                <!--  Start Single Promo Item  -->
                <div class="custom-col custom-col--3">
                    <div class="single-promo-item">
                        <div class="promo-img promo-img-banner zoom-hover">
                            <a href="shop.html"> <img src="assets/img/home-3/promo-img-banner-4.jpg" alt=""> </a>
                        </div>
                    </div>
                </div> <!--  End Single Promo Item  -->

            </div>
        </div>
    </div> <!-- :::::::::: End Promo Section :::::::::: -->

    <!-- :::::::::: Start Related Product Section :::::::::: -->
    <div id="our-product-catagory-section">
        <div class="container-fluid p-lr-80">
            <div class="row d-flex align-items-center m-b-25">
                <div class="col-md-4 col-12">
                    <h3 class="title-tertiary text-uppercase"> Our PRODUCTS</h3>
                </div>
                  <div class="col-md-8 col-12">                   
                    <ul class="product-filter-area product-filter__home-3 nav">
                        <li><a data-toggle="tab" href="#dress" class="active show">Dress</a></li>
                        <li><a data-toggle="tab" href="#furniture">Furniture</a></li>
                        <li><a data-toggle="tab" href="#cosmatics">Cosmatics</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div id="dress" class="dataTab-style2 overlaps-slickSlider  mini-slide arrow-fix-25 tab-pane fade show active">
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-3/homepage-3-product-1.jpg" alt="">
                                        <img src="assets/img/home-3/homepage-3-product-2.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Printed Dress</a>
                                    </h4>
                                    <span class="product-catagory-price">$22.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-3/homepage-3-product-3.jpg" alt="">
                                        <img src="assets/img/home-3/homepage-3-product-4.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Jeans Dress</a>
                                    </h4>
                                    <span class="product-catagory-price">$30.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-3/homepage-3-product-5.jpg" alt="">
                                        <img src="assets/img/home-3/homepage-3-product-6.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html" class="product-catagory-title orangered-color-hover">Pink
                                            Dress</a>
                                    </h4>
                                    <span class="product-catagory-price">20.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-3/homepage-3-product-2.jpg" alt="">
                                        <img src="assets/img/home-3/homepage-3-product-1.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html" class="product-catagory-title orangered-color-hover">Long
                                            Dress</a>
                                    </h4>
                                    <span class="product-catagory-price">$45.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-3/homepage-3-product-4.jpg" alt="">
                                        <img src="assets/img/home-3/homepage-3-product-3.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Short Dress</a>
                                    </h4>
                                    <span class="product-catagory-price">$22.99</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-3/homepage-3-product-6.jpg" alt="">
                                        <img src="assets/img/home-3/homepage-3-product-5.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Fashion Dress</a>
                                    </h4>
                                    <span class="product-catagory-price">$105.99</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                        </div>
                        <div id="furniture" class="dataTab-style2 overlaps-slickSlider mini-slide arrow-fix-25  tab-pane fade ">
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/product-catagory-img-1.jpg" alt="">
                                        <img src="assets/img/product-catagory-hover-img-2.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Chair </a>
                                    </h4>
                                    <span class="product-catagory-price">$26.99</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/product-catagory-img-3.jpg" alt="">
                                        <img src="assets/img/product-catagory-hover-img-4.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Styles Sofa</a>
                                    </h4>
                                    <span class="product-catagory-price">$22.99</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/product-catagory-img-4.jpg" alt="">
                                        <img src="assets/img/product-catagory-hover-img-5.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Single Sofa</a>
                                    </h4>
                                    <span class="product-catagory-price">$35.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/product-catagory-img-6.jpg" alt="">
                                        <img src="assets/img/product-catagory-hover-img-5.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Wooden Furniture</a>
                                    </h4>
                                    <span class="product-catagory-price">$50.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/product-catagory-img-4.jpg" alt="">
                                        <img src="assets/img/product-catagory-hover-img-3.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Large Sofa</a>
                                    </h4>
                                    <span class="product-catagory-price">$55.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/product-catagory-img-3.jpg" alt="">
                                        <img src="assets/img/product-catagory-hover-img-3.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Modern Chair</a>
                                    </h4>
                                    <span class="product-catagory-price">$35.99</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Single Product Item -->
                        </div>
                        <div id="cosmatics" class="dataTab-style2 overlaps-slickSlider mini-slide arrow-fix-25  tab-pane fade ">
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-2/homepage-2-product-1.jpg" alt="">
                                        <img src="assets/img/home-2/homepage-2-product-2.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Chair </a>
                                    </h4>
                                    <span class="product-catagory-price">$26.99</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-2/homepage-2-product-3.jpg" alt="">
                                        <img src="assets/img/home-2/homepage-2-product-4.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Styles Sofa</a>
                                    </h4>
                                    <span class="product-catagory-price">$22.99</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-2/homepage-2-product-5.jpg" alt="">
                                        <img src="assets/img/home-2/homepage-2-product-6.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Single Sofa</a>
                                    </h4>
                                    <span class="product-catagory-price">$35.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-2/homepage-2-product-7.jpg" alt="">
                                        <img src="assets/img/home-2/homepage-2-product-8.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Wooden Furniture</a>
                                    </h4>
                                    <span class="product-catagory-price">$50.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-2/homepage-2-product-9.jpg" alt="">
                                        <img src="assets/img/home-2/homepage-2-product-10.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Large Sofa</a>
                                    </h4>
                                    <span class="product-catagory-price">$55.00</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                            <!-- Start Single Product Item -->
                            <div class="single-product-catagory-item">
                                <a href="details.html" class="product-catagory-thumb">
                                    <div class="product-catagory-thumb-default">
                                        <img src="assets/img/home-2/homepage-2-product-11.jpg" alt="">
                                        <img src="assets/img/home-2/homepage-2-product-12.jpg" alt="">
                                        <span class="product-tag orangered-bg">New</span>
                                    </div>
                                </a>
                                <div class="product-catagory-content">
                                    <h4><a href="details.html"
                                            class="product-catagory-title orangered-color-hover">Modern Chair</a>
                                    </h4>
                                    <span class="product-catagory-price">$35.99</span>
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class="rating-on"><i class="fas fa-star"></i></li>
                                        <li class=""><i class="fas fa-star"></i></li>
                                    </ul>
                                    <ul class="product-shipping-info red-btn">
                                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i>
                                        </li>
                                        <li data-toggle="modal" data-target="#quick-view-modal"><i
                                                class="ion-ios-eye-outline"></i>
                                        </li>
                                        <li>
                                            <a href="details.html"><i class="ion-link"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- End Single Product Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- :::::::::: End Related Product Section :::::::::: -->

    <!-- :::::::::: Start Related Product Section :::::::::: -->
    <div id="feature-product-catagory-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title-tertiary text-uppercase m-b-25"> FEATURED PRODUCTS</h3>
                </div>
            </div>
            <div class="mini-slide overlaps-slickSlider sort-slide-8 orangered-arrow arrow-fix-25">
                <!-- Start Single Product Item -->
                <div class="single-product-catagory-item">
                    <a href="details.html" class="product-catagory-thumb">
                        <div class="product-catagory-thumb-default">
                            <img src="assets/img/home-3/homepage-3-product-1.jpg" alt="">
                            <img src="assets/img/home-3/homepage-3-product-2.jpg" alt="">
                            <span class="product-tag orangered-bg">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a href="details.html" class="product-catagory-title orangered-color-hover">Printed
                                Dress</a>
                        </h4>
                        <span class="product-catagory-price">$22.00</span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <ul class="product-shipping-info red-btn">
                        <li data-toggle="modal" data-target="#check-out-modal"><i class="ion-bag"></i></li>
                        <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                        </li>
                        <li>
                            <a href="details.html"><i class="ion-link"></i></a>
                        </li>
                    </ul>
                </div><!-- End Single Product Item -->
                <!-- Start Single Product Item -->
                <div class="single-product-catagory-item">
                    <a href="details.html" class="product-catagory-thumb">
                        <div class="product-catagory-thumb-default">
                            <img src="assets/img/home-3/homepage-3-product-3.jpg" alt="">
                            <img src="assets/img/home-3/homepage-3-product-4.jpg" alt="">
                            <span class="product-tag orangered-bg">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a href="details.html" class="product-catagory-title orangered-color-hover">Jeans Dress</a>
                        </h4>
                        <span class="product-catagory-price">$30.00</span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <ul class="product-shipping-info red-btn">
                            <li data-toggle="modal" data-target="#check-out-modal"><i
                                    class="ion-bag"></i></li>
                            <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                            </li>
                            <li>
                                <a href="details.html"><i class="ion-link"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- End Single Product Item -->
                <!-- Start Single Product Item -->
                <div class="single-product-catagory-item">
                    <a href="details.html" class="product-catagory-thumb">
                        <div class="product-catagory-thumb-default">
                            <img src="assets/img/home-3/homepage-3-product-5.jpg" alt="">
                            <img src="assets/img/home-3/homepage-3-product-6.jpg" alt="">
                            <span class="product-tag orangered-bg">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a href="details.html" class="product-catagory-title orangered-color-hover">Pink Dress</a>
                        </h4>
                        <span class="product-catagory-price">20.00</span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <ul class="product-shipping-info red-btn">
                            <li data-toggle="modal" data-target="#check-out-modal"><i
                                    class="ion-bag"></i></li>
                            <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                            </li>
                            <li>
                                <a href="details.html"><i class="ion-link"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- End Single Product Item -->
                <!-- Start Single Product Item -->
                <div class="single-product-catagory-item">
                    <a href="details.html" class="product-catagory-thumb">
                        <div class="product-catagory-thumb-default">
                            <img src="assets/img/home-3/homepage-3-product-2.jpg" alt="">
                            <img src="assets/img/home-3/homepage-3-product-1.jpg" alt="">
                            <span class="product-tag orangered-bg">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a href="details.html" class="product-catagory-title orangered-color-hover">Long Dress</a>
                        </h4>
                        <span class="product-catagory-price">$45.00</span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <ul class="product-shipping-info red-btn">
                            <li data-toggle="modal" data-target="#check-out-modal"><i
                                    class="ion-bag"></i></li>
                            <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                            </li>
                            <li>
                                <a href="details.html"><i class="ion-link"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- End Single Product Item -->
                <!-- Start Single Product Item -->
                <div class="single-product-catagory-item">
                    <a href="details.html" class="product-catagory-thumb">
                        <div class="product-catagory-thumb-default">
                            <img src="assets/img/home-3/homepage-3-product-4.jpg" alt="">
                            <img src="assets/img/home-3/homepage-3-product-3.jpg" alt="">
                            <span class="product-tag orangered-bg">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a href="details.html" class="product-catagory-title orangered-color-hover">Short Dress</a>
                        </h4>
                        <span class="product-catagory-price">$22.99</span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <ul class="product-shipping-info red-btn">
                            <li data-toggle="modal" data-target="#check-out-modal"><i
                                    class="ion-bag"></i></li>
                            <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                            </li>
                            <li>
                                <a href="details.html"><i class="ion-link"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- End Single Product Item -->
                <!-- Start Single Product Item -->
                <div class="single-product-catagory-item">
                    <a href="details.html" class="product-catagory-thumb">
                        <div class="product-catagory-thumb-default">
                            <img src="assets/img/home-3/homepage-3-product-6.jpg" alt="">
                            <img src="assets/img/home-3/homepage-3-product-5.jpg" alt="">
                            <span class="product-tag orangered-bg">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a href="details.html" class="product-catagory-title orangered-color-hover">Fashion
                                Dress</a>
                        </h4>
                        <span class="product-catagory-price">$105.99</span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <ul class="product-shipping-info red-btn">
                            <li data-toggle="modal" data-target="#check-out-modal"><i
                                    class="ion-bag"></i></li>
                            <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                            </li>
                            <li>
                                <a href="details.html"><i class="ion-link"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- End Single Product Item -->

            </div>
        </div>
    </div> <!-- :::::::::: End Related Product Section :::::::::: -->

    <!-- :::::::::: Start Banner box Section -->
    <div class="banner-box-2">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-banner-box-item zoom-hover">
                        <a href="shop.html">
                            <img class="img-responsive" src="assets/img/home-3/banner-img-1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-banner-box-item zoom-hover">
                        <a href="shop.html">
                            <img class="img-responsive" src="assets/img/home-3/banner-img-2.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="recent-blogs-full">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="title-tertiary text-uppercase m-b-40">LATEST BLOG</h5>
                    <div id="recent-blog-slide" class="mini-slide sort-slide-7 orangered-arrow">
                        <!-- Start Single Product Item -->
                        <div class="single-recent-blogs">
                            <a href="blog-single-left-sidebar.html" class="blog-thumb">
                                <img class="img-fluid" src="assets/img/home-2/recent-blog-img-1.jpg" alt="">
                            </a>
                            <div class="blog-content">
                                <a href="blog-single-left-sidebar.html">
                                    <h5 class="blog-title orangered-color-hover">This is First Post For XipBlog
                                    </h5>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industrys standard dummy text ever since the ...</p>
                                <div class="post-meta">
                                    <a href="#" class="meta-date orangered-color">Sep 10, 2017</a>
                                    <a href="#" class="meta-author orangered-color">Jhon Doe</a>
                                </div>
                            </div>
                        </div> <!-- End Single Product Item -->
                        <!-- Start Single Product Item -->
                        <div class="single-recent-blogs">
                            <a href="blog-single-left-sidebar.html" class="blog-thumb">
                                <img class="img-fluid" src="assets/img/home-2/recent-blog-img-2.jpg" alt="">
                            </a>
                            <div class="blog-content">
                                <a href="blog-single-left-sidebar.html">
                                    <h5 class="blog-title orangered-color-hover">This is Secound Post For
                                        XipBlog
                                    </h5>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industrys standard dummy text ever since the ...</p>
                                <div class="post-meta">
                                    <a href="#" class="meta-date orangered-color">Sep 10, 2017</a>
                                    <a href="#" class="meta-author orangered-color">Jhon Doe</a>
                                </div>
                            </div>
                        </div> <!-- End Single Product Item -->
                        <!-- Start Single Product Item -->
                        <div class="single-recent-blogs">
                            <a href="blog-single-left-sidebar.html" class="blog-thumb">
                                <img class="img-fluid" src="assets/img/home-2/recent-blog-img-3.jpg" alt="">
                            </a>
                            <div class="blog-content">
                                <a href="blog-single-left-sidebar.html">
                                    <h5 class="blog-title orangered-color-hover">This is Third Post For XipBlog
                                    </h5>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industrys standard dummy text ever since the ...</p>
                                <div class="post-meta">
                                    <a href="#" class="meta-date orangered-color">Sep 10, 2017</a>
                                    <a href="#" class="meta-author orangered-color">Jhon Doe</a>
                                </div>
                            </div>
                        </div> <!-- End Single Product Item -->
                        <!-- Start Single Product Item -->
                        <div class="single-recent-blogs">
                            <a href="blog-single-left-sidebar.html" class="blog-thumb">
                                <img class="img-fluid" src="assets/img/home-2/recent-blog-img-4.jpg" alt="">
                            </a>
                            <div class="blog-content">
                                <a href="blog-single-left-sidebar.html">
                                    <h5 class="blog-title orangered-color-hover">This is Fourth Post For XipBlog
                                    </h5>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industrys standard dummy text ever since the ...</p>
                                <div class="post-meta">
                                    <a href="#" class="meta-date orangered-color">Sep 10, 2017</a>
                                    <a href="#" class="meta-author orangered-color">Jhon Doe</a>
                                </div>
                            </div>
                        </div> <!-- End Single Product Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- :::::::::: Start Company Logo Slider Section :::::::::: -->
    <div id="company-logo-section" class="p-b-0">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <div class="company-logos row border-top-1 p-tb-40">

                        <!-- Start Single Company Logo -->
                        <div class="col-lg-12">
                            <div class="single-company-logo">
                                <a href=""><img src="assets/img/company-logo-1.jpg" alt=""></a>
                            </div>
                        </div><!-- End Single Company Logo -->

                        <!-- Start Single Company Logo -->
                        <div class="col-lg-12">
                            <div class="single-company-logo">
                                <a href=""><img src="assets/img/company-logo-2.jpg" alt=""></a>
                            </div>
                        </div><!-- End Single Company Logo -->

                        <!-- Start Single Company Logo -->
                        <div class="col-lg-12">
                            <div class="single-company-logo">
                                <a href=""><img src="assets/img/company-logo-3.jpg" alt=""></a>
                            </div>
                        </div><!-- End Single Company Logo -->

                        <!-- Start Single Company Logo -->
                        <div class="col-lg-12">
                            <div class="single-company-logo">
                                <a href=""><img src="assets/img/company-logo-4.jpg" alt=""></a>
                            </div>
                        </div><!-- End Single Company Logo -->

                        <!-- Start Single Company Logo -->
                        <div class="col-lg-12">
                            <div class="single-company-logo">
                                <a href=""><img src="assets/img/company-logo-5.jpg" alt=""></a>
                            </div>
                        </div><!-- End Single Company Logo -->

                        <!-- Start Single Company Logo -->
                        <div class="col-lg-12">
                            <div class="single-company-logo">
                                <a href=""><img src="assets/img/company-logo-6.jpg" alt=""></a>
                            </div>
                        </div><!-- End Single Company Logo -->

                        <!-- Start Single Company Logo -->
                        <div class="col-lg-12">
                            <div class="single-company-logo">
                                <a href=""><img src="assets/img/company-logo-7.jpg" alt=""></a>
                            </div>
                        </div><!-- End Single Company Logo -->

                        <!-- Start Single Company Logo -->
                        <div class="col-lg-12">
                            <div class="single-company-logo">
                                <a href=""><img src="assets/img/company-logo-8.jpg" alt=""></a>
                            </div>
                        </div><!-- End Single Company Logo -->

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- :::::::::: End Company Logo Slide Section ::::::::::r -->


    <!-- :::::::::: Start Footer Section :::::::::: -->
    <footer id="footer-section">
        <!-- Start Footer Top Area -->
        <div class="footer-contact-top">
            <div class="container-fluid p-lr-80">
                <div class="row">
                    <!-- Start Single Footer Contact -->
                    <div class="col-lg-3 col-md-3">
                        <div class="single-footer-contact-top-item">
                            <div class="footer-contact-icon orangered-color animation-fadeInOut-X">
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
                            <div class="footer-contact-icon orangered-color animation-tada">
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
                            <div class="footer-contact-icon orangered-color animation-tada">
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
                            <div class="footer-contact-icon orangered-color animation-rotate360">
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
                                <button class="box-btn orangered-bg-hover" type="submit">Submit</button>
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
    </footer><!-- :::::::::: End Footer Section :::::::::: -->


    <!-- Start CheckOut Modal -->
    <div class="modal fade" id="check-out-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content add-cart-content ">
                <div class="modal-header add-card-header">
                    <h5 class="modal-title add-cart-modal-title text-center" id="exampleModalLabel">Product
                        successfully added to your shopping cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body add-cart-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 add-cart-border-right">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="add-cart-modal-img">
                                            <img class="img-fluid" src="assets/img/product-catagory-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="add-cart-img-info">
                                            <h6>Printed Dress</h6>
                                            <ul>
                                                <li class="ad-cart-price-img">$50.99</li>
                                                <li class="add-cart-modal-sub-img-info"><span>Size:</span> S</li>
                                                <li class="add-cart-modal-sub-img-info"><span>Color:</span> Beige
                                                </li>
                                                <li class="add-cart-modal-sub-img-info"><span>Quantity:</span> 1
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="add-cart-checkout-info-box">
                                    <li>There is 1 item in your cart.</li>
                                    <li><span>Total products: </span>$50.99</li>
                                    <li><span>Total shipping: </span>$7.00</li>
                                    <li><span>Taxes: </span>$0.00</li>
                                    <li><span>Total: </span>$57.99 (tax excl.)</li>
                                </ul>
                                <div class="check-out-links">
                                    <a href="index.html" class="box-btn">Continue shopping</a>
                                    <a href="checkout.html" class="box-btn">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End  CheckOut Modal -->

    <!-- Start Ouick View Modal -->
    <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content quick-view-content">
                <div class="modal-header quick-view-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body quick-view-body row">
                    <div class="col-md-5">
                        <div class="quick-view-gallery-box">
                            <div class="modal-product-quick-view-image mt-30">
                                <div class="modal-sync-lg-image__horizontal">
                                    <div class="single-view-image">
                                        <img src="assets/img/quick-view-lg-img-1.jpg" alt="product">
                                    </div>
                                    <div class="single-view-image">
                                        <img src="assets/img/quick-view-lg-img-2.jpg" alt="product">
                                    </div>
                                    <div class="single-view-image">
                                        <img src="assets/img/quick-view-lg-img-3.jpg" alt="product">
                                    </div>
                                    <div class="single-view-image">
                                        <img src="assets/img/quick-view-lg-img-4.jpg" alt="product">
                                    </div>
                                    <div class="single-view-image">
                                        <img src="assets/img/quick-view-lg-img-5.jpg" alt="product">
                                    </div>
                                </div>
                                <ul class="modal-sync-thumb-image__horizontal">
                                    <li>
                                        <div class="single-thumb">
                                            <img src="assets/img/quick-view-thumbnail-img-1.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-thumb">
                                            <img src="assets/img/quick-view-thumbnail-img-2.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-thumb">
                                            <img src="assets/img/quick-view-thumbnail-img-3.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-thumb">
                                            <img src="assets/img/quick-view-thumbnail-img-4.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-thumb">
                                            <img src="assets/img/quick-view-thumbnail-img-5.jpg" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- Modal Quick View Image -->
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="quick-view-info-box">
                            <h4 class="quick-view-product-name">PRINTED DRESS</h4>
                            <ul class="rating">
                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                <li class=""><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="quick-view-product-price">$50.99</div>
                            <p class="quick-view-product-desc">Printed evening dress with straight sleeves with
                                black thin waist belt and ruffled linings.</p>
                            <div class="quick-view-product-size product-info-label">
                                <label for="qv-product-size-modal">Size</label>
                                <select id="qv-product-size-modal" name="product-size" class="qv-product-size">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                            <div class="quick-view-product-color product-info-label">
                                <label>Color</label>
                                <ul>
                                    <li class="color-select-box">
                                        <label>
                                            <input type="radio" name="color" checked="checked" value="pink">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li class="color-select-box">
                                        <label>
                                            <input type="radio" name="color" value="orange">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="quick-view-product-quantity product-info-label quantity">
                                <div class="product-quantity-block">
                                    <label for="product-quantity-modal">Quantity</label>
                                    <input id="product-quantity-modal" class="quantity-sys" type="number" step="1"
                                        min="1" max="100" value="1">
                                </div>
                                <div class="quick-cart-link">
                                    <button data-toggle="modal" data-dismiss="modal" data-target="#check-out-modal"
                                        class="box-btn quick-add-cart-link">Add to cart</button>
                                    <span class="product-stock">IN STOCK</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- End Ouick View Modal-->


    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- :::::::::: Javascript Files, jQuery Vendor Plugins ::::::::::  -->
    <!-- jQuery Vendors JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- jQuery Plugins JS -->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/quantity-btn.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.slicknav.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>

    <!-- jQuery main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>