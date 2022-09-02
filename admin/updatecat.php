<?php
$cat_id=$_POST['cat_id'];
//echo $id;
$cat_name=$_POST['cat_name'];
//echo $name;
include("connection.php");
$query="update tbl_category set name='$cat_name' where cat_id='$cat_id'";
mysqli_query($con,$query);
header("location:category.php");
?>