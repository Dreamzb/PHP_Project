<?php session_start();
if(!empty($_SESSION['userReg']))
{
	unset($_SESSION['userReg']);

	header("location: ./index.php"); 
	exit;
}
?>
