<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
  require("../classes/post.php");
  $nocsrftoken = $_SESSION["nocsrftoken"];

  $post = Post::find($_GET['id']);
  
  if (isset($_POST['title'])) {
      
      if(!isset($nocsrftoken) or ($nocsrftoken != $_SESSION["nocsrftoken"])){
        echo "***CSRF detected; Please login";
        die();
      }

      $post = Post::delete((int)($_GET["id"]));

      echo "Deleted!";
      header("refresh: 1; url= /admin/index.php");
      //$post->update($_POST['title'], $_POST['text']);
  } 
?>
<!--   <form action="delete.php?id=<?php //echo htmlentities($_GET['id']);?>" method="POST" enctype="multipart/form-data">
    Title: 
    <input type="text" name="title" value="<?php //echo htmlentities($post->title); ?>" /> <br/>
    Text: 
      <textarea name="text" cols="80" rows="5">
        <?php// echo htmlentities($post->text); ?>
        </textarea><br/>
        <input type="hidden" name="nocsrftoken" value="<?php //echo $rand; ?>"></input>
    <input type="submit" name="Delete" value="Delete">

  </form> -->