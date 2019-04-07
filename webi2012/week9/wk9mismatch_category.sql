-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 05:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webi2012shm`
--

-- --------------------------------------------------------

--
-- Table structure for table `wk9mismatch_category`
--

CREATE TABLE IF NOT EXISTS `wk9mismatch_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(48) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wk9mismatch_category`
--

INSERT INTO `wk9mismatch_category` (`category_id`, `name`) VALUES
(1, 'Appearance'),
(2, 'Entertainment'),
(3, 'Food'),
(4, 'People'),
(5, 'Activities'),
(6, 'Pets');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
