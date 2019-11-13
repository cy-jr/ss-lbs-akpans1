<?php
  session_start();
  require('../classes/db.php'); 
  require('../classes/user.php'); 
  //TODO: set cookie params 

  if (isset($_POST["user"]) and isset($_POST["password"]) )
    if (User::login($_POST["user"],$_POST["password"])){
      $_SESSION["admin"] = User::SITE;
      $_SESSION["user"] = $_POST["user"];
      //TODO: set browser info 
    }  
      

  if (!isset($_SESSION["admin"] ) or $_SESSION["admin"] != User::SITE) {
    header( 'Location: /admin/login.php' ) ;
    die();
  }
  
  //TODO: check browser info in session 

?>
