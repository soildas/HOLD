<?php
	$db = new PDO("mysql:host=localhost;port=3306;dbname=ldydb", "ldy", "1234");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>