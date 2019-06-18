<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
;?>
<?php 
$id=$_POST["txtId"];
$img=$_FILES["img"]["name"];
$linkanh='upload/'.$img;
$tendv=$_POST["txtTieude"];
$noidung=$_POST["txtNoidung"];
$gia=$_POST["txtGia"];
$chietkhau=$_POST["txtChietkhau"];

include("../cauhinh/db_cauhinh.php");
$ketnoi=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

$linkanh='upload/'.$img;
move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/".$img);
$sql="
UPDATE `tbl_dichvu` SET `tendich` = '".$tendv."', `gia` = '".$gia."', `chietkhau` = '".$chietkhau."', `noidung` = '".$noidung."', `anh` = '".$linkanh."' WHERE `tbl_dichvu`.`madv` = '".$id."' 
";
mysqli_query($ketnoi,$sql);
header('location:quanlidv.php');

 ?>