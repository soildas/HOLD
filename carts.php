<?php

    require("db_connect.php");

	$query = $db -> query("select * from products ");
    while ($row = $query->fetch()){
        $product_id = $row["product_id"];            
        $img = $row["img"];
        $brand = $row["brand"];
        $name = $row["name"];
        $kategorie = $row["kategorie"];
        $color = $row["color"];
        $size = $row["size"];
        $price = $row["price"];
    }

    $query1 = $db -> query("select * from members");
    while ($row = $query1->fetch()){
        $member_id = $row["member_id"];
    }
    
    // echo $cart_product_id;\
    
?> 
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet" />
    <link href="./css/carts.css" rel="stylesheet" />
    <link rel="stylesheet" href="./10-11.css" />
    <script type="text/javascript" src="./10-11.js"></script>  
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <div class="v91_2">
        <div class="v91_3" style = "cursor: pointer;" onclick="location.href='main.php'"></div>
        <div class="v91_4"></div>
        <div class="v91_5"></div>
        <div class="v91_6" style = "cursor: pointer;" onclick="location.href='carts.php'"></div>
        <div class="v91_7" style = "cursor: pointer;" onclick="location.href='login_form.php'"></div>
        <div class="v91_8"></div><span class="v91_9">홈</span><span class="v91_10">상의</span><span class="v91_11">하의
        </span><span class="v91_12">신발</span><span class="v91_13">가방</span><span class="v91_14">잡화</span>
        <div class="v91_15"></div>
        <span class="v91_16">장바구니</span>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js" ></script>
        <div class="v91_17"></div>
        <div class="v91_18"></div>
        <div class="v131_54"></div>
        <div class="v131_59"></div>
        <div class="v131_67"></div>
        <div class="v131_68"></div>
        <div class="v131_69"></div>
        <div class="v131_76"></div>
        <div class="v131_77"></div>
        <div class="v131_78"></div>
        <div class="v91_50"></div>
        <div class="v131_53"></div>
        <div class="v131_82"></div>
        <div class="v131_83"></div>
        <input type="checkbox" id="ckall" name="selectall" checked="" onclick="selectAll(this)" class="v131_94">
         
    <form method="post" action="orders_insert.php"> 
<?php
    $query2 = $db -> query("select *
                            from products p, members m, carts c
                            where c.member_id = m.member_id
                            and c.product_id = p.product_id;");
	while($row = $query2->fetch()) {
        $j_img = $row["img"];
        $j_brand = $row["brand"];
        $j_product_id = $row["product_id"];
        $j_name = $row["name"];
        $j_color = $row["color"];
        $j_size = $row["size"];
        $j_price = $row["price"];
        $j_amount = $row["amount"];
        $cart_num = $row["cart_num"];

        $cart_numFind = $db -> query("select * from carts where cart_num=$cart_num");

            while ($row = $cart_numFind->fetch()){
                $cart_num = $row["cart_num"];
                $j_product_id = $row["product_id"]; 
                $j_member_id = $row["member_id"];
                $j_name = $row["name"];
                $j_amount = $row["amount"];
            }
    $am = $j_price * $j_amount;
        if ($cart_num == 1) {
        
?>
        <input type="checkbox" id="ck1" name="check1" checked="" onclick="is_checked()" class="v131_91">
        <div class="v91_20"><img src="<?=$j_img ?? ""?>"></div>
        <span class="v91_22"><?=$j_brand ?? ""?></span>
        <span class="v91_28"><?=$j_name ?? ""?></span>
        <span class="v91_32"><?=number_format($j_price) ?? ""?></span>
        <span class="v91_57" >X</span>
        <span class="v131_55"><?=$j_size ?? ""?></span>
        <div class="v131_56"></div>
        <div class="v131_57" style="center"><?=$j_amount ?? ""?></div>
        <div class="v131_61"></div>
        <span class="v131_58"><?=number_format($j_price) ?? ""?></span>
        <span class="v131_60"><?=number_format($am) ?? ""?></span>
        <span class="v131_62">주문하기</span>
        <input type="hidden" name="cart_num" value="<?=$cart_num?>">
        <input type="hidden" name="cart_num1" value="<?=$cart_num?>">
        
<?php
    } else if ($cart_num == 2) {
?>
        <input type="checkbox" id="ck2" name="check2" checked="" onclick="is_checked()" class="v131_92">
        <div class="v131_70"><img src="<?=$j_img ?? ""?>"></div>
        <span class="v131_71"><?=$j_brand ?? ""?></span>
        <span class="v131_72"><?=$j_name ?? ""?></span>
        <span class="v131_73"><?=number_format($j_price) ?? ""?></span>
        <span class="v131_74">X</span>
        <span class="v131_75"><?=$j_size ?? ""?></span>
        <div class="v131_76"></div>
        <div class="v131_77" style="center"><?=$j_amount ?? ""?></div>
        <div class="v131_78"></div>
        <span class="v131_79"><?=number_format($j_price) ?? ""?></span>
        <span class="v131_80"><?=number_format($am) ?? ""?></span>
        <span class="v131_81">주문하기</span>
        <input type="hidden" name="cart_num" value="<?=$cart_num?>">
        <input type="hidden" name="cart_num2" value="<?=$cart_num?>">
        
        <?php
            }
        }
        $sumPriceFind = $db -> query("select sum(p.price)
                                        from products p, members m, carts c
                                        where c.member_id = m.member_id
                                        and c.product_id = p.product_id;");

        while ($row = $sumPriceFind->fetch()){
            $sumPrice = $row["sum(p.price)"];
        }
        ?>
        <span class="v131_63">상품 정보</span>
        <span class="v131_65">옵션</span>
        <span class="v131_66">가격</span>
        <span class="v131_84">총 상품금액 : <?=number_format($sumPrice)?></span>
        <span class="v131_86">할인예정금액 : 0원</span>
        <span class="v131_88">배송비 : 전 상품 무료 배송</span>
        <span class="v131_85">-</span>
        <span class="v131_87">+</span>
        <div class="v131_89"></div>
        <span class="v131_90">총 결제 금액 : <?=number_format($sumPrice)?></span>
        <span class="v131_95">전체 선택</span>
        <div class="v142_2"></div>
        <input type="submit" value="주문하기"style="background-color:transparent; border:0px transparent solid;" class="v142_3"></span>
        <pre id='result1'></pre>
        <pre id='result2'></pre>
        <pre id='result3'></pre>
    </form>
        <div class="v131_93"></div>
        <form method="post" action="carts_delete.php?cart_num=<?=$cart_num?>">
            <input type="submit" value="전체 삭제"style="background-color:transparent; border:0px transparent solid;" class="v131_96">
        </form>
    </div>
</body>

</html>