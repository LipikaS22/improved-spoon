<?php
$pro_id=$_POST['pro_id'];
//echo $id;
$pro_name=$_POST['pro_name'];
//echo $name;
include("connection.php");
$query="update tbl_product set pro_name='$pro_name' where pro_id='$pro_id'";
mysqli_query($con,$query);
header("location:product.php");
?>