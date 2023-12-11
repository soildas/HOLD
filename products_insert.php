<?php
	$product_id = $_REQUEST["product_id"] ?? "";
	$img = $_REQUEST["img"] ?? "";
	$brand = $_REQUEST["brand"] ?? "";
	$name = $_REQUEST["name"] ?? "";
	$kategorie =$_REQUEST["kategorie"] ?? "";
	$color = $_REQUEST["color"] ?? "";
	$size = $_REQUEST["size"] ?? "";
	$price = $_REQUEST["price"] ?? "";
	
	if ($product_id && $img && $name) {
		require("db_connect.php");
		$regtime = date("Y-m-d H:i:s");
		
		$db->exec("insert into products (product_id, img, brand, name, kategorie, color, size, price, regtime)
					values('$product_id', '$img', '$brand', '$name', '$kategorie', '$color', '$size', '$price', '$regtime')");
		header("Location:products_list.php");
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
