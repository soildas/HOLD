<?php
    $name = $_REQUEST["name"] ?? "";
	$member_id = $_REQUEST["member_id"] ?? "";
	$pw = $_REQUEST["pw"] ?? "";
	$pwCheck = $_REQUEST["pwCheck"] ?? "";
	$email = $_REQUEST["email"] ?? "";
    $phoneNumber = $_REQUEST["phoneNumber"] ?? "";
	$regist_day = date("Y-m-d (H:i)");
	
	require("db_connect.php");
	
	if (!($member_id && $pw && $pwCheck && $name && $email && $phoneNumber)) {
?>
		<script>
		alert('빈칸없이 입력 해야 합니다.');
		history.back();
		</script>
<?php
	} else if ($db->query("select * from members where member_id='$member_id'")->fetch()){
?>		
		<script>
        alert('이미 등록된 아이디입니다.');
        history.back();
		</script>

<?php
	} else {
		$db->exec("insert into members (name, member_id,  pw, email, phoneNumber, regist_day)
							values('$name', '$member_id', '$pw', '$email', '$phoneNumber', '$regist_day')");
?>
		<script>
        alert('가입이 완료되었습니다.');
        history.back();
		</script>
<?php
	}
?>
</body>
</html>
