-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2025 lúc 04:32 PM
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
-- Cơ sở dữ liệu: `shopdoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `address`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'DucTran', 'ductran200223@gmail.com', '$2y$12$HtYE1XPH1wtFuRI3LqbqJ.zCn5poO7GwFnNNoMI8LIAFMsVZozjMK', '0334702213', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_slug` varchar(255) NOT NULL,
  `a_hot` tinyint(4) NOT NULL DEFAULT 0,
  `a_active` tinyint(4) NOT NULL DEFAULT 0,
  `a_menu_id` int(11) NOT NULL DEFAULT 0,
  `a_view` int(11) NOT NULL DEFAULT 0,
  `a_description` mediumtext DEFAULT NULL,
  `a_avatar` varchar(255) DEFAULT NULL,
  `a_content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `a_position_2` tinyint(4) NOT NULL DEFAULT 0,
  `a_position_1` tinyint(4) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_slug`, `a_hot`, `a_active`, `a_menu_id`, `a_view`, `a_description`, `a_avatar`, `a_content`, `created_at`, `a_position_2`, `a_position_1`, `updated_at`) VALUES
(1, 'Món Quà Valentine Khiến Nàng Nhớ Mãi: Đồng Hồ – Biểu Tượng Của Tình Yêu', 'mon-qua-valentine-khien-nang-nho-mai-dong-ho-bieu-tuong-cua-tinh-yeu', 0, 1, 1, 0, 'Đồng hồ không chỉ là phụ kiện thời trang mà còn mang ý nghĩa biểu tượng về thời gian và sự trân quý những khoảnh khắc bên nhau.', '2025-04-30_dong-ho-qua-tang-ngay-14-322443552.jpg', '<p>Valentine, hay c&ograve;n gọi l&agrave; Ng&agrave;y Lễ T&igrave;nh Nh&acirc;n, diễn ra v&agrave;o ng&agrave;y 14/2 h&agrave;ng năm, l&agrave; dịp đặc biệt để c&aacute;c cặp đ&ocirc;i b&agrave;y tỏ t&igrave;nh cảm v&agrave; thể hiện sự tr&acirc;n trọng d&agrave;nh cho nhau. Một m&oacute;n qu&agrave; &yacute; nghĩa kh&ocirc;ng chỉ đơn thuần l&agrave; vật phẩm, m&agrave; c&ograve;n truyền tải th&ocirc;ng điệp y&ecirc;u thương, đồng h&agrave;nh v&agrave; gắn b&oacute; l&acirc;u d&agrave;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong số những m&oacute;n qu&agrave; Valentine, đồng hồ l&agrave; lựa chọn tuyệt vời d&agrave;nh cho bạn g&aacute;i. Đồng hồ kh&ocirc;ng chỉ l&agrave; phụ kiện thời trang m&agrave; c&ograve;n mang &yacute; nghĩa biểu tượng về thời gian v&agrave; sự tr&acirc;n qu&yacute; những khoảnh khắc b&ecirc;n nhau. Khi bạn tặng n&agrave;ng một chiếc đồng hồ, đ&oacute; kh&ocirc;ng chỉ l&agrave; m&oacute;n qu&agrave; m&agrave; c&ograve;n l&agrave; một lời hứa về sự hiện diện của bạn trong cuộc sống của c&ocirc; ấy.</p>\r\n\r\n<h2><strong>V&igrave; Sao Đồng Hồ L&agrave; M&oacute;n Qu&agrave; Valentine Ho&agrave;n Hảo Cho Bạn G&aacute;i?</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thể hiện sự tr&acirc;n trọng thời gian b&ecirc;n nhau</p>\r\n\r\n<p>Mỗi gi&acirc;y ph&uacute;t b&ecirc;n nhau đều qu&yacute; gi&aacute;, v&agrave; chiếc đồng hồ sẽ l&agrave; vật nhắc nhở về những kỷ niệm đẹp hai bạn đ&atilde; chia sẻ.</p>\r\n\r\n<p>L&agrave; phụ kiện thời trang thanh lịch v&agrave; đẳng cấp</p>\r\n\r\n<p>Một chiếc đồng hồ đẹp gi&uacute;p t&ocirc;n l&ecirc;n vẻ ngo&agrave;i sang trọng, nữ t&iacute;nh v&agrave; tinh tế của c&ocirc; ấy.</p>\r\n\r\n<p>Tượng trưng cho sự gắn kết bền chặt</p>\r\n\r\n<p>Những chiếc kim đồng hồ chuyển động kh&ocirc;ng ngừng giống như t&igrave;nh y&ecirc;u của bạn d&agrave;nh cho n&agrave;ng &ndash; lu&ocirc;n hiện hữu v&agrave; kh&ocirc;ng bao giờ ngừng lại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Gợi &Yacute; Mẫu Đồng Hồ Cho Bạn G&aacute;i Từ DucClock</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong><em>Diamond D DM1001YG</em></strong></h3>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- K&iacute;ch thước mặt: 30mm</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- K&iacute;nh sapphire chống trầy xước</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- M&aacute;y Quartz chạy pin</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- Thiết kế thanh lịch, k&egrave;m lắc tay đi k&egrave;m tạo n&ecirc;n m&oacute;n qu&agrave; ho&agrave;n hảo.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/5dong-ho-nu-thoi-trang-Diamond-D-DM1001-450933328.jpg\" /></p>\r\n\r\n<h3><strong><em>Diamond D DM63095S</em></strong></h3>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- K&iacute;ch thước mặt: 32mm</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- K&iacute;nh sapphire chống xước</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- Phong c&aacute;ch tối giản nhưng tinh tế, ph&ugrave; hợp cho những c&ocirc; g&aacute;i y&ecirc;u th&iacute;ch sự thanh lịch.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/1939155411_dong-ho-nu-thoi-trang51.jpg\" style=\"height:650px; width:650px\" /></p>\r\n\r\n<h3><strong><em>Diamond D DM55865IG-B</em></strong></h3>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- K&iacute;ch thước mặt: 32.5mm</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- Thiết kế trẻ trung, hiện đại</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- D&agrave;nh cho những c&ocirc; g&aacute;i y&ecirc;u th&iacute;ch sự năng động nhưng vẫn giữ n&eacute;t nữ t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-nu-thoi-trang28-2093876198.jpg\" /></p>\r\n\r\n<h2><em><strong>Diamond D DM64205IG-R</strong></em></h2>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- Thiết kế pha trộn giữa phong c&aacute;ch thể thao v&agrave; nữ t&iacute;nh</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;- Ph&ugrave; hợp với c&ocirc; n&agrave;ng c&aacute; t&iacute;nh, y&ecirc;u th&iacute;ch sự mạnh mẽ nhưng vẫn giữ n&eacute;t duy&ecirc;n d&aacute;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/1477535241_dong-ho-nu-thoi-trang5.jpg\" style=\"height:650px; width:650px\" /></p>\r\n\r\n<p>Tặng đồng hồ cho bạn g&aacute;i kh&ocirc;ng chỉ l&agrave; một m&oacute;n qu&agrave; vật chất m&agrave; c&ograve;n l&agrave; một lời cam kết về t&igrave;nh y&ecirc;u v&agrave; sự gắn b&oacute; l&acirc;u d&agrave;i. Mỗi khi nh&igrave;n v&agrave;o cổ tay, n&agrave;ng sẽ nhớ về bạn v&agrave; những khoảnh khắc ngọt ng&agrave;o b&ecirc;n nhau. H&atilde;y chọn một chiếc đồng hồ thật &yacute; nghĩa để l&agrave;m m&oacute;n qu&agrave; Valentine đặc biệt d&agrave;nh cho c&ocirc; ấy!</p>', '2025-04-17 00:20:21', 0, 1, '2025-04-30 14:10:59'),
(3, 'TUYỂN DỤNG NHÂN VIÊN BÁN HÀNG – GIA NHẬP ĐỘI NGŨ DUCCLOCK!', 'tuyen-dung-nhan-vien-ban-hang-gia-nhap-doi-ngu-ducclock', 0, 1, 2, 0, 'Hãy gia nhập cùng đội ngũ DucClock', '2025-04-30_tai-xuong.jpg', '<p>Bạn y&ecirc;u th&iacute;ch đồng hồ v&agrave; đam m&ecirc; thời trang? Bạn muốn l&agrave;m việc trong một m&ocirc;i trường năng động, chuy&ecirc;n nghiệp v&agrave; đầy cơ hội ph&aacute;t triển? <strong>DucClock</strong> &ndash; chuỗi cửa h&agrave;ng đồng hồ ch&iacute;nh h&atilde;ng, cần <strong>bổ sung nh&acirc;n sự</strong> cho vị tr&iacute; <strong>nh&acirc;n vi&ecirc;n b&aacute;n h&agrave;ng</strong>.</p>\r\n\r\n<p>M&Ocirc; TẢ C&Ocirc;NG VIỆC:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Tư vấn kh&aacute;ch h&agrave;ng về sản phẩm đồng hồ ch&iacute;nh h&atilde;ng tại cửa h&agrave;ng.</p>\r\n	</li>\r\n	<li>\r\n	<p>Trưng b&agrave;y v&agrave; bảo quản sản phẩm.</p>\r\n	</li>\r\n	<li>\r\n	<p>Hỗ trợ xử l&yacute; đơn h&agrave;ng, chăm s&oacute;c kh&aacute;ch h&agrave;ng sau b&aacute;n.</p>\r\n	</li>\r\n	<li>\r\n	<p>L&agrave;m việc theo ca linh hoạt.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Y&Ecirc;U CẦU:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Nam/Nữ từ 18 &ndash; 28 tuổi, ngoại h&igrave;nh ưa nh&igrave;n, th&acirc;n thiện.</p>\r\n	</li>\r\n	<li>\r\n	<p>C&oacute; kỹ năng giao tiếp, y&ecirc;u th&iacute;ch tư vấn, b&aacute;n h&agrave;ng.</p>\r\n	</li>\r\n	<li>\r\n	<p>Ưu ti&ecirc;n ứng vi&ecirc;n c&oacute; kinh nghiệm b&aacute;n lẻ hoặc đam m&ecirc; về đồng hồ.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>QUYỀN LỢI:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Thu nhập từ 6 &ndash; 10 triệu/th&aacute;ng (Lương cứng + hoa hồng + thưởng KPI).</p>\r\n	</li>\r\n	<li>\r\n	<p>Được đ&agrave;o tạo kiến thức về đồng hồ v&agrave; kỹ năng b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp.</p>\r\n	</li>\r\n	<li>\r\n	<p>M&ocirc;i trường trẻ trung, cơ hội thăng tiến r&otilde; r&agrave;ng.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>NƠI L&Agrave;M VIỆC:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>DucClock chi nh&aacute;nh Hồ Ch&iacute; Minh / H&agrave; Nội (tuỳ từng đợt tuyển).</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>C&Aacute;CH ỨNG TUYỂN:</p>\r\n\r\n<p>Gửi CV về email: <strong>shopdoan123@gmail.com</strong><br />\r\nHoặc inbox fanpage DucClock để được hướng dẫn chi tiết.</p>\r\n\r\n<p>H&atilde;y trở th&agrave;nh một phần của DucClock &ndash; nơi mỗi ph&uacute;t gi&acirc;y l&agrave; gi&aacute; trị!</p>', '2025-04-18 00:26:25', 0, 1, '2025-04-30 15:26:59'),
(4, 'Giới thiệu về đồng hồ Hublot - Tại sao Hublot lại đắt đỏ đến vậy?', 'gioi-thieu-ve-dong-ho-hublot-tai-sao-hublot-lai-dat-do-den-vay', 1, 1, 4, 0, 'Thương hiệu đồng hồ Hublot là cái tên rất quen thuộc với người đam mê đồng hồ, đặc biết khi nhắc tới Hublot người ta sẽ nghĩ ngay đến những chiếc đồng hồ đắt tiền dành những doanh nhân thành đạt và những người nổi tiếng.', '2025-04-30_bst-dong-ho-hublot-doc-la-2023072602.jpg', '<h2><strong>Giới thiệu chung về lịch sử&nbsp;đồng hồ Hublot</strong></h2>\r\n\r\n<p>Người s&aacute;ng lập ra nh&atilde;n hiệu Hublot l&agrave; &ocirc;ng Carlo Crocco - &Ocirc;ng sinh ra trong một gia đ&igrave;nh c&oacute; truyền thống trong ng&agrave;nh chế t&aacute;c đồng hồ.</p>\r\n\r\n<p><img alt=\"ng Carlo Crocco ngi sng lp Hublot\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/gioi-thieu-dong-ho-hublot-ceo_2023072601.jpg\" /></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&Ocirc;ng Carlo Crocco người s&aacute;ng lập Hublot</em></p>\r\n\r\n<p>Hublot l&agrave; thương hiệu đồng hồ cao cấp&nbsp;đến từ Thụy Sỹ &ndash;&nbsp;Hublot hướng đến sự ho&agrave;n hảo cả về phong c&aacute;ch lẫn chức năng của từng mẫu đồng hồ&nbsp;gi&aacute; trị cao khiến ai cũng muốn được sở hữu.</p>\r\n\r\n<h2>C&aacute;c cột mốc&nbsp;qu&aacute; tr&igrave;nh ph&aacute;t triển của&nbsp;đồng hồ Hublot</h2>\r\n\r\n<p><strong>Năm 1997</strong>:&nbsp;Carlo Crocco bắt đầu h&agrave;nh tr&igrave;nh của m&igrave;nh v&agrave; thiết kế ra chiếc đồng hồ đầu ti&ecirc;n</p>\r\n\r\n<p><strong>Năm 1980</strong>:&nbsp;Kế hoạch&nbsp;tạo ra những mẫu đồng hồ mang phong c&aacute;ch&nbsp;thể thao với thiết kế thanh lịch v&agrave; g&acirc;y được tiếng vang tr&ecirc;n thế giới.</p>\r\n\r\n<p><strong>Năm 2003:</strong>&nbsp;L&acirc;m v&agrave;o khủng hoảng kinh tế&nbsp;Hublot&nbsp;đứng trước nguy cơ ph&aacute; sản. Thời điểm đ&oacute;&nbsp;Carlo Crocco đ&atilde; phải nhờ đến sự gi&uacute;p đỡ của &ocirc;ng&nbsp;Jean-Claude Biver - Chủ tịch&nbsp;Omega.&nbsp;Sau đ&oacute; &ocirc;ng&nbsp;Jean Claude Biver đ&atilde; trở th&agrave;nh gi&aacute;m đốc điều h&agrave;nh&nbsp;của Hublot đưa thương hiệu&nbsp;l&ecirc;n một tầm cao mới trong ng&agrave;nh đồng hồ&nbsp;thế giới.</p>\r\n\r\n<p><img alt=\"Jean Claude Biver - CEO ca Hublot\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/ceo-dong-ho-hublot-ceo_2023072601.jpg\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mr&nbsp;Jean Claude Biver - CEO của Hublot</p>\r\n\r\n<p>C&aacute;c năm sau đ&oacute; Hublot li&ecirc;n tục cho tr&igrave;nh l&agrave;ng c&aacute;c bộ sưu tập v&agrave; d&ograve;ng đồng hồ mới như:&nbsp;<strong>Hublot Spirit of Big Bang</strong>,&nbsp;D&ograve;ng sản phẩm Classic Fusion,&nbsp;<strong>đồng hồ MP Key of Time,&nbsp;</strong>Phi&ecirc;n bản MP-02...</p>\r\n\r\n<p><strong>Năm 2018</strong>: Tham gia&nbsp;triển l&atilde;m BaselWorld, Hublot đ&atilde; giới thiệu mẫu sản phẩm&nbsp;cho cả nam v&agrave; nữ&nbsp;c&oacute; t&ecirc;n&nbsp;<strong>Hublot Big Bang Unico</strong>&nbsp;sở hữu bộ m&aacute;y Hub1280 đường k&iacute;nh mặt đồng hồ 42mm.</p>\r\n\r\n<p><strong>Năm 2020</strong>:&nbsp;Tham gia&nbsp;LVMH Watch Week tổ chức tại Dubai, thương hiệu&nbsp;Hublot&nbsp;tr&igrave;nh l&agrave;ng một loạt thiết kế mới lạ thể hiện sự sang trọng&nbsp;đẳng cấp v&agrave; s&aacute;ng tạo ph&aacute; vỡ mọi&nbsp;giới hạn.</p>\r\n\r\n<h2><strong>Tại sao đồng hồ Hublot lại đắt đỏ đến vậy?</strong></h2>\r\n\r\n<p>Đồng hồ&nbsp;Hublot l&agrave; một trong những thương hiệu đ&atilde; sản xuất&nbsp;ra những sản phẩm&nbsp;c&oacute; mức gi&aacute; đắt đỏ nhất&nbsp;thế giới. Những chiếc đồng hồ&nbsp;phổ th&ocirc;ng của h&atilde;ng cũng c&oacute; gi&aacute; kh&ocirc;ng hề rẻ, vậy thứ&nbsp;g&igrave;&nbsp;đ&atilde; tạo n&ecirc;n mức gi&aacute; n&agrave;y?</p>\r\n\r\n<p>Nếu bạn l&agrave; người s&agrave;nh sỏi v&agrave; y&ecirc;u th&iacute;ch&nbsp;những m&oacute;n đồ hiệu đẳng cấp th&igrave; chắc hẳn sẽ biết r&otilde; những l&yacute; do dưới đ&acirc;y.</p>\r\n\r\n<p><img alt=\"Ngc Trinh eo ng h Hublot One Click Pink Sapphire Diamonds 39 mm\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/ngoc-trinh-hublot-pink.jpg\" /></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ngọc Trinh đeo đồng hồ Hublot One Click Pink Sapphire Diamonds 39 mm</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Thiết kế v&agrave;&nbsp;chế t&aacute;c tinh xảo tr&ecirc;n những chất liệu độc nhất</strong></h3>\r\n\r\n<p>Nếu chỉ l&agrave;&nbsp;những cỗ m&aacute;y ch&iacute;nh x&aacute;c, Đồng hồ&nbsp;Hublot sẽ kh&ocirc;ng&nbsp;c&oacute; được một vị tr&iacute;&nbsp;như ng&agrave;y h&ocirc;m nay. Thứ tạo&nbsp;n&ecirc;n t&ecirc;n tuổi của Hublot phải kể đến thiết kế thời thượng&nbsp;bậc nhất c&ugrave;ng với chất liệu độc lạ. V&igrave; thế&nbsp;đ&atilde; tạo n&ecirc;n những cơn sốt kh&ocirc;ng chỉ với&nbsp;người y&ecirc;u đồng hồ m&agrave; c&ograve;n cả những t&iacute;n đồ thời trang cao cấp. Ng&agrave;y nay, n&oacute;i đến thương hiệu&nbsp;Hublot l&agrave; ch&uacute;ng ta đều nhớ đến những chiếc đồng hồ c&oacute; phong c&aacute;ch&nbsp;thiết kế ph&aacute; c&aacute;ch, độc lạ&nbsp;đẹp mắt nổi trội</p>\r\n\r\n<p><img alt=\"Thit k v ch tc tinh xo trn nhng cht liu c nht\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/bst-dong-ho-hublot-doc-la_2023072602.jpg\" /></p>\r\n\r\n<p>Ngo&agrave;i việc sở hữu c&aacute;c nh&agrave;&nbsp;kỹ nghệ chế t&aacute;c đỉnh cao, đồng hồ&nbsp;Hublot c&ograve;n sở hữu nhiều&nbsp;kỹ thuật thiết kế tuyệt vời v&agrave; tối ưu nhất&nbsp;sự s&aacute;ng tạo đặt l&ecirc;n h&agrave;ng đầu m&agrave; rất &iacute;t thương hiệu kh&aacute;c&nbsp;l&agrave;m được. Điều đ&oacute;&nbsp;gi&uacute;p cho những chiếc đồng hồ Hublot kh&ocirc;ng chỉ đẹp m&agrave; khi ngắm&nbsp;v&agrave; xem chi tiết, ch&uacute;ng ta c&ograve;n thấy được một&nbsp;sự tinh xảo,&nbsp;chỉnh chu nhất.</p>\r\n\r\n<p><strong>Bộ m&aacute;y si&ecirc;u&nbsp;bền bỉ, trường tồn c&ugrave;ng&nbsp;thời gian</strong></p>\r\n\r\n<p>Sự bền bỉ của bộ m&aacute;y đồng hồ&nbsp;l&agrave; điều kh&ocirc;ng cần phải b&agrave;n c&atilde;i với những sản phẩm của đồng hồ&nbsp;Hublot. Với những cỗ m&aacute;y inhouse l&agrave;m cho&nbsp;cả thế giới phải trầm trồ th&aacute;n phục, những sản phẩm của&nbsp;Hublot c&oacute; thể tiệm cận với sự vĩnh cửu khi sử dụng đ&uacute;ng c&aacute;ch.</p>\r\n\r\n<h3><strong>Vật liệu&nbsp;qu&yacute; đắt đỏ&nbsp;độc nhất</strong></h3>\r\n\r\n<p>C&aacute;c vật&nbsp;liệu th&ocirc;ng thường&nbsp;kh&ocirc;ng c&ograve;n đủ hấp dẫn với c&aacute;c t&iacute;n đồ thời trang cao cấp&nbsp;v&agrave; Hublot cũng vậy. Do đ&oacute;, Hublot l&agrave; thương hiệu đồng hồ&nbsp;đi ti&ecirc;n phong trong việc sử dụng vật liệu qu&yacute; như:&nbsp;V&agrave;ng tự trộn lẫn, gốm&nbsp;hay c&aacute;c khối tinh thể sapphire&nbsp;v&agrave; sợi carbon&nbsp;để khiến đồng hồ&nbsp;kh&ocirc;ng chỉ c&oacute; một gi&aacute; trị lịch sử m&agrave; c&ograve;n l&agrave; phụ kiện&nbsp;trang sức qu&yacute; b&aacute;u. Điều n&agrave;y l&agrave; kh&ocirc;ng phải dễ d&agrave;ng&nbsp;khi mỗi vật liệu lại c&oacute; 1 c&aacute;ch&nbsp;chế t&aacute;c ri&ecirc;ng, cho thấy được sự chịu kh&oacute; thay đổi&nbsp;cải tiến của h&atilde;ng.</p>\r\n\r\n<p><img alt=\"Vt liu qu t  c nht\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/chat-lieu-thiet-ke-dong-ho-hublot_2023072602.jpg\" /></p>\r\n\r\n<h3><strong>Khi&nbsp;Nghệ thuật v&agrave;&nbsp;Lịch sử&nbsp;tạo n&ecirc;n Kiệt t&aacute;c</strong></h3>\r\n\r\n<p>Nhắc n&oacute;i&nbsp;l&yacute; do tại&nbsp;sao&nbsp;đồng hồ&nbsp;Hublot&nbsp;lại đắt, giới thượng lưu sẽ nghĩ ngay tới con đường&nbsp;đến th&agrave;nh c&ocirc;ng của Carlo Crocco - Nh&agrave; s&aacute;ng lập Hublot. &Ocirc;ng đ&atilde;&nbsp;&aacute;p dụng triết l&yacute; &quot;Art of Fusion&quot; - Nghệ thuật hợp nhất, mỗi&nbsp;chiếc đồng hồ Hublot đều mang tr&ecirc;n m&igrave;nh một vẻ đẹp ri&ecirc;ng biệt so với c&aacute;c đối thủ kh&aacute;c.&nbsp;</p>\r\n\r\n<p><img alt=\"Khi Ngh thut v Lch s to nn Kit tc\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/bst-dong-ho-hublot-big-bang_2023072602.jpg\" /></p>\r\n\r\n<p>Mỗi cỗ m&aacute;y thời gian đều được bảo&nbsp;đảm&nbsp;kh&ocirc;ng c&oacute; bất kỳ chi tiết thừa, trong đ&oacute; phần vỏ đ&ograve;i hỏi phải đạt tới tối thiểu 160 thao t&aacute;c. Thương hiệu&nbsp;Hublot ưu ti&ecirc;n sử dụng d&acirc;y đeo cao su để kho&aacute;c l&ecirc;n m&igrave;nh sắc đen&nbsp;đầy phong c&aacute;ch&nbsp;tinh tế. Chất liệu d&acirc;y&nbsp;c&oacute; độ bền, dẻo v&agrave; nhẹ kết hợp c&ugrave;ng hương vani dịu nhẹ mang lại cảm gi&aacute;c v&ocirc; c&ugrave;ng&nbsp;thoải m&aacute;i cho người sở hữu.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, thương hiệu&nbsp;Hublot đắt đỏ c&ograve;n được đ&iacute;nh th&ecirc;m những chiếc đinh ốc c&oacute; h&igrave;nh dạng chữ H&nbsp;bằng titanium, tạo n&ecirc;n một dấu hiệu chỉ c&oacute; ở thương hiệu h&agrave;ng đầu thế giới n&agrave;y.</p>\r\n\r\n<h3><strong>Hublot Thương hiệu đồng hồ d&agrave;nh cho người nổi tiếng</strong></h3>\r\n\r\n<p>Hội tụ to&agrave;n bộ&nbsp;n&eacute;t đẹp tinh t&uacute;y nhất trong từng chiếc đồng hồ, Thương hiệu&nbsp;Hublot trở th&agrave;nh một trong những phụ kiện thời trang cao cấp&nbsp;được c&aacute;c&nbsp;doanh nh&acirc;n th&agrave;nh đạt,&nbsp;giới thượng lưu,&nbsp;người nổi tiếng&nbsp;săn đ&oacute;n. Từ phong c&aacute;ch thiết kế cho đến&nbsp;chất lượng đ&atilde; tạo n&ecirc;n một thương hiệu cao cấp, đắt đỏ nhất, một&nbsp;chiếc đồng hồ c&oacute; gi&aacute; &iacute;t&nbsp;nhất khoảng 7000 usd đến những&nbsp;đồng hồ hublot c&oacute; gi&aacute; l&ecirc;n&nbsp;tới 5 triệu usd.</p>\r\n\r\n<p><img alt=\"Hublot Thng hiu ca ngi ni ting\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/bst-dong-ho-hublot-big-bang_2023072603.jpg\" /></p>\r\n\r\n<h2><strong>Bộ sưu tập đồng hồ nổi&nbsp;bật&nbsp;của&nbsp;Hublot</strong></h2>\r\n\r\n<p><strong>BST Hublot Novelties</strong>:&nbsp;N&ocirc;̉i b&acirc;t với những thi&ecirc;́t k&ecirc;́ độc,&nbsp;lạ mang&nbsp;M&agrave;u sắc chủ đạo của bộ sưu tập n&agrave;y l&agrave; tone m&agrave;u tươi s&aacute;ng&nbsp;ph&ugrave; hợp với những người đam m&ecirc;&nbsp;thể thao,&nbsp;c&oacute; c&aacute; t&iacute;nh v&agrave;&nbsp;sự năng động.</p>\r\n\r\n<p><img alt=\"BST Hublot Novelties\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/bst-dong-ho-hublot-novelties_2023072601.jpg\" /></p>\r\n\r\n<p><em>Bộ sưu tập Hublot Novelties</em></p>\r\n\r\n<p><strong>BST Big Bang</strong>: L&agrave; một trong số những BST qu&yacute; gi&aacute; được y&ecirc;u th&iacute;ch nhất, nổi bật l&agrave;&nbsp;chiếc đồng hồ Bigger Bang Diamond Tourbillon phi&ecirc;n bản Limited l&agrave; một trong số những chiếc đồng hồ&nbsp;đắt đỏ v&agrave; độc quyền của thương hiệu&nbsp;Hublot.</p>\r\n\r\n<p><img alt=\"BST ng h Hublot Big Bang\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/bst-dong-ho-hublot-big-bang_2023072601.jpg\" /></p>\r\n\r\n<p><strong>Bộ sưu tập Hublot Spirit of Big Bang</strong>:&nbsp;Sử dụng phong c&aacute;ch&nbsp;thiết kế h&igrave;nh th&ugrave;ng (tonneau), k&iacute;ch thước đường k&iacute;nh mặt&nbsp;51x45mm. Đồng hồ Hublot c&oacute; 4 phi&ecirc;n bản:&nbsp;V&agrave;ng 18K (King Gold),&nbsp;Titan&nbsp;v&agrave; từng chất liệu n&agrave;y kết hợp gốm đen.</p>\r\n\r\n<p><img alt=\"B su tp Hublot Spirit of Big Bang\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/bst-dong-ho-hublot-spirit-of-big-bang_2023072601.jpg\" /></p>\r\n\r\n<p><em><strong>Bộ sưu tập Hublot Spirit of Big Bang</strong></em></p>\r\n\r\n<p><strong>BST Hublot Classic Fusion</strong>: Thi&ecirc;́t k&ecirc;́ đặc biệt thanh nh&atilde;, nổi bần&nbsp;bật giữa v&ocirc; v&agrave;n những&nbsp;mẫu đồng hồ đột ph&aacute; của thương hiệu Hublot.</p>\r\n\r\n<p><img alt=\"BST Hublot Classic Fusion\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/bst-dong-ho-hublot-spirit-of-big-bang_2023072602.jpg\" /></p>\r\n\r\n<p><strong>BST Hublot MP Collection</strong>:&nbsp;Hublot rất&nbsp;tự h&agrave;o về sản phẩm trong b&ocirc;̣ sưu t&acirc;̣p n&agrave;y v&igrave; sự tinh xảo v&agrave; kỹ thuật cơ kh&iacute; đỉnh cao. Đặc bi&ecirc;̣t, si&ecirc;u ph&acirc;̉m đồng hồ&nbsp;MP-05 LaFerrari c&oacute; khả năng cung cấp năng lượng dự&nbsp;trữ đủ&nbsp;hoạt động 50 ng&agrave;y li&ecirc;n tục. Đ&acirc;y cũng&nbsp;l&agrave; chiếc đồng hồ c&oacute; năng lượng dự trữ l&acirc;u nhất hiện nay, nhiều hơn bất kỳ chiếc đồng hồ n&agrave;o kh&aacute;c hiện c&oacute; tr&ecirc;n thị trường.&nbsp;</p>\r\n\r\n<p><img alt=\"BST Hublot MP Collection\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/bst-dong-ho-hublot-mp_2023072602.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&aacute;c&nbsp;th&ocirc;ng tin&nbsp;tr&ecirc;n chắc hẳn phần n&agrave;o đ&atilde; gi&uacute;p&nbsp;c&aacute;c&nbsp;t&igrave;nh nh&acirc;n&nbsp;th&iacute;ch&nbsp;c&aacute;c&nbsp;nh&atilde;n h&agrave;ng&nbsp;đồng hồ xa xỉ&nbsp;đến&nbsp;trong khoảng&nbsp;Thụy Sĩ l&yacute; giải được l&yacute; do&nbsp;tại sao&nbsp;đồng hồ Hublot lại đắt tiền&nbsp;đến&nbsp;vậy. C&ograve;n đối&nbsp;sở hữu&nbsp;giới s&agrave;nh m&oacute;n phụ kiện&nbsp;sang trọng&nbsp;th&igrave;&nbsp;mang&nbsp;thể&nbsp;tự t&iacute;n&nbsp;khi&nbsp;những&nbsp;cỗ m&aacute;y&nbsp;thời gian&nbsp;như Hublot tr&ecirc;n tay&nbsp;mang&nbsp;thể n&acirc;ng tầm&nbsp;gi&aacute; trị&nbsp;cho bản th&acirc;n m&igrave;nh&nbsp;tới&nbsp;dường&nbsp;n&agrave;o.</p>', '2025-04-19 00:33:36', 1, 0, '2025-05-18 13:02:52'),
(5, 'Bật mí những điều bạn có thể chưa biết về đồng hồ Rolex', 'bat-mi-nhung-dieu-ban-co-the-chua-biet-ve-dong-ho-rolex', 1, 1, 4, 0, 'Đồng hồ Rolex là một trong những thương hiệu đồng hồ nổi tiếng nhất thế giới được biết đến với chất lượng và giá trị vượt thời gian.', '2025-04-30_bat-mi-dong-ho-rolex-2023072802.jpg', '<h2><strong>Lịch sử về thương hiệu đồng hồ Rolex&nbsp;</strong></h2>\r\n\r\n<p>Sự h&igrave;nh th&agrave;nh thương hiệu đồng hồ Rolex c&oacute; li&ecirc;n quan chặt chẽ đến tầm nh&igrave;n xa tr&ocirc;ng rộng của nh&agrave; s&aacute;ng lập n&ecirc;n thương hiệu - &ocirc;ng Hans Wilsdorf. V&igrave; thế, xin mời bạn đọc tham khảo th&ocirc;ng tin về lịch sử đồng hồ Rolex ngay nh&eacute;:</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/bat-mi-dong-ho-rolex_2023072802.jpg\" style=\"height:340px; width:605px\" /></p>\r\n\r\n<h3><strong>Những bước ch&acirc;n đầu ti&ecirc;n đến ng&agrave;nh đồng hồ thế giới&nbsp;</strong></h3>\r\n\r\n<p>Năm 1905, doanh nh&acirc;n người Đức Hans Wilsdorf hợp t&aacute;c c&ugrave;ng nh&agrave; đầu tư người Ph&aacute;p Alfred Davis th&agrave;nh lập c&ocirc;ng ty Wilsdorf &amp; Davis ở London, Anh. L&uacute;c bấy giờ, c&ocirc;ng ty chủ yếu nhập khẩu v&agrave; b&aacute;n sản phẩm đồng hồ cao cấp Hermann Aegler từ Thụy Sĩ. C&aacute;c mẫu đồng hồ b&aacute;n l&uacute;c ấy tr&ecirc;n bề mặt đều c&oacute; chữ W&amp;D.</p>\r\n\r\n<p>Những năm đầu thế kỷ 20 d&ugrave; vẫn c&ograve;n kiểu &aacute;o ghi-l&ecirc; nhưng mẫu &aacute;o n&agrave;y dần trở n&ecirc;n lỗi thời. Với sự nhạy b&eacute;n, Wilsdorf đ&atilde; nhận ra điều đ&oacute; v&agrave; bắt tay v&agrave;o nghi&ecirc;n cứu tạo ra mẫu đồng hồ mới ph&ugrave; hợp (sau n&agrave;y l&agrave; đồng hồ đeo tay). Ch&uacute;ng ra đời nhằm thay thế chiếc đồng hồ bỏ t&uacute;i (thường cất trong t&uacute;i &aacute;o gi-l&ecirc;).</p>\r\n\r\n<p>Năm 1908, c&ocirc;ng ty Wilsdorf &amp; Davis đ&atilde; hợp t&aacute;c c&ugrave;ng nh&agrave; sản xuất đồng hồ ở Thụy Sĩ mở văn ph&ograve;ng La Chaux-de-Fonds &ndash; Thụy Sĩ. Sau đ&oacute;, họ quyết định chọn c&aacute;i t&ecirc;n Rolex đặt cho d&ograve;ng sản phẩm đồng hồ mới. Rolex - theo lời Hans Wilsdorf n&oacute;i rằng được gợi &yacute; từ vị thần - c&oacute; &yacute; nghĩa l&agrave; &ldquo;kiệt t&aacute;c đồng hồ&rdquo;.</p>\r\n\r\n<p>Năm 1910, đồng hồ đeo tay đầu ti&ecirc;n đ&atilde; được Wilsdorf đem đến Trung t&acirc;m Đ&aacute;nh gi&aacute; Đồng hồ ch&iacute;nh thức tại Bienne kiểm định. V&agrave; chiếc đồng hồ n&agrave;y đ&atilde; khiến cho mọi chuy&ecirc;n gia l&uacute;c bấy giờ đều ngỡ ng&agrave;ng v&igrave; đ&acirc;y l&agrave; lần đầu ti&ecirc;n họ thấy chiếc đồng hồ đeo tay như vậy.&nbsp;</p>\r\n\r\n<p>Sau 2 tuần, chiếc đồng hồ n&agrave;y được chứng nhận. 2 năm sau (năm 1914), Rolex nhận chứng nhận tương tự tại Anh như một minh chứng cho độ ch&iacute;nh x&aacute;c của n&oacute;.</p>\r\n\r\n<h3><strong>Dựa v&agrave;o ho&agrave;n cảnh chiến tranh biến th&agrave;nh cơ hội ph&aacute;t triển&nbsp;</strong></h3>\r\n\r\n<p>C&oacute; thể n&oacute;i rằng Rolex l&agrave; &ldquo;anh h&ugrave;ng đi l&ecirc;n từ thời loạn&rdquo; bởi sự đột ph&aacute; của thương hiệu đồng hồ n&agrave;y. Bởi n&oacute; kh&ocirc;ng nằm trong việc ph&aacute;t triển c&ocirc;ng nghệ kỹ thuật m&agrave; chủ yếu l&agrave; ảnh hưởng từ chiến tranh.&nbsp;</p>\r\n\r\n<p>Chiến tranh thế giới thứ nhất (1914-1918) đ&atilde; chứng kiến sự ra đời h&agrave;ng loạt của những loại vũ kh&iacute; tối t&acirc;n. V&iacute; dụ như l&agrave; xe tăng, m&aacute;y bay chiến đấu v&agrave; những chiếc đồng hồ đeo tay c&ugrave;ng với s&uacute;ng l&agrave; vật bất ly th&acirc;n của người l&iacute;nh l&uacute;c bấy giờ. Về sau chiến tranh kết th&uacute;c, đồng hồ đeo tay đ&atilde; trở th&agrave;nh biểu tượng cho người đ&agrave;n &ocirc;ng bản lĩnh.</p>\r\n\r\n<p>Đồng hồ Rolex tiếp tục nhận được sự tin tưởng của phi c&ocirc;ng Mỹ v&agrave; Anh Quốc trong chiến tranh thế giới thứ 2. Cũng bởi vậy t&ecirc;n tuổi của Rolex vươn xa v&agrave; ph&aacute;t triển mạnh mẽ tại thị trường Mỹ.</p>\r\n\r\n<p>Năm 1927, Wilsdorf biết được việc người phụ nữ t&ecirc;n Mercedes Gleitze quyết định bơi qua k&ecirc;nh đ&agrave;o Anh tặng cho c&ocirc; chiếc Rolex Oyster. Được biết, đ&acirc;y l&agrave; d&ograve;ng đồng hồ chống nước v&agrave; chống bụi rất tốt.&nbsp;</p>\r\n\r\n<p>Kết quả l&agrave; đồng hồ Rolex Oyster tr&ecirc;n tay Mercedes Gleitze hoạt động ch&iacute;nh x&aacute;c khi c&ocirc; ho&agrave;n th&agrave;nh h&agrave;nh tr&igrave;nh trong suốt 15 giờ. Chớp lấy thời cơ, Wilsdorf mua to&agrave;n bộ trang nhất tờ Daily Mail London nhằm quảng b&aacute; cho th&agrave;nh t&iacute;ch Gleitze v&agrave; tất nhi&ecirc;n l&agrave; cả chiếc đồng hồ Rolex.</p>\r\n\r\n<p>Năm 1960, t&agrave;u lặn Trieste thực hiện chuyến lặn xuống vực Marianas độ s&acirc;u gần 11 ngh&igrave;n m&eacute;t với 1 chiếc đồng hồ Rolex. V&agrave; kết quả ngạc nhi&ecirc;n khi chiếc đồng hồ n&agrave;y vẫn hoạt động b&igrave;nh thường dưới &aacute;p suất khủng khiếp độ s&acirc;u 11.000m.&nbsp;</p>\r\n\r\n<h2><strong>Những sự thật th&uacute; vị về h&atilde;ng đồng hồ Rolex&nbsp;</strong></h2>\r\n\r\n<p>Bạn c&oacute; biết rằng gi&aacute; một chiếc đồng hồ Rolex đ&ocirc;i khi c&ograve;n đắt hơn cả một chiếc xe Ferrari kh&ocirc;ng? Điều g&igrave; khiến Rolex đặt ra những con số ngất ngưởng như vậy ?</p>\r\n\r\n<h3><strong>Sử dụng th&eacute;p đắt tiền để đồng hồ Rolex b&oacute;ng bẩy, đẹp hơn</strong></h3>\r\n\r\n<p>Kh&ocirc;ng phải tất cả loại th&eacute;p kh&ocirc;ng gỉ đều như nhau, ch&uacute;ng gồm nhiều loại, nhiều hạng&hellip; Nhưng hầu hết th&eacute;p l&agrave;m đồng hồ đều l&agrave; th&eacute;p kh&ocirc;ng gỉ 316L. Tuy nhi&ecirc;n, hiện nay chỉ ri&ecirc;ng Rolex sử dụng loại th&eacute;p 904L, trong khi c&aacute;c h&atilde;ng kh&aacute;c hầu như kh&ocirc;ng sử dụng.&nbsp;</p>\r\n\r\n<p>Tr&ecirc;n thực tế Rolex từng sử dụng c&ugrave;ng loại th&eacute;p với những h&atilde;ng kh&aacute;c. Nhưng v&agrave;o năm 2003 họ đ&atilde; chuyển sang d&ugrave;ng th&eacute;p 904L v&igrave; t&iacute;nh &iacute;t bị ăn m&ograve;n, chống gỉ tuyệt đối v&agrave; độ cứng cao. Điều quan trọng nhất với Rolex l&agrave; th&eacute;p 904L chế t&aacute;c đ&uacute;ng c&aacute;ch sẽ c&oacute; thể s&aacute;ng b&oacute;ng đến mức kh&oacute; tin.&nbsp;</p>\r\n\r\n<p>Nếu bạn từng nhận thấy kim loại đồng hồ Rolex tr&ocirc;ng đặc biệt hơn c&aacute;c h&atilde;ng kh&aacute;c th&igrave; đ&oacute; ch&iacute;nh l&agrave; bởi th&eacute;p 904L. V&agrave;o năm 1998 họ tung ra chiếc đồng hồ th&eacute;p 904L đầu ti&ecirc;n &ndash; một số &iacute;t thuộc d&ograve;ng Sea &ndash; Dweller. Được biết loại th&eacute;p n&agrave;y được d&ugrave;ng trong ng&agrave;nh h&agrave;ng kh&ocirc;ng.</p>\r\n\r\n<p>Một c&acirc;u hỏi kh&aacute; tự nhi&ecirc;n v&igrave; sao kh&ocirc;ng h&atilde;ng đồng hồ n&agrave;o kh&aacute;c d&ugrave;ng loại th&eacute;p n&agrave;y? Rất dễ đo&aacute;n bởi n&oacute; qu&aacute; đắt v&agrave; đ&ograve;i hỏi qu&aacute; tr&igrave;nh chế t&aacute;c hết sức c&ocirc;ng phu. V&igrave; c&oacute; số lượng lớn linh kiện đồng hồ chế t&aacute;c nội bộ n&ecirc;n Rolex đ&atilde; phải chi h&agrave;ng tỉ đ&ocirc; la.&nbsp;</p>\r\n\r\n<p>Việc n&agrave;y nhằm thay mới hầu như to&agrave;n bộ hệ thống m&aacute;y m&oacute;c sản xuất th&eacute;p cũng như to&agrave;n bộ c&ocirc;ng cụ c&oacute; thể l&agrave;m việc được với th&eacute;p 904L. Chi ph&iacute; qu&aacute; cao với th&oacute;i quen sử dụng linh kiện từ b&ecirc;n thứ ba n&ecirc;n kh&ocirc;ng h&atilde;ng đồng hồ n&agrave;o d&aacute;m liều lĩnh chế t&aacute;c đồng hồ với th&eacute;p 904L.</p>\r\n\r\n<h3><strong>Mọi chi tiết được lắp gh&eacute;p &amp; kiểm tra bằng tay&nbsp;</strong></h3>\r\n\r\n<p>Một trong những nhầm lẫn nghi&ecirc;m trọng nhất về Rolex l&agrave; đồng hồ h&atilde;ng được sản xuất ho&agrave;n to&agrave;n bằng m&aacute;y m&oacute;c. C&oacute; thể tin đồn n&agrave;y xuất hiện v&igrave; xưa nay Rolex rất &iacute;t n&oacute;i về qu&aacute; tr&igrave;nh sản xuất của họ. Nhưng sự thật l&agrave; sản phẩm Rolex được lắp r&aacute;p hầu hết bằng con người. N&oacute; đ&uacute;ng như những g&igrave; bạn mong đợi về h&atilde;ng đồng hồ Thụy Sĩ danh tiếng.</p>\r\n\r\n<p>Hẳn nhi&ecirc;n đồng hồ Rolex cũng được d&ugrave;ng m&aacute;y m&oacute;c trong qu&aacute; tr&igrave;nh chế tạo. Thật ra, Rolex dễ d&agrave;ng l&agrave;m được chiếc đồng hồ sản xuất tr&ecirc;n m&aacute;y m&oacute;c tinh vi nhất thế giới. Robot v&agrave; những loại m&aacute;y tự động d&ugrave;ng để thực hiện những kh&acirc;u m&agrave; con người kh&ocirc;ng l&agrave;m tốt.&nbsp;</p>\r\n\r\n<p>Bao gồm ph&acirc;n loại, tr&aacute;m đầy, l&ecirc;n danh mục v&agrave; qu&aacute; tr&igrave;nh tinh vi kh&aacute;c bạn muốn m&aacute;y m&oacute;c thực hiện. Mặc d&ugrave; hầu hết loại m&aacute;y vẫn do con người điều khiển. Nhưng mọi kh&acirc;u lắp gh&eacute;p, từ mặt số đồng hồ đến d&acirc;y đeo tay đều l&agrave;m thủ c&ocirc;ng.&nbsp;</p>\r\n\r\n<p>Một chiếc m&aacute;y chỉ gi&uacute;p l&agrave;m việc như tạo &aacute;p lực hay đ&oacute;ng đinh ghim, xếp kim v&agrave; ấn ch&uacute;ng xuống&hellip; N&oacute;i điều đ&oacute; c&oacute; nghĩa l&agrave; tất cả kim đồng hồ được gắn bằng tay với một kỹ thuật vi&ecirc;n chuy&ecirc;n m&ocirc;n.</p>\r\n\r\n<p>Đồng hồ Rolex đề cao qu&aacute; tr&igrave;nh kiểm tra chất lượng nghi&ecirc;m ngặt. Quan điểm thống trị trong qu&aacute; tr&igrave;nh chế tạo ch&iacute;nh l&agrave; kiểm tra &ndash; kiểm tra, t&aacute;i kiểm tra, sau l&agrave; tiếp tục kiểm tra.&nbsp;</p>\r\n\r\n<p>Mục ti&ecirc;u l&agrave; đảm bảo rằng nếu c&oacute; một chiếc đồng hồ bị lỗi n&oacute; phải được ph&aacute;t hiện trước khi rời nh&agrave; m&aacute;y. Từng nh&oacute;m lớn thợ l&agrave;m đồng hồ v&agrave; kỹ thuật vi&ecirc;n lắp gh&eacute;p l&agrave;m việc với từng chi tiết nhỏ nhất trong suốt qu&aacute; tr&igrave;nh đồng hồ Rolex sản xuất. Đ&acirc;y l&agrave; qu&aacute; tr&igrave;nh trước v&agrave; sau khi gửi chi tiết đến COSC để chứng nhận thời gian.</p>\r\n\r\n<h3><strong>C&ocirc;ng nghệ lu&ocirc;n l&agrave; người bạn tốt nhất</strong></h3>\r\n\r\n<p>Triết l&yacute; Rolex c&oacute; vẻ rất thực dụng: &ldquo;Nếu con người l&agrave;m tốt, h&atilde;y để con người l&agrave;m; nếu m&aacute;y m&oacute;c l&agrave;m tốt, h&atilde;y để cho m&aacute;y l&agrave;m&rdquo;. Nhưng c&oacute; hai l&yacute; do khiến nhiều nh&agrave; sản xuất đồng hồ kh&ocirc;ng d&ugrave;ng m&aacute;y.&nbsp;</p>\r\n\r\n<p>Đầu ti&ecirc;n, m&aacute;y m&oacute;c cần đ&ograve;i hỏi đầu tư nhiều hơn v&agrave; trong nhiều trường hợp, để người l&agrave;m sẽ đỡ tốn k&eacute;m hơn hẳn. Thứ hai, họ kh&ocirc;ng đặt ra những y&ecirc;u cầu cao như Rolex. Thật ra, việc sử dụng kết hợp nh&acirc;n c&ocirc;ng v&agrave; m&aacute;y m&oacute;c sẽ gi&uacute;p Rolex sản xuất ra chiếc đồng hồ với độ ch&iacute;nh x&aacute;c cao hơn.</p>\r\n\r\n<p>Điểm mấu chốt trong năng lực tự động h&oacute;a Rolex l&agrave; việc kiểm so&aacute;t nguồn cung cấp. Một phần c&ocirc;ng việc khổng lồ ph&acirc;n cho m&aacute;y m&oacute;c như robot sẽ phụ tr&aacute;ch giữ v&agrave; lấy linh kiện ra. Sau đ&oacute; đặt v&agrave;o c&aacute;c ngăn tủ c&oacute; chứa hoặc đồng hồ th&agrave;nh phẩm&hellip; C&aacute;c kỹ thuật vi&ecirc;n sẽ nhận được linh kiện hay đồng hồ trong tối đa 8 ph&uacute;t sau khi robot ho&agrave;n th&agrave;nh nhiệm vụ.</p>\r\n\r\n<h3><strong>Đồng hồ lặn Rolex kiểm tra với nước trong bể &aacute;p suất</strong></h3>\r\n\r\n<p>Th&ocirc;ng thường h&atilde;ng đồng hồ sẽ kiểm tra sản phẩm bằng &aacute;p suất trong kh&ocirc;ng kh&iacute;. Đồng hồ đặt trong ph&ograve;ng nhỏ đầy kh&ocirc;ng kh&iacute; v&agrave; nếu &aacute;p suất kh&ocirc;ng kh&iacute; thay đổi c&oacute; nghĩa l&agrave; kh&ocirc;ng kh&iacute; lọt v&agrave;o b&ecirc;n trong chiếc đồng hồ.&nbsp;</p>\r\n\r\n<p>Mỗi chiếc Rolex Oyster đầu ti&ecirc;n được kiểm tra bằng kh&ocirc;ng kh&iacute; theo c&aacute;ch n&agrave;y. Mỗi chiếc đồng hồ kiểm tra trước v&agrave; sau khi một chi tiết hay đĩa số được lắp gh&eacute;p v&agrave;o b&ecirc;n trong n&oacute;.</p>\r\n\r\n<p>Đồng hồ lặn trải qua 2 lần kiểm tra kh&aacute;c nhau. Sau khi kiểm tra kh&ocirc;ng kh&iacute;, Rolex tiếp tục kiểm tra khả năng chịu nước của chiếc Rolex Submariner v&agrave; Deep Sea trong nước thật. Phương thức kiểm tra n&agrave;y cũng &iacute;t phổ biến hơn.&nbsp;</p>\r\n\r\n<p>Đồng hồ Submariner được đặt trong ống lớn đổ đầy nước để đảm bảo rằng ch&uacute;ng c&oacute; thể chịu nước độ s&acirc;u 300m. Phương ph&aacute;p kiểm tra n&agrave;y hức tạp v&igrave; Rolex &aacute;p dụng hệ thống phức tạp để kiểm tra liệu nước c&oacute; thấm v&agrave;o đồng hồ.</p>\r\n\r\n<p>Sau khi đặt đồng hồ v&agrave;o bể nước, đốt n&oacute;ng ch&uacute;ng l&ecirc;n v&agrave; một giọt nước lạnh được đặt l&ecirc;n mặt k&iacute;nh kiểm tra xem liệu qu&aacute; tr&igrave;nh đ&ocirc;ng đặc c&oacute; diễn ra. Sau đ&oacute; thiết bị cảm biến tiếp tục kiểm tra x&aacute;c định khối lượng nước thay đổi hay kh&ocirc;ng. V&igrave; thế, c&oacute; &iacute;t hơn một tr&ecirc;n một ng&agrave;n chiếc thất bại trong cuộc kiểm tra n&agrave;y!</p>\r\n\r\n<p>Với đồng hồ Deep Sea, kh&acirc;u kiểm tra sẽ c&ograve;n kh&oacute; khăn hơn. Rolex chế tạo loại bể nước &aacute;p suất cao đặc biệt với COMEX kiểm tra khả năng chịu &aacute;p lực ở độ s&acirc;u. Những chiếc bể n&agrave;y y như trong phim viễn tưởng &ndash; h&atilde;y tưởng tượng thiết bị tr&ocirc;ng như s&uacute;ng m&aacute;y nhiều n&ograve;ng cổ điển. Chiếc m&aacute;y mất hơn một tiếng kiểm tra từng chiếc đồng hồ với &aacute;p suất tương đương độ s&acirc;u nước 12.000m.</p>\r\n\r\n<h3><strong>Một l&ograve; đ&uacute;c v&agrave;ng nội bộ d&agrave;nh cho đồng hồ Rolex</strong></h3>\r\n\r\n<p>Rolex tự sản xuất v&agrave;ng v&igrave; chỉ c&oacute; một nh&oacute;m nhỏ nh&agrave; cung cấp th&eacute;p cho họ, tất cả v&agrave;ng v&agrave; bạch kim đều l&agrave;m nội bộ. Tại c&aacute;c l&ograve; đ&uacute;c Rolex, v&agrave;ng 24k trở th&agrave;nh v&agrave;ng 18k, v&agrave;ng trắng, hay v&agrave;ng Rolex Everose (một loại v&agrave;ng 18k kh&ocirc;ng bị phai m&agrave;u).</p>\r\n\r\n<p>Những l&ograve; nung dưới ngọn lửa lớn d&ugrave;ng để nấu chảy v&agrave; trộn những kim loại m&agrave; sau đ&oacute; th&agrave;nh đồng hồ hay d&acirc;y đeo. V&igrave; ch&iacute;nh Rolex kiểm so&aacute;t c&ocirc;ng đoạn sản xuất, gia c&ocirc;ng v&agrave;ng. N&ecirc;n h&atilde;ng c&oacute; thể đảm bảo nghi&ecirc;m ngặt y&ecirc;u cầu kh&ocirc;ng chỉ về chất lượng m&agrave; c&ograve;n cả về kiểu d&aacute;ng.&nbsp;</p>\r\n\r\n<p>Với hiểu biết về ng&agrave;nh c&ocirc;ng nghiệp n&agrave;y, Rolex l&agrave; h&atilde;ng đồng hồ duy nhất c&oacute; thể chế tạo v&agrave;ng ri&ecirc;ng hay c&oacute; l&ograve; đ&uacute;c nội bộ.</p>\r\n\r\n<p><img alt=\"Đồng hồ rolex thụy sỹ chính hãng 100%\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-rolex-thuy-sy_23082.jpg\" style=\"height:470px; width:605px\" /></p>\r\n\r\n<h3><strong>An ninh kho v&agrave;ng Fort Knox chẳng l&agrave; g&igrave; so với Rolex</strong></h3>\r\n\r\n<p>Chẳng c&oacute; g&igrave; đ&aacute;ng ngạc nhi&ecirc;n khi Rolex ch&uacute; trọng c&ocirc;ng t&aacute;c an ninh. To&agrave;n bộ đồng hồ gi&aacute; trị ho&agrave;n th&agrave;nh đều cần được bảo vệ. Rolex &aacute;p dụng chuỗi kiểm tra an ninh kỹ c&agrave;ng v&agrave; thậm ch&iacute; c&ograve;n c&oacute; hệ thống an to&agrave;n James Bond đặt dưới tầng hầm. Trước khi v&agrave;o ph&ograve;ng an ninh Rolex, bạn phải đi qua căn hầm ki&ecirc;n cố hệ thống nhận diện danh t&iacute;nh bằng dấu v&acirc;n mắt.</p>\r\n\r\n<p>Kỹ thuật vi&ecirc;n lắp gh&eacute;p đồng hồ c&oacute; hệ thống th&uacute; vị tr&ecirc;n b&agrave;n l&agrave;m việc. Với y&ecirc;u cầu đưa dấu hiệu nhận dạng mọi l&uacute;c kể cả sau khi nhận dạng bằng dấu v&acirc;n tay. Mọi thứ scan v&agrave; sắp theo danh mục.&nbsp;</p>\r\n\r\n<p>Mỗi linh kiện đều c&oacute; số serial ri&ecirc;ng sao chụp lại v&agrave; hợp với tổng thể mang một số serial ri&ecirc;ng kh&aacute;c. Cho đến khi lắp gh&eacute;p, kỹ thuật vi&ecirc;n c&oacute; mọi th&ocirc;ng tin cần thiết về từng linh kiện.</p>\r\n\r\n<p>Khi những chi tiết đồng hồ vận chuyển, ch&uacute;ng được chuyển trong chiếc xe cực kỳ b&igrave;nh thường nhưng c&oacute; lớp bọc sắt rất d&agrave;y. Rolex cực kỳ nghi&ecirc;m t&uacute;c trong c&ocirc;ng t&aacute;c bảo mật, v&igrave; l&yacute; do dễ hiểu l&agrave; gi&aacute; trị đồng hồ Rolex kh&ocirc;ng kh&aacute;c g&igrave; tiền.</p>\r\n\r\n<h3><strong>Một năm chỉ c&oacute; một chiếc đồng hồ Rolex</strong></h3>\r\n\r\n<p>Một quảng c&aacute;o Rolex nhiều năm trước cho biết, mất khoảng một năm ho&agrave;n th&agrave;nh một chiếc đồng hồ. Thật đ&aacute;ng ngạc nhi&ecirc;n l&agrave; khoảng thời gian sản xuất n&agrave;y vẫn như vậy đến ng&agrave;y h&ocirc;m nay.&nbsp;</p>\r\n\r\n<p>Sản xuất gần một triệu đồng hồ mỗi năm, nhưng Rolex kh&ocirc;ng muốn r&uacute;t ngắn bất kỳ giai đoạn n&agrave;o trong qu&aacute; tr&igrave;nh chế t&aacute;c. Tuy Rolex ch&uacute; trọng chất lượng cũng như t&iacute;nh hiệu quả. Nhưng về cơ bản, h&atilde;ng đều tập trung sản xuất những sản phẩm tốt nhất v&agrave; kh&ocirc;ng ngừng cải tiến để l&agrave;m tốt hơn nữa.</p>\r\n\r\n<p>Nếu bạn nghi&ecirc;n cứu về sự thay đổi đồng hồ Rolex từ trước đến nay, bạn sẽ thấy ch&uacute;ng tiến h&oacute;a dần theo thời gian. &Yacute; tưởng cải tiến thay v&igrave; thay đổi để thể hiện đ&uacute;ng như thế trong qu&aacute; tr&igrave;nh sản xuất. Rolex lu&ocirc;n lu&ocirc;n t&igrave;m c&aacute;ch nhằm cải tiến chất lượng th&ocirc;ng qua kỹ thuật t&acirc;n tiến v&agrave; quy tr&igrave;nh chế tạo đột ph&aacute;.&nbsp;</p>\r\n\r\n<p>Việc chuyển chất kết d&iacute;nh từ nh&ocirc;m sang ceramic bezel l&agrave; một v&iacute; dụ ho&agrave;n hảo. Tuy vậy, thời gian một năm kể từ khi bắt đầu chế t&aacute;c linh kiện đến l&uacute;c kiểm tra độ ch&iacute;nh x&aacute;c cũng l&agrave; điều quan ngại. Bởi n&oacute; sẽ ảnh hướng tới đội chi ph&iacute; sản xuất, dẫn đến tăng gi&aacute; th&agrave;nh sản phẩm.</p>\r\n\r\n<p>Dĩ nhi&ecirc;n Rolex c&oacute; thể đẩy nhanh tốc độ sản xuất c&ugrave;ng một số mẫu nhất định nếu cần thiết. Nhưng mỗi chiếc đồng hồ đều c&oacute; nhiều chi tiết được sản xuất nội bộ n&ecirc;n họ kh&ocirc;ng th&iacute;ch rượt đuổi với thời gian. Một khi tất cả chi tiết đ&atilde; ho&agrave;n th&agrave;nh, ch&uacute;ng sẽ được lắp gh&eacute;p hầu như ho&agrave;n to&agrave;n bằng tay rồi kiểm tra &aacute;p lực. Điều n&agrave;y gi&uacute;p quy tr&igrave;nh kiểm tra, đảm bảo chất lượng hết sức nghi&ecirc;m ngặt.</p>\r\n\r\n<p>Một v&iacute; dụ dễ thấy l&agrave; c&aacute;ch Rolex sản xuất về mỗi mặt số đồng hồ. Tất cả đều được l&agrave;m nội bộ, điều g&acirc;y ấn tượng nhất l&agrave; tất cả bộ phận tr&ecirc;n mặt số đều được gh&eacute;p bằng tay.&nbsp;</p>\r\n\r\n<p>Ở h&atilde;ng kh&aacute;c, m&aacute;y m&oacute;c đảm nhiệm kh&acirc;u n&agrave;y, nhưng đồng hồ Rolex tin rằng rằng mắt người dễ nhận thấy khiếm khuyết hơn. V&igrave; vậy, từng chi tiết tr&ecirc;n mặt số đặt v&agrave;o v&agrave; cố định theo phương ph&aacute;p thủ c&ocirc;ng.&nbsp;</p>\r\n\r\n<p>Mặt số thả rơi từ độ cao 20cm để đảm bảo kh&ocirc;ng chi tiết n&agrave;o bị rơi ra. Đ&acirc;y l&agrave; qu&aacute; tr&igrave;nh hết sức tỉ mỉ v&agrave; mất thời gian &ndash; c&ocirc;ng đoạn được ho&agrave;n th&agrave;nh nhờ những người thợ l&agrave;nh nghề.</p>\r\n\r\n<p><img alt=\"Một năm chỉ có một chiếc đồng hồ Rolex\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-rolex-thuy-sy_23081.jpg\" style=\"height:341px; width:605px\" /></p>\r\n\r\n<p>Một năm chỉ c&oacute; một chiếc đồng hồ Rolex</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; th&ocirc;ng tin chi tiết về thương hiệu<strong>&nbsp;đồng hồ Rolex</strong>&nbsp;v&agrave; những b&iacute; mật m&agrave; ch&uacute;ng t&ocirc;i muốn gửi tới bạn đọc. Cảm ơn c&aacute;c bạn đ&atilde; đọc b&agrave;i viết,.</p>', '2025-04-19 00:34:04', 1, 0, '2025-04-30 15:13:01'),
(6, 'Black Friday - Siêu bão giảm giá cuối cùng trong năm lên đến 50%', 'black-friday-sieu-bao-giam-gia-cuoi-cung-trong-nam-len-den-50', 1, 1, 1, 0, 'Mùa mua sắm sôi động nhất trong năm đã đến, DucClock đưa đến cho bạn một cơ hội không thể bỏ qua với chương trình Black Friday đặc biệt! Hãy sẵn sàng trải nghiệm sự sang trọng và đẳng cấp với ưu đãi lên tới 50% cho toàn bộ sản phẩm tại hệ thống.', '2025-04-30_dong-ho-chinh-hang-giam-50-b22112023-3.jpg', '<p>H&ograve;a chung kh&ocirc;ng kh&iacute; tưng bừng của ng&agrave;y hội mua sắm lớn nhất trong năm đang lan tỏa, chương tr&igrave;nh giảm gi&aacute; Black Friday tại DucClock sẽ diễn ra từ ng&agrave;y 20/4/2025. Đừng bỏ lỡ cơ hội đặc biệt n&agrave;y để sở hữu những chiếc đồng hồ đẳng cấp với mức gi&aacute; hấp dẫn.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-chinh-hang-giam-50_b22112023_1.jpg\" style=\"height:405px; width:605px\" /></p>\r\n\r\n<p>Với &ldquo;cơn b&atilde;o&rdquo; giảm gi&aacute; lần n&agrave;y, DucClock mang đến rất nhiều ưu đ&atilde;i lớn từ c&aacute;c thương hiệu nổi tiếng Thụy Sĩ như Epos, Atlantic đến c&aacute;c thương hiệu quen thuộc với kh&aacute;ch h&agrave;ng như Diamond D, Philippe Auguste, Jacques Lemans... Ngo&agrave;i ra mặt h&agrave;ng k&iacute;nh m&aacute;t ch&iacute;nh h&atilde;ng, b&uacute;t k&yacute;&hellip;c&ograve;n c&oacute; ưu đ&atilde;i giảm gi&aacute; 50%.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-chinh-hang-giam-50_b22112023_3.jpg\" style=\"height:310px; width:605px\" /></p>\r\n\r\n<p>Đặc biệt đến với DucClock trong chương tr&igrave;nh lần n&agrave;y, qu&yacute; kh&aacute;ch h&agrave;ng c&ograve;n c&oacute; cơ hội trải nghiệm ngay d&ograve;ng thương hiệu mới từ DucClock &ndash; Tsar Bomba với mức gi&aacute; ưu đ&atilde;i 10%. Với thiết kế nam t&iacute;nh, mạnh mẽ, đẳng cấp v&agrave; thời thượng, thương hiệu Tsar Bomba l&agrave; sự kết hợp giữa bộ m&aacute;y tuyệt hảo v&agrave; c&aacute;c chi tiết d&acirc;y vỏ bắt kịp xu hướng khi sử dụng c&aacute;c vật liệu qu&yacute; như Carbon, Ceramic, Titanium&hellip;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-chinh-hang-giam-50_b22112023_2.jpg\" style=\"height:242px; width:605px\" /></p>\r\n\r\n<p>Với sự đa dạng của bộ sưu tập đồng hồ chất lượng cao. D&ugrave; bạn l&agrave; người y&ecirc;u th&iacute;ch phong c&aacute;ch truyền thống, hiện đại, hay thể thao, Đăng Quang Watch đều c&oacute; đủ để đ&aacute;p ứng mọi sở th&iacute;ch v&agrave; c&aacute; t&iacute;nh.</p>\r\n\r\n<p>Đến DucClock, qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; thể thoải m&aacute;i lựa chọn những mẫu đồng hồ h&agrave;ng đầu m&agrave; kh&ocirc;ng lo lắng về ng&acirc;n s&aacute;ch. DucClock cam kết mang đến cho kh&aacute;ch h&agrave;ng trải nghiệm mua sắm th&uacute; vị v&agrave; gi&aacute; trị.</p>\r\n\r\n<p>Chưa bao giờ c&oacute; một cơ hội tốt như vậy để n&acirc;ng cấp bộ sưu tập đồng hồ của bạn. H&atilde;y tham gia chương tr&igrave;nh Black Friday tại DucClock để trải nghiệm sự sang trọng v&agrave; đẳng cấp với gi&aacute; trị kh&ocirc;ng thể tin được. H&atilde;y nhanh tay, v&igrave; số lượng c&oacute; hạn v&agrave; chương tr&igrave;nh chỉ diễn ra trong thời gian ngắn!</p>', '2025-04-19 00:34:28', 0, 1, '2025-04-30 14:47:38'),
(7, 'DucClock | Gửi trao yêu thương – Chọn đồng hồ làm quà tặng hoàn hảo ngày 8/3', 'ducclock-gui-trao-yeu-thuong-chon-dong-ho-lam-qua-tang-hoan-hao-ngay-83', 1, 1, 1, 0, 'Ngày Quốc tế Phụ nữ 8/3 là dịp hoàn hảo để bạn thể hiện tình yêu và sự trân trọng dành cho những người phụ nữ quan trọng trong cuộc đời mình. Một chiếc đồng hồ không chỉ là phụ kiện thời trang mà còn mang ý nghĩa của sự gắn kết, trân quý từng khoảnh khắc.', '2025-04-30_dong-ho-nu-qt83m.jpg', '<p>Mỗi người phụ nữ đều c&oacute; một c&acirc;u chuyện ri&ecirc;ng, một h&agrave;nh tr&igrave;nh đ&aacute;ng nhớ được ghi dấu bởi những cột mốc, những khoảnh khắc v&agrave; những cảm x&uacute;c kh&ocirc;ng thể qu&ecirc;n. C&oacute; người l&agrave; mẹ - người đ&atilde; d&agrave;nh cả đời để vun v&eacute;n tổ ấm, y&ecirc;u thương v&agrave; che chở. C&oacute; người l&agrave; người phụ nữ của sự nghiệp, kh&ocirc;ng ngừng nỗ lực để khẳng định bản th&acirc;n v&agrave; tạo dựng gi&aacute; trị. C&oacute; người lại l&agrave; c&ocirc; g&aacute;i trẻ đầy ho&agrave;i b&atilde;o, sẵn s&agrave;ng dấn th&acirc;n để chinh phục ước mơ. D&ugrave; ở bất kỳ độ tuổi, vị tr&iacute; hay ng&agrave;nh nghề n&agrave;o, mỗi người phụ nữ đều xứng đ&aacute;ng được tr&acirc;n trọng, y&ecirc;u thương v&agrave; ghi nhận.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-nu-qt83m.jpg\" /></p>\r\n\r\n<p>Nh&acirc;n dịp 8/3, h&atilde;y để những chiếc đồng hồ trở th&agrave;nh m&oacute;n qu&agrave; &yacute; nghĩa nhất để t&ocirc;n vinh những người phụ nữ m&agrave; bạn y&ecirc;u thương. Mỗi kim gi&acirc;y tr&ocirc;i qua ch&iacute;nh l&agrave; minh chứng cho sự hiện diện quan trọng của họ trong cuộc đời bạn &ndash; những người phụ nữ l&agrave;m n&ecirc;n gi&aacute; trị của thời gian.</p>\r\n\r\n<p>D&agrave;nh tặng mẹ: Mẹ lu&ocirc;n dịu d&agrave;ng v&agrave; tận t&acirc;m. Một chiếc đồng hồ mặt tr&ograve;n cổ điển, thanh lịch với d&acirc;y da cao cấp hoặc kim loại, đ&iacute;nh đ&aacute; tự nhi&ecirc;n hay mặt số khảm x&agrave; cừ sẽ t&ocirc;n l&ecirc;n vẻ đẹp sang trọng v&agrave; tinh tế.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-nu-at1.jpg\" /></p>\r\n\r\n<p>D&agrave;nh tặng vợ/người y&ecirc;u: Những thiết kế thanh mảnh, mặt số đ&iacute;nh đ&aacute; hoặc kim cương, họa tiết tr&aacute;i tim hay đồng hồ cơ lộ m&aacute;y sẽ l&agrave; biểu tượng ho&agrave;n hảo cho t&igrave;nh y&ecirc;u bền chặt.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-nu-ep25120251.jpg\" /></p>\r\n\r\n<p>D&agrave;nh tặng chị, em g&aacute;i/bạn th&acirc;n: Những c&ocirc; g&aacute;i trẻ trung, năng động sẽ th&iacute;ch những thiết kế đồng hồ c&oacute; n&eacute;t c&aacute; t&iacute;nh, thời thượng.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-nu-dm251.jpg\" /></p>\r\n\r\n<p>D&agrave;nh tặng đồng nghiệp/sếp nữ: Một chiếc đồng hồ đẳng cấp, thiết kế đơn giản nhưng tinh tế, sử dụng chất liệu cao cấp kh&ocirc;ng chỉ thể hiện sự chuy&ecirc;n nghiệp m&agrave; c&ograve;n t&ocirc;n l&ecirc;n phong th&aacute;i tự tin, quyền lực.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/shares/dong-ho-nu-ep252.jpg\" /></p>\r\n\r\n<p>Đặc biệt, nh&acirc;n dịp 8/3, DucClock giới thiệu bộ sưu tập đồng hồ mới nhất, quy tụ những thiết kế tinh xảo, hiện đại v&agrave; đẳng cấp, ph&ugrave; hợp với nhiều phong c&aacute;ch kh&aacute;c nhau. Đ&acirc;y l&agrave; những mẫu đồng hồ phi&ecirc;n bản giới hạn, chỉ c&oacute; số lượng nhất định tr&ecirc;n to&agrave;n hệ thống, mang đến sự độc quyền v&agrave; gi&aacute; trị sưu tầm đặc biệt.</p>\r\n\r\n<p>Phụ nữ kh&ocirc;ng cần những m&oacute;n qu&agrave; xa hoa, nhưng họ xứng đ&aacute;ng với những g&igrave; tinh tế nhất. H&atilde;y đến ngay DucClock để chọn lựa m&oacute;n qu&agrave; xứng tầm d&agrave;nh cho người phụ nữ bạn y&ecirc;u qu&yacute;.</p>', '2025-04-19 07:04:59', 0, 1, '2025-05-18 12:57:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `atb_name` varchar(255) NOT NULL,
  `atb_slug` varchar(255) NOT NULL,
  `atb_type` tinyint(4) NOT NULL DEFAULT 0,
  `atb_category_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `atb_name`, `atb_slug`, `atb_type`, `atb_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ nam', 'dong-ho-nam', 1, 1, '2025-04-06 08:55:34', NULL),
(2, 'Đồng hồ nữ', 'dong-ho-nu', 1, 1, '2025-04-06 09:01:18', NULL),
(3, 'Đồng hồ đôi', 'dong-ho-doi', 1, 1, '2025-04-06 09:01:28', NULL),
(4, 'Đồng hồ trẻ em', 'dong-ho-tre-em', 1, 1, '2025-04-06 09:01:56', NULL),
(5, 'Đồng hồ cơ', 'dong-ho-co', 2, 1, '2025-04-06 09:02:46', NULL),
(6, 'Đồng hồ điện tử', 'dong-ho-dien-tu', 2, 1, '2025-04-06 09:03:01', '2025-04-06 10:21:15'),
(8, 'Kính unisex', 'kinh-unisex', 4, 1, '2025-05-18 10:40:23', '2025-05-18 10:43:54'),
(9, 'Kính nữ', 'kinh-nu', 4, 1, '2025-05-18 10:40:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_slug` varchar(255) NOT NULL,
  `c_avatar` varchar(255) DEFAULT NULL,
  `c_banner` varchar(255) DEFAULT NULL,
  `c_description` varchar(255) DEFAULT NULL,
  `c_hot` tinyint(4) NOT NULL DEFAULT 0,
  `c_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_avatar`, `c_banner`, `c_description`, `c_hot`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ', 'dong-ho', NULL, NULL, NULL, 1, 1, '2025-03-22 00:51:29', '2025-04-06 08:58:06'),
(2, 'Phụ kiện đồng hồ', 'phu-kien-dong-ho', NULL, NULL, NULL, 0, 1, '2025-03-22 00:53:45', '2025-04-24 17:35:32'),
(3, 'Kính mắt', 'kinh-mat', NULL, NULL, NULL, 0, 1, '2025-03-22 00:54:03', '2025-04-24 17:35:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `k_name` varchar(255) NOT NULL,
  `k_slug` varchar(255) NOT NULL,
  `k_description` varchar(255) DEFAULT NULL,
  `k_hot` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `keywords`
--

INSERT INTO `keywords` (`id`, `k_name`, `k_slug`, `k_description`, `k_hot`, `created_at`, `updated_at`) VALUES
(2, 'rolex', 'rolex', 'sản phẩm hãng rolex', 0, '2025-03-22 05:48:16', '2025-05-03 12:26:46'),
(4, 'Đồ cũ', 'do-cu', 'Đồ cũ', 0, '2025-04-16 01:51:31', '2025-04-20 15:11:22'),
(5, 'hãng mới về', 'hang-moi-ve', 'mới về', 0, '2025-04-16 01:51:46', NULL),
(6, 'Hàng 99%', 'hang-99', '99%', 0, '2025-04-16 01:52:01', NULL),
(7, 'LImited', 'limited', 'Phiên bản giới hạn', 0, '2025-04-28 05:55:08', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mn_name` varchar(255) NOT NULL,
  `mn_slug` varchar(255) NOT NULL,
  `mn_avatar` varchar(255) DEFAULT NULL,
  `mn_banner` varchar(255) DEFAULT NULL,
  `mn_description` varchar(255) DEFAULT NULL,
  `mn_hot` tinyint(4) NOT NULL DEFAULT 0,
  `mn_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `mn_name`, `mn_slug`, `mn_avatar`, `mn_banner`, `mn_description`, `mn_hot`, `mn_status`, `created_at`, `updated_at`) VALUES
(1, 'Sự kiện', 'su-kien', NULL, NULL, NULL, 0, 1, '2025-04-16 18:03:06', '2025-05-09 05:34:14'),
(2, 'Tuyển dụng', 'tuyen-dung', NULL, NULL, NULL, 0, 1, '2025-04-16 18:03:40', NULL),
(4, 'Thông tin chung', 'thong-tin-chung', NULL, NULL, NULL, 0, 1, '2025-04-30 15:01:40', '2025-04-30 15:03:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_03_21_151756_create_categories_table', 1),
(6, '2025_03_22_104936_create_keywords_table', 2),
(7, '2025_03_23_090023_create_products_table', 3),
(8, '2025_04_06_143618_create_attributes_table', 4),
(9, '2025_04_09_063459_create_products_attributes_table', 5),
(10, '2025_04_10_065733_add_multiple_column_attribute_in_table_products', 6),
(11, '2014_10_12_100000_create_password_resets_table', 7),
(12, '2025_04_15_063741_create_transactions_table', 7),
(13, '2025_04_15_063829_create_orders_table', 7),
(14, '2025_04_16_090530_create_products_keywords_table', 8),
(15, '2025_04_16_125648_create_admins_table', 9),
(16, '2025_04_17_001718_create_menus_table', 10),
(17, '2025_04_17_002123_create_articles_table', 10),
(18, '2025_04_20_142741_alter_column_pro_number_in_table_product', 11),
(19, '2025_04_20_175926_create_slides_table', 12),
(20, '2025_04_20_221841_alter_column_a_position_in_table_articles', 13),
(21, '2025_04_21_145310_create_user_favourite_table', 14),
(22, '2025_04_23_110634_create_ratings_table', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `od_transaction_id` int(11) NOT NULL DEFAULT 0,
  `od_product_id` int(11) NOT NULL DEFAULT 0,
  `od_sale` int(11) NOT NULL DEFAULT 0,
  `od_qty` tinyint(4) NOT NULL DEFAULT 0,
  `od_price` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `od_transaction_id`, `od_product_id`, `od_sale`, `od_qty`, `od_price`, `created_at`, `updated_at`) VALUES
(10, 5, 3, 10, 1, 1350000, NULL, NULL),
(11, 5, 1, 3, 1, 1455000, NULL, NULL),
(15, 8, 14, 0, 1, 121800000, NULL, NULL),
(16, 9, 13, 0, 1, 122500000, NULL, NULL),
(17, 9, 10, 0, 1, 50400000, NULL, NULL),
(18, 10, 9, 0, 1, 16700000, NULL, NULL),
(20, 11, 14, 0, 1, 121800000, NULL, NULL),
(24, 15, 11, 20, 1, 460800, NULL, NULL),
(26, 17, 2, 0, 1, 12670000, '2025-05-13 09:06:29', NULL),
(27, 18, 2, 0, 1, 12670000, '2025-05-13 09:07:06', NULL),
(31, 22, 14, 0, 1, 121800000, NULL, NULL),
(32, 22, 10, 0, 1, 50400000, NULL, NULL),
(33, 23, 12, 20, 1, 787200, '2025-05-13 11:02:47', NULL),
(34, 24, 12, 20, 1, 787200, '2025-05-13 11:03:24', NULL),
(35, 25, 12, 20, 1, 787200, '2025-05-13 11:06:10', NULL),
(36, 26, 14, 0, 1, 121800000, '2025-05-18 10:11:25', NULL),
(37, 27, 14, 0, 1, 121800000, '2025-05-18 10:17:33', NULL),
(38, 28, 15, 0, 1, 300000, '2025-05-18 10:19:08', NULL),
(39, 29, 15, 0, 1, 300000, '2025-05-18 10:19:26', NULL),
(40, 30, 15, 0, 3, 300000, '2025-05-18 10:24:46', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `pro_slug` varchar(255) NOT NULL,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_price_entry` int(11) NOT NULL DEFAULT 0 COMMENT 'giá nhập',
  `pro_category_id` int(11) NOT NULL DEFAULT 0,
  `pro_admin_id` int(11) NOT NULL DEFAULT 0,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_avatar` varchar(255) DEFAULT NULL,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_pay` int(11) NOT NULL DEFAULT 0,
  `pro_description` mediumtext DEFAULT NULL,
  `pro_content` text DEFAULT NULL,
  `pro_review_total` int(11) NOT NULL DEFAULT 0,
  `pro_revieew_star` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `pro_number` int(11) NOT NULL DEFAULT 0,
  `pro_resistant` varchar(255) DEFAULT NULL,
  `pro_energy` varchar(255) DEFAULT NULL,
  `pro_country` tinyint(4) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_price`, `pro_price_entry`, `pro_category_id`, `pro_admin_id`, `pro_sale`, `pro_avatar`, `pro_view`, `pro_hot`, `pro_active`, `pro_pay`, `pro_description`, `pro_content`, `pro_review_total`, `pro_revieew_star`, `created_at`, `pro_number`, `pro_resistant`, `pro_energy`, `pro_country`, `updated_at`) VALUES
(1, 'Đồng hồ Atlantic Swiss AT-52851.44.25 Limited', 'dong-ho-atlantic-swiss-at-528514425-limited', 130000000, 0, 1, 0, 0, '2025-04-28_1436365136-dong-ho-thuy-sy-at.jpg', 5, 1, 1, 2, 'AT-52851.44.25 phiên bản giới hạn chỉ với 88 chiếc trên toàn cầu được đánh số thứ tự trên đồng hồ.', '<p>\r\n\r\n<strong>AT-52851.44.25</strong><strong>&nbsp;phiên bản giới hạn chỉ với 88 chiếc trên toàn cầu được đánh số thứ tự trên đồng hồ.</strong>\r\n\r\n</p>', 0, 0, '2025-03-24 06:54:53', 5, '5', 'Automatic (Cơ tự động)', 3, '2025-04-28 11:38:11'),
(2, 'Đồng hồ Aries Gold AG-G9005A G-BK', 'dong-ho-aries-gold-ag-g9005a-g-bk', 12670000, 0, 1, 0, 0, '2025-04-28_1122119778-dong-ho-co-lo-may-ag-g9005a-g-bkjpg4.jpg', 6, 1, 1, 7, 'Sự lựa chọn hoàn hảo cho cánh mày râu.', '<p>\r\n\r\n</p><p><strong>Sự lựa chọn hoàn hảo cho cánh mày râu.</strong></p><br>\r\n\r\n<p></p>', 0, 0, '2025-03-24 06:58:01', 10, '5', 'Automatic (cơ tự động)', 5, '2025-04-28 11:39:24'),
(3, 'Đồng hồ Epos Swiss E-8000.700.28.85.32 Diamond', 'dong-ho-epos-swiss-e-8000700288532-diamond', 59900000, 0, 1, 0, 0, '2025-04-28_172437906-donghonuthuysy1.jpg', 14, 1, 1, 5, 'E-8000.700.28.85.32 đính kim cương tự nhiên luôn lấp lánh và sang trọng ở mọi góc nhìn.', '<p>\r\n\r\n<strong>E-8000.700.28.85.32 đính kim cương tự nhiên luôn lấp lánh và sang trọng ở mọi góc nhìn.</strong>\r\n\r\n</p>', 5, 17, '2025-04-05 22:29:38', 20, '3', 'Quartz (Điện tử)', 3, '2025-04-28 11:39:38'),
(4, 'Đồng hồ Atlantic Swiss AT-29044.41.09', 'dong-ho-atlantic-swiss-at-290444109', 10580000, 0, 1, 0, 0, '2025-04-28_7dong-ho-nu-thuy-sy-atlantic-29044-2025576449.jpg', 6, 0, 1, 3, 'Sự lựa chọn hoàn hảo cho phái đẹp.', '<p>Sự lựa chọn hoàn hảo cho phái đẹp.</p>', 0, 0, '2025-04-09 04:38:09', 10, '3', 'Quartz/Pin', 3, '2025-04-28 11:39:50'),
(5, 'Đồng hồ Atlantic Swiss AT-29355.45.29LRD', 'dong-ho-atlantic-swiss-at-293554529lrd', 20560000, 0, 1, 0, 0, '2025-04-28_dong-ho-nu-thuy-sy31-1608412657.jpg', 10, 0, 1, 1, 'Sự lựa chọn hoàn hảo cho phái đẹp.', '<p>Sự lựa chọn hoàn hảo cho phái đẹp.</p>', 0, 0, '2025-04-12 00:57:27', 20, '5', 'Quartz/Pin', 3, '2025-04-28 11:40:09'),
(6, 'Đồng hồ Jacques Lemans JL-11-1654.2ZH Limited', 'dong-ho-jacques-lemans-jl-11-16542zh-limited', 7700000, 0, 1, 0, 0, '2025-04-28_875102291-dong-ho-chinh-hang-phien-ban-gioi-han6.jpg', 1, 0, 1, 0, 'Sự lựa chọn hoàn hảo cho cánh mày râu.', '<p>Sự lựa chọn hoàn hảo cho cánh mày râu.</p>', 0, 0, '2025-04-28 06:22:36', 5, '10', 'Quartz/Pin', 6, '2025-04-28 12:06:00'),
(7, 'Kính mát Philippe Auguste PA1050-C2', 'kinh-mat-philippe-auguste-pa1050-c2', 3200000, 0, 3, 0, 0, '2025-04-28_kinh-mat-thoi-trang-cao-ca21-1288699373.jpg', 3, 0, 1, 0, 'Kính thời trang', '<p>Kính thời trang</p>', 1, 5, '2025-04-28 06:23:05', 1, '0', '0', 1, '2025-05-18 22:36:39'),
(8, 'Dây da Diamond D D DM W 12', 'day-da-diamond-d-d-dm-w-12', 300000, 0, 2, 0, 0, '2025-04-29_1905887238-d-dm-w-12-1.jpg', 1, 0, 1, 0, 'Dây đeo đồng hồ', '<p>Dây đeo đồng hồ</p>', 0, 0, '2025-04-28 12:17:54', 20, '0', '0', 3, '2025-04-29 13:12:29'),
(9, 'Đồng hồ đôi Atlantic Swiss AT-62341.43.31+AT-22341.43.31', 'dong-ho-doi-atlantic-swiss-at-623414331at-223414331', 16700000, 0, 1, 0, 0, '2025-04-29_dong-ho-doi-thuy-sy-atlantic7-231056444.jpg', 3, 0, 1, 1, 'Biểu tượng của sự gắn kết và tình yêu vĩnh cửu', '<p>\r\n\r\nBiểu tượng của sự gắn kết và tình yêu vĩnh cửu\r\n\r\n<br></p>', 0, 0, '2025-04-29 12:24:49', 20, '3', 'Quartz (Điện tử)', 3, NULL),
(10, 'Đồng hồ Tsar Bomba TB8218-Combo B4', 'dong-ho-tsar-bomba-tb8218-combo-b4', 50400000, 0, 1, 0, 0, '2025-04-29_1163268018-tb8218-combo-b4jpg2.jpg', 4, 0, 1, 2, 'Phong cách phái mạnh', '<p>Phong cách phái mạnh<br></p>', 0, 0, '2025-04-29 12:34:15', 20, '10', 'Automatic', 4, NULL),
(11, 'Đồng hồ Q&Q QQ-VQ50J015Y', 'dong-ho-qq-qq-vq50j015y', 576000, 0, 1, 0, 20, '2025-04-29_1071522028-dong-ho-chinh-hang-54-1.jpg', 2, 0, 1, 1, 'Đồng hồ chính hãng Nhật Bản', '<p>Đồng hồ dành cho trẻ em đến từ thương hiệu Nhật bản</p>', 0, 0, '2025-04-29 12:43:41', 10, '10', 'Quartz/Pin', 7, '2025-04-30 13:38:57'),
(12, 'Đồng hồ Q&Q QQ-M137J003Y', 'dong-ho-qq-qq-m137j003y', 984000, 0, 1, 0, 20, '2025-04-29_snapedit-1745932711281-1.jpg', 2, 0, 1, 3, 'Đồng hồ trẻ em', '<p>Đồng hồ trẻ em xuất xứ Nhật Bản</p>', 0, 0, '2025-04-29 13:20:52', 20, '5', 'Quartz/Pin', 7, '2025-04-30 13:37:57'),
(13, 'Đồng hồ đôi Epos Swis E-3390.156.22.20.32 + E-4390.156.22.20.32', 'dong-ho-doi-epos-swis-e-3390156222032-e-4390156222032', 122500000, 0, 1, 0, 0, '2025-04-30_dong-ho-doi-thuy-sy-epos-swiss-334287555.jpg', 4, 0, 1, 2, 'Đồng hồ đôi', '<p>Đồng hồ đôi</p>', 0, 0, '2025-04-30 13:42:44', 20, '5', 'Automatic (cơ tự động)', 3, NULL),
(14, 'Đồng hồ đôi Epos Swis E-3439.322.20.16.30 + E-4390.152.20.96.30', 'dong-ho-doi-epos-swis-e-3439322201630-e-4390152209630', 121800000, 0, 1, 0, 0, '2025-04-30_dong-ho-doi-thuy-sy-epos-swiss4-1842580550.jpg', 15, 0, 1, 6, 'Đồng hồ đôi', '<p>Đồng hồ dành cho cặp đôi</p>', 3, 13, '2025-04-30 13:44:57', 20, '5', 'Automatic (cơ tự động)', 3, '2025-05-18 12:38:00'),
(15, 'Dây da Diamond D D DM R 12', 'day-da-diamond-d-d-dm-r-12', 300000, 0, 2, 0, 0, '2025-04-30_1752070534-d-dm-r-12-1.jpg', 2, 0, 1, 3, 'Dây đeo thay thế', '<p>dây đeo thay thế</p>', 0, 0, '2025-04-30 13:54:59', 20, '0', '0', 2, '2025-05-18 10:18:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pa_product_id` int(11) NOT NULL DEFAULT 0,
  `pa_attribute_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `pa_product_id`, `pa_attribute_id`) VALUES
(159, 1, 1),
(160, 1, 5),
(161, 2, 1),
(162, 2, 5),
(163, 3, 2),
(164, 3, 6),
(165, 4, 2),
(166, 4, 6),
(167, 5, 2),
(168, 5, 6),
(183, 6, 1),
(184, 6, 6),
(187, 9, 3),
(188, 9, 6),
(189, 10, 1),
(190, 10, 5),
(202, 12, 4),
(203, 11, 4),
(204, 11, 6),
(205, 13, 3),
(206, 13, 5),
(209, 14, 3),
(210, 14, 5),
(213, 7, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_keywords`
--

CREATE TABLE `products_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pk_product_id` int(11) NOT NULL DEFAULT 0,
  `pk_keyword_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_keywords`
--

INSERT INTO `products_keywords` (`id`, `pk_product_id`, `pk_keyword_id`) VALUES
(45, 1, 5),
(46, 1, 7),
(47, 2, 5),
(48, 3, 5),
(49, 4, 5),
(50, 5, 5),
(63, 6, 5),
(64, 6, 7),
(68, 9, 5),
(69, 10, 5),
(73, 8, 6),
(78, 12, 5),
(79, 11, 4),
(80, 13, 5),
(82, 14, 5),
(85, 15, 4),
(89, 7, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_user_id` int(11) NOT NULL DEFAULT 0,
  `r_product_id` int(11) NOT NULL DEFAULT 0,
  `r_number` tinyint(4) NOT NULL DEFAULT 0,
  `r_status` tinyint(4) NOT NULL DEFAULT 0,
  `r_content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `r_user_id`, `r_product_id`, `r_number`, `r_status`, `r_content`, `created_at`, `updated_at`) VALUES
(3, 2, 3, 5, 0, 'sản phẩm chất lượng', '2025-04-23 05:17:43', '2025-04-23 05:17:43'),
(4, 2, 3, 3, 0, 'tạm được', '2025-04-23 06:26:34', '2025-04-23 06:26:34'),
(5, 2, 3, 4, 0, 'tạm ổn', '2025-04-23 08:11:37', '2025-04-23 08:11:37'),
(6, 2, 3, 1, 0, 'xấu', '2025-04-23 08:11:56', '2025-04-23 08:11:56'),
(7, 2, 3, 4, 0, 'đánh giá cao', '2025-04-23 08:17:46', '2025-04-23 08:17:46'),
(8, 16, 14, 5, 0, 'sản phẩm thật tuyệt vời', '2025-04-30 15:31:05', '2025-04-30 15:31:05'),
(9, 16, 14, 3, 0, NULL, '2025-05-18 12:37:07', '2025-05-18 12:37:07'),
(10, 16, 14, 5, 0, 'sản phẩm tuyệt vời', '2025-05-18 12:38:00', '2025-05-18 12:38:00'),
(11, 16, 7, 5, 0, 'rất thời trang', '2025-05-18 22:36:39', '2025-05-18 22:36:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sd_title` varchar(255) DEFAULT NULL,
  `sd_link` varchar(255) DEFAULT NULL,
  `sd_image` varchar(255) DEFAULT NULL,
  `sd_target` tinyint(4) NOT NULL DEFAULT 1,
  `sd_active` tinyint(4) NOT NULL DEFAULT 1,
  `sd_sort` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `sd_title`, `sd_link`, `sd_image`, `sd_target`, `sd_active`, `sd_sort`, `created_at`, `updated_at`) VALUES
(1, 'banner01', 'hdkshds11', '2025-04-29_banner-dong-ho-nam.jpg', 1, 1, 1, '2025-04-20 15:03:28', '2025-04-29 13:33:13'),
(2, 'banner02', 'hsk', '2025-04-29_banner2.jpg', 1, 1, 1, '2025-04-20 14:33:32', '2025-04-29 13:35:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tst_user_id` int(11) NOT NULL DEFAULT 0,
  `tst_total_money` int(11) NOT NULL DEFAULT 0,
  `tst_name` varchar(255) DEFAULT NULL,
  `tst_email` varchar(255) DEFAULT NULL,
  `tst_phone` varchar(255) DEFAULT NULL,
  `tst_address` varchar(255) DEFAULT NULL,
  `tst_note` varchar(255) DEFAULT NULL,
  `tst_status` tinyint(4) NOT NULL DEFAULT 1,
  `tst_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 thanh toan khi nhan hang, 2 thanh toan online',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transactions`
--

INSERT INTO `transactions` (`id`, `tst_user_id`, `tst_total_money`, `tst_name`, `tst_email`, `tst_phone`, `tst_address`, `tst_note`, `tst_status`, `tst_type`, `created_at`, `updated_at`) VALUES
(5, 0, 2805000, 'Hậu', 'vunhanhau@gmail.com', '09379273824', 'Hải Dương', 'cần gấp', 1, 1, '2025-04-20 00:29:12', NULL),
(8, 16, 121800000, 'Đức', 'ductran23072002@gmail.com', '01239632201', 'Hải Dương', 'giao cẩn thận', 3, 1, '2025-04-30 15:34:04', '2025-04-30 15:34:37'),
(9, 16, 172900000, 'Đức', 'ductran23072002@gmail.com', '01239632201', 'Hà Nội', NULL, 2, 1, '2025-04-30 15:35:20', '2025-04-30 15:40:04'),
(10, 3, 16700000, 'duck duck', 'duckduck@gmail.com', '949493793', 'Hải Dương', 'ko', -1, 1, '2025-04-30 15:47:38', '2025-04-30 15:48:01'),
(11, 0, 121800000, 'Hạnh', 'hanh123@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-13 07:19:21', NULL),
(15, 0, 460800, 'Hạnh', 'hanh123@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-13 08:17:55', NULL),
(17, 0, 12670000, 'Hạnh', 'hanh123@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-13 09:06:29', NULL),
(18, 0, 12670000, 'Hạnh', 'hanh123@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-13 09:07:06', NULL),
(22, 0, 172200000, 'Hạnh', 'hanh123@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-13 09:50:19', NULL),
(23, 0, 787200, 'Hạnh', 'hanh123@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-13 11:02:47', NULL),
(24, 0, 787200, 'Hạnh', 'hanh123@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-13 11:03:24', NULL),
(25, 16, 787200, 'Đức', 'ductran23072002@gmail.com', '01239632201', 'Hải Dương', NULL, 1, 1, '2025-05-13 11:06:10', NULL),
(26, 0, 121800000, 'Hùng', 'hung1989@gmail.com', '0993497394', 'Đà Nẵng', NULL, 1, 1, '2025-05-18 10:11:25', NULL),
(27, 0, 121800000, 'Hùng', 'hung1989@gmail.com', '09379273824', 'Đà Nẵng', NULL, 1, 1, '2025-05-18 10:17:33', NULL),
(28, 0, 300000, 'Hùng', 'hung1989@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-18 10:19:08', NULL),
(29, 0, 300000, 'Hùng', 'hung1989@gmail.com', '09379273844', 'Hải Dương', NULL, 1, 1, '2025-05-18 10:19:26', NULL),
(30, 0, 900000, 'Hạnh', 'hanh123@gmail.com', '09379273824', 'Hải Dương', NULL, 1, 1, '2025-05-18 10:24:46', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'duck duck', 'duckduck@gmail.com', NULL, '$2y$12$tCNkvUEeLhf3Z/5Znm0RLOYDpZxMg5vXUEPksckEksfwTFr/3r5l2', '949493793', NULL, NULL, NULL, '2025-04-13 09:27:56', NULL),
(4, 'duclk', 'duckl@gmail.com', NULL, '$2y$12$qZZtJ0t0mDyl7sg2rFSdIeizZvxTyvvE9ISvUp9L9TyBqhlW2Dw9C', '794934743', NULL, NULL, NULL, '2025-04-16 16:30:12', NULL),
(5, 'duc tran', 'admin@gmail.com', NULL, '$2y$12$YijMX.DisKtNeNj.6pp9OO17LXmbz4FC5KJagO5jMjsCoOdTyNy0.', '9334702213', NULL, NULL, NULL, '2025-04-16 16:34:00', NULL),
(6, 'Hậu', 'hau2307@gmail.com', NULL, '$2y$12$.w2tAbgvpc7xUzDDYCxbQ.MZlUl7JeVvIKi5SUx1RB3oquT8PrR3y', '334702213', NULL, NULL, NULL, '2025-04-21 07:35:06', NULL),
(15, 'Trần Đức', 'ductran200223@gmail.com', NULL, '$2y$12$dZf510FhwxAJJbCvVOtYX.GUYSK99ZuxrTlmGL/rxLcw4AyVw.PLu', '0334702213', NULL, NULL, NULL, '2025-04-22 01:15:03', NULL),
(16, 'Đức', 'ductran23072002@gmail.com', NULL, '$2y$12$rveQ0vr3kisaVBRpBj17H.mvCe7bZ7x.gaB67axX9cpGvW5EgRP2G', '01239632201', NULL, NULL, NULL, '2025-04-30 15:28:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_favourite`
--

CREATE TABLE `user_favourite` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uf_product_id` int(11) NOT NULL DEFAULT 0,
  `uf_user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_favourite`
--

INSERT INTO `user_favourite` (`id`, `uf_product_id`, `uf_user_id`) VALUES
(3, 1, 2),
(4, 2, 2),
(1, 5, 2),
(5, 14, 16);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_a_slug_index` (`a_slug`),
  ADD KEY `articles_a_hot_index` (`a_hot`),
  ADD KEY `articles_a_active_index` (`a_active`),
  ADD KEY `articles_a_menu_id_index` (`a_menu_id`);

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_atb_name_unique` (`atb_name`),
  ADD KEY `attributes_atb_category_id_index` (`atb_category_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_slug_unique` (`c_slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keywords_k_slug_unique` (`k_slug`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_mn_slug_unique` (`mn_slug`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_pro_slug_unique` (`pro_slug`),
  ADD KEY `products_pro_hot_index` (`pro_hot`),
  ADD KEY `products_pro_active_index` (`pro_active`);

--
-- Chỉ mục cho bảng `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_attributes_pa_product_id_index` (`pa_product_id`),
  ADD KEY `products_attributes_pa_attribute_id_index` (`pa_attribute_id`);

--
-- Chỉ mục cho bảng `products_keywords`
--
ALTER TABLE `products_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_keywords_pk_product_id_index` (`pk_product_id`),
  ADD KEY `products_keywords_pk_keyword_id_index` (`pk_keyword_id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tst_user_id_index` (`tst_user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `user_favourite`
--
ALTER TABLE `user_favourite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_favourite_uf_product_id_uf_user_id_unique` (`uf_product_id`,`uf_user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT cho bảng `products_keywords`
--
ALTER TABLE `products_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `user_favourite`
--
ALTER TABLE `user_favourite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
