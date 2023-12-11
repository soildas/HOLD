<?php
	session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet" />
    <meta charset="utf-8">
    <link href="./css/login.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <?php
    //$_SESSION["userID"]="admin";
    //unset($_SESSION["userID"]);
        if(empty($_SESSION["userId"])){    //로그인 안된 상태이면
     ?>

    <div class="v52_2">
        <form action="login.php" method="post">
        <div class="v52_3" >
            <input type="text" name="member_id" style="width: 605px;height: 66px;font-size:22px; margin: auto;">
        </div>
        <div class="v52_4">
            <input type="password" name="pw" style="width: 605px;height: 66px;font-size:22px; margin: auto;">
        </div>
        <span class="v52_9">아이디</span>
        <span class="v52_16">비밀번호</span>
        <div class="v52_21" style = "cursor: pointer;" onclick="location.href='main.php'"></div>
        <div class="v52_23"></div><input type="submit" value="로그인" style="background-color:transparent; border:0px transparent solid;" class="v52_24"></span>
        <span class="v52_27"> </span>
        <span class="v52_30">안녕하세요.<br>
                            저희의 신규 회원을 진심으로 감사드립니다.<br>
                            신규 회원 가입 시 쿠폰을 드립니다.</span>
        <span class="v52_31" style="cursor: pointer;" onclick="location.href='find_id.html'">아이디 찾기</span>
        <span class="v52_32" style="cursor: pointer;" onclick="location.href='find_pw.html'">비밀번호찾기</span>
        <span class="v52_33" style="cursor: pointer;" onclick="location.href='member_join_form.php'">회원가입</span>
        </form>
    </div>
    <?php
	} else {  //로그인 된 상태이면
?>
        ehco "<script>location.href='mypage.php'</script>";
<?php
	}
?>
</body>

</html>