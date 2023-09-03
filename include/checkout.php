   <div class="modal fade" id="check-out-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content add-cart-content ">
                <div class="modal-header add-card-header">
                    <h5 class="modal-title add-cart-modal-title text-center" id="exampleModalLabel">Product
                        successfully added to your shopping cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body add-cart-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 add-cart-border-right">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="add-cart-modal-img">
                                            <img class="img-fluid" src="assets/img/product-catagory-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="add-cart-img-info">
                                            <h6>Printed Dress</h6>
                                            <ul>
                                                <li class="ad-cart-price-img">$50.99</li>
                                                <li class="add-cart-modal-sub-img-info"><span>Size:</span> S</li>
                                                <li class="add-cart-modal-sub-img-info"><span>Color:</span> Beige
                                                </li>
                                                <li class="add-cart-modal-sub-img-info"><span>Quantity:</span> 1
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="add-cart-checkout-info-box">
                                    <li>There is 1 item in your cart.</li>
                                    <li><span>Total products: </span>$50.99</li>
                                    <li><span>Total shipping: </span>$7.00</li>
                                    <li><span>Taxes: </span>$0.00</li>
                                    <li><span>Total: </span>$57.99 (tax excl.)</li>
                                </ul>
                                <div class="check-out-links">
                                   <a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"  class="box-btn">Continue shopping</a>
                                    <a href="checkout.html" class="box-btn">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>