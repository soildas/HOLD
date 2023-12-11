<!doctype html>
 <html>
 <head>
     <meta charset="utf-8">
     <style>
         table     { width:1050px; text-align:center; margin:auto }
         th        { background-color:black; color:white}
         
         .product_id      { width: 200px; }
         .img      { width: 230px; }
		 .brand    { width: 230px; }
         .name     { width: 200px; }
         .regtime  { width: 180px; }
		 .color    { width: 80px;}
		 .kategorie { width: 150px; }
		 .size     { width: 80px; }
		 .price    { width: 120px; }
		 
 
         a         { text-decoration:none; }    
         a:link    { color:blue; }
         a:visited { color:gray; }
         a:hover   { color:red;  }
        
         .left     { text-align:left; }
     </style>
 </head>
 <body>
 
 <table>
     <tr>
         <th class="product_id"  >번호  </th>
         <th class="img"  >사진  </th>
		 <th class="brand">브랜드</th>
         <th class="name" >이름 </th>
		 <th class="kategorie" >카테고리 </th>
         <th class="color"> 색상 </th>
         <th class="size"> 사이즈 </th>
		 <th class="price">가격 </th>
		 <th class="regtime">등록시간 </th>
     </tr>
<?php
	$listSize = 10;
	$page = $_REQUEST["page"] ?? 1;
	$start = ($page-1) * $listSize;
	
	require("db_connect.php");
	$query = $db -> query("select * from products order by regtime desc limit $start, $listSize");
	while($row = $query->fetch()) {
?>    

     <tr>
         <td style="text-align:center;">
		 <a href="products_view.php?product_id=<?=$row["product_id"]?>"><?=$row["product_id"]?></a></td>
         <td><img src="<?=$row["img"]?>"></td>
		 <td><?=$row["brand"]?></td>
         <td><?=$row["name"]?></td>
		 <td><?=$row["kategorie"]?></td>
         <td><?=$row["color"]?></td>
         <td><?=$row["size"]?></td>
		 <td><?=$row["price"]?></td>
		 <td><?=$row["regtime"]?></td>
     </tr>

 <?php
	}
 ?>
 </table>
 
 <div style="width:680px; text-align:center; margin:auto;" >
 <?php
	$paginationSize = 3;
	$firstLink = floor(($page - 1) / $paginationSize) * $paginationSize + 1;
	$lastLink = $firstLink + $paginationSize -1;
	
	$product_idRecords = $db->query("select count(*) from products")->fetchColumn();
	$product_idPages = ceil($product_idRecords / $listSize);
	if ($lastLink > $product_idPages) {
		$lastLink = $product_idPages;
	}
	
	if ($firstLink > 1) {
		$move = $firstLink - 1;
		echo"<a href=products_list.php?page=$move>&lt</a> ";
	}
	
	for ($i = $firstLink; $i <= $lastLink; $i++) {
		if ($i == $page) {
			echo"<a href=products_list.php?page=$i><u>$i</u></a> ";
		} else {
			echo"<a href=products_list.php?page=$i>$i</a> ";
		}
	}
	if ($lastLink < $product_idPages) {
		$move = $lastLink + 1;
		echo"<a href=products_list.php?page=$move>&gt</a> ";
	}

 ?>
 </div>
 <br>
 <div style="text-align:center;">
 	<input type="button" value="등록" onclick="location.href='products_write.php'">
	
 </div>
 </body>
 </html>


