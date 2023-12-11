<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet" />
    <meta charset="utf-8">
    <link href="./css/singup.css" rel="stylesheet" />
    <title>회원가입</title>
</head>

<body>
    <div class="v26_2">
        <form action="members_join.php" method="post">
            <div class="v26_3"><input type="text" name="name" style="width: 605px;height: 66px;font-size:22px; margin: auto;"></div>
            <div class="v31_7"><input type="text" name="member_id" style="width: 605px;height: 66px;font-size:22px; margin: auto;"></div>
            <div class="v31_9"><input type="password" name="pw" style="width: 605px;height: 66px;font-size:22px; margin: auto;"></div>
            <div class="v31_11"><input type="password" name="pwCheck" style="width: 605px;height: 66px;font-size:22px; margin: auto;"></div> <!-- <비밀번호찾기> -->
            <div class="v31_19"><input type="text" name="phoneNumber" style="width: 605px;height: 66px;font-size:22px; margin: auto;"></div>
            <div class="v31_21"><input type="text" name="email" style="width: 605px;height: 66px;font-size:22px; margin: auto;"></div>
            <span class="v26_4">이름 </span>
            <span class="v46_85">*</span>
            <span class="v46_87">*</span>
            <span class="v46_88">*</span>
            <span class="v46_89">*</span>
            <span class="v46_90">*</span>
            <span class="v46_91">*</span>
            <span class="v31_8">아이디        </span>
            <span class="v31_10">비밀번호     </span>
            <span class="v31_12">비밀번호 확인</span>
            <span class="v31_20">휴대폰 번호 </span>
            <span class="v31_22">이메일      </span>
            <div class="v26_12" style = "cursor: pointer;" onclick="location.href='main.php'"></div><span class="v26_13">회원가입 </span>
            <div class="v31_15"></div>
            <input type="submit" value="회원가입완료" style="background-color:transparent; border:0px transparent solid;" class="v31_16"></span>
            <div class="v31_78"></div><span class="v31_79">인증요청</span><span class="v31_83"> </span>
        </form>
    </div>
</body>

</html>