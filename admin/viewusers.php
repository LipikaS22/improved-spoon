<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
include("connection.php");
$query = "select * from tbl_user order by user_id";
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
                            <h4 class="text-white myheading">User List</h4>
                            <br>
                            <div class="col-sm-12 text-white">
                                <table class="table text-white">
                                   <thead>
                                    <tr>
                                    <th>User id</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Date</th>
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
                                        <td><img src="../users/<?php echo $row['4'];?>" height="100px" width="100px"/></td>
                                        <td><?php echo $row['1'];?></td>
                                        <td><?php echo $row['2']; ?></td>
                                        <td><?php echo $row['3']; ?></td>
                                        
                                        <td><?php echo $row['6']; ?></td>
                                        <td><?php echo $row['7']; ?></td>
                                        <td><?php echo $row['8']; ?></td>
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