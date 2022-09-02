<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
?> <html>
  <head>
    <!-- bootstrap files -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Custom files -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- cdn files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="mydbg">
    <!-- wrapper container starts -->
    <div class="container-fluid">
      <?php include("faltu.php") ?>
      <!-- menu section starts -->
      <div class="row ">
         <div class="col-sm-12 ">
          <div class="container">
            <div class="row">
              <h4 class="text-white myheading">Admin Dashboard</h4>
              <div class="col-sm-4 mt-4">
                <br>
                <br>
              <a href="category.php">
                <button class="btn btn-lg mybtn h-25" type="button">
                  
                    <i class="fa-solid fa-plus"></i> Add Category 
                </button>
                </a>
                <br>
                <br>
                <a href="viewusers.php">
                <button class="btn btn-lg h-25 mybtn" type="button">
                  <i class="fa-solid fa-users-viewfinder"></i> View Users </button></a>
                <br>
                <br>
                <a href="viewcontact.php">
                <button class="btn btn-lg h-25 mybtn" type="button">
                  <i class="fa-solid fa-address-card"></i> View Contact us </button></a>
              </div>
              <div class="col-sm-4 mt-4"><br>
                <br>
              <a href="product.php">
                <button class="btn h-25 btn-lg mybtn" type="button">
                  <i class="fa-solid fa-plus"></i> Add Products </button></a>
                <br>
                <br>
                <a href="notification.php">
                <button class="btn h-25 btn-lg mybtn" type="button">
                  <i class="fa-solid fa-plus"></i> Add Notification </button></a>
                <br>
                <br>
                <a href="sold.php">
                <button class="btn h-25 btn-lg mybtn" type="button">
                  <i class="fa-solid fa-arrow-trend-up"></i> View Sold Items </button></a>
              </div>
              <div class="col-sm-4 mt-4"><br>
                <br>
              <a href="viewproduct.php">
                <button class="btn h-25 btn-lg mybtn" type="button">
                  <i class="fa-solid fa-eye"></i> View Products </button></a>
                <br>
                <br>
                <a href="cart.php">
                <button class="btn h-25 btn-lg mybtn" type="button">
                  <i class="fa-solid fa-cart-shopping"></i> View Cart </button></a>
                <br>
                <br>
                <a href="report.php">
                <button class="btn h-25 btn-lg mybtn" type="button">
                  <i class="fa-solid fa-chart-simple"></i> Generate Report </button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- menu section ends -->
    </div>
    <!-- wrapper container ends -->
  </body>
</html>