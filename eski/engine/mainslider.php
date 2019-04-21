<?php
	require_once('engine/conn.php');
	$mainslidersql = mysqli_query($link, "SELECT * FROM mainslider WHERE 1") or die(mysql_error());;
?>
