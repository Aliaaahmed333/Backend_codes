<?php
session_start();

$cart = $_SESSION['cart'];

if (empty($cart)){
    echo "<h3> cart is empty </h3>";
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone =  $_POST['phone'];
$notes = $_POST['notes'];

$total_price = 0;
foreach($cart as $item){
  $total_item = $item['price'] * $item['quantity'];
  $total_price += $total_item;
  

}


$file = "orders.json";
if (file_exists($file)){
$orders = json_decode(file_get_contents($file),true);
if ($orders == null){
   $orders = [];
}

}
else {
     $orders = [];
}

// make new order
$new_order = [

"name" => $name,
"email" => $email,
"address" => $address,
"phone" => $phone,
"notes" => $notes,
"items" => $cart,
"total" => $total_price ,
"date" => date("Y-m-d H:i:s")


];

$orders[] = $new_order;
// put content in json file 
file_put_contents($file,json_encode($orders,JSON_PRETTY_PRINT));

//8) we empty cart
$_SESSION['cart'] = [];

$_SESSION['success'] = "Order placed successfully";

header("Location: display_products.php");
exit();

?>







