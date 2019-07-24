-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 02:36 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(15) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(3) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `additional` mediumtext NOT NULL,
  `image_one` varchar(225) NOT NULL,
  `image_two` varchar(225) NOT NULL,
  `image_three` varchar(225) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_name`, `category`, `color`, `size`, `qty`, `price`, `description`, `additional`, `image_one`, `image_two`, `image_three`, `time`) VALUES
(5, 'Lightweight Jacket', 'Men', 'Black', 'S', 10, 85000, 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.', 'Weight\r\n0.79 kg\r\n\r\nDimensions\r\n110 x 33 x 100 cm\r\n\r\nMaterials\r\n60% cotton\r\n\r\nColor\r\nBlack, Blue, Grey, Green, Red, White\r\n\r\nSize\r\nXL, L, M, S', 'Upload/product-03.jpg', 'Upload/product-11.jpg', 'Upload/product-03_1549883271.jpg', '2019-02-11'),
(6, 'Herschel supply', 'Women', 'White', 'S', 3, 200000, '', '', 'Upload/product-02.jpg', 'Upload/product-04.jpg', 'Upload/product-05.jpg', '2019-02-11'),
(7, 'Product One', 'Accessories', 'Black', 'S', 1, 10, '', '', 'Upload/product-15.jpg', 'There is error when upload', 'There is error when upload', '2019-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` longtext NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `gender`, `address`, `phone`, `photo`, `role`) VALUES
(6, 'rizki_khair@yahoo.com', '$2y$10$bgrrH4sIx0H/.p.GYwYbmu589wOx17cAZqTeJ5jDMr6FQUTPdgAKe', 'Rizki Khair', 'Male', '', '', 'Assets/img/user.png', 0),
(7, 'andradeva@gmail.com', '$2y$10$dsBwCAYo2KvrgU6GYU351.NYpcJv5hr5BD5kODNwdo/VbrrQlTPvq', 'RIZKI KHAIR', 'Women', '', '', 'Assets/img/user.jpg', 1),
(8, 'mayangpertiwi@gmail.com', '$2y$10$ZRg534sFF1EHxMQIzfwgSuWBZKB4kPEHpnGXrrBHC1XCkuYXIbDC2', 'clnewskhair', 'Women', '', '', 'Assets/img/user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
