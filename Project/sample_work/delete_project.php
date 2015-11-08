<?php

// connect to database
require_once("config.php");

	$userID = $_GET["username"];
	$project_id = $_GET["project_id"];
// get all questions so we can check user's input against answers
$result = mysql_query("delete  from project where pid=".$project_id);
	
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		header("Location: view_projects.php?username=".$userID);
	}
		
		
?>
