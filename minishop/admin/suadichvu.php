<?php
	session_start();
	if(!isset($_SESSION['tentk'])) {
		header("Location: ../dangnhap.php");
	}
;?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa nội dung dịch vụ </title>
	<link rel="stylesheet" type="text/css" href="../css/phongcach.css">
</head>
<body>
<h1 style="text-align: center;">SỬA DỊCH VỤ</h1><HR>
<?php
  $id = $_GET["id"];
  include("../cauhinh/db_cauhinh.php");
  $ketnoi=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

  $sql= "
  SELECT *
  from tbl_dichvu
  WHERE madv ='".$id."'";

  $noidungdv=mysqli_query($ketnoi,$sql);

  while ($row=mysqli_fetch_array($noidungdv)) {
  
  
;?>

<form  method="post" action="suadvth.php" enctype="multipart/form-data" >
<table >
	<tr>
		<td>Tiêu đề</td>
		<TD> <input style="height:60px; width: 600px;" type="text" name="txtTieude" value="<?php echo $row['tendich'] ; ?>">
		</TD>
	</tr>
	<tr>
		<td style="size: 30px">Nội dung</td>
		<TD> <textarea style="height: 300px ; width: 600px;" name="txtNoidung" ><?php echo $row['noidung']; ?></textarea> 
		</TD>
	</tr>
	<tr>
		<td>Gía</td>
		<TD> <input style="height:60px; width: 600px;"  name="txtGia" value="<?php echo $row['gia']; ?>">
		</TD>
	</tr>
	<tr>
		<td>Chiết khấu</td>
		<TD> <input  style="height:60px; width: 600px;" name="txtChietkhau" value="<?php echo $row['chietkhau']; ?>">
		</TD>
	</tr>
	<tr>
		<td>ảnh</td>
		<TD > <img src="../<?php echo $row['anh'];  ?>" style="height: 200px;width: 600px" >
		<TD>  <input type="file" name="img" >
		
		</TD>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			<input type="hidden" name="txtId" value="<?php echo $row['madv'] ; ?>">
			<input type="submit" name="txtSubmit" value="Cập nhập">
		</td>
		
	</tr>
	<?php 
	}
	mysqli_close($ketnoi);
	 ;?>
</table>
</form>
</body>
</html>