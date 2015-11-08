<?php

 require_once("config.php");
 
	
// get all questions so we can check user's input against answers
$result = mysql_query("INSERT INTO Child_roject VALUES (".$_POST["child_id"].",".$_POST["parent_id"].",'"
			.$_POST["ph"]."','".$_POST["weight"]."','".$_POST["colour"]."','".$_POST["tenderness"] ."','" .$_POST["typeside"]. "','"
			.$_POST["temp"]."','".$_POST["dimension"] . "','" .$_POST["note"] . "')");
			
		$parent_id = $_POST["parent_id"];
		$child_id = $_POST["child_id"];
		
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	else
	{
		header("Location: view_child.php?parent_id=".$parent_id."&child_id=".$child_id);
	}

?>
