<?php
    require("db_connect.php");

    // $query = $db -> query("select * from products");
    // while($row = $query->fetch()) {
    //     $product_id=$row["product_id"];
    // }

    // $query1 = $db -> query("select * from carts");
    // while($row = $query1->fetch()) {
    //     $cart_num=$row["cart_num"];
    // }

    // $query2 = $db -> query("select * from members");
    // while($row = $query2->fetch()) {
    //     $member_id=$row["member_id"];
    // }

    // $query3 = $db -> query("select * from orders");
    // while($row = $query2->fetch()) {
    //     $checkbox1=$row["checkbox1"];
    //     $checkbox2=$row["checkbox2"];
    // }
    
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet" />
    <link href="./css/order.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="v52_176">
        <div class="v52_177" style = "cursor: pointer;" onclick="location.href='main.php'"></div>
        <div class="v52_178"></div>
        <div class="v52_179"></div>
        <div class="v52_180" style = "cursor: pointer;" onclick="location.href='carts.php'"></div>
        <div class="v52_181"></div>
        <div class="v52_182"></div><span class="v52_183">홈</span><span class="v52_184">상의</span><span class="v52_185">하의
        </span><span class="v52_186">신발</span><span class="v52_187">가방</span><span class="v52_188">잡화</span>
        <div class="v52_191"></div><span class="v52_199">주문/배송 조회</span>
        <div class="v52_208"></div>
<?php
    $query4 = $db -> query("select *
                                from products p, members m, carts c, orders o
                                where c.member_id = m.member_id
                                and c.product_id = p.product_id
                                and c.cart_num = o.cart_num;");
                                
        while($row = $query4->fetch()) {
            $o_img = $row["img"];
            $o_brand = $row["brand"];
            $o_product_id = $row["product_id"];
            $o_name = $row["name"];
            $o_color = $row["color"];
            $o_size = $row["size"];
            $o_price = $row["price"];
            $o_amount = $row["amount"];
            $o_checkbox1 = $row["checkbox1"];
            $o_checkbox2 = $row["checkbox2"];
            $o_cart_num1 = $row["cart_num1"];
            $o_cart_num2 = $row["cart_num2"];   

            $checkbox1Find = $db -> query("select * from orders where checkbox1 = 'on'");

            while ($row = $checkbox1Find->fetch()){
                $_1checkbox1 = $row["checkbox1"];
                $_1checkbox2 = $row["checkbox2"];
                $_1cart_num1 = $row["cart_num1"];
                $_1cart_num2 = $row["cart_num2"];
            }
            
            echo $_1checkbox1;
            echo $_1checkbox2;
            $checkbox2Find = $db -> query("select * from orders where checkbox2 = 'on'");

            while ($row = $checkbox2Find->fetch()){
                $_2checkbox1 = $row["checkbox1"];
                $_2checkbox2 = $row["checkbox2"];
                $_2cart_num1 = $row["cart_num1"];
                $_2cart_num2 = $row["cart_num2"];
            }

            echo $_2checkbox1;
            echo $_2checkbox2;
    if(($_1checkbox1 == 'on' && $_1checkbox2 == 0) || ($_1checkbox1 == 'on' && $_1checkbox2 == 'on')) {
?>
        <div class="v52_215"></div>
        <div class="v52_216"><img src="<?=$o_img ?? ""?>"></div>
        <span class="v52_217"><?=$o_brand?></span>
        <span class="v52_218"><?=$o_name?></span>
        <span class="v52_219"><?=number_format($o_price)?></span>
        <span class="v52_220">주문완료</span>
        <div class="v52_221"></div>
        <span class="v52_222">구매평 작성</span>
        <div class="v52_224"></div>
        <span class="v52_225">배송 조회</span>
        <div class="v52_226"></div>
        <span class="v52_227">교환/반품</span>
        <span class="v52_254">수량 :</span>
        <span class="v52_255">사이즈:</span>
        <div class="v68_257"><?=$o_amount?></div>
        <div class="v68_258"><?=$o_size?></div>
<?php
    }elseif($_2checkbox2 == 'on' && $_2checkbox1 == 0 || ($_2checkbox1 == 'on' && $_2checkbox2 == 'on')){
?>
        <div class="v52_241"></div>
        <div class="v52_242"><img src="<?=$o_img ?? ""?>"></div>
        <span class="v68_259">수량 :</span>
        <span class="v68_260">사이즈:</span>
        <span class="v52_243"><?=$o_brand?></span>
        <span class="v52_244"><?=$o_name?></span>
        <span class="v52_245">주문완료</span>
        <span class="v52_246"><?=number_format($o_price)?></span>
        <div class="v52_247"></div>
        <div class="v52_248"></div>
        <div class="v52_249"></div>
        <span class="v52_250">구매평 작성</span>
        <span class="v52_251">배송 조회</span>
        <span class="v52_252">교환/반품</span>
        <div class="v68_261"></div>
        <div class="v68_262"></div>
<?php
    }
}
?>
        <div class="v72_3"></div>
    </div>
</body>

</html>