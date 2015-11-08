<?php
session_start();
if(!isset($_POST['submit'])){
	exit('Error!');
}
else{
	$userReg = 1;
	$_SESSION['userReg'] = $userReg;
	header("location: ./index.php"); 
}

?>
