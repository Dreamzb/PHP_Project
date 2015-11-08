<?php
   require_once ("db.php");
   require_once ("initialise.php");

   $post_id = $_POST['post_id'];
   $body = $_POST['body'];

      $query = "INSERT INTO Comments (`post_id`, `author`, `body`, `time`) VALUES ('$post_id', '$username', '$body', NOW())";

      $result = mysql_query($query);
      mysql_close();

      header('Location: ./index.php');

?>
