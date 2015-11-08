
<html>
	
	
<head>
<link rel="stylesheet" type="text/css" href="buttons.css">
<title>View Project</title>
</head>
<form action="index.php" method="post" >
  <input id="button"type="submit" value="Log out"> 
</form>
<form action="home.php" method="post" >
  <input id="button"type="submit" value="Home"> 
</form>
<body>

<br>
<br>

<?php
 
 $parent_id = $_GET["parent_id"];
 $project_id= $_GET["project_id"];
 
 require_once("config.php");

// get all questions so we can check user's input against answers
$result = mysql_query("SELECT * FROM parent_sample where sid=".$parent_id);
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	 

	 echo "<h2 align='left'> Project ID:  <b><i>".$project_id."</i></b></h2>";
	 echo "<h1>View parent sample</h1>";
	 echo "<hr>";
	
	
	while ($row = mysql_fetch_array($result))
		{
			echo "<div id='formContainer'>";
					
					echo "<table align='center'>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Parent ID </b>: ".$row["sid"]."</td>";
					echo "<td width='30%'> <b>Project ID</b>: ".$row["pid"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Name </b>: ".$row["sample_name"]."</td>";
					echo "<td width='30%'> <b>PH </b>: ".$row["ph"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Weight</b>: ".$row["weight"]."</td>";
					echo "<td width='30%'> <b>Colour</b>: ".$row["colour"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Tenderness</b>: ".$row["tenderness"]."</td>";
					echo "<td width='30%'> <b>Typeside</b>: ".$row["typeside"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Temperature</b>: ".$row["temp"]."</td>";
					echo "<td width='30%'> <b>Location</b>: ".$row["location"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Dimension</b>: ".$row["dimension_code"]."</td>";
					echo "<td width='30%'> <b>Number</b>: ".$row["number"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Notes</b>: ".$row["note"]."</td>";
					echo "<td width='30%'> </td>";
					echo "</tr>";
					
					echo "</table>";
						
			echo "</div>";
		}
		
		
			echo "<h2>Child Sample</h2>";
			
		    echo "<div id='formContainer'>";
					
					$result = mysql_query("SELECT * FROM Child_roject where sid=".$parent_id);
						if (!$result) {
							echo 'Could not run query: ' . mysql_error();
							exit;
						}
						$countResults = 0;
						while ($row = mysql_fetch_array($result))
						{
							echo "<b>Child sample id:</b> ".$row["cid"];
							echo "<br>";
							echo "<b>Details </b>: ".$row["sid"]."|".$row["sample_name"]."|".$row["ph"]."|".$row["weight"].
							"|".$row["colour"]."|".$row["tenderness"]."|".$row["typeside"]."|".$row["temp"]."|".$row["location"]."|"
							.$row["dimensioncode"]."|".$row["number"]."|".$row["note"];
							 echo "<hr width ='50%'>";
							 $countResults +=1;
						}
						

					if($countResults == 0)
					{
						echo "No child samples.";
					}
		    
		    echo "</div>";
		    
				echo "<a href='add_child.php?project_id=".$project_id."&parent_id=".$parent_id."' id='button'>Add child sample</a>";
				echo "<br>";
				

?>
		<form name="login" action="view_child.php" method="get" accept-charset="utf-8">  
 
		<label for="pid">Child Sample ID</label>   
       &nbsp; <input type="text" name="child_id" placeholder="Enter child sample id" required> 
			  <input type="hidden" name="parent_id" value="<?php echo $parent_id; ?>" />

        <input id="button"type="submit" value="View child sample">  

		</form>  		 
		
		<form name="login" action="delete_child.php" method="get" accept-charset="utf-8">  
 
		<label for="pid">Child Sample ID</label>   
       &nbsp; <input type="text" name="child_id" placeholder="Enter child id" required> 
			  <input type="hidden" name="parent_id" value="<?php echo $_GET["parent_id"]; ?>" />
			  <input type="hidden" name="project_id" value="<?php echo $_GET["project_id"]; ?>" />

        <input id="button"type="submit" value="Delete child sample">  

</form>  



</body>
</html>
