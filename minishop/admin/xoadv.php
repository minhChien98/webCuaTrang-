<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
;?>
<?php 
$id=$_GET["id"];

include("../cauhinh/db_cauhinh.php");

$ketnoi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$sql="
		DELETE 
		FROM `tbl_dichvu` 
		WHERE `tbl_dichvu`.`madv` = '".$id."'
		";

mysqli_query($ketnoi,$sql);

header('location:quanlidv.php');

 ?>