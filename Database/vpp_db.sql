-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2023 lúc 10:47 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vpp_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `donhang_id` varchar(11) NOT NULL,
  `sanpham_id` varchar(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `Tongtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `danhmuc_id` varchar(11) NOT NULL,
  `danhmuc_ten` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`danhmuc_id`, `danhmuc_ten`) VALUES
('DM_08', 'Ba lô'),
('DM_01', 'Bút-Viết'),
('DM_02', 'Dụng cụ học sinh'),
('DM_03', 'Dụng cụ văn phòng'),
('DM_04', 'Dụng cụ vẽ'),
('DM_07', 'Máy tính cầm tay'),
('DM_06', 'Sản phẩm khác'),
('DM_05', 'Sản phẩm về giấy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `donhang_id` varchar(11) NOT NULL,
  `khachhang_id` varchar(11) NOT NULL,
  `ngaydathang` datetime NOT NULL,
  `donhang_tinhtrang` varchar(45) NOT NULL,
  `donhang_diachi` varchar(45) NOT NULL,
  `donhang_thanhtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `khachhang_id` varchar(11) NOT NULL,
  `khachhang_hoten` varchar(45) NOT NULL,
  `khachhang_email` varchar(45) NOT NULL,
  `khachhang_mk` int(11) NOT NULL,
  `khachhang_diachi` varchar(45) NOT NULL,
  `khachhang_sodt` varchar(45) NOT NULL,
  `khachhang_ngaytao` date DEFAULT NULL,
  `khachhang_quyen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_id` varchar(11) NOT NULL,
  `sanpham_ten` varchar(100) NOT NULL,
  `sanpham_tenncc` varchar(50) NOT NULL,
  `sanpham_xuatxu` varchar(50) NOT NULL,
  `sanpham_mau` varchar(45) NOT NULL,
  `sanpham_chatlieu` varchar(45) NOT NULL,
  `sanpham_anh` varchar(200) NOT NULL,
  `sanpham_gia` float NOT NULL,
  `danhmuc_id` varchar(11) NOT NULL,
  `sanpham_ngaynhap` datetime(6) DEFAULT NULL,
  `luotmua` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `sanpham_ten`, `sanpham_tenncc`, `sanpham_xuatxu`, `sanpham_mau`, `sanpham_chatlieu`, `sanpham_anh`, `sanpham_gia`, `danhmuc_id`, `sanpham_ngaynhap`, `luotmua`) VALUES
('SP_01', 'Bộ 6 Bút EnerGel Kawaii Pixel Art 0.5 mm - Pentel BLN75KW6-6S2 - Mực Xanh', 'Cty Văn Phòng Sáng Tạo (Stacom)', 'Nhật bản', 'Nhiều màu', 'Nhựa', 'product_image\\butviet\\Pentel BLN75KW6.jpg', 322000, 'DM_01', '2023-11-08 19:20:36.000000', 23),
('SP_02', 'Bút Gel EnerGel Kawaii Pixel Art 0.5 mm - Pentel BLN75KW40-C - Daruma - Mực Xanh', 'Cty Văn Phòng Sáng Tạo (Stacom)', 'Nhật Bản', 'Trắng', 'Nhựa', 'product_image\\butviet\\Pentel BLN75KW40.jpg', 54000, 'DM_01', '2023-11-02 19:20:36.000000', 34),
('SP_03', 'Bút Gel EnerGel Kawaii Pixel Art 0.5 mm - Pentel BLN75KW36-C - Onigiri - Mực Xanh', 'Cty Văn Phòng Sáng Tạo (Stacom)', 'Nhật Bản', 'Trắng', 'Nhựa', 'product_image\\butviet\\Pentel BLN75KW36.jpg', 54000, 'DM_01', '2023-11-09 19:20:36.000000', 32),
('SP_04', 'Bút Gel EnerGel Kawaii Pixel Art 0.5 mm - Pentel BLN75KW37-C - Kitsune - Mực Xanh', 'Cty Văn Phòng Sáng Tạo (Stacom)', 'Nhật Bản', 'Trắng', 'Nhựa', 'Pentel BLN75KW37.jpg', 54000, 'DM_01', '2023-11-21 19:20:36.000000', 32),
('SP_05', 'Bút Gel EnerGel Kawaii Pixel Art 0.5 mm - Pentel BLN75KW38-C - Uchiwa - Mực Xanh', 'Cty Văn Phòng Sáng Tạo (Stacom)', 'Nhật bản', 'Trắng', 'Nhựa', 'product_image\\butviet\\Pentel BLN75KW38.jpg', 54, 'DM_01', '2023-10-11 19:20:36.000000', 32),
('SP_06', 'Bút Bi Pastel Pro 027 0.5 mm - Thiên Long TL-105 - Mực Xanh - Thân Bút Màu Xanh Mint', '	Thiên Long Hoàn Cầu', 'Việt Nam', 'Xanh Mint', 'Nhựa', 'product_image\\butviet\\8935324002893-mau1.jpg', 6500, 'DM_01', '2023-11-14 19:20:36.000000', 23),
('SP_07', 'Bút Bi Pastel Pro 027 0.5 mm - Thiên Long TL-105 - Mực Xanh - Thân Bút Màu Xanh Dương', 'Thiên Lonh Hoàn Cầu', 'Việt Nam', 'Xanh Dương', 'Nhựa', 'product_image\\butviet\\8935324002893-mau3.jpg', 6500, 'DM_01', '2023-11-28 19:20:36.000000', 32),
('SP_08', 'Bút Dạ Quang - Thiên Long HL-03 - Màu Xanh Lá', '	Thiên Long Hoàn Cầu', 'Việt Nam', 'Xanh Lá', 'Nhựa', 'product_image\\butviet\\8935001814641.jpg', 10000, 'DM_01', '2023-11-15 19:20:36.000000', 23),
('SP_09', 'Bút Bic 10 Màu Bear Cheese 0.7 mm - Kuki KK-7493-MD-TK - Thân Bút Màu Vàng', '	Cty Văn Hoá Việt Văn', 'Việt Nam', 'Vàng', 'Nhựa', 'product_image\\butviet\\6971010804930-mau2.jpg', 25000, 'DM_01', '2023-11-02 19:20:36.000000', 23),
('SP_10', '\r\nViết Máy Kim Thành 39 - Thân Bút Màu Vàng', '	Cty TM Hạnh Thuận', 'Việt Nam', 'Vàng', 'Kim Loại', 'product_image\\butviet\\1503020896749-mau2.jpg', 50000, 'DM_01', '2023-11-10 19:20:36.000000', 23),
('SP_11', 'Khay Cắm Bút Deli 9154 - Màu Xanh Lá', '	Cty Hoàng Bách Nguyên', 'Trung Quốc', 'Xanh Lá', 'Nhựa', 'product_image\\dungcuvanphong\\6921734991546-mau5.jpg', 145000, 'DM_03', '2023-10-27 19:20:36.000000', 12),
('SP_12', 'Bìa 12 Ngăn Clever Bium - Morning Glory 51530-86897 - Màu Xám Khói', '	Morning Glory Corp', 'Trung Quốc', 'Xám', 'Nhựa', 'product_image\\dungcuvanphong\\8801237868973.jpg', 120000, 'DM_03', '2023-11-09 19:20:36.000000', 12),
('SP_13', 'Bấm Kim Số 3 - Officetex OT-SL03003 - Màu Đen', '	Officetex', '	Việt Nam', 'Đen', 'Nhựa', 'product_image\\dungcuvanphong\\8935276453101-mau1.jpg', 45000, 'DM_03', '2023-11-03 19:20:36.000000', 32),
('SP_14', 'Bìa Nút Pazto Màu Pastel F4 Flexoffice FO-CBF010 - Hồng Pastel', 'Thiên Long Hoàn Cầu', 'Việt Nam', 'Hồng', 'Nhựa', 'product_image\\dungcuvanphong\\8935283905624.jpg', 7000, 'DM_03', '2023-11-03 19:20:36.000000', 43),
('SP_15', 'Bìa Nút Pazto Màu Pastel F4 Flexoffice FO-CBF010 - Tím Pastel', 'Thiên Long Hoàn Cầu', 'Việt Nam', 'Tím', 'Nhựa', 'product_image\\dungcuvanphong\\8935283905631.jpg', 7000, 'DM_03', '2023-11-01 19:20:36.000000', 12),
('SP_16', 'Hộp Kim Bấm Số 10 - Plus 30-122VN\r\n', 'Công ty TNHH Công Nghiệp PLUS Việt Nam', 'Việt Nam', 'Bạc', 'Kim Loại', 'product_image\\dungcuvanphong\\8936007450291.jpg', 5000, 'DM_03', '2023-11-06 19:20:36.000000', 43),
('SP_17', 'Gôm 3D Bear Cheese - Kuki KK-7714-MD-TK - Gấu Vàng', '	Cty Văn Hoá Việt Văn', '	Trung Quốc', '	Vàng', '	Cao Su', 'product_image\\dungcuhocsinh\\taygau1.jpg', 25000, 'DM_02', '2023-11-03 19:20:36.000000', 24),
('SP_18', 'Bộ 2 Gôm Tẩy Màu Pastel - Keyroad KR972036 - Màu Xanh Lá - Xanh Dương', 'Cty Văn Hoá Việt Văn', '', 'Nhiều màu', '	Cao Su', 'product_image\\dungcuhocsinh\\tay.jpg', 15000, 'DM_02', '2023-10-31 19:32:45.000000', 43),
('SP_19', 'Gôm Tẩy Nhân Vật Hoạt Hình Gấu Pooh Disney - Thiên Long E-032/PO - Màu Hồng', 'Thiên Long Hoàn Cầu', 'Việt Nam', 'Hồng', 'Cao su', 'product_image\\dungcuhocsinh\\tay2.jpg', 7000, 'DM_02', '2023-11-11 19:32:45.000000', 54),
('SP_20', '\r\nThước Kẻ 20 cm Radius - Màu Hồng', 'RADIUS', 'Ấn Độ', 'Hồng', 'Nhựa', 'product_image\\dungcuhocsinh\\thuoc1.jpg', 6000, 'DM_02', '2023-10-27 19:32:45.000000', 34),
('SP_21', 'Thước Kẻ 20 cm Radius - Trong Suốt', '	RADIUS', 'Ấn Độ', 'Trong Suốt', 'Nhựa', 'product_image\\dungcuhocsinh\\thuoc2.jpg', 6000, 'DM_02', '2023-11-11 19:32:45.000000', 55),
('SP_22', 'Bảng Phấn 2 Mặt Học Toán Và Tiếng Việt - Thiên Long TP-B018 PLUS - Xanh Lá ', '	Thiên Long Hoàn Cầu', 'Việt Nam', 'Xanh Lá', 'Nhựa', 'product_image\\balo\\bangviet.jpg', 25000, 'DM_02', '2023-11-19 19:32:45.000000', 34),
('SP_23', '\r\nCọ Vẽ Đầu Tròn Số 10 - Kum 5141919', 'KUM GmbH & Co. KG', 'Đức', 'Gỗ Tự Nhiên', 'Gỗ', 'product_image\\dungcuve\\co_ve_dau_so_10.jpg', 50000, 'DM_04', '2023-10-29 19:32:45.000000', 25),
('SP_24', 'Cọ Vẽ Đầu Tròn Số 8 - Kum 5141819', 'KUM GmbH & Co. KG', 'Đức', 'Gỗ Tự Nhiên', 'Gỗ', 'product_image\\dungcuve\\co_ve_dau_so_8.jpg', 50000, 'DM_04', '2023-11-18 19:32:45.000000', 55),
('SP_25', '\r\nCọ Vẽ Đầu Tròn Số 14 - Kum 5142119', 'KUM GmbH & Co. KG', 'Đức', 'Gỗ Tự Nhiên', 'Gỗ', 'product_image\\dungcuve\\co_ve_dau_so_14.jpg', 50000, 'DM_04', '2023-11-17 19:32:45.000000', 41),
('SP_26', 'Khay Đựng Màu Vẽ - Renaissance H2', 'Cty Fabico', 'Trung Quốc', 'Trắng', 'Nhựa', 'product_image\\dungcuve\\8851907128883.jpg', 96000, 'DM_04', '2023-10-04 19:27:32.000000', 32),
('SP_27', 'Bộ 12 Viên Nén Màu Nước 25mm + Khay Phối Màu + 1 Cọ PRIMO 110A12B', 'MOROCOLOR ITALIA S.P.A (PRIMO)', 'Ý', '12 Màu', 'Nhựa', 'product_image\\dungcuve\\khay_12_mau.jpg', 51000, 'DM_04', '2023-10-13 19:27:32.000000', 21),
('SP_28', 'Bộ 5 Bay Pha Màu - Renaissance', 'Cty Fabico', 'Thái Lan', 'Nâu Đỏ', 'Nhựa, Kim Loại', 'product_image\\dungcuve\\8851907293925.jpg', 225000, 'DM_04', '2023-11-10 19:27:32.000000', 21),
('SP_29', '\r\nSổ Agenda Cầm Tay Kẻ Ngang 208 Trang - Văn Khoa - Màu Xanh Dương', 'NS Văn Khoa', 'Việt Nam', 'Xanh Dương', 'Da', 'product_image\\sanphamgiay\\1301040006014.jpg', 60000, 'DM_05', '2023-11-04 19:27:32.000000', 213),
('SP_30', 'Giấy Note 70 x 70 mm - Motto CYSSC70-BL - Màu Xanh Biển (40 Tờ)', 'Cty Đỉnh Điểm', 'Việt Nam', 'Xanh Dương', 'Giấy', 'product_image\\sanphamgiay\\4935183701146.jpg', 25000, 'DM_05', '2023-11-05 19:27:32.000000', 32),
('SP_31', 'Giấy Note 3 Màu 70 x 20 mm - Motto CYSS20-AS (40 Tờ)', 'Cty Đỉnh Điểm', 'Việt Nam', '3 màu', 'Giấy', 'product_image\\sanphamgiay\\4935183701290.jpg', 25000, 'DM_05', '2023-11-05 19:29:12.000000', 12),
('SP_32', 'Sổ Lò Xo Design B5 80 Trang - Oxford DR01B5 - Mẫu 6', 'Branbuil Co., Ltd', 'Hàn Quốc', 'Vàng', 'Giấy', 'product_image\\sanphamgiay\\8809729271805-mau5.jpg', 32000, 'DM_05', '2023-10-04 19:29:12.000000', 12),
('SP_33', 'Sổ Lò Xo Design B5 80 Trang - Oxford DR01B5 - Mẫu 3', 'Branbuil Co., Ltd', 'Hàn Quốc', 'Đỏ', 'Giấy', 'product_image\\sanphamgiay\\8809729271805-mau2.jpg', 32000, 'DM_05', '2023-11-02 19:29:12.000000', 32),
('SP_34', '\r\nSổ Lò Xo A7 GSHS-3740 - Mẫu 39', 'Hộ KD Bu Bu', 'Trung Quốc', 'Nhiều màu', 'Giấy', 'product_image\\sanphamgiay\\3900000008631-mau5_1.jpg', 20000, 'DM_05', '2023-11-10 19:29:12.000000', 32),
('SP_35', 'Xóa Kéo 5 mm x 12 m - Plus V-42-V267 - Màu Xanh Dương', 'Công ty TNHH Công Nghiệp PLUS Việt Nam', 'Việt Nam', 'Xanh Dương', 'Nhựa', 'product_image\\sanphamkhac\\8936007459096.jpg', 25000, 'DM_06', '2023-11-10 19:29:12.000000', 65),
('SP_36', 'Kéo Học Sinh 128mm - Deli 6032 - Màu Xanh', 'Cty Hoàng Bách Nguyên', 'Trung Quốc', 'Xanh', 'Nhựa, kim loại', 'product_image\\sanphamkhac\\6921734960320-mau2.jpg', 23000, 'DM_06', '2023-11-17 19:29:12.000000', 65),
('SP_37', 'Băng Keo Trong 24 mm x 80 Yards - Song Lan', 'Cty Song Lan', 'Việt Nam', 'Trong suốt', 'Nhựa', 'product_image\\sanphamkhac\\3900000171441.jpg', 10000, 'DM_06', '2023-10-07 19:29:12.000000', 98),
('SP_38', '\r\nBăng Keo Trang Trí 3 cm x 2 m LK-75051 (Mẫu Màu Giao Ngẫu Nhiên)', 'Hộ KD Thanh Trà', 'Trung Quốc', 'Nhiều màu', 'Nhựa', 'product_image\\sanphamkhac\\6974640681230.jpg', 31000, 'DM_06', '2023-11-11 19:29:12.000000', 54),
('SP_39', 'Keo Khô Staedtler 920 135', 'Cty Việt Thương', 'Đức', 'Nhiều màu', 'Nhựa', 'product_image\\sanphamkhac\\keo_kh_staedtler_920_108.jpg', 45000, 'DM_06', '2023-11-14 19:29:12.000000', 43),
('SP_40', 'Bảng Tên Dây Kẹp Sắt Dẻo 204', 'Cty TM Hạnh Thuận', 'Trung Quốc', 'Trong suốt', 'Nhựa', 'product_image\\sanphamkhac\\image_195509_1_12092.jpg', 10000, 'DM_06', '2023-11-02 19:29:12.000000', 32),
('SP_41', 'Máy Tính Khoa Học Flexio - Thiên Long Fx799VN - Màu Hồng', 'Thiên Long Hoàn Cầu', 'Việt Nam', 'Hồng', 'Nhựa', 'product_image\\maytinh\\8935324005726.jpg', 700000, 'DM_07', '2023-10-04 19:29:12.000000', 23),
('SP_42', 'Máy Tính Khoa Học Flexio - Thiên Long Fx799VN - Màu Đen', 'Thiên Long Hoàn Cầu', 'Việt Nam', 'Đen', 'Nhựa', 'product_image\\maytinh\\8935324005771.jpg', 700000, 'DM_07', '2023-11-13 19:29:12.000000', 12),
('SP_43', 'Máy Tính CASIO FX-880BTG - Màu Đen', 'Casio', 'Nhật Bản', 'Đen', 'Nhựa', 'product_image\\maytinh\\z3893179089319_f90e6b6b418002e02bf43f0c291096e2.jpg', 780000, 'DM_07', '2023-10-25 19:29:12.000000', 21),
('SP_44', 'Máy Tính CASIO FX-880BTG - Màu Hồng', 'Casio', 'Nhật Bản', 'Hồng', 'Nhựa', 'product_image\\maytinh\\z3893179089096_66b6f5adda84c6f9bdc26be26812c4a9.jpg', 780000, 'DM_07', '2023-11-03 19:29:12.000000', 11),
('SP_45', 'Máy Tính Văn Phòng Deli 12 Số - Phiên Bản Sơn Tùng M-TP Giới Hạn - Deli M042 - Màu Hồng', 'Deli', 'Trung Quốc', 'Hồng', 'Nhựa', 'product_image\\maytinh\\6941798456607-mau2.jpg', 220000, 'DM_07', '2023-10-17 19:29:12.000000', 11),
('SP_46', 'Máy Tính 12 Số Để Bàn - Deli EM124-XD - Xanh Dương Nhạt', 'Deli', 'Trung Quốc', 'Xanh Dương nhạt', 'Nhựa', 'product_image\\maytinh\\6975165338937.jpg', 170000, 'DM_07', '2023-10-30 19:29:12.000000', 21),
('SP_47', 'Máy Tính Văn Phòng Casio Js20B', 'Casio', 'Nhật Bản', 'Đen', 'Nhựa', 'product_image\\maytinh\\image_232843.jpg', 980000, 'DM_07', '2023-11-06 19:29:12.000000', 44),
('SP_48', '\r\nBa Lô Cần Kéo Neo Gibraltar - Sakos SBX006BRTG01', 'Công Ty Cổ Phần Sakos', 'Việt Nam', '', 'Vải', 'product_image\\balo\\8935260627426-comboqt.jpg', 2000000, 'DM_08', '2023-11-12 19:34:12.000000', 21),
('SP_49', 'Vali Kéo Trẻ Em Sakos Amico - Hình Pink Cat', 'Công Ty Cổ Phần Sakos', 'Việt Nam', 'Hồng', 'Nhựa', 'product_image\\balo\\amico.jpg', 600000, 'DM_08', '2023-11-03 19:34:12.000000', 77),
('SP_50', 'Vali Kéo Trẻ Em Sakos Amico - Hình Penguin', 'Công Ty Cổ Phần Sakos', 'Việt Nam', 'Xanh Navy', 'Nhựa', 'product_image\\balo\\amico-2.jpg', 600000, 'DM_08', '2023-11-25 19:34:12.000000', 54),
('SP_51', 'Ba Lô Laptop Stargo Nuevo I15 15.6 inch - Sakos GBV006BLNG00', 'Công Ty Cổ Phần Sakos', 'Việt Nam', 'Xám', 'Vải', 'product_image\\balo\\nuevo-2.jpg', 460000, 'DM_08', '2023-10-12 19:34:53.000000', 65),
('SP_52', 'Túi Đựng Laptop Sakos Stargo Ledger i14', 'Công Ty Cổ Phần Sakos', 'Việt Nam', 'Nhiều màu', 'Vải', 'product_image\\balo\\stargo-ledger.jpg', 200000, 'DM_08', '2023-11-04 19:34:53.000000', 76),
('SP_53', 'Bóp Viết Nylon - Morning Glory 36010-89076', 'Công Ty Cổ Phần Sakos', 'Việt Nam', 'Xám', 'Vải', 'product_image\\balo\\dung-but 3.jpg', 85000, 'DM_08', '2023-10-09 19:34:53.000000', 76),
('SP_54', 'Túi Đựng Dụng Cụ - Sakos SDC001RDNG00', 'Công Ty Cổ Phần Sakos', 'Việt Nam', 'Xám', 'Vải', 'product_image\\balo\\dung-but-2.jpg', 85000, 'DM_08', '2023-10-20 19:34:53.000000', 32);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `donhang_fk_idx` (`donhang_id`),
  ADD KEY `sanpham_fk_idx` (`sanpham_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`danhmuc_id`),
  ADD UNIQUE KEY `danhmuc_id_UNIQUE` (`danhmuc_id`),
  ADD UNIQUE KEY `danhmuc_ten_UNIQUE` (`danhmuc_ten`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`donhang_id`),
  ADD UNIQUE KEY `donhang_id_UNIQUE` (`donhang_id`),
  ADD KEY `khachhang_fk_idx` (`khachhang_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`khachhang_id`),
  ADD UNIQUE KEY `khachhang_id_UNIQUE` (`khachhang_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD UNIQUE KEY `sanpham_id_UNIQUE` (`sanpham_id`),
  ADD UNIQUE KEY `sanpham_ten_UNIQUE` (`sanpham_ten`),
  ADD KEY `danhmuc_fk_idx` (`danhmuc_id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `donhang_fk` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`donhang_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sanpham_fk` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `khachhang_fk` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`khachhang_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `danhmuc_fk` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`danhmuc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
