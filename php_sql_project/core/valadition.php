<?php

function validateRequired ($value , $fildname)
{
   return empty($value) ? "$fildname is required " : null;
}

function validateEmail ($email)
{
   return filter_var($email , FILTER_VALIDATE_EMAIL) ? null : "invalid email ";
}

function validatePassword ($password)
{
    if(strlen($password) < 6){
        return " password must be at least 6 characters" ;
    }
    if (!preg_match("/[A-Z]/",$password)){
        return "password must be contain upercase ";
    }
    if (!preg_match("/[a-z]/",$password)){
        return "password must be contain lowercase ";
    }

   if (!preg_match("/[0-9]/",$password)){
        return "password must be contain number ";
    }
}

function validateRegister ($name , $email , $phone,$password)
{
    $fildes =[
    "name" => $name,
    "email" => $email,
    "phone" => $phone,
    "password" =>$password
   
    ];

    foreach($fildes as $fild_name=>$value){
        if ($error = validateRequired ($value,$fild_name)){
            return $error;
        }
    }
    if ($error = validateEmail($email)){
        return $error;
    }
    if ($error = validatePassword($password)){
       return $error;
    }

}

function validateLogin ($email , $password)
{
  $fildes =[
    
    "email" =>$email,
    "password" =>$password,
   
    ];

    foreach($fildes as $fild_name=>$value){
        if ($error = validateRequired ($value,$fild_name)){
            return $error;
        }
    }
}

function validateStoreBlog($title,$content,$image)
{  
    $fildes =[
    
    "title" => $title,
    "content" => $content,
    "image"  => $image
    ];
   
    foreach($fildes as $fild_name=>$value){
        if ($error = validateRequired ($value,$fild_name)){
            return $error;
        }
    }

}
















?>



