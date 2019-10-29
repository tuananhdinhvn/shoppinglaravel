-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 08:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydaughter`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_02_082916_tb_user', 1),
(4, '2019_10_02_205753_tb_productcat', 2),
(5, '2019_10_02_213852_tb_product', 3),
(6, '2019_10_02_223542_tb_layout_homepage', 4),
(7, '2019_10_02_225742_tb_layout_product', 5),
(8, '2019_10_02_230947_tb_layout_contact', 6),
(9, '2019_10_02_232502_tb_layout_footer', 7),
(10, '2019_10_03_075204_tb_blogcat', 8),
(11, '2019_10_03_080725_tb_blog', 9),
(12, '2019_10_03_134615_tb_setting', 10),
(13, '2019_10_13_192300_tb_order', 11),
(14, '2019_10_13_192436_tb_order_detail', 12),
(15, '2019_10_20_010752_tb_layout_lylich', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'picture.png',
  `blog_noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_noibat` tinyint(1) NOT NULL DEFAULT 0,
  `blog_hienthi` tinyint(1) NOT NULL DEFAULT 1,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_nguoiviet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_blogcatid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`blog_id`, `blog_ten`, `blog_slug`, `blog_thumb`, `blog_noidung`, `blog_noibat`, `blog_hienthi`, `blog_title`, `blog_mota`, `blog_nguoiviet`, `blog_blogcatid`, `created_at`, `updated_at`) VALUES
(1, 'Thay đổi thực đơn cho bé với 5 loại củ quả tốt nhất mùa đông này', 'ten-bai-viet-1', '15701289683-min_large.jpg', '<p style=\"text-align: justify;\">M&ugrave;a n&agrave;o thức nấy! V&agrave;o m&ugrave;a đ&ocirc;ng b&eacute; n&ecirc;n ăn những loại rau củ n&agrave;o để hấp thụ dinh dưỡng một c&aacute;ch tốt nhất? Kh&aacute;m ph&aacute; ngay!&nbsp;</p>\r\n<p><strong>1. S&uacute;p lơ</strong></p>\r\n<p style=\"text-align: justify;\">Những loại s&uacute;p lơ như s&uacute;p lơ trắng, xanh đều rất gi&agrave;u Viatmin A, C v&agrave; canxi cung cấp nhiều chất đề kh&aacute;ng trong m&ugrave;a đ&ocirc;ng. B&ecirc;n cạnh đ&oacute;, s&uacute;p lơ cũng c&oacute; chứa một lượng nhỏ selen, đồng, mangan, kẽm.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><strong>2. Củ cải&nbsp;</strong></p>\r\n<p style=\"text-align: justify;\">Củ cải giầu Vitamin C, canxi, chất xơ v&agrave; protein l&agrave; loại thực phẩm tốt cho b&eacute;, gi&uacute;p b&eacute; hấp thụ thức ăn v&agrave; ti&ecirc;u h&oacute;a tốt nhờ những loại vitamin v&agrave; axit amin.&nbsp;</p>\r\n<p style=\"text-align: justify;\">Việc bảo quản củ cải đơn giản để nơi tho&aacute;ng m&aacute;t hoặc trong ngăn m&aacute;t của tủ lạnh. Những củ cải đ&atilde; được th&aacute;i l&aacute;t n&ecirc;n để trong b&aacute;t nước lọc v&agrave; để trong ngăn mắt, kh&ocirc;ng n&ecirc;n để củ cải qu&aacute; 2 ng&agrave;y. Ngo&agrave;i ra, c&aacute;c bạn chỉ n&ecirc;n cắt củ cải trước khi chế biến n&oacute;.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>3. C&agrave; rốt</strong></p>\r\n<p style=\"text-align: justify;\">Trong những loại thực phẩm tốt cho b&eacute; kh&ocirc;ng thể thiếu c&agrave; rốt l&agrave; loại thực phẩm bổ dưỡng, tốt nhất cho b&eacute; trong qu&aacute; tr&igrave;nh ăn dăm.&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/nhung-loai-rau-cu-qua-tot-nhat-cho-be-vao-mua-dong3.jpg\" alt=\"\" width=\"500\" height=\"393\" /></p>\r\n<p><strong>4. Khoai t&acirc;y</strong></p>\r\n<p style=\"text-align: justify;\">Khoai t&acirc;y chức nhiều tinh bột th&iacute;ch hợp cho b&eacute; ăn dặm trong m&ugrave;a đ&ocirc;ng để gi&uacute;p b&eacute; c&oacute; lượng dinh dưỡng dồi d&agrave;o trong qu&aacute; tr&igrave;nh ăn dặm. C&aacute;c mẹ c&oacute; thể nấu những loại ch&aacute;o ăn dặm với khoai t&acirc;y, s&uacute;p khoai t&acirc;y v&agrave;o m&ugrave;a đ&ocirc;ng cho b&eacute;.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/nhung-loai-rau-cu-qua-tot-nhat-cho-be-vao-mua-dong4.jpg\" alt=\"\" width=\"500\" height=\"369\" /></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><strong>5. Lựu</strong></p>\r\n<p style=\"text-align: justify;\">Trong lựu c&oacute; chứa nhiều vitamin B, C canxi v&agrave; phốt pho rất tốt cho b&eacute; trong m&ugrave;a đ&ocirc;ng, sử dụng&nbsp;m&aacute;y &eacute;p hoa quả&nbsp;để cho b&eacute; sử dụng nước &eacute;p lựu đảm bảo an to&agrave;n, gi&agrave;u dinh dưỡng v&agrave; th&iacute;ch hợp cho b&eacute; từ 8 &ndash; 10 th&aacute;ng tuổi.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 0, 0, 'Title 1', 'Mùa nào thức nấy! Vào mùa đông bé nên ăn những loại rau củ nào để hấp thụ dinh dưỡng một cách tốt nhất? Khám phá ngay!', 'Tuấn Anh Đinh', 3, '2019-10-03 01:13:31', '2019-10-12 13:30:07'),
(2, '7 loại rau nên trồng vào mùa đông', 'ten-bai-viet-2', '15701288291-min_large.jpg', '<p>Th&aacute;ng 10 l&agrave; thời gian v&ocirc; c&ugrave;ng thuận lợi để trồng 7 loại rau củ dưới đ&acirc;y, v&igrave; vậy h&atilde;y bắt tay v&agrave;o trồng lu&ocirc;n để cả gia đ&igrave;nh khỏi lo thiếu rau sạch ăn trong m&ugrave;a đ&ocirc;ng nh&eacute;!</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/logo_tad.png\" alt=\"\" width=\"435\" height=\"481\" /></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">M&ugrave;a đ&ocirc;ng lu&ocirc;n l&agrave; m&ugrave;a của những m&oacute;n ăn ngon dễ đưa cơm, ch&iacute;nh v&igrave; thế m&agrave; đ&acirc;y được coi l&agrave; thời điểm ch&uacute;ng ta dễ tăng c&acirc;n nhất trong năm. Tất nhi&ecirc;n, để g&oacute;p phần tạo n&ecirc;n những m&oacute;n ăn ngon cho m&ugrave;a n&agrave;y kh&ocirc;ng thể kể đến những loại rau củ đặc trưng của m&ugrave;a đ&ocirc;ng. Kh&ocirc;ng chỉ nhiều chất dinh dưỡng m&agrave; những loại rau n&agrave;y c&ograve;n c&oacute; thể dễ d&agrave;ng kết hợp với nhiều loại thực phẩm kh&aacute;c để tạo n&ecirc;n những m&oacute;n ăn ngon. H&atilde;y bắt tay v&agrave;o trồng ngay 7 loại rau củ dưới đ&acirc;y, bạn sẽ khỏi lo thiếu rau trong suốt m&ugrave;a đ&ocirc;ng - xu&acirc;n n&agrave;y.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/cai xoan.jpg\" alt=\"\" width=\"480\" height=\"480\" /></p>\r\n<p style=\"text-align: justify;\"><strong>1. S&uacute;p lơ xanh</strong></p>\r\n<p style=\"text-align: justify;\"><strong>Thời điểm trồng tốt nhất:</strong>&nbsp;th&aacute;ng 9 đến th&aacute;ng 12</p>\r\n<p style=\"text-align: justify;\"><strong>C&aacute;ch trồng:</strong></p>\r\n<p style=\"text-align: justify;\">Nếu c&oacute; thể bạn n&ecirc;n gieo hạt trước, sau đ&oacute; đem c&acirc;y ra trồng, trường hợp bạn kh&ocirc;ng thể mua c&acirc;y giống hoặc kh&ocirc;ng thể chuyển c&acirc;y th&igrave; c&oacute; thể gieo hạt trực tiếp.</p>\r\n<p style=\"text-align: justify;\">Trước khi đem gieo, n&ecirc;n xử l&yacute; hạt qua bằng việc ng&acirc;m v&agrave;o nước n&oacute;ng 50 độ C trong 25 &ndash; 30 ph&uacute;t để diệt c&aacute;c nấm bệnh b&aacute;m ở vỏ, đồng thời tăng tỷ lệ mọc của hạt.</p>\r\n<p style=\"text-align: justify;\">Sau khoảng 2 tuần gieo hạt th&igrave; loại bỏ những c&acirc;y c&ograve;i cọc để chọn ra những c&acirc;y khỏe mạnh v&agrave; ph&aacute;t triển tốt. Mỗi c&acirc;y con c&aacute;ch nhau 10-20 cm sẽ tạo điều kiện cho c&acirc;y ra t&aacute;n x&ograve;e rộng sau n&agrave;y. Ch&uacute; &yacute; n&ecirc;n chuyển c&acirc;y v&agrave;o buổi chiều để c&acirc;y đỡ h&eacute;o v&agrave; mau b&eacute;n rễ, chuyển xong nhớ tưới nước để c&acirc;y giữ ẩm ngay. C&acirc;y con sẽ cần khoảng 1-2 ng&agrave;y để rễ ăn s&acirc;u v&agrave; b&aacute;m v&agrave;o đất mới. Ch&uacute; &yacute; tưới nước đều đặn cho c&acirc;y 2 lần/ng&agrave;y v&agrave;o s&aacute;ng sớm v&agrave; chiều m&aacute;t để c&acirc;y ph&aacute;t triển &iacute;t nhất trong 10 ng&agrave;y đầu sau khi chuyển c&acirc;y ra th&ugrave;ng xốp hoặc đất trồng mới.</p>\r\n<p style=\"text-align: justify;\">Nếu như bạn trồng s&uacute;p lơ trong th&ugrave;ng xốp th&igrave; ch&uacute; &yacute;, khi c&acirc;y lớn c&acirc;y sẽ cần &aacute;nh s&aacute;ng nhẹ chứ kh&ocirc;ng cần nhiều &aacute;nh s&aacute;ng như c&acirc;y con nữa, v&agrave; bạn c&oacute; thể di chuyển c&acirc;y v&agrave;o khu vực &iacute;t nắng hơn.</p>\r\n<p style=\"text-align: justify;\">Khi thấy l&aacute; n&otilde;n c&oacute; ng&ugrave; hoa, cần tiến h&agrave;nh việc che lại bằng c&aacute;ch bẻ gập 1 &ndash; 2 l&aacute; trong lại, buộc t&uacute;m c&aacute;c l&aacute; lại với nhau. Việc n&agrave;y tr&aacute;nh cho việc khi trời mưa &agrave;o ạt, hoa sẽ ngập nước v&agrave; bị thối rữa. Thời điểm n&agrave;y cũng chỉ n&ecirc;n tưới nước v&agrave;o gốc c&acirc;y, tưới đậm, 1- 2 ng&agrave;y một lần.</p>\r\n<p style=\"text-align: justify;\">Sau khi hoa xuất hiện khoảng 15 - 20 ng&agrave;y l&agrave; bạn c&oacute; thể h&aacute;i v&agrave; đem đi chế biến. C&acirc;y s&uacute;p lơ đạt ti&ecirc;u chuẩn để thu hoạch l&agrave; những c&acirc;y c&oacute; gạo hoa nhỏ, c&aacute;c c&aacute;nh hoa chưa nở to qu&aacute; m&agrave; chỉ lấm tấm tr&ecirc;n mặt hoa.</p>\r\n<p style=\"text-align: justify;\">Ưu ti&ecirc;n thu hoạch những c&acirc;y to trước c&ograve;n những c&acirc;y nhỏ sẽ thu hoạch v&agrave;o những ng&agrave;y tiếp theo. C&acirc;y sẽ mất khoảng 70 đến 80 ng&agrave;y để trưởng th&agrave;nh. L&uacute;c thu hoạch, nếu bạn giữ lại nhiều l&aacute; tr&ecirc;n gốc c&acirc;y th&igrave; n&oacute; c&oacute; thể ra th&ecirc;m một vụ thứ hai, thậm ch&iacute; l&agrave; thứ ba.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>2. Bắp cải</strong></p>\r\n<p style=\"text-align: justify;\"><strong>Thời điểm trồng tốt nhất:</strong>&nbsp;đầu th&aacute;ng 9 đến th&aacute;ng 11</p>\r\n<p style=\"text-align: justify;\"><strong>C&aacute;ch trồng:</strong></p>\r\n<p style=\"text-align: justify;\">Cải bắp cần rất nhiều kali v&agrave; ph&acirc;n đạm, do vậy h&atilde;y đảm bảo rằng bạn đ&atilde; bổ sung dưỡng chất n&agrave;y v&agrave;o đất trước khi trồng c&acirc;y. Trường hợp bạn muốn trồng theo phương ph&aacute;p hữu cơ th&igrave; c&oacute; thể tự l&agrave;m ph&acirc;n b&oacute;n hữu cơ v&agrave; tưới th&ecirc;m nước tiểu pha lo&atilde;ng cho c&acirc;y, nhưng bắp sẽ nhỏ hơn một ch&uacute;t.</p>\r\n<p style=\"text-align: justify;\">C&oacute; thể trồng bằng hạt giống hoặc trồng bằng c&acirc;y con. Với c&aacute;ch trồng hạt giống, hạt giống n&ecirc;n ng&acirc;m trong nước ấm 50oC trong 20 ph&uacute;t rồi ng&acirc;m trong 8-10 giờ trước khi gieo xuống mặt đất để vỏ mềm, dễ nứt nanh. Trong 3 ng&agrave;y sau đ&oacute;, tưới nước 1 - 2 lần/ng&agrave;y. Khi hạt nảy mầm nh&ocirc; l&ecirc;n khỏi mặt đất th&igrave; ngừng tưới 1 - 2 ng&agrave;y rồi sau đ&oacute; cứ 2 ng&agrave;y tưới một lần. Khi c&acirc;y c&oacute; 4 - 6 l&aacute; th&igrave; bắt đầu chuyển c&acirc;y ra chậu hoặc th&ugrave;ng lớn.</p>\r\n<p style=\"text-align: justify;\">Sau khi di chuyển c&acirc;y hoặc trồng c&acirc;y giống ngo&agrave;i chợ về bạn cần tưới đẫm nước cho c&acirc;y. Thời gian n&agrave;y cần tưới nước cho c&acirc;y h&agrave;ng ng&agrave;y cho tới khi c&acirc;y hồi xanh lại. Sau đ&oacute; th&igrave; 5-7 ng&agrave;y lại tưới đẫm nước một lần. Bạn c&oacute; thể ho&agrave; đạm v&agrave;o nước để tưới hoặc pha lo&atilde;ng nước tiểu để tưới cho c&acirc;y trong thời điểm n&agrave;y.</p>\r\n<p style=\"text-align: justify;\">Ch&uacute; &yacute; l&agrave;m sạch cỏ xung quanh đất v&agrave; bắt s&acirc;u cho c&acirc;y, v&igrave; nếu để s&acirc;u ph&aacute;t triển c&acirc;y cải bắp của bạn sẽ bị ăn hết đến mức chỉ c&ograve;n gốc. Loại bỏ l&aacute; v&agrave;ng b&ecirc;n ngo&agrave;i c&ugrave;ng của c&acirc;y nếu c&oacute;.</p>\r\n<p style=\"text-align: justify;\">Khoảng 80-90 ng&agrave;y l&agrave; bạn c&oacute; thể thu hoạch rau. D&ugrave;ng dao chặt s&aacute;t th&acirc;n bắp cải v&agrave; n&ecirc;n thu hoạch v&agrave;o s&aacute;ng sớm hoặc chiều tối.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../public/admin/images/dua leo gai.jpg\" alt=\"\" width=\"480\" height=\"480\" /></p>\r\n<p style=\"text-align: justify;\"><strong>3. Cải c&uacute;c</strong></p>\r\n<p style=\"text-align: justify;\"><strong>Thời điểm trồng tốt nhất:</strong>&nbsp;từ th&aacute;ng 10 đến th&aacute;ng 12.</p>\r\n<p style=\"text-align: justify;\"><strong>C&aacute;ch trồng:</strong></p>\r\n<p style=\"text-align: justify;\">Ng&acirc;m hạt giống rau cải c&uacute;c v&agrave;o chai nhựa với nước ấm (tỷ lệ 3:1, 3 lạnh, 1 n&oacute;ng) c&oacute; nắp, rồi để v&agrave;o b&oacute;ng tối để cho hạt rau nảy mầm (ng&acirc;m khoảng 3 tiếng). Chuẩn bị đất đ&atilde; c&oacute; đầy đủ chất dinh dưỡng. Nếu c&oacute; thể th&igrave; trộn th&ecirc;m đất với vỏ trấu hoặc vụn rơm sau đ&oacute; bỏ v&agrave;o th&ugrave;ng xốp sao cho lớp đất d&agrave;y khoảng 7-10cm.</p>\r\n<p style=\"text-align: justify;\">Gieo đều tr&ecirc;n khay trồng rau với mật độ vừa đủ khoảng 10gr đến 20gr hạt (hay khoảng 40-50 hạt rau cải c&uacute;c)</p>\r\n<p style=\"text-align: justify;\">Sau khi gieo xong, lấp một lớp đất mỏng l&ecirc;n v&agrave; một lớp trấu (hay rơm) để gi&uacute;p hạt tăng tỷ lệ nảy mầm v&agrave; giữ nước tốt (hoặc c&oacute; thể đặt những tấm b&igrave;a c&aacute;t t&ocirc;ng l&ecirc;n chậu).</p>\r\n<p style=\"text-align: justify;\">Hằng ng&agrave;y tưới nước 2 lần (s&aacute;ng v&agrave; chiều m&aacute;t) sau khi rau cải c&uacute;c nảy mầm khoảng 5-7 ng&agrave;y th&igrave; tưới mỗi ng&agrave;y 1 lần. Sau 25-30 ng&agrave;y l&agrave; c&oacute; thể thu hoạch rau. Lưu &yacute; n&ecirc;n ăn rau kh&ocirc;ng qu&aacute; 45 ng&agrave;y v&igrave; l&uacute;c n&agrave;y rau đ&atilde; gi&agrave; v&agrave; bắt đầu ra hoa.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>4. Đậu cove</strong></p>\r\n<p style=\"text-align: justify;\"><strong>Thời gian trồng tốt nhất:</strong>&nbsp;Từ th&aacute;ng 8 đến th&aacute;ng 12</p>\r\n<p style=\"text-align: justify;\"><strong>C&aacute;ch trồng:</strong></p>\r\n<p style=\"text-align: justify;\">Trộn đất với ph&acirc;n tr&ugrave;n (ph&acirc;n vi sinh) v&agrave; ph&acirc;n NPK với tỉ lệ 4:1:0,1 sau đ&oacute; bỏ v&agrave;o th&ugrave;ng xốp hoặc khay nhựa cao tối thiểu 25cm. Sau khi l&agrave;m đất xong ta tiến h&agrave;nh gieo hạt. Mật độ ti&ecirc;u chuẩn hạt c&aacute;ch hạt 30cm, h&agrave;ng c&aacute;ch h&agrave;ng 30cm. Khi gieo hạt xong ch&uacute;ng ta phủ 1 lớp đất mỏng d&agrave;y 1-2cm l&ecirc;n tr&ecirc;n mặt v&agrave; tưới ẩm. Ng&agrave;y tưới 2 lần v&agrave;o l&uacute;c s&aacute;ng sớm v&agrave; chiều m&aacute;t bằng b&igrave;nh &ocirc; doa hoặc b&igrave;nh phun sương. V&agrave;o m&ugrave;a đ&ocirc;ng th&igrave; chỉ cần tưới 1 lần/ ng&agrave;y cho c&acirc;y.</p>\r\n<p style=\"text-align: justify;\">Khi c&acirc;y được 5-6 l&aacute; cần cắm gi&agrave;n ngay cho c&acirc;y leo. Mỗi c&acirc;y cắm 1 cọc cao 1.5m c&aacute;ch gốc 10cm. C&oacute; thể buộc th&ecirc;m c&aacute;c thanh ngang nối c&aacute;c cọc với nhau tạo gi&agrave;n chắc hơn.</p>\r\n<p style=\"text-align: justify;\">Sau khi gieo trồng khoảng 25-30 ng&agrave;y c&acirc;y chuẩn bị cho ra hoa. L&uacute;c n&agrave;y ta b&oacute;n l&oacute;t ph&acirc;n tr&ugrave;n + NPK (20-30gr/gốc). Sau 35-40 ng&agrave;y c&acirc;y bắt đầu cho tr&aacute;i, khi n&agrave;o quả đỗ d&agrave;i 10-15 cm l&agrave; c&oacute; thể thu hoạch hoặc khi quả bắt đầu c&oacute; hạt. Kh&ocirc;ng n&ecirc;n để quả đỗ qu&aacute; gi&agrave; l&uacute;c n&agrave;y h&agrave;m lượng dinh dưỡng sẽ kh&ocirc;ng cao.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>5. Su h&agrave;o</strong></p>\r\n<p style=\"text-align: justify;\"><strong>Thời gian trồng tốt nhất:</strong>&nbsp;th&aacute;ng 09 đến th&aacute;ng 11</p>\r\n<p style=\"text-align: justify;\"><strong>C&aacute;ch trồng:</strong></p>\r\n<p style=\"text-align: justify;\">Ng&acirc;m hạt giống su h&agrave;o trong ấm nước ấm trong 2 s&ocirc;i - 3 lạnh khoảng 15 ph&uacute;t. Sau khi lớp vỏ mềm ra, bạn bắt đầu gieo hạt s&acirc;u 0,3 - 0,5cm dưới mặt đất ẩm.</p>\r\n<p style=\"text-align: justify;\">Sau khi đ&atilde; gieo hạt giống su h&agrave;o v&agrave;o đất th&igrave; h&agrave;ng ng&agrave;y cần tưới nước để bề mặt đất giữ được độ ẩm. Khoảng 1 tuần th&igrave; hạt bắt đầu nảy mầm sẽ cho những chiếc l&aacute; đầu ti&ecirc;n. Sau khoảng 20 ng&agrave;y th&igrave; l&aacute; ch&iacute;nh sẽ mọc ra v&agrave; l&uacute;c n&agrave;y bạn c&oacute; thể chuyển c&acirc;y giống trồng ra th&ugrave;ng xốp hoặc chậu.</p>\r\n<p style=\"text-align: justify;\">Bỏ đất v&agrave;o th&ugrave;ng xốp, tưới ẩm nước cho đất v&agrave; bỏ c&acirc;y con v&agrave;o trồng với khoảng c&aacute;ch 10 x 10cm. Sau khi cấy c&acirc;y con xong c&oacute; thể tưới qua th&ecirc;m ch&uacute;t nước. Nếu chăm s&oacute;c tốt khoảng 40 ng&agrave;y sau khi gieo th&igrave; th&acirc;n c&acirc;y bắt đầu to dần l&ecirc;n v&agrave; củ su h&agrave;o xuất hiện, dần dần tr&ograve;n ph&igrave;nh đều v&agrave; 10 ng&agrave;y sau đ&oacute; củ sẽ c&oacute; đường k&iacute;nh khoảng 5cm.</p>\r\n<p style=\"text-align: justify;\">Khi củ su h&agrave;o c&oacute; đường k&iacute;nh khoảng 10cm l&aacute; v&agrave; dễ ngừng ph&aacute;t triển th&igrave; ta bắt đầu thu hoạch. Kh&ocirc;ng để su h&agrave;o qu&aacute; gi&agrave; sẽ bị sơ ăn kh&ocirc;ng ngon. Để thu hoạch su h&agrave;o bạn chỉ cần cắt dễ phần dưới củ l&agrave; được.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>6. Rau cải ngọt</strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><strong>Thời gian trồng tốt nhất:</strong>&nbsp;từ th&aacute;ng 8 đến th&aacute;ng 10</p>\r\n<p><strong>C&aacute;ch trồng:</strong></p>\r\n<p style=\"text-align: justify;\">Hạt trước khi gieo cần được ng&acirc;m trong nước 2 s&ocirc;i 3 lạnh (khoảng 40 độ C) trong 2-5h. Vớt ra rửa sạch, để r&aacute;o nước. Đem gieo v&agrave;o bầu hoặc trực tiếp l&ecirc;n đất đ&atilde; chuẩn bị sẵn. Rắc th&ecirc;m một lớp đất mỏng l&ecirc;n tr&ecirc;n. Sau v&agrave;i ng&agrave;y hạt sẽ nảy mầm. H&agrave;ng ng&agrave;y tưới nước đều đặn cho c&acirc;y v&igrave; cải ngọt l&agrave; loại rau h&aacute;o nước.</p>\r\n<p style=\"text-align: justify;\">Nếu cải ngọt của bạn bị s&acirc;u hại th&igrave; bạn c&oacute; thể gi&atilde; nhuyễn tỏi v&agrave; ớt, chắt lấy nước pha với nước vo gạo rồi phun xịt l&ecirc;n c&acirc;y rau để ph&ograve;ng trừ.</p>\r\n<p style=\"text-align: justify;\">Mỗi lần h&aacute;i rau h&atilde;y chừa lại đọt cho c&acirc;y để c&acirc;y tiếp tục ra l&aacute; v&agrave; bạn lại c&oacute; thể thu hoạch nhiều đợt sau nữa.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>7. Cải xoong</strong></p>\r\n<p style=\"text-align: justify;\"><strong>Thời gian trồng tốt nhất:</strong>&nbsp;th&aacute;ng 10 đến th&aacute;ng 12</p>\r\n<p style=\"text-align: justify;\"><strong>C&aacute;ch trồng:</strong></p>\r\n<p style=\"text-align: justify;\">Bạn n&ecirc;n chuẩn bị 1 th&ugrave;ng xốp c&oacute; k&iacute;ch thước 50 x 37, cao 30cm, đổ đầy nước trong 30\' để thử độ k&iacute;n sau đ&oacute; quấn băng keo 5 mặt tạo độ chắc chắn. C&acirc;y cải xoong kh&ocirc;ng cần nhiều đất n&ecirc;n bạn c&oacute; thể đập nhỏ xỉ than trải 1 lớp d&agrave;y 10cm dưới đ&aacute;y, tiếp đ&oacute; l&agrave; đất dinh dưỡng. Đất kh&ocirc;ng được c&oacute; c&aacute;c chất thải hữu cơ hoặc l&aacute;, gốc, rễ c&acirc;y chưa ph&acirc;n hủy v&igrave; sẽ l&agrave;m thối đất, bạn cũng cần đục 1 lỗ bằng ng&oacute;n tay c&aacute;ch m&eacute;p th&ugrave;ng 3cm để khi trời mưa nước kh&ocirc;ng tr&agrave;n qua m&eacute;p.</p>\r\n<p style=\"text-align: justify;\">Bạn c&oacute; thể chọn mua rau gi&agrave;, cọng to nhiều rễ về cắm. 2 lứa thu hoạch đầu người trồng kh&ocirc;ng cần b&oacute;n ph&acirc;n, h&aacute;i xong lứa thứ 3 n&ecirc;n bắt đầu tưới dung dịch thủy canh (nếu c&oacute;) hoặc b&oacute;n 2g đạm sau mỗi lần thu hoạch, thỉnh thoảng n&ecirc;n b&oacute;n th&ecirc;m 1-2g kali.</p>\r\n<p style=\"text-align: justify;\">Bạn kh&ocirc;ng để qu&aacute; nhiều nước trong th&ugrave;ng, chỉ n&ecirc;n để x&acirc;m xấp mặt. Ngo&agrave;i ra, việc tưới nước cho c&acirc;y h&agrave;ng ng&agrave;y v&agrave;o buổi s&aacute;ng l&agrave; cần thiết nhưng chỉ cần cung cấp đủ lượng ẩm cho c&acirc;y, kh&ocirc;ng cần tưới qu&aacute; đẫm.</p>\r\n<p style=\"text-align: justify;\">Cải xoong ph&aacute;t triển rất mạnh khi trời mưa, mưa ph&ugrave;n, n&ecirc;n khi mưa xong, bạn n&ecirc;n pha ph&acirc;n thật lo&atilde;ng b&oacute;n th&uacute;c, tạo điều kiện cho c&acirc;y ph&aacute;t triển mạnh. Khi tỉa ăn được 3-4 lần, bạn n&ecirc;n d&ugrave;ng dao hay k&eacute;o cắt trụi gần s&aacute;t gốc 1 lần v&agrave; b&oacute;n ph&acirc;n, c&acirc;y sẽ l&ecirc;n ngọn mới v&agrave; khỏe mạnh hơn.</p>', 0, 0, '7 loại rau nên trồng vào mùa đông', 'Tháng 10 là thời gian vô cùng thuận lợi để trồng 7 loại rau củ dưới đây, vì vậy hãy bắt tay vào trồng luôn để cả gia đình khỏi lo thiếu rau sạch ăn trong mùa đông nhé!', 'Admin', 1, '2019-10-03 01:13:31', '2019-10-19 19:29:41'),
(5, '6 dấu hiệu của cơ thể cảnh báo bạn ăn quá ít rau quả', '6-dau-hieu-cua-co-the-canh-bao-ban-an-qua-it-rau-qua', '15701291045-min_large.jpg', '<h2><strong>Xuất hiện vết bầm t&iacute;m thường xuy&ecirc;n&nbsp;</strong></h2>\r\n<p style=\"text-align: justify;\">Xuất hiện vết bầm tr&ecirc;n da l&agrave; dấu hiệu tố c&aacute;o bạn ăn qu&aacute; &iacute;t rau quả. Tuy nhi&ecirc;n, những vết bầm n&agrave;y đa phần l&agrave; do 1 va chạm nhỏ g&acirc;y ra chứ kh&ocirc;ng phải dạng tự dưng xuất hiện nh&eacute;.</p>\r\n<p style=\"text-align: justify;\">Khi bạn ăn qu&aacute; &iacute;t rau quả, cơ thể sẽ thiếu vitamin C. Trong khi đ&oacute; vitamin C lại c&oacute; vai tr&ograve; trong việc sản xuất collagen. Nếu thiếu vitamin C th&igrave; c&aacute;c mạch m&aacute;u dễ bị tổn thương n&ecirc;n d&ugrave; chỉ l&agrave; va chạm nhẹ th&igrave; tr&ecirc;n da vẫn xuất hiện vết bầm. L&uacute;c n&agrave;y, h&atilde;y nạp th&ecirc;m c&aacute;c loại rau quả nhiều vitamin C như cam chanh, cải xoăn, ớt chu&ocirc;ng, b&ocirc;ng cải xanh, cải bắp...</p>\r\n<p class=\"knc-sapo\">&nbsp;</p>\r\n<p class=\"knc-sapo\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/1-1498452395161.jpg\" alt=\"\" width=\"600\" height=\"429\" /></p>\r\n<h2><strong>Bắt đầu bị t&aacute;o b&oacute;n</strong></h2>\r\n<p style=\"text-align: justify;\">Rau quả l&agrave; nguồn chất xơ cần thiết cho cơ thể gi&uacute;p bộ m&aacute;y ti&ecirc;u h&oacute;a hoạt động trơn tru. Do đ&oacute;, nếu cơ thể bị t&aacute;o b&oacute;n th&igrave; khả năng bạn ăn qu&aacute; &iacute;t rau l&agrave; rất cao. T&aacute;o b&oacute;n l&acirc;u ng&agrave;y c&oacute; thể g&acirc;y ra nhiều t&aacute;c hại cho sức khỏe như t&iacute;ch tụ độc tố, bệnh trĩ...</p>\r\n<p style=\"text-align: justify;\">Bạn chỉ cần bổ sung nhiều rau quả như bơ, b&ocirc;ng cải xanh, s&uacute;p lơ, c&aacute;c loại cải, rau ng&oacute;t... v&agrave;o thực đơn h&agrave;ng ng&agrave;y th&igrave; t&igrave;nh trạng t&aacute;o b&oacute;n sẽ giảm ngay.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<h2><strong>Bạn lu&ocirc;n đ&oacute;i</strong></h2>\r\n<p style=\"text-align: justify;\">Chất xơ kh&ocirc;ng chỉ gi&uacute;p hệ ti&ecirc;u h&oacute;a hoạt động tốt m&agrave; c&ograve;n lắp đầy dạ d&agrave;y gi&uacute;p bạn mau no. Do đ&oacute;, nếu chỉ mới ăn được 1, 2 giờ m&agrave; bạn đ&atilde; cảm thấy đ&oacute;i th&igrave; c&oacute; thể thực đơn h&agrave;ng ng&agrave;y của bạn qu&aacute; &iacute;t chất rau.</p>\r\n<p style=\"text-align: justify;\">H&atilde;y nạp th&ecirc;m c&aacute;c loại rau quả nhiều chất xơ như rau bina, c&agrave; rốt, t&aacute;o, l&ecirc;, đậu h&agrave; lan... sẽ gi&uacute;p bạn no l&acirc;u, &iacute;t đ&oacute;i đồng thời giảm cảm gi&aacute;c th&egrave;m ăn n&ecirc;n cũng hỗ trợ giảm c&acirc;n hiệu quả.</p>\r\n<h2><strong>Cảm thấy kiệt sức</strong></h2>\r\n<p style=\"text-align: justify;\">Rau quả l&agrave; nguồn dinh dưỡng cung cấp năng lượng cho cơ thể hoạt động n&ecirc;n thiếu rau cũng dễ khiến bạn nhanh mệt mỏi, kiệt sức. Khi gặp trường hợp n&agrave;y, h&atilde;y ăn th&ecirc;m nhiều rau l&aacute; m&agrave;u xanh đậm để bổ sung nhiều magi&ecirc; gi&uacute;p cơ thể sản xuất nhiều năng lượng cho bạn hoạt động hiệu quả hơn.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/9-1498452395186.jpg\" alt=\"\" width=\"597\" height=\"398\" /></p>\r\n<h2><strong>Hay qu&ecirc;n</strong></h2>\r\n<div id=\"admzone474524\">\r\n<div id=\"ads_zone474524\">\r\n<div id=\"ads_zone474524_slot1\">\r\n<div id=\"ads_zone474524_banner514417\" class=\"banner0\">\r\n<div id=\"iplayzone_474470\" style=\"text-align: justify;\">Nếu bạn cảm thấy m&igrave;nh c&oacute; dấu hiệu hay qu&ecirc;n, bắt đầu từ những việc nhỏ nhặt h&agrave;ng ng&agrave;y th&igrave; h&atilde;y ăn rau nhiều hơn. Bởi hợp chất lutein c&oacute; thể gi&uacute;p cải thiện tr&iacute; nhớ cũng như c&aacute;c kỹ năng nhận thức kh&aacute;c. Trong khi đ&oacute;, nguồn lutein tốt nhất l&agrave; từ c&aacute;c loại rau l&aacute; m&agrave;u xanh đậm như b&ocirc;ng cải xanh, rau diếp, măng t&acirc;y...</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">\r\n<div class=\"col-md-9 col-sm-8 col-xs-12\">\r\n<div class=\"insCtMain\">\r\n<div class=\"main_article bg_w\">\r\n<div class=\"body-content\">\r\n<h2><strong>Dễ bị bệnh</strong></h2>\r\n<p style=\"text-align: justify;\">Nếu bạn ăn &iacute;t rau củ, hệ thống miễn dịch dễ suy yếu n&ecirc;n bạn rất dễ mắc nhiều loại bệnh vặt. Thế nhưng nếu t&igrave;nh trạng suy yếu hệ miễn dịch l&acirc;u d&agrave;i th&igrave; c&oacute; thể dẫn đến nhiều bệnh nguy hiểm kh&aacute;c cho sức khỏe. Do đ&oacute;, nếu bạn thường xuy&ecirc;n bị cảm, c&uacute;m, ho... th&igrave; tốt nhất n&ecirc;n bổ sung c&aacute;c loại rau quả ngay để lấy lại sức đề kh&aacute;ng cho cơ thể khỏe mạnh hơn.</p>\r\n</div>\r\n<div class=\"clearfix\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3 col-sm-4 hidden-xs ba_sidebar\">\r\n<aside id=\"insBlogSidebar\">\r\n<div class=\"right_sidebar\">\r\n<div class=\"all_right_widgets\">\r\n<div class=\"sing_right_widget catelogy\">\r\n<div class=\"insHeading\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</aside>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 0, 1, '6 dấu hiệu của cơ thể cảnh báo bạn ăn quá ít rau quả', 'Xuất hiện vết bầm trên da là dấu hiệu tố cáo bạn ăn quá ít rau quả. Tuy nhiên, những vết bầm này đa phần là do 1 va chạm nhỏ gây ra chứ không phải dạng tự dưng xuất hiện nhé.', 'TuanAnhDinh', 2, '2019-10-03 11:58:24', '2019-10-04 06:26:50'),
(6, 'Những loại rau xanh nên ăn nhiều trong mùa thu', 'nhung-loai-rau-xanh-nen-an-nhieu-trong-mua-thu', '15701292036-min_large.jpg', '<p style=\"text-align: justify;\">Thời tiết chuyển sang thu sẽ kh&ocirc;ng c&ograve;n n&oacute;ng nực như m&ugrave;a h&egrave;. Thời tiết thay đổi cũng khiến nhiều người kh&ocirc;ng kịp th&iacute;ch nghi n&ecirc;n dễ bị ốm, nhất l&agrave; mắc c&aacute;c bệnh về ti&ecirc;u h&oacute;a. Hơn nữa, v&agrave;o m&ugrave;a thu, nhiều người c&oacute; xu hướng ăn uống ngon miệng v&agrave;&nbsp;tăng c&acirc;n nhanh&nbsp;hơn.</p>\r\n<p style=\"text-align: justify;\">Những sự cố giao m&ugrave;a n&agrave;y l&agrave; điều kh&ocirc;ng ai mong muốn. Vậy th&igrave; chị em h&atilde;y lựa chọn những loại&nbsp;rau xanh&nbsp;sau đ&acirc;y trong bữa ăn h&agrave;ng ng&agrave;y để bảo đảm sức khỏe cho cả nh&agrave; nh&eacute;.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/chanh day.jpg\" alt=\"\" width=\"480\" height=\"480\" /></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/ot sung.jpg\" alt=\"\" width=\"480\" height=\"480\" /></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/hanh tim.jpg\" alt=\"\" width=\"480\" height=\"480\" /></p>', 0, 0, 'Những loại rau xanh nên ăn nhiều trong mùa thu', 'Thời tiết chuyển sang thu sẽ không còn nóng nực như mùa hè. Thời tiết thay đổi cũng khiến nhiều người không kịp thích nghi nên dễ bị ốm, nhất là mắc các bệnh về tiêu hóa. Hơn nữa, vào mùa thu', 'TuanAnhDinh', 2, '2019-10-03 12:00:03', '2019-10-12 13:30:13'),
(7, 'Rửa rau củ quả bằng dung dịch gì là sạch nhất?', 'rua-rau-cu-qua-bang-dung-dich-gi-la-sach-nhat', '15701293127-min_large.jpg', '<p class=\"\" style=\"text-align: justify;\">Chắc kh&ocirc;ng phải nhắc, ai cũng biết rằng&nbsp;rau củ&nbsp;quả mua ở ngo&agrave;i về l&agrave; phải rửa sạch. Kể cả khi mua ở si&ecirc;u thị hay những cửa h&agrave;ng hoa quả nhập khẩu, bạn sẽ kh&ocirc;ng thể biết được rằng trước đ&oacute; những ai đ&atilde; chạm v&agrave;o thứ quả bạn vừa mua, lại c&agrave;ng kh&ocirc;ng r&otilde; tay họ c&oacute; chứa vi khuẩn nguy hiểm kh&ocirc;ng.</p>\r\n<p class=\"\" style=\"text-align: justify;\">D&agrave;nh cho những ai chưa biết, tay người c&oacute; thể l&agrave; nơi lan truyền rất nhiều vi khuẩn c&oacute; hại cho đường ruột, như E.Coli, Salmonella...</p>\r\n<p class=\"\" style=\"text-align: justify;\">&nbsp;</p>\r\n<p class=\"\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/fruit-and-veggie-washing-test-1475268596527.jpg\" alt=\"\" width=\"620\" height=\"301\" /></p>\r\n<p class=\"\" style=\"text-align: justify;\">Hơn nữa, rau quả hiện nay c&ograve;n c&oacute; thể chứa h&agrave;m lượng thuốc trừ s&acirc;u, nếu kh&ocirc;ng may ăn phải th&igrave; ngộ độc như chơi, thậm ch&iacute; l&agrave; nguy hiểm đến t&iacute;nh mạng.</p>\r\n<p class=\"\" style=\"text-align: justify;\">T&oacute;m lại, mua rau củ quả về chắc chắn phải rửa rồi. Nhưng c&acirc;u hỏi ở đ&acirc;y l&agrave;: rửa thế n&agrave;o l&agrave; sạch nhất?</p>\r\n<div class=\"VCSortableInPreviewMode noCaption\" style=\"text-align: justify;\">\r\n<p class=\"\" style=\"text-align: justify;\">Để trả lời cho c&acirc;u hỏi n&agrave;y, nh&oacute;m chuy&ecirc;n gia thuộc ph&ograve;ng Microbe Inotech Lab đ&atilde; thực hiện một th&iacute; nghiệm: rửa t&aacute;o bằng 3 phương ph&aacute;p kh&aacute;c nhau, gồm nước thường, hỗn hợp nước - giấm, v&agrave; x&agrave; ph&ograve;ng diệt khuẩn cho hoa quả, để xem đ&acirc;u l&agrave; c&aacute;ch rửa chuẩn nhất.</p>\r\n<p class=\"\" style=\"text-align: justify;\">Đầu ti&ecirc;n, c&aacute;c chuy&ecirc;n gia tẩy tr&ugrave;ng 4 quả t&aacute;o bằng cồn, sau đ&oacute; cho ch&uacute;ng tiếp x&uacute;c với một lượng vi khuẩn như nhau. Cuối c&ugrave;ng, họ giữ nguy&ecirc;n một quả t&aacute;o, v&agrave; thử nghiệm 3 phương ph&aacute;p rửa với 3 quả c&ograve;n lại.</p>\r\n<div class=\"VCSortableInPreviewMode GifPhoto\" style=\"text-align: justify;\">\r\n<div>\r\n<p class=\"\" style=\"text-align: justify;\">Nh&igrave;n v&agrave;o đ&acirc;y, bạn c&oacute; thể thấy việc rửa bằng nước tẩy rửa cho kết quả tốt nhất phải kh&ocirc;ng? Tuy nhi&ecirc;n, sự thật l&agrave; vi khuẩn ở đ&acirc;y vẫn chưa phải l&agrave; điều quyết định. Vấn đề c&ograve;n nằm ở trữ lượng thuốc trừ s&acirc;u nữa.</p>\r\n<div id=\"admzone474524\" style=\"text-align: justify;\">\r\n<div id=\"ads_zone474524\">\r\n<div id=\"ads_zone474524_slot1\">&nbsp;</div>\r\n<div><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/gifit-1475268227334-1475268245094-crop-1475268270100.gif.png\" alt=\"\" width=\"450\" height=\"250\" /></div>\r\n</div>\r\n</div>\r\n<p class=\"\" style=\"text-align: justify;\">Khi rửa bằng nước thường, phần lớn vi khuẩn v&agrave; trữ lượng thuốc trừ s&acirc;u sẽ được rửa tr&ocirc;i. Tuy nhi&ecirc;n, c&oacute; tới 24% lượng thuốc trừ s&acirc;u sẽ kh&ocirc;ng tan trong nước. Giải ph&aacute;p duy nhất l&uacute;c n&agrave;y l&agrave; sử dụng hỗn hợp nước - giấm, hoặc nước tẩy rửa hoa quả.&nbsp;Nhưng nếu so về mặt hiệu quả, c&aacute;c th&iacute; nghiệm kh&aacute;c cho thấy x&agrave; ph&ograve;ng tẩy rửa hoa quả kh&ocirc;ng hơn g&igrave; so với hỗn hợp nước - giấm ăn cả.</p>\r\n<p class=\"\" style=\"text-align: justify;\">V&igrave; vậy,&nbsp;<strong>rửa rau củ quả bằng hỗn hợp nước - giấm ăn</strong>&nbsp;c&oacute; lẽ l&agrave; c&aacute;ch tốt nhất, dựa tr&ecirc;n 3 ti&ecirc;u ch&iacute;: sạch khuẩn (lượng vi khuẩn gia tăng kh&ocirc;ng đ&aacute;ng kể); sạch thuốc trừ s&acirc;u (ngang ngửa với loại x&agrave; ph&ograve;ng tẩy rửa); v&agrave; gi&aacute; tiền - chắc chắn rẻ hơn nước rửa hoa quả b&aacute;n b&ecirc;n ngo&agrave;i si&ecirc;u thị.</p>\r\n<p class=\"\" style=\"text-align: justify;\">Ngo&agrave;i ra, c&aacute;c chuy&ecirc;n gia cho biết việc rửa như thế n&agrave;o c&ograve;n phụ thuộc v&agrave;o loại rau củ quả bạn chọn nữa. Nếu bạn mua c&aacute;c sản phẩm organic (hữu cơ - loại trồng 100% theo phương ph&aacute;p tự nhi&ecirc;n, kh&ocirc;ng sử dụng chất h&oacute;a học), chỉ cần rửa qua nước l&agrave; ăn được rồi.</p>\r\n<p class=\"\" style=\"text-align: justify;\">C&ograve;n nếu kh&ocirc;ng, h&atilde;y lựa chọn hỗn hợp giấm ăn để đảm bảo an to&agrave;n.</p>\r\n</div>\r\n</div>\r\n</div>', 0, 1, 'Rửa rau củ quả bằng dung dịch gì là sạch nhất?', 'Chắc không phải nhắc, ai cũng biết rằng rau củ quả mua ở ngoài về là phải rửa sạch. Kể cả khi mua ở siêu thị hay những cửa hàng hoa quả nhập khẩu, bạn sẽ không thể biết được rằng trước đó', 'TuanAnhDinh', 1, '2019-10-03 12:01:52', '2019-10-04 02:21:49'),
(8, '7 cách làm thuốc trừ sâu hữu cơ bảo vệ vườn rau nhà bạn', '7-cach-lam-thuoc-tru-sau-huu-co-bao-ve-vuon-rau-nha-ban', '15701294544-min_large.jpg', '<p style=\"text-align: justify;\">Vườn rau mơn mởn sau nh&agrave; bị s&acirc;u bọ ph&aacute; hoại chắc chắn sẽ khiến bạn ph&aacute;t bực nhưng việc d&ugrave;ng c&aacute;c loại thuốc h&oacute;a học trừ s&acirc;u lại khiến bạn lo lắng về độ an to&agrave;n của nguồn rau củ hơn. V&igrave; thế Cầu Đất Farm mang đến ngay cho bạn 7 c&ocirc;ng thức tự pha dung dịch ph&ograve;ng trừ s&acirc;u bệnh từ c&aacute;c loại thảo mộc quanh nh&agrave;. Lưu lại v&agrave; thực hiện ngay th&ocirc;i!</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>C&aacute;ch 1: Sử dụng c&aacute;c loại rau</strong></p>\r\n<p style=\"text-align: justify;\">Kết hợp 1/2 ch&eacute;n (113 gram) ớt với 1/2 ch&eacute;n&nbsp;(113 grams) t&eacute;p tỏi hoặc h&agrave;nh t&acirc;y. Bạn cũng c&oacute; thể sử dụng cả hai h&agrave;nh t&acirc;y v&agrave; tỏi. Tất cả c&aacute;c loại rau n&ecirc;n được cắt nhỏ trước khi sử dụng.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/1-min_large.jpg\" alt=\"\" width=\"370\" height=\"267\" /></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>C&aacute;ch 2: Sử dụng dầu ăn</strong></p>\r\n<p style=\"text-align: justify;\">Chuẩn bị&nbsp;chai x&agrave; ph&ograve;ng rửa ch&eacute;n t&aacute;c dụng nhẹ. Tr&aacute;nh x&agrave; ph&ograve;ng chuy&ecirc;n chống vi khuẩn, c&oacute; m&ugrave;i thơm, v&igrave; ch&uacute;ng c&oacute; thể g&acirc;y hại cho c&acirc;y trồng của bạn.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Bước n&agrave;y cho ph&eacute;p bạn để đảm bảo rằng sự kết hợp n&agrave;y sẽ kh&ocirc;ng g&acirc;y hại nhiều. Nếu 1 phần nhỏ&nbsp;của c&acirc;y trồng&nbsp;bạn thử nghiệm phun l&ecirc;n l&aacute;&nbsp;h&eacute;o hoặc thay đổi m&agrave;u sắc, h&atilde;y thử sử dụng một x&agrave; ph&ograve;ng kh&aacute;c với dầu ăn.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><strong>C&aacute;ch 3: Sử dụng x&agrave; ph&ograve;ng</strong></p>\r\n<p>Chuẩn bị&nbsp;chai x&agrave; ph&ograve;ng rửa ch&eacute;n t&aacute;c dụng nhẹ. Tr&aacute;nh x&agrave; ph&ograve;ng chuy&ecirc;n chống vi khuẩn, c&oacute; m&ugrave;i thơm, v&igrave; ch&uacute;ng c&oacute; thể g&acirc;y hại cho c&acirc;y trồng của bạn.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../public/admin/images/ca chua bi.jpg\" alt=\"\" width=\"480\" height=\"480\" /></p>\r\n<p><strong>C&aacute;ch 4: Sử dụng thuốc l&aacute;</strong></p>\r\n<p style=\"text-align: justify;\">Trộn 1 cốc (250 ml) thuốc l&aacute; v&agrave;o 1 gallon (4 l&iacute;t) nước. Thuốc l&aacute; hữu &iacute;ch trong việc nhắm mục ti&ecirc;u s&acirc;u, rệp, nhưng n&oacute; kh&ocirc;ng an to&agrave;n khi&nbsp;sử dụng tr&ecirc;n ớt, c&agrave; chua, c&agrave; t&iacute;m, hoặc bất kỳ c&acirc;y trồng n&agrave;o thuộc&nbsp;họ c&agrave;.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Kiểm tra m&agrave;u sắc của hỗn hợp. L&yacute; tưởng nhất, c&aacute;c thuốc trừ s&acirc;u sẽ tr&ocirc;ng giống như m&agrave;u sắc của m&agrave;u ly tr&agrave; ngo&agrave;i &aacute;nh s&aacute;ng. Nếu n&oacute; qu&aacute; tối, n&ecirc;n pha lo&atilde;ng với nước. Nếu n&oacute; qu&aacute; nhẹ kh&ocirc;ng giống tr&agrave;, th&igrave; để&nbsp;th&ecirc;m v&agrave;i giờ.</p>\r\n<p>Th&ecirc;m 3 muỗng canh (45 ml) x&agrave; ph&ograve;ng lỏng v&agrave;o dung dịch. Trộn đều.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>C&aacute;ch 5: Sử dụng&nbsp;vỏ&nbsp;cam</strong></p>\r\n<p style=\"text-align: justify;\">Nếu bạn kh&ocirc;ng c&oacute; quả&nbsp;cam tươi, th&igrave; sử dụng 1,5 muỗng c&agrave; ph&ecirc; (7.4 ml) vỏ cam qu&yacute;t kh&ocirc; hoặc 1/2 ounce (15 ml) dầu cam. Vỏ cam&nbsp;đặc biệt hữu &iacute;ch trong việc xua đuổi&nbsp;bọ th&acirc;n mềm, bao gồm cả ốc&nbsp;s&ecirc;n, rệp, muỗi nấm. Khi phun trực tiếp l&ecirc;n c&aacute;c lo&agrave;i g&acirc;y hại, thuốc trừ s&acirc;u n&agrave;y cũng loại bỏ kiến v&agrave; gi&aacute;n.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p><strong>C&aacute;ch 6: Sử dụng hoa c&uacute;c</strong></p>\r\n<p style=\"text-align: justify;\">Trộn đều&nbsp;1/2 ch&eacute;n (113 gram) hoa c&uacute;c kh&ocirc; với 4 ly (1 l&iacute;t) nước. Hoa c&uacute;c c&oacute; chứa một th&agrave;nh phần h&oacute;a học gọi l&agrave; kim c&uacute;c, c&oacute; khả năng l&agrave;m t&ecirc; liệt nhiều lo&agrave;i c&ocirc;n tr&ugrave;ng g&acirc;y hại trong vườn.</p>', 0, 1, '7 cách làm thuốc trừ sâu hữu cơ bảo vệ vườn rau nhà bạn', 'Vườn rau mơn mởn sau nhà bị sâu bọ phá hoại chắc chắn sẽ khiến bạn phát bực nhưng việc dùng các loại thuốc hóa học trừ sâu lại khiến bạn lo lắng về độ an toàn của nguồn rau củ hơn.', 'TuanAnhDinh', 1, '2019-10-03 12:04:14', '2019-10-04 02:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blogcat`
--

CREATE TABLE `tb_blogcat` (
  `blogcat_id` int(10) UNSIGNED NOT NULL,
  `blogcat_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogcat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogcat_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogcat_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'picture.png',
  `blogcat_hienthi` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_blogcat`
--

INSERT INTO `tb_blogcat` (`blogcat_id`, `blogcat_ten`, `blogcat_slug`, `blogcat_mota`, `blogcat_thumb`, `blogcat_hienthi`, `created_at`, `updated_at`) VALUES
(1, 'Đời sống', 'doi-song', 'Mô tả danh mục Đời sống', 'picture.png', 1, '2019-10-03 00:56:37', '2019-10-03 00:56:37'),
(2, 'Thể thao', 'the-thao', 'Mô tả danh mục Thể thao', 'picture.png', 1, '2019-10-03 00:56:37', '2019-10-03 00:56:37'),
(3, 'Nghệ thuật', 'nghe-thuat', 'Mô tả danh mục Nghệ thuật', 'picture.png', 1, '2019-10-03 00:56:37', '2019-10-03 00:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_contact`
--

CREATE TABLE `tb_layout_contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_contact`
--

INSERT INTO `tb_layout_contact` (`contact_id`, `contact_map`, `contact_title`, `contact_add`, `contact_email`, `contact_phone`, `created_at`, `updated_at`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6339440485494!2d106.65470481418245!3d10.762669162391958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eec413c9d8d%3A0xfd53ac27a1acd021!2zMTgyIEzDqiDEkOG6oWkgSMOgbmgsIHBoxrDhu51uZyAxNSwgUXXhuq1uIDExLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1520997117510\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Công ty TMCP Haravan', '182 Lê Đại Hành, phường 15, Quận 11, Hồ Chí Minh', 'tuananhdinh.vn@gmail.com', '0964973492', NULL, '2019-10-02 16:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_footer`
--

CREATE TABLE `tb_layout_footer` (
  `footer_id` int(10) UNSIGNED NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_footer`
--

INSERT INTO `tb_layout_footer` (`footer_id`, `footer_logo`, `footer_description`, `footer_address`, `footer_email`, `footer_phone`, `footer_facebook`, `created_at`, `updated_at`) VALUES
(1, '1570059098logo.png', 'Mega Plus là chuyên trang cung cấp các sản phẩm chính hãng với đầy đủ các loại sản phẩm từ thời trang cho đến đồ dùng gia đình, đồ dùng cá nhân, mẹ và bé, nội thất... Với các thương hiệu nổi tiếng được nhập khẩu từ nhiều nước trên thế giới', '182, đường Lê Đại Hành, P. 15, Q. 11, Tp. HCM', 'tuananhdinh.vn@gmail.com', '0964973492', 'facebook', NULL, '2019-10-02 16:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_homepage`
--

CREATE TABLE `tb_layout_homepage` (
  `homepage_id` int(10) UNSIGNED NOT NULL,
  `homepage_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepage_favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_img_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_link_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_hienthi_1` tinyint(1) NOT NULL DEFAULT 1,
  `slide_img_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_link_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_hienthi_2` tinyint(1) NOT NULL DEFAULT 1,
  `slide_img_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_link_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_hienthi_3` tinyint(1) NOT NULL DEFAULT 1,
  `bannertop_img_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannertop_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_img_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannertop_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_img_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannertop_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannertop_img_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannertop_link_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_textup_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_textdown_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_textup_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_textdown_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_textup_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_textdown_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_icon_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_textup_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_textdown_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topproduct_1` int(11) DEFAULT NULL,
  `topproduct_2` int(11) DEFAULT NULL,
  `topproduct_3` int(11) DEFAULT NULL,
  `topproduct_4` int(11) DEFAULT NULL,
  `promotion_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_text_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_text_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_text_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_day` tinyint(3) UNSIGNED NOT NULL,
  `promotion_hour` tinyint(3) UNSIGNED NOT NULL,
  `promotion_minute` tinyint(3) UNSIGNED NOT NULL,
  `promotion_second` tinyint(3) UNSIGNED NOT NULL,
  `promotion_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_description_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_description_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_description_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_icon_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_title_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_description_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_icon_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_title_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_description_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_icon_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_title_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyus_description_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_homepage`
--

INSERT INTO `tb_layout_homepage` (`homepage_id`, `homepage_logo`, `homepage_favicon`, `slide_img_1`, `slide_link_1`, `slide_hienthi_1`, `slide_img_2`, `slide_link_2`, `slide_hienthi_2`, `slide_img_3`, `slide_link_3`, `slide_hienthi_3`, `bannertop_img_1`, `bannertop_link_1`, `bannertop_img_2`, `bannertop_link_2`, `bannertop_img_3`, `bannertop_link_3`, `bannertop_img_4`, `bannertop_link_4`, `aboutus_img`, `aboutus_title`, `aboutus_description`, `aboutus_icon_1`, `aboutus_textup_1`, `aboutus_textdown_1`, `aboutus_icon_2`, `aboutus_textup_2`, `aboutus_textdown_2`, `aboutus_icon_3`, `aboutus_textup_3`, `aboutus_textdown_3`, `aboutus_icon_4`, `aboutus_textup_4`, `aboutus_textdown_4`, `topproduct_1`, `topproduct_2`, `topproduct_3`, `topproduct_4`, `promotion_img`, `promotion_text_1`, `promotion_text_2`, `promotion_text_3`, `promotion_day`, `promotion_hour`, `promotion_minute`, `promotion_second`, `promotion_link`, `whyus_title`, `whyus_img`, `whyus_icon_1`, `whyus_title_1`, `whyus_description_1`, `whyus_icon_2`, `whyus_title_2`, `whyus_description_2`, `whyus_icon_3`, `whyus_title_3`, `whyus_description_3`, `whyus_icon_4`, `whyus_title_4`, `whyus_description_4`, `whyus_icon_5`, `whyus_title_5`, `whyus_description_5`, `whyus_icon_6`, `whyus_title_6`, `whyus_description_6`, `created_at`, `updated_at`) VALUES
(1, '1570056411logo.png', 'favicon.png', '1570056454slider_1_image.jpg', '#', 1, '1570056454slider_2_image.jpg', '#', 1, '1570056454slider_3_image.jpg', '#', 1, '1570056454banner_top_1_image.jpg', '#', '1570056454banner_top_2_image.jpg', 'text', '1570056454banner_top_3_image.jpg', '#', '1570056454banner_top_4_image.jpg', '#', '1570056642about_us_home.jpg', 'ĐÔI NÉT VỀ CHÚNG TÔI', 'Phục vụ nhu cầu của Cuyahoga County trong hơn 110 năm. Chúng tôi là một bệnh viện được công nhận đầy đủ bởi Ủy ban Liên hợp với Trung tâm Chấn thương cấp II được chứng nhận. Trung tâm Ung thư Clinic Cleveland ở bệnh viện Fairview Moll Pavilion, nằm ngay phía bên kia đường từ chính nằm trực tiếp trên đường phố.', '1570056642about_us_icon_1.png', 'MIỄN PHÍ GIAO HÀNG', 'Đơn hàng >= 500k', '1570056642about_us_icon_2.png', 'HỖ TRỢ', 'Hỗ trợ 24/24', '1570056642about_us_icon_3.png', 'CHẤT LƯỢNG', 'Đảm bảo chất lượng', '1570056642about_us_icon_4.png', 'LIÊN HỆ', '0964973492', 6, 5, 7, 8, '1570056680countdown_banner.png', 'Khuyễn mãi', 'GIẢM NGAY 30%', 'TIẾT KIỆM LÊN ĐẾN HÀNG TRIỆU ĐỒNG', 0, 0, 0, 0, '#', 'Tại sao chọn chúng tôi', '1570056797img_best_big.jpg', '1570056797icon-bp-1.jpg', '100% Tự nhiên', 'Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.', '1570056797icon-bp-2.jpg', 'Công thức nấu ăn lành mạnh', 'Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.', '1570056797icon-bp-3.jpg', 'Chế độ ăn uống lành mạnh', 'Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.', '1570056797icon-bp-4.jpg', 'Luôn tươi', 'Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.', '1570056797icon-bp-5.jpg', 'Thực hiện bài tập', 'Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.', '1570056797icon-bp-6.jpg', 'Giữ sức khỏe', 'Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.', NULL, '2019-10-14 20:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_lylich`
--

CREATE TABLE `tb_layout_lylich` (
  `lylich_id` int(10) UNSIGNED NOT NULL,
  `lylich_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lylich_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lylich_noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout_product`
--

CREATE TABLE `tb_layout_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_category` tinyint(1) DEFAULT 1,
  `product_fillter` tinyint(1) DEFAULT 1,
  `product_advertise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_layout_product`
--

INSERT INTO `tb_layout_product` (`product_id`, `product_category`, `product_fillter`, `product_advertise`, `product_banner`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '1570057722banner_sidebar.jpg', '1570057729banner_collection.jpg', NULL, '2019-10-02 16:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `od_id` int(10) UNSIGNED NOT NULL,
  `od_user_id` int(11) NOT NULL DEFAULT 0,
  `od_total` int(11) NOT NULL DEFAULT 0,
  `od_ship` int(11) DEFAULT NULL,
  `od_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `od_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `od_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `od_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`od_id`, `od_user_id`, `od_total`, `od_ship`, `od_note`, `od_address`, `od_phone`, `od_status`, `created_at`, `updated_at`) VALUES
(6, 2, 640000, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 1, '2019-10-13 20:18:48', '2019-10-14 21:26:30'),
(7, 2, 340000, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 2, '2019-10-13 20:19:41', '2019-10-14 21:26:38'),
(8, 2, 560000, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 3, '2019-10-13 20:20:40', '2019-10-14 21:26:44'),
(9, 2, 416000, 0, 'Khách hàng ghi chú', '112/28 Tây Hóa, Q9, TpHCM', '0933953192', 4, '2019-10-14 21:26:06', '2019-10-14 21:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `odd_id` int(10) UNSIGNED NOT NULL,
  `odd_od_id` int(11) NOT NULL DEFAULT 0,
  `odd_product_id` int(11) NOT NULL DEFAULT 0,
  `odd_qty` int(11) NOT NULL DEFAULT 0,
  `odd_price` int(11) NOT NULL DEFAULT 0,
  `odd_sale` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`odd_id`, `odd_od_id`, `odd_product_id`, `odd_qty`, `odd_price`, `odd_sale`, `created_at`, `updated_at`) VALUES
(9, 6, 32, 2, 120000, 0, '2019-10-13 20:18:48', '2019-10-13 20:18:48'),
(10, 6, 31, 1, 400000, 0, '2019-10-13 20:18:48', '2019-10-13 20:18:48'),
(11, 7, 28, 1, 10000, 0, '2019-10-13 20:19:41', '2019-10-13 20:19:41'),
(12, 7, 25, 1, 10000, 0, '2019-10-13 20:19:41', '2019-10-13 20:19:41'),
(13, 7, 27, 1, 240000, 0, '2019-10-13 20:19:41', '2019-10-13 20:19:41'),
(14, 7, 24, 1, 20000, 0, '2019-10-13 20:19:41', '2019-10-13 20:19:41'),
(15, 7, 30, 3, 20000, 0, '2019-10-13 20:19:41', '2019-10-13 20:19:41'),
(16, 8, 29, 1, 80000, 0, '2019-10-13 20:20:40', '2019-10-13 20:20:40'),
(17, 8, 32, 4, 120000, 0, '2019-10-13 20:20:40', '2019-10-13 20:20:40'),
(18, 9, 6, 3, 50000, 0, '2019-10-14 21:26:06', '2019-10-14 21:26:06'),
(19, 9, 9, 1, 26000, 0, '2019-10-14 21:26:06', '2019-10-14 21:26:06'),
(20, 9, 27, 1, 240000, 0, '2019-10-14 21:26:06', '2019-10-14 21:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `pro_id` int(10) UNSIGNED NOT NULL,
  `pro_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_noibat` tinyint(1) NOT NULL DEFAULT 0,
  `pro_banchay` tinyint(1) NOT NULL DEFAULT 0,
  `pro_hienthi` tinyint(1) NOT NULL DEFAULT 0,
  `pro_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'productimg.png',
  `pro_thongtin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_giaban` double(8,2) DEFAULT NULL,
  `pro_giakhuyenmai` double(8,2) DEFAULT NULL,
  `pro_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_trangthai` tinyint(4) NOT NULL DEFAULT 1,
  `pro_procatid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`pro_id`, `pro_ten`, `pro_slug`, `pro_noibat`, `pro_banchay`, `pro_hienthi`, `pro_thumb`, `pro_thongtin`, `pro_giaban`, `pro_giakhuyenmai`, `pro_title`, `pro_mota`, `pro_trangthai`, `pro_procatid`, `created_at`, `updated_at`) VALUES
(3, 'Acaibery', 'acaibery', 0, 0, 0, '1570121847acaibery.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 120000.00, NULL, 'Acaibery', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, 7, '2019-10-03 09:57:27', '2019-10-03 09:57:27'),
(4, 'Ba rọi dây', 'ba-roi-day', 0, 0, 0, '1570121886ba roi day.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 200000.00, 20000.00, 'Ba rọi dây', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 8, '2019-10-03 09:58:06', '2019-10-03 09:58:06'),
(5, 'Ba rọi rút sườn', 'ba-roi-rut-suon', 0, 0, 0, '1570121923ba roi rut suon.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 250000.00, NULL, 'Ba rọi rút sườn', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 8, '2019-10-03 09:58:43', '2019-10-03 10:13:52'),
(6, 'Bầu', 'bau', 0, 0, 0, '1570122866bau.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 50000.00, NULL, 'Bầu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 6, '2019-10-03 10:14:26', '2019-10-03 10:14:26'),
(7, 'Bí sao', 'bi-sao', 0, 0, 0, '1570122902bi sao.jpg', '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>&nbsp;</div>', 250000.00, NULL, 'Bí sao', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 6, '2019-10-03 10:15:02', '2019-10-03 10:15:02'),
(8, 'Bí xanh non', 'bi-xanh-non', 0, 0, 0, '1570122937bi xanh non.jpg', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n</div>', 100000.00, NULL, 'Bí xanh non', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 6, '2019-10-03 10:15:37', '2019-10-03 10:16:29'),
(9, 'Cà chua bi', 'ca-chua-bi', 0, 0, 0, '1570122975ca chua bi.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 26000.00, NULL, 'Cà chua bi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 6, '2019-10-03 10:16:15', '2019-10-03 10:16:15'),
(10, 'Cải xoan', 'cai-xoan', 0, 0, 0, '1570123030cai xoan.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 70000.00, NULL, 'Cải xoan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 6, '2019-10-03 10:17:10', '2019-10-03 10:17:10'),
(11, 'Crawberry', 'crawberry', 0, 0, 0, '1570127302cranbery.jpg', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>', 200000.00, 20000.00, 'Crawberry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 7, '2019-10-03 11:28:22', '2019-10-03 11:28:22'),
(12, 'Chanh dây', 'chanh-day', 0, 0, 0, '1570127337chanh day.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 250000.00, NULL, 'Chanh dây', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 7, '2019-10-03 11:28:57', '2019-10-03 11:28:57'),
(14, 'Damson', 'damson', 0, 0, 0, '1570127408damsom.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 399999.00, NULL, 'Damson', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 7, '2019-10-03 11:30:08', '2019-10-03 11:30:08'),
(15, 'Dâu tây', 'dau-tay', 0, 0, 0, '1570127448dau tay.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 190000.00, NULL, 'Dâu tây', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 7, '2019-10-03 11:30:48', '2019-10-03 11:30:48'),
(16, 'Dưa leo gai', 'dua-leo-gai', 0, 0, 0, '1570127490dua leo gai.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 200000.00, 40000.00, 'Dưa leo gai', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 6, '2019-10-03 11:31:30', '2019-10-03 11:31:41'),
(17, 'Đào Úc', 'dao-uc', 0, 0, 1, '1570127544Đào úc.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 200000.00, NULL, 'Đào Úc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 7, '2019-10-03 11:32:24', '2019-10-12 13:23:05'),
(18, 'Hành tím', 'hanh-tim', 0, 0, 0, '1570127584hanh tim.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 20000.00, NULL, 'Hành tím', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 5, '2019-10-03 11:33:04', '2019-10-03 11:33:04'),
(19, 'Khoai môn', 'khoai-mon', 0, 0, 0, '1570127622khoai mon.jpg', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>', 50000.00, NULL, 'Khoai môn', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 5, '2019-10-03 11:33:42', '2019-10-03 11:33:42'),
(20, 'Khoai tây', 'khoai-tay', 0, 0, 1, '1570127654khoai tay.jpg', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n</div>', 50000.00, NULL, 'Khoai tây', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 5, '2019-10-03 11:34:14', '2019-10-12 13:23:09'),
(21, 'Khoai tím', 'khoai-tim', 0, 0, 0, '1570127693khoai tim.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 60000.00, NULL, 'Khoai tím', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 5, '2019-10-03 11:34:53', '2019-10-03 11:34:53'),
(22, 'Nạc heo xay', 'nac-heo-xay', 0, 0, 1, '1570127751nac heo xay.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 90000.00, NULL, 'Nạc heo xay', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 8, '2019-10-03 11:35:51', '2019-10-12 13:23:07'),
(23, 'Nấm', 'nam', 0, 0, 1, '1570127803nam.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 40000.00, NULL, 'Nấm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 5, '2019-10-03 11:36:43', '2019-10-12 13:22:46'),
(24, 'Ớt chuông vàng', 'ot-chuong-vang', 0, 0, 1, '1570127842ot chuong vang.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 20000.00, NULL, 'Ớt chuông vàng', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', 1, 6, '2019-10-03 11:37:22', '2019-10-12 13:22:54'),
(25, 'Ớt sừng', 'ot-sung', 0, 0, 1, '1570127876ot sung.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 10000.00, NULL, 'Ớt sừng', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', 1, 6, '2019-10-03 11:37:56', '2019-10-12 13:22:57'),
(26, 'Phúc bồn tử', 'phuc-bon-tu', 0, 0, 1, '1570127904phuc bon tu.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 500000.00, NULL, 'Phúc bồn tử', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 7, '2019-10-03 11:38:24', '2019-10-12 13:22:59'),
(27, 'Sườn non', 'suon-non', 0, 0, 1, '1570127948suon non.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 240000.00, NULL, 'Sườn non', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 8, '2019-10-03 11:39:08', '2019-10-12 13:22:52'),
(28, 'Tỏi', 'toi', 0, 0, 1, '1570127982toi.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 10000.00, NULL, 'Tỏi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 5, '2019-10-03 11:39:42', '2019-10-12 13:22:48'),
(29, 'Vải thiều', 'vai-thieu', 0, 0, 1, '1570128020vai thieu.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 80000.00, NULL, 'Vải thiều', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 7, '2019-10-03 11:40:20', '2019-10-12 13:22:43'),
(30, 'Xoài cát', 'xoai-cat', 0, 0, 1, '1570128051xoai cat.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 20000.00, NULL, 'Xoài cát', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 7, '2019-10-03 11:40:51', '2019-10-12 13:22:41'),
(31, 'Xoài Mỹ', 'xoai-my', 0, 0, 1, '1570128085xoai my.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 400000.00, 100000.00, 'Xoài Mỹ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 7, '2019-10-03 11:41:25', '2019-10-12 13:22:39'),
(32, 'Xương ống', 'xuong-ong', 0, 0, 1, '1570128114xuong ong heo.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 120000.00, NULL, 'Xương ống', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 1, 8, '2019-10-03 11:41:54', '2019-10-14 20:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productcat`
--

CREATE TABLE `tb_productcat` (
  `procat_id` int(10) UNSIGNED NOT NULL,
  `procat_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `procat_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'productcat.png',
  `procat_hienthi` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_productcat`
--

INSERT INTO `tb_productcat` (`procat_id`, `procat_ten`, `procat_slug`, `procat_mota`, `procat_thumb`, `procat_hienthi`, `created_at`, `updated_at`) VALUES
(5, 'Củ', 'cu', 'Mô tả củ', 'productcat.png', 1, '2019-10-02 14:30:19', '2019-10-02 14:30:19'),
(6, 'Rau xanh', 'rau-xanh', 'Rau tươi cho mọi nhà', 'productcat.png', 1, '2019-10-02 14:30:33', '2019-10-02 14:30:33'),
(7, 'Trái cây', 'trai-cay', 'Trái cây tươi', 'productcat.png', 1, '2019-10-02 14:30:52', '2019-10-02 14:30:52'),
(8, 'Thịt', 'thit', 'Thịt cho mọi nhà', 'productcat.png', 1, '2019-10-02 14:31:06', '2019-10-02 14:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `st_id` int(10) UNSIGNED NOT NULL,
  `st_tencongty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_hotline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_codehead` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_codebody` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_codefoot` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`st_id`, `st_tencongty`, `st_email`, `st_hotline`, `st_diachi`, `st_title`, `st_mota`, `st_codehead`, `st_codebody`, `st_codefoot`, `created_at`, `updated_at`) VALUES
(1, 'TuanAnhDinh', 'tuananhdinh.vn@gmail.com', '0964973492', 'Vũng Tàu', 'TuanAnhDinh', 'Mô tả công ty', NULL, NULL, NULL, '2019-10-03 06:53:05', '2019-10-26 08:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_reset_password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanquyen` tinyint(4) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `code_active` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_active` timestamp NULL DEFAULT NULL,
  `xacnhan` tinyint(1) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `password`, `code_reset_password`, `phone`, `diachi`, `phanquyen`, `avatar`, `code_active`, `time_active`, `xacnhan`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'TuanAnhDinh', 'tuananhdinh.vn@gmail.com', '$2y$10$A5Qq.ZN79.3zp9P26A7PRew5CuVOfUtfwV.1KvNHk8RXAhEWLAT06', 't6f9AcrCmDgFJ8Dijl298ub86TItMSb9Wo19cx1dulaBVaQ', '0933953192', '112/28 Tây Hóa, Q9, TpHCM', 1, '1570120687logo2.png', NULL, NULL, 1, 'tLJfGIUX3PGpsfOCEalCxR2Vdh6fR5pExZQG0yI8258hTdC6CmNidPG2d9IJ', '2019-10-02 01:42:06', '2019-10-29 14:49:54'),
(3, 'Admin Demo', 'tuananhvn@gmail.com', '$2y$10$IOvJPbtQoT3LeoECdtMxXuphuvdJV8bI7aH4.ly6KvAykEQd9lfae', NULL, '098887676', '112/28 Tây Hóa, Q9, TpHCM', 2, 'avatar.png', NULL, NULL, 0, NULL, '2019-10-03 07:41:12', '2019-10-03 07:47:38'),
(37, 'Đinh Tuấn Anh', 'tuananh.a.bk@gmail.com', '$2y$10$EKyMRuoh.XwzOdHvcVClw.xXZdbE1N.fcuvBZSnho.k5HWcYo5WVm', NULL, '122454654765767', '112/28 Tây Hóa, Q9, TpHCM', 4, 'avatar.png', 'actived', '2019-10-29 14:04:47', 0, 'jIHXVpkkqC3UxUQv6O8RrEHY2K9e0HclRasOBwurNhQShWpgua9kKFfl1YiV', '2019-10-29 14:04:23', '2019-10-29 18:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `tb_blog_blog_blogcatid_foreign` (`blog_blogcatid`);

--
-- Indexes for table `tb_blogcat`
--
ALTER TABLE `tb_blogcat`
  ADD PRIMARY KEY (`blogcat_id`);

--
-- Indexes for table `tb_layout_contact`
--
ALTER TABLE `tb_layout_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tb_layout_footer`
--
ALTER TABLE `tb_layout_footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `tb_layout_homepage`
--
ALTER TABLE `tb_layout_homepage`
  ADD PRIMARY KEY (`homepage_id`);

--
-- Indexes for table `tb_layout_lylich`
--
ALTER TABLE `tb_layout_lylich`
  ADD PRIMARY KEY (`lylich_id`);

--
-- Indexes for table `tb_layout_product`
--
ALTER TABLE `tb_layout_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `tb_order_od_user_id_index` (`od_user_id`),
  ADD KEY `tb_order_od_status_index` (`od_status`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`odd_id`),
  ADD KEY `tb_order_detail_odd_od_id_index` (`odd_od_id`),
  ADD KEY `tb_order_detail_odd_product_id_index` (`odd_product_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `tb_product_pro_procatid_foreign` (`pro_procatid`);

--
-- Indexes for table `tb_productcat`
--
ALTER TABLE `tb_productcat`
  ADD PRIMARY KEY (`procat_id`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_blogcat`
--
ALTER TABLE `tb_blogcat`
  MODIFY `blogcat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_layout_contact`
--
ALTER TABLE `tb_layout_contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layout_footer`
--
ALTER TABLE `tb_layout_footer`
  MODIFY `footer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layout_homepage`
--
ALTER TABLE `tb_layout_homepage`
  MODIFY `homepage_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layout_lylich`
--
ALTER TABLE `tb_layout_lylich`
  MODIFY `lylich_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_layout_product`
--
ALTER TABLE `tb_layout_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `od_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `odd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `pro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_productcat`
--
ALTER TABLE `tb_productcat`
  MODIFY `procat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `st_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD CONSTRAINT `tb_blog_blog_blogcatid_foreign` FOREIGN KEY (`blog_blogcatid`) REFERENCES `tb_blogcat` (`blogcat_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_pro_procatid_foreign` FOREIGN KEY (`pro_procatid`) REFERENCES `tb_productcat` (`procat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
