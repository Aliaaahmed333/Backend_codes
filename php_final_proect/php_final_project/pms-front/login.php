<?php require_once "inc/header.php"?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>

<h2>Login</h2>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
          <form action="login_handler.php" class="form border my-2 p-3" method = 'POST'>
                    <div class="mb-3">
                    
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type = 'password' name="password" id="" class="form-control" rows="7"></textarea>
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
</html>

<?php require_once('inc/footer.php') ?>