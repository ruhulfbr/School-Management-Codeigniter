-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2015 at 11:00 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fcibd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE IF NOT EXISTS `admin_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'tuhin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_full_name` varchar(100) NOT NULL,
  `admin_phon_number` varchar(20) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_type` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_action` int(11) NOT NULL COMMENT 'active=1 0=unactibe',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_full_name`, `admin_phon_number`, `admin_email`, `admin_password`, `admin_type`, `created_at`, `admin_action`) VALUES
(1, 'ahsan habib', '01840040371', 'habib.cst@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '2015-08-18 09:36:41', 1),
(2, 'habib ahsab', '1238864', 'habib.cse@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2', '2015-08-18 09:05:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement`
--

CREATE TABLE IF NOT EXISTS `tbl_advertisement` (
  `advertisement_id` int(11) NOT NULL AUTO_INCREMENT,
  `advertisement_date` varchar(20) NOT NULL,
  `advertisement_hading` varchar(500) NOT NULL,
  `advertisement` longtext NOT NULL,
  `ad_action` varchar(10) NOT NULL,
  PRIMARY KEY (`advertisement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_advertisement`
--

INSERT INTO `tbl_advertisement` (`advertisement_id`, `advertisement_date`, `advertisement_hading`, `advertisement`, `ad_action`) VALUES
(2, '18/08/2015', 'dasfaf', 'dfsfsdvx afsgdfgd', '1'),
(3, '20/08/2015', 'dfsdfsd', 'fsfs\r\n   fsdfsd                     fsfsdfsdfsdsd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE IF NOT EXISTS `tbl_album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(100) NOT NULL,
  `album_caption` varchar(200) NOT NULL,
  `created_date` date NOT NULL,
  `publish` varchar(2) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_name`, `album_caption`, `created_date`, `publish`) VALUES
(11, 'ahsan', 'Fci Photo', '2015-08-03', '0'),
(12, 'Habib', 'Photo CSE', '2015-08-03', '0'),
(13, 'ahsan 2', 'asss', '2015-08-07', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `at_id` int(100) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(200) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `class_name` varchar(10) NOT NULL,
  `attend_date` varchar(20) NOT NULL,
  `student_status` varchar(10) NOT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`at_id`, `student_id`, `student_roll`, `student_name`, `class_name`, `attend_date`, `student_status`) VALUES
(1, '101', '30000000000', 'rgdf', '1', '03/08/2015', 'L'),
(2, '104', '30000000000', 'rgdf', '1', '03/08/2015', 'P'),
(3, '105', '30000000000', 'rgdf', '1', '03/08/2015', 'L'),
(4, '101', '30000000000', 'rgdf', '1', '04/08/2015', 'A'),
(5, '102', '30000000000', 'ahsan', '1', '04/08/2015', 'P'),
(6, '103', '30000000000', 'rgdf', '1', '04/08/2015', '1'),
(7, '104', '30000000000', 'rgdf', '1', '04/08/2015', 'P'),
(8, '105', '30000000000', 'rgdf', '2', '04/08/2015', 'P'),
(9, '106', '30000000000', 'rgdf', '1', '04/08/2015', 'P'),
(10, '101', '30000000000', 'rgdf', '3', '05/08/2015', 'L'),
(11, '102', '30000000000', 'ahsan', '1', '05/08/2015', 'P'),
(12, '103', '30000000000', 'rgdf', '1', '05/08/2015', 'P'),
(13, '104', '30000000000', 'rgdf', '1', '05/08/2015', 'P'),
(14, '105', '30000000000', 'rgdf', '1', '05/08/2015', 'P'),
(15, '106', '30000000000', 'rgdf', '1', '05/08/2015', 'P'),
(16, '101', '30000000000', 'rgdf', '1', '07/08/2015', 'P'),
(17, '102', '30000000000', 'ahsan', '1', '07/08/2015', 'A'),
(18, '103', '30000000000', 'rgdf', '1', '07/08/2015', 'L'),
(19, '104', '30000000000', 'rgdf', '1', '07/08/2015', 'P'),
(20, '105', '30000000000', 'rgdf', '1', '07/08/2015', 'A'),
(21, '106', '30000000000', 'rgdf', '1', '07/08/2015', 'P'),
(22, '101', '30000000000', 'rgdf', '1', '14/08/2015', 'P'),
(23, '102', '30000000000', 'ahsan', '1', '14/08/2015', 'A'),
(24, '103', '30000000000', 'rgdf', '1', '14/08/2015', 'P'),
(25, '104', '30000000000', 'rgdf', '1', '14/08/2015', 'P'),
(26, '105', '30000000000', 'rgdf', '1', '14/08/2015', 'P'),
(27, '106', '30000000000', 'rgdf', '1', '14/08/2015', 'L'),
(28, '101', '30000000000', 'rgdf', '1', '19/08/2015', 'P'),
(29, '102', '30000000000', 'ahsan', '1', '19/08/2015', 'P'),
(30, '103', '30000000000', 'rgdf', '1', '19/08/2015', 'P'),
(31, '104', '30000000000', 'rgdf', '1', '19/08/2015', 'A'),
(32, '105', '30000000000', 'rgdf', '1', '19/08/2015', 'L'),
(33, '106', '30000000000', 'rgdf', '1', '19/08/2015', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `dept_id` int(5) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(100) NOT NULL,
  `dept_code` varchar(20) NOT NULL,
  `dept_head` varchar(100) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dept_id`, `dept_name`, `dept_code`, `dept_head`) VALUES
(1, 'Computer Science & Technology', 'CST-45', 'Md: Atiqul Islam'),
(2, 'Data Telecommunication & Networking', 'DNT-44', 'MD: Abdullah Al Mamun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_date` varchar(50) NOT NULL,
  `event_hading` varchar(500) NOT NULL,
  `event` longtext NOT NULL,
  `e_action` varchar(10) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_date`, `event_hading`, `event`, `e_action`) VALUES
(1, '18/08/2015', '', 'helo', '1'),
(3, '17/08/2015', 'csdkg; fsd f', '\r\n             fsdg''uasnd a qapd fe           ', '1'),
(4, '19/08/2015', 'আলিম১মবর', 'গতকাল মঙ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_fee`
--

CREATE TABLE IF NOT EXISTS `tbl_exam_fee` (
  `exam_fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_exam_fee_id` varchar(100) NOT NULL,
  `exam_fee_date` varchar(30) NOT NULL,
  `exam_fee_status` varchar(20) NOT NULL,
  PRIMARY KEY (`exam_fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_exam_fee`
--

INSERT INTO `tbl_exam_fee` (`exam_fee_id`, `student_exam_fee_id`, `exam_fee_date`, `exam_fee_status`) VALUES
(1, '101', '05/08/2015', '1'),
(2, '106', '05/08/2015', '1'),
(3, '101=1', '05/08/2015', '1'),
(4, '102=1', '06/08/2015', '1'),
(5, '103=1', '06/08/2015', '1'),
(10, '104', '07/08/2015', '1'),
(11, '102', '07/08/2015', '1'),
(12, '103', '07/08/2015', '1'),
(13, '105', '07/08/2015', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

CREATE TABLE IF NOT EXISTS `tbl_fee` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` varchar(20) NOT NULL,
  `month_fee` varchar(100) NOT NULL,
  `Exam_fee` varchar(100) NOT NULL,
  `Extra_free` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `in_date` varchar(30) NOT NULL,
  `active_s` varchar(5) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_fee`
--

INSERT INTO `tbl_fee` (`f_id`, `class_id`, `month_fee`, `Exam_fee`, `Extra_free`, `type`, `in_date`, `active_s`) VALUES
(13, '1', '100', '', '', '1', '1/08/2015', '1'),
(14, '1', '', '200', '', '2', '1/08/2015', '1'),
(15, '1', '', '', '10', '3', '1/08/2015', '1'),
(16, '2', '200', '', '', '1', '1/08/2015', ''),
(17, '3', '100', '', '', '1', '1/08/2015', ''),
(18, '5', '200', '', '', '1', '1/08/2015', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mark`
--

CREATE TABLE IF NOT EXISTS `tbl_mark` (
  `m_id` int(111) NOT NULL AUTO_INCREMENT,
  `Student_id` varchar(100) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `exam_term` varchar(20) NOT NULL,
  `student_class` varchar(10) NOT NULL,
  `subject1` varchar(10) NOT NULL,
  `subject2` varchar(10) NOT NULL,
  `subject3` varchar(10) NOT NULL,
  `subject4` varchar(10) NOT NULL,
  `subject5` varchar(10) NOT NULL,
  `subject6` varchar(10) NOT NULL,
  `subject7` varchar(10) NOT NULL,
  `subject8` varchar(10) NOT NULL,
  `subject9` varchar(10) NOT NULL,
  `subject10` varchar(10) NOT NULL,
  `subject11` varchar(10) NOT NULL,
  `subject12` varchar(10) NOT NULL,
  `subject13` varchar(10) NOT NULL,
  `subject14` varchar(10) NOT NULL,
  `subject15` varchar(10) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_mark`
--

INSERT INTO `tbl_mark` (`m_id`, `Student_id`, `student_roll`, `year`, `exam_term`, `student_class`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `subject12`, `subject13`, `subject14`, `subject15`) VALUES
(1, '101', '1', '2014', '1', '1', '45', '76', '87', '87', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
(2, '102', '2', '2014', '1', '1', '56', '77', '89', '88', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
(3, '103', '1', '2015', '1', '1', '53', '543', '5', '4', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
(4, '101', '1', '2014', '1', '1', '90', '95', '98', '80', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
(5, '103', '30000000000', '2015', '1', '', '60', '70', '56', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
(6, '103', '30000000000', '2015', '2', '', '60', '44', '444', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
(7, '103', '30000000000', '2012', '3', '1', '60', '70', '56', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', ''),
(8, '103', '30000000000', '2015', '1', '1', '60', '70', '90', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_month_fee`
--

CREATE TABLE IF NOT EXISTS `tbl_month_fee` (
  `m_fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id_fee` varchar(100) NOT NULL,
  `month_date` varchar(30) NOT NULL,
  `fee_momth_status` varchar(20) NOT NULL,
  PRIMARY KEY (`m_fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_month_fee`
--

INSERT INTO `tbl_month_fee` (`m_fee_id`, `student_id_fee`, `month_date`, `fee_momth_status`) VALUES
(1, '101', '05/08/2015', '1'),
(2, '101=1', '05/08/2015', '1'),
(3, '102', '05/08/2015', '1'),
(4, '103', '05/08/2015', '1'),
(8, '104', '07/08/2015', '1'),
(9, '105', '07/08/2015', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE IF NOT EXISTS `tbl_notice` (
  `notice_id` int(5) NOT NULL AUTO_INCREMENT,
  `notice_title` varchar(100) NOT NULL,
  `notice_details` text NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `upload_date` date NOT NULL,
  `publish` tinyint(1) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`notice_id`, `notice_title`, `notice_details`, `pdf`, `upload_date`, `publish`) VALUES
(17, 'new Notice', 'new Notice', 'user_upload/notice/All_Nokia_Codes3.pdf', '2015-08-07', 1),
(18, 'alart new Notice', 'alart new Notice', 'user_upload/notice/s1.pdf', '2015-08-07', 1),
(19, 'hello', 'hello', 'user_upload/notice/All_Nokia_Codes4.pdf', '2015-08-07', 1),
(20, 'welcom', 'welcom', 'user_upload/notice/s2.pdf', '2015-08-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE IF NOT EXISTS `tbl_photos` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `photo_name` varchar(2000) NOT NULL,
  `photo_caption` varchar(100) NOT NULL,
  `upload_date` date NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `album_id` (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`photo_id`, `album_id`, `photo_name`, `photo_caption`, `upload_date`) VALUES
(1, 11, 'user_upload/01.jpg', '', '2015-08-03'),
(2, 12, 'user_upload/011.jpg', '', '2015-08-03'),
(3, 12, 'user_upload/page3_big2.jpg', '', '2015-08-03'),
(4, 12, 'user_upload/4.JPG', '', '2015-08-03'),
(5, 12, 'user_upload/page3_big1.jpg', '', '2015-08-03'),
(6, 12, 'user_upload/page3_big3.jpg', '', '2015-08-03'),
(7, 13, 'user_upload/Capturase.PNG', '', '2015-08-07'),
(8, 13, 'user_upload/d54da7de-6ad2-4c8a-8f57-145983808fb3_5.jpg', '', '2015-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_providhan`
--

CREATE TABLE IF NOT EXISTS `tbl_providhan` (
  `prob_id` int(2) NOT NULL AUTO_INCREMENT,
  `prob_name` varchar(20) NOT NULL,
  PRIMARY KEY (`prob_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_providhan`
--

INSERT INTO `tbl_providhan` (`prob_id`, `prob_name`) VALUES
(1, '2005'),
(2, '2010');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rules`
--

CREATE TABLE IF NOT EXISTS `tbl_rules` (
  `rules_id` int(11) NOT NULL AUTO_INCREMENT,
  `rules` longtext NOT NULL,
  `active_r` varchar(10) NOT NULL,
  PRIMARY KEY (`rules_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_rules`
--

INSERT INTO `tbl_rules` (`rules_id`, `rules`, `active_r`) VALUES
(4, 'যশোর জেলার অভয়নগর উপজেলার প???রাণকেন???দ???র শিল???প শহর নওয়াপাড়ায় ১৯২৭ সালে প???রতিষ???ঠিত হয় নওয়াপাড়া শংকরপাশা মাধ???যমিক বিদ???যালয়টি। বিদ???যালয়টি ১৯৪৫ সালে কলিকাতা \r\n                        ', '1'),
(5, 'যশোর জেলার অভয়নগর উপজেলার প???রাণকেন???দ???র শিল???প শহর নওয়াপাড়ায় ১৯২৭ সালে প???রতিষ???ঠিত হয় নওয়াপাড়া ', '1'),
(6, 'যশোর জেলার অভয়নগর উপজেলার প???রাণকেন???দ???র শিল???প শহর নওয়াপাড়ায় ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE IF NOT EXISTS `tbl_semester` (
  `sem_id` int(5) NOT NULL AUTO_INCREMENT,
  `sem_name` varchar(100) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`sem_id`, `sem_name`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_speak`
--

CREATE TABLE IF NOT EXISTS `tbl_speak` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `speak` longtext CHARACTER SET utf8 NOT NULL,
  `sp_type` varchar(10) NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_speak`
--

INSERT INTO `tbl_speak` (`sp_id`, `speak`, `sp_type`) VALUES
(5, '<p>&#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2509;&#2469;&#2494;&#2474;&#2495;&#2468;&#2404;&nbsp; &#2476;&#2480;&#2509;&#2468;&#2478;&#2494;&#2472; &#2488;&#2480;&#2453;&#2494;&#2480; &#2486;&#2495;&#2453;&#2509;&#2487;&#2494;&#2453;&#2509;&#2487;&#2503;&#2468;&#2509;&#2480;&#2503; &#2455;&#2467;&#2478;&#2497;&#2454;&#2496; &#2451; &#2488;&#2497;&#2470;&#2498;&#2480;&#2474;&#2509;&#2480;&#2488;&#2494;&#2480;&#2496; &#2479;&#2503; &#2486;&#2495;&#2453;&#2509;&#2487;&#2494;&#2472;&#2496;&#2468;&#2495; &#2455;&#2509;&#2480;&#2489;&#2467; &#2453;&#2480;&#2503;&#2459;&#2503; &#2468;&#2494;&#2480;&#2439; &#2471;&#2494;&#2480;&#2494;&#2476;&#2494;&#2489;&#2495;&#2453;&#2468;&#2494;&#2527; &#2465;&#2495;&#2460;&#2495;&#2463;&#2494;&#2482; &#2476;&#2494;&#2434;&#2482;&#2494;&#2470;&#2503;&#2486; &#2455;&#2524;&#2494;&#2480; &#2482;&#2453;&#2509;&#2487;&#2509;&#2479;&#2503; &#2447;&#2439; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2472;&#2495;&#2480;&#2482;&#2488; &#2474;&#2509;&#2480;&#2458;&#2503;&#2487;&#2509;&#2463;&#2494; &#2458;&#2494;&#2482;&#2495;&#2527;&#2503; &#2479;&#2494;&#2458;&#2509;&#2459;&#2503;&#2404; &#2438;&#2455;&#2494;&#2478;&#2496;&#2468;&#2503;&#2451; &#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2447;&#2439; &#2474;&#2509;&#2480;&#2458;&#2503;&#2487;&#2509;&#2463;&#2494; &#2437;&#2476;&#2509;&#2479;&#2489;&#2468; &#2469;&#2494;&#2453;&#2476;&#2503;&#2404; &#2486;&#2495;&#2453;&#2509;&#2487;&#2494;&#2480;&#2509;&#2469;&#2496;&#2470;&#2503;&#2480; &#2447;&#2439; &#2478;&#2494;&#2472;&#2488;&#2495;&#2453;&#2468;&#2494; &#2455;&#2524;&#2503; &#2468;&#2482;&#2494;&#2480; &#2482;&#2453;&#2509;&#2487;&#2509;&#2479;&#2503; &#2486;&#2495;&#2453;&#2509;&#2487;&#2453;, &#2453;&#2480;&#2509;&#2478;&#2458;&#2494;&#2480;&#2496; &#2451; &#2478;&#2509;&#2479;&#2494;&#2472;&#2503;&#2460;&#2495;&#2434; &#2453;&#2478;&#2495;&#2463;&#2495;&#2480; &#2488;&#2470;&#2488;&#2509;&#2479;&#2476;&#2499;&#2472;&#2509;&#2470; &#2472;&#2495;&#2480;&#2482;&#2488;&#2477;&#2494;&#2476;&#2503; &#2453;&#2494;&#2460; &#2453;&#2480;&#2503; &#2458;&#2482;&#2503;&#2459;&#2503;&#2472;&#2404; &#2459;&#2494;&#2468;&#2509;&#2480;&#2459;&#2494;&#2468;&#2509;&#2480;&#2496;&#2470;&#2503;&#2480; &#2486;&#2509;&#2480;&#2503;&#2467;&#2496;&#2453;&#2453;&#2509;&#2487;&#2503; &#2474;&#2494;&#2464;&#2470;&#2494;&#2472;&#2503;&#2480; &#2474;&#2494;&#2486;&#2494;&#2474;&#2494;&#2486;&#2495; &#2488;&#2489;&#2474;&#2494;&#2464;&#2453;&#2509;&#2480;&#2478;&#2495;&#2453; &#2453;&#2480;&#2509;&#2478;&#2453;&#2494;&#2472;&#2509;&#2465;&#2503; &#2437;&#2434;&#2486; &#2455;&#2509;&#2480;&#2489;&#2467; &#2472;&#2495;&#2486;&#2509;&#2458;&#2495;&#2468; &#2453;&#2480;&#2494; &#2489;&#2458;&#2509;&#2459;&#2503;&#2404; &#2479;&#2494;&#2468;&#2503; &#2468;&#2494;&#2480;&#2494; &#2477;&#2476;&#2495;&#2487;&#2509;&#2479;&#2468;&#2503; &#2472;&#2495;&#2460;&#2503;&#2470;&#2503;&#2480; &#2479;&#2507;&#2455;&#2509;&#2479;&#2468;&#2478; &#2472;&#2494;&#2455;&#2480;&#2495;&#2453; &#2489;&#2495;&#2488;&#2494;&#2476;&#2503; &#2455;&#2524;&#2503; &#2468;&#2497;&#2482;&#2468;&#2503; &#2474;&#2494;&#2480;&#2503;&#2404; &#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2482;&#2453;&#2509;&#2487;&#2509;&#2479; &#2451; &#2441;&#2470;&#2509;&#2470;&#2503;&#2486;&#2509;&#2479; &#2447;&#2453;&#2463;&#2495; &#2488;&#2497;&#2454;&#2496; &#2488;&#2478;&#2499;&#2470;&#2509;&#2471; &#2486;&#2507;&#2472;&#2494;&#2480; &#2476;&#2494;&#2434;&#2482;&#2494; &#2455;&#2524;&#2503; &#2468;&#2507;&#2482;&#2494;&#2404; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2488;&#2489;&#2494;&#2527; &#2489;&#2507;&#2472;&#2404;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&#2486;&#2497;&#2477;&#2503;&#2458;&#2509;&#2459;&#2494;&#2472;&#2509;&#2468;&#2503;<br />\r\n&#2478;&#2507; : &#2486;&#2489;&#2495;&#2470;&#2497;&#2482; &#2439;&#2488;&#2482;&#2494;&#2478;<br />\r\n&#2474;&#2509;&#2480;&#2471;&#2494;&#2472; &#2486;&#2495;&#2453;&#2509;&#2487;&#2453;<br />\r\n&#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;</strong></p>\r\n', 'Principal'),
(6, '<p>&#2478;&#2509;&#2479;&#2494;&#2472;&#2503;&#2460;&#2495;&#2434; &#2453;&#2478;&#2495;&#2463;&#2495;&#2480; &#2488;&#2470;&#2488;&#2509;&#2479;&#2476;&#2499;&#2472;&#2509;&#2470; &#2472;&#2495;&#2480;&#2482;&#2488;&#2477;&#2494;&#2476;&#2503; &#2453;&#2494;&#2460; &#2453;&#2480;&#2503; &#2458;&#2482;&#2503;&#2459;&#2503;&#2472;&#2404; &#2459;&#2494;&#2468;&#2509;&#2480;&#2459;&#2494;&#2468;&#2509;&#2480;&#2496;&#2470;&#2503;&#2480; &#2486;&#2509;&#2480;&#2503;&#2467;&#2496;&#2453;&#2453;&#2509;&#2487;&#2503; &#2474;&#2494;&#2464;&#2470;&#2494;&#2472;&#2503;&#2480; &#2474;&#2494;&#2486;&#2494;&#2474;&#2494;&#2486;&#2495; &#2488;&#2489;&#2474;&#2494;&#2464;&#2453;&#2509;&#2480;&#2478;&#2495;&#2453; &#2453;&#2480;&#2509;&#2478;&#2453;&#2494;&#2472;&#2509;&#2465;&#2503; &#2437;&#2434;&#2486; &#2455;&#2509;&#2480;&#2489;&#2467; &#2472;&#2495;&#2486;&#2509;&#2458;&#2495;&#2468; &#2453;&#2480;&#2494; &#2489;&#2458;&#2509;&#2459;&#2503;&#2404; &#2479;&#2494;&#2468;&#2503; &#2468;&#2494;&#2480;&#2494; &#2477;&#2476;&#2495;&#2487;&#2509;&#2479;&#2468;&#2503; &#2472;&#2495;&#2460;&#2503;&#2470;&#2503;&#2480; &#2479;&#2507;&#2455;&#2509;&#2479;&#2468;&#2478; &#2472;&#2494;&#2455;&#2480;&#2495;&#2453; &#2489;&#2495;&#2488;&#2494;&#2476;&#2503; &#2455;&#2524;&#2503; &#2468;&#2497;&#2482;&#2468;&#2503; &#2474;&#2494;&#2480;&#2503;&#2404; &#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2482;&#2453;&#2509;&#2487;&#2509;&#2479; &#2451; &#2441;&#2470;&#2509;&#2470;&#2503;&#2486;&#2509;&#2479; &#2447;&#2453;&#2463;&#2495; &#2488;&#2497;&#2454;&#2496; &#2488;&#2478;&#2499;&#2470;&#2509;&#2471; &#2486;&#2507;&#2472;&#2494;&#2480; &#2476;&#2494;&#2434;&#2482;&#2494; &#2455;&#2524;&#2503; &#2468;&#2507;&#2482;&#2494;&#2404; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2488;&#2489;&#2494;&#2527; &#2489;&#2507;&#2472;&#2404;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&#2486;&#2497;&#2477;&#2503;&#2458;&#2509;&#2459;&#2494;&#2472;&#2509;&#2468;&#2503;<br />\r\n&#2478;&#2507; : &#2486;&#2489;&#2495;&#2470;&#2497;&#2482; &#2439;&#2488;&#2482;&#2494;&#2478;<br />\r\n&#2474;&#2509;&#2480;&#2471;&#2494;&#2472; &#2486;&#2495;&#2453;&#2509;&#2487;&#2453;<br />\r\n&#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;</strong></p>\r\n', 'comiti'),
(7, '<p>&#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495; &#2488;&#2453;&#2482; &#2474;&#2509;&#2480;&#2486;&#2434;&#2488;&#2494; &#2478;&#2489;&#2494;&#2472; &#2438;&#2482;&#2509;&#2482;&#2494;&#2489; &#2468;&#2494;&#2438;&#2482;&#2494;&#2480;&#2404; &#2479;&#2486;&#2507;&#2480; &#2460;&#2503;&#2482;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480; &#2468;&#2469;&#2494; &#2486;&#2495;&#2482;&#2509;&#2474; &#2486;&#2489;&#2480; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494;&#2480; &#2474;&#2509;&#2480;&#2494;&#2467;&#2453;&#2503;&#2472;&#2509;&#2470;&#2509;&#2480;&#2503; &#2472;&#2451;&#2527;&#2494;&#2474;&#2494;&#2524;&#2494; &#2486;&#2434;&#2453;&#2480;&#2474;&#2494;&#2486;&#2494; &#2478;&#2494;&#2471;&#2509;&#2479;&#2478;&#2495;&#2453; &#2476;&#2495;&#2470;&#2509;&#2479;&#2494;&#2482;&#2527;&#2463;&#2495;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>jfasjhfk</p>\r\n\r\n<p>sjdashfja</p>\r\n\r\n<p>dhasfaskf</p>\r\n', 'Principal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stdinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_stdinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `admition_year` varchar(20) NOT NULL,
  `student` text NOT NULL,
  `smobile` double NOT NULL,
  `father` text NOT NULL,
  `fmobile` double NOT NULL,
  `mother` text NOT NULL,
  `mmobile` double NOT NULL,
  `village` text NOT NULL,
  `po` text NOT NULL,
  `upazilla` text NOT NULL,
  `district` text NOT NULL,
  `pvillage` text NOT NULL,
  `ppo` text NOT NULL,
  `pupazilla` text NOT NULL,
  `pdistrict` text NOT NULL,
  `guardian` text NOT NULL,
  `gmobile` double NOT NULL,
  `gvillage` text NOT NULL,
  `gpo` text NOT NULL,
  `gupazilla` text NOT NULL,
  `gdistrict` text NOT NULL,
  `birth` date NOT NULL,
  `class` text NOT NULL,
  `section` text NOT NULL,
  `roll` double NOT NULL,
  `academic` text NOT NULL,
  `compulsory` text NOT NULL,
  `subject` text NOT NULL,
  `blood` text NOT NULL,
  `sex` text NOT NULL,
  `sta` text NOT NULL,
  `email` text NOT NULL,
  `hobby` text NOT NULL,
  `reading` text NOT NULL,
  `walking` text NOT NULL,
  `traveling` text NOT NULL,
  `watching` text NOT NULL,
  `song` text NOT NULL,
  `debate` text NOT NULL,
  `game` text NOT NULL,
  `painting` text NOT NULL,
  `jokes` text NOT NULL,
  `sports` text NOT NULL,
  `status` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_stdinfo`
--

INSERT INTO `tbl_stdinfo` (`id`, `student_id`, `date`, `admition_year`, `student`, `smobile`, `father`, `fmobile`, `mother`, `mmobile`, `village`, `po`, `upazilla`, `district`, `pvillage`, `ppo`, `pupazilla`, `pdistrict`, `guardian`, `gmobile`, `gvillage`, `gpo`, `gupazilla`, `gdistrict`, `birth`, `class`, `section`, `roll`, `academic`, `compulsory`, `subject`, `blood`, `sex`, `sta`, `email`, `hobby`, `reading`, `walking`, `traveling`, `watching`, `song`, `debate`, `game`, `painting`, `jokes`, `sports`, `status`, `image`) VALUES
(3, '101', '2015-07-29', '2015', 'rgdf', 453453, 'hdfhdfh', 543543, 'hfdh', 543636, 'hdfh', 'fgdg', 'hdfh', 'fgdfgd', 'fhdh', 'dfgdfgd', 'fdhdh', 'fsdgsg', 'fdfhd', 453636, 'fhd', 'sgs', 'fdh', 'sfsg', '2015-07-28', '1', 'A', 30000000000, '2014', '', 'Math', '0+', 'Female', 'Present', 'habib.cst@gmail.com', 'Travelling', '', '', '', '', 'song', '', 'game', '', '', '', 0, ''),
(10, '102', '2015-07-29', '2015', 'ahsan', 453453, 'hdfhdfh', 543543, 'hfdh', 543636, 'hdfh', 'fgdg', 'hdfh', 'fgdfgd', 'fhdh', 'dfgdfgd', 'fdhdh', 'fsdgsg', 'fdfhd', 453636, 'fhd', 'sgs', 'fdh', 'sfsg', '2015-07-28', '1', 'A', 30000000000, '2014', '', 'Math', '0+', 'Female', 'Present', 'habib.cst@gmail.com', 'Travelling', '', '', '', '', 'song', '', 'game', '', '', '', 0, ''),
(6, '103', '2015-07-29', '2015', 'rgdf', 453453, 'hdfhdfh', 543543, 'hfdh', 543636, 'hdfh', 'fgdg', 'hdfh', 'fgdfgd', 'fhdh', 'dfgdfgd', 'fdhdh', 'fsdgsg', 'fdfhd', 453636, 'fhd', 'sgs', 'fdh', 'sfsg', '2015-07-28', '1', 'A', 30000000000, '2014', '', 'Math', '0+', 'Female', 'Present', 'habib.cst@gmail.com', 'Travelling', '', '', '', '', 'song', '', 'game', '', '', '', 0, ''),
(7, '104', '2015-07-29', '2015', 'rgdf', 453453, 'hdfhdfh', 543543, 'hfdh', 543636, 'hdfh', 'fgdg', 'hdfh', 'fgdfgd', 'fhdh', 'dfgdfgd', 'fdhdh', 'fsdgsg', 'fdfhd', 453636, 'fhd', 'sgs', 'fdh', 'sfsg', '2015-07-28', '1', 'A', 30000000000, '2014', '', 'Math', '0+', 'Female', 'Present', 'habib.cst@gmail.com', 'Travelling', '', '', '', '', 'song', '', 'game', '', '', '', 0, ''),
(8, '105', '2015-07-29', '2015', 'rgdf', 453453, 'hdfhdfh', 543543, 'hfdh', 543636, 'hdfh', 'fgdg', 'hdfh', 'fgdfgd', 'fhdh', 'dfgdfgd', 'fdhdh', 'fsdgsg', 'fdfhd', 453636, 'fhd', 'sgs', 'fdh', 'sfsg', '2015-07-28', '1', 'A', 30000000000, '2014', '', 'Math', '0+', 'Female', 'Present', 'habib.cst@gmail.com', 'Travelling', '', '', '', '', 'song', '', 'game', '', '', '', 0, ''),
(9, '106', '2015-07-29', '2015', 'rgdf', 453453, 'hdfhdfh', 543543, 'hfdh', 543636, 'hdfh', 'fgdg', 'hdfh', 'fgdfgd', 'fhdh', 'dfgdfgd', 'fdhdh', 'fsdgsg', 'fdfhd', 453636, 'fhd', 'sgs', 'fdh', 'sfsg', '2015-07-28', '1', 'A', 30000000000, '2014', '', 'Math', '0+', 'Female', 'Present', 'habib.cst@gmail.com', 'Travelling', '', '', '', '', 'song', '', 'game', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE IF NOT EXISTS `tbl_subject` (
  `sub_id` int(100) NOT NULL AUTO_INCREMENT,
  `class` varchar(20) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `sub_action` varchar(10) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`sub_id`, `class`, `subject_name`, `sub_action`) VALUES
(1, '1', 'Bangla', '1'),
(8, '1', 'Enaglish', '1'),
(9, '1', 'Ganarel', '1'),
(10, '1', 'drawing', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_successful_student`
--

CREATE TABLE IF NOT EXISTS `tbl_successful_student` (
  `ss_id` int(11) NOT NULL AUTO_INCREMENT,
  `sts_Name` varchar(200) NOT NULL,
  `sts_session` varchar(20) NOT NULL,
  `sts_photo` varchar(200) NOT NULL,
  `current_position` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`ss_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_successful_student`
--

INSERT INTO `tbl_successful_student` (`ss_id`, `sts_Name`, `sts_session`, `sts_photo`, `current_position`, `comment`) VALUES
(1, 'Ahsan fci', '09-10', 'teacher_img/ss_img/10947245_990533217643508_8391990201839267469_n1.jpg', 'Progmmar', 'phon 01840040371\r\n                    \r\n                    '),
(3, 'ftfhf', 'ffjfj', 'teacher_img/ss_img/10947245_990533217643508_8391990201839267469_n2.jpg', 'fghjfgj', 'fjfgjfj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_syllabus`
--

CREATE TABLE IF NOT EXISTS `tbl_syllabus` (
  `syl_id` int(11) NOT NULL AUTO_INCREMENT,
  `syl_name` varchar(200) NOT NULL,
  `dept_id` varchar(20) NOT NULL,
  `prob_id` varchar(20) NOT NULL,
  `pdf` varchar(500) NOT NULL,
  `s_type` varchar(100) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`syl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_syllabus`
--

INSERT INTO `tbl_syllabus` (`syl_id`, `syl_name`, `dept_id`, `prob_id`, `pdf`, `s_type`, `upload_date`) VALUES
(1, 'ahsanrrrrrrrrr', '1', '2015', 'user_upload/syllabuss9.pdf', '', '0000-00-00 00:00:00'),
(2, 'ahsan', '1', '2015', 'All_Nokia_Codes4.pdf', '', '0000-00-00 00:00:00'),
(3, 'ahsan', '1', '2015', 'All_Nokia_Codes5.pdf', '', '0000-00-00 00:00:00'),
(4, 'ahsan', '1', '2015', 'All_Nokia_Codes6.pdf', '', '0000-00-00 00:00:00'),
(5, 'ahsan', '5', '2015', 'user_upload/syllabusAll_Nokia_Codes11.pdf', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_techer_attand`
--

CREATE TABLE IF NOT EXISTS `tbl_techer_attand` (
  `at_t_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(11) NOT NULL,
  `att_date` varchar(20) NOT NULL,
  `att_status` varchar(10) NOT NULL,
  PRIMARY KEY (`at_t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `tbl_techer_attand`
--

INSERT INTO `tbl_techer_attand` (`at_t_id`, `teacher_id`, `att_date`, `att_status`) VALUES
(52, '26', '16/08/2015', 'P'),
(53, '27', '16/08/2015', 'L'),
(54, '26', '19/08/2015', 'P'),
(55, '27', '19/08/2015', 'A'),
(56, '25', '19/08/2015', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_treasury`
--

CREATE TABLE IF NOT EXISTS `tbl_treasury` (
  `treasury_id` int(11) NOT NULL AUTO_INCREMENT,
  `treasury_subject` varchar(500) NOT NULL,
  `add_date` varchar(20) NOT NULL,
  `amaunt` varchar(100) NOT NULL,
  PRIMARY KEY (`treasury_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_treasury`
--

INSERT INTO `tbl_treasury` (`treasury_id`, `treasury_subject`, `add_date`, `amaunt`) VALUES
(1, 'welcome', '06/08/2015', '100'),
(2, 'dsd ', '04/08/2015', '104'),
(3, 'wer', '30/08/2015', '500'),
(4, '                  \r\n                he', '30/08/2015', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload`
--

CREATE TABLE IF NOT EXISTS `tbl_upload` (
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  `up_name` varchar(500) NOT NULL,
  `up_pdf` varchar(1000) NOT NULL,
  `up_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `up_type` varchar(200) NOT NULL,
  `up_action` varchar(20) NOT NULL,
  PRIMARY KEY (`up_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_upload`
--

INSERT INTO `tbl_upload` (`up_id`, `up_name`, `up_pdf`, `up_date`, `up_type`, `up_action`) VALUES
(3, 'class attendance', 'user_upload/s.pdf', '2015-08-14 19:25:54', 'yearly-leave-calendar', '0'),
(4, 'class attendancedasdasda', 'user_upload/All_Nokia_Codes.pdf', '2015-08-14 19:26:10', 'class-routine', '0'),
(5, 'fdgd gdf gd ', 'user_upload/s1.pdf', '2015-08-14 19:38:02', 'yearly-leave-calendar', '0'),
(6, 'exam ', 'user_upload/New_Journal_Document.text', '2015-08-14 19:47:54', 'exam-routine', '0'),
(7, 'hello', 'user_upload/New_Journal_Document1.text', '2015-08-18 19:20:21', 'tot_ist', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_email`, `password`, `status`) VALUES
(1, 'a', '123', '1'),
(2, 'asd', '273519f7e55c72b9b7bb7a9e26502406', '');

-- --------------------------------------------------------

--
-- Table structure for table `tcacher_info`
--

CREATE TABLE IF NOT EXISTS `tcacher_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` text NOT NULL,
  `designation` varchar(120) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile_no` varchar(150) NOT NULL,
  `address` varchar(120) NOT NULL,
  `objectives` varchar(250) NOT NULL,
  `department` text NOT NULL,
  `type` text NOT NULL,
  `teacher_img` varchar(1000) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tcacher_info`
--

INSERT INTO `tcacher_info` (`id`, `full_name`, `designation`, `email`, `mobile_no`, `address`, `objectives`, `department`, `type`, `teacher_img`, `status`) VALUES
(26, 'Md.Ahsan', 'Principal', 'habib.cst@gmail.com', '01840040371', '23/b khathal bagan,Dhaka', 's', '0', 'Principal', 'teacher_img/pic2.jpg', 'Active'),
(27, 'shuvo', 'কর', 'bd.ahsan.habib45@gmail.com', '01840040371', 'ewgdfbbdgf dgdfgdffg df g', 'f', '0', 'Office Staff', 'teacher_img/Ahsan_habib_fci.jpg', 'Active'),
(25, 'MD:ahsan Habib cst', 'Department Head', 'habib.cst@gmail.com', '01840040371', 'Ahsan Ahsan Ahsan', 'a', '0', 'Teacher', 'teacher_img/pic1.jpg', 'Active'),
(28, 'ahsan', 'Labe ', 'fgdfg@gmail.com', '01840040371', 'dfsd tdgfd fg dg', 'dd', '0', 'Lab_Assis/Tr', 'teacher_img/pic1.jpg', 'Active'),
(29, 'Sumon', 'Techar', 'sumon@gmail.com', '12345678', 'vxfgdf dgdhfgfg', 'Bangla', '0', 'Teacher', 'teacher_img/Ahsan_habib_fci1.jpg', 'In_Active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD CONSTRAINT `tbl_photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `tbl_album` (`album_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
