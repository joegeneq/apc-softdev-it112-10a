-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2015 at 11:31 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `breastcancer`
--

CREATE TABLE IF NOT EXISTS `breastcancer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `breast_cancer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `breastcancer`
--

INSERT INTO `breastcancer` (`id`, `breast_cancer`) VALUES
(1, 'Metastatic Breast Cancer'),
(2, 'Phylloides tumors of Breast'),
(3, 'Pagets disease of the Nipples  '),
(4, 'Inflammatory Breast Cancer '),
(5, 'Cribiform Breast Cancer');

-- --------------------------------------------------------

--
-- Table structure for table `breast_panel`
--

CREATE TABLE IF NOT EXISTS `breast_panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `breast_panel_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `breast_panel`
--

INSERT INTO `breast_panel` (`id`, `breast_panel_name`) VALUES
(1, 'ER positive PR positive Her 2 positive'),
(2, 'ER negative PR negative Her 2 negative'),
(3, 'ER positive PR negative Her 2 positive'),
(4, 'ER positive PR negative Her 2 negative'),
(5, 'ER negative PR positive Her 2 positive'),
(6, 'ER negative PR negative Her 2 positive'),
(7, 'ER positive PR positive Her 2 negative'),
(8, 'ER positive-PR positive-Her 2 positive ');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE IF NOT EXISTS `diagnosis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diagnosis_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `diagnosis_name`) VALUES
(1, 'Invasive Ductal CA'),
(2, 'Invasive Lobular CA'),
(3, 'Ductal Carcinoma-in-situ  (DCIS) without Comedo'),
(4, 'Ductal Carcinoma-in-situ  (DCIS) with Comedo'),
(5, 'Lobular Carcinoma-in-situ (LCIS)'),
(6, 'Mucinous CA'),
(7, 'Papillary CA'),
(8, 'Tubular CA'),
(9, 'Medullary CA');

-- --------------------------------------------------------

--
-- Table structure for table `histolgic_grading`
--

CREATE TABLE IF NOT EXISTS `histolgic_grading` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `histolgic_grade` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `histolgic_grading`
--

INSERT INTO `histolgic_grading` (`id`, `histolgic_grade`) VALUES
(1, '1'),
(2, '2'),
(3, '3');

-- --------------------------------------------------------

--
-- Table structure for table `ki_67`
--

CREATE TABLE IF NOT EXISTS `ki_67` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ki_67` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ki_67`
--

INSERT INTO `ki_67` (`id`, `ki_67`) VALUES
(1, 'Low <20%'),
(2, 'High >20%'),
(3, 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE IF NOT EXISTS `medical_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `breast_cancer_id` int(11) NOT NULL,
  `surgery_id` int(11) DEFAULT NULL,
  `diagnosis_id` int(11) DEFAULT NULL,
  `stages_id` int(11) DEFAULT NULL,
  `breast_panel_id` int(11) DEFAULT NULL,
  `histolgic_grading_id` int(11) DEFAULT NULL,
  `ki_67_id` int(11) DEFAULT NULL,
  `treatment_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medical_record_patient_idx` (`patient_id`),
  KEY `fk_medical_record_stages1_idx` (`stages_id`),
  KEY `fk_medical_record_diagnosis1_idx` (`diagnosis_id`),
  KEY `fk_medical_record_breast_panel1_idx` (`breast_panel_id`),
  KEY `fk_medical_record_ki_671_idx` (`ki_67_id`),
  KEY `fk_medical_record_surgery1_idx` (`surgery_id`),
  KEY `fk_medical_record_user1_idx` (`user_id`),
  KEY `fk_medical_record_histolgic_grading1_idx` (`histolgic_grading_id`),
  KEY `fk_medical_record_treatment1_idx` (`treatment_id`),
  KEY `fk_medical_record_breast_cancer1_idx` (`breast_cancer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`id`, `patient_id`, `doctor`, `breast_cancer_id`, `surgery_id`, `diagnosis_id`, `stages_id`, `breast_panel_id`, `histolgic_grading_id`, `ki_67_id`, `treatment_id`, `user_id`) VALUES
(1, 1, '', 1, 3, 4, 3, 2, 1, 1, 6, 1),
(2, 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `patient_her_two_m` varchar(45) NOT NULL,
  `patient_k_67` varchar(45) NOT NULL,
  `patient_metastic` varchar(45) NOT NULL,
  `patient_date` date NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_dob` varchar(45) NOT NULL,
  `patient_tel` varchar(45) NOT NULL,
  `patient_cell_no` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_lname`, `patient_fname`, `patient_mname`, `patient_address`, `patient_ref_by`, `patient_family_history`, `patient_menarche`, `patient_allergy`, `patient_dx`, `patient_nodes`, `patient_hgr`, `patient_ngr`, `patient_stage`, `patient_er`, `patient_pr`, `patient_her_two_m`, `patient_k_67`, `patient_metastic`, `patient_date`, `patient_age`, `patient_dob`, `patient_tel`, `patient_cell_no`) VALUES
(1, 'Cacao', 'Joy', 'Alfaro', 'Pque City', 'Aeya', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aaaa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '0000-00-00', 20, 'aa', 'aa', '09175382739'),
(2, 'Chua', 'Anton', 'Coco', 'hk', 'hkh', 'fy', 'osa', 'vh', 'v', 'j', 'o', 'bkbk', 'fyufu', 'bkiho', 'vufy', 'nihno', 'cftc', 'nono', '0000-00-00', 49, 'nln', 'gdcg', '09175382916');

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE IF NOT EXISTS `stages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stages` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`id`, `stages`) VALUES
(1, 'I'),
(2, 'IIA'),
(3, 'IIB'),
(4, 'IIIA'),
(5, 'IIIB'),
(6, 'IIIC'),
(7, 'IV');

-- --------------------------------------------------------

--
-- Table structure for table `surgery`
--

CREATE TABLE IF NOT EXISTS `surgery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surgery_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `surgery`
--

INSERT INTO `surgery` (`id`, `surgery_name`) VALUES
(1, 'Lumpectomy Only'),
(2, 'Lumpectomy with Node Dissection'),
(3, 'Subcutaneous Mastectomy'),
(4, 'Subcutaneous Mastectomy with Node Dissection'),
(5, 'Mastectomy'),
(6, 'Modified Radical Mastectomy');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `treatment_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `treatment_name`, `category`, `sub_category`) VALUES
(1, 'Neoadjuvant', 'Neoadjuvant', ''),
(2, 'Paclitaxel and Cisplatin', 'Adjuvant', 'Chemotherapy'),
(3, 'Doxorubicin  and Cyclophosphamide  (AC)', 'Adjuvant', 'Chemotherapy'),
(4, 'Cyclophosphamide Methotrexate and Fluorouracil  (CMF)', 'Adjuvant', 'Chemotherapy'),
(5, '5  Drug Therapy', 'Adjuvant', 'Chemotherapy'),
(6, 'Gemcitabine and Cisplatin', 'Adjuvant', 'Chemotherapy'),
(7, 'Herceptin', 'Adjuvant', 'Chemotherapy'),
(8, 'Continuous 5 FU', 'Adjuvant', 'Chemotherapy'),
(9, 'Others', 'Adjuvant', 'Chemotherapy'),
(10, 'Tamoxifen', 'Adjuvant', 'Hormonal'),
(11, 'Letrozole', 'Adjuvant', 'Hormonal'),
(12, 'Anastrozole', 'Adjuvant', 'Hormonal'),
(13, 'Exemestane', 'Adjuvant', 'Hormonal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'eHpB3VmMbvazsnIdEkFywKYFikwL-YrD', '$2y$13$OYJSAMHFDNXIbCQNbqyRCeiNtaE2TrSHkc58m1MEw1KiwDxYvqUtO', 'qQQrsrtOHHFGdMHG1aFyJJJSGik7XJ9P_1428426935', 'admin@gmail.com', 10, 10, 1426656857, 1428426935),
(2, 'asandes', 'qwert', 'qwerty', 'qwertyu', 'andesonline20@gmail.com', 10, 10, 21312, 312312);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `fk_medical_record_breast_cancer1` FOREIGN KEY (`breast_cancer_id`) REFERENCES `breastcancer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_breast_panel1` FOREIGN KEY (`breast_panel_id`) REFERENCES `breast_panel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_diagnosis1` FOREIGN KEY (`diagnosis_id`) REFERENCES `diagnosis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_histolgic_grading1` FOREIGN KEY (`histolgic_grading_id`) REFERENCES `histolgic_grading` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_ki_671` FOREIGN KEY (`ki_67_id`) REFERENCES `ki_67` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_patient` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_stages1` FOREIGN KEY (`stages_id`) REFERENCES `stages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_surgery1` FOREIGN KEY (`surgery_id`) REFERENCES `surgery` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_treatment1` FOREIGN KEY (`treatment_id`) REFERENCES `treatment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medical_record_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
