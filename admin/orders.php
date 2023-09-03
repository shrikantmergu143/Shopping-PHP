
<?php
session_start();

date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
$current_file_name = basename($_SERVER['PHP_SELF']);

$_SESSION['file']=$current_file_name;
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php  include"css.php" ?>
</head>

<body class="">
 

<?php include"include/slidebar.php" ?>

      <!-- Navbar -->
    <?php include"include/nav.php";?>
 
  <div class="content">
        <div class="row">
          <div class="col-lg-12 col-md-24 col-sm-24">
            <div class="card card-stats">


               <div class="col-md-6">
                    <div class="card card-plain">
                      <div class="card-header">
                        <h5 class="card-title">Manage Orders</h5>
                      </div>
                      <div class="card-body">    <a href="todays_orders.php" >
                        <div class="alert alert-primary alert-dismissible fade show">
                  
                          <span><b>Today's Orders  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM Orders where orderDate Between '$from' and '$to' ");
$num_rows1 = mysqli_num_rows($result);
{
?>
                      <b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
                      <?php } ?> </span>

                        </div>
                        </a>
                      </div>

                      <div class="card-body"><a href="pending_orders.php">
                        <div class="alert alert-primary alert-dismissible fade show">
                      
                          <span><b> Pending Orders</b>
                          <?php
                            $status='Delivered';                   
$ret = mysqli_query($con,"SELECT * FROM Orders where orderStatus!='$status' || orderStatus is null ");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?></span>
                        </div>
                        </a>
                      </div>
                      <div class="card-body"><a href="delivered_orders.php">
                        <div class="alert alert-primary alert-dismissible fade show">
                        
                          <span><b> Delivered Orders</b>                <?php 
  $status='Delivered';                   
$rt = mysqli_query($con,"SELECT * FROM Orders where orderStatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?></span>
                        </div></a>
                      </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

      <!-- End Navbar -->
<?php include"include/footer.php";?>
  <!--   Core JS Files   -->
<?php include"script.php";?>
</body>

</html>
<?php }  ?>