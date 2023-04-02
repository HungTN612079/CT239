-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 27, 2023 lúc 09:40 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_mysql1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`) VALUES
(4, 'hungadmin', '202cb962ac59075b964b07152d234b70', 1),
(5, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(6, 'hung', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tomtat` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `noidung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(8, 'Exynos 1330 và Exynos 1380 chính thức ra mắt: Thông số ấn tượng, hỗ trợ mạng 5G!', '', '<h3><strong>1.Th&ocirc;ng số kỹ thuật của chip Exynos 1380</strong></h3>\r\n\r\n<p>Exynos 1380 được sản xuất bằng quy tr&igrave;nh 5 nm với bốn l&otilde;i CPU ARM Cortex-A78 tốc độ 2.4 GHz, bốn l&otilde;i CPU ARM Cortex-A55 tốc độ 2 GHz v&agrave; GPU Mali-G68 MP5 tốc độ 950 MHz. Con chip hỗ trợ m&agrave;n h&igrave;nh Full HD+ với tốc độ l&agrave;m mới l&ecirc;n tới 144 Hz. Đồng thời, tương th&iacute;ch với c&ocirc;ng nghệ DRAM LPDDR4x, LPDDR5 v&agrave; bộ lưu trữ UFS 3.1.</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Files/2023/02/23/1512280/background138-230223-161722-800-resize.jpg\" /></p>\r\n\r\n<p>C&ocirc;ng nghệ Triple ISP được t&iacute;ch hợp hỗ trợ ống k&iacute;nh l&ecirc;n tới 200 MP với khả năng chụp ảnh 64 MP, v&agrave; độ trễ m&agrave;n trập bằng kh&ocirc;ng. NPU của Exynos&nbsp;1380&nbsp;c&oacute; thể t&iacute;nh to&aacute;n l&ecirc;n tới 4.9 TOPS (ngh&igrave;n tỷ lần/gi&acirc;y), cao hơn một ch&uacute;t so với Exynos 1280. ISP cũng hỗ trợ quay video 4K với tốc độ khung h&igrave;nh 30 fps đi k&egrave;m với chống rung điện tử EIS.</p>\r\n\r\n<p>Chip Exynos 1380 tr&ecirc;n&nbsp;Galaxy A54 5G&nbsp;c&ograve;n c&oacute; chế độ HDR v&agrave; khả năng ​​​​nhận dạng đối tượng một c&aacute;ch nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c nhất. Modem 5G t&iacute;ch hợp hỗ trợ c&aacute;c băng tần mmWave v&agrave; sub-6 GHz, đạt tốc độ tải xuống tối đa l&ecirc;n tới 3.67 Gbps v&agrave; tốc độ tải l&ecirc;n 1.28 Gbps. Ngo&agrave;i ra c&ograve;n hỗ trợ BeiDou, Galileo, GLONASS, GPS, Wi-Fi 6, Bluetooth 5.2, NFC v&agrave; cổng USB Type-C.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>2.Th&ocirc;ng số kỹ thuật của chip&nbsp;Exynos 1330</strong></h3>\r\n\r\n<p>Exynos 1330 l&agrave; bộ vi xử l&yacute; gi&aacute; rẻ đầu ti&ecirc;n của Samsung sử dụng quy tr&igrave;nh 5 nm, với hai l&otilde;i CPU Cortex-A78 tốc độ 2.4 GHz, s&aacute;u l&otilde;i CPU Cortex-A55 tốc độ 2 GHz v&agrave; một GPU Mali-G68 MP2. Chip Exynos mới mang lại độ ph&acirc;n giải Full HD+ ở tốc độ l&agrave;m mới 120 Hz, ngo&agrave;i ra c&ograve;n tương th&iacute;ch với c&ocirc;ng nghệ DRAM LPDDR4x, LPDDR5 v&agrave; bộ lưu trữ UFS 2.2/UFS 3.1.</p>\r\n\r\n<p>C&ocirc;ng nghệ ISP b&ecirc;n trong Exynos 1330 hỗ trợ camera l&ecirc;n tới 108 MP, c&oacute; thể chụp ảnh 32 MP với độ trễ m&agrave;n trập bằng kh&ocirc;ng. Thiết lập m&aacute;y ảnh k&eacute;p 16 MP / 16 MP cũng được hỗ trợ với độ trễ tương tự. MFC (Multi Format Codec) c&oacute; thể ghi v&agrave; ph&aacute;t video 4K với tốc độ khung h&igrave;nh 30 fps ở định dạng HEVC, H.264 v&agrave; VP8.</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Files/2023/02/23/1512280/background140-230223-162404-800-resize.jpg\" /></p>\r\n\r\n<p>Bạn cảm thấy th&ocirc;ng số kỹ thuật của&nbsp;Exynos 1330 v&agrave; Exynos 1380 như thế n&agrave;o?</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.thegioididong.com/\">https://www.thegioididong.com/</a></p>\r\n', 5, 1, '1677484587_baiviet6.jpg'),
(9, 'Kỳ vọng iPhone 16 Ultra Concept: Thiết kế ấn tượng, chip Apple A18 Bionic mạnh mẽ', '', '<h3><strong>iPhone 16 Ultra concept tuyệt đẹp với thiết kế lấy cảm hứng từ Apple Watch Ultra</strong></h3>\r\n\r\n<p>Ở thời điểm hiện tại, ch&uacute;ng ta vẫn chưa c&oacute; được những h&igrave;nh ảnh ch&iacute;nh x&aacute;c nhất về iPhone 16 Ultra. Tuy nhi&ecirc;n, trang tin&nbsp;MacRumors&nbsp;đ&atilde; chia sẻ rằng một nh&agrave; thiết kế đồ họa c&oacute; t&ecirc;n Jonas Daehnert đ&atilde; tạo ra concept iPhone Ultra bằng c&aacute;ch kết hợp c&aacute;c yếu tố thiết kế của mẫu&nbsp;Apple Watch&nbsp;Ultra&nbsp;lẫn iPhone truyền thống tr&ocirc;ng kh&aacute; độc đ&aacute;o. M&igrave;nh nghĩ rằng bản concept dưới đ&acirc;y sẽ rất th&iacute;ch hợp để sử dụng tr&ecirc;n iPhone 16 Ultra.&nbsp;C&aacute;c bạn c&oacute; thể tham khảo qua một v&agrave;i h&igrave;nh ảnh concept b&ecirc;n dưới để c&oacute; c&aacute;i nh&igrave;n tổng quan về sản phẩm nh&eacute;!</p>\r\n\r\n<p>Về ngoại h&igrave;nh, concept đ&atilde; gợi l&ecirc;n h&igrave;nh ảnh của một chiếc iPhone Ultra c&oacute; thiết kế kh&aacute; đầy đặn v&agrave; mang đến cảm gi&aacute;c cứng c&aacute;p, chắc chắn, khung viền bo cong mềm mại hơn v&agrave; c&aacute;c n&uacute;t bấm cũng được l&agrave;m rất nổi bật. Ngo&agrave;i ra, nh&igrave;n v&agrave;o cạnh dưới của thiết bị th&igrave; ch&uacute;ng ta c&oacute; thể thấy cổng sạc Lightning đ&atilde; kh&ocirc;ng c&ograve;n nữa v&agrave; thay v&agrave;o đ&oacute; l&agrave; cổng sạc USB Type-C, điều m&agrave; nhiều trang tin dự đo&aacute;n sẽ xuất hiện tr&ecirc;n c&aacute;c mẫu điện thoại thuộc d&ograve;ng iPhone 15 ra mắt v&agrave;o khoảng cuối năm nay.</p>\r\n\r\n<p>Th&ecirc;m v&agrave;o đ&oacute;, m&igrave;nh nghĩ iPhone 16 Ultra vẫn sẽ giữ k&iacute;ch thước m&agrave;n h&igrave;nh 6.7 inch v&agrave; đi k&egrave;m với tấm nền&nbsp;Super Retina XDR OLED. Điều n&agrave;y sẽ mang đến cho người d&ugrave;ng một kh&ocirc;ng gian hiển thị rộng r&atilde;i với h&igrave;nh ảnh sắc n&eacute;t v&agrave; m&agrave;u sắc được thể hiện sống động.&nbsp;</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, m&igrave;nh hy vọng m&agrave;n h&igrave;nh của iPhone 16 Ultra sẽ được trang bị c&ocirc;ng nghệ tần số qu&eacute;t cao ProMotion 120 Hz gi&uacute;p người d&ugrave;ng c&oacute; được những trải nghiệm vuốt chạm cực mượt tr&ecirc;n chiếc m&agrave;n h&igrave;nh lớn của thiết bị.</p>\r\n\r\n<h3>iPhone 16 Ultra cấu h&igrave;nh mạnh mẽ với Apple A18 Bionic</h3>\r\n\r\n<p>Ở d&ograve;ng sản phẩm iPhone 14 Series, ch&uacute;ng ta đ&atilde; nhận thấy sự c&aacute;ch biệt r&otilde; r&agrave;ng nhất giữa phi&ecirc;n bản thường v&agrave; cao cấp kh&ocirc;ng chỉ ở thiết kế b&ecirc;n ngo&agrave;i m&agrave; cả th&ocirc;ng số b&ecirc;n trong. Do đ&oacute;, m&igrave;nh tin rằng iPhone 16 Series cũng vẫn sẽ kế thừa những điều tương tự khi phi&ecirc;n bản ti&ecirc;u chuẩn sẽ được trang bị chip Apple A17 Bionic, trong khi đ&oacute; phi&ecirc;n bản cao cấp nhất m&agrave; ch&uacute;ng ta đang b&agrave;n luận l&agrave; iPhone 16 Ultra sẽ c&oacute; chip Apple A18 Bionic. Tuy chưa c&oacute; nhiều th&ocirc;ng tin nhiều về con chip mới n&agrave;y nhưng m&igrave;nh dự đo&aacute;n rằng đ&acirc;y sẽ l&agrave; bộ vi xử l&yacute; được sản xuất tr&ecirc;n tiến tr&igrave;nh 3 nm ti&ecirc;n tiến với những cải tiến về tốc độ xử l&yacute; v&agrave; nhiệt độ sẽ ổn định hơn.</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Files/2023/02/22/1512106/6-230223-120512-800-resize.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, mặc d&ugrave; RAM l&agrave; yếu tố &iacute;t được Apple c&ocirc;ng bố tr&ecirc;n iPhone nhưng với việc sở hữu chip Apple A18 Bionic mới, iPhone 16 Ultra c&oacute; thể cũng sẽ được n&acirc;ng cấp c&ocirc;ng nghệ RAM để đ&aacute;p ứng cho xu hướng hiện nay. Cụ thể th&igrave; theo trang tin MacRumors,&nbsp;c&aacute;c mẫu iPhone 16 cao cấp kể cả iPhone 16 Ultra đều sẽ được trang bị chuẩn RAM LPDDR5X cho tốc độ xử l&yacute; th&ocirc;ng tin nhanh hơn, gi&uacute;p c&aacute;c t&aacute;c vụ sử dụng đa nhiệm sẽ trở n&ecirc;n mượt m&agrave; hơn rất nhiều.</p>\r\n\r\n<p>Ngo&agrave;i ra, m&igrave;nh hy vọng rằng iPhone 16 Ultra sẽ c&oacute; cải tiến về thời lượng sử dụng khi m&aacute;y được trang bị vi&ecirc;n pin 4.500 mAh. Tuy rằng con số n&agrave;y kh&ocirc;ng qu&aacute; cao so với mặt bằng chung nhưng với khả năng tối ưu tốt của hệ điều h&agrave;nh iOS trong v&agrave;i năm đổ lại đ&acirc;y th&igrave; iPhone 16 Ultra hứa hẹn sẽ mang đến thời gian sử dụng l&acirc;u d&agrave;i. Hơn nữa, như m&igrave;nh đ&atilde; đề cập ở phần thiết kế th&igrave; iPhone 16 Ultra sẽ được thay đổi ho&agrave;n to&agrave;n từ cổng sạc lightning sang USB Type-C. Điều n&agrave;y hứa hẹn sẽ mang đến tốc độ sạc, truyền tải dữ liệu nhanh hơn v&agrave; đồng bộ với nhiều sản phẩm kh&aacute;c trong hệ sinh th&aacute;i Apple.</p>\r\n\r\n<p>Theo những th&ocirc;ng tin r&ograve; rỉ t&iacute;nh đến thời điểm hiện tại, th&ocirc;ng số cấu h&igrave;nh iPhone 16 Ultra cụ thể như sau:</p>\r\n\r\n<p>M&agrave;n h&igrave;nh: K&iacute;ch thước 6.7 inch, tấm nền LTPO Super Retina XDR OLED, tần số qu&eacute;t 120 Hz. CPU: Apple A18 Bionic. RAM: 8 GB LDPPR5X. Bộ nhớ trong: 128 GB, 256 GB, 512 GB hoặc 1 TB. Pin: 4.500 mAh.</p>\r\n\r\n<h3><strong>IPhone 16 Ultra gi&aacute; bao nhi&ecirc;u th&igrave; hợp l&yacute;? Khi n&agrave;o iPhone 16 Ultra ra mắt?</strong></h3>\r\n\r\n<p>Ở thời điểm hiện tại th&igrave; ch&uacute;ng chưa c&oacute; th&ocirc;ng tin ch&iacute;nh x&aacute;c n&agrave;o về thời gian ra mắt của iPhone 16 Ultra hay d&ograve;ng sản phẩm iPhone 16. Tuy nhi&ecirc;n, nếu dựa v&agrave;o lộ tr&igrave;nh ra mắt hằng năm th&igrave; m&igrave;nh đo&aacute;n rằng iPhone 16 Series sẽ ra mắt v&agrave;o khoảng th&aacute;ng 9/2025. C&ograve;n về mức gi&aacute;, iPhone 16 Ultra hứa hẹn sẽ được trang bị kh&aacute; nhiều cải tiến ấn tượng c&ugrave;ng thiết kế mới. Do đ&oacute;, m&igrave;nh nghĩ thiết bị sẽ c&oacute; mức gi&aacute; khởi điểm từ 38 - 40 triệu đồng.</p>\r\n\r\n<p>Vậy bạn kỳ vọng g&igrave; về iPhone 16 Ultra kh&ocirc;ng? H&atilde;y để lại b&igrave;nh luận ngay b&ecirc;n dưới để m&igrave;nh v&agrave; mọi người c&ugrave;ng biết nh&eacute;! Cảm ơn c&aacute;c bạn đ&atilde; theo d&otilde;i đến hết b&agrave;i viết của m&igrave;nh.</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.thegioididong.com/\">https://www.thegioididong.com/</a></p>\r\n', 5, 1, '1677484577_baiviet5.jpg'),
(10, 'Xiaomi 13 Lite đã có trên Geekbench, cùng khám phá điểm hiệu năng nhé!', '', '<p>Xiaomi&nbsp;sẽ ra mắt&nbsp;Xiaomi 13,&nbsp;Xiaomi 13 Pro,&nbsp;Xiaomi 13 Lite&nbsp;(đổi t&ecirc;n từ&nbsp;Xiaomi CIVI 2) tại MWC 2023, diễn ra v&agrave;o ng&agrave;y 27/2. Cho đến hiện tại th&igrave; cấu h&igrave;nh cũng như gi&aacute; b&aacute;n đ&atilde; lộ &quot;tất tần tật&quot;, mới đ&acirc;y th&igrave; Xiaomi 13 Lite đ&atilde; c&oacute; tr&ecirc;n trang đo hiệu năng Geekbench.</p>\r\n\r\n<p>Trang n&agrave;y cho biết Xiaomi 13 Lite c&oacute; m&atilde; model&nbsp;2210129SG được mong đợi c&oacute; chip Snapdragon 7 Gen 1, 8 GB RAM, hệ điều h&agrave;nh Android 12 v&agrave; MIUI 13. M&aacute;y c&oacute; điểm đơn nh&acirc;n l&agrave; 793 v&agrave; đa nh&acirc;n l&agrave; 2.938.</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Files/2023/02/25/1512707/screenshot-2023-02-25-163207-250223-200750-800-resize.jpg\" /></p>\r\n\r\n<p>V&igrave; được đổi t&ecirc;n từ Xiaomi CIVI 2, n&ecirc;n Xiaomi 13 Lite c&oacute; thể chung cấu h&igrave;nh, như m&agrave;n h&igrave;nh AMOLED 6.55 inch, độ ph&acirc;n giải Full HD+, tần số qu&eacute;t 120 Hz, c&oacute; phần khuyết giọt nước.</p>\r\n\r\n<p>Xiaomi 13 Lite trang bị chip Snapdragon 7 Gen 1, c&oacute; biến thể c&oacute; RAM LPDDR4X l&ecirc;n tới 12 GB, bộ nhớ trong l&ecirc;n tới 256 GB, UFS 2.2, dung lượng pin đạt 4.500 mAh, sạc nhanh 67 W.</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Files/2023/02/25/1512707/xiaomi-civi-2-hands-on-250223-200749-800-resize.jpg\" /></p>\r\n\r\n<p>C&ograve;n bạn đ&aacute;nh gi&aacute; như thế n&agrave;o về sản phẩm n&agrave;y?</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.thegioididong.com/\">https://www.thegioididong.com/</a></p>\r\n', 5, 1, '1677484566_baiviet4.jpg'),
(11, 'Ảnh render tiết lộ toàn bộ thiết kế Motorola Razr 2023, sẽ vượt trội hơn Z Flip5?', '', '<p>Ảnh render&nbsp;Motorola Razr 2023 cho thấy&nbsp;Motorola đ&atilde; bắt đầu tham gia cuộc đua m&agrave;n h&igrave;nh phụ, b&ecirc;n cạnh&nbsp;OPPO. Đ&acirc;y cũng l&agrave; yếu điểm m&agrave;&nbsp;Samsung Galaxy Z<a href=\"http://thegioididong.com/dtdd/samsung-galaxy-z-flip4\" target=\"_blank\"> </a>Flip4&nbsp;đang g&aacute;nh chịu. TheTechOutlook đ&atilde; chia sẻ nhiều ảnh render cho ch&uacute;ng ta c&aacute;i nh&igrave;n trước về&nbsp;Motorola Razr 2023.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Màn hình phụ có thể lớn hơn 3.5 inch\" src=\"https://cdn.tgdd.vn/Files/2023/02/26/1512845/motorola-razr-2023-foldable-phone-4-260223-175040-800-resize.jpg\" /></p>\r\n\r\n<p>M&agrave;n h&igrave;nh phụ n&agrave;y c&oacute; lẽ l&agrave; chiếm một nửa th&acirc;n sau của m&aacute;y. Đ&acirc;y l&agrave; cải tiến rất đ&aacute;ng kể, khi&nbsp;Motorola Razr 2022 c&oacute; m&agrave;n h&igrave;nh phụ l&agrave; 2.7 inch, c&oacute; lẽ m&agrave;n h&igrave;nh mới n&agrave;y tr&ecirc;n bản 2023 c&ograve;n lớn hơn cả của&nbsp;OPPO Find N2 Flip&nbsp;(3.26 inch). R&otilde; r&agrave;ng l&agrave; m&agrave;n h&igrave;nh phụ to th&igrave; trải nghiệm người d&ugrave;ng cũng sẽ tốt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Màn hình phụ có thể hiển thị thông báo tốt\" src=\"https://cdn.tgdd.vn/Files/2023/02/26/1512845/motorola-razr-2023-foldable-phone-2-260223-175037-800-resize.jpg\" /></p>\r\n\r\n<p>Ảnh render cũng cho thấy m&agrave;n h&igrave;nh phụ c&oacute; thể hiển thị th&ocirc;ng b&aacute;o, người d&ugrave;ng c&oacute; thể xem th&ocirc;ng b&aacute;o m&agrave; kh&ocirc;ng cần phải mở điện thoại. Ch&uacute;ng ta cũng c&oacute; thể dễ d&agrave;ng chụp ảnh selfie v&agrave; gọi video tại khu vực n&agrave;y.</p>\r\n\r\n<p>Ngo&agrave;i m&agrave;n h&igrave;nh phụ th&igrave;&nbsp;Motorola Razr 2023 hầu như giống với thế hệ trước, vẫn l&agrave; kiểu gập vỏ s&ograve;, được tr&ocirc;ng đợi cải tiến về độ bền v&agrave; độ ho&agrave;n thiện.&nbsp;Motorola Razr 2023 c&oacute; thể được trang bị chip Snapdragon 8 Gen 1, m&agrave;n h&igrave;nh 6.7 inch Full HD+, P-OLED, tần số qu&eacute;t 144 Hz.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Razr 2023 được mong đợi có cấu hình nhất bảng\" src=\"https://cdn.tgdd.vn/Files/2023/02/26/1512845/motorola-razr-2023-foldable-phone-260223-175039-800-resize.jpg\" /></p>\r\n\r\n<p>Về camera, Motorola Razr 2023 c&oacute; hai camera sau gồm 64 MP (ch&iacute;nh), 13 MP (phụ), 32 MP (selfie). M&aacute;y c&oacute; thể c&oacute; pin 4.000 mAh, lớn hơn bản Razr 2022 (3.500 mAh).</p>\r\n\r\n<p>Bạn mong đợi cải thiện g&igrave; tr&ecirc;n Razr 2023?</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.thegioididong.com/\">https://www.thegioididong.com/</a></p>\r\n', 5, 1, '1677484555_Baiviet3.jpg'),
(12, 'Sony WF-1000XM5 có mặt trên trang chứng nhận nổi tiếng, lộ ra thông số kết nối', '', '<p>TheWalkmanBlog đ&atilde; kh&aacute;m ph&aacute; ra &quot;tung t&iacute;ch&quot; của mẫu&nbsp;tai nghe&nbsp;kh&ocirc;ng d&acirc;y&nbsp;WF-1000XM5 sắp ra mắt của&nbsp;Sony. Mẫu n&agrave;y bị ph&aacute;t hiện tr&ecirc;n trang web chứng nhận FCC.&nbsp;WF-1000XM5&nbsp;sẽ hỗ trợ Bluetooth 5.3, Bluetooth LE v&agrave; sử dụng điều khiển cảm ứng như bản thế hệ trước.&nbsp;</p>\r\n\r\n<p>Đ&atilde; một thời gian kể từ khi Sony ra mắt WH-1000XM5. Bose vẫn đang ph&aacute;t triển Bose QuietComfort Ultra, như đ&atilde; được x&aacute;c nhận bởi r&ograve; rỉ trước. Tr&ecirc;n &quot;mặt trận&quot; True Wireless, Bose QuietComfort Earbuds II đ&atilde; ra mắt được một thời gian m&agrave; vẫn chưa c&oacute; dấu hiệu n&agrave;o của Sony WF-1000XM5.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Thông tin về Sony WF-1000XM5 trên FCC\" src=\"https://cdn.tgdd.vn/Files/2023/02/26/1512840/sony_wf_1000xm5_bluetooth_le-260223-170638-800-resize.jpg\" /></p>\r\n\r\n<p>Tuy nhi&ecirc;n giờ đ&atilde; kh&aacute;c, khi chiếc&nbsp;tai nghe&nbsp;xuất hiện tr&ecirc;n FCC cũng đồng nghĩa ng&agrave;y ra mắt đang đến gần, FCC x&aacute;c nhận&nbsp;Sony WF-1000XM5 sở hữu Bluetooth 5.3, Bluetooth LE, Qualcomm aptX Lossless c&oacute; thể c&oacute; v&agrave; điều khiển cảm ứng như bản thế hệ trước.</p>\r\n\r\n<p>Để &quot;chọi&quot; lại với sản phẩm của Bose, Notebookcheck đề xuất thời lượng pin n&ecirc;n l&agrave; một trong những điểm Sony n&ecirc;n đẩy mạnh,&nbsp;Sony WF-1000XM5 c&oacute; thể ra mắt&nbsp;th&aacute;ng 7/2023 bởi&nbsp;WF-1000XM4&nbsp;ra mắt v&agrave;o c&ugrave;ng th&aacute;ng n&agrave;y năm 2021. Vẫn kh&ocirc;ng biết Sony c&oacute; thiết kế lại bộ khung v&agrave; hộp sạc như d&ograve;ng tai nghe chụp tai kh&ocirc;ng. Bạn c&oacute; mong chờ Sony WF-1000XM5 ra mắt tại thị trường Việt Nam?</p>\r\n', 5, 1, '1677484544_Baiviet2.jpg'),
(14, 'Google tối ưu hóa giao diện Gmail cho Galaxy Z Fold4, nhìn thoải mái và đẹp hơn', '', '<p>Google đ&atilde; ra mắt giao diện mới cho Gmail được tối ưu h&oacute;a cho c&aacute;c&nbsp;điện thoại&nbsp;gập, như&nbsp;Samsung Galaxy Z Fold4. Giao diện mới n&agrave;y c&oacute; một bố cục 2 khung, cho ph&eacute;p người d&ugrave;ng xem hộp thư đến của họ b&ecirc;n tr&aacute;i của m&agrave;n h&igrave;nh trong khi một email hiển thị tr&ecirc;n b&ecirc;n phải.</p>\r\n\r\n<p>Giao diện c&oacute; khung b&ecirc;n tr&aacute;i hiển thị hộp thư đến v&agrave; c&aacute;c thư mục kh&aacute;c, trong khi khung b&ecirc;n phải hiển thị email đ&atilde; chọn, c&ograve;n thanh t&igrave;m kiếm nằm ph&iacute;a tr&ecirc;n hộp thư đến v&agrave; n&uacute;t Soạn thư hiển thị ở ngăn b&ecirc;n tr&aacute;i. Thanh dưới c&ugrave;ng k&eacute;o d&agrave;i tr&ecirc;n to&agrave;n bộ m&agrave;n h&igrave;nh.</p>\r\n\r\n<p>Giao diện mới kh&ocirc;ng chỉ giới hạn ở Gmail m&agrave; cũng c&oacute; sẵn cho Google Meet v&agrave; Chat. Người d&ugrave;ng c&oacute; thể dễ d&agrave;ng chuyển đổi giữa c&aacute;c ứng dụng v&agrave; dịch vụ m&agrave; k&iacute;ch thước kh&ocirc;ng đổi.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Giao diện Gmail được tối ưu hóa cho thiết bị màn hình lớn\" src=\"https://cdn.tgdd.vn/Files/2023/02/26/1512824/2-pane-view-on-foldable-android-devices-260223-153609-800-resize.jpg\" /></p>\r\n\r\n<p>Google đ&atilde; tập trung v&agrave;o điện thoại&nbsp;gập v&agrave;&nbsp;m&aacute;y t&iacute;nh bảng, giao diện mới n&agrave;y l&agrave; một phần trong nỗ lực cung cấp trải nghiệm người d&ugrave;ng h&agrave;ng đầu tr&ecirc;n c&aacute;c thiết bị như vậy.</p>\r\n\r\n<p>Google cũng đ&atilde; ra mắt hệ điều h&agrave;nh mới Android 12L, được thiết kế d&agrave;nh ri&ecirc;ng cho c&aacute;c thiết bị m&agrave;n h&igrave;nh lớn, c&oacute; th&ocirc;ng b&aacute;o chia theo chiều dọc cung cấp cho người d&ugrave;ng nhiều th&ocirc;ng tin hơn trong nh&aacute;y mắt.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Android 12L được thiết kế dành riêng cho các thiết bị màn hình lớn\" src=\"https://cdn.tgdd.vn/Files/2023/02/26/1512824/12l-foldable-land-shade-260223-153640-800-resize.jpg\" /></p>\r\n\r\n<p>K&egrave;m với đ&oacute; l&agrave; một thanh t&aacute;c vụ gi&uacute;p dễ d&agrave;ng chuyển đổi giữa c&aacute;c t&aacute;c vụ v&agrave; khởi chạy ứng dụng. Mối quan t&acirc;m mới của Google đối với điện thoại&nbsp;gập v&agrave; m&aacute;y t&iacute;nh bảng c&oacute; thể l&agrave; do c&ocirc;ng ty đang c&oacute; kế hoạch ra mắt thiết bị của ri&ecirc;ng m&igrave;nh trong tương lai.</p>\r\n\r\n<p>Với giao diện mới cho Gmail, Google đang thể hiện cam kết cung cấp trải nghiệm người d&ugrave;ng liền mạch tr&ecirc;n c&aacute;c thiết bị n&agrave;y v&agrave; sẵn s&agrave;ng đầu tư v&agrave;o c&aacute;c phần mềm mới để biến điều đ&oacute; th&agrave;nh hiện thực. Bạn mong đợi th&ecirc;m thay đổi kh&aacute;c từ Google kh&ocirc;ng?</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.thegioididong.com/\">https://www.thegioididong.com/</a></p>\r\n', 5, 1, '1677484514_Baiviet1.jpg'),
(15, 'Cách khôi phục story đã xoá trên Instagram trong vòng một nốt nhạc mà bạn nên biết', '', '<p>Instagram l&agrave; một trong những mạng x&atilde; hội được nhiều người y&ecirc;u th&iacute;ch v&agrave; d&ugrave;ng thường xuy&ecirc;n tr&ecirc;n cả&nbsp;điện thoại&nbsp;v&agrave;&nbsp;m&aacute;y t&iacute;nh. Việc đăng tải story l&ecirc;n Instagram cũng được mọi người thường xuy&ecirc;n l&agrave;m phải kh&ocirc;ng n&agrave;o? Vậy nếu mọi người lỡ tay x&oacute;a mất story th&igrave; phải l&agrave;m như thế n&agrave;o? Đừng lo lắng, sau đ&acirc;y m&igrave;nh sẽ chia sẻ&nbsp;c&aacute;ch kh&ocirc;i phục story đ&atilde; x&oacute;a tr&ecirc;n Instagram&nbsp;nh&eacute;.</p>\r\n\r\n<h3><strong>C&aacute;ch kh&ocirc;i phục story đ&atilde; xo&aacute; tr&ecirc;n Instagram</strong></h3>\r\n\r\n<p><strong>Bước 1:&nbsp;</strong>Bạn h&atilde;y truy cập v&agrave;o Instagram chọn v&agrave;o&nbsp;<strong>biểu tượng t&agrave;i khoản</strong>&nbsp;ở ng&agrave;y ph&iacute;a dưới b&ecirc;n g&oacute;c phải m&agrave;n h&igrave;nh &gt; Chọn tiếp v&agrave;o&nbsp;<strong>biểu tượng 3 gạch</strong>&nbsp;ph&iacute;a tr&ecirc;n g&oacute;c phải m&agrave;n h&igrave;nh &gt; Nhấn v&agrave;o&nbsp;<strong>Hoạt động của bạn.</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Cách khôi phục story đã xoá trên Instagram\" src=\"https://cdn.tgdd.vn/Files/2023/02/21/1511754/64646565-210223-140954-800-resize.jpg\" /></p>\r\n\r\n<p><strong>Bước 2:</strong>&nbsp;K&eacute;o xuống dưới v&agrave; chọn v&agrave;o mục&nbsp;<strong>Đ&atilde; x&oacute;a gần đ&acirc;y</strong>&nbsp;&gt; Sau đ&oacute;, chọn qua biểu tượng v&ograve;ng tr&ograve;n, tại đ&acirc;y bạn sẽ thấy được c&aacute;c story bạn đ&atilde; x&oacute;a.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Cách khôi phục story đã xoá trên Instagram\" src=\"https://cdn.tgdd.vn/Files/2023/02/21/1511754/instagram-01-210223-141011-800-resize.jpg\" /></p>\r\n\r\n<p><strong>Bước 3:</strong>&nbsp;K&iacute;ch chọn story bạn muốn kh&ocirc;i phục &gt; Nhấn v&agrave;o&nbsp;<strong>biểu tượng 3 chấm</strong>&nbsp;ở ph&iacute;a dưới b&ecirc;n g&oacute;c tr&aacute;i m&agrave;n h&igrave;nh &gt; Chọn&nbsp;<strong>Kh&ocirc;i phục</strong>&nbsp;l&agrave; được th&ocirc;i n&egrave;.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Cách khôi phục story đã xoá trên Instagram\" src=\"https://cdn.tgdd.vn/Files/2023/02/21/1511754/instagram-02-210223-141106-800-resize.jpg\" /></p>\r\n\r\n<p>Như vậy, m&igrave;nh đ&atilde; chia sẻ đến c&aacute;c bạn c&aacute;ch kh&ocirc;i phục story đ&atilde; xo&aacute; tr&ecirc;n Instagram. Hy vọng b&agrave;i viết gi&uacute;p &iacute;ch được cho mọi người.&nbsp;Nếu thấy hay th&igrave; h&atilde;y chia sẻ b&agrave;i viết v&agrave; b&igrave;nh luận ở ph&iacute;a dưới để c&ugrave;ng nhau trao đổi nhiều hơn nh&eacute;.</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.thegioididong.com/\">https://www.thegioididong.com/</a></p>\r\n', 6, 1, '1677484502_MeoHay1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cart_payment` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(2, 1, '6767', 0, '', '', 0),
(3, 1, '5648', 0, '', '', 0),
(4, 2, '1308', 0, '', '', 0),
(5, 2, '8480', 0, '', '', 0),
(6, 7, '983', 1, '', '', 0),
(7, 7, '7472', 1, '', '', 0),
(8, 7, '5927', 1, '', '', 0),
(9, 7, '6485', 1, '', '', 0),
(10, 7, '69', 1, '', '', 0),
(11, 7, '5578', 1, '', '', 0),
(12, 7, '6154', 1, '', '', 0),
(13, 7, '9786', 1, '', '', 0),
(14, 7, '9287', 1, '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_details`
--

CREATE TABLE `cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_details`
--

INSERT INTO `cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(1, '5648', 34, 1),
(2, '5648', 31, 1),
(3, '1308', 34, 1),
(4, '1308', 33, 1),
(5, '8480', 33, 1),
(6, '8480', 34, 1),
(7, '983', 34, 1),
(8, '7472', 34, 1),
(9, '5927', 34, 1),
(10, '6485', 34, 1),
(11, '69', 34, 1),
(12, '5578', 34, 1),
(13, '6154', 32, 1),
(14, '9786', 26, 1),
(15, '9287', 30, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `matkhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dienthoai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'Hùng Nguyễn', 'hung@gmail.com', 'Cần Thơ', '900150983cd24fb0d6963f7d28e17f72', '0123456789'),
(2, 'admin123', 'admin123@gmail.com', 'An Giang', '202cb962ac59075b964b07152d234b70', '0123456789'),
(7, 'Hùng', 'hung123@gmail.com', 'An Giang', '202cb962ac59075b964b07152d234b70', '0123456789'),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(9, 'kang', '123', '1223', '202cb962ac59075b964b07152d234b70', '123'),
(10, 'kang', '123', '1223', '202cb962ac59075b964b07152d234b70', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(10, 'Iphone', 4),
(11, 'Samsung', 5),
(12, 'Oppo', 6),
(13, 'Nokia', 6),
(14, 'Vivo', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucbaiviet`
--

CREATE TABLE `danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucbaiviet`
--

INSERT INTO `danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(5, 'Sự kiện', 1),
(6, 'Mẹo hay', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<p>123</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `masp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `giasp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tomtat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(23, 'Điện thoại Vivo Y15s', 'VV001', '2710000', 3, '1675511697 vivo-y15s-2021-(20).jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 14),
(24, 'Điện thoại Nokia G11', 'NK002', '2990000', 3, '1675511613 Nokia-g11-xám-thumb-600x600.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 13),
(25, 'Điện thoại Nokia G21', 'NK001', '3690000', 3, '1675511573 nokia-g21-xanh-thumb-600x600.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 13),
(26, 'Điện thoại OPPO A55', 'OP002', '3950000', 3, '1675511266 oppo-a55-4g-(22).jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 12),
(27, 'Điện thoại OPPO Reno8 Pro 5G', 'OP001', '17990000', 3, '1675511220 oppo-reno8-pro-thumb-xanh-1-600x600.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 12),
(28, 'Điện thoại Samsung Galaxy S22 Ultra 5G 512GB', 'SS002', '31990000', 3, '1675511456 samsung-galaxy-s22-ultra-512gb-(12).jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 11),
(29, 'Điện thoại Samsung Galaxy S22 Ultra 5G 128GB', 'SS001', '23990000', 3, '1675511401 samsung-galaxy-s22-ultra-(20).jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 11),
(30, 'Điện thoại iPhone 12 64GB', 'IP006', '15990000', 3, '1675510945 iphone-12-(52).jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 10),
(31, 'Điện thoại iPhone 14 Pro 128GB', 'IP005', '27290000', 3, '1675510708 iphone-14-pro-(52).jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 10),
(32, 'Điện thoại iPhone 13 Pro 1TB', 'IP004', '29990000', 3, '1675510502 iphone-13-pro-1tb-(38).jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 10),
(33, 'Điện thoại iPhone 11 64GB', 'IP003', '11490000', 3, '1675510342 iphone-11-(88).jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 1, 10),
(34, 'Điện thoại iPhone 13 Pro Max 1TB', 'IP002', '34990000', 3, '1675510636 iphone-13-pro-max-1tb-(38).jpg', '', '', 1, 10),
(35, 'Điện thoại iPhone 14 Pro 1TB', 'IP001', '37990000', 5, '1677487130 iphone-14-pro-1tb-(40).jpg', '<p>Ưu đ&atilde;i đặc biệt</p>\r\n\r\n<ul>\r\n	<li>Giảm ngay&nbsp;<strong>100.000Đ</strong>&nbsp;khi mua k&egrave;m tai nghe&nbsp;<strong><a href=\"https://onewaymobile.vn/in-ear/tai-nghe-apple-airpods-pro-2022-new100-dp838.html\">Airpods Pro 2</a></strong></li>\r\n</ul>\r\n', '', 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `note` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id_cart_details`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `danhmucbaiviet`
--
ALTER TABLE `danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `danhmucbaiviet`
--
ALTER TABLE `danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `danhmuc_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `sanpham` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
