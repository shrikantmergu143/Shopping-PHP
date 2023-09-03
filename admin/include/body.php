<?php
$res=mysqli_query($con,"select *from orders");
$max=0;
while($row=mysqli_fetch_array($res))
{ $max++; }

?>
 <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-user text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Manage  uesr </p>
                      <p class="card-title"> <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="user_info.php"><i class="fa fa-refresh"></i>
                  view </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-8 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Manage product</p>
                      <p class="card-title">  <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                   <a href="product_info.php"><i class="fa fa-calendar-o"></i>
                 view</a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-shopping-cart text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Manage order</p>
                      <p class="card-title"><?php echo $max; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                 <a href="orders.php"> <i class="fa fa-clock-o"></i>
                  check it</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-user-plus text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">manage userlog </p>
                      <p class="card-title">  <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update now
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Sales Report</h4>
              </div>
              <div class="card-body">
              <div class="table-responsive">
                  <table class="table">
                   <thead class=" text-primary">

                    <tr>
                      <th>#</th>
                      <th>Product </th>
                      <th>Qty </th>
                      <th>Amount </th>
                      <th>Order Date</th>
                      <th>Action</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>

<?php 
$st='Delivered';
$query=mysqli_query($con,"select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.orderStatus='$st'");
$cnt=1;
$amt=0;
while($row=mysqli_fetch_array($query))
{
?>                             
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                    
                      <td><?php echo htmlentities($row['productname']);?></td>
                      <td><?php echo htmlentities($row['quantity']);?></td>
                      <td><?php echo "Rs. ".htmlentities($row['quantity']*$row['productprice']+$row['shippingcharge']);?></td>
                      <td><?php echo htmlentities($row['orderdate']);?></td>
                      <td>    <a href="updateorder.php?oid=<?php echo htmlentities($row['id']);?>" title="Update order" target="_blank"><i class="fa fa-edit"></i></a>
                      </td>
                      </tr>

                    <?php $cnt=$cnt+1;
                    $amt+=$row['quantity']*$row['productprice']+$row['shippingcharge'];
                     } ?>
                     <thead>
                     <tr>
                       <td colspan="3">Total</td>

                       <td  colspan="3"><?php echo "Rs. ".$amt; ?></td>
                     </tr>
                     <tr></tr>
                     </thead>
                    </tbody>
                </table>
</div>
              </div>
            </div>
          </div>
        </div>
        </div> 
       
        

   <?php
   include"footer.php";
   ?>


    </div>
  </div>