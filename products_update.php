<?php
	$product_id = $_REQUEST["product_id"];
	
	$img = $_REQUEST["img"] ?? "";
	$brand = $_REQUEST["brand"] ?? "";
	$name = $_REQUEST["name"] ?? "";
	$kategorie =$_REQUEST["kategorie"];
	$color = $_REQUEST["color"] ?? "";
	$size = $_REQUEST["size"] ?? "";
	$price = $_REQUEST["price"] ?? "";
	
	if ($img && $name) {
		$regtime = date("Y-m-d H:i:s");
		
		require("db_connect.php");
		$db->exec("update products set img='$img', brand='$brand', name='$name', kategorie='$kategorie',
					 color='$color', size='$size', price='$price' where product_id=$product_id");
		
		header("Location:products_view.php?product_id=$product_id");
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
	alert('빈칸없이 입력 해야 합니다.');
	history.back();
</script>

</body>
</html>
