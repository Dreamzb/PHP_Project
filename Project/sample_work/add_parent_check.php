<?php

 require_once("config.php");
 
	
// get all questions so we can check user's input against answers
$result = mysql_query("INSERT INTO parent_sample VALUES (".$_POST["parent_id"].",".$_POST["project_id"].",'"
			.$_POST["name"]."','".$_POST["ph"]."','".$_POST["weight"]."','".$_POST["colour"] ."','" .$_POST["tenderness"]. "','"
			.$_POST["typeside"]."','".$_POST["temp"] . "','" .$_POST["location"] . "','" .$_POST["dimension"] . "'," .$_POST["number"] .",
			'".$_POST["note"]."')");
			
		$project_id = $_POST["project_id"];
		$parent_id = $_POST["parent_id"];
		
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		header("Location: view_parent.php?project_id=".$project_id."&parent_id=".$parent_id);
	}

?>
