-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2013 at 08:53 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rajeshelectric`
--

-- --------------------------------------------------------

--
-- Table structure for table `sub_salary`
--

CREATE TABLE IF NOT EXISTS `sub_salary` (
  `sal_id` int(20) NOT NULL AUTO_INCREMENT,
  `sal_code` int(50) NOT NULL,
  `e_desc` text NOT NULL,
  `e_amt` float(20,2) NOT NULL,
  `d_desc` text NOT NULL,
  `d_amt` float(20,2) NOT NULL,
  PRIMARY KEY (`sal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sub_salary`
--

INSERT INTO `sub_salary` (`sal_id`, `sal_code`, `e_desc`, `e_amt`, `d_desc`, `d_amt`) VALUES
(1, 4, 'Basic', 5000.00, 'PF', 50.00),
(2, 5, 'Basic', 70000.00, 'PF', 200.00),
(3, 5, 'HRA', 1000.00, 'Labour Welfare', 10.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
