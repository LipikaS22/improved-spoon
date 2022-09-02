<!-- topbar starts -->
<?php
 include("admin/connection.php");
 $query3="select notification from tbl_notification order by noti_id desc limit 1";
 $res3=mysqli_query($con,$query3);
 if($row3=mysqli_fetch_array($res3))
 {
 ?>
 <head>
<script src="assets/js/bootstrap.bundle.js"></script>
 </head>

 <div class="row">
          <div class="col-sm-12 p-1 tb-bg"><?php echo $row3['notification']; ?><i class="fa-solid fa-truck-fast"></i>
          </div>
        </div>
        <?php
 }
        ?>


        <!-- topbar ends -->
        
        <nav class="navbar bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
            
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">My Orders</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Cart</a>
            <ul class="dropdown-menu">
              <li>
                
            <div class="com-sm-12">
            <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-2">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
            </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="editprofile.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="change.php">Change Password</a>
              </li>
              <li>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>