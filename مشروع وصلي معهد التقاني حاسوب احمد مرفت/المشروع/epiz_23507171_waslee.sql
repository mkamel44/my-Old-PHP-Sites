-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql113.epizy.com
-- Generation Time: Apr 23, 2019 at 03:51 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23507171_waslee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` longtext NOT NULL,
  `admin_pass` longtext NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, '47bce5c74f589f4867dbd57e9ca9f808', '47bce5c74f589f4867dbd57e9ca9f808'),
(2, '4124bc0a9335c27f086f24ba207a4912', '4124bc0a9335c27f086f24ba207a4912'),
(3, 'a1', 'Ù‚ØºÙ Ø«Ù‚ØºÙØ«Ù‚ ÙØ«Ù‚ ÙØ«Ù‚ ÙØ«Ù‚Ù Ø«Ù‚ÙØ«Ù‚ÙØ«Ù‚ÙØ«Ù‚ ÙØ«Ù‚ ÙØ«Ù‚ ÙØ«Ù‚ÙØ«Ù‚ÙØ«Ù‚ ÙØ«Ù‚Ù Ø«Ù‚Ù'),
(4, 'a2', 'a2'),
(5, 'a3', 'a3'),
(6, 'a4', 'a4');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `basket_id` int(11) NOT NULL AUTO_INCREMENT,
  `basket_mob` int(11) NOT NULL,
  `basket_addr` text NOT NULL,
  PRIMARY KEY (`basket_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`basket_id`, `basket_mob`, `basket_addr`) VALUES
(22, 957582853, 'Ø§Ù„ÙØ±Ù‚Ø§Ù†'),
(21, 4543534, 'Ù„Ø¨ Ø³Ø¨Ø³Ø¨ Ø³Ø¨Ø³'),
(20, 2147483647, 'sf fs f sfs f sfs f sfs'),
(23, 992869322, 'Ø§Ù„ÙØ±Ù‚Ø§Ù† Ø¬Ø§Ù†Ø¨ Ø¯ÙˆØ§Ø± Ø§Ù„Ø´Ø±Ø·Ù‡'),
(24, 999062680, 'Ø§Ù„Ø­Ù…Ø¯Ø§Ù†ÙŠØ© Ø§Ù„Ø­ÙŠ Ø§Ù„Ø«Ø§Ù†ÙŠ'),
(25, 957582853, 'Ø§Ù„Ø­Ù…Ø¯Ø§Ù†ÙŠØ©\n'),
(26, 94545, 'ØªØ¤ØªØ¨ØªØº'),
(27, 969411205, 'Ø­Ù„Ø¨ Ø§Ù„Ø¬Ø¯ÙŠØ¯Ø© Ø¯ÙˆØ§Ø± Ø§Ù„Ù…ØªÙ†Ø¨ÙŠ');

-- --------------------------------------------------------

--
-- Table structure for table `basket_data`
--

CREATE TABLE IF NOT EXISTS `basket_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `basket_id` int(11) NOT NULL,
  `snack_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `basket_data`
--

INSERT INTO `basket_data` (`id`, `basket_id`, `snack_id`) VALUES
(21, 20, 7),
(20, 20, 8),
(22, 20, 6),
(23, 20, 4),
(24, 21, 9),
(25, 21, 9),
(26, 21, 9),
(27, 22, 9),
(28, 22, 8),
(29, 22, 8),
(30, 22, 6),
(31, 22, 7),
(32, 23, 8),
(33, 23, 7),
(34, 24, 8),
(35, 24, 4),
(36, 24, 6),
(37, 24, 9),
(38, 25, 9),
(39, 25, 8),
(40, 25, 7),
(41, 25, 6),
(42, 26, 7),
(43, 26, 4),
(44, 26, 6),
(45, 27, 4),
(46, 27, 7),
(47, 27, 6);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` text NOT NULL,
  `shop_place` text NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `shop_place`) VALUES
(12, 'ÙØ±ÙˆØ¬ Ø¨Ø±ÙƒØ§Øª', 'ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† ÙØ±Ù‚Ø§Ù† '),
(13, 'ÙØ±ÙˆØ¬ Ø§Ù„Ù‚Ù„Ø¹Ø©', 'Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© Ø§Ù„Ø£Ø¹Ø¸Ù…ÙŠØ© '),
(14, 'ÙØ±ÙˆØ¬ Ø§Ù„Ø³Ø¨Ø³Ø¨ÙŠ ', 'ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ØµÙ„Ø§Ø­ Ø§Ù„Ø¯ÙŠÙ† ');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE IF NOT EXISTS `snacks` (
  `snack_id` int(11) NOT NULL AUTO_INCREMENT,
  `snack_shop_id` int(11) NOT NULL,
  `snack_name` text NOT NULL,
  `snack_desc` text NOT NULL,
  `snack_pic` text NOT NULL,
  `snack_price` int(11) NOT NULL,
  PRIMARY KEY (`snack_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`snack_id`, `snack_shop_id`, `snack_name`, `snack_desc`, `snack_pic`, `snack_price`) VALUES
(4, 12, 'Ø³Ø¨Ø§ÙŠØ³ÙŠ', 'ØµØ¯Ø± Ø¯Ø¬Ø§Ø¬ ØŒ Ø¯Ø¨Ø³ ÙÙ„ÙŠÙÙ„Ø© ØŒ Ø­Ù„ÙŠØ¨ ØŒ Ù‚Ø±Ù†ÙÙ„ ØŒ Ø²Ù†Ø¬Ø¨ÙŠÙ„ Ù†Ø§Ø¹Ù… ØŒ Ø¨Ø§Ø¨Ø±ÙŠÙƒØ§ ØŒ Ø¨ÙŠÙƒÙ†Øº Ø¨ÙˆØ¯Ø± ØŒ Ø«ÙˆÙ… Ù…Ù‡Ø±ÙˆØ³ Ù†Ø§Ø¹Ù…', 'upload/index.jpg', 1500),
(6, 12, 'ÙˆØ¬Ø¨Ø© Ù‡Ù…Ø¨Ø±Ø¬Ø±', 'ØµØ¯Ø± Ø¯Ø¬Ø§Ø¬ ØŒ Ø¨Ø·Ø§Ø·Ø§ ØŒ Ø¬Ø¨Ù†Ø© Ø§Ù‚ÙˆØ§Ù† ØŒ ØµÙ…Ù†Ø©ØŒ Ø«ÙˆÙ… ØŒ Ù…ÙŠÙˆÙ†Ø²ØŒ ÙƒØ§ØªØ´Ø¨ ', 'upload/images-5-5.jpeg', 1500),
(7, 12, 'ÙˆØ¬Ø¨Ø© Ø´Ø§ÙˆØ±Ù…Ø§', 'ØµØ¯Ø± Ø¯Ø¬Ø§Ø¬ ØŒ Ø¯Ø¨Ø³ ÙÙ„ÙŠÙÙ„Ø© ØŒ ØµÙ…Ù† Ø§Ùˆ Ø®Ø¨Ø²ØŒ Ø²Ù†Ø¬Ø¨ÙŠÙ„ Ù†Ø§Ø¹Ù… ØŒ ØªØ¨Ù„Ø© Ø´Ø§ÙˆØ±Ù…Ø§ ØŒ Ø«ÙˆÙ… Ù…Ù‡Ø±ÙˆØ³ Ù†Ø§Ø¹Ù…', 'upload/hqdefault.jpg', 1800),
(8, 13, 'ÙƒØ±Ø³Ø¨ÙŠ', '3 Ø´Ø±Ø§Ø¦Ø­ ØµØ¯ÙˆØ± Ø¯Ø¬Ø§Ø¬ - 1 ÙƒÙˆØ¨ Ø²Ø¨Ø§Ø¯Ù‰ Ù…Ù†Ø²ÙˆØ¹ Ø§Ù„Ø¯Ø³Ù… - 1 ÙƒÙˆØ¨ Ù„Ø¨Ø§Ø¨Ø© Ø®Ø¨Ø² Ø¬Ø§ÙØ© - 1 ÙƒÙˆØ¨ Ø¯Ù‚ÙŠÙ‚ - 1/2 1 Ù…Ù„Ø¹Ù‚Ø© ØµØºÙŠØ±Ø© Ø¨Ù‡Ø§Ø±Ø§Øª\n', 'upload/sfsfsfs.jpg', 2200),
(9, 14, 'Ù…Ù†Ø³Ù ÙØ±ÙˆØ¬', '1 ÙƒÙŠÙ„Ùˆ Ù„Ø¨Ù† -  5 Ù…Ù„Ø¹Ù‚Ø© Ø¬Ù…ÙŠØ¯ ØªØ±ÙƒÙŠ Ø¨ÙˆØ¯Ø±Ø© 700 ØºØ±Ø§Ù… Ø£ÙØ®Ø§Ø° Ø¯Ø¬Ø§Ø¬ 2 Ø¨ØµÙ„Ø© Ù…Ù‚Ø·Ø¹Ø© Ù‚Ø·Ø¹ ÙƒØ¨ÙŠØ±Ø© ', 'upload/7d3443fd62897349135deac4ec46d24c065e8270.jpg', 7000),
(10, 15, 'ÙƒØ¨Ø© Ù…Ø´ÙˆÙŠØ© ', 'ÙƒÙŠÙ„Ùˆ Ø¨Ø±ØºÙ„ .2ÙƒÙŠÙ„Ùˆ Ù„Ø­Ù…Ø© .Ø¨ØµÙ„.Ù…ÙƒØ³Ø±Ø§Øª ', 'upload/22.jpg', 9000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
