<?php
session_start();
$file = "product.json";
$products = json_decode(file_get_contents($file ),true);

$id = $_POST['id'];

foreach($products as &$product){
    if ($product['id'] == $id)
        {
            $product['product_name'] = $_POST['product_name'];
            $product['product_price'] = $_POST['product_price'];
            $_SESSION['success'] = "product updated successfully";
            break;
        }
}

file_put_contents($file ,json_encode($products),JSON_PRETTY_PRINT);
header("location: display_products.php");

exit();



?>





