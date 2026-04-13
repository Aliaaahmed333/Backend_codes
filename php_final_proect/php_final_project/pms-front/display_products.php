<?php 
session_start();
// show message for updated 
if(isset($_SESSION['success'])){
    echo "<p style='color:green;'>".$_SESSION['success']."</p>";
    unset($_SESSION['success']);
}



$file = 'product.json';
$products = json_decode(file_get_contents($file),true);

?>

<h2> Product List </h2>
<a href= "create_product.php"> Add Product </a>

 <div class="col-12">
 <table class="table table-bordered">
   <thead>
      <tr>
       <th>Name</th>
       <th>Price</th>
        <th>Action</th>
          </tr>
        </thead>
      <tbody>
 

<?php foreach($products as $product):?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   
</head>

<tr>
<td><?php echo $product['product_name']; ?></td>
<td><?php echo $product['product_price']; ?></td> 

 <td>
 <!-- Delete -->
        <a href="delete_product.php?id=<?= $product['id']; ?>" class="btn btn-danger">
            <i class="fa-solid fa-trash-can"></i>
        </a>

        <!-- Edit -->
        <a href="edit_product.php?id=<?= $product['id']; ?>" class="btn btn-info">
            <i class="fa-solid fa-edit"></i>
        </a>
 <!-- Add to Cart ✅ -->
        <a href="add_to_cart.php?id=<?= $product['id']; ?>" class="btn btn-primary">
            Add to Cart
        </a>
 </td>


</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>