
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
  if (isset($_POST['upload'])) { 
    $db = mysqli_connect("localhost", "root", "", "shopping"); 
    $filename1 = $_FILES["uploadfile1"]["name"];
    $cateid=$_POST['cateid'];
   
    $temp1=$_FILES["uploadfile1"]["tmp_name"];
  
    $query=mysqli_query($db,"select max(id) as id from bimage");
  $result=mysqli_fetch_array($query);
    echo "<script>alert('Seccesfull')</script>";
  $productid=$result['id']+1;
  $dir="image/backgroundimage/$productid";
  if(!is_dir($dir)){
  mkdir("image/backgroundimage/".$productid);
}
        $folder1= "image/backgroundimage/".$productid."/".$filename1;
     
  
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO bimage (name,categoryid) VALUES ('$filename1','$cateid')"; 
  
        // Execute query 
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image 
        move_uploaded_file($temp1,$folder1);
    
  
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
                <h4 class="card-title">Set image to user site background product image </h4>
              </div>
               <div class="card-body">





        <form method="POST" enctype="multipart/form-data"> 

<div class="form-group row">
<label class="col-sm-2 col-form-label "  for="basicinput">Add new background Image</label>
<div class="col-sm-2">
            <input type="file" id="file" name="uploadfile1" value="" /> 
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label "  for="basicinput">Category</label>
<div class="col-sm-2">
            <select name="cateid">
             <?php 
             $sql=mysqli_query($con,"select * from Category");
             while($row=mysqli_fetch_array($sql))
             {
                  echo "<option value=".$row['id']."> ".$row['categoryName']."</option>";
             } ?>
            </select> 
</div>
</div>



<div class="form-group row">
<div class="col-sm-5 col-form-label " >

 <button type="submit" class="btn btn-primary" name="upload">  UPLOAD  </button>
                       </form>  
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