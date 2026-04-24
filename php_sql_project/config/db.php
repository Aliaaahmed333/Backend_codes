<?php

try{
     $conn = mysqli_connect("localhost","root","","332_blogs");
}
catch(Exception $ex){
    if (!$conn){
    echo "error connection";
    exit();
}

}



?>






