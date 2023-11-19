-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2023 lúc 11:24 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_vexemphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghengoi`
--

CREATE TABLE `ghengoi` (
  `maghe` int(11) NOT NULL,
  `maphong` int(11) NOT NULL,
  `loaighe` varchar(255) NOT NULL,
  `tinhtrangghe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
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
-- Cấu trúc bảng cho bảng `lichchieu`
--

CREATE TABLE `lichchieu` (
  `maphim` varchar(255) NOT NULL,
  `ngaychieu` date NOT NULL,
  `giochieu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `maphim` varchar(255) NOT NULL,
  `tenphim` varchar(255) NOT NULL,
  `đaodien` varchar(255) NOT NULL,
  `thoiluong` time NOT NULL,
  `nuocsanxuat` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `namsannxuat` date NOT NULL,
  `matheloai` varchar(255) NOT NULL,
  `tendienvien` text NOT NULL,
  `giave` double(10,2) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongchieu`
--

CREATE TABLE `phongchieu` (
  `maphong` int(11) NOT NULL,
  `tinhtrangphong` varchar(255) NOT NULL,
  `tongchongoi` int(11) NOT NULL,
  `tenphong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `mataikhoan` int(255) NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `tentaikhoan` varchar(255) NOT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`mataikhoan`, `tenkhachhang`, `tentaikhoan`, `sodienthoai`, `email`, `matkhau`) VALUES
(1, 'LÊ VĂN LONG', 'LONGPC', '0968350160', 'levanlong0968350160@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `matheloai` varchar(255) NOT NULL,
  `tentheloai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ghengoi`
--
ALTER TABLE `ghengoi`
  ADD PRIMARY KEY (`maghe`),
  ADD KEY `maphong` (`maphong`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makhuyenmai`);

--
-- Chỉ mục cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD PRIMARY KEY (`maphim`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`maphim`),
  ADD KEY `matheloai` (`matheloai`);

--
-- Chỉ mục cho bảng `phongchieu`
--
ALTER TABLE `phongchieu`
  ADD PRIMARY KEY (`maphong`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`mataikhoan`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`matheloai`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`mave`),
  ADD KEY `maphim` (`maphim`),
  ADD KEY `mataikhoan` (`mataikhoan`),
  ADD KEY `maphong` (`maphong`),
  ADD KEY `maghe` (`maghe`),
  ADD KEY `makhuyenmai` (`makhuyenmai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ghengoi`
--
ALTER TABLE `ghengoi`
  MODIFY `maghe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phongchieu`
--
ALTER TABLE `phongchieu`
  MODIFY `maphong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `mataikhoan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ghengoi`
--
ALTER TABLE `ghengoi`
  ADD CONSTRAINT `ghengoi_ibfk_1` FOREIGN KEY (`maphong`) REFERENCES `phongchieu` (`maphong`);

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`matheloai`) REFERENCES `theloai` (`matheloai`);

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_ibfk_1` FOREIGN KEY (`maphim`) REFERENCES `phim` (`maphim`),
  ADD CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`mataikhoan`) REFERENCES `taikhoan` (`mataikhoan`),
  ADD CONSTRAINT `ve_ibfk_3` FOREIGN KEY (`makhuyenmai`) REFERENCES `khuyenmai` (`makhuyenmai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
DELIMITER //
CREATE FUNCTION generate_user_id() RETURNS VARCHAR(255)
BEGIN
    DECLARE new_id VARCHAR(255);
    DECLARE current_value INT;
    SELECT MAX(matheloai) INTO new_id FROM theloai;
    IF new_id IS NULL THEN
        SET new_id = 'tl01';
    ELSE
        SET new_id = CONCAT('ten', CAST(SUBSTRING(new_id, 2) + 1 AS CHAR));
    END IF;
    RETURN new_id;
END //

DELIMITER ;