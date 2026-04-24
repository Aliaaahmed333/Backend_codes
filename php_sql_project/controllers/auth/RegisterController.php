<?php  

if ($_SERVER['REQUEST_METHOD'] == "POST"){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = trim($_POST['password']);



$error = validateRegister($name,$email,$phone,$password);

if (!empty($error)){
    setMessage("danger",$error);
    header("location index.php?page=register");
    exit();
}

if (registerUsers($name,$email,$phone,$password)){

   setMessage("success","user Registered");
     header("location index.php");
     exit();
}
else {
    setMessage("danger","faild registeration ");
    header("location index.php?page=register");
    exit();
}

}





?>



