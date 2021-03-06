<?php
require_once ("db.php");
require_once ("initialise.php");

$post_id = $_GET['post_id'];
$id=$_GET['id'];
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
				if ($logged_in) {
					echo "<a href='logout.php'>Log out</a><br />";
					echo "<a href='new_post.php'>New post</a><br />";
				} else {
					echo "<a href='login.php'>Log in</a><br />";
				}
				?>
				<a href="index.php">Home</a>
			</div>
			<div id="content">
				<?php
				$posts_query = "SELECT title FROM Posts WHERE id='$post_id'";

				$posts_result = mysql_query($posts_query);
				$posts_row = mysql_fetch_assoc($posts_result);

				echo "<h3>" . $posts_row['title'] . "</h3>";
				echo "<a href='add_comment.php?post_id=$post_id'>Add comment</a>";

				$comments_query = "SELECT * FROM Comments WHERE post_id='$post_id' ORDER BY time ASC";

				$comments_result = mysql_query($comments_query);

				while ($comments_row = mysql_fetch_assoc($comments_result)) {

					echo "<hr />";
					echo "Comment by <em>" . $comments_row['author'] . " at " . $comments_row['time'] . "</em>";
					echo "<p>" . $comments_row['body'] . "</p><br>";

					if ($role == "admin") {
						echo "<a href='delete.php?c_id=".$comments_row['id']. "'>Delete</a><br />";
					}
				}

				mysql_close();
				?>
			</div>
		</div>
	</body>
</html>
