-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2021 at 07:36 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oreswtux_giftshop454`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `email`, `status`, `password`) VALUES
(1, 'Delight', 'Olarinde', 'delightolarinde@gmail.com', 'active', '73612947fc2d98c40d298c424c9f1907');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `billing_id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `houseaddress` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apartment` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `town` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `scp_id` int(11) NOT NULL,
  `color` int(11) DEFAULT NULL,
  `font` int(11) DEFAULT NULL,
  `customtext` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shape` int(11) DEFAULT NULL,
  `quantity` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `user_id`, `scp_id`, `color`, `font`, `customtext`, `price`, `shape`, `quantity`, `ip`, `created_at`) VALUES
(1, 0, 4, 0, 0, 'Delight', '6.50', 0, '4', '::1', '2021-04-12 11:36:42'),
(5, 0, 5, 0, 0, 'Delight', '6.50', 0, '5', '::1', '2021-04-12 11:36:42'),
(6, 0, 1, 0, 0, 'Love you always', '4', 0, '2', '129.205.113.221', '2021-04-12 11:36:42'),
(7, 0, 1, 0, 0, 'Love you always', '4', 0, '2', '129.205.113.221', '2021-04-12 11:36:42'),
(8, 0, 1, 0, 0, 'Love you always', '4', 0, '2', '129.205.113.221', '2021-04-12 11:36:42'),
(9, 0, 1, 0, 0, 'I love you', '4', 0, '1', '185.226.144.93', '2021-04-12 11:36:42'),
(10, 0, 1, 0, 0, 'I LOVE YOU', '4', 0, '1', '197.210.65.31', '2021-04-12 11:36:42'),
(11, 0, 1, 0, 0, 'I LOVE YOU', '4', 0, '1', '197.210.65.31', '2021-04-12 11:36:42'),
(12, 0, 16, 0, 0, '', '4', 0, '1', '197.211.58.27', '2021-04-12 11:36:42'),
(13, 0, 9, 0, 0, '', '4', 0, '1', '188.220.50.95', '2021-04-12 11:36:42'),
(14, 0, 1, 0, 0, '', '4', 0, '1', '197.211.58.29', '2021-04-12 11:36:42'),
(15, 0, 1, 0, 0, 'Love', '4', 0, '1', '197.211.58.29', '2021-04-12 11:36:42'),
(16, 0, 1, 0, 0, 'Love', '4', 0, '1', '197.211.58.29', '2021-04-12 11:36:42'),
(17, 0, 1, 0, 0, '', '4', 0, '1', '185.226.144.93', '2021-04-12 11:36:42'),
(18, 0, 1, 0, 0, 'SEGUN', '4', 0, '1', '185.226.144.93', '2021-04-12 11:36:42'),
(19, 0, 1, 0, 0, 'Delight', '4', 0, '2', '197.210.29.169', '2021-04-13 14:25:59'),
(20, 0, 1, 0, 0, 'Delight', '4', 0, '2', '197.210.29.169', '2021-04-13 14:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `innerbanner` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `name`, `slug`, `image`, `innerbanner`, `status`) VALUES
(6, 'CAKE ACCESSORIES', 'CAKE ACCESSORIES', 'Ribbed-Scraper-1.jpg', '', 'active'),
(7, 'CORPORATE GIFTS', 'CORPORATE GIFTS', 'cooperate.jpg', '', 'active'),
(8, 'GIFT INSPIRATIONS', 'GIFT INSPIRATIONS', 'Personalised-Lazy-Susan-2-1.jpg', '', 'active'),
(9, 'HIM/HER/KIDS', 'HIM/HER/KIDS', 'Anniversary-Congrats-Heart-Plaque-1.jpg', '', 'active'),
(10, 'HOMEWARE', 'HOMEWARE', 'Personalised-Christmas-Tree-Decoration-1-320x320.jpg', '', 'active'),
(11, 'OCCASIONS', 'OCCASIONS', 'Personalised-Paddle-Board-Platter-2.jpg', '', 'active'),
(12, 'SOUVENIRS', 'SOUVENIRS', 'Wooden-Clock.jpg', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hex` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `name`, `image`, `hex`, `status`) VALUES
(1, 'Baby Blue', '', '#89CFF0', 'active'),
(2, 'Brown (For Acrylic)Grey', '', NULL, 'active'),
(3, 'Brown (For Wood)', '', '#654321 ', 'active'),
(4, 'Black', '', NULL, 'active'),
(5, 'Blue', '', NULL, 'active'),
(6, 'Green', '', NULL, 'active'),
(7, 'Clear', '', '#dcf0ef', 'active'),
(8, 'Red', '', NULL, 'active'),
(9, 'Mirror Gold', '', NULL, 'active'),
(10, 'Mirror Silver', '', NULL, 'active'),
(11, 'Orange', '', NULL, 'active'),
(12, 'Pink', '', NULL, 'active'),
(13, 'Purple', '', NULL, 'active'),
(14, 'Yellow', '', NULL, 'active'),
(15, 'Mirror Pink', '', NULL, 'active'),
(16, 'Mirror Blue', '', NULL, 'active'),
(17, 'Mirror Rose Gold', '', '#b76e79', 'active'),
(18, 'Glitter Rose Gold', '', NULL, 'active'),
(19, 'White', '', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `company_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telegram` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `support_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `enquiries_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `favicon` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `firstname`, `lastname`, `email`, `phone`, `message`) VALUES
(1, 'Delight', 'Olarinde', 'delightolarinde@gmail.com', '08134095437', 'Message');

-- --------------------------------------------------------

--
-- Table structure for table `fonts`
--

CREATE TABLE `fonts` (
  `font_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fonts`
--

INSERT INTO `fonts` (`font_id`, `name`, `image`, `status`) VALUES
(1, 'Bold Stylish Calligraphy', '', 'active'),
(2, 'Other (Unoffered font)', '', 'active'),
(3, 'Any font (Choose for me)', '', 'active'),
(4, 'Vesta Night', '', 'active'),
(5, 'Xiomara', '', 'active'),
(6, 'Quick Kiss', '', 'active'),
(7, 'Sweet Sensations', '', 'active'),
(8, 'Rochester', '', 'active'),
(9, 'Rage Italic', '', 'active'),
(10, 'Montserrat', '', 'active'),
(11, 'Matchmaker', '', 'active'),
(12, 'Waltograph', '', 'active'),
(13, 'Great Vibes', '', 'active'),
(14, 'Edwardian Script', '', 'active'),
(15, 'Century751 SeBd BT', '', 'active'),
(16, 'Countryiside', '', 'active'),
(17, 'Clarendon Blk', '', 'active'),
(18, 'Calling Heart', '', 'active'),
(19, 'Beautiful People', '', 'active'),
(20, 'Blangkon Script', '', 'active'),
(21, 'Brush Script MT', '', 'active'),
(22, 'Brock Script', '', 'active'),
(23, 'August', '', 'active'),
(24, 'Arial', '', 'active'),
(25, 'Ananda Black', '', 'active'),
(26, 'Bernard MT', '', 'active'),
(27, 'American Typewriter', '', 'active'),
(28, 'Amsterdam', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `holes`
--

CREATE TABLE `holes` (
  `hole_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `holes`
--

INSERT INTO `holes` (`hole_id`, `name`, `image`, `status`) VALUES
(1, 'Yes', NULL, 'active'),
(2, 'No', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `pc_id` int(11) DEFAULT NULL,
  `pf_id` int(11) DEFAULT NULL,
  `ph_id` int(11) DEFAULT NULL,
  `pm_id` int(11) DEFAULT NULL,
  `psh_id` int(11) DEFAULT NULL,
  `psi_id` int(11) DEFAULT NULL,
  `scp_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `customtext` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `unitcost` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `product_id`, `pc_id`, `pf_id`, `ph_id`, `pm_id`, `psh_id`, `psi_id`, `scp_id`, `order_id`, `note`, `customtext`, `quantity`, `unitcost`) VALUES
(1, 0, NULL, NULL, 0, 0, 0, 0, 4, 3, '', 'Delight', '2', '4.00'),
(2, 0, NULL, NULL, 0, 0, 0, 0, 0, 4, '', '0', '', ''),
(3, 0, NULL, NULL, 0, 0, 0, 0, 0, 5, '', '0', '', ''),
(4, 0, NULL, NULL, 0, 0, 0, 0, 0, 6, '', '0', '', ''),
(5, 0, NULL, NULL, 0, 0, 0, 0, 12, 7, '', 'Delight', '1', '4.00'),
(6, 0, NULL, NULL, 0, 0, 0, 0, 12, 8, '', 'Delight', '1', '4.00'),
(7, 0, NULL, NULL, 0, 0, 0, 0, 12, 9, '', 'Delight', '1', '4.00'),
(8, 0, NULL, NULL, 0, 0, 0, 0, 12, 10, '', 'Delight', '1', '4.00'),
(9, 0, NULL, NULL, 0, 0, 0, 0, 12, 11, '', 'Delight', '1', '4.00'),
(10, 0, NULL, NULL, 0, 0, 0, 0, 12, 12, '', 'Delight', '1', '4.00'),
(11, 1, 5, 16, 0, 0, 0, 0, 1, 1, '', 'Delight', '2', '3'),
(12, 0, NULL, NULL, 0, 0, 0, 0, 12, 13, '', 'Delight', '1', '4.00'),
(13, 0, NULL, NULL, 0, 0, 0, 0, 12, 14, '', 'Delight', '1', '4.00'),
(14, 0, NULL, NULL, 0, 0, 0, 0, 12, 15, '', 'Delight', '1', '4.00'),
(15, 4, 67, 98, 0, 0, 0, 0, 4, 16, '', 'Delight', '2', '4.00'),
(16, 4, 67, 98, 0, 0, 0, 0, 4, 17, '', 'Delight', '2', '4.00'),
(17, 4, 67, 98, 0, 0, 0, 0, 4, 18, '', 'Delight', '2', '4.00'),
(18, 4, 67, 98, 0, 0, 0, 0, 4, 19, '', 'Delight', '2', '4.00'),
(19, 4, 67, 98, 0, 0, 0, 0, 4, 20, '', 'Delight', '2', '4.00'),
(20, 4, 67, 98, 0, 0, 0, 0, 4, 21, '', 'Delight', '2', '4.00'),
(21, 4, 67, 98, 0, 0, 0, 0, 4, 22, '', 'Delight', '2', '4.00'),
(22, 4, 67, 98, 0, 0, 0, 0, 4, 23, '', 'Delight', '2', '4.00'),
(23, 4, 67, 98, 0, 0, 0, 0, 4, 24, '', 'Delight', '2', '4.00'),
(24, 4, 67, 98, 0, 0, 0, 0, 4, 25, '', 'Delight', '2', '4.00'),
(25, 4, 67, 98, 0, 0, 0, 0, 4, 26, '', 'Delight', '2', '4.00'),
(26, 4, 67, 98, 0, 0, 0, 0, 4, 27, '', 'Delight', '2', '4.00'),
(27, 4, 67, 98, 0, 0, 0, 0, 4, 28, '', 'Delight', '2', '4.00'),
(28, 4, 67, 98, 0, 0, 0, 0, 4, 29, '', 'Delight', '2', '4.00'),
(29, 4, 67, 98, 0, 0, 0, 0, 4, 30, '', 'Delight', '2', '4.00'),
(30, 0, NULL, NULL, 0, 0, 0, 0, 0, 31, '', '0', '', ''),
(31, 0, NULL, NULL, 0, 0, 0, 0, 0, 32, '', '0', '', ''),
(32, 0, NULL, NULL, 0, 0, 0, 0, 0, 33, '', '0', '', ''),
(33, 4, 58, 89, 0, 0, 0, 0, 4, 34, '', 'Please', '3', '4.00'),
(34, 4, 58, 89, 0, 0, 0, 0, 4, 35, '', 'Please', '3', '4.00'),
(35, 4, 58, 89, 0, 0, 0, 0, 4, 36, '', 'Please', '3', '4.00'),
(36, 4, 58, 89, 0, 0, 0, 0, 4, 37, '', 'Please', '3', '4.00'),
(37, 4, 58, 89, 0, 0, 0, 0, 4, 38, '', 'Please', '3', '4.00'),
(38, 4, 58, 89, 0, 0, 0, 0, 4, 39, '', 'Please', '3', '4.00'),
(39, 4, 58, 89, 0, 0, 0, 0, 4, 40, '', 'Please', '3', '4.00'),
(40, 4, 58, 89, 0, 0, 0, 0, 4, 41, '', 'Please', '3', '4.00'),
(41, 4, 58, 89, 0, 0, 0, 0, 4, 42, '', 'Please', '3', '4.00'),
(42, 4, 58, 89, 0, 0, 0, 0, 4, 43, '', 'Please', '3', '4.00'),
(43, 4, 58, 89, 0, 0, 0, 0, 4, 44, '', 'Please', '3', '4.00'),
(44, 4, 58, 89, 0, 0, 0, 0, 4, 45, '', 'Please', '3', '4.00'),
(45, 4, 58, 89, 0, 0, 0, 0, 4, 46, '', 'Please', '3', '4.00'),
(46, 4, 58, 89, 0, 0, 0, 0, 4, 47, '', 'Please', '3', '4.00'),
(47, 4, 58, 89, 0, 0, 0, 0, 4, 48, '', 'Please', '3', '4.00'),
(48, 4, 58, 89, 0, 0, 0, 0, 4, 49, '', 'Please', '3', '4.00'),
(49, 4, 58, 89, 0, 0, 0, 0, 4, 50, '', 'Please', '3', '4.00'),
(50, 4, 58, 89, 0, 0, 0, 0, 4, 51, '', 'Please', '3', '4.00'),
(51, 4, 58, 89, 0, 0, 0, 0, 4, 52, '', 'Please', '3', '4.00'),
(52, 4, 58, 89, 0, 0, 0, 0, 4, 53, '', 'Please', '3', '4.00'),
(53, 4, 58, 89, 0, 0, 0, 0, 4, 54, '', 'Please', '3', '4.00'),
(54, 4, 58, 89, 0, 0, 0, 0, 4, 55, '', 'Please', '3', '4.00'),
(55, 4, 58, 89, 0, 0, 0, 0, 4, 56, '', 'Please', '3', '4.00'),
(56, 4, 58, 89, 0, 0, 0, 0, 4, 57, '', 'Please', '3', '4.00'),
(57, 1, 1, 9, 0, 0, 0, 0, 1, 58, '', 'Please', '2', '4.00'),
(58, 1, 1, 9, 0, 0, 0, 0, 1, 59, '', 'Please', '2', '4.00'),
(59, 1, 1, 9, 0, 0, 0, 0, 1, 60, '', 'Please', '2', '4.00'),
(60, 10, 175, 265, 0, 0, 0, 0, 10, 61, '', 'Please', '1', '4.00'),
(61, 10, 175, 265, 0, 0, 0, 0, 10, 62, '', 'Please', '1', '4.00'),
(62, 10, 175, 265, 0, 0, 0, 0, 10, 63, '', 'Please', '1', '4.00'),
(63, 4, 68, 99, 0, 0, 0, 0, 4, 64, '', 'Delight', '2', '4.00'),
(64, 4, 68, 99, 0, 0, 0, 0, 4, 65, '', 'Delight', '2', '4.00'),
(65, 4, 68, 99, 0, 0, 0, 0, 4, 66, '', 'Delight', '2', '4.00'),
(66, 4, 68, 99, 0, 0, 0, 0, 4, 67, '', 'Delight', '2', '4.00'),
(67, 4, 68, 99, 0, 0, 0, 0, 4, 68, '', 'Delight', '2', '4.00'),
(68, 4, 68, 99, 0, 0, 0, 0, 4, 69, '', 'Delight', '2', '4.00'),
(69, 4, 68, 99, 0, 0, 0, 0, 4, 70, '', 'Delight', '2', '4.00'),
(70, 12, 181, 320, 0, 0, 0, 0, 12, 71, '', 'Collon', '4', '4.00'),
(71, 12, 181, 320, 0, 0, 0, 0, 12, 72, '', 'Collon', '4', '4.00'),
(72, 12, 181, 320, 0, 0, 0, 0, 12, 73, '', 'Collon', '4', '4.00'),
(73, 12, 181, 320, 0, 0, 0, 0, 12, 74, '', 'Collon', '4', '4.00'),
(74, 20, NULL, 543, 0, 0, 0, 74, 20, 75, '', 'Delight', '1', '20.00'),
(75, 20, NULL, 543, 0, 0, 0, 74, 20, 76, '', 'Delight', '1', '20.00'),
(76, 20, NULL, 543, 0, 0, 0, 74, 20, 77, '', 'Delight', '1', '20.00'),
(77, 20, NULL, 543, 0, 0, 0, 74, 20, 78, '', 'Delight', '1', '20.00'),
(78, 4, 59, 100, 0, 0, 0, 0, 4, 79, '', 'Please', '2', '4.00'),
(79, 4, 59, 100, 0, 0, 0, 0, 4, 80, '', 'Please', '2', '4.00'),
(80, 4, 59, 100, 0, 0, 0, 0, 4, 81, '', 'Please', '2', '4.00'),
(81, 4, 59, 100, 0, 0, 0, 0, 4, 82, '', 'Please', '2', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `material_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`material_id`, `name`, `status`) VALUES
(1, 'Acrylic', 'active'),
(2, 'Wood', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_amount` varchar(11) COLLATE utf8_unicode_ci DEFAULT '0',
  `payment_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'Awaiting Authentication',
  `payment_method` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipment_amount` varchar(11) COLLATE utf8_unicode_ci DEFAULT '0',
  `tax` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_amount` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `order_message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipment_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'Processing',
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `date`, `order_amount`, `payment_status`, `payment_method`, `shipment_amount`, `tax`, `discount`, `total_amount`, `order_message`, `shipment_status`, `user_id`, `ip`) VALUES
(1, '2021-04-12 11:43:00', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(2, '2021-04-12 11:50:27', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(3, '2021-04-12 11:51:50', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(4, '2021-04-12 12:41:48', '0', 'Awaiting Authentication', NULL, '0', NULL, NULL, '0', NULL, 'Processing', 0, '197.210.29.238'),
(5, '2021-04-12 12:41:48', '0', 'Awaiting Authentication', NULL, '0', NULL, NULL, '0', NULL, 'Processing', 0, '197.210.29.238'),
(6, '2021-04-12 12:41:48', '0', 'Awaiting Authentication', NULL, '0', NULL, NULL, '0', NULL, 'Processing', 0, '197.210.29.238'),
(7, '2021-04-12 12:52:18', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(8, '2021-04-12 12:52:18', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(9, '2021-04-12 12:52:18', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(10, '2021-04-12 13:12:18', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(11, '2021-04-12 13:12:18', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(12, '2021-04-12 13:12:18', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(13, '2021-04-12 13:24:09', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(14, '2021-04-12 13:24:09', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(15, '2021-04-12 13:24:09', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '197.210.29.238'),
(16, '2021-04-12 13:28:50', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(17, '2021-04-12 13:28:50', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(18, '2021-04-12 13:28:50', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(19, '2021-04-12 13:31:20', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(20, '2021-04-12 13:31:20', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(21, '2021-04-12 13:31:20', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(22, '2021-04-12 13:33:01', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(23, '2021-04-12 13:33:01', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(24, '2021-04-12 13:33:01', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(25, '2021-04-12 13:37:54', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(26, '2021-04-12 13:37:54', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(27, '2021-04-12 13:37:54', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(28, '2021-04-12 13:39:14', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(29, '2021-04-12 13:39:14', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(30, '2021-04-12 13:39:14', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.238'),
(31, '2021-04-12 13:42:00', '0', 'Awaiting Authentication', NULL, '0', NULL, NULL, '0', NULL, 'Processing', 0, '197.210.29.238'),
(32, '2021-04-12 13:42:00', '0', 'Awaiting Authentication', NULL, '0', NULL, NULL, '0', NULL, 'Processing', 0, '197.210.29.238'),
(33, '2021-04-12 13:42:00', '0', 'Awaiting Authentication', NULL, '0', NULL, NULL, '0', NULL, 'Processing', 0, '197.210.29.238'),
(34, '2021-04-12 13:42:27', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(35, '2021-04-12 13:42:27', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(36, '2021-04-12 13:42:27', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(37, '2021-04-12 13:43:27', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(38, '2021-04-12 13:43:27', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(39, '2021-04-12 13:43:27', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(40, '2021-04-12 13:44:56', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(41, '2021-04-12 13:44:56', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(42, '2021-04-12 13:44:56', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(43, '2021-04-12 13:45:28', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(44, '2021-04-12 13:45:28', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(45, '2021-04-12 13:45:28', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(46, '2021-04-12 13:46:40', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(47, '2021-04-12 13:46:40', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(48, '2021-04-12 13:46:40', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '197.210.29.238'),
(49, '2021-04-12 13:52:05', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(50, '2021-04-12 13:52:05', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(51, '2021-04-12 13:52:05', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(52, '2021-04-12 13:52:24', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(53, '2021-04-12 13:52:24', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(54, '2021-04-12 13:52:24', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(55, '2021-04-12 13:53:49', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(56, '2021-04-12 13:53:49', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(57, '2021-04-12 13:53:49', '12', 'Awaiting Authentication', NULL, '0', NULL, NULL, '12', NULL, 'Processing', 0, '129.205.113.216'),
(58, '2021-04-12 14:04:55', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(59, '2021-04-12 14:04:55', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(60, '2021-04-12 14:04:55', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(61, '2021-04-12 14:08:26', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '129.205.113.216'),
(62, '2021-04-12 14:08:26', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '129.205.113.216'),
(63, '2021-04-12 14:08:26', '4', 'Awaiting Authentication', NULL, '0', NULL, NULL, '4', NULL, 'Processing', 0, '129.205.113.216'),
(64, '2021-04-12 14:09:15', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(65, '2021-04-12 14:09:15', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(66, '2021-04-12 14:09:15', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(67, '2021-04-12 14:14:51', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(68, '2021-04-12 14:14:51', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(69, '2021-04-12 14:14:51', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(70, '2021-04-12 14:14:51', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '129.205.113.216'),
(71, '2021-04-12 14:25:31', '16', 'Awaiting Authentication', NULL, '0', NULL, NULL, '16', NULL, 'Processing', 1, '129.205.113.216'),
(72, '2021-04-12 14:25:31', '16', 'Awaiting Authentication', NULL, '0', NULL, NULL, '16', NULL, 'Processing', 1, '129.205.113.216'),
(73, '2021-04-12 14:25:31', '16', 'Awaiting Authentication', NULL, '0', NULL, NULL, '16', NULL, 'Processing', 1, '129.205.113.216'),
(74, '2021-04-12 14:25:31', '16', 'Awaiting Authentication', NULL, '0', NULL, NULL, '16', NULL, 'Processing', 1, '129.205.113.216'),
(75, '2021-04-13 14:25:49', '20', 'Awaiting Authentication', NULL, '0', NULL, NULL, '20', NULL, 'Processing', 0, '197.210.29.169'),
(76, '2021-04-13 14:25:49', '20', 'Awaiting Authentication', NULL, '0', NULL, NULL, '20', NULL, 'Processing', 0, '197.210.29.169'),
(77, '2021-04-13 14:25:49', '20', 'Awaiting Authentication', NULL, '0', NULL, NULL, '20', NULL, 'Processing', 0, '197.210.29.169'),
(78, '2021-04-13 14:25:49', '20', 'Awaiting Authentication', NULL, '0', NULL, NULL, '20', NULL, 'Processing', 0, '197.210.29.169'),
(79, '2021-04-20 10:55:53', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.217'),
(80, '2021-04-20 10:55:53', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.217'),
(81, '2021-04-20 10:55:53', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.217'),
(82, '2021-04-20 10:55:53', '8', 'Awaiting Authentication', NULL, '0', NULL, NULL, '8', NULL, 'Processing', 0, '197.210.29.217');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `transaction_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `transaction_type` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `pl_id` int(11) NOT NULL,
  `pc_id` int(11) DEFAULT 0,
  `psi_id` int(11) DEFAULT 0,
  `price` float NOT NULL DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `customizeable` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `font` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `size` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `color` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `shapes` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `materials` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `holes` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `slug`, `price`, `short_description`, `description`, `customizeable`, `font`, `size`, `color`, `shapes`, `materials`, `holes`, `image`, `status`, `created_by`) VALUES
(1, 'Create Your Own cake topper', '\"Create Your Own\" cake topper', '4.00', '\"Create Your Own\" cake topper', '\"Create Your Own\" cake topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Any-Message-Cake-Topper-1.jpg', 'active', '2021-03-30 11:58:46'),
(2, 'Single Number Cake Topper', 'Single Number Cake Topper', '1.50', 'Single Number Cake Topper', 'Single Number Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Single-Number-Cake-Toppers-1.jpg', 'active', '2021-03-29 12:25:25'),
(3, 'Oh Baby Cake Topper', '“Oh Baby” Cake Topper', '4.00', '“Oh Baby” Cake Topper', '“Oh Baby” Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Oh-Baby-Cake-Topper-2.jpg', 'inactive', '2021-03-30 11:59:02'),
(4, 'God Bless (Any Name) Cake Topper', 'God Bless (Any Name) Cake Topper', '4.00', 'God Bless (Any Name) Cake Topper', 'God Bless (Any Name) Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'God-Bless-Any-Name-Cake-Topper-1-1.jpg', 'active', '2021-03-29 12:25:25'),
(5, 'Cross Cake Topper', 'Cross Cake Topper', '1.50', 'Cross Cake Topper', 'Cross Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Cross-Topper-Useage-Example-2.jpg', 'inactive', '2021-03-29 12:25:25'),
(6, 'Simple Cross Topper', 'Simple Cross Topper', '1.50', 'Simple Cross Topper', 'Simple Cross Topper', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'Simple-Cross-Topper-Useage-Example-1.jpg', 'active', '2021-03-29 12:25:25'),
(7, 'On Your Christening Cake Topper', 'On Your Christening Cake Topper', '1.50', 'On Your Christening Cake Topper', 'On Your Christening Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'On-Your-Christening-Cake-Topper-2.jpg', 'active', '2021-03-29 12:25:25'),
(8, 'Get it Girl Cake Topper', 'Get it Girl Cake Topper', '4.00', 'Get it Girl Cake Topper', 'Get it Girl Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Get-it-Girl-Cake-Topper-2.jpg', 'active', '2021-03-29 12:25:25'),
(9, 'Celebrate Cake Topper', '“Celebrate” Cake Topper', '4.00', '“Celebrate” Cake Topper', '“Celebrate” Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Celebrate-Cake-Toppers-2.jpg', 'active', '2021-03-30 11:59:14'),
(10, 'Dinosaur Cake Topper', 'Dinosaur Cake Topper', '4.00', 'Dinosaur Cake Topper', 'Dinosaur Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Dinosaur-Name-Cake-Topper-1.jpg', 'active', '2021-03-29 12:25:25'),
(11, 'Best Day Ever Cake Topper', 'Best Day Ever Cake Topper', '4.00', 'Best Day Ever Cake Topper', 'Best Day Ever Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Best-Day-Ever-Cake-Topper-2.jpg', 'active', '2021-03-29 12:25:25'),
(12, 'Ballerina Cake Topper', 'Ballerina Cake Topper', '4.00', 'Ballerina Cake Topper', 'Ballerina Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Ballerina-Cake-Topper-2.jpg', 'active', '2021-03-29 12:25:25'),
(13, 'Name & Cross Cake Topper', 'Name & Cross Cake Topper', '4.00', 'Name & Cross Cake Topper', 'Name & Cross Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Name-Cross-Cake-Topper-1.jpg', 'active', '2021-03-29 12:25:25'),
(14, 'It\'s a Girl Cake Topper', 'It’s a Girl Cake Topper', '4.00', 'It’s a Girl Cake Topper', 'It’s a Girl Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Its-a-Girl-Duck-Cake-Topper-2.jpg', 'active', '2021-04-09 13:49:55'),
(15, 'It\'s a Boy Cake Topper', 'It’s a Boy Cake Topper', '4.00', 'It’s a Boy Cake Topper', 'It’s a Boy Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Its-a-Boy-Cake-Topper-2.jpg', 'inactive', '2021-04-09 13:50:00'),
(16, 'First Holy Communion Cake Topper', 'First Holy Communion Cake Topper', '4.00', 'First Holy Communion Cake Topper', 'First Holy Communion Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'First-Holy-Communion-Cake-Topper-2.jpg', 'active', '2021-03-29 12:25:25'),
(17, 'Name & Cross Cake Topper', 'Name & Cross Cake Topper', '4.00', 'Name & Cross Cake Topper', 'Name & Cross Cake Topper', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Name-Cross-Cake-Topper-1.jpg', 'active', '2021-03-29 12:25:25'),
(18, 'Wedding Party Engraved Hanger', 'Wedding Party Engraved Hanger', '4.49', 'A beautiful personalised wooden hanger, personalised with a lucky lady, man or childâ€™s name!', 'A beautiful personalised wooden hanger, personalised with a lucky lady, man or childâ€™s name!\r\n\r\nMake sure your wedding dress or bridesmaidâ€™s dresses are displayed in style with these stunning personalised hangers. Weddings are all about the little details, and these hangers can be kept for years to come as the perfect keepsake.\r\n\r\nBrilliant as a gift or as a present to yourself for the big day, our personalised hangers are perfect to hang all those special dresses on! Also, a great gift for brides, ushers and parents!\r\n\r\nThis personalised hanger is also a perfect christening gift as itâ€™s ideal as an accessory for photos of the Christening gown, and as a keepsake for years to come.\r\n\r\nEngraved and made from wood, these hangers are high quality & built to last. The perfect personalised gift for any celebration!\r\n\r\nOur personalised hangers have a bar along the bottom of the hanger, so they are perfect to hang trousers as well as dresses!\r\n\r\nThis is for 1 hanger, if Bride AND Groom hangers are required, please purchase 2 and state personalisation message\r\n\r\nAvailable in a brown and white wood finish.\r\n\r\nSize: H-22.5cm, W-44.5, D-1.2cm.', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'Personalised-Brown-Hangers-1.jpg', 'active', '2021-04-13 10:38:59'),
(19, 'Personalised Wooden Clock', 'Personalised Wooden Clock', '9.99', 'Available in 4 different sizes, this rustic style personalised wooden clock is perfect for you to present to your loved ones and is suitable for various occasions.\r\n\r\nThe design is laser engraved with your chosen message into the wood for high quality, permanent finish', 'Available in 4 different sizes, this rustic style personalised wooden clock is perfect for you to present to your loved ones and is suitable for various occasions.\r\n\r\nThe design is laser engraved with your chosen message into the wood for high quality, permanent finish\r\n\r\nDue to the natural variations in the grain, colour tone and texture of the wood we use in our products, we cannot guarantee the colour or grain of any piece of wooden product will be exactly like the samples shown. This is what gives our wooden laser engraved products a rustic and unique element.\r\n\r\nThe clock will require a 1 x AA battery (battery not included). Please note that the hands of the clock are sent out at random but are usually black, gold or silver.\r\n\r\nWe advise that you refrain from using all uppercase within your personalisation if using a script style font.\r\n\r\nPlease note the clock will sit off the wall by 20mm due to the back\'s clock mechanism.\r\n\r\nMade from: Wood\r\n\r\n \r\n\r\nShape:\r\n\r\nRound\r\n\r\nSizes:\r\n\r\n20cm x 20cm x 4cm\r\n\r\n30cm x 30cm x 4cm\r\n\r\n40cm x 40cm x 4cm\r\n\r\n50cm x 50cm x 4cm\r\n\r\nPlease contact us for a quote if you require a smaller size, however, the largest size we offer is 70cm.', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'Wooden-Clock.jpg', 'active', '2021-04-13 10:46:15'),
(20, 'Any Name- Wall Sign', 'Any Name- Wall Sign', '20.00', 'All our wall names are supplied in a light brown shade- ready to be painted or glittered by you in your colour choice.', 'All our wall names are supplied in a light brown shade- ready to be painted or glittered by you in your colour choice.\r\n\r\nThis allows us to keep the cost low to you and have a much faster turnaround than other sellers.\r\n\r\nOur largest size is very generous at 70cm long!\r\n\r\nAs this is made from real wood, all wood has a natural grain and shade. No two will be the exact same.\r\n\r\nAlthough we donâ€™t charge extra for long or double-barrel names (as long as they are joined), the font would be smaller if the name is too long. For example, the letters in â€œAlexâ€ would be larger than the letters in â€œAlexandraâ€.\r\n\r\nWe suggest you place multiple orders if you would like the font to be as large for long or double-barrel names.\r\n\r\nWe advise that you refrain from using all uppercase within your personalisation if using a script style font.\r\n\r\nIn order to affix your Name to the Wall, we can put 2 holes (one on the 1st letter, and another on the last letter), so that you are able to screw your name to the wall. (screws not included). However, if you do not want this option, we recommend you use this command strip (not included) from Amazon- https://www.amazon.co.uk/dp/B00404YKZI/ref=psdc_1938565031_t1_B004051TE2\r\n\r\n \r\n\r\nPlease note that we are not responsible for any damage that may occur after you have taken delivery so please make sure the item is fully secured to the wall.<br><br>\r\n\r\n \r\n\r\n<b>Available sizes:<br></b>\r\n\r\nSmall- 30cm x 20cm<br>\r\n\r\nMedium- 50cm x 30cm<br>\r\n\r\nLarge- 70cm x 40cm<br>', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'Small-Wall-Names-1.jpg', 'active', '2021-04-13 11:23:37'),
(21, 'Engraved Lazy Susan', 'Engraved Lazy Susan', '25.99', 'A fantastic personalised wooden lazy susan / turntable with a rotating facility customised with your special personalised message.', 'A fantastic personalised wooden lazy susan / turntable with a rotating facility customised with your special personalised message.\r\n\r\nThis stylish and practical revolving Lazy Susan will proudly grace any table and is useful for serving cakes, sandwiches or drinks. You can personalise your engraved turntable with your own message to make a unique personalised gift for your home or for a loved one.\r\n\r\nAll our engraved gifts are personalised in the house so if you have any questions or special requests please contact us and we will be happy to help.\r\n\r\nPLEASE NOTE: Due to the natural variations in the grain, colour tone and texture of wood we cannot guarantee that the colour, shade or grain of any piece of wooden product will be exactly like the samples shown. This is what gives our wooden laser engraved products a rustic and unique element.', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'Personalised-Lazy-Susan-2-1.jpg', 'active', '2021-04-13 11:39:33'),
(22, 'Engraved Wooden Spatula', 'Engraved Wooden Spatula', '4.49', 'This spatula makes the perfect gift for anyone who loves to cook and will even make a great display item in your kitchen.', 'This spatula makes the perfect gift for anyone who loves to cook and will even make a great display item in your kitchen.\r\n\r\nThis is a perfect gift for any occasion such as Weddings, Christmas, Birthday or just for fun.\r\n\r\nThe spatula is made from beautiful wood and is engraved with love and care â€“ just like the kitchen creations that will be cooked with it. If you are stuck for quirky gift ideas, these handcrafted spatulas make a gift that everyone will talk about for years to come â€“ and they will remember you every time they use it.\r\n\r\nPersonalize this handcrafted, solid hardwood kitchen utensil with a name or short message\r\n\r\nPlease take care when entering your personalisation as it will be engraved exactly as you enter it,\r\n\r\n \r\n\r\n<br>Made from wood<br>\r\n\r\nSize: L-30.2cm, W-5.5cm, D- 0.5cm', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'Engraved-Spatula-1.jpg', 'active', '2021-04-13 12:16:11'),
(23, 'Chop Chop Chopping Board', 'Chop Chop Chopping Board', '9.99', 'This Personalised Paddle Chopping Board is a unique gift choice for a friend or loved one.\r\n\r\nFor anyone who likes entertaining and lives to impress their guests, this stylish laser engraved chopping board can really help turn heads.', 'This Personalised Paddle Chopping Board is a unique gift choice for a friend or loved one.\r\n\r\nFor anyone who likes entertaining and lives to impress their guests, this stylish laser engraved chopping board can really help turn heads.\r\n\r\nNot only does it work great as a chopping board, but it can also be used as an exquisite cheese board or a superb way of serving up snacks and nibbles.\r\n\r\nEach brilliant board is lovingly crafted from natural eco-friendly bamboo and is quite light but strong. All our chopping boards and cheese platters have been treated so are food safe and can be wiped clean.\r\n\r\nThe slim handle is sturdy enough to hold even a well-laden board, whilst the wider body provides loads of room for all those tasty treats.\r\n\r\nThe medium and large boards come with a hole at the end of the handle. This is especially handy for hanging the boards. Like all our other products, all boards are laser engraved with precision â€“ which serves to make each one exquisitely unique.\r\n\r\nThe text engraving can be placed on the top, middle or bottom of the board and is fully personalised with whatever message you desire.\r\n\r\n<b>DIMENSIONS:</b><br>\r\n\r\nSmall Chopping Board- (Width: 18.5cm Length: 22cm Thickness: 1cm)<br>\r\n\r\nMedium Chopping Board- (Width: 27cm Length: 38cm Thickness: 2cm)<br>\r\n\r\nLarge Chopping Board- (Width: 28cm Length: 45cm Thickness: 1.6cm)<br>\r\n\r\nExtra Large Chopping Board- (Width: 46cm Length: 53cm Thickness: 4cm)<br>\r\n\r\n \r\n\r\nDue to the natural variations in the grain, colour tone and texture of the wood we use in our products, we cannot guarantee that the colour or grain of any piece of wooden product will be exactly like the samples shown. This is what gives our wooden laser engraved products a rustic and unique element.\r\n\r\nMade from environmentally sustainable Bamboo.\r\n\r\nFood-safe wipe-clean surface. (Hand wash recommended)<br>\r\n\r\nCan be used to serve food in a stylish way.<br>\r\n\r\nSuitable for cheeseboards and food displays.<br>\r\n\r\n<b>Please note accessories are not included- only the chopping board is for sale<b>', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'Chop-Chop-Dad-Chopping-board-1.jpg', 'inactive', '2021-04-13 12:24:04'),
(24, 'Acrylic Icing Scraper', 'Acrylic Icing Scraper', '6.00', 'Our acrylic scrapers are used to scrape off excess icing off your cakes. They can be used on all types of icing such as buttercream, ganache, royal icing, fudge icing, cream cheese etc. Our acrylic scrapers can be paired with our acrylic ganache plates to help achieve those desired sharp edges on ca', 'The Laser Gift Shop Acrylic Scraper\r\n\r\nOur acrylic scrapers are used to scrape off excess icing off your cakes. They can be used on all types of icing such as buttercream, ganache, royal icing, fudge icing, cream cheese etc. Our acrylic scrapers can be paired with our acrylic ganache plates to help achieve those desired sharp edges on cakes.\r\n\r\nOur scrapers are available in 4 sizes. 5â€, 7â€, 9â€ & 11â€ and are all 3â€ wide.  They are made by us in the UK using food-safe acrylics and are all 3mm thick. Please contact us for a quote should you require a unique size.\r\n\r\nWash in warm soapy water before and after use. Do not use in dishwasher or wash with hot water to avoid acrylic warping.\r\n\r\n \r\n\r\nAvailable in sizes 5â€, 7â€, 9â€ & 11â€ and are all 3â€ wide\r\n\r\nPlease note that the colours of our acrylic scrapers are sent out at random.', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'Acrylic-Scraper-1-640x640.jpg', 'inactive', '2021-04-13 13:10:18'),
(25, ' Sorry you are leaving Decoration', ' Sorry you are leaving Decoration', '3.49', 'This decoration can be used to let someone know you would miss them.', 'This decoration can be used to let someone know you would miss them\r\n\r\nEach bauble is expertly engraved with your name or message using the latest laser technology engraving machines.\r\nOur personalised Christmas decorations make a stunning addition to your Christmas tree and give a unique touch to your festive decor.\r\nAvailable in 4 different shapes, this Personalised Christmas Tree decoration can be used as a wall decoration, cake topper or Christmas tree Bauble.\r\nThis Christmas decoration comes with the hole pre-drilled- ready for you to attach your ribbon (not included) and hang on your tree or wall.\r\nFor our wooden option, please note that due to the natural variations in the grain, colour tone and texture of the wood we use in our products, we cannot guarantee that the colour or grain of any piece of wooden product will be exactly like the samples shown. This is what gives our wooden laser engraved products a rustic and unique element.\r\n\r\nSize: 3.5â€', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'Sorry-you-are-leaving-Decoration-1.jpg', 'active', '2021-04-13 13:53:58'),
(26, 'Special Dad Decoration', 'Special Dad Decoration', '3.49', 'This decoration can be used to let someone know you would miss them.', 'This decoration can be used to let someone know you would miss them\r\n\r\nEach bauble is expertly engraved with your name or message using the latest laser technology engraving machines.\r\nOur personalised Christmas decorations make a stunning addition to your Christmas tree and give a unique touch to your festive decor.\r\nAvailable in 4 different shapes, this Personalised Christmas Tree decoration can be used as a wall decoration, cake topper or Christmas tree Bauble.\r\nThis Christmas decoration comes with the hole pre-drilled- ready for you to attach your ribbon (not included) and hang on your tree or wall.\r\nFor our wooden option, please note that due to the natural variations in the grain, colour tone and texture of the wood we use in our products, we cannot guarantee that the colour or grain of any piece of wooden product will be exactly like the samples shown. This is what gives our wooden laser engraved products a rustic and unique element.\r\n\r\nSize: 3.5â€', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'Special-Dad-Decoration-1.jpg', 'active', '2021-04-13 13:55:37'),
(27, 'Thanks Mum Personalised Wooden Clock', 'Thanks Mum Personalised Wooden Clock', '9.99', 'Available in 4 different sizes, this rustic style personalised wooden clock is perfect for you to present to your loved ones and is suitable for various occasions.\r\n', 'Available in 4 different sizes, this rustic style personalised wooden clock is perfect for you to present to your loved ones and is suitable for various occasions.\r\n\r\nThe design is laser engraved with your chosen message into the wood for high quality, permanent finish\r\n\r\nDue to the natural variations in the grain, colour tone and texture of the wood we use in our products, we cannot guarantee the colour or grain of any piece of wooden product will be exactly like the samples shown. This is what gives our wooden laser engraved products a rustic and unique element.\r\n\r\nThe clock will require a 1 x AA battery (battery not included). Please note that the hands of the clock are sent out at random but are usually black, gold or silver.\r\n\r\nWe advise that you refrain from using all uppercase within your personalisation if using a script style font.\r\n\r\nPlease note the clock will sit off the wall by 20mm due to the back\'s clock mechanism.\r\n\r\nMade from: Wood\r\n\r\n \r\n\r\nShape:\r\n\r\nRound\r\n\r\nSizes:\r\n\r\n20cm x 20cm x 4cm\r\n\r\n30cm x 30cm x 4cm\r\n\r\n40cm x 40cm x 4cm\r\n\r\n50cm x 50cm x 4cm\r\n\r\nPlease contact us for a quote if you require a smaller size, however, the largest size we offer is 70cm.', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'Thanks-Mum-Wooden-Clock.jpg', 'active', '2021-04-13 14:03:34'),
(28, 'Itâ€™s 5 oâ€™clock Somewhere Wooden Clock', 'Itâ€™s 5 oâ€™clock Somewhere Wooden Clock', '9.99', 'Fancy a drink? Too early in the day? Not any more! This beautiful, designer, handmade clock will give you the perfect excuse to have a wee drink of your favorite tipple â€“ no matter what time of the day it is! After all â€“ Itâ€™s 5 oâ€™clock somewhere â€“ so why not?\r\n\r\nAvailable in 4 different si', 'Available in 4 different sizes, this rustic style personalised wooden clock is perfect for you to present to your loved ones and is suitable for various occasions.\r\n\r\nThe design is laser engraved with your chosen message into the wood for high quality, permanent finish\r\n\r\nDue to the natural variations in the grain, colour tone and texture of the wood we use in our products, we cannot guarantee the colour or grain of any piece of wooden product will be exactly like the samples shown. This is what gives our wooden laser engraved products a rustic and unique element.\r\n\r\nThe clock will require a 1 x AA battery (battery not included). Please note that the hands of the clock are sent out at random but are usually black, gold or silver.\r\n\r\nWe advise that you refrain from using all uppercase within your personalisation if using a script style font.\r\n\r\nPlease note the clock will sit off the wall by 20mm due to the back\'s clock mechanism.\r\n\r\nMade from: Wood\r\n\r\n \r\n\r\nShape:\r\n\r\nRound\r\n\r\nSizes:\r\n\r\n20cm x 20cm x 4cm\r\n\r\n30cm x 30cm x 4cm\r\n\r\n40cm x 40cm x 4cm\r\n\r\n50cm x 50cm x 4cm\r\n\r\nPlease contact us for a quote if you require a smaller size, however, the largest size we offer is 70cm. Fancy a drink? Too early in the day? Not any more! This beautiful, designer, handmade clock will give you the perfect excuse to have a wee drink of your favourite tipple â€“ no matter what time of the day it is! After all â€“ Itâ€™s 5 oâ€™clock somewhere â€“ so why not?\r\n\r\nAvailable in 4 different sizes, this rustic style personalised wooden clock is perfect for you to present to your loved ones and is suitable for various occasions.\r\n\r\nPlease note the clock will sit off the wall by 20mm due to the back\'s clock mechanism.\r\n\r\nThe design is laser engraved with your chosen message into the wood for high quality, permanent finish\r\n\r\nDue to the natural variations in the grain, colour tone and texture of the wood we use in our products, we cannot guarantee the colour or grain of any piece of wooden product will be exactly like the samples shown. This is what gives our wooden laser engraved products a rustic and unique element.\r\n\r\nThe clock will require a 1 x AA battery (battery not included). Please note that the hands of the clock are sent out at random but are usually black, gold or silver.\r\n\r\nWe advise that you refrain from using all uppercase within your personalisation if using a script style font.\r\n\r\nMade from: Wood\r\n\r\nShape: Round\r\n\r\nSizes:\r\n\r\n20cm x 20cm x 4cm\r\n\r\n30cm x 30cm x 4cm\r\n\r\n40cm x 40cm x 4cm\r\n\r\n50cm x 50cm x 4cm\r\n\r\nPlease contact us for a quote if you require a smaller size, however, the largest size we offer is 70cm.', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'Always-5-oclock-Wooden-Clock-2.jpg', 'active', '2021-04-13 14:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `pc_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`pc_id`, `product_id`, `color_id`, `status`, `price`) VALUES
(1, 1, 1, 'active', NULL),
(2, 1, 2, 'active', NULL),
(3, 1, 3, 'active', NULL),
(4, 1, 4, 'active', NULL),
(5, 1, 5, 'active', NULL),
(6, 1, 6, 'active', NULL),
(7, 1, 7, 'active', NULL),
(8, 1, 8, 'active', NULL),
(9, 1, 9, 'active', NULL),
(10, 1, 10, 'active', NULL),
(11, 1, 11, 'active', NULL),
(12, 1, 12, 'active', NULL),
(13, 1, 13, 'active', NULL),
(14, 1, 14, 'active', NULL),
(15, 1, 15, 'active', NULL),
(16, 1, 16, 'active', NULL),
(17, 1, 17, 'active', NULL),
(18, 1, 18, 'active', NULL),
(19, 2, 1, 'active', NULL),
(20, 2, 2, 'active', NULL),
(21, 2, 3, 'active', NULL),
(22, 2, 4, 'active', NULL),
(23, 2, 5, 'active', NULL),
(24, 2, 6, 'active', NULL),
(25, 2, 7, 'active', NULL),
(26, 2, 8, 'active', NULL),
(27, 2, 9, 'active', NULL),
(28, 2, 10, 'active', NULL),
(29, 2, 11, 'active', NULL),
(30, 2, 12, 'active', NULL),
(31, 2, 13, 'active', NULL),
(32, 2, 14, 'active', NULL),
(33, 2, 15, 'active', NULL),
(34, 2, 16, 'active', NULL),
(35, 2, 17, 'active', NULL),
(36, 2, 18, 'active', NULL),
(37, 3, 1, 'active', NULL),
(38, 3, 2, 'active', NULL),
(39, 3, 3, 'active', NULL),
(40, 3, 4, 'active', NULL),
(41, 3, 5, 'active', NULL),
(42, 3, 6, 'active', NULL),
(43, 3, 7, 'active', NULL),
(44, 3, 8, 'active', NULL),
(45, 3, 9, 'active', NULL),
(46, 3, 10, 'active', NULL),
(47, 3, 11, 'active', NULL),
(48, 3, 12, 'active', NULL),
(49, 3, 13, 'active', NULL),
(50, 3, 14, 'active', NULL),
(51, 3, 15, 'active', NULL),
(52, 3, 16, 'active', NULL),
(53, 3, 17, 'active', NULL),
(54, 3, 18, 'active', NULL),
(55, 4, 1, 'active', NULL),
(56, 4, 2, 'active', NULL),
(57, 4, 3, 'active', NULL),
(58, 4, 4, 'active', NULL),
(59, 4, 5, 'active', NULL),
(60, 4, 6, 'active', NULL),
(61, 4, 7, 'active', NULL),
(62, 4, 8, 'active', NULL),
(63, 4, 9, 'active', NULL),
(64, 4, 10, 'active', NULL),
(65, 4, 11, 'active', NULL),
(66, 4, 12, 'active', NULL),
(67, 4, 13, 'active', NULL),
(68, 4, 14, 'active', NULL),
(69, 4, 15, 'active', NULL),
(70, 4, 16, 'active', NULL),
(71, 4, 17, 'active', NULL),
(72, 4, 18, 'active', NULL),
(73, 5, 1, 'active', NULL),
(74, 5, 2, 'active', NULL),
(75, 5, 3, 'active', NULL),
(76, 5, 4, 'active', NULL),
(77, 5, 5, 'active', NULL),
(78, 5, 6, 'active', NULL),
(79, 5, 7, 'active', NULL),
(80, 5, 8, 'active', NULL),
(81, 5, 9, 'active', NULL),
(82, 5, 10, 'active', NULL),
(83, 5, 11, 'active', NULL),
(84, 5, 12, 'active', NULL),
(85, 5, 13, 'active', NULL),
(86, 5, 14, 'active', NULL),
(87, 5, 15, 'active', NULL),
(88, 5, 16, 'active', NULL),
(89, 5, 17, 'active', NULL),
(90, 5, 18, 'active', NULL),
(91, 6, 1, 'active', NULL),
(92, 6, 2, 'active', NULL),
(93, 6, 3, 'active', NULL),
(94, 6, 4, 'active', NULL),
(95, 6, 5, 'active', NULL),
(96, 6, 6, 'active', NULL),
(97, 6, 7, 'active', NULL),
(98, 6, 8, 'active', NULL),
(99, 6, 9, 'active', NULL),
(100, 6, 10, 'active', NULL),
(101, 6, 11, 'active', NULL),
(102, 6, 12, 'active', NULL),
(103, 6, 13, 'active', NULL),
(104, 6, 14, 'active', NULL),
(105, 6, 15, 'active', NULL),
(106, 6, 16, 'active', NULL),
(107, 6, 17, 'active', NULL),
(108, 6, 18, 'active', NULL),
(109, 7, 1, 'active', NULL),
(110, 7, 2, 'active', NULL),
(111, 7, 3, 'active', NULL),
(112, 7, 4, 'active', NULL),
(113, 7, 5, 'active', NULL),
(114, 7, 6, 'active', NULL),
(115, 7, 7, 'active', NULL),
(116, 7, 8, 'active', NULL),
(117, 7, 9, 'active', NULL),
(118, 7, 10, 'active', NULL),
(119, 7, 11, 'active', NULL),
(120, 7, 12, 'active', NULL),
(121, 7, 13, 'active', NULL),
(122, 7, 14, 'active', NULL),
(123, 7, 15, 'active', NULL),
(124, 7, 16, 'active', NULL),
(125, 7, 17, 'active', NULL),
(126, 7, 18, 'active', NULL),
(127, 8, 1, 'active', NULL),
(128, 8, 2, 'active', NULL),
(129, 8, 3, 'active', NULL),
(130, 8, 4, 'active', NULL),
(131, 8, 5, 'active', NULL),
(132, 8, 6, 'active', NULL),
(133, 8, 7, 'active', NULL),
(134, 8, 8, 'active', NULL),
(135, 8, 9, 'active', NULL),
(136, 8, 10, 'active', NULL),
(137, 8, 11, 'active', NULL),
(138, 8, 12, 'active', NULL),
(139, 8, 13, 'active', NULL),
(140, 8, 14, 'active', NULL),
(141, 8, 15, 'active', NULL),
(142, 8, 16, 'active', NULL),
(143, 8, 17, 'active', NULL),
(144, 8, 18, 'active', NULL),
(145, 9, 1, 'active', NULL),
(146, 9, 2, 'active', NULL),
(147, 9, 3, 'active', NULL),
(148, 9, 4, 'active', NULL),
(149, 9, 5, 'active', NULL),
(150, 9, 6, 'active', NULL),
(151, 9, 7, 'active', NULL),
(152, 9, 8, 'active', NULL),
(153, 9, 9, 'active', NULL),
(154, 9, 10, 'active', NULL),
(155, 9, 11, 'active', NULL),
(156, 9, 12, 'active', NULL),
(157, 9, 13, 'active', NULL),
(158, 9, 14, 'active', NULL),
(159, 9, 15, 'active', NULL),
(160, 9, 16, 'active', NULL),
(161, 9, 17, 'active', NULL),
(162, 9, 18, 'active', NULL),
(163, 10, 1, 'active', NULL),
(164, 10, 2, 'active', NULL),
(165, 10, 3, 'active', NULL),
(166, 10, 4, 'active', NULL),
(167, 10, 5, 'active', NULL),
(168, 10, 6, 'active', NULL),
(169, 10, 7, 'active', NULL),
(170, 10, 8, 'active', NULL),
(171, 10, 9, 'active', NULL),
(172, 10, 10, 'active', NULL),
(173, 10, 11, 'active', NULL),
(174, 10, 12, 'active', NULL),
(175, 10, 13, 'active', NULL),
(176, 10, 14, 'active', NULL),
(177, 10, 15, 'active', NULL),
(178, 10, 16, 'active', NULL),
(179, 10, 17, 'active', NULL),
(180, 10, 18, 'active', NULL),
(181, 12, 1, 'active', NULL),
(182, 12, 2, 'active', NULL),
(183, 12, 3, 'active', NULL),
(184, 12, 4, 'active', NULL),
(185, 12, 5, 'active', NULL),
(186, 12, 6, 'active', NULL),
(187, 12, 7, 'active', NULL),
(188, 12, 8, 'active', NULL),
(189, 12, 9, 'active', NULL),
(190, 12, 10, 'active', NULL),
(191, 12, 11, 'active', NULL),
(192, 12, 12, 'active', NULL),
(193, 12, 13, 'active', NULL),
(194, 12, 14, 'active', NULL),
(195, 12, 15, 'active', NULL),
(196, 12, 16, 'active', NULL),
(197, 12, 17, 'active', NULL),
(198, 12, 18, 'active', NULL),
(199, 13, 1, 'active', NULL),
(200, 13, 2, 'active', NULL),
(201, 13, 3, 'active', NULL),
(202, 13, 4, 'active', NULL),
(203, 13, 5, 'active', NULL),
(204, 13, 6, 'active', NULL),
(205, 13, 7, 'active', NULL),
(206, 13, 8, 'active', NULL),
(207, 13, 9, 'active', NULL),
(208, 13, 10, 'active', NULL),
(209, 13, 11, 'active', NULL),
(210, 13, 12, 'active', NULL),
(211, 13, 13, 'active', NULL),
(212, 13, 14, 'active', NULL),
(213, 13, 15, 'active', NULL),
(214, 13, 16, 'active', NULL),
(215, 13, 17, 'active', NULL),
(216, 13, 18, 'active', NULL),
(217, 14, 1, 'active', NULL),
(218, 14, 2, 'active', NULL),
(219, 14, 3, 'active', NULL),
(220, 14, 4, 'active', NULL),
(221, 14, 5, 'active', NULL),
(222, 14, 6, 'active', NULL),
(223, 14, 7, 'active', NULL),
(224, 14, 8, 'active', NULL),
(225, 14, 9, 'active', NULL),
(226, 14, 10, 'active', NULL),
(227, 14, 11, 'active', NULL),
(228, 14, 12, 'active', NULL),
(229, 14, 13, 'active', NULL),
(230, 14, 14, 'active', NULL),
(231, 14, 15, 'active', NULL),
(232, 14, 16, 'active', NULL),
(233, 14, 17, 'active', NULL),
(234, 14, 18, 'active', NULL),
(235, 15, 1, 'active', NULL),
(236, 15, 2, 'active', NULL),
(237, 15, 3, 'active', NULL),
(238, 15, 4, 'active', NULL),
(239, 15, 5, 'active', NULL),
(240, 15, 6, 'active', NULL),
(241, 15, 7, 'active', NULL),
(242, 15, 8, 'active', NULL),
(243, 15, 9, 'active', NULL),
(244, 15, 10, 'active', NULL),
(245, 15, 11, 'active', NULL),
(246, 15, 12, 'active', NULL),
(247, 15, 13, 'active', NULL),
(248, 15, 14, 'active', NULL),
(249, 15, 15, 'active', NULL),
(250, 15, 16, 'active', NULL),
(251, 15, 17, 'active', NULL),
(252, 15, 18, 'active', NULL),
(253, 16, 1, 'active', NULL),
(254, 16, 2, 'active', NULL),
(255, 16, 3, 'active', NULL),
(256, 16, 4, 'active', NULL),
(257, 16, 5, 'active', NULL),
(258, 16, 6, 'active', NULL),
(259, 16, 7, 'active', NULL),
(260, 16, 8, 'active', NULL),
(261, 16, 9, 'active', NULL),
(262, 16, 10, 'active', NULL),
(263, 16, 11, 'active', NULL),
(264, 16, 12, 'active', NULL),
(265, 16, 13, 'active', NULL),
(266, 16, 14, 'active', NULL),
(267, 16, 15, 'active', NULL),
(268, 16, 16, 'active', NULL),
(269, 16, 17, 'active', NULL),
(270, 16, 18, 'active', NULL),
(271, 17, 1, 'active', NULL),
(272, 17, 2, 'active', NULL),
(273, 17, 3, 'active', NULL),
(274, 17, 4, 'active', NULL),
(275, 17, 5, 'active', NULL),
(276, 17, 6, 'active', NULL),
(277, 17, 7, 'active', NULL),
(278, 17, 8, 'active', NULL),
(279, 17, 9, 'active', NULL),
(280, 17, 10, 'active', NULL),
(281, 17, 11, 'active', NULL),
(282, 17, 12, 'active', NULL),
(283, 17, 13, 'active', NULL),
(284, 17, 14, 'active', NULL),
(285, 17, 15, 'active', NULL),
(286, 17, 16, 'active', NULL),
(287, 17, 17, 'active', NULL),
(288, 17, 18, 'active', NULL),
(289, 18, 3, 'active', NULL),
(290, 19, 3, 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_fonts`
--

CREATE TABLE `product_fonts` (
  `pf_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `font_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_fonts`
--

INSERT INTO `product_fonts` (`pf_id`, `product_id`, `font_id`, `status`, `price`) VALUES
(1, 1, 1, 'active', NULL),
(2, 1, 2, 'active', NULL),
(3, 1, 3, 'active', NULL),
(4, 1, 4, 'active', NULL),
(5, 1, 5, 'active', NULL),
(6, 1, 6, 'active', NULL),
(7, 1, 7, 'active', NULL),
(8, 1, 8, 'active', NULL),
(9, 1, 9, 'active', NULL),
(10, 1, 10, 'active', NULL),
(11, 1, 11, 'active', NULL),
(12, 1, 12, 'active', NULL),
(13, 1, 13, 'active', NULL),
(14, 1, 14, 'active', NULL),
(15, 1, 15, 'active', NULL),
(16, 1, 16, 'active', NULL),
(17, 1, 17, 'active', NULL),
(18, 1, 18, 'active', NULL),
(19, 1, 19, 'active', NULL),
(20, 1, 20, 'active', NULL),
(21, 1, 21, 'active', NULL),
(22, 1, 22, 'active', NULL),
(23, 1, 23, 'active', NULL),
(24, 1, 24, 'active', NULL),
(25, 1, 25, 'active', NULL),
(26, 1, 26, 'active', NULL),
(27, 1, 27, 'active', NULL),
(28, 1, 28, 'active', NULL),
(29, 2, 1, 'active', NULL),
(30, 2, 2, 'active', NULL),
(31, 2, 3, 'active', NULL),
(32, 2, 4, 'active', NULL),
(33, 2, 5, 'active', NULL),
(34, 2, 6, 'active', NULL),
(35, 2, 7, 'active', NULL),
(36, 2, 8, 'active', NULL),
(37, 2, 9, 'active', NULL),
(38, 2, 10, 'active', NULL),
(39, 2, 11, 'active', NULL),
(40, 2, 12, 'active', NULL),
(41, 2, 13, 'active', NULL),
(42, 2, 14, 'active', NULL),
(43, 2, 15, 'active', NULL),
(44, 2, 16, 'active', NULL),
(45, 2, 17, 'active', NULL),
(46, 2, 18, 'active', NULL),
(47, 2, 19, 'active', NULL),
(48, 2, 20, 'active', NULL),
(49, 2, 21, 'active', NULL),
(50, 2, 22, 'active', NULL),
(51, 2, 23, 'active', NULL),
(52, 2, 24, 'active', NULL),
(53, 2, 25, 'active', NULL),
(54, 2, 26, 'active', NULL),
(55, 2, 27, 'active', NULL),
(56, 2, 28, 'active', NULL),
(57, 3, 1, 'active', NULL),
(58, 3, 2, 'active', NULL),
(59, 3, 3, 'active', NULL),
(60, 3, 4, 'active', NULL),
(61, 3, 5, 'active', NULL),
(62, 3, 6, 'active', NULL),
(63, 3, 7, 'active', NULL),
(64, 3, 8, 'active', NULL),
(65, 3, 9, 'active', NULL),
(66, 3, 10, 'active', NULL),
(67, 3, 11, 'active', NULL),
(68, 3, 12, 'active', NULL),
(69, 3, 13, 'active', NULL),
(70, 3, 14, 'active', NULL),
(71, 3, 15, 'active', NULL),
(72, 3, 16, 'active', NULL),
(73, 3, 17, 'active', NULL),
(74, 3, 18, 'active', NULL),
(75, 3, 19, 'active', NULL),
(76, 3, 20, 'active', NULL),
(77, 3, 21, 'active', NULL),
(78, 3, 22, 'active', NULL),
(79, 3, 23, 'active', NULL),
(80, 3, 24, 'active', NULL),
(81, 3, 25, 'active', NULL),
(82, 3, 26, 'active', NULL),
(83, 3, 27, 'active', NULL),
(84, 3, 28, 'active', NULL),
(85, 4, 1, 'active', NULL),
(86, 4, 2, 'active', NULL),
(87, 4, 3, 'active', NULL),
(88, 4, 4, 'active', NULL),
(89, 4, 5, 'active', NULL),
(90, 4, 6, 'active', NULL),
(91, 4, 7, 'active', NULL),
(92, 4, 8, 'active', NULL),
(93, 4, 9, 'active', NULL),
(94, 4, 10, 'active', NULL),
(95, 4, 11, 'active', NULL),
(96, 4, 12, 'active', NULL),
(97, 4, 13, 'active', NULL),
(98, 4, 14, 'active', NULL),
(99, 4, 15, 'active', NULL),
(100, 4, 16, 'active', NULL),
(101, 4, 17, 'active', NULL),
(102, 4, 18, 'active', NULL),
(103, 4, 19, 'active', NULL),
(104, 4, 20, 'active', NULL),
(105, 4, 21, 'active', NULL),
(106, 4, 22, 'active', NULL),
(107, 4, 23, 'active', NULL),
(108, 4, 24, 'active', NULL),
(109, 4, 25, 'active', NULL),
(110, 4, 26, 'active', NULL),
(111, 4, 27, 'active', NULL),
(112, 4, 28, 'active', NULL),
(113, 5, 1, 'active', NULL),
(114, 5, 2, 'active', NULL),
(115, 5, 3, 'active', NULL),
(116, 5, 4, 'active', NULL),
(117, 5, 5, 'active', NULL),
(118, 5, 6, 'active', NULL),
(119, 5, 7, 'active', NULL),
(120, 5, 8, 'active', NULL),
(121, 5, 9, 'active', NULL),
(122, 5, 10, 'active', NULL),
(123, 5, 11, 'active', NULL),
(124, 5, 12, 'active', NULL),
(125, 5, 13, 'active', NULL),
(126, 5, 14, 'active', NULL),
(127, 5, 15, 'active', NULL),
(128, 5, 16, 'active', NULL),
(129, 5, 17, 'active', NULL),
(130, 5, 18, 'active', NULL),
(131, 5, 19, 'active', NULL),
(132, 5, 20, 'active', NULL),
(133, 5, 21, 'active', NULL),
(134, 5, 22, 'active', NULL),
(135, 5, 23, 'active', NULL),
(136, 5, 24, 'active', NULL),
(137, 5, 25, 'active', NULL),
(138, 5, 26, 'active', NULL),
(139, 5, 27, 'active', NULL),
(140, 5, 28, 'active', NULL),
(141, 6, 1, 'active', NULL),
(142, 6, 2, 'active', NULL),
(143, 6, 3, 'active', NULL),
(144, 6, 4, 'active', NULL),
(145, 6, 5, 'active', NULL),
(146, 6, 6, 'active', NULL),
(147, 6, 7, 'active', NULL),
(148, 6, 8, 'active', NULL),
(149, 6, 9, 'active', NULL),
(150, 6, 10, 'active', NULL),
(151, 6, 11, 'active', NULL),
(152, 6, 12, 'active', NULL),
(153, 6, 13, 'active', NULL),
(154, 6, 14, 'active', NULL),
(155, 6, 15, 'active', NULL),
(156, 6, 16, 'active', NULL),
(157, 6, 17, 'active', NULL),
(158, 6, 18, 'active', NULL),
(159, 6, 19, 'active', NULL),
(160, 6, 20, 'active', NULL),
(161, 6, 21, 'active', NULL),
(162, 6, 22, 'active', NULL),
(163, 6, 23, 'active', NULL),
(164, 6, 24, 'active', NULL),
(165, 6, 25, 'active', NULL),
(166, 6, 26, 'active', NULL),
(167, 6, 27, 'active', NULL),
(168, 6, 28, 'active', NULL),
(169, 7, 1, 'active', NULL),
(170, 7, 2, 'active', NULL),
(171, 7, 3, 'active', NULL),
(172, 7, 4, 'active', NULL),
(173, 7, 5, 'active', NULL),
(174, 7, 6, 'active', NULL),
(175, 7, 7, 'active', NULL),
(176, 7, 8, 'active', NULL),
(177, 7, 9, 'active', NULL),
(178, 7, 10, 'active', NULL),
(179, 7, 11, 'active', NULL),
(180, 7, 12, 'active', NULL),
(181, 7, 13, 'active', NULL),
(182, 7, 14, 'active', NULL),
(183, 7, 15, 'active', NULL),
(184, 7, 16, 'active', NULL),
(185, 7, 17, 'active', NULL),
(186, 7, 18, 'active', NULL),
(187, 7, 19, 'active', NULL),
(188, 7, 20, 'active', NULL),
(189, 7, 21, 'active', NULL),
(190, 7, 22, 'active', NULL),
(191, 7, 23, 'active', NULL),
(192, 7, 24, 'active', NULL),
(193, 7, 25, 'active', NULL),
(194, 7, 26, 'active', NULL),
(195, 7, 27, 'active', NULL),
(196, 7, 28, 'active', NULL),
(197, 8, 1, 'active', NULL),
(198, 8, 2, 'active', NULL),
(199, 8, 3, 'active', NULL),
(200, 8, 4, 'active', NULL),
(201, 8, 5, 'active', NULL),
(202, 8, 6, 'active', NULL),
(203, 8, 7, 'active', NULL),
(204, 8, 8, 'active', NULL),
(205, 8, 9, 'active', NULL),
(206, 8, 10, 'active', NULL),
(207, 8, 11, 'active', NULL),
(208, 8, 12, 'active', NULL),
(209, 8, 13, 'active', NULL),
(210, 8, 14, 'active', NULL),
(211, 8, 15, 'active', NULL),
(212, 8, 16, 'active', NULL),
(213, 8, 17, 'active', NULL),
(214, 8, 18, 'active', NULL),
(215, 8, 19, 'active', NULL),
(216, 8, 20, 'active', NULL),
(217, 8, 21, 'active', NULL),
(218, 8, 22, 'active', NULL),
(219, 8, 23, 'active', NULL),
(220, 8, 24, 'active', NULL),
(221, 8, 25, 'active', NULL),
(222, 8, 26, 'active', NULL),
(223, 8, 27, 'active', NULL),
(224, 8, 28, 'active', NULL),
(225, 9, 1, 'active', NULL),
(226, 9, 2, 'active', NULL),
(227, 9, 3, 'active', NULL),
(228, 9, 4, 'active', NULL),
(229, 9, 5, 'active', NULL),
(230, 9, 6, 'active', NULL),
(231, 9, 7, 'active', NULL),
(232, 9, 8, 'active', NULL),
(233, 9, 9, 'active', NULL),
(234, 9, 10, 'active', NULL),
(235, 9, 11, 'active', NULL),
(236, 9, 12, 'active', NULL),
(237, 9, 13, 'active', NULL),
(238, 9, 14, 'active', NULL),
(239, 9, 15, 'active', NULL),
(240, 9, 16, 'active', NULL),
(241, 9, 17, 'active', NULL),
(242, 9, 18, 'active', NULL),
(243, 9, 19, 'active', NULL),
(244, 9, 20, 'active', NULL),
(245, 9, 21, 'active', NULL),
(246, 9, 22, 'active', NULL),
(247, 9, 23, 'active', NULL),
(248, 9, 24, 'active', NULL),
(249, 9, 25, 'active', NULL),
(250, 9, 26, 'active', NULL),
(251, 9, 27, 'active', NULL),
(252, 9, 28, 'active', NULL),
(253, 10, 1, 'active', NULL),
(254, 10, 2, 'active', NULL),
(255, 10, 3, 'active', NULL),
(256, 10, 4, 'active', NULL),
(257, 10, 5, 'active', NULL),
(258, 10, 6, 'active', NULL),
(259, 10, 7, 'active', NULL),
(260, 10, 8, 'active', NULL),
(261, 10, 9, 'active', NULL),
(262, 10, 10, 'active', NULL),
(263, 10, 11, 'active', NULL),
(264, 10, 12, 'active', NULL),
(265, 10, 13, 'active', NULL),
(266, 10, 14, 'active', NULL),
(267, 10, 15, 'active', NULL),
(268, 10, 16, 'active', NULL),
(269, 10, 17, 'active', NULL),
(270, 10, 18, 'active', NULL),
(271, 10, 19, 'active', NULL),
(272, 10, 20, 'active', NULL),
(273, 10, 21, 'active', NULL),
(274, 10, 22, 'active', NULL),
(275, 10, 23, 'active', NULL),
(276, 10, 24, 'active', NULL),
(277, 10, 25, 'active', NULL),
(278, 10, 26, 'active', NULL),
(279, 10, 27, 'active', NULL),
(280, 10, 28, 'active', NULL),
(281, 11, 1, 'active', NULL),
(282, 11, 2, 'active', NULL),
(283, 11, 3, 'active', NULL),
(284, 11, 4, 'active', NULL),
(285, 11, 5, 'active', NULL),
(286, 11, 6, 'active', NULL),
(287, 11, 7, 'active', NULL),
(288, 11, 8, 'active', NULL),
(289, 11, 9, 'active', NULL),
(290, 11, 10, 'active', NULL),
(291, 11, 11, 'active', NULL),
(292, 11, 12, 'active', NULL),
(293, 11, 13, 'active', NULL),
(294, 11, 14, 'active', NULL),
(295, 11, 15, 'active', NULL),
(296, 11, 16, 'active', NULL),
(297, 11, 17, 'active', NULL),
(298, 11, 18, 'active', NULL),
(299, 11, 19, 'active', NULL),
(300, 11, 20, 'active', NULL),
(301, 11, 21, 'active', NULL),
(302, 11, 22, 'active', NULL),
(303, 11, 23, 'active', NULL),
(304, 11, 24, 'active', NULL),
(305, 11, 25, 'active', NULL),
(306, 11, 26, 'active', NULL),
(307, 11, 27, 'active', NULL),
(308, 11, 28, 'active', NULL),
(309, 12, 1, 'active', NULL),
(310, 12, 2, 'active', NULL),
(311, 12, 3, 'active', NULL),
(312, 12, 4, 'active', NULL),
(313, 12, 5, 'active', NULL),
(314, 12, 6, 'active', NULL),
(315, 12, 7, 'active', NULL),
(316, 12, 8, 'active', NULL),
(317, 12, 9, 'active', NULL),
(318, 12, 10, 'active', NULL),
(319, 12, 11, 'active', NULL),
(320, 12, 12, 'active', NULL),
(321, 12, 13, 'active', NULL),
(322, 12, 14, 'active', NULL),
(323, 12, 15, 'active', NULL),
(324, 12, 16, 'active', NULL),
(325, 12, 17, 'active', NULL),
(326, 12, 18, 'active', NULL),
(327, 12, 19, 'active', NULL),
(328, 12, 20, 'active', NULL),
(329, 12, 21, 'active', NULL),
(330, 12, 22, 'active', NULL),
(331, 12, 23, 'active', NULL),
(332, 12, 24, 'active', NULL),
(333, 12, 25, 'active', NULL),
(334, 12, 26, 'active', NULL),
(335, 12, 27, 'active', NULL),
(336, 12, 28, 'active', NULL),
(337, 13, 1, 'active', NULL),
(338, 13, 2, 'active', NULL),
(339, 13, 3, 'active', NULL),
(340, 13, 4, 'active', NULL),
(341, 13, 5, 'active', NULL),
(342, 13, 6, 'active', NULL),
(343, 13, 7, 'active', NULL),
(344, 13, 8, 'active', NULL),
(345, 13, 9, 'active', NULL),
(346, 13, 10, 'active', NULL),
(347, 13, 11, 'active', NULL),
(348, 13, 12, 'active', NULL),
(349, 13, 13, 'active', NULL),
(350, 13, 14, 'active', NULL),
(351, 13, 15, 'active', NULL),
(352, 13, 16, 'active', NULL),
(353, 13, 17, 'active', NULL),
(354, 13, 18, 'active', NULL),
(355, 13, 19, 'active', NULL),
(356, 13, 20, 'active', NULL),
(357, 13, 21, 'active', NULL),
(358, 13, 22, 'active', NULL),
(359, 13, 23, 'active', NULL),
(360, 13, 24, 'active', NULL),
(361, 13, 25, 'active', NULL),
(362, 13, 26, 'active', NULL),
(363, 13, 27, 'active', NULL),
(364, 13, 28, 'active', NULL),
(365, 14, 1, 'active', NULL),
(366, 14, 2, 'active', NULL),
(367, 14, 3, 'active', NULL),
(368, 14, 4, 'active', NULL),
(369, 14, 5, 'active', NULL),
(370, 14, 6, 'active', NULL),
(371, 14, 7, 'active', NULL),
(372, 14, 8, 'active', NULL),
(373, 14, 9, 'active', NULL),
(374, 14, 10, 'active', NULL),
(375, 14, 11, 'active', NULL),
(376, 14, 12, 'active', NULL),
(377, 14, 13, 'active', NULL),
(378, 14, 14, 'active', NULL),
(379, 14, 15, 'active', NULL),
(380, 14, 16, 'active', NULL),
(381, 14, 17, 'active', NULL),
(382, 14, 18, 'active', NULL),
(383, 14, 19, 'active', NULL),
(384, 14, 20, 'active', NULL),
(385, 14, 21, 'active', NULL),
(386, 14, 22, 'active', NULL),
(387, 14, 23, 'active', NULL),
(388, 14, 24, 'active', NULL),
(389, 14, 25, 'active', NULL),
(390, 14, 26, 'active', NULL),
(391, 14, 27, 'active', NULL),
(392, 14, 28, 'active', NULL),
(393, 15, 1, 'active', NULL),
(394, 15, 2, 'active', NULL),
(395, 15, 3, 'active', NULL),
(396, 15, 4, 'active', NULL),
(397, 15, 5, 'active', NULL),
(398, 15, 6, 'active', NULL),
(399, 15, 7, 'active', NULL),
(400, 15, 8, 'active', NULL),
(401, 15, 9, 'active', NULL),
(402, 15, 10, 'active', NULL),
(403, 15, 11, 'active', NULL),
(404, 15, 12, 'active', NULL),
(405, 15, 13, 'active', NULL),
(406, 15, 14, 'active', NULL),
(407, 15, 15, 'active', NULL),
(408, 15, 16, 'active', NULL),
(409, 15, 17, 'active', NULL),
(410, 15, 18, 'active', NULL),
(411, 15, 19, 'active', NULL),
(412, 15, 20, 'active', NULL),
(413, 15, 21, 'active', NULL),
(414, 15, 22, 'active', NULL),
(415, 15, 23, 'active', NULL),
(416, 15, 24, 'active', NULL),
(417, 15, 25, 'active', NULL),
(418, 15, 26, 'active', NULL),
(419, 15, 27, 'active', NULL),
(420, 15, 28, 'active', NULL),
(421, 16, 1, 'active', NULL),
(422, 16, 2, 'active', NULL),
(423, 16, 3, 'active', NULL),
(424, 16, 4, 'active', NULL),
(425, 16, 5, 'active', NULL),
(426, 16, 6, 'active', NULL),
(427, 16, 7, 'active', NULL),
(428, 16, 8, 'active', NULL),
(429, 16, 9, 'active', NULL),
(430, 16, 10, 'active', NULL),
(431, 16, 11, 'active', NULL),
(432, 16, 12, 'active', NULL),
(433, 16, 13, 'active', NULL),
(434, 16, 14, 'active', NULL),
(435, 16, 15, 'active', NULL),
(436, 16, 16, 'active', NULL),
(437, 16, 17, 'active', NULL),
(438, 16, 18, 'active', NULL),
(439, 16, 19, 'active', NULL),
(440, 16, 20, 'active', NULL),
(441, 16, 21, 'active', NULL),
(442, 16, 22, 'active', NULL),
(443, 16, 23, 'active', NULL),
(444, 16, 24, 'active', NULL),
(445, 16, 25, 'active', NULL),
(446, 16, 26, 'active', NULL),
(447, 16, 27, 'active', NULL),
(448, 16, 28, 'active', NULL),
(449, 17, 1, 'active', NULL),
(450, 17, 2, 'active', NULL),
(451, 17, 3, 'active', NULL),
(452, 17, 4, 'active', NULL),
(453, 17, 5, 'active', NULL),
(454, 17, 6, 'active', NULL),
(455, 17, 7, 'active', NULL),
(456, 17, 8, 'active', NULL),
(457, 17, 9, 'active', NULL),
(458, 17, 10, 'active', NULL),
(459, 17, 11, 'active', NULL),
(460, 17, 12, 'active', NULL),
(461, 17, 13, 'active', NULL),
(462, 17, 14, 'active', NULL),
(463, 17, 15, 'active', NULL),
(464, 17, 16, 'active', NULL),
(465, 17, 17, 'active', NULL),
(466, 17, 18, 'active', NULL),
(467, 17, 19, 'active', NULL),
(468, 17, 20, 'active', NULL),
(469, 17, 21, 'active', NULL),
(470, 17, 22, 'active', NULL),
(471, 17, 23, 'active', NULL),
(472, 17, 24, 'active', NULL),
(473, 17, 25, 'active', NULL),
(474, 17, 26, 'active', NULL),
(475, 17, 27, 'active', NULL),
(476, 17, 28, 'active', NULL),
(477, 18, 1, 'active', NULL),
(478, 18, 2, 'active', NULL),
(479, 18, 3, 'active', NULL),
(480, 18, 4, 'active', NULL),
(481, 18, 5, 'active', NULL),
(482, 18, 6, 'active', NULL),
(483, 18, 7, 'active', NULL),
(484, 18, 8, 'active', NULL),
(485, 18, 9, 'active', NULL),
(486, 18, 10, 'active', NULL),
(487, 18, 11, 'active', NULL),
(488, 18, 12, 'active', NULL),
(489, 18, 13, 'active', NULL),
(490, 18, 14, 'active', NULL),
(491, 18, 15, 'active', NULL),
(492, 18, 16, 'active', NULL),
(493, 18, 17, 'active', NULL),
(494, 18, 18, 'active', NULL),
(495, 18, 19, 'active', NULL),
(496, 18, 20, 'active', NULL),
(497, 18, 21, 'active', NULL),
(498, 18, 22, 'active', NULL),
(499, 18, 23, 'active', NULL),
(500, 18, 24, 'active', NULL),
(501, 18, 25, 'active', NULL),
(502, 18, 26, 'active', NULL),
(503, 18, 27, 'active', NULL),
(504, 18, 28, 'active', NULL),
(505, 19, 1, 'active', NULL),
(506, 19, 2, 'active', NULL),
(507, 19, 3, 'active', NULL),
(508, 19, 4, 'active', NULL),
(509, 19, 5, 'active', NULL),
(510, 19, 6, 'active', NULL),
(511, 19, 7, 'active', NULL),
(512, 19, 8, 'active', NULL),
(513, 19, 9, 'active', NULL),
(514, 19, 10, 'active', NULL),
(515, 19, 11, 'active', NULL),
(516, 19, 12, 'active', NULL),
(517, 19, 13, 'active', NULL),
(518, 19, 14, 'active', NULL),
(519, 19, 15, 'active', NULL),
(520, 19, 16, 'active', NULL),
(521, 19, 17, 'active', NULL),
(522, 19, 18, 'active', NULL),
(523, 19, 19, 'active', NULL),
(524, 19, 20, 'active', NULL),
(525, 19, 21, 'active', NULL),
(526, 19, 22, 'active', NULL),
(527, 19, 23, 'active', NULL),
(528, 19, 24, 'active', NULL),
(529, 19, 25, 'active', NULL),
(530, 19, 26, 'active', NULL),
(531, 19, 27, 'active', NULL),
(532, 19, 28, 'active', NULL),
(533, 20, 1, 'active', NULL),
(534, 20, 2, 'active', NULL),
(535, 20, 3, 'active', NULL),
(536, 20, 4, 'active', NULL),
(537, 20, 5, 'active', NULL),
(538, 20, 6, 'active', NULL),
(539, 20, 7, 'active', NULL),
(540, 20, 8, 'active', NULL),
(541, 20, 9, 'active', NULL),
(542, 20, 10, 'active', NULL),
(543, 20, 11, 'active', NULL),
(544, 20, 12, 'active', NULL),
(545, 20, 13, 'active', NULL),
(546, 20, 14, 'active', NULL),
(547, 20, 15, 'active', NULL),
(548, 20, 16, 'active', NULL),
(549, 20, 17, 'active', NULL),
(550, 20, 18, 'active', NULL),
(551, 20, 19, 'active', NULL),
(552, 20, 20, 'active', NULL),
(553, 20, 21, 'active', NULL),
(554, 20, 22, 'active', NULL),
(555, 20, 23, 'active', NULL),
(556, 20, 24, 'active', NULL),
(557, 20, 25, 'active', NULL),
(558, 20, 26, 'active', NULL),
(559, 20, 27, 'active', NULL),
(560, 20, 28, 'active', NULL),
(561, 21, 1, 'active', NULL),
(562, 21, 2, 'active', NULL),
(563, 21, 3, 'active', NULL),
(564, 21, 4, 'active', NULL),
(565, 21, 5, 'active', NULL),
(566, 21, 6, 'active', NULL),
(567, 21, 7, 'active', NULL),
(568, 21, 8, 'active', NULL),
(569, 21, 9, 'active', NULL),
(570, 21, 10, 'active', NULL),
(571, 21, 11, 'active', NULL),
(572, 21, 12, 'active', NULL),
(573, 21, 13, 'active', NULL),
(574, 21, 14, 'active', NULL),
(575, 21, 15, 'active', NULL),
(576, 21, 16, 'active', NULL),
(577, 21, 17, 'active', NULL),
(578, 21, 18, 'active', NULL),
(579, 21, 19, 'active', NULL),
(580, 21, 20, 'active', NULL),
(581, 21, 21, 'active', NULL),
(582, 21, 22, 'active', NULL),
(583, 21, 23, 'active', NULL),
(584, 21, 24, 'active', NULL),
(585, 21, 25, 'active', NULL),
(586, 21, 26, 'active', NULL),
(587, 21, 27, 'active', NULL),
(588, 21, 28, 'active', NULL),
(589, 22, 1, 'active', NULL),
(590, 22, 2, 'active', NULL),
(591, 22, 3, 'active', NULL),
(592, 22, 4, 'active', NULL),
(593, 22, 5, 'active', NULL),
(594, 22, 6, 'active', NULL),
(595, 22, 7, 'active', NULL),
(596, 22, 8, 'active', NULL),
(597, 22, 9, 'active', NULL),
(598, 22, 10, 'active', NULL),
(599, 22, 11, 'active', NULL),
(600, 22, 12, 'active', NULL),
(601, 22, 13, 'active', NULL),
(602, 22, 14, 'active', NULL),
(603, 22, 15, 'active', NULL),
(604, 22, 16, 'active', NULL),
(605, 22, 17, 'active', NULL),
(606, 22, 18, 'active', NULL),
(607, 22, 19, 'active', NULL),
(608, 22, 20, 'active', NULL),
(609, 22, 21, 'active', NULL),
(610, 22, 22, 'active', NULL),
(611, 22, 23, 'active', NULL),
(612, 22, 24, 'active', NULL),
(613, 22, 25, 'active', NULL),
(614, 22, 26, 'active', NULL),
(615, 22, 27, 'active', NULL),
(616, 22, 28, 'active', NULL),
(617, 23, 1, 'active', NULL),
(618, 23, 2, 'active', NULL),
(619, 23, 3, 'active', NULL),
(620, 23, 4, 'active', NULL),
(621, 23, 5, 'active', NULL),
(622, 23, 6, 'active', NULL),
(623, 23, 7, 'active', NULL),
(624, 23, 8, 'active', NULL),
(625, 23, 9, 'active', NULL),
(626, 23, 10, 'active', NULL),
(627, 23, 11, 'active', NULL),
(628, 23, 12, 'active', NULL),
(629, 23, 13, 'active', NULL),
(630, 23, 14, 'active', NULL),
(631, 23, 15, 'active', NULL),
(632, 23, 16, 'active', NULL),
(633, 23, 17, 'active', NULL),
(634, 23, 18, 'active', NULL),
(635, 23, 19, 'active', NULL),
(636, 23, 20, 'active', NULL),
(637, 23, 21, 'active', NULL),
(638, 23, 22, 'active', NULL),
(639, 23, 23, 'active', NULL),
(640, 23, 24, 'active', NULL),
(641, 23, 25, 'active', NULL),
(642, 23, 26, 'active', NULL),
(643, 23, 27, 'active', NULL),
(644, 23, 28, 'active', NULL),
(645, 25, 1, 'active', NULL),
(646, 25, 2, 'active', NULL),
(647, 25, 3, 'active', NULL),
(648, 25, 4, 'active', NULL),
(649, 25, 5, 'active', NULL),
(650, 25, 6, 'active', NULL),
(651, 25, 7, 'active', NULL),
(652, 25, 8, 'active', NULL),
(653, 25, 9, 'active', NULL),
(654, 25, 10, 'active', NULL),
(655, 25, 11, 'active', NULL),
(656, 25, 12, 'active', NULL),
(657, 25, 13, 'active', NULL),
(658, 25, 14, 'active', NULL),
(659, 25, 15, 'active', NULL),
(660, 25, 16, 'active', NULL),
(661, 25, 17, 'active', NULL),
(662, 25, 18, 'active', NULL),
(663, 25, 19, 'active', NULL),
(664, 25, 20, 'active', NULL),
(665, 25, 21, 'active', NULL),
(666, 25, 22, 'active', NULL),
(667, 25, 23, 'active', NULL),
(668, 25, 24, 'active', NULL),
(669, 25, 25, 'active', NULL),
(670, 25, 26, 'active', NULL),
(671, 25, 27, 'active', NULL),
(672, 25, 28, 'active', NULL),
(673, 26, 1, 'active', NULL),
(674, 26, 2, 'active', NULL),
(675, 26, 3, 'active', NULL),
(676, 26, 4, 'active', NULL),
(677, 26, 5, 'active', NULL),
(678, 26, 6, 'active', NULL),
(679, 26, 7, 'active', NULL),
(680, 26, 8, 'active', NULL),
(681, 26, 9, 'active', NULL),
(682, 26, 10, 'active', NULL),
(683, 26, 11, 'active', NULL),
(684, 26, 12, 'active', NULL),
(685, 26, 13, 'active', NULL),
(686, 26, 14, 'active', NULL),
(687, 26, 15, 'active', NULL),
(688, 26, 16, 'active', NULL),
(689, 26, 17, 'active', NULL),
(690, 26, 18, 'active', NULL),
(691, 26, 19, 'active', NULL),
(692, 26, 20, 'active', NULL),
(693, 26, 21, 'active', NULL),
(694, 26, 22, 'active', NULL),
(695, 26, 23, 'active', NULL),
(696, 26, 24, 'active', NULL),
(697, 26, 25, 'active', NULL),
(698, 26, 26, 'active', NULL),
(699, 26, 27, 'active', NULL),
(700, 26, 28, 'active', NULL),
(701, 27, 1, 'active', NULL),
(702, 27, 2, 'active', NULL),
(703, 27, 3, 'active', NULL),
(704, 27, 4, 'active', NULL),
(705, 27, 5, 'active', NULL),
(706, 27, 6, 'active', NULL),
(707, 27, 7, 'active', NULL),
(708, 27, 8, 'active', NULL),
(709, 27, 9, 'active', NULL),
(710, 27, 10, 'active', NULL),
(711, 27, 11, 'active', NULL),
(712, 27, 12, 'active', NULL),
(713, 27, 13, 'active', NULL),
(714, 27, 14, 'active', NULL),
(715, 27, 15, 'active', NULL),
(716, 27, 16, 'active', NULL),
(717, 27, 17, 'active', NULL),
(718, 27, 18, 'active', NULL),
(719, 27, 19, 'active', NULL),
(720, 27, 20, 'active', NULL),
(721, 27, 21, 'active', NULL),
(722, 27, 22, 'active', NULL),
(723, 27, 23, 'active', NULL),
(724, 27, 24, 'active', NULL),
(725, 27, 25, 'active', NULL),
(726, 27, 26, 'active', NULL),
(727, 27, 27, 'active', NULL),
(728, 27, 28, 'active', NULL),
(729, 28, 1, 'active', NULL),
(730, 28, 2, 'active', NULL),
(731, 28, 3, 'active', NULL),
(732, 28, 4, 'active', NULL),
(733, 28, 5, 'active', NULL),
(734, 28, 6, 'active', NULL),
(735, 28, 7, 'active', NULL),
(736, 28, 8, 'active', NULL),
(737, 28, 9, 'active', NULL),
(738, 28, 10, 'active', NULL),
(739, 28, 11, 'active', NULL),
(740, 28, 12, 'active', NULL),
(741, 28, 13, 'active', NULL),
(742, 28, 14, 'active', NULL),
(743, 28, 15, 'active', NULL),
(744, 28, 16, 'active', NULL),
(745, 28, 17, 'active', NULL),
(746, 28, 18, 'active', NULL),
(747, 28, 19, 'active', NULL),
(748, 28, 20, 'active', NULL),
(749, 28, 21, 'active', NULL),
(750, 28, 22, 'active', NULL),
(751, 28, 23, 'active', NULL),
(752, 28, 24, 'active', NULL),
(753, 28, 25, 'active', NULL),
(754, 28, 26, 'active', NULL),
(755, 28, 27, 'active', NULL),
(756, 28, 28, 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_holes`
--

CREATE TABLE `product_holes` (
  `pm_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `hole_id` int(11) NOT NULL,
  `status` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_holes`
--

INSERT INTO `product_holes` (`pm_id`, `product_id`, `hole_id`, `status`, `price`) VALUES
(1, 20, 1, '0', NULL),
(2, 20, 2, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `pi_id` int(11) NOT NULL,
  `url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO',
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_materials`
--

CREATE TABLE `product_materials` (
  `pm_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `status` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_materials`
--

INSERT INTO `product_materials` (`pm_id`, `product_id`, `material_id`, `status`) VALUES
(1, 25, 1, 'active'),
(2, 25, 2, 'active'),
(3, 26, 1, 'active'),
(4, 26, 2, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product_shapes`
--

CREATE TABLE `product_shapes` (
  `ps_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `shape_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_shapes`
--

INSERT INTO `product_shapes` (`ps_id`, `product_id`, `shape_id`, `status`, `price`) VALUES
(1, 25, 2, 'active', '4.49'),
(2, 25, 3, 'active', '4.49'),
(3, 25, 4, 'active', '4.49'),
(4, 25, 5, 'active', '4.49'),
(5, 26, 2, 'active', '4.49'),
(6, 26, 3, 'active', '4.49'),
(7, 26, 4, 'active', '4.49'),
(8, 26, 5, 'active', '4.49');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `psi_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`psi_id`, `product_id`, `size_id`, `status`, `price`) VALUES
(1, 6, 57, 'active', NULL),
(2, 19, 116, 'active', NULL),
(3, 19, 117, 'active', NULL),
(4, 19, 118, 'active', NULL),
(5, 19, 119, 'active', NULL),
(6, 20, 73, 'active', NULL),
(7, 20, 74, 'active', NULL),
(8, 20, 96, 'active', NULL),
(9, 23, 39, 'active', NULL),
(10, 23, 40, 'active', NULL),
(11, 23, 41, 'active', NULL),
(12, 23, 42, 'active', NULL),
(13, 23, 44, 'active', NULL),
(14, 27, 116, 'active', NULL),
(15, 27, 117, 'active', NULL),
(16, 27, 118, 'active', NULL),
(17, 27, 119, 'active', NULL),
(18, 28, 116, 'active', NULL),
(19, 28, 117, 'active', NULL),
(20, 28, 118, 'active', NULL),
(21, 28, 119, 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shapes`
--

CREATE TABLE `shapes` (
  `shape_id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shapes`
--

INSERT INTO `shapes` (`shape_id`, `name`, `status`) VALUES
(1, 'rectangle', 'active'),
(2, 'Heart', 'active'),
(3, 'Round', 'active'),
(4, 'Square', 'active'),
(5, 'Star', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `ship_id` int(11) NOT NULL,
  `shipping_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`ship_id`, `shipping_name`, `s_description`, `amount`) VALUES
(1, 'UK- FREE 1st Class Postage For Orders Of &pound;9.99 And Above', 'No tracking available with this standard posting\r\n\r\nDelivery usually within 2-5 working days from postage', '0'),
(2, 'UK- Standard 1st Class Postage For Orders Of &pound;9.98 And Below- &pound;1.00', 'Sent via 1st Class Royal Mail: £5.99. (Free for orders over £150)\r\n\r\nThe delivery timescale is usually 1-3 working days from dispatch.', '0'),
(3, 'UK- 1st Class Tracked & Signed- &pound;3.99', 'Orders received by 3:00 pm Monday to Friday, will sent via tracked Royal mail / Courier service: £7.99.\r\n\r\nThe delivery timescale is usually 1-2 working days from dispatch.', '3.99'),
(4, 'UK- Next Day Guarantee- &pound;8.99', 'The delivery timescale is approx. 2-5 working days from dispatch: £9.99', '8.99'),
(5, 'UK- Saturday Guarantee Delivery - &pound;12.99', 'Order must have been received before the close of day on Thursday', '12.99'),
(6, 'All Of Europe - &pound;12.99', 'Flat rate per order- £12.99', '12.99'),
(7, 'USA & Canada - &pound;16.99', 'Flat rate per order- £16.99', '16,99'),
(8, 'Rest Of The World', 'Please contact us for a quote providing your location address and your purchase of choice', '0');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `shipping_id` int(11) NOT NULL,
  `firstname` int(50) NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `housenumber` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apartment` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `town` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postalcode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`size_id`, `name`, `status`) VALUES
(1, 'Rectangle', 'active'),
(2, 'Small 2 (Rectangle)', 'active'),
(3, 'Mini (Rectangle)', 'active'),
(4, 'Oval', 'active'),
(5, 'Heart', 'active'),
(6, '8\" x 6\"', 'active'),
(7, '8\" x 6\"', 'active'),
(8, '9\"', 'active'),
(9, '10\" x 10\" (Heart)', 'active'),
(10, 'One Size', 'active'),
(11, 'Round', 'active'),
(12, 'Rectangle (15 x 10)', 'active'),
(13, 'Provided in a plain White Cardstock Box', 'active'),
(14, 'Provided in a Gift Box & Funnel', 'active'),
(15, '7\"', 'active'),
(16, '7\" x 5\" Box frame', 'active'),
(17, '6\" x 4\" (Three sections)', 'active'),
(18, '7\" x 5\"', 'active'),
(19, '6\" x 4\"', 'active'),
(20, '8.9 width', 'active'),
(21, '23\"', 'active'),
(22, '20\"', 'active'),
(23, '13\"', 'active'),
(24, '15\"', 'active'),
(25, '15 x 10 (Oval)', 'active'),
(26, '10 x 10', 'active'),
(27, 'Heart', 'active'),
(28, 'Medium cheese board platter', 'active'),
(29, 'Large Cheese Board Platter', 'active'),
(30, '50cm', 'active'),
(31, '40cm', 'active'),
(32, '30cm', 'active'),
(33, 'Option 2', 'active'),
(34, '8”x 4\\\"', 'active'),
(35, '6”x 3\" width', 'active'),
(36, '7”', 'active'),
(37, '5\\\"', 'active'),
(38, '11\\\"', 'active'),
(39, 'Small chopping board (rectangle)', 'active'),
(40, 'Medium Chopping board (rectangle)', 'active'),
(41, 'Large Chopping board (rectangle)', 'active'),
(42, 'large Chopping board (rectangle)', 'active'),
(43, '7” x 5”', 'active'),
(44, 'Extra large Chopping board (rectangle)', 'active'),
(45, '7” x 5”', 'active'),
(46, '6” x 4”', 'active'),
(47, '8\" x 4\" (Oval)', 'active'),
(48, '8.5\\\" width', 'active'),
(49, '6\" x 3\" (Oval)', 'active'),
(50, '10\" x 5\" (Oval)', 'active'),
(51, '9.25”', 'active'),
(52, '8.25”', 'active'),
(53, '7.25”', 'active'),
(54, '6.25”', 'active'),
(55, '5.25”', 'active'),
(56, '4.25”', 'active'),
(57, '3.25”', 'active'),
(58, '15.25\\\"', 'active'),
(59, '14.25\\\"', 'active'),
(60, '13.25\\\"', 'active'),
(61, '12.25\\\"', 'active'),
(62, '11.25\\\"', 'active'),
(63, '10.25\\\"', 'active'),
(64, 'Small', 'active'),
(65, 'Medium', 'active'),
(66, '7\"', 'active'),
(67, '8.5\" width', 'active'),
(68, '8\" x 4\" (Rectangle)', 'active'),
(69, '6\" x 3\" (Rectangle)', 'active'),
(70, '10\" x 5\" (Rectangle)', 'active'),
(71, 'Option 2', 'active'),
(72, 'Option 1', 'active'),
(73, 'Medium', 'active'),
(74, 'Small', 'active'),
(75, '5.5\"', 'active'),
(76, '4\"', 'active'),
(77, 'Pack of 8', 'active'),
(78, 'Pack of 4', 'active'),
(79, 'Single one', 'active'),
(80, 'Star', 'active'),
(81, 'Square', 'active'),
(82, 'Round', 'active'),
(83, 'Heart', 'active'),
(84, 'Single Key Rings', 'active'),
(85, 'Double Key Rings', 'active'),
(86, '60cm', 'active'),
(87, '50cm', 'active'),
(88, '40cm', 'active'),
(89, '30cm', 'active'),
(90, 'All Gold & Silver 7', 'active'),
(91, 'All Gold & Silver 5.5', 'active'),
(92, 'All Gold & Silver 4', 'active'),
(93, 'Wood & All Acrylics 7', 'active'),
(94, 'Wood & All Acrylics 5.5', 'active'),
(95, 'Extra Large', 'active'),
(96, 'Large', 'active'),
(97, 'Rectangles- Small', 'active'),
(98, 'Round', 'active'),
(99, '11\"', 'active'),
(100, '9\" width', 'active'),
(101, 'Double', 'active'),
(102, 'Single', 'active'),
(103, '8\" x 4\"', 'active'),
(104, 'Rectangle & Oval- 6 x 3', 'active'),
(105, '8.5\" width', 'active'),
(106, '7\"', 'active'),
(107, 'Heart, Round, Square, Star- 5.5', 'active'),
(108, '11\" x 8\"', 'active'),
(109, '8\" x 4\" width', 'active'),
(110, '6\" x 3\" width', 'active'),
(111, '5\" Width', 'active'),
(112, '3.5\"', 'active'),
(113, '8\" x 6\" width', 'active'),
(114, '7\" x 5\" width', 'active'),
(115, '6\" x 4\" width', 'active'),
(116, '50cm', 'active'),
(117, '40cm', 'active'),
(118, '30cm', 'active'),
(119, '20cm', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_cat_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_cat_id`, `name`, `image`, `status`, `cat_id`) VALUES
(1, 'Anniversaries', '', 'active', 6),
(2, 'Baby Shower & Christenings', '', 'active', 6),
(3, 'Birthdays', '', 'active', 6),
(4, 'Cake Tools', '', 'active', 6),
(5, 'Christmas', '', 'active', 6),
(6, 'Engagements & Weddings', '', 'active', 6),
(7, 'Graduations', '', 'active', 6),
(8, 'Hen & Stag Do', '', 'active', 6),
(9, 'Mother & Fathers Day', '', 'active', 6),
(10, 'Other Celebrations', '', 'active', 6),
(11, 'Romance', '', 'active', 6),
(12, 'Unique Assortments', '', 'active', 7),
(13, 'Home Goods', '', 'active', 8),
(14, 'Key Rings', '', 'active', 8),
(15, 'Kitchen Utensils', '', 'active', 8),
(16, 'Photo Frames', '', 'active', 8),
(17, 'Unique Assortments', '', 'active', 8),
(18, 'Christmas Decorations', '', 'active', 9),
(19, 'Home Goods', '', 'active', 9),
(20, 'Key Holders', '', 'active', 9),
(21, 'Kitchen Utencils', '', 'active', 9),
(22, 'Large Wall Names', '', 'active', 9),
(23, 'Medium Wall Names', '', 'active', 9),
(24, 'Plaques', '', 'active', 9),
(25, 'Ring Boxes', '', 'active', 9),
(26, 'Single Letters', '', 'active', 9),
(27, 'Small Wall Names', '', 'active', 9),
(28, 'Unique Assortments', '', 'active', 9),
(29, 'Christmas Decorations', '', 'active', 10),
(30, 'Key Holders', '', 'active', 10),
(31, 'Kitchen Utencils', '', 'active', 10),
(32, 'Large Wall Names', '', 'active', 10),
(33, 'Medium Wall Names', '', 'active', 10),
(34, 'Plaque signs', '', 'active', 10),
(35, 'Single Letters', '', 'active', 10),
(36, 'Small Wall Names', '', 'active', 10),
(37, 'Unique Assortments', '', 'active', 10),
(38, 'Anniversaries', '', 'active', 11),
(39, 'Baby Shower & Christening', '', 'active', 11),
(40, 'Bereavement', '', 'active', 11),
(41, 'Birthdays', '', 'active', 11),
(42, 'Christmas', '', 'active', 11),
(43, 'Engagements & Weddings', '', 'active', 11),
(44, 'Fathers & Mothers Day', '', 'active', 11),
(45, 'Gifts for Teachers', '', 'active', 11),
(46, 'Graduation', '', 'active', 11),
(47, 'Hen & Stag Do', '', 'active', 11),
(48, 'New Home', '', 'active', 11),
(49, 'Retirement', '', 'active', 11),
(50, 'Romance', '', 'active', 11),
(51, 'Unique Assortments', '', 'active', 12);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cate_products`
--

CREATE TABLE `sub_cate_products` (
  `scp_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `featured` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `best_selling` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_cate_products`
--

INSERT INTO `sub_cate_products` (`scp_id`, `product_id`, `sub_cat_id`, `status`, `featured`, `best_selling`) VALUES
(1, 1, 1, 'active', 'yes', 'yes'),
(2, 2, 1, 'active', 'yes', 'yes'),
(3, 3, 1, 'inactive', 'yes', 'yes'),
(4, 4, 1, 'active', 'yes', 'yes'),
(5, 5, 1, 'inactive', 'yes', 'yes'),
(6, 6, 1, 'active', 'yes', 'yes'),
(7, 7, 1, 'active', 'yes', 'yes'),
(8, 8, 1, 'active', 'yes', 'yes'),
(9, 9, 1, 'active', 'yes', 'yes'),
(10, 10, 1, 'active', 'yes', 'yes'),
(12, 12, 1, 'active', 'yes', 'yes'),
(14, 14, 1, 'active', 'yes', 'yes'),
(15, 15, 1, 'inactive', 'yes', 'yes'),
(16, 16, 1, 'active', 'yes', 'yes'),
(17, 17, 1, 'active', 'yes', 'yes'),
(18, 18, 13, 'active', 'no', 'no'),
(19, 19, 13, 'active', 'no', 'no'),
(20, 20, 12, 'active', 'no', 'no'),
(21, 21, 12, 'active', 'yes', 'no'),
(22, 22, 48, 'active', 'no', 'no'),
(23, 23, 48, 'inactive', 'no', 'no'),
(24, 24, 31, 'inactive', 'no', 'no'),
(25, 25, 18, 'active', 'no', 'no'),
(26, 26, 18, 'active', 'no', 'no'),
(27, 27, 51, 'active', 'no', 'no'),
(28, 28, 51, 'active', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `item_number` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency_code` varchar(55) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Delight', 'Olarinde', 'delightolarinde@gmail.com', 'fdde6bc6b37521c3feff1dcf5f1ac0a6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Delight', 'Olarinde', 'olarindedelight@gmail.com', 'fdde6bc6b37521c3feff1dcf5f1ac0a6', '0000-00-00 00:00:00', '2021-03-09 15:07:25'),
(3, 'Delight', 'favour', 'oreswtux_afs12', 'b3b752713a6073ceb22c926f7c5497ca', '2021-03-09 15:10:42', '2021-03-09 15:10:42'),
(4, 'Ifeoluwa', 'favour', 'debbiejoy13ay@gmail.com', 'fb47f15e5d2cd751a6caecd2c7de7fe8', '2021-03-26 06:32:25', '2021-03-26 06:32:25'),
(5, 'Delight', 'olarinde', 'delightd000@gmail.com', 'd93a5def7511da3d0f2d171d9c344e91', '2021-03-30 13:46:25', '2021-03-30 13:46:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `scp_id` (`scp_id`),
  ADD KEY `font` (`font`),
  ADD KEY `color` (`color`),
  ADD KEY `shape` (`shape`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `fonts`
--
ALTER TABLE `fonts`
  ADD PRIMARY KEY (`font_id`);

--
-- Indexes for table `holes`
--
ALTER TABLE `holes`
  ADD PRIMARY KEY (`hole_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `scp_id` (`scp_id`),
  ADD KEY `psi_id` (`psi_id`),
  ADD KEY `psh_id` (`psh_id`),
  ADD KEY `pm_id` (`pm_id`),
  ADD KEY `ph_id` (`ph_id`),
  ADD KEY `pf_id` (`pf_id`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`pl_id`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `psi_id` (`psi_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`pc_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `product_fonts`
--
ALTER TABLE `product_fonts`
  ADD PRIMARY KEY (`pf_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `font_id` (`font_id`);

--
-- Indexes for table `product_holes`
--
ALTER TABLE `product_holes`
  ADD PRIMARY KEY (`pm_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`pi_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_materials`
--
ALTER TABLE `product_materials`
  ADD PRIMARY KEY (`pm_id`);

--
-- Indexes for table `product_shapes`
--
ALTER TABLE `product_shapes`
  ADD PRIMARY KEY (`ps_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `shape_id` (`shape_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`psi_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `shapes`
--
ALTER TABLE `shapes`
  ADD PRIMARY KEY (`shape_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`ship_id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`shipping_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `sub_cate_products`
--
ALTER TABLE `sub_cate_products`
  ADD PRIMARY KEY (`scp_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fonts`
--
ALTER TABLE `fonts`
  MODIFY `font_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `holes`
--
ALTER TABLE `holes`
  MODIFY `hole_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `product_fonts`
--
ALTER TABLE `product_fonts`
  MODIFY `pf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=757;

--
-- AUTO_INCREMENT for table `product_holes`
--
ALTER TABLE `product_holes`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_materials`
--
ALTER TABLE `product_materials`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_shapes`
--
ALTER TABLE `product_shapes`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `psi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `shapes`
--
ALTER TABLE `shapes`
  MODIFY `shape_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `ship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sub_cate_products`
--
ALTER TABLE `sub_cate_products`
  MODIFY `scp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_fonts`
--
ALTER TABLE `product_fonts`
  ADD CONSTRAINT `product_fonts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_fonts_ibfk_2` FOREIGN KEY (`font_id`) REFERENCES `fonts` (`font_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_shapes`
--
ALTER TABLE `product_shapes`
  ADD CONSTRAINT `product_shapes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_shapes_ibfk_2` FOREIGN KEY (`shape_id`) REFERENCES `shapes` (`shape_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_sizes_ibfk_2` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`size_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_cate_products`
--
ALTER TABLE `sub_cate_products`
  ADD CONSTRAINT `sub_cate_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_cate_products_ibfk_2` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_categories` (`sub_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
