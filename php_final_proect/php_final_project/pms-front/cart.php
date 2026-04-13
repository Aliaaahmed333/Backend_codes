<?php require_once('inc/header.php'); 


session_start();
//unset($_SESSION['cart']);
$cart = $_SESSION['cart'] ??[] ;
// echo "<pre>";
// print_r($_SESSION['cart']);

?>


<h2 class="text-center my-4">My Cart</h2>

<div class="container">
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php if(empty($cart)) :?> 
                <tr>
                    <td colspan = "6" > cart is empty </td>
                </tr>
                <?php else :?>
                   <?php 
                     $total_price = 0;
                     $index = 1;
                     foreach ($cart as $id => $item):
                        $total_item = $item['price'] * $item['quantity'];
                        $total_price += $total_item;
                        ?>
                <tr>
                    <td><?= $index++; ?> </td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['price']; ?>$</td>
                    <td>
                        <form action = "update_cart.php" method = "POST"  class="d-flex justify-content-center">
                            <input type = "hidden" name = "id" value= "<?= $id; ?>">
                            <input type = "number" name = "quantity" value= "<?= $item['quantity'];?>" min="1" class="form-control w-50">
                            <button type = "submit"class="btn btn-warning ms-2">Update</button>
                   
                        </form>
                     </td>
                     <td> <?= $total_item; ?> $</td>
                     <td>
                        <a href = "remove_from_cart.php?id= <?= $id;?>" class="btn btn-danger">Delete</a>  
                     </td>  
                     </tr>
                    <?php endforeach; ?> 
                    <!-- total --> 
                     <tr>
                       <td colspa ="6">
                       <a href = "checkout.php"lass="btn btn-primary">Checkout</a>
                     </td>
                     </tr>
                    <?php endif; ?>
                     </tbody>      
                </table>
            </div>
  
<?php require_once('inc/footer.php'); ?>