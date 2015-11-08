<?php
require_once ("db.php");
require_once ("initialise.php");

if ($p_id = $_GET['p_id']) {
	$query = "DELETE FROM Posts WHERE id = '$p_id'";

	$result = mysql_query($query);
	mysql_close($result);

	header('Location: ./index.php');
} elseif ($c_id = $_GET['c_id']) {

	$query = "DELETE FROM Comments WHERE id='$c_id'";

	$result = mysql_query($query);
	mysql_close($result);

	header('Location: ./index.php');

}
?>
