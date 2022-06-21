<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="main.css">
<title>Home | Sparkle Jewels </title>
<link rel="icon" href="../assets/icon-logo.png">

</head>
<body>
<header>
<!-- Nav Start -->
<div class="container-fluid fixed-top bg-nav" >
<nav class="navbar navbar-expand-lg navbar-light nav-line">
<a class="navbar-brand" href="../home/index.php">
<img class="img-nav-logo" src="assets/nav-logo.png"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto flex-center-nav ">
<li class="nav-item">
<a class="nav-link nav-link-s nav-mr" href="../home/index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link nav-link-s nav-mr" href="../contact/index.php">Contact us</a>
</li>
<li class="nav-item">
<a class="nav-link nav-link-s nav-mr" href="../products/index.php">All Products</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0 right-nav-items">
<?php session_start(); if(isset($_SESSION['email'])){echo'<a href="../inc/logout.php"><i class="fa-solid fa-times"></i></a>';}?>
<?php if(!isset($_SESSION['email'])){echo' <a href="../login/index.php"><i class="fa-regular fa-user"></i></a>';}?>
<a href="http://localhost/nn/inc/bag_redirection.php"><i class="fa-solid fa-bag-shopping"></i></a>
</form>
</div>
</nav>
</div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modefie your information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="inc/edit.php">
        <div class="row">
          <div class="col-md-4">
            <span>Email</span>
            <div class="row">
                  <?php  echo' <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value='.$_SESSION["email"].'>';?>
            </div>
          </div>
        </div>

          <div class="row">
          <div class="col-md-4">
            <span>first name</span>
            <div class="row">
                  <?php  echo' <input type="text" class="form-control" id="exampleInputEmail1"  name="firstName" aria-describedby="emailHelp" value='.$_SESSION["firstName"].'>';?>
            </div>
          </div>
        </div>

          <div class="row">
          <div class="col-md-4">
            <span>last name</span>
            <div class="row">
                  <?php  echo' <input type="text" class="form-control" id="exampleInputEmail1"  name="lastName" aria-describedby="emailHelp" value='.$_SESSION["lastName"].'>';?>
            </div>
          </div>
        </div>

          <div class="row">
          <div class="col-md-4">
            <span>Phone</span>
            <div class="row">
                  <?php  echo' <input type="text" class="form-control" id="exampleInputEmail1"  name="phone" aria-describedby="emailHelp" value='.$_SESSION["phone"].'>';?>
            </div>
          </div>
        </div>


          <div class="row">
          <div class="col-md-4">
            <span>Address</span>
            <div class="row">
                  <?php  echo' <input type="text" class="form-control" id="exampleInputEmail1"  name="address" aria-describedby="emailHelp" value='.$_SESSION["address"].'>';?>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
    </div>
  </form>
  </div>
</div>

<!-- Nav End -->
</header>
<!-- First Main Body -->
<div class="container-fluid main-layout">
<div class="content-holder">
<h1>L U X U R Y </h1>
<p>Fine jewelry to feel confident in!</p>
</div>
</div>
<!-- First  Main Body End -->

<!-- Categories  -->
<div class="container mt-5 text-center">
<h1>SHOP BY CATEGORIES</h1>

<div class="card-deck">
<div class="card mt-5"  style="border:none;">
<a href="#"><img class="card-img-top rounded-circle" src="assets/cards/bracelet22.jpg" alt="Card image cap"></a>
<div class="card-body">
<h5 class="card-title">Bracelets</h5>
</div>
</div>

<div class="card mt-5" style="border:none;">
<a href="#"><img class="card-img-top rounded-circle" src="assets/cards/necklace11.jpg" alt="Card image cap"></a>
<div class="card-body">
<h5 class="card-title">Necklaces</h5>
</div>
</div>

<div class="card mt-5"  style="border:none;">
<a href="#"><img class="card-img-top rounded-circle"  src="assets/cards/earrings88.jpg" alt="Card image cap"></a>
<div class="card-body">
<h5 class="card-title">Earrings</h5>
</div>
</div>

<div class="card mt-5"  style="border:none;">
<a href="#"><img class="card-img-top rounded-circle" src="assets/cards/ring11.jpg" alt="Card image cap"></a>
<div class="card-body">
<h5 class="card-title">Rings</h5>
</div>
</div>
</div>
<!-- Categories  End -->

<div class="container ">
<div class="row mt-5">
<div class="col mt-5" style="padding-top:10rem; text-align:left;">
<h3>DESIGN YOUR OWN JEWERLY</h3>
<p>Bring your moment to life with a handcrafted design. 
  Our expert artisans will pour their passion into every detail
  of your beautiful custom piece.Find your style below.</p>  
<a href="../contact/index.php"> <img class="img" src="assets/Gutton_contact.png" alt=""></a>

<!-- <div class=" col-4  shadow shadow-offset-left-md mt-5 text-center">
<a href="#" style="text-decoration:none;color: black">contact us</a>
</div> -->
</div> 
<div class="col">
<img class="img" src="assets/group_17.png" alt="">
</div>  
</div>
</div>

<div class="container mt-5">
<u><h1 style="font-family: 'Roboto', sans-serif;">STYLES</h1></u>
<div class="container my-5">
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
<!--Indicators-->
<ol class="carousel-indicators">
<li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
<li data-target="#multi-item-example" data-slide-to="1"></li>
</ol> 
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

<!--First slide-->
<div class="carousel-item active">
<div class="col-md-4" style="float:left">

<div class="card mb-3">
<img class="card-img-top"src="assets/carousel/carousel1.png" alt="Card image cap"></div>
</div>
<div class="col-md-4" style="float:left">
<div class="card mb-3"><img class="card-img-top"src="assets/carousel/carousel2.png" alt="Card image cap"></div>
</div>
<div class="col-md-4" style="float:left">
<div class="card mb-3"><img class="card-img-top"src="assets/carousel/carousel3.jpg" alt="Card image cap"></div>
</div>
</div>
<!--/.First slide-->

<!--Second slide-->
<div class="carousel-item">
<div class="col-md-4" style="float:left">

<div class="card mb-3">
<img class="card-img-top"src="assets/carousel/carousel5.png" alt="Card image cap"></div>
</div>
<div class="col-md-4" style="float:left">
<div class="card mb-3"><img class="card-img-top"src="assets/carousel/carousel6.png" alt="Card image cap"></div>
</div>
<div class="col-md-4" style="float:left">
<div class="card mb-3"><img class="card-img-top"src="assets/carousel/carousel8.png" alt="Card image cap"></div>
</div>
<!--/.Second slide-->
</div>
<!--/.Slides-->
</div>

<!-- <div class="container-fluid"> -->
<div class="row mobile-rep">
<div class="col-md-8" >
<img class="img mt-5" src="assets/Capture.PNG" alt="" style="width:35rem;margin-right:20%">
</div>

<div class="col-4 mt-5 text-center" style="padding-top:10rem;">
<h3>HIGH QUALITY</h3>
<p>We work with expert jewelers who use high-quality and enduring materials, from 
  precious metals—such as recycled 
  <br>and responsiblymined gold—to 
  responsibly sourced diamonds and AAA-grade gemstones.</p>
</div>
</div>

<style>
footer{
left: 0;
bottom: 0;
width: 100%;
}
</style>
<footer class="bg mt-5 text-center" style="border-top: 1px solid #D8D8D8; padding: 5px 10px;">
<div class="container p-4">
<section class="mb-4">
<a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
<a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
<a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
<a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
</section>

<section class="">
<form action="">
<div class="row d-flex justify-content-center">
<div class="col-auto">
<p class="pt-2">Get the newsletter:</p>
</div>

<div class="col-md-5 col-12">
<div class="form-outline form mb-4">
<input type="email" id="form5Example21" class="form-control" placeholder="Enter your email"
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;"/>
</div>
</div>
<div class="container p-2">
©2022
<a class="text" style="text-decoration:none; color:#A88719"
href="https://sparklejewels.com/">SparkleJewels</a>
</div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>






