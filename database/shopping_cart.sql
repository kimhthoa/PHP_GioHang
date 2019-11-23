-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 01:18 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_sale` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_cost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img-thumail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `product_des` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `img_slider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_slider_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_image`, `product_sale`, `product_cost`, `img-thumail`, `product_code`, `product_des`, `img_slider`, `img_slider_two`) VALUES
(1, 'Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU', 'img/1.1.jpg', ' 8290000', '11500000', 'images/product-1.1.jpg', 'p1000', 'Máy lọc nước Kangaroo Hydrogen KG100HC 10 lõi vỏ tủ VTU trụ tròn đen\r\n                                    kết hợp hoàn hảo giữa phong cách thiết kế Châu Âu với quan niệm phong thủy\r\n                                    Á Đông tạo nên một kiệt tác về thiết ', 'img/1.1.jpg', 'img/1.2.jpg'),
(2, 'Máy lọc nước Kangaroo Hydrogen KG100HG không vỏ', 'images/product-2.jpg', '6250000', '9100000', '', 'p1001', 'Máy lọc nước Kangaroo Hydrogen KG100HG 10 lõi không vỏ Sản phẩm thuộc dòng Máy lọc nước Hydrogen với hệ thống 10 lõi lọc tiên tiến nhất hiện nay. Cụm lõi lọc cơ bản cho nguồn nước tinh khiết, các lõi lọc bổ sung giúp tạo khoáng, cân bằng độ PH, tạo ...', 'img/2.1.jpg', 'img/2.1.jpg'),
(3, 'Máy lọc nước Kangaroo Hydrogen KG100HB vỏ tủ VTU', 'images/product-3.jpg', '6690000', '9700000', '', 'p1002', 'Máy lọc nước Kangaroo Hydrogen KG100HB 9 lõi vỏ tủ VTU Diamond bạc Sản phẩm thuộc dòng Máy lọc nước Kangaroo Hydrogen, tạo nguồn nước khỏe thế hệ mới Hydrogen. Model KG100HB được thiết kế với màu diamond bạc sang trọng đẳng cấp, cùng hệ thống lõi lọc lên ', 'img/3.1.jpg', 'img/3.1.jpg'),
(4, 'Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU', 'images/product-4.jpg', '5890000', '9100000', '', 'p1003', 'Máy lọc nước Kangaroo Hydrogen KG100HG 10 lõi vỏ tủ VTU Diamond đen vàng Sản phẩm thuộc dòng Máy lọc nước Hydrogen với hệ thống 10 lõi lọc tiên tiến nhất hiện nay. Cụm lõi lọc cơ bản cho nguồn nước tinh khiết, các lõi lọc bổ sung giúp tạo khoáng, cân ...', 'img/2.1.jpg', 'img/2.1.jpg'),
(5, 'Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU', 'images/product-5.jpg', '6880000', '9700000', '', 'p1004', 'Máy lọc nước Kangaroo Hydrogen Plus KG100HP không vỏ 10 cấp lọc là sản phẩm mới nhất năm 2018 của dòng sản phẩm Máy lọc nước Hydrogen. Hệ thống lọc lên đến 10 cấp. bổ sung lõi số 10 tự động cân bằng khoáng chất. Thiết bị không bao gồm vỏ ...', 'img/5.1.jpg', 'img/5.1.jpg'),
(6, 'Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU', 'images/product-6.jpg', '6250000', '9500000', '', 'p1005', 'áy lọc nước Kangaroo Hydrogen Plus KG100HP không vỏ 10 cấp lọc là sản phẩm mới nhất năm 2018 của dòng sản phẩm Máy lọc nước Hydrogen. Hệ thống lọc lên đến 10 cấp. bổ sung lõi số 10 tự động cân bằng khoáng chất. Thiết bị không bao gồm vỏ ...', 'img/2.1.jpg', 'img/2.1.jpg'),
(10, 'Máy lọc nước Kangaroo 9 Cấp lọc 2 vòi (Nóng - RO) KG09A3', 'images/product-8.png', '6480000', '8590000', 'images/product-8.1.jpg', 'p1008', 'Máy lọc nước Kangaroo 9 Cấp lọc 2 vòi (Nóng - RO) KG09A3  với 9 cấp lọc cho nước tinh khiết và đầy đủ chức năng. Đặc biệt có thêm 2 vòi Nóng - RO  Tính năng nổi trội của Máy lọc nước Kangaroo 9 Cấp lọc 2 vòi (Nóng - RO) ...', 'img/7.1.png', 'img/7.2.png'),
(11, 'Máy lọc nước Kangaroo 10 Cấp lọc 2 vòi (Nóng - RO - Lạnh)', 'images/product-9.jpg', '5890000', '9100000', '', 'p1006', ' Máy lọc nước Kangaroo 10 Cấp lọc 2 vòi (Nóng - RO - Lạnh) KG10A3  với 10 cấp lọc cho nước tinh khiết và đầy đủ chức năng. Đặc biệt có thêm 2 vòi Nóng - RO     Tính năng nổi trội của Máy lọc nước Kangaroo KG10A3   Chức năng lọc như một ...', 'iimg/8.1.jpg\r\n', 'iimg/8.1.jpg'),
(12, 'Máy lọc nước Kangaroo 9 lõi vỏ tủ VTU KG110A (dòng A - bơm)', 'images/product-7.png', '5290000', '7990000', 'images/product-7.jpg', 'p1007', 'Máy lọc nước Kangaroo 9 lõi vỏ tủ VTU KG110A (dòng A - bơm hút sâu) với hệ thống 9 lõi lọc thế hệ mới Omega màu xanh lá cây, trên mỗi lõi lọc có dán tem xác thực chính hãng. Sử dụng Máy lọc nước Kangaroo 9 lõi Omega, nước ...', 'img/9.1.png', 'img/9.2.jpg'),
(13, 'Máy lọc nước Kangaroo 9 lõi Omega không vỏ tủ KG110', 'images/product-10.jpg', '4850000', '6550000', 'images/product-10.1.jpg', 'p1008', 'Máy lọc nước Kangaroo 9 lõi Omega không vỏ tủ KG110 (hay còn gọi là Máy lọc nước Kangaroo KG110KV) với hệ thống lõi lọc thế hệ mới Omega màu xanh lá cây, trên mỗi lõi lọc có dán tem xác thực chính hãng, nước có thể uống ngay mà không cần đun. Không ...', 'img/10.1.jpg', 'img/10.2.jpg'),
(14, 'Máy lọc nước Kangaroo 9 lõi không vỏ tủ KG109', 'images/product-11.jpg', '4650000', '5400000', 'images/product-11.1.jpg', 'p1009', 'Máy lọc nước Kangaroo 9 lõi không vỏ tủ KG109 được tăng cường Lõi ORP (lõi số 9) cho kết quả pH cao (9.28) và mức điện giải thấp với chỉ số (-256mV) giúp giải độc cơ thể, tăng cường đề kháng, giải khát nhanh và lâu, phát triển các mô tế bào, diệt các gốc tự ...', 'img/11.1.jpg', 'img/11.2.jpg'),
(15, 'Máy lọc nước Kangaroo 9 lõi vỏ tủ VTU KG109', 'images/product-12.jpg', '5250000', '6650000', 'images/product-12.1.jpg', 'p1010', 'Máy lọc nước Kangaroo 9 lõi vỏ tủ VTU KG109 được tăng cường Lõi ORP (lõi số 9) cho kết quả pH cao (9.28) và mức điện giải thấp với chỉ số (-256mV) giúp giải độc cơ thể, tăng cường đề kháng, giải khát nhanh và lâu, phát triển các mô tế bào, diệt các gốc tự ...', 'img/12.1.jpg', 'img/12.2.jpg'),
(16, 'Máy làm mát không khí Kangaroo KG50F36', 'images/product-25.jpg', '5290000', '7500000', '', 'p1011', '  Máy làm mát không khí Kangaroo KG50F36 - (Quạt điều hòa Kangaroo KG50F36) Sản phẩm mới của tập đoàn Kangaroo với kiểu dáng hiện đại, sang trọng, màu sắc trang nhã. Được tích hợp 3 trong 1 chức năng: Quạt/ Điều hòa/ Lọc không khí, mang tới cho bạn không khí trong lành thoáng ...', 'img/13.1.jpg', 'img/13.1.jpg'),
(17, 'Máy làm mát không khí Kangaroo KG50F38', 'images/product-26.jpg', '5390000', '6900000', '', 'p1012', 'Máy làm mát không khí Kangaroo KG50F38 - (Quạt điều hòa Kangaroo KG50F38) Sản phẩm mới của tập đoàn Kangaroo với kiểu dáng hiện đại, sang trọng, màu sắc trang nhã. Được tích hợp 3 trong 1 chức năng: Quạt/ Điều hòa/ Lọc không khí, mang tới cho bạn không khí trong lành thoáng ...', 'img/13.1.jpg', 'img/13.1.jpg'),
(18, 'Quạt phun sương Kangaroo KG56B (KG586B)', 'images/product-27.jpg', '2350000', '3250000', '', 'p1013', 'Quạt phun sương Kangaroo KG56B có kiểu sáng sang trọng, quyến rũ và mạnh mẽ với nhiều tính năng và dễ sử dụng. Quạt có chức năng làm mát và phun sương, có thể sử dụng tách biệt hoặc đồng thời cả 2 chức năng. Bạn có thể cảm nhận làn ...', 'img/14.1.png', 'img/14.1.png'),
(19, 'Quạt phun sương kangaroo KG56S (KG586S)', 'images/product-28.jpg', '2250000', '3270000', '', 'p1014', '  Quạt phun sương Kangaroo KG56S có kiểu sáng sang trọng, quyến rũ và mạnh mẽ với nhiều tính năng và dễ sử dụng. Quạt có chức năng làm mát và phun sương, có thể sử dụng tách biệt hoặc đồng thời cả 2 chức năng. Bạn có thể cảm nhận làn ...', 'img/15.1.jpg', 'img/15.1.jpg'),
(20, 'Máy làm mát không khí Kangaroo KG50F11', 'images/product-29.jpg', '3190000', '4960000', '', 'p1015', 'Máy làm mát không khí Kangaroo KG50F11 (Quạt điều hòa Kangaroo KG50F11) - Sản phẩm mới của tập đoàn Kangaroo với kiểu dáng hiện đại, sang trọng, màu sắc trang nhã. Được tích hợp 3 trong 1 chức năng: Quạt/ Điều hòa/ Lọc không khí, mang tới cho bạn không khí trong lành thoáng ...', 'img/17.1.png', 'img/17.1.png'),
(21, 'Máy làm mát không khí Kangaroo KG50F12', 'images/product-30.jpg', '3350000', '4020000', '', 'p1016', 'Máy làm mát không khí Kangaroo KG50F12 (Quạt điều hòa Kangaroo KG50F12) - Sản phẩm mới của tập đoàn Kangaroo với kiểu dáng hiện đại, sang trọng, màu sắc trang nhã. Được tích hợp 3 trong 1 chức năng: Quạt/ Điều hòa/ Lọc không khí, mang tới cho bạn không khí trong lành thoáng ...', 'img/18.1.jpg', 'img/18.1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
