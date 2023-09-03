<?php
  

  $con=mysqli_connect("localhost","root","","shopping");
  if($con)
  {}
	else{
		mysqli_connect_errer($con,"Connection fails");
	}
?>