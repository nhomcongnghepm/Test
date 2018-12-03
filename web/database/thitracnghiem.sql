-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 07:59 AM
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
-- Table structure for table `diemthi`
--

CREATE TABLE `diemthi` (
  `id_diem` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `made` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dotthi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diem` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hocky` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diemthi`
--

INSERT INTO `diemthi` (`id_diem`, `id`, `made`, `ngaythi`, `dotthi`, `diem`, `hocky`) VALUES
('A02385', 'HS45127 ', '73 ', '28/11/2018 ', '1 ', '0.25 ', '1'),
('A10925', 'HS13257 ', '73 ', '28/11/2018 ', '1 ', '9', '1'),
('A40375', 'HS13984 ', '73 ', '28/11/2018 ', '1 ', '0.25 ', '1'),
('A45039', 'HS47839 ', '73 ', '28/11/2018 ', '1 ', '0.25 ', '1'),
('H07254', 'HS45127 ', '72 ', '28/11/2018 ', '1 ', '9', '1'),
('H14086', 'HS13984 ', '72 ', '28/11/2018 ', '1 ', '0.25 ', '1'),
('H75841', 'HS47839 ', '72 ', '28/11/2018 ', '1 ', '0.25 ', '1'),
('H86950', 'HS13257 ', '72 ', '28/11/2018 ', '1 ', '8', '1'),
('L23419', 'HS45127 ', '70 ', '28/11/2018 ', '1 ', '0.725 ', '1'),
('L41527', 'HS13257', '70 ', '28/11/2018 ', '1 ', '9', '1'),
('L62975', 'HS13984 ', '70 ', '28/11/2018 ', '1 ', '0.25 ', '1'),
('L78246', 'HS47839 ', '70 ', '28/11/2018 ', '1 ', '0.25 ', '1'),
('T02156', 'HS47839 ', '58 ', '28/11/2018 ', '1 ', '4', '1'),
('T35920', 'HS13984 ', '58 ', '28/11/2018 ', '1 ', '0.5 ', '1'),
('T63097', 'HS13257', '58 ', '28/11/2018 ', '1 ', '10', '1'),
('T82307', 'HS45127 ', '58 ', '28/11/2018 ', '1 ', '0.75 ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `id_gv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
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
('GV16508', 'Phan Tấn', 'Bình', 'binh123', '8bd1c0165694ac2669228e73843d26', 'tanbinh@gmail.com', '3-4-1992', 'Nam', 'Toán', 'Giáo Viên'),
('GV36508', 'Nguyễn Trung', 'Hậu', 'hau1234', 'f73a4dacb52090b82683aa17aed882', 'hau@gmail.com', '18-10-1994', 'Nam', 'Anh', 'Giáo Viên'),
('TBM36508', 'Nguyễn', 'Thúy Vi', 'vi12345', '615b746283ad0a3d19ee42a0bd9403', 'thuyvi@gmail.com', '6-9-1990', 'Nữ', 'Hóa', 'Trưởng bộ môn'),
('TBM76508', 'Nguyễn Thanh Trường', 'Giang', 'giang123', '4e031bb475963ba73ebf552f78ae1c', 'giang@gmail.com', '16-2-2003', 'Nam', 'Vật lý', 'Trưởng bộ môn'),
('TBM81647', 'Hô Văn ', 'Hiếu', 'hieu_b12', 'c04a049763cc0094e57c507b9a3c10', 'hieu_b12@gmail.com', '18-9-1996', 'Nam', 'Tiếng Anh', 'Trưởng bộ môn');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
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
('HS13257', 'Thạch Cảnh', 'Bình', 'canhbinh12', '6117650746fc20e39da707a9b448b9a7e44108b1', 'canhbinh@gmail.com', '2-1-1997', 'Nam', '12A1', 'Học Sinh'),
('HS13984', 'Nguyễn Hữu', 'Quốc', 'quoc123', '651d603cc29bacfcc184703b7fd2d8daf212ec2c', 'quoc@gmail.com', '14-5-2002', 'Nam', '12A5', 'Học Sinh'),
('HS45127', 'Đào Ngọc Gia', 'Anh', 'giaanh123', 'bd753b80609e4f10d98a4655e55a1c296feb797b', 'giaanh123@gmail.com', '17-3-2006', 'Nam', '12A2', 'Học Sinh'),
('HS47839', 'Đoàn Tô Thanh', 'Bình', 'thanhbinh123', '361fce041655af29b7fd5106d77b1faedd1eba5c', 'thanhbinh123@gmail.com', '17-5-2004', 'Nam', '12A8', 'Học Sinh');

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
(80, '<p>&nbsp;Trong kh&ocirc;ng gian với hệ tọa độ Oxyz , mặt phẳng (P) chứa trục Oy v&agrave; đi qua điểm M(1;1; -1) c&oacute; phương tr&igrave;nh l&agrave; :</p>', 'x + z = 0', 'x - y = 0', 'x - z =0', 'y + z =0', 'x + z = 0', 58),
(81, '<p>Cho số phức z =(1-2i)<sup>2</sup> , số phức li&ecirc;n hợp của z l&agrave;</p>', '3 - 4i', '-3 + 4i  ', '-3 - 4i', '1 + 2i', '-3 + 4i  ', 58),
(82, '<p>&nbsp;Trong kh&ocirc;ng gian với hệ tọa độ Oxyz , cho ba điểm A(1;0;0), B(0;1;0), C(0;0; 2)&nbsp; . V&eacute;ctơ n&agrave;o dưới đ&acirc;y l&agrave; v&eacute;ctơ ph&aacute;p tuyến của mặt phẳng (ABC)</p>', 'n= (2;2; -1)', 'n= (-2;2;1)', 'n= (2;-2;-1)', 'n= (1;1;-2)', 'n= (2;2; -1)', 58),
(83, '<p>&nbsp;H&igrave;nh n&oacute;n c&oacute; thể t&iacute;ch bằng 16 pi v&agrave; b&aacute;n k&iacute;nh đ&aacute;y bằng 4. Diện t&iacute;ch xung quanh của h&igrave;nh n&oacute;n đ&atilde; cho bằng :</p>', '12 ', '24', '20', '10', '20', 58),
(84, '<p>&nbsp;Diện t&iacute;ch của h&igrave;nh phẳng giới hạn bởi đồ thị h&agrave;m số y = 3x<sup>2</sup>&nbsp;+ 1, trục ho&agrave;nh v&agrave; hai đường thẳng x = 0 , x = 2 l&agrave;&nbsp;</p>', 'S = 8', 'S = 12', 'S = 10', 'S = 9', 'S = 10', 58),
(85, '<p>&nbsp;Thầy An c&oacute; 200 triệu đồng gửi ng&acirc;n h&agrave;ng đ&atilde; được hai năm với l&atilde;i suất kh&ocirc;ng đổi 0,45%/th&aacute;ng. Biết rằng số tiền l&atilde;i sau mỗi th&aacute;ng được nhập v&agrave;o vốn ban đầu để t&iacute;nh l&atilde;i cho th&aacute;ng tiếp theo. Nh&acirc;n dịp đầu Xu&acirc;n một h&atilde;ng &ocirc; t&ocirc; c&oacute; chương tr&igrave;nh khuyễn mại trả g&oacute;p 0% trong 12 th&aacute;ng. Thầy quyết định lấy to&agrave;n bộ số tiền đ&oacute; (cả vốn lẫn l&atilde;i) để mua một chiếc &ocirc; t&ocirc;&nbsp; với gi&aacute; 300 triệu đồng, số tiền c&ograve;n nợ thầy sẽ chia đều trả g&oacute;p trong 12 th&aacute;ng. Số tiền thầy An phải trả g&oacute;p h&agrave;ng th&aacute;ng gần với số&nbsp; n&agrave;o nhất trong c&aacute;c số sau</p>', ' 6.547.000 đồng', ' 6.345.000 đồng', ' 6.432.000 đồng', ' 6.437.000 đồng', ' 6.437.000 đồng', 58),
(86, '<p>&nbsp;Gi&aacute; trị lớn nhất của h&agrave;m số y = 2cos<sup>2</sup>x +sinx +1 bằng&nbsp;</p>', '2', '11/4', '1', '9/4', '9/', 58),
(87, '<p>&nbsp;T&iacute;ch tất cả c&aacute;c nghiệm của phương tr&igrave;nh (1+ log<sub>2</sub>x)log<sub>4</sub>2x = 2 bằng</p>', '1/8', '1', '1/4', '1/2', '1/4', 58),
(88, '<p>&nbsp;Trong kh&ocirc;ng gian với hệ tọa độ Oxyz , cho hai điểm A(1; -3;0), B(-5;1;2) AB . Phương tr&igrave;nh mặt phẳng trung trực của đoạn thẳng AB l&agrave;&nbsp;</p>', '-3x - 2y + z - 5 = 0', '-3x - 2y - z + 5 = 0', '3x + 2y - z + 5 = 0', '-3x + 2y - z + 1 = 0', '-3x - 2y - z + 5 = 0', 58),
(89, '<p>Gọi z<sub>1</sub> ,<sub>&nbsp;</sub>z<sub>2&nbsp;</sub>l&agrave; c&aacute;c nghiệm phức của phương tr&igrave;nh 2z<sup>2</sup> - 2z&nbsp;+5 = 0 . M&ocirc; đun của số phức w = 4 - z<sub>1</sub><sup>2</sup> + z<sub>2</sub><sup>2</sup> bằng</p>', '3', '5', '15', '25', '5', 58),
(90, '<p>C&oacute; bao nhi&ecirc;u gi&aacute; trị nguy&ecirc;n dương của tham số m để phương tr&igrave;nh 4<sup>1+x</sup> + 4<sup>1-x</sup> = (6 - m)(2<sup>2+x</sup> - 2<sup>2-x</sup>) c&oacute; nghiệm thuộc đoạn [0;1] ?</p>', '4', '3', '1', '2', '3', 58),
(91, '<p>Cho h&agrave;m số f(x) = x<sup>3</sup> - 3x +1. Số nghiệm của phương tr&igrave;nh [f(x)]<sup>3</sup> -3f(x) + 1 = 0 l&agrave;</p>', '3', '7', '5', '6', '7', 58),
(92, '<p>C&oacute; bao nhi&ecirc;u gi&aacute; trị nguy&ecirc;n của tham số m để h&agrave;m số y=1 /3|x<sup>3</sup>| -(3 - m)x<sup>2</sup> +(3m +7)|x| -1 c&oacute; 5 điểm cực trị</p>\r\n<p>&nbsp;</p>', '3', '5', '2', '4', '3', 58),
(93, '<p>Cho phương tr&igrave;nh mx<sup>2</sup> + 4pi<sup>2</sup> = 4pi<sup>2</sup>cos x .&nbsp;&nbsp;Tổng tất cả c&aacute;c gi&aacute; trị nguy&ecirc;n của tham số m để phương tr&igrave;nh c&oacute; nghiệm thuộc khoảng [0;pi/ 2] bằng</p>', '-54', '35', '-35', '51', '-54', 58),
(94, '<p>Cho z<sub>1</sub> , z<sub>2</sub> l&agrave; c&aacute;c số phức thỏa m&atilde;n |z<sub>1</sub>| = |z<sub>2</sub>| =1&nbsp; v&agrave; |z<sub>1</sub>&nbsp;- 2z<sub>2</sub>| =&radic;6</p>', 'P = 2', 'P = 4', 'P = 3', 'P = 1', 'P = 2', 58),
(95, '<p>&nbsp;Trong kh&ocirc;ng gian với hệ tọa độ Oxyz , cho mặt phẳng (P ): x + 2y + z -8 = 0 v&agrave; điểm ba điểm A(0; -1;0)&nbsp; , B(2;3;0) , C(0; -5;2)&nbsp; . Gọi M( x<sub>0</sub> , y<sub>0 </sub>, z<sub>0</sub>)&nbsp; l&agrave; điểm thuộc mặt phẳng (P) sao cho MA = MB = MC . Tổng S = x<sub>0</sub> + y<sub>0</sub> + z<sub>0</sub> bằng&nbsp;</p>', '-12', '5', '12', '9', '9', 58),
(96, '<p>&nbsp;Gọi S l&agrave; tổng tất cả c&aacute;c gi&aacute; trị của tham số m để h&agrave;m số y =x<sup>3</sup> +(m<sup>2</sup> +1)x -m +1&nbsp;&nbsp;c&oacute;&nbsp; gi&aacute; trị lớn nhất tr&ecirc;n đoạn [0;1] bằng 9. Gi&aacute; trị của S bằng<span style=\"font-size: 8.33333px;\"><br /></span></p>', 'S = 5', 'S = -1', 'S = -5', 'S = 1', 'S = 1', 58),
(97, '<p>&nbsp;Cho h&igrave;nh ch&oacute;p S. ABCD c&oacute; đ&aacute;y l&agrave; h&igrave;nh chữ nhật ABCD, biết AB = 2,&nbsp; AD = 3 , SD = 14 . Tam gi&aacute;c SAB c&acirc;n tại S v&agrave; nằm trong mặt phẳng vu&ocirc;ng g&oacute;c với mặt đ&aacute;y. Gọi M l&agrave; trung điểm của SC . C&ocirc;sin của g&oacute;c tạo bởi hai mặt phẳng (SBD) v&agrave; (MBD) bằng&nbsp;</p>', '3/5', '43/61', '5/7', '2/3', '43/61', 58),
(98, '<p>&nbsp;Trong kh&ocirc;ng gian với hệ tọa độ Oxyz , cho mặt phẳng (P ): x +y - z -1 = 0 v&agrave; điểm A(1;0;0) thuộc (P) . Đường thẳng&nbsp;&Delta; đi qua A nằm trong mặt phẳng (P) v&agrave; tạo với trục Oz một g&oacute;c nhỏ nhất. Gọi M(x<sub>0</sub>; y<sub>0</sub>; z<sub>0</sub>)&nbsp;l&agrave; giao điểm của đường thẳng&nbsp;&Delta; với mặt phẳng (Q ): 2x + y -2z + 1 = 0 . Tổng S = x<sub>0</sub> + <sub></sub>y<sub>0</sub> + z<sub>0</sub> bằng</p>', '-5', '12', '-2', '13', '13', 58),
(99, '<p>Trong kh&ocirc;ng gian với hệ tọa độ Oxyz , cho mặt phẳng (&alpha;) : x + y +z - 4 = 0 ,mặt cầu (S) : x<sup>2</sup> + y<sup>2</sup> + z<sup>2</sup> - 8x - 6y - 6z + 18 = 0 v&agrave; điểm M(1;1;2) thuộc&nbsp;(&alpha;) .Đường thẳng d đi qua M nằm trong mặt phẳng (&alpha;)&nbsp; v&agrave; cắt mặt cầu (S) tại hai điểm ph&acirc;n biệt A, B sao cho d&acirc;y cung AB c&oacute; độ d&agrave;i nhỏ nhất. Đường thẳng d c&oacute; một v&eacute;ctơ chỉ phương l&agrave;</p>', 'u1 = (2;-1;-1)', 'u3 = (1;1;-2)', 'u2 = (1;-2;1)', 'u4 = (0;1;-1)', 'u2 = (1;-2;1)', 58),
(100, '<p>&nbsp;Một hộp đựng 15 c&aacute;i thẻ được đ&aacute;nh số từ 1 đến 15. R&uacute;t ngẫu nhi&ecirc;n ba thẻ, x&aacute;c suất để tổng ba số ghi tr&ecirc;n ba thẻ được r&uacute;t chia hết cho 3 bằng&nbsp;</p>', '25/91', '32/91', '31/91', '11/27', '31/91', 58),
(101, '<p>&nbsp;Cho h&agrave;m số f(x) = x<sup>3</sup> + 3x<sup>2</sup> + mx + 1. Gọi S l&agrave; tổng tất cả gi&aacute; trị của tham số m để đồ thị h&agrave;m số y = f(x) cắt đường thằng y = 1 tại ba điểm ph&acirc;n biệtAA(0;1), B, C sao cho c&aacute;c tiếp tuyến của đồ thị h&agrave;m số y = f(x)&nbsp; tại B, C vu&ocirc;ng g&oacute;c với nhau. Gi&aacute; trị của S bằng&nbsp;</p>', '11/5', '9/2', '9/5', '9/4', '9/4', 58),
(102, '<p>Cho h&agrave;m số y = f(x) l&agrave; h&agrave;m số chẵn v&agrave; li&ecirc;n tục tr&ecirc;n đoạn [ -&prod;; &prod;]&nbsp; thỏa m&atilde;n&nbsp;<sup>&prod;</sup>&int;<sub>0</sub>f(x)dx = 2018 . T&iacute;ch ph&acirc;n&nbsp;<sup>&prod;</sup>&int;<span style=\"font-size: 8.33333px;\">-&prod;&nbsp;f(x)/ (2018<sup>x</sup> +1 )dx bằng<br /></span></p>', '2018', '4036', '0', '1/2018', '2018', 58),
(103, '<p>&nbsp;Họ nguy&ecirc;n h&agrave;m của h&agrave;m số f(x) = c<sup>x</sup> + c<sup>-x</sup> l&agrave;</p>', 'c^x + c^-x + C', 'c^x - c^-x + C', 'c^-x - c^x + C', '2c^-x + C', 'c^x - c^-x + C', 58),
(104, '<p>&nbsp;Cho tứ diện OABC c&oacute; OA, OB, OC đ&ocirc;i một vu&ocirc;ng g&oacute;c v&agrave; OA = a, OB = b, OC = c&nbsp; . Thể t&iacute;ch tứ diện OABC l&agrave;&nbsp;</p>', 'V = (abc)/12', 'V = (abc)/4', 'V = (abc)/3', 'V= (abc)/6', 'V= (abc)/6', 58),
(105, '<p>&nbsp;Với số thực dương b bất kỳ. Đ&aacute;p &aacute;n n&agrave;o dưới đ&acirc;y đ&uacute;ng về biến đổi lg10b<sup>2</sup>&nbsp;?&nbsp;</p>', '1 + 2lgb', '2+ lgb', '1 + 10logb', '1 + 2logb', '1 + 2lgb', 58),
(106, '<p>lim<sub>x -&gt; -1</sub>[(x<sup>2</sup> -2x -3)/(x+1) ] bằng</p>', '0', '-4', '-3', '1', '-4', 58),
(107, '<p><span>Một nh&oacute;m c&oacute; 5 nam v&agrave; 3 nữ. Chọn ra 3 người sao cho trong đ&oacute; c&oacute; &iacute;t nhất 1 nữ. Hỏi c&oacute; bao nhi&ecirc;u c&aacute;ch</span></p>', '40', '43', '44', '46', '46', 58),
(108, '<p><span>Một nh&oacute;m c&ocirc;ng nh&acirc;n gồm 15 nam v&agrave; 5 nữ. Người ta muốn chọn từ nh&oacute;m ra 5 người để lập th&agrave;nh một tổ c&ocirc;ng t&aacute;c sao cho phải c&oacute; 1 tổ trưởng nam, 1 tổ ph&oacute; nam v&agrave; c&oacute; &iacute;t nhất 1 nữ. Hỏi c&oacute; bao nhi&ecirc;u c&aacute;ch lập tổ c&ocirc;ng t&aacute;c</span></p>', '111300', '111200', '100500', '111600', '111300', 58),
(109, '<p><span>Từ 20 c&acirc;u hỏi trắc nghiệm gồm 9 c&acirc;u dễ, 7 c&acirc;u trung b&igrave;nh v&agrave; 4 c&acirc;u kh&oacute; người ta chọn ra 10 c&acirc;u để l&agrave;m đề kiểm tra sao cho phải c&oacute; đủ cả 3 loại dễ, trung b&igrave;nh v&agrave; kh&oacute;. Hỏi c&oacute; thể lập được bao nhi&ecirc;u đề kiểm tra.</span></p>', '176451', '176420', '165412', '182120', '176451', 58),
(110, '<p><span>Trong c&aacute;c khẳng định sau, khẳng định n&agrave;o đ&uacute;ng?</span></p>', 'Qua 2 điểm phân biệt có duy nhất một mặt phẳng', 'Qua 3 điểm phân biệt bất kì có duy nhất một mặt phẳng', 'Qua 3 điểm không thẳng hàng có duy nhất một mặt phẳng', ' Qua 4 điểm phân biệt bất kì có duy nhất một mặt phẳng', 'Qua 3 điểm không thẳng hàng có duy nhất một mặt phẳng', 58),
(111, '<p><span>C&oacute; bao nhi&ecirc;u mặt phẳng song song với mặt phẳng (P) : x + y +z = 0 v&agrave; tiếp x&uacute;c với mặt cầu (S) : x<span><sup>2</sup> +&nbsp; y<span><sup>2</sup><span>+ z<span><sup>2</sup><span> - 2x - 2y -2z = 0</span></span></span></span></span></span></p>', '1', 'vô số', '4', '2', '1', 58),
(112, '<p>T&igrave;m tất cả gi&aacute; trị thực của tham số m sao cho h&agrave;m số y = (tan x - 2)/ (tan x -m) đồng biến tr&ecirc;n khoảng (0;&prod;/4)</p>', 'm<= 0', '1<= m <2', 'm<=0 hoặc 1<= m <2', 'm>=2', 'm<=0 hoặc 1<= m <2', 58),
(113, '<p>Phương tr&igrave;nh ch&iacute;nh tắc của parabol m&agrave; khoảng c&aacute;ch từ đỉnh tới ti&ecirc;u điểm bằng 3/4 l&agrave;<br /><br /></p>', 'y^2 = 3/4x', 'y^2 = 6x', 'y^2 = 3x', 'y^2 = 3/2x', 'y^2 = 3/2x', 58),
(114, '<p>Một điểm A thuộc Parabol (P): y<sup>2</sup> = 4x . Nếu khoảng c&aacute;ch từ A đến đường chuẩn bằng 5 th&igrave; khoảng c&aacute;ch từ A đến trục ho&agrave;nh bằng bao nhi&ecirc;u ?</p>', '4', '3', '5', '8', '4', 58),
(115, '<p>Cho điểm A(3 ; 0) , gọi M l&agrave; một điểm tuỳ &yacute; tr&ecirc;n (P) : y<sup>2</sup> = x . T&igrave;m gi&aacute; trị nhỏ nhất của AM</p>', '4', '9/2', 'sqrt(11)/2', '5/2', 'sqrt(11)/2', 58),
(116, '<p>Cho Parabol (P) c&oacute; phương tr&igrave;nh ch&iacute;nh tắc y<sup>2</sup>= 4x . Một đường thẳng đi qua ti&ecirc;u điểm F của (P) cắt (P) tại 2 điểm A v&agrave; B, Nếu A(1 ; -2) th&igrave; tọa độ của B bằng bao nhi&ecirc;u ?</p>', '(1;2)', '(4;4)', '(-1;2)', '(2;2)', '(1;2)', 58),
(117, '<p>Đường Hyperbol (x<sup>2</sup>/20) - (y<sup>2</sup>/16) = 1&nbsp;c&oacute; ti&ecirc;u cự bằng :</p>', '12', '2', '4', '6', '12', 58),
(118, '<p>Đường thẳng qua M(1 ; 1) v&agrave; cắt el&iacute;p (E) : 4x<sup>2</sup>+ 9y<sup>2</sup>&nbsp;= 36 tại hai điểm M1 , M2 sao cho MM1 = MM2 c&oacute; phương tr&igrave;nh l&agrave;</p>', '2x + 4y – 5 = 0', '4x + 9y – 13 = 0', 'x + y + 5 = 0', '16x – 15y + 100 = 0', '4x + 9y – 13 = 0', 58),
(119, '<p>Khoảng c&aacute;ch từ điểm M(-1;1) đến đường thẳng 3x &ndash; 4y &ndash; 3 = 0 bằng bao nhi&ecirc;u?</p>', '2/5', '2', '4/5', '4/25', '2', 58),
(120, '<p>&aacute;dsad</p>', 'đá', 'ád', 'ád', 'ád', 'đá', 70),
(121, '<p>adasd</p>', 'ádasd', 'áds', 'ádas', 'ád', 'ádasd', 72),
(122, '<p>adas</p>', 'đá', 'ád', 'ád', 'ád', 'đá', 73);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dethi`
--

CREATE TABLE `tbl_dethi` (
  `made` int(11) NOT NULL,
  `tende` varchar(70) CHARACTER SET utf8 NOT NULL,
  `ngaythi` varchar(10) NOT NULL,
  `hocky` varchar(30) NOT NULL,
  `tacgia` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ngaydang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dotthi` int(10) NOT NULL,
  `linhvuc` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dethi`
--

INSERT INTO `tbl_dethi` (`made`, `tende`, `ngaythi`, `hocky`, `tacgia`, `ngaydang`, `trangthai`, `dotthi`, `linhvuc`) VALUES
(58, 'Toán', '28/11/2018', '1', 'Phan Tấn Bình', '24/11/18', 'Đã duyệt', 1, 'Toán'),
(70, 'Lý', '28/11/2018', '1', 'Nguyễn Thanh Trường Giang', '24/11/18', 'Đã duyệt', 1, 'Vật lý'),
(72, 'Hóa', '28/11/2018', '1', 'Nguyễn Thúy Vi', '28/11/18', 'Đã duyệt', 1, 'Hóa'),
(73, 'Tiếng Anh', '28/11/2018', '1', 'Hô Văn  Hiếu', '28/11/18', 'Đã duyệt', 1, 'Tiếng Anh');

-- --------------------------------------------------------

--
-- Table structure for table `thong_bao`
--

CREATE TABLE `thong_bao` (
  `id` int(10) NOT NULL,
  `chude` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `nguoigui` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thong_bao`
--

INSERT INTO `thong_bao` (`id`, `chude`, `noidung`, `nguoigui`, `thoigian`) VALUES
(6, 'Dời lịch Thi', 'Lịch thi bị dời đến 3/12/2018', 'Ma Đình Cường', '2018-12-03 13:25:49');

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
('AD47015', 'Đặng Thành', 'Đạt', 'admin', 'thanhdat010797@gmail.com', '2ec10e4f7cd2159e7ea65d2454f68287ecf81251', '1-7-1997', 'Nam', 'Admin'),
('GV16508', 'Phan Tấn', 'Bình', 'binh123', 'tanbinh@gmail.com', '42b702f32c19bcfa66b18f53630512357c4fa283', '3-4-1992', 'Nam', 'Giáo Viên'),
('GV36508', 'Nguyễn Trung', 'Hậu', 'hau1234', 'hau@gmail.com', 'f73a4dacb52090b82683aa17aed8822ff446592f', '18-10-1994', 'Nam', 'Giáo Viên'),
('HS13257', 'Thạch Cảnh', 'Bình', 'canhbinh12', 'canhbinh@gmail.com', '6117650746fc20e39da707a9b448b9a7e44108b1', '2-1-1997', 'Nam', 'Học Sinh'),
('HS13984', 'Nguyễn Hữu', 'Quốc', 'quoc123', 'quoc@gmail.com', '651d603cc29bacfcc184703b7fd2d8daf212ec2c', '14-5-2002', 'Nam', 'Học Sinh'),
('HS45127', 'Đào Ngọc Gia', 'Anh', 'giaanh123', 'giaanh123@gmail.com', 'bd753b80609e4f10d98a4655e55a1c296feb797b', '17-3-2006', 'Nam', 'Học Sinh'),
('HS47839', 'Đoàn Tô Thanh', 'Bình', 'thanhbinh123', 'thanhbinh123@gmail.com', '361fce041655af29b7fd5106d77b1faedd1eba5c', '17-5-2004', 'Nam', 'Học Sinh'),
('PDT21754', 'Ma Đình ', 'Cường', 'pdt123', 'pdt@gmail.com', 'de56a0a5377a2c4e333156c34912b38318cd77fe', '1-3-1996', 'Nam', 'Phòng dào tạo'),
('TBM36508', 'Nguyễn', 'Thúy Vi', 'vi12345', 'thuyvi@gmail.com', '615b746283ad0a3d19ee42a0bd940328faad4cdb', '6-9-1990', 'Nữ', 'Trưởng bộ môn'),
('TBM76508', 'Nguyễn Thanh Trường', 'Giang', 'giang123', 'giang@gmail.com', '4e031bb475963ba73ebf552f78ae1c43283af8b8', '16-2-2003', 'Nam', 'Trưởng bộ môn'),
('TBM81647', 'Hô Văn ', 'Hiếu', 'hieu_b12', 'hieu_b12@gmail.com', 'c04a049763cc0094e57c507b9a3c10f260fb42c7', '18-9-1996', 'Nam', 'Trưởng bộ môn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diemthi`
--
ALTER TABLE `diemthi`
  ADD PRIMARY KEY (`id_diem`);

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
-- Indexes for table `thong_bao`
--
ALTER TABLE `thong_bao`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `ma_ch` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  MODIFY `made` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `thong_bao`
--
ALTER TABLE `thong_bao`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
