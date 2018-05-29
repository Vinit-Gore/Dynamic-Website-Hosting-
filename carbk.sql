-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2016 at 03:30 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carbk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE IF NOT EXISTS `cardetails` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `car` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`name`, `email`, `car`, `date`) VALUES
('Sanil Rodrigues', 'rods.sanil30@gmail.com', 'Scorpio', '2016-03-25'),
('Sanil Rodrigues', 'rods.sanil30@gmail.com', 'Scorpio', '2016-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `custdetails`
--

CREATE TABLE IF NOT EXISTS `custdetails` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `custdetails`
--

INSERT INTO `custdetails` (`name`, `email`, `mobile`, `password`, `code`) VALUES
('Sanil Rodrigues', 'rods.sanil30@gmail.com', '7507847096', 'sanil123', 1),
('Franky Naidu', 'frankynaidu@gmail.com', '8149621767', 'franky123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pricedetails`
--

CREATE TABLE IF NOT EXISTS `pricedetails` (
  `model` varchar(50) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  KEY `carname` (`carname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricedetails`
--

INSERT INTO `pricedetails` (`model`, `carname`, `price`) VALUES
('Mahindra', 'Scorpio', 922000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
