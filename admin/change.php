<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- bootstrap files -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.bundle.js"></script>
    <!-- custom files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/owl.carousel.min.css">
		
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinegar and Grocery</title>
  </head>
    <body class="mydbg text-white">
   <!-- wrapper container starts -->
    <div class="container-fluid mydbg">
        
      <!-- header starts --> 
      <?php include("faltu.php"); ?>
      <!-- header ends -->
                  <div class="container">
                    <div class="row">
                        <h1 class="my-heading text-center">Change Password</h1>
                        <br>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4 text-center">
                                  
            <form action="change_code.php" method="post">
            Old Password
            <input type="text" class="form-control my-add w-100" name="op"/>
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
                        <div class="col-sm-4"></div>
                    </div>
                  </div>
    </div>
   <!-- wrapper container ends -->
    </body>
</html>