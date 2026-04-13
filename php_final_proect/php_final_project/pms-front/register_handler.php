<?php
$errors = [];
$email_exists = false ;

$user_file = "users.json";

// read data from json file 
$data = file_get_contents($user_file);

// convert it to array 
$users = json_decode($data,true);

if ($users == null){
    $users = [];
}



 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];


foreach ($users as $user){
    if (isset($user['email']) && $user['email'] == $email){
        $email_exists = true;
        break;
    }
}

if ($email_exists) 
    {
        echo "Email already exists" ;
        exit();
    }
    // validate email 
    if (!filter_var($email ,FILTER_VALIDATE_EMAIL)){
       
        $errors[] = "invalid email ";
    }
    // validate password 
    if (strlen($password) < 6){
        $errors[] = "password must be at least 6 characters";
    }
    // validate confirm password 
    if ($password !== $confirm_pass){
         $errors[] = "password not match confirm password ";
    }

    if (empty($errors)){
        // new user 
        $new_user = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ];
        
        $users[] = $new_user;
        // save data in file 
        file_put_contents($user_file , json_encode($users , JSON_PRETTY_PRINT));
        
        echo "Registration successful";
        header("Location: login.php");
        exit();
    }

   else {
    foreach($errors as $error ){
        echo "<p style = 'color:red;'>$error </p>";

    }
   }

 }





?>



