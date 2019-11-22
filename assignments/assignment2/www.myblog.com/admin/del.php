<?php 
  // require("../classes/auth.php");
  // require("header.php");
  // require("../classes/db.php");
  // require("../classes/phpfix.php");
  // require("../classes/post.php");
?>

<?php  
  // $post = Post::delete((int)($_GET["id"]));
  // if(isset($post)){
  // 	echo "<script type='javascript'> alert('Deleted!'); </script>";
  // }
  // header("refresh: 1; url= /admin/index.php");
?>

<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
  require("../classes/post.php");
  //generate random token
    $rand = bin2hex(openssl_random_pseudo_bytes(16));
    $_SESSION["nocsrftoken"] = $rand;

  $post = Post::find($_GET['id']);

?>

  <form action="delete.php?id=<?php echo htmlentities($_GET['id']);?>" method="POST" enctype="multipart/form-data">
    Title: 
    <input type="text" name="title" value="<?php echo htmlentities($post->title); ?>" /> <br/>
    Text: 
      <textarea name="text" cols="80" rows="5">
        <?php echo htmlentities($post->text); ?>
        </textarea><br/>
        <input type="hidden" name="nocsrftoken" value="<?php echo $rand; ?>">
    <input type="submit" name="Delete" value="Delete">

  </form>

<?php 
  // require("../classes/auth.php");
  // require("header.php");
  // require("../classes/db.php");
  // require("../classes/phpfix.php");
  // require("../classes/post.php");
?>

<?php  
  // $post = Post::delete((int)($_GET["id"]));
  // header("Location: /admin/index.php");
?>

