

 <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
    


      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="change_password.php" class="simple-text logo-normal">
          Admin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>


      <div class="sidebar-wrapper">
        <ul class="nav">
           
<?php if($_SESSION['file']=="dashboard.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
<?php if($_SESSION['file']=="insert.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="./insert.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Insert product</p>
            </a>
          </li>
<?php if($_SESSION['file']=="product_info.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="product_info.php">
<i class="fa fa-table" aria-hidden="true"></i>
              <p>Product info</p>
            </a>
          </li>
<?php if($_SESSION['file']=="orders.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="orders.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Manage Orders</p>
            </a>
          </li>
<?php if($_SESSION['file']=="user_info.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="user_info.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Info</p>
            </a>
          </li>
<?php if($_SESSION['file']=="category.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="category.php">
<i class="fa fa-table" aria-hidden="true"></i>
              <p>Category</p>
            </a>
          </li>
          <?php if($_SESSION['file']=="subcategory.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="subcategory.php">
<i class="fa fa-table" aria-hidden="true"></i>
              <p>Sub Category</p>
            </a>
          </li>
          <?php if($_SESSION['file']=="user_logs.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="user_logs.php">
<i class="fa fa-users" aria-hidden="true"></i>
              <p>User logs</p>
            </a>
          </li>
           <?php if($_SESSION['file']=="backgroundimage.php")  echo "<li class='active'>"; else echo "<li class=''>" ?>
            <a href="backgroundimage.php">
<i class="fa fa-table" aria-hidden="true"></i>
              <p>Background image</p>
            </a>
          </li>

        
        </ul>
      </div>
    </div>
    <div class="main-panel">

