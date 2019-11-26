
<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
  require("../classes/post.php");


  $post = Post::find($_GET['id']);

?>

  <form action="delete.php?id=<?php echo htmlentities($_GET['id']);?>" method="POST" enctype="multipart/form-data">
    Title: 
    <input type="text" name="title" value="<?php echo htmlentities($post->title); ?>" /> <br/>
    Text: 
      <textarea name="text" cols="80" rows="5">
        <?php echo htmlentities($post->text); ?>
        </textarea><br/>

    <input type="submit" name="Delete" value="Delete">

  </form>




<!--   //generate random token
    $rand = bin2hex(openssl_random_pseudo_bytes(16));
    $_SESSION["nocsrftoken"] = $rand;

      if(!isset($nocsrftoken) or (!$nocsrftoken = $_POST['nocsrftoken'])){
         echo "CSRF detected: No token from edit page!;";
         die();
      }

    <input type="hidden" name="nocsrftoken" value="<?php echo $rand; ?>"> -->