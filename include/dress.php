
                <?php

              $ret=mysqli_query($con,"select * from products where category=4");
                while ($row=mysqli_fetch_array($ret)) 
                    {
                ?>

                            <!-- Start Single Product Item -->
                             <div class="single-product-catagory-item">
                    <a href="details.php?pid=<?php echo htmlentities($row['id']); ?>" class="product-catagory-thumb">
                        <div class="product-catagory-thumb-default">
                            <img src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="">
                            <img src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="">
                            <span class="product-tag orangered-bg">New</span>
                        </div>
                    </a>
                    <div class="product-catagory-content">
                        <h4><a  href="details.php?pid=<?php echo htmlentities($row['id']); ?>" class="product-catagory-title orangered-color-hover">
                            <?php echo $row['productName']; ?>
                        </a>
                        </h4>
                        <span class="product-catagory-price">₹<?php echo $row['productPrice']; ?></span>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <ul class="product-shipping-info red-btn">
                        <li ><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"><i class="ion-bag"></i></li>
                        <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i>
                        </li>
                        <li>
                            <a href="details.php?pid=<?php echo $row['id'] ?>"><i class="ion-link"></i></a>
                        </li>
                    </ul>
                </div><!-- End Single Product Item -->

                           
                                <?php  } ?>