<?php
session_start();

$current_file_name = basename($_SERVER['PHP_SELF']);

$_SESSION['file']=$current_file_name;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php  include"css.php" ?>
<style type="text/css">
  .add:hover{
      color: green;
  text-decoration: underline ;
  }
</style>

</head>

<body class="">
 

<?php include"include/slidebar.php" ?>

      <!-- Navbar -->
    <?php include"include/nav.php";?>

      <!-- End Navbar -->




<!-- ############################################################### --Body-- ######################################################################## -->
<?php
include('include/config.php');

  
if(isset($_POST['upload']))
{
  $category=$_POST['category'];
  $subcategory=$_POST['subcategory'];
  $productname=$_POST['productname'];
  $productcompany=$_POST['productcompany'];
  $productprice=$_POST['productprice'];
  $productpricebd=$_POST['productpricedb'];
  $productdescription=$_POST['productdescription'];
  $productscharge=$_POST['productcharge'];
  $productavailability=$_POST['productavailability'];
$stock=$_POST['stock'];
  $productimage1= $_FILES["p1"]["name"];
  $productimage2= $_FILES["p2"]["name"];
  $productimage3= $_FILES["p3"]["name"];
  $temp1=$_FILES["p1"]["tmp_name"];
  $temp2=$_FILES["p2"]["tmp_name"];
  $temp3=$_FILES["p3"]["tmp_name"]; 
  $query=mysqli_query($con,"select max(id) as id from products");
  $result=mysqli_fetch_array($query);
  $productid=$result['id']+1;
  $dir="image/$productid";
  if(!is_dir($dir)){
    mkdir("image/".$productid);
  }
  echo "<script>alert('$productimage3')</script>";
        $folder1= "image/".$productid."/".$productimage1;
        $folder2= "image/".$productid."/".$productimage2;
        $folder3= "image/".$productid."/".$productimage3; 
        move_uploaded_file($temp1,$folder1);
        move_uploaded_file($temp2,$folder2);
        move_uploaded_file($temp3,$folder3);
            // Get all the submitted data from the form 
        $sql = "INSERT INTO products (category,subCategory,productName,productCompany,productPrice,productPriceBeforeDiscount,productDescription,productImage1,productImage2,productImage3,shippingCharge,productAvailability,stock) VALUES ('$category','$subcategory','$productname','$productcompany','$productprice','$productpricebd','$productdescription','$productimage1','$productimage2','$productimage3','$productscharge','$productavailability',$stock)"; 
  
        // Execute query 
       if(mysqli_query($con, $sql)){

       }
       else{
        echo "not";
       }

      
}

  ?>
   <script>
function getSubcat(val) {
  $.ajax({
  type: "POST",
  url: "get_subcat.php",
  data:'cat_id='+val,
  success: function(data){
    $("#subcategory").html(data);
  }
  });
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
 <div class="content">
        <div class="row">
          <div class="col-lg-12 col-md-24 col-sm-24">
            <div class="card card-stats">
              <div class="card-body ">

                <div class="module-head">
                <h3>Insert Products</h3>
              </div><hr>
<form method="POST"  enctype="multipart/form-data">
<div class="form-group row">
<label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
<div class="col-sm-2">
<select name="category" class="col-sm-20" onChange="getSubcat(this.value);"  required>
<option value="">Select Category</option> 
<?php $query=mysqli_query($con,"select * from category");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
<?php } ?>
</select>
</div>
</div>
<div class="form-group row">
<label for="staticEmail" class="col-sm-2 col-form-label ">Sub Category</label>
<div class="col-sm-2">
<select   name="subcategory"  id="subcategory" class="col-sm-20 " required>
</select>
</div>
</div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product name</label>
    <div class="col-sm-5">
      <input type="productname" name="productname" class="form-control" id="inputPassword" placeholder="Product name">
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Company</label>
    <div class="col-sm-5">
      <input type="productname" name="productcompany" class="form-control" id="inputPassword" placeholder="Product Company  ">
    </div>
  </div>
   <div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Product Stock</label>
<div class="col-sm-5">
<input type="number"    name="stock"  placeholder="Enter Product stock" class="form-control" required>
</div>
</div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Price Before Discount
</label>
    <div class="col-sm-5">
      <input type="productname" name="productpricedb" class="form-control" id="inputPassword" placeholder="Enter Product Price">
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Price After Discount(Seling Price)</label>
    <div class="col-sm-5">
      <input type="productname" name="productprice"    id="inputPassword" placeholder="Enter Product Price">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Description</label>
    <div class="col-sm-5">
      <textarea class = "form-control" name="productdescription" rows = "3" placeholder = "Product Details"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Shipping Charge</label>
    <div class="col-sm-5">
      <input type="productname" name="productcharge" class="form-control" id="inputPassword" placeholder="Enter Product Shipping Charge">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Availability</label>
    <div class="col-sm-5">
      <select class="form-control" name="productavailability">
        <option value="">SELECT</option>
        <option value="In Stock">In Stock</option>
        <option value="Out Of Stock">Out Of Stock</option>        
      </select>
    </div>
  </div>
  <div class="form-group row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Image 1</label>
     <div class="col-sm-5 add">Product Image 1
            <input class="form-control" id="file" type="file" name="p1" value="" /> 
   </div>
  </div>
 <div class="form-group row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Image 2</label>
     <div class="col-sm-5 add">Product Image 2
            <input type="file" id="file" name="p2" value="" /> 
   </div>
  </div>
   <div class="form-group row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Image 3</label>
     <div class="col-sm-5 add">Product Image 3
            <input type="file" id="file" name="p3" value="" /> 
   </div>
  </div>
     <div class="form-group row ">
      <div class="col-sm-1 col-form-label">
        <button type="submit" class="btn btn-primary" 
                        name="upload"> 
                  UPLOAD 
                </button>
      </div>
     </div>
</form>
</div></div>
          </div>
        </div>
</div>
<!-- ############################################################### --Body--END-- ######################################################################## -->


  <!--   Core JS Files   -->
<?php include"script.php";?>
</body>

</html>
