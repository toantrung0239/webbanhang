-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2022 lúc 01:43 PM
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
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDonhang` int(10) UNSIGNED NOT NULL,
  `Username` varchar(255) NOT NULL,
  `idNhanhang` int(10) UNSIGNED NOT NULL,
  `idSanpham` int(10) UNSIGNED NOT NULL,
  `Ngaytaodonhang` datetime NOT NULL,
  `Soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sdt` int(11) NOT NULL,
  `Hoten` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Username`, `Password`, `Diachi`, `Sdt`, `Hoten`) VALUES
('voduylong1106@gmail.com', '123', 'An Dương Vương', 954234, 'Võ Duy Long');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhang`
--

CREATE TABLE `nhanhang` (
  `idNhanhang` int(10) UNSIGNED NOT NULL,
  `Tennhanhang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhang`
--

INSERT INTO `nhanhang` (`idNhanhang`, `Tennhanhang`) VALUES
(1, 'Apple'),
(2, 'Lenovo'),
(3, 'Dell'),
(4, 'Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSanpham` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNhanhang` int(10) UNSIGNED NOT NULL,
  `Hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mota` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int(10) NOT NULL,
  `Soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSanpham`, `Ten`, `idNhanhang`, `Hinh`, `Mota`, `Gia`, `Soluong`) VALUES
(1, 'Iphone 13', 1, 'ip13.jpg', '<p>Ngoài thiết kế mới, iPhone 13 còn được kỳ vọng sẽ có nhiều nâng cấp về tính năng như có Touch ID, dung lượng lưu trữ 1TB , màn hình 120Hz, chip 5nm+, hệ thống camera mới, thời lượng pin tốt hơn. Đặc biệt, mới đây còn có tin đồn, dòng iPhone này có thể cho phép gọi điện và gửi tin nhắn văn bản thông qua vệ tinh LEO.</p>\r\n', 18690000, 10),
(2, 'Iphone 14 Pro', 1, 'ip14pro.jpg', '<p>iPhone 14 Pro có 4 tùy chọn dung lượng là 128, 256, 512 GB và 1 TB. Máy bắt đầu cho đặt hàng từ 9/9 và \"lên kệ\" từ ngày 16/9. Camera chính trên iPhone được nâng cấp lên 48 megapixel sau nhiều năm dùng độ phân giải 12 megapixel.', 31990000, 15),
(3, 'Laptop Lenovo ideapad 3 15ITL6', 2, 'lenovo ideapad 3 15ITL6.jpg', '<p>Chip Core i5-1135G7 cùng card Intel Iris Xe Graphics xử lý mượt mà các tác vụ văn phòng hay chỉnh sửa ảnh cơ bản trên PTS.</p>\r\n<p>Ram 8GB + 1 khe trống cho phép nâng cấp tối đa đến 16GB, ổ cứng SSD 512GB mang đến tốc độ xử lý nhanh cùng đa nhiệm mượt mà.</p>\r\n<p>Màn hình Full HD kích thước chuẩn 15.6 inch, tấm nền TN mang lại chất lượng hiển thị sắc nét.</p>\r\n<p>Tích hợp Webcam 720p cho phép đàm thoại thông qua video thoải mái.</p>\r\n<p>Trọng lương 1.65 kg thuận tiện di chuyển, mang theo.</p>\r\n<p>Cảm biến vân tay - giúp mở khóa nhanh chóng, tiện lợi.</p>\r\n<p>Công nghệ âm thanh Dolby Audio - mang lại trải nghiệm giải trí chân thật.</p>\r\n<p>Máy đi kèm Windows 11 bản quyền.</p>', 13490000, 5),
(4, 'Laptop Dell Vostro 5410 - V4I5214W', 3, 'Laptop Dell Vostro 5410 - V4I5214W.jpg', '<p>Khí thế mạnh mẽ toát lên bên ngoài của chiếc Dell Vostro 5410 i5 11320H (V4I5214W) sẵn sàng lấn át mọi đối thủ, cùng cấu hình vượt trội bên trong, là vũ khí đắc lực cùng bạn chinh chiến trên mọi mặt trận kể cả công việc hay giải trí.</p>\r\n \r\n<p>Dễ dàng hơn trong mọi tác vụ nhờ chip Intel thế hệ 11</p>\r\n<p>Sở hữu cấu trúc 4 nhân 8 luồng, bộ vi xử lý Intel Core i5 Tiger Lake 11320H mang đến tốc độ cơ bản 3.20 GHz và ép xung lên đến 4.5 GHz nhờ Turbo Boost hỗ trợ bạn thao tác mọi công việc văn phòng đơn giản hơn cùng các ứng dụng Word, Excel,... hay trải nghiệm mượt mà cùng những tác phẩm đồ hoạ cơ bản.</p>\r\n<p>Card tích hợp Intel Iris Xe Graphics mang đến chất lượng hình ảnh vượt bậc, rõ nét đến từng chi tiết, thuận lợi hơn cho bạn trong việc chỉnh sửa hình ảnh, render video cơ bản,... với các ứng dụng nhà Adobe như Photoshop, Ai,... hay chiến những tựa game nhẹ nhàng phổ biến hiện nay.</p> \r\n<p>Mở cùng lúc nhiều ứng dụng và chuyển đổi qua lại không còn là nỗi lo nhờ sự đa nhiệm đến từ RAM 8 GB chuẩn DDR4 2 khe (1 khe 8 GB + 1 khe rời) với tốc độ Bus RAM lên đến 3200 MHz, cùng khả năng nâng cấp RAM 32 GB, cho phép bạn thỏa sức làm cùng lúc nhiều việc mà không sợ giật lag, nâng cao hiệu quả công việc.</p>', 19490000, 4),
(5, 'Laptop Dell Vostro 3510 P112F002BBL i5-1135G7', 3, 'Laptop Dell Vostro 3510 P112F002BBL i5-1135G7.jpg', '<p>Laptop Dell Vostro 3510 P112F002BBL mang trên mình thiết kế vô cùng đơn giản, thanh lịch kết với hiệu suất hoạt động vượt trội trong tầm giá. Không những vô cùng mỏng nhẹ, chiếc máy này còn mang đến trải nghiệm vô cùng tuyệt vời trong quá trình sử dụng, là lựa chọn hoàn hảo cho những người dùng văn phòng, sinh viên hay freelancer làm việc nhiều nơi.</p>', 16490000, 7),
(6, 'Laptop Gaming Dell G15 5511-70283449-i5', 3, 'Laptop Gaming Dell G15 5511-70283449-i5.jpg', '<p>Thiết kế hầm hố, độc đáo sáng tạo của những chiếc laptop gaming giờ đây không chỉ thu hút những đối tượng chuyên chơi game mà còn cả những khách hàng làm văn phòng. Laptop Gaming Dell G15 5511 mang trên mình một hiệu năng khủng kết hợp với vẻ bề ngoài độc đáo, thanh lịch liệu có đang chinh phục được người dùng khó tính nhất. Hãy cùng Hoàng Hà Mobile tìm hiểu qua bài viết sau đây nhé.</p>', 22490000, 8),
(7, 'Laptop Dell Inspiron 16 5625 99VP91 R7-5825U', 3, 'Laptop Dell Inspiron 16 5625 99VP91 R7-5825U.jpg', '<p>Laptop Dell Inspiron 15 5625 99VP91 được thiết kế theo xu hướng tối giản theo đúng tiêu chuẩn của một chiếc máy tính phổ thông. Cùng với hiệu năng mạnh mẽ, laptop này sẽ giúp đáp ứng tốt các nhu cầu và hứa hẹn sẽ mang đến trải nghiệm tuyệt vời đến khách hàng.</p>\r\n', 1990000, 12),
(8, 'Laptop ASUS Gaming TUF FX506HM-HN366W, i7-11800H', 4, 'Laptop ASUS Gaming TUF FX506HM-HN366W, i7-11800H.jpg', '<p>Laptop Asus TUF Gaming FX506HM i7 (HN366W) là một trong những laptop gaming đáng sắm nhất, sự kết hợp giữa sức mạnh bộc phá đến từ bộ vi xử lý Intel Gen 12 và card rời NVIDIA xứng danh trợ thủ đắc lực cho mọi game thủ, người dùng sáng tạo đồ hoạ - kỹ thuật.</p>27890000', 27890000, 5),
(9, 'Laptop Asus Gaming Rog Strix G15 G513IH - HN015W - R7-4800H', 4, 'Laptop Asus Gaming Rog Strix G15 G513IH - HN015W - R7-4800H.jpg', '<p>Laptop Asus Gaming Rog Strix G15 G513IH - HN015W được ra mắt năm 2021. Chiếc laptop này sở hữu một thiết kế vô cùng mạnh mẽ và đầy nam tính với vỏ ngoài được làm từ nhựa cao cấp và nắp lưng được làm bằng kim loại. Phần logo được đặt lệch sang một bên quen thuộc là một đặc trưng của dòng laptop Gaming của Asus.</p>', 18390000, 4),
(10, 'Laptop ASUS VivoBook M513UA-EJ033T', 4, 'Laptop ASUS VivoBook M513UA-EJ033T.jpg', '<p>Laptop ASUS VivoBook M513UA-EJ033T là sản phẩm được Asus thiết kế với kiểu dáng của một chiếc laptop sang trọng, tinh tế và thanh lịch cho đối tượng doanh nhân. Cấu hình mạnh mẽ bên trong lớp vỏ máy kim loại nguyên khối vuông vắn và liền mạch ngay lập tức tạo được ấn tượng cho những ai đang cần một chiếc laptop toàn diện.</p>', 17890000, 8),
(11, 'Iphone 14 Pro Max', 1, 'ip14prm.jpg', '<p>Phone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất nằm trong thế hệ iPhone 14 Series mới vừa được ra mắt cùng với nhiều nâng cấp về ngoại hình và tính năng, hứa hẹn sẽ là dòng sản phẩm đột phá trong vài năm trở lại đây của Apple.</p>', 31490000, 16),
(12, 'Iphone 13 Pro Max', 1, 'ip3prm.jpg', '<p>Xét về phong cách thiết kế, iPhone 13 Pro Max vẫn sở hữu khung viền vuông vức bằng kim loại sang trọng tương tự như iPhone 12 Pro Max. Mặt lưng của máy được hoàn thiện nhám để tránh lưu lại vân tay khi sử dụng. Cầm chiếc iPhone 13 Pro Max trên tay chắc chắn sẽ thu hút mọi ánh nhìn bởi thiết kế quá ấn tượng.</p>\r\n\r\n<p>Là chiếc iPhone lớn nhất nên màn hình của iPhone 13 Pro Max cũng có kích thước lên tới 6.7 inch. Trên màn hình vẫn có tai thỏ quen thuộc nhưng đã được tinh chỉnh nhỏ gọn hơn thế hệ trước 20% nhằm tối ưu hóa không gian hiển thị. Camera selfie 12MP nằm trong tai thỏ và cung cấp bảo mật Face ID. Màn hình vẫn được bảo vệ bởi kính cường lực Ceramic Shield siêu bền.</p>\r\n\r\n<p>Apple đã trang bị màn hình Super Retina XDR với công nghệ ProMotion giúp tinh chỉnh tần số quét 10 - 120Hz. Độ sáng tối đa cũng đã được tăng lên 1.200 nits. Có thể nói đây là điểm sáng giá nhất của iPhone 13 Pro Max.</p>', 26690000, 19),
(13, 'Iphone 12 Mini', 1, 'ip12mini.jpg', '<p>Ở phía mặt trước, iPhone 12 Mini 64GB chính hãng VN/A vẫn sở hữu một thiết kế tràn viền tai thỏ như các thế hệ tiền nhiệm, với các phần viền benzel dường như đã được làm mỏng hơn. Nhưng đó không phải là tất cả những gì mà iPhone 12 Mini có. Toàn bộ các phần cạnh của iPhone 12 Mini nói riêng và thế hệ iPhone 12 năm nay nói chung đều đã được Apple làm mới lại, vắt phẳng vuông thành sắc cạnh, cực kì hiện đại, sang trọng và tinh tế. Mặt lưng của iPhone 12 Mini được bảo vệ bởi một lớp kính cường lực mà Apple gọi là Ceramic Shield giúp máy trở nên bền bỉ và cứng cáp hơn rất nhiều. iPhone 12 Mini sẽ có tất cả 5 phiên bản màu bao gồm Đen, Trắng, Xanh Lam, Xanh Lục và Đỏ.</p>', 19490000, 16),
(14, 'Iphone 13 Mini', 1, 'ip13mini.jpg', '<p>iPhone 13 Mini có thiết kế ống kính camera chéo và phần tai thỏ nhỏ hơn. Apple cho biết so với thế hệ trước, phần tai thỏ này đã được làm nhỏ đi 20%. iPhone 13 Mini sở hữu màn hình OLED 5.4 inch. Màn hình này sáng hơn 28% so với iPhone 12 Mini. Với nội dung thông thường, độ sáng tối đa là 800 nits còn với nội dung HDR thì độ sáng lên tới 1200 nits. Ngoài ra, màn hình còn được bảo vệ bởi kính cường lực Ceramic Shield siêu bền.</p>\r\n\r\n<p>Công nghệ màn hình Super Retina XDR cùng mật độ điểm ảnh cực cao mang đến khả năng hiển thị sắc nét, gam màu tự nhiên. iPhone 13 Mini cũng có công nghệ Face ID mới nhất. Bên cạnh màu hồng hoàn toàn mới, người dùng còn có thể lựa chọn các phiên bản màu đen, trắng, xanh, đỏ.</p>', 23990000, 20),
(15, 'Iphone SE 2022', 1, 'ipse2022.jpg', '<p>iPhone SE 64GB (2022) cũng đã được giới thiệu tại sự kiện Apple Peek Performance. Thiết bị nổi bật với cấu hình mạnh mẽ, chạy chip hiện đại nhất của Apple hiện tại nhưng giá bán lại rất phải chăng.</p>', 10990000, 25),
(16, 'Iphone SE 2020', 1, 'ipse2020.jpg', '<p>Điện thoại iPhone SE 2020 đã bất ngờ ra mắt với thiết kế 4.7 inch nhỏ gọn, chip A13 Bionic mạnh mẽ như trên iPhone 11 và đặc biệt sở hữu mức giá tốt chưa từng có.</p>', 8990000, 3),
(17, 'Macbook Pro M2 2022', 1, 'Macbook Pro M2 2022.jpg', '<p>Trong tháng 6 vừa qua, Apple đã giới thiệu con chip độc quyền thế hệ thứ hai. Chip M2 được trang bị trên cả hai dòng sản phẩm MacBook Air và MacBook Pro. Nó hứa hẹn sẽ là một phiên bản nâng cấp mạnh mẽ so với thế hệ MacBook Pro M1. Nếu bạn đang tìm kiếm một chiếc máy tính nhỏ gọn với hiệu năng vượt trội thì chắc chắn không thể bỏ qua MacBook Pro M2 13 inch 2022 256GB chính hãng Apple Việt Nam.</p>', 30490000, 24),
(18, 'Macbook Air 2020', 1, 'Macbook Air 2020.jpg', '<p>Năm 2020, Apple đã nâng cấp chiếc MacBook Air của mình với một hiệu năng vô cùng mạnh mẽ, tích hợp chip M1 thuộc thế hệ Apple Silicon có khả năng tối ưu hoá tốt, đem lại trải nghiệm sử dụng, làm việc, học tập và giải trí ấn tượng cho người dùng.</p>', 22390000, 22),
(19, 'Laptop Macbook Pro 2021', 1, 'Laptop Macbook Pro 2021.jpg', '<p>Một trong những chiếc laptop được mong đợi nhất trong năm 2021 chắc chắn không thể bỏ qua em laptop Macbook Pro 16\" 2021 - M1 Max 32 Core GPU/1TB của nhà Apple.</p>\r\n\r\n<p>Macbook Pro 16\" 2021 sở hữu ngoại hình nổi bật, tinh tế, hiện đại đến từng chi tiết. Lớp vỏ máy được làm từ kim loại nguyên khối bằng nhôm tái chế thân thiện với môi trường, bền bỉ theo thời gian. Dù có trọng lượng 2.2kg với độ dày 16.8 mm nhưng em laptop này vẫn giữ được thiết kế gọn gàng mà không hề hầm hố.</p>', 82590000, 6),
(20, 'Macbook Air M2 2022', 1, 'Macbook Air M2 2022.jpg', '<p>MacBook Air M2 13” gây ấn tượng bởi sự sang trọng, màn hình đỉnh cao cùng hệ thống âm thanh chân thật. Cấu hình với Apple M2 luôn đảm bảo sức mạnh dữ dội, cùng Apple thiết lập tầm cao mới cho các thiết bị máy tính xách tay!</p>', 36990000, 8);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDonhang`),
  ADD KEY `idNhanhang` (`idNhanhang`),
  ADD KEY `idSanpham` (`idSanpham`),
  ADD KEY `Username` (`Username`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `nhanhang`
--
ALTER TABLE `nhanhang`
  ADD PRIMARY KEY (`idNhanhang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSanpham`),
  ADD KEY `idNhanhang` (`idNhanhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDonhang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhanhang`
--
ALTER TABLE `nhanhang`
  MODIFY `idNhanhang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSanpham` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`idSanpham`) REFERENCES `sanpham` (`idSanpham`),
  ADD CONSTRAINT `donhang_ibfk_4` FOREIGN KEY (`Username`) REFERENCES `khachhang` (`Username`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idNhanhang`) REFERENCES `nhanhang` (`idNhanhang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
