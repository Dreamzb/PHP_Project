<?php
   require_once ("db.php");
   require_once ("initialise.php");

   $title = $_POST['title'];
   $body = $_POST['body'];

   if($role != "admin") {
      header('Location: ./login.php');
   } else {
      $query = "INSERT INTO Posts (`author`, `title`, `body`, `time`) VALUES ('$username', '$title', '$body', NOW())";

      $result = mysql_query($query);
      mysql_close();

      header('Location: ./index.php');
   }
?>
