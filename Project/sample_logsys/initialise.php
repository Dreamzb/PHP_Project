<?php
   session_start();
   
   $logged_in = FALSE;
   $username = "";
   $role = "";

   if(isset($_SESSION['logged_in'])) {
      $logged_in = TRUE;
      $role = $_SESSION['role'];
      $username = $_SESSION['user'];
   }
?>