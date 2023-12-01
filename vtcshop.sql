-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 03:37 PM
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
-- Cơ sở dữ liệu: `vtcshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_baiviet`
--

CREATE TABLE `tb_baiviet` (
  `id_baiviet` int(10) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `img_baiviet` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(11) NOT NULL,
  `img_banner` varchar(255) NOT NULL,
  `ten_banner` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `id_binhluan` int(10) NOT NULL,
  `noi_dung_binhluan` text NOT NULL,
  `ngay_binh_luan` date NOT NULL,
  `id_sanpham` int(10) NOT NULL,
  `id_taikhoan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chitietdonhang`
--

CREATE TABLE `tb_chitietdonhang` (
  `id_chitietdonhang` int(10) NOT NULL,
  `id_donhang` int(10) NOT NULL,
  `id_sanpham` int(10) NOT NULL,
  `ngay_dat_hang` datetime NOT NULL DEFAULT current_timestamp(),
  `ten_sanpham` varchar(255) NOT NULL,
  `img_sanpham` varchar(255) NOT NULL,
  `soluong` int(10) NOT NULL,
  `thanh_tien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_chitietdonhang`
--

INSERT INTO `tb_chitietdonhang` (`id_chitietdonhang`, `id_donhang`, `id_sanpham`, `ngay_dat_hang`, `ten_sanpham`, `img_sanpham`, `soluong`, `thanh_tien`) VALUES
(32, 43, 7, '2023-12-01 19:59:59', 'OPPO Find N3 Flip 12GB 256GB', '', 1, 13000000),
(33, 43, 41, '2023-12-01 19:59:59', 'iPad Pro 11 inch 2022 M2 Wifi 128GB I Chính hãng Apple Việt Nam', '', 1, 195900),
(34, 43, 40, '2023-12-01 19:59:59', 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds FE', '', 1, 13900000),
(35, 44, 6, '2023-12-01 20:13:01', 'iPhone 15 Pro Max 256GB | Chính hãng VN/A', '', 1, 31990000),
(36, 45, 7, '2023-12-01 21:29:09', 'OPPO Find N3 Flip 12GB 256GB', '', 2, 26000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id_danhmuc` int(10) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL,
  `mota_danhmuc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id_danhmuc`, `ten_danhmuc`, `mota_danhmuc`) VALUES
(1, 'Iphone', 'các loại sản phẩm iphone'),
(2, 'Samsung', 'samsung'),
(3, 'Oppo', 'cas loai oppo'),
(4, 'Tai Nghe', 'Các loại tai nghe'),
(5, 'Xiaomi ', 'Xiaomi '),
(6, 'Nokia', 'Nokia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `id_donhang` int(10) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `dia_chi` text NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `pttt` tinyint(4) NOT NULL COMMENT '	1. Thanh toán khi nhận hàng 2. Chuyển khoản	',
  `ngay_dat_hang` datetime NOT NULL DEFAULT current_timestamp(),
  `id_trangthai_dh` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_donhang`
--

INSERT INTO `tb_donhang` (`id_donhang`, `id_taikhoan`, `hovaten`, `dia_chi`, `sdt`, `email`, `tongtien`, `pttt`, `ngay_dat_hang`, `id_trangthai_dh`) VALUES
(43, 2, 'Nguyễn Bá Chính', 'Đại lai', '0987449745', 'bachinh@gmail.com', 43159900, 1, '2023-12-01 19:59:59', 1),
(44, 2, 'Nguyễn Bá Chính', 'Đại lai', '0987449745', 'bachinh@gmail.com', 32020000, 1, '2023-12-01 20:13:01', 2),
(45, 2, 'Nguyễn Bá Chính', 'Đại lai', '0987449745', 'bachinh@gmail.com', 26030000, 1, '2023-12-01 21:29:09', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hethong`
--

CREATE TABLE `tb_hethong` (
  `id_logo` int(10) NOT NULL,
  `img_logo` varchar(255) NOT NULL,
  `ten_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lienhe`
--

CREATE TABLE `tb_lienhe` (
  `id_lienhe` int(10) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi_lienhe` text NOT NULL,
  `ngay_gui` date NOT NULL,
  `noi_dung_lienhe` text NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `id_trangthai` int(10) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_lienhe`
--

INSERT INTO `tb_lienhe` (`id_lienhe`, `hovaten`, `sdt`, `email`, `dia_chi_lienhe`, `ngay_gui`, `noi_dung_lienhe`, `trang_thai`, `id_trangthai`) VALUES
(2, 'nguyễn bá chính', 987449745, 'bachinh456@gmail.com', 'hanoi', '2023-11-20', 'điện thoải chất lượng cao', '', 2),
(11, 'Hoàng', 915832041, 'hoangpham@gmail.com', 'Bắc Ninh', '2023-11-25', 'Điện thoại ngon bổ rẻ', '', 1),
(20, 'Bá Chính 1', 9877313, 'bachinh@gmail.com', 'đâ', '2023-11-25', 'bá chính', '', 2),
(21, 'HJoan', 12313123, 'da@gmail.com', '313', '2023-11-25', 'dâdadad', '', 1),
(22, 'Tuấn', 98821313, 'tuanvan@gmail.com', 'Thanh Hóa', '2023-11-25', 'Điện thoại xịn </3', '', 2),
(23, 'Tien Vinh', 921312312, 'tienvinh@gmail.com', 'ada', '2023-11-26', 'dada', '', 1),
(24, 'thanhduong', 2147483647, 'thanhduong@gmail.com', 'da', '2023-11-30', 'dad', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_role`
--

CREATE TABLE `tb_role` (
  `id_vaitro` int(10) NOT NULL,
  `ten_vaitro` varchar(255) NOT NULL,
  `mota_vaitro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_role`
--

INSERT INTO `tb_role` (`id_vaitro`, `ten_vaitro`, `mota_vaitro`) VALUES
(1, 'Admin', 'quan tri crud admin'),
(2, 'Khách hàng', 'khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id_sanpham` int(10) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `img_sanpham` varchar(255) NOT NULL,
  `mota_sanpham` text NOT NULL,
  `mau_sanpham` varchar(255) NOT NULL,
  `gia_ban_dau` double(10,2) NOT NULL DEFAULT 0.00,
  `gia_khuyen_mai` double(10,2) NOT NULL DEFAULT 0.00,
  `dung_luong` varchar(255) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `chien_dich` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `id_danhmuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id_sanpham`, `ten_sanpham`, `img_sanpham`, `mota_sanpham`, `mau_sanpham`, `gia_ban_dau`, `gia_khuyen_mai`, `dung_luong`, `so_luong`, `chien_dich`, `trang_thai`, `id_danhmuc`) VALUES
(6, 'iPhone 15 Pro Max 256GB | Chính hãng VN/A', 'iphone-15-pro-max_3.webp', '                                                                                                    Mới, đầy đủ phụ kiện từ nhà sản xuất\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple: CareS\r\nGiá sản phẩm đã bao gồm VAT                                                                                                    ', 'Titan Xanh', 32000000.00, 31990000.00, '256GB', 11, 'sale_top', 'còn', 1),
(7, 'OPPO Find N3 Flip 12GB 256GB', 'find-n3-flip-vang_1.webp', '                                                                                Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nMáy, cáp, sách hướng dẫn, que chọc sim\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT                                                                                ', 'Vàng', 22990000.00, 13000000.00, '256GB', 0, 'sale_top', 'sold', 3),
(8, 'Tai nghe chụp tai chống ồn Apple AirPods Max | Chính hãng Apple Việt Nam', 'group_171_3.webp', '                                                             Hàng chính hãng Apple Việt Nam, Mới\r\nTai nghe AirPods Max, Smart case, Cáp Lightning to USB-C, Sách hướng dẫn\r\nBảo hành 12 tháng chính hãng 1 đổi 1 trong 15 ngày nếu có lỗi phần cứng từ NSX. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT                                                                                ', 'Trắng', 13000000.00, 12000000.00, '0', 13, 'sale_top', '', 4),
(9, 'Samsung Galaxy S23 Ultra 256GB', 'samsung-galaxy-s23-ultra.webp', '                                                            Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nMáy, cáp, sách hướng dẫn, que chọc sim\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất.\r\nGiá sản phẩm đã bao gồm vat                                                      ', 'Đen', 31990000.00, 22490000.00, '256GB', 8, 'sale_top', '', 2),
(12, 'Samsung Galaxy S23 Ultra 256GB', 's23-ultra-xanh-1.webp', '                                        Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nMáy, cáp, sách hướng dẫn, que chọc sim\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT                                        ', 'Đen', 3199000.00, 2249000.00, ' 256GB', 2, 'hot_deal', '', 2),
(13, 'Xiaomi Redmi Note 12 8GB 128GB', 'gtt_7766_1_3.webp', '                                                            Trải nghiệm hình ảnh mượt mà và liền mạch nhờ tốc độ làm mới cao 120Hz.\r\nHiệu năng vượt trội và được tăng cường với chip xử lý Snapdragon® 685 6nm mạnh mẽ.\r\nNăng lượng cho cả ngày dài nhờ vào viên pin lên đến 5000mAh đi kèm sạc nhanh 33W\r\nBắt trọn mọi khoảnh khắc của bạn với bộ 3 camera 50MP.                                                            ', 'Xanh dương', 5790000.00, 4790000.00, '128GB', 4, 'hot_deal', '', 5),
(14, 'iPhone 15 128GB | Chính hãng VN/A', 'iphone-15-plus_1__1.webp', '                                        ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế thời thượng và bền bỉ - Mặt lưng kính được pha màu xu hướng cùng khung viền nhôm bền bỉ\r\nDynamic Island hiển thị linh động mọi thông báo ngay lập tức giúp bạn nắm bắt mọi thông tin\r\nChụp ảnh đẹp nức lòng - Camera chính 48MP, Độ phân giải lên đến 4x và Tele 2x chụp chân dung hoàn hảo\r\nPin dùng cả ngày không lắng lo - Thời gian xem video lên đến 20 giờ và sạc nhanh qua cổng USB-C tiện lợi\r\nCải tiến hiệu năng vượt bậc - A16 Bionic mạnh mẽ giúp bạn cân mọi tác vụ dù có yêu cầu đồ hoạ cao                                        ', 'Hồng', 22990000.00, 21990000.00, '128GB ', 6, 'hot_deal', '', 1),
(15, 'iPhone 15 Pro Max 521GB | Chính hãng VN/A', 'iphone-15-pro-max_3.webp', '                    Thiết kế khung viền từ titan chuẩn hàng không vũ trụ - Cực nhẹ, bền cùng viền cạnh mỏng cầm nắm thoải mái\r\nHiệu năng Pro chiến game thả ga - Chip A17 Pro mang lại hiệu năng đồ họa vô cùng sống động và chân thực\r\nThoả sức sáng tạo và quay phim chuyên nghiệp - Cụm 3 camera sau đến 48MP và nhiều chế độ tiên tiến\r\nNút tác vụ mới giúp nhanh chóng kích hoạt tính năng yêu thích của bạn                    ', 'Titan', 34990000.00, 33490000.00, '521GB ', 3, 'hot_deal', '', 1),
(16, 'iPhone 14 Pro Max 128GB | Chính hãng VN/A', 'iphone-14-pro_2__5.webp', '                                        iPhone 14 Pro Max sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic. Bên cạnh đó máy còn sở hữu nhiều nâng cấp về camera với cụm camera sau 48MP, camera trước 12MP dùng bộ nhớ RAM 6GB đa nhiệm vượt trội. Cùng phân tích chi tiết thông số siêu phẩm này ngay sau đây.                                        ', 'Tím', 29990000.00, 27390000.00, '128GB ', 7, 'hot_deal', '', 1),
(17, 'Xiaomi 13T Pro 5G (12GB - 512GB) - Chỉ có tại CellphoneS', 'xiaomi-13-pro-thumb-xanh-la9.webp', '                                        Nhiếp ảnh chuyên ngiệp, nắm giữ tuyệt tác trong tầm tay - Cụm camera đến, ống kính Leica với 2 phong cách ảnh\r\nHiệu năng bất chấp mọi tác vụ - Bộ vi xử lý Dimensity 9200+ Ultra mạnh mẽ cùng RAM 12GB cho đa nhiệm mượt mà\r\nNăng lượng bất tận cả ngày - Pin 5000mAh cùng sạc nhanh 120W, sạc đầy chỉ trong 19 phút\r\nMàn hình sáng rực rỡ, cuộn lướt thật mượt mà - Màn hình 144hz cùng công nghệ AMOLED CrystalRes                                        ', 'Xanh Dương', 13000000.00, 11000000.00, '12GB - 512GB', 3, 'hot_deal', '', 5),
(18, 'Samsung Galaxy Z Flip5 512GB', 'samsung-galaxy-z-flip-5-256gb_1_5.webp', '                    Thần thái nổi bật, cân mọi phong cách- Lấy cảm hứng từ thiên nhiên với màu sắc thời thượng, xu hướng\r\nThiết kế thu hút ánh nhìn - Gập không kẽ hỡ, dẫn đầu công nghệ bản lề Flex\r\nTuyệt tác selfie thoả sức sáng tạo - Camera sau hỗ trợ AI xử lí cực sắc nét ngay cả trên màn hình ngoài\r\nBền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IP68 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước                    ', 'Xanh lá', 29990000.00, 2590000.00, '512GB', 11, 'hot_deal', '', 2),
(19, 'OPPO Find N3 16GB 512GB', 'find_n3_-_combo_product_-_gold.webp', '                    ĐẶC ĐIỂM NỔI BẬT\r\nBậc thầy thiết kế, siêu mỏng nhe - Mỏng chỉ 239g, nhẹ chỉ 5.8mm với nếp gấp tàng hình\r\nRực rõ mọi màn hình hiển thị - Kích thước lên đến 7.8mm, độ phân giải 2K+ cùng tần số quét 120Hz mượt mà\r\nBậc thầy nhiếp ảnh - 3 camera hàng đầu đến 64MP kết hợp cùng đa dạng chế độ chụp hoàn hảo\r\nNâng cao hiệu suất sử dụng - Chip MediaTek Dimensity 9200 5G mạnh mẽ cùng hàng loạt tính năng đa nhiệm thông tinh                    ', 'vàng', 44990000.00, 40990000.00, '512GB', 3, 'hot_deal', '', 3),
(20, 'iPhone 14 128GB | Chính hãng VN/A', 'iphone-14_1.webp', '                    Tuyệt đỉnh thiết kế, tỉ mỉ từng đường nét - Nâng cấp toàn diện với kiểu dáng mới, nhiều lựa chọn màu sắc trẻ trung\r\nNâng tầm trải ngiệm giải trí đỉnh cao - Màn hình 6,1\"\" cùng tấm nền OLED có công nghệ Super Retina XDR cao cấp\r\nChụp ảnh chuyên nghiệp hơn - Cụm 2 camera 12 MP đi kèm nhiều chế độ và chức năng chụp hiện đại\r\nHiệu năng hàng đầu thế giới - Apple A15 Bionic 6 nhân xử lí nhanh, ổn định                    ', 'vàng', 22990000.00, 18390000.00, '128GB ', 1, 'hot_deal', '', 1),
(21, 'iPhone 12 128GB | Chính hãng VN/A', 'iphone-12-128gb_2.webp', '                                        Mạnh mẽ, siêu nhanh với chip A14, RAM 4GB, mạng 5G tốc độ cao\r\nRực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision\r\nChụp đêm ấn tượng - Night Mode cho 2 camera, thuật toán Deep Fusion, Smart HDR 3\r\nBền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield                                        ', 'Xanh', 17990000.00, 14190000.00, '128GB', 4, 'sale', '', 1),
(22, 'iPhone 13 Pro 256GB | Chính hãng VN/A', '3_51_1_4.webp', '                    Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao\r\nKhông gian hiển thị sống động - Màn hình 6.1\" Super Retina XDR độ sáng cao, sắc nét\r\nTrải nghiệm điện ảnh đỉnh cao - Cụm 3 camera 12MP, hỗ trợ ổn định hình ảnh quang học\r\nTối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút                    ', 'Xanh dương', 26990000.00, 24490000.00, '256GB ', 3, 'sale', '', 1),
(23, 'iPhone 14 Plus 128GB | Chính hãng VN/A', 'iphone-14-plus_1_.webp', '                                        Trải nghiệm thị giác ấn tượng - Màn hình lớn 6.7\" sắc nét với công nghệ Super Retina XDR\r\nSử dụng lâu dài với viên pin lớn giúp phát video liên tục lên tới 26 giờ\r\nTuyệt đỉnh thiết kế, tỉ mỉ từng đường nét - Nâng cấp toàn diện với kiểu dáng mới, nhiều lựa chọn màu sắc trẻ trung\r\nHiệu năng hàng đầu thế giới - Apple A15 Bionic 6 nhân xử lí nhanh, ổn định                                        ', 'Xanh', 25000000.00, 23500000.00, '128GB ', 1, 'sale', '', 1),
(24, 'Nokia C32 4GB 128GB', 'nokia-c32_3_.webp', '                                        Thiết kế hiện đại 2 mặt kính tạo cảm giác cao cấp bền vững theo thời gian\r\nDung lượng pin 5050mAh cùng công nghệ tiết kiệm pin AI cho thời gian sử dụng đến 3 ngày\r\nCamera kép AI 50MP giúp ghi lại mọi khoảnh khắc trong cuộc sống\r\nMàn hình giọt nước siêu rộng 6.5” độ phân giải HD+ cho hình ảnh thể hiện rõ nét                                        ', 'Xanh Lá', 32900000.00, 28900000.00, '128GB', 4, 'sale', '', 6),
(25, 'Nokia C21 Plus 2GB 32GB', 'nokia-c21-plus-600x600_6.webp', '                    Thiết kế tinh giản hiện đại, bền bỉ chắc chắn - Chất liệu khung nguyên khối và nhựa cứng\r\nGiải trí sắc nét, sống động từng chi tiết - Màn hình HD+ 6.52 inches\r\nCấu hình ổn định trong phân khúc - Chip Unisoc SC9863A, RAM 2GB\r\nBắt trọn khoảnh khắc - Camera kép 13MP chụp ảnh chi tiết, camera trước 5MP                    ', 'Xanh', 23900000.00, 15400000.00, '32GB', 2, 'sale', '', 6),
(26, 'Nokia 5710 XpressAudio', 'nokia-5701.webp', '                                        Loa ngoài to rõ cho âm thanh sống động, nghe radio tiện lợi không cần kết nối tai nghe\r\nMàn hình lớn 2.4’ cùng thiết kế ấn tượng độc đáo với 2 màu sắc kết hợp tạo phong cách nổi bật thu hút\r\nCamera kèm đèn flash dễ dàng bắt trọn mọi khoảnh khắc bất ngờ\r\nKết nối 4G vượt trội cùng dịch vụ thoại chất lượng cao VoLTE1\r\nChất lượng bền bỉ chuẩn Châu Âu. Vô tư giải trí với thời lượng pin dài ngày                                        ', 'Đen/đỏ', 17900000.00, 17600000.00, '12GB', 5, 'sale', '', 6),
(27, 'Samsung Galaxy Note 20 Ultra 5G 256GB', 'samsung-galaxy-note-20-ultra-5g.webp', '                    Sang trọng, cao cấp - Màu sắc độc đáo và cuốn hút\r\nChụp ảnh chuyên nghiệp - Bộ 3 camera hỗ trợ Zoom xa đến 30X\r\nGhi chú nhanh chóng, chính xác với bút S- Pen thế hệ mới\r\nChơi game đỉnh cao - Exynos 990 7nm mạnh mẽ, hiệu năng xử lý vượt trội                    ', 'Vàng đồng', 3299000.00, 31990000.00, '256GB', 4, 'sale', '', 2),
(28, 'Samsung Galaxy S21 FE 8GB 128GB', 'sm-g990_s21fe_backfront_lv.webp', '                    Thiết kế cao cấp - Vẻ đẹp tinh tế cùng nhiều màu sắc thời thượng\r\nTrọn vẹn từng khung hình - Màn hình 6.4\"\", độ sáng cao cùng tần số quét 120Hz\r\nSắc nét từng khung hình - Bộ ba camera 12MP, hỗ trợ quay video 4K, chống rung điện từ EIS\r\nMượt mà mọi tác vụ - Chip Exynos 2100 tiến trình 5nm mạnh mẽ                    ', 'Tím', 16990000.00, 9990000.00, '128GB', 12, 'sale', '', 2),
(29, 'Samsung Galaxy Z Flip4 128GB', 'samsung-galaxy-z-flip-4.webp', '                    Ngoại hình thời trang - cầm nắm cực sang với thiết kế gập vỏ sò độc đáo\r\nCông nghệ màn hình hàng đầu đến từ Samsung - 6.7 inch, tấm nền Dynamic AMOLED 2X\r\nTrang bị camera chất lượng - Bộ đôi camera có cùng độ phân giải 12 MP, chống rung, chụp đêm\r\nHiệu năng mạnh mẽ đến từ dòng chip cao cấp của Qualcomm - Snapdragon 8+ Gen 1                    ', 'Đen', 23990000.00, 11190000.00, '128GB', 3, 'sale', '', 2),
(30, 'Samsung Galaxy M34 5G 8GB 128GB', 'samsung-galaxy-m34-5g_1_2.webp', '                    ĐẶC ĐIỂM NỔI BẬT\r\nNâng cao hiệu suất của bạn với bộ xử lý cực nhanh Exynos 1280 - 5nm.\r\nCông nghệ Voice Focus - Cuộc gọi video và âm thanh của bạn luôn được rõ ràng hơn.\r\nPin cực khỏe 6000mAh cho bạn thoải mái sử dụng cả ngày dài.\r\nThiết kế sang trọng, sở hữu những gam màu thời thượng khơi dậy những ngày mới của bạn                    ', 'Bạc', 7990000.00, 6690000.00, '128GB', 12, 'noi_bat', '', 2),
(31, 'Xiaomi Redmi Note 12 8GB 128GB', 'gtt_7766_3__1_5.webp', '                    Trải nghiệm hình ảnh mượt mà và liền mạch nhờ tốc độ làm mới cao 120Hz.\r\nHiệu năng vượt trội và được tăng cường với chip xử lý Snapdragon® 685 6nm mạnh mẽ.\r\nNăng lượng cho cả ngày dài nhờ vào viên pin lên đến 5000mAh đi kèm sạc nhanh 33W\r\nBắt trọn mọi khoảnh khắc của bạn với bộ 3 camera 50MP.                    ', 'Xanh lá', 57900000.00, 47900000.00, '128GB', 1, 'noi_bat', '', 5),
(32, 'Samsung Galaxy Z Flip5 256GB', 'samsung-galaxy-z-flip-5-256gb_1_4.webp', '                                        Thần thái nổi bật, cân mọi phong cách- Lấy cảm hứng từ thiên nhiên với màu sắc thời thượng, xu hướng\r\nThiết kế thu hút ánh nhìn - Gập không kẽ hỡ, dẫn đầu công nghệ bản lề Flex\r\nTuyệt tác selfie thoả sức sáng tạo - Camera sau hỗ trợ AI xử lí cực sắc nét ngay cả trên màn hình ngoài\r\nBền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IP68 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước                                        ', 'Xanh Lá', 2599000.00, 1669000.00, '256GB', 4, 'noi_bat', '', 2),
(33, 'iPhone 14 Pro Max 128GB | Chính hãng VN/A', 'iphone-14-pro_2__5.webp', '                                        Màn hình Dynamic Island - Sự biến mất của màn hình tai thỏ thay thế bằng thiết kế viên thuốc, OLED 6,7 inch, hỗ trợ always-on display\r\nCấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic\r\nLàm chủ công nghệ nhiếp ảnh - Camera sau 48MP, cảm biến TOF sống động\r\nPin liền lithium-ion kết hợp cùng công nghệ sạc nhanh cải tiến                                        ', 'Tím', 29990000.00, 26590000.00, '128GB ', 12, 'noi_bat', '', 1),
(34, 'iPhone 13 128GB | Chính hãng VN/A', 'iphone-13_2_.webp', '                    Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao\r\nKhông gian hiển thị sống động - Màn hình 6.1\" Super Retina XDR độ sáng cao, sắc nét\r\nTrải nghiệm điện ảnh đỉnh cao - Camera kép 12MP, hỗ trợ ổn định hình ảnh quang học\r\nTối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút                    ', 'hồng', 18990000.00, 15790000.00, '128GB ', 12, 'noi_bat', '', 1),
(35, 'iPhone XR 64GB I Chính hãng VN/A', 'apple-iphone-xr-64-gb-chinh-hang-vn_3_.webp', '                    Thiết kế cao cấp tinh tế - 2 mặt kính, khung viền kim loại\r\nHình ảnh sắc nét, màu sắc chân thực với màn hình Retina, công nghệ True Tone.\r\nChơi game thả ga với chip A12 Bionic 6 nhân, RAM 3GB\r\nÂm thanh lớn, sống động với 2 loa kép\r\nChụp ảnh xóa phông chuyên nghiệp chỉ với 1 camera đơn 12MP                    ', 'Đen', 11990000.00, 10990000.00, '64GB ', 1, 'noi_bat', '', 1),
(36, 'iPhone 15 Pro Max 256GB | Chính hãng VN/A', 'iphone-15-pro-max_3.webp', '                                        iPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc. Khả năng chụp ảnh đỉnh cao của iPhone 15 bản Pro Max đến từ camera chính 48MP, camera UltraWide 12MP và camera telephoto có khả năng zoom quang học đến 5x. Bên cạnh đó, iPhone 15 ProMax sử dụng chip A17 Pro mới mạnh mẽ. Xem thêm chi tiết những điểm nổi bật của sản phẩm qua thông tin sau!                                        ', 'Titan Tự nhiên', 34990000.00, 32990000.00, '256GB ', 12, 'noi_bat', '', 1),
(37, 'iPhone 13 Pro 1TB | Chính hãng VN/A', '1_66_9.webp', '                                        ĐẶC ĐIỂM NỔI BẬT\r\nHiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao\r\nKhông gian hiển thị sống động - Màn hình 6.1\" Super Retina XDR độ sáng cao, sắc nét\r\nTrải nghiệm điện ảnh đỉnh cao - Cụm 3 camera 12MP, hỗ trợ ổn định hình ảnh quang học\r\nTối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút                                        ', 'Vàng', 26767000.00, 24567000.00, '1TB ', 3, 'noi_bat', '', 1),
(38, 'iPhone 12 mini 64GB I Chính hãng VN/A', 'iphone-12-mini_1.webp', '                    Mạnh mẽ, siêu nhanh với chip A14, RAM 4GB, mạng 5G tốc độ cao\r\nRực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision\r\nChụp đêm ấn tượng - Night Mode cho 2 camera, thuật toán Deep Fusion, Smart HDR 3\r\nBền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield                    ', 'Xanh dương', 14990000.00, 9990000.00, '64GB ', 12, 'noi_bat', '', 1),
(39, 'Tai nghe Bluetooth Apple AirPods Pro 2 2023 USB-C | Chính hãng Apple Việt Nam', 'apple-airpods-pro-2-usb-c_1_.webp', '                                        Tích hợp chip Apple H2 mang đến chất âm sống động cùng khả năng tái tạo âm thanh 3 chiều vượt trội\r\nCông nghệ Bluetooth 5.3 kết nối ổn định, mượt mà, tiêu thụ năng lượng thấp, giúp tiết kiệm pin đáng kể\r\nChống ồn chủ động loại bỏ tiếng ồn hiệu quả gấp đôi thế hệ trước, giúp nâng cao trải nghiệm nghe nhạc\r\nChống nước chuẩn IPX54 trên tai nghe và hộp sạc, giúp bạn thỏa sức tập luyện không cần lo thấm mồ hôi                                        ', 'Trắng', 6190000.00, 5990000.00, '', 12, 'top_hot', '', 4),
(40, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds FE', 'samsung-galaxy-buds-fe.webp', '                                        Thiết kế củ tai nghe êm ái, vừa vặn giúp phù hợp với mọi dáng tai, tạo cảm giác đeo êm ái\r\nChống ồn chủ động cho bạn làm chủ âm thanh, không bị làm phiền bởi tiếng ồn bên ngoài\r\nĐàm thoại đỉnh cao với 3 micro có khả năng thu âm và truyền giọng nói chính xác, rõ ràng\r\nTrải nghiệm không gián đoạn với thời lượng nghe nhạc lên đến 30 giờ chỉ với một lần sạc                                        ', 'Đen', 19900000.00, 13900000.00, '', 2, 'top_hot', '', 4),
(41, 'iPad Pro 11 inch 2022 M2 Wifi 128GB I Chính hãng Apple Việt Nam', 'ipad-pro-13-select-wifi-spacegray-202210-02.webp', '                    Thiết kế phẳng mạnh mẽ - Gia công từ kim loại bền bỉ, phong cách hiện đại, sang trọng\r\nHiệu năng mạnh mẽ với CPU thế hệ mới - chip Apple M2 trong đó có 8 lõi cùng RAM 8 GB\r\nMàn hình sáng hơn, hỗ trợ nội dung HDR tốt hơn - 11 inch LCD, 600 nits\r\nThoải mái sáng tạo và thiết kế - Nhận diện bút Apple Pencil 2 siêu nhanh và nhạy                    ', 'Xám', 23990000.00, 19590000.00, '128GB', 11, 'top_hot', '', 1),
(42, 'Samsung Galaxy Tab S9 Ultra 12GB 512GB', 'samsung-tab-s9-xam-1_1.webp', '                    Samsung Galaxy Tab S9 Ultra 12GB 512GB                    ', 'Xám', 34990000.00, 24790000.00, '512GB', 5, 'top_hot', '', 2),
(43, 'Samsung Galaxy Z Fold5 12GB 256GB', 'samsung-galaxy-z-fold-5-256gb_1.webp', '                    Thiết kế tinh tế với nếp gấp vô hình - Cải tiến nếp gấp thẩm mĩ hơn và gập không kẽ hở\r\nBền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IP68 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước\r\nMở ra không gian giải trí cực đại với màn hình trong 7.6\"\" cùng bản lề Flex dẫn đầu công nghệ\r\nThoải mái sáng tạo mọi lúc - Bút Spen tiện dụng giúp bạn phác hoạ và ghi chép không cần đến sổ tay\r\nHiệu năng cân mọi tác vụ - Snapdragon® 8 Gen 2 for Galaxy xử lí mượt mà, đa nhiệm mượt mà                    ', 'Xanh dương', 40990000.00, 29490000.00, '256GB', 4, 'top_hot', '', 2),
(44, 'iPad mini 6 WiFi 64GB | Chính hãng Apple Việt Nam', '3_229.webp', '                    ĐẶC ĐIỂM NỔI BẬT\r\nMạnh mẽ bứt phá - Chip xử lý Apple A15 Bionic 6 nhân\r\nHiển thị sắc nét, mượt mà hơn - Màn hình IPS LCD 8,3 inch hỗ trợ True Tone\r\nPhá vỡ giới hạn sáng tạo - Hỗ trợ Apple Pencil 2, iPadOS 15 tiện ích hơn\r\nCamera bắt trọn mọi khoảnh khắc - Camera trước và sau 12MP\r\nThoải mái sử dụng cả ngày - Pin 19.3 Wh, cổng sạc USB-C                    ', 'Hồng', 12990000.00, 11390000.00, '64GB ', 3, 'top_sale', '', 1),
(45, 'iPhone 14 Pro Max 128GB | Chính hãng VN/A', 'b_c_1_9.webp', '                    Màn hình Dynamic Island - Sự biến mất của màn hình tai thỏ thay thế bằng thiết kế viên thuốc, OLED 6,7 inch, hỗ trợ always-on display\r\nCấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic\r\nLàm chủ công nghệ nhiếp ảnh - Camera sau 48MP, cảm biến TOF sống động\r\nPin liền lithium-ion kết hợp cùng công nghệ sạc nhanh cải tiến                    ', 'Trắng', 29990000.00, 26590000.00, '128GB ', 4, 'top_hot', '', 1),
(46, 'OPPO Reno10 5G 8GB 256GB', 'reno10_5g_-_combo_product_-_blue.webp', '                    ĐẶC ĐIỂM NỔI BẬT\r\nChuyên gia chân dung thế hệ thứ 10 - Camera chân dung 32MP siêu nét, chụp xa từ 2X-5X không lo biến dạng khung hình\r\nThiết kế nổi bật, dẫn đầu xu hướng - Cạnh viền cong 3D, các phiên bản màu sắc phù hợp đa cá tính, thu hút mọi ánh nhìn\r\nĐa nhiệm mạnh mẽ hơn ai hết - RAM mở rộng đến 16GB, ROM 256GB mang đến trải nghiệm đa tác vụ thoải mái\r\nPin bất tận, sạc siêu tốc - pin 5000mAh và sạc nhanh 67W cùng chế độ tiết kiệm pin siêu tiện ích                    ', 'Xanh', 10990000.00, 10490000.00, '256GB', 2, 'top_hot', '', 3),
(47, 'Samsung Galaxy Z Flip4 256GB', 'samsung-galaxy-z-flip-4_1.webp', '                    Ngoại hình thời trang - cầm nắm cực sang với thiết kế gập vỏ sò độc đáo\r\nCông nghệ màn hình hàng đầu đến từ Samsung - 6.7 inch, tấm nền Dynamic AMOLED 2X\r\nTrang bị camera chất lượng - Bộ đôi camera có cùng độ phân giải 12 MP, chống rung, chụp đêm\r\nHiệu năng mạnh mẽ đến từ dòng chip cao cấp của Qualcomm - Snapdragon 8+ Gen 1                    ', 'Đen', 25990000.00, 11490000.00, '256GB', 7, 'top_hot', '', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_taikhoan`
--

CREATE TABLE `tb_taikhoan` (
  `id_taikhoan` int(10) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `tai_khoan` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` int(10) NOT NULL,
  `dia_chi` text NOT NULL,
  `trangthai` varchar(255) NOT NULL,
  `id_vaitro` int(10) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_taikhoan`
--

INSERT INTO `tb_taikhoan` (`id_taikhoan`, `hovaten`, `tai_khoan`, `mat_khau`, `email`, `sdt`, `dia_chi`, `trangthai`, `id_vaitro`) VALUES
(1, 'admin', 'admin', '123456', 'admin@gmail.com', 987449745, 'Hà Nội', '', 1),
(2, 'Nguyễn Bá Chính', 'bachinh456', '123456', 'bachinh@gmail.com', 987449745, 'Đại lai', '', 2),
(3, 'Vũ Tiến Vinh', 'vinhvv', '123456', 'vinh@gmail.com', 338790976, 'hà nội', '', 2),
(4, 'Trần Văn Mạnh', 'manhtv', '1202832', 'manh@gmail.com', 338790976, 'Cà Mau', '', 2),
(5, 'Tạ Văn Định', 'dinhtv', 'dinhtv', 'dinh@gmail.com', 333044405, 'Dubai', '', 2),
(6, 'Nguyễn Phương Thảo', 'thaonp', 'thaoppp', 'thao@gmail.com', 99578688, 'Hà Giang', '', 2),
(7, 'Trần Văn Tuấn', 'tuantv12', '123456', 'tuan@gmail.com', 9876567, 'Thanh Hóa', '', 2),
(8, 'Hoàng Thị Yến Nhi', 'nhihty', 'nhidthw', 'nhi@gmail.com', 33875673, 'Hà Nội', '', 2),
(11, 'đâ', 'da312', 'fa3', '23@gmail.com', 321312, 'dada', '', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_trangthai_donhang`
--

CREATE TABLE `tb_trangthai_donhang` (
  `id_trangthai_dh` int(10) NOT NULL,
  `ten_trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_trangthai_donhang`
--

INSERT INTO `tb_trangthai_donhang` (`id_trangthai_dh`, `ten_trangthai`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đang chuẩn bị'),
(3, 'Đang giao hàng'),
(4, 'Đã giao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_trangthai_lienhe`
--

CREATE TABLE `tb_trangthai_lienhe` (
  `id_trangthai` int(10) NOT NULL,
  `ten_trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_trangthai_lienhe`
--

INSERT INTO `tb_trangthai_lienhe` (`id_trangthai`, `ten_trangthai`) VALUES
(1, 'Đã phản hồi'),
(2, 'Chưa phản hồi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `lk_binhluan_taikhoan` (`id_taikhoan`),
  ADD KEY `lk_binhluan_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdonhang`),
  ADD KEY `lk_chitietdonhang_donhang` (`soluong`) USING BTREE,
  ADD KEY `lk_chitietdonhang_sanpham` (`ten_sanpham`,`img_sanpham`) USING BTREE;

--
-- Chỉ mục cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `lk_trangthai` (`id_trangthai_dh`);

--
-- Chỉ mục cho bảng `tb_hethong`
--
ALTER TABLE `tb_hethong`
  ADD PRIMARY KEY (`id_logo`);

--
-- Chỉ mục cho bảng `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  ADD PRIMARY KEY (`id_lienhe`),
  ADD KEY `lk_lienhe_trangthai` (`id_trangthai`);

--
-- Chỉ mục cho bảng `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_vaitro`);

--
-- Chỉ mục cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `lk_sanpham_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`),
  ADD KEY `lk_taikhoan_role` (`id_vaitro`);

--
-- Chỉ mục cho bảng `tb_trangthai_donhang`
--
ALTER TABLE `tb_trangthai_donhang`
  ADD PRIMARY KEY (`id_trangthai_dh`);

--
-- Chỉ mục cho bảng `tb_trangthai_lienhe`
--
ALTER TABLE `tb_trangthai_lienhe`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  MODIFY `id_baiviet` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  MODIFY `id_binhluan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  MODIFY `id_chitietdonhang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id_danhmuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `id_donhang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tb_hethong`
--
ALTER TABLE `tb_hethong`
  MODIFY `id_logo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  MODIFY `id_lienhe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_vaitro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id_sanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id_taikhoan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tb_trangthai_donhang`
--
ALTER TABLE `tb_trangthai_donhang`
  MODIFY `id_trangthai_dh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_trangthai_lienhe`
--
ALTER TABLE `tb_trangthai_lienhe`
  MODIFY `id_trangthai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD CONSTRAINT `lk_binhluan_sanpham` FOREIGN KEY (`id_sanpham`) REFERENCES `tb_sanpham` (`id_sanpham`),
  ADD CONSTRAINT `lk_binhluan_taikhoan` FOREIGN KEY (`id_taikhoan`) REFERENCES `tb_taikhoan` (`id_taikhoan`);

--
-- Các ràng buộc cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD CONSTRAINT `lk_trangthai` FOREIGN KEY (`id_trangthai_dh`) REFERENCES `tb_trangthai_donhang` (`id_trangthai_dh`);

--
-- Các ràng buộc cho bảng `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  ADD CONSTRAINT `lk_lienhe_trangthai` FOREIGN KEY (`id_trangthai`) REFERENCES `tb_trangthai_lienhe` (`id_trangthai`);

--
-- Các ràng buộc cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `tb_danhmuc` (`id_danhmuc`);

--
-- Các ràng buộc cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD CONSTRAINT `lk_taikhoan_role` FOREIGN KEY (`id_vaitro`) REFERENCES `tb_role` (`id_vaitro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
