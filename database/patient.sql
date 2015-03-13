-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2015 at 05:30 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `empr`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_lname` varchar(45) NOT NULL,
  `patient_fname` varchar(45) NOT NULL,
  `patient_mname` varchar(45) NOT NULL,
  `patient_address` varchar(45) NOT NULL,
  `patient_ref_by` varchar(45) NOT NULL,
  `patient_family_history` varchar(45) NOT NULL,
  `patient_menarche` varchar(45) NOT NULL,
  `patient_allergy` varchar(45) NOT NULL,
  `patient_dx` varchar(45) NOT NULL,
  `patient_nodes` varchar(45) NOT NULL,
  `patient_hgr` varchar(45) NOT NULL,
  `patient_ngr` varchar(45) NOT NULL,
  `patient_stage` varchar(45) NOT NULL,
  `patient_er` varchar(45) NOT NULL,
  `patient_pr` varchar(45) NOT NULL,
  `patient_her2/m` varchar(45) NOT NULL,
  `patient_k_67` varchar(45) NOT NULL,
  `patient_metastic` varchar(45) NOT NULL,
  `patient_date` date NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_dob` varchar(45) NOT NULL,
  `patient_tel` varchar(45) NOT NULL,
  `patient_cell_no` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
