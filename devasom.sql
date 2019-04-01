-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2019 at 06:50 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `devasom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` text,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_cart`
--

CREATE TABLE IF NOT EXISTS `admin_cart` (
  `uid` text,
  `pid` text,
  `date` text,
  `price` text,
  `assign` text,
  `status` text,
  `name` text,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `uid` text,
  `pid` text,
  `date` text,
  `price` int(11) DEFAULT NULL,
  `assign` text,
  `status` text,
  `name` text,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `hid` text,
  `housename` text,
  `customername` text,
  `address` text,
  `employee` text,
  `litre` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `date` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`hid`, `housename`, `customername`, `address`, `employee`, `litre`, `quality`, `total`, `date`) VALUES
('6', 'house1', 'customer1', 'address1', '5', 5, 2, 20, '13/02/19'),
('6', 'house1', 'customer1', 'address1', '5', 10, 10, 200, '13/02/19');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `mobile` text,
  `username` text,
  `password` text,
  `type` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `username`, `password`, `type`) VALUES
(7, 'rhul', '123@gmail.com', '12324345789', 'rahul', '123', 'driver'),
(8, 'manager1', '123@gmail.com', '1234567', 'manager1', '123', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE IF NOT EXISTS `house` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `housename` text,
  `customername` text,
  `address` text,
  `employee` text,
  `acc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `housename`, `customername`, `address`, `employee`, `acc`) VALUES
(2, 'sample', 'sample', 'sample', '4', NULL),
(3, 'sreekaryam', 'aslkdjf', 'lsdkjf', '4', NULL),
(5, 'shamnad', 'shamnad', 'kannur', '4', '123456789'),
(6, 'house1', 'customer1', 'address1', '5', '1236549879');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE IF NOT EXISTS `leaves` (
  `type` text,
  `date` text,
  `status` text,
  `id` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`type`, `date`, `status`, `id`) VALUES
('Medical Leave', '123', 'Reject', '4'),
('Medical Leave', '234', 'Reject', '4'),
('Medical Leave', '789', 'Reject', '1'),
('Medical Leave', '', 'Reject', '1'),
('Medical Leave', '12/10/2019', 'Reject', '1'),
('Casual Leave', '123', 'Reject', '4'),
('Medical Leave', '456', 'Applied', '4');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text,
  `name` text,
  `month` int(11) DEFAULT NULL,
  `date` text,
  `file` text,
  `status` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `type`, `name`, `month`, `date`, `file`, `status`) VALUES
(5, 'Vehicle Loan', '1', 4, '14/02/19', '', 'Reject'),
(6, 'Educational Loan', '1', 5, '14/02/19', '', 'Reject'),
(7, 'Educational Loan', '4', 1, '14/02/19', '', 'Reject'),
(8, 'Educational Loan', '4', 1, '14/02/19', '', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `uid` text,
  `name` text,
  `email` text,
  `address` text,
  `city` text,
  `state` text,
  `zip` text,
  `cardnumber` text,
  `expmonth` text,
  `expyear` text,
  `cvv` text,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `file` text,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `file`, `price`) VALUES
(22, 'ARAVANA', '', 'https://www.tipzstyle.com/wp-content/uploads/2016/10/aravana.jpg', 100),
(23, 'PALPAYASAM', '', 'https://2.bp.blogspot.com/-Rc2Tl7uE9WA/Wb8Z3cRgQUI/AAAAAAAAB-c/JI1rXO0ovEciIcQtiaOoI61mxniFOgZEQCLcBGAs/s1600/Paal%2BPayasam-01_wm.jpg', 250),
(24, 'UNNIYAPPAM', '', 'http://ingrid.zcubes.com/zcommunity/contentfiles/blog/dsc_0044-imp_-2064467424_P.jpg', 200),
(25, 'VADA MALA', '', 'https://tse2.mm.bing.net/th?id=OIP.c8yEV5FSFmezi3vHxyUIIwDIEs', 220),
(26, 'POOJITHA CHARADU', '', 'https://upload.wikimedia.org/wikipedia/commons/6/6e/Kalava_Mauli_Wikipedia.jpg', 80);

-- --------------------------------------------------------

--
-- Table structure for table `total_made`
--

CREATE TABLE IF NOT EXISTS `total_made` (
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` text,
  `email` text,
  `mobile` text,
  `username` text,
  `password` text,
  `address` text,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `mobile`, `username`, `password`, `address`, `id`) VALUES
('haritha', 'haritha@gmail.com', '8281252491', 'rahul', 'rahul', NULL, 11),
('ameer', 'ameer@ameer', 'sldkjfkl', 'am', 'am', NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`views`) VALUES
(21);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
