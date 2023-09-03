
<?php
session_start();

$current_file_name = basename($_SERVER['PHP_SELF']);

$_SESSION['file']=$current_file_name;

include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $subcat=$_POST['subcategory'];
$sql=mysqli_query($con,"insert into subcategory(categoryid,subcategory) values('$category','$subcat')");
$_SESSION['msg']="SubCategory Created !!";

}

if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from subcategory where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="SubCategory deleted !!";
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Sub Category</h5>
              </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">


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


<form class="form-horizontal row-fluid" name="subcategory" method="post" >

  <div class="form-group row">
<label class="col-sm-5 col-form-label"for="basicinput">Category</label>
    <div class="col-sm-5">
<select name="category" class="form-control" required>
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
<label class="col-sm-5 col-form-label" for="basicinput">SubCategory Name</label>
    <div class="col-sm-5">
<input type="text" placeholder="Enter SubCategory Name"  name="subcategory" class="form-control" required>
</div>
</div>



  <div class="form-group row">
    <label class="col-sm-5 col-form-label" for="basicinput"></label>
                      <div class="col-sm-5">

                        <button type="submit" name="submit" class="btn form-control" >Create</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>


  <div class="module">
              <div class="module-head">
                <h3>Sub Category</h3>
              </div>
              <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                    <thead class=" text-primary">
                    <tr>
                      <th>#</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Creation date</th>
                      <th>Last Updated</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

<?php $query=mysqli_query($con,"select subcategory.id,category.categoryName,subcategory.subcategory,subcategory.creationDate,subcategory.updationDate from subcategory join category on category.id=subcategory.categoryid");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                  
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities($row['categoryName']);?></td>
                      <td><?php echo htmlentities($row['subcategory']);?></td>
                      <td> <?php echo htmlentities($row['creationDate']);?></td>
                      <td><?php echo htmlentities($row['updationDate']);?></td>
                      <td>
                      <a href="edit_subcategory.php?id=<?php echo $row['id']?>" ><i class="fa fa-edit"></i></a>
                      <a href="subcategory.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash  " style="float: right;padding-right: 30px;"></i></a></td>
                    </tr>
                    <?php $cnt=$cnt+1; } ?>
                    
                </table>



                  </div>
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