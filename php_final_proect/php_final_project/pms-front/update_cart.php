<?php
session_start();

$id = $_POST['id'];
$quantity = $_POST['quantity'];

if (isset($_SESSION['cart'][$id])){

$_SESSION['cart'][$id]['quantity'] = $quantity;
}

header("location: cart.php");
exit();

?>



