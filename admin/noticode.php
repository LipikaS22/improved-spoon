<?php
$noti=$_POST['noti'];
// echo $noti;
include("connection.php");
$query="insert into tbl_notification (notification,date) values('$noti',now())";
mysqli_query($con,$query);
header("location:notification.php");
?>