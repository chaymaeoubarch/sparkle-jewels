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
    <title>Sign Up | Sparkle Jewels </title>
<link rel="icon" href="../icon-logo.png">

</head>
<body>
<div class="container-fluid mt-5 h-100 py-5">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-lg-12 col-xl-9">
<div class="card text-black" style="border:none; border-radius: 25px; box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div class="card-body">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

<form class="mx-1 mx-md-4" method="POST" action="../inc/check.php">
<div class="d-flex flex-row align-items-center mb-4">
<div class="form-outline flex-fill mb-0">
<input type="text" id="form3Example1c" 
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;"class="form-control" placeholder="first name" name="firstName" />
</div>
<div class="form-outline flex-fill mb-0">
<input type="text" id="form3Example1c" 
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;"class="form-control" placeholder="last name" name="lastName" />
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
<div class="form-outline flex-fill mb-0">
<input type="text" id="form3Example3c" 
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;" class="form-control" placeholder="Number" name="phone"/>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
<div class="form-outline flex-fill mb-0">
<input type="text" id="form3Example4c"
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;" class="form-control" placeholder="Address" name="address"/>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
<div class="form-outline flex-fill mb-0">
<input type="email" id="form3Example4c"
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;" class="form-control" placeholder="Email" name="email"/>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
<div class="form-outline flex-fill mb-0">
<input type="password" id="form3Example4c"
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;" class="form-control" placeholder="Password" name="password"/>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
<div class="form-outline flex-fill mb-0">
<input type="password" id="form3Example4cd" 
style="border:none;
border-bottom: 1px solid #D8D8D8;
padding: 5px 10px;
outline: none;"class="form-control" placeholder="Repeat Password" />
</div>
</div>
<div class="pt-1 mb-2">
    <?php 
        if(isset($_GET['error'])){
            echo '    <div class="alert alert-danger" role="alert">
                    '.$_GET['error'].'
                        </div>';
        }
    ?>

</div>

<div class="pt-1 mb-2">
    <?php 
        if(isset($_GET['success'])){
            echo '    <div class="alert alert-info" role="alert">
                    '.$_GET['success'].'
                        </div>';
        }
    ?>

</div>

<div class="pt-1 mb-2">
<input class="btn btn-dark btn-lg btn-block" type="submit" value="SUBMIT" name="SignIn">
<p class="mb-5 pb-lg-2 text-center" style="color: #393f81;"> Already registered ? <a href="../login/index.php"
style="color:#A88719;">Login here!</a></p>
</form>
</div>
</form>
</div>
<div class="col-md-10 col-lg-5  col-xl-6 d-flex align-items-center order-1 order-lg-2">
<img src="../products/earrings/earrings88.jpg" class="img-fluid" alt="Sample image">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>