
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


if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $subcat=$_POST['subcategory'];
  $id=intval($_GET['id']);
$sql=mysqli_query($con,"update subcategory set categoryid='$category',subcategory='$subcat',updationDate='$currentTime' where id='$id'");
$_SESSION['msg']="Sub-Category Updated !!";

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

 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Edit Subcategory</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php if(isset($_POST['submit']))
{?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                  </div>
<?php } ?>


                  <br />

      <form class="form-horizontal row-fluid" name="Category" method="post" >
<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select category.id,category.categoryName,subcategory.subcategory from subcategory join category on category.id=subcategory.categoryid where subcategory.id='$id'");
while($row=mysqli_fetch_array($query))
{
?>    

  <div class="form-group row">
<label class="col-sm-5 col-form-label" for="basicinput">Category</label>
    <div class="col-sm-5">
<select name="category" class="form-control" required>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($catname=$row['categoryName']);?></option>
<?php $ret=mysqli_query($con,"select * from category");
while($result=mysqli_fetch_array($ret))
{
echo $cat=$result['categoryName'];
if($catname==$cat)
{
  continue;
}
else{
?>
<option value="<?php echo $result['id'];?>"><?php echo $result['categoryName'];?></option>
<?php } }?>
</select>
</div>
</div>




  <div class="form-group row">
<label class="col-sm-5 col-form-label" for="basicinput">SubCategory Name</label>
    <div class="col-sm-5">
<input type="text" placeholder="Enter category Name"  name="subcategory" value="<?php echo  htmlentities($row['subcategory']);?>" class="form-control" required>
</div>
</div>


                  <?php } ?>  

  <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="submit" class="btn">Update</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>


            

            
            
          </div><!--/.content-->
        </div><!--/.span9-->



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
<?php } ?>