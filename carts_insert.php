<?php
    // $product_id = 1;
	// $name = "나이키";
    $amount = 1;
	// $color = $_REQUEST["color"] ?? "";
	// $size = $_REQUEST["size"] ?? "";
	// $price = $_REQUEST["price"] ?? "";
    
    $product_id = $_REQUEST["product_id"] ?? "";
	$name = $_REQUEST["name"] ?? "";
	// $color = $_REQUEST["color"] ?? "";
	// $size = $_REQUEST["size"] ?? "";
	// $price = $_REQUEST["price"] ?? "";

    // $product_id = $_SESSION["product_id"];

    require("db_connect.php");
    
    $query = $db -> query("select * from products where product_id=$product_id");
    while ($row = $query->fetch()){
    $product_id = $row["product_id"];
    }

    $query1 = $db -> query("select * from members");
    while ($row = $query1->fetch()){
    $member_id = $row["member_id"];
    }

    session_start();

    if($_SESSION["userId"]){
        $query2 = $db -> query("select * from members where member_id=$member_id");
        while ($row = $query2->fetch()){
            $member_id = $row["member_id"];
        }
    }

	if ($product_id && $member_id && $name) {
		require("db_connect.php");
		
		$db->exec("insert into carts (product_id, member_id, name, amount)
					values('$product_id', '$member_id', '$name', '$amount')");
                    echo "<script>alere('장바구니에 담겼습니다.')</script>";
        header("Location:detailPage.php?product_id=$product_id");
    exit;
    
		
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<script>
	alert('장바구니에 담겼습니다.');
</script>
<?php
}
?>
</body>
</html>
