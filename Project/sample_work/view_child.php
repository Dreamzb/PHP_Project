
<html>
	
	
<head>
<link rel="stylesheet" type="text/css" href="buttons.css">
<title>View Child Sample</title>
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
 $child_id= $_GET["child_id"];
 
 require_once("config.php");

$result = mysql_query("SELECT * FROM Child_roject where cid=".$child_id);
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	 

	 echo "<h2 align='left'> Parent ID:  <b><i>".$parent_id."</i></b></h2>";
	 echo "<h1>View child sample</h1>";
	 echo "<hr>";
	
	
	while ($row = mysql_fetch_array($result))
		{
			echo "<div id='formContainer'>";
					
					echo "<table align='center'>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Child ID </b>: ".$row["cid"]."</td>";
					echo "<td width='30%'> <b>Parent ID</b>: ".$row["sid"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Ph </b>: ".$row["ph"]."</td>";
					echo "<td width='30%'> <b>Weight </b>: ".$row["weight"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Colour</b>: ".$row["colour"]."</td>";
					echo "<td width='30%'> <b>tenderness</b>: ".$row["tenderness"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Typeside</b>: ".$row["typeside"]."</td>";
					echo "<td width='30%'> <b>Temperature</b>: ".$row["temperature"]."</td>";
					echo "</tr>";
					
					echo " <tr>";
					echo "<td width='30%'> <b>Dimension</b>: ".$row["dimensioncode"]."</td>";
					echo "<td width='30%'> <b>Note</b>: ".$row["note"]."</td>";
					echo "</tr>";
				
					
					echo "</table>";
						
			echo "</div>";
		}

		
			

?>



</body>
</html>
