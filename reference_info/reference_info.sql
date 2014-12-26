-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 11:03 PM
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
-- Table structure for table `reference_info`
--

CREATE TABLE IF NOT EXISTS `reference_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `address` longtext NOT NULL,
  `relation` varchar(20) NOT NULL,
  `poffice` char(15) NOT NULL,
  `phome` char(15) NOT NULL,
  `mobile` char(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `reference_info`
--

INSERT INTO `reference_info` (`id`, `name`, `organization`, `address`, `relation`, `poffice`, `phome`, `mobile`, `email`) VALUES
(1, 'arghya', 'ss mart', 'Shyamoli', 'uncle', '0125478855', '0174556332', '01917562356', 'muktaquate@yaho'),
(2, 'mukta', 'ssmart', 'shyamoli', 'uncle', '01254588', '0125896', '014587896', 'muktaquate@yaho'),
(16, 'ela', 'ssmart', 'shyamoli', 'relative', '017896555233', '01523644587', '012547856', 'muktaquate@yahoo.com'),
(17, 'hira', 'ssmart', 'shyamoli', 'relative', '017896555233', '01523644587', '01780170107', 'muktaquate@yahoo.com'),
(18, 'bithi', 'ssmart', 'shyamoli', 'uncle', '017896555233', '01523644587', '012547856', 'bithi@yahoo.com'),
(19, 'bithi', 'ssmart', 'shyamoli', 'relative', '017896555233', '01523644587', '01780170107', 'muktaquate@yahoo.com'),
(20, 'Arghya', 'bcc', 'banani', 'brother', '012456563332', '0125896', '0125463325', 'arghyabachhar@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
