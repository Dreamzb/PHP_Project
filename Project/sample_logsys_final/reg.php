<?php session_start();
if(!isset($_POST['submit'])){
	exit('Error!');
}
$user = $_POST['user'];
$pd = $_POST['pd'];

include('conn.php');
$check_query = mysql_query("select uid from users where user='$user' limit 1");
if(mysql_fetch_array($check_query)){
	echo ' Error!!! The "',$user,'" has been created !!<a href="javascript:history.back(-1);">go Back</a>';
	exit;
}
$regdate = time();
$sql = "INSERT INTO users(user,pd,regdate)VALUES('$user','$pd',$regdate)";
if(mysql_query($sql,$dbconn))
{
	unset($_SESSION['userReg']);
	$_SESSION['user'] = $user;
	header("location: ./index.php"); 
	exit;
} else {
	echo '',mysql_error(),'<br />';
	echo '  ******<a href="javascript:history.back(-1);">GO back</a> ';
}
?>
