-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 02:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `user`, `password`) VALUES
(2001, 'shrikant', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bimage`
--

CREATE TABLE `bimage` (
  `id` int(5) NOT NULL,
  `name` varchar(199) NOT NULL,
  `categoryid` varchar(199) NOT NULL,
  `date` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bimage`
--

INSERT INTO `bimage` (`id`, `name`, `categoryid`, `date`) VALUES
(1, '1234.jpg', '2', ''),
(2, '123.jpg', '2', ''),
(3, '123.jpg', '2', ''),
(4, '123.jpg', '2', ''),
(5, 'V232845450_WLM_Redmi_T91_Launch_productpage_horizontal_tile_Mob.jpg', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(2, 'Electronics', 'Electronics', '2020-08-08 06:29:05', NULL),
(3, 'Furniture', 'Home OR Office Furniture', '2020-08-08 06:32:08', NULL),
(4, 'Fassion', 'Fassion', '2020-08-08 06:32:23', NULL),
(5, 'back cover', 'all back cover', '2020-08-25 09:29:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL,
  `size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`, `size`) VALUES
(1, 2, '7', 3, '2020-08-24 08:21:21', 'cash on Delivery', 'Delivered', ''),
(2, 2, '4', 1, '2020-08-24 08:25:11', 'cash on Delivery', 'Delivered', ''),
(3, 2, '4', 1, '2020-08-24 09:45:23', 'cash on Delivery', 'Delivered', ''),
(4, 2, '3', 1, '2020-08-24 09:52:33', 'cash on Delivery', 'Delivered', ''),
(5, 2, '13', 3, '2020-10-31 11:32:36', 'cash on Delivery', NULL, ''),
(6, 2, '6', 1, '2020-10-31 11:35:04', 'cash on Delivery', NULL, ''),
(7, 2, '13', 3, '2020-10-31 11:35:04', 'cash on Delivery', NULL, ''),
(8, 2, '9', 1, '2020-10-31 13:45:23', 'cash on Delivery', NULL, ''),
(9, 2, '10', 1, '2020-10-31 13:45:23', 'cash on Delivery', NULL, ''),
(10, 2, '11', 5, '2020-10-31 13:45:23', 'cash on Delivery', NULL, ''),
(11, 9, '3', 1, '2020-12-12 14:19:38', NULL, NULL, ''),
(12, 2, '1', 1, '2020-12-12 14:21:48', 'cash on Delivery', 'Delivered', ''),
(13, 2, '4', 13, '2020-12-15 13:34:21', 'cash on Delivery', 'Delivered', ''),
(14, 2, '6', 1, '2020-12-15 13:34:21', 'cash on Delivery', 'Delivered', ''),
(15, 2, '10', 1, '2020-12-15 13:34:21', 'cash on Delivery', 'Delivered', ''),
(16, 2, '11', 3, '2020-12-15 13:34:21', 'cash on Delivery', 'Delivered', ''),
(17, 2, '16', 1, '2020-12-16 16:10:05', 'cash on Delivery', NULL, ''),
(18, 2, '16', 1, '2020-12-16 16:10:17', 'cash on Delivery', NULL, ''),
(19, 2, '16', 1, '2020-12-16 16:12:09', 'cash on Delivery', NULL, ''),
(20, 2, '16', 1, '2020-12-16 16:17:24', 'cash on Delivery', NULL, ''),
(21, 2, '16', 1, '2020-12-16 16:18:57', 'cash on Delivery', NULL, ''),
(22, 2, '16', 1, '2020-12-16 16:19:55', 'cash on Delivery', NULL, ''),
(23, 2, '16', 1, '2020-12-16 16:22:36', 'cash on Delivery', NULL, ''),
(24, 6, '16', 1, '2020-12-16 16:23:56', NULL, NULL, ''),
(25, 6, '16', 1, '2020-12-16 16:26:16', NULL, NULL, ''),
(26, 6, '16', 1, '2020-12-16 16:33:37', NULL, NULL, ''),
(27, 2, '16', 1, '2020-12-16 16:41:18', 'cash on Delivery', NULL, ''),
(28, 2, '16', 1, '2020-12-16 16:48:15', 'cash on Delivery', NULL, ''),
(29, 2, '16', 1, '2020-12-16 16:58:22', 'cash on Delivery', NULL, ''),
(30, 2, '1', 1, '2020-12-16 17:15:39', 'cash on Delivery', NULL, ''),
(31, 2, '16', 1, '2020-12-16 17:15:39', 'cash on Delivery', NULL, ''),
(32, 2, '3', 1, '2020-12-17 06:12:05', 'cash on Delivery', NULL, ''),
(33, 2, '4', 1, '2021-01-03 11:52:12', 'cash on Delivery', 'Delivered', ''),
(34, 11, '12', 1, '2021-01-05 14:54:49', 'cash on Delivery', NULL, ''),
(35, 11, '12', 1, '2021-01-05 15:11:02', 'cash on Delivery', NULL, ''),
(36, 2, '1', 1, '2021-01-05 16:09:41', NULL, NULL, ''),
(37, 12, '4', 1, '2021-01-06 14:42:00', 'cash on Delivery', 'Delivered', '');

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(5, 1, 'Delivered', 'Have a nice day \r\n', '2020-08-24 08:33:51'),
(6, 2, 'Delivered', 'your product delivered', '2020-08-24 08:34:22'),
(7, 4, 'Delivered', 'delivered product', '2020-08-24 12:49:01'),
(8, 3, 'Delivered', 'delivered', '2020-08-24 12:49:30'),
(9, 12, 'Delivered', 'sad', '2020-12-12 14:24:16'),
(10, 13, 'Delivered', 'we will be deliverd this product\r\n', '2020-12-15 13:48:03'),
(11, 14, 'Delivered', 'deliverd ', '2020-12-15 13:49:04'),
(12, 15, 'Delivered', 'delivered', '2020-12-15 13:49:22'),
(13, 16, 'Delivered', 'deliverd', '2020-12-15 13:49:45'),
(14, 33, 'Delivered', 'hdbfjd', '2021-01-03 11:53:31'),
(15, 37, 'in Process', 'your orderin process', '2021-01-06 14:43:59'),
(16, 37, 'Delivered', 'your product delivered\r\n', '2021-01-06 14:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL,
  `size` varchar(100) NOT NULL,
  `jeanssize` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`, `size`, `jeanssize`) VALUES
(1, 2, 4, 'redmi note 8', 'Xaiomi', 12999, 13999, 'redmi note 9 (4 GB,64 GB,blue )4000  battery power', 'ssa.jpg', '81eaUeIXcEL._SX679_.jpg', '41xKDuKJERL._SX679_.jpg', 0, 'In Stock', '2020-08-07 17:02:08', NULL, '', ''),
(3, 2, 4, 'Redmi  note 8 pro', 'xaiomi', 17400, 17900, '(Halo White, 6GB RAM, 128GB Storage with Helio G90T Processor)', 'sadfsa.jpg', '81LGT5Lqq9L._SX679_.jpg', '615RFalDDkL._SX679_.jpg', 0, 'In Stock', '2020-08-16 14:33:41', NULL, '', ''),
(4, 2, 4, 'MI 10', 'MI', 49999, 53000, '(Coral Green, 8GB RAM, 128GB Storage) - 108MP Quad Camera, SD 865 Processor, 5G Ready', 'J2-blue-800.png', '71ehbPshveL._SX679_.jpg', '61YilqD5OOL._SX679_.jpg', 0, 'In Stock', '2020-08-16 14:38:47', NULL, '', ''),
(9, 2, 4, 'Redmi  note 8 pro', 'xaiomi', 17999, 19900, '(Halo White, 6GB RAM, 128GB Storage with Helio G90T Processor)\r\n\r\n', '615RFalDDkL._SX679_.jpg', '81LGT5Lqq9L._SX679_.jpg', 'J2-blue-800.png', 0, 'In Stock', '2020-08-17 05:14:43', NULL, '', ''),
(10, 2, 6, 'Acer Nitro 5 AN515-54 15.6-inch Gaming Laptop', 'Acer', 64999, 109999, '(9th Gen Intel Core i5-9300H processor/8GB/1TB+256GB SSD/Windows 10 Home 64-bit/NVIDIA GeForce GTX 1650 with 4 GB), Black\r\n', 'sdsa.jpg', '71llh4hnUkL._SX679_.jpg', '51cr12mX2yL._SX679_.jpg', 0, 'In Stock', '2020-08-25 08:52:57', NULL, '', ''),
(11, 2, 6, 'Acer Nitro 5 Intel i5-9th Gen 15.6-inch Display 1920 x 1080 Thin and Light Gaming Laptop', 'Acer', 60999, 79999, ' (8GB Ram/1TB HDD/Windows 10 Home/GTX 1650 Graphics/Obsidian Black/2.3 Kgs), AN515-54', 'sdsa.jpg', '71llh4hnUkL._SX679_.jpg', '71R+bzmLPWL._SX679_.jpg', 0, 'In Stock', '2020-08-25 08:58:10', NULL, '', ''),
(12, 2, 6, 'Dell Inspiron 3493 14-inch HD Laptop', 'Dell', 41999, 49999, '(10th Gen i3-1005G1/4GB/1TB HDD/Win 10 + MS Office/Intel HD Graphics/Silver) D560193WIN9SE', '5151M4yQlML._SX679_.jpg', '51FSTIxWOlL._SX679_.jpg', '61mV9yEX8tL._SX679_.jpg', 0, 'In Stock', '2020-08-25 09:14:04', NULL, '', ''),
(13, 2, 6, 'Dell XPS 9570 15.6-inch UHD Laptop', 'Dell', 156999, 289000, '(8th Gen i9-8950HK/32GB/1TB SSD/Win 10 + MS Office/Integrated Graphics), Silver', '81WRVvZuDvL._SL1500_.jpg', '81BuSemfloL._SX679_.jpg', '81NM37CvJwL._SX679_.jpg', 0, 'In Stock', '2020-08-25 09:20:14', NULL, '', ''),
(15, 5, 17, 'Redmi Note 8 Pro Back cover', 'xaiomi', 599, 1600, 'Spigen Rugged Armor Back Cover Case Designed for Xiaomi Redmi Note 8 Pro - Matte Black', '61fVDHcak5L._SL1000_.jpg', '51C+x4MHPTL._SX425_.jpg', '61OhCJcRoRL._SX425_.jpg', 0, 'In Stock', '2020-08-25 09:34:24', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(2, 2, 'Led Televisionn', '2020-08-08 06:28:39', '08-08-2020 01:02:02 PM'),
(3, 2, 'Television', '2020-08-08 06:28:39', '08-08-2020 01:02:24 PM'),
(4, 2, 'Mobiles', '2020-08-08 06:28:39', ''),
(5, 2, 'Mobile Accessories', '2020-08-08 06:28:39', ''),
(6, 2, 'Laptops', '2020-08-08 06:28:39', ''),
(7, 2, 'Computers', '2020-08-08 06:28:39', ''),
(8, 1, 'Comics', '2020-08-08 06:28:39', ''),
(9, 3, 'Beds', '2020-08-08 06:28:39', ''),
(10, 3, 'Sofas', '2020-08-08 06:28:39', ''),
(11, 3, 'Dining Tables', '2020-08-08 06:28:39', ''),
(12, 4, 'Men t-shirts', '2020-08-08 06:28:39', '16-12-2020 09:17:18 PM'),
(15, 4, 'printed dress', '2020-08-16 16:42:09', NULL),
(16, 4, 'Man`s  Shart', '2020-08-16 16:42:37', NULL),
(17, 5, 'Mobile', '2020-08-25 09:29:48', NULL),
(18, 5, 'laptop', '2020-08-25 09:29:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(9, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-17 17:24:24', NULL, 1),
(10, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-17 17:30:38', NULL, 1),
(11, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-17 17:33:19', NULL, 0),
(12, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-17 17:33:36', NULL, 1),
(13, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-20 03:15:55', NULL, 1),
(14, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-20 03:49:32', '20-08-2020 09:20:25 AM', 1),
(15, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-20 04:32:10', NULL, 0),
(16, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-23 13:39:25', '23-08-2020 07:16:11 PM', 1),
(17, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-23 13:47:02', '23-08-2020 07:45:35 PM', 1),
(18, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-23 14:42:30', NULL, 1),
(19, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 05:12:29', '24-08-2020 02:40:17 PM', 1),
(20, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 09:44:52', NULL, 0),
(21, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 09:45:01', '24-08-2020 04:32:42 PM', 1),
(22, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 11:03:17', NULL, 1),
(23, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 12:50:06', NULL, 0),
(24, 'sangeetamergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 12:50:16', NULL, 0),
(25, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 12:50:29', '24-08-2020 06:24:20 PM', 1),
(26, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 12:54:43', '24-08-2020 07:01:29 PM', 1),
(27, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 13:32:05', '24-08-2020 09:52:12 PM', 1),
(28, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 16:32:11', NULL, 1),
(29, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 16:38:23', NULL, 1),
(30, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 16:48:26', NULL, 0),
(31, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 16:48:34', NULL, 0),
(32, 'shrikantmergu1999@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 16:48:50', NULL, 1),
(33, 'shrikantmergu1999@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 17:02:12', NULL, 1),
(34, 'shrikantmergu1999@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-24 17:10:39', NULL, 1),
(35, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-25 05:55:28', NULL, 0),
(36, 'shrikantmergu1999@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-25 05:55:34', NULL, 1),
(37, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-24 06:42:33', NULL, 1),
(38, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-10-31 11:32:27', NULL, 1),
(39, 'kiran@gmail.com', 0x3a3a3100000000000000000000000000, '2020-12-12 14:19:31', '12-12-2020 07:49:53 PM', 1),
(40, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-12-12 14:20:09', NULL, 1),
(41, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-12-15 13:34:13', NULL, 1),
(42, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-12-16 16:09:59', '16-12-2020 09:52:59 PM', 1),
(43, 'ajay@gmail.com', 0x3a3a3100000000000000000000000000, '2020-12-16 16:23:43', '16-12-2020 10:10:46 PM', 1),
(44, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-12-16 16:41:04', '16-12-2020 10:51:39 PM', 1),
(45, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2020-12-17 06:11:58', NULL, 1),
(46, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2021-01-03 11:52:04', NULL, 1),
(47, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2021-01-05 14:32:12', '05-01-2021 08:23:39 PM', 1),
(48, 'reni@gmail.com', 0x3a3a3100000000000000000000000000, '2021-01-05 14:54:18', '05-01-2021 08:41:55 PM', 1),
(49, 'shrikantmergu143@gmail.com', 0x3a3a3100000000000000000000000000, '2021-01-05 16:09:35', '05-01-2021 09:43:44 PM', 1),
(50, 'kanchanamergu12@gmail.com', 0x3a3a3100000000000000000000000000, '2021-01-06 14:41:02', '06-01-2021 08:12:48 PM', 1),
(51, 'kanchanamergu12@gmail.com', 0x3a3a3100000000000000000000000000, '2021-01-06 14:44:27', NULL, 0),
(52, 'kanchanamergu12@gmail.com', 0x3a3a3100000000000000000000000000, '2021-01-06 14:44:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(2, 'shrikant', 'shrikantmergu143@gmail.com', 9028728270, 'shrikant', '267/58 raviwar peth ,solapur', 'maharashtra', 'solapur', 413005, '267/58 raviwar peth ,solapur', 'maharashtra', 'solapur', 413005, '2020-08-17 16:18:46', '24-08-2020 03:15:32 PM'),
(6, 'ajay ', 'ajay@gmail.com', 1234567890, 'ajay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-17 16:28:03', NULL),
(7, 'mahesh1', 'mahesh@gmail.com', 9012345678, 'mahesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-17 16:30:31', NULL),
(9, 'kiran', 'kiran@gmail.com', 9028138121, 'kiran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-12 14:19:20', NULL),
(10, 'ajay', 'ajay@gmail.com', 90287282729, 'ajay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-16 16:23:33', NULL),
(11, 'rani', 'reni@gmail.com', 1234567890, 'rani', '267/58 raviwar peth, solapur', 'maharashtra', 'solapur', 413005, 'eaddress', 'maharashtra', 'solapur', 413005, '2021-01-05 14:54:09', NULL),
(12, 'Kanchana Mergu', 'kanchanamergu12@gmail.com', 9404929143, 'Kanchana@12', '267/58 raviwar peth, solapur', 'maharashtra', 'solapur', 413005, 'eaddress', 'maharashtra', 'solapur', 413005, '2021-01-06 14:40:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimage`
--
ALTER TABLE `bimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bimage`
--
ALTER TABLE `bimage`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
