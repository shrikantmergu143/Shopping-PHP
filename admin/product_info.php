
<?php
session_start();
include"include/config.php";
$current_file_name = basename($_SERVER['PHP_SELF']);

$_SESSION['file']=$current_file_name;
if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
		  }
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
          <div class="col-lg-12 col-md-24 col-sm-30">
            <div class="card card-stats">
              <div class="card-body ">
 	<div class="span9">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Manage Products</h3>
							</div><hr>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Product Name</th>
											<th>stock </th>
											<th>Subcategory</th>
											<th>Company Name</th>
											<th>Product Creation Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select products.*,category.categoryName,subcategory.subcategory from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['productName']);?></td>
											<td><?php echo htmlentities($row['stock']);?></td>
											<td> <?php echo htmlentities($row['subcategory']);?></td>
											<td><?php echo htmlentities($row['productCompany']);?></td>
											<td><?php echo htmlentities($row['postingDate']);?></td>
											<td>
											<a href="edit_products.php?id=<?php echo $row['id']?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<a href="product_info.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-times" style="float: right;padding-right: 20px;" aria-hidden="true"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } 


										?>
										
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->

              </div>
            </div>
        </div>
</div>

      <!-- End Navbar -->

  <!--   Core JS Files   -->
<?php include"script.php";?>
</body>

</html>
