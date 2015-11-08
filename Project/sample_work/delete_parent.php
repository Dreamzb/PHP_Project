<?php

// connect to database
require_once("config.php");

	$parent_id = $_GET["parent_id"];
	$project_id = $_GET["project_id"];
	$userID = $_GET["username"];
	
$result = mysql_query("delete  from parent_sample where sid=".$parent_id);
	
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		header("Location: view_project.php?username=".$userID."&project_id=".$project_id);
	}
		
		
?>
