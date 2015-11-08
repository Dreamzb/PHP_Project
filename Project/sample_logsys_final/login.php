<?php
session_start();
if(!isset($_POST['submit'])){
	exit('Error!');
}
$user = $_POST['user'];
$pd = $_POST['pd'];
include('conn.php');
$check_query = mysql_query("select uid from users where user='$user' and pd='$pd' limit 1");
if($result = mysql_fetch_array($check_query)){
	$_SESSION['user'] = $user;
	$_SESSION['userid'] = $result['uid'];
	$uid = $result['uid'];
	mysql_query("update users set status = 1 where uid = '$uid'");
	header("location:./index.php"); 
	
	
	exit;
} else {
	exit('Failed to Log on, Please <a href="javascript:history.back(-1);"> go Back </a>   ');
}
?>
