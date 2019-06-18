<!DOCTYPE html>
<html>
<head>
    <title>Đangki</title>
    <link href="css/DANGNHAP1.css" rel="stylesheet" type="text/css"/>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    </head>
<body style="background-image: url(./images/anh1.jpg);">

<form action="admin/dkth.php" method="post">

  <h1>QUANG ĐỊNH <Br>
  kính chào
  </h1>
	<input placeholder="họ và tên" type="text" name="txtHoten" required=""><Br>

  <input placeholder="số điện thoại" type="text" name="txtSdt" required=""><Br>

  <input placeholder="email" type="text" name="txtEmail" required=""><Br>

  <input placeholder="tên đăng nhập" type="text" name="txtTaikhoan" required=""><Br>

  <input placeholder="mật khẩu" type="password" name="txtPassword" required=""><Br>
  <div>
  <p style="padding-left: 90px;">Khách hàng</p>
  <input placeholder="khách hàng" type="radio" name="phanquyen" value="0"  >
  <p style="padding-left: 90px;">Nhân viên</p>
  <input placeholder="nhân viên" type="radio" name="phanquyen" value="1" >
   </div>
  <input type="submit" name="" value="đăng kí"> 
</form>



</body>
</html>