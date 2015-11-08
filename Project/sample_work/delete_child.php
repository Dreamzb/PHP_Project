<?php

// connect to database
require_once("config.php");

	$parent_id = $_GET["parent_id"];
	$project_id = $_GET["project_id"];
	$child_id = $_GET["child_id"];
	
$result = mysql_query("delete  from Child_roject where cid=".$child_id);
	
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		header("Location: view_parent.php?parent_id=".$parent_id."&project_id=".$project_id);
	}
		
		
?>
