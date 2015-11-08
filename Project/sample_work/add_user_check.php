<?php

 require_once("config.php");
 
	
$result = 
mysql_query("INSERT INTO users VALUES (NULL,'".$_POST["user"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["password"]."','".$_POST["email"]."')");
			
		$username = $_POST["username"];
		
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		header("Location: view_users.php?username=".$username);
	}

?>
