-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 12:54 PM
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
-- Table structure for table `ict_skills`
--

CREATE TABLE IF NOT EXISTS `ict_skills` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ecategory` varchar(150) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `sdescription` text NOT NULL,
  `eactivities` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `ict_skills`
--

INSERT INTO `ict_skills` (`id`, `ecategory`, `skills`, `sdescription`, `eactivities`) VALUES
(1, 'accounting', 'programming', 'php', 'php'),
(3, 'computer enginering', 'programming', 'hgggggggggg', 'ghhhhhhhhh'),
(5, 'bank/non-bank', 'database', 'sssssss', 'software'),
(6, 'accounting', 'database', 'sssssss', 'ccccccccccccccc'),
(10, 'computer enginering', 'programming', 'dddddddddddd', 'aaaaaaaaaa'),
(11, 'computer enginering', 'programming', 'aaaaaaaaaa', 'fffffff'),
(12, 'computer enginering', 'programming', 'fffffffffff', 'nnnnnn'),
(14, 'accounting', 'programming', 'ssssss', 'sssssssssss'),
(15, 'bank/non-bank', 'database', 'iouu', 'iouio');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
