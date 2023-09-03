<?php
session_start();
include('admin/include/config.php');

if(strlen($_SESSION['login'])==0)
{
    header("location:login.php");
}
else{
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

    <!-- :::::::::: Start Breadcomb Section :::::::::: -->
    <div id="breadcrumb-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="breadcrumb-title">Order History page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-area">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

      <div id="product-tab-list-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <form name="cart" method="post">    

        <table class="table " border="0">
            <thead class="table-bordered">
                <tr class="tr">
                    <th class="cart-romove item">#</th>
                    <th class="cart-description item">Image</th>
                    <th class="cart-product-name item">Product Name</th>
            
                    <th class="cart-qty item">Quantity</th>
                    <th class="cart-sub-total item">Price Per unit</th>
                    <th class="cart-sub-total item">Shipping Charge</th>
                    <th class="cart-total item">Grandtotal</th>
                    <th class="cart-total item">Payment Method</th>
                    <th class="cart-description item">Order Date</th>
                    <th class="cart-total last-item">Action</th>
                </tr>
            </thead><!-- /thead -->
            
            <tbody>

<?php $query=mysqli_query($con,"select products.productImage1 as pimg1,products.productName as pname,products.id as proid,orders.productId as opid,orders.quantity as qty,products.productPrice as pprice,products.shippingCharge as shippingcharge,orders.paymentMethod as paym,orders.orderDate as odate,orders.id as orderid from orders join products on orders.productId=products.id where orders.userId='".$_SESSION['id']."' and orders.paymentMethod is not null");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                <tr>
                    <td><?php echo $cnt;?></td>
                    <td class="cart-image">
                        <a class="entry-thumbnail" href="details.php?pid=<?php echo $row['opid'];?>">
                            <img src="admin/image/<?php echo $row['proid'];?>/<?php echo $row['pimg1'];?>" alt="" width="84" height="130">
                        </a>
                    </td>
                    <td class="cart-product-name-info">
                        <h4 class='cart-product-description'><a href="details.php?pid=<?php echo $row['opid'];?>">
                        <?php echo $row['pname'];?></a></h4>
                        
                        
                    </td>
                    <td class="cart-product-quantity">
                        <?php echo $qty=$row['qty']; ?>   
                    </td>
                    <td class="cart-product-sub-total"><?php echo $price=$row['pprice']; ?>  </td>
                    <td class="cart-product-sub-total"><?php echo $shippcharge=$row['shippingcharge']; ?>  </td>
                    <td class="cart-product-grand-total"><?php echo (($qty*$price)+$shippcharge);?></td>
                    <td class="cart-product-sub-total"><?php echo $row['paym']; ?>  </td>
                    <td class="cart-product-sub-total"><?php echo $row['odate']; ?>  </td>
                    
                    <td>
 <a href="javascript:void(0);" onClick="popUpWindow('track-order.php?oid=<?php echo htmlentities($row['orderid']);?>');" title="Track order">
                    Track</td>
                </tr>
<?php $cnt=$cnt+1;} ?>
                
            </tbody><!-- /tbody -->
        </table><!-- /table -->

        </form>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<br>

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
<?php }?>