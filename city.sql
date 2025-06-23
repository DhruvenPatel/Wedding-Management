-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 27, 2024 at 04:49 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epay`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `cityid` int NOT NULL AUTO_INCREMENT,
  `cityname` varchar(20) NOT NULL,
  `cshortname` varchar(5) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `stateid` int NOT NULL,
  PRIMARY KEY (`cityid`),
  UNIQUE KEY `cityname` (`cityname`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`, `cshortname`, `pincode`, `stateid`) VALUES
(1, 'GandhiNagar', 'Gan', '382433', 1),
(2, 'Ahemdabad', 'Ahm', '380008', 1),
(3, 'Surat', 'Sur', '395007', 1),
(4, 'Vadodara', 'Vad', '390011', 1),
(5, 'Rajkot', 'Raj', '360001', 1),
(6, 'Jamnagar', 'Jam', '360110', 1),
(7, 'Junagadh', 'Jun', '360490', 1),
(8, 'Navsari', 'Nvs', '396445', 1),
(9, 'Bharuch', 'Bha', '391810', 1),
(10, 'Valsad', 'Val', '396001', 1),
(11, 'Godhra', 'God', '389341', 1),
(12, 'Mumbai', 'Mub', '400001', 2),
(13, 'Pune', 'Pun', '411001', 2),
(14, 'Nagpur', 'Nag', '441107', 2),
(15, 'Nashik', 'Nas', '422012', 2),
(16, 'Thane', 'Thn', '400601', 2),
(17, 'Palghar', 'Pal', '401404', 2),
(18, 'Aurangabad', 'Aur', '431116', 2),
(19, 'Kolhapur', 'Kol', '416003', 2),
(20, 'Jalgaon', 'Jal', '425508', 2),
(21, 'Nandurbar', 'Nad', '425415', 2),
(22, 'Andheri', 'And', '400053', 2),
(23, 'Bengaluru', 'Ben', '560072', 3),
(24, 'Mysore', 'Mys', '570001', 3),
(25, 'Mangalore', 'Man', '575001', 3),
(26, 'Belgaum', 'Bel', '591110', 3),
(27, 'Gulbarga', 'Gul', '585223', 3),
(28, 'Bijapur', 'Bij', '586204', 3),
(29, 'Raichur', 'Rai', '584128', 3),
(30, 'Hospet', 'Hos', '583201', 3),
(31, 'Bhadravati', 'Bha', '577301', 3),
(32, 'Chitradurga', 'Chi', '577522', 3),
(33, 'Kolar', 'Kol', '563114', 3),
(34, 'Jodhpur', 'Jod', '342001', 4),
(35, 'Udaipur', 'Uda', '307025', 4),
(36, 'Jaisalmer', 'Jai', '342302', 4),
(37, 'Jaipur', 'Jip', '302001', 4),
(38, ' Bikaner', 'Bik', '331801', 4),
(39, 'Pushkar', 'Pus', '305022', 4),
(40, 'Ajmer', 'Ajm', '305001', 4),
(41, 'Sikar', 'Sik', '331024', 4),
(42, 'Mountabu', 'Mou', '307501', 4),
(43, 'Alwar', 'Alw', '301001', 4),
(44, 'Kota', 'Kot', '324001', 4),
(45, 'Ludhiana', 'Lud', ' 141001', 5),
(46, 'Amritsar', 'Amr', '143001', 5),
(47, 'Jalandhar', 'Jal', '144001', 5),
(48, 'Patiala', 'Pat', '147001', 5),
(49, 'Mohali', 'Moh', '160055', 5),
(50, 'Bathinda', 'Bat', '151001', 5),
(51, 'Pathankot', 'Pat', '145001', 5),
(52, 'Moga', 'Mog', '142001', 5),
(53, 'Batala', 'Bat', '143505', 5),
(54, 'Gurdaspur', 'Gur', '143521', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
