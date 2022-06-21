<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Products | Sparkle Jewels </title>
<link rel="icon" href="../assets/icon-logo.png">
</head>
<body>

<?php
    error_reporting(0);
    include '../header.php';
    session_start();
?>

 <div class="container mt-5" style="margin-top:200px!important;">
<select class="form-select"aria-label="Default select example" onchange="set_prod(this)" id="selected_product">
 <option value="">Categories</option>
 <option value="2">Necklaces</option>
 <option value="4">Bracelets</option>
 <option value="3">Rings</option>
 <option value="1">Earrings</option>
</select></div>
<!-- 
<div class="container  mt-5 text-center ">
<div class="card-deck" >
  <div class="card"  style="border:none;">
  <img class="card-img-top1" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973"  >
    <div class="card-body">
      <h5 class="card-title">Bold Chain Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;250</p>
    </div>
  </div>

  <div class="card"  style="border:none;">
    <img class="card-img-top1" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973"  >
    <div class="card-body">
      <h5 class="card-title">Layered Opal Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;340</p>

    </div>
  </div>

  <div class="card"  style="border:none;">
    <img class="card-img-top" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dot Chain Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;340 </p>

    </div>
  </div>
  </div>
</div>

<div class="container text-center">
<div class="card-deck" >
  <div class="card"  style="border:none;">
  <img class="card-img-top1" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973"  >
    <div class="card-body">
      <h5 class="card-title">Bold Chain Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;250</p>
    </div>
  </div>

  <div class="card"  style="border:none;">
    <img class="card-img-top1" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973"  >
    <div class="card-body">
      <h5 class="card-title">Layered Opal Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;340</p>

    </div>
  </div>

  <div class="card"  style="border:none;">
    <img class="card-img-top" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dot Chain Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;340 </p>

    </div>
  </div>
  </div>
</div>

<div class="container text-center">
<div class="card-deck" >
  <div class="card"  style="border:none;">
  <img class="card-img-top1" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973"  >
    <div class="card-body">
      <h5 class="card-title">Bold Chain Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;250</p>
    </div>
  </div>

  <div class="card"  style="border:none;">
    <img class="card-img-top1" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973"  >
    <div class="card-body">
      <h5 class="card-title">Layered Opal Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;340</p>

    </div>
  </div>

  <div class="card"  style="border:none;">
    <img class="card-img-top" src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,w_1500/https://static.mejuri.com/legacy-front/production/system/spree/products/20399/original/0_MediumTubeHoops%2825mm%29_yg_hero_comp.jpg?1624024973" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dot Chain Necklace</h5>
      <p class="card-text" style="color: #A18A68;">&dollar;340 </p>

    </div>
  </div>
  </div>
</div>

<div class="container mt-5">
  <ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="../products/bracelet.php">1</a></li>
    <li class="page-item"><a class="page-link" href="../products/earrings.php">2</a></li>
    <li class="page-item"><a class="page-link" href="../products/necklaces.php">3</a></li>
    <li class="page-item"><a class="page-link" href="../products/rings.php">4</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>

</div> -->

<div id="root_div"></div>

<script src="products.js" type="text/javascript"></script>
<style>.page-link  {text-decoration: none; color: black;}</style>
<footer class="bg mt-5 text-center" style="border-top: 1px solid #D8D8D8; padding: 5px 10px; ">
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
</body>
</html>