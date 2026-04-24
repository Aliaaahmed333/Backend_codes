<?php

// $realpath = realpath(__DIR__ .'../../assets/img');

// $path_name = $realpath."/".$_FILES['image']['name'];

// دي function بتاخد الملف بتاعك وتحطها في path اللي انت عاوزه 
//move_uploaded_file($_FILES['image']['tmp_name'] , $path_name);

if ($_SERVER['REQUEST_METHOD'] == "POST"){

if ($_GET['action'] == 'store')
{
   $title = $_POST['title'];
   $content = $_POST['content'];
   $image = $_FILES['image'];

   $error = validateStoreBlog($title,$content,$image);

   if (!empty($error)){
       setMessage("danger",$error);
       header("location index.php?page=blogs");
       exit();
   }

   if (storeblogs($title,$content,$image)){

      setMessage("success","Blog created sussessfully ");
      header("location index.php?page=blogs");
      exit();
  }
  else {
    setMessage("danger","faild create blog ");
    header("location index.php?page=create_blog");
    exit();
  }
}

elseif ($_GET['action'] == 'delete')
{
  $id = $_POST['id'];
  if (deleteblogs($id)){

      setMessage("success","Blog deleted sussessfully ");
      header("location index.php?page=blogs");
      exit();
  }
  else {
    setMessage("danger","faild delete blog ");
    header("location index.php?page=blogs");
    exit();
  }
}

elseif ($_GET['action'] == 'update')
{
   $id = $_POST['id'];
   $title = $_POST['title'];
   $content = $_POST['content'];
   $image = $_FILES['image'];
  if (updateblogs($id,$title,$content,$image)){

      setMessage("success","Blog updated sussessfully ");
      header("location index.php?page=blogs");
      exit();
  }
  else {
    setMessage("danger","faild update blog ");
    header("location index.php?page=blogs");
    exit();
  }



}



}












?>