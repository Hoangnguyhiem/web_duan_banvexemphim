-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 04:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1_vexemphim`
--

-- --------------------------------------------------------

--
-- Table structure for table `ghengoi`
--

CREATE TABLE `ghengoi` (
  `maghe` int(11) NOT NULL,
  `maphong` int(11) NOT NULL,
  `loaighe` varchar(255) NOT NULL,
  `tinhtrangghe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `makhuyenmai` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tenkhuyenmai` varchar(255) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichchieu`
--

CREATE TABLE `lichchieu` (
  `maphim` varchar(255) NOT NULL,
  `ngaychieu` date NOT NULL,
  `giochieu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `maphim` varchar(255) NOT NULL,
  `tenphim` varchar(255) NOT NULL,
  `daodien` varchar(255) NOT NULL,
  `thoiluong` time NOT NULL,
  `nuocsanxuat` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `namsannxuat` date NOT NULL,
  `matheloai` varchar(255) NOT NULL,
  `tendienvien` text NOT NULL,
  `giave` double(10,2) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`maphim`, `tenphim`, `daodien`, `thoiluong`, `nuocsanxuat`, `noidung`, `namsannxuat`, `matheloai`, `tendienvien`, `giave`, `anh`) VALUES
('', '', '', '00:00:00', ' ', ' ', '0000-00-00', 'tl02', ' ', 0.00, ' 0017196_0.jpg'),
('1', 'người vợ cuối cùng', 'nam', '00:45:00', ' việt nam', ' hàng chất lượng', '2023-11-25', 'tl01', ' long anh', 100000.00, ' '),
('2', 'người vợ thứ hai', 'nữ', '11:54:00', ' việt nam', ' đỉnh cao', '2023-11-04', 'tl02', ' anh long', 135000.00, ' '),
('3', 'người vợ thứ ba', 'nam nữ', '22:47:00', ' việt nam', ' hàng tốt', '2023-11-16', 'tl02', ' ngọc hoàng long', 200000.00, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `phongchieu`
--

CREATE TABLE `phongchieu` (
  `maphong` int(11) NOT NULL,
  `tinhtrangphong` varchar(255) NOT NULL,
  `tongchongoi` int(11) NOT NULL,
  `tenphong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `mataikhoan` int(255) NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `tentaikhoan` varchar(255) NOT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `matheloai` varchar(255) NOT NULL,
  `tentheloai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`matheloai`, `tentheloai`) VALUES
('tl01', 'Xúc động'),
('tl02', 'Hành động');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `mave` varchar(255) NOT NULL,
  `madat` varchar(255) NOT NULL,
  `mataikhoan` int(255) NOT NULL,
  `maphong` int(11) NOT NULL,
  `maghe` int(11) NOT NULL,
  `maphim` varchar(255) NOT NULL,
  `makhuyenmai` varchar(255) NOT NULL,
  `ngaydat` date NOT NULL,
  `thanhtien` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ghengoi`
--
ALTER TABLE `ghengoi`
  ADD PRIMARY KEY (`maghe`),
  ADD KEY `maphong` (`maphong`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makhuyenmai`);

--
-- Indexes for table `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD PRIMARY KEY (`maphim`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`maphim`),
  ADD KEY `matheloai` (`matheloai`);

--
-- Indexes for table `phongchieu`
--
ALTER TABLE `phongchieu`
  ADD PRIMARY KEY (`maphong`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`mataikhoan`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`matheloai`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`mave`),
  ADD KEY `maphim` (`maphim`),
  ADD KEY `mataikhoan` (`mataikhoan`),
  ADD KEY `maphong` (`maphong`),
  ADD KEY `maghe` (`maghe`),
  ADD KEY `makhuyenmai` (`makhuyenmai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ghengoi`
--
ALTER TABLE `ghengoi`
  MODIFY `maghe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phongchieu`
--
ALTER TABLE `phongchieu`
  MODIFY `maphong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `mataikhoan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ghengoi`
--
ALTER TABLE `ghengoi`
  ADD CONSTRAINT `ghengoi_ibfk_1` FOREIGN KEY (`maphong`) REFERENCES `phongchieu` (`maphong`);

--
-- Constraints for table `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`matheloai`) REFERENCES `theloai` (`matheloai`);

--
-- Constraints for table `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_ibfk_1` FOREIGN KEY (`maphim`) REFERENCES `phim` (`maphim`),
  ADD CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`mataikhoan`) REFERENCES `taikhoan` (`mataikhoan`),
  ADD CONSTRAINT `ve_ibfk_3` FOREIGN KEY (`makhuyenmai`) REFERENCES `khuyenmai` (`makhuyenmai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
