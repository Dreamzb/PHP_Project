<?php
   require_once ("db.php");
   require_once ("initialise.php");

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
      <div id="linkbar" class='left'>
        <?php
         if($logged_in) {
            echo "<a href='logout.php'>Log out</a><br />";
            if($role == 'admin') {
               echo "<a href='new_post.php'>New post</a><br />";
            }
         } else {
            echo "<a href='login.php'>Log in</a><br />";
         }
        ?>
      </div>
      <div id="content">
        <?php
         $posts_query = "SELECT * FROM Posts ORDER BY time DESC LIMIT 3";
         $posts_result = mysql_query($posts_query);

         while($posts_row = mysql_fetch_assoc($posts_result)) {

            echo "<a href='./view_post.php?post_id=" . $posts_row['id'] . "'><h3>" . $posts_row['title'] . "</h3></a>";
            echo "Posted by <em>" . $posts_row['author'] . " at " . $posts_row['time'] . "</em>";
            echo "<p>" . $posts_row['body'] . "</p>";

            $comments_query = "SELECT COUNT(*) AS num_comments FROM Comments WHERE post_id='" . $posts_row['id'] . "'";
            $comments_result = mysql_query($comments_query);
            $comments_row = mysql_fetch_assoc($comments_result);
			
            echo "<a href='comments.php?post_id=" . $posts_row['id'] . "'>Comments (" . $comments_row['num_comments'] . ")</a>";
            if($role =="admin"){
            	echo "<a href='delete.php?p_id=" . $posts_row['id'] . "'><br/>Delete</a>";
            }
		

         }
         mysql_close();
        ?>
      </div>
    </div>
  </body>
</html>
