<?php
	require_once('engine/conn.php');
	$benzingsql = mysqli_query($link, "SELECT * FROM benzingurunleri WHERE 1") or die(mysql_error());
?>
