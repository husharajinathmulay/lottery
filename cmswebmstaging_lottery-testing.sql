-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2021 at 10:28 AM
-- Server version: 10.3.31-MariaDB-log
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmswebmstaging_lottery-testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `lottery_cms`
--

CREATE TABLE `lottery_cms` (
  `cms_pkey` int(20) NOT NULL,
  `web_page` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_unique_key_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'cms unique key name',
  `cms_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `cms_text` text CHARACTER SET latin1 NOT NULL,
  `cms_meta_title` varchar(150) CHARACTER SET latin1 NOT NULL,
  `cms_meta_desc` text CHARACTER SET latin1 NOT NULL,
  `cms_meta_keyword` varchar(250) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_ip_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_ip_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lottery_cms`
--

INSERT INTO `lottery_cms` (`cms_pkey`, `web_page`, `cms_unique_key_name`, `cms_title`, `cms_text`, `cms_meta_title`, `cms_meta_desc`, `cms_meta_keyword`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`, `created_ip_address`, `updated_ip_address`) VALUES
(1, '1', 'lottery', 'lottery', 'Get Fastest Satta Matka Results, Sure Satta Batta, Kalyan Madhur Bazar,\r\n        Madhur Matka Tips.', 'lottery test', 'lottery test', 'lottery test', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(2, '1', 'about us', 'about us', '<p class=\"para-1\">\r\n        Satta Matka No1 The Most Popular Lottery Website. <br>\r\n        Get Latest Updates, Satta Matka Results, Kalyan Matka Tips Today At\r\n        SattaMatkaNo1.Net. <br>\r\n        Get Free Madhur Satta Matka Tips, ???? ????, Madhur Matka Result, Kalyan\r\n        Matka Tips, Madhur Bazar Tips, Satta Batta From Our Experts. <br>\r\n        Join Satta Matka Guessing Forum Where You Can Discuss For Quick\r\n        Earnings. <br>\r\n        The Best Opportunity For The People To Get Engaged In Madhur Day Bazar.\r\n        <br>\r\n        We Are The Ones Who Can Help You Earn The Best By Playing Game Online.\r\n        <br>\r\n        SattaMatkaNo1 Is The Globally Renowned Website For Kalyan Chart, Kalyan\r\n        Matka Result, Satta Market, Madhur Chart , Madhur Satta Results, Satta\r\n        Matta Matka, 143 Tricks. <br>\r\n        All Market Live Results Are Available With Us And We Provide You Online\r\n        Madhur Day, Madhur Matka Results. <br>\r\n        SattaMatkaNo1.Net Request You To Contact Us For Live Updates And Experts\r\n        Helps You With The Tips, Tricks For The Quickest Earnings. <br>\r\n        We Are Here To Share Those Secrets To Get You Closer To Victory. <br>\r\n        Visit Our Website And Get The Best Profits Daily And Become A Satta\r\n        King.\r\n      </p>', 'about us', 'about us', 'about us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(3, '1', 'FAQ\'s', 'FAQ\'s', '<div class=\"text-center p-3 bot-blue\" id=\"faq\">\r\n      <p>What is the History of Satta matka?</p>\r\n      <p class=\"text-justify\">\r\n        Satta Matka, matka gambling game or lottery game is invented in 1950s.\r\n        Satta matak came into existence after the independence of India. The\r\n        founder of Satta Matka is Ratan Khatri. He is also known as the King of\r\n        satta matka. Generally, Players also call Satta matka, Satta matta Matka\r\n        as “Ankada Jugar”. This Lottery game is becoming famous these days. The\r\n        new evaluation in the games makes matka game popular among satta\r\n        players.\r\n      </p>\r\n    </div>\r\n    <div class=\"text-center p-3 bot-blue\" id=\"faq\">\r\n      <p>How to play satta matka?</p>\r\n      <p class=\"text-justify\">\r\n        Ratan Khatri introduces the term opening and closing rates of satta\r\n        matka. Players choose a random number ranging from 0-9. The selected\r\n        number is written on paper and it is dropped into the matka. A person\r\n        then picks the number from the matka and the winner is declared..\r\n      </p>\r\n    </div>\r\n    <div class=\"text-center p-3 bot-blue\" id=\"faq\">\r\n      <p>Changes in Satta Matta Matka?</p>\r\n      <p class=\"text-justify\">\r\n        Many changes make satta matka a popular game in India. Now you can play\r\n        the games with three numbers using the card. Players are getting live\r\n        satta matka result. The new games in satta have become more entertaining\r\n        than ever before. The new satta is also offering a guarantee of safety.\r\n        Join Sattamatkano1.net, one of the top and leading live satta gaming\r\n        today, and win!\r\n      </p>\r\n    </div>\r\n    <div class=\"text-center p-3 bot-blue\" id=\"faq\">\r\n      <p>Get Madhur Bazar, Madhur Day Result At SattaMatkaNo1.Net</p>\r\n      <p class=\"text-justify\">\r\n        SATTA MATKA NO 1 has now become one of the most famous satta sites for\r\n        playing SattaMatka games.Here you can play the most popular online Satta\r\n        games with a quick SattaMatka Result. So, do you want to know more about\r\n        our satta site? Visit our website and get the best tips for Madhur Satta\r\n        Matka Our satta team is welcoming you to the world’s best SattaMatka\r\n        games. We are offering the real Satta Matta Matka games for all players.\r\n        Here you will get an amazing chance to win the SattaMatka King. Check\r\n        out your Madhur Day Result and SattaMatka Result now\r\n      </p>\r\n    </div>\r\n    <div class=\"text-center p-3 bot-blue\" id=\"faq\">\r\n      <p>What is the meaning of satta matka?</p>\r\n      <p class=\"text-justify\">\r\n        SATTA MATKA: India\' Most Popular Lottery Game Have you ever heard about\r\n        the word “SATTA”, if yes then you must be aware about satta matka. Satta\r\n        Matka is a type of Indian betting that was introduced before Indian\r\n        independence. In modern days, Satta Matka is a game that depends on\r\n        numbers and players play satta by guessing these numbers to win. If you\r\n        win the game, you will become the Satta King. Are you a deep heart fan\r\n        of satta games, and also hesitating about playing the online satta game?\r\n        Well, don’t be hesitating if you are at Satta Matka No1\r\n      </p>\r\n    </div>', 'faq', 'faq', 'faq', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(4, '1', 'contact us', 'contact us', '<p>\r\n        LOTTERY.NET <br>\r\n        CONTACT (SITE ADMIN) <br>\r\n        PROF: JOHN DOE<br>\r\n        ALL RIGHT RESEVERD © 2012-2021<br>\r\n      </p>', 'contact us', 'contact us', 'contact us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(5, '2', 'Lottery', 'Lottery', 'Lottery two test', 'Lottery', 'Lottery', 'Lottery', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(6, '2', 'About Us', 'About Us', 'About Us two test', 'About Us', 'About Us', 'About Us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(7, '2', 'FAQ\'s', 'FAQ\'s', 'FAQ\'s two test', 'FAQ\'s', 'FAQ\'s', 'FAQ\'s', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(8, '2', 'Contact Us', 'Contact Us', 'Contact Us two', 'Contact Us', 'Contact Us', 'Contact Us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(9, '3', 'Lottery', 'Lottery three', 'Lottery three test', 'Lottery', 'Lottery', 'Lottery', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(10, '3', 'About Us', 'About Us three', 'About Us three', 'About Us', 'About Us', 'About Us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(11, '3', 'FAQ\'s', 'FAQ\'s three', 'FAQ\'s three test', 'FAQ\'s', 'FAQ\'s', '', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(12, '3', 'Contact Us', 'Contact Us three', 'Contact Us three', 'Contact Us', 'Contact Us', 'Contact Us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(13, '4', 'Lottery', 'Lottery four', 'Lottery four', 'Lottery', 'Lottery', 'Lottery', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(14, '4', 'About Us', 'About Us four', 'About Us four', 'About Us', 'About Us', 'About Us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(15, '4', 'FAQ\'s', 'FAQ\'s four', 'FAQ\'s four test', 'FAQ\'s', 'FAQ\'s', 'FAQ\'s', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(16, '4', 'Contact Us', 'Contact Us', 'Contact Us four', 'Contact Us', 'Contact Us', 'Contact Us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(17, '5', 'Lottery', 'Lottery five', 'Lottery five', 'Lottery', 'Lottery', '', NULL, NULL, NULL, NULL, 1, '', ''),
(18, '5', 'About Us', 'About Us five', 'About Us five', 'About Us', 'About Us', 'About Us', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(19, '5', 'FAQ\'s', 'FAQ\'s five', 'FAQ\'s five', 'FAQ\'s', 'FAQ\'s', 'FAQ\'s', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(20, '5', 'Contact Us', 'Contact Us', 'Contact Us five test', 'Contact Us', 'Contact Us', '', NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lottery_game`
--

CREATE TABLE `lottery_game` (
  `pk_id` int(11) NOT NULL,
  `game_name` text DEFAULT NULL,
  `open_time` text DEFAULT NULL,
  `close_time` text DEFAULT NULL,
  `text_color` text DEFAULT NULL,
  `result_color` text DEFAULT NULL,
  `back_color` text DEFAULT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `txtid` text DEFAULT NULL,
  `status` enum('1','2','3','') NOT NULL DEFAULT '1' COMMENT '1="active" 2=''''inactive" 3="delete"',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_by` int(200) DEFAULT NULL,
  `created_date` text DEFAULT NULL,
  `created_ip_address` varchar(255) DEFAULT NULL,
  `created_mac_address` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` text DEFAULT NULL,
  `updated_ip_address` varchar(200) DEFAULT NULL,
  `update_mac_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery_game`
--

INSERT INTO `lottery_game` (`pk_id`, `game_name`, `open_time`, `close_time`, `text_color`, `result_color`, `back_color`, `added_on`, `txtid`, `status`, `is_deleted`, `created_by`, `created_date`, `created_ip_address`, `created_mac_address`, `updated_at`, `updated_by`, `updated_ip_address`, `update_mac_address`) VALUES
(1, 'KALYAN DAY', '11:00 AM', '11:00 AM', '#ff0000', '#121212', '#ffffff', '2021-09-27 10:39:31', NULL, '1', '0', 2, '2021-09-27 10:39:31', '::1', NULL, '2021-09-27 06:48:19', '2', '::1', NULL),
(2, 'MAIN MORNING', '12:00 PM', '12:00 PM', '#ff0000', '#121212', '#ffffff', '2021-09-27 10:40:16', NULL, '1', '0', 2, '2021-09-27 10:40:16', '::1', NULL, '2021-09-27 06:48:17', '2', '::1', NULL),
(3, 'NEW TIMES DAY', '1:00 PM', '1:00 PM', '#0059ff', '#00b4cc', '#bdd9ff', '2021-09-27 10:41:04', NULL, '1', '0', 2, '2021-09-27 10:41:04', '::1', NULL, '2021-09-27 12:23:28', '2', '::1', NULL),
(4, 'RAJDHANI DAY', '4:00 PM', '4:00 PM', '#ff0000', '#121212', '#ffffff', '2021-09-27 10:42:49', NULL, '1', '0', 2, '2021-09-27 10:42:49', '::1', NULL, '2021-09-27 06:48:11', '2', '::1', NULL),
(5, 'WARLI DAY', '6:00 PM', '6:00 PM', '#ff0000', '#121212', '#ffffff', '2021-09-27 10:43:24', NULL, '1', '0', 2, '2021-09-27 10:43:24', '::1', NULL, '2021-09-27 06:48:09', '2', '::1', NULL),
(6, 'DECCAN DAY', '12:45 PM', '12:45 AM', '#ff0000', '#121212', '#ffffff', '2021-09-27 10:44:01', NULL, '1', '0', 2, '2021-09-27 10:44:01', '::1', NULL, '2021-09-27 06:48:06', '2', '::1', NULL),
(7, 'GM DAY', '10:45 PM', '10:45 AM', '#ff0000', '#121212', '#ffffff', '2021-09-27 10:44:32', NULL, '1', '0', 2, '2021-09-27 10:44:32', '::1', NULL, '2021-09-27 06:48:05', '2', '::1', NULL),
(8, 'SUPREME DAY', '5:35 PM', '1:15 PM', '#ff0000', '#121212', '#ffff00', '2021-09-27 11:48:13', NULL, '1', '0', 2, '2021-09-27 11:48:13', '::1', NULL, '2021-09-28 12:09:14', '2', '103.229.247.39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lottery_game_result`
--

CREATE TABLE `lottery_game_result` (
  `pk_id` int(11) NOT NULL,
  `game_id` text DEFAULT NULL,
  `game_time` text DEFAULT NULL,
  `open_time_result` text DEFAULT NULL,
  `close_time_result` text DEFAULT NULL,
  `open_time_result_two` text DEFAULT NULL,
  `close_time_result_two` text DEFAULT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `txtid` text DEFAULT NULL,
  `status` enum('1','2','3','') NOT NULL DEFAULT '1' COMMENT '1="active" 2=''''inactive" 3="delete"',
  `game_status` enum('0','1') NOT NULL DEFAULT '0',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_by` int(200) DEFAULT NULL,
  `created_date` text DEFAULT NULL,
  `created_ip_address` varchar(255) DEFAULT NULL,
  `created_mac_address` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` text DEFAULT NULL,
  `updated_ip_address` varchar(200) DEFAULT NULL,
  `update_mac_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery_game_result`
--

INSERT INTO `lottery_game_result` (`pk_id`, `game_id`, `game_time`, `open_time_result`, `close_time_result`, `open_time_result_two`, `close_time_result_two`, `added_on`, `txtid`, `status`, `game_status`, `is_deleted`, `created_by`, `created_date`, `created_ip_address`, `created_mac_address`, `updated_at`, `updated_by`, `updated_ip_address`, `update_mac_address`) VALUES
(1, '8', 'Open', '234', '789', '5', '6', '2021-09-27 21:26:00', NULL, '1', '1', '0', 2, '2021-09-26 17:19:04', '103.229.247.39', NULL, '2021-09-28 16:16:37', NULL, NULL, NULL),
(2, '7', 'Open', '345', '567', '3', '4', '2021-09-27 17:19:15', NULL, '1', '0', '0', 2, '2021-09-27 17:19:15', '103.229.247.39', NULL, '2021-09-28 16:16:27', NULL, NULL, NULL),
(3, '6', 'Open', '125', '678', '4', '5', '2021-09-27 17:19:32', NULL, '1', '0', '0', 2, '2021-09-27 17:19:32', '103.229.247.39', NULL, '2021-09-28 16:16:21', NULL, NULL, NULL),
(4, '5', 'Open', '657', '876', '6', '7', '2021-09-27 17:19:45', NULL, '1', '0', '0', 2, '2021-09-27 17:19:45', '103.229.247.39', NULL, '2021-09-28 16:16:17', NULL, NULL, NULL),
(5, '4', 'Open', '666', '345', '8', '8', '2021-09-27 17:20:06', NULL, '1', '0', '0', 2, '2021-09-27 17:20:06', '103.229.247.39', NULL, '2021-09-28 16:16:10', NULL, NULL, NULL),
(6, '3', 'Open', '123', '764', '4', '5', '2021-09-27 17:20:20', NULL, '1', '0', '0', 2, '2021-09-27 17:20:20', '103.229.247.39', NULL, '2021-09-28 16:16:07', NULL, NULL, NULL),
(7, '2', 'Open', '757', '867', '5', '7', '2021-09-28 17:20:39', NULL, '1', '0', '0', 2, '2021-09-28 17:20:39', '103.229.247.39', NULL, '2021-09-28 16:16:01', NULL, NULL, NULL),
(8, '1', 'Open', '846', '764', '4', '4', '2021-09-28 17:20:54', NULL, '1', '0', '0', 2, '2021-09-28 17:20:54', '103.229.247.39', NULL, '2021-09-28 16:15:58', NULL, NULL, NULL),
(9, '8', 'Open', '708', '191', '3', '7', '2021-09-28 17:34:14', NULL, '1', '1', '0', 2, '2021-09-28 17:34:14', '103.229.247.39', NULL, '2021-09-28 16:30:34', NULL, NULL, NULL),
(10, '8', 'Open', '098', '544', '7', '6', '2021-09-28 22:00:35', NULL, '1', '0', '0', 2, '2021-09-28 22:00:35', '103.110.252.56', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lottery_system_log`
--

CREATE TABLE `lottery_system_log` (
  `id` int(11) NOT NULL COMMENT 'Primary KEY of the table',
  `user_type` enum('1','2','3') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '1=admin,2=faculty,3=student',
  `models_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'table names',
  `log_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Edit, Delete etc..',
  `log_data` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Data of the log json format',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'date and time of the record created',
  `logged_in_user_id` int(11) DEFAULT NULL COMMENT 'Which User is logged in'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lottery_system_log`
--

INSERT INTO `lottery_system_log` (`id`, `user_type`, `models_name`, `log_type`, `log_data`, `created_at`, `logged_in_user_id`) VALUES
(1, '', 'lottery_game', 'insert', '{\"id\":1,\"game_name\":\"test\",\"open_time\":\"5:30 PM\",\"close_time\":\"5:30 PM\",\"text_color\":\"#976b53\",\"result_color\":\"#963636\",\"back_color\":\"#6a2020\",\"created_by\":\"1\",\"created_date\":\"2021-09-25 17:29:09\",\"created_ip_address\":\"::1\"}', '2021-09-25 11:59:09', NULL),
(2, '', 'lottery_game', 'status', '{\"id\":true,\"status\":\"2\"}', '2021-09-25 12:18:18', NULL),
(3, '', 'lottery_game', 'status', '{\"id\":true,\"status\":\"1\"}', '2021-09-25 12:18:20', NULL),
(4, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"test one\",\"open_time\":\"5:30 PM\",\"close_time\":\"5:30 PM\",\"text_color\":\"#976b53\",\"result_color\":\"#963636\",\"back_color\":\"#6a2020\",\"updated_by\":\"1\",\"updated_at\":\"2021-09-25 17:58:50\",\"updated_ip_address\":\"::1\"}', '2021-09-25 12:28:50', NULL),
(5, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"test one\",\"open_time\":\"5:45 PM\",\"close_time\":\"5:30 PM\",\"text_color\":\"#976b53\",\"result_color\":\"#963636\",\"back_color\":\"#6a2020\",\"updated_by\":\"1\",\"updated_at\":\"2021-09-25 17:59:07\",\"updated_ip_address\":\"::1\"}', '2021-09-25 12:29:07', NULL),
(6, '', 'lottery_game', 'delete', '{\"id\":true,\"status\":\"3\"}', '2021-09-25 12:41:12', NULL),
(7, '', 'lottery_useradmin', 'UA_status', '{\"UA_pkey\":true,\"UA_status\":\"2\"}', '2021-09-25 18:14:28', NULL),
(8, '', 'lottery_useradmin', 'UA_status', '{\"UA_pkey\":true,\"UA_status\":\"1\"}', '2021-09-25 18:14:33', NULL),
(9, '', 'lottery_useradmin', 'UA_status', '{\"UA_pkey\":true,\"UA_status\":\"2\"}', '2021-09-25 18:14:40', NULL),
(10, '', 'lottery_useradmin', 'UA_status', '{\"UA_pkey\":true,\"UA_status\":\"1\"}', '2021-09-25 18:14:44', NULL),
(11, '', 'lottery_useradmin', 'insert', '{\"id\":0,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"\",\"UA_state\":\"24\",\"UA_mobile\":\"7083719169\",\"UA_password\":\"aHVzaGFyMTIzNA==\",\"UA_priviliges\":null,\"UA_createdDate\":\"2021-09-25 23:48:07\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/60cdd365edaa1.jpg\"}', '2021-09-25 18:18:08', NULL),
(12, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"erew\",\"UA_Address\":\"pune\",\"UA_city\":\"27\",\"UA_state\":\"24\",\"UA_mobile\":\"7083719169\",\"UA_updatedDate\":\"2021-09-25 23:59:24\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/60cdd365edaa1.jpg\"}', '2021-09-25 18:29:24', NULL),
(13, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"27\",\"UA_state\":\"24\",\"UA_mobile\":\"7083719169\",\"UA_updatedDate\":\"2021-09-26 00:02:30\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/60cdd365edaa1.jpg\"}', '2021-09-25 18:32:30', NULL),
(14, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"ng\",\"UA_state\":\"mh\",\"UA_mobile\":\"7083719169\",\"UA_updatedDate\":\"2021-09-26 00:06:13\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/60cdd365edaa1.jpg\"}', '2021-09-25 18:36:14', NULL),
(15, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"ng\",\"UA_state\":\"mh\",\"UA_mobile\":\"7083719169\",\"UA_updatedDate\":\"2021-09-26 00:19:39\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 18:49:39', NULL),
(16, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"ng\",\"UA_state\":\"mh\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"view_dashboard\",\"UA_updatedDate\":\"2021-09-26 00:41:05\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 19:11:05', NULL),
(17, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"ng\",\"UA_state\":\"mh\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"view_dashboard,view_result_master,add_result_master,view_cms_master,add_cms_master,view_game_master,add_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master\",\"UA_updatedDate\":\"2021-09-26 00:44:19\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 19:14:19', NULL),
(18, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"ng\",\"UA_state\":\"mh\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 00:53:02\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 19:23:02', NULL),
(19, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"mplussoftesting@gmail.com\",\"UA_Name\":\"Super admin\",\"UA_Address\":\"pune\",\"UA_city\":\"Pune\",\"UA_state\":\"Maharastra\",\"UA_mobile\":\"9764565678\",\"UA_priviliges\":\"view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 00:57:25\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f781c2a4e1.jpg\"}', '2021-09-25 19:27:26', NULL),
(20, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"mplussoftesting@gmail.com\",\"UA_Name\":\"Super admin\",\"UA_Address\":\"pune\",\"UA_city\":\"Pune\",\"UA_state\":\"Maharastra\",\"UA_mobile\":\"9764565678\",\"UA_priviliges\":\"view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 00:57:33\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f781c2a4e1.jpg\"}', '2021-09-25 19:27:41', NULL),
(21, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"pune\",\"UA_state\":\"Maharastra\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"view_result_master,view_cms_master,view_game_master\",\"UA_updatedDate\":\"2021-09-26 01:00:48\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f78e800192.png\"}', '2021-09-25 19:30:48', NULL),
(22, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"pune\",\"UA_state\":\"Maharastra\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 01:07:47\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f78e800192.png\"}', '2021-09-25 19:37:47', NULL),
(23, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"pune\",\"UA_city\":\"ng\",\"UA_state\":\"mh\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 01:08:03\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 19:38:03', NULL),
(24, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"\",\"UA_city\":\"ng\",\"UA_state\":\"mh\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 01:17:29\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 19:47:30', NULL),
(25, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"\",\"UA_city\":\"ng\",\"UA_state\":\"\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 01:18:18\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 19:48:19', NULL),
(26, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"hushar2018@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"\",\"UA_city\":\"\",\"UA_state\":\"\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 01:21:01\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 19:51:03', NULL),
(27, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"mplussoftesting@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"\",\"UA_city\":\"\",\"UA_state\":\"\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 01:22:07\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 19:52:08', NULL),
(28, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"mplussoftesting@gmail.com\",\"UA_Name\":\"test\",\"UA_Address\":\"Pune\",\"UA_city\":\"Pune\",\"UA_state\":\"Maharastra\",\"UA_mobile\":\"7083719169\",\"UA_priviliges\":\"select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-26 01:40:46\",\"UA_ip_address\":\"::1\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f6f431b8e4.png\"}', '2021-09-25 20:10:47', NULL),
(29, '', 'lottery_game', 'insert', '{\"id\":1,\"game_name\":\"Game Test\",\"open_time\":\"8:15 AM\",\"close_time\":\"8:15 AM\",\"text_color\":\"#b29090\",\"result_color\":\"#ec6565\",\"back_color\":\"#dd0e0e\",\"created_by\":null,\"created_date\":\"2021-09-26 08:14:00\",\"created_ip_address\":\"::1\"}', '2021-09-26 02:44:00', NULL),
(30, '', 'lottery_game', 'insert', '{\"id\":2,\"game_name\":\"game test one\",\"open_time\":\"8:45 AM\",\"close_time\":\"8:45 AM\",\"text_color\":\"#833f3f\",\"result_color\":\"#3a0d0d\",\"back_color\":\"#e15656\",\"created_by\":null,\"created_date\":\"2021-09-26 08:33:04\",\"created_ip_address\":\"::1\"}', '2021-09-26 03:03:04', NULL),
(31, '', 'lottery_game', 'insert', '{\"id\":3,\"game_name\":\"one\",\"open_time\":\"10:30 AM\",\"close_time\":\"10:30 AM\",\"text_color\":\"#000000\",\"result_color\":\"#000000\",\"back_color\":\"#000000\",\"created_by\":\"2\",\"created_date\":\"2021-09-26 10:21:40\",\"created_ip_address\":\"::1\"}', '2021-09-26 04:51:40', NULL),
(32, '', 'lottery_game_result', 'insert', '{\"id\":1,\"game_id\":\"2\",\"game_time\":\"Close\",\"open_time_result\":\"123\",\"close_time_result_two\":\"2\",\"open_time_result_two\":\"2\",\"close_time_result\":\"123\",\"created_by\":\"2\",\"created_date\":\"2021-09-26 10:55:11\",\"created_ip_address\":\"::1\"}', '2021-09-26 05:25:13', NULL),
(33, '', 'lottery_game_result', 'insert', '{\"id\":2,\"game_id\":\"3\",\"game_time\":\"Close\",\"open_time_result\":\"435\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"3\",\"close_time_result\":\"236\",\"created_by\":\"2\",\"created_date\":\"2021-09-26 11:21:10\",\"created_ip_address\":\"::1\"}', '2021-09-26 05:51:10', NULL),
(34, '', 'lottery_game_result', 'insert', '{\"id\":3,\"game_id\":\"3\",\"game_time\":\"Open\",\"open_time_result\":\"435\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"3\",\"close_time_result\":\"236\",\"created_by\":\"2\",\"created_date\":\"2021-09-26 15:48:16\",\"created_ip_address\":\"::1\"}', '2021-09-26 10:18:17', NULL),
(35, '', 'lottery_game_result', 'update', '{\"id\":true,\"game_id\":\"1\",\"game_time\":\"Open\",\"open_time_result\":\"435\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"3\",\"close_time_result\":\"236\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-26 15:51:19\",\"updated_ip_address\":\"::1\"}', '2021-09-26 10:21:19', NULL),
(36, '', 'lottery_game_result', 'update', '{\"id\":true,\"game_id\":\"3\",\"game_time\":\"Open\",\"open_time_result\":\"435\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"3\",\"close_time_result\":\"236\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-26 15:53:08\",\"updated_ip_address\":\"::1\"}', '2021-09-26 10:23:08', NULL),
(37, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"one\",\"open_time\":\"10:30 AM\",\"close_time\":\"11:15 AM\",\"text_color\":\"#000000\",\"result_color\":\"#000000\",\"back_color\":\"#000000\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-26 16:46:15\",\"updated_ip_address\":\"::1\"}', '2021-09-26 11:16:15', NULL),
(38, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"game test one\",\"open_time\":\"8:45 AM\",\"close_time\":\"9:15 AM\",\"text_color\":\"#833f3f\",\"result_color\":\"#3a0d0d\",\"back_color\":\"#e15656\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-26 16:46:34\",\"updated_ip_address\":\"::1\"}', '2021-09-26 11:16:34', NULL),
(39, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"one\",\"open_time\":\"10:30 AM\",\"close_time\":\"11:15 AM\",\"text_color\":\"#837272\",\"result_color\":\"#b71010\",\"back_color\":\"#891f1f\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-26 16:46:49\",\"updated_ip_address\":\"::1\"}', '2021-09-26 11:16:49', NULL),
(40, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"Game Test\",\"open_time\":\"8:15 AM\",\"close_time\":\"7:45 AM\",\"text_color\":\"#b29090\",\"result_color\":\"#ec6565\",\"back_color\":\"#dd0e0e\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-26 16:47:04\",\"updated_ip_address\":\"::1\"}', '2021-09-26 11:17:04', NULL),
(41, '', 'lottery_game_result', 'update', '{\"id\":true,\"game_id\":\"3\",\"game_time\":\"Open\",\"open_time_result\":\"435\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"3\",\"close_time_result\":\"236\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-26 16:47:54\",\"updated_ip_address\":\"::1\"}', '2021-09-26 11:17:54', NULL),
(42, '', 'lottery_game_result', 'update', '{\"id\":true,\"game_id\":\"1\",\"game_time\":\"Open\",\"open_time_result\":\"435\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"3\",\"close_time_result\":\"254\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-26 16:48:20\",\"updated_ip_address\":\"::1\"}', '2021-09-26 11:18:20', NULL),
(43, '', 'lottery_game_result', 'update', '{\"id\":true,\"game_id\":\"2\",\"game_time\":\"Open\",\"open_time_result\":\"123\",\"close_time_result_two\":\"2\",\"open_time_result_two\":\"2\",\"close_time_result\":\"123\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 10:23:01\",\"updated_ip_address\":\"::1\"}', '2021-09-27 04:53:01', NULL),
(44, '', 'lottery_game', 'insert', '{\"id\":1,\"game_name\":\"KALYAN DAY\",\"open_time\":\"11:00 AM\",\"close_time\":\"11:00 AM\",\"text_color\":\"#a83838\",\"result_color\":\"#c2aeae\",\"back_color\":\"#6e2121\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 10:39:31\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:09:31', NULL),
(45, '', 'lottery_game', 'insert', '{\"id\":2,\"game_name\":\"MAIN MORNING\",\"open_time\":\"12:00 PM\",\"close_time\":\"12:00 PM\",\"text_color\":\"#8a4242\",\"result_color\":\"#b69696\",\"back_color\":\"#816565\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 10:40:16\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:10:16', NULL),
(46, '', 'lottery_game', 'insert', '{\"id\":3,\"game_name\":\"NEW TIMES DAY\",\"open_time\":\"1:00 PM\",\"close_time\":\"1:00 PM\",\"text_color\":\"#a65959\",\"result_color\":\"#dac3c3\",\"back_color\":\"#daa9a9\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 10:41:04\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:11:05', NULL),
(47, '', 'lottery_game', 'insert', '{\"id\":4,\"game_name\":\"RAJDHANI DAY\",\"open_time\":\"4:00 PM\",\"close_time\":\"4:00 PM\",\"text_color\":\"#9d5c5c\",\"result_color\":\"#f20d0d\",\"back_color\":\"#a29a9a\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 10:42:49\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:12:49', NULL),
(48, '', 'lottery_game', 'insert', '{\"id\":5,\"game_name\":\"WARLI DAY\",\"open_time\":\"6:00 PM\",\"close_time\":\"6:00 PM\",\"text_color\":\"#af8383\",\"result_color\":\"#db3333\",\"back_color\":\"#827d7d\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 10:43:24\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:13:24', NULL),
(49, '', 'lottery_game', 'insert', '{\"id\":6,\"game_name\":\"DECCAN DAY\",\"open_time\":\"12:45 PM\",\"close_time\":\"12:45 AM\",\"text_color\":\"#7a8eb3\",\"result_color\":\"#d00b0b\",\"back_color\":\"#431818\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 10:44:01\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:14:01', NULL),
(50, '', 'lottery_game', 'insert', '{\"id\":7,\"game_name\":\"GM DAY\",\"open_time\":\"10:45 PM\",\"close_time\":\"10:45 AM\",\"text_color\":\"#c85151\",\"result_color\":\"#9cc572\",\"back_color\":\"#4f1111\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 10:44:32\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:14:32', NULL),
(51, '', 'lottery_game_result', 'insert', '{\"id\":1,\"game_id\":\"1\",\"game_time\":\"Close\",\"open_time_result\":\"120\",\"close_time_result_two\":\"5\",\"open_time_result_two\":\"3\",\"close_time_result\":\"122\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 10:57:57\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:27:57', NULL),
(52, '', 'lottery_game_result', 'insert', '{\"id\":2,\"game_id\":\"2\",\"game_time\":\"Open\",\"open_time_result\":\"320\",\"close_time_result_two\":\"5\",\"open_time_result_two\":\"3\",\"close_time_result\":\"122\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 11:22:41\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:52:41', NULL),
(53, '', 'lottery_game_result', 'insert', '{\"id\":3,\"game_id\":\"3\",\"game_time\":\"Close\",\"open_time_result\":\"120\",\"close_time_result_two\":\"5\",\"open_time_result_two\":\"3\",\"close_time_result\":\"122\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 11:23:41\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:53:41', NULL),
(54, '', 'lottery_game_result', 'insert', '{\"id\":4,\"game_id\":\"4\",\"game_time\":\"Open\",\"open_time_result\":\"134\",\"close_time_result_two\":\"2\",\"open_time_result_two\":\"2\",\"close_time_result\":\"124\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 11:24:27\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:54:27', NULL),
(55, '', 'lottery_game_result', 'insert', '{\"id\":5,\"game_id\":\"5\",\"game_time\":\"Open\",\"open_time_result\":\"145\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"3\",\"close_time_result\":\"156\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 11:24:54\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:54:54', NULL),
(56, '', 'lottery_game_result', 'insert', '{\"id\":6,\"game_id\":\"6\",\"game_time\":\"Close\",\"open_time_result\":\"876\",\"close_time_result_two\":\"5\",\"open_time_result_two\":\"5\",\"close_time_result\":\"787\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 11:25:20\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:55:20', NULL),
(57, '', 'lottery_game_result', 'insert', '{\"id\":7,\"game_id\":\"7\",\"game_time\":\"Open\",\"open_time_result\":\"345\",\"close_time_result_two\":\"8\",\"open_time_result_two\":\"4\",\"close_time_result\":\"544\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 11:25:41\",\"created_ip_address\":\"::1\"}', '2021-09-27 05:55:41', NULL),
(58, '', 'lottery_game_result', 'update', '{\"id\":true,\"game_id\":\"6\",\"game_time\":\"Open\",\"open_time_result\":\"876\",\"close_time_result_two\":\"5\",\"open_time_result_two\":\"5\",\"close_time_result\":\"787\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:26:08\",\"updated_ip_address\":\"::1\"}', '2021-09-27 05:56:08', NULL),
(59, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"GM DAY\",\"open_time\":\"10:45 PM\",\"close_time\":\"10:45 AM\",\"text_color\":\"#c85151\",\"result_color\":\"#9cc572\",\"back_color\":\"#ffffff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:30:27\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:00:27', NULL),
(60, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"DECCAN DAY\",\"open_time\":\"12:45 PM\",\"close_time\":\"12:45 AM\",\"text_color\":\"#7a8eb3\",\"result_color\":\"#d00b0b\",\"back_color\":\"#ffffff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:30:44\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:00:44', NULL),
(61, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"WARLI DAY\",\"open_time\":\"6:00 PM\",\"close_time\":\"6:00 PM\",\"text_color\":\"#af8383\",\"result_color\":\"#121212\",\"back_color\":\"#827d7d\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:30:56\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:00:56', NULL),
(62, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"WARLI DAY\",\"open_time\":\"6:00 PM\",\"close_time\":\"6:00 PM\",\"text_color\":\"#af8383\",\"result_color\":\"#121212\",\"back_color\":\"#ffffff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:31:18\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:01:18', NULL),
(63, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"RAJDHANI DAY\",\"open_time\":\"4:00 PM\",\"close_time\":\"4:00 PM\",\"text_color\":\"#9d5c5c\",\"result_color\":\"#121212\",\"back_color\":\"#ffffff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:31:46\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:01:46', NULL),
(64, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"NEW TIMES DAY\",\"open_time\":\"1:00 PM\",\"close_time\":\"1:00 PM\",\"text_color\":\"#a65959\",\"result_color\":\"#121212\",\"back_color\":\"#ffffff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:32:12\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:02:12', NULL),
(65, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"MAIN MORNING\",\"open_time\":\"12:00 PM\",\"close_time\":\"12:00 PM\",\"text_color\":\"#8a4242\",\"result_color\":\"#121212\",\"back_color\":\"#ffffff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:32:34\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:02:34', NULL),
(66, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"KALYAN DAY\",\"open_time\":\"11:00 AM\",\"close_time\":\"11:00 AM\",\"text_color\":\"#a83838\",\"result_color\":\"#121212\",\"back_color\":\"#ffffff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:32:53\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:02:54', NULL),
(67, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"GM DAY\",\"open_time\":\"10:45 PM\",\"close_time\":\"10:45 AM\",\"text_color\":\"#ff0000\",\"result_color\":\"#121212\",\"back_color\":\"#ffffff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 11:33:43\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:03:43', NULL),
(68, '', 'lottery_game', 'insert', '{\"id\":8,\"game_name\":\"SUPREME DAY\",\"open_time\":\"1:15 PM\",\"close_time\":\"1:15 PM\",\"text_color\":\"#000000\",\"result_color\":\"#121212\",\"back_color\":\"#ffff00\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 11:48:13\",\"created_ip_address\":\"::1\"}', '2021-09-27 06:18:13', NULL),
(69, '', 'lottery_game_result', 'insert', '{\"id\":8,\"game_id\":\"8\",\"game_time\":\"Open\",\"open_time_result\":\"132\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"5\",\"close_time_result\":\"325\",\"created_by\":\"2\",\"created_date\":\"2021-09-27 12:04:04\",\"created_ip_address\":\"::1\"}', '2021-09-27 06:34:04', NULL),
(70, '', 'lottery_game_result', 'update', '{\"id\":true,\"game_id\":\"8\",\"game_time\":\"Open\",\"open_time_result\":\"134\",\"close_time_result_two\":\"2\",\"open_time_result_two\":\"2\",\"close_time_result\":\"124\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 12:08:11\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:38:11', NULL),
(71, '', 'lottery_game_result', 'update', '{\"id\":true,\"game_id\":\"4\",\"game_time\":\"Open\",\"open_time_result\":\"132\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"5\",\"close_time_result\":\"325\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 12:08:17\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:38:17', NULL),
(72, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"SUPREME DAY\",\"open_time\":\"1:15 PM\",\"close_time\":\"1:15 PM\",\"text_color\":\"#ff0000\",\"result_color\":\"#121212\",\"back_color\":\"#ffff00\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 12:17:48\",\"updated_ip_address\":\"::1\"}', '2021-09-27 06:47:48', NULL),
(73, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"NEW TIMES DAY\",\"open_time\":\"1:00 PM\",\"close_time\":\"1:00 PM\",\"text_color\":\"#0059ff\",\"result_color\":\"#00b4cc\",\"back_color\":\"#bdd9ff\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 17:53:28\",\"updated_ip_address\":\"::1\"}', '2021-09-27 12:23:28', NULL),
(74, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"SUPREME DAY\",\"open_time\":\"1:15 PM\",\"close_time\":\"1:15 PM\",\"text_color\":\"#ff0000\",\"result_color\":\"#121212\",\"back_color\":\"#ffff00\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-27 18:35:56\",\"updated_ip_address\":\"::1\"}', '2021-09-27 13:05:57', NULL),
(75, '', 'lottery_game_result', 'insert', '{\"id\":1,\"game_id\":\"8\",\"game_time\":\"Open\",\"open_time_result\":\"234\",\"close_time_result_two\":\"6\",\"open_time_result_two\":\"5\",\"close_time_result\":\"789\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:19:04\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 11:49:04', NULL),
(76, '', 'lottery_game_result', 'insert', '{\"id\":2,\"game_id\":\"7\",\"game_time\":\"Open\",\"open_time_result\":\"345\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"3\",\"close_time_result\":\"567\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:19:15\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 11:49:17', NULL),
(77, '', 'lottery_game_result', 'insert', '{\"id\":3,\"game_id\":\"6\",\"game_time\":\"Open\",\"open_time_result\":\"125\",\"close_time_result_two\":\"5\",\"open_time_result_two\":\"4\",\"close_time_result\":\"678\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:19:32\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 11:49:32', NULL),
(78, '', 'lottery_game_result', 'insert', '{\"id\":4,\"game_id\":\"5\",\"game_time\":\"Open\",\"open_time_result\":\"657\",\"close_time_result_two\":\"7\",\"open_time_result_two\":\"6\",\"close_time_result\":\"876\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:19:45\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 11:49:46', NULL),
(79, '', 'lottery_game_result', 'insert', '{\"id\":5,\"game_id\":\"4\",\"game_time\":\"Open\",\"open_time_result\":\"666\",\"close_time_result_two\":\"8\",\"open_time_result_two\":\"8\",\"close_time_result\":\"345\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:20:06\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 11:50:06', NULL),
(80, '', 'lottery_game_result', 'insert', '{\"id\":6,\"game_id\":\"3\",\"game_time\":\"Open\",\"open_time_result\":\"123\",\"close_time_result_two\":\"5\",\"open_time_result_two\":\"4\",\"close_time_result\":\"764\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:20:20\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 11:50:20', NULL),
(81, '', 'lottery_game_result', 'insert', '{\"id\":7,\"game_id\":\"2\",\"game_time\":\"Open\",\"open_time_result\":\"757\",\"close_time_result_two\":\"7\",\"open_time_result_two\":\"5\",\"close_time_result\":\"867\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:20:39\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 11:50:39', NULL),
(82, '', 'lottery_game_result', 'insert', '{\"id\":8,\"game_id\":\"1\",\"game_time\":\"Open\",\"open_time_result\":\"846\",\"close_time_result_two\":\"4\",\"open_time_result_two\":\"4\",\"close_time_result\":\"764\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:20:54\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 11:50:55', NULL),
(83, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"SUPREME DAY\",\"open_time\":\"5:33 PM\",\"close_time\":\"1:15 PM\",\"text_color\":\"#ff0000\",\"result_color\":\"#121212\",\"back_color\":\"#ffff00\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-28 17:32:09\",\"updated_ip_address\":\"103.229.247.39\"}', '2021-09-28 12:02:09', NULL),
(84, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"SUPREME DAY\",\"open_time\":\"5:37 PM\",\"close_time\":\"1:15 PM\",\"text_color\":\"#ff0000\",\"result_color\":\"#121212\",\"back_color\":\"#ffff00\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-28 17:32:37\",\"updated_ip_address\":\"103.229.247.39\"}', '2021-09-28 12:02:37', NULL),
(85, '', 'lottery_game_result', 'insert', '{\"id\":9,\"game_id\":\"8\",\"game_time\":\"Open\",\"open_time_result\":\"708\",\"close_time_result_two\":\"7\",\"open_time_result_two\":\"3\",\"close_time_result\":\"191\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 17:34:14\",\"created_ip_address\":\"103.229.247.39\"}', '2021-09-28 12:04:14', NULL),
(86, '', 'lottery_game', 'update', '{\"id\":true,\"game_name\":\"SUPREME DAY\",\"open_time\":\"5:35 PM\",\"close_time\":\"1:15 PM\",\"text_color\":\"#ff0000\",\"result_color\":\"#121212\",\"back_color\":\"#ffff00\",\"updated_by\":\"2\",\"updated_at\":\"2021-09-28 17:39:14\",\"updated_ip_address\":\"103.229.247.39\"}', '2021-09-28 12:09:14', NULL),
(87, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"mplussoftesting@gmail.com\",\"UA_Name\":\"Super admin\",\"UA_Address\":\"pune\",\"UA_city\":\"Pune\",\"UA_state\":\"Maharastra\",\"UA_mobile\":\"9764565678\",\"UA_priviliges\":\"view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-28 17:45:52\",\"UA_ip_address\":\"103.229.247.39\",\"UA_Image\":\"AdminMedia\\/subuser\\/614f781c2a4e1.jpg\"}', '2021-09-28 12:15:52', NULL),
(88, '', 'lottery_useradmin', 'update', '{\"id\":true,\"UA_email\":\"mplussoftesting@gmail.com\",\"UA_Name\":\"Super admin\",\"UA_Address\":\"pune\",\"UA_city\":\"Pune\",\"UA_state\":\"Maharastra\",\"UA_mobile\":\"9764565678\",\"UA_priviliges\":\"view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master\",\"UA_updatedDate\":\"2021-09-28 17:47:13\",\"UA_ip_address\":\"103.229.247.39\",\"UA_Image\":\"AdminMedia\\/subuser\\/615307c93e950.png\"}', '2021-09-28 12:17:13', NULL),
(89, '', 'lottery_game_result', 'insert', '{\"id\":10,\"game_id\":\"8\",\"game_time\":\"Open\",\"open_time_result\":\"098\",\"close_time_result_two\":\"6\",\"open_time_result_two\":\"7\",\"close_time_result\":\"544\",\"created_by\":\"2\",\"created_date\":\"2021-09-28 22:00:35\",\"created_ip_address\":\"103.110.252.56\"}', '2021-09-28 16:30:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lottery_useradmin`
--

CREATE TABLE `lottery_useradmin` (
  `UA_pkey` int(11) NOT NULL,
  `UA_userType` enum('superAdmin','subAdmin','userAdmin','university_super_admin','university_sub_admin') NOT NULL,
  `userName` varchar(200) DEFAULT NULL,
  `UA_Name` varchar(200) DEFAULT NULL,
  `UA_Address` varchar(256) DEFAULT NULL,
  `UA_City` varchar(256) DEFAULT NULL,
  `UA_area` text DEFAULT NULL,
  `UA_state` text DEFAULT NULL,
  `UA_email` varchar(100) DEFAULT NULL,
  `UA_password` varchar(100) DEFAULT NULL,
  `UA_otp` int(11) DEFAULT NULL COMMENT 'otp when user forgot passwotd',
  `UA_mobile` varchar(20) DEFAULT NULL,
  `UA_branch` varchar(256) DEFAULT NULL,
  `UA_Image` varchar(256) DEFAULT NULL,
  `UA_ip_address` varchar(100) DEFAULT NULL,
  `UA_priviliges` text DEFAULT NULL,
  `UA_createdBy` varchar(256) DEFAULT NULL,
  `UA_createdDate` datetime NOT NULL DEFAULT current_timestamp(),
  `UA_updatedBy` varchar(256) DEFAULT NULL,
  `UA_updatedDate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UA_status` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '''2''-inactive,''1''-active,''2''-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery_useradmin`
--

INSERT INTO `lottery_useradmin` (`UA_pkey`, `UA_userType`, `userName`, `UA_Name`, `UA_Address`, `UA_City`, `UA_area`, `UA_state`, `UA_email`, `UA_password`, `UA_otp`, `UA_mobile`, `UA_branch`, `UA_Image`, `UA_ip_address`, `UA_priviliges`, `UA_createdBy`, `UA_createdDate`, `UA_updatedBy`, `UA_updatedDate`, `UA_status`) VALUES
(1, 'superAdmin', NULL, 'test', 'pune', 'pune', NULL, 'Maharastra', 'hushar2018@gmail.com', 'aHVzaGFyMTIzNA==', NULL, '7083719169', NULL, 'AdminMedia/subuser/614f78e800192.png', '::1', 'select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master', NULL, '2021-09-25 23:48:07', NULL, '2021-09-26 01:07:47', '1'),
(2, 'superAdmin', 'Super Admin', 'Super admin', 'pune', 'Pune', 'pune', 'Maharastra', 'mplussoftesting@gmail.com', 'bXBsdXNAMTIz', 8588, '9764565678', NULL, 'AdminMedia/subuser/615307c93e950.png', '103.229.247.39', 'view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master', 'superAdmin', '2021-05-31 17:26:17', NULL, '2021-09-28 17:47:13', '1'),
(3, 'superAdmin', NULL, 'test', 'Pune', 'Pune', 'katraj', 'Maharastra', 'mplussoftesting@gmail.com', 'aHVzaGFyMTIzNA==', 4608, '7083719169', NULL, 'AdminMedia/subuser/614f6f431b8e4.png', '::1', 'select_all,view_dashboard,view_result_master,add_result_master,edit_result_master,delete_result_master,active_block_result_master,view_cms_master,add_cms_master,edit_cms_master,delete_cms_master,active_block_cms_master,view_game_master,add_game_master,edit_game_master,delete_game_master,active_block_game_master,view_subuser_master,add_subuser_master,edit_subuser_master,delete_subuser_master,active_block_subuser_master', NULL, '2021-06-19 16:52:13', NULL, '2021-09-28 17:46:21', '3'),
(4, 'superAdmin', NULL, 'ajay', 'pune', '27', 'katraj', '24', 'ajay@gmail.com', 'YWpheUAxMjM=', NULL, '7876876788', NULL, 'AdminMedia/subuser/60e2e463de1f2.jpg', '103.120.251.72', '2', NULL, '2021-07-05 16:22:19', NULL, '2021-07-05 16:22:41', '3'),
(5, 'superAdmin', NULL, 'Testing Teams', 'Baner, Pune', '27', 'Baner', '24', 'testingteam@gmail.com', 'TmF0aW9uQDE5OTU=', NULL, '9860443454', NULL, 'AdminMedia/subuser/60e2e4bb75762.jpg', '103.120.251.72', '1', NULL, '2021-07-05 16:23:47', NULL, '2021-07-05 16:29:18', '3'),
(6, 'superAdmin', NULL, 'Akash Phalle ', 'Baner, Pune', '27', 'Baner', '24', 'aakashphalle@gmail.com', 'TmF0aW9uQDE5OTU=', NULL, '9890247612', NULL, 'AdminMedia/subuser/60f0305f3e7b6.jpg', '103.120.251.72', '2', NULL, '2021-07-15 18:25:59', NULL, '2021-07-15 18:31:46', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lottery_cms`
--
ALTER TABLE `lottery_cms`
  ADD PRIMARY KEY (`cms_pkey`);

--
-- Indexes for table `lottery_game`
--
ALTER TABLE `lottery_game`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `lottery_game_result`
--
ALTER TABLE `lottery_game_result`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `lottery_system_log`
--
ALTER TABLE `lottery_system_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lottery_useradmin`
--
ALTER TABLE `lottery_useradmin`
  ADD PRIMARY KEY (`UA_pkey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lottery_cms`
--
ALTER TABLE `lottery_cms`
  MODIFY `cms_pkey` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lottery_game`
--
ALTER TABLE `lottery_game`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lottery_game_result`
--
ALTER TABLE `lottery_game_result`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lottery_system_log`
--
ALTER TABLE `lottery_system_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary KEY of the table', AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `lottery_useradmin`
--
ALTER TABLE `lottery_useradmin`
  MODIFY `UA_pkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
