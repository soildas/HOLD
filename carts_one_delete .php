<?php
	$cart_num = $_REQUEST["cart_num"];
	
	require("db_connect.php");
	$db->exec("delete from carts where cart_num=$cart_num");
	header("Location:carts.php");
?>
