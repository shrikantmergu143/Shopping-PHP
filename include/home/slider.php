 <div id="hero-slider" class="m-b-30">
        <div class="owl-carousel hero-slider-slide hero-slider--3">
            <?php
                $sql="SELECT * FROM bimage";
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query))
                {
            ?>
            <div class="single-hero-slider-item" style="background-image: url('admin/image/backgroundimage/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['name']);?>');">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 offset-md-1 col-sm-8 col-xs-10">
                            <div class="slider-content">
                             
                                <a href="shop.php?cid=<?php echo $row['categoryid']; ?>" class="box-btn box-btn-lg orangered-bg-hover">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>