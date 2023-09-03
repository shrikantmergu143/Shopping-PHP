<?php 
error_reporting(0); 
?>
<?php 
  $msg = ""; 
  
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
    $db = mysqli_connect("localhost", "root", "", "shopping"); 
    $filename1 = $_FILES["uploadfile1"]["name"];
   
    $temp1=$_FILES["uploadfile1"]["tmp_name"];
  
    $query=mysqli_query($db,"select max(id) as id from bimage");
	$result=mysqli_fetch_array($query);
    echo "<script>alert(".$result['id'].")</script>";
	$productid=$result['id']+1;
	$dir="image/backgroundimage/$productid";
	mkdir("image/backgroundimage/".$productid);
        $folder1= "image/backgroundimage/".$productid."/".$filename1;
     
  
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO bimage (id,name) VALUES ($productid,'$filename1')"; 
  
        // Execute query 
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image 
        move_uploaded_file($temp1,$folder1);
    
  
  } 
  $result = mysqli_query($db, "SELECT * FROM image"); 
?> 
<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Image Upload</title> 
   <style type="text/css">
   	#content{ 
    width: 50%; 
    margin: 20px auto; 
    border: 1px solid #cbcbcb; 
} 
form{ 
    width: 50%; 
    margin: 20px auto; 
} 
form div{ 
    margin-top: 5px; 
} 
#img_div{ 
    width: 80%; 
    padding: 5px; 
    margin: 15px auto; 
    border: 1px solid #cbcbcb; 
} 
#img_div:after{ 
    content: ""; 
    display: block; 
    clear: both; 
} 
img{ 
    float: left; 
    margin: 5px; 
    width: 300px; 
    height: 140px; 
} 
   </style>
</head> 
  
<body> 
    <div id="content"> 
  
        <form method="POST" enctype="multipart/form-data"> 
            <input type="file" name="uploadfile1" value="" /> 
          
  
            <div> 
                <button type="submit"
                        name="upload"> 
                  UPLOAD 
                </button> 
            </div> 
        </form> 
    </div> 
</body> 
  
</html> 