<?php
session_start();
include"admin/include/config.php";
if(!$_SESSION['login']){
    header("location:login.php");
}
else{
    if(!$_SESSION['cart']){
        header("location:index.php");
    }
    else{
    date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

   if(isset($_POST['submit'])){
            mysqli_query($con,"update orders set    paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
        header('location:demo.php'); 
   }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping </title>

    <!-- :::::::::: Favicon Icon ::::::::::  -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <!-- :::::::::: Css Files ::::::::::  -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/css2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/fontawesome.min.css">
</head>

<body>

    <!-- :::::::::: Start Header Section :::::::::: -->
   <?php include"include/header.php"; ?>
    <!-- :::::::::: Start Breadcomb Section :::::::::: -->
    <div id="breadcrumb-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="breadcrumb-title">Billing Page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-area">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!-- :::::::::: End Breadcomb Section :::::::::: -->
<form method="post" name="payment">
    <!-- :::::::::: Start Checkout Section :::::::::: -->
<div class="checkout-area">
        <div class="container-fluid p-lr-100">
            <div class="row">
                <div class="col-xl-12 col-lg-9" style="padding-left: 150px;padding-right: 150px;">
                    <div class="checkout-total-wrapper">
                        <h4 class="title-tertiary text-capitalize">Cart Total</h4>
                        <div class="checkout-total">
                            <h4 class="title">Product <span>Total</span></h4>
                            <ul>
                             <?php
 $pdtid=array();
    $sql = "SELECT * FROM products WHERE id IN(";
            foreach($_SESSION['cart'] as $id => $value){
            $sql .=$id. ",";
            }
            $sql=substr($sql,0,-1) . ") ORDER BY id ASC";
            $query = mysqli_query($con,$sql);
            $totalprice=0;
            $totalqunty=0;
            $p=0;
            if(!empty($query)){
            while($row = mysqli_fetch_array($query)){
                $quantity=$_SESSION['cart'][$row['id']]['quantity'];
                $charges=$row['shippingCharge'];
                $subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
                $totalprice += $subtotal;
                $_SESSION['qnty']=$totalqunty+=$quantity;
                $p=$p+$row['productPrice'];
                array_push($pdtid,$row['id']);
//print_r($_SESSION['pid'])=$pdtid;exit;
    ?>
                                <li>
                                    <strong><p class="total-value"><?php echo $row['productName']; ?><span> * <?php echo $quantity;?></span></p></strong>
                                    <p class="total-amount">Rs.  <?php echo $row['productPrice']*$quantity; ?></p>
                                </li>
                            <?php } }$_SESSION['pid']=$pdtid; ?>
                                                        </ul>

                            <div class="checkout-total-sub">
                                <p class="total-value">Sub Total</p>
                                <p class="total-amount">Rs. <?php echo $totalprice ?></p>
                            </div>
                            <div class="checkout-total-sub">
                                <p class="total-value">Taxes</p>
                                <p class="total-amount">$0.00</p>
                            </div>
                            <div class="checkout-total-sub">
                                <p class="total-value">Shipping Fee </p>
                                <p class="total-amount">Rs. <?php echo $charges ?></p>
                            </div>
                            <h4 class="title m-t-15 m-b-5">Product <span>Rs. <?php echo $totalprice ?></span></h4>
                        </div>
                    </div>

                    <div class="checkout-payment-wrapper">
                        <h4 class="title-tertiary text-capitalize">Payment Method</h4>
                        <div class="checkout-payment">
                            <ul>
                               
                                <li>
                                    <div class="custom-checkbox">
                                        <div class="custom-checkbox__group payment_radio">
                                            <input type="radio" id="payment_cod" class="checkbox_input" checked="checked" name="paymethod" value="cash on Delivery" required>
                                            <label for="payment_cod" class="checkbox__label">
                                                <span class="checkbox__type-radio"></span>
                                                Cash On Delivery
                                            </label>

                                            <div class="payment-option-form" id="payment_cod_form" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-form  m-t-5 m-b-25">
                                                            <p>Please send a Check to Store name with Store Street,
                                                                Store Town, Store State, Store Postcode, Store Country.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox m-t-10">
                                        <div class="custom-checkbox__group">
                                            <input name="payment" type="checkbox" id="t_and_c" class="checkbox_input" value="accept" required>
                                            <label for="t_and_c" class="checkbox__label">
                                                <span class="checkbox__type-check"></span>
                                                I’ve read and accept the terms &amp; conditions
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <center>
                    <div class="checkout-btn m-t-50">
         <input type="submit" value="submit" name="submit" class="btn btn-primary">
                    </div></center>
                </div>
            </div>
        </div>
    </div>
</form>
 <!-- :::::::::: End Checkout Section :::::::::: -->
<?php include"include/footer.php"; ?>
    <!-- :::::::::: Start Footer Section :::::::::: -->
    
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- :::::::::: Javascript Files, jQuery Vendor Plugins ::::::::::  -->
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
    <script src="assets/js/d404c27b1c.js"></script>

</html>
<?php } }?>