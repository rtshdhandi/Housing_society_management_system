-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2018 at 10:43 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

DROP TABLE IF EXISTS `addmember`;
CREATE TABLE IF NOT EXISTS `addmember` (
  `memberid` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `flat_type` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`memberid`, `fname`, `lname`, `roomno`, `flat_type`, `area`, `parking`, `contactno`, `email`, `password`) VALUES
(4, 'Mahendra', 'Singh', '103', '1BHK', '800', 'No', '5486323446', 'man@gmail.com', 'mahs32'),
(3, 'Shivam', 'Chandra', '105', '1BHK', '800', 'Yes', '43359373057', 'schandra@gmail.com', 'dwgdwggg'),
(6, 'Shivam', 'semwal', '101', '1BHK', '800', 'No', '36548759246', 'shiv@gmail.com', 'shiv'),
(7, 'rakesh', 'Dhandi', 'A-101', '1BHK', '800', 'Yes', '36548759246', 'mahi@gmail.com', 'ewtyewt'),
(20, 'Ritesh', 'Dhandi', '102', '1BHK', '800', 'Yes', '7303094198', 'rtshdhandi@gmail.com', 'eiL5lhDd'),
(18, 'Janhavi', 'Kharade', '106', '1BHK', '600', 'Yes', '7303094198', 'jkharade@gmail.com', 'q2In56a4'),
(21, 'Manish ', 'Verma', '107', '1BHK', '900', 'No', '107', 'manysh@gmail.com', 'Qbv4Y6GK'),
(22, 'Sonalika', 'Rai', '201', '1BHK', '800', 'Yes', '8876756544', 'sonalika@gmail.com', 'sonalika12');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

DROP TABLE IF EXISTS `charges`;
CREATE TABLE IF NOT EXISTS `charges` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `month` varchar(50) NOT NULL,
  `persquareft` bigint(5) NOT NULL,
  `maintanance` bigint(5) NOT NULL,
  `parking` bigint(5) NOT NULL,
  `eventfund` bigint(5) NOT NULL,
  `water` bigint(5) NOT NULL,
  `electricity` bigint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`id`, `month`, `persquareft`, `maintanance`, `parking`, `eventfund`, `water`, `electricity`) VALUES
(1, 'OCTOBER', 10, 400, 200, 200, 350, 400);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `cid` int(15) NOT NULL AUTO_INCREMENT,
  `cdate` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `cdescription` varchar(300) NOT NULL,
  `complaintby` varchar(15) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `complaintby` (`complaintby`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `cdate`, `type`, `cdescription`, `complaintby`) VALUES
(4, '2018-09-09', 'Parking', 'ewt3ur3wu4qwwrkyhoezry;uesjf', '102');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `eid` int(15) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) NOT NULL,
  `edate` date NOT NULL,
  `eorganizer` varchar(50) NOT NULL,
  PRIMARY KEY (`eid`),
  KEY `eorganizer` (`eorganizer`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `ename`, `edate`, `eorganizer`) VALUES
(16, 'JANMASHTAMI', '2018-10-21', '103'),
(17, 'Raksha Bandhan', '2018-10-04', '102'),
(18, 'JANMASHTAMI', '2018-10-13', '102'),
(20, 'Ganesh Chaturthi', '2018-10-06', '102');

-- --------------------------------------------------------

--
-- Table structure for table `memberlogin`
--

DROP TABLE IF EXISTS `memberlogin`;
CREATE TABLE IF NOT EXISTS `memberlogin` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

DROP TABLE IF EXISTS `society`;
CREATE TABLE IF NOT EXISTS `society` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`aid`, `username`, `password`) VALUES
(1, 'admin', 'pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
