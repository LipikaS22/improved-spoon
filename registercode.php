<?php
$name=$_POST['name'];
// echo $name;
$email=$_POST['email'];
// echo $email;
$mobile=$_POST['mobile'];
// echo $mobile;
$password=$_POST['password'];
// echo $password;
$city=$_POST['city'];
// echo $city;
$address=$_POST['address'];
//echo $address;
$pic=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="users/";
include("admin/connection.php");
$query2="select email from tbl_user where email='$email'";
$res=mysqli_query($con,$query2);
if($row=mysqli_fetch_array($res))
{
header("location:register.php");
}
else
{
$query="insert into tbl_user(name,email,mobile,filename,password,city,address,dor) values('$name','$email','$mobile','$pic','$password','$city','$address',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$pic);
header("location:login.php");
}

?>