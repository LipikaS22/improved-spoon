<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
include("connection.php");
$query = "select * from tbl_category order by cat_id";
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
    <body class="mydbg h-100">
    <!-- wrapper container starts -->
    <div class="container-fluid mydbg">
      <?php include("faltu.php") ?>
      <!-- menu section starts -->
      <div class="row ">
         <div class="col-sm-12 ">
          <div class="container">
            <div class="row">
                        <h4 class="text-white myheading mt-5 p-0">Add Product</h4>
                        <br>
                            <div class="col-sm-12 ms-5 ps-4 text-white">
        <form action="procode.php" method="post" enctype="multipart/form-data">
           
                    
                    <br>
                    <br>
                    <input type="text" class="my-probox" required name="name" placeholder
                ="Enter Product Name"/>
                    <br/>
                    <br>
                            <select name="category" placeholder
                ="Enter Category" class="my-probox" required>
                                <option value="">--Select Category--</option>
                                <?php
                                    while($row=mysqli_fetch_array($res))
                                    {    
                                ?>
                                <option value="<?php echo $row['cat_id']; ?>"><?php echo 
                                $row['name']; ?></option>
                                <?php
                                }
                                ?> 
                                <br>
                            </select>
                    <br/>
                    <br/>
                    <input type="file" class="my-probox" placeholder
                ="upload image" required name="file"/>
                    <br/>
                    <br/>
                    <input type="number" placeholder
                ="Enter Unit" class="my-probox" name="unit"/>
                    <br>
                    <br>
                    <input type="number" placeholder
                ="Enter Cost Price" class="my-probox" name="cp"/>
                    <br>
                    <br>
                    <input type="number" placeholder
                ="Enter Selling Price" class="my-probox" name="sp"/>
                    <br>
                    <br>
                    <input type="date" placeholder
                ="Enter Expiry Date" class="my-probox" required name="expiry"/>
                    <br>
                    <br>
                    <textarea name="description" placeholder
                ="Enter Description" class="my-probox my-textarea" required cols="30" rows="2"></textarea>
                    <br>
                    <br>
                    <input type="submit" class="btn px-5 btn-success myadd mybtn-link" value="Add Product"/>
                   

                                
                              
        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- menu section ends -->
        </div>
        <!-- wrapper container ends -->
    </body>
</html>