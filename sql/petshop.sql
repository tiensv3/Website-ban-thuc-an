-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 04:21 PM
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
-- Cơ sở dữ liệu: `petshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID` int(11) NOT NULL,
  `DonHangID` int(11) DEFAULT NULL,
  `SanPhamID` int(11) DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID`, `DonHangID`, `SanPhamID`, `SoLuong`, `DonGia`) VALUES
(105, 58, 4, 2, 122000),
(106, 59, 5, 2, 57000),
(107, 59, 6, 1, 88000),
(108, 67, 10, 5, 65000),
(109, 68, 12, 2, 38000),
(111, 68, 11, 1, 60000),
(112, 69, 15, 3, 25000),
(113, 69, 14, 5, 17000),
(114, 70, 7, 12, 180000),
(115, 71, 11, 4, 60000),
(116, 71, 9, 2, 250000),
(117, 72, 9, 12, 250000),
(118, 73, 4, 5, 122000),
(119, 74, 4, 5, 122000),
(122, 77, 6, 1, 88000),
(123, 77, 7, 1, 180000),
(124, 78, 6, 1, 88000),
(125, 78, 7, 1, 180000),
(126, 79, 6, 3, 88000),
(127, 80, 13, 1, 73000),
(128, 84, 6, 3, 88000),
(129, 85, 12, 1, 38000),
(130, 86, 7, 1, 180000),
(131, 87, 6, 1, 88000),
(132, 88, 6, 2, 88000),
(133, 89, 4, 1, 122000),
(136, 106, 6, 2, 88000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `ID` int(11) NOT NULL,
  `TenDanhMuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`ID`, `TenDanhMuc`) VALUES
(1, 'Thức ăn cho chó'),
(2, 'Thức ăn cho mèo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ID` int(11) NOT NULL,
  `KhachHangID` int(11) DEFAULT NULL,
  `TGDatHang` datetime DEFAULT NULL,
  `TongTien` bigint(20) DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL COMMENT '0 = Chờ Xác Nhận, 1 = Đã Xác Nhận - Chờ Giao Hàng, 2 = Đã Giao, 3 = Đã Hủy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ID`, `KhachHangID`, `TGDatHang`, `TongTien`, `TrangThai`) VALUES
(58, 9, '2023-12-10 20:03:43', 244000, 2),
(59, 10, '2023-12-10 20:27:09', 202000, 2),
(67, 4, '2023-12-10 20:37:49', 325000, 3),
(68, 6, '2023-12-10 20:38:05', 136000, 2),
(69, 6, '2023-12-10 20:38:46', 160000, 2),
(70, 7, '2023-12-10 20:39:02', 2160000, 2),
(71, 8, '2023-12-10 20:39:16', 740000, 2),
(72, 4, '2023-12-10 21:22:21', 3000000, 1),
(73, 4, '2023-12-11 09:18:17', 610000, 1),
(74, 4, '2023-12-13 10:54:36', 610000, 1),
(77, 4, '2023-12-13 15:47:37', 268000, 0),
(78, 4, '2023-12-13 15:50:26', 268000, 2),
(79, 4, '2023-12-13 16:22:07', 264000, 0),
(80, 4, '2023-12-13 16:23:07', 73000, 0),
(81, 4, '2023-12-13 16:34:32', 88000, 0),
(82, 4, '2023-12-13 16:36:28', 88000, 0),
(83, 4, '2023-12-13 16:37:00', 176000, 0),
(84, 4, '2023-12-13 16:39:08', 264000, 0),
(85, 4, '2023-12-13 16:39:43', 38000, 0),
(86, 4, '2023-12-13 16:49:29', 180000, 0),
(87, 4, '2023-12-13 16:53:28', 88000, 0),
(88, 4, '2023-12-13 16:56:22', 176000, 0),
(89, 4, '2023-12-13 16:56:52', 122000, 0),
(90, 4, '2023-12-13 17:00:48', 180000, 0),
(91, 4, '2023-12-13 17:01:03', 360000, 0),
(92, 4, '2023-12-13 17:05:08', 540000, 0),
(93, 4, '2023-12-13 17:05:20', 720000, 0),
(94, 4, '2023-12-13 17:08:16', 900000, 0),
(95, 4, '2023-12-13 17:30:04', 1800000, 0),
(96, 4, '2023-12-13 17:30:11', 1980000, 0),
(97, 4, '2023-12-13 17:31:32', 2160000, 0),
(98, 4, '2023-12-13 17:31:35', 2160000, 0),
(99, 4, '2023-12-13 17:31:38', 2340000, 0),
(100, 4, '2023-12-13 22:13:42', 0, 0),
(101, 4, '2023-12-13 22:14:00', 0, 0),
(102, 4, '2023-12-13 22:14:01', 0, 0),
(103, 4, '2023-12-13 22:14:01', 0, 0),
(104, 4, '2023-12-13 22:15:00', 0, 0),
(105, 4, '2023-12-13 22:18:16', 0, 0),
(106, 4, '2023-12-13 22:20:52', 176000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `ID` int(11) NOT NULL,
  `KhachHangID` int(11) DEFAULT NULL,
  `SanPhamID` int(11) DEFAULT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`ID`, `KhachHangID`, `SanPhamID`, `SoLuong`) VALUES
(13, 5, 6, 4),
(14, 5, 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ID` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `DiaChi` text NOT NULL,
  `TaiKhoanID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ID`, `HoTen`, `SDT`, `DiaChi`, `TaiKhoanID`) VALUES
(4, 'Trần Quang Tiến', '0337677111', 'ấp Qui Nông A, xã Hòa Lợi, huyện Châu Thành, tỉnh Trà Vinh', 9),
(5, 'Lâm Ngọc Hân', '0987654321', 'ấp Kim H, xã KT, huyện Châu Thành, tỉnh Trà Vinh', 10),
(6, 'Trần Trọng Nhân', '0985553333', '123 Đường ABC, P1, TPTV', 11),
(7, 'Huỳnh Trần Tuấn Anh', '0981112222', 'Đường ABC, P4, TPTV', 12),
(8, 'Hà Minh Chiến', '0987776666', '99 Đường Lê Thánh Tông, Q. Bình Thạnh, TPHCM', 13),
(9, 'Lê Đức Nhuận', '0987123456', 'số 100, đường KT, P6, TPTV', 14),
(10, 'Kim Dương Tuấn', '0987772223', '123, Đường 3/2 TT. Châu Thành, tỉnh Trà Vinh', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ID` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `DiaChi` text NOT NULL,
  `TaiKhoanID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`ID`, `HoTen`, `SDT`, `DiaChi`, `TaiKhoanID`) VALUES
(1, 'Nguyễn Văn A', '0869876522', 'Trà Cú, Vĩnh Long', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `ID` int(11) NOT NULL,
  `KhachHangID` int(11) DEFAULT NULL,
  `TieuDe` varchar(255) DEFAULT NULL,
  `NoiDung` text NOT NULL,
  `ThoiGian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`ID`, `KhachHangID`, `TieuDe`, `NoiDung`, `ThoiGian`) VALUES
(7, 4, 'ee', 'giam gia cho tao', '2023-12-11 02:09:26'),
(8, 4, 'ê', 'eeeeeeeee', '2023-12-13 03:52:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `GiaGoc` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `HinhAnh` text DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL,
  `DanhMucID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenSanPham`, `MoTa`, `GiaGoc`, `GiaBan`, `SoLuong`, `HinhAnh`, `TrangThai`, `DanhMucID`) VALUES
(4, 'Define Thức ăn chó mẹ và chó con 500g', 'Thương hiệu: Hà Lan CỐT LÕI: 1. Nguyên liệu hoàn toàn tự nhiên (không màu - hương nhân tạo) 2. Tập trung sức khoẻ đường ruột (Gut Health) 3. Sức khoẻ tiêu hoá (Prebiotic tự nhiên) 4. Tăng cường hệ miễn dịch (Astaxanthin tự nhiên) 5. Giảm mùi hôi chất thải (Yucca) Thành phần: Đạm gia cầm, chất béo gia cầm, bột đậu nành, bột cá, bắp, đạm động vật thuỷ phân, dầu tảo, dầu đậu nành, bột váng sữa, chiết xuất nấm men, choline chloride, astaxanthin tự nhiên, chiết xuất cây ngọc giá Công dụng: - Công thức chứa sữa giàu canxi: tăng cường sức khoẻ toàn diện cho chó mẹ & con - Cá hồi cao cấp & dầu tảo tự nhiên (Omega 3&6, DHA): phát triển não bộ & nâng cao thị lực cho chó con', 100000, 122000, 9999, 'upload/z4776363080846-6569229a3e3c5e39891f5f1be671c7f9-1697101564943.webp', 1, 1),
(5, 'Oyummi - Thức ăn hoàn chỉnh cho chó trưởng thành 500g', 'TÊN SẢN PHẨM: Oyummi - Thức ăn hoàn chỉnh cho chó trưởng thành 500g\r\n- Đầy đủ các thành phần dinh dưỡng thiết yếu cùng với Chiết xuất Nấm men làm tăng cường hệ miễn dịch, bổ trợ xương khớp vận động linh hoạt giúp chó duy trì sức khỏe tốt và tăng cường tuổi thọ.\r\n- Xương khớp chắc khoẻ: Glucosamine & Chondroitin giúp hỗ trợ hệ xương khớp khỏe mạnh.\r\n- Da khoẻ & lông mượt: Giàu Omega 3 & 6 từ dầu cá biển giúp bảo vệ da và lông bóng mượt.\r\n- Tăng cường miễn dịch: Prebiotic tự nhiên giúp gia tăng hệ vi khuẩn có lợi và tăng cường hệ miễn dịch khỏe mạnh.\r\n- Giảm mùi chất thải: Chiết xuất cây ngọc giá (Yucca) giúp giảm mùi hôi của chất thải.', 30000, 57000, 9999, 'upload/ba-be-ngot-3-1680848828062.webp', 0, 1),
(6, 'Define - Thức ăn hoàn chỉnh cho chó trưởng thành giúp bảo vệ hệ tiêu hoá 500g', 'TÊN SẢN PHẨM: Define - Thức ăn hoàn chỉnh cho chó trưởng thành giúp bảo vệ hệ tiêu hoá 500gr\r\nĐÓNG GÓI: 500gr\r\nTHÀNH PHẦN: Đạm, Đạm thuỷ phân, Bắp, Chất béo, Gạo, Xơ thực vật, Dầu đậu nành, Dầu tảo (nguồn DHA), Chiết xuất nấm men (nguồn Betaglucan và Mannan-Oligo-Saccharide), Butyrate, Astaxanthin tự nhiên, Chiết xuất cây ngọc giá (Yucca).\r\nCÔNG DỤNG: \r\n- An toàn cho hệ tiêu hóa: Giàu đạm thủy phân giúp hạn chế tối đa tình trạng dị ứng.\r\n- Hấp thụ dưỡng chất tối ưu: Butyrate hỗ trợ hấp thụ dưỡng chất tối ưu.\r\n- Sức khỏe tiêu hóa: Prebiotic tự nhiên gia tăng lợi khuẩn, giúp hệ tiêu hóa khỏe mạnh.\r\n- Tăng cường miễn dịch: Astaxanthin tự nhiên giúp tăng cường hệ miễn dịch.\r\n- Giảm mùi chất thải: Chiết xuất cây ngọc giá (Yucca) giúp giảm mùi hôi của chất thải.\r\nHƯỚNG DẪN SỬ DỤNG:\r\n- Lượng thức ăn có thể được điều chỉnh dựa theo giống, cân nặng, mức độ hoạt động của chó để duy trì cân nặng lý tưởng.\r\n- Cung cấp nước sạch đầy đủ theo nhu cầu.\r\nHƯỚNG DẪN BẢO QUẢN\r\n- Bảo quản sản phẩm nơi khô ráo, thoáng mát và luôn đóng kín miệng bao sau khi cho ăn.', 56000, 88000, 9999, 'upload/thuoc-plus-bxuong-plus-do-choi-4b4b67b5-70f6-43b3-a96c-87807dfcf326.webp', 1, 1),
(7, 'Absolute Bites Thịt vịt rút xương sấy 130g dành cho thú cưng', 'TÊN SẢN PHẨM: Absolute Bites Thịt vịt rút xương sấy 130g dành cho thú cưng\r\n\r\nĐÓNG GÓI\r\n- Túi 130gr\r\n\r\nTHÀNH PHẦN:\r\n- 100% Thịt Vịt được sấy thăng hoa\r\n\r\nCÔNG DỤNG\r\n- Snack ăn vặt hoặc Phần Thưởng trong huấn luyện\r\n- Không chứa ngũ cốc và gluten, không có kháng sinh và chất bảo quản cực kì an toàn cho sức khỏe.\r\n- Được sấy thăng hoa, chất dinh dưỡng và hương vị được khóa chặt, tăng độ tươi ngon, giòn vị.\r\n\r\nHƯỚNG DẪN SỬ DỤNG:\r\n- Có thể cho ăn trực tiếp nguyên miếng\r\n- Xé nhỏ hoặc ngâm với một ít nước để mềm hơn.\r\n\r\nHƯỚNG DẪN BẢO QUẢN:\r\n- Bảo quản nơi khô ráo thoáng mát hoặc bảo quản trong tủ lạnh\r\n- Khóa kín miệng bao bì sau khi sử dụng để giữ hương vị và độ giòn.', 99000, 180000, 9999, 'upload/4-d7276549-ff66-44b9-9970-abd919983e5e.webp', 1, 1),
(8, 'Vịt Quay Natural Core Hàn Quốc 70g Cho Chó', 'TÊN SẢN PHẨM: Vịt Quay Natural Core Hàn Quốc\r\nKHỐI LƯỢNG: 70G\r\nVịt quay Natural Core là thực phẩm được làm từ những nguyên liệu chọn lọc, 100% thịt tươi, đạt tiêu chuẩn dành cho người nên an toàn và tốt cho sức khỏe. Snack Natural Core có nhiều lợi ích về dinh dưỡng và răng miệng của chó, như cung cấp nguồn protein cao, giúp trắng răng, ngăn ngừa viêm nướu và hôi miệng. Là sản phẩm cao cấp, bánh thưởng cho chó này không sử dụng chất tạo màu, GMO (chất biến đổi gen) và là món ăn vật tuyệt vời dành cho thú cưng của bạn.\r\nLỢI ÍCH:\r\nSử dụng nguồn nguyên liệu sạch đạt tiêu chuẩn dành cho người.\r\nThịt Vịt cung cấp collagen, protein và các vitamin cần thiết cho thú cưng.\r\nGiúp cải thiện sưc khoẻ răng miệng của thú cưng, loại bỏ vôi răng và mảng bám.\r\nCung cấp protein, duy trì cơ bắp.\r\nHƯỚNG DẪN SỬ DỤNG:\r\nCho chó ăn trực tiếp. Bạn có thể dùng snack cho chó để huấn luyện, khen thưởng, nuôi dưỡng hoặc làm tráng miệng cho chú chó của bạn.\r\n*LƯU Ý:\r\nChọn snack cho chó phù hợp với kích thước, tuổi, sức khoẻ và khẩu vị của chú chó.\r\nGiới hạn lượng snack cho chó mỗi ngày để tránh gây béo phì, tiêu chảy hoặc dị ứng cho chú chó.\r\nKết hợp snack cho chó với các loại thức ăn khác để cung cấp đầy đủ dinh dưỡng cho chú chó.\r\nQuan sát phản ứng của chú chó khi ăn snack và điều chỉnh lượng và loại snack cho phù hợp.', 60000, 85000, 9999, 'upload/z4901246248489-57550102a26b777937ad36c4ac83b2ab-1700548677855.webp', 0, 1),
(9, 'CANXI NANO CHO CHÓ', 'Tác dụng: \r\n\r\nBổ sung canxi, chống hạ bàn, cụp tai chó con, chó đang phát triển. Chống loãng xương, mềm xương, chó già,\r\n\r\nTốt trong thời kỳ mang thai và cho con bú.\r\n\r\nPhòng bại liệt, tụt canxi ở chó mẹ trước và sau sinh.\r\n\r\nCách dùng:\r\n\r\n* Dùng 1-2 viên/10kg thể trọng\r\n\r\nTrường hợp điều trị: dùng gấp đôi.\r\n\r\nHũ 150 viên\r\n\r\nXuât xứ: Việt nam', 200000, 250000, 9999, 'upload/screen-shot-2022-05-04-at-13-27-07.webp', 0, 1),
(10, 'Tellme Gà sấy khô cho chó 60gr', 'Thực phẩm dành cho chó\r\n\r\n100% ức gà tươi\r\nGiàu Protein tốt cho cơ\r\nTốt cho răng\r\nMón ăn thơm ngon, an toàn, bổ dưỡng phù hợp với thói quen ăn vặt.', 40000, 65000, 9999, 'upload/ga-kho-cho-moi-1.webp', 0, 1),
(11, 'Bánh Quy Thưởng Luscious Cho Chó 220G', 'Bánh xốp dinh dưỡng cho chó cao cấp Luscious hộp 220gr nhiều hình cầu vồng thơm ngon vị bơ sữa\r\nTHÔNG TIN SẢN PHẨM Bánh thưởng:\r\n- Thương hiệu: Luscious\r\n- Thành phần: Được làm từ mầm lúa mì và trứng gà tươi, trà xanh chất lượng\r\n- Quy cách đóng gói: 220gr\r\n- Hạn sử dụng: tháng kể từ ngày sản xuất in trên bao bì\r\nPhù hợp cho tất cả các giống chó trên 3 tháng tuổi\r\n\r\nƯU ĐIỂM Bánh thưởng:\r\nCó thể sử dụng như thức ăn dặm, thức ăn dặm huấn luyện\r\nKích thích thèm ăn, ăn ngon hơn\r\nPhù hợp với chó nhỏ mới tập gặm, mọc răng...\r\n- Được làm từ mầm lúa mì và trứng gà tươi, trà xanh chất lượng tốt, có hiệu quả làm sạch răng rất tốt, phòng chống vôi răng hình thành.\r\n- Sản phẩm có tác dụng bổ sung các chất dinh dưỡng cần thiết cho chó phát triển khỏe mạnh.\r\n- Nguyên liệu an toàn, không gây hại, không chất bảo quản.', 40000, 60000, 9999, 'upload/12382637000-742363590-jpeg.webp', 0, 1),
(12, 'Pate cho Chó Smartheart dạng lon 400gr', 'TÊN SẢN PHẨM: Pate cho Chó Smartheart dạng lon 400gr\nĐÓNG GÓI: 1 lon x 400gr\nHƯƠNG VỊ \n+ Vị bò và cừu\n+ Vị gà và gan\nCÔNG DỤNG\n- Bổ sung năng lượng và vitamin cần thiết cho cơ thể\n- Giúp tăng thể trọng cho chó\n- Giúp cho thông minh và phát triển\n- Tiết kiệm thời gian cho chủ chó khi cần ra ngoài và để chó ở nhà 1 mình\n- Tiện lợi sử dụng\nSmarheart là dòng sản phẩm quen thuộc của các chủ nhà Việt Nam khi chọn thức ăn cho chó cưng của mình.\nPate cho chó với chất lượng và nguồn dinh dưỡng đặc biệt giúp những chú chú của bạn phát triển một cách toàn diện.', 20000, 38000, 9999, 'upload/forbis-100ml-6.webp', 1, 1),
(13, 'Pate Morando Professional cho Mèo Pate Ý Miglior Gatto cho mèo mọi lứa tuổi 400gr', 'TÊN SẢN PHẨM: Pate dành cho Mèo mẹ và Mèo con Royal Canin Mother & Babycat Lon 195g\r\n\r\nĐÓNG GÓI: 1 lon * 195gr\r\n\r\nXUẤT XỨ: Pháp\r\n\r\nTHÀNH PHẦN: Nước, gan gà, gà, phụ phẩm từ thịt gà, phụ phẩm thịt heo, gluten lúa mì, cellulose, tinh bột ngô biến đổi, huyết tương heo, hương tự nhiên, dầu thực vật, bột gạo, dầu cá, men thủy phân, canxi cacbonat, carrageenan, natri tripolyphosphate, guar gum, kali photphat, taurine, vitamin [DL-alpha tocopherol acetate (nguồn vitamin E), L-ascorbyl-2-polyphosphate (nguồn vitamin C), thiamine mononitrate (vitamin B1), bổ sung niacin, biotin, D-calcium pantothenate, bổ sung riboflavin, pyridoxin hydrochloride (vitamin B6), axit folic, bổ sung vitamin B12, bổ sung vitamin D3], choline clorua, clorua kali, khoáng chất vi lượng [zinc proteinate, zinc oxide, ferrous sulfate, sunfat đồng, oxit mangan, natri selenit, canxi iodat], chiết xuất vạn thọ (Tagetes erecta L.), oxit magiê, caroten.\r\n\r\nCÔNG DỤNG:  \r\n- Khởi đầu hoàn hảo đối với mèo con, kết cấu mousse của MOTHER & BABYCAT dạng pate ướt giúp mèo hỗ quá trình chuyển tiếp từ thức ăn mềm sang thức ăn cứng.\r\n- Chế độ dinh dưỡng này phù hợp với nhu cầu tự nhiên của mèo. Công thức phù hợp với Macronutritional tối ưu theo bản năng của mèo con.\r\n- Hỗ trợ hệ miễn dịch MOTHER & BABYCAT giúp hỗ trợ sức đề kháng tự nhiên của mèo con.\r\n\r\nHƯỚNG DẪN SỬ DỤNG: xem trên bao bì sản phẩm.\r\n\r\nHƯỚNG DẪN BẢO QUẢN: Bảo quản nơi khô ráo, tránh tiếp xúc trực tiếp ánh nắng mặt trời.', 50000, 73000, 9999, 'upload/thie-t-ke-chu-a-co-te-n-15.webp', 1, 2),
(14, 'Xốt Mèo Snappy Tom 85G', 'Trọng lượng: 85g\r\n\r\n Công dụng:\r\n\r\n+ Thức ăn hỗn hợp hỗ trợ hoàn chỉnh cho Mèo\r\n\r\n+ Cung cấp những chất dinh dưỡng thiết yếu cho Mèo phát triễn và hoạt đông tốt\r\n\r\n+ Vitamin E và agar\r\n\r\nLiều lượng sử dụng: 1 1 ngày, chia làm 2-3 lần. Có thể điều chỉnh liều lượng tùy theo độ tuổi, cân nặng và mức độ hoạt động của Mèo nhà bạn\r\n\r\nHướng dẫn bảo quản : Bảo quản ở ngăn mát tủ lạnh sau khi mở hộp ( Nên sử dụng tối đa 3 ngày kể từ này mở hộp để đảm bảo sức khỏe cho Mèo)', 10000, 17000, 9999, 'upload/thie-t-ke-chu-a-co-te-n-12.webp', 0, 2),
(15, 'Pate Aatas Cat 80g cho mèo', 'Thức ăn đóng hộp cho mèo Aatas là một cách tuyệt vời để giới thiệu sự đa dạng trong chế độ ăn của mèo, ngoài việc cung cấp một nguồn nước thay thế để hydrat hóa lành mạnh!\r\n\r\n \r\n\r\nThưởng thức sự tươi ngon ngon lành của cá ngừ, được đánh bắt theo cách thân thiện với môi trường và đứng đầu với những miếng Surimi nấu chín chậm.\r\n\r\n \r\n\r\nAatas Cat Tantalizing Tuna series là thức ăn bổ sung cho thú cưng dành cho mèo trưởng thành.Cho ăn cùng với Aatas Cat Dry Food, cho chế độ ăn uống đầy đủ và cân bằng', 15000, 25000, 9999, 'upload/aatas-cat-wet-sardine-1-1536x1182.webp', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MatKhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `Email`, `MatKhau`) VALUES
(4, 'nhanvien@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'sostien0409@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'lamngochan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'trongnhan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'tuananh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'haminhchien@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'leducnhuan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(15, 'kimduongtuan@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DonHangID` (`DonHangID`),
  ADD KEY `SanPhamID` (`SanPhamID`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `KhachHangID` (`KhachHangID`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `KhachHangID` (`KhachHangID`),
  ADD KEY `SanPhamID` (`SanPhamID`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TaiKhoanID` (`TaiKhoanID`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TaiKhoanID` (`TaiKhoanID`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `KhachHangID` (`KhachHangID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DanhMucID` (`DanhMucID`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`DonHangID`) REFERENCES `donhang` (`ID`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`SanPhamID`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`KhachHangID`) REFERENCES `khachhang` (`ID`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`KhachHangID`) REFERENCES `khachhang` (`ID`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`SanPhamID`) REFERENCES `sanpham` (`ID`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`TaiKhoanID`) REFERENCES `taikhoan` (`ID`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`TaiKhoanID`) REFERENCES `taikhoan` (`ID`);

--
-- Các ràng buộc cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_ibfk_1` FOREIGN KEY (`KhachHangID`) REFERENCES `khachhang` (`ID`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`DanhMucID`) REFERENCES `danhmuc` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
