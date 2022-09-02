<?php
$user=$_POST['user'];
// echo $user."<br/>";
$pro=$_POST['pro'];
// echo $pro."<br/>";
$cat=$_POST['cat'];
// echo $cat."<br/>";
$unit=$_POST['unit'];
// echo $unit."<br.>";
$amount=$_POST['amount'];
// echo $amount."<br/>"
include("admin/connection.php");
$query="insert into tbl_order(user_id,cate_id,pro_id,unit,amount,order_date) values('$user','$cat','$pro','$unit','$amount',curdate())";

if(mysqli_query($con,$query))
{
$query2="update tbl_product set unit=unit-'$unit' where pro_id='$pro'";
mysqli_query($con,$query2);
header("location:profile.php");
}
?>