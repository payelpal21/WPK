-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2022 at 02:02 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpk`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE IF NOT EXISTS `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(7, 'womens polytechnic kolkata', 'admin'),
(6, 'hello', '123'),
(12, 'ranchi', 'ranchi'),
(11, 'rajib', '2023'),
(10, 'wpk', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `admissionstudent`
--

DROP TABLE IF EXISTS `admissionstudent`;
CREATE TABLE IF NOT EXISTS `admissionstudent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `roll` varchar(300) DEFAULT NULL,
  `stream` varchar(300) DEFAULT NULL,
  `fname` varchar(300) DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `dob` varchar(300) DEFAULT NULL,
  `mobile` varchar(300) DEFAULT NULL,
  `semester` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissionstudent`
--

INSERT INTO `admissionstudent` (`id`, `name`, `roll`, `stream`, `fname`, `address`, `dob`, `mobile`, `semester`) VALUES
(1, ' hello world', '20012', ' electronic and telecommunication engineering', ' www', '  www  \r\n      ', '2022-06-10', ' 7001507956', '4th'),
(2, ' computer', '23445', ' computer science and technology', ' mno', '  wwwwwwwwwwww  \r\n      ', '2022-06-13', ' 7001507956', '6th'),
(3, ' Ananya Banerjee', '208801', ' computer science and technology', ' xyz', ' kolkata,70018    ', '2022-06-04', ' 1234567890', '6TH');

-- --------------------------------------------------------

--
-- Table structure for table `applynewcard`
--

DROP TABLE IF EXISTS `applynewcard`;
CREATE TABLE IF NOT EXISTS `applynewcard` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(600) DEFAULT NULL,
  `stream` varchar(600) DEFAULT NULL,
  `roll` varchar(600) DEFAULT NULL,
  `registration` varchar(600) DEFAULT NULL,
  `card_issue` varchar(600) DEFAULT NULL,
  `cardno` varchar(600) DEFAULT NULL,
  `status` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applynewcard`
--

INSERT INTO `applynewcard` (`ID`, `name`, `stream`, `roll`, `registration`, `card_issue`, `cardno`, `status`) VALUES
(7, 'rajib dey', 'computer science and technology', '101', 'r202', NULL, NULL, 'Approve'),
(6, 'rajib dey', 'computer science and engineering', '20012', 'R190', NULL, NULL, NULL),
(9, 'Ananya Banerjee', 'Electronics and telecommunication Engineering', '2001234', 'R1902345', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `filename`) VALUES
(85, 'Newton Backward.png'),
(86, 'Screenshot (1).png'),
(87, 'Screenshot (1).png'),
(88, 'Newton Forward.png'),
(89, 'B.TECH7TH MARKSHEET.pdf'),
(90, '09-06-2022 Viva exam for all trade excluding CST, IT, ECE.pdf'),
(91, '11-06-2022 Viva exam for only CST,IT,ECE.pdf'),
(92, '12-06-2022 Form fill up start for 6th sem examination .jpg'),
(93, '15-06-2022 Form fill up start form 4th sem examination.jpg'),
(94, '18-06-2022 Admit card generate .jpg');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

DROP TABLE IF EXISTS `studentregistration`;
CREATE TABLE IF NOT EXISTS `studentregistration` (
  `SLNO` bigint(11) NOT NULL AUTO_INCREMENT,
  `class_serial` varchar(300) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `roll` varchar(300) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `dob` varchar(300) NOT NULL,
  `dept` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `status` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`SLNO`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`SLNO`, `class_serial`, `firstname`, `lastname`, `roll`, `fname`, `dob`, `dept`, `address`, `mobile`, `status`) VALUES
(31, '203', 'rajib', 'dey', ' 20', 'www', '2002-04-14', 'computer science and technology', '     www\r\n      ', '7001507956', 'Approve'),
(30, '203', 'rajib ', 'dey', ' 20', 'rajib dey', '2022-06-09', 'electronic and telecommunication engineering', '     \r\n rajib dey     ', '7001507956', 'Approve'),
(32, '207', 'www', 'www', ' 23', 'www', '2022-06-16', 'electronic and telecommunication engineering', '     \r\n   wwwwwwwwwwwwwwwwwwwwwwww   ', '1111111111', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
CREATE TABLE IF NOT EXISTS `transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `dept` varchar(300) NOT NULL,
  `registration` varchar(400) NOT NULL,
  `roll` varchar(300) NOT NULL,
  `clgname` varchar(300) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `status` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `name`, `dept`, `registration`, `roll`, `clgname`, `fname`, `mobile`, `status`) VALUES
(1, 'pp ', 'pp', 'pp2', '15', 'ppp', 'ppp', '7001507956', 'Approve'),
(2, 'ww ', 'www', 'w3', '12', 'aa', 'aa', '7001507956', 'Approve'),
(4, 'rakesh disuza', 'computer science and technology', 'R103', '101', 'jadavpur APC Roy polytechnic', 'demo9', '1234567890', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
