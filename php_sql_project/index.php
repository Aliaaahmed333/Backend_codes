<?php
require_once "core/functions.php";
require_once "view/layouts/header.php";
require_once "core/valadition.php";
require_once "config/db.php";

showMessage();
$page = isset($_GET['page']) ? $_GET['page'] :"home";


switch($page)
{
   case "home":
      include "view/layouts/home.php";
      break;
    case "about-us":
      include "view/layouts/about-us.php";
      break;
    case "contact-us":
      include "view/layouts/contact-us.php";
      break;

    case "blogs":
      include "view/blogs/index.php";
      break;
    case "create_blog":
      include "view/blogs/create.php";
      break;
    case "store_blog":
      include "controllers/blogs/BlogController.php";
      break;
    case "delete_blog":
      include "controllers/blogs/BlogController.php";
      break;
    case "update_blog":
      include "controllers/blogs/BlogController.php";
      break;
    case "edit_blog":
      include "view/blogs/edit.php";
      break;
    case "register":
      include "view/auth/register.php";
      break;
    case "sign-in":
      include "controllers/auth/RegisterController.php";
      break;
    case "logout":
      include "controllers/auth/LogoutController.php";
      break;
      break;
     case "login":
      include "view/auth/login.php";
      break;
     case "auth-login":
      include "controllers/auth/LoginController.php";
      break;



}



require_once "view/layouts/footer.php";
?>