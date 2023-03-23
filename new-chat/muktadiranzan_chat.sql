-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2019 at 02:33 PM
-- Server version: 10.2.24-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muktadiranzan_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `2360 Business Finance I`
--

CREATE TABLE `2360 Business Finance I` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `acb 221`
--

CREATE TABLE `acb 221` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acb 221`
--

INSERT INTO `acb 221` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 1, 'hi', '2019-06-05 23:02:39', 1),
(2, 0, 1, 'yo', '2019-06-05 23:25:02', 1),
(3, 0, 1, 'yo', '2019-06-05 23:25:02', 1),
(4, 0, 1, 'koi', '2019-06-05 23:25:29', 1),
(5, 0, 1, '<form method=\"get\" action=\"upload/C.M. MUKTADIR.pdf\"><button type=\"submit\"><p>C.M. MUKTADIR.pdf</p></button></form><br>', '2019-06-05 23:25:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 1, '2', '2019-06-03 15:22:30', 1),
(23, 0, 1, 'ji', '2019-05-23 19:56:59', 1),
(24, 0, 1, 'hohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohohoho', '2019-05-23 19:58:22', 1),
(25, 0, 17, 'no', '2019-05-23 19:58:33', 1),
(26, 0, 17, 'yo yo', '2019-05-23 19:58:55', 1),
(27, 0, 1, 'yo', '2019-05-23 19:59:02', 1),
(28, 0, 17, 'vola', '2019-05-23 20:06:40', 1),
(29, 0, 1, 'mama', '2019-05-23 20:08:00', 1),
(30, 0, 1, 'ol;a', '2019-05-23 20:10:50', 1),
(31, 0, 1, 'dtj', '2019-05-23 20:11:01', 1),
(32, 0, 17, 'ty', '2019-05-23 20:12:10', 1),
(33, 0, 1, 'ore', '2019-05-23 20:13:23', 1),
(34, 0, 17, 'ki', '2019-05-23 20:13:34', 1),
(35, 0, 17, 'okki', '2019-05-23 20:13:46', 1),
(36, 0, 17, 'jao', '2019-05-23 20:14:35', 1),
(37, 0, 17, 'asgf', '2019-05-23 20:15:53', 1),
(38, 0, 1, 'fdkym', '2019-05-23 20:31:04', 1),
(39, 0, 21, 'Djjd', '2019-05-23 22:59:02', 1),
(40, 0, 21, 'Bbsbs', '2019-05-23 22:59:08', 1),
(60, 0, 1, 'uk', '2019-06-03 21:14:37', 1),
(61, 0, 1, 'po', '2019-06-03 21:15:21', 1),
(62, 0, 1, 'gh', '2019-06-03 21:16:13', 1),
(63, 0, 1, 'yu', '2019-06-03 21:17:15', 1),
(64, 0, 1, 'hh', '2019-06-03 21:18:10', 1),
(65, 0, 1, 'iop', '2019-06-03 21:19:11', 1),
(66, 0, 1, 'fg', '2019-06-03 21:22:30', 1),
(67, 0, 1, 'ok', '2019-06-04 16:29:05', 1),
(68, 0, 1, 'gh', '2019-06-04 21:03:39', 1),
(69, 0, 1, 'gh', '2019-06-04 21:05:39', 1),
(70, 0, 1, '<form method=\"get\" action=\"upload/C.M. MUKTADIR.pdf\"><button type=\"submit\"><p>C.M. MUKTADIR.pdf</p></button></form><br>', '2019-06-04 21:14:14', 1),
(71, 0, 1, '<form method=\"get\" action=\"upload/people-creating-business-cartoon-style_46147-23.jpg\"><button type=\"submit\"><p>people-creating-business-cartoon-style_46147-23.jpg</p></button></form><br>', '2019-06-04 21:31:46', 1),
(72, 0, 1, 'lolo', '2019-06-05 18:00:08', 1),
(73, 0, 1, 'lolo', '2019-06-05 18:00:21', 1),
(74, 0, 1, 'lolo', '2019-06-05 18:00:21', 1),
(75, 0, 1, 'lolo', '2019-06-05 18:00:21', 1),
(76, 0, 1, 'lolo', '2019-06-05 18:00:21', 1),
(77, 0, 1, 'lolo', '2019-06-05 18:00:21', 1),
(78, 0, 1, 'lolo', '2019-06-05 18:00:21', 1),
(79, 0, 1, 'lolo', '2019-06-05 18:00:22', 1),
(80, 0, 1, 'lolo', '2019-06-05 18:00:22', 1),
(81, 0, 1, 'lolo', '2019-06-05 18:00:22', 1),
(82, 0, 1, 'lolo', '2019-06-05 18:00:22', 1),
(83, 0, 1, 'lolo', '2019-06-05 18:00:22', 1),
(84, 0, 1, 'lolo', '2019-06-05 18:00:22', 1),
(85, 0, 1, 'lolo', '2019-06-05 18:00:22', 1),
(86, 0, 1, 'lolo', '2019-06-05 18:00:23', 1),
(87, 0, 1, 'lolo', '2019-06-05 18:00:23', 1),
(88, 0, 1, 'lolo', '2019-06-05 18:00:23', 1),
(89, 0, 1, 'lolo', '2019-06-05 18:00:23', 1),
(90, 0, 1, 'lolo', '2019-06-05 18:00:23', 1),
(91, 0, 1, 'lolo', '2019-06-05 18:00:23', 1),
(92, 0, 1, 'lolo', '2019-06-05 18:00:23', 1),
(93, 0, 1, 'lolo', '2019-06-05 18:00:23', 1),
(94, 0, 27, 'Hi there\n\n            			', '2019-06-06 02:34:05', 1),
(95, 0, 26, 'Hi<div>This is Jason</div>', '2019-06-06 02:34:17', 1),
(96, 0, 27, 'Hey\n\n            			', '2019-06-06 02:35:11', 1),
(97, 0, 27, 'Hu', '2019-06-06 02:35:21', 1),
(98, 0, 27, 'Hi\n\n            			', '2019-06-06 02:35:41', 1),
(99, 0, 28, 'Hey there!&nbsp;\n\n            			<div>Myself Fahim</div>', '2019-06-06 06:19:12', 1),
(100, 0, 29, 'Hey', '2019-06-06 14:37:40', 1),
(101, 0, 30, 'Hello<br>', '2019-06-06 15:30:52', 1),
(102, 0, 1, 'gh<div><br></div>', '2019-06-06 19:25:31', 1),
(103, 0, 1, 'dd', '2019-06-06 19:25:59', 1),
(104, 0, 1, 'fg', '2019-06-06 19:35:08', 1),
(105, 0, 1, 'hi', '2019-06-06 19:35:44', 1),
(106, 0, 1, 'hello', '2019-06-06 19:35:55', 1),
(107, 0, 1, 'okay', '2019-06-06 19:36:06', 1),
(108, 0, 1, 'f\n\n            			', '2019-06-06 19:42:02', 1),
(109, 0, 1, 'ola<div><br></div>', '2019-06-06 19:45:28', 1),
(110, 0, 1, 'okki<div><br></div>', '2019-06-06 19:45:39', 1),
(111, 0, 1, 'hi<div><br></div>', '2019-06-06 19:46:23', 1),
(112, 0, 1, 'ok<div><br></div>', '2019-06-06 19:55:58', 1),
(113, 0, 1, 'too<div><br></div>', '2019-06-06 19:56:15', 1),
(114, 0, 1, 'go<div><br></div>', '2019-06-06 19:59:18', 1),
(115, 0, 1, 'ss', '2019-06-06 20:02:58', 1),
(116, 0, 1, 'hello people&nbsp;', '2019-06-06 21:59:31', 1),
(117, 0, 1, 'wrgwrgw wgwgw&nbsp;', '2019-06-06 22:08:51', 1),
(118, 0, 1, 'fg', '2019-06-06 22:09:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message1`
--

CREATE TABLE `chat_message1` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message1`
--

INSERT INTO `chat_message1` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(23, 0, 1, 'ji', '2019-05-23 13:56:59', 1),
(24, 0, 1, 'ho', '2019-05-23 13:58:22', 1),
(25, 0, 17, 'no', '2019-05-23 13:58:33', 1),
(26, 0, 17, 'yo yo', '2019-05-23 13:58:55', 1),
(27, 0, 1, 'yo', '2019-05-23 13:59:02', 1),
(28, 0, 17, 'vola', '2019-05-23 14:06:40', 1),
(29, 0, 1, 'mama', '2019-05-23 14:08:00', 1),
(30, 0, 1, 'ol;a', '2019-05-23 14:10:50', 1),
(31, 0, 1, 'dtj', '2019-05-23 14:11:01', 1),
(32, 0, 17, 'ty', '2019-05-23 14:12:10', 1),
(33, 0, 1, 'ore', '2019-05-23 14:13:23', 1),
(34, 0, 17, 'ki', '2019-05-23 14:13:34', 1),
(35, 0, 17, 'okki', '2019-05-23 14:13:46', 1),
(36, 0, 17, 'jao', '2019-05-23 14:14:35', 1),
(37, 0, 17, 'asgf', '2019-05-23 14:15:53', 1),
(38, 0, 1, 'fdkym', '2019-05-23 14:31:04', 1),
(60, 0, 1, 'uk', '2019-06-03 15:14:37', 1),
(61, 0, 1, 'po', '2019-06-03 15:15:21', 1),
(62, 0, 1, 'gh', '2019-06-03 15:16:13', 1),
(63, 0, 1, 'yu', '2019-06-03 15:17:15', 1),
(64, 0, 1, 'hh', '2019-06-03 15:18:10', 1),
(65, 0, 1, 'iop', '2019-06-03 15:19:11', 1),
(66, 0, 1, 'fg', '2019-06-03 15:22:30', 1),
(67, 0, 26, 'sda]<div><br></div>', '2019-06-06 02:32:43', 1),
(68, 0, 26, 'Hello<div><br></div>', '2019-06-06 02:32:53', 1),
(69, 0, 28, 'Hello there!\n\n            			', '2019-06-06 06:21:22', 1),
(70, 0, 29, 'Ask64', '2019-06-06 14:38:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message2`
--

CREATE TABLE `chat_message2` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message2`
--

INSERT INTO `chat_message2` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 1, '2', '2019-06-03 15:22:30', 1),
(2, 0, 29, 'Hello world<br>', '2019-06-06 14:38:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message3`
--

CREATE TABLE `chat_message3` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message3`
--

INSERT INTO `chat_message3` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 17, '3', '2019-06-03 15:22:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message4`
--

CREATE TABLE `chat_message4` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message4`
--

INSERT INTO `chat_message4` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 17, '4', '2019-06-03 15:22:30', 1),
(2, 0, 29, 'hello world', '2019-06-06 14:39:22', 1),
(3, 0, 1, 'ff', '2019-06-07 07:09:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message5`
--

CREATE TABLE `chat_message5` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message5`
--

INSERT INTO `chat_message5` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 17, '5', '2019-06-03 15:22:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message6`
--

CREATE TABLE `chat_message6` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message6`
--

INSERT INTO `chat_message6` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 17, '6', '2019-06-03 15:22:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message7`
--

CREATE TABLE `chat_message7` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message7`
--

INSERT INTO `chat_message7` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 17, '7', '2019-06-03 15:22:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message8`
--

CREATE TABLE `chat_message8` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message8`
--

INSERT INTO `chat_message8` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(21, 0, 1, '8', '2019-06-03 15:22:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message9`
--

CREATE TABLE `chat_message9` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message9`
--

INSERT INTO `chat_message9` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(21, 0, 1, '9', '2019-06-03 15:22:30', 1),
(22, 0, 1, 'fvefv&nbsp;', '2019-06-06 22:17:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message10`
--

CREATE TABLE `chat_message10` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message10`
--

INSERT INTO `chat_message10` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(21, 0, 1, '10', '2019-06-03 15:22:30', 1),
(22, 0, 29, 'hello world<div><br></div>', '2019-06-06 14:40:23', 1),
(23, 0, 1, 'go', '2019-06-06 20:22:37', 1),
(24, 0, 1, 'go', '2019-06-06 20:22:44', 1),
(25, 0, 1, 'hi', '2019-06-07 07:07:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message11`
--

CREATE TABLE `chat_message11` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message11`
--

INSERT INTO `chat_message11` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(21, 0, 1, '11', '2019-06-03 15:22:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `CSI 221`
--

CREATE TABLE `CSI 221` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CSI 221`
--

INSERT INTO `CSI 221` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(23, 0, 1, 'ji', '2019-05-23 13:56:59', 1),
(24, 0, 1, 'ho', '2019-05-23 13:58:22', 1),
(25, 0, 17, 'no', '2019-05-23 13:58:33', 1),
(26, 0, 17, 'yo yo', '2019-05-23 13:58:55', 1),
(27, 0, 1, 'yo', '2019-05-23 13:59:02', 1),
(28, 0, 17, 'vola', '2019-05-23 14:06:40', 1),
(29, 0, 1, 'mama', '2019-05-23 14:08:00', 1),
(30, 0, 1, 'ol;a', '2019-05-23 14:10:50', 1),
(31, 0, 1, 'dtj', '2019-05-23 14:11:01', 1),
(32, 0, 17, 'ty', '2019-05-23 14:12:10', 1),
(33, 0, 1, 'ore', '2019-05-23 14:13:23', 1),
(34, 0, 17, 'ki', '2019-05-23 14:13:34', 1),
(35, 0, 17, 'okki', '2019-05-23 14:13:46', 1),
(36, 0, 17, 'jao', '2019-05-23 14:14:35', 1),
(37, 0, 17, 'asgf', '2019-05-23 14:15:53', 1),
(38, 0, 1, 'fdkym', '2019-05-23 14:31:04', 1),
(39, 0, 21, 'Djjd', '2019-05-23 16:59:02', 1),
(40, 0, 21, 'Bbsbs', '2019-05-23 16:59:08', 1),
(60, 0, 1, 'uk', '2019-06-03 15:14:37', 1),
(61, 0, 1, 'po', '2019-06-03 15:15:21', 1),
(62, 0, 1, 'gh', '2019-06-03 15:16:13', 1),
(63, 0, 1, 'yu', '2019-06-03 15:17:15', 1),
(64, 0, 1, 'hh', '2019-06-03 15:18:10', 1),
(65, 0, 1, 'iop', '2019-06-03 15:19:11', 1),
(66, 0, 1, 'fg', '2019-06-03 15:22:30', 1),
(67, 0, 1, 'df', '2019-06-05 23:01:25', 1),
(68, 0, 1, 'holy', '2019-06-05 23:02:01', 1),
(69, 0, 1, 'aso', '2019-06-05 23:25:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Fardeen`
--

CREATE TABLE `Fardeen` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friendlist`
--

CREATE TABLE `friendlist` (
  `id` int(11) NOT NULL,
  `friend1` varchar(50) NOT NULL,
  `friend2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendlist`
--

INSERT INTO `friendlist` (`id`, `friend1`, `friend2`) VALUES
(1, '17', '1'),
(4, '1', '19'),
(5, '21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` int(11) NOT NULL,
  `request_from` varchar(50) NOT NULL,
  `request_to` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `request_from`, `request_to`) VALUES
(1, '1', '20'),
(5, '1', '23'),
(6, '1', '23'),
(7, '1', '23'),
(8, '1', '23'),
(9, '1', '23'),
(10, '1', '23'),
(11, '30', '26'),
(12, '31', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'johnsmith', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2019-05-23 18:13:16', 'no'),
(2, 2, '2019-05-23 19:34:54', 'no'),
(3, 1, '2019-05-23 18:43:47', 'no'),
(4, 1, '2019-05-23 19:13:25', 'no'),
(5, 1, '2019-05-23 19:13:34', 'no'),
(6, 1, '2019-05-23 19:25:46', 'no'),
(7, 0, '2019-05-23 19:29:42', 'no'),
(8, 1, '2019-05-23 19:29:58', 'no'),
(9, 1, '2019-05-23 19:32:11', 'no'),
(10, 1, '2019-05-23 19:34:38', 'no'),
(11, 17, '2019-05-23 19:35:57', 'no'),
(12, 1, '2019-05-23 19:57:18', 'no'),
(13, 2, '2019-05-23 19:57:50', 'no'),
(14, 1, '2019-05-23 20:00:27', 'no'),
(15, 17, '2019-05-23 20:15:16', 'no'),
(16, 17, '2019-05-23 20:04:05', 'no'),
(17, 1, '2019-05-23 20:14:48', 'no'),
(18, 1, '2019-05-23 20:16:11', 'no'),
(19, 17, '2019-05-23 20:15:59', 'no'),
(20, 17, '2019-05-23 20:29:59', 'no'),
(21, 1, '2019-05-23 20:32:19', 'no'),
(22, 17, '2019-05-23 21:13:16', 'no'),
(23, 1, '2019-05-23 20:33:22', 'no'),
(24, 21, '2019-05-23 23:00:03', 'no'),
(25, 22, '2019-05-25 03:03:43', 'no'),
(26, 1, '2019-05-28 21:04:45', 'no'),
(27, 1, '2019-05-30 19:22:21', 'no'),
(28, 1, '2019-05-30 19:28:41', 'no'),
(29, 23, '2019-05-31 20:31:21', 'no'),
(30, 1, '2019-06-01 20:26:24', 'no'),
(31, 1, '2019-06-01 20:42:48', 'no'),
(32, 1, '2019-06-01 21:55:33', 'no'),
(33, 1, '2019-06-01 22:55:58', 'no'),
(34, 1, '2019-06-02 14:40:34', 'no'),
(35, 1, '2019-06-02 18:26:40', 'no'),
(36, 1, '2019-06-02 20:56:45', 'no'),
(37, 1, '2019-06-03 01:18:15', 'no'),
(38, 23, '2019-06-03 01:36:25', 'no'),
(39, 1, '2019-06-03 02:00:51', 'no'),
(40, 1, '2019-06-03 15:55:29', 'no'),
(41, 1, '2019-06-03 21:15:09', 'no'),
(42, 1, '2019-06-04 16:28:52', 'no'),
(43, 1, '2019-06-05 17:28:37', 'no'),
(44, 1, '2019-06-06 00:33:10', 'no'),
(45, 26, '2019-06-06 02:32:30', 'no'),
(46, 27, '2019-06-06 02:33:40', 'no'),
(47, 28, '2019-06-06 06:18:05', 'no'),
(48, 29, '2019-06-06 14:37:12', 'no'),
(49, 30, '2019-06-06 15:06:27', 'no'),
(50, 1, '2019-06-06 18:43:55', 'no'),
(51, 1, '2019-06-06 21:51:50', 'no'),
(52, 31, '2019-06-06 22:32:49', 'no'),
(53, 1, '2019-06-06 22:35:02', 'no'),
(54, 1, '2019-06-07 06:58:13', 'no'),
(55, 31, '2019-06-07 07:18:20', 'no'),
(56, 31, '2019-06-07 07:18:21', 'no'),
(57, 31, '2019-06-07 07:18:21', 'no'),
(58, 1, '2019-06-07 07:19:21', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `Math 101 Friends`
--

CREATE TABLE `Math 101 Friends` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Math 101 Friends`
--

INSERT INTO `Math 101 Friends` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 1, 'aso guys', '2019-06-05 23:27:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageid` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `private_chat_list`
--

CREATE TABLE `private_chat_list` (
  `chat_id` int(11) NOT NULL,
  `chat_name` varchar(1200) NOT NULL,
  `users` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private_chat_list`
--

INSERT INTO `private_chat_list` (`chat_id`, `chat_name`, `users`) VALUES
(6, 'CSI 221', 'Muktadir Anzan'),
(7, 'CSI 221', 'Israt Jahan'),
(8, 'CSI 221', 'Ishrak Hossain'),
(19, 'Math 101 Friends', 'Muktadir Anzan'),
(18, 'acb 221', 'Muktadir Anzan'),
(20, 'Math 101 Friends', 'Ishrak Hossain'),
(21, 'Math 101 Friends', 'Mo'),
(23, 'Fardeen', 'Wasiful Alam Fahim'),
(24, 'Fardeen', 'Fardeen'),
(25, '2360 Business Finance I', 'Alvin'),
(26, '2360 Business Finance I', 'Jason');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `curriculum` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `email`, `phone`, `password`, `curriculum`, `image`) VALUES
(1, 'Muktadir Anzan', 'muktadir@gmail.com', '01923491285', '81dc9bdb52d04dc20036dbd8313ed055', 'Bachelor of Science in Computer Science & Engineering', 'upload/blank-profile-picture-973460_960_720.png'),
(17, 'Israt Jahan', 'muktadir_anzan@yahoo.com', '01923491285', '81dc9bdb52d04dc20036dbd8313ed055', 'Bachelor of Social Science in Economics', 'upload/profile.png'),
(18, 'Jason', 'jason.yi@smu.ca', '1234567', '65e7c43e5c9687e930245a0620508716', 'Bachelor of Business Administration (BBA)', 'upload/profile.png'),
(20, 'Mmo', 'motutoring123@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'Bachelor of Business Administration (BBA)', 'upload/profile.png'),
(21, 'Mo', 'motutoring123@gmail.com', 'Tutoring ', 'e10adc3949ba59abbe56e057f20f883e', 'Bachelor of Business Administration (BBA)', 'upload/profile.png'),
(22, 'Jason Yi', 'Jason.yi@smu.ca', '', '65e7c43e5c9687e930245a0620508716', 'Bachelor of Science in Computer Science & Engineering', 'upload/profile.png'),
(23, 'Ishrak Hossain', 'ish@gmail.com', '1234', '81dc9bdb52d04dc20036dbd8313ed055', 'Bachelor of Science in Electrical And Electronic Engineering', 'upload/profile.png'),
(24, 'Jason', '12345@outlook.com', '123456', '81b073de9370ea873f548e31b8adc081', 'Bachelor of Business Administration (BBA)', ''),
(25, 'Jason', '12345@outlook.com', '123456', 'd41d8cd98f00b204e9800998ecf8427e', 'Bachelor of Business Administration (BBA)', ''),
(26, 'Jason', '12345@outlook.com', '123456', '527272411fe99a8b5e9da254ac0aae88', 'Bachelor of Business Administration (BBA)', ''),
(27, 'Mohammed Islam', 'motutoring123@gmail.com', '9024414928', 'e10adc3949ba59abbe56e057f20f883e', 'Bachelor of Business Administration (BBA)', ''),
(28, 'Wasiful Alam Fahim', 'fahimbd329@gmail.com', '01815371441', '6299973917fc81e777549048484fe184', 'Bachelor of Business Administration (BBA)', ''),
(29, 'Elvin', 'lijngn2@163.com', '2239391', '35d43796598b854538101f61877a242f', 'Bachelor of Social Science in Economics', ''),
(30, 'Alvin', '903373785@qq.com', '18872171155', '21d31fd555768d0940bae0251ea45077', 'Bachelor of Business Administration (BBA)', ''),
(31, 'Mashnun Akash', 'mashnun@gmail.com', '01719432156', '81dc9bdb52d04dc20036dbd8313ed055', 'Bachelor of Science in Computer Science & Engineering', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2360 Business Finance I`
--
ALTER TABLE `2360 Business Finance I`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `acb 221`
--
ALTER TABLE `acb 221`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message1`
--
ALTER TABLE `chat_message1`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message2`
--
ALTER TABLE `chat_message2`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message3`
--
ALTER TABLE `chat_message3`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message4`
--
ALTER TABLE `chat_message4`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message5`
--
ALTER TABLE `chat_message5`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message6`
--
ALTER TABLE `chat_message6`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message7`
--
ALTER TABLE `chat_message7`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message8`
--
ALTER TABLE `chat_message8`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message9`
--
ALTER TABLE `chat_message9`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message10`
--
ALTER TABLE `chat_message10`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `chat_message11`
--
ALTER TABLE `chat_message11`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `CSI 221`
--
ALTER TABLE `CSI 221`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `Fardeen`
--
ALTER TABLE `Fardeen`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `friendlist`
--
ALTER TABLE `friendlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `Math 101 Friends`
--
ALTER TABLE `Math 101 Friends`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `private_chat_list`
--
ALTER TABLE `private_chat_list`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2360 Business Finance I`
--
ALTER TABLE `2360 Business Finance I`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `acb 221`
--
ALTER TABLE `acb 221`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `chat_message1`
--
ALTER TABLE `chat_message1`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `chat_message2`
--
ALTER TABLE `chat_message2`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat_message3`
--
ALTER TABLE `chat_message3`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_message4`
--
ALTER TABLE `chat_message4`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat_message5`
--
ALTER TABLE `chat_message5`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_message6`
--
ALTER TABLE `chat_message6`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_message7`
--
ALTER TABLE `chat_message7`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_message8`
--
ALTER TABLE `chat_message8`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chat_message9`
--
ALTER TABLE `chat_message9`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `chat_message10`
--
ALTER TABLE `chat_message10`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `chat_message11`
--
ALTER TABLE `chat_message11`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `CSI 221`
--
ALTER TABLE `CSI 221`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `Fardeen`
--
ALTER TABLE `Fardeen`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friendlist`
--
ALTER TABLE `friendlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `Math 101 Friends`
--
ALTER TABLE `Math 101 Friends`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `private_chat_list`
--
ALTER TABLE `private_chat_list`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
