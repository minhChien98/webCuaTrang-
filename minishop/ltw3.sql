-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 18, 2019 lúc 06:25 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltw3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_datlich`
--

CREATE TABLE `tbl_datlich` (
  `madatlich` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `ngayhen` date NOT NULL,
  `ghichu` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tentk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `madv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_datlich`
--

INSERT INTO `tbl_datlich` (`madatlich`, `ngaydat`, `ngayhen`, `ghichu`, `tentk`, `madv`) VALUES
(1, '2019-06-06', '2019-06-11', 'kcj', 'khachang1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dichvu`
--

CREATE TABLE `tbl_dichvu` (
  `madv` int(11) NOT NULL,
  `tendich` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia` int(19) NOT NULL,
  `chietkhau` float NOT NULL,
  `noidung` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_dichvu`
--

INSERT INTO `tbl_dichvu` (`madv`, `tendich`, `gia`, `chietkhau`, `noidung`, `anh`) VALUES
(1, 'GIA ÄÃŒNH 4 THÃ€NH VIÃŠN:', 500000, 0, 'GÃ³i chá»¥p bao gá»“m :\r\n-10 áº¢nh in cá»¡ 15x21 cm, phá»§ UV\r\n- Táº·ng 1 cuá»‘n album Ä‘á»ƒ gÃ i áº£nh \r\n- Giáº£m giÃ¡ 20% khi lÃ m áº¢NH PHÃ“NG Lá»šN\r\n- MIá»„N PHÃ trang Ä‘iá»ƒm, lÃ m tÃ³c vÃ  1 tr', 'upload/anh3.jpg'),
(2, 'GÃ³i chá»¥p 4 - 6 thÃ nh viÃªn ', 1850000, 0, 'Bao gá»“m :\r\n10 áº£nh 15x21cm\r\n01 gá»— 60x90cm \r\n01 album gÃ i áº£nh \r\nTrang Ä‘iá»ƒm 2 thÃ nh viÃªn\r\nMiá»…n phÃ­ 1 trang phá»¥c cho cáº£ gia Ä‘Ã¬nh\r\n', 'upload/anh1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khang`
--

CREATE TABLE `tbl_khang` (
  `makh` int(10) NOT NULL,
  `tenkh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `tentk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_khang`
--

INSERT INTO `tbl_khang` (`makh`, `tenkh`, `email`, `sdt`, `tentk`) VALUES
(1, 'nguyễn thị thơm', 'thom@gmai.com', 97867666, 'khachhang'),
(2, 'nguyễn tiến đức', 'duc@gmai.com', 9897876, 'khachhang'),
(3, 'lê thị mai', 'mai@gmail.com', 997867868, 'khachang1'),
(4, 'Chiáº¿n', 'chiendev98@gmail.com', 964903308, 'minhChien199898'),
(5, 'Chiáº¿n', 'chiendev98@gmail.com', 964903308, 'minhChien19989800'),
(6, '', '', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanxet`
--

CREATE TABLE `tbl_nhanxet` (
  `id` int(100) NOT NULL,
  `noidung` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngayviet` date NOT NULL,
  `madv` int(11) NOT NULL,
  `makh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `tentk` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phanquyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`tentk`, `matkhau`, `phanquyen`) VALUES
('', '', 0),
('chichi', '111', 0),
('chimai', '111', 0),
('chithu', '000', 1),
('khachang1', '111', 0),
('khachhang', '101', 0),
('minhChien198', '12345678', 0),
('minhChien1998', '12345678', 0),
('minhChien199898', '12345678', 0),
('minhChien19989800', '1000', 0),
('minhChien19998', '12345678', 0),
('minhChien98', '12345678', 0),
('thomthom', '000', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_datlich`
--
ALTER TABLE `tbl_datlich`
  ADD PRIMARY KEY (`madatlich`),
  ADD KEY `madv` (`madv`),
  ADD KEY `tentk` (`tentk`);

--
-- Chỉ mục cho bảng `tbl_dichvu`
--
ALTER TABLE `tbl_dichvu`
  ADD PRIMARY KEY (`madv`);

--
-- Chỉ mục cho bảng `tbl_khang`
--
ALTER TABLE `tbl_khang`
  ADD PRIMARY KEY (`makh`),
  ADD KEY `tentk` (`tentk`);

--
-- Chỉ mục cho bảng `tbl_nhanxet`
--
ALTER TABLE `tbl_nhanxet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `madv` (`madv`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`tentk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_datlich`
--
ALTER TABLE `tbl_datlich`
  MODIFY `madatlich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_dichvu`
--
ALTER TABLE `tbl_dichvu`
  MODIFY `madv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_khang`
--
ALTER TABLE `tbl_khang`
  MODIFY `makh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanxet`
--
ALTER TABLE `tbl_nhanxet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_datlich`
--
ALTER TABLE `tbl_datlich`
  ADD CONSTRAINT `fk_dl_dv` FOREIGN KEY (`madv`) REFERENCES `tbl_dichvu` (`madv`),
  ADD CONSTRAINT `fk_tk_dl` FOREIGN KEY (`tentk`) REFERENCES `tbl_taikhoan` (`tentk`);

--
-- Các ràng buộc cho bảng `tbl_khang`
--
ALTER TABLE `tbl_khang`
  ADD CONSTRAINT `fk_tk_kh` FOREIGN KEY (`tentk`) REFERENCES `tbl_taikhoan` (`tentk`);

--
-- Các ràng buộc cho bảng `tbl_nhanxet`
--
ALTER TABLE `tbl_nhanxet`
  ADD CONSTRAINT `fk_nx_dv` FOREIGN KEY (`madv`) REFERENCES `tbl_dichvu` (`madv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
