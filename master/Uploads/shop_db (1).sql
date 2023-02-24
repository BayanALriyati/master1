-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 01:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(3, 'ahmad', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(8, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(9, 'Alaa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL DEFAULT 1,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `order_id`, `name`, `price`, `quantity`, `image`) VALUES
(199, 6, 95, 0, 'Sad girl', 400, 1, 'WhatsApp Image 2022-12-04 at 11.24.44 AM.jpeg'),
(202, 6, 94, 0, 'Acrylic and Arabic calligraphy ', 150, 1, 'WhatsApp Image 2022-12-04 at 11.24.43 AM.jpeg'),
(203, 6, 85, 0, 'Drawing Imagination ', 300, 4, 'WhatsApp Image 2022-12-04 at 11.24.39 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `image_01` varchar(255) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `image_01`, `category_name`) VALUES
(6, '48.jpg', 'Quilling'),
(7, 'Ocean Wave-Looking Through the Porthole.jpg', 'Acrylic'),
(8, '128.jpg', 'Resin'),
(9, 'WhatsApp.jpeg', 'String Art');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `product_id`, `user_id`) VALUES
(19, 84, 6),
(20, 95, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `order_time` datetime DEFAULT NULL,
  `total_quantity` int(100) NOT NULL,
  `mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total_price`, `location`, `order_time`, `total_quantity`, `mobile`) VALUES
(25, 6, 1650, 'flat no. 12, Al-Ahussein, aqaba,jordan', '2023-01-13 03:39:23', 4, 777193116);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`, `price`) VALUES
(25, 98, 1, 250),
(25, 88, 1, 400),
(25, 89, 2, 500);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `category_id` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `price` int(100) NOT NULL,
  `price_discount` int(11) NOT NULL DEFAULT 100,
  `is_sale` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `details` varchar(255) NOT NULL,
  `store` int(2) NOT NULL,
  `sold` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `image`, `description`, `name`, `price`, `price_discount`, `is_sale`, `created_at`, `updated_at`, `details`, `store`, `sold`) VALUES
(35, 6, '5.jpg', 'The drawing of the ship is made of blue and white colored paper and indicates the sea and its strength ', 'Quilling ship', 500, 100, 0, '2023-01-01 18:08:09', NULL, 'The drawing of the ship is made of blue  ', 8, 4),
(40, 6, '6.jpg', 'Anchorage made of cardboard and blue color ', 'Quiling dock', 600, 600, 0, '2023-01-01 18:12:34', NULL, 'Sea marina in sea colors ', 5, 3),
(50, 6, '8.jpg', 'Sun and Moon Paper Art', 'Sun and Moon ', 700, 460, 0, '2023-01-01 18:28:44', NULL, 'Sun and Moon Paper Art', 5, 5),
(55, 6, 'WhatsAppImage.jpeg', 'Colored paper face details ', ' face details ', 700, 700, 0, '2023-01-01 18:28:44', NULL, 'Colored paper face details ', 5, 5),
(60, 6, '10.jpg', 'Mandala art design with paper folding art\r\n', 'Mandala Quilling', 800, 800, 0, '2023-01-01 18:33:00', NULL, 'Mandala art with the art of Quilling', 5, 1),
(65, 6, '60.jpg', 'Heart with cheerful colors and colored paper ', 'Quilling Heart', 650, 650, 0, '2023-01-01 19:10:11', NULL, 'Heart of the art of Quilling', 5, 2),
(70, 6, '40.jpg', 'Owl of colored paper ', 'Quilling Olw', 600, 600, 0, '2023-01-01 19:19:02', NULL, 'owl n colored cardboard ', 5, 0),
(81, 7, 'Acrylic and gold leaf.jpeg', '', 'Acrylic and gold leaf', 200, 100, 1, '2023-01-01 23:26:03', NULL, 'Acrylic colors and golden leaf with white painting ', 9, 4),
(82, 8, 'Resin ocean Art.jpg', '', 'Resin ocean Art', 400, 340, 0, '2023-01-01 23:32:46', NULL, 'An island in the middle of the ocean with resin\r\n', 5, 4),
(83, 8, 'Original Abstract Painting by Weaam Arts jpg.jpg', '', 'Original Abstract Painting', 200, 170, 0, '2023-01-02 00:09:04', NULL, 'Original Art Acrylic/Epoxy Resin/Ink', 5, 1),
(84, 7, 'WhatsApp Image 2022-12-04 at 11.24.43 AM (1).jpeg', '', 'International Women&#039;s Day', 400, 200, 1, '2023-01-02 00:19:51', NULL, 'Acrylic colors and Arabic calligraphy ', 5, 0),
(85, 7, 'WhatsApp Image 2022-12-04 at 11.24.39 AM.jpeg', '', 'Drawing Imagination ', 600, 300, 1, '2023-01-02 00:29:09', NULL, 'Drawing Imagination ', 5, 0),
(86, 7, 'WhatsApp Image 2022-12-05 at 7.13.37 AM (1).jpeg', '', 'Realistic and real ', 700, 350, 1, '2023-01-02 00:32:30', NULL, 'Gold leaf and acrylic pots', 5, 2),
(87, 8, '46445f6defa159ba2ac4ff4d9414063a.jpg', '', 'Acrylic Pour and Resin', 100, 85, 0, '2023-01-02 09:04:15', NULL, 'Acrylic Pour and Resin Cutting Board ', 5, 2),
(88, 8, '48319af5e5e6ee89c84c0acc14e09367.jpg', '', 'Resin and the sea shore ', 400, 340, 0, '2023-01-02 09:23:17', NULL, 'An incredible picture of the sea, oceann', 5, 1),
(89, 8, 'ff09a535f564f5b61c222a8c083b2040.jpg', '', 'Beaches Artwork', 500, 425, 0, '2023-01-02 09:24:30', NULL, 'An incredible picture of the sea, ocean', 5, 3),
(90, 8, '0ffed44b5ea8fbd8ae10a5b960822767.jpg', '', 'Resin Art Inspo', 300, 255, 0, '2023-01-02 09:29:31', NULL, 'Crystal Clear, 100% Bubble', 5, 0),
(91, 8, '1786b3cc720fc280a23b952858d08e4c.jpg', '', 'Beach painting', 500, 425, 0, '2023-01-02 09:42:30', NULL, '3D Whale with epoxy resin,', 5, 2),
(92, 8, 'a78c914bd5a29fc8aff99d5770c65292.jpg', '', 'Craft Resin', 500, 425, 0, '2023-01-02 09:55:16', NULL, ' It portrays a hunting scene of two tiger ', 5, 0),
(93, 8, 'EpoxyResinArt.jpg', '', 'Resin Art', 400, 340, 0, '2023-01-02 10:09:05', NULL, 'Lovely pieces with unique, one of a kind resin art!', 5, 2),
(94, 7, 'WhatsApp Image 2022-12-04 at 11.24.43 AM.jpeg', '', 'Acrylic and Arabic calligraphy ', 300, 150, 1, '2023-01-02 10:13:22', NULL, 'Canvas painting, acrylic, Arabic calligraphy and gold leaf', 5, 0),
(95, 7, 'WhatsApp Image 2022-12-04 at 11.24.44 AM.jpeg', '', 'Sad girl', 400, 200, 1, '2023-01-02 10:17:10', NULL, 'Dark acrylic colors brown and black color and sad girl features ', 5, 3),
(96, 7, 'WhatsApp Image 2022-12-04 at 11.24.41 AM.jpeg', '', 'The girl and the geese', 500, 250, 1, '2023-01-02 10:23:14', NULL, 'Acrylic white, yellow and goose', 5, 0),
(97, 7, 'ff3e551b4827fc215cb09c2742700169.jpg', '', ' the fox', 600, 300, 1, '2023-01-02 10:29:41', NULL, 'Acrylic in green and fox ', 5, 2),
(98, 7, '54ebfa8ccb02f6a2fe7c183c17f0a307.jpg', '', 'Palestinian Dress', 500, 250, 1, '2023-01-02 10:32:02', NULL, 'Heritage Colors', 5, 1),
(99, 8, '954aedf595c0c4c758f13628dbc8b41e.jpg', '', 'Sea turtle', 400, 340, 0, '2023-01-02 11:36:49', NULL, 'Rizen sea turtle unique piece', 5, 1),
(100, 9, '7aff5be6956f807782edaaf9550f21b5.jpg', '', 'Women\'s feelings ', 500, 425, 1, '2023-01-02 11:45:45', NULL, 'Expressive image of a woman ', 1, 0),
(101, 9, 'WhatsApp Image 2022-12-05 at 7.13.39 AM (1).jpeg', '', 'seahorse', 300, 255, 1, '2023-01-02 11:50:23', NULL, 'Seahorses made of dark brown threads', 1, 0),
(102, 9, 'WhatsApp Image 2022-12-05 at 7.13.37 AM.jpeg', '', 'Spring', 600, 510, 1, '2023-01-02 12:08:31', NULL, 'From the series of cheerful spring colors', 1, 0),
(103, 9, 'WhatsApp Image 2022-12-04 at 11.24.51 AM.jpeg', '', 'Spring colors', 650, 553, 1, '2023-01-02 12:10:54', NULL, 'From the series of cheerful spring colors', 1, 0),
(104, 9, 'WhatsApp Image 2022-12-05 at 7.13.38 AM.jpeg', '', 'Butterfly', 550, 468, 1, '2023-01-02 12:12:33', NULL, 'The butterfly is made of strong threads ', 1, 0),
(105, 9, 'WhatsApp Image 2022-12-05 at 7.13.38 AM (1).jpeg', '', 'Rose', 450, 383, 1, '2023-01-02 12:20:52', NULL, 'Making roses from strong dark threads ', 1, 0),
(106, 9, 'WhatsApp Image 2022-12-05 at 7.13.39 AM.jpeg', '', 'Boat', 500, 425, 1, '2023-01-02 12:22:37', NULL, 'Boat made of dark strong threads ', 1, 0),
(107, 9, '4bd0adeaf24b2db538d226acbb6392b4.jpg', '', 'String art mirror', 600, 510, 1, '2023-01-02 12:26:48', NULL, 'Made of colored threads and dark wood\r\n', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `review_text` text NOT NULL,
  `review_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `product_id`, `review_text`, `review_date`) VALUES
(60, 6, 84, 'Very Interesting ', '2023-01-13 19:29:33'),
(61, 8, 84, 'منتج رائع ', '2023-01-13 19:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `mobile`) VALUES
(3, 'Abdelmajied', 'abdelmajied@yahoo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 778079797),
(5, 'Asem', 'asem11@yahoo.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 778079597),
(6, 'Abrar', 'abrar@yahoo.com', 'c9cd1359c459e829018f058e10033dac9cdd21dd', 777193116),
(8, 'Abood ', 'aboood@yahoo.com', 'c9cd1359c459e829018f058e10033dac9cdd21dd', 778079497),
(9, 'Aladdin Amayreh', 'abdelmajied.abusuliman@gmail.com', 'e94b315d3bdab696b35188127beb77ca4668df42', 214748647),
(19, 'Mona', 'mona@yahoo.com', 'c9cd1359c459e829018f058e10033dac9cdd21dd', 777777777);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
