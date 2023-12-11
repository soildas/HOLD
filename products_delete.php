<?php
	$product_id = $_REQUEST["product_id"];
	
	require("db_connect.php");
	$db->exec("delete from products where product_id=$product_id");
	header("Location:products_list.php");
?>
