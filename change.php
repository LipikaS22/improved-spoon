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

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinegar and Grocery</title>
  </head>
    <body>
   <!-- wrapper container starts -->
    <div class="container-fluid">
        
      <!-- header starts --> 
      <?php include("promenu.php"); ?>
      <!-- header ends -->
                  <div class="container">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <br>
                        <div class="col-sm-6 mt-5 pt-4 pb-5 bg-light px-5 border text-center">
                         <h4 class="mt-3"> Change Password <i class="fa-solid fa-lock"></i></h4>
                                  <br><br>
            <form action="change_code.php" method="post">
            Old Password
            <input type="text" class="form-control  my-add w-100" name="op"/>
            <br/>
            <br/>
            New Password
            <input type="text" class="form-control my-add w-100" name="np"/>
            <br/>
            <br/>
            Confirm new password
            <input type="text" class="form-control my-add w-100" name="cnp"/>
            <br/>
            <br/>
            <div class="text-center">
            <input type="submit" class="btn btn-success" value="Change Password"/>
            </div>
            </form>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                  </div>
    </div>
   <!-- wrapper container ends -->
    </body>
</html>