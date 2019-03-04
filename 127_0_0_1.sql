-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 17 2019 г., 15:55
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_shop`
--
CREATE DATABASE IF NOT EXISTS `db_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_shop`;

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_id_products` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_count` int(11) NOT NULL,
  `cart_datetime` datetime NOT NULL,
  `cart_ip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `type`, `brand`) VALUES
(1, 'mobile', 'Apple'),
(2, 'mobile', 'Explay'),
(3, 'mobile', 'Fly'),
(4, 'mobile', 'HTC'),
(5, 'mobile', 'LG'),
(6, 'mobile', 'Motorola'),
(7, 'mobile', 'Nokia'),
(8, 'mobile', 'Philips'),
(9, 'mobile', 'Samsung'),
(10, 'mobile', 'Sony'),
(11, 'notebook', 'DNS'),
(12, 'notebook', 'Acer'),
(13, 'notebook', 'ASUS'),
(14, 'notebook', 'Dell'),
(15, 'notebook', 'HP'),
(16, 'notebook', 'Lenovo'),
(17, 'notebook', 'MSI'),
(18, 'notebook', 'Packard Bell'),
(19, 'notebook', 'Toshiba'),
(20, 'notebook', 'Samsung'),
(21, 'notebook', 'Apple'),
(22, 'printer', 'Brother'),
(23, 'printer', 'Canon'),
(24, 'printer', 'Epson'),
(25, 'printer', 'HP'),
(26, 'printer', 'Kyocera'),
(27, 'printer', 'OKI'),
(28, 'printer', 'Samsung'),
(29, 'printer', 'Xerox'),
(30, 'tv', 'Akai'),
(31, 'tv', 'Ergo'),
(32, 'tv', 'Hisence'),
(33, 'tv', 'Kivi'),
(34, 'tv', 'LG'),
(35, 'tv', 'Panasonic'),
(36, 'tv', 'Philips'),
(37, 'tv', 'Samsung'),
(38, 'tv', 'Sony'),
(39, 'tv', 'Toshiba');

-- --------------------------------------------------------

--
-- Структура таблицы `table_products`
--

CREATE TABLE `table_products` (
  `products_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `seo_words` text NOT NULL,
  `seo_description` text NOT NULL,
  `mini_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mini_features` text NOT NULL,
  `features` text NOT NULL,
  `datatime` datetime NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '0',
  `type_tovara` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_products`
--

INSERT INTO `table_products` (`products_id`, `title`, `price`, `brand`, `seo_words`, `seo_description`, `mini_description`, `image`, `description`, `mini_features`, `features`, `datatime`, `visible`, `count`, `type_tovara`, `brand_id`) VALUES
(1, 'Samsung Galaxy S8 64Gb Dual Sim (SM-G950FD) черный', 18737, 'Samsung', '', '', '', 'image1.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 7.0; Samsung Exynos 8895 2300 МГц, 8 ядер; 5.8\", Super AMOLED, 2960х1440, 16 млн. цветов, безрамочный, изогнутый 3D, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; 155 г', '', '2018-06-23 04:10:14', 1, 0, 'mobile', 9),
(2, 'Samsung Galaxy S9 Plus (2018) 64Gb Dual Sim (G965F) черный', 26544, 'Samsung', '', '', '', 'image2.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 8.0; Samsung Exynos 9810 2700 МГц, 8 ядер; 6.2\", Super AMOLED, 2960х1440, 16 млн. цветов, безрамочный, изогнутый 3D, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; 189 г', '', '2018-06-23 05:10:09', 1, 0, 'mobile', 9),
(3, 'Смартфон HTC U11 Plus 4/64Gb (черный)', 20108, 'HTC', '', '', 'zalupazalupazalupazalupazalupazaupla', 'image3.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 8.0; Qualcomm Snapdragon 835 (MSM8998) 2450 МГц, 8 ядер; 6\", Super LCD 5, 2880х1440, 16 млн. цветов, безрамочный, изогнутый 3D, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; при разговоре - 1440 мин; 169 г', '', '2018-07-03 04:14:15', 1, 0, 'mobile', 4),
(4, 'Nokia 8 Sirocco Single Sim(Черный)', 18426, 'Nokia', '', '', '', 'image4.jpg', '', 'Смартфон; моноблок; Android 8.0; Qualcomm Snapdragon 835 (MSM8998) 2450 МГц, 8 ядер; 5.5\", P-OLED, 2560х1440, 16 млн. цветов, безрамочный, изогнутый 3D, сенсорный емкостный, multitouch, устойчив к царапинам; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; при разговоре - 1320 мин', '', '2018-07-07 03:10:14', 1, 0, 'mobile', 7),
(5, 'Nokia 7 Plus 4/64Gb (черный)', 12080, 'Nokia', '', '', '', 'image5.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 8.0; Qualcomm MSM8976 Plus 2200 МГц, 8 ядер; 6\", IPS, 2160х1080, 16 млн. цветов, безрамочный, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct', '', '2018-07-07 04:12:11', 1, 0, 'mobile', 7),
(6, 'Sony Xperia XZ2 4/64Gb (H8266)(черный)', 23172, 'Sony', '', '', '', 'image6.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 8.0; Qualcomm Snapdragon 845 2800 МГц, 8 ядер; 5.7\", IPS, 2160х1080, 16 млн. цветов, безрамочный, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; 198 г', '', '2018-07-07 02:10:16', 1, 0, 'mobile', 10),
(7, 'Sony Xperia XZ2 Compact (H8324)(черный)', 19839, 'Sony', '', '', '', 'image7.jpg', '', 'Смартфон; моноблок; Android 8.0; Qualcomm Snapdragon 845 2800 МГц, 8 ядер; 5\", IPS, 2160х1080, 16 млн. цветов, безрамочный, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; 168 г', '', '2018-07-07 03:03:07', 1, 0, 'mobile', 10),
(8, 'LG V30+ (H930g)(черный)', 21168, 'LG', '', '', '', 'image8.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 7.1; Qualcomm Snapdragon 835 (MSM8998) 2450 МГц, 8 ядер; 6\", P-OLED, 2880х1440, 16 млн. цветов, безрамочный, изогнутый 3D, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; 158 г', '', '2018-07-07 05:14:12', 1, 0, 'mobile', 5),
(9, 'LG V30 4/64Gb(черный)', 19312, 'LG', '', '', '', 'image9.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 7.1; Qualcomm Snapdragon 835 (MSM8998) 2450 МГц, 8 ядер; 6\", P-OLED, 2880х1440, 16 млн. цветов, безрамочный, изогнутый 3D, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; 158 г', '', '2018-07-07 02:12:12', 1, 0, 'mobile', 5),
(10, 'Philips Xenium W737(black)', 8371, 'Philips', '', '', '', 'image10.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 4.0; 1200 МГц, 2 ядра; 4.3\", 960х540, 16 млн. цветов, сенсорный емкостный, multitouch; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; при разговоре - 630 мин; 172 г', '', '2018-07-07 05:15:16', 1, 0, 'mobile', 8),
(11, 'Motorola Moto Z2 Force(black)', 16469, 'Motorola', '', '', '', 'image11.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 7.1; Qualcomm Snapdragon 835 (MSM8998) 2350 МГц, 8 ядер; 5.5\", Super AMOLED, 2560х1440, 16 млн. цветов, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi, Wi-Fi Direct; 143 г', '', '2018-07-07 01:06:05', 1, 0, 'mobile', 6),
(12, 'Fly FS518 Cirrus 13', 3510, 'Fly', '', '', '', 'image12.jpg', '', 'Смартфон; моноблок; 2x SIM; Android 7.0; MediaTek MT6737T 1500 МГц, 4 ядра; 5\", IPS, 1280х720, 16 млн. цветов, изогнутый 3D, сенсорный емкостный, multitouch, устойчив к царапинам; microSD; USB, Bluetooth, Wi-Fi; при разговоре - 780 мин; 137 г', '', '2018-07-07 02:09:08', 1, 0, 'mobile', 3),
(13, 'Телик', 20000, 'Philips', '', '', '', 'img1.jpg', '', 'Хороший телек, бери поки дають', '', '2018-07-11 02:06:14', 1, 0, 'tv', 36);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`products_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `table_products`
--
ALTER TABLE `table_products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
