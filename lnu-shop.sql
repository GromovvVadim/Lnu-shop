-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Трв 23 2020 р., 09:20
-- Версія сервера: 10.4.10-MariaDB
-- Версія PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `lnu-shop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_phone`, `admin_email`, `admin_country`, `admin_pass`, `admin_job`, `admin_about`) VALUES
(1, 'TD', '+298 485 254', 'TD@gmail.com', 'Faroe Islands', 'TD', 'Webshop creator', 'Was working hard to create this site)'),
(2, 'TD1', '+380000000', 'TD1@gmail.com', 'country1', 'TD1', 'webdev', ' Was working hard to create this site)');

-- --------------------------------------------------------

--
-- Структура таблиці `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблиці `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_country` text NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `customer_city`, `customer_country`, `customer_pass`, `customer_ip`) VALUES
(1, 'user1', '+3809756452', 'user1@gmail.com', 'address', 'city', 'country', 'user', '::1');

-- --------------------------------------------------------

--
-- Структура таблиці `customer_categories`
--

CREATE TABLE `customer_categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `customer_categories`
--

INSERT INTO `customer_categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Strong part of humanity.'),
(2, 'Women', 'Beautiful part of humanity.');

-- --------------------------------------------------------

--
-- Структура таблиці `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `price` int(100) NOT NULL,
  `order_status` text NOT NULL,
  `invoice_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `qty`, `order_date`, `price`, `order_status`, `invoice_no`) VALUES
(1, 1, 1, '2019-12-15', 300, 'Complete', 1086946780),
(2, 1, 1, '2019-12-15', 500, 'Complete', 1086946780),
(3, 1, 2, '2019-12-15', 500, 'pending', 1086946780),
(4, 1, 2, '2019-12-20', 580, 'pending', 1131646828);

-- --------------------------------------------------------

--
-- Структура таблиці `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_option` text NOT NULL,
  `ref_id` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_option`, `ref_id`, `code`, `payment_date`) VALUES
(2, 1086946780, 500, 'Credit Card', 1124, 651511, '15/12/2019');

-- --------------------------------------------------------

--
-- Структура таблиці `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(1, 1, 1086946780, '3', 1, 'Complete'),
(2, 1, 2147483647, '6', 1, 'Complete'),
(3, 1, 1086946780, '5', 2, 'pending'),
(4, 1, 1131646828, '4', 2, 'pending');

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_price`, `product_keywords`, `product_desc`) VALUES
(1, 1, 1, '2020-05-23 07:00:04', 'Polo black', 'Polo.jpg', 350, 'Polo', '                            <p>Cool and comfortable)</p>                          '),
(2, 1, 1, '2020-05-23 07:04:24', 'White Polo', 'Polo1.jpg', 350, 'Polo', '                            <p>Very comfortable.</p>                          '),
(3, 2, 1, '2020-05-23 07:16:20', 'Men Shirt1', 'Shirt.jpg', 300, 'Shirt', '                            <p>On style)</p>                          '),
(4, 2, 2, '2020-05-23 07:16:31', 'Women Shirt1', 'Shirt1.jpg', 310, 'Shirt', '                            <p>So cool.</p>                          '),
(5, 4, 1, '2020-05-23 06:47:41', 'Socks', 'Socks.jpg', 80, 'Socks', '                            <p>Nice and warm)</p>                          '),
(6, 3, 1, '2020-05-23 06:47:19', 'Hoodie', 'Hoodie.jpg', 700, 'Hoodie', '                            <p>Nice and in style.</p>                          '),
(7, 3, 2, '2020-05-23 06:47:31', 'Women Hoodie', 'Hoodie1.jpg', 550, 'Hoodie', '                            <p>Nice hoodie for every day.</p>                          '),
(8, 2, 1, '2020-05-23 07:17:05', 'Men Shirt2', 'Shirt3.jpg', 450, 'Shirt', '                            <p>Nice for special day</p>                          '),
(9, 2, 2, '2020-05-23 07:17:16', 'Women Shirt2', 'Shirt2.jpg', 390, 'Shirt', '                            <p>Top seller.</p>                          ');

-- --------------------------------------------------------

--
-- Структура таблиці `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Polo shirt', 'A polo shirt is a form of shirt with a collar, a placket neckline with three buttons, and an optional pocket. Polo shirts are usually short sleeved.'),
(2, 'Shirt', 'A shirt is a cloth garment for the upper body (from the neck to the waist).'),
(3, 'Hoodie', 'A hoodie is a sweatshirt with a hood. Hoodies often include a muff sewn onto the lower front, and (usually) a drawstring to adjust the hood opening.'),
(4, 'Socks', 'A sock is a piece of clothing worn on the feet and often covering the ankle or some part of the calf.');

-- --------------------------------------------------------

--
-- Структура таблиці `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'slide 1', 'slide-1.jpg'),
(2, 'slide 2', 'slide-2.jpg'),
(3, 'slide 3', 'slide-1.jpg'),
(4, 'slide 4', 'slide-2.jpg');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Індекси таблиці `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Індекси таблиці `customer_categories`
--
ALTER TABLE `customer_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Індекси таблиці `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Індекси таблиці `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Індекси таблиці `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Індекси таблиці `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Індекси таблиці `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `customer_categories`
--
ALTER TABLE `customer_categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
