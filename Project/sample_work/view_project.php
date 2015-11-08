
<html>
	
	
<head>
<link rel="stylesheet" type="text/css" href="buttons.css">
<title>View Project</title>
<form action="index.php" method="post" >
  <input id="button"type="submit" value="Log out"> 
</form>
<form action="home.php" method="post" >
  <input id="button"type="submit" value="Home"> 
</form>
</head>

<body>

<br>
<br>

<?php
 
 $project_id = $_GET["project_id"];
 $userID	 = $_GET["username"];
 
 require_once("config.php");

// get all questions so we can check user's input against answers
$result = mysql_query("SELECT * FROM project where pid=".$project_id);
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	 
	 
	 echo "<h2 align='left'> Your ID:  <b><i>".$_GET["username"]."</i></b></h2>";
	 echo "<h1>View project</h1>";
	 echo "<hr>";
	
	
	while ($row = mysql_fetch_array($result))
		{
			echo "<div id='formContainer'>";
					
					echo "<table align='center'>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Porject ID </b>: ".$row["pid"]."</td>";
					echo "<td width='30%'> <b>User ID</b>: ".$row["uid"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Name ID</b>: ".$row["project_name"]."</td>";
					echo "<td width='30%'> <b>Species ID</b>: ".$row["species"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Description</b>: ".$row["description"]."</td>";
					echo "<td width='30%'> <b>Start Date</b>: ".$row["creation_date"]."</td>";
					echo "</tr>";
					
					echo "</table>";
						
			echo "</div>";
		}
		
		
			echo "<h2>Parent Sample</h2>";
			
		    echo "<div id='formContainer'>";
					
					$result = mysql_query("SELECT * FROM parent_sample where pid=".$project_id);
						if (!$result) {
							echo 'Could not run query: ' . mysql_error();
							exit;
						}
						$countResults = 0;
						while ($row = mysql_fetch_array($result))
						{
							echo "<b>Parent sample id:</b> ".$row["sid"];
							echo "<br>";
							echo "<b>Details </b>: ".$row["pid"]."|".$row["sample_name"]."|".$row["ph"]."|".$row["weight"].
							"|".$row["colour"]."|".$row["tenderness"]."|".$row["typeside"]."|".$row["temp"]."|".$row["location"]."|"
							.$row["dimension_code"]."|".$row["number"]."|".$row["note"];
							 echo "<hr width ='50%'>";
							 $countResults +=1;
						}
						

					if($countResults == 0)
					{
						echo "No parent samples.";
					}
		    
		    echo "</div>";
		    
				echo "<a href='add_parent.php?username=".$_GET["username"]."&project_id=".$project_id."' id='button'>Add parent sample</a>";
				echo "<br>";

?>
<form name="login" action="view_parent.php" method="get" accept-charset="utf-8">  
 
		<label for="pid">Parent Sample ID</label>   
       &nbsp; <input type="text" name="parent_id" placeholder="Enter parent sample id" required> 
			  <input type="hidden" name="project_id" value="<?php echo $project_id; ?>" />

        <input id="button"type="submit" value="View parent sample">  

</form>  

<form name="login" action="delete_parent.php" method="get" accept-charset="utf-8">  
 
		<label for="pid">Parent Sample ID</label>   
       &nbsp; <input type="text" name="parent_id" placeholder="Enter parent id" required> 
			  <input type="hidden" name="username" value="<?php echo $_GET["username"]; ?>" />
			  <input type="hidden" name="project_id" value="<?php echo $_GET["project_id"]; ?>" />

        <input id="button"type="submit" value="Delete parent sample">  

</form>  
						 



</body>
</html>
