
<?php
session_start();

include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php  include"css.php" ?>
</head>
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
<body class="">
 

<?php include"include/slidebar.php" ?>

      <!-- Navbar -->
    <?php include"include/nav.php";?>
 
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Todays Orders</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                     <thead class=" text-primary">

                    <tr>
                      <th>#</th>
                      <th> Name</th>
                      <th width="50">Email </th>
                      <th>Shipping Address</th>
                      <th>Product </th>
                      <th>Qty </th>
                      <th>Amount </th>
                      <th>Order Date</th>
                      <th>Action</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>
<?php 
 $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
$query=mysqli_query($con,"select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.orderDate Between '$from' and '$to'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                    
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities($row['username']);?></td>
                      <td><?php echo htmlentities($row['useremail']);?></td>
                    
                      <td><?php echo htmlentities($row['shippingaddress'].",".$row['shippingcity'].",".$row['shippingstate']."-".$row['shippingpincode']);?></td>
                      <td><?php echo htmlentities($row['productname']);?></td>
                      <td><?php echo htmlentities($row['quantity']);?></td>
                      <td><?php echo htmlentities($row['quantity']*$row['productprice']+$row['shippingcharge']);?></td>
                      <td><?php echo htmlentities($row['orderdate']);?></td>
                      <td>    <a href="updateorder.php?oid=<?php echo htmlentities($row['id']);?>" title="Update order" target="_blank"><i class="fa fa-edit"></i></a>
                      </td>
                      </tr>

                    <?php $cnt=$cnt+1; } ?>
                    </tbody>
                </table>


                </div></div>
            </div>
        </div>
    </div>
</div>

      <!-- End Navbar -->
  <!--   Core JS Files   -->
  <?php include"include/footer.php";?>
<?php include"script.php";?>
</body>

</html>
<?php  }?>