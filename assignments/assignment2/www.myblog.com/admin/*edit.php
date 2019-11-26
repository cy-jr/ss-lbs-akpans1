<?php 
  require("../classes/auth.php");
  require("header.php");
  require("../classes/db.php");
  require("../classes/phpfix.php");
  require("../classes/post.php");
    $rand = bin2hex(openssl_random_pseudo_bytes(16));
    $_SESSION["nocsrftoken"] = $rand;

    $post = Post::find($_GET['id']);

?>
  <form action="editpost.php?id=<?php echo htmlentities($_GET['id']);?>" method="POST" enctype="multipart/form-data">
    Title: 
    <input type="text" name="title" value="<?php echo htmlentities($post->title); ?>" /> <br/>
    Text: 
      <textarea name="newtext" cols="80" rows="5">
        <?php echo htmlentities($post->text); ?>
        </textarea><br/>
        <input type="hidden" name="id" value="<?php htmlentities($_GET['id']); ?>">
        <input type="hidden" name="nocsrftoken" value="<?php echo $rand; ?>">
    <input type="submit" name="Update" value="Update">

  </form>

<?php
  require("footer.php");
?>

