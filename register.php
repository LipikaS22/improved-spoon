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
            
<?php include("header.php"); ?>
          
          <!-- Registration form starts -->
<div class="container">
    <div class="row pb-5">
        <div class="col-sm-3"></div>
          <div class="col-sm-6">
              <form action="registercode.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3 mt-5 border-left">
                    <h1 class="text-center">Register</h1>
                    <br>
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control my-add w-100">
                    
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    <label for="exampleInputMobile" class="form-label">Mobile</label>
                    <input type="number" name="mobile" class="form-control my-add w-100">
                    
                    <label for="exampleUploadFile" class="form-label">Profile Photo</label>
                    <input type="file" name="file" class="form-control my-add w-100">
                    
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control my-add w-100">
                    <br>
                    <div class="form-floating w-100">
                        <select class="form-select my-add" id="floatingSelect" name="city" aria-label="Floating label select example">
                            <option value="">Select City</option>
                            <option>Ahmedabad</option>
                            <option>Lucknow</option>
                            <option>Varanasi</option>
                        </select>
                        <label>City</label>
                    </div>
                    <br>
                        Address
                        <textarea class="form-control w-100 my-add" name="address"></textarea>
                        
                    
                    
                  </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <br>
                  <a href="login.php">Already have Login here</a>
                  </div>
</form>

              </div>
              <div class="col-sm-3"></div>
              

          <!-- registration form ends -->
            </div>
          </div>
<!-- footer section starts -->
<?php include("footer.php") ?>  
<!-- footer section ends -->

        </div>
      <!-- wrapper container ends -->
  </body>
</html>
