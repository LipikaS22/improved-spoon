<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
include("connection.php");
$query = "select * from tbl_product order by cat_id";
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
                        <h4 class="text-white myheading">Products List</h4>
                        <br>
                            <div class="col-sm-12 text-white">
                                <br>
                                <br><br>
                                <table class="table text-white">
                                   <thead>
                                    <tr>
                                    <th>Product id</th>
                                    <th>Product name</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Unit</th>
                                    <th>Cost Price</th>
                                    <th>Selling Price</th>
                                    <th>Expiry Date</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th></th>
                                    <th></th>
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
                                        <td><?php echo $row['1'];?></td>
                                        <?php $cid=$row['2']; 
                                        $query2="select * from tbl_category where cat_id='$cid'";
                                        $res2=mysqli_query($con,$query2);
                                        if($row2=mysqli_fetch_array($res2))
                                        {
                                           $cat=$row2['name'];     
                                        }

                                        
                                        ?>
                                        <td><?php echo $cat;?></td>
                                        <td><img src="product/<?php echo $row['3'];?>" height="100px" width="100px"/></td>
                                        <td><?php echo $row['4']; ?></td>
                                        <td><?php echo $row['5']; ?></td>
                                        <td><?php echo $row['6']; ?></td>
                                        <td><?php echo $row['7']; ?></td>
                                        <td><?php echo $row['8']; ?></td>
                                        <td><?php echo $row['9']; ?></td>
                                        <td><button class="btn mybtn-link btn-success" ><a href="editpro.php?pro_id=<?php echo $row['pro_id']?>" style="text-decoration:none; color:white; display:inline;">edit</a></button></td>
                                        <td><button class="btn mybtn-link btn-success" style="text-decoration:none; display:inline"><a href="deletepro.php?pro_id=<?php echo $row['pro_id']?>" style="text-decoration:none; color:white;">delete</a></td></button>
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