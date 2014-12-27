-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 12:55 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `training_info`
--

CREATE TABLE IF NOT EXISTS `training_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ttitle` varchar(20) NOT NULL,
  `tdescription` varchar(150) NOT NULL,
  `institute` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `tyear` year(4) NOT NULL,
  `duration` int(10) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `ctitle` varchar(150) NOT NULL,
  `tdetail` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `training_info`
--

INSERT INTO `training_info` (`id`, `ttitle`, `tdescription`, `institute`, `address`, `tyear`, `duration`, `sdate`, `edate`, `ctitle`, `tdetail`) VALUES
(1, 'ftfl', 'ftfl 2nd batch', 'bcc', 'bcc', 2014, 10, '2014-12-16', '2014-12-31', 'ftfl ', 'ftfl'),
(2, 'ftfl', 'ffvvvb', 'nbbbbbbbbbbbbbbb', 'nnnnnnnnnnnnn', 2014, 10, '2014-12-01', '2014-12-29', 'fffff', 'fffffffffff'),
(5, 'lict', 'lict ftfl', 'ftfl', 'ftfl', 2014, 50, '2014-12-27', '2014-12-31', 'ftfl', 'ftfl ftfl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
