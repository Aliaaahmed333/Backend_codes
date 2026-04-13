<?php 

$file = "product.json";
$products = json_decode(file_get_contents($file),true);

$id = $_GET['id'];

$selected_product  = null;

foreach($products as $product){
    if ($product['id'] == $id){
        $selected_product  = $product;
        break;
    }
}

if (!$selected_product ){
    echo "product not found";
    exit;
} 

?>

<h2> Edit Product </h2>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="update_product.php" class="form border my-2 p-3" method='POST'>

            <input type="hidden" name="id" value="<?php echo $selected_product['id']; ?>">

            <div class="mb-3">
               <label>Name</label>
               <input type="text" name="product_name" 
               value="<?php echo $selected_product['product_name']; ?>" 
               class="form-control">
             </div>

            <div class="mb-3">
              <label>Price</label>
              <input type="number" name="product_price" 
               value="<?php echo $selected_product['product_price']; ?>" 
               class="form-control">
            </div>

           <div class="mb-3">
            <input type="submit" value="Update" class="btn btn-success">
           </div>

        </form>
       </div>
       </div>
    </div>
</section>





