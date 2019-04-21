<?php
	require_once('engine/conn.php');
	$naturalsql = mysqli_query($link, "SELECT * FROM naturalurunleri WHERE 1") or die(mysql_error());;
?>
