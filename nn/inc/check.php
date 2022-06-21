<?php
include "config.php";
echo phpversion();
$sign = mysqli_real_escape_string($mysqli,$_POST["SignIn"]);
if(isset($sign)){
	$firstName = mysqli_real_escape_string($mysqli,$_POST["firstName"]);
	$lastName = mysqli_real_escape_string($mysqli,$_POST["lastName"]);
	$phone = mysqli_real_escape_string($mysqli,$_POST["phone"]);
	$address = mysqli_real_escape_string($mysqli,$_POST["address"]);
	$email = mysqli_real_escape_string($mysqli,$_POST["email"]);
	$password = md5(mysqli_real_escape_string($mysqli,$_POST["password"]));
	$sql = "SELECT * FROM user WHERE email = '$email'";
	$result = mysqli_query($mysqli, $sql);
	// Check is result set le grater then 0
	if (mysqli_num_rows($result) > 0) {
		 header("location:../signup/index.php?error=Email exists , Chose an other one !");
	}else {
		$sql = "
		INSERT INTO user (firstName,lastName,adress,phoneNumber,email,pass) 
			VALUES('$firstName','$lastName','$address','$phone','$email','$password')
	";
		$result = mysqli_query($mysqli, $sql);
		 header("location:../signup/index.php?success=Account is succesfully created!");
	}

	}
	
	


?>