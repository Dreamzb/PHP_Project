<?php

 require_once("config.php");
 
	
$result = 
mysql_query("delete from users where uid=".$_GET["user_id"]);
		$username = $_GET["username"];
		
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		header("Location: view_users.php?username=".$username);
	}

?>
