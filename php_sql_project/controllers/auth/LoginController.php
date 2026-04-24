<?php  

if ($_SERVER['REQUEST_METHOD'] == "POST"){

$email = $_POST['email'];
$password = trim($_POST['password']);


$error = validateLogin($email,$password);

if (!empty($error)){
    setMessage("danger",$error);
    header("location index.php?page=login");
    exit();
}

if (LoginUsers($email,$password)){

   setMessage("success","user login ");
     header("location index.php");
     exit();
}
else {
    setMessage("danger","faild login ");
    header("location index.php?page=login");
    exit();
}


}





?>
