
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE `carbk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carbk`;



CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `admin` (`uname`, `password`, `code`) VALUES
('Vinit Gore', 'Sarvoday402', 1);



CREATE TABLE IF NOT EXISTS `cardetails` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `car` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `cardetails` (`name`, `email`, `car`, `date`) VALUES
('Vinit', 'vinitgore@gmail.com', 'Ford', '2016-11-09'),
('', '', '', '0000-00-00'),
('', '', '', '0000-00-00');



CREATE TABLE IF NOT EXISTS `custdetails` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


INSERT INTO `custdetails` (`code`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Avinash', 'avinash@gmail.com', 2147483647, ''),
(2, 'Avinash', 'avinash@gmail.com', 2147483647, 'Sarvoday402'),
(3, 'Ayush Jajodhia', 'ayush.jajodhia@gmail.com', 2147483647, 'Windows10');
