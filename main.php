<?php
    require("db_connect.php");

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet" />
    <meta charset="utf-8">
    <link href="./css/main.css" rel="stylesheet" />
    <title>MainPage</title>
</head>

<body>
    <div class="v6_162">
        <div class="v6_163" style = "cursor: pointer;" onclick="location.href='main.php'"></div>
        <div class="v6_164"></div>
        <div class="v6_165"></div>
        <div class="v6_166" style = "cursor: pointer;" onclick="location.href='carts.php'"></div>  
        <div class="v6_167" style = "cursor: pointer;" onclick="location.href='login_form.php'"></div>
        <div class="v6_168"></div>
        <button>
            <div class="v6_169"></div>
            <span class="v6_170">홈</span>
            <span class="v6_171">상의</span>
            <span class="v6_172">하의</span>
            <span class="v6_173">신발</span>
            <span class="v6_174">가방</span>
            <span class="v6_175">잡화</span>
        </button>
        <?php
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
            
            $product_idFind = $db -> query("select * from products where product_id=$product_id");

            while ($row = $product_idFind->fetch()){
                $product_id = $row["product_id"];
                $img = $row["img"];
                $brand = $row["brand"];
                $name = $row["name"];
                $kategorie = $row["kategorie"];
                $color = $row["color"];
                $size = $row["size"];
                $price = $row["price"];
            }
            if($product_id == 1){
        ?>
        <div class="v6_176"><a href="detailPage.php?product_id=<?=$product_id?>"><img src="<?=$img?>"></a></div>
        <div class="v6_177"></div>
        <span class="v6_178"><?=$brand?></span>
        <span class="v6_179"><?=$name?></span>
        <span class="v6_180"><?=$price?></span>
        <?php
            } else if($product_id == 2){
        ?>
        <div class="v10_2"><a href="detailPage.php?product_id=<?=$product_id?>"><img src="<?=$img?>"></div>
        <div class="v10_6"></div>
        <span class="v10_10"><?=$brand?></span>
        <span class="v10_14"><?=$name?></span>
        <span class="v10_18"><?=$price?></span>
        <?php
            } else if($product_id == 3){
        ?>
        <div class="v10_22"><img src="<?=$img?>"></div>
        <div class="v10_30"></div>
        <span class="v10_38"><?=$brand?></span>
        <span class="v10_46"><?=$name?></span>
        <span class="v10_54"><?=$price?></span>
        <?php
            } else if($product_id == 4){
        ?>
        <div class="v10_23"><img src="<?=$img?>"></div>
        <div class="v10_31"></div>
        <span class="v10_39"><?=$brand?></span>
        <span class="v10_47"><?=$name?></span>
        <span class="v10_55"><?=$price?></span>
        <?php
            } else if($product_id == 5){
        ?>
<!-- 1111 -->
        <div class="v9_258"><img src="<?=$img?>"></div>
        <div class="v9_259"></div>
        <span class="v9_260"><?=$brand?></span>
        <span class="v9_261"><?=$name?></span>
        <span class="v9_262"><?=$price?></span>
        <?php
            } else if($product_id == 6){
        ?>
        <div class="v10_3"><img src="<?=$img?>"></div>
        <div class="v10_7"></div>
        <span class="v10_11"><?=$brand?></span>
        <span class="v10_15"><?=$name?></span>
        <span class="v10_19"><?=$price?></span>
        <?php
            } else if($product_id == 7){
        ?>
        <div class="v10_24"><img src="<?=$img?>"></div>
        <div class="v10_32"></div>
        <span class="v10_40"><?=$brand?></span>
        <span class="v10_48"><?=$name?></span>
        <span class="v10_56"><?=$price?></span>
        <?php
            } else if($product_id == 8){
        ?>
        <div class="v10_25"><img src="<?=$img?>"></div>
        <div class="v10_33"></div>
        <span class="v10_41"><?=$brand?></span>
        <span class="v10_49"><?=$name?></span>
        <span class="v10_57"><?=$price?></span>
        <?php
            } else if($product_id == 9){
        ?>
<!-- 1111 -->
        <div class="v9_263"><img src="<?=$img?>"></div>
        <div class="v9_264"></div>
        <span class="v9_265"><?=$brand?></span>
        <span class="v9_266"><?=$name?></span>
        <span class="v9_267"><?=$price?></span>
        <?php
            } else if($product_id == 10){
        ?>
        <div class="v10_4"><img src="<?=$img?>"></div>
        <div class="v10_8"></div>
        <span class="v10_16"><?=$name?></span>
        <span class="v10_20"><?=$price?></span>
        <?php
            } else if($product_id == 11){
        ?>
        <div class="v10_26"><img src="<?=$img?>"></div>
        <div class="v10_34"></div>
        <span class="v10_42"><?=$brand?></span>
        <span class="v10_50"><?=$name?></span>
        <span class="v10_58"><?=$price?></span>
        <?php
            } else if($product_id == 12){
        ?>
        <div class="v10_27"><img src="<?=$img?>"></div>
        <div class="v10_35"></div>
        <span class="v10_51"><?=$name?></span>
        <span class="v10_59"><?=$price?></span>
        <?php
            } else if($product_id == 13){
        ?>
<!-- 1111 -->
        <div class="v9_268"><img src="<?=$img?>"></div>
        <div class="v9_269"></div>
        <span class="v9_270"><?=$brand?></span>
        <span class="v9_271"><?=$name?></span>
        <span class="v9_272"><?=$price?></span>
        <?php
            } else if($product_id == 14){
        ?>
        <div class="v10_5"><img src="<?=$img?>"></div>
        <div class="v10_9"></div>
        <span class="v10_13"><?=$brand?></span>
        <span class="v10_17"><?=$name?></span>
        <span class="v10_21"><?=$price?></span>
        <?php
            } else if($product_id == 15){
        ?>
        <div class="v10_28"><img src="<?=$img?>"></div>
        <div class="v10_36"></div>
        <span class="v10_44"><?=$brand?></span>
        <span class="v10_52"><?=$name?></span>
        <span class="v10_60"><?=$price?></span>
        <?php
            } else if($product_id == 16){
        ?>
        <div class="v10_29"><img src="<?=$img?>"></div>
        <div class="v10_37"></div>
        <span class="v10_45"><?=$brand?></span>
        <span class="v10_53"><?=$name?></span>
        <span class="v10_61"><?=$price?></span>
        <?php
            }
    }
        ?>
        <span class="v12_72">이 브랜드 어떠세요?</span>
        <span class="v12_74">이 브랜드 어떠세요?</span>
        <span class="v12_73">구매하러가기</span>
        <span class="v12_75">구매하러가기</span>
        
        <span class="v6_256">TODAY 랭킹</span>
        <span class="v6_257">신상 모아보기</span>
        <span class="v12_67">코디 추천</span>
        <div class="v11_63"></div>
        <div class="v12_65"></div>
        <span class="v12_64">랭킹 더보기</span>
        <span class="v12_66">브랜드 신상 더보기</span>
        <div class="v12_68"></div>
        <div class="v12_69"></div>
        
    </div>
    <div id ="footerPage">
        <footer>
            <article id ="address">
                <ul id = "footer_menu">
                    <li>개인정보 취급방침 | 이용안내 | 이메일 무단수집 거부</li>
                    <li>서민금융119서비스 | 보험범죄 신고 | 전자 민원 접수| 보험약관 안내| 금융사기 신고센터</li>
                </ul>
                    <ul id = "company_info">
                        <li>하이버(주)</li>
                        <li>대표이사 : 장우진, 이도연</li>
                        <li>주소: 성남시 중원구 광명로 377(금광2동 2685</li>
                        <li>전화: 010-xxxx-xxxx</li>
                        <li id ="copyright">Copyright by Rubato Company</li>
                    </ul>
            </article>
            <article id = "link">
                <h3>고객센터 1588-1234</h3>
                <select>
                    <option>네이버</option>
                    <option>구글</option>
                    <option>다음</option>
                </select>
                <div id = "icons">
                    <img src="">
                    <img src="">
                    <img src="">
                </div>
            </article>
        </footer>
    </div>
</body>

</html>