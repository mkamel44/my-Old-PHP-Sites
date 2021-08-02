-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1,	'c4ca4238a0b923820dcc509a6f75849b',	'c4ca4238a0b923820dcc509a6f75849b'),
(2,	'c81e728d9d4c2f636f067f89cc14862c',	'c81e728d9d4c2f636f067f89cc14862c');

DROP TABLE IF EXISTS `alamat`;
CREATE TABLE `alamat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `sbject_teacher_classes_rooms_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `alamat` (`id`, `student_id`, `teacher_id`, `sbject_teacher_classes_rooms_id`, `mark`, `about`) VALUES
(6,	3,	2,	1,	0,	'Ù…Ø°Ø§ÙƒØ±Ø© Ø§Ù„ÙØµÙ„ Ø§Ù„Ø§ÙˆÙ„'),
(5,	2,	2,	1,	10,	'Ù…Ø°Ø§ÙƒØ±Ø© Ø§Ù„ÙØµÙ„ Ø§Ù„Ø§ÙˆÙ„');

DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `classes` (`id`, `name`) VALUES
(5,	'Ø§Ù„ØµÙ Ø§Ù„Ø«Ø§Ù†ÙŠ'),
(4,	'Ø§Ù„ØµÙ Ø§Ù„Ø£ÙˆÙ„');

DROP TABLE IF EXISTS `classes_rooms`;
CREATE TABLE `classes_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `classes_rooms` (`id`, `class_id`, `room_id`) VALUES
(1,	4,	1),
(2,	4,	2),
(3,	5,	1),
(4,	5,	2),
(5,	5,	3);

DROP TABLE IF EXISTS `dawam`;
CREATE TABLE `dawam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classes_rooms_id` int(11) NOT NULL,
  `subjects_name` text NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `day_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `dawam` (`id`, `classes_rooms_id`, `subjects_name`, `from_time`, `to_time`, `day_name`) VALUES
(1,	5,	'Ø§Ø¨Ù„Ø§Ø¨Ù„',	'00:00:10',	'00:00:12',	'Ø§Ù„Ø³Ø¨Øª'),
(8,	3,	'Ø¹Ù„ÙˆÙ…',	'18:36:27',	'21:41:32',	'Ø§Ù„Ø³Ø¨Øª'),
(7,	1,	'1',	'18:09:53',	'18:09:55',	'Ø§Ù„Ø³Ø¨Øª');

DROP TABLE IF EXISTS `exam`;
CREATE TABLE `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `subjects_name` text NOT NULL,
  `date_of_exam` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `exam` (`id`, `class_id`, `subjects_name`, `date_of_exam`) VALUES
(1,	5,	'Ø³Ø´Ø´Ø³',	'2019-05-21 18:52:00'),
(4,	4,	'Ø³Ø¨Ø³Ø¨Ø³',	'2019-05-21 21:59:00'),
(6,	4,	'Ø¨Ù„Ø¨Ù„',	'2019-05-21 21:59:00');

DROP TABLE IF EXISTS `jyaab_students`;
CREATE TABLE `jyaab_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `classes_rooms_id` int(11) NOT NULL,
  `date_of_hodor` date NOT NULL,
  `jyaab_hodor` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `jyaab_students` (`id`, `student_id`, `classes_rooms_id`, `date_of_hodor`, `jyaab_hodor`) VALUES
(1,	2,	5,	'0000-00-00',	'Ø­Ø¶ÙˆØ±'),
(5,	2,	5,	'2019-05-19',	'ØºÙŠØ§Ø¨'),
(4,	3,	5,	'2019-05-19',	'Ø­Ø¶ÙˆØ±');

DROP TABLE IF EXISTS `msgs`;
CREATE TABLE `msgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `msg_title` text NOT NULL,
  `msg` longtext NOT NULL,
  `msg_datetime` datetime NOT NULL,
  `msg_shown` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `msgs` (`id`, `student_id`, `teacher_id`, `msg_title`, `msg`, `msg_datetime`, `msg_shown`) VALUES
(1,	3,	3,	'jkijijoio0',	'luiouiouolulolouuloo o lulllllllllllllllllll',	'2019-05-22 16:41:07',	'false'),
(2,	2,	3,	'kuiluilyil',	'yikyikykiyik',	'2019-05-22 16:41:33',	'false'),
(4,	2,	2,	'gergt rgef',	' g sfsfs fs',	'2019-05-24 09:02:13',	'true');

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `rooms` (`id`, `name`) VALUES
(1,	'Ø§Ù„Ø´Ø¹Ø¨Ø© Ø§Ù„Ø§ÙˆÙ„Ù‰'),
(2,	'Ø§Ù„Ø´Ø¹Ø¨Ø© Ø§Ù„Ø«Ø§Ù†ÙŠØ©'),
(3,	'Ø§Ù„Ø´Ø¹Ø¨Ø© Ø§Ù„Ø«Ø§Ù„Ø«Ø©');

DROP TABLE IF EXISTS `sbject_teacher_classes_rooms`;
CREATE TABLE `sbject_teacher_classes_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classes_rooms_id` int(11) NOT NULL,
  `subjects_id` int(11) NOT NULL,
  `teachars_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `sbject_teacher_classes_rooms` (`id`, `classes_rooms_id`, `subjects_id`, `teachars_id`) VALUES
(1,	5,	4,	2),
(2,	3,	3,	3),
(3,	3,	4,	2);

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `birth` date NOT NULL,
  `phone` text NOT NULL,
  `sex` text NOT NULL,
  `classes_rooms_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `students` (`id`, `name`, `pass`, `fname`, `lname`, `father_name`, `mother_name`, `birth`, `phone`, `sex`, `classes_rooms_id`) VALUES
(3,	'Ø§Ø­Ù…Ø¯ Ø³Ø§Ù…Ø±',	'5978',	'44',	'sfsf',	'sfs',	'sfsf',	'1901-01-11',	'32424',	'Ø°ÙƒØ±',	5),
(2,	'Ù…Ø­Ù…Ø¯ ÙƒØ§Ù…Ù„',	'65978',	'1',	'1',	'1',	'1',	'1901-01-11',	'54674564',	'Ø°ÙƒØ±',	5);

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `about` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `subjects` (`id`, `name`, `about`) VALUES
(3,	'Ø¹Ø±Ø¨ÙŠ',	'Ø¹Ø±Ø¨ÙŠ Ø¹Ø±Ø¨ÙŠ Ø¹Ø±Ø¨ÙŠ Ø¹Ø±Ø¨ÙŠ Ø¹Ø±Ø¨ÙŠ Ø¹Ø±Ø¨ÙŠ Ø¹Ø±Ø¨ÙŠ '),
(4,	'Ø±Ø§Ø¶ÙŠØ§Øª',	'Ø±Ø§Ø¶ÙŠØ§Øª Ø±Ø§Ø¶ÙŠØ§Øª Ø±Ø§Ø¶ÙŠØ§Øª Ø±Ø§Ø¶ÙŠØ§Øª Ø±Ø§Ø¶ÙŠØ§Øª Ø±Ø§Ø¶ÙŠØ§Øª ');

DROP TABLE IF EXISTS `teachars`;
CREATE TABLE `teachars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` text NOT NULL,
  `mobile` text NOT NULL,
  `dgree` text NOT NULL,
  `about` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `teachars` (`id`, `name`, `pass`, `fname`, `lname`, `phone`, `mobile`, `dgree`, `about`) VALUES
(2,	'Ù…Ø­Ù…Ø¯',	'65978',	'Ø³Ø¨Ø³Ø¨',	'Ø³Ø¨Ø³',	'3442',	'3242342',	'Ø³Ø³Ø¨Ø³',	'Ø³ Ø¨Ø³Ø¨ Ø³Ø¨ Ø³Ø¨Ø³'),
(3,	'Ø§Ø­Ù…Ø¯',	'65978',	'1',	'1',	'1',	'1',	'1',	'1');

-- 2019-05-26 13:34:11
