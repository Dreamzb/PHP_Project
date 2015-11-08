<?php
   session_start();

   require_once ("db.php");

   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = "select * from User where username='$username' and password='$password'";
   $result = mysql_query($query);

   if(mysql_num_rows($result) == 1) {
      $row = mysql_fetch_assoc($result);
      $_SESSION['logged_in'] = TRUE;
      $_SESSION['role'] = $row['role'];
      $_SESSION['user'] = $username;
      mysql_close();
      header('Location: ./index.php');
   } else {
      mysql_close();
      header('Location: ./login.php');
   }
?>