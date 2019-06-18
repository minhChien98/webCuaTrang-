<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
?>

<?php 

$noidung=$_POST["txtNoidung"];
$now = new DateTime();
$ngayviet = $now->format('Y-m-d');
$madv=trim($_POST["txtMadv"]);
$tentk = $_SESSION['tentk'];
include("../cauhinh/db_cauhinh.php");
$ketnoi=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
	$sql="INSERT INTO tbl_nhanxet (noidung, ngayviet, madv, tentk) VALUES ('".$noidung."', '".$ngayviet."','".$madv."', '".$tentk."')";
	
  mysqli_query($ketnoi, $sql);
//  echo '<script>console.log('.json_encode($_SERVER['HTTP_REFERER']).')</script>';
//  echo "<meta http-equiv= 'refresh' content='0;URL=product-single.php?id='.$madv'>";
header('Location: '.$_SERVER['HTTP_REFERER']);

?>