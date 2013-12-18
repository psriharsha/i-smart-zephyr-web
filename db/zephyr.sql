-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2013 at 05:25 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zephyr`
--
DROP DATABASE `zephyr`;

CREATE DATABASE IF NOT EXISTS `zephyr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zephyr`;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `aId` int(11) NOT NULL AUTO_INCREMENT,
  `eId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  PRIMARY KEY (`aId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`aId`, `eId`, `uId`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(70) NOT NULL,
  `passWord` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  PRIMARY KEY (`eId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eId`, `userName`, `passWord`, `phone`, `emailId`) VALUES
(1, 'harsha', 'AbbeyTotal123', '07965666556', 'harsha@abbeytotalcare.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `tId` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(30) NOT NULL,
  PRIMARY KEY (`tId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tId`, `text`) VALUES
(1, 'My title'),
(2, 'My title'),
(3, 'My title'),
(4, 'My title'),
(5, 'My title'),
(6, 'My title'),
(7, 'My title'),
(8, 'My title'),
(9, 'My title'),
(10, 'My title'),
(11, 'My title');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uId` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `bloodGroup` enum('A+ve','A-ve','B+ve','B-ve','AB+ve','AB-ve','O+ve','O-ve') NOT NULL,
  `userName` varchar(80) NOT NULL,
  `passWord` varchar(32) NOT NULL,
  `ethnicity` varchar(15) NOT NULL,
  PRIMARY KEY (`uId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `firstName`, `lastName`, `dob`, `gender`, `bloodGroup`, `userName`, `passWord`, `ethnicity`) VALUES
(1, 'Sri Harsha', 'Prabhala', '17-10-1989', 'male', 'O+ve', 'harsha@abbeytotalcare.co.uk', '02abd31ff18abd46cb15ed9505d1a0dd', 'Indian');

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE IF NOT EXISTS `vitals` (
  `vId` int(11) NOT NULL AUTO_INCREMENT,
  `uId` int(11) NOT NULL,
  `heartRate` int(11) NOT NULL,
  `respRate` int(11) NOT NULL,
  `temp` decimal(10,3) NOT NULL,
  `posture` decimal(10,3) NOT NULL,
  `acceleration` decimal(10,3) NOT NULL,
  `stampTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`vId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
