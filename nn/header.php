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
<title>sparkle</title>

</head>
<body>
<style>
/* Set Defaults */
* {box-sizing: border-box;}
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rasa:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap');
@font-face {
  font-family: 'Concetta Kalvani';
  src: url("assets/fonts/Concetta_Kalvani_Signature.ttf");
}
@import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');


/* Defaults End */


/* Nav Start  */
.bg-nav{padding-bottom: 10px;background:#fff;}
.img-nav-logo {object-fit: contain;}

.flex-center-nav {
	display: flex;
	width: 100%;
	align-items: center;
	justify-content: center;
}
.nav-link-s {
	font-family: 'DM Sans',sans-serif;
	font-style: bold;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
	color: #000000 !important;
}.nav-mr {margin-right: 58px ;}
.right-nav-items{
	display: flex; flex-direction: row;width :11%;
}
.right-nav-items a i {
	color :#000;
	font-size:24px;
	margin-right : 20px !important;
    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);

}
.nav-line {border-bottom:2px solid #7D7676;}



/* Nav Mobile  */
@media only screen and (max-width: 1000px) {
  .right-nav-items{
  	width :100%;
  
  }
  .fa-user {padding : 0 20px;}
  .flex-center-nav {
  	flex-direction: column;
  	margin:0;
  	align-items: flex-start;
  	justify-content: flex-start;
  	margin:30px 0 !important;
  	font-size: 15px !important;
  }
}
/* Nav Mobile End  */
/* Nav End  */
    </style>
<header>
    <!-- Nav Start -->
<div class="container-fluid fixed-top bg-nav" >
<nav class="navbar navbar-expand-lg navbar-light nav-line">
<a class="navbar-brand" href="../home/index.php">
<img class="img-nav-logo" src="../assets/nav-logo.png"></a>

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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</div>
</header>
<!-- Nav End -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>