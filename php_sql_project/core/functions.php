<?php

session_start();

function setMessage($type,$message)
{
    $_SESSION['message'] =
    [
      "type" => $type,
      "text" => $message

    ];
}

function showMessage ()
{
    if (isset($_SESSION['message'])){
        $type = $_SESSION['message']['type'];
        $text = $_SESSION['message']['text'];

        echo "<div class = 'alrt alrt-$type'> $text</div> ";
        unset($_SESSION['message']);
    }

}

function registerUsers($name,$email,$phone,$password)
{
  $conn = $GLOBALS['conn'];
  $hashPass = password_hash($password,PASSWORD_DEFAULT);

  $sql = "INSERT INTO users(name , email,phone,password) VALUES ('$name','$email','$phone','$hashPass')";
  $res = mysqli_query($conn,$sql);

  $user_id = mysqli_insert_id($conn);
  if ($res){
    $_SESSION['user'] = [
        "id" =>  $user_id,
        "name" => $name,
        "email" => $email
    ];
    return true;
  }
  else {
     return false;
  }

}

function LoginUsers($email,$password)
{
  $conn = $GLOBALS['conn'];
  
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $res = mysqli_query($conn,$sql);

 // email not found in database 
  if (mysqli_num_rows($res) === 0){
    return false ;
  }
 $user = mysqli_fetch_assoc($res);
 if (password_verify($password,$user['password']))
    {
        $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "email" => $user['email']
    ];
    return true;
  }
  else {
     return false;
  }
    
}

function getblogs ()
{
    $conn = $GLOBALS['conn'];
    $user_id = $_SESSION['user']['id'] ?? null;

    if (!$user_id) {
        return []; // ✅ لو مفيش user يرجع array فاضي بدل ما يكسر
    }
    $sql = "SELECT * FROM posts WHERE user_id = $user_id " ;
    $res = mysqli_query($conn,$sql);

    // عايزه اجيب كل ال data اللي او كل ال blogs  ,وال FUNCTION دي بترجع كل الداتا علي هيئه ARRAY
   return mysqli_fetch_all($res,MYSQLI_ASSOC);
 
}

function storeblogs($title,$content,$image)
{
   $conn = $GLOBALS['conn'];
   $realpath = realpath(__DIR__ . '/../assets/img');
    $path_name = $realpath."/".$image['name'];
   // ده ال path اللي هحطه في sql  
    $newpath = "assets/img/".$image['name'];
    

    // دي function بتاخد الملف بتاعك وتحطها في path اللي انت عاوزه 
    move_uploaded_file($image['tmp_name'] , $path_name);

    $sql  = "INSERT INTO posts (title,content ,create_at,user_id ,img)
     VALUES ('$title', '$content',NOW(),{$_SESSION['user']['id']},'$newpath')   ";

  $res = mysqli_query($conn,$sql);

  $user_id = mysqli_insert_id($conn);
  if ($res){
    return true;
  }
  else {
    return false;
  }

}

function findblog($id)
{
  $conn = $GLOBALS['conn'];
  $sql = "SELECT * FROM posts WHERE id = $id" ;

  $res = mysqli_query($conn,$sql );

  if (mysqli_num_rows($res) == 0){
      setMessage("success","Blog Not Found ");
      header("location index.php?page=blogs");
      exit();
    //$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

  }
  return mysqli_fetch_assoc($res);


}


function deleteblogs($id)
{
  $blog = findblog($id);
  $conn = $GLOBALS['conn'];
  $imagepath = realpath(__DIR__ . '/../'.$blog['img']);
  if ($imagepath && file_exists($imagepath)) 
    {
      unlink($imagepath);

    }

  $sql = "DELETE FROM posts WHERE id = $id";
  $res = mysqli_query($conn,$sql);
  if ($res){
    return true;
  }
  else {
    return false;
  }

}

function updateblogs($id,$title,$content,$image)
{

  $blog = findblog($id);
  $conn = $GLOBALS['conn']; 
  // يسال عشان لو هو عايز يغير الصوره يبقي امسح القديمه 
  // لو رفعت صوره الايرور لما اعمل var dump = 0 
  if ($image['error'] != 0)
    {
       $path = $blog['img'];
    }
    // معناه اني مش عايزه اغير الصوره اللي عندي دي 
  else
  {
      $imagepath = realpath(__DIR__ . '/../'.$blog['img']);
       if ($imagepath && file_exists($imagepath) ) 
        {
           unlink($imagepath);
        }

       $realpath = realpath(__DIR__ . '/../assets/img');
       $path_name = $realpath."/".$image['name'];
       // ده ال path اللي هحطه في sql  
       $path = "assets/img/".$image['name'];
    // دي function بتاخد الملف بتاعك وتحطها في path اللي انت عاوزه 
    move_uploaded_file($image['tmp_name'] , $path_name);

  }

  $sql  = "UPDATE posts SET title = '$title' ,content = '$content' ,img = '$path' where id = $id";
  $res = mysqli_query($conn,$sql);

  if ($res){
    return true;
  }
  else {
    return false;
  }




}



?>