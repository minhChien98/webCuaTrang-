-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 05:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltw`
--

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tentk` varchar(100) NOT NULL,
  `matkhau` varchar(10) NOT NULL,
  `phanquyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tentk`, `matkhau`, `phanquyen`) VALUES
('hii', '111', 0),
('quanli', '101', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dichvu`
--

CREATE TABLE `tbl_dichvu` (
  `madv` int(11) NOT NULL,
  `tendich` varchar(200) NOT NULL,
  `gia` int(19) NOT NULL,
  `chietkhau` float NOT NULL,
  `noidung` varchar(1000) NOT NULL,
  `anh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dichvu`
--

INSERT INTO `tbl_dichvu` (`madv`, `tendich`, `gia`, `chietkhau`, `noidung`, `anh`) VALUES
(1, 'chụp hình gia đình 4 - 6 thành viên ', 1850000, 0.2, 'Bao gồm :\r\n10 ảnh 15x21cm\r\n01 gỗ 60x90cm \r\n01 album gài ảnh \r\nTrang điểm 2 thành viên\r\nMiễn phí 1 trang phục cho cả gia đình\r\n', ''),
(2, 'chụp gia đình 7-9 thành viên', 3400000, 0.2, '20 ảnh 15x21cm\r\n01 gỗ 50x75cm\r\n01 gỗ 60x90cm\r\n01 album gài ảnh\r\nTrang điểm 3 thành viên + ( bé gái dưới 13 tuổi)\r\nMiễn phí trang phục cho cả gia đình\r\n', ''),
(3, 'gia đình 7-9 thành viên', 3400000, 0.2, '20 ảnh 15x21cm\r\n01 gỗ 50x75cm\r\n01 gỗ 60x90cm\r\n01 album gài ảnh\r\nTrang điểm 3 thành viên + ( bé gái dưới 13 tuổi)\r\nMiễn phí trang phục cho cả gia đình\r\n', ''),
(4, '', 0, 0, '', ''),
(5, 'gia đình 10-12 thành viên', 4150000, 0, 'Bao gồm :\r\n22 ảnh 15x21cm\r\n01 gỗ 60x90cm \r\n01 gỗ 70x110cm \r\n1 album gài ảnh\r\nTrang điểm 4 thành viên + ( bé gái dưới 13 tuổi)\r\nMiễn phí trang phục cho cả gia đình\r\n', ''),
(6, '', 0, 0, '', ''),
(7, '1hhj', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tentk`,`matkhau`);

--
-- Indexes for table `tbl_dichvu`
--
ALTER TABLE `tbl_dichvu`
  ADD PRIMARY KEY (`madv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dichvu`
--
ALTER TABLE `tbl_dichvu`
  MODIFY `madv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
