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
  $productname=$_POST['productName'];
  $productimage2=$_FILES["productimage2"]["name"];
//$dir="productimages";
//unlink($dir.'/'.$pimage);


  move_uploaded_file($_FILES["productimage2"]["tmp_name"],"image/$pid/".$_FILES["productimage2"]["name"]);
  $sql=mysqli_query($con,"update  products set productImage2='$productimage2' where id='$pid' ");
$_SESSION['msg']="Product Image Updated Successfully !!";

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


                          <div class="module">
              <div class="col-sm-6 col-form-label "><br>
                <h3>Update Product Image 1</h3><hr>
              </div>
              <div class="module-body">

                  <?php if(isset($_POST['submit']))
{?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                  </div>
<?php } ?>



                  <br />

      <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select productName,productImage2 from products where id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>


<div class="form-group row">
<label class="col-sm-2 col-form-label "  for="basicinput">Product Name</label>
<div class="col-sm-2">

<input type="text"    name="productName"  readonly value="<?php echo htmlentities($row['productName']);?>" class="col-sm-20 " required>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label "  for="basicinput">Current Product Image1</label>
<div class="col-sm-2">

<img src="image/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage2']);?>" class="col-sm-20 " width="200" height="100"> 
</div>
</div>



<div class="form-group row">
<label class="col-sm-2 col-form-label "  for="basicinput">New Product Image1</label>
<div class="col-sm-2">
<input type="file" name="productimage2" id="productimage2" value=""  class="col-sm-20 " required>
</div>
</div>


<?php } ?>

<div class="form-group row">
<div class="col-sm-2 col-form-label " >

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
<?php include"include/footer.php";?>
  <!--   Core JS Files   -->
<?php include"script.php";?>
</body>

</html>
<?php  } ?>