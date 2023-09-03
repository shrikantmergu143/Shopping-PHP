

<?php
include('include/config.php');

  
if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $subcat=$_POST['subcategory'];
  $productname=$_POST['productName'];
  $productcompany=$_POST['productCompany'];
  $productprice=$_POST['productprice'];
  $productpricebd=$_POST['productpricebd'];
  $productdescription=$_POST['productDescription'];
  $productscharge=$_POST['productShippingcharge'];
  $productavailability=$_POST['productAvailability'];
  $productimage1=$_FILES["productimage1"]["name"];
  $productimage2=$_FILES["productimage2"]["name"];
  $productimage3=$_FILES["productimage3"]["name"];


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

<form class="form-horizontal" method="POST">
<fieldset>
<br><br><br><br><br><br>
<!-- Form Name -->

<!-- Text input-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_categorie" onChange="getSubcat(this.value);" class="form-control">
      <option value="">Select Category</option> 
<?php $query=mysqli_query($con,"select * from category");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
<?php } ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">SUB CATEGORY</label>
  <div class="col-md-4">
    <select   name="subcategory"  id="subcategory" class="form-control" required>
</select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">Before Discount Price</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="available_quantity" placeholder="Before Discount Price" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">After Discount Price</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="available_quantity" placeholder="After Discount Price" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">PERCENTAGE DISCOUNT</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="stock_alert">STOCK ALERT</label>  
  <div class="col-md-4">
    <select   name="productAvailability"  id="productAvailability" class="form-control" required>

    <option value="">Select</option>
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
    </select>
  </div>
</div>


 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">auxiliary_images</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>

</fieldset>
</form>

