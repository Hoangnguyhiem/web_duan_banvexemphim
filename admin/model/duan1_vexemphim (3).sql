-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 06:23 PM
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

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `generate_maphim` () RETURNS VARCHAR(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci  BEGIN
     DECLARE new_id VARCHAR(255);
     DECLARE current_value INT;
    SELECT MAX(maphim) INTO new_id FROM phim;
     IF new_id IS NULL THEN
         SET new_id = 'f1';
     ELSE
         SET new_id = CONCAT('f', CAST(SUBSTRING(new_id, 2) + 1 AS CHAR));
    END IF;
     RETURN new_id;
 END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `generate_user_id` () RETURNS VARCHAR(255) CHARSET utf8mb4 COLLATE utf8mb4_general_ci  BEGIN
     DECLARE new_id VARCHAR(255);
     DECLARE current_value INT;
    SELECT MAX(matheloai) INTO new_id FROM theloai;
   IF new_id IS NULL THEN        SET new_id = 'p200';
   ELSE
        SET new_id = CONCAT('p', CAST(SUBSTRING(new_id, 2) + 1 AS CHAR));
    END IF;
    RETURN new_id;
END$$

DELIMITER ;

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
  `idLichChieu` int(255) NOT NULL,
  `maphim` varchar(255) NOT NULL,
  `ngaychieu` date NOT NULL,
  `giochieu` time NOT NULL,
  `ngayketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `maphim` varchar(255) NOT NULL,
  `tenphim` varchar(255) NOT NULL,
  `daodien` varchar(255) NOT NULL,
  `thoiluong` varchar(255) NOT NULL,
  `nuocsanxuat` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `namsannxuat` date NOT NULL,
  `matheloai` varchar(255) NOT NULL,
  `tendienvien` text NOT NULL,
  `giave` double(10,2) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `hot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`maphim`, `tenphim`, `daodien`, `thoiluong`, `nuocsanxuat`, `noidung`, `namsannxuat`, `matheloai`, `tendienvien`, `giave`, `anh`, `hot`) VALUES
('f1', 'Chiếm Đoạt - T18', 'Thắng Vũ', '113 phút', 'Việt Nam', 'Kể về người vợ của một gia đình thượng lưu thuê cô bảo mẫu “trong mơ” để chăm sóc con trai mình. Nhưng cô không ngờ rằng, phía sau sự trong sáng, tinh khiết kia, cô bảo mẫu luôn che giấu âm mưu nhằm phá hoại hạnh phúc gia đình và khiến cuộc sống của cô th', '2023-11-24', 'p200', 'Miu Lê, Lãnh Thanh, Karik, Phương Anh Đào', 200000.00, '0016937_0.webp', 8),
('f10', 'Móng Vuốt', 'Lê Thanh Sơn', '100 phút', 'Việt Nam', 'Móng Vuốt dẫn dắt câu chuyện đi từ buổi tiệc dã ngoại náo nhiệt của một nhóm bạn đến một kết cục kinh hoàng khi phải đấu tranh sinh tồn với một con ác thú.', '2023-11-09', 'p201', 'Kaity Nguyễn, Tuấn Trần, Rocker Nguyễn, Naomi, Quốc Khánh, Gi A Nguyễn', 205000.00, '0016552_0.webp', 0),
('f2', 'Đường Cùng - T18', 'KIM Chang-hoon', '120 phút', 'Hàn Quốc', 'Để thoát khỏi cuộc sống địa ngục, cậu thiếu niên 17 tuổi lầm tưởng con đường tội ác chính là \"thiên đường\" nơi cậu thuộc về. Giữa chốn tối tăm nhất của cuộc đời, hy vọng le lói và những tội ác không thể quay đầu cứ bám chặt lấy cậu', '2023-11-17', 'p202', 'HONG Xa-bin, SONG Joong-ki, KIM Hyoung-seo', 186000.00, '0017200_0.webp', 6),
('f3', 'Yêu Lại Vợ Ngầu - T16', 'Nam Dae-jung', '115 phút', 'Hàn Quốc', 'Cặp vợ chồng trẻ No Jung Yeol (Kang Ha-neul) và Hong Na Ra (Jung So-min) từ cuộc sống hôn nhân màu hồng dần “hiện nguyên hình” trở thành cái gai trong mắt đối phương với vô vàn thói hư, tật xấu. Không thể đi đến tiếng nói chung, Jung Yeol và Na Ra quyết đ', '2023-11-10', 'p203', 'Kang Ha-neul, Jung So-min, Kim Sun-young, Lim Chul-hyung, Yoon Kyung-ho, Jo Min-soo', 250000.00, '0017105_0.webp', 9),
('f4', 'Oán Hồn Tử Địa', 'Walongkorn Jubjai', '86 phút', 'Thái Lan', 'Thanathip quyết tâm điều tra vì sao bóng ma lại luôn theo sau mình tại dinh thự được truyền qua nhiều thế hệ. Câu trả lời sẽ có vào đêm trăng khuyết nhưng một sự cố xảy ra khiến con ma tức giận và giết hết tất cả.', '2023-11-10', 'p201', 'Sornsutha Klunmalee, Phuang Keawprasert', 199000.00, '0017196_0.webp', 10),
('f5', 'Quỳnh Hoa Nhất Dạ', 'Lý Minh Thắng', '100 phút', 'Việt Nam', 'Phim dã sử về cuộc đời Thái hậu Dương Vân Nga.', '2023-12-12', 'p205', 'Minh Hằng', 150000.00, '0016553_0.webp', 7),
('f6', 'Nhà Vịt Di Cư', 'Benjamin Renner', '100 phút', 'Mỹ', ' Nhà Vịt Di Cư theo chân một gia đình vịt trời gồm vịt bố, vịt mẹ, cậu con trai tuổi teen Dax và vịt út Gwen, trong lần đầu tiên trải nghiệm chuyến di cư tiến về phía nam để trú đông. Thế nhưng, niềm vui vẻ sự', '2023-12-22', 'p206', 'Kumail Nanjiani, Elizabeth Banks, Caspar Jennings, Tresi Gazal, Awkwafina', 220000.00, '0016959_0.webp', 4),
('f7', 'Điều Ước - P', 'Chris Buck (Frozen & Frozen 2), Fawn', '94 phút', 'Mỹ', '“Wish” là bộ phim hoạt hình kỷ niệm 100 năm thành lập của Walt Disney Studios (sự kiện toàn cầu D100). \"Điều Ước\" lấy bối cảnh tại một vương quốc diệu kỳ tên Rosas. Ở đây, Asha - một cô gái thông minh và mơ mộng đã ước một điều ước quá sức mạnh mẽ, đến nỗ', '2023-11-24', 'p204', 'Ariana DeBose, Chris Pine, Alan Tudyk', 295000.00, '0017104_0.webp', 8),
('f8', 'Người Mặt Trời', 'Timothy Linh Bui', '100 phút', 'Việt Nam', '400 năm qua, loài Ma Cà Rồng đã bí mật sống giữa loài người trong hòa bình, nhưng hiểm họa bỗng ập đến khi một cô gái loài người phát hiện được thân phận của hai anh em Ma Cà Rồng. Người anh khát máu quyết săn lùng cô để bảo vệ bí mật giống loài, trong kh', '2023-12-08', 'p201', 'Chi Pu, Thuận Nguyễn, Trần Ngọc Vàng, Trịnh Thảo', 222000.00, '0017204_0.webp', 0),
('f9', 'Vong Ám', 'John McPhail', '90 phút', 'Mỹ', 'Ngay sau khi hoạ sĩ truyện tranh Adam (Augustus Prew) đáp trả những lời bắt nạt trên Internet, anh bắt đầu bị bóng đè khi ngủ - trong lúc đó một chiếc ghế bập bênh trống rỗng di chuyển trong góc căn hộ của anh ấy. Khi ghi lại những sự đáng sợ này trong mộ', '2023-11-10', 'p201', 'Justin Long, Andrea Bang, Augustus Prew', 169000.00, '0017186_0.webp', 0);

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
('p200', 'Tâm lý, Tình cảm'),
('p201', 'Kinh Dị'),
('p202', 'Hành Động'),
('p203', 'Hài'),
('p204', 'Hoạt hình'),
('p205', 'Cổ trang, dã sử'),
('p206', 'Hài, Hoạt hình, Phiêu lưu');

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
  ADD PRIMARY KEY (`idLichChieu`),
  ADD KEY `maphim` (`maphim`);

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
-- AUTO_INCREMENT for table `lichchieu`
--
ALTER TABLE `lichchieu`
  MODIFY `idLichChieu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
-- Constraints for table `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD CONSTRAINT `lichchieu_ibfk_1` FOREIGN KEY (`maphim`) REFERENCES `phim` (`maphim`);

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
