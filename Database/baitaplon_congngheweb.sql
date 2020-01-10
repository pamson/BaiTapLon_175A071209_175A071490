-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2020 lúc 11:33 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitaplon_congngheweb`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_DiemSV` (IN `MaSinhVien` VARCHAR(20) CHARSET utf8)  NO SQL
SELECT diemsv.MaMH, monhoc.TenMH,diemsv.SoTC,diemsv.LanThi,diemsv.DanhGia,sinhvien.TenSV,diemsv.MaSV,diemsv.QuaTrinh,diemsv.Thi,diemsv.TKHP,diemsv.Diemchu FROM sinhvien,diemsv,monhoc WHERE sinhvien.MaSV= diemsv.MaSV AND monhoc.MaMH = diemsv.MaMH AND sinhvien.MaSV = MaSinhVien$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `UserName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PassWord` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ConfirmPassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'xác nhập lại password',
  `verified` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sex` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Cấp bậc',
  `Email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`UserName`, `PassWord`, `ConfirmPassword`, `verified`, `Name`, `Sex`, `Role`, `Email`, `Address`) VALUES
('175A071209', '$2y$10$L/b47LCLihrt7rIzwv5Hqu33DDKnCOXbNghgVz2npQpxcaDON34.W', NULL, NULL, 'Phạm Thế  SƠn', 'Nam', 'SV', 'buinhuhoa199@gmail.com', 'Nam Định'),
('ADMIN', '$2y$10$.x2cVUvxwxDxwFlnV9mIr.aqzJnv3nIXGwTK2syyuMvFXJtLdSBWi', NULL, NULL, 'Phạm Thế  SƠn', 'Nam', 'ADMIN', 'buinhuhoa199@gmail.com', 'Nam Định'),
('KTDung', '$2y$10$SEooyovqTIeAhbGlIuw0iOuaoVqhw0YGwpOPb6irMiVAr22IEpTa6', NULL, NULL, 'Kiều Tuấn Dũng', 'Nam', 'GV', 'KTDung@wru.vn', 'Việt Nam'),
('QT', '$2y$10$69hkkwyADFpQhnMdEfSmi..jVMxXsmnk3XVSOMDxvoR71vEqMb..S', NULL, NULL, 'Đỗ Cảnh Dương', 'nam', 'QL', 'Duong@do.com', 'Nam Định');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctmonhoc`
--

CREATE TABLE `ctmonhoc` (
  `MaLop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaMH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HK` tinyint(4) NOT NULL COMMENT 'Học Kì',
  `NamHoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctmonhoc`
--

INSERT INTO `ctmonhoc` (`MaLop`, `MaMH`, `HK`, `NamHoc`) VALUES
('59TH1', 'CSE488', 1, '2018-2019'),
('59TH2', 'CSE450', 2, '2018-2019'),
('59TH2', 'CSE488', 1, '2018-2019');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemsv`
--

CREATE TABLE `diemsv` (
  `MaMH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoTC` int(11) NOT NULL COMMENT 'Số tín chỉ',
  `LanHoc` tinyint(4) NOT NULL COMMENT 'Lần học',
  `LanThi` tinyint(4) NOT NULL COMMENT 'Lần Thi',
  `DanhGia` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Đánh Giá',
  `MaSV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuaTrinh` float NOT NULL COMMENT 'Điểm quá trình',
  `Thi` float NOT NULL COMMENT 'Điểm thi',
  `TKHP` float DEFAULT NULL COMMENT 'Tổng kết học phần',
  `Diemchu` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Điểm chữ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diemsv`
--

INSERT INTO `diemsv` (`MaMH`, `SoTC`, `LanHoc`, `LanThi`, `DanhGia`, `MaSV`, `QuaTrinh`, `Thi`, `TKHP`, `Diemchu`) VALUES
('CSE450', 3, 1, 1, 'Đạt', '175A071209', 8, 9, 8.6, 'A'),
('CSE488', 3, 1, 1, 'Đạt', '175A071209', 7.5, 8, 7.8, 'B');

--
-- Bẫy `diemsv`
--
DELIMITER $$
CREATE TRIGGER `Insert_diemSV` BEFORE INSERT ON `diemsv` FOR EACH ROW SET NEW.TKHP = NEW.QuaTrinh*0.4 + NEW.Thi*0.6,
NEW.Diemchu = CASE
when NEW.TKHP >= 4 AND NEW.TKHP < 5.5 then "D" 
when  NEW.TKHP >= 5.5 AND NEW.TKHP < 7 then "C"
when  NEW.TKHP >= 7 AND NEW.TKHP < 8.5 then "B"
when  NEW.TKHP >= 8.5 AND NEW.TKHP < 10 then "A"
else "F"
END, NEW.DanhGia = CASE
WHEN NEW.TKHP >= 4 THEN "Đạt"
ELSE "Không đạt"
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_diemsv` BEFORE UPDATE ON `diemsv` FOR EACH ROW SET NEW.TKHP = NEW.QuaTrinh*0.4 + NEW.Thi*0.6,
NEW.Diemchu = CASE
when NEW.TKHP >= 4 AND NEW.TKHP < 5.5 then "D" 
when  NEW.TKHP >= 5.5 AND NEW.TKHP < 7 then "C"
when  NEW.TKHP >= 7 AND NEW.TKHP < 8.5 then "B"
when  NEW.TKHP >= 8.5 AND NEW.TKHP < 10 then "A"
else "F"
END, NEW.DanhGia = CASE
WHEN NEW.TKHP >= 4 THEN "Đạt"
ELSE "Không đạt"
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenGV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CapBac` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Level',
  `GioiTinh` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SĐT` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `TenGV`, `CapBac`, `GioiTinh`, `SĐT`, `Email`, `DiaChi`) VALUES
('KTDung', 'kiều Tuấn Dũng', 'Thạc sĩ', 'Nam', '121545', 'KTDung@wru.vn', 'Việt Nam');

--
-- Bẫy `giangvien`
--
DELIMITER $$
CREATE TRIGGER `Delete_GV` AFTER DELETE ON `giangvien` FOR EACH ROW DELETE FROM account WHERE UserName = OLD.MaGV
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Insert_GV_Account` AFTER INSERT ON `giangvien` FOR EACH ROW INSERT INTO account VALUES(NEW.MaGV,NEW.MaGV,NEW.MaGV,NULL,NEW.TenGV,NEW.GioiTinh,'GV',NEW.Email,NEW.DiaChi)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update_GV` AFTER UPDATE ON `giangvien` FOR EACH ROW UPDATE account set UserName = NEW.MaGV, PassWord = NEW.MaGV, ConfirmPassword = NEW.MaGV, Name = NEW.TenGV, Sex = NEW.GioiTinh, Email = NEW.Email,Address = NEW.DiaChi WHERE UserName = OLD.MaGV
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKhoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
('sfsdf', 'gdfgdf'),
('Son', 'con chó'),
('TLA07', 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaKhoa` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLop` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SiSo` tinyint(4) NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `MaKhoa`, `TenLop`, `SiSo`) VALUES
('59HT', 'TLA07', '59HT', 80),
('59PM1', 'TLA07', '59PM1', 80),
('59PM2', 'TLA07', '59PM2', 80),
('59TH1', 'TLA07', '59TH1', 80),
('59TH2', 'TLA07', '59TH2', 80),
('59TH3', 'TLA07', '59TH3', 80);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenMH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoTC` int(11) NOT NULL COMMENT 'Số tín chỉ',
  `LT` tinyint(4) NOT NULL COMMENT 'Lý thuyết',
  `TH` tinyint(4) NOT NULL COMMENT 'Thực hành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`, `SoTC`, `LT`, `TH`) VALUES
('CSE450', 'Lập trình nâng cao', 3, 34, 22),
('CSE488', 'Công nghệ Web', 3, 35, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phancong_gv_lop`
--

CREATE TABLE `phancong_gv_lop` (
  `MaLop` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaGV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phancong_gv_lop`
--

INSERT INTO `phancong_gv_lop` (`MaLop`, `MaGV`) VALUES
('59TH1', 'KTdung'),
('59TH2', 'KTDung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã Sinh Viên',
  `TenSV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên Sinh Viên',
  `MaLop` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Sex',
  `SĐT` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Số điện thoại',
  `Email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `TenSV`, `MaLop`, `GioiTinh`, `SĐT`, `Email`, `DiaChi`) VALUES
('175A0712045', 'Đỗ Cảnh Dương', '59TH2', 'Nam', '3423', 'Duong@wru.vn', 'Nam Định'),
('175A071209', 'Phạm Thế Sơn', '59TH2', 'Nam', '2332', 'PamSon@gmail.com', 'Nam Định');

--
-- Bẫy `sinhvien`
--
DELIMITER $$
CREATE TRIGGER `Delete_SV` AFTER DELETE ON `sinhvien` FOR EACH ROW DELETE FROM account WHERE UserName = OLD.MaSV
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Insert_SV_Account` AFTER INSERT ON `sinhvien` FOR EACH ROW INSERT INTO account VALUES(NEW.MaSV,NEW.MaSV,NEW.MaSV,NULL,NEW.TenSV,NEW.GioiTinh,'SV',NEW.Email,NEW.DiaChi)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update_SV` AFTER UPDATE ON `sinhvien` FOR EACH ROW UPDATE account set UserName = NEW.MaSV, PassWord = NEW.MaSV, ConfirmPassword = NEW.MaSV, Name = NEW.TenSV, Sex = NEW.GioiTinh, Email = NEW.Email,
Address = NEW.DiaChi WHERE UserName = OLD.MaSV
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_diemsv`
-- (See below for the actual view)
--
CREATE TABLE `v_diemsv` (
`MaMH` varchar(20)
,`TenMH` varchar(50)
,`SoTC` int(11)
,`LanThi` tinyint(4)
,`DanhGia` varchar(10)
,`TenSV` varchar(50)
,`MaSV` varchar(30)
,`QuaTrinh` float
,`Thi` float
,`TKHP` float
,`Diemchu` varchar(3)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_hoso`
-- (See below for the actual view)
--
CREATE TABLE `v_hoso` (
`MaSV` varchar(30)
,`TenSV` varchar(50)
,`MaLop` varchar(30)
,`GioiTinh` varchar(5)
,`Role` varchar(5)
,`Email` varchar(32)
,`DiaChi` varchar(50)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_hoso_admin`
-- (See below for the actual view)
--
CREATE TABLE `v_hoso_admin` (
`Name` varchar(50)
,`Sex` varchar(5)
,`Role` varchar(5)
,`Email` varchar(32)
,`Address` varchar(50)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_hoso_qt`
-- (See below for the actual view)
--
CREATE TABLE `v_hoso_qt` (
`Name` varchar(50)
,`Sex` varchar(5)
,`Role` varchar(5)
,`Email` varchar(32)
,`Address` varchar(50)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_test`
-- (See below for the actual view)
--
CREATE TABLE `v_test` (
`MaMH` varchar(20)
,`TenMH` varchar(50)
,`SoTC` int(11)
,`LanThi` tinyint(4)
,`DanhGia` varchar(10)
,`TenSV` varchar(50)
,`MaSV` varchar(30)
,`MaLop` varchar(30)
,`QuaTrinh` float
,`Thi` float
,`TKHP` float
,`Diemchu` varchar(3)
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_diemsv`
--
DROP TABLE IF EXISTS `v_diemsv`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_diemsv`  AS  select `diemsv`.`MaMH` AS `MaMH`,`monhoc`.`TenMH` AS `TenMH`,`diemsv`.`SoTC` AS `SoTC`,`diemsv`.`LanThi` AS `LanThi`,`diemsv`.`DanhGia` AS `DanhGia`,`sinhvien`.`TenSV` AS `TenSV`,`diemsv`.`MaSV` AS `MaSV`,`diemsv`.`QuaTrinh` AS `QuaTrinh`,`diemsv`.`Thi` AS `Thi`,`diemsv`.`TKHP` AS `TKHP`,`diemsv`.`Diemchu` AS `Diemchu` from ((`monhoc` join `sinhvien`) join `diemsv`) where `diemsv`.`MaMH` = `monhoc`.`MaMH` and `sinhvien`.`MaSV` = `diemsv`.`MaSV` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_hoso`
--
DROP TABLE IF EXISTS `v_hoso`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_hoso`  AS  select `sinhvien`.`MaSV` AS `MaSV`,`sinhvien`.`TenSV` AS `TenSV`,`sinhvien`.`MaLop` AS `MaLop`,`sinhvien`.`GioiTinh` AS `GioiTinh`,`account`.`Role` AS `Role`,`sinhvien`.`Email` AS `Email`,`sinhvien`.`DiaChi` AS `DiaChi` from (`sinhvien` join `account`) where `account`.`UserName` = `sinhvien`.`MaSV` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_hoso_admin`
--
DROP TABLE IF EXISTS `v_hoso_admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_hoso_admin`  AS  select `account`.`Name` AS `Name`,`account`.`Sex` AS `Sex`,`account`.`Role` AS `Role`,`account`.`Email` AS `Email`,`account`.`Address` AS `Address` from `account` where `account`.`Role` = 'ADMIN' ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_hoso_qt`
--
DROP TABLE IF EXISTS `v_hoso_qt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_hoso_qt`  AS  select `account`.`Name` AS `Name`,`account`.`Sex` AS `Sex`,`account`.`Role` AS `Role`,`account`.`Email` AS `Email`,`account`.`Address` AS `Address` from `account` where `account`.`Role` = 'QL' ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_test`
--
DROP TABLE IF EXISTS `v_test`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_test`  AS  select `diemsv`.`MaMH` AS `MaMH`,`monhoc`.`TenMH` AS `TenMH`,`diemsv`.`SoTC` AS `SoTC`,`diemsv`.`LanThi` AS `LanThi`,`diemsv`.`DanhGia` AS `DanhGia`,`sinhvien`.`TenSV` AS `TenSV`,`diemsv`.`MaSV` AS `MaSV`,`sinhvien`.`MaLop` AS `MaLop`,`diemsv`.`QuaTrinh` AS `QuaTrinh`,`diemsv`.`Thi` AS `Thi`,`diemsv`.`TKHP` AS `TKHP`,`diemsv`.`Diemchu` AS `Diemchu` from ((`monhoc` join `sinhvien`) join `diemsv`) where `diemsv`.`MaMH` = `monhoc`.`MaMH` and `sinhvien`.`MaSV` = `diemsv`.`MaSV` ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`UserName`);

--
-- Chỉ mục cho bảng `ctmonhoc`
--
ALTER TABLE `ctmonhoc`
  ADD PRIMARY KEY (`MaLop`,`MaMH`) USING BTREE,
  ADD KEY `MaMH` (`MaMH`);

--
-- Chỉ mục cho bảng `diemsv`
--
ALTER TABLE `diemsv`
  ADD PRIMARY KEY (`MaMH`,`MaSV`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaKhoa` (`MaKhoa`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`),
  ADD UNIQUE KEY `Check_uni` (`TenMH`);

--
-- Chỉ mục cho bảng `phancong_gv_lop`
--
ALTER TABLE `phancong_gv_lop`
  ADD PRIMARY KEY (`MaLop`,`MaGV`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaSV` (`MaSV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctmonhoc`
--
ALTER TABLE `ctmonhoc`
  ADD CONSTRAINT `ctmonhoc_ibfk_1` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctmonhoc_ibfk_2` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `diemsv`
--
ALTER TABLE `diemsv`
  ADD CONSTRAINT `diemsv_ibfk_1` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diemsv_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phancong_gv_lop`
--
ALTER TABLE `phancong_gv_lop`
  ADD CONSTRAINT `phancong_gv_lop_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phancong_gv_lop_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
