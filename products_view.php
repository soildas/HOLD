<?php
	$product_id=$_REQUEST["product_id"];
	
	require("db_connect.php");
	$query = $db -> query("select * from products where product_id=$product_id");
	if($row = $query->fetch()) {
        $img = $_REQUEST["img"] ?? "";
        $brand = $_REQUEST["brand"] ?? "";
        $name = $_REQUEST["name"] ?? "";
        $kategorie = $_REQUEST["kategorie"] ?? "";
        $color = $_REQUEST["color"] ?? "";
        $size = $_REQUEST["size"] ?? "";
        $price = $_REQUEST["price"] ?? "";
		
		$product_id=str_replace(" ", "&nbsp;",$row["product_id"]);
        $img=str_replace(" ", "&nbsp;",$row["img"]);
        $brand=str_replace(" ", "&nbsp;",$row["brand"]);
        $name=str_replace(" ", "&nbsp;",$row["name"]);
        $kategorie=str_replace(" ", "&nbsp;",$row["kategorie"]);
        $color=str_replace(" ", "&nbsp;",$row["color"]);
        $size=str_replace(" ", "&nbsp;",$row["size"]);
        $price=str_replace(" ", "&nbsp;",$row["price"]);
		
	}
?> 
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        table { width:900px; text-align:center; margin:auto;}
        th    { width:100px; background-color:black; color:white; }
        td    { text-align:left; border:1px solid gray; }
    </style>
</head>
<body>

<table>
    <tr>
        <th>번호</th><td><?=$product_id?></td>
    </tr>
    <tr>
        <th>사진</th><td><?=$img?></td>
    </tr>
    <tr>
        <th>브랜드</th><td><?=$brand?></td>
    </tr>
    <tr>
        <th>이름</th><td><?=$name?></td>
    </tr>
    <tr>
        <th>카테고리</th><td><?=$kategorie?></td>
    </tr>
    <tr>
        <th>색상</th><td><?=$color?></td>
    </tr>
    <tr>
        <th>사이즈</th><td><?=$size?></td>
    </tr>
    <tr>
        <th>가격</th><td><?=$price?></td>
    </tr>
</table>

<br>
<div style="text-align:center;">
<input type="button" value="목록보기" onclick="location.href='products_list.php'">
<input type="button" value="수정"     onclick="location.href='products_write.php?product_id=<?=$product_id?>'">
<input type="button" value="삭제"     onclick="location.href='products_delete.php?product_id=<?=$product_id?>'">
</div>
</body>
</html>
