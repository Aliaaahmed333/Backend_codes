<?php


// connection (localhost,username,password)
$conn = mysqli_connect("localhost","root","");

if (!$conn){
    echo "connect error".mysqli_connect_error($conn) ;
}

$sql = "create database if not exists ToDoApp";
// to make query 
mysqli_query($conn,$sql);

echo mysqli_error ($conn);

mysqli_close($conn);



// connection (localhost,username,password)
$conn = mysqli_connect("localhost","root","","ToDoApp");

if (!$conn){
    echo "connect error".mysqli_connect_error($conn) ;
}


$sql = "CREATE TABLE if not exists tasks (

    id int primary key AUTO_INCREMENT ,
    title varchar(200) not null 
)";
// to make query 
$result = mysqli_query($conn,$sql);

echo

mysqli_close($conn);



?>


