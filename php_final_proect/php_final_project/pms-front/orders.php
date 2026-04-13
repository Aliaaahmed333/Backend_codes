<?php 
session_start();
require_once('inc/header.php');

$file = "orders.json";

if(file_exists($file)){
    $orders = json_decode(file_get_contents($file), true);
    if($orders == null){
        $orders = [];
    }
} else {
    $orders = [];
}
?>

<h2 class="text-center my-4">Orders</h2>

<div class="container">

<?php if(empty($orders)): ?>
    <p>No orders yet</p>

<?php else: ?>

<?php foreach($orders as $order): ?>

<div class="card mb-4 shadow">
    <div class="card-body">

        <!-- بيانات الشخص -->
        <h5>Customer Info</h5>
        <p><b>Name:</b> <?= $order['name']; ?></p>
        <p><b>Email:</b> <?= $order['email']; ?></p>
        <p><b>Address:</b> <?= $order['address']; ?></p>
        <p><b>Phone:</b> <?= $order['phone']; ?></p>
        <p><b>Date:</b> <?= $order['date']; ?></p>

        <hr>

        <!-- المنتجات -->
        <h5>Products</h5>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach($order['items'] as $item): 
                $item_total = $item['price'] * $item['quantity'];
            ?>

                <tr>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['price']; ?> $</td>
                    <td><?= $item['quantity']; ?></td>
                    <td><?= $item_total; ?> $</td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>

        <!-- الإجمالي -->
        <h5 class="text-end">
            Total: <?= $order['total']; ?> $
        </h5>

    </div>
</div>

<?php endforeach; ?>

<?php endif; ?>

</div>

<?php require_once('inc/footer.php'); ?>




















