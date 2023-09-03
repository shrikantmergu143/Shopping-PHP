<?php 

 if(isset($_Get['action'])){
        if(!empty($_SESSION['cart'])){
        foreach($_POST['quantity'] as $key => $val){
            if($val==0){
                unset($_SESSION['cart'][$key]);
            }else{
                $_SESSION['cart'][$key]['quantity']=$val;
            }
        }
        }
    }
?>
<?php
if(!empty($_SESSION['cart'])){
    ?>
 <div class="header-cart header-cart--home-3 orangered-bg ">
                                <button type="button" class="add_cart_open">
                                    <i class="fa fa-shopping-cart fa-sm"></i>
                                    <span class="item_total"><?php echo $_SESSION['qnty'];?> Items</span>Rs. <?php echo $_SESSION['tp']; ?>
                                </button>

                                <div class="header-cart-deatils">
                                    <ul class="header-item-add-cart">

                                         <?php
    $sql = "SELECT * FROM products WHERE id IN(";
            foreach($_SESSION['cart'] as $id => $value){
            $sql .=$id. ",";
            }
            $sql=substr($sql,0,-1) . ") ORDER BY id ASC";
            $query = mysqli_query($con,$sql);
            $totalprice=0;
            $totalqunty=0;
            if(!empty($query)){
                $cp=0;
            while($row = mysqli_fetch_array($query)){
                $quantity=$_SESSION['cart'][$row['id']]['quantity'];
                $subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
                $totalprice += $subtotal;
                $_SESSION['qnty']=$totalqunty+=$quantity;
                $cp+=$row['shippingCharge'];
    ?>
                                        <li>
                                            <div class="header-add-cart-img">
                                             <a href="details.php?pid=<?php echo $row['id']?>"><img  src="admin/image/<?php echo $row['id'];?>/<?php echo $row['productImage1'];?>" width="35" height="50" alt=""></a>
                                                <span class="header-product-quantity"><?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></span>
                                            </div>
                                            <div class="header-add-cart-img-info">
                                              <a href="details.php?pid=<?php echo $row['id']?>"><?php echo $row['productName']; ?></a>
                                                <span class="header-add-cart-product-price">Rs.<?php echo ($row['productPrice']+$row['shippingCharge']); ?></span>
                                               
                                            </div>
                                        </li>
                                                        <?php } }?>
                                    </ul>
                                    <div class="header-cart-infos">
                                        <div class="header-cart-left-info"><span>Subtotal</span></div>
                                        <div class="header-cart-right-info"><span><?php echo $_SESSION['tp']="$totalprice"; ?></span></div>
                                    </div>
                                    <div class="header-cart-infos">
                                        <div class="header-cart-left-info"><span>Shipping</span></div>
                                        <div class="header-cart-right-info"><span>Free</span></div>
                                    </div>
                                    <div class="header-cart-infos">
                                        <div class="header-cart-left-info"><span>Shipping Charges</span></div>
                                        <div class="header-cart-right-info"><span><?php echo $cp; ?></span></div>
                                    </div>
                                   
                                    <div class="header-cart-infos">
                                        <div class="header-cart-left-info"><span>Total</span></div>
                                        <div class="header-cart-right-info"><span>Rs.<?php echo $_SESSION['tp']="$totalprice"; ?></span></div>
                                    </div>
                                    <div class="border-separator"></div>
                                    <a href="cart.php" class="cart-check-out-btn">My Cart</a>
                                </div>
                            </div>
<?php } else { ?>

 <div class="header-cart header-cart--home-3 orangered-bg ">
                                <button type="button" class="add_cart_open">
                                    <i class="fa fa-shopping-cart fa-sm"></i>
                                    <span class="item_total">0 Items</span>Rs.00
                                </button>

                               
                            </div>
<?php } ?>
