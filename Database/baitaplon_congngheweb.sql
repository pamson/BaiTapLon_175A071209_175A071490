-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2019 lúc 10:03 AM
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `UserName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PassWord` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ConfirmPassword` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'xác nhập lại password',
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sex` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Cấp bậc',
  `Email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`UserName`, `PassWord`, `ConfirmPassword`, `Name`, `Sex`, `Role`, `Email`, `Address`) VALUES
('175A071209', '175A071204', '175A071204', 'Phạm Thế Sơn', 'Nam', 'SV', 'PamSon@gmai.com', 'Nam Định');

--
-- Bẫy `account`
--
DELIMITER $$
CREATE TRIGGER `Insert_Account` AFTER INSERT ON `account` FOR EACH ROW INSERT INTO userlogin VALUES(NEW.UserName,NEW.PassWord,NEW.Role)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update_Account` AFTER UPDATE ON `account` FOR EACH ROW UPDATE userlogin SET PassWord = NEW.PassWord , Role = NEW.Role
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctmonhoc`
--

CREATE TABLE `ctmonhoc` (
  `MaLop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaGV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaMH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HK` tinyint(4) NOT NULL COMMENT 'Học Kì'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemsv`
--

CREATE TABLE `diemsv` (
  `MaMH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoTC` int(11) NOT NULL COMMENT 'Số tín chỉ',
  `LanHoc` tinyint(4) NOT NULL COMMENT 'Lần học',
  `LanThi` tinyint(4) NOT NULL COMMENT 'Lần Thi',
  `DanhGia` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Đánh Giá',
  `MaSV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuaTrinh` float NOT NULL COMMENT 'Điểm quá trình',
  `Thi` float NOT NULL COMMENT 'Điểm thi',
  `TKHP` float DEFAULT NULL COMMENT 'Tổng kết học phần',
  `Diemchu` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Điểm chữ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('KTDung', 'Kiều Tuấn Dũng', 'Thạc sĩ', 'Nam', '21224462', 'ktDung@wru.vn', 'Việt Nam');

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
('TLA07', 'Công Nghệ Thông Tin');

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
('175A071209', 'Phạm Thế Sơn', '59TH2', 'Nam', '2323265', 'PamSon@gmai.com', 'Nam Định'),
('175A071490', 'Đỗ Cảnh Dương', '59TH2', 'Nam', '21212154', 'DuongDo@gmail.com', 'Nam Định');

--
-- Bẫy `sinhvien`
--
DELIMITER $$
CREATE TRIGGER `Delete_SV` AFTER DELETE ON `sinhvien` FOR EACH ROW DELETE FROM account WHERE UserName = OLD.MaSV
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Insert_SV_Account` AFTER INSERT ON `sinhvien` FOR EACH ROW INSERT INTO account VALUES(NEW.MaSV,NEW.MaSV,NEW.MaSV,NEW.TenSV,NEW.GioiTinh,'SV',NEW.Email,NEW.DiaChi)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update_SV` AFTER UPDATE ON `sinhvien` FOR EACH ROW UPDATE account set UserName = NEW.MaSV, PassWord = NEW.MaSV, ConfirmPassword = NEW.MaSV, Name = NEW.TenSV, Sex = NEW.GioiTinh, Email = NEW.Email,
Address = NEW.DiaChi
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userlogin`
--

CREATE TABLE `userlogin` (
  `UserName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PassWord` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Phân quyền'
) ;

--
-- Đang đổ dữ liệu cho bảng `userlogin`
--

INSERT INTO `userlogin` (`UserName`, `PassWord`, `Role`) VALUES
('175A071209', '175A071204', 'SV');

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
  ADD PRIMARY KEY (`MaLop`,`MaGV`,`MaMH`),
  ADD KEY `MaMH` (`MaMH`),
  ADD KEY `MaGV` (`MaGV`);

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
  ADD PRIMARY KEY (`MaMH`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaSV` (`MaSV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`UserName`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctmonhoc`
--
ALTER TABLE `ctmonhoc`
  ADD CONSTRAINT `ctmonhoc_ibfk_1` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctmonhoc_ibfk_2` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctmonhoc_ibfk_3` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `userlogin`
--
ALTER TABLE `userlogin`
  ADD CONSTRAINT `userlogin_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `account` (`UserName`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
