<?php 
session_start();

if (isset($_GET['id'])){

$conn = mysqli_connect("localhost","root","","ToDoApp");
if (!$conn)
{
   $_SESSION['errors'] =  "connect error ".mysqli_connect_error($conn);
}


$id = $_GET['id'];
$sql = "DELETE FROM tasks where id = $id ";
$result = mysqli_query($conn,$sql);


 if(mysqli_affected_rows($conn) == 1)
 {
     $_SESSION['success'] = "data deleted sussessfully ";
 } 
 else 
 {
     $_SESSION['errors']  = "Data not exist ";
 }

// redirection 
header("location:../index.php");

}


?>


