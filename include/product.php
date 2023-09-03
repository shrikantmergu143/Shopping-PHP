    <div id="our-product-catagory-section">
        <div class="container-fluid p-lr-80">
            <div class="row d-flex align-items-center m-b-25">
                <div class="col-md-4 col-12">
                    <h3 class="title-tertiary text-uppercase"> Our PRODUCTS</h3>
                </div>
                  <div class="col-md-8 col-12">                   
                    <ul class="product-filter-area product-filter__home-3 nav">
                        <li><a data-toggle="tab" href="#dress" class="active show">Fassion</a></li>
                        <li><a data-toggle="tab" href="#furniture">Furniture</a></li>
                        <li><a data-toggle="tab" href="#electronics">Electronics</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div id="dress" class="dataTab-style2 overlaps-slickSlider  mini-slide arrow-fix-25 tab-pane fade show active">

                        <?php  include"dress.php";        ?>
                        </div>
                <div id="furniture" class="dataTab-style2 overlaps-slickSlider mini-slide arrow-fix-25  tab-pane fade ">

                        <?php  include"furniture.php";        ?>
                    </div>
                <div id="electronics" class="dataTab-style2 overlaps-slickSlider mini-slide arrow-fix-25  tab-pane fade ">

                        <?php  include"electronics.php";        ?>
                    </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>