
<html>
<head>
<link rel="stylesheet" type="text/css" href="buttons.css">
<title>Add Child</title>
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
$result = mysql_query("SELECT cid FROM Child_roject ORDER BY cid DESC LIMIT 1");
	if (!$result) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	
	while ($row = mysql_fetch_array($result))
		{
			$next_child_id = $row["cid"];
		}
		
		$next_child_id += 1;
		
		echo $next_child_id;
		
		
 echo "<h2 align='left'> Parent ID:  <b><i>".$_GET["parent_id"]."</i></b></h2>";
 echo "<h1>Add Child</h1>";
 echo "<hr>";

  
 echo" <form name='login' action='add_child_check.php' method='post' accept-charset='utf-8'>";  

echo "<div id='formContainer'>";
 echo " Child ID:";
 echo "<br>";
 echo "<input name='child_id' readonly type='text' value='".$next_child_id."' placeholder='".$next_child_id."' /> ";
 echo "<br>";
 echo "<br>";

 
 echo "Parent ID:"; 
 echo "<br>";
 echo " <input name='parent_id'  readonly type='text' value='".$_GET["parent_id"]."' placeholder='".$_GET["parent_id"]."'/>";
 echo "<br>";
 echo "<br>";
 
 
 echo "PH:"; 
 echo "<br>";
 echo " <input name='ph'  type='text'  placeholder='Child sample ph'required/>";
 echo "<br>";
 echo "<br>";

 
 echo "Weight:"; 
 echo "<br>";
 echo " <input name='weight'  type='text'  placeholder='Child sample weight'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "Colour:"; 
 echo "<br>";
 echo " <input name='colour'  type='text'  placeholder='Child sample colour'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "Tenderness:"; 
 echo "<br>";
 echo " <input name='tenderness'  type='text'  placeholder='Child sample tenderness'required/>";
 echo "<br>";
 echo "<br>";
 
 
  echo "Typeside:"; 
 echo "<br>";
 echo " <input name='typeside'  type='text'  placeholder='Child sample typeside'required/>";
 echo "<br>";
 echo "<br>";
 
  echo "Temperature:"; 
 echo "<br>";
 echo " <input name='temp'  type='text'  placeholder='Child sample temperature'required/>";
 echo "<br>";
 echo "<br>";
 
 
 echo "Dimensions:"; 
 echo "<br>";
 echo " <input name='dimension'  type='text'  placeholder='Child sample dimensions'required/>";
 echo "<br>";
 echo "<br>";
 
 echo "Note:"; 
 echo "<br>";
 echo " <input name='note'  type='text'  placeholder='Child sample note'required/>";
 echo "<br>";
 echo "<br>";
 
 
 
 
 
 
 echo"</div>";
 echo "<input id='button'type='submit' value='Create Child Sample'>" ;

 echo "</form>";


?>




</div>

</body>
</html>
