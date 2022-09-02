<?php
session_start();
include("admin/connection.php");
$email=$_SESSION['user'];
//echo $email;
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$pp=$row['password'];
//echo $pp;
}

$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
if($pp==$op)
{
	if($op==$np)
	{
		echo "old and new is matched";
	}
		else if($np==$cnp)
		{
			$query2="update tbl_user set password='$cnp' where email='$email'";
			mysqli_query($con,$query2);
			session_destroy();
			header("location:login.php");
		}
		else
		{	
			echo "New password and confirmed password does not matched";
		}
}


else
	{
	echo "your old password does not matched";
	}

?>