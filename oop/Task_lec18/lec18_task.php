<?php


class session 
{

// start session 
public static function start()
{
    if (session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        } 
}
// set key 
public static function set($key,$value)
{

   self::start();
   $_SESSION[$key] = $value;

}
// get key 
public static function get($key)
{

   self::start();
   return $_SESSION[$key]  ?? null;

}
// show data of session once then deleted from session 
public static function flash($key)
{

   self::start();
   if (!isset($_SESSION[$key]))
    {
        return null;
    }
   $value = $_SESSION[$key];
   unset($_SESSION[$key]);

   return $value;

}

// check if session has this key or not 
public static function check($key)
{

   self::start();
   return isset($_SESSION[$key])  ;

}
// remove  specific key 
public static function remove($key)
{
   self::start();
   if (isset($_SESSION[$key])){
      unset($_SESSION[$key]);
   }
}

// remove all data 
public static function removeAll()
{
   self::start();
   session_unset();
   session_destroy();
}

// get all data 
public static function getAll()
{
   self::start();
   return $_SESSION;
}



}

// set new user
session :: set('user',['name' => "aliaa"]);
// get data of user 
$user = session :: get('user');
// check user 
if (session:: check('user'))
    {
        echo "logged in";
    }


// show data for one shot
session :: set('success','registered_successfully');
echo session :: flash('success');

















?>











