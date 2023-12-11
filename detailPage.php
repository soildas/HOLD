<?php
    session_start();

	$product_id=$_REQUEST["product_id"];
	
	require("db_connect.php");
	$query = $db -> query("select * from products where product_id=$product_id");
	if($row = $query->fetch()) {
        $product_id = $row["product_id"];
        $img = $row["img"];
        $brand = $row["brand"];
        $name = $row["name"];
        $kategorie = $row["kategorie"];
        $color = $row["color"];
        $size = $row["size"];
        $price = $row["price"];
    }
?> 

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet" />
    <link href="./css/detailPage.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="v46_121">
        <div class="v46_122" style = "cursor: pointer;" onclick="location.href='main.php'"></div>
        <div class="v46_123"></div>
        <div class="v96_80"></div>
        <div class="v46_124"></div>
        <div class="v46_125" style = "cursor: pointer;" onclick="location.href='carts.php'"></div>
        <div class="v46_126"></div>
        <div class="v46_127"></div>
        <span class="v46_129">홈</span>
        <span class="v46_130">상의</span>
        <span class="v46_131">하의</span>
        <span class="v46_132">신발</span>
        <span class="v46_133">가방</span>
        <span class="v46_134">잡화 </span>
        <form method="post" action="carts_insert.php?product_id=<?=$product_id?>&name=<?=$name?>">
            <div class="v46_135"><img src="<?=$img?>"></div>
            <div class="v96_84"><img src="<?=$img?>"></div>
            <div class="v96_85"><img src="<?=$img?>"></div>
            <div class="v96_86"><img src="<?=$img?>"></div>
            <div class="v96_87"><img src="<?=$img?>"></div>
            <span class="v46_182">5%</span>
            <span class="v46_198"><?=$price?></span>
            <span class="v96_79"><?=$price*0.95?></span>
            <span class="v46_218"><?=$name?></span>
            <div class="v46_221"></div>
            <div class="v96_95"></div>
            <span class="v96_81">적릭금 : 338원</span>
            <span class="v96_89">리뷰 정보</span>
            <span class="v96_90">n개 리뷰 보기</span>
            <span class="v96_83">>>> 빠른페이 결제시 1% 적립</span>
            <span class="v96_82">HOLD는 모든 상품 무료배송!!</span>
            <span class="v96_93">총 상품 금액</span>
            <span class="v96_94"><?=$price*0.95?>원</span>
            <div class="v96_91"><?=$color?></div> <!--색상 -->
            <div class="v96_92"><?=$size?></div> <!--사이즈 -->
            
            <input type="submit" value="장바구니"style="background-color:transparent; border:0px transparent solid;" class="v96_96"></span>
        </form>
        <span class="v96_97">바로구매</span>
        <div class="v96_100"></div>
        <div class="v96_101"></div>
        <div class="v96_102"></div>
        <div class="v96_103"></div>
        <span class="v96_104">상품정보</span>
        <span class="v96_106">리뷰 0</span>
        <span class="v96_107">Q&A 0</span>
        <span class="v96_108">주문정보</span>
        <div class="v96_109"></div>
        <span class="v96_110">♡</span>
        <div class="v131_50"></div>
    </div>
</body>

</html>