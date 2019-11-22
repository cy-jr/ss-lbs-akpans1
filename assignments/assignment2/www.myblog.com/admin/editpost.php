<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
  require("../classes/post.php");
$nocsrftoken = $_SESSION["nocsrftoken"];
$post_title = $_POST["title"];
$post_text = $_POST["newtext"];
$post_id = $_GET["id"];

  if (isset($post_title)) {
      
      if(!isset($nocsrftoken) or ($nocsrftoken != $_SESSION["nocsrftoken"])){
        echo "***CSRF detected; Please login";
        die();
      }
    
    $post->update($post_title, $post_text,$post_id);
    
  echo $post_text." ".$post_title." ".$post_id;
    // $post = Post::update($post_title, $post_text, $post_id);
    
    header("refresh: 1; url=/index.php");
  }
?>