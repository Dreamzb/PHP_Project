
<html>
	
	
<head>
<link rel="stylesheet" type="text/css" href="buttons.css">
<title>All projects</title>

</head>

<body>

<br>
<br>

<?php
 
 $userID	 = $_GET["username"];
 
 require_once("config.php");

// get all questions so we can check user's input against answers
$result = mysql_query("SELECT * FROM project");
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	 
	echo "<a href='home.php?username=".$_GET["username"]."' id='button'>Home</a>";

	 echo "<h2 align='left'> Your ID:  <b><i>".$_GET["username"]."</i></b></h2>";
	 echo "<h1>View project</h1>";
	 echo "<hr>";
	
		echo "<div id='formContainer'>";

	while ($row = mysql_fetch_array($result))
		{
						echo "<b>Project id:</b> ".$row["pid"];
						echo "<br>";
						echo "<b>Details </b>: ".$row["project_name"]."|".$row["species"]."|".$row["description"]."|".$row["creation_date"];
						echo "<hr width ='50%'>";
						echo "<br>";
		}
			echo "</div>";


?>
<form name="login" action="view_project.php" method="get" accept-charset="utf-8">  
 
		<label for="pid">Project ID</label>   
       &nbsp; <input type="text" name="project_id" placeholder="Enter project id" required> 
			  <input type="hidden" name="username" value="<?php echo $_GET["username"]; ?>" />

        <input id="button"type="submit" value="View project">  

</form>  
						 
<form name="login" action="delete_project.php" method="get" accept-charset="utf-8">  
 
		<label for="pid">Project ID</label>   
       &nbsp; <input type="text" name="project_id" placeholder="Enter project id" required> 
			  <input type="hidden" name="username" value="<?php echo $_GET["username"]; ?>" />

        <input id="button"type="submit" value="Delete project">  

</form>  


</body>
</html>
