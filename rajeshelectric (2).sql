-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2013 at 06:24 PM
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
-- Table structure for table `assign_job`
--

CREATE TABLE IF NOT EXISTS `assign_job` (
  `assg_id` int(10) NOT NULL AUTO_INCREMENT,
  `job_id` int(10) NOT NULL,
  `stock_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `assg_val` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`assg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `assign_job`
--

INSERT INTO `assign_job` (`assg_id`, `job_id`, `stock_id`, `emp_id`, `assg_val`, `date`) VALUES
(1, 2, 6, 1, 2, '2013-07-08'),
(2, 2, 8, 2, 6, '2013-07-08'),
(3, 2, 7, 1, 2, '2013-07-08'),
(4, 2, 6, 1, 6, '2013-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_date` varchar(25) NOT NULL,
  `client_name` varchar(40) NOT NULL,
  `comp_name` varchar(70) NOT NULL,
  `c_add1` text NOT NULL,
  `c_add2` text NOT NULL,
  `c_city` varchar(25) NOT NULL,
  `c_pin` int(11) NOT NULL,
  `c_ph` bigint(11) NOT NULL,
  `c_mo` bigint(11) NOT NULL,
  `c_email` varchar(40) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `c_date`, `client_name`, `comp_name`, `c_add1`, `c_add2`, `c_city`, `c_pin`, `c_ph`, `c_mo`, `c_email`) VALUES
(3, '26-06-2013', 'pete walbort', 'DSW', 'us', '', 'uk', 121212, 223232, 34343434, 'sneha@gmail.com'),
(5, '21-06-2013', 'reshma', 'wavetechline.com', 'nashik uttam nagar', 'cbs road', 'nashik', 422122, 123456, 5566787654, 'wavetechline@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(100) NOT NULL,
  `e_add` varchar(100) NOT NULL,
  `e_contact` bigint(11) NOT NULL,
  `e_desig` varchar(11) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`e_id`, `e_name`, `e_add`, `e_contact`, `e_desig`) VALUES
(1, 'sajit', 'Nashik Road 1', 9962847564, 'welder'),
(2, 'Mohan', 'nashik jaibhavai road jachak mala trupti society', 9878675432, 'welder');

-- --------------------------------------------------------

--
-- Table structure for table `gatepass`
--

CREATE TABLE IF NOT EXISTS `gatepass` (
  `pass_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_id` int(10) NOT NULL,
  `tin_no` varchar(30) NOT NULL,
  `cst_no` varchar(30) NOT NULL,
  `ex_ring` varchar(30) NOT NULL,
  `ex_no` varchar(30) NOT NULL,
  `ex_div` varchar(30) NOT NULL,
  `ex_com` varchar(30) NOT NULL,
  `g_no` varchar(25) NOT NULL,
  `g_date` date NOT NULL,
  `due_date` date NOT NULL,
  `req` char(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `t_ref_no` varchar(30) NOT NULL,
  `p_name` varchar(60) NOT NULL,
  `addr` text NOT NULL,
  `mode` char(25) NOT NULL,
  `time` time NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `v_no` varchar(35) NOT NULL,
  `issue` varchar(40) NOT NULL,
  `total_qnt` int(20) NOT NULL,
  `total_amt` float NOT NULL,
  `remark` text NOT NULL,
  `req_by` varchar(40) NOT NULL,
  `appr_nm` varchar(20) NOT NULL,
  `date_tim` datetime NOT NULL,
  PRIMARY KEY (`pass_id`),
  UNIQUE KEY `g_no` (`g_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gatepass`
--

INSERT INTO `gatepass` (`pass_id`, `client_id`, `tin_no`, `cst_no`, `ex_ring`, `ex_no`, `ex_div`, `ex_com`, `g_no`, `g_date`, `due_date`, `req`, `dept`, `status`, `t_ref_no`, `p_name`, `addr`, `mode`, `time`, `t_name`, `v_no`, `issue`, `total_qnt`, `total_amt`, `remark`, `req_by`, `appr_nm`, `date_tim`) VALUES
(10, 5, 'RT3451', '121', '456Y56U', '2335', 'civil', 'BH23', 'PI4567', '2013-06-28', '2013-06-28', 'poonam', 'instrument', 'complete', 'MH12-3443', 'rajesh', 'try', 'by vehical', '11:04:24', 'bagha', '34534', 'paresh', 0, 0, '', '', 'hitesh', '2013-06-28 11:04:24'),
(11, 5, 'P123', '', '456Y56U', '2335', 'civil', '', 'A123', '2013-06-28', '2013-06-28', 'poonam', '', 'complete', 'MH12-3443', 'rajesh', 'sdsd', 'test', '12:08:54', 'dipak', 'MH11-5678', 'parakh', 0, 0, '', '', 'soham', '2013-06-28 12:08:54'),
(12, 3, 'RT3451', '121', '', '6666TYU', '', 'BH23', 'HI4567', '2013-07-02', '2013-07-02', 'poonam', 'instrument', 'approved', 'MH12-3443', 'rajesh', 'A/P Mylayn lab Plot no. 2 phase -3 hari vaibhav industrie', 'by vehical', '03:25:20', 'dipak', 'MH11-5678', 'parakh', 0, 0, '', '', 'amit', '2013-07-02 03:25:20'),
(14, 5, 'RT3451', '121', '456Y56U', '6666TYU', 'civil', 'BH23', 'Q789', '2013-06-28', '2013-06-28', 'poonam', 'civil', 'complete', 'MH12-3443', 'rajesh', 'dfgdfgdfg', 'by vehical', '04:03:56', 'bagha', '34534', 'parakh', 0, 0, 'for rewinding', 'Ramdas sangale', 'soham', '2013-06-28 12:08:54'),
(15, 3, 'RT3451', '121', '456Y56U', '6666TYU', 'civil', 'BH23', 'MA2345', '2013-07-11', '2013-07-11', 'poonam', 'instrument', 'complete', 'MH12-3443', 'rajesh', 'nashik road', 'by vehical', '10:56:48', 'bagha', 'MH11-5678', 'paresh', 19, 0, 'for rewinding', 'Ramdas sangale', 'hitesh', '2013-07-11 10:56:48'),
(16, 3, 'P123', '27640370524C', '456Y56U', '6666TYU', 'civil', 'BH23', 'NTU56784', '2013-07-11', '2013-07-11', 'poonam', 'instrument', 'complete', 'MH-12-345', 'rajesh', 'Nashik pune highway road', 'by vehical', '11:14:30', 'baghas', 'MH11-5678', 'parakh', 31, 238, 'for rewinding data lace', 'hanuman', 'jayesh', '2013-07-11 11:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_date` varchar(25) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_comp` varchar(50) NOT NULL,
  `q_name` varchar(25) NOT NULL,
  `q_address` varchar(100) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  `po_no` int(20) NOT NULL,
  `rgp_no` int(20) NOT NULL,
  `dc_no` int(20) NOT NULL,
  `code_no` int(20) NOT NULL,
  `tin_no` int(20) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`i_id`, `q_date`, `c_id`, `c_comp`, `q_name`, `q_address`, `q_mo`, `po_no`, `rgp_no`, `dc_no`, `code_no`, `tin_no`, `date1`, `date2`) VALUES
(1, '09-07-2013', 5, '', 'reshma', 'nashik uttam nagar', 0, 1023, 456, 678, 0, 3443, '2013-07-09', '2013-07-09'),
(3, '09-07-2013', 5, 'wavetechline.com', 'reshma', 'nashik uttam nagar', 0, 45689, 5678, 4563, 23321, 23345, '2013-06-11', '2013-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `job_worksheet`
--

CREATE TABLE IF NOT EXISTS `job_worksheet` (
  `job_id` int(25) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(80) NOT NULL,
  `make` varchar(30) NOT NULL,
  `phase` varchar(15) NOT NULL,
  `rpm` int(15) NOT NULL,
  `ampere` float NOT NULL,
  `hp` float NOT NULL,
  `kw` float NOT NULL,
  `frame` varchar(40) NOT NULL,
  `sr_no` varchar(15) NOT NULL,
  `addtional_details` longtext NOT NULL,
  `slots` int(10) NOT NULL,
  `colis` varchar(25) NOT NULL,
  `pich` varchar(25) NOT NULL,
  `turn` varchar(20) NOT NULL,
  `swg` varchar(20) NOT NULL,
  `weight_of_coil` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `slots1` int(12) NOT NULL,
  `coils1` varchar(20) NOT NULL,
  `pich1` varchar(20) NOT NULL,
  `turn1` varchar(20) NOT NULL,
  `swg1` int(20) NOT NULL,
  `weight_coil1` int(20) NOT NULL,
  `total1` int(20) NOT NULL,
  `analysis_of_failure` longtext NOT NULL,
  `n_l_ampere_d` float NOT NULL,
  `n_l_ampere_y` float NOT NULL,
  `resistance_d` float NOT NULL,
  `resistance_y` float NOT NULL,
  `rotor_lock_current` float NOT NULL,
  `each_phase_current` float NOT NULL,
  `air_fan` int(10) NOT NULL,
  `fan_cover` int(10) NOT NULL,
  `d_e_bearing` int(10) NOT NULL,
  `shaft_repair` int(10) NOT NULL,
  `terminal_plate` int(10) NOT NULL,
  `terminal_box` int(10) NOT NULL,
  `nde_bearing` int(10) NOT NULL,
  `cover_repair` int(10) NOT NULL,
  `oil_seal` varchar(30) NOT NULL,
  `water_seal` int(10) NOT NULL,
  `additonal` int(10) NOT NULL,
  `stator_core_repair` int(10) NOT NULL,
  `stator_core_length` int(10) NOT NULL,
  `rotor_core_length` int(10) NOT NULL,
  `rotor_od` int(10) NOT NULL,
  `slot_dia` int(10) NOT NULL,
  `stator_dia` int(10) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job_worksheet`
--

INSERT INTO `job_worksheet` (`job_id`, `client_name`, `make`, `phase`, `rpm`, `ampere`, `hp`, `kw`, `frame`, `sr_no`, `addtional_details`, `slots`, `colis`, `pich`, `turn`, `swg`, `weight_of_coil`, `total`, `slots1`, `coils1`, `pich1`, `turn1`, `swg1`, `weight_coil1`, `total1`, `analysis_of_failure`, `n_l_ampere_d`, `n_l_ampere_y`, `resistance_d`, `resistance_y`, `rotor_lock_current`, `each_phase_current`, `air_fan`, `fan_cover`, `d_e_bearing`, `shaft_repair`, `terminal_plate`, `terminal_box`, `nde_bearing`, `cover_repair`, `oil_seal`, `water_seal`, `additonal`, `stator_core_repair`, `stator_core_length`, `rotor_core_length`, `rotor_od`, `slot_dia`, `stator_dia`) VALUES
(2, 'krist velson', 'cromtans', '3', 1234, 3, 5, 7, '-', 'AD345', '  type   ', 24, '12 1+1', '1 to 6', '118', '27', '100', '1200', 24, '12 1+1', '1 to 6', '115', 23, 200, 1500, 'crash rote ', 0, 0, 24, -12, 45, 34, 1, 2, 3, 4, 5, 6, 7, 8, '8', 1, 11, 12, 121, 13, 14, 15, 456);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(25) NOT NULL,
  `u_pass` varchar(25) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `u_name`, `u_pass`) VALUES
(1, 'rajesh', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `material_desc`
--

CREATE TABLE IF NOT EXISTS `material_desc` (
  `mat_id` int(10) NOT NULL AUTO_INCREMENT,
  `gatpas_id` varchar(30) NOT NULL,
  `client_id` int(10) NOT NULL,
  `desc_mat` text NOT NULL,
  `quant` int(10) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`mat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `material_desc`
--

INSERT INTO `material_desc` (`mat_id`, `gatpas_id`, `client_id`, `desc_mat`, `quant`, `unit`, `rate`, `amount`) VALUES
(20, 'PI4567', 10, 'durbin m/c', 12, '34', 12, 0),
(21, 'PI4567', 10, 'durbin m/c', 12, '34', 12, 0),
(22, 'PI4567', 10, 'durbin m/c', 12, '34', 12, 0),
(46, 'A123', 5, 'cruzy', 67, '67', 67, 0),
(47, 'A123', 5, 'TOMY', 8, '8', 8, 0),
(48, 'A123', 5, 'rotry', 12, '9', 15, 0),
(49, 'A123', 5, 'material maching', 7, '876', 67, 0),
(50, 'A123', 5, 'rachana', 3, '45', 12, 0),
(51, 'A123', 5, 'tn', 6, '8', 7, 0),
(52, 'HI4567', 3, 'durbin m/c', 12, '2', 2, 0),
(53, 'HI4567', 5, 'telescope rotator not work', 12, 'EA', 12, 0),
(54, 'HI4567', 5, 'rotry', 67, 'KG', 78, 0),
(55, 'MA2345', 3, 'telescope rotator not work', 0, '7', 56, 0),
(56, 'MA2345', 3, 'durbin m/c', 0, '8', 7, 0),
(57, 'MA2345', 3, 'rotry', 0, '8', 7, 0),
(76, 'NTU56784', 3, 'durbin m/c', 9, 'hj', 8, 72),
(77, 'NTU56784', 3, 'mototr rewinding charger', 9, 'gh', 8, 72),
(78, 'NTU56784', 3, 'test', 8, 'gh', 8, 64),
(79, 'NTU56784', 3, 'rotry', 5, 'gh', 6, 30);

-- --------------------------------------------------------

--
-- Table structure for table `partial_payment`
--

CREATE TABLE IF NOT EXISTS `partial_payment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `p_mode` varchar(25) NOT NULL,
  `c_no` varchar(25) NOT NULL,
  `p_date` varchar(25) NOT NULL,
  `i_amt` double NOT NULL,
  `p_amt` double NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE IF NOT EXISTS `quotation` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `q_ref_no` varchar(25) NOT NULL,
  `q_date` varchar(100) NOT NULL,
  `q_name` varchar(100) NOT NULL,
  `q_address` varchar(100) NOT NULL,
  `q_pass` varchar(100) NOT NULL,
  `q_mo` bigint(11) NOT NULL,
  `q_mail` varchar(50) NOT NULL,
  `q_vendor_no` int(15) NOT NULL,
  `q_sub` text NOT NULL,
  `q_fax` varchar(20) NOT NULL,
  `q_trans` decimal(10,2) NOT NULL,
  `q_tax` int(1) NOT NULL DEFAULT '0',
  `a_total` decimal(30,0) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`q_id`, `c_id`, `q_ref_no`, `q_date`, `q_name`, `q_address`, `q_pass`, `q_mo`, `q_mail`, `q_vendor_no`, `q_sub`, `q_fax`, `q_trans`, `q_tax`, `a_total`) VALUES
(5, 5, 'AQR1234/WER', '01-07-2013', 'reshma', 'nashik uttam nagar', 'A123', 5566787654, 'wavetechline@gmail.com', 0, 'Quatation For AC MOTOR REwinding & repairing', '02132-2556677', '0.00', 0, '0'),
(8, 5, 'DTE56-UI78ASDRET', '02-07-2013', 'reshma', 'nashik uttam nagar', 'A123', 5566787654, 'purank@gmail.xom', 345632, 'port at won the leak', '03452-256789', '0.00', 0, '0'),
(21, 5, 'DTE56-UI78ASDRET', '02-07-2013', 'reshma', 'nashik uttam nagar', '0', 5566787654, '', 20005651, 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '0.00', 0, '0'),
(22, 5, 'DTE56-UI78ASDRET', '02-07-2013', 'reshma', 'nashik uttam nagar', 'A123', 5566787654, 'nashik uttam nagar', 20005651, 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '0.00', 0, '0'),
(23, 5, 'DTE56-UI78ASDRET', '02-07-2013', 'reshma', 'nashik uttam nagar', '0', 5566787654, 'nashik uttam nagar', 20005651, 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '0.00', 0, '0'),
(24, 5, 'DTE56-UI78ASDRET', '02-07-2013', 'reshma', 'nashik uttam nagar', '0', 5566787654, 'wavetechline@gmail.com', 20005651, 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '89.00', 0, '0'),
(25, 5, 'ABC56-UI78ASDRET', '02-01-2014', 'reshma', 'nashik uttam nagar', 'PI4567', 5566787654, 'wavetechline@gmail.com', 20898989, 'Quatation For AC MOTOR REwinding & repairing', '025551 230924', '19.00', 1, '0'),
(26, 5, 'OPE.SNR/45-14/MLL-67', '04-07-2013', 'reshma', 'nashik uttam nagar', 'A123', 5566787654, 'wavetechline@gmail.com', 567805651, 'port at won the leak', '03452-256789', '56.00', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `st_id` int(15) NOT NULL AUTO_INCREMENT,
  `avail_id` varchar(13) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `st_category` varchar(30) NOT NULL,
  `quantity` float NOT NULL,
  `buy_rate` float NOT NULL,
  `sell_rate` float NOT NULL,
  `suplier_name` varchar(30) NOT NULL,
  `st_date` datetime NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`st_id`, `avail_id`, `st_name`, `st_category`, `quantity`, `buy_rate`, `sell_rate`, `suplier_name`, `st_date`) VALUES
(6, '3', 'copper red wire ', 'electrics', 21, 200, 300, 'sunil', '2013-07-05 04:37:17'),
(7, 'PQR#$', 'silicon wire', 'electric', 21, 200, 433, 'gadha', '2013-07-08 03:16:40'),
(8, 'WE34', 'oil', 'liquid', 5667, 567, 345, 'pawan', '2013-07-08 03:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `sub_invoice`
--

CREATE TABLE IF NOT EXISTS `sub_invoice` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_id` int(11) NOT NULL,
  `des` text NOT NULL,
  `quantity` decimal(25,2) NOT NULL,
  `rate` decimal(25,2) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sub_invoice`
--

INSERT INTO `sub_invoice` (`s_id`, `i_id`, `des`, `quantity`, `rate`, `total`) VALUES
(1, 1, 'durbin m/c', '896.00', '12.00', 10752),
(2, 1, 'mototr rewinding charger', '765.00', '67.00', 51255),
(6, 3, 'telescope rotator not work', '34.00', '67.00', 2278),
(7, 3, 'mototr rewinding charger', '2.00', '78.00', 156),
(8, 3, 'rotor', '5.00', '67.00', 335);

-- --------------------------------------------------------

--
-- Table structure for table `sub_quotation`
--

CREATE TABLE IF NOT EXISTS `sub_quotation` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `less` int(2) NOT NULL DEFAULT '0',
  `des` text NOT NULL,
  `quantity` decimal(11,2) NOT NULL,
  `rate` decimal(11,2) NOT NULL,
  `Amount` decimal(11,2) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `sub_quotation`
--

INSERT INTO `sub_quotation` (`s_id`, `q_id`, `less`, `des`, `quantity`, `rate`, `Amount`, `total`) VALUES
(68, 25, 1, 'less', '6.00', '6.00', '36.00', 0),
(69, 25, 0, 'turbo electric wire', '45.00', '2.00', '90.00', 0),
(70, 25, 0, 'jet king', '45.00', '1.00', '45.00', 0),
(79, 26, 0, 'material maching', '2.00', '23.00', '46.00', 0),
(80, 26, 0, 'rotry', '1.00', '45.00', '45.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id1` varchar(10) NOT NULL,
  `t_term` varchar(200) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`t_id`, `t_id1`, `t_term`) VALUES
(1, 'A', 'payment Terms: with in 30days from the dateof our supply.'),
(2, 'B', 'guaranty : Gurrranty period 06 monts on rewinding items from  the date of delivery'),
(3, 'C', 'Service Tax  :- Service Tax 12.00% On 70% of the SUB TOTAL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
