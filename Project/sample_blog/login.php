<?php
   require_once ("initialise.php");
   if($logged_in) {
      header('Location: ./index.php');
      exit ;
   }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>COMP233 Courswork 4</title>
    <link href="./style.css" rel="stylesheet" type="text/css">
  </head>
  <body id="body">
    <div id="header">
      <span id="site-title">COMP233 Courswork 4</span>
    </div>
    <div id="main-wrapper">
      <div id="linkbar" class="left">
        <a href="./index.php">Home</a>
      </div>
      <div id="content">
        <span id="content-title">Login</span>
        <form action = "./validate_login.php" method="POST">
          <p>
            <label for="username"> Username </label>
            <input  type="text" name="username" id="username"/>
          </p>
          <p>
            <label for="password"> Password</label>
            <input type="text" name="password" id="password"/>
          </p>
          <p>
            <input type="Submit" value="Login"/>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
