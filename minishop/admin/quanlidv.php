<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
;?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>quan lí </title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>
<body>
	<h1>QUẢN TRỊ DỊCH VỤ</h1>
	<hr>

	<h4 id="phanhoi" style="color: red; text-transform: uppercase; text-align: center;"> DANH SÁCH DỊCH VỤ</h4>

	<p style="text-align: right; font-weight: bold;"><a href="themdv.php"><img style="width: 24px; height: auto;" src="../images/add.png"></a></p>
	<table>
		<tr>
			<td style="width: 600px; font-weight: bold;">Tiêu đề</td>
			<td style="width: 150px; font-weight: bold;">Sửa</td>
			<td style="width: 150px; font-weight: bold;">Xóa</td>
		</tr>
	<?php 
		// Tiến hành kết nối đến CSDL của chúng ta
		include("../cauhinh/db_cauhinh.php");
		$ketnoi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

		// Lấy ra dữ liệu mong muốn
		$sql = "SELECT * FROM tbl_dichvu";
		$noidungdv = mysqli_query($ketnoi, $sql);

		// Hiển thị chúng
		while ($row = mysqli_fetch_array($noidungdv)) {
	;?>
		<tr>
			<td><a href="../product-single.php"><?php echo $row['tendich'];?></a></td>

			<td><a href="./suadichvu.php?id=<?php echo $row ['madv'];?>"><img style="width: 24px; height: auto;" src="../images/edit.png"></a></td>

			<td><a href="./xoadv.php?id=<?php echo $row['madv'];?>"><img style="width: 24px; height: auto;" src="../images/delete.png"></a></td>
		</tr>
	<?php
		}
		// Đóng kết nối
		mysqli_close($ketnoi);
	;?>
	</table>
</body>
</html>