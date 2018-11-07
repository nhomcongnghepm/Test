-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 07:00 AM
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
(20100018, 'Ngô Bá Vĩnh', 'Hiển', 'truongbomon1', 'truongbomon@gmail.com', '2a8f8de2c8e6b2ee1a3b120cceba47', '1-3-1993', 'Nam', 'Toán', 'Trưởng bộ môn'),
(20100027, 'Phan Tấn ', 'Bình', 'giaovien1', 'giaovien1@gmail.com', '20f8c1759a008489346bede726f936', '1-3-1993', 'Nam', 'Toán', 'Giáo Viên');

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
(101000005, 'Thạch Cảnh ', 'Bình', 'sinhvien', '81a677028f097bb2ad02c0a5552cfdce7a04830c', 'sinhvien@gmail.com', '1-7-1997', 'Nam', '04CNTT1', 'Học Sinh'),
(101000008, 'Đoàn Tô Thanh', 'Bình', 'binhthach', '99f2173bc9b05ad0bc72870238b0e7d22eca9f18', 'sinhvien2@gmail.com', '8-9-1993', 'Nam', '04ĐHCNTT2', 'Học Sinh');

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
(2, '<p>b</p>', 'c', 'd', 'e', 'f', 'c', 35, 1, 1);

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
  `timer` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dethi`
--

INSERT INTO `tbl_dethi` (`made`, `tende`, `ngaythi`, `giothi`, `tacgia`, `ngaydang`, `timer`) VALUES
(35, 'toan', '30/10/2018', '10:9:10', 'Đặng Thành Đạt', '26/10/18', '60 phút'),
(36, 'Tiếng Anh', '19/11/2019', '6:3:5', 'Phan Tấn Bình', '07/11/18', '45 phút'),
(37, 'Hóa', '4/3/2018', '4:1:2', 'a', '07/11/18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
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
(2, 'Phòng Đào', 'Tạo', 'phongdaotao', 'phongdaotao@gmail.com', '656d1edc03406298b7d38b9336ca66d33b08be7f', '2-3-1992', 'Nam', 'Phòng dào tạo'),
(20100018, 'Ngô Bá Vĩnh', 'Hiển', 'truongbomon1', 'truongbomon@gmail.com', '2a8f8de2c8e6b2ee1a3b120cceba4704642987ef', '1-3-1993', 'Nam', 'Trưởng bộ môn'),
(20100027, 'Phan Tấn ', 'Bình', 'giaovien1', 'giaovien1@gmail.com', '20f8c1759a008489346bede726f936f6e9d9f477', '1-3-1993', 'Nam', 'Giáo Viên'),
(101000005, 'Thạch Cảnh ', 'Bình', 'sinhvien', 'sinhvien@gmail.com', '81a677028f097bb2ad02c0a5552cfdce7a04830c', '1-7-1997', 'Nam', 'Học Sinh'),
(101000008, 'Đoàn Tô Thanh', 'Bình', 'binhthach', 'sinhvien2@gmail.com', '99f2173bc9b05ad0bc72870238b0e7d22eca9f18', '8-9-1993', 'Nam', 'Học Sinh');

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
  MODIFY `id_gv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20100030;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101000012;

--
-- AUTO_INCREMENT for table `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  MODIFY `ma_ch` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  MODIFY `made` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
