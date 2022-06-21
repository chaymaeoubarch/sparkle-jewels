<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="description.css">
    <title>Sparkle</title>
</head>
<body>
  <?php error_reporting(0); include "../header.php";?>

 <div class="container container-margin-top">
  <div class="row mt-4">
   
<?php
// error_reporting(0);
include "../inc/config.php";
  function prepare_img($img){
    $img  = explode(',',$img);
    return $img[0];
  }
  $id = mysqli_real_escape_string($mysqli,$_GET["id"]);
  $sql = "SELECT * FROM products WHERE product_id=$id";
  $resultAll = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($resultAll) > 0) {
    session_start();
    while($row = mysqli_fetch_array($resultAll)){
       $prod_id = $row["product_id"];
       $prod_name = $row['prodcut_name'];
       $description =  $row['productDescription'];
       $price = $row['price'];
       $stock = $row['stock'];
       $imgSrc = $row['imageSrc'];
    }
    $imgSrc = prepare_img($imgSrc);

  }
?>
  <div class="col">
    <img src="<?php echo $imgSrc?>" alt="..." style="width:100%;object-fit: contain;" class="Responsive images">
    </div>
    <div class="col mt-5" style="position : relative;">
      <span style="position:absolute; right:20px;top:-50px;font-size:40px;color:#000;"><i class="fa fa-times" onclick="return return_products()" ></i> </span>
    <h1> <?php echo $prod_name;?> </h1>
    <h3> <?php echo $price." $";?> <h3>
    <h5>

      <?php echo $description;?>
        
      </h5>

<form action="../cart/add_to_cart.php" method="GET">
  <div class="col mt-5 quantity buttons_added">
  <input type="button" value="-" class="minus" onclick="sub(1)">
  <input type="number"  step="1" min="1" max="<?php echo $stock;?>" value="0" name="quantity" id="id_number" value="" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
  <input type="button" value="+" class="plus" onclick="add(1,<?php echo $stock;?>)">
  <input type="hidden" name="prod_id" value="<?php echo $prod_id;?>" id="prod_id">
  <input type="hidden" id="hidden_value" name="data">
  </div>
  <input type="submit" class="col 2 btn btn-outline-dark mt-5" onclick="set_data()" value="ADD TO CART">
  <?php 
    if(isset($_GET['add'])){
      echo '  <div class="alert alert-primary my-3" role="alert">
                Item is added to cart
            </div>';
    }
  ?>

</form>
<script type="text/javascript">
  
let set_data = ()=>{
  document.getElementById('hidden_value').value = document.getElementById("id_number").value;
  console.log(document.getElementById('id_number').value);
}

</script>
</div>
</div>
</div>
<script type="text/javascript" src="description.js"></script>
</body>
</html>