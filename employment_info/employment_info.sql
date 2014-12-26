-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 01:50 AM
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
-- Table structure for table `employment_info`
--

CREATE TABLE IF NOT EXISTS `employment_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) NOT NULL,
  `cbusiness` varchar(150) NOT NULL,
  `address` longtext NOT NULL,
  `designation` text NOT NULL,
  `department` varchar(20) NOT NULL,
  `from` date NOT NULL,
  `eduration` char(10) NOT NULL,
  `responsibility` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `employment_info`
--

INSERT INTO `employment_info` (`id`, `cname`, `cbusiness`, `address`, `designation`, `department`, `from`, `eduration`, `responsibility`) VALUES
(1, 'asiatic', 'asiatic', 'bonani', 'it expert', ' it', '2014-12-23', '4', 'honesty'),
(10, 'graphics people', 'design', 'dohs', 'officer', 'sales', '2014-12-09', '10', 'punctuality'),
(14, 'asian paints', 'design', 'dohs', 'officer', 'sales', '0000-00-00', '10', 'punctuality'),
(15, 'graphics people', 'design', 'banani', 'officer', 'sales', '0000-00-00', '4', 'Honesty'),
(16, 'asiatic', 'design', 'shyamoli', 'sales', 'marketing', '0000-00-00', '10', 'leadership'),
(17, 'Banglalink', 'software', 'uttara', 'marketing', 'marketing', '0000-00-00', '12', 'leadership'),
(19, 'asian paints', 'design', 'banani', 'marketing', 'marketing', '2026-12-12', '10', 'leadership'),
(26, 'asiatic', 'design', 'shyamoli', 'marketing', 'sales', '2026-12-12', '10 years', 'punctuality');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
