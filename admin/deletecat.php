<?php
include("connection.php");
$cat_id=$_REQUEST['cat_id'];
//echo $id;
$query="delete from tbl_category where cat_id='$cat_id'";
mysqli_query($con,$query);
header('location:category.php');
?>