<?php
session_start();

if($_SESSION['user']=="")
{
    header("location:login.php");
}
else
{

    $pro_id=$_REQUEST['pro_id'];
    include('admin/connection.php');
    $query="select * from tbl_product where pro_id='$pro_id'";
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_array($res);
    $user=$_SESSION['user'];
    $query2="select * from tbl_user where email='$user'";
    $res2=mysqli_query($con,$query2);
    $row2=mysqli_fetch_array($res2);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Product</title>


    <link rel="stylesheet" href="assets/css/bootstrap.css">
  </head>
  <body>
    <!-- wrapper container ends -->
    <div class="container-fluid">
        <!-- container starts -->
        <div class="container">
            <!-- row starts -->
            <div class="row">
                <!-- col-sm-12 starts -->
                <div class="col-sm-12">
                    <!-- card starts -->
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-2">
                            <img src="admin/product/<?php echo $row['filename']; ?>" class="img-fluid rounded-start w-100 h-100" alt="image not found">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['pro_name']; ?></h5>
                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                    <h4>Rs. <?php echo $row['s_price'];?>/-</h4>
                                    <small>Shipping adress : - <?php echo $row2['address']; ?>,<?php echo $row2['city']; ?></small><br/><br/>
                                    <input type="radio" name="" id="" checked>Cash on Delivery
                                    
                                    <form action="single_code.php" method="post">
                                        <input type="hidden" name="user" value="<?php echo $row2['user_id']; ?>">
                                        <input type="hidden" name="pro" value="<?php echo $row['pro_id']; ?>">
                                        <input type="hidden" name="cat" value="<?php echo $row['cat_id']; ?>">
                                        <input type="hidden" name="unit" value="1">
                                        <input type="hidden" name="amount" value="<?php echo $row['s_price']; ?>">
                                    <button type="submit" class="btn btn-danger float-end">Place order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card ends -->
                </div>
                <!-- col-sm-12- ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- container ends -->

      

        
    </div>
    <!-- wrapper container ends -->
  </body>
</html>
<?php
}
?>