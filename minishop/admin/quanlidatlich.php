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

	<h4 id="phanhoi" style="color: red; text-transform: uppercase; text-align: center;"> DANH SÁCH LỊCH ĐẶT</h4>
	<table style="padding-left: 260px">
		<tr>
			<td style="width: 160px; font-weight: bold;">NGÀY ĐẶT</td>
			<td style="width: 150px; font-weight: bold;">NGÀY HẸN</td>
			<td style="width: 150px; font-weight: bold;">GHI CHÚ</td>
			<td style="width: 150px; font-weight: bold;">TÊN TÀI KHOAN</td>	
			<td style="width: 150px; font-weight: bold;">MÃ DỊCH VỤ</td>
		</tr>
	<?php 
		// Tiến hành kết nối đến CSDL của chúng ta
		include("../cauhinh/db_cauhinh.php");
		$ketnoi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

		// Lấy ra dữ liệu mong muốn
		$sql = "SELECT * FROM tbl_datlich";
		$noidung = mysqli_query($ketnoi, $sql);

		// Hiển thị chúng
		while ($row = mysqli_fetch_array($noidung)) {
	;?>
		<tr>
			<td><?php echo $row['ngaydat'];?></td>
			<td><?php echo $row['ngayhen'];?></td>
			<td><?php echo $row['ghichu'];?></td>
			<td><?php echo $row['tentk'];?></td>
			<td><?php echo $row['madv'];?></td>

			
		</tr>
	<?php
		}
		// Đóng kết nối
		mysqli_close($ketnoi);
	;?>
	</table>
</body>
</html>