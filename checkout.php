<?php
session_start();
include"admin/include/config.php";
if(!$_SESSION['login']){
    header("location:login.php");
}
else{
    date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

$sql=mysqli_query($con,"select * from users where email='".$_SESSION['login']."'");
$p=0;
while($r=mysqli_fetch_array($sql)){
    if(!empty($r['billingAddress'])){
        $p=1;
    }
}
if($p==1){
    header("location:allowe.php");
}

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contactno=$_POST['contactno'];
        $Address=$_POST['Address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pin=$_POST['pin'];
        $sql="UPDATE `users` SET `name`='$name',`email`='$email',`contactno`='$contactno',`shippingAddress`='$Address',`shippingState`='$state',`shippingCity`='$city',`shippingPincode`='$pin',`billingAddress`='$Address',`billingState`='$state',`billingCity`='$city',`billingPincode`='$pin',`updationDate`='$currentTime' WHERE id='".$_SESSION['id']."'";
        $query=mysqli_query($con,$sql);
        if($query){
           header("location:allowe.php") ;
        }
        else {
           header("location:checkout.php") ;
        }
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
                <div class="col-lg-12">
                    <h2 class="breadcrumb-title">Checkout Page</h2>
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

    <!-- :::::::::: Start Checkout Section :::::::::: -->
    <div class="checkout-area">
        <div class="container-fluid p-lr-80">
            <div class="row">


                <div class="col-xl-8 col-lg-7">
                    <div class="checkout-form">
                        <form method="post">
                            <?php 
                            $add="";
                            $sql=mysqli_query($con,"select *from users where id='".$_SESSION['id']."'");
                            while($row=mysqli_fetch_array($sql)){
                                
                            ?>
                            <div class="billing-address">
                                <h4 class="title-tertiary text-capitalize">Billing Address</h4>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label>Name*</label>
                                            <input id="name" name="name" type="text" placeholder="<?php echo $row['name'] ?>" value="<?php echo $row['name'] ?>" required >    
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label>Email Address*</label>
                                            <input id="email" name="email" type="text" placeholder="<?php echo $row['email'] ?>" value="<?php echo $row['email'] ?>"   required >
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label>Phone no*</label>
                                            <input id="contactno" name="contactno" type="text" placeholder="<?php echo $row['contactno'] ?>" value="<?php echo $row['contactno'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="single-form">
                                            <label>Address</label>
                                            <input id="Address" name="Address" type="text" value="<?php echo $row['shippingAddress'] ?>" placeholder="Address Line "required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <label>Town/City*</label>
                                            <input id="city" name="city" type="text"  value="<?php echo $row['shippingCity'] ?>" placeholder="Town/City"required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <label>State*</label>
                                            <input id="state" name="state" type="text" value="<?php echo $row['shippingState'] ?>" placeholder="State"required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <label>Pin Code*</label>
                                            <input id="pin" name="pin" value="<?php echo $row['shippingPincode'] ?>" type="text" placeholder="Pin Code"required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <div class="checkout-btn m-t-30">
                       <input type="submit" name="submit" value="Place Order" class="btn btn-primary">
                    </div>
                        <?php }?>
                        </form>
                     </div>                   
                </div>
            </div>
        </div>
    </div> <!-- :::::::::: End Checkout Section :::::::::: -->

    <!-- :::::::::: Start Footer Section :::::::::: -->
<?php include"include/footer.php"; ?>
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
<?php  }?>