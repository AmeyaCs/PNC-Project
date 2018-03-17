-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2016 at 07:26 PM
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
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `id` int(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Payment` varchar(50) NOT NULL,
  `CARD NO` varchar(50) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `CVC` int(30) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `quantity`, `pic`, `Name`, `emailid`, `contact`, `address`, `Payment`, `CARD NO`, `DATE`, `CVC`, `price`) VALUES
(0, 1, 'dfsffd', 'aadad', 'don@gmail.com', '4363474575', 'djcvnjxcv', 'CAsh On Delivery', '', '', 0, 0),
(0, 1, 'dfsffd', 'aadad', 'don@gmail.com', '4363474575', 'djcvnjxcv', 'CAsh On Delivery', '', '', 0, 0),
(0, 1, 'dfsffd', 'aadad', 'don@gmail.com', '4363474575', 'djcvnjxcv', 'CAsh On Delivery', '', '', 0, 0),
(0, 3, 'download.jpg', 'sfgsdl;gsdfklq', 'xyz@gmail.com', '4363474575', '	fhdfhdxhn', 'CAsh On Delivery', '111111111111', '1111', 0, 0),
(0, 3, 'download.jpg', 'sfgsdl;gsdfklq', 'xyz@gmail.com', '4363474575', '	fhdfhdxhn', 'CAsh On Delivery', '111111111111', '1111', 0, 0),
(0, 5, 'download.jpg', 'nvn v', 'vnvjn', 'bvnvjnv', '	vnvnmvbm ', 'CAsh On Delivery', '111111111111', '1111', 111, 0),
(1, 2, '', 'gfbfdb', 'bfbfc', 'fcvbfcbc', '	ffb fc ', 'CAsh On Delivery', '111111111111', '1111', 111, 2),
(1, 2, '', '', '', '', '	', 'CAsh On Delivery', '', '', 0, 2),
(1, 2, 'gal2.jpg', 'rajesh', 'xyz@gmail.com', 'fcvbfcbc', 'vfdgdg', 'CAsh On Delivery', '12131316548648949', '0605', 123, 0),
(2, 2, 'gal2.jpg', 'rajesh', 'xyz@gmail.com', 'fcvbfcbc', 'vfdgdg', 'CAsh On Delivery', '12131316548648949', '0605', 123, 2000),
(3, 2, 'gal3.jpg', 'aadad', 'don@gmail.com', 'asdfasd', 'fdfgdgd	', 'CAsh On Delivery', '111111111111', '1111', 111, 2000),
(4, 2, 'gal3.jpg', 'aadad', 'don@gmail.com', 'asdfasd', 'fdfgdgd	', 'CAsh On Delivery', '111111111111', '1111', 111, 2000),
(5, 2, 'gal3.jpg', 'aadad', 'don@gmail.com', 'asdfasd', 'fdfgdgd	', 'CAsh On Delivery', '111111111111', '1111', 111, 2000),
(6, 3, 'gal2.jpg', 'shravan mantri', 'shravan.mantri@yahoo.com', '9049433500', 'andheri east	', 'CAsh On Delivery', '411111111111111111', '1111', 111, 3000),
(7, 3, 'gal2.jpg', 'ASCSZFDS', 'shravan.mantri@yahoo.com', '9808724623', 'XSAHBDHABCK	', 'CAsh On Delivery', '12131316548648949', '1111', 111, 3000),
(8, 2, 'gal2.jpg', 'sfgsdl;gsdfklq', 'shravan.mantri@yahoo.com', '4363474575', '	SXHGSHJDS', 'CAsh On Delivery', '111111111111', '1111', 111, 2000),
(9, 2, 'gal2.jpg', 'sagrar', 'sagar@gmail.com', '9999999999', '	hjsgxjhasgxyjhasgxasy', 'CAsh On Delivery', '111111111111', '1111', 111, 2000),
(10, 2, '05.jpg', 'Shravan Mantri', 'shravan.mantri@yahoo.com', '9049433500', '	PLOT NO.. 218 , G-2 N-1 CIDCO, AURANGABAD', 'CAsh On Delivery', '111111111111', '1111', 111, 2000),
(11, 2, '05.jpg', 'aadad', 'don@gmail.com', '4363474575', 'jshxjdsgc	', 'CAsh On Delivery', '12131316548648949', '1111', 111, 2000),
(12, 1, '05.jpg', 'rajesh', 'don@gmail.com', '4363474575', '	fcgfhgfhgf', 'CAsh On Delivery', '111111111111', '1111', 111, 1000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
