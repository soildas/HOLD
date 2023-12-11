<?php
	$cart_num = $_REQUEST["cart_num"];
	
	require("db_connect.php");
	$db->exec("delete from carts");
	$db->exec("alter table carts auto_increment = 0");
	header("Location:carts.php");
?>
