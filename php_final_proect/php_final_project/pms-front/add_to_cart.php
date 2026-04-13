<?php
session_start();

//1) get content of products 
$file = "product.json";

$products = json_decode(file_get_contents($file),true);

$id = $_GET['id'];
foreach($products as $product){
// 2) check if product_id exist or not 
if ($product['id'] == $id){
// 3) check if cart exist or not if not exist i make empty session 
   if (!isset($_SESSION['cart'])){
       $_SESSION['cart'] = [];
   }
// 4) if cart of id exist and this meen i choose this project to cart before and i want to increase quantity
  if (isset($_SESSION['cart'][$id])){
   $_SESSION['cart'][$id]['quantity']++;
  }
  //5) if not exist we add it to cart 
 else {
  $_SESSION['cart'][$id] = [
        "name" => $product['product_name'],
        "price" => $product['product_price'],
        "quantity" => 1
    ];
}

}
}



header("location: display_products.php");
exit();

?>