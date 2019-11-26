<?php
  session_start();
  require('../classes/db.php'); 
  require('../classes/user.php'); 
  //TODO: set cookie params 
  $httponly = TRUE;
  $path = "/";
  $domain = "akpan1.myblog.com";
  $secure = TRUE;
  session_set_cookie_params(60*15,$path,$domain,$secure,$httponly);
  session_start();

  if (isset($_POST["user"]) and isset($_POST["password"]) )
    if (User::login($_POST["user"],$_POST["password"])){
      $_SESSION["admin"] = User::SITE;
      $_SESSION["user"] = $_POST["user"];
      //TODO: set browser info 
      $_SESSION["browser"] = $_SERVER["HTTP_USER_AGENT"];
    }  
      

  if (!isset($_SESSION["admin"] ) or $_SESSION["admin"] != User::SITE) {
    header( 'Location: /admin/login.php' ) ;
    die();
  }
  //TODO: check browser info in session 
  if($_SESSION["browser"] != $_SERVER["HTTP_USER_AGENT"]){
    echo "Detected Session Hijacking attempt";
    die();
  }
?>
