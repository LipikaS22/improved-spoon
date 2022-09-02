 <!-- topbar starts -->
 <?php
 include("admin/connection.php");
 $query3="select notification from tbl_notification order by noti_id desc limit 1";
 $res3=mysqli_query($con,$query3);
 if($row3=mysqli_fetch_array($res3))
 {
 ?>


 <div class="row">
          <div class="col-sm-12 p-1 tb-bg"><?php echo $row3['notification']; ?><i class="fa-solid fa-truck-fast"></i>
          </div>
        </div>
        <?php
 }
        ?>


        <!-- topbar ends -->

        <!-- navbar starts -->


          <div class="row nb-bg px-5 py-2 sticky-top">
            <div class="col-sm-2">
              <img src="assets/images/pnglogo.png" height="80" width="" alt="">
            </div>
            <div class="col-sm-3 mt-3 pt-1">
            <form class="d-flex"  role="search">
      <input class="form-control my-search me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
            </div>
            <div id="buttons" class="col-sm-6 pt-4 navbar">
              <ul>
                <li class="ps-0"><a href="index.php">HOME</a></li>
                <li class="ps-3"><a href="products.php">PRODUCTS</a></li>
                <li class="ps-3"><a href="contact.php">CONTACT US</a></li>
                <li class="ps-3 pe-5"><a href="about.php">ABOUT US</a></li>
                
           
                <li class="ps-3 logindesign"><a href="login.php" title="Login" class="user-btn "><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M10 8c1.7 0 3.06-1.35 3.06-3S11.7 2 10 2S6.94 3.35 6.94 5S8.3 8 10 8zm0 2c-2.8 0-5.06-2.24-5.06-5S7.2 0 10 0s5.06 2.24 5.06 5s-2.26 5-5.06 5zm-7 8h14v-1.33c0-1.75-2.31-3.56-7-3.56s-7 1.81-7 3.56V18zm7-6.89c6.66 0 9 3.33 9 5.56V20H1v-3.33c0-2.23 2.34-5.56 9-5.56z"/></svg>&nbsp; Login </a>| <a href="register.php" title="Register" class="user-btn ">Register</a>
							</li>
           
              </ul>
            </div>
            <div class="col-sm-1">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#toggler" aria-controls="offcanvasDarkNavbar">
						<!-- <span class="navbar-toggler-icon">Click Me</span> -->
						<i class="fa-solid fa-cart-arrow-down mt-4 ms-5 me-0 pe-0 fa-2x"></i>
					</button>
            </div>
          </div>
<!--  ☠️☠️☠️☠️☠️ do not touch this ☠️☠️☠️☠️☠️ -->
<div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="toggler" aria-labelledby="offcanvasDarkNavbarLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Your Cart</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<div class="cart-box py-5 bg-light rounded mt-3">

				</div>
				<div class="cart-box py-5 bg-light rounded mt-3">

				</div>
				<div class="cart-box py-5 bg-light rounded mt-3">
         
				</div>
				<div class="cart-box py-5 bg-light rounded mt-3">

				</div>
			</div>
			</div>
		<!--  ☠️☠️☠️☠️☠️ do not touch this ☠️☠️☠️☠️☠️s -->



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
          <!-- navbar ends -->