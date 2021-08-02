-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql309.epizy.com
-- Generation Time: Oct 21, 2018 at 02:13 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_22865098_abilinew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` text NOT NULL,
  `admin_pass` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3'),
(2, '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `cards_id` int(11) NOT NULL AUTO_INCREMENT,
  `cards_name` text NOT NULL,
  `cards_pass` text NOT NULL,
  `cards_amount` int(11) NOT NULL,
  `cards_luk` text NOT NULL,
  `cards_messages` longtext NOT NULL,
  `cards_messages_new` text NOT NULL,
  PRIMARY KEY (`cards_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`cards_id`, `cards_name`, `cards_pass`, `cards_amount`, `cards_luk`, `cards_messages`, `cards_messages_new`) VALUES
(1, 'b59c67bf196a4758191e42f76670ceba', 'b59c67bf196a4758191e42f76670ceba', 10000, 'true', 'Ù…Ø±Ø­Ø¨Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§\nØ´Ù„ÙˆÙ†Ùƒ\nØ¨Ù„Ø§Ø¨Ù„Ø§Ø¨Ù„Ø§Ø¨Ù„Ø§Ø¨Ù„Ø§ Ø¨Ù„Ø§ Ø¨Ø§Ø¨ Ø§Ø¨ Ø¨Ù„ÙŠØ¨Ù„ ÙŠØ¨Ù„\nÙŠ Ø¨ÙŠØ³ Ø¨Ø³ÙŠØ¨ Ø³ÙŠØ¨Ø³ÙŠ\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `phones_id` int(11) NOT NULL AUTO_INCREMENT,
  `phones_card_id` int(11) NOT NULL,
  `phones_number` text NOT NULL,
  `phones_units` int(11) NOT NULL,
  `phones_price` int(11) NOT NULL,
  `phones_date_of_req` datetime NOT NULL,
  `phones_date_of_res` datetime NOT NULL,
  `phones_done` longtext NOT NULL,
  PRIMARY KEY (`phones_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`phones_id`, `phones_card_id`, `phones_number`, `phones_units`, `phones_price`, `phones_date_of_req`, `phones_date_of_res`, `phones_done`) VALUES
(4, 1, '43534543', 90, 100, '2018-10-16 11:08:25', '2018-10-20 12:21:55', 'false'),
(3, 1, '43534', 40, 50, '2018-10-16 10:47:27', '2018-10-20 12:21:57', 'true'),
(5, 1, '43534543', 90, 100, '2018-10-16 11:08:25', '2018-10-20 12:31:23', 'false'),
(6, 1, '4554545', 150, 175, '2018-10-10 00:00:00', '2018-10-20 12:31:22', 'false'),
(7, 1, '2147483647', 90, 100, '2018-10-17 10:00:06', '2018-10-20 12:31:21', 'false'),
(8, 1, '5645645', 40, 50, '2018-10-17 10:00:06', '2018-10-20 12:31:20', 'false'),
(9, 1, '2147483647', 90, 100, '2018-10-17 10:00:06', '2018-10-20 12:21:42', 'true'),
(10, 1, '956303934', 450, 500, '2018-10-17 10:33:47', '2018-10-20 12:21:36', 'true'),
(11, 1, '956302923', 100, 115, '2018-10-17 10:33:47', '2018-10-20 12:21:28', 'false'),
(12, 1, '0956302923', 90, 100, '2018-10-17 11:17:30', '2018-10-20 12:21:23', 'true'),
(13, 1, '0956302923', 90, 100, '2018-10-18 12:39:51', '2018-10-20 12:21:19', 'true'),
(14, 1, '0956302923', 65, 75, '2018-10-19 03:48:02', '2018-10-20 12:21:16', 'false'),
(15, 1, '095630292', 90, 100, '2018-10-20 13:53:18', '2018-10-20 13:54:04', 'false'),
(16, 1, '7686786786', 90, 100, '2018-10-20 13:53:18', '2018-10-20 13:59:02', 'true'),
(17, 1, '0956302923', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:04:00', 'false'),
(18, 1, '0956302923', 500, 550, '2018-10-20 14:03:29', '2018-10-20 14:04:47', 'true'),
(19, 1, '4564564564', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:04:51', 'true'),
(20, 1, '9007686786', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:05:52', 'true'),
(21, 1, '5464564564', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:05:50', 'true'),
(22, 1, '4353454564', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:05:48', 'true'),
(23, 1, '5464564564', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:05:47', 'true'),
(24, 1, '4564564564', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:05:46', 'true'),
(25, 1, '4564564564', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:05:45', 'true'),
(26, 1, '5464645645', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:05:42', 'true'),
(27, 1, '4564564564', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:05:43', 'true'),
(28, 1, '4564564564', 900, 1000, '2018-10-20 14:03:29', '2018-10-20 14:06:26', 'false'),
(29, 1, '544564', 300, 325, '2018-10-20 14:19:05', '2018-10-20 14:20:08', 'true'),
(30, 1, '453453445', 500, 550, '2018-10-21 10:33:43', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
