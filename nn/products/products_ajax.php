<?php
include '../inc/config.php';
if(isset($_GET['categorie'])){
	$categorie = $_GET['categorie'];
	$sql = "SELECT * FROM products INNER JOIN categories ON categories.categorie_id = products.categorie_id WHERE categories.categorie_id = $categorie";

}else {
	$sql = "SELECT * FROM products INNER JOIN categories ON categories.categorie_id = products.categorie_id";
}
$result = mysqli_query($mysqli,$sql);
$l= [];

while($row = mysqli_fetch_array($result)){
	$l[] = $row;
}
echo json_encode($l);
?>