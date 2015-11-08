<?php

// connect to database
require_once("config.php");

// get all questions so we can check user's input against answers
$result = mysql_query("SELECT * from users");
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}

	$userID = 0;
	$found_password = false;
	while ($row = mysql_fetch_array($result))
		{
			if( $_POST["username"] == $row["username"] && $_POST["password"] == $row["password"])
			{
					$found_password = true;
					$userID = $row["uid"];
					break;
			}		
		}
		
		if($found_password)
		{
			header("Location: home.php?username=".$userID);
		}
		else
		{
			echo "Inccorect username or password";
		}
		
		
?>
