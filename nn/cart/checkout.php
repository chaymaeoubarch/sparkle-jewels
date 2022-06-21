<?php
    
   include '../inc/config.php';
    session_start();
    
    function generate_orderId($id){
        $now = date("Y-m-d");
        return intval(strtotime($now)+$id);

    }
    function update_stock($proID,$quantity){
        $mysqli = new mysqli("localhost","root","","sparkle_db");
        $sql ="SELECT stock from products WHERE product_id =$proID";
        $resultAll = mysqli_query($mysqli, $sql);
	// Check is result set le grater then 0
        if (mysqli_num_rows($resultAll) > 0) {
            while($row = mysqli_fetch_array($resultAll)){
               $old_stock = $row['stock'] ;
            }
        }
        if ($old_stock !== 0){
            $old_stock -= $quantity;
            $sql ="UPDATE products set stock=$old_stock";
            mysqli_query($mysqli, $sql);
        }
    }
    function update_details($address,$phone,$id){
        $mysqli = new mysqli("localhost","root","","sparkle_db");
        $sql = "UPDATE user SET adress='$address',phoneNumber='$phone' WHERE id=$id";
        mysqli_query($mysqli, $sql);

    }
    function submit_order($quantity,$orderId,$productId,$userId,$address){
        $today = date("Y-m-d");
        $sql = "INSERT INTO orders VALUES(
         $orderId,'$today','$address',$userId
        )";   
        echo $sql;   
        $mysqli = new mysqli("localhost","root","","sparkle_db");
        mysqli_query($mysqli, $sql);
        $sql = "INSERT INTO orderDetail(quantity,productId,orderId) VALUES(
            $quantity,$productId,$orderId
        )";
        mysqli_query($mysqli, $sql);
        
    }
  
    if(isset($_SESSION['username'])){
        header("Location:../login");
    }else {
        $address = mysqli_real_escape_string($mysqli,$_POST['address']);
        $phone = mysqli_real_escape_string($mysqli,$_POST['phone']);
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        if($address===''){
            $address = $_SESSION['address'];
        }
        if($phone ===''){
            $phone = $_SESSION['phone'];
        }
        update_details($address,$phone,$_SESSION['userId']);
        // generate order for each order 

        $orderId_array = $_POST['prod_id'];
        $quantity_array = $_POST['quantity'];
        $prod_id = $_POST['prod_id'];
        for($i=0;$i < count($orderId_array); $i++){
            $order_id = generate_orderId($orderId_array[$i]);
            submit_order($quantity_array[$i],$order_id,$orderId_array[$i],$_SESSION['userId'],$address);
            update_stock($prod_id[$i],$quantity_array[$i]);
            header("Location:../order");
    }
        // submit orderDetails :
}
        

?>