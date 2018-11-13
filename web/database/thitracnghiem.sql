-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 03:54 AM
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
(101000013, 'Thạch Cảnh', 'Bình', 'canhbinh12', '11389d2abc6f51a2845e71576c6aabf337049754', 'canhbinh123@gmail.com', '1-3-1991', 'Nam', '12A1', 'Học Sinh');

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
  `made` int(11) NOT NULL,
  `diem` double NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cauhoi`
--

INSERT INTO `tbl_cauhoi` (`ma_ch`, `noidung`, `lc1`, `lc2`, `lc3`, `lc4`, `dapan`, `made`, `diem`, `trangthai`) VALUES
(1, '<p>C&acirc;u 1: A+B=?</p>', 'A: B', 'B: B', 'C: C', 'D: D', 'A: B', 35, 9.25, 1),
(2, '<p>a</p>', '1', '1', '2', '3', '1', 35, 1, 1),
(5, '<p>test</p>', 'test', 'test', 'test', 'test', 'test', 36, 1, 1);

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
  `trangthai` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dethi`
--

INSERT INTO `tbl_dethi` (`made`, `tende`, `ngaythi`, `giothi`, `tacgia`, `ngaydang`, `timer`, `trangthai`) VALUES
(35, 'Toán', '3/12/2018', '1:0:1', 'Đặng Thành Đạt', '26/10/18', '60 phút', ''),
(36, 'Tiếng Anh', '19/11/2019', '6:3:5', 'Phan Tấn Bình', '07/11/18', '45 phút', 'Đã duyệt'),
(37, 'Hóa', '3/3/2019', '2:2:2', 'Ngố Bá Vĩnh Hiển', '08/11/18', '45 phút', '');

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
('101000013', 'Thạch Cảnh', 'Bình', 'canhbinh123', 'canhbinh123@gmail.com', '11389d2abc6f51a2845e71576c6aabf337049754', '1-3-1991', 'Nam', 'Học Sinh'),
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
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101000014;

--
-- AUTO_INCREMENT for table `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  MODIFY `ma_ch` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  MODIFY `made` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
