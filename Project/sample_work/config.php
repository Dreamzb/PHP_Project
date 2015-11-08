
<?php

/*
 * Connecting to mySQL database, print errors if there is any.
 * 
 */
$mysql_hostname = "mysql.cms.waikato.ac.nz";
$mysql_user = "zw95";
$mysql_password = "wzb659891";
$mysql_database = "zw95";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");



?>
