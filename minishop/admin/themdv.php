<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
;?>
<!DOCTYPE html>
<html>
<head>
	<title>thêm mới dịch vụ</title>
	<link rel="stylesheet" type="text/css" href="../css/phongcach.css">
</head>
<body>
<h1 style="text-align: center;">THÊM MỚI DỊCH VỤ</h1>
<form method="POST" action="themdvth.php" enctype="multipart/form-data" >
	<table>
		<tr>
		<td>Tiêu đề</td>
		<TD> <input style="height:60px; width: 600px;" type="text" name="txtTieude">
		</TD>
	</tr>
	<tr>
		<td style="size: 30px">Nội dung</td>
		<TD> <textarea style="height: 300px ; width: 600px;" name="txtNoidung" ></textarea> 
		</TD>
	</tr>
	<tr>
		<td>Gía</td>
		<TD> <input style="height:60px; width: 600px;"  name="txtGia" >
		</TD>
	</tr>
	<tr>
		<td>Chiết khấu</td>
		<TD> <input  style="height:60px; width: 600px;" name="txtChietkhau" >
		</TD>
	</tr>
	<tr>
		<td>ảnh</td>
		<TD>  <input type="file" name="img" >
		</TD>

	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			
			<input type="submit" name="txtSubmit" value="Cập nhập">
		</td>
		
	</tr>
	</table>
</form>

</body>
</html>