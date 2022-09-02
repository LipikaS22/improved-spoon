<?php

?>
<!doctype html>
<html lang="en">
  <head>

    <!-- bootstrap files -->

    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
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
            

        <!-- topbar starts -->


        <div class="row">
          <div class="col-sm-12 p-1 tb-bg">
          Free Shipping on order above Rs.1500  <i class="fa-solid fa-truck-fast"></i>
          </div>
        </div>


        <!-- topbar ends -->

        <!-- navbar starts -->


          <div class="row nb-bg px-5 py-2 sticky-top">
            <div class="col-sm-2">
              <img src="assets/images/pnglogo.png" height="80" width="" alt="">
            </div>
            <div class="col-sm-3 mt-3 pt-1">
            <form class="d-flex"  role="search">
      <input class="form-control my-search me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
            </div>
            <div class="col-sm-1"></div>
            <div id="buttons" class="col-sm-6 pt-4 navbar">
              <ul>
                <li class="ps-0"><a href="index.php">HOME</a></li>
                <li class="ps-5"><a href="#">PRODUCTS</a></li>
                <li class="ps-5"><a href="#">CONTACT US</a></li>
           
                <li class="ps-5 logindesign"><a href="login.php" title="Login" class="user-btn "><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M10 8c1.7 0 3.06-1.35 3.06-3S11.7 2 10 2S6.94 3.35 6.94 5S8.3 8 10 8zm0 2c-2.8 0-5.06-2.24-5.06-5S7.2 0 10 0s5.06 2.24 5.06 5s-2.26 5-5.06 5zm-7 8h14v-1.33c0-1.75-2.31-3.56-7-3.56s-7 1.81-7 3.56V18zm7-6.89c6.66 0 9 3.33 9 5.56V20H1v-3.33c0-2.23 2.34-5.56 9-5.56z"/></svg>&nbsp; Login </a>| <a href="register.php" title="Register" class="user-btn ">Register</a>

                <li class="ps-5"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
							</li>
           
              </ul>
            </div>
          </div>

          <!-- navbar ends -->


          <!-- Login form starts -->
          <div class="container">
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6 my-5">
              <form action="logcode.php" method="post">
                  <div class="mb-3 mt-5">
                    <h1 class="text-center">Login</h1>
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control text-center w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control text-center w-100" id="exampleInputPassword1">
                  </div>
                  <br/>
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <br>
                  <a href="forget.php">Forget Password?</a>
                  <br>
                  <a href="register.php">Don't have an account?</a>
                  </div>
                  
</form>
                 
              </div>
              
              <div class="col-sm-3"></div>
              
              
          <!-- login form ends -->


            </div>
          </div>

<!-- footer starts -->

<?php include("footer.php") ?>

<!-- footer ends -->
        </div>
      <!-- wrapper container ends -->
  </body>
</html>
