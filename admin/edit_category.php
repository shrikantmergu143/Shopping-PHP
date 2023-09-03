
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
  $description=$_POST['description'];
  $id=intval($_GET['id']);
$sql=mysqli_query($con,"update category set categoryName='$category',categoryDescription='$description',updationDate='$currentTime' where id='$id'");
$_SESSION['msg']="Category Updated !!";

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
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
                            <div class="card-header text-center">

<div class="card-body">
                <div class="table-responsive table-upgrade">


              <div class="card-header text-center">
                <h3 class="card-title">Category</h3>
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

      <form class="" name="Category" method="post" >
<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from category where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>                  
   <div class="form-group row">
<label cclass="col-sm-2 col-form-label"for="basicinput"> Category Name</label>
    <div class="col-sm-5">
<input type="text" placeholder="Enter category Name"  name="category" value="<?php echo  htmlentities($row['categoryName']);?>" class="form-control" required>
</div>
</div>


   <div class="form-group row">
                      <label class="col-sm-2 col-form-label" for="basicinput">Description</label>
    <div class="col-sm-5">
                        <textarea class="form-control" name="description" rows="5"><?php echo  htmlentities($row['categoryDescription']);?></textarea>
                      </div>
                    </div>
                  <?php } ?>  

   <div class="form-group row">
    <div class="col-sm-5">
                        <button type="submit" name="submit" class="btn">Update</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div></div>  
</div></div>


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