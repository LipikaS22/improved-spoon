<?php
include("connection.php");
$pro_id=$_REQUEST['pro_id'];
//echo $pro_id;
$query="delete from tbl_product where pro_id='$pro_id'";
mysqli_query($con,$query);
header('location:viewproduct.php');
?>