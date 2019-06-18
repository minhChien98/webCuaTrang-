<?php 

$hoten=$_POST["txtHoten"];
$sdt=$_POST["txtSdt"];
$email=$_POST["txtEmail"];
$taikhoan=$_POST["txtTaikhoan"];
$password = $_POST["txtPassword"];
$phanquyen = $_POST["phanquyen"];

include("../cauhinh/db_cauhinh.php");
$ketnoi=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

$sql1="INSERT INTO `tbl_taikhoan` (`tentk`, `matkhau`, `phanquyen`) VALUES ('".$taikhoan."', '".$password."', '".$phanquyen."');";
mysqli_query($ketnoi, $sql1);
$sql="INSERT INTO tbl_khang (tenkh, email, sdt, tentk) VALUES ( '".$hoten."', '".$email."', '".$sdt."', '".$taikhoan."');";
mysqli_query($ketnoi, $sql);

header('location:../dangnhap.php');
 ?>
 