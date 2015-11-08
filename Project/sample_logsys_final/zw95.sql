-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 03 月 19 日 23:03
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zw95`
--
CREATE DATABASE IF NOT EXISTS `zw95` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zw95`;

-- --------------------------------------------------------

--
-- 表的结构 `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `time` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- 转存表中的数据 `messages`
--

INSERT INTO `messages` (`id`, `user`, `msg`, `time`) VALUES
(83, 'as1111', 'a', 1395270093),
(84, 'as1111', 'd', 1395270096),
(85, 'as1111', 's', 1395270098),
(86, 'as1111', '1', 1395270100),
(87, 'as1111', '2', 1395270101),
(88, 'as1111', '3', 1395270102),
(89, 'as1111', '4', 1395270103),
(90, 'as1111', '5', 1395270105),
(91, 'as1111', '6', 1395270106),
(92, 'as1111', '7', 1395270107);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(7) NOT NULL AUTO_INCREMENT,
  `pd` char(32) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL,
  `regdate` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uid`, `pd`, `user`, `regdate`, `status`) VALUES
(65, 'as111', 'as111', 1395227344, 0),
(66, 'zw95', 'zw95', 1395227541, 0),
(67, 'SA66', 'SA66', 1395227764, 0),
(68, 'SA661', 'SA661', 1395227976, 0),
(69, 'asas', 'asas', 1395228064, 1),
(70, 'sp66', 'sp66', 1395228211, 0),
(71, 'SA6611', 'SA6611', 1395228311, 0),
(72, '1111', '1111', 1395228393, 0),
(73, '2222', '2222', 1395228436, 0),
(74, '3333', '3333', 1395228443, 0),
(75, '4444', '4444', 1395228502, 0),
(76, 'zw951', 'zw951', 1395231662, 0),
(77, 'asas1', 'asas1', 1395231720, 0),
(78, 'SA66111', 'SA66111', 1395231889, 0),
(79, 'as1111', 'as1111', 1395269909, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
