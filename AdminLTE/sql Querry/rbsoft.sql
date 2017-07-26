-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 07:58 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `newdataentry`
--

CREATE TABLE `newdataentry` (
  `BillNo` varchar(50) DEFAULT NULL,
  `ClientName` varchar(50) DEFAULT NULL,
  `ClientAddress` varchar(200) DEFAULT NULL,
  `ClientPhn` varchar(20) DEFAULT NULL,
  `PrintType` varchar(20) DEFAULT NULL,
  `PrintHeight` varchar(50) DEFAULT NULL,
  `PrintWide` varchar(50) DEFAULT NULL,
  `PrintQuantity` varchar(50) DEFAULT NULL,
  `PrintPrice` varchar(50) DEFAULT NULL,
  `sft` varchar(50) DEFAULT NULL,
  `frame` varchar(10) DEFAULT NULL,
  `frameprice` varchar(50) DEFAULT NULL,
  `advance` varchar(50) DEFAULT NULL,
  `due` varchar(50) DEFAULT NULL,
  `intotal` varchar(50) DEFAULT NULL,
  `Todaydate` varchar(20) DEFAULT NULL,
  `Todaytime` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newdataentry`
--

INSERT INTO `newdataentry` (`BillNo`, `ClientName`, `ClientAddress`, `ClientPhn`, `PrintType`, `PrintHeight`, `PrintWide`, `PrintQuantity`, `PrintPrice`, `sft`, `frame`, `frameprice`, `advance`, `due`, `intotal`, `Todaydate`, `Todaytime`) VALUES
('1501004324998', 'sdvsdv', 'svdv', '', 'PVC', '', '', '', '', '0', 'No', '', '', 'ada', '0', '2017/07/25', '07:38:44pm'),
('1501004710317', 'awdasd', '2', '2', 'PVC', '2', '2', '2', '2', '4', 'No', '2', '2', 'ada', '24', '2017/07/25', '07:45:10pm'),
('1501005878193', 'sfsdfsdf', 'sfsdff', '', 'PVC', '', '', '', '', '0', 'NaN', '', '', 'ada', '0', '2017/07/25', '08:04:38pm'),
('1501005953243', 'xcvxcv', 'dvxvc', '34234', 'PVC', '', '', '', '', '0', 'NaN', '', '', 'ada', '0', '2017/07/25', '08:05:53pm'),
('1501005953243', 'xcvxcv', 'dvxvc', '34234', 'PVC', '', '', '', '', '0', 'NaN', '', '', 'ada', '0', '2017/07/25', '08:05:53pm'),
('1501005953243', 'xcvxcv', 'dvxvc', '34234', 'PVC', '', '', '', '', '0', 'NaN', '', '', 'ada', '0', '2017/07/25', '08:05:53pm'),
('1501006032701', 'xcfhbdfgh', 'dgdfgfdg', '4231', 'PVC', '', '', '', '', '0', 'NaN', '', '', 'ada', '0', '2017/07/25', '08:07:12pm'),
('1501006032701', 'xcfhbdfgh', 'dgdfgfdg', '4231', 'PVC', '', '', '', '', '0', 'NaN', '', '', 'ada', '0', '2017/07/25', '08:07:12pm'),
('1501006082383', 'dadasdasd', 'adasd', '2323', 'PVC', '232', '232', '232', '232', '53824', 'NaN', '23', '23', 'ada', '150007488', '2017/07/25', '08:08:02pm'),
('1501006154617', 'dasdasd', 'adasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', 'ada', '0', '2017/07/25', '08:09:14pm'),
('1501006180449', 'dasdasd', 'adasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', 'ada', '0', '2017/07/25', '08:09:40pm'),
('1501006180449', 'dasdasd', 'adasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', 'ada', '0', '2017/07/25', '08:09:40pm'),
('1501006180449', 'dasdasd', 'adasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', 'ada', '0', '2017/07/25', '08:09:40pm'),
('1501006221367', 'sdfsdfsd', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', 'ada', '0', '2017/07/25', '08:10:21pm'),
('1501006221367', 'sdfsdfsd', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', 'ada', '0', '2017/07/25', '08:10:21pm'),
('1501006389092', 'asdasds', 'asdasd', '3232', 'PVC', '3232', '3232', '232', '232', '10445824', 'No', '2323', '232', '87243521816', '87243522048', '2017/07/25', '08:13:09pm'),
('1501006389092', 'asdasds', 'asdasd', '3232', 'PVC', '3232', '3232', '232', '232', '10445824', 'No', '2323', '232', '87243521816', '87243522048', '2017/07/25', '08:13:09pm'),
('1501006389092', 'asdasds', 'asdasd', '3232', 'PVC', '3232', '3232', '232', '232', '10445824', 'No', '2323', '232', '87243521816', '87243522048', '2017/07/25', '08:13:09pm'),
('1501006389092', 'asdasds', 'asdasd', '3232', 'PVC', '3232', '3232', '232', '232', '10445824', 'No', '2323', '232', '87243521816', '87243522048', '2017/07/25', '08:13:09pm'),
('1501006389092', 'asdasds', 'asdasd', '3232', 'PVC', '3232', '3232', '232', '232', '10445824', 'No', '2323', '232', '87243521816', '87243522048', '2017/07/25', '08:13:09pm'),
('1501006389092', 'asdasds', 'asdasd', '3232', 'PVC', '3232', '3232', '232', '232', '10445824', 'No', '2323', '232', '87243521816', '87243522048', '2017/07/25', '08:13:09pm'),
('1501006525629', '43tr', '345', '4', 'PVC', '534', '5434', '54', '120', '2901756', 'No', '', '20', '348210700', '348210720', '2017/07/25', '08:15:25pm'),
('1501006623922', 'adasdasd', '23', '232', 'PVC', '232', '23', '23', '223', '5336', 'No', '', '323', '1189605', '1189928', '2017/07/25', '08:17:03pm'),
('18', '111', '11', '111', 'PVC', '11', '11', '11', '21', '121', 'No', '', '10', '38105', '38115', '2017/07/25', '08:29:35pm'),
('18', '111', '11', '111', 'PVC', '11', '11', '11', '21', '121', 'No', '', '10', '38105', '38115', '2017/07/25', '08:29:35pm'),
('49', '1212', '1212', '1212', 'PVC', '121', '11', '154', '1212', '1331', 'No', '', '212', '58073980', '58074192', '2017/07/25', '08:32:33pm'),
('NaN', 'svsdv', 'svdsdv', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:34:08pm'),
('NaN', 'svsdv', 'svdsdv', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:34:08pm'),
('NaN', 'svsdv', 'svdsdv', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:34:08pm'),
('NaN', 'svsdv', 'svdsdv', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:34:08pm'),
('NaN', 'svsdv', 'svdsdv', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:34:08pm'),
('NaN', 'svsdv', 'svdsdv', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:34:08pm'),
('NaN_0_36_4_85', 'asdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:36:04pm'),
('NaN_0_36_4_85', 'asdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:36:04pm'),
('NaN_0_36_4_85', 'asdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:36:04pm'),
('23_0_36_52_403', '123123', '123123', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:36:52pm'),
('1804_0_38_32_207', 'dgdfg', 'dgdfg', '', 'Pana', '456', '45', '45', '45', '20520', 'No', '', '45', '5540355', '5540400', '2017/07/25', '08:38:32pm'),
('1804_0_38_32_207', 'dgdfg', 'dgdfg', '', 'Pana', '456', '45', '45', '45', '20520', 'No', '', '45', '5540355', '5540400', '2017/07/25', '08:38:32pm'),
('1804_0_38_32_207', 'dgdfg', 'dgdfg', '', 'Pana', '456', '45', '45', '45', '20520', 'No', '', '45', '5540355', '5540400', '2017/07/25', '08:38:32pm'),
('25022_0_39_35_58', 'xvxdfvfdv', 'dfvdfbv', '3242', 'PVC', '34', '434', '33', '435', '14756', 'No', '', '1223', '19255357', '19256580', '2017/07/25', '08:39:35pm'),
('5528_0_40_21_275', 'araeaer', 'eaeda', '', 'PVC', '4', '5', '12', '122', '20', 'No', '', '120', '7200', '7320', '2017/07/25', '08:40:21pm'),
('28574_0_45_18_585', 'adasdsad', 'adsasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:45:18pm'),
('67534_0_45_56_413', 'dgbdf', 'dgdfg', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:45:56pm'),
('63094_0_46_42_608', '345345', '5345', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:46:42pm'),
('56195_0_48_44_536', 'ascv', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:48:44pm'),
('56195_0_48_44_536', 'ascv', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:48:44pm'),
('56195_0_48_44_536', 'ascv', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:48:44pm'),
('56195_0_48_44_536', 'ascv', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:48:44pm'),
('56195_0_48_44_536', 'ascv', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:48:44pm'),
('56195_0_48_44_536', 'ascv', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:48:44pm'),
('38918_0_50_8_391', 'asdasd', '1212', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:50:08pm'),
('38918_0_50_8_391', 'asdasd', '1212', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:50:08pm'),
('38918_0_50_8_391', 'asdasd', '1212', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:50:08pm'),
('38918_0_50_8_391', 'asdasd', '1212', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:50:08pm'),
('38918_0_50_8_391', 'asdasd', '1212', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:50:08pm'),
('38918_0_50_8_391', 'asdasd', '1212', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:50:08pm'),
('16414_0_51_17_671', '345', '3434', '', 'Other', '34', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:51:17pm'),
('58991_0_51_24_573', '34343', '3434', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:51:24pm'),
('57531_0_52_37_751', '43554', '345345', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:52:37pm'),
('8386_0_53_22_102', '456546', '65456', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:53:22pm'),
('30812_0_54_18_662', '45435345345345345345345345345435345345', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:54:18pm'),
('44706_0_54_29_541', '5345345345', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:54:29pm'),
('16449_0_57_59_146', 'cvbcvbcv', 'bcvb', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:57:59pm'),
('54561_0_58_54_125', 'adasdasd', 'ad', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '08:58:54pm'),
('1_0_16_5311', 'asdas', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:00:16pm'),
('1_1_57_3391', 'sdrgdfbg', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:01:57pm'),
('1_2_16_9951', 'vbhnhvn', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:02:17pm'),
('1_3_33_5071', '4234', '234234', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:03:33pm'),
('1_11_36_8961', 'Zavsv', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:11:36pm'),
('1_11_46_1771', 'asdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:11:46pm'),
('28669', 'afsdaf', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:13:56pm'),
('45664', 'fghgfh', 'fgnfgn', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:14:32pm'),
('29408', 'dbgfb', 'fghgf', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:14:59pm'),
('7616', 'asdasd', 'asdas', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:20:43pm'),
('47739', 'asdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:21:59pm'),
('67544', 'asdasd', 'asd', '23', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:28:31pm'),
('37672', 'sdfsdf', 'sdfsdfsdf', '4344', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:31:46pm'),
('35212', 'sdfsdf', 'sdfsdf', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:32:49pm'),
('1', 'asdasd', 'asdasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:33:14pm'),
('1', 'asdasd', 'asdasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:13pm'),
('1', 'asdasdasd', 'adsasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:29pm'),
('1', 'asdasdasd', 'adsasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:29pm'),
('1', 'asdasd', 'adsasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:49pm'),
('1', 'asdasd', 'adsasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:49pm'),
('1', 'asdasd', 'adsasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:49pm'),
('1', 'asdasd', 'adsasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:49pm'),
('1', 'asdasd', 'adsasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:49pm'),
('1', 'asdasd', 'adsasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:34:49pm'),
('1', '1212', '1212', '1212', 'Pana', '1212', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:35:43pm'),
('1', '1212', '1212', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:35:56pm'),
('1', '2323', '2323', '3232', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:36:09pm'),
('1', 'adasdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:39:47pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:40:16pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:40:38pm'),
('1', 'asdasd', 'asdasd', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:40:57pm'),
('1', 'fsdfsd', 'sdfsdf', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:41:35pm'),
('1', 'sdfsdf', '', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:41:39pm'),
('1', 'sdfsdf', '', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:41:39pm'),
('1', 'sdfsdfdf', 'sdfsdf', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:41:47pm'),
('1', 'sdfsdfdf', 'sdfsdf', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:41:47pm'),
('1', 'sdfsdfdf', 'sdfsdf', '', '', '', '', '', '', '', '', '', '', '0', '', '2017/07/25', '09:41:47pm'),
('1', 'vnvbn', 'nvbnn', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:42:26pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:56:13pm'),
('1', 'asdasd', 'asdasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:56:29pm'),
('1', 'sdfsdf', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:59:34pm'),
('1', 'sdfsdf', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:59:34pm'),
('1', 'sdfsdf', 'sdfsdf', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '09:59:34pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:00:59pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:00:59pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:00:59pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:00:59pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:00pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:00pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasdasd', '', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:01:01pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:02:36pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:02:36pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:02:36pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:02:36pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:02:36pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:02:36pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:03:06pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:03:06pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:03:06pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:03:06pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:03:06pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:03:07pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:03:07pm'),
('1', 'asdasd', 'asdasd', '', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:03:07pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'adasd', 'adasd', '', 'Pana', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/25', '10:04:19pm'),
('1', 'ssdfv11111', 'sfsdf', '2323', 'PVC', '2323', '232', '32', '23', '538936', 'No', '', '23', '37186561', '37186584', '2017/07/26', '07:47:02pm'),
('1', 'ssdfv11111', 'sfsdf', '2323', 'PVC', '2323', '232', '32', '23', '538936', 'No', '', '23', '37186561', '37186584', '2017/07/26', '07:47:02pm'),
('1', '123123123', '123123', '122', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/26', '07:47:28pm'),
('1', '123123123', '123123', '122', 'PVC', '', '', '', '', '0', 'No', '', '', '0', '0', '2017/07/26', '07:47:28pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
