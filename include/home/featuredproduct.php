<div id="feature-product-catagory-section">
        <div class="container-fluid p-lr-80">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title-tertiary text-uppercase m-b-25"> FEATURED PRODUCTS</h3>
                </div>
            </div>
           
            
<div id="shop-page__product-section">
        <div class="container-fluid p-lr-80">
            <div class="row reverse-mod-col">
                <!-- Start Left Side Bar -->
             
                

                    <!-- Start Product Shop -->
                    <div class="sort-product-area tab-content">
                        <div id="grid-item-sort" class="tab-pane fade show active m-t-35 ">
                            <div class="row p-lr-15 clearfix m-b-15">
                            
                                <!-- Start Single Product Item -->
                                <?php
                          
                                    $sql=mysqli_query($con,"select * from products ");
                                    while($row=mysqli_fetch_array($sql)){
                                ?>
                                <div class="shop-custom-5-grid">
                                    <div class="single-product-catagory-item">
                                        <a href="details.php?pid=<?php echo $row['id'] ?>" class="product-catagory-thumb">
                                            <div class="product-catagory-thumb-default">
                                                <img src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="">
                                                <img src="admin/image/<?php echo $row['id'] ?>/<?php echo $row['productImage1'] ?>" alt="">
                                                <span class="product-tag">-5%</span>
                                            </div>
                                        </a>
                                        <div class="product-catagory-content">
                                            <h4><a href="details.php?pid=<?php echo $row['id'] ?>" class="product-catagory-title">
                                                <?php echo $row['productName']; ?>
                                            </a></h4>
                                            <span class="product-catagory-price discount-sale">
                                                Rs. <?php echo $row['productPrice']; ?>
                                                <del>Rs.   <?php echo $row['productPriceBeforeDiscount']; ?>
</del></span>
                                            <ul class="rating">
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class="rating-on"><i class="fas fa-star"></i></li>
                                                <li class=""><i class="fas fa-star"></i></li>
                                            </ul>
                                            <ul class="product-shipping-info">
                                                <li data-toggle="modal" data-target="#check-out-modal"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"><i class="ion-bag"></i></li>
                                                <li data-toggle="modal" data-target="#quick-view-modal"><i class="ion-ios-eye-outline"></i></li>
                                                <li><a href="details.php?pid=<?php echo $row['id'] ?>" ><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            <?php }
                            
                            
                             ?>
                                 <!-- End Single Product Item -->
                                <!-- Start Page Navigation -->
                           <!-- Start Page Navigation -->
                        </div>
                    </div> <!-- End Product Shop -->                    
                </div> <!-- End Right Side Bar -->
            </div>
        </div>
    </div>

        </div>
    </div>