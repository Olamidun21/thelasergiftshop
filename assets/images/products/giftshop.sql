-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2021 at 03:20 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `email`, `status`, `password`) VALUES
(1, 'Delight', 'Olarinde', 'delightolarinde@gmail.com', 'active', '73612947fc2d98c40d298c424c9f1907');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `scp_id` int(11) NOT NULL,
  `color` int(11) DEFAULT NULL,
  `font` int(11) DEFAULT NULL,
  `customtext` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shape` int(11) DEFAULT NULL,
  `ip` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cart_id`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `scp_id` (`scp_id`),
  KEY `font` (`font`),
  KEY `color` (`color`),
  KEY `shape` (`shape`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `innerbanner` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `name`, `slug`, `image`, `innerbanner`, `status`) VALUES
(6, 'CAKE ACCESSORIES', 'CAKE ACCESSORIES', '', '', 'active'),
(7, 'CORPORATE GIFTS', 'CORPORATE GIFTS', '', '', 'active'),
(8, 'GIFT INSPIRATIONS', 'GIFT INSPIRATIONS', '', '', 'active'),
(9, 'HIM/HER/KIDS', 'HIM/HER/KIDS', '', '', 'active'),
(10, 'HOMEWARE', 'HOMEWARE', '', '', 'active'),
(11, 'OCCASIONS', 'OCCASIONS', '', '', 'active'),
(12, 'SOUVENIRS', 'SOUVENIRS', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hex` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `name`, `image`, `hex`, `status`) VALUES
(1, 'Baby Blue', '', '#89CFF0', 'active'),
(2, 'Brown (For Acrylic)Grey', '', NULL, 'active'),
(3, 'Brown (For Wood)', '', NULL, 'active'),
(4, 'Black', '', NULL, 'active'),
(5, 'Blue', '', NULL, 'active'),
(6, 'Green', '', NULL, 'active'),
(7, 'Clear', '', NULL, 'active'),
(8, 'Red', '', NULL, 'active'),
(9, 'Mirror Gold', '', NULL, 'active'),
(10, 'Mirror Silver', '', NULL, 'active'),
(11, 'Orange', '', NULL, 'active'),
(12, 'Pink', '', NULL, 'active'),
(13, 'Purple', '', NULL, 'active'),
(14, 'Yellow', '', NULL, 'active'),
(15, 'Mirror Pink', '', NULL, 'active'),
(16, 'Mirror Blue', '', NULL, 'active'),
(17, 'Mirror Rose Gold', '', NULL, 'active'),
(18, 'Glitter Rose Gold', '', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

DROP TABLE IF EXISTS `configurations`;
CREATE TABLE IF NOT EXISTS `configurations` (
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
-- Table structure for table `fonts`
--

DROP TABLE IF EXISTS `fonts`;
CREATE TABLE IF NOT EXISTS `fonts` (
  `font_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`font_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `featured` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `best_selling` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` timestamp NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `slug`, `price`, `short_description`, `description`, `customizeable`, `font`, `size`, `color`, `shapes`, `materials`, `holes`, `image`, `featured`, `best_selling`, `status`, `created_by`) VALUES
(3, 'Any Message Arrow', 'Any Message Arrow', '£6.50', 'Wooden Arrow Message (Just emailed it)', 'Wooden Arrow Message (Just emailed it)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-11 16:00:00'),
(4, 'Bottle Openers', 'Bottle Openers', '£4.49', 'Wooden Bottle Opener (Part 1)', 'Wooden Bottle Opener (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-12 16:00:00'),
(5, 'Coasters', 'Coasters', '£15.99', 'Coasters (Just emailed it)', 'Coasters (Just emailed it)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-13 16:00:00'),
(6, 'Key Holders / Rings (with one key ring)', 'Key Holders / Rings (with one key ring)', '£2.99', 'Engraved Wooden Key Ring (Part 1)', 'Engraved Wooden Key Ring (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-14 16:00:00'),
(7, 'Key Holders / Rings (with two key rings)', 'Key Holders / Rings (with two key rings)', '£5.49', 'Engraved Wooden Key Ring (Part 1)', 'Engraved Wooden Key Ring (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-15 16:00:00'),
(8, 'Rulers', 'Rulers', '£3.99', 'Engraved Wooden Ruler (Part 1)', 'Engraved Wooden Ruler (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-16 16:00:00'),
(9, 'Plaques', 'Plaques', 'Depends on ', 'Plaques (Part 1)', 'All our wall names are supplied in a light brown shade- ready to be painted or glittered by you in your colour choice.\r\n\r\nThis allows us to keep the cost low to you and have a much faster turnaround than other sellers.\r\n\r\nOur largest size is very generous at 70cm long!\r\n\r\nAs this is made from real wood, all wood have a natural grain and shade. No two will be the exact same.\r\n\r\nAlthough we don’t charge extra for long or double barrel names (as long as they are joined), the font would be smaller if the name is too long. For example, the letters in “Alex” would be larger than the letters in “Alexandra”.\r\n\r\nWe suggest you place multiple orders if you would like the font to be as large for long or double barrel names.\r\n\r\nWe advise that you refrain from using all uppercase within your personalisation if using a script style font.\r\n\r\nIn order to affix your Name to the Wall, we can put 2 holes (one on the 1st letter, and another on the last letter), so that you are able to screw your name to the wall. (screws not included). However, if you do not want this option, we recommend you use this command strip (not included) from Amazon- https://www.amazon.co.uk/dp/B00404YKZI/ref=psdc_1938565031_t1_B004051TE2\r\n\r\n \r\n\r\nPlease note that we are not responsible for any damage that may occur after you have taken delivery so please make sure the item is fully secured to the wall.', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'Small-Wall-Names-1.png', 'no', 'no', 'active', '2021-03-17 16:00:00'),
(10, 'Post Cards', 'Post Cards', '£8.49', 'Engraved Wooden Post Card (Part 1)', 'Engraved Wooden Post Card (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-18 16:00:00'),
(11, 'Wall Names (Small)', 'Wall Names (Small)', '£20.00', 'Wall Names (Part 1)', 'Wall Names (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-19 16:00:00'),
(12, 'Wall Names (Medium)', 'Wall Names (Medium)', '£35.00', 'Wall Names (Part 1)', 'Wall Names (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-20 16:00:00'),
(13, 'Wall Names (Large)', 'Wall Names (Large)', '£50.00', 'Wall Names (Part 1)', 'Wall Names (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-21 16:00:00'),
(14, 'Chopping Boards', 'Chopping Boards', 'Depends on ', 'Chopping Boards (Part 1)', 'Chopping Boards (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-22 16:00:00'),
(15, 'Chopping Boards (Heart, Round & Oval)', 'Chopping Boards (Heart, Round & Oval)', '£12.99', 'Product Description to be used for Heart, Round & Oval Chopping Boards (Part 1)', 'Product Description to be used for Heart, Round & Oval Chopping Boards (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-23 16:00:00'),
(16, 'Cheese Board Platter', 'Cheese Board Platter', 'Depends on ', 'Chesse Board Platter (Part 1)', 'Chesse Board Platter (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-24 16:00:00'),
(17, '(Christmas) Decorations', '(Christmas) Decorations', 'Depends on ', 'Personalised Christmas Tree Decoration (Part 1)', 'Personalised Christmas Tree Decoration (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-25 16:00:00'),
(18, 'Tags', 'Tags', '£2.49', 'Personalised Wooden Tag (Part 2)', 'Personalised Wooden Tag (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-26 16:00:00'),
(19, 'Single Alphabet/Initial (not cake toppers)', 'Single Alphabet/Initial (not cake toppers)', 'Depends on ', 'Single Wooden Letter (Part 2)', 'Single Wooden Letter (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-27 16:00:00'),
(20, 'Personalised Minnie Mouse Head', 'Personalised Minnie Mouse Head', 'Depends on ', 'Personalised Minnie Mouse Tree Decoration (Part 1)', 'Personalised Minnie Mouse Tree Decoration (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-28 16:00:00'),
(21, 'Hangers', 'Hangers', '£4.49', 'Personalised wooden hanger (Part 1)', 'Personalised wooden hanger (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-29 16:00:00'),
(22, 'Spatula', 'Spatula', '£4.49', 'Engraved Wooden Spatula', 'Engraved Wooden Spatula', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-30 16:00:00'),
(23, 'Ring Boxes / Heart Boxes', 'Ring Boxes / Heart Boxes', '£7.99', 'Personalised Ring Boxes (Part 1)', 'Personalised Ring Boxes (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-03-31 16:00:00'),
(24, 'Pencil Case', 'Pencil Case', '£7.99', 'Personalised Pencil Case (Part 2)', 'Personalised Pencil Case (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-01 16:00:00'),
(25, 'Photo Frames', 'Photo Frames', 'Depends on ', 'Wooden Frame Product Description (Part 1)', 'Wooden Frame Product Description (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-02 16:00:00'),
(26, 'Keepsake Boxes', 'Keepsake Boxes', '£14.99', 'Memories and Keepsake Box (Part1)', 'Memories and Keepsake Box (Part1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-03 16:00:00'),
(27, 'Memories Boxes', 'Memories Boxes', '£9.99', 'Personalised Memories Box (Part 2)', 'Personalised Memories Box (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-04 16:00:00'),
(28, 'Curved Edge Wooden Box', 'Curved Edge Wooden Box', '£6.99', 'Curved Edge Wooden Box (Part 2)', 'Curved Edge Wooden Box (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-05 16:00:00'),
(29, 'Single Wine Box', 'Single Wine Box', '£11.99', 'Personalised Wooden Bottle Box (Part 2)', 'Personalised Wooden Bottle Box (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-06 16:00:00'),
(30, 'Double Wine Box', 'Double Wine Box', '£14.99', 'Personalised Double Wooden Bottle Box (Part 2)', 'Personalised Double Wooden Bottle Box (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-07 16:00:00'),
(31, 'Wooden Compartment Box', 'Wooden Compartment Box', '£11.99', 'Wooden Compartment Box (Part 2)', 'Wooden Compartment Box (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-08 16:00:00'),
(32, 'Lazy Susan', 'Lazy Susan', '£25.99', 'Engraved Lazy Susan (Part 1)', 'Engraved Lazy Susan (Part 1)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-09 16:00:00'),
(33, 'Do Not Disturb Sign', 'Do Not Disturb Sign', '£3.99', 'Do Not Disturb Sign (Part 2)', 'Do Not Disturb Sign (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-10 16:00:00'),
(34, 'Boy Heart Announcement', 'Boy Heart Announcement', 'Depends on ', 'Boy Heart Announcement (Part 2)', 'Boy Heart Announcement (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-11 16:00:00'),
(35, 'Sleepsuit Due Date Plaque', 'Sleepsuit Due Date Plaque', '£29.99', 'Sleepsuit Due Date Plaque (Part 2)', 'Sleepsuit Due Date Plaque (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-12 16:00:00'),
(36, 'Guest Signing Heart Plaque', 'Guest Signing Heart Plaque', '£29.99', 'Guest Signing Heart Plaque (Part 2)', 'Guest Signing Heart Plaque (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-13 16:00:00'),
(37, 'Logs', 'Logs', '£6.49', 'Personalised Rustic Log Sign', 'Personalised Rustic Log Sign', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-14 16:00:00'),
(38, 'Wedding Favours', 'Wedding Favours', '£13.99', 'Personalised Heart shape Wedding Favours (Part 2)', 'Personalised Heart shape Wedding Favours (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-15 16:00:00'),
(39, 'All Heart & Sign', 'All Heart & Sign', '£9.99', 'Personalised Heart & Sign (Part 2)', 'Personalised Heart & Sign (Part 2)', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', '', 'no', 'no', 'active', '2021-04-16 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

DROP TABLE IF EXISTS `product_colors`;
CREATE TABLE IF NOT EXISTS `product_colors` (
  `pc_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pc_id`),
  KEY `product_id` (`product_id`),
  KEY `color_id` (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_fonts`
--

DROP TABLE IF EXISTS `product_fonts`;
CREATE TABLE IF NOT EXISTS `product_fonts` (
  `pf_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `font_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pf_id`),
  KEY `product_id` (`product_id`),
  KEY `font_id` (`font_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
CREATE TABLE IF NOT EXISTS `product_image` (
  `pi_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO',
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`pi_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`pi_id`, `url`, `cover`, `product_id`) VALUES
(1, 'Small-Wall-Names-1.png', 'NO', 9),
(2, 'Custom-Small-Sign.png', 'NO', 9);

-- --------------------------------------------------------

--
-- Table structure for table `product_materials`
--

DROP TABLE IF EXISTS `product_materials`;
CREATE TABLE IF NOT EXISTS `product_materials` (
  `pm_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`pm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_shapes`
--

DROP TABLE IF EXISTS `product_shapes`;
CREATE TABLE IF NOT EXISTS `product_shapes` (
  `ps_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `shape_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ps_id`),
  KEY `product_id` (`product_id`),
  KEY `shape_id` (`shape_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

DROP TABLE IF EXISTS `product_sizes`;
CREATE TABLE IF NOT EXISTS `product_sizes` (
  `psi_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`psi_id`),
  KEY `product_id` (`product_id`),
  KEY `size_id` (`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shapes`
--

DROP TABLE IF EXISTS `shapes`;
CREATE TABLE IF NOT EXISTS `shapes` (
  `shape_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`shape_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shapes`
--

INSERT INTO `shapes` (`shape_id`, `name`, `status`) VALUES
(1, 'rectangle', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_cat_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

DROP TABLE IF EXISTS `sub_cate_products`;
CREATE TABLE IF NOT EXISTS `sub_cate_products` (
  `scp_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`scp_id`),
  KEY `product_id` (`product_id`),
  KEY `sub_cat_id` (`sub_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_cate_products`
--

INSERT INTO `sub_cate_products` (`scp_id`, `product_id`, `sub_cat_id`, `status`) VALUES
(1, 3, 12, 'active'),
(2, 3, 43, 'active'),
(3, 3, 40, 'active'),
(4, 3, 41, 'active'),
(5, 3, 47, 'active'),
(6, 3, 42, 'active'),
(7, 3, 48, 'active'),
(8, 4, 51, 'active'),
(9, 4, 31, 'active'),
(10, 4, 28, 'active'),
(11, 5, 12, 'active'),
(12, 5, 51, 'active'),
(13, 5, 43, 'active'),
(14, 5, 48, 'active'),
(15, 6, 12, 'active'),
(16, 6, 51, 'active'),
(17, 6, 17, 'active'),
(18, 6, 20, 'active'),
(19, 6, 43, 'active'),
(20, 6, 44, 'active'),
(21, 6, 41, 'active'),
(22, 6, 42, 'active'),
(23, 6, 47, 'active'),
(24, 6, 48, 'active'),
(25, 7, 12, 'active'),
(26, 7, 51, 'active'),
(27, 7, 17, 'active'),
(28, 7, 20, 'active'),
(29, 7, 43, 'active'),
(30, 7, 44, 'active'),
(31, 7, 41, 'active'),
(32, 7, 42, 'active'),
(33, 7, 47, 'active'),
(34, 7, 48, 'active'),
(35, 8, 12, 'active'),
(36, 8, 51, 'active'),
(37, 8, 17, 'active'),
(38, 8, 28, 'active'),
(39, 8, 44, 'active'),
(40, 8, 45, 'active'),
(41, 8, 41, 'active'),
(42, 8, 46, 'active'),
(43, 8, 49, 'active'),
(44, 9, 34, 'active'),
(45, 9, 17, 'active'),
(46, 9, 38, 'active'),
(47, 9, 39, 'active'),
(48, 9, 41, 'active'),
(49, 9, 42, 'active'),
(50, 9, 43, 'active'),
(51, 9, 44, 'active'),
(52, 9, 48, 'active'),
(53, 9, 50, 'active'),
(54, 9, 24, 'active'),
(55, 10, 12, 'active'),
(56, 10, 28, 'active'),
(57, 10, 42, 'active'),
(58, 10, 44, 'active'),
(59, 10, 50, 'active'),
(60, 10, 45, 'active'),
(61, 11, 27, 'active'),
(62, 11, 19, 'active'),
(63, 11, 12, 'active'),
(64, 11, 17, 'active'),
(65, 11, 38, 'active'),
(66, 11, 43, 'active'),
(67, 11, 39, 'active'),
(68, 11, 40, 'active'),
(69, 11, 41, 'active'),
(70, 11, 42, 'active'),
(71, 11, 48, 'active'),
(72, 11, 36, 'active'),
(73, 12, 23, 'active'),
(74, 12, 19, 'active'),
(75, 12, 12, 'active'),
(76, 12, 17, 'active'),
(77, 12, 38, 'active'),
(78, 12, 43, 'active'),
(79, 12, 39, 'active'),
(80, 12, 40, 'active'),
(81, 12, 41, 'active'),
(82, 12, 42, 'active'),
(83, 12, 48, 'active'),
(84, 12, 33, 'active'),
(85, 13, 22, 'active'),
(86, 13, 19, 'active'),
(87, 13, 12, 'active'),
(88, 13, 17, 'active'),
(89, 13, 38, 'active'),
(90, 13, 43, 'active'),
(91, 13, 39, 'active'),
(92, 13, 40, 'active'),
(93, 13, 41, 'active'),
(94, 13, 42, 'active'),
(95, 13, 48, 'active'),
(96, 13, 32, 'active'),
(97, 14, 15, 'active'),
(98, 14, 21, 'active'),
(99, 14, 31, 'active'),
(100, 14, 38, 'active'),
(101, 14, 43, 'active'),
(102, 14, 41, 'active'),
(103, 14, 42, 'active'),
(104, 14, 48, 'active'),
(105, 14, 44, 'active'),
(106, 14, 51, 'active'),
(107, 15, 15, 'active'),
(108, 15, 21, 'active'),
(109, 15, 31, 'active'),
(110, 15, 38, 'active'),
(111, 15, 43, 'active'),
(112, 15, 41, 'active'),
(113, 15, 42, 'active'),
(114, 15, 48, 'active'),
(115, 15, 44, 'active'),
(116, 15, 51, 'active'),
(117, 16, 15, 'active'),
(118, 16, 21, 'active'),
(119, 16, 31, 'active'),
(120, 16, 38, 'active'),
(121, 16, 43, 'active'),
(122, 16, 41, 'active'),
(123, 16, 42, 'active'),
(124, 16, 48, 'active'),
(125, 16, 44, 'active'),
(126, 16, 51, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Delight', 'Olarinde', 'delightolarinde@gmail.com', 'fdde6bc6b37521c3feff1dcf5f1ac0a6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Delight', 'Olarinde', 'olarindedelight@gmail.com', 'fdde6bc6b37521c3feff1dcf5f1ac0a6', '0000-00-00 00:00:00', '2021-03-09 15:07:25'),
(3, 'Delight', 'favour', 'oreswtux_afs12', 'b3b752713a6073ceb22c926f7c5497ca', '2021-03-09 15:10:42', '2021-03-09 15:10:42');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_colors_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
