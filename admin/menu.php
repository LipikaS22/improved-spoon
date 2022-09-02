<?php

session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>
<div class="col-sm-3 bg-black pb-2 mt-0 pt-0 col-6">
                    <img src="images/user.png" class="myprofile ps-5 align-center" alt="">
                    <h4 class="text-white pt-1 text-center">Welcome Admin</h4>
                    <hr>
                    
                   <div class="d-grid gap-3 col-12">
                        
                   <a href="dashboard.php"><button class="btn w-100 mybtn-link btn-success" type="button">Dashboard</button></a>
                   <a href="category.php"><button class="btn w-100 mybtn-link btn-success" type="button">Add Category</button></a>
                   <a href="product.php"><button class="btn w-100 mybtn-link btn-success" type="button">Add Product</button></a>
                   <a href="viewproduct.php"><button class="btn w-100 mybtn-link btn-success" type="button">View Product</button></a>
                   <a href="viewusers"><button class="btn w-100 mybtn-link btn-success" type="button">View Users</button></a>
                   <a href="notification.php"><button class="btn w-100 mybtn-link btn-success" type="button">Add Notification</button></a>
                   <a href="cart.php"><button class="btn w-100 mybtn-link btn-success" type="button">View Cart</button></a>
                   <a href="viewcontact.php"><button class="btn w-100 mybtn-link btn-success" type="button">View Contact Us</button></a>
                   <a href="sold.php"><button class="btn w-100 mybtn-link btn-success" type="button">View Sold Items</button></a>
                   <a href="#"><button class="btn w-100 mybtn-link btn-success" type="button">Generate Report</button></a>
                    </div>
                </div>