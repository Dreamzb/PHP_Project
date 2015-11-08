
<html>
<head>
<link rel="stylesheet" type="text/css" href="buttons.css">
<title>Add Project</title>
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
 
 require_once("config.php");

// get all questions so we can check user's input against answers
$result = mysql_query("SELECT pid FROM project ORDER BY pid DESC LIMIT 1");
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	
	while ($row = mysql_fetch_array($result))
		{
			$next_project_id = $row["pid"];
		}
		
		$next_project_id += 1;
	
 echo "<h2 align='left'> Your ID:  <b><i>".$_GET["username"]."</i></b></h2>";
 echo "<h1>Add porject</h1>";
 echo "<hr>";


 
  
 echo" <form name='login' action='add_project_check.php' method='post' accept-charset='utf-8'>";  

echo "<div id='formContainer'>";
 echo " Project ID:";
 echo "<br>";
 echo "<input name='project_id' readonly type='text' value='".$next_project_id."' placeholder='".$next_project_id."' /> ";
 echo "<br>";
 echo "<br>";

 
 echo "User ID:"; 
 echo "<br>";
 echo " <input name='username'  readonly type='text' value='".$_GET["username"]."' placeholder='".$_GET["username"]."'/>";
 echo "<br>";
 echo "<br>";
 
  echo "Name:"; 
 echo "<br>";
 echo " <input name='name'   type='text'  placeholder='Project name' required/>";
 echo "<br>";
 echo "<br>";
 
 
 echo "Species:"; 
 echo "<br>";
 echo " <input name='species'  type='text'  placeholder='Enter species'required/>";
 echo "<br>";
 echo "<br>";

 
 echo "description:"; 
 echo "<br>";
 echo " <input name='description'  type='text'  placeholder='Project description'required/>";
 echo "<br>";
 echo "<br>";
 
 echo"</div>";
 echo "<input id='button'type='submit' value='Create project'>" ;

 echo "</form>";
 
 

?>




</div>

</body>
</html>
