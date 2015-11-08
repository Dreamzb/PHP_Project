-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2014 at 06:01 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `groupWork`
--

-- --------------------------------------------------------

--
-- Table structure for table `parent_sample`
--

CREATE TABLE IF NOT EXISTS `parent_sample` (
  `sid` int(11) NOT NULL,
  `pid` int(255) NOT NULL,
  `sample_name` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `tenderness` varchar(255) NOT NULL,
  `typeside` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dimension_code` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_sample`
--

INSERT INTO `parent_sample` (`sid`, `pid`, `sample_name`, `ph`, `weight`, `colour`, `tenderness`, `typeside`, `temp`, `location`, `dimension_code`, `number`, `note`) VALUES
(11675002, 11675, 'my sample', '1010', '51', 'red', 'b', 'L', '10', 'Wellingtion', '15,25,25', 1, 'no notes'),
(11675004, 11680, 'parent sample 10100', '100', '40', 'Green', 'A', 'XL', '100', 'LA', '14,47,68', 455, 'very good sample'),
(11675005, 11682, 'HDDGHK', '100', '45', 'Purple', 'R', 'lsjbdv', 'ljblj', 'city', '52,512,54', 64, 'no notes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
