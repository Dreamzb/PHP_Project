<?php
   session_start();
   
   unset($_SESSION['logged_in']);
   unset($_SESSION['role']);
   unset($_SESSION['user']);

   header('Location: ./index.php');
?>
