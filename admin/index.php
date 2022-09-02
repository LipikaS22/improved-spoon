<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
// echo $msg;
if($msg==1)
{
    $msgerr1="Invalid email or password!";
}
if($msg==2)
{
    $msgerr1="Logout Successfully";
}

if($msg==3)
{
    $msgerr1="Don't try to fool me!";
}

?>

<html>
<head>
    <!-- Custom files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
    <body>
                <!-- wrapper container starts -->
   <div class="container-fluid mybg">
        <div class="container mypadding">
            <div class="row my-form-box">
                <div class="col-sm-7">
                     <!--breadcrumb starts-->

                    <div class="row breadcrumb-outer">
                        <div class="col-sm-12 breadcrumb-inner text-white">
                                <img src="images/logo2.png" height="100px" class="pt-3 ps-3"alt="">
                            <div class="my-div">
                                <h1>Welcome Admin!</h1>
                                
                                <br/>
                                <h5>You can sign in to access with your <br/> existing account</h5>
                            </div>
                        </div>
                    </div>
    <!--breadcrumb ends-->
                </div>
                <div class="col-sm-5 bg-white myform">
               
                        <h1>Admin Panel</h1>
                        <h4 style=" text-center;"><?php echo $msgerr1; ?></h4>
                                
                        <form action="logcode.php" method="post">
                        <h5 class="pt-5">Email</h5>
                        <input type="email" class="form-control my-add bg-dark text-white my-add" name="email" placeholder="Email"/>
                        <br/>
                        <br/>
                        <h5>Password</h5>
                        
                        <input type="password" class="form-control my-add bg-dark text-white align-center my-add" name="password" placeholder="password"/>
                        <br/>
                        <br/>
                        <input type="submit" class="btn btn-success" value="Login"/>
                        <br/>
                        <br/>
                        <h6 class="mt-5">Designed & developed by: Lipika Srivastava</h6>
                        </form>
                        <a href="../index.php">Back to Home</a>
                
                </div>
            </div>
        </div>
   </div>
                <!-- wrapper container ends -->
    </body>
</html>