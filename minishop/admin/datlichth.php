
<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
;?>
<?php 
$ngayhen=$_POST["txtNgayhen"];
$ngaydat=getdate();
$ghichu=$_POST["txtGhichu"];
$madv=$_POST["txtMadv"];
$tentk=$_SESSION['tentk'];

include("../cauhinh/db_cauhinh.php");
$ketnoi=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);


$sql="INSERT INTO `tbl_datlich` (`madatlich`, `ngaydat`, `ngayhen`, `ghichu`, `tentk`, `madv`) VALUES ( '".$ngaydat."', '".$ngayhen."', '".$ghichu."', '".$tentk."', '".$madv."');
";

mysqli_query($ketnoi, $sql);
//header('location:../index.php');
 ?>