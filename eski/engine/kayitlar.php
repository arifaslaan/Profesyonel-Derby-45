<?php
	include("conn.php");
	mysqli_query($link,"SET NAMES UTF8");
	$sql = mysqli_query($link, "SELECT * FROM katilimcilar ORDER BY id DESC, ad") or die(mysql_error());
?>