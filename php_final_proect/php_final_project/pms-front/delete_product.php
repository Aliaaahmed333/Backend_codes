<?php
session_start();
$file = "product.json";
$products = json_decode(file_get_contents($file ),true);

$id = $_GET['id'];

foreach($products as $index => $product){
    if ($product['id'] == $id){
        unset($products[$index]);
        $_SESSION['success'] = "product deleted successfully";
        break;
    }
}

file_put_contents($file , json_encode(array_values($products), JSON_PRETTY_PRINT));
header("location: display_products.php?msg=deleted");
exit();





?>