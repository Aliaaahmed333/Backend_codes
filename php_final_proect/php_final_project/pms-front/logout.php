<?php

session_start();
// clear all session 
session_unset();
// destroy all sessions 
session_destroy(); 

echo "Logout Successfully <br>";

echo '<a href="login.php">Go to Register</a>';


?>

