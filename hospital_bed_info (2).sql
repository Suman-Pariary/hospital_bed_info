-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2022 at 03:45 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_bed_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `adminId` int(5) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(200) NOT NULL,
  `adminUsername` varchar(100) NOT NULL,
  `adminPaswd` varchar(50) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminContact` varchar(10) NOT NULL,
  `adminStatus` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`adminId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`adminId`, `adminName`, `adminUsername`, `adminPaswd`, `adminEmail`, `adminContact`, `adminStatus`) VALUES
(1, 'ABCD', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', '7878787878', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `bed_table`
--

DROP TABLE IF EXISTS `bed_table`;
CREATE TABLE IF NOT EXISTS `bed_table` (
  `hospital_id` int(5) NOT NULL COMMENT 'hospital_table',
  `info_id` int(5) NOT NULL AUTO_INCREMENT,
  `bed_type` int(5) NOT NULL COMMENT 'master_bed_type',
  `total_bed` int(5) NOT NULL,
  `available_bed` int(5) NOT NULL,
  `entertime` datetime NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed_table`
--

INSERT INTO `bed_table` (`hospital_id`, `info_id`, `bed_type`, `total_bed`, `available_bed`, `entertime`) VALUES
(3, 2, 1, 22, 5, '2022-07-17 08:26:09'),
(3, 3, 2, 15, 5, '2022-07-17 08:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `district_table`
--

DROP TABLE IF EXISTS `district_table`;
CREATE TABLE IF NOT EXISTS `district_table` (
  `state_id` int(5) NOT NULL,
  `dist_id` int(5) NOT NULL AUTO_INCREMENT,
  `dist_name` varchar(20) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`dist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district_table`
--

INSERT INTO `district_table` (`state_id`, `dist_id`, `dist_name`, `status`) VALUES
(1, 1, 'Jhargram', 'Active'),
(3, 4, 'mayurvange', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_table`
--

DROP TABLE IF EXISTS `hospital_table`;
CREATE TABLE IF NOT EXISTS `hospital_table` (
  `dist_id` int(5) NOT NULL COMMENT 'district_table',
  `hospital_id` int(5) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `type` enum('Govt','Pvt') NOT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_table`
--

INSERT INTO `hospital_table` (`dist_id`, `hospital_id`, `hospital_name`, `address`, `contact_no`, `type`) VALUES
(1, 3, 'erte', 'sdsd', 454645645, 'Govt');

-- --------------------------------------------------------

--
-- Table structure for table `master_bed_type`
--

DROP TABLE IF EXISTS `master_bed_type`;
CREATE TABLE IF NOT EXISTS `master_bed_type` (
  `bed_id` int(5) NOT NULL AUTO_INCREMENT,
  `bed_type` varchar(50) NOT NULL,
  `bed_status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`bed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_bed_type`
--

INSERT INTO `master_bed_type` (`bed_id`, `bed_type`, `bed_status`) VALUES
(1, 'General Ward', 'Active'),
(2, 'Female Ward', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `state_table`
--

DROP TABLE IF EXISTS `state_table`;
CREATE TABLE IF NOT EXISTS `state_table` (
  `state_id` int(2) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(20) NOT NULL,
  `state_status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_table`
--

INSERT INTO `state_table` (`state_id`, `state_name`, `state_status`) VALUES
(1, 'West Bengal', 'Active'),
(3, 'odisha', 'Active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
