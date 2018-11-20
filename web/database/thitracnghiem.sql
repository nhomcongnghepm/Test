-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 03:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thitracnghiem`
--

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `id_gv` int(10) NOT NULL,
  `ho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Gioitinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bomon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`id_gv`, `ho`, `ten`, `user`, `password`, `email`, `birthdate`, `Gioitinh`, `bomon`, `quyen`) VALUES
(20100042, 'Phan Tấn', 'Bình', 'binh123', '8bd1c0165694ac2669228e73843d26', 'binh@gmail.com', '16-2-2005', 'Nam', 'Toán', 'Giáo Viên'),
(20100043, 'Ngô Bá Vĩnh ', 'Hiển', 'hien123', '2c7bc5665e3482c031f9a928038b30', 'hien123@gmail.com', '14-3-2004', 'Nam', 'Hóa', 'Giáo Viên'),
(20100044, 'Nguyễn Thanh Trường', 'Giang', 'giang123', '4e031bb475963ba73ebf552f78ae1c', 'giang@gmail.com', '16-2-2003', 'Nam', 'Vật lý', 'Trưởng bộ môn');

-- --------------------------------------------------------

--
-- Table structure for table `ketquathi`
--

CREATE TABLE `ketquathi` (
  `stt` int(10) NOT NULL,
  `ho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `toan` int(10) NOT NULL,
  `ly` int(10) NOT NULL,
  `hoa` int(10) NOT NULL,
  `anh` int(10) NOT NULL,
  `tongdiem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ketquathi`
--

INSERT INTO `ketquathi` (`stt`, `ho`, `ten`, `birthdate`, `toan`, `ly`, `hoa`, `anh`, `tongdiem`) VALUES
(1, 'Thạch Cảnh ', 'Bình', '5-3-1999', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(10) NOT NULL,
  `ho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenlop` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `ho`, `ten`, `user`, `password`, `email`, `birthdate`, `Gioitinh`, `tenlop`, `quyen`) VALUES
(101000021, 'Thạch Cảnh', 'Bình', 'canhbinh12', 'c69f340ced75efd4373913b8ffcee96d2dd717ac', 'canhbinh@gmail.com', '17-3-2006', 'Nam', '12A1', 'Học Sinh'),
(101000025, 'Đào Ngọc Gia ', 'Anh', 'giaanh123', 'bd753b80609e4f10d98a4655e55a1c296feb797b', 'giaanh@gmail.com', '2-2-1994', 'Nam', '12A6', 'Học Sinh'),
(101000026, 'Nguyễn Vinh ', 'Hiển', 'hien123', '2c7bc5665e3482c031f9a928038b301e068e6413', 'hien@gmail.com', '2-2-1993', 'Nam', '12A7', 'Học Sinh'),
(101000027, 'Đoàn Tô Thanh', 'Bình', 'thanhbinh1', '361fce041655af29b7fd5106d77b1faedd1eba5c', 'thanhbinh@gmail.com', '10-7-1997', 'Nam', '12A8', 'Học Sinh'),
(101000028, 'Ma Đình ', 'Cường', 'cuong123', 'd53b988795aae0764a17fb8a95f40d03c8048436', 'cuong@gmail.com', '1-1-1994', 'Nam', '12A9', 'Học Sinh'),
(101000029, 'Trần Văn', 'Bảo', 'vanbao123', '7b34fb80623ffd9d806dcae10346b5f83a9da8cf', 'vanbao@gmail.com', '1-1-1990', 'Nam', '12A8', 'Học Sinh'),
(101000030, 'Nguyễn Hà Xuân', 'Cường', 'xuancuong1', 'ac30ae7962a3a5325b60f8defaf2e56e4a95a14a', 'xuancuong@gmail.com', '1-1-1990', 'Nam', '12A8', 'Học Sinh'),
(101000031, 'Đặng Vũ Nhật ', 'Anh', 'anh123', '1e5bcc028d318a1a4780fa8af78e65e22c4bcde5', 'anh@gmail.com', '4-4-1993', 'Nam', '12A8', 'Học Sinh'),
(101000032, 'Lê Thị ', 'Linh', 'linh123', 'ed3c9dba8ca23a33af1342082544922ee774e85d', 'Linh123@gmail.com', '4-4-1993', 'Nam', '12A8', 'Học Sinh'),
(101000033, 'Huỳnh Nhật ', 'Hòa', 'hoa123', '314576f49db3e92c639ec86f1d951620ef45c34d', 'hoa123@gmail.com', '2-4-1993', 'Nam', '12A10', 'Học Sinh'),
(101000034, 'Lê Văn ', 'Hiếu', 'hieu123', 'dc1c013e029c385578f921f9b49f0641fffd8b98', 'Hieu@gmail.com', '1-2-1992', 'Nam', '12a4', 'Học Sinh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cauhoi`
--

CREATE TABLE `tbl_cauhoi` (
  `ma_ch` int(10) NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lc1` varchar(80) CHARACTER SET utf8 NOT NULL,
  `lc2` varchar(80) CHARACTER SET utf8 NOT NULL,
  `lc3` varchar(80) CHARACTER SET utf8 NOT NULL,
  `lc4` varchar(80) CHARACTER SET utf8 NOT NULL,
  `dapan` varchar(80) CHARACTER SET utf8 NOT NULL,
  `made` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cauhoi`
--

INSERT INTO `tbl_cauhoi` (`ma_ch`, `noidung`, `lc1`, `lc2`, `lc3`, `lc4`, `dapan`, `made`) VALUES
(64, '<p>đ&aacute;</p>', 'áda', 'ádas', 'ádas', 'áda', 'áda', 46),
(65, '<p>&aacute;dasd</p>', 'adasd', 'ádasd', 'ádasd', 'ádas', 'adasd', 46),
(66, '<p>&aacute;dsada</p>', 'ádasd', 'ádasd', 'ádasd', 'ádasd', 'ádasd', 46),
(67, '<p>&aacute;dsada</p>', 'đasa', 'ádas', 'đâsdas', 'đâsds', 'đasa', 46),
(68, '<p>&aacute;dasd</p>', 'ádasdas', 'ádasd', 'ấdsad', 'ádasd', 'ádasdas', 46),
(69, '<p>&aacute;dsad</p>', 'ádas', 'ádasd', 'ádas', 'ádas', 'ádas', 46),
(70, '<p>&aacute;dasd</p>', 'ádsa', 'ádas', 'ádas', 'ádas', 'ádsa', 46),
(71, '<p>&aacute;&aacute;dasd</p>', 'ád', 'áda', 'ád', 'ád', 'ád', 46),
(72, '<p>&aacute;dsa</p>', 'ádasd', 'ádas', 'ádasd', 'ádad', 'ádasd', 46),
(73, '<p>&aacute;dadas</p>', 'ádasda', 'ádasd', 'ádasdasd', 'ádadasda', 'ádasda', 46),
(74, '<p>d&acirc;sda</p>', 'ádasda', 'sdasdada', 'ádad', 'ádas', 'sdasdada', 46),
(75, '<p>&aacute;dsadas</p>', 'ádasdas', 'đâsd', 'ádasas', 'dá', 'dá', 46),
(76, '<p>&aacute;dasdasd</p>', 'ádasd', 'ádasda', 'sdada', 'ádas', 'ádasd', 46),
(77, '<p>đ&acirc;sd</p>', 'ád', 'ádas', 'ádasd', 'ád', 'ád', 46),
(78, '<p>&aacute;das</p>', 'ádasd', 'ádasd', 'ádasd', 'ádasd', 'ádasd', 46);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dethi`
--

CREATE TABLE `tbl_dethi` (
  `made` int(11) NOT NULL,
  `tende` varchar(70) CHARACTER SET utf8 NOT NULL,
  `ngaythi` varchar(10) NOT NULL,
  `giothi` varchar(10) NOT NULL,
  `tacgia` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ngaydang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timer` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lanthi` int(10) NOT NULL,
  `trangthai` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dethi`
--

INSERT INTO `tbl_dethi` (`made`, `tende`, `ngaythi`, `giothi`, `tacgia`, `ngaydang`, `timer`, `lanthi`, `trangthai`) VALUES
(46, 'Toán', '3/3/2018', '4:3:3', 'Nguyễn Thanh Trường Giang', '17/11/18', '', 0, 'Đã duyệt'),
(47, 'Tiếng Anh', '4/3/2019', '3h:2p:3s', 'Nguyễn Thanh Trường Giang', '17/11/18', '', 0, ''),
(48, 'Hóa', '1/1/2018', '0h:0p:0s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(49, 'ád', '1/1/2018', '0h:0p:0s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(50, 'ádas', '1/1/2018', '0h:1p:0s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(51, 'ádasd', '2/1/2018', '0h:1p:0s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(52, 'bh', '1/1/2018', '1h:0p:0s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(53, 'ádasd', '1/1/2018', '0h:1p:0s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(54, 'đâs', '1/1/2018', '0h:0p:0s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(55, 'ádsa', '1/1/2018', '0h:0p:1s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(56, 'đáa', '1/1/2019', '1h:0p:1s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, ''),
(57, 'đâsjdlk', '1/1/2018', '0h:0p:0s', 'Nguyễn Thanh Trường Giang', '19/11/18', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ho` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `birthdate` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Gioitinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `quyen` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ho`, `ten`, `user`, `email`, `password`, `birthdate`, `Gioitinh`, `quyen`) VALUES
('101000021', 'Thạch Cảnh', 'Bình', 'canhbinh12', 'canhbinh@gmail.com', 'c69f340ced75efd4373913b8ffcee96d2dd717ac', '17-3-2006', 'Nam', 'Học Sinh'),
('101000025', 'Đào Ngọc Gia ', 'Anh', 'giaanh123', 'giaanh@gmail.com', 'bd753b80609e4f10d98a4655e55a1c296feb797b', '2-2-1994', 'Nam', 'Học Sinh'),
('101000026', 'Nguyễn Vinh ', 'Hiển', 'hien123', 'hien@gmail.com', '2c7bc5665e3482c031f9a928038b301e068e6413', '2-2-1993', 'Nam', 'Học Sinh'),
('101000027', 'Đoàn Tô Thanh', 'Bình', 'thanhbinh123', 'thanhbinh@gmail.com', '361fce041655af29b7fd5106d77b1faedd1eba5c', '10-7-1997', 'Nam', 'Học Sinh'),
('101000028', 'Ma Đình ', 'Cường', 'cuong123', 'cuong@gmail.com', 'd53b988795aae0764a17fb8a95f40d03c8048436', '1-1-1994', 'Nam', 'Học Sinh'),
('101000029', 'Trần Văn', 'Bảo', 'vanbao123', 'vanbao@gmail.com', '7b34fb80623ffd9d806dcae10346b5f83a9da8cf', '1-1-1990', 'Nam', 'Học Sinh'),
('101000030', 'Nguyễn Hà Xuân', 'Cường', 'xuancuong123', 'xuancuong@gmail.com', 'ac30ae7962a3a5325b60f8defaf2e56e4a95a14a', '1-1-1990', 'Nam', 'Học Sinh'),
('101000031', 'Đặng Vũ Nhật ', 'Anh', 'anh123', 'anh@gmail.com', '1e5bcc028d318a1a4780fa8af78e65e22c4bcde5', '4-4-1993', 'Nam', 'Học Sinh'),
('101000032', 'Lê Thị ', 'Linh', 'linh123', 'Linh123@gmail.com', 'ed3c9dba8ca23a33af1342082544922ee774e85d', '4-4-1993', 'Nam', 'Học Sinh'),
('101000033', 'Huỳnh Nhật ', 'Hòa', 'hoa123', 'hoa123@gmail.com', '314576f49db3e92c639ec86f1d951620ef45c34d', '2-4-1993', 'Nam', 'Học Sinh'),
('101000034', 'Lê Văn ', 'Hiếu', 'hieu123', 'Hieu@gmail.com', 'dc1c013e029c385578f921f9b49f0641fffd8b98', '1-2-1992', 'Nam', 'Học Sinh'),
('20100042', 'Phan Tấn', 'Bình', 'binh123', 'binh@gmail.com', '8bd1c0165694ac2669228e73843d26341ec71905', '16-2-2005', 'Nam', 'Giáo Viên'),
('20100043', 'Ngô Bá Vĩnh ', 'Hiển', 'hien123', 'hien123@gmail.com', '2c7bc5665e3482c031f9a928038b301e068e6413', '14-3-2004', 'Nam', 'Giáo Viên'),
('20100044', 'Nguyễn Thanh Trường', 'Giang', 'giang123', 'giang@gmail.com', '4e031bb475963ba73ebf552f78ae1c43283af8b8', '16-2-2003', 'Nam', 'Trưởng bộ môn'),
('AD03972', 'Đặng Thành ', 'Đạt', 'admin', 'admin@gmail.com', '2ec10e4f7cd2159e7ea65d2454f68287ecf81251', '1-7-1997', 'Nam', 'Admin'),
('PDT92654', 'Phòng Đào ', 'Tạo', 'pdt123', 'phongdaotao@gmail.com', 'de56a0a5377a2c4e333156c34912b38318cd77fe', '3-5-1993', 'Nam', 'Phòng dào tạo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`id_gv`);

--
-- Indexes for table `ketquathi`
--
ALTER TABLE `ketquathi`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  ADD PRIMARY KEY (`ma_ch`),
  ADD KEY `made` (`made`);

--
-- Indexes for table `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  ADD PRIMARY KEY (`made`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `id_gv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20100045;

--
-- AUTO_INCREMENT for table `ketquathi`
--
ALTER TABLE `ketquathi`
  MODIFY `stt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101000035;

--
-- AUTO_INCREMENT for table `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  MODIFY `ma_ch` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  MODIFY `made` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  ADD CONSTRAINT `tbl_cauhoi_ibfk_1` FOREIGN KEY (`made`) REFERENCES `tbl_dethi` (`made`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
