<?php
include 'config.php';
session_start();
$login = mysqli_real_escape_string($mysqli,$_POST["login"]);
if (isset($_POST["login"])){
	// create the cart 
	// $_SESSION['cart'] = new  ArrayObject;
	$_SESSION['cart'] = [];

	$email = mysqli_real_escape_string($mysqli,$_POST["email"]);
	$password = md5(mysqli_real_escape_string($mysqli,$_POST["password"]));
	$sql = "SELECT * FROM user WHERE email ='$email' and pass='$password'";
	$resultAll = mysqli_query($mysqli, $sql);
	// Check is result set le grater then 0
	if (mysqli_num_rows($resultAll) > 0) {
		session_start();
		while($row = mysqli_fetch_array($resultAll)){
			$_SESSION["userId"]  = $row['id'];
	  		$_SESSION["email"]  = $row['email'];
	  		$_SESSION['address'] = $row['adress'];
	  		$_SESSION['phone'] = $row['phoneNumber'];
	  		$_SESSION['firstName'] = $row['firstName'];
	  		$_SESSION['lastName'] = $row['lastName'];
		}
		header("Location:../home/index.php");	

	}else {
		header("Location:../login/index.php?error=No record found , Check your username/password !");
	}
	$result = mysqli_query($mysqli, $sql);
}

?>