<?php
	$checkbox1 = $_REQUEST["check1"] ?? "";
    $checkbox2 = $_REQUEST["check2"] ?? "";
    $cart_num1 = $_REQUEST["cart_num1"] ?? "";
    $cart_num2 = $_REQUEST["cart_num2"] ?? "";
    $cart_num = $_REQUEST["cart_num"] ?? "";
	
	if ($checkbox1 || $checkbox2) {
		require("db_connect.php");

		$db->exec("insert into orders (checkbox1, checkbox2, cart_num, cart_num1, cart_num2)
					values('$checkbox1', '$checkbox2', '$cart_num', '$cart_num1', '$cart_num2')");
		header("Location:orders.php");
		exit;
	} 

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<script>
	alert('장바구니가 비었습니다.');
	history.back();
</script>

</body>
</html>
