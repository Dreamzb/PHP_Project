<?php

 require_once("config.php");
 
	
// get all questions so we can check user's input against answers
$result = mysql_query("INSERT INTO project VALUES (".$_POST["project_id"].",".$_POST["username"].",'"
			.$_POST["name"]."','".$_POST["species"]."','".$_POST["description"]."',now())");
			
		$project_id = $_POST["project_id"];
		$userID = $_POST["username"];
		
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		header("Location: view_project.php?username=".$userID."&project_id=".$project_id);
	}

?>
