<?php

session_start();

$file = "users.json";
$data = file_get_contents($file);

$users = json_decode($data,true);

if ($users == null){
    $users = [];
}

$email = $_POST['email'];
$password = $_POST['password'];

$found = false;

foreach($users as $user){
    if ($user['email'] == $email){
        if (password_verify($password , $user['password'])){
            echo "login success ";
            $_SESSION['user'] = $user['name'];
            header("Location:index.php");
            exit();
        }
        else{
            echo "  Wrong password ";
            exit();
        }
        $found = true;
    }
}

if (!$found){
    //echo "Email not found  you need to register first ";
    header("Location:register.php?Email not found  you need to register first");
}






?>