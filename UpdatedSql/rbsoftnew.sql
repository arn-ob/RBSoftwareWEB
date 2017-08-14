-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2017 at 12:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `BillNo` varchar(1000) NOT NULL,
  `PricePerSft` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `advancePay` varchar(100) NOT NULL,
  `Due` varchar(100) NOT NULL,
  `Intotal` varchar(100) NOT NULL,
  `CreatedTime` varchar(50) NOT NULL,
  `CreateDate` varchar(50) NOT NULL,
  `LastModifiedDate` varchar(50) NOT NULL,
  `LastModifiedTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ClientDetails`
--

CREATE TABLE `ClientDetails` (
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phoneNo1` varchar(50) NOT NULL,
  `phoneNo2` varchar(50) NOT NULL,
  `BillNo` varchar(1000) NOT NULL,
  `PartyName` varchar(100) NOT NULL,
  `CreatedTime` varchar(50) NOT NULL,
  `CreatedDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `printDetails`
--

CREATE TABLE `printDetails` (
  `BillNo` varchar(1000) NOT NULL,
  `PrintType` varchar(50) NOT NULL,
  `wide` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `sft` varchar(50) NOT NULL,
  `Festun` varchar(50) NOT NULL,
  `Frame` varchar(50) NOT NULL,
  `CreatedTime` varchar(50) NOT NULL,
  `CreatedDate` varchar(50) NOT NULL,
  `LastModifiedDate` varchar(50) NOT NULL,
  `LastModifiedTime` varchar(50) NOT NULL,
  `FileName` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PrintStatus`
--

CREATE TABLE `PrintStatus` (
  `BilNo` varchar(1000) NOT NULL,
  `ClientName` varchar(100) NOT NULL,
  `FileName` varchar(1000) NOT NULL,
  `sft` varchar(1000) NOT NULL,
  `CreatedDate` varchar(50) NOT NULL,
  `CreatedTime` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
