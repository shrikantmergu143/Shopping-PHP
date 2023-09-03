
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
$sql=mysqli_query($con,"SELECT password FROM  admin where password='".$_POST['password']."' && user='".$_SESSION['alogin']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
  $currentTime=$d=date("Y-m-d h:i:sa",time());
 $con=mysqli_query($con,"update admin set password='".$_POST['newpassword']."' where user='".$_SESSION['alogin']."'");
$_SESSION['msg']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php  include"css.php" ?>
</head>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
<body class="">
 

<?php include"include/slidebar.php" ?>

      <!-- Navbar -->
    <?php include"include/nav.php";?>
 
 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">change Password</h5>
              </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">


                

                <?php if(isset($_POST['submit']))
{?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                  </div>
<?php } ?>
                  <br />

      <form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">
                  
  <div class="form-group row">
<label class="col-sm-5 col-form-label" for="basicinput">Current Password</label>
    <div class="col-sm-7">
<input type="password" placeholder="Enter your current Password"  name="password" class="form-control" required>
</div>
</div>


  <div class="form-group row">
<label class="col-sm-5 col-form-label" for="basicinput">New Password</label>
    <div class="col-sm-7">
<input type="password" placeholder="Enter your new current Password"  name="newpassword" class="form-control" required>
</div>
</div>

  <div class="form-group row">
<label class="col-sm-5 col-form-label" for="basicinput">Current Password</label>
    <div class="col-sm-7">
<input type="password" placeholder="Enter your new Password again"  name="confirmpassword" class="form-control" required>
</div>
</div>




                    

  <div class="form-group row">
    <label class="col-sm-5 col-form-label" for="basicinput"></label>

    <div class="col-sm-5">
                        <button type="submit" name="submit" class="btn btn-primary form-control">Change</button>
                      </div>
                    </div>
                  </form>
              



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