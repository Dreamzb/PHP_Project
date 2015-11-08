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
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `species` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11683 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `uid`, `project_name`, `species`, `description`, `creation_date`) VALUES
(11675, 1, 'HKW', 'beef', 'Saudi Arabia ', '2014-05-12'),
(11679, 1, 'lamb farm', 'lamb', 'china', '2014-05-12'),
(11680, 1, 'my project', 'lamb', 'this is the project description', '2014-10-22'),
(11681, 1, 'my other project', 'goat', 'goat farm', '2014-10-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
