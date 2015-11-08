<?php

	/**************************
	 * Add your code to connect to your database here
	 */
	 
	
	
	$town = $_GET['town'];

   /***************************
    * 
    * Add code here to query the DB for weather information for the given town
    * 
    * Construct a PHP array object containing the weather data 
    * and return
    * 
    */

   $dbhost = "mysql.cms.waikato.ac.nz";
	$dbuser = "zw95";
	$dbpass = "wzb659891";
	$dbname = "zw95";
	$dbconn = mysql_connect($dbhost,$dbuser,$dbpass);
	if (!$dbconn){
		die("Connect sql Failed " . mysql_error());
	}
	mysql_select_db($dbname,$dbconn);
	$query="select * from weather where town = '$town'";
    $result=mysql_query($query);
	while($row=mysql_fetch_row($result)){
		$weathers=$row;
	}
	echo json_encode($weathers);
   
	mysql_close();
?>

