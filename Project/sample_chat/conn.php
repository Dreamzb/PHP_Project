<?php

$dbhost = "mysql.cms.waikato.ac.nz";
$dbuser = "zw95";
$dbpass = "wzb659891";
$dbname = "zw95";

$dbconn = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$dbconn){
	die("Connect sql Failed " . mysql_error());
}
mysql_select_db($dbname,$dbconn);
?>
