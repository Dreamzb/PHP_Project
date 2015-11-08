<?php
   require_once ("db.php");
   require_once ("initialise.php");

   if($role != "admin") {
      header('Location: ./index.php');
   }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>COMP233 Courswork 4</title>
    <link href="./style.css" rel="stylesheet" type="text/css">
    </script>
  </head>
  <body id="body">
    <div id="header">
      <span id="site-title">COMP233 Courswork 4</span>
      <?php
         if($logged_in) {
            echo "<br />You are " . $username;
            if($role == 'user')
               echo " and can comment on posts";
            else if($role == 'admin')
               echo " and can add new posts";
         }
      ?>
    </div>
    <div id="main-wrapper">
      <div id="linkbar" class="left">
        <?php
         if($logged_in) {
            echo "<a href='logout.php'>Log out</a><br />";
         }
        ?>
        <a href="./index.php">Home</a>
        <br/>
      </div>
      <div id="content">
        <span id="content-title">New post</span>
        <form action = "./save_post.php" method="POST">
          <p>
            <label for="title">Title</label><br>
            <input type="text" size="30" id="title" name="title">
            <br>
            <label for="body">Content</label><br>
            <textarea rows="10" cols="30" id="body" name="body"></textarea>
          </p>
          <p>
            
            <input type="reset" value="Reset">
            <input type="Submit" value="Save post"/>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
