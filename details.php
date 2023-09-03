<?php
include"admin/include/config.php";
session_start();
if(isset($_GET['action']) && $_GET['action']=="add"){
    $id=intval($_GET['id']);
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity']++;
    }else{
        $sql_p="SELECT * FROM products WHERE id={$id}";
        $query_p=mysqli_query($con,$sql_p);
        if(mysqli_num_rows($query_p)!=0){
            $row_p=mysqli_fetch_array($query_p);
            $_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
            header('location:index.php');
        }else{
            $message="Product ID is invalid";
        }
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
                    <h2 class="breadcrumb-title">Details Page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-area">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!-- :::::::::: End Breadcomb Section :::::::::: -->

    <!-- :::::::::: Start Product Details Section :::::::::: -->
        <?php include"include/details.php"; ?>
    <!-- :::::::::: End Product Details Section :::::::::: -->


    <!-- :::::::::: Start Product Tab Description Section :::::::::: -->
    <div id="product-tab-list-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav product-details-tab-click" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab"
                                href="#description">DESCRIPTION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab"
                                href="#product-details">Product-details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#user-reviews">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="product-details-info-content">
                        <div class="tab-pane fade show active" id="description">
                            <p>Fashion has been creating well-designed collections since 2020. The brand offers feminine
                                designs delivering stylish separates and statement dresses which have since evolved into
                                a full ready-to-wear collection in which every item is a vital part of a woman's
                                wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable
                                signature style. All the beautiful pieces are made in Italy and manufactured with the
                                greatest attention. Now Fashion extends to a range of accessories including shoes, hats,
                                belts and more!</p>
                        </div>
                        <div class="tab-pane fade" id="product-details">
                            <div class="product-manufacture">
                                <a href=""><img class="img-fluid" src="assets/img/another-logo.jpg" alt=""></a>
                                <div class="product-manufacture-ref">
                                    <label>Reference </label> <span>demo_5</span>
                                </div>
                                <div class="product-manufacture-ref">
                                    <label>In stock </label> <span>300 Items</span>
                                </div>
                                <div class="product-features">
                                    <h5>Data sheet</h5>
                                    <table class="product-table table">
                                        <tr>
                                            <th>Compositions</th>
                                            <td>Viscose</td>
                                        </tr>
                                        <tr>
                                            <th>Styles</th>
                                            <td>Casual</td>
                                        </tr>
                                        <tr>
                                            <th>Properties</th>
                                            <td>Maxi Dress</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="user-reviews">
                            <div class="review-comment-block">
                                <div class="review-grade-area">
                                    <span class="review-grade">Grade</span>
                                    <div class="quick-view-catagory-review">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="review-author-info">
                                    <span class="reviewer-name">Posthemes</span>
                                    <span class="review-date">09/21/2017</span>
                                </div>
                                <div class="reviewer-comment-block">
                                    <h6 class="reviewer-comment-title">Review Title Here</h6>
                                    <p class="reviewer-comment-description">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Deserunt tempore provident vitae fugit odit expedita sed error
                                        quod, tempora itaque alias omnis, sit aut harum suscipit voluptates unde
                                        excepturi blanditiis ipsum ullam.</p>
                                </div>
                            </div>
                            <button class="box-btn" data-toggle="modal" data-target="#review-modal">Write your review
                                !</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- :::::::::: End Product Tab Description Section :::::::::: -->


    <!-- :::::::::: Start Related Product Section :::::::::: -->
     <div class="product-catagory-section-1-row-80">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="product-list-title text-center text-uppercase"> RELETED PRODUCTS
                    </h3>
                </div>
            </div>
            <div id="details-page--same-product" class="overlaps-slickSlider select-product-catagory-items">
                <!-- Start Single Product Item -->
                 <?php
                 $ret=mysqli_query($con,"select * from products where category='".$_SESSION['category']."'");

                while ($row=mysqli_fetch_array($ret)) 
                    {
                     
                ?>
                <div class="single-product-catagory-item">
<a href="details.php?pid=<?php echo htmlentities($row['id']); ?>" class="product-catagory-title">                        <div class="product-catagory-thumb-default">
                                <img class="img-fluid" src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="product">
                                <img class="img-fluid" src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="product">
                            <span class="product-tag">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a href="details.php?pid=<?php echo htmlentities($row['id']); ?>" class="product-catagory-title"><?php echo $row['productName']; ?></a></h4>
                        <span class="product-catagory-price">₹<?php echo $row['productPrice']; ?></span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <ul class="product-shipping-info">
                        <li ><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"><i class="ion-bag"></i></li>
                        <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                        </li>
                        <li>
                            <a href="details.php?pid=<?php echo $row['id'] ?>"><i class="ion-link"></i></a>
                        </li>
                        </ul>
                    </div>
                </div>
                               <?php }?><!-- End Single Product Item -->
               
            </div>
        </div>
    </div>
 <!-- :::::::::: End Related Product Section :::::::::: -->

    <!-- :::::::::: Start Same Catagory Product Section :::::::::: -->
    <div class="product-catagory-section-1-row-80">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="product-list-title text-center text-uppercase"> other products in the same category:
                    </h3>
                </div>
            </div>
            <div id="details-page--same-product" class="overlaps-slickSlider select-product-catagory-items">
                <!-- Start Single Product Item -->
                 <?php
                 $ret=mysqli_query($con,"select * from products ");

                while ($row=mysqli_fetch_array($ret)) 
                    {
                     
                ?>
                <div class="single-product-catagory-item">
<a href="details.php?pid=<?php echo htmlentities($row['id']); ?>" class="product-catagory-title">                        <div class="product-catagory-thumb-default">
                                <img class="img-fluid" src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="product">
                                <img class="img-fluid" src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="product">
                            <span class="product-tag">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a href="details.php?pid=<?php echo htmlentities($row['id']); ?>" class="product-catagory-title"><?php echo $row['productName']; ?></a></h4>
                        <span class="product-catagory-price">₹<?php echo $row['productPrice']; ?></span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <ul class="product-shipping-info">
                        <li ><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"><i class="ion-bag"></i></li>
                        <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                        </li>
                        <li>
                            <a href="details.php?pid=<?php echo $row['id'] ?>"><i class="ion-link"></i></a>
                        </li>
                        </ul>
                    </div>
                </div>
                               <?php }?><!-- End Single Product Item -->
               
            </div>
        </div>
    </div> <!-- :::::::::: End Same Catagory Product Section :::::::::: -->

    <!-- :::::::::: Start Footer Section :::::::::: -->

    <!-- Start CheckOut Modal -->
    <?php include"include/productinfo.php"; ?>
     <!-- End  CheckOut Modal -->
   <?php include"include/Footer.php"; ?>
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