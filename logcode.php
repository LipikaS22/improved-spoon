<?php
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("admin/connection.php");
$query="select * from tbl_user where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
	if($email==$row['email'] and $password==$row['password'])
    {
        $_SESSION['user']=$email;
        header("location:profile.php");
    }
}
else
{
header("location:login.php");

}
?>