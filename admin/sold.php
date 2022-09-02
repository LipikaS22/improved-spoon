<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
include("connection.php");
$query = "select * from tbl_order order by order_id";
$res = mysqli_query($con, $query);

?>

<html>
    <head>
            <!-- bootstrap files -->
                <link rel="stylesheet" href="css/bootstrap.css"/>
                <script src="js/bootstrap.bundle.js"></script>
            <!-- Custom files -->
                <link rel="stylesheet" href="css/style.css"/>

            <!-- cdn files -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="mydbg">
        
    <!-- wrapper container starts -->
    <div class="container-fluid">
      <?php include("faltu.php") ?>
      <!-- menu section starts -->
      <div class="row ">
         <div class="col-sm-12 ">
          <div class="container">
            <div class="row">
                        <h4 class="text-white myheading">Sold Items</h4>
                        <br>
                            <div class="col-sm-12 text-white">
                                <table class="table text-white">
                                   <thead>
                                    <tr>
                                    <th>Order ID</th>
                                    
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Unit</th>
                                    <th>Amount</th>
                                    <th>Order Date</th>
                                    </tr>
                                   </thead>
                                   <tbody>
                                    <?php
                                    $a=1;
                                    while($row = mysqli_fetch_array($res))
                                    {
                                    ?>

                                    <tr>
                                        <td><?php echo $a; ?></td>
                                        <?php 
                                            $user_id=$row['user_id'];
                                            $query2="select * from tbl_user where user_id='$user_id'";
                                            $res2=mysqli_query($con,$query2);
                                            $row2=mysqli_fetch_array($res2);
                                        ?>
                                        <td><?php echo $row2['name']; ?></td>
                                        <td><?php echo $row2['email'];?></td>
                                        <td><?php echo $row2['mobile']; ?></td>
                                        <td><?php echo $row2['address']; ?></td>
                                        <td><?php echo $row2['city']; ?></td>
                                        <?php
                                            $cate_id=$row['cate_id'];
                                            $query3="select * from tbl_category where cat_id='$cate_id'";
                                            $res3=mysqli_query($con,$query3);
                                            $row3=mysqli_fetch_array($res3);
                                        ?>
                                        <td><?php echo $row3['name']; ?></td>
                                        <?php 
                                            $pro_id=$row['pro_id']; 
                                            $query4="select * from tbl_product where pro_id='$pro_id'";
                                            $res4=mysqli_query($con,$query4);
                                            $row4=mysqli_fetch_array($res4);
                                        ?>
                                        <td><?php echo $row4['pro_name']; ?></td>
                                        <td><?php echo $row['unit']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['order_date']; ?></td>
                                    </tr>
                                    <?php
                                    $a++;
                                    }
                                    ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wrapper container ends -->
    </body>
</html>