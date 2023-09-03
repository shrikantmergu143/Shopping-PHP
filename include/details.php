   <?php
    if(isset($_GET['action']) && $_GET['action']=="add"){

                $pid=$_GET['id'];

              $ret=mysqli_query($con,"select * from products where id=$pid");
                while ($row=mysqli_fetch_array($ret)) 
                    {
                        $_SESSION['category']=$row['category'];
                ?>
  <div id="product-details-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-md-5">
                    <!-- Start Galarry Box -->
                    <div class="quick-view-gallery-box">
                        <!-- Start Galarry Large Image -->
                        <div class="sync-lg-image__horizontal">
                            <div class="single-view-image"> 
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage1'] ?>" alt="product">
                            </div>
                            <div class="single-view-image">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage2'] ?>" alt="product">
                            </div>
                            <div class="single-view-image">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage3'] ?>" alt="product">
                            </div>
                            
                        </div> <!-- Start Galarry Large Image -->

                        <!-- Start Galarry Thumbnail Image -->
                        <ul class="sync-thumb-image__horizontal">
                            <li>
                                <div class="single-thumb">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage1'] ?>" alt="product">
                                </div>
                            </li>
                            <li>
                                <div class="single-thumb">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage2'] ?>" alt="product">
                                </div>
                            </li>
                            <li>
                                <div class="single-thumb">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage3'] ?>" alt="product">
                                </div>
                            </li>
                            
                        </ul> <!-- End Galarry Thumbnail Image -->

                    </div> <!-- Start Galarry Box -->
                </div>
                <div class="col-md-7">
                    <div class="quick-view-info-box">
                        <h4 class="quick-view-product-name"><?php echo $row['productName']; ?></h4>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <!-- Start Review Modal -->
                        <span data-toggle="modal" data-target="#review-modal" class="write-review">Write a review</span>
                        <!-- Start Review Modal -->
                        <div class="quick-view-product-price">₹<?php echo $row['productPrice']; ?></div>
                        <p class="quick-view-product-desc"><?php echo $row['productDescription']; ?></p>
                       
                        <div class="quick-view-product-quantity product-info-label quantity">
                            <div class="product-quantity-block col-sm-5">
                                  <label for="product-quantity">Quantity</label>
                                <select>

                                  <option value="1"> 1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                              </select>
                            </div><br>
                            <div class="quick-cart-link m-b-50">
                                <a class="btn btn-primary" href="details.php?page=product&action=add&id=<?php echo $row['id']; ?>"><i class="ion-bag"></i> Add to cart</a>
                                <span class="product-stock">IN STOCK</span>
                            </div>
                        </div>
                    </div>
                    <ul class="product-delivary-info">
                        <li><i class="fas fa-shield-alt"></i><span> SECURITY POLICY (EDIT WITH MODULE CUSTOMER
                                REASSURANCE)</span></li>
                        <li><i class="fas fa-truck-moving"></i><span> DELIVERY POLICY (EDIT WITH MODULE CUSTOMER
                                REASSURANCE)</span></li>
                        <li><i class="fas fa-exchange-alt"></i><span> RETURN POLICY (EDIT WITH MODULE CUSTOMER
                                REASSURANCE)</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 

    <?php  }
    }
    else{

                $pid=$_GET['pid'];

              $ret=mysqli_query($con,"select * from products where id=$pid");
                while ($row=mysqli_fetch_array($ret)) 
                    {
                        $_SESSION['category']=$row['category'];
                ?>
  <div id="product-details-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-md-5">
                    <!-- Start Galarry Box -->
                    <div class="quick-view-gallery-box">
                        <!-- Start Galarry Large Image -->
                        <div class="sync-lg-image__horizontal">
                            <div class="single-view-image"> 
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage1'] ?>" alt="product">
                            </div>
                            <div class="single-view-image">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage2'] ?>" alt="product">
                            </div>
                            <div class="single-view-image">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage3'] ?>" alt="product">
                            </div>
                            
                        </div> <!-- Start Galarry Large Image -->

                        <!-- Start Galarry Thumbnail Image -->
                        <ul class="sync-thumb-image__horizontal">
                            <li>
                                <div class="single-thumb">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage1'] ?>" alt="product">
                                </div>
                            </li>
                            <li>
                                <div class="single-thumb">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage2'] ?>" alt="product">
                                </div>
                            </li>
                            <li>
                                <div class="single-thumb">
                                <img class="img-fluid" src="admin/image/<?php echo $pid ?>/<?php echo $row['productImage3'] ?>" alt="product">
                                </div>
                            </li>
                            
                        </ul> <!-- End Galarry Thumbnail Image -->

                    </div> <!-- Start Galarry Box -->
                </div>
                <div class="col-md-7">
                    <div class="quick-view-info-box">
                        <h4 class="quick-view-product-name"><?php echo $row['productName']; ?></h4>
                        <ul class="rating">
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class="rating-on"><i class="fas fa-star"></i></li>
                            <li class=""><i class="fas fa-star"></i></li>
                        </ul>
                        <!-- Start Review Modal -->
                        <span data-toggle="modal" data-target="#review-modal" class="write-review">Write a review</span>
                        <!-- Start Review Modal -->
                        <div class="quick-view-product-price">₹<?php echo $row['productPrice']; ?></div>
                        <p class="quick-view-product-desc"><?php echo $row['productDescription']; ?></p>
                       
                        <div class="quick-view-product-quantity product-info-label quantity">
                            <div class="product-quantity-block col-sm-5">
                                  <label for="product-quantity">Quantity</label>
                                <select>

                                  <option value="1"> 1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                              </select>
                            </div><br>
                            <div class="quick-cart-link m-b-50">
                                <a class="btn btn-primary" href="details.php?page=product&action=add&id=<?php echo $row['id']; ?>"><i class="ion-bag"></i> Add to cart</a>
                                <span class="product-stock">IN STOCK</span>
                            </div>
                        </div>
                    </div>
                    <ul class="product-delivary-info">
                        <li><i class="fas fa-shield-alt"></i><span> SECURITY POLICY (EDIT WITH MODULE CUSTOMER
                                REASSURANCE)</span></li>
                        <li><i class="fas fa-truck-moving"></i><span> DELIVERY POLICY (EDIT WITH MODULE CUSTOMER
                                REASSURANCE)</span></li>
                        <li><i class="fas fa-exchange-alt"></i><span> RETURN POLICY (EDIT WITH MODULE CUSTOMER
                                REASSURANCE)</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
    <?php }}?>