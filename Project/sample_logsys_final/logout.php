<?php 
include('conn.php');
session_start();
	$uid = $_SESSION['userid'];
	mysql_query("UPDATE users SET STATUS =0 WHERE uid = '$uid'");
	
	unset($_SESSION['userid']);
	unset($_SESSION['user']);
	unset($_SESSION['userReg']);
	header("location: ./index.php"); 
	exit;
?>
