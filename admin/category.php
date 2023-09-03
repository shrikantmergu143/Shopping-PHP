
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
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $description=$_POST['description'];
$sql=mysqli_query($con,"insert into category(categoryName,categoryDescription) values('$category','$description')");
$_SESSION['msg']="Category Created !!";

}

if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from category where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Category deleted !!";
      }

?>s
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
              <div class="module-head">
                <h3>Category</h3>
              </div>
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

      <form class="form-horizontal row-fluid" name="Category" method="post" >
                  
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="basicinput">Category Name</label>
<div class="col-sm-5">

<input type="text" placeholder="Enter category Name"  name="category" class="form-control " required>
</div>
</div>


<div class="form-group row">
                      <label class="col-sm-2 col-form-label" for="basicinput">Description</label>
                      <div class="col-sm-5">

                        <textarea class="form-control" name="description" rows="5"></textarea>
                      </div>
                    </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="basicinput"></label>
                      <div class="col-sm-2">

                        <button type="submit" name="submit" class="btn form-control" >Create</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>


   <div class="card-header">
                <h3>Manage Categories</h3>
              </div>
              <div class="card-body">

                <table cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
                  <thead class=" text-primary">
                    <tr >
                      <th>#</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Creation date</th>
                      <th>Last Updated</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

<?php $query=mysqli_query($con,"select * from category");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                  
                    <tr>
                      <td class="text-right"><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities($row['categoryName']);?></td>
                      <td><?php echo htmlentities($row['categoryDescription']);?></td>
                      <td> <?php echo htmlentities($row['creationDate']);?></td>
                      <td><?php echo htmlentities($row['updationDate']);?></td>
                      <td>
                      <a href="edit_category.php?id=<?php echo $row['id']?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="category.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-times" style="float: right;padding-right: 20px;" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php $cnt=$cnt+1; } ?>
                    
                </table>
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
<?php } ?>