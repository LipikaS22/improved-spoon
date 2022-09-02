
      <div class="row mytb bg-success">
        <div class="col-sm-1">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#toggler" aria-controls="offcanvasDarkNavbar">
            <!-- <span class="navbar-toggler-icon">Click Me</span> -->
            <i class="fa-solid fa-bars mt-2"></i>
            </button>
            
<!--  ☠️☠️☠️☠️☠️ do not touch this ☠️☠️☠️☠️☠️ -->
<div class="offcanvas offcanvas-start text-bg-white bg-black" tabindex="-1" id="toggler" aria-labelledby="offcanvasDarkNavbarLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel">Welcome Admin</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body"><img src="images/user.png" class="myprofile ps-5 align-center" alt="">
                    <hr>
                    
                   <div class="d-grid gap-3 col-12">
                        
                   <a href="dashboard.php"><button class="btn w-100 mybtn-link btn-success" type="button">Dashboard</button></a>
                   <a href="category.php"><button class="btn w-100 mybtn-link btn-success" type="button">Add Category</button></a>
                   <a href="product.php"><button class="btn w-100 mybtn-link btn-success" type="button">Add Product</button></a>
                   <a href="viewproduct.php"><button class="btn w-100 mybtn-link btn-success" type="button">View Product</button></a>
                   <a href="viewusers"><button class="btn w-100 mybtn-link btn-success" type="button">View Users</button></a>
                   <a href="notification.php"><button class="btn w-100 mybtn-link btn-success" type="button">Add Notification</button></a>
                   <a href="viewcart.php"><button class="btn w-100 mybtn-link btn-success" type="button">View Cart</button></a>
                   <a href="viewcontact.php"><button class="btn w-100 mybtn-link btn-success" type="button">View Contact Us</button></a>
                   <a href="sold.php"><button class="btn w-100 mybtn-link btn-success" type="button">View Sold Items</button></a>
                   <a href="#"><button class="btn w-100 mybtn-link btn-success" type="button">Generate Report</button></a>
                    </div>
			</div>
			</div>
		<!--  ☠️☠️☠️☠️☠️ do not touch this ☠️☠️☠️☠️☠️s -->
        </div>
        <div class="col-sm-11 pt-1 text-end text-black">
          <div class="dropdown">
            <button class="btn dropdown-toggle btn-success m-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              
                <i class="fa-solid fa-user"></i>
             
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="change.php">Change Password</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <!-- toggle -->
      
      <!-- toggle ends -->
  
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
