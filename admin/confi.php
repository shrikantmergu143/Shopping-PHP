
<?php
	
session_start();
include("include/config.php");
if(isset($_POST['submit']))
{
	$username=$_POST['Username'];
	$password=$_POST['password'];
$ret=mysqli_query($con,"SELECT * FROM admin WHERE user='$username' AND password='$password'");
$num=mysqli_fetch_array($ret);

if($num>0)
{
$extra="dashboard.php";//
$_SESSION['alogin']=$_POST['Username'];
$_SESSION['aid']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>
