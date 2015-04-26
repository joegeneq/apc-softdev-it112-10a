-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 08:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online patient database`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doc_id` int(11) NOT NULL COMMENT 'Doctors Identification',
  `doc_fname` varchar(45) NOT NULL COMMENT 'Doctors First Name',
  `doc_mname` varchar(45) NOT NULL COMMENT 'Doctors Middle Name',
  `doc_lname` varchar(45) NOT NULL COMMENT 'Doctors Last Name',
  `doc_sex` varchar(45) NOT NULL COMMENT 'Doctors Sex',
  `doc_contact` varchar(45) NOT NULL COMMENT 'Doctors Contact',
  `doc_address` varchar(45) NOT NULL COMMENT 'Doctors Address',
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `log_id` int(11) NOT NULL COMMENT 'Logs Identification',
  `log_date` date NOT NULL COMMENT 'Logs Date',
  `log_description` varchar(35) NOT NULL COMMENT 'Logs Description',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical records`
--

CREATE TABLE IF NOT EXISTS `medical records` (
  `med_id` int(11) NOT NULL COMMENT 'Medical Identification',
  `med_clinicexam` varchar(55) NOT NULL COMMENT 'Medical Clinical exam',
  `med_diag` varchar(55) NOT NULL COMMENT 'Medical Diagnose',
  `med_treatment` varchar(55) NOT NULL COMMENT 'Medical Treatment',
  `med_date` date NOT NULL COMMENT 'Medical Date',
  `med_xray` varchar(55) NOT NULL COMMENT 'Medical Xray',
  `med_obs_his` varchar(55) NOT NULL COMMENT 'Medical Obstetrical History',
  `med_fam_his` varchar(55) NOT NULL COMMENT 'Medical Family History of Cancer',
  `med_past_med_his` varchar(55) NOT NULL COMMENT 'Medical Past Medical History',
  `med_pres_sym` varchar(55) NOT NULL COMMENT 'Medical Present Symroms',
  `med_dig_mammo` varchar(45) NOT NULL COMMENT 'Medical Digital Mammography',
  `med_findings` varchar(45) NOT NULL COMMENT 'Medical Findings',
  `med_assess` varchar(45) NOT NULL COMMENT 'Medical Assessment',
  `med_birads_cat` varchar(45) NOT NULL COMMENT 'Medical Birads Category',
  `med_recom` varchar(45) NOT NULL COMMENT 'Medical Recommendations',
  PRIMARY KEY (`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `med_id` int(11) NOT NULL COMMENT 'Medicne Identification',
  `med_name` varchar(45) NOT NULL COMMENT 'Medicne Name',
  `med_type` varchar(45) NOT NULL COMMENT 'Medicne Type',
  `med_exp` date NOT NULL COMMENT 'Medicne Expiration Date',
  `med_regulated` varchar(45) NOT NULL COMMENT 'Medicne Regulated',
  PRIMARY KEY (`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(11) NOT NULL,
  `p_sname` varchar(45) NOT NULL COMMENT 'Patients Surname',
  `p_fname` varchar(45) NOT NULL COMMENT 'Patients Firtsname',
  `p_mname` varchar(45) NOT NULL COMMENT 'Patients Middlename',
  `p_birth_date` date NOT NULL COMMENT 'Patients Birth date',
  `p_age` int(11) NOT NULL COMMENT 'Patients Age',
  `p_sex` char(45) NOT NULL COMMENT 'Patients Sex',
  `p_status` char(35) NOT NULL COMMENT 'Patients Status',
  `p_mailing_address` varchar(45) NOT NULL COMMENT 'Patients Mailing Address',
  `p_telNo` int(11) NOT NULL COMMENT 'Patients Telephone Number',
  `p_mobNo` int(11) NOT NULL COMMENT 'Patients Mobile Number',
  `p_req_phys` varchar(45) NOT NULL COMMENT 'Patients Requesting Physician',
  `p_proc` varchar(45) NOT NULL COMMENT 'Patients Procedures',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_sname`, `p_fname`, `p_mname`, `p_birth_date`, `p_age`, `p_sex`, `p_status`, `p_mailing_address`, `p_telNo`, `p_mobNo`, `p_req_phys`, `p_proc`) VALUES
(0, '', '', '', '0000-00-00', 0, '', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL COMMENT 'User Identification',
  `user_full_name` varchar(45) NOT NULL COMMENT 'User Full Name',
  `user_username` varchar(35) NOT NULL COMMENT 'Username',
  `user_password` varchar(35) NOT NULL COMMENT 'User Password',
  `user_type` varchar(35) NOT NULL COMMENT 'User Type',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `patient` (`p_id`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `medical records`
--
ALTER TABLE `medical records`
  ADD CONSTRAINT `medical@0020records_ibfk_1` FOREIGN KEY (`med_id`) REFERENCES `patient` (`p_id`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`med_id`) REFERENCES `patient` (`p_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `medical records` (`med_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
