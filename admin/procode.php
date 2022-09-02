<?php
$name=$_POST['name'];
//echo $name;
$cat=$_POST['category'];
//echo $cat;
$pic=$_FILES['file']['name'];
//echo $pic;
$unit=$_POST['unit'];
//echo $unit;
$cp=$_POST['cp'];
//echo $cp;
$sp=$_POST['sp'];
//echo $sp;
$expiry=$_POST['expiry'];
//echo $expiry;
$description=$_POST['description'];
//echo $description;
$tmp_name=$_FILES['file']['tmp_name'];
$location="product/";
include("connection.php");
echo $query="insert into tbl_product(pro_name,cat_id,filename,unit,c_price,s_price,expiry,description,date) values('$name','$cat','$pic','$unit','$cp','$sp','$expiry','$description',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$pic);
header("location:viewproduct.php");
?>