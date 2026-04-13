<?php require_once ('inc/header.php');
$file = "product.json";
$products = json_decode(file_get_contents($file),true);



?>
 
       <!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">
                With this shop homepage template
            </p>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

        <?php if(empty($products)): ?>
            <p>No products available</p>

        <?php else: ?>
            <?php foreach($products as $product): ?>

                <div class="col mb-5">
                    <div class="card h-100 shadow-sm">

                        <!-- Product image -->
                        <img class="card-img-top" 
                             src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" 
                             alt="product" />

                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">

                                <!-- Product name -->
                                <h5 class="fw-bolder">
                                    <?= $product['product_name']; ?>
                                </h5>

                                <!-- Product price -->
                                <p class="text-success">
                                    <?= $product['product_price']; ?> $
                                </p>

                            </div>
                        </div>

                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">

                                <a href="add_to_cart.php?id=<?= $product['id']; ?>" 
                                   class="btn btn-outline-dark mt-auto">
                                   Add to Cart
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>

        </div>
    </div>
</section>

<?php require_once ('inc/footer.php'); ?>