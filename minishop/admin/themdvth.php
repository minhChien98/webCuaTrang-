<?php 
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
INSERT INTO `tbl_dichvu` ( `tendich`, `gia`, `chietkhau`, `noidung`, `anh`) 
VALUES  ('".$tendv."', '".$gia."', '".$chietkhau."', '".$noidung."', '".$linkanh."')";

mysqli_query($ketnoi, $sql);
header('location:quanlidv.php');
 ?>