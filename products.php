<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- bootstrap files -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- custom files -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinegar and Grocery</title>
  </head>
  <body>
    <!-- wrapper container starts -->
    <div class="container-fluid">
      <!-- header starts --> 
      <?php include("header.php"); ?>
      <!-- header ends -->
      <!-- products section starts -->
      <div class="row">
        <h1 class="text-center my-text my-5">Products</h1>
        <div class="row mt-5 ps-5 ms-1"> <?php include("admin/connection.php");
    $query="select * from tbl_product order by cat_id ";
    $res=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($res))
    {
    ?> <div class="col-sm-3 text-center mb-3">
            <div class="card" style="width: 18rem;">
              <img src="admin/product/
									<?php echo $row['filename'];?>" width="18rem" height="250px" class="card-img-top" alt="image not found">
              <div class="card-body">
                <h3>
                  <a href="#" class="cardtitle"> <?php echo $row['pro_name']; ?> </a>
                </h3>
                <br /> <?php $cid=$row['cat_id']; 
      $query2="select * from tbl_category where cat_id='$cid'";
      $res2=mysqli_query($con,$query2);
      if($row2=mysqli_fetch_array($res2))
      {
          $cat=$row2['name'];     
      }
      ?> <h5 class="price"> <?php echo $cat ?> </h5>
                <br />
                <h5 class="price">Rs. <?php echo $row['s_price']; ?> </h5>
                <br />
                <h5 class="price"> <?php echo $row['expiry']; ?> </h5>
                <br />
                <h6 class="description"> <?php echo $row['description']; ?> </h6>
                <br />
                <a href="login.php" style="text-decoration:none;">
                  <button class="form-control atc my-search me-2">
                    <i class="fa-solid fa-cart-plus"></i> Add to cart </button>
                </a>
                <a href="login.php" style="text-decoration:none;">
                  <button class="form-control atc my-search me-2">
                    <i class="fa-solid fa-cart-plus"></i> Buy now </button>
                </a>
              </div>
            </div>
          </div> <?php
    }
    ?> </div>
      </div>
      <!-- product section ends -->
      <!-- footer section starts --> <?php include("footer.php"); ?>
      <!-- footer section ends -->
    </div>
    <!-- wrapper container ends -->
  </body>
</html>