-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2016 at 03:16 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` text NOT NULL,
  `emailaddress` text NOT NULL,
  `mobileno` text NOT NULL,
  `company` text NOT NULL,
  `city` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `emailaddress`, `mobileno`, `company`, `city`, `message`) VALUES
('don', 'don@gmail.com', '9988776655', 'don pvt ltd', 'mumbai', 'something something'),
('don', 'don@gmail.com', '9988776655', 'don pvt ltd', 'mumbai', 'something something'),
('xyz', 'xyz@gmail.com', '7733994477', 'xyx', 'xyx', 'something something'),
('pranav', 'pranavbangale1992@gmail.com', '7769969902', 'xyz', 'aurangabad', 'nice work');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
