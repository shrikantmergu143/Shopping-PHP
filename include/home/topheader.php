        <div class="header-top-area">
            <div class="container-fluid  p-lr-80">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <!--  Start Header Top Info -->
                        <div class="header-top-info">
                            <div class="header-top-info-left">
                                <div class="header-phone">                                        
                                    <i class="ion-ios-telephone"></i>
                                    Call Us : <a href="tel://+0123-456-789">+0123-456-789</a>
                                </div>
                                <div class="header-email">
                                    <i class="ion-android-drafts"></i>
                                    Email : <a href="mailto://demo@hasthemes.com">electreeelectronic@gmail.com</a>
                                </div>
                            </div>

                            <div class="header-top-info-right header-top-info-right--home-3">
                             <div id="header-account">
                                    <select class="child-dropdown" onchange="location = this.value;">
                                        <?php if(strlen($_SESSION['login']))
                                        {
                                            ?>
                                        <option value="my-account.php">Account</option>
                                        <option value="cart.php">Cart</option>
                                        <option value="order_history.php">Order History</option>
                                        <option value="compare.php">Compare</option>
                                        <option value="logout.php">Logout</option>
                                    <?php } else  {
                                            ?>
                                        <option value="login.php">Log In</option>
                                        <option value="register.php">Sign Up</option>
                                        <option value="login.php">Account</option>
                                        <option value="cart.php">Cart</option>
                                        <option value="login.php">Checkout</option>
                                        <option value="login.php">Compare</option>
                                        <option value="login.php">Logout</option>
                                    <?php } ?>

                                    </select>
                                </div>
                                <div id="header-currency">
                                    <select class="child-dropdown" onchange="location = this.value;">
                                        <option value="usd">USD</option>
                                        <option value="euro">EURO</option>
                                    </select>
                                </div>
                                <div id="header-lang">
                                    <select class="child-dropdown" onchange="location = this.value;">
                                        <option value="english">English</option>
                                        <option value="Banga">Bangla</option>
                                    </select>
                                </div>
                            </div>
                            <!--  Start Header Cart  -->
                            <?php include"headercart.php";  ?>
                            <!--  Start Header Cart  -->
                        </div> <!--  End Header Top Info  -->

                    </div>
                </div>
            </div>
        </div>