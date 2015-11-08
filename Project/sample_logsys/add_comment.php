<?php
   require_once ("db.php");
   require_once ("initialise.php");

   $post_id = $_GET['post_id'];
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
            echo "<br />Welcome  " . $username;
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
        <a href="index.php">Home</a>
        <br/>
      </div>
      <div id="content">
        <span id="content-title"></span>
        <form action = "./save_comment.php" method="POST">
          <textarea rows="3" cols="50" id="body" name="body"></textarea>
          <p>
            <input type="Submit" value="Save comment"/>
          </p>
          <input type="hidden" name="post_id" value="<?php echo $post_id;?>"/>
        </form>
      </div>
    </div>
  </body>
</html>
<?php
   mysql_close();
?>
