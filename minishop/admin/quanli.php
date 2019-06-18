<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
;?>
<!DOCTYPE html>
<html>
<head>
	<title>quanli</title>
	<meta charset="utf-8">
	 <link href="css/DANGNHAP1.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div>
<h1 style="text-align: "> CÁC CHỨC NĂNG</h1><hr>
</div>

<a href="quanlidv.php">QUẢN LÍ DỊCH VỤ</a><br>
<a href="quanlidatlich.php">QUẢN LÍ ĐẶT LỊCH</a>
</body>
</html>