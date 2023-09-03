<?php
session_start();

include('admin/include/config.php');
if(isset($_POST['submit'])){
        if(!empty($_SESSION['cart'])){
        foreach($_POST['quantity'] as $key => $val){
            if($val==0){
                unset($_SESSION['cart'][$key]);
            }else{
                $_SESSION['cart'][$key]['quantity']=$val;

            }
        }
            echo "<script>alert('Your Cart has been Updated');</script>";
        }
    }
// Code for Remove a Product from Cart
if(isset($_POST['remove_code']))
    {

if(!empty($_SESSION['cart'])){
        foreach($_POST['remove_code'] as $key){
            
                unset($_SESSION['cart'][$key]);
        }
            echo "<script>alert('Your Cart has been Updated');</script>";
    }
}
// code for insert product in order table


if(isset($_POST['ordersubmit'])) 
{
    
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

    $quantity=$_POST['quantity'];
    $pdd=$_SESSION['pid'];
    $value=array_combine($pdd,$quantity);


        foreach($value as $qty=> $val34){
            mysqli_query($con,"insert into orders(userId,productId,quantity) values('".$_SESSION['id']."','$qty','$val34')");
            header('location:checkout.php');
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



<?php
if(!empty($_SESSION['cart'])){



?>

<form name="cart" method="post">    
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
            if(!empty($query)){
            while($row = mysqli_fetch_array($query)){
                $quantity=$_SESSION['cart'][$row['id']]['quantity'];
                $charges=$row['shippingCharge'];
                $subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
                $totalprice += $subtotal;
                $_SESSION['qnty']=$totalqunty+=$quantity;

                array_push($pdtid,$row['id']);
//print_r($_SESSION['pid'])=$pdtid;exit;
    ?>
                                 <li class="cart-item alert alert-dismissible fade show">
                                    <div class="product-line-grid row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-3 col-6">
                                                    <div class="product-image media-middle">
                            <img src="admin/image/<?php echo $row['id'];?>/<?php echo $row['productImage1'];?>" alt="" width="114" height="146">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 offset-lg-0 offset-xl-3 col-sm-9 col-6">
                                                    <div class="product-line-grid-body">
                                                        <div class="product-line-info">
                                                            <a href="details.php?pid=<?php echo htmlentities($pd=$row['id']);?>" ><?php echo $row['productName']; $_SESSION['sid']=$pd;                      ?></a>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="value"><?php echo "Rs"." ".$row['productPrice']; ?>.00</span>
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
                                                            <input class="quantity-sys" value="<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?>" name="quantity[<?php echo $row['id']; ?>]" min="1" max="100" ><div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
                                                        </div>
                                                        <span class="product-prices"><strong><?php echo ($_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge']); ?>.00</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-6 col-3 text-right">
                                                    <button class="dismiss-content" name="remove_code[]" value="<?php echo htmlentities($row['id']);?>">
                                                        <span aria-hidden="true"><i class="fas fa-trash"></i></span>
                                                    </button>
                                                </div>
                                               
                                            </div><br>
                                           
                                        </div>
                                    </div>
                                </li>
                            <?php } }$_SESSION['pid']=$pdtid; ?>
                            </ul>
                        </div>
                    </div><br>
<span class="">
                                <a href="index.php" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                <input type="submit" name="submit" value="Update shopping cart" class="btn btn-upper btn-primary pull-right outer-right-xs">
                            </span>                </div>
         
                <div class="col-lg-4 col-md-12">
                    <div class="total-checkout-block">
                        <div class="checkout-item">
                            <div class="checkout-cost-block">
                                <div class="cart-summary" id="cart-subtotal-products">
                                    <span class="label"><?php echo $totalqunty; ?> items</span>
                                    <span class="value">Rs.<?php echo $subtotal-$charges;?>.00</span>
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
                                    <span class="value">Rs.<?php echo $_SESSION['tp']="$totalprice". ".00"; ?> </span>
                                </div>
                                <div class="cart-summary" id="cart-tax">
                                    <span class="label">Taxes</span>
                                    <span class="value">Rs 0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-btn-link">
                        <input  class="btn btn-primary" type="submit" name="ordersubmit" value="Place order">
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
</form>

<?php }


else{
 ?>
<script type="text/javascript">alert('cart is empty');</script>
<?php

}?>
   <?php include"include/footer.php";?>

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