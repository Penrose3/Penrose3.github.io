-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 06:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db599261063`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(9, 'test'),
(10, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `listPrice` decimal(10,2) NOT NULL,
  `shortDescription` text NOT NULL,
  `description` text NOT NULL,
  `file_ext` varchar(100) NOT NULL,
  PRIMARY KEY (`productID`),
  UNIQUE KEY `productCode` (`productCode`),
  KEY `categoryID` (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `listPrice`, `shortDescription`, `description`, `file_ext`) VALUES
(49, 9, '99999', 'test', '99.99', '<p>\r\n	test shrt</p>\r\n', '<p>\r\n	test lng</p>\r\n', 'gif'),
(50, 9, '88888', 'test2', '88.88', '<p>\r\n	test shrt 2</p>\r\n', '<p>\r\n	test lng 2</p>\r\n', 'gif'),
(51, 10, '77777', 'test3', '111.11', '<p>\r\n	test shrt 3</p>\r\n', '<p>\r\n	test lng 3</p>\r\n', 'gif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `password`) VALUES
(14, 'qwerty', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
