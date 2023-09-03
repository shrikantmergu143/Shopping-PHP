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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- :::::::::: Favicon Icon ::::::::::  -->
    <link rel="shortcut icon" href="assets/img/faviconn.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- :::::::::: Css Files ::::::::::  -->
    <link rel="stylesheet" href="assets/css/main.css">
 <link rel="stylesheet" href="css2.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
 <style>
  #popup {
            
            position:absolute;
            margin:0 auto;
            top: 50%;
            left: 50%;
height:1000%
width:1000%;
            background:white ;
            transform: translate(-50%, -50%);
            z-index: 9999;
    



}
</style>
</head>


<?php
include"assets/style.html";
?>
<body>

    <!-- :::::::::: Start Header Section :::::::::: -->     
     <?php  include"include/header.php";  ?>

 <!-- :::::::::: End Header Section :::::::::: -->

    <!-- :::::::::: Start Hero Slider Section :::::::::: -->
    <?php  include"include/home/slider.php";  ?>
    <!-- :::::::::: End Hero Slider Section :::::::::: -->

    <!-- :::::::::: Start Promo Section :::::::::: -->
    <?php include"include/home/promo.php"; ?>
    <!-- :::::::::: End Promo Section :::::::::: -->

    <!-- :::::::::: Start Related Product Section :::::::::: -->
    <?php include"include/product.php"; ?>

    <!-- :::::::::: End Related Product Section :::::::::::: -->

    <!-- :::::::::: Start Related Product Section :::::::::: -->
    <?php include"include/home/featuredproduct.php";  ?>
     <!-- :::::::::: End Related Product Section :::::::::: -->

    <!-- :::::::::: Start Banner box Section -->


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
 <?php include"include/footer.php";?>

    <!-- Start CheckOut Modal -->
   <!-- End Ouick View Modal-->


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
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <!-- jQuery main JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/d404c27b1c.js"></script>
<script>
$(document).ready(function(){$('#popup').hide(1000.9);});
</script>
</body>

</html>