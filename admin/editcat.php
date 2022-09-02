<?php
$cat_id=$_REQUEST['cat_id'];
//echo $id;
include("connection.php");
$query="select * from tbl_category where cat_id='$cat_id'";
$res=mysqli_query($con,$query);
if($row = mysqli_fetch_array($res)){
?>
<html>
<head>
<title>
Updation-Page
</title>

            <!-- bootstrap files -->
            <link rel="stylesheet" href="css/bootstrap.css"/>
                <script src="js/bootstrap.bundle.js"></script>
            <!-- Custom files -->
                <link rel="stylesheet" href="css/style.css"/>

            <!-- cdn files -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- wrapper container starts -->
    <div class="container-fluid mydbg">
        
      <?php include("faltu.php") ?>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-5 text-white text-center">
                                
                <h1 class="text-white myheading">Update Info</h1>
                <form action="updatecat.php" method="post">
                <input type="hidden" name="cat_id" value="<?php echo $row['cat_id'];?>"/>

                <h3 class="mt-5">Category Name</h3>
                <input type="text" class="form-control my-add" name="cat_name" value="<?php echo $row['name'];?>"/>
                <br/>
                <br>
                <input type="submit" class="btn mybtn-link btn-success w-25" value="UPDATE">
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <!-- wrapper container ends -->
</body>
</html>

<?php
}
?>