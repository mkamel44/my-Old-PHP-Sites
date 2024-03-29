-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `basket_data`;
CREATE TABLE `basket_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `card_id` int(11) NOT NULL,
  `snack_name` text NOT NULL,
  `snack_desc` longtext NOT NULL,
  `booking_time` datetime NOT NULL,
  `snack_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `basket_data` (`id`, `card_id`, `snack_name`, `snack_desc`, `booking_time`, `snack_price`) VALUES
(1,	1,	'fg fgsg gs g',	' fg fg gf gf gf',	'2019-05-05 02:26:34',	1000),
(2,	2,	'fg fgsg gs g',	' fg fg gf gf gf',	'2019-05-21 16:09:53',	1000),
(3,	2,	'fg fgsg gs g',	' fg fg gf gf gf',	'2019-05-21 16:10:50',	1000),
(4,	2,	'fg fgsg gs g',	' fg fg gf gf gf',	'2019-05-21 16:10:50',	1000),
(5,	2,	'sfg sfs fs',	'f gfgf gf gfg',	'2019-05-21 16:10:50',	10000),
(6,	3,	'Ø¹Ù„Ø¨Ø© ÙƒØ¨Ø±ÙŠØª',	'Ø¹Ù„Ø¨Ø© ÙƒØ¨ÙŠØ±ÙŠØª Ù‚Ø§Ø¨Ù„ Ù„Ù„Ø§Ø´ØªØ¹Ø§Ù„ Ø¹Ø¯Ø¯ 12',	'2019-07-05 10:19:45',	300),
(7,	3,	'Ø¹Ù„Ø¨Ø© ÙƒØ¨Ø±ÙŠØª',	'Ø¹Ù„Ø¨Ø© ÙƒØ¨ÙŠØ±ÙŠØª Ù‚Ø§Ø¨Ù„ Ù„Ù„Ø§Ø´ØªØ¹Ø§Ù„ Ø¹Ø¯Ø¯ 12',	'2019-07-05 10:19:45',	300),
(26,	3,	'Ø¨Ù„Ø§Ùƒ',	'Ø¨Ù„Ø§Ùƒ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 17:31:23',	1000),
(25,	3,	'Ø¨Ù„Ø§Ùƒ',	'Ø¨Ù„Ø§Ùƒ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 17:31:23',	1000),
(24,	3,	'Ø¨Ù„Ø§Ùƒ',	'Ø¨Ù„Ø§Ùƒ ÙØ¶Ø©',	'2019-07-08 17:31:23',	20000),
(22,	3,	'Ø¬Ø§ÙƒÙŠØª',	'Ø¬Ø§ÙƒÙŠØª Ø´Ø¨Ø§Ø¨ÙŠ ÙƒØªØ§Ù†',	'2019-07-08 17:31:23',	20000),
(23,	3,	'Ø¨Ù†Ø·Ø§Ù„',	'Ø¨Ù†Ø·Ø§Ù„ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 17:31:23',	10000),
(27,	3,	'Ø¨Ù„Ø§Ùƒ',	'Ø¨Ù„Ø§Ùƒ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 17:31:23',	1000),
(28,	3,	'Ø¬Ø§ÙƒÙŠØª',	'Ø¬Ø§ÙƒÙŠØª Ø´Ø¨Ø§Ø¨ÙŠ ÙƒØªØ§Ù†',	'2019-07-08 17:34:14',	20000),
(29,	3,	'Ø¨Ù†Ø·Ø§Ù„',	'Ø¨Ù†Ø·Ø§Ù„ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 17:34:14',	10000),
(30,	3,	'Ø¨Ù†Ø·Ø§Ù„',	'Ø¨Ù†Ø·Ø§Ù„ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 17:34:14',	10000),
(31,	2,	'Ø¬Ø§ÙƒÙŠØª',	'Ø¬Ø§ÙƒÙŠØª Ø¬Ù„Ø¯ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 18:06:22',	20000),
(32,	3,	'Ø´Ù…Ø³ÙŠØ©',	'Ø´Ù…Ø³ÙŠØ© Ù†ÙˆØ¹ Ø§ÙˆÙ„',	'2019-07-08 18:06:28',	3000),
(33,	3,	'Ø¨Ù„Ø§Ùƒ',	'Ø¨Ù„Ø§Ùƒ ÙØ¶Ø©',	'2019-07-08 18:06:28',	20000),
(34,	3,	'Ø¨Ù„Ø§Ùƒ',	'Ø¨Ù„Ø§Ùƒ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 18:06:28',	1000),
(35,	3,	'Ø¬Ø§ÙƒÙŠØª',	'Ø¬Ø§ÙƒÙŠØª Ø¬Ù„Ø¯ Ø±Ø¬Ø§Ù„ÙŠ',	'2019-07-08 19:08:36',	20000);

DROP TABLE IF EXISTS `card`;
CREATE TABLE `card` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `balance` int(10) NOT NULL,
  `remaining_balance` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `card` (`id`, `code`, `password`, `customer_name`, `balance`, `remaining_balance`) VALUES
(1,	'1',	'1',	'Ù…Ø­Ù…Ø¯',	20000,	0),
(3,	'3',	'3',	'anwer',	1000000,	661400),
(4,	'23',	'22539',	'',	50000,	50000),
(5,	'22',	'22538',	'',	100000,	100000),
(6,	'21',	'22537',	'',	150000,	150000),
(7,	'20',	'22536',	'',	200000,	200000);

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `department` text NOT NULL,
  `price` int(10) NOT NULL,
  `information` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `department` (`id`, `department`, `price`, `information`) VALUES
(1,	'Ù…Ø±Ø§Ø¬ÙŠØ­',	500,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø§Ù„Ù…Ø±Ø§Ø¬ÙŠØ­'),
(2,	'Ø²Ø­Ù„ÙŠØ·Ø§Øª',	500,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø²Ø­Ù„ÙŠØ·Ø§Øª'),
(3,	'Ø³ÙÙŠÙ†Ø©',	500,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ø³ÙÙŠÙ†Ø©'),
(4,	'Ù‚Ù„Ø§Ø¨Ø§Øª',	500,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù‚ÙŠ Ù„Ø¹Ø¨Ø© Ù‚Ù„Ø§Ø¨Ø§Øª'),
(5,	'4',	1000,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… ÙÙŠ Ù…Ø³Ø¨Ø­ Ø§Ù„Ø§Ù†Ø§Ø«'),
(6,	'5',	1000,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… ÙÙŠ Ù…Ø³Ø¨Ø­ Ø§Ù„Ø°ÙƒÙˆØ±'),
(7,	'6',	1000,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… ÙÙŠ Ù…Ø³Ø¨Ø­ Ø§Ù„ØºØ§Ø¦Ù„Ø§Øª'),
(8,	'ÙƒÙØªØ±ÙŠØ§',	1000,	'ÙƒÙØªØ±ÙŠØ§'),
(9,	'Ù…Ø·Ø§Ø¹Ù…',	2000,	'Ù…Ø·Ø§Ø¹Ù…'),
(10,	' ØµØ§Ù„Ø© Ø§Ù„Ø¨Ù„ÙŠØ§Ø±Ø¯Ùˆ',	2000,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… ÙÙŠ ØµØ§Ù„Ø© Ø§Ù„Ø¨Ù„ÙŠØ§Ø±Ø¯Ùˆ'),
(11,	'Ù…Ù„Ø§Ø¹Ø¨ ÙƒØ±Ø© Ø§Ù„Ù‚Ø¯Ù…',	5000,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… ÙÙŠ Ù…Ù„Ø§Ø¹Ø¨ ÙƒØ±Ø© Ø§Ù„Ù‚Ø¯Ù…'),
(12,	'ÙƒØ±Ø© Ø§Ù„Ø³Ù„Ø©',	1000,	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… Ù…Ù„Ø§Ø¹Ø¨ ÙƒØ±Ø© Ø§Ù„Ø³Ù„Ø©'),
(13,	'ØµØ§Ù„Ø© Ø¨Ù„ÙŠ Ø³ØªÙŠØ´Ù†',	2000,	'ØµØ§Ù„Ø© Ø¨Ù„ÙŠ Ø³ØªÙŠØ´Ù† ØªØ±Ø­Ø¨ Ø¨ÙƒÙ…'),
(14,	'Ø®Ù…Ø³Ø© Ù†Ø¬ÙˆÙ… ØºØ±ÙØ© Ù…Ø²ÙˆØ¬Ø©',	20000,	'Ø®Ù…Ø³Ø© Ù†Ø¬ÙˆÙ… ØºØ±ÙØ© Ù…Ø²ÙˆØ¬Ø©'),
(15,	'Ø®Ù…Ø³Ø© Ù†Ø¬ÙˆÙ… ØºØ±ÙØ© Ù…ÙØ±Ø¯Ø©',	15000,	'Ø®Ù…Ø³Ø© Ù†Ø¬ÙˆÙ… ØºØ±ÙØ© Ù…ÙØ±Ø¯Ø©'),
(16,	'Ø«Ù„Ø§Ø« Ù†Ø¬ÙˆÙ… ØºØ±ÙØ© Ù…Ø²ÙˆØ¬Ø©',	10000,	'Ø«Ù„Ø§Ø« Ù†Ø¬ÙˆÙ… ØºØ±ÙØ© Ù…Ø²ÙˆØ¬Ø©'),
(17,	'Ø«Ù„Ø§Ø« Ù†Ø¬ÙˆÙ… ØºØ±ÙØ© Ù…ÙØ±Ø¯Ø©',	7500,	'Ø«Ù„Ø§Ø« Ù†Ø¬ÙˆÙ… ØºØ±ÙØ© Ù…ÙØ±Ø¯Ø©'),
(18,	'Ù†Ø¬Ù…Ø© ÙˆØ§Ø­Ø¯Ø©',	2000,	'Ù†Ø¬Ù…Ø© ÙˆØ§Ø­Ø¯Ø©'),
(19,	'Ù†Ø¬Ù…Ø© ÙˆØ§Ø­Ø¯Ø©',	2000,	'Ù†Ø¬Ù…Ø© ÙˆØ§Ø­Ø¯Ø©');

DROP TABLE IF EXISTS `game_swimming`;
CREATE TABLE `game_swimming` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `price` int(5) NOT NULL,
  `booking_date` datetime NOT NULL,
  `done` text NOT NULL,
  `approval` text NOT NULL,
  `card_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `game_swimming` (`id`, `department_id`, `price`, `booking_date`, `done`, `approval`, `card_id`) VALUES
(43,	3,	1000,	'2019-05-04 18:14:00',	'false',	'true',	2),
(40,	1,	1000,	'2019-05-04 10:28:00',	'',	'false',	1),
(33,	1,	1000,	'2019-05-01 18:58:00',	'true',	'true',	1),
(39,	9,	1000,	'2019-05-03 16:01:00',	'false',	'true',	1),
(38,	8,	4000,	'2019-05-03 16:00:00',	'true',	'true',	1),
(37,	5,	5000,	'2019-05-02 10:15:00',	'',	'false',	1),
(35,	5,	5000,	'2019-05-02 10:15:00',	'',	'false',	1),
(34,	1,	1000,	'2019-05-02 10:02:00',	'',	'false',	1),
(42,	3,	1000,	'2019-05-04 17:30:00',	'true',	'true',	2),
(36,	5,	5000,	'2019-05-02 10:17:00',	'',	'false',	1),
(32,	5,	5000,	'2019-04-30 20:10:00',	'true',	'true',	1),
(31,	4,	1000,	'2019-04-28 19:19:00',	'true',	'true',	1),
(41,	1,	1000,	'2019-05-04 17:29:00',	'',	'false',	2),
(30,	3,	1000,	'2019-04-28 19:19:00',	'true',	'true',	1),
(29,	2,	1000,	'2019-04-28 19:19:00',	'',	'false',	1),
(28,	1,	1000,	'2019-04-28 19:19:00',	'',	'false',	1),
(44,	5,	5000,	'2019-05-04 18:20:00',	'',	'true',	2),
(45,	8,	4000,	'2019-05-04 22:30:00',	'true',	'true',	2),
(46,	8,	4000,	'2019-05-04 22:37:00',	'',	'false',	2),
(47,	7,	15000,	'2019-05-25 23:08:00',	'',	'',	2),
(48,	7,	15000,	'2019-05-25 23:08:00',	'',	'',	2),
(49,	7,	15000,	'2019-05-25 23:08:00',	'',	'',	2),
(50,	6,	10000,	'2019-05-23 01:02:00',	'',	'',	3),
(51,	6,	10000,	'2019-05-23 01:02:00',	'',	'',	3),
(52,	6,	10000,	'2019-05-23 01:02:00',	'',	'',	3),
(53,	6,	10000,	'2019-05-23 01:02:00',	'',	'',	3),
(54,	6,	10000,	'2019-05-23 01:02:00',	'',	'true',	3),
(55,	6,	10000,	'2019-05-23 01:02:00',	'',	'',	3),
(56,	6,	10000,	'2019-05-23 01:02:00',	'',	'true',	3),
(57,	6,	10000,	'2019-05-23 01:02:00',	'',	'',	3),
(58,	6,	10000,	'2019-05-23 01:02:00',	'false',	'true',	3),
(59,	6,	10000,	'2019-05-23 01:02:00',	'true',	'true',	3),
(60,	5,	1000,	'2019-06-17 12:32:00',	'',	'',	3),
(61,	5,	1000,	'2019-06-18 20:40:00',	'',	'true',	2),
(62,	5,	1000,	'2019-06-18 20:40:00',	'',	'true',	2),
(63,	5,	1000,	'2019-06-18 20:40:00',	'',	'true',	2),
(64,	5,	1000,	'2019-06-18 20:40:00',	'',	'true',	2),
(65,	5,	1000,	'2019-06-18 20:40:00',	'',	'true',	2);

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE `hotel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `night_num` int(2) NOT NULL,
  `done` text NOT NULL,
  `approval` text NOT NULL,
  `price` int(5) NOT NULL,
  `card_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `hotel` (`id`, `department_id`, `booking_date`, `night_num`, `done`, `approval`, `price`, `card_id`) VALUES
(2,	14,	'2019-05-04 19:12:00',	2,	'true',	'true',	1000,	2),
(3,	14,	'2019-05-04 22:15:00',	5,	'',	'false',	1000,	2),
(4,	14,	'2019-05-04 22:15:00',	5,	'',	'false',	1000,	2),
(5,	14,	'2019-05-04 22:15:00',	5,	'',	'false',	1000,	2),
(6,	14,	'2019-05-05 17:27:00',	1,	'',	'true',	1000,	1),
(7,	14,	'2019-07-23 01:00:00',	10,	'',	'',	1000,	3);

DROP TABLE IF EXISTS `imgs`;
CREATE TABLE `imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `depa` text NOT NULL,
  `data_text` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `imgs` (`id`, `img`, `depa`, `data_text`) VALUES
(34,	'../../upload/7083416-284525126.jpg',	'2',	''),
(30,	'../../upload/maxresdefault.jpg',	'1',	''),
(53,	'../../upload/753-5020Sheraton-estaurant.JPEG',	'3',	''),
(38,	'../../upload/506x900-1_-f629E-8Ud5DH28.jpg',	'4',	''),
(48,	'../../upload/3995016-581504883.jpg',	'5',	''),
(27,	'../../upload/aee7fd395744d5be4d5601f7f267be4a.jpg',	'1',	''),
(28,	'../../upload/Ù†Ø§Ø±Ø§Ø±Ø±Ù‰.jpg',	'1',	''),
(29,	'../../upload/521.jpg',	'1',	''),
(31,	'../../upload/ØªØ±ØªØ¤ØªÙ„ØªØ¤.jpg',	'1',	''),
(32,	'../../upload/Ù„Ø§Ø§Ø±ØªÙ„Ø¤.jpg',	'1',	''),
(33,	'../../upload/Ø­Ø¯ÙŠÙ‚Ø©-Ø£Ù„Ø¹Ø§Ø¨-ÙˆÙ„Ø§ÙŠØ©-Ø³Ø·ÙŠÙ-.-.-.-Ù„Ø¹Ø¨Ø©-Ø³ÙÙŠÙ†Ø©-Ø§Ù„Ù‚Ø±Ø§ØµÙ†Ø©-390x220.jpg',	'1',	'ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„ÙŠØ¨ Ù„Ø¨Ù„ Ø§Ø¨Ø§ Ø§ Ø§ Ø¨Ù„'),
(35,	'../../upload/Ø´Ø±ÙƒØ©-ØªÙ†Ø¸ÙŠÙ-Ù…Ø³Ø§Ø¨Ø­-Ø¨Ø¬Ø¯Ø©-660x330.jpg',	'2',	''),
(36,	'../../upload/imagesØ³Ø³Ø³.jpg',	'2',	''),
(37,	'../../upload/p-gianicolo-hotel-pools-rome_54_990x660_201404251552.jpeg',	'2',	''),
(39,	'../../upload/131316ÙƒØ©Ù….jpg',	'4',	''),
(40,	'../../upload/131316ÙƒØ©Ù….jpg',	'4',	''),
(41,	'../../upload/144755_2013_04_02_12_56_37.jpg',	'4',	''),
(42,	'../../upload/20181223-200505-largejpg.jpg',	'4',	''),
(43,	'../../upload/pvc-spor-zemin_16.jpg',	'4',	''),
(44,	'../../upload/Ø´Ø³ÙŠØ³Ø´ÙŠØ´ÙŠØ¦Ø¡.jpg',	'4',	''),
(45,	'../../upload/Ù‚Ø§Ù†ÙˆÙ†_Ù„Ø¹Ø¨Ø©_Ø§Ù„Ø¨Ù„ÙŠØ§Ø±Ø¯Ùˆ.jpg',	'4',	''),
(46,	'../../upload/Ø³Ø´Ø´Ø´Ø´Ø´.jpg',	'4',	''),
(47,	'../../upload/144755_2013_04_02_12_56_37.jpg',	'4',	''),
(49,	'../../upload/aahtam5.gif',	'5',	''),
(50,	'../../upload/aahtam5.gif',	'5',	''),
(51,	'../../upload/aahtam5.gif',	'5',	''),
(52,	'../../upload/pl21074486-hilton_hospitality_room_5_star_hotel_bedroom_furniture_china_manufacturer.jpg',	'5',	''),
(54,	'../../upload/5632716-1403418829.jpg',	'3',	''),
(55,	'../../upload/DBWqKDfXgAAOO61.jpg',	'3',	''),
(56,	'../../upload/Ø§Ø¨ÙÙŠØ§Ù„ØªØ§Ø±ØªØ§Ø¨ØºØª.jpg',	'3',	''),
(57,	'../../upload/thumb.php.jpg',	'3',	'');

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `data` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `news` (`id`, `title`, `data`) VALUES
(8,	'Ø­ÙÙ„Ø© Ø¬ÙˆØ±Ø¬ ÙˆØ³ÙˆÙ ',	'Ø¨Ø¹Ø¯ Ø£Ù† Ø§Ø´ØªÙ‡Ø± Ø¬ÙˆØ±Ø¬ ÙˆØ³ÙˆÙ Ø¨Ø¯Ø£Øª Ø§Ù„Ø¹Ø±ÙˆØ¶ ØªÙ†Ù‡Ø§Ù„ Ø¹Ù„ÙŠÙ‡ ÙÙŠ Ø¯Ù…Ø´Ù‚ ÙˆÙ‡Ùˆ ÙÙŠ Ø¨Ø¯Ø§ÙŠØ© Ø§Ù„Ø¹Ù‚Ø¯ Ø§Ù„Ø«Ø§Ù†ÙŠ Ù…Ù† Ø¹Ù…Ø±Ù‡. ÙˆØ­Ù‚Ù‚ Ø´Ù‡Ø±Ø© ÙƒØ¨ÙŠØ±Ø© ÙˆØ¹Ø±Ø¶ Ø¹Ù„ÙŠÙ‡ Ø£Ù† ÙŠØ³Ø§ÙØ± Ø¥Ù„Ù‰ Ù„Ø¨Ù†Ø§Ù† ÙˆÙ‡Ùˆ Ù„Ø§ ÙŠØªØ¬Ø§ÙˆØ² Ø§Ù„Ø³Ø§Ø¯Ø³Ø© Ø¹Ø´Ø± Ù…Ù† Ø¹Ù…Ø±Ù‡ØŒ ÙÙˆØ§ÙÙ‚ Ø¹Ù„Ù‰ Ø§Ù„ÙÙˆØ±ØŒ ÙˆÙŠÙ‚Ø§Ù„ Ø£Ù†Ù‡ Ù‚Ø§Ù„: \"Ù„Ù‚Ø¯ Ù†Ù…Øª Ø¹Ù„Ù‰ Ø§Ù„Ø£Ø±ØµÙØ© Ù…Ù† Ø£Ø¬Ù„ ÙÙ†ÙŠ\".<br>\n<br>\nØ¨Ø¹Ø¯ Ø°ÙŠØ§Ø¹ ØµÙŠØªÙ‡ ÙÙŠ Ø£Ø±Ø¬Ø§Ø¡ Ù„Ø¨Ù†Ø§Ù† Ø§Ù†Ù‡Ø§Ù„Øª Ø¹Ù„ÙŠÙ‡ Ø§Ù„Ø¯Ø¹ÙˆØ§Øª Ù„Ø¥Ø­ÙŠØ§Ø¡ Ø­ÙÙ„Ø§Øª ÙÙŠ Ø§Ù„Ù…Ù‚Ø§Ù‡ÙŠ Ø§Ù„Ù„ÙŠÙ„ÙŠØ© ÙˆØ§Ù„ÙÙ†Ø§Ø¯Ù‚ Ø§Ù„ÙØ®Ù…Ø©. ÙÙ…Ø§ ÙƒØ§Ù† Ù…Ù† Ø§Ù„ÙÙ†Ø§Ù† Ø¬ÙˆØ±Ø¬ ÙŠØ²Ø¨Ùƒ Ø¥Ù„Ø§ Ø£Ù† Ø¶Ù… Ø¬ÙˆØ±Ø¬ ÙˆØ³ÙˆÙ Ù„ÙŠØ±Ø¹Ø§Ù‡ ÙˆØ£Ø¨Ø¯Ù‰ Ø¥Ø¹Ø¬Ø§Ø¨Ù‡ Ø¨Ù‡Ø°Ø§ \"Ø§Ù„ØµÙˆØª Ø§Ù„Ù…ÙˆÙ‡ÙˆØ¨\" ÙˆÙ‚Ø¯ Ù‚Ø¯Ù… Ù„Ù‡ Ø£Ù„Ø­Ø§Ù†Ø§Ù‹ Ù…Ù† Ø£Ù„Ø­Ø§Ù†Ù‡ ÙˆÙƒØ°Ù„Ùƒ ÙØ¹Ù„ Ø§Ù„ÙÙ†Ø§Ù† ÙˆØ¯ÙŠØ¹ Ø§Ù„ØµØ§ÙÙŠ.\n\nØ£ÙˆÙ„Ù‰ Ø­ÙÙ„Ø§ØªÙ‡ ÙƒØ§Ù†Øª ÙÙŠ Ø£Ø­Ø¯ ÙÙ†Ø§Ø¯Ù‚ Ø¹Ø§Ù„ÙŠØ© Ø§Ù„ÙƒØ¨ÙŠØ±Ø©Ø› ÙˆØ£Ø®Ø° ÙŠÙ‚Ø¯Ù… Ø§Ù„Ø­ÙÙ„Ø§Øª ÙÙŠ Ø³ÙˆØ±ÙŠØ§ ÙˆÙÙŠ Ù„Ø¨Ù†Ø§Ù† ÙˆØ£Ø·Ù„Ù‚ Ø¹Ù„ÙŠÙ‡ Ù„Ù‚Ø¨ Ø§Ù„Ù…Ø·Ø±Ø¨ Ø§Ù„Ù…Ø¹Ø¬Ø²Ø© Ø£Ùˆ \"Ø§Ù„Ø·ÙÙ„ Ø§Ù„Ù…Ø¹Ø¬Ø²Ø© \". ÙÙŠ Ø¨Ø¯Ø§ÙŠØ© Ø§Ø­ØªØ±Ø§ÙÙ‡ ØºÙ†Ù‘Ù‰ Ù„Ù„ÙƒØ¨Ø§Ø± Ù…Ø«Ù„ Ø¹Ø¨Ø¯ Ø§Ù„Ø­Ù„ÙŠÙ… Ø­Ø§ÙØ¸ Ø£Ù… ÙƒÙ„Ø«ÙˆÙ… ÙˆÙˆØ¯ÙŠØ¹ Ø§Ù„ØµØ§ÙÙŠ. ÙˆÙÙŠ Ù…Ø·Ù„Ø¹ Ø§Ù„ØªØ³Ø¹ÙŠÙ†Ø§Øª Ù…Ù† Ø§Ù„Ù‚Ø±Ù† Ø§Ù„Ù…Ù†ØµØ±Ù… ØºÙ†Ù‰ Ø£ØºÙ†ÙŠØ© ÙƒØ§Ø¸Ù… Ø§Ù„Ø³Ø§Ù‡Ø± ÙˆØ§Ù„ØªÙŠ ØªÙ†Ø§Ø³Ø¨Øª ÙˆØ®Ø§Ù…Ø© ØµÙˆØªÙ‡ ÙˆØ£Ø³Ù„ÙˆØ¨Ù‡ ÙÙŠ Ø§Ù„Ø·Ø±Ø¨ ÙˆÙ‡ÙŠ Ø£ØºÙ†ÙŠØ© Ø³Ù„Ù…ØªÙƒ Ø¨ÙŠØ¯ Ø§Ù„Ù„Ù‡. ÙˆØ¨Ø¹Ø¯Ù‡Ø§ Ø§Ù†ØªØ´Ø± Ø£ÙƒØ«Ø± ÙØ£ÙƒØ«Ø± Ø¨ÙØ¶Ù„ Ø£ØºØ§Ù†ÙŠÙ‡ Ø§Ù„Ø®Ø§ØµØ© Ù…Ø«Ù„: Ø§Ù„Ø­Ø¨Ø§ÙŠØ¨ØŒ Ø¯Ù‚ÙŠØª Ø¹Ù„Ù‰ Ø§Ù„Ø£Ø¨ÙˆØ§Ø¨ØŒ Ø­Ù„Ù Ø§Ù„Ù‚Ù…Ø±ØŒ Ø¨ØªØ¹Ø§ØªØ¨Ù†ÙŠ Ø¹Ù„Ù‰ ÙƒÙ„Ù…Ø©... ÙˆØ¬Ù…ÙŠØ¹Ù‡Ø§ Ù…Ù† ØªÙ„Ø­ÙŠÙ† ÙƒØ¨Ø§Ø± Ø§Ù„Ù…ÙˆØ³ÙŠÙ‚ÙŠÙŠÙ† Ù…Ù† Ø¨Ù„ÙŠØº Ø­Ù…Ø¯ÙŠØŒ Ø²Ù‡ÙŠØ± Ø¹ÙŠØ³Ø§ÙˆÙŠØŒ Ù†ÙˆØ± Ø§Ù„Ù…Ù„Ø§Ù‘Ø­ØŒ Ø´Ø§ÙƒØ± Ø§Ù„Ù…ÙˆØ¬ÙŠØŒ Ø³ÙŠÙ‘Ø¯ Ù…ÙƒÙ‘Ø§ÙˆÙŠØŒ ÙƒØ§Ù† Ø¬ÙˆØ±Ø¬ ÙˆØ³ÙˆÙ Ù…Ù„ØªØ²Ù…Ø§ Ø¨Ø§Ù„Ø£ØµØ§Ù„Ø© Ø§Ù„Ù…ÙˆØ³ÙŠÙ‚ÙŠØ© Ø§Ù„Ø´Ø±Ù‚ÙŠØ©ØŒ ÙˆÙ„Ø§ ÙŠÙ‡ØªÙ… Ø¨ÙƒØ«Ø±Ø© Ø§Ù„Ø¥Ù†ØªØ§Ø¬.\n\nØªØ¬Ø§ÙˆØ² Ù†Ø´Ø§Ø· Ø¬ÙˆØ±Ø¬ ÙˆØ³ÙˆÙ Ø§Ù„ÙÙ†Ù‘ÙŠ Ø­Ø¯ÙˆØ¯ Ø¨Ù„Ø§Ø¯Ù‡ Ø³ÙˆØ±ÙŠØ§Ø› ÙÙ‚Ø¯ Ø£Ù‚Ø§Ù… Ø­ÙÙ„Ø§Øª ÙÙŠ Ø¬Ù…ÙŠØ¹ Ø£Ù†Ø­Ø§Ø¡ Ø§Ù„Ø¹Ø§Ù„Ù… Ø§Ù„Ø¹Ø±Ø¨ÙŠØŒ Ø£ÙˆØ±ÙˆØ¨Ø§ØŒ Ø£Ù…Ø±ÙŠÙƒØ§ØŒ ÙƒÙ†Ø¯Ø§ ÙˆØ£Ø³ØªØ±Ø§Ù„ÙŠØ§. ÙˆÙÙŠ Ø¹Ø§Ù… 1985 ØºÙ†Ù‘Ù‰ ÙÙŠ Ù…Ù‡Ø±Ø¬Ø§Ù† Ù‚Ø±Ø·Ø§Ø¬ ÙÙŠ ØªÙˆÙ†Ø³ Ø£Ù…Ø§Ù… 15 Ø§Ù„Ù Ù…Ù† Ø¹Ø´Ù‘Ø§Ù‚Ù‡ØŒ ÙˆÙ‚Ø¯Ù… Ø±ÙŠØ¹ Ø§Ù„Ø­ÙÙ„Ø© Ù„Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„Ø®ÙŠØ±ÙŠÙ‘Ø©. <br>\nØ³Ø¹Ø± Ø§Ù„Ø¨Ø·Ø§Ù‚Ø© 25000 ÙˆØ´ÙƒØ±Ø§Ù‹\n'),
(9,	'Ø­ÙÙ„Ø© Ù†Ø§Ù†Ø³ÙŠ Ø¹Ø¬Ø±Ù… ',	'Ù†Ø§Ù†Ø³ÙŠ Ù†Ø¨ÙŠÙ„ Ø¹Ø¬Ø±Ù… Ù‡ÙŠ Ù…ØºÙ†ÙŠØ© Ù„Ø¨Ù†Ø§Ù†ÙŠØ© (Ù…Ù† Ù…ÙˆØ§Ù„ÙŠØ¯ 16 Ù…Ø§ÙŠÙˆ 1983 - Ù‚Ø±ÙŠØ© Ø³Ù‡ÙŠÙ„Ø©ØŒ Ø¨Ù…Ø­Ø§ÙØ¸Ø© Ø¬Ø¨Ù„ Ù„Ø¨Ù†Ø§Ù†) Ø­Ø§ØµÙ„Ø© Ø¹Ù„Ù‰ Ø¬ÙˆØ§Ø¦Ø² Ø¨Ù„Ø§ØªÙŠÙ†ÙŠØ© Ù…ØªØ¹Ø¯Ø¯Ø© ÙˆÙØ§Ø¦Ø²Ø© Ø¨Ø«Ù„Ø§Ø« Ø¬ÙˆØ§Ø¦Ø² Ù…ÙˆØ³ÙŠÙ‚Ù‰ Ø¹Ø§Ù„Ù…ÙŠØ©Ø› ØªØ´ØªÙ‡Ø± Ø¨Ø£ØºØ§Ù†ÙŠÙ‡Ø§ Ø§Ù„Ù…ØµÙˆØ±Ø© Ø§Ù„Ø¨Ù„Ø§ØªÙŠÙ†ÙŠØ©ØŒ Ø´ÙƒÙ„Øª Ø«Ù†Ø§Ø¦ÙŠØ§Ù‹ Ù…Ø¹ Ø§Ù„Ù…Ø®Ø±Ø¬Ø© Ø§Ù„Ù„Ø¨Ù†Ø§Ù†ÙŠØ© Ù†Ø§Ø¯ÙŠÙ† Ù„Ø¨ÙƒÙŠ ÙÙŠ Ø£ØºØ§Ù†ÙŠ Ø§Ø´ØªÙ‡Ø±Øª Ø¹Ù„Ù‰ Ø§Ù„ØµØ¹ÙŠØ¯ Ø§Ù„Ù„Ø¨Ù†Ø§Ù†ÙŠ ÙˆØ§Ù„Ø¹Ø±Ø¨ÙŠØŒ Ù…Ø«Ù„: Â«Ø£Ø®Ø§ØµÙ…Ùƒ Ø¢Ù‡Â»ØŒ Â«ÙŠØ§ Ø³Ù„Ø§Ù…Â»ØŒ Â«Ø¢Ù‡ ÙˆÙ†ØµÂ»ØŒ Â«ÙŠØ§ Ø·Ø¨Ø·Ø¨ ÙŠØ§ Ø¯Ù„Ø¹Â»ØŒ Â«Ø´Ø®Ø¨Ø· Ø´Ø®Ø§Ø¨ÙŠØ·Â»ØŒ Â«Ø¨ØªÙÙƒØ± ÙÙŠ Ø§ÙŠÙ‡Â»Ø› ÙˆÙˆØ¬Ø¯Øª Ø£ØºÙ†ÙŠØªÙ‡Ø§ Â«Ø¥Ø­Ø³Ø§Ø³ Ø¬Ø¯ÙŠØ¯Â» Ø¥Ø³ØªØ­Ø³Ø§Ù† Ø§Ù„Ø¬Ù…Ø§Ù‡ÙŠØ±.<br>\n<br>\nØ­Ù‚Ù‚Øª Ù†Ø§Ù†Ø³ÙŠ Ù†Ø¬Ø§Ø­Ø§ Ø¬Ù…Ø§Ù‡ÙŠØ±ÙŠØ§ ÙƒØ¨ÙŠØ± ÙÙŠ Ø£Ù„Ø¨ÙˆÙ…Ø§Øª: ÙŠØ§ Ø³Ù„Ø§Ù… ÙÙŠ Ø¹Ø§Ù… 2003ØŒ Ø¢Ù‡ ÙˆÙ†Øµ ÙÙŠ Ø¹Ø§Ù… 2004ØŒ ÙˆÙÙŠ Ø£ÙˆØ§Ø¦Ù„ Ø§Ù„Ù‚Ø±Ù† Ø§Ù„Ø­Ø§Ø¯ÙŠ ÙˆØ§Ù„Ø¹Ø´Ø±ÙŠÙ† Ù‚Ø§Ù…Øª Ø¨ØµÙÙ‚Ø§Øª Ø¥Ø¹Ù„Ø§Ù†ÙŠØ© Ù…Ø¹ Ø´Ø±ÙƒØ§Øª Ù…Ø«Ù„ ÙƒÙˆÙƒØ§ÙƒÙˆÙ„Ø§ ÙˆØ¯Ø§Ù…Ø§Ø³ Ù„Ù„Ù…Ø¬ÙˆÙ‡Ø±Ø§Øª ÙˆØ³ÙˆÙ†ÙŠ Ø¥Ø±ÙŠÙƒØ³ÙˆÙ†. <br>\nØ³Ø¹Ø± Ø§Ù„Ø¨Ø·Ø§Ù‚Ø© 30000 ÙˆØ´ÙƒØ±Ø§Ù‹ ........'),
(10,	'Ø­ÙÙ„Ø© Ø§Ù„ÙŠØ³Ø§ ',	'Ø¥Ù„ÙŠØ³Ø§ Ø£Ùˆ Ø¥Ù„ÙŠØ³Ø§Ø± Ø²ÙƒØ±ÙŠØ§ Ø®ÙˆØ±ÙŠ (27 Ø£ÙƒØªÙˆØ¨Ø± 1972-)ØŒ[2] Ù…ØºÙ†ÙŠØ© Ù„Ø¨Ù†Ø§Ù†ÙŠØ© Ù…Ù† Ø§Ù… Ø³ÙˆØ±ÙŠØ© . Ø§Ø´ØªÙ‡Ø±Øª ÙÙŠ Ø§Ù„Ø¹Ø§Ù„Ù… Ø§Ù„Ø¹Ø±Ø¨ÙŠ Ø­ÙŠØ« Ø¸Ù‡Ø±Øª Ù„Ø¬Ù…Ù‡ÙˆØ±Ù‡Ø§ ÙÙŠ Ø§Ù„Ø¹Ø§Ù… 1998 Ø¹Ù†Ø¯Ù…Ø§ Ø£Ø·Ù„Ù‚Øª Ø£ÙˆÙ„ Ø£Ù„Ø¨ÙˆÙ…Ø§ØªÙ‡Ø§ Ø¨Ø¯ÙŠ Ø¯ÙˆØ¨.[3][4]<br>\n<br>\nÙƒØ§Ù† Ø£Ù„Ø¨ÙˆÙ… Ø¥Ù„ÙŠØ³Ø§ Ø§Ù„Ø«Ø§Ù„Ø«ØŒ Ø¹ÙŠØ´Ø§Ù„Ùƒ (2002) Ø¥Ù†Ø¬Ø§Ø²Ø§Ù‹ ÙƒØ¨ÙŠØ±Ø§Ù‹ ÙÙŠ Ù…Ø³ÙŠØ±ØªÙ‡Ø§ Ø§Ù„ÙÙ†ÙŠØ© Ø§Ù„Ø°ÙŠ Ø¬Ù„Ø¨ Ù„Ù‡Ø§ Ø´Ù‡Ø±Ø© ÙƒØ¨ÙŠØ±Ø©ØŒ Ø§Ù„Ø°ÙŠ Ø¬Ø¹Ù„Ù‡Ø§ ØªØ­ØµÙ„ Ø¹Ù„Ù‰ Ø¬Ø§Ø¦Ø²Ø© Ø§Ù„Ù…ÙˆØ±ÙŠÙƒØ³ Ø¯ÙˆØ± Ù„Ù„Ù…Ø±Ø© Ø§Ù„Ø£ÙˆÙ„Ù‰ Ø¹Ù† ÙØ¦Ø© Ø£ÙØ¶Ù„ ÙÙ†Ø§Ù†Ø© Ø¹Ø±Ø¨ÙŠØ©. ÙˆÙÙŠ Ø³Ù†Ø© 2004ØŒ Ø£ØµØ¯Ø±Øª Ø£Ù„Ø¨ÙˆÙ…Ù‡Ø§ Ø§Ù„Ø±Ø§Ø¨Ø¹ Ø£Ø­Ù„Ù‰ Ø¯Ù†ÙŠØ§ØŒ Ø§Ù„Ø°ÙŠ ÙØ§Ø²Øª Ø¹Ù†Ù‡ Ø¨Ø¬Ø§Ø¦Ø²Ø© Ø§Ù„Ù…ÙˆØ³ÙŠÙ‚Ù‰ Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© Ù„Ø£ÙƒØ¨Ø± Ù…Ø¨ÙŠØ¹Ø§Øª Ù„Ù…ØºÙ†ÙŠ ÙÙŠ Ø§Ù„Ø´Ø±Ù‚ Ø§Ù„Ø£ÙˆØ³Ø·.[5]\n<br><br>\nÙÙŠ Ø¯ÙŠØ³Ù…Ø¨Ø± 2009ØŒ Ø£ØµØ¯Ø±Øª Ø¥Ù„ÙŠØ³Ø§ Ø£Ù„Ø¨ÙˆÙ…Ù‡Ø§ Ø§Ù„Ø³Ø§Ø¨Ø¹ Ø¨Ø¹Ù†ÙˆØ§Ù† ØªØµØ¯Ù‚ Ø¨Ù…ÙŠÙ†ØŒ Ø§Ù„Ø°ÙŠ ØªØ¬Ø§ÙˆØ²Øª Ù…Ø¨ÙŠØ¹Ø§ØªÙ‡ 6 Ù…Ù„ÙŠÙˆÙ† Ù†Ø³Ø®Ø©ØŒ Ù…Ù…Ø§ Ø¬Ø¹Ù„Ù‡Ø§ Ø§Ù„ÙÙ†Ø§Ù†Ø© Ø§Ù„Ø£ÙƒØ«Ø± Ù…Ø¨ÙŠØ¹Ù‹Ø§ Ù„Ù„Ø£Ø³Ø·ÙˆØ§Ù†Ø§Øª ÙÙŠ ØªØ§Ø±ÙŠØ® Ø´Ø±ÙƒØ© Ø±ÙˆØªØ§Ù†Ø§ØŒ Ø­ÙŠØ« ØªÙ„Ù‚Øª Ø¹Ù†Ù‡ Ù„Ù„Ù…Ø±Ø© Ø§Ù„Ø«Ø§Ù„Ø«Ø© Ø¹Ù„Ù‰ Ø§Ù„ØªÙˆØ§Ù„ÙŠ Ø¬Ø§Ø¦Ø²Ø© Ø§Ù„Ù…ÙˆØ³ÙŠÙ‚Ù‰ Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© Ù„ØªØ­Ù‚ÙŠÙ‚Ù‡Ø§ Ø£Ø¹Ù„Ù‰ Ù…Ø¨ÙŠØ¹Ø§Øª ÙÙŠ Ø§Ù„Ø´Ø±Ù‚ Ø§Ù„Ø£ÙˆØ³Ø· ÙˆØ³ØªØ© Ø¬ÙˆØ§Ø¦Ø² Ø£Ø®Ø±Ù‰.[6]\n<br><br>\nØ­ØµÙ„Øª Ø¥Ù„ÙŠØ³Ø§ Ø¹Ù„Ù‰ Ø§Ù„Ø¹Ø¯ÙŠØ¯ Ù…Ù† Ø§Ù„Ø¬ÙˆØ§Ø¦Ø² ÙˆØ§Ù„ØªÙ‚Ø¯ÙŠØ±Ø§ØªØŒ Ø¨Ù…Ø§ ÙÙŠ Ø°Ù„Ùƒ Ø«Ù„Ø§Ø«Ø© Ø¬ÙˆØ§Ø¦Ø² Ø§Ù„Ù…ÙˆØ³ÙŠÙ‚Ù‰ Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ©ØŒ ÙˆØ³ØªØ© Ø¬ÙˆØ§Ø¦Ø² Ø§Ù„Ù…ÙˆØ±ÙŠÙƒØ³ Ø¯ÙˆØ±ØŒ ÙˆØ¨Ø§Ø¹Øª Ø£ÙƒØ«Ø± Ù…Ù† 30 Ù…Ù„ÙŠÙˆÙ† Ù†Ø³Ø®Ø© Ù…Ù† Ø£Ù„Ø¨ÙˆÙ…Ø§ØªÙ‡Ø§ Ø·ÙˆØ§Ù„ Ù…Ø³ÙŠØ±ØªÙ‡Ø§ Ø§Ù„ÙÙ†ÙŠØ©ØŒ[7][8] Ù…Ù…Ø§ ÙŠØ¬Ø¹Ù„Ù‡Ø§ ÙˆØ§Ø­Ø¯Ø© Ù…Ù† Ø£ÙØ¶Ù„ Ø§Ù„ÙÙ†Ø§Ù†ÙŠÙ† Ù…Ø¨ÙŠØ¹Ø§Ù‹ Ø¹Ù„Ù‰ Ø§Ù„Ø¥Ø·Ù„Ø§Ù‚ ÙÙŠ Ø§Ù„Ø´Ø±Ù‚ Ø§Ù„Ø£ÙˆØ³Ø·ØŒ[9][10] ØµÙ†ÙØªÙ‡Ø§ Ù…Ø¬Ù„Ø© ÙÙˆØ±Ø¨Ø³ Ø§Ù„Ø£Ù…Ø±ÙŠÙƒÙŠØ© Ø¹Ø§Ù… 2017 Ù…Ù† Ø£ØºÙ†Ù‰ Ø§Ù„ÙÙ†Ø§Ù†ÙŠÙ† ÙÙŠ Ø§Ù„Ø¹Ø§Ù„Ù… Ø§Ù„Ø¹Ø±Ø¨ÙŠ Ø¨Ø«Ø±ÙˆØ© Ù‚Ø¯Ø±Øª Ø¨Ù€ 43 -48 Ù…Ù„ÙŠÙˆÙ† Ø¯ÙˆÙ„Ø§Ø±.[11]\n<br><br>\nØ®Ù„Ø§Ù„ Ù…Ø³ÙŠØ±ØªÙ‡Ø§ Ø§Ù„ÙÙ†ÙŠØ©ØŒ Ù„Ù‡Ø§ 4 Ø£Ù„Ø¨ÙˆÙ…Ø§Øª ÙÙŠ Ù‚Ø§Ø¦Ù…Ø© (Billboard) Ù„Ø£ÙƒØ«Ø± Ø§Ù„Ø£Ù„Ø¨ÙˆÙ…Ø§Øª Ù…Ø¨ÙŠØ¹Ø§Ù‹ Ø­ÙˆÙ„ Ø§Ù„Ø¹Ø§Ù„Ù…ØŒ[12] Ø£Ø­Ø¯Ù‡Ù… ÙˆÙ‡Ùˆ Ø£Ù„Ø¨ÙˆÙ… Ø­Ø§Ù„Ø© Ø­Ø¨ Ø­Ù„ ÙÙŠ Ø§Ù„Ù…Ø±ÙƒØ² Ø§Ù„Ù€#3 Ø¹Ø§Ù… 2014 ÙÙŠ Ø£ÙƒØ«Ø± Ø§Ù„Ø£Ù„Ø¨ÙˆÙ…Ø§Øª Ù…Ø¨ÙŠØ¹Ø§Ù‹ØŒ[13] ÙˆÙ‚Ø¯ Ø£Ø«Ø¨ØªØª Ø¨Ø°Ù„Ùƒ ÙˆØ¬ÙˆØ¯Ø§Ù‹ Ø¹Ø§Ù„Ù…ÙŠØ§Ù‹ Ù…Ø¤Ø«Ø±Ø§Ù‹.[14] ÙˆÙ‡ÙŠ Ø£Ø­Ø¯ Ø£Ø¹Ø¶Ø§Ø¡ Ù„Ø¬Ù†Ø© Ø§Ù„ØªØ­ÙƒÙŠÙ… ÙÙŠ Ø§Ù„Ù†Ø³Ø®Ø© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© Ù…Ù† Ø¨Ø±Ù†Ø§Ù…Ø¬ (The Voice) ÙÙŠ Ø¹Ø§Ù… 2018ØŒ ÙƒÙ…Ø§ Ø£Ù†Ù‡Ø§ Ø¹Ø¶ÙˆØ© ÙÙŠ Ù†Ù‚Ø§Ø¨Ø© Ø§Ù„ÙÙ†Ø§Ù†ÙŠÙ† Ø§Ù„Ù…Ø­ØªØ±ÙÙŠÙ† ÙÙŠ Ù„Ø¨Ù†Ø§Ù†.[15]. <br>\nØ³Ø¹Ø± Ø§Ù„Ø¨Ø·Ø§Ù‚Ø§Ø© 50000 ÙˆØ´ÙƒØ±Ø§Ù‹ .........'),
(11,	'Ø­ÙÙ„Ø© Ø¹Ù…Ø± Ø¯ÙŠØ§Ø¨ ',	'Ø¹Ù…Ø±Ùˆ Ø¯ÙŠØ§Ø¨ (11 Ø£ÙƒØªÙˆØ¨Ø± 1961 - )ØŒ Ù…ØºÙ†Ù Ù…ÙØµØ±ÙŠØŒ ÙŠØ¹Ø¯ ÙˆØ§Ø­Ø¯ Ù…Ù† Ø£Ø´Ù‡Ø± Ø§Ù„Ù…Ø·Ø±Ø¨ÙŠÙ† ÙÙŠ Ø§Ù„ÙˆØ·Ù† Ø§Ù„Ø¹Ø±Ø¨ÙŠ Ø­ÙŠØ« Ø­Ù‚Ù‚Øª Ø£Ù„Ø¨ÙˆÙ…Ø§ØªÙ‡ Ù…Ø¨ÙŠØ¹Ø§Øª Ù‡Ø§Ø¦Ù„Ø© ÙˆØªÙØ±Ø¬Ù…Øª Ø§Ù„Ø¹Ø¯ÙŠØ¯ Ù…Ù† Ø£ØºØ§Ù†ÙŠÙ‡ Ø¥Ù„Ù‰ Ø¹Ø¯Ø© Ù„ØºØ§Øª Ø£Ù‡Ù…Ù‡Ø§ Ø§Ù„Ø¥Ù†Ø¬Ù„ÙŠØ²ÙŠØ© ÙˆØ§Ù„Ø±ÙˆØ³ÙŠØ© ÙˆØ§Ù„ÙƒØ±ÙˆØ§ØªÙŠØ© ÙˆØ§Ù„Ø¨Ù„ØºØ§Ø±ÙŠØ© ÙˆØ§Ù„ØªØ±ÙƒÙŠØ© ÙˆØ§Ù„Ø£Ù„Ø¨Ø§Ù†ÙŠØ© ÙˆØ§Ù„Ù‡Ù†Ø¯ÙŠØ©ØŒ ÙˆØ§Ù„ÙŠÙˆÙ†Ø§Ù†ÙŠØ© ÙˆØ§Ù„ÙØ±Ù†Ø³ÙŠØ©ØŒ ØªÙ…ÙŠØ² Ø¹Ù…Ø±Ùˆ Ø¯ÙŠØ§Ø¨ Ø¨Ø¥Ø¯Ø®Ø§Ù„Ù‡ Ø¢Ù„Ø§Øª Ø¬Ø¯ÙŠØ¯Ø© ÙÙŠ Ù…ÙˆØ³ÙŠÙ‚Ø§Ù‡ ÙˆØ§Ø¨ØªÙƒØ§Ø± Ø£Ù†ÙˆØ§Ø¹ Ù…Ø®ØªÙ„ÙØ© Ù…Ù† Ø§Ù„Ø£ØºØ§Ù†ÙŠ Ø¹Ø¨Ø± ØªØ§Ø±ÙŠØ®Ù‡.[1][2][3][4][5][6]\n<br>\n<br>\n\nØ­ØµÙ„ Ø¹Ù„Ù‰ Ø¬ÙˆØ§Ø¦Ø² Ø¹Ø¯ÙŠØ¯Ø© Ø®Ù„Ø§Ù„ Ù…Ø´ÙˆØ§Ø±Ù‡ Ø§Ù„ÙÙ†ÙŠØŒ Ù…ÙÙ†Ù‡Ø§ ÙˆØ±Ù„Ø¯ Ù…ÙŠÙˆØ²Ùƒ Ø£ÙˆØ±Ø¯ 7 Ù…Ø±Ø§Øª Ø¹Ù† Ø£Ø¹Ù„Ù‰ Ù…Ø¨ÙŠØ¹Ø§Øª ÙÙŠ Ø§Ù„Ø´Ø±Ù‚ Ø§Ù„Ø£ÙˆØ³Ø· Ø£Ø¹ÙˆØ§Ù… 1998 Ùˆ2002 Ùˆ2007Ùˆ 2014. ÙˆÙ…Ù† Ø§Ù„Ø¬Ø¯ÙŠØ± Ø°ÙƒØ±Ù‡ Ø£Ù† Ø§Ù„Ø¹ÙÙ…Ø± Ø§Ù„ÙÙ†ÙŠ Ù„Ù„ÙÙ†Ø§Ù† Ø¹Ù…Ø±Ùˆ Ø¯ÙŠØ§Ø¨ ÙŠØ²ÙŠØ¯ Ø¹Ù† 35 Ø¹Ø§Ù…Ù‹Ø§ Ù…Ù†Ø° Ø§Ù†Ø·Ù„Ø§Ù‚ Ø£ÙˆÙ„ Ø£Ù„Ø¨ÙˆÙ… Ù„Ù‡ \"ÙŠØ§ Ø·Ø±ÙŠÙ‚\" Ø¹Ø§Ù… 1983 Ø­ØªÙ‰ Ø£Ù„Ø¨ÙˆÙ… \"ÙƒÙ„ Ø­ÙŠØ§ØªÙŠ\" Ø¹Ø§Ù… 2018.\n<br><br>\nØ¹Ù…Ø±Ùˆ Ø¯ÙŠØ§Ø¨ Ù‡Ùˆ Ø£ÙˆÙ„ Ù…Ø·Ø±Ø¨ Ø¹Ø±Ø¨ÙŠ ÙŠØ¯Ø®Ù„ Ù…ÙˆØ³ÙˆØ¹Ø© ØºÙŠÙ†ÙŠØ³ Ù„Ù„Ø£Ø±Ù‚Ø§Ù… Ø§Ù„Ù‚ÙŠØ§Ø³ÙŠØ© Ø­ÙŠØ« Ù‚Ø§Ù…Øª Ø§Ù„Ù…Ø¬Ù…ÙˆØ¹Ø© Ø¨ØªØ³Ø¬ÙŠÙ„ Ø§Ù„ÙÙ†Ø§Ù† Ø¹Ù…Ø±Ùˆ Ø¯ÙŠØ§Ø¨ ÙƒØ£ÙˆÙ„ Ù…Ø·Ø±Ø¨ Ø¹Ø±Ø¨ÙŠ ÙŠØ­ØµÙ„ Ø¹Ù„Ù‰ Ø£ÙƒØ¨Ø± Ø¹Ø¯Ø¯ Ù…Ù† Ø¬ÙˆØ§Ø¦Ø² Ø§Ù„Ù…ÙˆØ³ÙŠÙ‚Ù‰ Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© Ù„Ø£ÙƒØ«Ø± Ù…Ø¨ÙŠØ¹Ø§Øª ÙÙŠ Ø§Ù„Ø´Ø±Ù‚ Ø§Ù„Ø£ÙˆØ³Ø· .[7] <br>\nØ³Ø¹Ø± Ø§Ù„Ø­ÙÙ„Ø© 65000  ÙˆØ´ÙƒØ±Ø§Ù‹......'),
(12,	'Ø­ÙÙ„Ø© Ø­Ø³ÙŠÙ† Ø§Ù„Ø¬Ø³Ù…ÙŠ ',	'Ø­Ø³ÙŠÙ† Ø§Ù„Ø¬Ø³Ù…ÙŠ (25 Ø£ØºØ³Ø·Ø³ 1979 [1] -)ØŒ Ù…ØºÙ†ÙŠ Ø¥Ù…Ø§Ø±Ø§ØªÙŠ. ØªØ´Ø§Ø±Ùƒ Ù…Ø¹ Ø¥Ø®ÙˆØªÙ‡ ÙÙŠ ØªØ£Ø³ÙŠØ³ ÙØ±Ù‚Ø© Ù…ÙˆØ³ÙŠÙ‚ÙŠØ© (ÙØ±Ù‚Ø© Ø§Ù„Ø®Ù„ÙŠØ¬) Ø­ÙŠØ« ÙƒØ§Ù†Ùˆ ÙŠØ­ÙŠÙˆÙ† Ù…Ù†Ø§Ø³Ø¨Ø§Øª Ø§Ù„Ø£ÙØ±Ø§Ø­ Ø¨Ø§Ù„Ù…Ù†Ø·Ù‚Ø© Ø§Ù„Ø´Ø±Ù‚ÙŠØ© Ù„Ø¯ÙˆÙ„Ø© Ø§Ù„Ø¥Ù…Ø§Ø±Ø§Øª ÙˆÙ‚Ø¯ ÙƒØ§Ù†Øª Ø¶Ù…Ù† Ø§Ù„ÙØ±Ù‚ Ø§Ù„Ù…Ø­Ù„ÙŠØ© Ø§Ù„Ù…Ø´Ù‡ÙˆØ±Ø©. Ø¨Ø¯Ø£ Ù…Ø´ÙˆØ§Ø±Ù‡ Ø§Ù„ÙÙ†ÙŠ ÙÙŠ Ø¹Ù…Ø± Ø§Ù„Ø³Ø§Ø¨Ø¹Ø© Ø¹Ø´Ø±Ø© ÙÙŠ Ø¨Ø±Ù†Ø§Ù…Ø¬ Ø§Ù„Ø¨Ø­Ø« Ø¹Ù† Ø§Ù„Ù…ÙˆØ§Ù‡Ø¨ Ø¶Ù…Ù† Ù…Ù‡Ø±Ø¬Ø§Ù† Ø¯Ø¨ÙŠ Ù„Ù„ØªØ³ÙˆÙ‚ Ø­ÙŠØ« ÙØ§Ø² Ø¨Ø§Ù„Ù…Ø±ÙƒØ² Ø§Ù„Ø£ÙˆÙ„ Ø¹Ù† ÙØ¦Ø© Ø§Ù„Ù‡ÙˆØ§Ø©ØŒ Ø«Ù… ØªØ¹Ø§ÙˆÙ† Ù…Ø¹ Ø´Ø±ÙƒØ© Ø±ÙˆØªØ§Ù†Ø§ Ù„Ù„ØµÙˆØªÙŠØ§Øª ÙˆØ§Ù„Ù…Ø±Ø¦ÙŠØ§Øª.\n<br><br>\nÙ‚Ø¯Ù… Ù†ÙØ³Ù‡ Ø£ÙˆÙ„Ø§ Ù‡Ø§ÙˆÙŠØ§ Ù„Ø£ØºØ§Ù†ÙŠ Ø§Ù„ÙÙ†Ø§Ù† Ø¹Ø¨Ø¯ Ø§Ù„ÙƒØ±ÙŠÙ… Ø¹Ø¨Ø¯ Ø§Ù„Ù‚Ø§Ø¯Ø±ØŒ ÙˆÙØ§Ø² ÙƒØ£ÙØ¶Ù„ Ø§Ù„Ù‡ÙˆØ§Ø© Ø§Ù„Ø°ÙŠÙ† ØªÙ‚Ø¯Ù…ÙˆØ§ Ù„Ø¨Ø±Ù†Ø§Ù…Ø¬ Ø§Ù„Ù‡ÙˆØ§Ø© Ø§Ù„Ø°ÙŠ Ù‚Ø¯Ù…Ù‡ ØªÙ„ÙØ²ÙŠÙˆÙ† Ø¯Ø¨ÙŠ Ø­ÙŠÙ†Ù‡Ø§. ÙƒÙ…Ø§ Ø§Ù†Ø´Ø¯ ØªØªØ± Ø¨Ø±Ù†Ø§Ù…Ø¬ Ø®ÙˆØ§Ø·Ø± 10 (Ø§Ù‡Ø¯Ù†Ø§ Ø§Ù„ØµØ±Ø§Ø· Ø§Ù„Ù…Ø³ØªÙ‚ÙŠÙ…).\n<br><br>\nØªÙ… ØªØ±Ø´ÙŠØ­Ù‡ Ø³Ù†Ø© 2015 Ø¨Ù…Ù†Ø§Ø³Ø¨Ø© Ø§Ù„Ø°ÙƒØ±Ù‰ Ø§Ù„52 Ù„Ù…ÙŠÙ„Ø§Ø¯ Ù…Ù„Ùƒ Ø§Ù„Ù…ØºØ±Ø¨ Ù…Ø­Ù…Ø¯ Ø§Ù„Ø³Ø§Ø¯Ø³ ÙÙŠ Ù‚ØµØ± Ù…Ø±Ø´Ø§Ù† Ø¨Ø·Ù†Ø¬Ø©ØŒ Ø¨Ø§Ù„ÙˆØ³Ø§Ù… Ø§Ù„Ø¹Ù„ÙˆÙŠ Ù…Ù† Ø¯Ø±Ø¬Ø© Ù‚Ø§Ø¦Ø¯.[2]ØŒ [3] <br>\nØ³Ø¹Ø± Ø§Ù„Ø¨Ø·Ø§Ù‚Ø© 15000 ÙˆØ´ÙƒØ±Ø§Ù‹ .....'),
(13,	'Ø­ÙÙ„Ø© ÙˆØ§Ø¦Ù„ Ø¬Ø³Ø§Ø± ',	'Ø¨Ø¯Ø£ Ø¨Ø¹Ù…Ø± Ø§Ù„Ø«Ù…Ø§Ù†ÙŠ Ø³Ù†ÙˆØ§Øª ÙˆÙƒØ§Ù† ÙŠØ¯Ø±Ø³ ÙˆÙŠØ°Ù‡Ø¨ Ù„Ø¥Ø­ÙŠØ§Ø¡ Ø³Ù‡Ø±Ø§Øª ÙˆØ³Ù…Ø§Ø­ Ø£Ù‡Ù„Ù‡ Ø¨Ø§Ù„ØºÙ†Ø§Ø¡ ÙÙŠ Ø£ÙˆÙ‚Ø§Øª ÙØ±Ø§ØºÙ‡ØŒ ÙˆÙ„ÙƒÙ†Ù‡Ù… Ø£ØµØ±ÙˆØ§ Ø¹Ù„Ù‰ Ø§Ù† ÙŠÙƒÙ…Ù„ Ø¯Ø±Ø§Ø³ØªÙ‡ Ø­ØªÙ‰ Ø§Ù„Ø´Ù‡Ø§Ø¯Ø© Ø§Ù„Ø«Ø§Ù†ÙˆÙŠØ© ÙˆØªÙˆÙ‚ÙØª Ø­ÙŠÙ†Ù‡Ø§ Ù…Ù† ØªÙ„Ù‚Ø§Ø¡ Ù†ÙØ³Ù‡.Ø¯Ø±Ø³ Ø§Ù„Ù…ÙˆØ³ÙŠÙ‚Ù‰ Ø¹Ù†Ø¯ Ø£Ø³ØªØ§Ø° Ø¬ÙˆØ±Ø¬ Ø±ÙˆÙØ§ÙŠÙ„ ÙˆØ§Ø³ØªØ§Ø° Ù…Ø­Ø³Ù† Ù…Ø¹ÙˆØ¶ ÙˆØªØ¹Ù„Ù… Ø¹Ø²Ù Ø§Ù„Ø¹ÙˆØ¯[4]ÙƒØ§Ù† ÙŠØºÙ†Ù‰ ÙÙŠ Ø§Ù„Ù…Ù†Ø§Ø³Ø¨Ø§Øª ÙˆØ­ÙÙ„Ø§Øª Ø§Ù„Ù‚Ø±ÙŠØ© Ø§Ù„ØªÙŠ ÙŠÙ‚Ø·Ù† Ø¨Ù‡Ø§ ÙˆÙƒØ§Ù† Ø¯Ø§Ø¦Ù… Ø§Ù„ØªØ±Ø¯ÙŠØ¯ Ù„Ø£ØºØ§Ù†ÙŠ Ø¹Ù…Ø§Ù„Ù‚Ø© Ø§Ù„ØºÙ†Ø§Ø¡ Ø§Ù„Ø¹Ø±Ø¨ÙŠ Ù…Ù†Ù‡Ù… Ø§Ù„Ø³ÙŠØ¯Ø© Ø£Ù… ÙƒÙ„Ø«ÙˆÙ… ÙˆØ§Ù„Ø¹Ù†Ø¯Ù„ÙŠØ¨ Ø¹Ø¨Ø¯ Ø§Ù„Ø­Ù„ÙŠÙ… Ø­Ø§ÙØ¸ ÙˆØ§Ù„Ù…ÙˆØ³ÙŠÙ‚Ø§Ø± Ù…Ø­Ù…Ø¯ Ø¹Ø¨Ø¯ Ø§Ù„ÙˆÙ‡Ø§Ø¨. ÙˆØªÙˆØ³Ø¹Øª Ø¯Ø§Ø¦Ø±Ø© Ø£Ø­Ù„Ø§Ù… ÙˆØ§Ø¦Ù„ Ø§Ù„Ø·ÙÙˆÙ„ÙŠØ© Ø¹Ø´Ù‚Ø§ ÙˆÙˆØµÙˆÙ„Ø§ Ø¥Ù„Ù‰ Ø·Ù…ÙˆØ­Ø§Øª Ø§Ù„Ø´Ù‡Ø±Ø© ÙˆØ§Ù„Ù†Ø¬ÙˆÙ…ÙŠØ© ÙˆÙ‚Ø¯ Ø§Ù†ØªÙ‡Ø² ÙØ±ØµØ© Ø§Ù„Ù…Ø´Ø§Ø±ÙƒØ© ÙÙŠ Ø£Ø­Ø¯ Ø§Ù„Ù…Ù‡Ø±Ø¬Ø§Ù†Ø§Øª Ø§Ù„Ù…Ø­Ù„ÙŠØ© Ø§Ù„ØªÙŠ Ø£Ù‚ÙŠÙ…Øª ÙÙŠ Ù…Ù†Ø·Ù‚Ø© Ø±ÙŠØ§Ù‚ ÙÙŠ Ù…Ø­Ø§ÙØ¸Ø© Ø§Ù„Ø¨Ù‚Ø§Ø¹ Ø¨Ù„Ø¨Ù†Ø§Ù† ÙˆØ§Ø´ØªØ±Ùƒ ÙÙŠÙ‡ ÙˆØ­Ù‚Ù‚ Ø§Ù„Ù…Ø±ÙƒØ² Ø§Ù„Ø£ÙˆÙ„ØŒ Ø«Ù… Ø§Ø´ØªØ±Ùƒ ÙÙŠ Ø§Ù„Ø¨Ø±Ù†Ø§Ù…Ø¬ Ø§Ù„Ø´Ù‡ÙŠØ± (Ø§Ù„Ø­Ø±ÙˆÙ ØªØºÙ†Ù‰) ÙˆØ£Ø´Ø§Ø¯ Ø¨ØµÙˆØªÙ‡ Ø¬Ù…ÙŠØ¹ Ø§Ù„Ø­Ø§Ø¶Ø±ÙŠÙ† ÙˆØ¨Ø¥Ù…ÙƒØ§Ù†ÙŠØ§ØªÙ‡ Ø§Ù„ØµÙˆØªÙŠØ© ÙˆØ£Ø·Ù„Ù‚ÙˆØ§ Ø¹Ù„ÙŠÙ‡ Ù„Ù‚Ø¨ (Ø§Ù„Ø·ÙÙ„ Ø§Ù„Ù…Ø¹Ø¬Ø²Ø©) ÙˆØ°Ø§Ø¹ Ø§Ø³Ù…Ù‡ ÙˆØ´Ù‡Ø±ØªÙ‡ØŒ Ø§Ø¨ØªØ¹Ø¯ ÙˆØªÙˆÙ‚Ù Ø¹Ù† Ø§Ù„ØºÙ†Ø§Ø¡ ÙØªØ±Ø© Ø¨Ø³Ø¨Ø¨ Ø§Ù„ØªØ­ÙˆÙ„Ø§Øª Ø§Ù„ØªÙŠ Ø·Ø±Ø£Øª Ø¹Ù„Ù‰ ØµÙˆØªÙ‡ Ù†Ø¸Ø±Ø§ Ù„Ø§Ù†ØªÙ‚Ø§Ù„Ù‡ Ù…Ù† Ù…Ø±Ø­Ù„Ø© Ø§Ù„Ø·ÙÙˆÙ„Ø© Ø¥Ù„Ù‰ Ù…Ø±Ø­Ù„Ø© Ø§Ù„ØµØ¨Ø§ Ø«Ù… Ø§Ù„Ø±Ø¬ÙˆÙ„Ø© Ø¹Ø§Ø¯ Ø¨Ø¹Ø¯Ù‡Ø§ Ø¥Ù„Ù‰ Ø§Ù„Ø³Ø§Ø­Ø© Ø§Ù„ØºÙ†Ø§Ø¦ÙŠØ© Ø¨Ø£ÙˆÙ„ Ø£Ù„Ø¨ÙˆÙ…Ø§ØªÙ‡ (Ù…Ø§Ø´Ù€Ù‰) ÙˆØ§Ù„Ø°ÙŠ Ø­Ù‚Ù‚ Ù†Ø¬Ø§Ø­Ø§ ÙƒØ¨ÙŠØ±Ø§ Ù„Ù‡ Ø®Ø§ØµØ© Ø£ØºØ§Ù†ÙŠÙ‡ (Ø§Ù„Ù„ÙŠØ§Ù„ÙŠØŒ Ø§Ù„Ø­Ù‚ Ø¹Ù„Ù‰ Ø¹ÙŠÙˆÙ†ÙŠØŒ Ù…Ù†ÙŠÙ† Ù…Ø§ ØªÙƒÙˆÙ†ØŒ Ø§Ø³Ù…Ø¹ ÙƒÙ„Ø§Ù… Ø­Ø¨ÙŠØ¨ÙƒØŒ Ø¢Ù‡ ÙŠØ§ Ù„ÙŠÙ„)[5] Ø§Ù†Ø·Ù„Ù‚ Ø¨Ø¹Ø¯Ù‡Ø§ Ø¹Ø±Ø¨ÙŠØ§ Ø¹Ø§Ù… 2001 Ù…Ù† Ø®Ù„Ø§Ù„ Ø£Ù„Ø¨ÙˆÙ… Ø§Ù„Ø¯Ù†ÙŠØ§ Ø¹Ù„Ù…ØªÙ†ÙŠ ÙˆØ£ØºÙ†ÙŠØ§Øª Ù…Ø«Ù„ Ø¹Ø§Ù„Ø¬Ù…Ø± ØŒ ÙƒÙ…Ø´ÙŠØª Ø®Ù„Ø§Øµ ÙˆØºÙŠØ±Ù‡Ø§. <br>\nØ³Ø¹Ø± Ø§Ù„Ø¨Ø·Ø§Ù‚Ø© 25000 ÙˆØ´ÙƒØ±Ø§Ù‹.......');

DROP TABLE IF EXISTS `playground`;
CREATE TABLE `playground` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `price` int(5) NOT NULL,
  `start` datetime NOT NULL,
  `hours` int(11) NOT NULL,
  `done` text NOT NULL,
  `approval` text NOT NULL,
  `card_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `playground` (`id`, `department_id`, `price`, `start`, `hours`, `done`, `approval`, `card_id`) VALUES
(3,	10,	1000,	'2019-05-03 18:59:00',	2147483647,	'',	'false',	1),
(4,	10,	1000,	'2019-05-03 19:00:00',	2147483647,	'true',	'true',	1),
(5,	12,	1000,	'2019-05-04 10:43:00',	2147483647,	'',	'false',	1),
(6,	10,	1000,	'2020-05-04 18:42:00',	3,	'',	'false',	2),
(7,	13,	1000,	'2019-05-04 18:47:00',	2,	'',	'false',	2),
(8,	11,	1000,	'2019-05-04 18:48:00',	5,	'false',	'true',	2);

DROP TABLE IF EXISTS `snacks`;
CREATE TABLE `snacks` (
  `snack_id` int(5) NOT NULL AUTO_INCREMENT,
  `snack_shop_id` int(11) NOT NULL,
  `snack_name` text NOT NULL,
  `snack_desc` longtext NOT NULL,
  `snack_pic` text NOT NULL,
  `snack_price` int(11) NOT NULL,
  PRIMARY KEY (`snack_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `snacks` (`snack_id`, `snack_shop_id`, `snack_name`, `snack_desc`, `snack_pic`, `snack_price`) VALUES
(13,	2,	'Ù†Ø¸Ø§Ø±Ø©',	'Ù†Ø¸Ø§Ø±Ø© Ø´Ù…Ø³ÙŠØ©',	'../../upload/12015186234.jpg',	1000),
(14,	2,	'Ø¨Ù„Ø§Ùƒ',	'Ø¨Ù„Ø§Ùƒ Ø±Ø¬Ø§Ù„ÙŠ',	'../../upload/item_L_23491921_33552564.jpg',	1000),
(10,	1,	'Ø¨Ù†Ø·Ø§Ù„',	'Ø¨Ù†Ø·Ø§Ù„ Ø±Ø¬Ø§Ù„ÙŠ',	'../../upload/Ø¨Ù†Ø·Ù„ÙˆÙ†-Ø¬ÙŠÙ†Ø²-Ø´Ø¨Ø§Ø¨ÙŠ-Ø²Ù…Ø¨Ø±Ùƒ-noshark-.jpg',	10000),
(11,	1,	'Ø¬Ø§ÙƒÙŠØª',	'Ø¬Ø§ÙƒÙŠØª Ø´Ø¨Ø§Ø¨ÙŠ',	'../../upload/Ø¬Ø§ÙƒÙŠØª-Ø¬Ù„Ø¯-Ø´Ø¨Ø§Ø¨ÙŠ-slim.jpg',	15000),
(12,	1,	'Ø¬Ø§ÙƒÙŠØª',	'Ø¬Ø§ÙƒÙŠØª Ø´Ø¨Ø§Ø¨ÙŠ ÙƒØªØ§Ù†',	'../../upload/IL201811131539145836.jpg_300x400x80.jpg',	20000),
(7,	3,	'Ø³ÙƒØ±',	'ÙƒÙŠÙ„Ùˆ Ø³ÙƒØ±',	'../../upload/4af6fc98a2c6f2134bf21aba15b139cb.jpg',	275),
(8,	3,	'Ù…ØªØ©',	'Ø¹Ù„Ø¨Ø© Ù…ØªØ©',	'../../upload/2820rd3k5F9qYyLXT_1280x1280.jpg',	600),
(9,	3,	'Ù‚Ù‡ÙˆØ©',	'Ø±Ø¨Ø¹ ÙƒÙŠÙ„Ùˆ Ù‚Ù‡ÙˆØ©',	'../../upload/item_XL_22242163_29882132.jpg',	900),
(15,	2,	'Ø¨Ù„Ø§Ùƒ',	'Ø¨Ù„Ø§Ùƒ ÙØ¶Ø©',	'../../upload/WIDENED_ROSE_GOLD_lattice_texture_large.JPG',	20000),
(16,	1,	'ÙƒÙ†Ø²Ø©',	'ÙƒÙ†Ø²Ø© Ø±Ø¬Ø§Ù„ÙŠØ© Ù‚ÙŠØ§Ø³ M',	'../../upload/img_7817_4.png',	5000),
(17,	1,	'ÙƒÙ†Ø²Ø©',	'ÙƒÙ†Ø²Ø© Ù‚Ø·Ù† ÙƒÙ…',	'../../upload/por_2136_3.jpg',	2500),
(19,	1,	'Ø¬Ø§ÙƒÙŠØª',	'Ø¬Ø§ÙƒÙŠØª Ø¬Ù„Ø¯ Ø±Ø¬Ø§Ù„ÙŠ',	'../../upload/Ø¬Ø§ÙƒÙŠØª-Ø¬Ù„Ø¯-Ø´Ø¨Ø§Ø¨ÙŠ-slim.jpg',	20000),
(20,	2,	'Ù…Ø²Ù‡Ø±ÙŠØ©',	'Ù…Ø²Ù‡Ø±ÙŠØ© Ù…Ø²Ø®Ø±ÙØ© ',	'../../upload/158415289-158415289-Batch131_01-345.jpg',	4000),
(21,	2,	'Ù…Ø²Ù‡Ø±ÙŠØ©',	'Ù…Ø²Ù‡Ø±ÙŠØ©',	'../../upload/158415276-158415276-Batch131_01-345.jpg',	3000),
(22,	2,	'Ø´Ù…Ø³ÙŠØ©',	'Ø´Ù…Ø³ÙŠØ© Ù†ÙˆØ¹ Ø§ÙˆÙ„',	'../../upload/item_XL_35303089_137470375.jpg',	3000),
(23,	3,	'Ù…Ø±Ø¨Ù‰',	'Ù…Ø±Ø¨Ù‰ Ø§Ù„ÙƒØ±Ø² ',	'../../upload/0002303_cherry-jam-alahlam-800-g_510.jpeg',	1000),
(24,	3,	'Ø·ÙˆÙ†',	'Ø·ÙˆÙ† Ø®Ø´Ù†',	'../../upload/DSC_0696-3-233x275.jpg',	500),
(25,	3,	'Ø±Ø²',	'Ø±Ø² Ø§Ù„Ø¨Ø³ØªØ§Ù† 4 ÙƒÙŠÙ„Ùˆ',	'../../upload/CBmF-vnUgAAhuYr.jpg',	1500);

DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE `supervisor` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `password` longtext NOT NULL,
  `department` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `supervisor` (`id`, `name`, `password`, `department`) VALUES
(1,	'c4ca4238a0b923820dcc509a6f75849b',	'c4ca4238a0b923820dcc509a6f75849b',	'1'),
(2,	'c81e728d9d4c2f636f067f89cc14862c',	'c81e728d9d4c2f636f067f89cc14862c',	'Ø§Ù„Ø¨Ø·Ø§Ù‚Ø© Ø§Ù„Ø°ÙƒÙŠØ©'),
(3,	'eccbc87e4b5ce2fe28308fd9f2a7baf3',	'eccbc87e4b5ce2fe28308fd9f2a7baf3',	'Ø§Ù„Ø¹Ø§Ø¨ Ø§Ø·ÙØ§Ù„'),
(4,	'a87ff679a2f3e71d9181a67b7542122c',	'a87ff679a2f3e71d9181a67b7542122c',	'Ø§Ù„Ù…Ø³Ø§Ø¨Ø­'),
(8,	'c9f0f895fb98ab9159f51fd0297e236d',	'c9f0f895fb98ab9159f51fd0297e236d',	'Ø§Ù„Ù…ÙˆÙ„'),
(5,	'e4da3b7fbbce2345d7772b0674a318d5',	'e4da3b7fbbce2345d7772b0674a318d5',	'ØµØ§Ù„Ø§Øª Ø±ÙŠØ§Ø¶ÙŠØ©'),
(6,	'1679091c5a880faf6fb5e6087eb1b2dc',	'1679091c5a880faf6fb5e6087eb1b2dc',	'Ø§Ù„ÙÙ†Ø§Ø¯Ù‚'),
(7,	'8f14e45fceea167a5a36dedd4bea2543',	'8f14e45fceea167a5a36dedd4bea2543',	'Ø§Ù„Ù…Ø·Ø§Ø¹Ù…'),
(9,	'../../main/main.jpg',	'Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ… ÙÙŠ Ù…Ù†Ø´Ø£Ø© Ù„Ø¤Ù„Ø¤Ø© Ø§Ù„Ø´Ø±Ù‚ Ø§Ù„Ø³ÙŠØ§Ø­ÙŠØ© <br>\nÙ„Ø¤Ù„Ø¤Ø© Ø§Ù„Ø´Ø±Ù‚ Ù…Ù†Ø´Ø£Ø© Ø³ÙŠØ§Ø­ÙŠØ© Ù…ØªÙƒØ§Ù…Ù„Ø© ØªØ­ÙˆÙŠ Ø§Ù„Ø¹Ø¯ÙŠØ¯ Ù…Ù† Ø§Ù„Ø£Ù‚Ø³Ø§Ù… Ø§Ù„Ø®Ø¯Ù…ÙŠØ© ÙˆØ§Ù„ØªØ±ÙÙŠÙ‡ÙŠØ© , Ø§Ù„ØªÙŠ ØªÙ‡Ø¯Ù Ø§Ù„Ù‰ Ø®Ø¯Ù…Ø© Ø§Ù„Ø²Ø¨Ø§Ø¦Ù† ÙˆØªÙˆÙÙŠØ± Ø§Ù„Ø£Ø¬ÙˆØ§Ø¡ Ø§Ù„Ù…Ø«Ø§Ù„ÙŠØ© Ù„Ù‚Ø¶Ø§Ø¡ Ø§ÙˆÙ‚Ø§Øª Ù…Ù…ØªØ¹Ø© Ù…Ø¹ Ø§Ù„Ø£Ù‡Ù„ ÙˆØ§Ù„Ø£ØµØ¯Ù‚Ø§Ø¡.\nÙŠÙ…ÙƒÙ† Ù„Ø²Ø¨Ø§Ø¦Ù†Ù†Ø§ Ø§Ù„ÙƒØ±Ø§Ù… Ø§Ù„Ø£Ø·Ù„Ø§Ø¹ Ø¹Ù„Ù‰ Ø§Ù„Ø£Ù‚Ø³Ø§Ù… Ùˆ Ø§Ù„Ø®Ø¯Ù…Ø§Øª Ø§Ù„ØªÙŠ Ù†Ù‚Ø¯Ù…Ù‡Ø§ Ù…Ù† Ø®Ù„Ø§Ù„ Ù…ÙˆÙ‚Ø¹Ù†Ø§ Ù‡Ø°Ø§ . <br>\nÙƒÙ…Ø§ ÙŠÙ…ÙƒÙ†Ù‡Ù… Ù…Ù† Ø­Ø¬Ø² Ø§Ù„ØªØ°Ø§ÙƒØ± ÙˆØ§Ù„Ø¯ÙØ¹ Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ§ Ù…Ù† Ø®Ù„Ø§Ù„ Ø§Ù„Ù…ÙˆÙ‚Ø¹ ÙˆØ¹Ù† Ø·Ø±ÙŠÙ‚ Ø§Ù„Ø¨Ø·Ø§Ù‚Ø§Øª Ø§Ù„Ø°ÙƒÙŠØ© Ø§Ù„Ù…Ù†ØªØ´Ø±Ø© ÙÙŠ Ù…Ø±Ø§ÙƒØ² Ø§Ù„Ø¨ÙŠØ¹ .<br>\nÙŠÙ‚Ø¯Ù… Ù…Ø´Ø±ÙˆØ¹ Ù„ÙˆØ¤Ù„Ø¤Ø© Ø§Ù„Ø´Ø±Ù‚ Ø§Ù„Ø¹Ø¸ÙŠÙ… Ø§Ù„Ø±Ø§Ø­Ø© Ø§Ù„ØªØ§Ù…Ø© Ù…Ù† Ø­ÙŠØ« ÙƒÙ„ Ù†ÙˆØ§Ø­ÙŠ Ø§Ù„Ø±ÙØ§Ù‡ÙŠØ© ÙÙŠ Ø§Ù„Ø¹Ø§Ù„Ù… Ø­ÙŠØ« ÙŠØºØ·ÙŠ Ø±ØºØ¨Ø© Ø§ÙŠ Ø´Ø®Øµ Ø¨Ø§Ù„Ø³ÙŠØ§Ø­Ø© Ø§Ùˆ Ø¹Ø§Ø¦Ù„Ø© Ø§Ùˆ Ø¬Ø±ÙˆÙˆØ¨ Ø§Ùˆ ÙØ±ÙŠÙ‚ Ø­ÙŠØ« Ø§Ù†Ù‡ ØªÙ… ØªØµÙ…ÙŠÙ…Ù‡ Ù„ÙŠÙ„Ø§Ø¦Ù… ÙƒÙ„ Ø§Ù„Ø£Ø¹Ù…Ø§Ø± Ùˆ ÙƒÙ„ Ø§Ù„Ù…Ø³ØªÙˆÙŠØ§Øª Ø§Ù„Ù…Ø¹ÙŠØ´ÙŠØ© Ùˆ ÙƒÙ„ Ù…Ø§ ÙŠØ®Ø·Ø± Ø¹Ù„Ù‰ Ø§Ù„Ø¨Ø§Ù„ Ù…Ù† Ø­ÙŠØ« Ø§Ù„Ø±ÙØ§Ù‡ÙŠØ© Ø§Ù„ØªØ§Ù…Ø© .<br>\nÙˆØªØ³Ø¹Ù‰ Ø§Ø¯Ø§Ø±Ø© Ù…Ø´Ø±ÙˆØ¹ Ø§Ù„Ù„Ø¤Ù„Ø¤Ø© Ø§Ù„Ù‰ Ø§Ù„Ø³Ø¹ÙŠ Ø¯Ø§Ø¦Ù…Ø§ ÙˆÙ‚Ø¯Ù…Ø§ ÙÙŠ Ø§Ù†Ø¬Ø§Ø­ Ù‡Ø°Ø§ Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ ÙˆØªÙ„Ø¨ÙŠØ© Ø±ØºØ¨Ø§Øª Ù…ÙˆÙØ¯ÙŠÙ‡Ø§ Ù…Ù† Ø§Ù„Ø³ÙŠØ§Ø­ Ø§Ù„Ø£Ø¬Ø§Ù†Ø¨ ÙˆØ§Ù„Ø¹Ø±Ø¨ ÙˆØªÙ‚ÙˆÙ… Ø§Ù„Ø§Ø¯Ø§Ø±Ø© Ø¯Ø§Ø¦Ù…Ø§ ÙˆØ§Ø¨Ø¯Ø§ Ø±Ø§Ø­Ø© Ø§Ù„Ø³Ø§Ø¦Ø­ Ù‡ÙŠ Ø§Ù„Ù…Ù„Ø·Ø¨ Ø§Ù„Ø£ÙˆÙ„ Ù„ÙƒÙŠ ÙŠØ²Ø±Ø¹ Ù‡Ø°Ø§ Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ø¨ØµÙ…Ø© Ø¬Ù…ÙŠÙ„Ø© Ù„Ø¯Ù‰ Ø§Ù„Ù…ÙˆÙØ¯ÙŠÙ† Ø§Ù„ÙŠÙ‡Ø§ ÙˆÙŠØ²Ø±Ø¹ Ø§Ù„Ø¨Ø³Ù…Ø© Ø¹Ù„Ù‰ ÙˆØ¬Ù‡ Ø§Ù„ÙƒØ¨ÙŠØ± ÙˆØ§Ù„ØµØºÙŠØ± .<br>\nÙˆØªØ³Ø¹Ù‰ Ø§Ø¯Ø§Ø±Ø© Ù…Ø´Ø±ÙˆØ¹ Ø§Ù„Ø§Ù„Ø¤Ù„Ø¤Ø© Ø§Ù„Ù‰ ØªÙ‚Ø¨Ù„ Ø§ÙŠ Ù…Ù„Ø§Ø­Ø¸Ø© ÙÙŠ Ø§ÙŠ Ù‚Ø³Ù… Ù…Ù† Ø§Ù‚Ø³Ø§Ù…Ù‡Ø§ Ø§Ùˆ Ø§ÙŠ Ø§Ù‚ØªØ±Ø§Ø­ Ù…Ù† Ø§ÙŠ Ù…ÙˆÙØ¯ Ø¹Ù† Ø§ÙŠ Ø§Ù…Ø± Ù‚Ø¯ ÙŠØ±ÙØ¹ Ù…Ù† Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ø¹Ø§Ù„ÙŠØ§ Ùˆ ÙŠØ¬Ø¹Ù„Ø© Ø£ÙØ¶Ù„ Ù…Ø´Ø±ÙˆØ¹ Ø³ÙŠØ§Ø­ÙŠ ÙÙŠ Ø§Ù„Ø¹Ø§Ù„Ù…\nØ­ÙŠØ« ØªØ«ÙˆÙ… Ø§Ù„Ù…Ù†Ø´Ø¦Ø© ÙÙŠ Ø§Ù„Ù…Ø¶ÙŠ Ù‚Ø¯Ù…Ø§ Ø§Ù„Ù‰ Ø§Ù„ØªØ£Ù„Ù‚ ÙˆØ¬Ø¹Ù„Ù‡Ø§ ØªØªÙÙˆÙ‚ Ø¹Ø§Ù„Ù…ÙŠØ§Ù‹ Ø¹Ù„Ù‰ Ù…Ù†Ø§ÙØ³ÙŠÙ‡Ø§ ÙÙŠ Ø§Ù„Ø®Ø¯Ù…Ø§Øª .\nÙˆØªØ³Ø¹Ù‰ Ø§Ø¯Ø§Ø±Ø© Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ø§Ù„Ù‰ Ø²ÙŠØ§Ø¯Ø© Ø§Ù„Ø£Ù‚Ø³Ø§Ù… Ù…Ø³ØªÙ‚Ø¨Ù„Ø§Ù‹ Ù„ÙƒÙŠ ÙŠØµØ¨Ø­ Ù‡Ø°Ø§ Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ø§Ù„Ø£ÙˆÙ„ Ø¹Ø§Ù„Ù…ÙŠØ§ Ù…Ù† Ø­ÙŠØ« Ø§Ù„Ø£Ù‚Ø³Ø§Ù… Ùˆ Ø·Ø±ÙŠÙ‚Ø© Ø§Ù„ØªØ¹Ø§Ù…Ù„ Ø­ÙŠØ« Ø£Ù†  ÙƒÙ„ Ù‚Ø³Ù… Ù…Ù† Ù‡Ø°Ù‡ Ø§Ù„Ø£Ø³Ø§Ù… ÙˆØ¶Ø¹ Ø¨Ø§Ø´Ø±Ø§Ù Ø§Ù„Ù…Ù‡Ù†Ø¯Ø³ÙŠÙ† Ùˆ ÙÙ†ÙŠÙŠÙ† Ù‚Ø¯ÙŠØ±ÙŠÙ† ÙˆØ²Ùˆ Ø®Ø¨Ø±Ø© ÙˆÙŠØ¶Ù… Ø§Ù„ÙØ±ÙŠÙ‚ Ø§Ù„Ù…ØªÙˆØ§Ø¬Ø¯ ÙÙŠ ÙƒÙ„ Ù‚Ø³Ù… Ø®Ø¨Ø±Ø§Ø¡ ÙˆØ§Ù† ÙÙƒØ±Ø© Ø¨ÙŠØ¹ Ø§Ù„Ø¨Ø·Ø§Ù‚Ø§Øª ØªØ­ÙØ² Ø§Ù„Ø³Ø§Ø¦Ø­ Ø§Ù„Ù‰ Ø§Ù„Ø±ØºØ¨Ø© ÙÙŠ ØªØ¬Ø±Ø¨Ø© Ù‡Ø°Ø§ Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ ÙˆØ§Ù„Ø®ÙˆØ¶ ÙÙŠÙ‡ .<br>\nÙˆØ´ÙƒØ±Ø§ Ù„ÙˆØ¬ÙˆØ¯ÙƒÙ… Ù…Ø¹Ù†Ø§ Ø¯Ø§Ø¦Ù…Ø§ ........',	''),
(10,	'../../upload/ewrcxvevb.jpg',	'Ù†Ø­Ù† Ù…Ø´Ø±ÙˆØ¹ ÙŠÙ‚ÙˆÙ… Ø§Ù„Ø³Ø¹ÙŠ Ù‚Ø¯ÙˆÙ…Ø§ Ù„Ø§Ø±Ø¶Ø§Ø¡ Ø§Ù„Ù…ÙˆÙØ¯ÙŠÙ† Ø§Ù„ÙŠÙ‡ Ù…Ù† Ø§Ù„Ø³ÙŠØ§Ø­ Ø§Ù„Ø¹Ø±Ø¨ ÙˆØ§Ù„Ø£Ø¬Ø§Ù†Ø¨ Ù…Ù† Ø§Ù„Ø¯Ø§Ø®Ù„ ÙˆØ§Ù„Ù…Ù† Ø§Ù„Ø®Ø§Ø±Ø¬ ÙˆÙ†Ø³Ø¹Ù‰ Ù„ÙŠÙƒÙˆÙ† Ù…Ø´Ø±ÙˆØ¹Ù†Ø§ Ø§Ù„Ø£ÙˆÙ„ Ø¹Ø§Ù„Ù…ÙŠØ§ Ø§ÙˆÙ„ Ù…Ø´Ø±ÙˆØ¹ ØªØ±ÙÙŠÙ‡ÙŠ ÙŠØ¶Ù… Ø§Ù‚Ø³Ø§Ù… ØªÙ„Ø¨ÙŠ ÙƒÙ„ Ø§Ù„Ø­Ø§Ø¬Ø§Øª ÙˆØ§Ù„Ø£Ø¹Ù…Ø§Ø± ÙˆØ§Ù„Ø£Ø°ÙˆØ§Ù‚ ',	''),
(11,	'../../upload/fghjntyumgnfg.jpg',	'Ø´Ø±ÙƒØ© Ø§Ù„Ø­Ø±Ø§Ø³Ø© Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© : <br>\nÙ…Ø´Ø±ÙˆØ¹ Ø§Ù„Ù„Ø¤Ù„Ø¤Ø© ÙŠØ·Ù…Ø­ Ø§Ù„ÙŠÙ‡ Ø§Ù„Ø¹Ø¯ÙŠØ¯ Ù…Ù† Ø±Ø¬Ø§Ù„ Ø§Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„ÙƒØ¨Ø§Ø± Ùˆ Ø§Ù„Ù…Ù†Ø§ÙØ³ÙŠÙ† ÙŠØ³Ø¹ÙˆÙ† Ø¯Ø§Ø¦Ù…Ø§ Ø§Ù„Ù‰ Ø®Ø±Ø§Ø¨ Ù‡Ø°Ø§ Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ù„Ø°Ù„Ùƒ Ù‚Ø±Ø±Øª Ø§Ø¯Ø§Ø±Ø© Ø§Ù„Ø´Ø±ÙƒØ© Ø¶Ù… Ø´Ø±ÙƒØ© Ø§Ù„Ø­Ø±Ø§Ø³Ø© Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© Ø¨ÙØ±ÙŠÙ‚Ù‡Ø§ Ø§Ù„ÙƒØ¨ÙŠØ± Ù„Ø­Ù…Ø§ÙŠØ© Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ù…Ù† ÙƒÙ„ Ø´Ø®Øµ ÙŠØ³Ø¹Ù‰ Ù„Ø®Ø±Ø§Ø¨Ù‡Ø§ Ùˆ Ù„Ø­ÙØ¸ Ø§Ù„Ø£Ù…Ù† ÙˆØ§Ù„Ø£Ù…Ø§Ù† Ù„Ù„Ø³ÙŠØ§Ø­ Ø§Ù„Ù…ÙˆÙØ¯ÙŠÙ† ÙˆÙ„Ø§Ø·Ù…Ø¦Ù†Ø§Ù† Ù…Ù† Ù‚Ø¨Ù„Ù‡Ù… Ø§Ù† Ù‡Ù†Ø§Ùƒ Ø´Ø±ÙƒØ© Ø®Ø§ØµØ© Ø¨Ø§Ù„Ø­Ø±Ø§Ø³Ø© Ù„Ø­Ù…Ø§ÙŠØ© Ø§Ù„Ù…Ù†Ø´Ø¦Ø© ÙˆØªØ³Ø¹Ù‰ Ø´Ø±ÙƒØ© Ø§Ù„Ø­Ø±Ø§Ø³Ø© Ø§Ù„Ø¹Ø§Ù…Ù„Ù…ÙŠØ© Ù„Ø­ÙØ¸ Ø§Ù„Ø£Ù…Ù† ÙÙŠ Ù…Ø´Ø±ÙˆØ¹ÙŠÙ†Ø§ Ø§Ù„ÙƒØ¨ÙŠØ± Ù…Ù† Ø§ÙŠ Ø¹Ù…Ù„ ØªØ®Ø±ÙŠØ¨ÙŠ Ø§Ùˆ Ø§Ø®ØªØ±Ø§Ù‚ Ø§Ù…Ù†ÙŠ ',	''),
(12,	'../../upload/hgjgndhktyghnmtyrhmdrhj,liuyl.jpg',	'ÙØ±ÙŠÙ‚ Ø¹Ù…Ù„ Ù…Ø´Ø±ÙˆØ¹ Ø§Ù„Ù„Ø¤Ù„Ø¤Ø© ÙƒØ¨ÙŠØ± ÙˆØ¶Ø®Ù… ÙŠØ¶Ù… Ù…Ù† Ø§Ø¬Ø¯Ø± Ø§Ù„Ø®Ø¨Ø±Ø§Øª Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© ÙÙŠ Ø§Ù„Ø¹Ù…Ù„ Ø§Ù„Ø³ÙŠØ§Ø­ÙŠ Ùˆ ÙŠØ³Ø¹Ùˆ Ø¬Ù…ÙŠØ¹Ø§ Ù„Ø§Ø±Ø¶Ø§Ø¡ Ø§Ù„Ù…ÙˆÙØ¯ÙŠÙ† Ù…Ù† Ø§Ù„Ø³ÙŠØ§Ø­ Ø§Ù„Ø£Ø¬Ø§Ù†Ø¨ Ùˆ Ø§Ù„Ø¹Ø±Ø¨ Ùˆ ÙŠØ­Ù…Ù„ÙˆÙ† Ø§Ù„Ø§Ø¬Ø§Ø²Ø§Øª Ø§Ù„Ø¬Ø§Ù…Ø¹ÙŠØ© Ùˆ Ø§Ù„Ø´Ù‡Ø§Ø¯Ø§Øª Ø§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© ÙƒÙ„Ø§Ù‹ Ø¨Ø®ØªØµØ§ØµÙ‡ ÙˆÙ…Ø¯Ø±Ø¨ÙŠÙ† ØªØ¯Ø±ÙŠØ¨ ÙƒØ§Ù…Ù„ Ù„Ù„Ø¹Ù…Ù„ Ø¨Ø´ÙƒÙ„ Ø¬Ù…Ø§Ø¹ÙŠ Ùˆ Ø¨Ø¯Ù‚Ø© Ùˆ Ù„Ø¯Ù‡Ù… Ø§Ø®Ù„Ø§Ù‚ Ø¹Ø§Ù„ÙŠØ© Ùˆ ÙŠØ³Ø¹ÙˆÙ† Ø¯Ø§Ø¦Ù…Ø§ Ù„Ø±ÙØ¹ Ù…Ø³ØªÙˆÙ‰ Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ ÙƒÙƒÙ„ Ùˆ ÙŠØªÙ‚Ù„ÙˆÙ† Ø§ÙŠ Ø§Ù†ØªÙ‚Ø§Ø¯ Ø§Ùˆ Ø§Ù‚ØªØ±Ø§Ø­ Ù…Ù† Ù‚Ø¨Ù„ Ø§Ù„Ù…ÙˆÙØ¯ÙŠÙ† Ù…Ù† Ø§Ù„Ø³ÙŠØ§Ø­ ',	''),
(13,	'',	'',	'');

-- 2019-07-08 23:14:17
