 <?php
	$product_id ="";
	$img="";
    $brand="";
	$name="";
    $kategorie="";
    $color="";
    $size="";
    $price="";
    
	$action="products_insert.php";
	
	$product_id=$_REQUEST["product_id"] ?? "";
	if ($product_id >= 0) {	// 글 번호가 주어졌으면 (글 수정 모드로 실행해야 하면)
		require("db_connect.php");
		$query = $db -> query("select * from products where product_id=$product_id");
		if($row = $query->fetch()) {
			$product_id=$row["product_id"];
			$img=$row["img"];
            $brand=$row["brand"];
			$name=$row["name"];
            $color=$row["color"];
            $size=$row["size"];
            $price=$row["price"];
            $kategorie=$row["kategorie"];
            
			$action="products_update.php?product_id=$product_id";
		}
	}
 ?>
 <!doctype html>
 <html>
 <head>
     <meta charset="utf-8">
     <style>
         table { width:500px; text-align:center; margin:auto;}
         th    { width:100px; background-color:black; color:white; }
         input[type=text], textarea { width:100%; }
     </style>
 </head>
 <body>
 
 <form method="post" action="<?=$action?>">
     <table>
         <tr>
             <th>번호</th>
             <td><input type="text" name="product_id" maxlength="80" value="<?=$product_id?>"></td>
         </tr>
         <tr>
             <th>사진</th>
             <td> 
                <form action="products_upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="img" value="<?=$img?>">
                </form>
            </td>
         </tr>
         <tr>
             <th>브랜드</th>
             <td><input type="text" name="brand" maxlength="20" value="<?=$brand?>"></td>
         </tr>
         <tr>
             <th>이름</th>
             <td><input type="text" name="name" maxlength="20" value="<?=$name?>"></td>
         </tr>
         <tr>
             <th>카테고리</th>
             <td><select name="kategorie">
                    <option value="상의">상의</option>
                    <option value="하의">하의</option>
                    <option value="신발">신발</option>
                    <option value="가방">가방</option>
                    <option value="잡화">잡화</option>
                </select>
            </td>
         </tr>
         <tr>
             <th>색상</th>
             <td><select name="color">
                    <option value="블랙">블랙</option>
                    <option value="그레이">그레이</option>
                    <option value="화이트">화이트</option>
                    <option value="민트">민트</option>
                    <option value="핑크">핑크L</option>
                </select></td>
         </tr>
         <tr>
             <th>사이즈</th>
             <td><select name="size">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select></td>
         </tr>
         <tr>
             <th>가격</th>
             <td><input type="text" name="price" maxlength="20" value="<?=$price?>"></td>
         </tr>
     </table>
 
     <br>
     <div style="text-align:center;">
        <input type="submit" value="저장">
        <input type="button" value="취소" onclick="history.back()">
     </div>
 </form>
 
 </body>
 </html>

