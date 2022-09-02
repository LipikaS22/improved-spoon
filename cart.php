<?php
    session_start();
    if($_SESSION['user']==''){
        header("location:login.php");
    }else{


        include("admin/connection.php");

        $user = $_SESSION['user'];

        $query1 = "select * from tbl_user where email='$user'";

        $res1 = mysqli_query($con, $query1);

        $row1 = mysqli_fetch_array($res1);

        $user_id = $row1['user_id'];
        // echo $user_id;
        

        $query2 = "select * from tbl_cart where user_id='$user_id'";
        $res2 = mysqli_query($con, $query2);
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  bootstrap css start -->
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		
    <title>Document</title>
</head>
<body>


    <div class="container">

        <?php
        while($row2 = mysqli_fetch_array($res2)){

            $pro_id = $row2['pro_id'];

            $query3 = "select * from tbl_product where pro_id='$pro_id'";
            $res3 = mysqli_query($con, $query3);
            $row3 = mysqli_fetch_array($res3);

        ?>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-2">
                        <img src="admin/product/<?php echo $row3['filename'] ?>" class="img-fluid rounded-start w-100 h-100" alt="...">
                        </div>
                        <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row3['pro_name'] ?></h5>
                            <p class="card-text"><?php echo $row3['description'] ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>

        <?php
        }
        ?>

    </div>


</body>
</html>

<?php
    }
?>