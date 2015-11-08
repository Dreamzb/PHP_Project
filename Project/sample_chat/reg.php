<?php
if(!isset($_POST['submit'])){
	exit('Error!');
}
$user = $_POST['user'];
$pd = $_POST['pd'];
if(!preg_match($user) < 0){
	exit('Input right name,<a href="javascript:history.back(-1);"> go Back</a>');
}
if(strlen($pd) < 4){
	exit('password must large 4!!! <a href="javascript:history.back(-1);">go Back</a>');
}
include('conn.php');
$check_query = mysql_query("select id from messages where user='$user' limit 1");
if(mysql_fetch_array($check_query)){
	echo ' Error!!! The "',$user,'" has been created !!<a href="javascript:history.back(-1);">go Back</a>';
	exit;
}
$pd = MD5($pd);
$regdate = time();
$sql = "INSERT INTO messages(user,pd,regdate)VALUES('$user','$pd',$regdate)";
if(mysql_query($sql,$dbconn)){
	header("Location: index.html");    
} else {
	echo '',mysql_error(),'<br />';
	echo '  ******<a href="javascript:history.back(-1);">GO back</a> ';
}
?>
