
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


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php  include"css.php" ?>
</head>
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
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
                <h4 class="card-title">User logs</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   <thead class=" text-primary">

                    <tr>
                      <th>#</th>
                      <th> User Email</th>
                      <th>User IP </th>
                      <th>Login Time</th>
                      <th>Logout Time </th>
                      <th>Status </th>
                      
                    </tr>
                  </thead>
                  <tbody>

<?php $query=mysqli_query($con,"select * from userlog");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                  
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities($row['userEmail']);?></td>
                      <td><?php echo htmlentities($row['userip']);?></td>
                      <td> <?php echo htmlentities($row['loginTime']);?></td>
                      <td><?php echo htmlentities($row['logout']); ?></td>
                    <td><?php $st=$row['status'];

if($st==1)
{
  echo "Successfull";
}
else
{
  echo "Failed";
}
                     ?></td>
                      
                      
                    <?php $cnt=$cnt+1; } ?>
                    
                </table>

                </div></div>
            </div>
        </div>
    </div>
</div>

      <!-- End Navbar -->
  <!--   Core JS Files   -->
  <?php include"include/footer.php";?>
<?php include"script.php";?>
</body>

</html>
<?php  }?>