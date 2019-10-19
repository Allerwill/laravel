-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 19, 2019 lúc 07:58 AM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_ID` int(11) NOT NULL,
  `type_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ID`, `name`, `price`, `image`, `description`, `manu_ID`, `type_ID`) VALUES
(1, 'BELL PEPPER', 80, 'product-1.jpg', 'Description OK', 1, 2),
(2, 'STRAWBERRY', 120, 'product-2.jpg', 'Description OK', 2, 2),
(3, 'GREEN BEANS', 120, 'product-3.jpg', 'Description OK', 1, 1),
(4, 'PURPLE CABBAGE', 120, 'product-4.jpg', 'Description OK', 1, 1),
(5, 'TOMATOE', 80, 'product-5.jpg', 'Description OK', 1, 2),
(7, 'BROCOLLI', 120, 'product-6.jpg', 'Description OK', 1, 1),
(8, 'CARROTS', 120, 'product-7.jpg', 'Description OK', 2, 2),
(9, 'FRUIT JUICE', 120, 'product-8.jpg', 'Description OK', 2, 3),
(10, 'ONION', 80, 'product-9.jpg', 'Description OK', 2, 4),
(11, 'APPLE', 120, 'product-10.jpg', 'Description OK', 2, 2),
(12, 'GARLIC', 120, 'product-11.jpg', 'Description OK', 3, 4),
(13, 'CHILLI', 120, 'product-12.jpg', 'Description OK', 3, 1),
(14, 'BELL PEPPER', 80, 'product-1.jpg', 'Description OK', 1, 2),
(15, 'STRAWBERRY', 120, 'product-2.jpg', 'Description OK', 2, 2),
(19, 'STRAWBERRY', 120, 'product-2.jpg', 'Description OK', 2, 2),
(20, 'CARROTS', 120, 'product-7.jpg', 'Description OK', 2, 2),
(21, 'FRUIT JUICE', 120, 'product-8.jpg', 'Description OK', 2, 3),
(6, 'ORANGE JUICE', 120, 'product-8.jpg', 'Description OK', 2, 3),
(17, 'TOMATOE', 80, 'product-5.jpg', 'Description OK', 1, 2),
(18, 'BROCOLLI', 120, 'product-6.jpg', 'Description OK', 1, 1),
(16, 'PURPLE CABBAGE', 120, 'product-4.jpg', 'Description OK', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_ID` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_ID`, `type_name`, `type_img`) VALUES
(1, 'Vegetables', 'category-1.jpg'),
(2, 'Fruits', 'category-2.jpg'),
(3, 'Juice', 'product-3.jpg'),
(4, 'Dried', 'category-4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_ID`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'admin2', '$2y$10$0ihVqzmIBcElYAgO20PPLOsrdegYyWoFV/uZbJ.g2QWOij98Qvf6W');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
