<?php
$name=$_POST['name'];
//echo $name;
include("connection.php");
$query="insert into tbl_category(name,date) values('$name',now())";
mysqli_query($con,$query);
header("location:category.php");
?>