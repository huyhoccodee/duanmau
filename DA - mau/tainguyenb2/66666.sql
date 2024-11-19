-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 24, 2024 lúc 04:07 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `66666`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL COMMENT 'mã bình luận',
  `noi_dung` varchar(255) NOT NULL COMMENT 'nội dung bl',
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng được bl',
  `ma_kh` int(11) NOT NULL COMMENT 'mã ng bl',
  `ngay_bl` varchar(30) NOT NULL COMMENT 'Thời gian bình '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(2, 'Sản phẩm rất tốt', 2, 1, '2023-10-02'),
(3, 'Màu đẹp lắm nha', 13, 1, '12:02:50pm 14/10/2023'),
(4, 'giống như quảng cáo rất nên thử', 13, 1, '02:52:05pm 14/10/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng ',
  `ten_hh` varchar(50) NOT NULL,
  `don_gia` double(10,2) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `mo_ta` text NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `hinh`, `mo_ta`, `so_luot_xem`, `ma_loai`) VALUES
(1, 'Son Merzy', 159000.00, 'Merzy_alip.webp', 'Son lì mền môi', 9, 1),
(2, 'Son BlackRouge', 159000.00, 'baner_445.png', 'Son kem chính hãng hàn quốc', 12, 1),
(4, 'Mặt nạ hoa quả matcha', 50000.00, 'matnamatcha', 'Mặt nạ dưỡng ẩm ngừa mụn', 9, 2),
(5, 'Mặt nạ ngủ lady', 20000.00, 'matnangu', 'Mặt nạ ngủ dưỡng trắng', 7, 2),
(6, 'Son Romand tint', 159000.00, 'Romand_tint.webp', 'Son tint bóng mịn mướt', 8, 1),
(8, 'Son 3CE ', 159000.00, 'son3ce', 'Son 3CE chính hãng', 5, 1),
(9, 'Son kem merzy', 159000.00, 'merzy2', 'Son kem lỳ bền màu lâu trôi', 7, 1),
(10, 'Mặt nạ nhau thai cừu', 30000.00, 'rau_ma.webp', 'Mat na rau ma', 8, 2),
(11, 'Son môi Dior', 5000000.00, 'banner_12.png', 'Son chinh hang', 20, 1),
(13, 'Son forcalua', 89000.00, 'Merzy_li.webp', 'Son kem dưỡng ẩm', 15, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(10) NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(1, 'Son môi'),
(2, 'Mặt nạ'),
(3, 'Kem chống nắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL COMMENT 'mã đăng nhập',
  `mat_khau` varchar(50) NOT NULL COMMENT 'mật khẩu',
  `user` varchar(50) NOT NULL COMMENT 'họ tên',
  `email` varchar(50) NOT NULL COMMENT 'địa chỉ email',
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `vai_tro` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'vai trò, true là nhân viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `mat_khau`, `user`, `email`, `address`, `tel`, `vai_tro`) VALUES
(1, '123456', 'Admin', 'admin@fpt.edu.vn', NULL, '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `lk_danhmuc_sanpham` (`ma_loai`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã bình luận', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hàng ', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã đăng nhập', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
