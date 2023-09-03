<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
  $pid=intval($_GET['id']);// product id

if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $subcat=$_POST['subcategory'];
  $productname=$_POST['productName'];
  $productcompany=$_POST['productCompany'];
  $sstock=$_POST['stock'];
  $productprice=$_POST['productprice'];
  $productpricebd=$_POST['productpricebd'];
  $productdescription=$_POST['productDescription'];
  $productscharge=$_POST['productShippingcharge'];
  $productavailability=$_POST['productAvailability'];
  
$sql=mysqli_query($con,"update  products set category='$category',subCategory='$subcat',productName='$productname',productCompany='$productcompany',productPrice='$productprice',productDescription='$productdescription',shippingCharge='$productscharge',productAvailability='$productavailability',productPriceBeforeDiscount='$productpricebd',stock='$sstock' where id='$pid' ");
$_SESSION['msg']="Product Updated Successfully !!";

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
          <div class="col-lg-12 col-md-24 col-sm-24">
            <div class="card card-stats">

                        
              <div class="module-head"><br> 
                <h3>Insert Product</h3>
            
              <div class="module-body">

                  <?php if(isset($_POST['submit']))
{?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                  </div>
<?php } ?>


                  <?php if(isset($_GET['del']))
{?>
                  <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Oh snap!</strong>   <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                  </div>
<?php } ?>

                  <br />

      <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select products.*,category.categoryName as catname,category.id as cid,subcategory.subcategory as subcatname,subcategory.id as subcatid from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory where products.id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>


  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Category</label>
<div class="col-sm-5">
<select name="category" class="form-control" onChange="getSubcat(this.value);"  required>
<option value="<?php echo htmlentities($row['cid']);?>"><?php echo htmlentities($row['catname']);?></option> 
<?php $query=mysqli_query($con,"select * from category");
while($rw=mysqli_fetch_array($query))
{
  if($row['catname']==$rw['categoryName'])
  {
    continue;
  }
  else{
  ?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['categoryName'];?></option>
<?php }} ?>
</select>
</div>
</div>

                  
  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Sub Category</label>
<div class="col-sm-5">

<select   name="subcategory"  id="subcategory" class="form-control" required>
<option value="<?php echo htmlentities($row['subcatid']);?>"><?php echo htmlentities($row['subcatname']);?></option>
</select>
</div>
</div>


  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Name</label>
<div class="col-sm-5">
<input type="text"    name="productName"  placeholder="Enter Product Name" value="<?php echo htmlentities($row['productName']);?>"class="form-control">
</div>
</div>

  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Company</label>
<div class="col-sm-5">
<input type="text"    name="productCompany"  placeholder="Enter Product Comapny Name" value="<?php echo htmlentities($row['productCompany']);?>" class="form-control" required>
</div>
</div>
 <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Stock</label>
<div class="col-sm-5">
<input type="number"    name="stock"  placeholder="Enter Product stock" value="<?php echo htmlentities($row['stock']);?>" class="form-control" required>
</div>
</div>
  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Price Before Discount</label>
<div class="col-sm-5">
<input type="text"    name="productpricebd"  placeholder="Enter Product Price" value="<?php echo htmlentities($row['productPriceBeforeDiscount']);?>"  class="form-control" required>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Price</label>
<div class="col-sm-5">
<input type="text"    name="productprice"  placeholder="Enter Product Price" value="<?php echo htmlentities($row['productPrice']);?>"class="form-control"required>
</div>
</div>

  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Description</label>
<div class="col-sm-5">
<textarea  name="productDescription"  placeholder="Enter Product Description" rows="6" class="form-control">
<?php echo htmlentities($row['productDescription']);?>
</textarea>  
</div>
</div>

  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Shipping Charge</label>
<div class="col-sm-5">
<input type="text"    name="productShippingcharge"  placeholder="Enter Product Shipping Charge" value="<?php echo htmlentities($row['shippingCharge']);?>" class="form-control"required>
</div>
</div>

  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Availability</label>
<div class="col-sm-5">
<select   name="productAvailability"  id="productAvailability" class="form-control"required>
<option value="<?php echo htmlentities($row['productAvailability']);?>"><?php echo htmlentities($row['productAvailability']);?></option>
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>



  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Image1</label>
<div class="col-sm-5">
<img src="image/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage1']);?>" width="200" height="100"> <a href="update-image1.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>


  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Image2</label>
<div class="col-sm-5">
<img src="image/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage2']);?>" width="200" height="100"> <a href="update-image2.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>



  <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Image3</label>
<div class="col-sm-5">
<img src="image/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage3']);?>" width="200" height="100"> <a href="update-image3.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>
<?php } ?>
  <div class="form-group row">
                      <div class="col-sm-2 col-form-label">
                        <button type="submit" name="submit" class="btn">Update</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>



            </div>
        </div>
    </div>
</div>

      <!-- End Navbar -->

  <!--   Core JS Files   -->
<?php include"script.php";?>
</body>

</html>
<?php } ?>