
<?php
session_start();
if(strlen($_SESSION['alogin'])==0)
	{
		echo "<script>alert('".$_SESSION['alogin']."')</script>";
		header("location:index.php");
	}
else{
$current_file_name = basename($_SERVER['PHP_SELF']);

$_SESSION['file']=$current_file_name;
include"include/config.php";
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


<?php include'include/body.php' ?>
      <!-- End Navbar -->

  <!--   Core JS Files   -->
<?php include"script.php";?>
</body>

</html>
<?php  
}
?>