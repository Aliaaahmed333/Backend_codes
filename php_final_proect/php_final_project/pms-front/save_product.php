<?php
// echo "\n hello aliaa\n";

// echo $_POST['product_name'];
// echo "\n******\n";
// echo $_POST['product_price'];

$file = 'product.json';


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $name =  $_POST['product_name'];
    $price = $_POST['product_price'];

$products = json_decode(file_get_contents($file) , true);

if (empty($products)){
    $new_id = 1;
}
else {
    $last_product = end($products);
    $new_id =  $last_product['id'] +1;
}

$new_product = [

    "id" => $new_id,
    "product_name" => $name,
    "product_price" => $price
];

$products[] = $new_product;

file_put_contents($file,json_encode($products,JSON_PRETTY_PRINT));

//print_r($products);

header("Location:display_products.php");
  
}

//*/

?>