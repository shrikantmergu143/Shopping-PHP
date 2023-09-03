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

    <div id="breadcrumb-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="breadcrumb-title">Shop Page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-area">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Shop Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> 

<div id="shop-page__product-section">
        <div class="container-fluid p-lr-80">
            <div class="row reverse-mod-col">
                <!-- Start Left Side Bar -->
             
                

                    <!-- Start Product Shop -->
                    <div class="sort-product-area tab-content">
                        <div id="grid-item-sort" class="tab-pane fade show active m-t-35 ">
                            <div class="row p-lr-15 clearfix m-b-15">
                            
                                <!-- Start Single Product Item -->
                                <?php
                                 if(!empty($_GET['cid']))
                                 {
                                    $sql=mysqli_query($con,"select * from products where category='".$_GET['cid']."'");
                                    while($row=mysqli_fetch_array($sql)){
                                ?>
                                <div class="shop-custom-5-grid">
                                    <div class="single-product-catagory-item">
                                        <a href="details.php?pid=<?php echo $row['id'] ?>" class="product-catagory-thumb">
                                            <div class="product-catagory-thumb-default">
                                                <img src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="">
                                                <img src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="">
                                                <span class="product-tag">-5%</span>
                                            </div>
                                        </a>
                                        <div class="product-catagory-content">
                                            <h4><a href="details.php?pid=<?php echo $row['id'] ?>" class="product-catagory-title">
                                                <?php echo $row['productName']; ?>
                                            </a></h4>
                                            <span class="product-catagory-price discount-sale">
                                                Rs. <?php echo $row['productPrice']; ?>
                                                <del>Rs.   <?php echo $row['productPriceBeforeDiscount']; ?>
</del></span>
                                            <ul class="rating">
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class=""><i class="fas fa-star"></i></li>
                                            </ul>
                                            <ul class="product-shipping-info">
                                                <li data-toggle="modal" data-target="#check-out-modal"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"><i class="ion-bag"></i></li>
                                                <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i></li>
                                                <li><a href="details.php?pid=<?php echo $row['id'] ?>" ><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            <?php }
                             }
                            else
                              {
                                

    $sql=mysqli_query($con,"select * from products where subCategory='".$_GET['sid']."'");
                                    while($row=mysqli_fetch_array($sql)){
                                ?>
                                <div class="shop-custom-5-grid">
                                    <div class="single-product-catagory-item">
                                        <a href="details.php?pid=<?php echo $row['id'] ?>" class="product-catagory-thumb">
                                            <div class="product-catagory-thumb-default">
                                                <img src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="">
                                                <img src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="">
                                                <span class="product-tag">-5%</span>
                                            </div>
                                        </a>
                                        <div class="product-catagory-content">
                                            <h4><a href="details.php?pid=<?php echo $row['id'] ?>" class="product-catagory-title">
                                                <?php echo $row['productName']; ?>
                                            </a></h4>
                                            <span class="product-catagory-price discount-sale">
                                                Rs. <?php echo $row['productPrice']; ?>
                                                <del>Rs.   <?php echo $row['productPriceBeforeDiscount']; ?>
</del></span>
                                            <ul class="rating">
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class=""><i class="fas fa-star"></i></li>
                                            </ul>
                                            <ul class="product-shipping-info">
                                                <li data-toggle="modal" data-target="#check-out-modal"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"><i class="ion-bag"></i></li>
                                                <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i></li>
                                                <li><a href="details.php?pid=<?php echo $row['id'] ?>" ><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            }
                             }
                            
                             ?>
                                 <!-- End Single Product Item -->
                                <!-- Start Page Navigation -->
                            <nav class="page-nav" style="padding-left: 450px">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link pre-page-nav" href="#" tabindex="-1"><i class="fa fa-angle-double-left"></i></a>
                                    </li>
                                    <li class="page-item "><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link next-page-nav" href="#"><i class="fa fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </nav> <!-- Start Page Navigation -->
                        </div>
                    </div> <!-- End Product Shop -->                    
                </div> <!-- End Right Side Bar -->
            </div>
        </div>
    </div>

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