<?php 

session_start();

 $conn = mysqli_connect("localhost","root","","ToDoApp");    
 if (!$conn)
 {
     echo "connect error ".mysqli_connect_error($conn);
 }

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'])){


$id = $_GET['id'];

$title = trim(htmlspecialchars(htmlentities($_POST['title'])));

$sql = "UPDATE tasks SET title = '$title' WHERE id = $id";

$result = mysqli_query($conn,$sql);

if (mysqli_affected_rows($conn) == 1)
    {
      $_SESSION['success'] = "data updated  sussessfully ";
    } 
else 
   {
    $_SESSION['errors']  = "Data not exist ";
    header("location:update.php?id=$id");
        die;
   }

// redirection 
header("location:../index.php");


}



?>


