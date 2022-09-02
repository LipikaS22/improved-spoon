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
      <!-- header starts --> <?php include("header.php"); ?>
      <!-- header ends -->
      <!-- Slider starts -->
      <div class="row">
        <div class="col-sm-12 p-0">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/banners/1.png" class="d-block w-100 slider" alt="Image not found">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/banners/2.png" class="d-block w-100 slider" alt="Image not found">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/banners/3.png" class="d-block w-100 slider" alt="Image not found">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/banners/4.png " class="d-block w-100 slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Fourth slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-- Slider ends -->
      <!-- banner starts -->
      <div class="row pt-5 mt-3 mb-3">
        <div class="container">
          <div class="row banner px-5 pt-0">
            <div class="col-sm-1 ps-5">
              <img src="assets/images/leaf.png" alt="image not found" class="mb-0">
            </div>
            <div class="col-sm-2">
              <h4 class="pt-2">Natural <br />Products </h4>
            </div>
            <div class="col-sm-1 ps-5">
              <img src="assets/images/shoppong-cart" alt="image not found" class="mb-0">
            </div>
            <div class="col-sm-2">
              <h4 class="pt-2">Order <br />Online </h4>
            </div>
            <div class="col-sm-1 ps-5">
              <img src="assets/images/growth.png" alt="image not found" class="mb-0">
            </div>
            <div class="col-sm-2">
              <h4 class="pt-2">Home <br />Made </h4>
            </div>
            <div class="col-sm-1 ps-5">
              <img src="assets/images/On-Time-delivery.png" alt="image not found" class="mb-0">
            </div>
            <div class="col-sm-2">
              <h4 class="pt-2">Free Delivery <br />Above INR 1500 </h4>
            </div>
          </div>
        </div>
      </div>
      <!-- banner ends -->
      <!-- about glimpse starts -->
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 py-5 mb-2 text-center">
            <h4> Our palm jaggery is made of 100% pure and original palm sap. Karupatti has enormous health benefits compared to white sugar and hence it is a better replacement for you to taste the sweetness in the edibles. If you are interested to lead a healthier lifestyle then you must switch to panai vellam whenever you had a chance to consume it. Do you know Palm jaggery enriches your stamina? <a href="about.php" class="link">Read more🠮</a>
            </h4>
          </div>
        </div>
      </div>
      <!-- about glimpse ends -->
      <!-- card carousel starts -->
      <div class="row s-bg pb-5 text-center text-light pt-5">
        <h1>Vinegar and Grocery Store</h1>
        <div class="col-sm-3 text-light mt-5">
          <div class="card-body mt-5 mb-2">
            <img src="assets/images/img13.jpg" alt="" class="circle">
          </div>
          <h3 class="ms-3 mt-3 text-decor">
            <b>Tasty Food</b>
          </h3>
        </div>
        <div class="col-sm-3 text-light mt-5">
          <div class="card-body mt-5 mb-4">
            <img src="assets/images/gal8.jpg" alt="" class="circle">
            <h3 class="ps-2 ms-5 text-decor mt-3">
              <b>Jaggery Products</b>
            </h3>
          </div>
        </div>
        <div class="col-sm-3 text-light mt-5">
          <div class="card-body mt-5 mb-4">
            <img src="assets/images/img9.jpg" alt="" class="circle">
            <h3 class="mt-3 ps-1 ms-5 text-decor ">
              <b>Vinegar Products</b>
            </h3>
          </div>
        </div>
        <div class="col-sm-3 text-light mt-5">
          <div class="card-body mt-5 mb-4">
            <img src="assets/images/img9.jpeg" alt="" class="circle">
            <h3 class="mt-3 ps-1 ms-5 text-decor">
              <b>Homemade Pickles</b>
            </h3>
          </div>
        </div>
      </div>
      <!-- card carousel ends -->


      <!-- products section starts -->
      <div class="row">
        <h1 class="text-center my-text my-5">Top-Selling Products</h1> <?php
          while($row=mysqli_fetch_array($res))
          {
            $cat_id=$row['cat_id'];
        ?> <h2 class="mt-5 text-center bg-dark text-light py-3 "> <?php echo $row['name'] ?> </h2>
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
                  <a href="cart_code.php" class="btn my-btn btn-success">Add To Cart</a>
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


      <!-- About us section starts -->
      <div class="row bg-dark">
        <div class="col-sm-12">
          <h1 class="text-center text-light pt-5">Years of Excellence</h1>
          <div class="container">
            <div class="row">
              <div class="col-sm-6 py-5">
                <img src="assets/images/gal10.jpg" class="w-100 h-100" alt="image not found">
              </div>
              <div class="col-sm-6 my-5">
                <div class="frame h-100 w-100">
                  <h1 class="my-h1">Apple Cider Vinegar</h1>
                </div>
              </div>
              <!-- row -->
            </div>
            <!-- container -->
          </div>
        </div>
      </div>
      <!-- About us section ends -->
      <!-- Icons section starts -->
        <h1 class="mt-3 text-center">Customer Services</h6></h1>
      <div class="row my-5">
        <div class="col-sm-2 "><img src="assets/images/icons/service.png" class="my-icon" alt=""><h5 class="text-center">Service</h5></a></div>
        <div class="col-sm-2 "><img src="assets/images/icons/support.png" class="my-icon" alt=""><h5 class="text-center">Support</h5></div>
        <div class="col-sm-2 "><img src="assets/images/icons/customer.png" class="my-icon" alt=""><h5 class="text-center">Responsibility</h5></div>
        <div class="col-sm-2"><img src="assets/images/icons/24-hours.png" class="my-icon" alt=""><h5 class="text-center">Availability</h5></div>
        <div class="col-sm-2 "><img src="assets/images/icons/conversation.png" class="my-icon" alt=""><h5 class="text-center">Chat</h5></div>
        <div class="col-sm-2 "><img src="assets/images/icons/delivery-truck.png" class="my-icon" alt=""><h5 class="text-center">Fast-Delivery</h5></div>
      </div>
      <!-- Icon section ends -->

      <!-- About us 2 starts -->
      <div class="row bg-dark">
        <div class="col-sm-12">
          <h1 class="text-center text-light pt-5">About Gavai Swad Agro Products (P) Limited</h1>
          <div class="container">
            <div class="row">
              <div class="col-sm-6 py-5">
              <div class="frame h-100 w-100">
                  <p class=" p-5 text-center my-p"><b>The Gavai Swad Agro Products P Limited</b> (Gavai Swad) is a company founded in 2020
during the lockdown period when the food services were not available in offline mode for
window shopping.
<br>
<br>
The vision behind starting “Gavai Swad” is to provide the real taste of India and the real
products made out of desi raw material. Nowadays, getting Organic fruits and vegetables is
next to impossible since adulteration has become a common practice. Unlike conventional
ones which are coated with waxes and sprayed with chemicals, basically mummifying them.
We, at Gavai Swad treat nature as it should be and provide a wide variety of the freshest
possible products free from harmful pesticides and chemicals, that disrupt our physical health
and mental wellbeing.
<br>
<br>
We offer a range of products like: Sugarcane sirka, pickles, murabba, jaggery products to our
customers freshly made without using any chemicals &amp; pesticides. Since now all of us are
getting more internet &amp; technology savvy and we all want the services at our doorstep and
therefore gavaiswad.com portal came into existence.
<br>
<br>
The products of Gavai Swad are available on Amazon, Flipkart, Swiggy &amp; other e-commerce
based food portals.</p>
                </div>
              </div>
              <div class="col-sm-6 my-5">
                <img src="assets/images/icons/product.jpg" class="w-100 h-100" alt="image not found">
              </div>
              <!-- row -->
            </div>
            <!-- container -->
          </div>
        </div>
      </div>
      <!-- About us 2 ends -->


      <!-- footer section starts --> <?php include("footer.php"); ?>
      <!-- footer section ends -->
    </div>
    <!-- wrapper container ends -->
    <!-- JavaScript -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 3
          }
        }
      })
    </script>
  </body>
</html>