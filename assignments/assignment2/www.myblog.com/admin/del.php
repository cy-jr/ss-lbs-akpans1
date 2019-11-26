
<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
  require("../classes/post.php");
  $nocsrftoken = $_SESSION['nocsrftoken'];
    $post = Post::find($_GET['id']);
?>

<?php
    $rand = bin2hex(openssl_random_pseudo_bytes(16));
    $_SESSION['nocsrftoken'] = $rand;
?>

  <form action="delete.php?id=<?php echo htmlentities($_GET['id']);?>" method="POST" enctype="multipart/form-data">
    Title: 
    <input type="text" name="title" value="<?php echo htmlentities($post->title); ?>" disabled /> <br/>
    Text: 
      <textarea name="text" cols="80" rows="5" disabled >
        <?php echo htmlentities($post->text); ?>
        </textarea><br/>
        <input type="hidden" name="nocsrftoken" value="<?php echo $rand; ?>"> 
    <input type="submit" name="Delete" value="Delete">

  </form>