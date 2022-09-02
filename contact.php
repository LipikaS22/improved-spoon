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


        <!-- header starts -->

          <?php include("header.php"); ?>

        <!-- header ends -->

            
   				<!--Contact section starts-->



				<div class="container mt-5 mb-5">
                    <div class="row">
                        <h1 class="text-center">Contact us</h1>
                        <br>
                        <br>
                        <div class="col-sm-3 text-left footerouter bg-dark p-0">
                         <div class="footerinner">
                         <img src="assets/images/logo2.png" class="pt-3 ps-3 ms-3 w-75 h-50" height="80"  alt="">
                         <div class="  ps-3">
                         
                            <p>Call Me : 8299167077</p>
                            <p>Mail Me : lipika@gmail.com</p>
                            <p>Reach Us : sector J Jankipuram st. mary softpro house 226021, Uttar Pradesh </p>
                          </div>
                         </div>
                        </div>
                        <div class="col-sm-9">
                            <form action="contact_code.php" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="name" class="form-control my-add">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="mobile" placeholder="mobile" minlength="10" maxlength="12" class="form-control my-add">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <input type="email" name="email" placeholder="email" class="form-control my-add">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-12">
                                        <textarea name="message" placeholder="Message"  id=""  rows="5" class="form-control my-textarea my-add"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-success px-5">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
				<!--Contact section ends-->


        <!-- footer section starts -->
  
            <?php include("footer.php"); ?>
  
  <!-- footer section ends -->
    </div>
  <!-- wrapper container ends -->
</body>
</html>