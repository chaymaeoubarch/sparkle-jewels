<?php
session_start();

if(isset($_SESSION['cart'])) {
	if (count($_SESSION['cart'])==0){
		header("Location:http://localhost/nn/emptycart/");
	}else{header("Location:http://localhost/nn/cart");}
	
}else {
	header("HTTP/1.1 200 Ok");
	header("Location:http://localhost/nn/emptycart/");
}


?>