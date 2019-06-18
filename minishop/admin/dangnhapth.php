<?php 
	// Lấy dữ liệu từ trang tin tức thêm mới
	$username = $_POST["txtTaikhoan"];
	$password = $_POST["txtPassword"];

	// Tiến hành kết nối đến CSDL của chúng ta
	include("../cauhinh/db_cauhinh.php");
	$ketnoi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
	

	$sql = "
		SELECT * 
		FROM tbl_taikhoan
		WHERE tentk='".$username."' AND matkhau='".$password."'
	";

	


	$du_lieu = mysqli_query($ketnoi, $sql);
	$so_luong = mysqli_num_rows($du_lieu);

	


	// Xử lý người dùng
	if($so_luong==0) {
		header('Location: ../dangnhap.php');
	} else
	 {
	 	$query = "select * from tbl_khang where tentk = '".$username."'";
	 	$result = mysqli_query($ketnoi, $query);
	 	$user = mysqli_fetch_array($result);
		session_start();

		$_SESSION['tentk'] = $username;
		$row=  mysqli_fetch_array($du_lieu);

		$_SESSION['phanquyen']=$row['phanquyen'] ;
		$_SESSION['name'] = $user['tenkh'];
		$_SESSION['userCode'] = $user['makh'];



		if ($_SESSION['phanquyen'] == 0) {
			header('Location: ../index.php');
		}
		if ($_SESSION['phanquyen'] == 1) {
			header('Location: ../admin/quanli.php');
		}

		
		
		//header('Location: ../admin/quanlidv.php');
	}
;?>