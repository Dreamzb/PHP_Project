
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
$result = mysql_query("SELECT sid FROM parent_sample ORDER BY sid DESC LIMIT 1");
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	
	while ($row = mysql_fetch_array($result))
		{
			$next_parent_id = $row["sid"];
		}
		
		$next_parent_id += 1;
		
		echo $next_parent_id;
		
		
 echo "<h2 align='left'> Your ID:  <b><i>".$_GET["username"]."</i></b></h2>";
 echo "<h1>Add parent sample</h1>";
 echo "<hr>";

  
 echo" <form name='login' action='add_parent_check.php' method='post' accept-charset='utf-8'>";  

echo "<div id='formContainer'>";
 echo " Parent ID:";
 echo "<br>";
 echo "<input name='parent_id' readonly type='text' value='".$next_parent_id."' placeholder='".$next_parent_id."' /> ";
 echo "<br>";
 echo "<br>";

 
 echo "Project ID:"; 
 echo "<br>";
 echo " <input name='project_id'  readonly type='text' value='".$_GET["project_id"]."' placeholder='".$_GET["project_id"]."'/>";
 echo "<br>";
 echo "<br>";
 
  echo "Sample Name:"; 
 echo "<br>";
 echo " <input name='name'   type='text'  placeholder='Sample name' required/>";
 echo "<br>";
 echo "<br>";
 
 
 echo "PH:"; 
 echo "<br>";
 echo " <input name='ph'  type='text'  placeholder='Parent sample ph'required/>";
 echo "<br>";
 echo "<br>";

 
 echo "Weight:"; 
 echo "<br>";
 echo " <input name='weight'  type='text'  placeholder='Parent sample weight'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "Colour:"; 
 echo "<br>";
 echo " <input name='colour'  type='text'  placeholder='Parent sample colour'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "Tenderness:"; 
 echo "<br>";
 echo " <input name='tenderness'  type='text'  placeholder='Parent sample tenderness'required/>";
 echo "<br>";
 echo "<br>";
 
 
  echo "Typeside:"; 
 echo "<br>";
 echo " <input name='typeside'  type='text'  placeholder='Parent sample typeside'required/>";
 echo "<br>";
 echo "<br>";
 
  echo "Temperature:"; 
 echo "<br>";
 echo " <input name='temp'  type='text'  placeholder='Parent sample temperature'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "location:"; 
 echo "<br>";
 echo " <input name='location'  type='text'  placeholder='Parent sample location'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "Dimensions:"; 
 echo "<br>";
 echo " <input name='dimension'  type='text'  placeholder='Parent sample dimensions'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "Number:"; 
 echo "<br>";
 echo " <input name='number'  type='text'  placeholder='Parent sample number'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "Note:"; 
 echo "<br>";
 echo " <input name='note'  type='text'  placeholder='Parent sample note'required/>";
 echo "<br>";
 echo "<br>";
 
 
 
 
 
 
 echo"</div>";
 echo "<input id='button'type='submit' value='Create project'>" ;

 echo "</form>";


?>




</div>

</body>
</html>
