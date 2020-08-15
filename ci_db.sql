-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 06:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Pasan Dewasurendra', 'pasan@gmail.com', '0764519893', 'no.08, dewanmini, hakmana, matara', 'p123'),
(2, 'Pasan Dewasurendra', 'pasandews@gmail.com', '0764519893', 'N0.08, Dewanmini, Gammedapitiya,', 'p123'),
(3, 'Pasan Dewasurendra', 'pasandewasurendra@gmail.com', '0764519893', 'N0.08, Dewanmini, Gammedapitiya,', 'p123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `qty` int(5) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `sub_total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Apple iPhone 11 Pro Max', 112400.00, 'Processor: Apple A13 Bionic\r\nRAM: 6 GB\r\nStorage: 64 GB, 256 GB, 512 GB\r\nDisplay: 6.5 inches\r\nCamera: 12 MP (wide) + 12 MP (telephoto) + 12 MP (ultrawide) cameras\r\nBattery: Non-removable Li-Ion 3500 mAh battery + Fast battery charging 18W: 50% in 30 min', 'iphone-11-pro-max.jpg'),
(2, 'Vivo Y50', 52990.00, 'Snapdragon 665 \r\nStorage : 128 GB \r\nCamera : 13+8+2+2 MP \r\nBattery : 5000 mAh', 'Vivo-Y50-Iris-Blue.jpg'),
(3, 'Huawei P40 Pro 5G', 172990.00, 'HUAWEI Kirin 990 5G\r\n40W HUAWEI SuperCharge\r\n40 MP Ultra-wide Cine Camera\r\n4200mAh Battery', 'huawei-p40-pro-5g.jpg'),
(4, 'Xiaomi Black Shark 3 Pro', 173500.00, '65W Hyper Charge 5000mAh Dual Battery\r\nQualcomm Snapdragon 865 LPDDR5 + UFS 3.0\r\n270Hz Touch Reporting Rate\r\nMaster Triggers Master Touch 3.0\r\n7.1” 2K+ Immersive Display\r\n90Hz High Refresh Rate MEMC Technology', 'black-shark-3-PRO-Armor-Grey.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
