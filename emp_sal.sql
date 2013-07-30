-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2013 at 08:52 AM
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
-- Table structure for table `emp_sal`
--

CREATE TABLE IF NOT EXISTS `emp_sal` (
  `es_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_code` varchar(50) NOT NULL,
  `es_name` varchar(50) NOT NULL,
  `es_add` varchar(255) NOT NULL,
  `es_contact` varchar(12) NOT NULL,
  `es_doj` date NOT NULL,
  `es_desig` varchar(50) NOT NULL,
  `es_accno` varchar(20) NOT NULL,
  `es_bankname` varchar(50) NOT NULL,
  `es_panno` varchar(20) NOT NULL,
  `es_no_of_days` int(20) NOT NULL,
  `es_days_present` int(20) NOT NULL,
  `es_days_paid` int(20) NOT NULL,
  `year` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `earning` int(50) NOT NULL,
  `deduction` int(50) NOT NULL,
  `net_pay` int(50) NOT NULL,
  PRIMARY KEY (`es_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `emp_sal`
--

INSERT INTO `emp_sal` (`es_id`, `es_code`, `es_name`, `es_add`, `es_contact`, `es_doj`, `es_desig`, `es_accno`, `es_bankname`, `es_panno`, `es_no_of_days`, `es_days_present`, `es_days_paid`, `year`, `month`, `earning`, `deduction`, `net_pay`) VALUES
(1, 'WT0001', 'Kishor', 'Nashik', '9999999999', '0000-00-00', '2011-06-06', 'ICICI', 'ic1232423423', 'cfggh102131', 30, 0, 0, 0, 0, 3500, 100, 3400),
(2, 'WT0001', 'Kishor', 'Nashik', '9999999999', '0000-00-00', '2011-06-06', 'ICICI', 'ic1232423423', 'cfggh102131', 30, 28, 28, 2013, 0, 1050, 1050, 0),
(3, 'WT0001', 'Kishor', 'Nashik', '9999999999', '0000-00-00', '2011-06-06', 'ICICI', 'ic1232423423', 'cfggh102131', 30, 50, 50, 2013, 7, 1000, 50, 950),
(4, 'WT0002', 'Mohan', 'nashik jaibhavai road jachak mala trupti society', '9878675432', '0000-00-00', '2013-07-09', 'SBI', '123456789', '153645645', 31, 20, 10, 2013, 7, 5000, 50, 4950),
(5, 'WT0002', 'Mohan', 'nashik jaibhavai road jachak mala trupti society', '9878675432', '0000-00-00', '2013-07-09', 'SBI', '123456789', '153645645', 31, 0, 0, 2013, 7, 71000, 210, 70790);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
