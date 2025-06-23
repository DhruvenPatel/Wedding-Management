-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2024 at 05:40 AM
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
-- Database: `dbwedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `bookingdt` date NOT NULL,
  `bride` varchar(32) NOT NULL,
  `groom` varchar(32) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `wedding_date` varchar(100) NOT NULL,
  `packid` int NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`booking_id`, `bookingdt`, `bride`, `groom`, `user_email`, `wedding_date`, `packid`) VALUES
(3, '0000-00-00', 'Aarti', 'Fozan', 'aarti@mail.com', '03/30/2024', 0),
(4, '0000-00-00', 'Hetavshi', 'Jay', 'hetu@mail.com', '03/30/2024', 0),
(5, '0000-00-00', 'kushali', 'sohan', 'kushalirj@mail.com', '03/30/2024', 0),
(6, '0000-00-00', 'archi', 'Nik', 'archi@mail.com', '03/30/2024', 0),
(7, '0000-00-00', 'Vishakha', 'Sanal', 'sanaln@mail.com', '03/30/2024', 0),
(8, '0000-00-00', 'aarya', 'aarav', 'aaravshah@mail.com', '03/30/2024', 0),
(9, '0000-00-00', 'Archi', 'Sahil', 'sahilp@mail.com', '03/30/2024', 0),
(10, '0000-00-00', 'krupali', 'jekesh', 'krupali@mail.com', '03/30/2024', 0),
(11, '0000-00-00', 'Vidhi', 'Rishi', 'rishib@mail.com', '03/30/2024', 0),
(12, '0000-00-00', 'Megha', 'Mihir', 'mihirp@mail.com', '03/08/2024', 0),
(13, '0000-00-00', 'Siddhi', 'Harshal', 'harshalb@mail.com', '03/31/2024', 0),
(14, '0000-00-00', 'dhruvi', 'rishi', 'dhruvijha@mail.com', '04/02/2024', 0),
(15, '0000-00-00', 'kiara', 'jaimin', 'jaimin@mail.com', '04/28/2024', 0),
(16, '0000-00-00', 'Vrunda', 'Milin', 'milinr@mail.com', '05/18/2024', 0),
(17, '0000-00-00', 'Priya', 'kunal', 'priya@mail.com', '05/24/2024', 0),
(19, '0000-00-00', 'Mehak', 'Aayush', 'aayush@mail.com', '05/25/2024', 0),
(20, '0000-00-00', 'priya vassar', 'harsh', 'priyavass@mail.com', '03/27/2024', 0),
(22, '0000-00-00', 'isha', 'darshan', 'ishamistry@mail.com', '06/23/2024', 0),
(23, '0000-00-00', 'avneet kaur', 'mehta jay', 'jay@mail.com', '10/07/2024', 0),
(24, '0000-00-00', 'vidhi', 'Shiv', 'vids@mail.com', '07/07/2024', 0),
(26, '0000-00-00', 'Rinkal', 'Umar', 'umar@mail.com', '04/27/2024', 0),
(33, '0000-00-00', 'parthvi', 'Nikesh', 'parthvi@mail.co', '05/24/2024', 0),
(35, '0000-00-00', 'tina', 'rushil', 'tina@gmail.com', '02/19/2024', 0),
(39, '0000-00-00', 'Nidhi', 'Piyush', 'piyush@mail.com', '03/27/2024', 0),
(66, '0000-00-00', 'tina', 'akshat', 'tina@mail.com', '24-03-19', 3),
(70, '2024-03-20', 'priya', 'om', 'priya@mail.com', '24-03-20', 1),
(71, '2024-03-20', 'sara', 'subham', 'a@mai.com', '24-07-2024', 1),
(72, '2024-03-20', 'dhruven', 'nikesh', 'dhruven@gmail.com', '24-03-20', 3),
(73, '2024-03-25', 'Aunshka', 'Abhay', 'abhay@mail.com', '24-03-25', 1),
(74, '2024-03-26', 'Megs', 'NIKOP', 'patelnikesh1146@gmail.com', '24-03-26', 3),
(75, '2024-03-26', 'abc', 'efg', 'sagarpatel31103@gmail.com', '24-03-26', 1),
(76, '2024-03-29', 'Meeraa', 'Shahid ', 'meera14@gmail.com', '24-03-29', 1),
(77, '2024-03-29', 'vanshika', 'parth', 'parth@mail.com', '24-03-29', 1),
(78, '2024-03-30', 'ROSHANI 333', 'XYZ', 'roshi16101993@gmail.com', '24-03-30', 5),
(79, '2024-03-30', 'Roshani', 'xyz', 'roshi16101993@gmail.com', '24-03-30', 2),
(80, '2024-03-31', '111', '12233', 'ABC@MAIL.COM', '24-03-31', 1),
(81, '2024-03-31', '1111', '1111', 'mail@mail.com', '24-03-31', 1),
(82, '2024-04-01', 'asakjddk', 'kfmbpkf', 'pmeghapatel2110@gmail.com', '24-04-01', 1),
(83, '2024-04-04', 'abc', 'bcd', 'dp3857772@gmail.com', '24-04-04', 1),
(84, '2024-04-04', 'abc', 'bcd', 'dp3857772@gmail.com', '24-04-04', 1),
(85, '2024-04-04', 'abc', 'bcd', 'dp3857772@gmail.com', '24-04-04', 1),
(86, '2024-04-04', 'abc', 'bcd', 'dp3857772@gmail.com', '24-04-04', 1),
(87, '2024-04-04', 'abc', 'bcd', 'dp3857772@gmail.com', '24-04-04', 1),
(88, '2024-04-04', 'abc', 'bcd', 'dp3857772@gmail.com', '24-04-04', 1),
(89, '2024-04-04', 'abc', 'bcd', 'dp3857772@gmail.com', '24-04-04', 1),
(90, '2024-04-04', 'abc', 'bcd', 'dp3857772@gmail.com', '24-04-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` int NOT NULL AUTO_INCREMENT,
  `bookingdt` date NOT NULL,
  `contractorid` int NOT NULL,
  `custid` int NOT NULL,
  `eventdt` int NOT NULL,
  `totaldays` int NOT NULL,
  `regid` int NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `bookingdt`, `contractorid`, `custid`, `eventdt`, `totaldays`, `regid`) VALUES
(1, '2024-03-05', 0, 0, 0, 3, 0),
(2, '2024-03-05', 0, 0, 0, 5, 0),
(3, '2024-03-05', 0, 0, 0, 7, 0),
(4, '2024-03-05', 0, 0, 0, 14, 0),
(5, '2024-03-05', 0, 0, 0, 10, 0),
(6, '2024-03-05', 0, 0, 0, 6, 0),
(7, '2024-03-05', 0, 0, 0, 7, 0),
(8, '2024-03-05', 0, 0, 0, 7, 0),
(9, '2024-03-05', 0, 0, 0, 7, 0),
(10, '2024-03-05', 0, 0, 0, 7, 0),
(11, '2024-03-05', 0, 0, 0, 7, 0),
(12, '2024-03-05', 0, 0, 24, 7, 0),
(13, '2024-03-05', 0, 0, 24, 7, 0),
(14, '2024-03-05', 0, 0, 24, 7, 0),
(15, '2024-03-05', 0, 0, 24, 0, 0),
(16, '0000-00-00', 0, 0, 0, 0, 0),
(17, '2024-03-06', 0, 0, 24, 14, 0),
(18, '2024-03-11', 0, 0, 24, 0, 0),
(19, '2024-03-11', 0, 0, 24, 0, 0),
(20, '2024-03-11', 0, 0, 24, 0, 0),
(21, '2024-03-11', 0, 0, 24, 0, 0),
(22, '2024-03-11', 0, 0, 24, 5, 0),
(23, '2024-03-15', 0, 0, 24, 0, 0),
(24, '2024-03-17', 0, 0, 24, 4, 0),
(25, '2024-03-19', 0, 0, 24, 5, 0),
(26, '2024-03-19', 0, 0, 24, 5, 0),
(27, '2024-03-19', 0, 0, 24, 2024, 0);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `startdate` varchar(48) NOT NULL,
  `enddate` varchar(48) NOT NULL,
  `allDay` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `startdate`, `enddate`, `allDay`) VALUES
(2, 'New Event', '2024-02-25T00:00:00+2:00', '2024-02-25T00:00:00+2:00', 'false'),
(3, 'New Event', '2024-03-06T00:00:00+2:00', '2024-03-06T00:00:00+2:00', 'false'),
(4, 'New Event', '2024-03-02T00:00:00+2:00', '2024-03-02T00:00:00+2:00', 'false'),
(5, 'New Event', '2024-02-27T00:00:00+2:00', '2024-02-27T00:00:00+2:00', 'false'),
(6, 'New Event', '2024-03-06T00:00:00+2:00', '2024-03-06T00:00:00+2:00', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `cityid` int NOT NULL AUTO_INCREMENT,
  `cityname` varchar(20) NOT NULL,
  `cshortname` varchar(5) NOT NULL,
  `stateid` int NOT NULL,
  PRIMARY KEY (`cityid`),
  UNIQUE KEY `cityname` (`cityname`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`, `cshortname`, `stateid`) VALUES
(1, 'GandhiNagar', 'Gan', 1),
(2, 'Ahemdabad', 'Ahm', 1),
(3, 'Surat', 'Sur', 1),
(4, 'Vadodara', 'Vad', 1),
(5, 'Rajkot', 'Raj', 1),
(6, 'Jamnagar', 'Jam', 1),
(7, 'Junagadh', 'Jun', 1),
(8, 'Navsari', 'Nvs', 1),
(9, 'Bharuch', 'Bha', 1),
(10, 'Valsad', 'Val', 1),
(11, 'Godhra', 'God', 1),
(12, 'Mumbai', 'Mub', 2),
(13, 'Pune', 'Pun', 2),
(14, 'Nagpur', 'Nag', 2),
(15, 'Nashik', 'Nas', 2),
(16, 'Thane', 'Thn', 2),
(17, 'Palghar', 'Pal', 2),
(18, 'Aurangabad', 'Aur', 2),
(19, 'Kolhapur', 'Kol', 2),
(20, 'Jalgaon', 'Jal', 2),
(21, 'Nandurbar', 'Nad', 2),
(22, 'Andheri', 'And', 2),
(23, 'Bengaluru', 'Ben', 3),
(24, 'Mysore', 'Mys', 3),
(25, 'Mangalore', 'Man', 3),
(26, 'Belgaum', 'Bel', 3),
(27, 'Gulbarga', 'Gul', 3),
(28, 'Bijapur', 'Bij', 3),
(29, 'Raichur', 'Rai', 3),
(30, 'Hospet', 'Hos', 3),
(31, 'Bhadravati', 'Bha', 3),
(32, 'Chitradurga', 'Chi', 3),
(33, 'Kolar', 'Kol', 3),
(34, 'Jodhpur', 'Jod', 4),
(35, 'Udaipur', 'Uda', 4),
(36, 'Jaisalmer', 'Jai', 4),
(37, 'Jaipur', 'Jip', 4),
(38, ' Bikaner', 'Bik', 4),
(39, 'Pushkar', 'Pus', 4),
(40, 'Ajmer', 'Ajm', 4),
(41, 'Sikar', 'Sik', 4),
(42, 'Mountabu', 'Mou', 4),
(43, 'Alwar', 'Alw', 4),
(44, 'Kota', 'Kot', 4),
(45, 'Ludhiana', 'Lud', 5),
(46, 'Amritsar', 'Amr', 5),
(47, 'Jalandhar', 'Jal', 5),
(48, 'Patiala', 'Pat', 5),
(49, 'Mohali', 'Moh', 5),
(50, 'Bathinda', 'Bat', 5),
(51, 'Pathankot', 'Pat', 5),
(52, 'Moga', 'Mog', 5),
(53, 'Batala', 'Bat', 5),
(54, 'Gurdaspur', 'Gur', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contacttbl`
--

DROP TABLE IF EXISTS `contacttbl`;
CREATE TABLE IF NOT EXISTS `contacttbl` (
  `cnoid` int NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `message` varchar(50) NOT NULL,
  `regid` int NOT NULL,
  PRIMARY KEY (`cnoid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacttbl`
--

INSERT INTO `contacttbl` (`cnoid`, `cname`, `cemail`, `contactno`, `message`, `regid`) VALUES
(1, 'meghaa', 'meghaa@mail.com', '12478596', 'abcdefghi jklm nopqrstuvwx yz', 6),
(2, 'nikesh', 'nik123@gmail.com', '9876534231', 'abc', 6),
(3, 'nikesh', 'nik123@gmail.com', '9876534231', 'abc', 6),
(4, 'roshani', 'roshi16101993@gmail.com', '1234567890', 'goodd', 19);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `emailid` int NOT NULL,
  `emaildate` date NOT NULL,
  `subject` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `regid` int NOT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`emailid`, `emaildate`, `subject`, `description`, `regid`) VALUES
(0, '2024-03-19', 'password for ptlmegh', 'Hi ptlmegha your password is 123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `booking_id`, `title`, `location`, `date_created`, `color`, `start`, `end`) VALUES
(1, 0, 'Cocktail hour', 'aclc', '2024-03-07 03:12:52', '#40E0D0', '2024-03-07 00:00:00', '2024-03-08 00:00:00'),
(2, 1, 'Guests seated at the reception', 'Malaybalay', '2024-03-07 03:13:59', '#40E0D0', '2024-03-08 00:00:00', '2024-03-09 00:00:00'),
(3, 2, 'The wedding party & the happy couple are introduced', 'valencia city ', '2024-03-07 18:06:30', '#FF0000', '2024-03-19 08:00:00', '2024-03-19 20:00:00'),
(4, 2, 'First dance', 'valencia city ', '2024-03-07 18:07:11', '#FF0000', '2024-03-09 07:30:00', '2024-03-09 21:00:00'),
(5, 2, 'Toast & speeches', 'asdasd', '2024-03-07 18:09:28', '#FFD700', '2024-03-07 00:00:00', '2024-03-08 00:00:00'),
(6, 2, 'Dinner', 'asdasd', '2024-03-07 18:10:10', '', '2024-03-07 00:00:00', '2024-03-08 00:00:00'),
(7, 2, 'Father/daughter dance', 'asdasd', '2024-03-07 18:14:36', '#FF8C00', '2024-03-09 00:00:00', '2024-03-10 00:00:00'),
(8, 1, 'Mother/son dance', 'asdasd', '2024-03-07 18:15:03', '#008000', '2024-03-07 06:00:00', '2024-03-07 10:00:00'),
(9, 1, 'Bouquet & garter toss', 'asdasd', '2024-03-07 18:15:53', '#008000', '2024-03-09 00:00:00', '2024-03-10 00:00:00'),
(10, 1, 'Dancing', 'asdasd', '2024-03-07 18:18:44', '#008000', '2024-03-09 00:00:00', '2024-03-10 00:00:00'),
(11, 0, 'Cake-cutting', 'ASDASD', '2024-03-07 18:21:58', '#008000', '2024-03-10 00:00:00', '2024-03-11 00:00:00'),
(12, 0, 'Last song', 'ASDASD', '2024-03-07 18:22:26', '#008000', '2024-03-10 00:00:00', '2024-03-11 00:00:00'),
(13, 0, 'End of reception/After-party', 'ASDASD', '2024-03-07 18:22:38', '', '2024-03-10 00:00:00', '2024-03-11 00:00:00'),
(14, 34, 'Demo Title', 'Demo Location', '2024-04-13 18:30:17', '#FF0000', '2024-04-13 00:00:00', '2024-04-14 00:00:00'),
(16, 31, 'Title One', 'Loc 1', '2024-04-13 18:32:25', '#000', '2024-04-28 00:00:00', '2024-04-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int NOT NULL,
  `fdbkdate` date NOT NULL,
  `comments` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ratings` int DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `regid` int NOT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `fdbkdate`, `comments`, `ratings`, `email`, `regid`) VALUES
(1, '2024-03-27', 'yygfddddddddddddddd', 0, 'megha@mail.com', 2),
(2, '2024-03-27', 'Helloo👋 ', 0, 'pmeghapatel2110@gmail.com', 2),
(3, '2024-03-29', 'It Is a very good management team ', 0, 'patelnikesh1146@gmail.com', 6),
(4, '2024-03-30', 'gooodd', 0, 'roshi16101993@gmail.com', 19);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `SID` int NOT NULL AUTO_INCREMENT,
  `INVOICE_NO` int NOT NULL,
  `INVOICE_DATE` date NOT NULL,
  `CNAME` varchar(50) NOT NULL,
  `CADDRESS` varchar(150) NOT NULL,
  `CCITY` varchar(50) NOT NULL,
  `GRAND_TOTAL` double(10,2) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`SID`, `INVOICE_NO`, `INVOICE_DATE`, `CNAME`, `CADDRESS`, `CCITY`, `GRAND_TOTAL`) VALUES
(1, 1121, '2024-03-29', 'meghaa', 'nvs', 'guj', 1000.00),
(2, 21100, '2024-03-29', 'NIKESH PATEL', 'SAVAR POLICELINE', 'NAVSARI', 500.00),
(3, 1121, '2024-03-29', 'meghaa', 'nvs', 'guj', 1000.00);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products`
--

DROP TABLE IF EXISTS `invoice_products`;
CREATE TABLE IF NOT EXISTS `invoice_products` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `SID` int NOT NULL,
  `PNAME` varchar(100) NOT NULL,
  `PRICE` double(10,2) NOT NULL,
  `QTY` int NOT NULL,
  `TOTAL` double(10,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_products`
--

INSERT INTO `invoice_products` (`ID`, `SID`, `PNAME`, `PRICE`, `QTY`, `TOTAL`) VALUES
(1, 1, 'cake', 500.00, 2, 1000.00),
(2, 2, 'CHOCOLATE', 50.00, 10, 500.00),
(3, 3, 'cake', 500.00, 2, 1000.00);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payid` int NOT NULL,
  `paydate` date NOT NULL,
  `cardno` int NOT NULL,
  `holdernm` varchar(30) NOT NULL,
  `expmonth` varchar(10) NOT NULL,
  `expyear` int NOT NULL,
  `cvvno` int NOT NULL,
  `regid` int NOT NULL,
  `bookingid` int NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `paydate`, `cardno`, `holdernm`, `expmonth`, `expyear`, `cvvno`, `regid`, `bookingid`) VALUES
(1, '2024-03-26', 2147483647, 'Patel megha h.', 'SEPTEMBER', 2024, 2110, 0, 0),
(2, '2024-03-26', 2147483647, 'nikeshramanbhai patel', 'AUGUST', 2030, 5, 8, 0),
(3, '2024-03-26', 2147483647, 'nikeshramanbhai patel', 'AUGUST', 2029, 12, 8, 0),
(4, '2024-03-26', 2147483647, 'nikeshramanbhai patel', 'AUGUST', 2029, 12, 8, 0),
(5, '2024-03-26', 2147483647, 'kjhgfd', 'AUGUST', 2024, 12, 8, 0),
(6, '2024-03-26', 2147483647, 'NIKESH ', 'JANUARY', 2024, 20, 1, 0),
(7, '2024-03-26', 2147483647, 'NIKESH ', 'JANUARY', 2024, 2030, 1, 0),
(8, '2024-03-26', 2147483647, 'NIKESH ', 'JANUARY', 2024, 2030, 1, 0),
(9, '2024-03-26', 12245666, 'asdfgg', 'OCTOBER', 2024, 1, 1, 0),
(10, '2024-03-26', 12456, 'cghfj', 'NOVEMBER', 2024, 1, 1, 0),
(11, '2024-03-26', 12334, 'fgdf', 'JUNE', 2027, 1, 1, 0),
(12, '2024-03-26', 2147483647, 'sagar dandi', 'MAY', 2024, 2222, 14, 0),
(13, '2024-03-26', 1, 'fg', '', 0, 1, 0, 0),
(14, '2024-03-26', 2147483647, 'ghg', '', 0, 1234, 0, 0),
(15, '2024-03-26', 2147483647, 'gh', '', 2026, 4125, 0, 0),
(16, '2024-03-26', 2147483647, 'megha', '', 0, 1230, 0, 0),
(17, '2024-03-26', 2147483647, 'megha', '', 2026, 1230, 0, 0),
(18, '2024-03-26', 2147483647, 'megha', '', 2026, 1230, 0, 0),
(19, '2024-03-26', 2147483647, 'w', '', 0, 1234, 0, 0),
(20, '2024-03-27', 2147483647, 'megha', 'JULY', 2025, 1222, 2, 0),
(21, '2024-03-28', 2147483647, 'mmm', 'SEPTEMBER', 2027, 1222, 6, 0),
(22, '2024-03-28', 2147483647, 'mmm', 'SEPTEMBER', 2027, 1222, 6, 0),
(23, '2024-03-29', 2147483647, 'Meeraa ', 'MAY', 2026, 2114, 6, 0),
(24, '2024-03-30', 2147483647, 'roshani', 'NOVEMBER', 2029, 890, 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `payment_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payer_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payer_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payer_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `currency` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `amount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_name`, `payer_email`, `item_id`, `item_name`, `currency`, `amount`, `status`, `created_at`) VALUES
(1, '1XT46792ML021360F', 'QRFLSDZKSPUKN', 'John Doe', 'sb-krsoa27319193@personal.example.com', '', 'Front End Development Course', 'USD', '1800.00', 'Completed', '2023-09-09 01:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `regid` int NOT NULL,
  `regdate` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `emailadd` varchar(50) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `profileimg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`regid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regid`, `regdate`, `username`, `password`, `usertype`, `emailadd`, `contactno`, `profileimg`) VALUES
(1, '2024-02-24', 'megha', '456', 'admin', 'abc@gmail.com', '9408840544', ''),
(2, '2024-02-26', 'nik', '123', 'User', 'megha@gmail.com', '909876790', ''),
(13, '2024-03-19', 'ptlmegha', '123456', 'user', 'pmeghapatel2110@gmail.com', '9825510135', 'm.jpg'),
(0, '0000-00-00', 'meghaa', '123', 'admin', 'pmeghapatel2110@gmail.com', '9825510135', 'm.jpg '),
(16, '2024-03-29', 'Parth', '654321', 'user', 'Parth@gmail.com', '9876543210', 'c1.jpg'),
(10, '2024-03-18', 'Anjali', '', 'contractor', 'anjali@gmail.com', '985471230', '1.jpg'),
(11, '2024-03-19', 'arhamz', 'Arhamz@', 'user', 'zaraarham60@gmail.com', '9408840544', 'ab1.jpg'),
(7, '2024-03-14', 'jay', '123', 'user', 'jay@mail.com', '412578963', 'pexels-camera-treasure-12153957.jpg'),
(6, '2024-03-14', 'nikeshh', '123', 'user', 'nikesh@mail.com', '231746589', 'sk5.jpg'),
(8, '2024-03-18', 'Nikesh', '12345', 'contractor', 'nik@mail.com', '9510421980', 'profile2-boy.jpg'),
(14, '2024-03-26', 'sagar dandi', '123456', 'user', 'sagarpatel31103@gmail.com', '9773106608', 'vn.jpg'),
(15, '2024-03-26', 'lkjhgfds', '123234', 'user', 'm@mail.com', '1234567890', ''),
(17, '2024-03-30', 'Dhruven', '123456', 'user', 'dhruven@mail.com', '7412356892', 'c6.jpg'),
(18, '2024-03-30', 'Roshani ', '12345678', 'user', 'roshi16101993@gmail.com', '123456789999999', '1.jpg'),
(19, '2024-03-30', 'Roshani', '1234567', 'user', 'roshi16101993@gmail.com', '123456789999999', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `stateid` int NOT NULL AUTO_INCREMENT,
  `statename` varchar(50) NOT NULL,
  `sshortname` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  PRIMARY KEY (`stateid`),
  UNIQUE KEY `statename` (`statename`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `statename`, `sshortname`, `country`) VALUES
(1, 'Gujrat', 'Guj', 'india'),
(2, 'Maharastra', 'Mah', 'india'),
(3, 'karnataka', 'Ka', 'india'),
(4, 'Rajasthan', 'Raj', 'india'),
(5, 'Punjab', 'Pun', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

DROP TABLE IF EXISTS `tblaccounts`;
CREATE TABLE IF NOT EXISTS `tblaccounts` (
  `user_id` int NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `access_level` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`user_id`, `user_email`, `user_password`, `access_level`) VALUES
(3, 'aarti@mail.com', '123', ''),
(4, 'hetu@mail.com', '123', ''),
(5, 'kushalirj@mail.com', '123', ''),
(6, 'archi@mail.com', '123', ''),
(7, 'sanaln@mail.com', '123', ''),
(8, 'aaravshah@mail.com', '123', ''),
(9, 'sahilp@mail.com', '123', ''),
(10, 'krupali@mail.com', '123', ''),
(11, 'rishib@mail.com', '123', ''),
(12, 'mihirp@mail.com', '123', ''),
(13, 'harshalb@mail.com', '123', ''),
(14, 'dhruvijha@mail.com', '123', ''),
(15, 'jaimin@mail.com', '123', ''),
(16, 'milinr@mail.com', '123', ''),
(17, 'priya@mail.com', '123', ''),
(19, 'aayush@mail.com', '123', ''),
(20, 'priyavass@mail.com', '123', ''),
(22, 'ishamistry@mail.com', '123', ''),
(23, 'jay@mail.com', '123', ''),
(24, 'vids@mail.com', '123', ''),
(26, 'umar@mail.com', '123', ''),
(31, 'neha@mail.com', '123', ''),
(33, 'parthvi@mail.co', '123', ''),
(36, 'tina@gmail.com', '', ''),
(37, 'tina21royy@gmail.com', '', ''),
(38, 'tinaroy@gmail.com', '', ''),
(39, 'patelnikesh1146@gmail.com', '', ''),
(40, 'piyush@mail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts_detail`
--

DROP TABLE IF EXISTS `tblaccounts_detail`;
CREATE TABLE IF NOT EXISTS `tblaccounts_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `datetime_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `location` text NOT NULL,
  `expectation_visitor` varchar(100) NOT NULL,
  `cash_advanced` decimal(10,2) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_signed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccounts_detail`
--

INSERT INTO `tblaccounts_detail` (`id`, `user_id`, `firstname`, `lastname`, `phone`, `city`, `datetime_created`, `description`, `location`, `expectation_visitor`, `cash_advanced`, `status`, `date_signed`) VALUES
(3, 3, 'Aarti', 'Parekh', '0147852220', 'chikhli', '2024-02-28 02:03:03', 'none', 'hari om vadi', '512', '1500.00', 'pending', '2024-03-21 20:06:25'),
(4, 4, 'Hetavshi', 'updhayay', '1478521456', 'Surat', '2024-03-07 20:03:35', 'none', '521 Brown Avenue', '150', '1000.00', 'pending', '0000-00-00 00:00:00'),
(5, 5, 'Kushali', 'rajput', '3214589999', 'udaipur', '2024-05-07 20:03:36', 'none', '96 East Avenue', '210', '1100.00', 'pending', '0000-00-00 00:00:00'),
(6, 6, 'Archi', 'parmar', '1479996650', 'Shimla', '2024-04-08 02:03:40', 'none', 'Godhra', '300', '2500.00', 'confirm', '0000-00-00 00:00:00'),
(7, 7, 'Sanal', 'nair', '3256665870', 'Kerla', '2024-03-08 03:38:41', 'none', '98 Om Avenue', '120', '1250.00', 'pending', '0000-00-00 00:00:00'),
(8, 8, 'aarav', 'shah', '4580001450', 'vadodra', '2024-04-08 17:36:06', 'none', '28 patel Street', '90', '1000.00', 'pending', '0000-00-00 00:00:00'),
(9, 9, 'Sahil', 'parekh', '1456662210', 'daman', '2024-04-08 14:03:44', 'none', 'Sea salt Road', '300', '5000.00', 'pending', '0000-00-00 00:00:00'),
(10, 10, 'krupali', 'dhaduk', '4545554700', 'Ahmedabad', '2024-04-16 02:14:47', 'none', '101 Pratt Avenue', '300', '4500.00', 'pending', '0000-00-00 00:00:00'),
(11, 11, 'Rishi', 'Bharti', '4589780000', 'lucknow', '2024-03-28 18:45:51', 'none', 'shah Court', '250', '4000.00', 'pending', '0000-00-00 00:00:00'),
(12, 12, 'Mihir', 'Patel', '7896665450', 'gujarat', '2024-09-19 10:39:53', 'none', 'Patel nagar society', '300', '5000.00', 'pending', '0000-00-00 00:00:00'),
(13, 13, 'Harshal', 'bavsikar', '6541258888', 'pune', '2025-02-22 13:42:17', 'none', 'Hawa mahal', '150', '1500.00', 'pending', '0000-00-00 00:00:00'),
(14, 14, 'dhruvi', 'jha', '3214589650', 'junaghad', '2025-03-25 01:48:18', 'none', 'kali mata temple ', '200', '2000.00', 'fraud', '0000-00-00 00:00:00'),
(15, 15, 'Jaimin', 'Gavit', '963258741', 'vapi', '2024-03-28 08:37:00', 'none', 'hotel dehli darbar', '450', '4000.00', 'pending', '0000-00-00 00:00:00'),
(16, 16, 'Milin', 'Rathod', '1478545450', 'navsari', '2025-02-02 23:03:01', 'none', 'uday palace', '100', '1200.00', 'pending', '0000-00-00 00:00:00'),
(17, 17, 'Priya', 'Parekh', '9547854780', 'kutch', '2024-03-30 02:03:02', 'none', 'shrivay Avenue', '510', '7000.00', 'pending', '0000-00-00 00:00:00'),
(19, 19, 'Aayush', 'shah', '3214589650', 'jaipur', '2024-11-21 01:03:34', 'none', 'mirror palace', '350', '2500.00', 'confirm', '0000-00-00 00:00:00'),
(20, 20, 'Priya', 'Vassar', '2547850000', 'jamnagar', '2025-03-29 11:37:24', 'none', 'megh\'s Lane', '170', '2000.00', 'pending', '0000-00-00 00:00:00'),
(22, 22, 'Isha', 'Mistry', '2458954500', 'kosamba', '2024-07-10 08:03:33', 'none', 'mahatma gandhi Road', '480', '6500.00', 'confirm', '0000-00-00 00:00:00'),
(23, 23, 'Jay', 'Mehta', '9874563221', 'Udaipur', '2024-03-08 21:38:34', 'none', 'party plot', '260', '4500.00', 'confirm', '0000-00-00 00:00:00'),
(24, 24, 'vidhi', 'Shah', '6547778540', 'Kerela', '2024-08-20 22:03:44', 'none', 'temple road', '320', '6000.00', 'pending', '0000-00-00 00:00:00'),
(26, 26, 'Umar', 'Usmani', '7854125650', 'kashmir', '2024-08-27 06:19:11', '', '', '', '0.00', 'pending', '0000-00-00 00:00:00'),
(31, 31, 'Neha', 'Patel', '1478555545', 'udaipur', '2024-04-12 19:19:55', '', 'Gujarat', '', '250000.00', 'confirm', '0000-00-00 00:00:00'),
(33, 33, 'parthvi', 'patel', '9874125368', 'Godhra', '2024-04-13 01:19:02', '', '', '', '0.00', 'pending', '0000-00-00 00:00:00'),
(36, 36, 'Tina', 'Roy', '9852314762', 'Jamnagar', '2024-02-28 04:32:23', '', '', '', '0.00', 'pending', '0000-00-00 00:00:00'),
(38, 38, 'vanshika', 'roy', '1234645', 'chandighad', '2024-03-02 03:33:55', '', '', '', '0.00', 'pending', '0000-00-00 00:00:00'),
(39, 39, 'nikesh', 'patel', '9510421980', 'Assam', '2024-03-04 06:33:16', '', '', '', '0.00', 'pending', '0000-00-00 00:00:00'),
(40, 40, 'piyush', 'patel', '55555721121', 'kolkatta', '2024-03-06 06:33:08', '', '', '', '0.00', 'pending', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

DROP TABLE IF EXISTS `tblgallery`;
CREATE TABLE IF NOT EXISTS `tblgallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(100) NOT NULL,
  `alternate_text` varchar(100) NOT NULL,
  `type` char(5) NOT NULL,
  `size` varchar(10) NOT NULL,
  `relate_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`id`, `booking_id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`, `relate_id`) VALUES
(55, 36, 'Kat&amp;Vickey', 'Katrina Vicky', '', 'vk2.jpg', '', 'image', '91600', 0),
(56, 37, 'Love is in air', '', 'digbiasn', 'img-1.jpg', '', 'image', '61858', 0),
(59, 39, 'Cuties', '', '', 'kv1.jpg', '', 'image', '100303', 0),
(60, 10, 'The royal wedding', '', '', 'pexels-spora-weddings-18441979.jpg', '', 'image', '249902', 0),
(61, 37, 'the royal affairs', '', '', 'pic.jpeg', '', 'image', '375581', 0),
(62, 19, 'classic love', '', '', 'sk5.jpg', '', 'image', '149693', 0),
(63, 24, 'passionate love', '', '', 'priyanka&nick.jpg', '', 'image', '273005', 0),
(64, 23, 'love birds', '', '', 'pexels-camera-treasure-12153957.jpg', '', 'image', '1804931', 0),
(65, 22, 'wedding', '', '', 'pexels-camera-treasure-13217373.jpg', '', 'image', '902857', 0),
(66, 26, 'Bandhan', '', '', 'pexels-camera-treasure-17657763.jpg', '', 'image', '1565411', 0),
(67, 33, 'wedding rituals', '', '', 'pexels-spora-weddings-15698744.jpg', '', 'image', '1261245', 0),
(70, 21, 'beauty ', '', '', 'ar2.jpg', '', 'image', '73741', 0),
(71, 30, 'wedding bells', '', '', 'k1.jpg', '', 'image', '191145', 0),
(72, 36, 'the rituals', '', '', 'pic5.jpg', '', 'image', '1082915', 0),
(73, 36, 'Grand wedding', '', '', 'ambani.jpg', '', 'image', '810038', 0),
(74, 36, 'ties knots', '', '', 'ar.jpg', '', 'image', '729257', 0),
(75, 36, 'Royal wedding', '', '', 'deepveer.jpg', '', 'image', '513388', 0),
(76, 36, 'newly weds', '', '', 'rakul.jpg', '', 'image', '898697', 0),
(77, 36, 'love', '', '', 'sur.jpg', '', 'image', '873983', 0),
(78, 36, 'the true story', '', '', 'vn.jpg', '', 'image', '651466', 0),
(79, 36, 'parineetii', '', '', 'pari.jpg', '', 'image', '849868', 0),
(80, 36, 'Yami ties knot with love of her life ', '', '', 'yami.jpg', '', 'image', '1132140', 0),
(81, 23, 'love', '', '', 'cop1.jpg', '', 'image', '751969', 0),
(82, 35, 'love', '', '', 'cou.jpg', '', 'image', '699947', 0),
(83, 26, 'Nayantara', '', '', 'nayantara.jpeg', '', 'image', '145118', 0),
(84, 33, 'Vicky&amp;Kat', 'love is in air', '', 'kat.jpg', '', 'image', '977201', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblguest`
--

DROP TABLE IF EXISTS `tblguest`;
CREATE TABLE IF NOT EXISTS `tblguest` (
  `id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `guestname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `state` char(4) NOT NULL,
  `zipcode` char(10) NOT NULL,
  `priority` enum('A','B','C','D','E') NOT NULL,
  `out_of_town` enum('y','n') NOT NULL,
  `relationship` varchar(32) NOT NULL,
  `tracks_and_gifts` text NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguest`
--

INSERT INTO `tblguest` (`id`, `booking_id`, `fullname`, `guestname`, `address`, `state`, `zipcode`, `priority`, `out_of_town`, `relationship`, `tracks_and_gifts`, `city`) VALUES
(1, 1, 'josh dragon', 'josh', 'valencia', 'ph', '9098', 'A', 'y', 'g', 'asdasdsad', 'valencia'),
(2, 1, 'jane gest', 'jane', 'address', 'ph', '9807', 'A', 'y', 'b', 'color thing', 'valencia city'),
(3, 2, 'jane gest', 'jane', 'address', 'ph', '9807', 'A', 'y', 'b', 'color thing', 'valencia city'),
(4, 1, 'joshua deasi', 'designa', 'san fernando', 'ph', '0982', 'A', 'y', 'g', 'asdasdasdasdasd', 'asdsad'),
(5, 30, 'Betty M. Barber', 'Betty M. Barber', '3 Olen Thomas Drive', 'TX', '73600', 'A', 'y', 'g', 'Demo Text Demo Text', 'Wichita Falls'),
(6, 34, 'Guest One', 'Guest Name', '11 Test Address', 'DS', '70001', 'B', 'y', 'g', 'Demo Demo Demo', 'Democity');

-- --------------------------------------------------------

--
-- Table structure for table `tblorganizer`
--

DROP TABLE IF EXISTS `tblorganizer`;
CREATE TABLE IF NOT EXISTS `tblorganizer` (
  `organizer_id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `datetime_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`organizer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpostwedding`
--

DROP TABLE IF EXISTS `tblpostwedding`;
CREATE TABLE IF NOT EXISTS `tblpostwedding` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `preview_image` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `wedding_date` varchar(100) NOT NULL,
  `wedding_type` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `date_published` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpostwedding`
--

INSERT INTO `tblpostwedding` (`id`, `title`, `description`, `preview_image`, `location`, `status`, `wedding_date`, `wedding_type`, `date_created`, `date_published`) VALUES
(31, 'Mr. &amp; Mrs. Malhotra', '92-acre Tuscan-inspired estate offering indoor and outdoor event spaces, as well as a Four Diamond inn and renowned restaurant.', 'sk1.jpg', 'Vintners Resort', '1', '03/24/2024', 'Elite', 'March 2, 2024, 11:23 am', 'March 2, 2024, 12:48 am'),
(52, 'MR. &amp; MRS. Patel', 'Beautifully restored historic home with elegant indoor event spaces, a Parterre Garden, and a lovely courtyard strung with market lights that\'s perfect for intimate celebrations.', 'wdnf4.JPG', 'Beauregard-Keyes House', '1', '04/30/2024', 'Elite', 'March 2, 2024, 11:29 am', 'March 2, 2024, 12:49 am'),
(57, 'MR. &amp; MRS. Sharma', 'Exchange vows in a natural woodland &ldquo;cathedral&rdquo; surrounded by towering pines, followed by cocktails served from a charming tipi and a delightful tented reception in the heart of the woods.', 'c2.jpeg', 'Blue Moon Rising', '1', '04/18/2024', 'Gold', 'March 8, 2024, 11:29 am', 'March 2, 2024, 12:48 am'),
(60, 'MR. &amp; MRS. Roy', 'Romantic 1929 Art Deco, blufftop mansion with indoor and outdoor event venues that offer fantastic ocean and shoreline views.', 'ab1.jpg', 'Yankee Clipper Inn', '1', '02/20/2024', 'Elite', 'March 4, 2024, 11:44 am', 'March 2, 2024, 12:49 am'),
(62, 'MR. &amp; MRS. Patel', 'Magnificent 102-acre coastal resort on a bluff overlooking the stunning Palos Verdes Peninsula, boasting landscaped grounds, verdant lawns, and warm, elegant ballrooms with terraces&mdash;all with jaw-dropping views.', 'wdnf12.JPG', 'Terranea Resort', '1', '04/03/2024', 'Premier', 'March 8, 2024, 11:29 am', 'March 2, 2024, 12:50 am'),
(65, 'MR. &amp; MRS. Verma', 'Relaxed, full-service resort presents an alluring choices of indoor and outdoor venues, from al fresco ceremonies with sweeping Pacific vistas to luxe reception ballrooms with classic columns and hand-blown glass chandeliers.', 'wdnf10.JPG', 'Hyatt Regency Huntington Beach Resort and Spa', '1', '04/28/2024', '', 'March 4, 2024, 11:44 am', 'March 15, 2024, 10:06 pm'),
(69, 'MR. &amp; MRS. patel', 'This rustic farmstead getaway offers picture-perfect event spaces, including a hilltop pergola and the Chimney Pond Meadow, surrounded by neat rows of Christmas trees, and a stylishly rustic reception barn highlighted by Tuscan lights and globe chandeliers.', 'kv1.jpg', 'navsari', '1', '03/29/2014', '', 'March 8, 2024, 11:50 am', 'March 20, 2024, 3:41 pm'),
(70, 'MR &amp; MRS ambani', 'amezing wedding', 'ambani.jpg', 'jamnagar', '1', '04/02/2024', '', 'March 18, 2024, 5:37 pm', 'March 29, 2024, 12:07 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `access_level` enum('0','1','2') NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstname`, `lastname`, `gender`, `username`, `password`, `email`, `designation`, `address`, `access_level`, `profile_picture`, `date_created`) VALUES
(5, 'Megha', 'Patel', 'f', 'admin', 'D00F5D5217896FB7FD601412CB890830', 'admin@mail.com', '0', 'Navsari,Gujarat', '', 'profile2-girl2.jpg', 'March 6, 2024, 5:15 pm'),
(7, 'Vrunda', 'Lad', 'f', 'Vruu', '123', 'vrunda@mail.com', '1', 'chikhli', '', 'gr3.png', 'March 6, 2024, 3:45 pm'),
(9, 'Patel', 'Nikesh', 'm', 'Nikk', '123', 'nikesh@gmail.com', '1', 'Navsari', '', 'image_processing20200612-31480-102txmi.png', 'March 9, 2024, 1:01 am'),
(11, 'Jay', 'Mehta', 'm', 'jay', '123', 'jay@gmail.com', '1', 'Nvs', '', 'PIZZ.jpg', 'March 11, 2024, 1:07 am');

-- --------------------------------------------------------

--
-- Table structure for table `tblweddingbook`
--

DROP TABLE IF EXISTS `tblweddingbook`;
CREATE TABLE IF NOT EXISTS `tblweddingbook` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `bride` varchar(32) NOT NULL,
  `groom` varchar(32) NOT NULL,
  `wedding_type` int NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `wedding_date` varchar(100) NOT NULL,
  `organizer_id` int NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblweddingbook`
--

INSERT INTO `tblweddingbook` (`booking_id`, `user_id`, `bride`, `groom`, `wedding_type`, `user_email`, `wedding_date`, `organizer_id`) VALUES
(3, 3, 'Aarti', 'Fozan', 0, 'aarti@mail.com', '04/03/2024', 0),
(4, 4, 'Hetavshi', 'Jay', 0, 'hetu@mail.com', '03/30/2024', 0),
(5, 5, 'kushali', 'sohan', 0, 'kushalirj@mail.com', '03/30/2024', 0),
(7, 7, 'Vishakha', 'Sanal', 0, 'sanaln@mail.com', '09/30/2024', 0),
(8, 8, 'aarya', 'aarav', 0, 'aaravshah@mail.com', '03/30/2024', 0),
(9, 9, 'Archi', 'Sahil', 0, 'sahilp@mail.com', '03/30/2024', 0),
(10, 10, 'krupali', 'jekesh', 0, 'krupali@mail.com', '03/30/2024', 0),
(11, 11, 'Vidhi', 'Rishi', 0, 'rishib@mail.com', '03/30/2024', 0),
(12, 12, 'Megha', 'Mihir', 0, 'mihirp@mail.com', '03/08/2024', 0),
(13, 13, 'Siddhi', 'Harshal', 0, 'harshalb@mail.com', '03/31/2024', 0),
(14, 14, 'dhruvi', 'rishi', 0, 'dhruvijha@mail.com', '04/02/2024', 1),
(15, 15, 'kiara', 'jaimin', 0, 'jaimin@mail.com', '04/28/2024', 0),
(16, 16, 'Vrunda', 'Milin', 0, 'milinr@mail.com', '05/18/2024', 0),
(17, 17, 'Priya', 'kunal', 0, 'priya@mail.com', '05/24/2024', 0),
(19, 19, 'Mehak', 'Aayush', 0, 'aayush@mail.com', '05/25/2024', 0),
(20, 20, 'priya vassar', 'harsh', 0, 'priyavass@mail.com', '03/27/2024', 0),
(22, 22, 'isha', 'darshan', 0, 'ishamistry@mail.com', '06/23/2024', 1),
(23, 23, 'avneet kaur', 'mehta jay', 0, 'jay@mail.com', '10/07/2024', 0),
(24, 24, 'vidhi', 'Shiv', 0, 'vids@mail.com', '07/07/2024', 0),
(26, 26, 'Rinkal', 'Umar', 0, 'umar@mail.com', '12/12/2024', 0),
(31, 31, 'Neha', 'aarav', 0, 'neha@mail.com', '05/09/2024', 0),
(33, 33, 'parthvi', 'Nikesh', 0, 'parthvi@mail.co', '05/24/2024', 0),
(35, 36, 'tina', 'rushil', 0, 'tina@gmail.com', '02/19/2024', 0),
(37, 38, 'vanshika', 'parth', 0, 'tinaroy@gmail.com', '04/02/2024', 0),
(38, 39, 'Neha', 'Nikesh', 0, 'patelnikesh1146@gmail.com', '10/21/2024', 0),
(39, 40, 'Nidhi', 'Piyush', 0, 'piyush@mail.com', '03/27/2024', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblweddingcategories`
--

DROP TABLE IF EXISTS `tblweddingcategories`;
CREATE TABLE IF NOT EXISTS `tblweddingcategories` (
  `packid` int NOT NULL,
  `wedtype` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `packimg` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `regid` int NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`packid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblweddingcategories`
--

INSERT INTO `tblweddingcategories` (`packid`, `wedtype`, `price`, `packimg`, `regid`, `title`) VALUES
(1, 'Classic', '165000.00', 'classic.jpg', 0, 'Haldi , \r\nMehandi ,\r\nSangeet , \r\nEntry ,\r\nDJ Services ,\r\nWedding Cake ,\r\nFood \r\n'),
(2, 'Elegant', '200000.00', 'timeless.jpg', 0, 'Haldi , \r\nMehandi ,\r\nSangeet , \r\nEntry ,\r\nDJ Services ,\r\nWedding Cake ,\r\nDecor'),
(3, 'Premier', '240000.00', 'premier.jpeg', 0, 'Haldi , \r\nMehandi ,\r\nSangeet , \r\nEntry ,\r\nDJ Services ,\r\nWedding Cake ,\r\nDecor'),
(4, 'Gold', '395000.00', 'ele.jpg', 0, 'Haldi , \r\nMehandi ,\r\nSangeet , \r\nEntry ,\r\nDJ Services ,\r\nWedding Cake ,\r\nDecor'),
(5, 'Elite', '520000.00', 'elite.jpg', 0, 'Haldi , \r\nMehandi ,\r\nSangeet , \r\nEntry ,\r\nDJ Services ,\r\nWedding Cake ,\r\nDecor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_features`
--

DROP TABLE IF EXISTS `tbl_features`;
CREATE TABLE IF NOT EXISTS `tbl_features` (
  `feature_id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`feature_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_features`
--

INSERT INTO `tbl_features` (`feature_id`, `category_id`, `title`, `description`) VALUES
(2, 2, 'Hair and Make Up , \r\nphotographer ,\r\nAppetizers and Meal Service ,\r\nwedding cake ,\r\nDJ Services ,\r\nD', 'none'),
(3, 2, 'Photographer', 'unlimited shot\r\nSoftCopy(CD/DVD)'),
(4, 5, 'Hair And Make Up', 'unlimited shot'),
(7, 5, 'Appetizers and Meal Service', 'Choice Six Hot/Cold, 3-Entr&eacute;e Buffet or Duet Plate'),
(8, 1, 'Hair And Make Up', 'Our own professional worker'),
(9, 5, 'Wedding Cake', 'Custom Wedding Cake'),
(10, 1, 'Appetizers', 'Vegetable &amp; Cheese Platters'),
(11, 1, 'DJ Services', 'DJ Services'),
(12, 5, 'Bar Service', 'Bar Service'),
(13, 5, 'Champagne &amp; Cider Toast', 'Champagne &amp; Cider Toast'),
(15, 4, 'Appetizers and Meal Service', 'Choice Six Hot/Cold, 3-Entr&eacute;e Buffet or Duet Plate'),
(16, 4, 'Hair And Make Up', 'hair cut that will change you life'),
(17, 5, 'Invitations &amp; Accessories', 'Invitations &amp; Accessories'),
(18, 5, 'DJ &amp; MC Services', 'DJ &amp; MC Services'),
(19, 4, 'Wedding Cake', 'Custom Wedding Cake'),
(20, 5, 'Chairs &amp; Linens', 'Chairs &amp; Linens'),
(21, 4, 'Photographer', 'unlimited shot'),
(22, 4, 'Bar Service', 'Beer, Wine'),
(23, 4, 'Reception Decor', 'Stage Decor'),
(24, 3, 'Hair And Make Up', 'unlimited shot'),
(25, 3, 'Appetizers and Meal Services', 'Choice Six Hot/Cold, 3-Entr&eacute;e Buffet or Duet Plate'),
(26, 3, 'Invitations &amp; Accessories', 'none'),
(27, 3, 'DJ &amp; MC Services', 'none'),
(28, 2, 'Appetizers', 'Vegetable &amp; Cheese Platters'),
(29, 2, 'Decorations', 'Stage Decorations'),
(30, 3, 'Wedding Cake', 'Custom Wedding Cake'),
(31, 4, 'DJ &amp; MC Services', 'none'),
(32, 4, 'Centerpieces', 'Standard'),
(33, 5, 'Centerpieces', 'Centerpieces'),
(34, 5, 'Photobooth', 'Photobooth'),
(35, 5, 'Grand Sparklers', 'Grand Sparklers'),
(36, 5, 'Specialty Lighting', 'Specialty Lighting');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_liquidation`
--

DROP TABLE IF EXISTS `tbl_liquidation`;
CREATE TABLE IF NOT EXISTS `tbl_liquidation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `user_id` int NOT NULL,
  `event_id` int NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `cash` decimal(10,2) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `date_issue` varchar(100) NOT NULL,
  `date_modified` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_liquidation`
--

INSERT INTO `tbl_liquidation` (`id`, `booking_id`, `user_id`, `event_id`, `payment`, `cash`, `credit`, `date_issue`, `date_modified`) VALUES
(1, 1, 1, 34, '10000.00', '10000.00', '0.00', 'March 10, 2024, 5:16 pm', 'March 12, 2024, 1:46 pm'),
(2, 1, 1, 30, '2022.00', '2022.00', '0.00', 'March 11, 2024, 1:16 pm', ''),
(3, 1, 1, 33, '4500.00', '2500.00', '20000.00', 'March 11, 2024, 8:16 am', ''),
(4, 1, 1, 8, '2000.00', '1000.00', '1000.00', 'February 10, 2024, 5:16 pm', ''),
(5, 2, 2, 8, '2000.00', '1000.00', '1000.00', 'March 10, 2024, 5:16 pm', ''),
(6, 30, 30, 5, '2500.00', '2500.00', '0.00', 'March 13, 2024, 2:04 am', ''),
(7, 30, 30, 6, '3950.00', '3950.00', '0.00', 'March 13, 2024, 2:21 am', ''),
(8, 25, 25, 1, '1660.00', '1660.00', '0.00', 'March 13, 2024, 2:23 am', ''),
(9, 30, 30, 11, '1500.00', '0.00', '1500.00', 'March 13, 2024, 6:55 pm', ''),
(10, 30, 30, 11, '1500.00', '1500.00', '0.00', 'March 13, 2024, 6:55 pm', ''),
(11, 34, 35, 5, '3500.00', '3500.00', '0.00', 'March 13, 2024, 8:42 pm', ''),
(12, 34, 35, 11, '1100.00', '1100.00', '0.00', 'March 13, 2024, 8:43 pm', ''),
(13, 34, 35, 10, '3000.00', '3000.00', '0.00', 'March 13, 2024, 8:43 pm', ''),
(14, 31, 31, 3, '5000000.00', '250000.00', '4750000.00', 'March 15, 2024, 10:31 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `customer_email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `txn_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `payment_status` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `vendorid` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `decors` varchar(50) NOT NULL,
  `venues` varchar(50) NOT NULL,
  `catering` varchar(50) NOT NULL,
  `photography` varchar(50) NOT NULL,
  `regid` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorid`, `username`, `decors`, `venues`, `catering`, `photography`, `regid`) VALUES
(1, 'meghaa', '', 'lawnsandfarm', 'sri sai poultry', 'pictures q', 0),
(2, 'meghaa', '', 'lawnsandfarm', 'gala caters', 'ieye photography', 0),
(3, 'Nikesh', '', 'resorts', 'sri sai poultry', 'pictures q', 8),
(4, 'megha', '', '', '', '', 1),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', 'SELECT PHOTOGRAPHER', 0),
(10, '', '', '', '', 'SELECT PHOTOGRAPHER', 0),
(11, '', '', '', '', 'SELECT PHOTOGRAPHER', 0),
(12, 'nik', '', '', '', 'SELECT PHOTOGRAPHER', 2),
(13, 'nik', '', '', '', 'SELECT PHOTOGRAPHER', 2),
(14, 'nik', '', '', '', 'SELECT PHOTOGRAPHER', 2),
(15, 'nik', '', '', '', 'SELECT PHOTOGRAPHER', 2),
(16, 'nik', '', '', '', '', 2),
(17, 'nikeshh', '', '', '', '', 6),
(18, 'nikeshh', '', '', '', 'sai photography', 6),
(19, 'nikeshh', '', '', '', '', 6),
(20, 'nikeshh', '', '', '', '', 6),
(21, 'nikeshh', '', 'resorts', 'sri sai poultry', 'ieye photography', 6),
(22, 'Roshani', '', 'partyhalls', 'ishwaramma catering', 'kshan photography', 19),
(23, 'meghaa', '', '', '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
