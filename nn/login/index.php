<?php include("../config.php");?>
<?php require_once("../header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="main.css">
<title>Login | Sparkle Jewels </title>
<link rel="icon" href="../assets/icon-logo.png">

</head>
<body>

<div class="container-fluid mt-5 h-100" style="margin-top:200px!important">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col col-xl-10">
<div class="card" style="border-radius: 1rem;  box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div class="row">

<div class="col-md-6 col-lg-5 d-flex">
<img src="../earrings3.jpg"alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>
</div>

<div class="col-md-6 col-lg-7 d-flex align-items-center">
<div class="card-body p-4 p-lg-5 text-black">
<form method="POST" action="../inc/login.php">
<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"> Sign into your account </h5>
<div class="form-outline mb-4">
<input type="email" id="form2Example17" class="form-control form-control-lg" placeholder=" Email address"
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;" name="email"/>
</div>

<div class="form-outline mb-4">
<input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Password" 
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;" name="password"/>
</div>

<div class="pt-1 mb-5">
<input class="btn btn-dark btn-lg btn-block" type="submit" value="Login" name="login">
</div>
<div class="pt-1 mb-5">
  <?php
    if(isset($_GET['error'])){
      echo '
      <div class="alert alert-danger" role="alert">
      '.$_GET['error'].'
    </div>
      ';
    }
  ?>

</div>
<p class="mb-5 pb-lg-2 text-center" style="color: #393f81;"> Don't have an account? <a href="../signup/index.php"
style="color:#A88719;">Register here!</a></p>
</form>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>