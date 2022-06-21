<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Cart | Sparkle Jewels </title>
<link rel="icon" href="../assets/icon-logo.png">

</head>
<body>

<?php
    error_reporting(0);
    include '../header.php';
    session_start();
?>

<div class="container-fluid" style="margin-top: 200px;width: 100%;">
<div class="card">
<div class="row">
<div class="col-md-8 cart">
<div class="title">
<div class="row">
<div class="col"><h4><b>Shopping Cart</b></h4></div>
<div class="col align-self-center text-right text-muted" id="itemsCount">3 items</div>
</div>
</div>

<form action="checkout.php" method="POST"> 
<div class="container-fluid" id="root">
    <div class="cart" style="margin:0;padding:0">
      
    </div>
</div>
<div class="back-to-shop"><a href="../products">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
</div>

<div class="col-md-4 summary">
<div><h5><b>Summary</b></h5></div>
<hr>
<div class="row">
<div class="col" style="padding-left:0;" id="totalItems">ITEMS 3</div>
<div class="col text-right" id="totalPrice">&euro; 925.00</div>
</div>

<p>SHIPPING</p>
<h8 style='color: #707070;'>Personal informations:</h8>
<input type=text style="border:none" name="address" placeholder="Address">
<input type="tel"style="border:none" name="phone" placeholder="Phone number" id="phone" name="phone">

<div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
<div class="col">TOTAL PRICE</div>
<div class="col text-right" id="totalPrice2">&euro; 925.00</div>
</div>
<input class="btn" type="submit" value="CHECKOUT">

</div>
</div>
</div>
</div>
<script src="draw_cart.js"></script>
</body>
</html>