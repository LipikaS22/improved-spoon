<?php

include("admin/connection.php");
$query="select * from tbl_category order by cat_id";
$res=mysqli_query($con,$query);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- bootstrap files -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- custom files -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinegar and Grocery</title>
  </head>
  <body>
    <!-- wrapper container starts -->
    <div class="container-fluid">
      <!-- header starts --> <?php include("promenu.php"); ?>
      <!-- header ends -->
      
      

      <!-- products section starts -->
      <div class="row">
        <?php
          while($row=mysqli_fetch_array($res))
          {
            $cat_id=$row['cat_id'];
        ?> <h2 class="text-center bg-dark text-light py-3 "> <?php echo $row['name'] ?> </h2>
        <div class=" owl-carousel owl-theme"> <?php
            $query2 = "select * from tbl_product where cat_id='$cat_id'"; 
            $res2 = mysqli_query($con, $query2);
            while($row2 = mysqli_fetch_array($res2)){
            ?> <div class="item">
            <div class="card">
              <img src="admin/product/
																							<?php echo $row2['filename'] ?>" class="card-img-top" style="height:300px;" alt="...">
              <div class="card-body">
                <h5> <?php echo $row2['pro_name'] ?> </h5>
                <p class="card-text">Rs. <?php echo $row2['s_price']; ?> </p>
                <div>
                  <a href="cart_code.php?pro_id=<?php echo $row2['pro_id']; ?>&cate_id=<?php echo $row2['cat_id']?>" class="btn my-btn btn-success">Add To Cart</a>
                  <a href="single.php?pro_id=<?php echo $row2['pro_id']; ?>" class="btn my-btn btn-success d-block float-end">Buy Now &rarr;</a>
                </div>
              </div>
            </div>
          </div> <?php
            }
            ?> </div> <?php
}
?>
      </div>
      <!-- product section ends -->

<!-- Discussion forum starts-->
<div class="container">
        <div class="row">
          <div class="col-sm-12">
            <form action="discuss.php" method="post">
              <h2>Any Questions?</h2>
              <textarea name="question" placeholder="Ask Questions here" class="form-control w-100 my-add"></textarea>
              <br>
              <input type="submit" class="btn btn-primary">
            </form>
            <div class="row">
              <div class="col-sm-6">
                <?php 
                $query2="select * from tbl_question order by ques_id desc";
                $res2=mysqli_query($con,$query2);
                while($row=mysqli_fetch_array($res))
                {
                ?>
                <img src="user/<?php echo $row2['filename']; ?>" alt="image not found">
                <?php 
                $email=$_SESSION['user'];
                 $query3="select * from tbl_question where email='$email'";
                 $res3=mysqli_query($con,$query3);
                 while($row3=mysqli_fetch_array($res3))
                 {
                ?>
                <h6><?php echo row3['ques'];  ?></h6>
                <?php
                 }
                }
                 ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Discussion forum ends -->

      <!-- footer section starts --> 
      <?php include("profooter.php"); ?>
      <!-- footer section ends -->


      
    </div>
    <!-- wrapper container ends -->
    
		<!-- JavaScript -->
		<script src="assets/js/bootstrap.bundle.js"> 
		</script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script src="assets/js/owl.carousel.min.js"></script>

		<script>
			$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				autoplay:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:3
					}
				}
			})

		</script>

  </body>
</html>