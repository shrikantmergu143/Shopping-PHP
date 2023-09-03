 <?php
 session_start();
 include('admin/include/config.php');
$stock=0;
 $pdtid=array();
    $sql = "SELECT * FROM products WHERE id IN(";
            foreach($_SESSION['cart'] as $id => $value){
            $sql .=$id. ",";
            }
            $sql=substr($sql,0,-1) . ") ORDER BY id ASC";
            $query = mysqli_query($con,$sql);
            $totalprice=0;
            $totalqunty=0;
            if(!empty($query)){
            while($row = mysqli_fetch_array($query)){
                $quantity=$_SESSION['cart'][$row['id']]['quantity'];
                $charges=$row['shippingCharge'];
                $subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
                $totalprice += $subtotal;
                $_SESSION['qnty']=$totalqunty+=$quantity;

                array_push($pdtid,$row['id']);
                echo $row['id']." ".$quantity;
                $stock=$row['stock']-$quantity;
                                        echo "<script>alert('sume thing haffen')</script>";

                $q=mysqli_query($con,"UPDATE products SET stock=$stock WHERE id='".$row['id']."'");
                if($q)
                {}
                    else{
                        echo "<script>alert('sume thing haffen')</script>";
                    }
                                                    } 
                                }
                                $_SESSION['pid']=$pdtid; 
                                        unset($_SESSION['cart']);

                        header('location:order_history.php'); 

?>
