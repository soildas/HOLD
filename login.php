<?php
	$member_id = $_REQUEST["member_id"];
	$pw = $_REQUEST["pw"];
	
	require("db_connect.php");
	
	$query = $db -> query("select * from members where member_id='$member_id' and pw='$pw'");
	if ($row = $query->fetch()) {
		session_start();
		$_SESSION["userId"] = $row["member_id"];
		$_SESSION["userName"] = $row["name"];
		
		header("Location:login_form.php");
		exit;
	}
?>

<!doctype html>
 <html>
 <head>
     <meta charset="utf-8">
 </head>
 <body>

<script>
	alert('아이디 또는 비밀번호가 틀렸습니다.');
	history.back();
</script>

</body>
</html> 