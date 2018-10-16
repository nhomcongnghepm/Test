-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 08:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
(5, '<p><span style=\"font-family: arial, helvetica, sans-serif;\">C&acirc;u 1:</span></p>', 'a', 'b', 'c', 'd', 'a', 9, 0.25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dethi`
--

CREATE TABLE `tbl_dethi` (
  `made` int(11) NOT NULL,
  `tende` varchar(70) CHARACTER SET utf8 NOT NULL,
  `socau` int(10) NOT NULL,
  `tacgia` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ngaydang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timer` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dethi`
--

INSERT INTO `tbl_dethi` (`made`, `tende`, `socau`, `tacgia`, `ngaydang`, `timer`) VALUES
(9, 'Văn', 40, 'Đặng Thành Đạt', '2018/10/16', '45 phút'),
(19, 'Toán', 40, 'Đặng Thành Đạt', '16/10/18', '40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ho` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `birthdate` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Gioitinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `quyen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ho`, `ten`, `user`, `email`, `password`, `birthdate`, `Gioitinh`, `quyen`) VALUES
(38, 'Đặng Thành', 'Đạt', 'dat171997', 'thanhdat010797@gmail.com', '12ca0ce78a400209da95e4db2dbc78b3a74bccae', '1-7-1997', 'Nam', '1');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  MODIFY `ma_ch` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  MODIFY `made` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
