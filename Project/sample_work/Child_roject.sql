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
-- Table structure for table `Child_roject`
--

CREATE TABLE IF NOT EXISTS `Child_roject` (
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ph` varchar(20) DEFAULT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `colour` varchar(20) DEFAULT NULL,
  `tenderness` varchar(20) DEFAULT NULL,
  `typeside` varchar(20) DEFAULT NULL,
  `temperature` varchar(20) DEFAULT NULL,
  `dimensioncode` varchar(20) DEFAULT NULL,
  `note` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Child_roject`
--

INSERT INTO `Child_roject` (`cid`, `sid`, `ph`, `weight`, `colour`, `tenderness`, `typeside`, `temperature`, `dimensioncode`, `note`) VALUES
(116750013, 11675004, '455L', '411', 'Green', 'AA', 'X', '99', '45,12,1', 'best child sample');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
