<?php
include("admin/connection.php");
$query="select * from tbl_category";
$res=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Index</title>
		
		<!--  bootstrap css start -->
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		
	</head>
	<body>
		<div class="container-fluid">
			<!-- outer wrapper start -->
            
<?php
while($row = mysqli_fetch_array($res)){
	$cat_id = $row['cat_id'];

?>
<h2 class="mt-5 text-center bg-dark text-light py-3 "><?php echo $row['name'] ?></h2>
<div class=" owl-carousel owl-theme">
	<?php
	$query2 = "select * from tbl_product where cat_id='$cat_id'"; 
	$res2 = mysqli_query($con, $query2);
	while($row2 = mysqli_fetch_array($res2)){
	?>
	<div class="item">
		<div class="card">
		<img src="admin/product/<?php echo $row2['filename'] ?>" class="card-img-top" style="height:300px;" alt="...">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<div>
			<a href="#" class="btn my-btn">Add To Cart</a>
			<a href="#" class="btn my-btn d-block float-end">Buy Now &rarr;</a>
			</div>
		</div>
		</div>
	</div>
	<?php
	}
	?>
	
</div>

<?php
}
?>

	<!-- outer wrapper end -->
    </div>
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
						items:4
					}
				}
			})

		</script>

	</body>
</html>