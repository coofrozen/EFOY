-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 11:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efoy_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_report_exam`
--

CREATE TABLE `daily_report_exam` (
  `id` int(11) NOT NULL,
  `cur_date` date NOT NULL,
  `total_succeded` int(11) NOT NULL,
  `total_failed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_report_exam`
--

INSERT INTO `daily_report_exam` (`id`, `cur_date`, `total_succeded`, `total_failed`) VALUES
(1, '2023-07-25', 6, 3),
(2, '2023-07-26', 7, 6),
(3, '2023-07-27', 6, 6),
(4, '2023-07-28', 6, 7),
(5, '2023-07-29', 8, 7),
(11, '2023-07-31', 7, 10),
(15, '2023-08-02', 4, 14),
(17, '2023-08-03', 9, 8),
(18, '2023-08-04', 7, 10),
(23, '2023-08-06', 8, 18),
(24, '2023-08-08', 10, 18),
(25, '2023-08-09', 15, 12),
(26, '2023-08-11', 14, 16),
(27, '2023-08-12', 8, 22),
(28, '2023-08-19', 20, 15),
(29, '2023-08-20', 17, 17),
(30, '2023-08-21', 12, 22),
(31, '2023-08-22', 10, 23),
(32, '2023-08-23', 13, 20),
(33, '2023-08-24', 18, 13),
(34, '2023-08-25', 11, 23),
(35, '2023-08-26', 10, 24),
(36, '2023-08-27', 11, 23),
(37, '2023-08-28', 11, 24),
(38, '2023-08-29', 11, 24),
(39, '2023-08-30', 10, 25),
(40, '2023-08-31', 3, 32),
(41, '2023-09-01', 0, 35),
(42, '2023-09-02', 0, 35),
(43, '2023-09-03', 0, 35),
(44, '2023-09-04', 0, 36),
(45, '2023-09-05', 0, 36),
(46, '2023-09-06', 0, 36),
(47, '2023-09-07', 0, 36),
(48, '2023-09-08', 0, 36),
(49, '2023-09-09', 0, 36),
(50, '2023-09-10', 0, 36),
(51, '2023-09-11', 0, 36),
(52, '2023-09-12', 0, 36),
(53, '2023-09-13', 0, 39),
(54, '2023-09-14', 6, 35),
(55, '2023-09-15', 9, 36),
(56, '2023-09-18', 10, 50),
(57, '2023-09-19', 0, 66),
(58, '2023-09-20', 0, 79),
(59, '2023-09-21', 17, 71);

-- --------------------------------------------------------

--
-- Table structure for table `daily_report_lifehack`
--

CREATE TABLE `daily_report_lifehack` (
  `id` int(11) NOT NULL,
  `cur_date` date NOT NULL,
  `total_succeded` int(11) NOT NULL,
  `total_failed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_report_lifehack`
--

INSERT INTO `daily_report_lifehack` (`id`, `cur_date`, `total_succeded`, `total_failed`) VALUES
(7, '2023-09-01', 1, 11),
(8, '2023-09-02', 0, 12),
(9, '2023-09-03', 3, 10),
(10, '2023-09-04', 5, 8),
(11, '2023-09-05', 5, 8),
(12, '2023-09-06', 0, 13),
(13, '2023-09-07', 0, 13),
(14, '2023-09-08', 0, 13),
(15, '2023-09-09', 0, 13),
(16, '2023-09-10', 0, 13),
(17, '2023-09-11', 0, 13),
(18, '2023-09-12', 0, 13),
(19, '2023-09-13', 4, 10),
(20, '2023-09-14', 3, 12),
(21, '2023-09-15', 0, 22),
(22, '2023-09-17', 0, 28),
(23, '2023-09-19', 3, 30),
(24, '2023-09-20', 4, 30),
(25, '2023-09-21', 7, 27);

-- --------------------------------------------------------

--
-- Table structure for table `exam_unsubs`
--

CREATE TABLE `exam_unsubs` (
  `id` int(11) NOT NULL,
  `cur_date` date NOT NULL DEFAULT current_timestamp(),
  `phone_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ilog`
--

CREATE TABLE `ilog` (
  `id` int(11) NOT NULL,
  `cur_date` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `log` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `live_subz_exam`
--

CREATE TABLE `live_subz_exam` (
  `id` int(11) NOT NULL,
  `user_number` bigint(20) DEFAULT NULL,
  `sub_key` bigint(20) DEFAULT NULL,
  `sub_rel_start_time` datetime DEFAULT NULL,
  `sub_rel_end_time` datetime DEFAULT NULL,
  `sub_time` datetime DEFAULT NULL,
  `suborunsub` varchar(30) NOT NULL,
  `pay_status` varchar(100) NOT NULL DEFAULT 'sup',
  `reponse_val` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_subz_exam`
--

INSERT INTO `live_subz_exam` (`id`, `user_number`, `sub_key`, `sub_rel_start_time`, `sub_rel_end_time`, `sub_time`, `suborunsub`, `pay_status`, `reponse_val`) VALUES
(8, 251911184293, 11433466, '2023-07-19 12:08:29', '2023-07-20 12:08:28', '2023-07-19 12:08:29', 'Addition', 'sup', 'Success'),
(15, 251929140970, 11479244, '2023-07-20 11:49:43', '2023-07-21 11:49:43', '2023-07-20 11:49:43', 'Addition', 'sup', 'Success'),
(18, 251944700068, 11484914, '2023-07-20 15:02:44', '2023-07-21 15:02:44', '2023-07-20 15:02:44', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(21, 251927764994, 11657925, '2023-07-24 19:18:40', '2023-07-25 19:18:40', '2023-07-24 19:18:40', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(22, 251916826027, 11660836, '2023-07-24 20:27:13', '2023-07-25 20:27:13', '2023-07-24 20:27:13', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(24, 251928761489, 11667106, '2023-07-25 04:16:38', '2023-07-26 04:16:38', '2023-07-25 04:16:38', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(25, 251967262064, 11669063, '2023-07-25 07:30:49', '2023-07-26 07:30:49', '2023-07-25 07:30:49', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(28, 251928040941, 11696636, '2023-07-25 23:47:57', '2023-07-26 23:48:29', '2023-07-25 23:47:57', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(30, 251988090486, 11721098, '2023-07-26 22:04:06', '2023-07-27 22:04:06', '2023-07-26 22:04:06', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(31, 251935475432, 11724528, '2023-07-27 05:43:44', '2023-07-28 05:43:44', '2023-07-27 05:43:44', 'Addition', 'sup', 'Success'),
(36, 251923495982, 11868902, '2023-08-01 16:30:36', '2023-08-02 16:30:36', '2023-08-01 16:30:36', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(37, 251988181830, 11868848, '2023-08-01 16:30:50', '2023-08-02 16:30:50', '2023-08-01 16:30:50', 'Addition', 'sup', 'Success'),
(40, 251939457624, 12027932, '2023-08-05 17:32:04', '2023-08-06 17:32:04', '2023-08-05 17:32:04', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(41, 251939814451, 12027944, '2023-08-05 17:32:28', '2023-08-06 17:32:28', '2023-08-05 17:32:28', 'Addition', 'sup', 'NO_BALANCE'),
(42, 251963051243, 12027978, '2023-08-05 17:35:14', '2023-08-06 17:35:14', '2023-08-05 17:35:14', 'Addition', 'sup', 'NO_BALANCE'),
(43, 251943177069, 12028374, '2023-08-05 17:56:27', '2023-08-06 17:56:27', '2023-08-05 17:56:27', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(44, 251913751557, 12028588, '2023-08-05 18:10:17', '2023-08-06 18:10:17', '2023-08-05 18:10:17', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(45, 251913983276, 12028707, '2023-08-05 18:15:49', '2023-08-06 18:15:49', '2023-08-05 18:15:49', 'Addition', 'sup', 'Success'),
(47, 251946659516, 12030506, '2023-08-05 19:11:18', '2023-08-06 19:11:17', '2023-08-05 19:11:18', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(52, 251906823246, 12038086, '2023-08-05 22:03:37', '2023-08-06 22:03:37', '2023-08-05 22:03:37', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(53, 251941999975, 12039687, '2023-08-05 22:36:27', '2023-08-06 22:36:27', '2023-08-05 22:36:27', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(55, 251941144969, 12100345, '2023-08-07 16:26:09', '2023-08-08 16:26:09', '2023-08-07 16:26:09', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(56, 251919810068, 12110113, '2023-08-07 21:12:43', '2023-08-08 21:12:43', '2023-08-07 21:12:43', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(59, 251943039919, 12162680, '2023-08-09 07:41:11', '2023-08-10 07:41:11', '2023-08-09 07:41:11', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(60, 251985378120, 12171441, '2023-08-09 11:58:33', '2023-08-10 11:58:33', '2023-08-09 11:58:33', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(61, 251974052734, 12206546, '2023-08-10 12:00:27', '2023-08-11 12:00:26', '2023-08-10 12:00:27', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(63, 251942076298, 12543060, '2023-08-12 23:27:05', '2023-08-13 23:27:05', '2023-08-12 23:27:05', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(64, 251963975543, 12546062, '2023-08-13 08:43:24', '2023-08-14 08:43:24', '2023-08-13 08:43:24', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(66, 251941146273, 12580284, '2023-08-14 18:36:25', '2023-08-15 18:36:25', '2023-08-14 18:36:25', 'Addition', 'sup', 'Success'),
(67, 251930800244, 12585020, '2023-08-14 21:14:17', '2023-08-15 21:14:17', '2023-08-14 21:14:17', 'Addition', 'sup', 'Success'),
(68, 251977630153, 12606914, '2023-08-16 01:23:10', '2023-08-17 01:22:53', '2023-08-16 01:23:10', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(72, 251974964091, 12887902, '2023-08-25 22:09:09', '2023-08-26 22:09:09', '2023-08-25 22:09:09', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(73, 251988106585, 12920245, '2023-08-27 08:31:03', '2023-08-28 08:31:02', '2023-08-27 08:31:03', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(74, 251954886834, 12941062, '2023-08-28 07:26:18', '2023-08-29 07:26:17', '2023-08-28 07:26:18', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(75, 251968006682, 13011573, '2023-08-31 14:38:33', '2023-09-01 14:38:33', '2023-08-31 14:38:33', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(77, 251912677337, 13088172, '2023-09-04 16:44:12', '2023-09-05 16:44:12', '2023-09-04 16:44:12', 'Addition', 'sup', 'Success'),
(79, 251910453900, 13393922, '2023-09-13 15:59:01', '2023-09-14 15:59:01', '2023-09-13 15:59:01', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(81, 251911295987, 13437459, '2023-09-14 10:21:50', '2023-09-15 10:21:50', '2023-09-14 10:21:50', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(82, 251942682187, 13451875, '2023-09-14 15:55:39', '2023-09-15 15:55:39', '2023-09-14 15:55:39', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(87, 251922636931, 13492383, '2023-09-15 09:24:44', '2023-09-16 09:24:44', '2023-09-15 09:24:44', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(88, 251953534419, 13508884, '2023-09-15 15:58:42', '2023-09-16 15:58:48', '2023-09-15 15:58:42', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(89, 251915706389, 13509758, '2023-09-15 16:16:26', '2023-09-16 16:16:11', '2023-09-15 16:16:26', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(90, 251924225935, 13512350, '2023-09-15 17:22:48', '2023-09-16 17:21:40', '2023-09-15 17:22:48', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(91, 251930522362, 13512904, '2023-09-15 17:31:18', '2023-09-16 17:29:46', '2023-09-15 17:31:18', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(92, 251922084708, 13553908, '2023-09-16 10:17:35', '2023-09-17 10:17:19', '2023-09-16 10:17:35', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(93, 251912051460, 13570461, '2023-09-16 16:23:26', '2023-09-17 16:23:26', '2023-09-16 16:23:26', 'Addition', 'sup', 'Success'),
(94, 251954756845, 13570581, '2023-09-16 16:26:05', '2023-09-17 16:26:05', '2023-09-16 16:26:05', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(96, 251939591933, 13572067, '2023-09-16 17:00:43', '2023-09-17 17:00:43', '2023-09-16 17:00:43', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(97, 251957102908, 13572190, '2023-09-16 17:04:13', '2023-09-17 17:04:13', '2023-09-16 17:04:13', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(98, 251941362342, 13572561, '2023-09-16 17:14:39', '2023-09-17 17:14:39', '2023-09-16 17:14:39', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(99, 251967763505, 13573084, '2023-09-16 17:19:35', '2023-09-17 17:19:35', '2023-09-16 17:19:35', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(100, 251940005913, 13573213, '2023-09-16 17:22:35', '2023-09-17 17:22:35', '2023-09-16 17:22:35', 'Addition', 'sup', 'Success'),
(103, 251977550234, 13574039, '2023-09-16 17:44:58', '2023-09-17 17:44:58', '2023-09-16 17:44:58', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(104, 251915737759, 13574428, '2023-09-16 17:56:09', '2023-09-17 17:56:09', '2023-09-16 17:56:09', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(105, 251934920108, 13574509, '2023-09-16 17:57:58', '2023-09-17 17:57:59', '2023-09-16 17:57:58', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(106, 251938850081, 13574713, '2023-09-16 18:04:38', '2023-09-17 18:04:39', '2023-09-16 18:04:38', 'Addition', 'sup', 'Success'),
(107, 251982563966, 13574969, '2023-09-16 18:12:03', '2023-09-17 18:12:03', '2023-09-16 18:12:03', 'Addition', 'sup', 'Success'),
(109, 251910655712, 13575594, '2023-09-16 18:24:21', '2023-09-17 18:24:22', '2023-09-16 18:24:21', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(110, 251962932065, 13627107, '2023-09-17 15:04:27', '2023-09-18 15:04:28', '2023-09-17 15:04:27', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(111, 251911659144, 13628663, '2023-09-17 15:41:56', '2023-09-18 15:41:55', '2023-09-17 15:41:56', 'Addition', 'sup', 'Success'),
(112, 251977035014, 13674654, '2023-09-18 10:18:49', '2023-09-19 10:18:45', '2023-09-18 10:18:49', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(113, 251923786944, 13675355, '2023-09-18 10:38:41', '2023-09-19 10:38:41', '2023-09-18 10:38:41', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(114, 251915025194, 13675529, '2023-09-18 10:43:41', '2023-09-19 10:43:38', '2023-09-18 10:43:41', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(115, 251972678797, 13677189, '2023-09-18 11:26:19', '2023-09-19 11:26:19', '2023-09-18 11:26:19', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(116, 251919087686, 13677514, '2023-09-18 11:34:34', '2023-09-19 11:34:34', '2023-09-18 11:34:34', 'Addition', 'sup', 'Success'),
(117, 251909915715, 13690249, '2023-09-18 20:20:34', '2023-09-19 20:20:36', '2023-09-18 20:20:34', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(118, 251962595871, 13716202, '2023-09-19 11:11:12', '2023-09-20 11:11:17', '2023-09-19 11:11:12', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(119, 251930497143, 13716467, '2023-09-19 11:15:19', '2023-09-20 11:15:32', '2023-09-19 11:15:19', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(120, 251965352051, 13718466, '2023-09-19 12:15:13', '2023-09-20 12:15:27', '2023-09-19 12:15:13', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(122, 251929397892, 13724524, '2023-09-19 16:08:01', '2023-09-20 16:08:00', '2023-09-19 16:08:01', 'Addition', 'sup', 'Success'),
(123, 251945580185, 13724741, '2023-09-19 16:14:30', '2023-09-20 16:14:51', '2023-09-19 16:14:30', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(125, 251941510500, 13724924, '2023-09-19 16:20:54', '2023-09-20 16:21:00', '2023-09-19 16:20:54', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(126, 251934112542, 13724946, '2023-09-19 16:21:13', '2023-09-20 16:21:12', '2023-09-19 16:21:13', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(127, 251986052865, 13725318, '2023-09-19 16:33:06', '2023-09-20 16:33:27', '2023-09-19 16:33:06', 'Addition', 'sup', 'Success'),
(128, 251937425361, 13725764, '2023-09-19 16:54:51', '2023-09-20 16:54:57', '2023-09-19 16:54:51', 'Addition', 'sup', 'NO_BALANCE'),
(130, 251943401696, 13726448, '2023-09-19 17:16:41', '2023-09-20 17:16:34', '2023-09-19 17:16:41', 'Addition', 'sup', 'Success'),
(131, 251952966442, 13727151, '2023-09-19 17:50:32', '2023-09-20 17:50:33', '2023-09-19 17:50:32', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(132, 251949810874, 13729325, '2023-09-19 19:35:55', '2023-09-20 19:35:56', '2023-09-19 19:35:55', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(133, 251972100008, 13745450, '2023-09-20 13:09:40', '2023-09-21 13:09:40', '2023-09-20 13:09:40', 'Addition', 'sup', ''),
(134, 251968310843, 13747435, '2023-09-20 15:51:31', '2023-09-21 15:51:31', '2023-09-20 15:51:31', 'Addition', 'sup', ''),
(135, 251961082697, 13747622, '2023-09-20 16:03:33', '2023-09-21 16:03:33', '2023-09-20 16:03:33', 'Addition', 'sup', ''),
(136, 251991449264, 13747765, '2023-09-20 16:09:17', '2023-09-21 16:09:17', '2023-09-20 16:09:17', 'Addition', 'sup', ''),
(137, 251919618587, 13748286, '2023-09-20 16:29:55', '2023-09-21 16:29:55', '2023-09-20 16:29:55', 'Addition', 'sup', ''),
(138, 251980255296, 13748482, '2023-09-20 16:45:11', '2023-09-21 16:45:11', '2023-09-20 16:45:11', 'Addition', 'sup', ''),
(139, 251984677650, 13748476, '2023-09-20 16:47:31', '2023-09-21 16:47:31', '2023-09-20 16:47:31', 'Addition', 'sup', ''),
(140, 251935625020, 13748530, '2023-09-20 16:49:26', '2023-09-21 16:49:26', '2023-09-20 16:49:26', 'Addition', 'sup', ''),
(141, 251937589173, 13748558, '2023-09-20 16:51:12', '2023-09-21 16:51:11', '2023-09-20 16:51:12', 'Addition', 'sup', ''),
(142, 251979856044, 13749390, '2023-09-20 17:19:29', '2023-09-21 17:19:29', '2023-09-20 17:19:29', 'Addition', 'sup', '');

-- --------------------------------------------------------

--
-- Table structure for table `live_subz_lifehack`
--

CREATE TABLE `live_subz_lifehack` (
  `id` int(11) NOT NULL,
  `user_number` bigint(20) DEFAULT NULL,
  `sub_key` bigint(20) DEFAULT NULL,
  `sub_rel_start_time` datetime DEFAULT NULL,
  `sub_rel_end_time` datetime DEFAULT NULL,
  `sub_time` datetime DEFAULT NULL,
  `suborunsub` varchar(30) NOT NULL,
  `pay_status` varchar(100) NOT NULL DEFAULT 'sup',
  `reponse_val` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_subz_lifehack`
--

INSERT INTO `live_subz_lifehack` (`id`, `user_number`, `sub_key`, `sub_rel_start_time`, `sub_rel_end_time`, `sub_time`, `suborunsub`, `pay_status`, `reponse_val`) VALUES
(1, 251914460985, 12138300, '2023-08-08 17:12:51', '2023-08-09 17:12:49', '2023-08-08 17:12:51', 'Addition', 'sup', 'NO_BALANCE'),
(2, 251921684022, 12170620, '2023-08-09 11:28:25', '2023-08-10 11:28:25', '2023-08-09 11:28:25', 'Addition', 'sup', 'NO_SUBSCRIPTION'),
(3, 251910116214, 12496317, '2023-08-11 10:28:32', '2023-08-12 10:28:32', '2023-08-11 10:28:32', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(4, 251910453900, 12498496, '2023-08-11 11:56:12', '2023-08-12 11:56:12', '2023-08-11 11:56:12', 'Addition', 'sup', 'NO_SUBSCRIPTION'),
(5, 251930105176, 12597842, '2023-08-15 16:13:16', '2023-08-16 16:13:15', '2023-08-15 16:13:16', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(6, 251991182844, 12598370, '2023-08-15 17:07:52', '2023-08-16 17:07:52', '2023-08-15 17:07:52', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(7, 251911066609, 12598766, '2023-08-15 17:50:49', '2023-08-16 17:50:49', '2023-08-15 17:50:49', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(8, 251929140970, 12615034, '2023-08-16 14:06:04', '2023-08-17 14:06:04', '2023-08-16 14:06:04', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(9, 251944700068, 12615085, '2023-08-16 14:06:11', '2023-08-17 14:06:11', '2023-08-16 14:06:11', 'Addition', 'sup', 'INVALID_SUBSCRIBER_STATUS'),
(10, 251974613399, 12885607, '2023-08-25 20:43:30', '2023-08-26 20:42:54', '2023-08-25 20:43:30', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(11, 251911184293, 12920660, '2023-08-27 08:53:28', '2023-08-28 08:53:28', '2023-08-27 08:53:28', 'Addition', 'sup', 'INVALID_RENEWAL_PERIOD'),
(12, 251930573337, 12995817, '2023-08-30 17:32:31', '2023-08-31 17:32:31', '2023-08-30 17:32:31', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(13, 251994121310, 13072104, '2023-09-03 19:31:11', '2023-09-04 19:31:11', '2023-09-03 19:31:11', 'Addition', 'sup', 'NO_SUBSCRIPTION'),
(14, 251942682187, 13394346, '2023-09-13 16:09:00', '2023-09-14 16:09:00', '2023-09-13 16:09:00', 'Addition', 'sup', 'NO_BALANCE'),
(15, 251912051460, 13457849, '2023-09-14 18:39:00', '2023-09-15 18:35:36', '2023-09-14 18:39:00', 'Addition', 'sup', 'INVALID_RENEWAL_PERIOD'),
(16, 251922636931, 13492398, '2023-09-15 09:25:01', '2023-09-16 09:25:01', '2023-09-15 09:25:01', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(17, 251972201172, 13508513, '2023-09-15 15:48:39', '2023-09-16 15:48:38', '2023-09-15 15:48:39', 'Addition', 'sup', 'NO_BALANCE'),
(18, 251996664242, 13509617, '2023-09-15 16:14:02', '2023-09-16 16:14:01', '2023-09-15 16:14:02', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(19, 251915706389, 13509723, '2023-09-15 16:16:17', '2023-09-16 16:15:46', '2023-09-15 16:16:17', 'Addition', 'sup', 'NO_BALANCE'),
(20, 251915175407, 13510699, '2023-09-15 16:33:45', '2023-09-16 16:33:45', '2023-09-15 16:33:45', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(21, 251924225935, 13512293, '2023-09-15 17:22:06', '2023-09-16 17:21:30', '2023-09-15 17:22:06', 'Addition', 'sup', 'NO_BALANCE'),
(22, 251930522362, 13512927, '2023-09-15 17:32:49', '2023-09-16 17:29:49', '2023-09-15 17:32:49', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(23, 251948640187, 13570086, '2023-09-16 16:16:16', '2023-09-17 16:16:16', '2023-09-16 16:16:16', 'Addition', 'sup', 'NO_SUBSCRIPTION'),
(24, 251921377612, 13570401, '2023-09-16 16:22:16', '2023-09-17 16:22:16', '2023-09-16 16:22:16', 'Addition', 'sup', 'INVALID_RENEWAL_PERIOD'),
(25, 251901704873, 13571895, '2023-09-16 16:56:11', '2023-09-17 16:56:11', '2023-09-16 16:56:11', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(26, 251934920108, 13572313, '2023-09-16 17:07:19', '2023-09-17 17:07:19', '2023-09-16 17:07:19', 'Addition', 'sup', 'NO_BALANCE'),
(27, 251915737759, 13574456, '2023-09-16 17:56:30', '2023-09-17 17:56:30', '2023-09-16 17:56:30', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(28, 251920688915, 13577391, '2023-09-16 19:16:18', '2023-09-17 19:16:18', '2023-09-16 19:16:18', 'Addition', 'sup', 'NO_BALANCE'),
(29, 251992122259, 13617383, '2023-09-17 11:27:59', '2023-09-18 11:27:59', '2023-09-17 11:27:59', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(30, 251911659144, 13628580, '2023-09-17 15:41:29', '2023-09-18 15:41:29', '2023-09-17 15:41:29', 'Addition', 'sup', 'INVALID_RENEWAL_PERIOD'),
(31, 251906803643, 13628932, '2023-09-17 15:49:34', '2023-09-18 15:49:34', '2023-09-17 15:49:34', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(32, 251921438869, 13684837, '2023-09-18 15:25:08', '2023-09-19 15:25:08', '2023-09-18 15:25:08', 'Addition', 'sup', 'NO_BALANCE'),
(33, 251906292375, 13693400, '2023-09-18 21:07:37', '2023-09-19 21:07:36', '2023-09-18 21:07:37', 'Addition', 'sup', 'HOUR_RETRY_LIMIT_EXCEEDED'),
(34, 251932980269, 13726534, '2023-09-19 17:20:27', '2023-09-20 17:20:27', '2023-09-19 17:20:27', 'Addition', 'sup', 'NO_BALANCE');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_report_exam`
--

CREATE TABLE `monthly_report_exam` (
  `id` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `total_succeed` int(20) NOT NULL,
  `total_failed` int(20) NOT NULL,
  `total_earned` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_report_lifehack`
--

CREATE TABLE `monthly_report_lifehack` (
  `id` int(11) NOT NULL DEFAULT 0,
  `month` varchar(20) NOT NULL,
  `total_succeed` int(20) NOT NULL,
  `total_failed` int(20) NOT NULL,
  `total_earned` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sor`
--

CREATE TABLE `sor` (
  `id` int(11) NOT NULL DEFAULT 0,
  `SPID` int(11) DEFAULT NULL,
  `service_id` bigint(20) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_number` bigint(20) DEFAULT NULL,
  `sub_key` bigint(20) DEFAULT NULL,
  `sub_rel_start_time` datetime DEFAULT NULL,
  `sub_rel_end_time` datetime DEFAULT NULL,
  `sub_time` datetime DEFAULT NULL,
  `access_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `org_id` int(11) NOT NULL,
  `phoneNo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'person.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`, `type`, `status`, `name`, `org_id`, `phoneNo`, `email`, `date_created`, `date_updated`, `photo`) VALUES
(1, 'ethio14543', '298834481ed85e928c4b06c7ef780973b1efb59f', 'Admin', 1, 'Kiran Lee', 14543, '(+251) 799336699', 'abcd@gmail.com', '2023-03-11', '2023-03-22', '1679490320914.jpg'),
(4, 'ethio15374', 'f56c70cb32228c63d8a6ed68c7e999fed2edb194', 'Admin', 1, 'Yohanes Halefom', 15374, '251912051460', 'yohanes.halefom@ethiotelecom.et', '2023-06-01', '0000-00-00', 'jo.jpg'),
(5, 'tewolde', 'e9edf1eaf88858ade85b0cf0aab44520cb03ed31', 'Admin', 1, 'Tewelde Z/Michael', 1212, '0929140970', 'tewolde431@gmail.com', '2023-06-29', '2023-06-29', 'tewe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_report_exam`
--
ALTER TABLE `daily_report_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_report_lifehack`
--
ALTER TABLE `daily_report_lifehack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_unsubs`
--
ALTER TABLE `exam_unsubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ilog`
--
ALTER TABLE `ilog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_subz_exam`
--
ALTER TABLE `live_subz_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_subz_lifehack`
--
ALTER TABLE `live_subz_lifehack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_report_exam`
--
ALTER TABLE `monthly_report_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `oracle_id` (`org_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `type` (`type`),
  ADD KEY `type_2` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_report_exam`
--
ALTER TABLE `daily_report_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `daily_report_lifehack`
--
ALTER TABLE `daily_report_lifehack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `exam_unsubs`
--
ALTER TABLE `exam_unsubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ilog`
--
ALTER TABLE `ilog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `live_subz_exam`
--
ALTER TABLE `live_subz_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `live_subz_lifehack`
--
ALTER TABLE `live_subz_lifehack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `monthly_report_exam`
--
ALTER TABLE `monthly_report_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
