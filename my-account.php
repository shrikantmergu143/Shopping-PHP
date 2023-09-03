<?php
session_start();
include"admin/include/config.php";
if(strlen($_SESSION['login'])==0)
{
    header("location:login.php");
}
else{
    if(!empty($_SESSION['message']))
    {
        echo $_SESSION['message'];
    }

    $sql=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
    while($r=mysqli_fetch_array($sql))
    {
        $name=$r['name'];
        $login=$r['email'];
        $address=$r['shippingAddress'];
        $state=$r['shippingState'];
        $city=$r['shippingCity'];
        $pin=$r['shippingPincode'];
        $contact=$r['contactno'];
    }
    $pass=0;
    if(isset($_POST['submit']))
    { $query=0;

        $name=$_POST['fullname'];
        $email=$_POST['email'];
        $contactno=$_POST['contact'];
        $password=$_POST['password'];
        if($_POST['password']==$_POST['npassword'])
        {
        $sql="UPDATE users SET name='$name',email='$email',contactno='$contactno',password='$password' WHERE password='".$_POST['cpassword']."'";
                if($_POST['password']==$_POST['npassword'])
                {
                    $s=mysqli_query($con,"select * from users where password='".$_POST['cpassword']."'");
                    while ($q=mysqli_fetch_array($s)) 
                    {
                        $pass=1;
                        $_SESSION['id']=$q['id'];
                        $_SESSION['username']=$q['name'];
                        $_SESSION['login']=$q['email'];
                        $name=$q['name'];
                        $login=$q['email'];
                        $contact=$q['contactno'];

                    }
                    if($pass==1)
                    {
                                            $query=mysqli_query($con,$sql);
                      $_SESSION['message']="<script>alert('update $name Sessesfull  ')</script>";
                      header("location:my-account.php");

                    }
                    else
                    {
                        echo "<script>alert('Old password Not matching')</script>";
                    }
                }
                else
                {
                        echo "<script>alert('new password and confirm password not match')</script>";
       
                }
        }
           
    }
    else if(isset($_POST['edit-address']))
    {
        $epin=$_POST['epin'];
        $estate=$_POST['estate'];
        $ecity=$_POST['ecity'];
        $eaddress=$_POST['eaddress'];
        $esql="UPDATE users SET shippingAddress='$eaddress',shippingState='$estate',shippingCity='$ecity',shippingPincode='$epin',billingAddress='eaddress',billingState='$estate',billingCity='$ecity',billingPincode='$epin' WHERE id='".$_SESSION['id']."'";
        if(mysqli_query($con,$esql)){
            echo "<script>alert('Address Update SECCESFULL')</script>";
             $sql=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
    while($r=mysqli_fetch_array($sql))
    {
        $name=$r['name'];
        $login=$r['email'];
        $address=$r['shippingAddress'];
        $state=$r['shippingState'];
        $city=$r['shippingCity'];
        $pin=$r['shippingPincode'];
        $contact=$r['contactno'];
    }
    $pass=0;
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
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
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
 <div id="breadcrumb-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="breadcrumb-title">My Account Page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-area">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


<div class="my-account-area">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <div class="my-account-menu">
                        <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab" role="tablist">
                            <li>
                                <a class="active" id="pills-dashboard-tab" data-toggle="pill" href="#pills-dashboard" role="tab" aria-controls="pills-dashboard" aria-selected="true"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                            </li>
                            <li>
                                <a id="pills-order-tab" data-toggle="pill" href="#pills-order" role="tab" aria-controls="pills-order" aria-selected="false"><i class="fas fa-shopping-cart"></i> Order</a>
                            </li>
                         
                            
                            <li>
                                <a id="pills-address-tab" data-toggle="pill" href="#pills-address" role="tab" aria-controls="pills-address" aria-selected="false"><i class="fas fa-map-marker-alt"></i> Your Address</a>
                            </li>
                            <li>
                                <a id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="false"><i class="fas fa-user"></i>
                                    Account Details</a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8">
                    <div class="tab-content my-account-tab" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">
                            <div class="my-account-dashboard account-wrapper">
                                <h4 class="account-title">Dashboard</h4>
                                <div class="welcome-dashboard m-t-30">
                                    <p>Hello, <strong><?php echo $_SESSION['username']; ?></strong></p>
                                </div>
                                <p class="m-t-25">From your account dashboard. you can easily check &amp; view your
                                    recent orders, manage your shipping and billing addresses and edit your password and
                                    account details.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                            <div class="my-account-order account-wrapper">
                                <h4 class="account-title">Orders</h4>
                                <div class="account-table text-center m-t-30 table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="no">No</th>
                                                                                                <th class="status">Image</th>
                                                <th class="name">Name</th>
                                                <th class="date">Date</th>
                                                <th class="total">Price</th>                                                
                                                <th class="total">QTY</th>                                                
                                                <th class="total">Charges</th>
                                                <th class="total">Total</th>
                                                <th class="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

<?php $query=mysqli_query($con,"select products.productImage1 as pimg1,products.productName as pname,products.id as proid,orders.productId as opid,orders.quantity as qty,products.productPrice as pprice,products.shippingCharge as shippingcharge,orders.paymentMethod as paym,orders.orderDate as odate,orders.id as orderid from orders join products on orders.productId=products.id where orders.userId='".$_SESSION['id']."' and orders.paymentMethod is not null");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                            <tr>
                                                <td><?php echo $cnt;?></td>
                                                <td><a href="details.php?pid=<?php echo $row['opid'];?>">                            <img src="admin/image/<?php echo $row['proid'];?>/<?php echo $row['pimg1'];?>" alt="" width="30" height="50">
</a></td>
                                                <td><a href="details.php?pid=<?php echo $row['opid'];?>">
                        <?php echo $row['pname'];?></a></td>
                                                <td>    <?php echo $row['odate']; ?>    </td>
                                                <td><?php echo $price=$row['pprice']; ?></td>
                        <td><?php echo $qty=$row['qty']; ?>   
                                                </td>
                                                                    <td><?php echo $shippcharge=$row['shippingcharge']; ?> </td>

                                                <td><?php echo (($qty*$price)+$shippcharge);?></td>
                                                <td> <a href="javascript:void(0);" onClick="popUpWindow('track-order.php?oid=<?php echo htmlentities($row['orderid']);?>');" title="Track order">View</a></td>
                                            </tr>
                                            <?php $cnt=$cnt+1;} ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    
                        <div class="tab-pane fade" id="pills-address" role="tabpanel" aria-labelledby="pills-address-tab">
                            <div class="my-account-address account-wrapper">
                                <h4 class="account-title">Your Address</h4>
                                <div class="account-address m-t-30">
                                    <h6 class="name"><?php echo $_SESSION['username']; ?></h6>
                                    <p><?php echo $address;?>,</p><p><?php echo $state;?>,</p><p><?php echo $city;?>-<?php echo $pin;?></p>

                                    <br><br> <form method="post">
                                                                        <h4 class="account-title">Edit Address</h4>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <span>Address</span>
                                                <input name="eaddress" type="text" placeholder="Full Name" value="<?php echo $address; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                            <span>State</span>
                                                <input name="estate" type="text" placeholder="Email address"  value="<?php echo $state; ?>"required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="single-form">
                                            <span>City</span>
                                                <input name="ecity" type="text" placeholder="Contact" value="<?php echo $city; ?>"required>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <span>Pin code</span>
                                                <input name="epin" type="text" value="<?php echo $pin ?>" required>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <button type="submit" name="edit-address" class="box-btn">Save Change</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
                            <div class="my-account-details account-wrapper">
                                <h4 class="account-title">Account Details</h4>

                                <div class="account-details">
                                        <form method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <span>Full name</span>
                                                <input name="fullname" type="text" placeholder="Full Name" value="<?php echo $name; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                            <span>Email Address</span>
                                                <input name="email" type="text" placeholder="Email address"  value="<?php echo $login; ?>"required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-form">
                                            <span>Contact</span>
                                                <input name="contact" type="text" placeholder="Contact" value="<?php echo $contact; ?>"required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <h5 class="title">Password change</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <input name="cpassword" type="password" placeholder="Current Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input name="npassword" type="password" placeholder="New Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input name="password" type="password" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <button type="submit" name="submit" class="box-btn">Save Change</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
 <?php include"include/footer.php"; ?>

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
<?php }?>