<?php 
	// Xóa phiên làm việc
	session_start();
	session_destroy();

	// Trỏ người dung về trang đăng nhập
	header("Location: ../dangnhap.php")
;?>