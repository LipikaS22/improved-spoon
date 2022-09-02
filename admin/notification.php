<?php
    session_start();
    if($_SESSION['admin']=="")
    {
        session_destroy();
        header("location:index.php");
    }
    
    include("connection.php");
    $query = "select * from tbl_notification order by noti_id desc";
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
                        <h4 class="text-white myheading">Add Category</h4>
                        <br>
                            <div class="col-sm-12 text-center text-white">
                                <form action="noticode.php
                                " method="post">
                                    <br>
                                    <h3>Add Notification</h3>
                                    
                                    <br/>
                                    <input type="text"required class="form-control my-add" name="noti" placeholder="Enter category"/>
                                    <br/>
                                    <br/>
                                    <input type="submit" class="btn mybtn-link btn-success w-25" value="Add">
                                </form>
                                <table class="table text-white">
                                   <thead>
                                    <tr>
                                    <th>S.No</th>
                                    <th>Notification</th>
                                    <th>Date & Time</th>
                                    </tr>
                                   </thead>
                                   <tbody>
                                    <?php
                                    $a=1;
                                    while($row = mysqli_fetch_array($res))
                                    {
                                    ?>

                                    <tr>
                                        <td><?php echo $a ?></td>
                                        <td><?php echo $row['notification'];?></td>
                                        <td><?php echo $row['date']; ?></td>
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