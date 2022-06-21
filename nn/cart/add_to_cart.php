<?php
// QUENITY , PROD ID 
include '../inc/config.php';
session_start();

if (isset($_SESSION['email'])) {
	$id = $_GET['prod_id'];
	$sql ="SELECT * FROM products WHERE product_id =$id";
	$result = mysqli_query($mysqli,$sql);

	while($row = mysqli_fetch_array($result)){
		$array = array(
		 "product_id" => $row["product_id"],
		 "imageSrc" => $row["imageSrc"],
		 "prodcut_name" => $row["prodcut_name"],
		 "price" => $row["price"],
		 "stock" => $row["stock"],
		 "quantity" => $_GET["quantity"]
		);
	}
	array_push($_SESSION['cart'],$array);
	header("Location:http://localhost/nn/products/description.php?id=$id&add");
}else {
	header("Location:http://localhost/nn/login");
}
?>