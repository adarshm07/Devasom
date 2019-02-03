-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2019 at 06:33 AM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devasom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

DROP TABLE IF EXISTS `cat`;
CREATE TABLE IF NOT EXISTS `cat` (
  `cname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cname`) VALUES
('devasom'),
('prasadam');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` bigint(10) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `subject` varchar(900) NOT NULL,
  `description` varchar(900) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `name`, `email`, `number`, `cname`, `subject`, `description`) VALUES
(2, 'akjdb', 'bjkbjkbjk@mail.com', 4698268, 'devasom', 'akdbajajkb', 'alknann');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `name`, `email`, `mobile`, `pwd`, `image`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '975467890', '123', ''),
(10, 'user', 'user', 'user@mail.com', '4567890', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `address`) VALUES
(1, 'neovic', 'devierte', 'silay city'),
(2, 'dee', 'tolentino', 'bacolod city'),
(4, 'julyn', 'divinagracia', 'eb magalona'),
(6, 'lee', 'ann', 'employee sudb'),
(7, 'akdbj', 'hfakj', 'kafj@mail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
