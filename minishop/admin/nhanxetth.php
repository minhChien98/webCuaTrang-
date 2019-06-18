<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
?>

<?php 

$noidung=$_POST["txtNoidung"];
$ngayviet=getdate();
$madv=$_POST["txtMadv"];
$tentk= $_SESSION['userCode'] || 1;

include("../cauhinh/db_cauhinh.php");
$ketnoi=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
	$sql="INSERT INTO tbl_nhanxet (noidung, ngayviet, madv, makh) VALUES ('".$noidung."', '".$ngayviet."','".$madv."', '".var_dump($tentk)."')";
	
	mysqli_query($ketnoi, $sql);
	//header('location:quanlidv.php');

?>