<?php require_once ('inc/header.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
</head>

<body>

<h2>New product </h2>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="save_product.php" class="form border my-2 p-3" method='POST'>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="product_name" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="number" name="product_price" id="" class="form-control">
                        </div>
                       
                        <div class="mb-3">
                            <input type="submit" value="Send" id="" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
<?php require_once ('inc/footer.php') ?>


 




















































