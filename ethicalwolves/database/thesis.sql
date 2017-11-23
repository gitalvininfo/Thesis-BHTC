-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 01:26 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings`
--

CREATE TABLE IF NOT EXISTS `clinical_findings` (
  `clinical_id` int(10) NOT NULL AUTO_INCREMENT,
  `date_visited` date NOT NULL,
  `weight` int(3) NOT NULL,
  `q1` char(3) NOT NULL,
  `q2` char(3) NOT NULL,
  `q3` char(3) NOT NULL,
  `q4` char(3) NOT NULL,
  `q5` char(3) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`clinical_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `clinical_findings`
--

INSERT INTO `clinical_findings` (`clinical_id`, `date_visited`, `weight`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `patient_id`) VALUES
(2, '2017-10-05', 56, 'No', 'No', 'No', 'No', 'No', 'Bas', 17),
(3, '2017-10-24', 78, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Dia', 18),
(4, '2017-10-06', 89, 'No', 'No', 'No', 'No', 'No', 'Fol', 18),
(5, '2017-10-27', 89, 'No', 'No', 'No', 'No', 'No', 'Fol', 18),
(6, '2017-10-16', 78, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Baseline', 17),
(7, '2017-10-18', 78, 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yellowing of Sclerae and skin', 17),
(8, '2017-10-18', 90, 'No', 'Yes', 'Yes', 'Yes', 'No', 'Vomiting', 17),
(9, '2017-10-10', 89, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yellowing of Sclerae and skin', 17),
(10, '2017-10-19', 78, 'No', 'No', 'Yes', 'Yes', 'Yes', 'Visual Disturbance', 18),
(11, '2017-10-20', 90, 'No', 'No', 'No', 'No', 'Yes', 'Visual Disturbance', 18),
(12, '2017-10-06', 90, 'Yes', 'Yes', 'No', 'No', 'No', 'Yellowing of Sclerae and skin', 18),
(13, '2017-10-25', 90, 'Yes', 'Yes', 'Yes', '', 'Yes', 'Yellowing of Sclerae and skin', 18),
(14, '2017-10-29', 90, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Visual Disturbance', 24),
(15, '2017-11-05', 90, 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yellowing of Sclerae and skin', 26),
(16, '2017-11-05', 89, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yellowing of Sclerae and skin', 18),
(17, '2017-11-03', 88, 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Numbness', 18),
(18, '2017-11-10', 90, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yellowing of Sclerae and skin', 31),
(19, '2017-12-05', 45, 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yellowing of Sclerae and skin', 23);

-- --------------------------------------------------------

--
-- Table structure for table `continuation_phase`
--

CREATE TABLE IF NOT EXISTS `continuation_phase` (
  `continuation_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`continuation_phase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `continuation_phase`
--

INSERT INTO `continuation_phase` (`continuation_phase_id`, `dosage`, `date_taken`, `remarks`, `patient_id`) VALUES
(12, 89, '2017-10-12', 'Present', 18),
(13, 0, '2017-10-11', 'Absent', 18),
(14, 0, '2017-10-26', 'Absent', 18),
(15, 0, '2017-10-20', 'Absent', 18);

-- --------------------------------------------------------

--
-- Table structure for table `cxr`
--

CREATE TABLE IF NOT EXISTS `cxr` (
  `cxr_id` int(10) NOT NULL AUTO_INCREMENT,
  `cxr_findings` varchar(20) NOT NULL,
  `date_of_exam` date NOT NULL,
  `tbdc` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`cxr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cxr`
--

INSERT INTO `cxr` (`cxr_id`, `cxr_findings`, `date_of_exam`, `tbdc`, `patient_id`, `month`, `year`) VALUES
(1, 'Good Result', '2017-10-10', 'BDBDD', 10, 'Nov', '2017'),
(2, 'May TB ka', '2017-10-31', 'DR. Haro', 18, 'Nov', '2017'),
(3, '', '0000-00-00', '', 30, 'Nov', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `drug_intake`
--

CREATE TABLE IF NOT EXISTS `drug_intake` (
  `intake_id` int(10) NOT NULL AUTO_INCREMENT,
  `status` char(7) NOT NULL,
  PRIMARY KEY (`intake_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `drug_intake`
--

INSERT INTO `drug_intake` (`intake_id`, `status`) VALUES
(17, 'Present'),
(18, 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `drug_preparations`
--

CREATE TABLE IF NOT EXISTS `drug_preparations` (
  `drug_preparation_id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `isoniazid` varchar(20) NOT NULL,
  `rifampicin` varchar(20) NOT NULL,
  `pyrazinamide` varchar(20) NOT NULL,
  `ethambutol` varchar(20) NOT NULL,
  `streptomycin` varchar(20) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`drug_preparation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `drug_preparations`
--

INSERT INTO `drug_preparations` (`drug_preparation_id`, `date`, `isoniazid`, `rifampicin`, `pyrazinamide`, `ethambutol`, `streptomycin`, `patient_id`) VALUES
(1, '0000-00-00', '45', '45', '45', '45', '45', 17),
(2, '2017-10-16', '12', '12', '12', '12', '12', 18),
(3, '2017-10-13', '89', '89', '89', '89', '89', 18),
(4, '2017-10-26', '89', '89', '89', '89', '89', 17);

-- --------------------------------------------------------

--
-- Table structure for table `dssm_examination`
--

CREATE TABLE IF NOT EXISTS `dssm_examination` (
  `dssm_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_examined` date NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `reading` varchar(30) NOT NULL,
  `laboratory_diagnosis` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`dssm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `dssm_examination`
--

INSERT INTO `dssm_examination` (`dssm_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `reading`, `laboratory_diagnosis`, `examined_by`, `date_released`, `patient_id`, `month`, `year`) VALUES
(1, '2017-10-04', '12', 'qwe', 'qwe', 'Positive', 'qwe', '2017-10-03', 15, 'Nov', '2017'),
(2, '2017-10-10', '32', 'Good', 'Good', 'Positive', 'Dr. Haro', '2017-10-18', 16, 'Nov', '2017'),
(3, '2017-10-17', '45', 'Good', 'Good', 'Positive', 'Good', '2017-10-12', 17, 'Nov', '2017'),
(4, '2017-10-11', '21321', 'Good', 'Good Ah', 'Positive', 'Dr. haro', '2017-10-28', 24, 'Nov', '2017'),
(5, '2017-09-26', 'qwe', 'qwe', 'qwe', 'Positive', 'qwe', '2017-10-04', 18, 'Nov', '2017'),
(6, '2017-10-17', '12', 'Yuck', 'Good mn sa ah', 'Positive', 'Dr. Haro', '2017-10-30', 18, 'Nov', '2017'),
(7, '2017-11-01', '123', 'Good', 'Good', 'Negative', 'Good', '2017-10-31', 19, 'Nov', '2017'),
(8, '2017-11-01', '433-2449', 'Good', 'Good', 'Negative', 'Dr. Sabay', '2017-11-04', 27, 'Oct', '2017'),
(9, '2017-11-15', '12', 'Good', 'Good', 'Negative', 'Dr. Haro', '2017-11-01', 22, 'Oct', '2017'),
(10, '2017-11-08', '123', 'Good', 'Good', 'Positive', 'Dr. Haro', '2017-11-04', 28, 'Oct', '2017'),
(11, '2017-11-06', '12', 'Good', 'adsa', 'Negative', 'Dr. Haro', '2017-11-06', 18, 'Oct', '2017'),
(12, '2017-11-01', '12', 'Good', 'Tuberculosis', 'Positive', 'Dr. Sabay', '2017-11-07', 22, 'Nov', '2017'),
(13, '2017-11-08', '12', 'Muco-Purulent', 'wq', 'Positive', 'ddsa', '2017-11-08', 32, 'Nov', '2017'),
(14, '2017-11-08', '12', 'Salivary', 'Dr. Haro', 'Positive', 'Dr. Sabay', '2017-11-14', 23, 'Nov', '2017'),
(15, '2017-11-15', '12', 'Salivary', 'qeqweq', 'Positive', 'dr', '2017-11-15', 36, 'Nov', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `dst_examination`
--

CREATE TABLE IF NOT EXISTS `dst_examination` (
  `dst_id` int(11) NOT NULL AUTO_INCREMENT,
  `tb_culture_laboratory` varchar(30) NOT NULL,
  `dst_laboratory` varchar(30) NOT NULL,
  `date_collected` date NOT NULL,
  `date_received` date NOT NULL,
  `method` varchar(20) NOT NULL,
  `isoniazid` varchar(30) NOT NULL,
  `rifampicin` varchar(30) NOT NULL,
  `ethambutol` varchar(30) NOT NULL,
  `streptomycin` varchar(30) NOT NULL,
  `pyrazinamide` varchar(30) NOT NULL,
  `levofloxacin` varchar(30) NOT NULL,
  `kanamycin` varchar(30) NOT NULL,
  `amikacin` varchar(30) NOT NULL,
  `capreomycin` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `reviewed_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`dst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dst_examination`
--

INSERT INTO `dst_examination` (`dst_id`, `tb_culture_laboratory`, `dst_laboratory`, `date_collected`, `date_received`, `method`, `isoniazid`, `rifampicin`, `ethambutol`, `streptomycin`, `pyrazinamide`, `levofloxacin`, `kanamycin`, `amikacin`, `capreomycin`, `examined_by`, `remarks`, `reviewed_by`, `date_released`, `patient_id`, `month`, `year`) VALUES
(1, '123', '123', '2017-10-04', '2017-10-12', '', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', '2017-10-22', 16, 'Nov', '2017'),
(2, '12', '1212', '2017-10-30', '2017-10-29', 'method 1', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', '2017-10-31', 18, 'Oct', '2017'),
(3, '123', '123', '2017-10-24', '2017-10-31', 'Method 2', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', '2017-10-31', 18, 'Oct', '2017'),
(4, '12', '12', '2017-11-08', '2017-11-08', 'Method 1', '90', '90', '90', '90', '90', '90', '90', '90', '90', '90', '90', 'Dr. Sabay', '2017-11-08', 31, 'Oct', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#3a87ad',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `date`) VALUES
(1, 'Event 1', 'This is events description', '#f00877', '2014-10-05 02:44:00'),
(2, 'Event 2', 'This is events description', '#08aaf0', '2014-10-08 02:44:00'),
(3, 'Event 3', 'This is events description', '#08f049', '2014-10-22 02:45:00'),
(4, 'Event 4', 'This is events description', '#ddf008', '2014-10-31 02:45:00'),
(11, 'Sputum Examination', 'Balik d', '#0018f5', '2017-12-13 10:22:00'),
(15, 'Examination', 'GG Thesis', '#000fff', '2017-09-19 22:35:00'),
(16, 'Examination', 'GG Thesis\n', '#2e00ff', '2017-09-15 22:35:00'),
(17, '123', '123', '#b80000', '2017-10-04 16:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `examination_sched`
--

CREATE TABLE IF NOT EXISTS `examination_sched` (
  `sched_id` int(10) NOT NULL AUTO_INCREMENT,
  `examination_date` date NOT NULL,
  `status` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `examination_sched`
--

INSERT INTO `examination_sched` (`sched_id`, `examination_date`, `status`, `patient_id`) VALUES
(1, '2017-10-04', 'Pending', 10),
(2, '2017-10-05', 'Pending', 16),
(3, '2017-12-02', 'Pending', 15),
(4, '2017-10-19', 'Pending', 18),
(5, '2017-11-07', 'Pending', 18),
(6, '2018-01-03', 'Pending', 19);

-- --------------------------------------------------------

--
-- Table structure for table `gene_expert_examination`
--

CREATE TABLE IF NOT EXISTS `gene_expert_examination` (
  `xpert_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_examined` date NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `reading` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `result` varchar(2) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`xpert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gene_expert_examination`
--

INSERT INTO `gene_expert_examination` (`xpert_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `reading`, `examined_by`, `date_released`, `result`, `patient_id`, `month`, `year`) VALUES
(1, '2017-10-11', '12', 'qwe', 'qwe', 'qwe', '2017-10-11', 'T', 14, 'Nov', '2017'),
(2, '2017-10-11', '12', 'Good', 'Good', 'Good', '2017-10-18', 'RR', 18, 'Nov', '2017'),
(3, '2017-10-18', 'qwe', 'qwe', 'qwe', 'qwe', '2017-10-10', 'TI', 17, 'Nov', '2017'),
(4, '2017-11-01', '12', 'Sticky', 'Good', 'Dr. Sabay', '2017-11-01', 'N', 19, 'Oct', '2017'),
(5, '2017-11-14', '12', 'Good', 'Good', 'Dr. Sabay', '2017-11-06', 'I', 24, 'Oct', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `intensive_phase`
--

CREATE TABLE IF NOT EXISTS `intensive_phase` (
  `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`intensive_phase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `intensive_phase`
--

INSERT INTO `intensive_phase` (`intensive_phase_id`, `dosage`, `date_taken`, `remarks`, `patient_id`) VALUES
(62, 0, '2017-10-10', 'Absent', 18),
(63, 0, '2017-10-19', 'Absent', 18),
(64, 45, '2017-10-11', 'Present', 18),
(65, 78, '2017-10-10', 'Present', 17),
(66, 0, '2017-10-25', 'Absent', 17),
(67, 0, '2017-10-17', 'Absent', 17),
(68, 90, '2017-10-11', 'Present', 17),
(69, 0, '2017-10-07', 'Absent', 17),
(70, 90, '2017-10-09', 'Present', 17),
(71, 0, '2017-09-24', 'Absent', 17),
(72, 90, '2017-10-11', 'Present', 17),
(73, 0, '2017-10-11', 'Absent', 18),
(74, 0, '2017-10-11', 'Absent', 18),
(75, 0, '2017-10-11', 'Absent', 18),
(76, 0, '2017-10-26', 'Absent', 18),
(77, 0, '2017-10-20', 'Absent', 18),
(78, 90, '2017-11-01', 'Present', 24),
(79, 90, '2017-11-10', 'Present', 31),
(80, 20, '2017-11-15', 'Present', 23);

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_request`
--

CREATE TABLE IF NOT EXISTS `laboratory_request` (
  `lab_request_id` int(10) NOT NULL AUTO_INCREMENT,
  `collection_unit` varchar(50) NOT NULL,
  `date_of_request` date NOT NULL,
  `requesting_physician` varchar(30) NOT NULL,
  `reason_for_examination` varchar(30) NOT NULL,
  `specimen_type` varchar(30) NOT NULL,
  `repeat_collection` char(3) NOT NULL,
  `date_sample_collected` date NOT NULL,
  `date_sample_collected2` date NOT NULL,
  `sample_collector` varchar(30) NOT NULL,
  `contact_number` char(14) NOT NULL,
  `test_requested` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `status` char(10) NOT NULL,
  PRIMARY KEY (`lab_request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `laboratory_request`
--

INSERT INTO `laboratory_request` (`lab_request_id`, `collection_unit`, `date_of_request`, `requesting_physician`, `reason_for_examination`, `specimen_type`, `repeat_collection`, `date_sample_collected`, `date_sample_collected2`, `sample_collector`, `contact_number`, `test_requested`, `patient_id`, `status`) VALUES
(23, 'Sum-ag Health Center', '2017-10-06', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-10-11', '0000-00-00', 'qwe', '12312', 'Xpert MTB/RIF', 14, 'Done'),
(24, 'Bata Health Center', '2017-10-03', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-10-11', '0000-00-00', 'qwe', '433-2449', 'DSSM', 15, 'Done'),
(27, 'Bata Health Center', '2017-10-11', 'Dr. Haro', 'Follow-up', 'Sputum', 'Yes', '2017-10-11', '0000-00-00', 'Dr. Sabay', '433-2449', 'DSSM', 16, 'Done'),
(28, 'Bata Health Center', '2017-10-11', 'Dr. Haro', 'Follow-up', 'Sputum', 'Yes', '2017-10-10', '0000-00-00', 'Dr. Adricula', '433-2449', 'Drug Susceptible Testing', 16, 'Done'),
(29, 'Estefania Health Center', '2017-10-11', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-10-18', '0000-00-00', 'Dr. Haro', '433-2449', 'DSSM', 17, 'Done'),
(30, 'Bata Health Center', '2017-10-10', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-10-11', '0000-00-00', 'qwe', '2131', 'Xpert MTB/RIF', 18, 'Done'),
(31, 'Bata Health Center', '2017-10-11', 'Dr. haro', 'Follow-up', 'Sputum', 'Yes', '2017-10-19', '0000-00-00', 'Dr. Haro', '433-2449', 'DSSM', 24, 'Done'),
(32, 'Villamonte Health Center', '2017-10-31', 'Dr. Sabay', 'Diagnostic', 'Sputum', 'Yes', '2017-10-31', '0000-00-00', 'Dr. Haro', '433-2449', 'Xpert MTB/RIF', 17, 'Done'),
(33, 'Estefania Health Center', '2017-10-10', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-10-11', '0000-00-00', 'Dr. haro', '433-2449', 'TB Culture', 18, 'Done'),
(34, 'Bata Health Center', '2017-10-18', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-10-10', '0000-00-00', 'qwe', 'qwe', 'DSSM', 18, 'Done'),
(35, 'Bata Health Center', '2017-10-04', 'qwe', 'Baseline', 'Sputum', 'Yes', '2017-10-20', '0000-00-00', 'qwe', 'qwe', 'DSSM', 18, 'Done'),
(36, 'Bata Health Center', '2017-10-05', 'Dr. Haro', 'Follow-up', 'Sputum', 'Yes', '2017-10-19', '0000-00-00', 'Dr. Haro', '433-2449', 'DSSM', 18, 'Done'),
(37, 'Bata Health Center', '2017-10-19', 'Dr. Haro', 'Baseline', 'Sputum', 'Yes', '2017-10-19', '0000-00-00', 'Dr. Adricula', '713-6113', 'Drug Susceptible Testing', 18, 'Done'),
(38, 'Bata Health Center', '2017-10-25', 'qwe', 'Follow-up', 'Sputum', 'Yes', '2017-10-18', '0000-00-00', 'qwe', '312312', 'Drug Susceptible Testing', 18, 'Done'),
(39, 'Bata Health Center', '2017-10-18', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-10-11', '0000-00-00', 'qewqe', '433-2449', 'Tuberculin Skin Testing', 18, 'Done'),
(40, 'Bata Health Center', '2017-10-31', 'qwe', 'Follow-up', 'Sputum', 'Yes', '2017-10-31', '0000-00-00', 'qwe', '4331213', 'Chest X-ray', 18, 'Done'),
(41, 'Bata Health Center', '2017-11-15', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-19', '0000-00-00', 'Dr. Haro', '433-2449', 'DSSM', 19, 'Done'),
(42, 'Bata Health Center', '2017-11-01', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-01', '0000-00-00', 'Dr. Adricula', '433-2449', 'DSSM', 27, 'Done'),
(43, 'Sum-ag Health Center', '2017-11-23', 'Dr. Haro', 'Baseline', 'Sputum', 'Yes', '2017-11-22', '0000-00-00', 'Dr. Haro', '433-2449', 'Xpert MTB/RIF', 19, 'Done'),
(44, 'Sum-ag Health Center', '2017-11-07', 'Dr. Haro', 'Baseline', 'Sputum', 'Yes', '2017-11-02', '0000-00-00', 'Dr. Sabay', '433-2449', 'DSSM', 22, 'Done'),
(45, 'Bata Health Center', '2017-11-01', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-01', '0000-00-00', 'Dr. Haro', '433-2449', 'DSSM', 28, 'Done'),
(46, 'Bata Health Center', '2017-11-01', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-04', '0000-00-00', 'Dr. Sabay', '433-2449', 'Xpert MTB/RIF', 19, 'Pending'),
(47, 'Bata Health Center', '2017-11-01', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-04', '0000-00-00', 'Dr. Sabay', '433-2449', 'Xpert MTB/RIF', 19, 'Pending'),
(48, 'Estefania Health Center', '2017-11-16', 'Dr. Sabay', 'Diagnostic', 'Sputum', 'Yes', '2017-11-03', '0000-00-00', 'Dr. Adricula', '433-2449', 'Xpert MTB/RIF', 24, 'Done'),
(49, 'Sum-ag Health Center', '2017-11-14', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-11-14', '0000-00-00', 'qwe', '123131', 'Xpert MTB/RIF', 30, 'Done'),
(50, 'Sum-ag Health Center', '2017-11-15', '123', 'Baseline', 'Urine', 'Yes', '2017-11-08', '0000-00-00', '213', '1231', 'Xpert MTB/RIF', 30, 'Pending'),
(51, 'Estefania Health Center', '2017-11-15', 'Dr. Haro', 'Baseline', 'Sputum', 'Yes', '2017-11-07', '0000-00-00', 'Dr. Sabay', '433-2449', 'Drug Susceptible Testing', 30, 'Done'),
(52, 'Bata Health Center', '2017-11-07', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-09', '0000-00-00', 'Dr. Sabay', '713-6113', 'Xpert MTB/RIF', 30, 'Pending'),
(53, 'Mandalagan Health Center', '2017-11-09', 'Dr. Torres', 'Follow-up', 'Sputum', 'Yes', '2017-11-09', '0000-00-00', 'Dr. Sabay', '433-2449', 'Drug Susceptible Testing', 31, 'Done'),
(54, 'Bata Health Center', '2017-11-08', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-01', '0000-00-00', 'Dr. Sabay', '433-2449', 'DSSM', 32, 'Done'),
(55, 'Estefania Health Center', '2017-11-08', 'adsa', 'Baseline', 'Sputum', 'Yes', '2017-11-01', '0000-00-00', 'dada', '321', 'Xpert MTB/RIF', 32, 'Pending'),
(56, 'Bata Health Center', '2017-11-07', 'Dr. Sabay', 'Diagnostic', 'Sputum', 'Yes', '2017-11-08', '0000-00-00', 'Dr. Haro', '433-2449', 'DSSM', 22, 'Done'),
(57, 'Estefania Health Center', '2017-11-15', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-11-15', '0000-00-00', 'qwe', '2112', 'TB Culture', 31, 'Done'),
(58, 'Bata Health Center', '2017-11-08', 'Dr. Toores', 'Follow-up', 'Sputum', 'Yes', '2017-11-08', '0000-00-00', 'Dr. Bibangco', '433-2449', 'TB Culture', 29, 'Done'),
(59, 'Banago Health Center', '2017-11-08', 'Dr. Haro', 'Follow-up', 'Sputum', 'Yes', '2017-11-07', '0000-00-00', 'Dr. Haro', '433-2449', 'DSSM', 23, 'Done'),
(60, 'Sum-ag Health Center', '2017-11-15', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-11-15', '0000-00-00', 'qeqw', '31221', 'DSSM', 36, 'Done'),
(61, 'Bata Health Center', '2017-11-15', 'Dr. Terry', 'Diagnostic', 'Sputum', 'Yes', '2017-11-08', '2017-11-07', 'Dr. Haro', '433-2449', 'DSSM', 18, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `medication_dispensation`
--

CREATE TABLE IF NOT EXISTS `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL AUTO_INCREMENT,
  `health_center` varchar(50) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `date_given` date NOT NULL,
  `quantity` int(10) NOT NULL,
  `received_by` varchar(30) NOT NULL,
  PRIMARY KEY (`dispensation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `medication_dispensation`
--

INSERT INTO `medication_dispensation` (`dispensation_id`, `health_center`, `medicine_name`, `date_given`, `quantity`, `received_by`) VALUES
(4, 'Alijis Barangay Health Station', 'Rifampicin', '2017-11-01', 908, 'Dr. Sabayskie'),
(5, 'Banago Barangay Health Station', 'Isoniazidzxc', '0000-00-00', 88, 'Dr. Adriculaskie'),
(6, 'Felisa Barangay Health Station', 'Isoniazidzxc', '2017-11-06', 5, 'Dr. Torresski'),
(7, 'Bata Barangay Health Station', 'Rifampicin', '2017-11-05', 987, 'Dr. Haroskie'),
(8, 'Mansilingan Barangay Health Station', 'Isoniazidzxc', '2017-11-06', 13, 'Dr. Sabayskie'),
(9, 'Mansilingan Barangay Health Station', 'Isoniazid', '2017-11-14', 200, 'Dr. Haro'),
(10, 'Mabini Health Plus', 'Isoniazid', '2017-11-14', 35, 'Dr. Sabay'),
(11, 'BANAGO BARANGAY HEALTH STATION', 'leonel', '2017-11-14', 500, 'dada'),
(12, 'Bata Barangay Health Station', 'qwe', '2017-11-15', 100, 'qweq'),
(13, 'ABCASA Barangay Health Station', 'Ethambutol', '2017-11-17', 700, 'Dr. Doctor 1'),
(14, 'Alangilan Barangay Health Station', 'Streptomycin', '2017-11-17', 400, 'Dr. Doctor2'),
(15, 'Lopez Jaena Health Plus', 'Medicine 22', '2017-11-17', 80, 'Dr. Doctor 3'),
(16, 'Mansilingan Barangay Health Station', 'qweqwe', '2017-11-17', 90, 'Dr. Doctor 4'),
(17, 'Alangilan Barangay Health Station', 'Biogesic', '2017-11-17', 25, 'Dr. Haro');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `medicine_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `running_balance` int(10) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_description`, `running_balance`) VALUES
(3, 'Isoniazidzxc', 'Isoniazid [H]zxc', 95),
(4, 'Rifampicin', 'Rifampicin [R]', 200),
(5, 'Pyrazinamide', 'Pyrazinamide [Z]', 0),
(6, 'Ethambutol', 'Ethambutol [E]', 50),
(7, 'Streptomycin', 'Streptomycin [S]', 700),
(12, 'qew', 'qwe', 1000),
(13, 'Medicine 3', 'This is medicine 3', 3),
(14, 'Medicine 22', 'Streptomycin [S]', 85),
(15, 'Medicine 12', 'This is medicine', 0),
(16, 'qweqwe', 'qweq', -85),
(17, 'GG Medicinezxcz', 'This is GG', 0),
(18, 'Medicine GG', 'This is GG', 0),
(19, 'Biogesic', 'Bulong', 25);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stocks`
--

CREATE TABLE IF NOT EXISTS `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `medicine_stocks`
--

INSERT INTO `medicine_stocks` (`medicine_stock_id`, `medicine_name`, `quantity`, `date`) VALUES
(69, 'Streptomycin', 900, '2017-11-05 13:25:03'),
(70, 'Streptomycin', 900, '2017-11-05 13:25:24'),
(71, 'Isoniazid', 1000, '2017-11-05 13:29:32'),
(72, 'Ethambutol', 800, '2017-11-05 13:38:06'),
(73, 'qew', 1000, '2017-11-05 13:50:51'),
(74, 'qweeqe', 89, '2017-11-05 13:51:05'),
(75, 'qweeqe', 10, '2017-11-05 14:26:47'),
(76, 'Isoniazid', 230, '2017-11-13 22:13:37'),
(77, 'Medicine New', 90, '2017-11-13 23:21:25'),
(78, 'Rifampicin', 200, '2017-11-14 12:13:43'),
(79, 'leonel', 500, '2017-11-14 16:18:18'),
(80, 'Medicine 3', 2, '2017-11-14 19:19:18'),
(81, 'qwe', 200, '2017-11-15 10:12:39'),
(82, 'Biogesic', 50, '2017-11-18 13:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` char(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `height` int(3) NOT NULL,
  `contact_number` char(14) NOT NULL,
  `province` varchar(50) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `philhealth_no` varchar(15) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `emergency_no` char(20) NOT NULL,
  `household_member` varchar(30) NOT NULL,
  `household_member_age` int(3) NOT NULL,
  `date_screened` date NOT NULL,
  `status` char(10) NOT NULL,
  `treatment_partner` char(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `age`, `gender`, `address`, `barangay`, `birthdate`, `height`, `contact_number`, `province`, `occupation`, `philhealth_no`, `contact_person`, `emergency_no`, `household_member`, `household_member_age`, `date_screened`, `status`, `treatment_partner`, `year`) VALUES
(17, 'Sample', 56, 'Male', 'Bacolod', 'Mansilingan', '2017-10-24', 178, '433-2449', 'Negros', 'Student', '4333', 'Dr. Haro', '433-2449', 'Dr. Sabay', 56, '2017-10-24', 'Registered', 'Done', '2017'),
(18, 'Dummy Account', 29, 'Male', 'Bacolod', 'Villamonte', '2017-10-24', 178, '433-2449', 'Negros', 'Student', '7771232', 'Mr. Haro', '433-2449', '4343', 34, '2017-11-14', 'Registered', 'Done', '2017'),
(19, 'Joseph Lopez', 2, 'Male', 'Alijis, Bacolod', 'Alijis', '2017-10-18', 167, '433-2449', 'Negros', 'Student', '123121', 'Dr. Haro', '713-6113', 'Dr. Haro', 40, '2017-11-08', 'Registered', 'Done', '2017'),
(20, 'Jam Dientes', 20, 'Female', 'Bacolod City', 'Mansilingan', '2017-10-02', 178, '433-2449', 'Negros Occidental', 'Student', '19901212', 'Dr. Haro', '433-2449', 'Dr. Sabay', 30, '0000-00-00', 'Unregister', 'Pending', '2017'),
(21, 'Alson John Bayon-on', 20, 'Male', 'Bacolod City', 'Montevista', '2017-10-02', 178, '433-2449', 'Negros', 'Student', '1231239', 'Dr. Haro', '713-6113', 'Dr. Haro', 20, '0000-00-00', 'Unregister', 'Pending', '2017'),
(22, 'Patient 5', 20, 'Male', 'Bacolod City', 'Villamonte', '2017-10-15', 189, '23123', 'Negros Occidental', 'Student', '2313212', 'Dr. Haro', '713-6113', 'Dr. Haro', 20, '2017-10-18', 'Registered', 'Done', '2017'),
(23, 'Leki Lad', 20, 'Male', 'Bacolod', 'Villamonte', '2017-10-17', 178, '321313', 'Negros', 'Student', '713-6113', 'Dr. Haro', '713-6113', 'Dr. Sabay', 22, '0000-00-00', 'Registered', 'Done', '2017'),
(25, 'Patient 9', 25, 'Male', 'Bacold', 'Tangub', '2017-10-11', 178, '713-6113', 'Negros Occidental', 'Student', '13123421', 'Dr. Haro', '713-6113', 'Dr. haro', 26, '2017-10-24', 'Unregister', 'Pending', '2017'),
(26, 'Carl Louie Betio', 20, 'Male', 'Bacolod', 'Tangub', '2017-10-16', 178, '131141231', 'Negros Occidental', 'Student', '123131', 'Dr. Haro', '231231', 'Dr. Haro', 45, '0000-00-00', 'Registered', 'Done', '2017'),
(27, 'Gabriel Francis Banua', 20, 'Male', 'Bacolod ', 'Tangub', '2017-10-26', 178, '713-6113', 'Negros Occidental', 'Student', '2313121', 'Dr. Haro', '32131', 'Dr. Sabay', 20, '0000-00-00', 'Registered', 'Done', '2017'),
(28, 'Rommel Adricula', 56, 'Male', 'Bacolod City', 'Mandalagan', '2017-03-19', 178, '433-2449', 'Negros', 'Teacher', '133120123112', 'Dr. Haro', '433-2449', 'Dr. Haro', 29, '2017-11-02', 'Registered', 'Done', '2017'),
(29, 'Rogy Acosta', 25, 'Male', 'Bacolod City', 'Mabini', '2009-06-16', 178, '433-2449', 'Negros Occidental', 'Teacher', '12311', 'Dr. Haro', '433-2449', 'Dr.aeq', 12, '2017-11-05', 'Registered', 'Pending', '2017'),
(31, 'Alvin Yanson', 20, 'Male', 'Bacolod City', 'Estefania', '2017-11-08', 178, '713-6113', 'Negros Occidental', 'Student', '20171002', 'Sample', '713-6113', 'Dummy Account', 29, '0000-00-00', 'Registered', 'Done', '2017'),
(32, 'Erul Ubas', 20, 'Male', 'Bacolod City', 'Singcang', '2017-11-01', 178, '433-2449', 'Negros', 'Student', '1031031', 'Dr. Haro', '433-2449', 'Sadas', 29, '2017-11-08', 'Unregister', 'Pending', '2017'),
(33, 'Juan Dela Cruz', 29, 'Male', 'Prk Casiana', 'Mandalagan', '2017-10-31', 127, '433-2449', 'Negros', 'Student', '1000021', 'Dr. Sabay', '713-6113', 'Dr. Haro', 44, '2017-11-01', 'Unregister', 'Pending', '2017'),
(34, 'Pedro Dela Cruz', 19, 'Male', 'Bacolod City', 'Mandalagan', '2017-11-12', 178, '433-2449', 'Negros Occidental', 'Student', '20003421', 'Dr. Haro', '433-2449', 'erwrw', 19, '2017-11-07', 'Unregister', 'Pending', '2017'),
(35, 'Elmer Haro', 25, 'Male', 'Alijis, Bacolod City', 'Alijis', '2017-10-31', 178, '433-2449', 'Negros Occidental', 'Dean, IT', '123101231', 'Dr. Sabay', '713-2449', 'Dr. Haro', 20, '2017-10-31', 'Unregister', 'Pending', '2017'),
(36, 'john', 20, 'Male', 'sum-ag', 'Bata', '2016-11-01', 5, '123', 'neg occ', 'student', '123', 'jkl', '1234', 'q', 23, '2017-11-14', 'Registered', 'Pending', '2017'),
(37, 'Leonel Entes', 56, 'Male', 'Bacolod city', 'Alijis', '2017-10-29', 189, '433-2449', 'Negros', 'Student', '2131', 'Dr. Haro', '433-2449', 'Dr. Haro', 90, '2017-11-07', 'Unregister', 'Pending', '2017'),
(38, 'Daniel Molabin', 20, 'Male', 'banago', 'Banago', '2017-10-29', 78, '433-2449', 'Negros', 'Student', '31231', 'Dr. Haro', '433-2449', 'Dr. Sabay', 29, '2017-11-14', 'Unregister', 'Pending', '2017'),
(39, 'Vincent Suyo', 20, 'Male', 'Bacolod City', 'Handumanan', '2017-11-07', 178, '433-2449', 'Negros', 'Student', '23211013', 'Dr. Haro', '433-2449', 'Dr. Haro', 28, '0000-00-00', 'Unregister', 'Pending', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `tb_case_no` int(10) NOT NULL AUTO_INCREMENT,
  `registration_date` date NOT NULL,
  `dots_facility` varchar(50) NOT NULL,
  `source_of_patient` varchar(50) NOT NULL,
  `registration_group` varchar(30) NOT NULL,
  `diagnosis` varchar(20) NOT NULL,
  `bacteriological_status` varchar(30) NOT NULL,
  `classification_of_tb` varchar(20) NOT NULL,
  `bcg_scar` char(8) NOT NULL,
  `history` varchar(10) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tb_case_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`tb_case_no`, `registration_date`, `dots_facility`, `source_of_patient`, `registration_group`, `diagnosis`, `bacteriological_status`, `classification_of_tb`, `bcg_scar`, `history`, `duration`, `patient_id`, `month`, `year`) VALUES
(1, '2017-10-31', 'bhtc', 'Public Health Center', 'Relapse', 'TB Disease', 'Bacteriologically Confirmed', 'Extrapulmonary', 'Yes', 'Yes', 'Less than 1 month', 26, 'Nov', '2017'),
(2, '2017-10-19', 'BHTC', 'Private Hospitals', 'Treatment After Failure', 'TB Disease', 'Clinically Diagnosed', 'Extrapulmonary', 'Yes', 'Yes', 'Less than 1 month', 18, 'Nov', '2017'),
(3, '2017-10-18', 'BHTC', 'Private Hospitals', 'Transfer-in', 'TB Disease', 'Bacteriologically Confirmed', 'Extrapulmonary', 'NO', 'NO', 'Less than 1 month', 17, 'Nov', '2017'),
(4, '2017-11-03', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Not applicable', 19, 'Nov', '2017'),
(5, '2017-11-28', 'Bacolod City Health TB DOTS Center', 'Other Government Facilities', 'PTOU', 'TB Disease', 'Clinically Diagnosed', 'Extrapulmonary', 'Yes', 'Yes', 'Less than 1 month', 22, 'Nov', '2017'),
(6, '2017-11-15', 'BHTC', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'NO', 'Not applicable', 23, 'Nov', '2017'),
(7, '2017-11-09', 'BHTC', 'Other Government Facilities', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Extrapulmonary', 'Yes', 'Yes', 'Not applicable', 31, 'Nov', '2017'),
(8, '2017-11-09', 'BHTC', 'Public Health Center', 'TALF', 'TB Disease', 'Clinically Diagnosed', 'Extrapulmonary', 'Yes', 'Yes', 'Not applicable', 29, 'Oct', '2017'),
(9, '2017-11-15', 'bhtc', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'NO', 'Not applicable', 36, 'Nov', '2017'),
(10, '2017-11-04', 'BHTC', 'Community', 'Others', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Not applicable', 28, 'Nov', '2017'),
(11, '2017-11-15', 'BHTC', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'NO', 'Yes', 'Less than 1 month', 27, 'Nov', '2017'),
(12, '2017-11-21', 'BHTC', 'Community', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'No', 'Yes', 'Less than 1 month', 19, 'Nov', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_culture_examination`
--

CREATE TABLE IF NOT EXISTS `tb_culture_examination` (
  `tb_culture_id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(30) NOT NULL,
  `tb_culture_laboratory` char(10) NOT NULL,
  `laboratory_no` varchar(30) NOT NULL,
  `date_sample_collected` date NOT NULL,
  `date_sample_received` date NOT NULL,
  `tb_culture_result` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `reviewed_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tb_culture_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_culture_examination`
--

INSERT INTO `tb_culture_examination` (`tb_culture_id`, `method`, `tb_culture_laboratory`, `laboratory_no`, `date_sample_collected`, `date_sample_received`, `tb_culture_result`, `remarks`, `examined_by`, `reviewed_by`, `date_released`, `patient_id`, `month`, `year`) VALUES
(1, 'qwe', 'qwe', 'qwe', '2017-10-12', '2017-10-25', 'qwe', 'qwe', 'qwe', 'qwe', '2017-10-11', 18, 'Nov', '2017'),
(2, '12', '12', '12', '2017-11-09', '2017-11-08', 'Good', 'Good', 'Dr. Haro', 'Dr. Haro', '2017-11-08', 31, 'Nov', '2017'),
(3, 'Method 3', '34', '34', '2017-11-08', '2017-11-09', 'Good', 'Good', 'Dr. Haro', 'Dr. Haro', '2017-11-08', 29, 'Nov', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE IF NOT EXISTS `treatment_record` (
  `treatment_id` int(10) NOT NULL AUTO_INCREMENT,
  `treatment_regimen_category` varchar(30) NOT NULL,
  `weight` int(3) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `date_treatment_started` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`treatment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`treatment_id`, `treatment_regimen_category`, `weight`, `treatment_partner_name`, `designation_treatment_partner`, `date_treatment_started`, `remarks`, `patient_id`) VALUES
(1, 'Category Ia - 2HRZE/10HR', 56, 'Dr', 'Dr', '2017-10-04', '', 15),
(2, 'Category I - 2HRZE/4HR', 67, 'Dr. Sabay', 'BHW', '2017-10-10', '', 16),
(3, 'Category Ia - 2HRZE/10HR', 57, '45', 'bhw', '2017-10-11', '', 18),
(4, 'Category Ia - 2HRZE/10HR', 89, 'gjhj', 'bhw', '2017-10-25', '', 17),
(5, 'Category I - 2HRZE/4HR', 90, 'qwe', 'qwe', '2017-10-29', '', 24),
(6, 'Category IIa - 2HRZES/1HRZE/9H', 67, 'Alvin Yanson', 'Barangay Health Worker', '2017-11-03', 'Done', 19),
(12, 'Category IIa - 2HRZES/1HRZE/9H', 90, 'Dr. Torres', 'Barangay Health Worker', '2017-11-03', 'Done', 0),
(13, 'Category IIa - 2HRZES/1HRZE/9H', 90, 'Dr. Torres', 'Barangay Health Worker', '2017-11-02', 'Done', 22),
(14, 'Category IIa - 2HRZES/1HRZE/9H', 90, 'Dr. Sabay', 'BHW', '2017-11-03', 'Done', 28),
(15, 'Category IIa - 2HRZES/1HRZE/9H', 89, 'Juan De la Cruz', 'BHW', '2017-11-06', 'Done', 26),
(16, 'Category I - 2HRZE/4HR', 90, 'Dr. Haro', 'BHW', '2017-11-08', 'Done', 31),
(17, 'Category IIa - 2HRZES/1HRZE/9H', 66, 'Alvin Yanson', 'BHW', '2017-11-23', 'Done', 23),
(18, 'Category Ia - 2HRZE/10HR', 90, 'Dr. Haro', 'BHW', '2017-11-15', 'Done', 27);

-- --------------------------------------------------------

--
-- Table structure for table `tst`
--

CREATE TABLE IF NOT EXISTS `tst` (
  `tst_id` int(10) NOT NULL AUTO_INCREMENT,
  `result` varchar(20) NOT NULL,
  `date_read` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tst`
--

INSERT INTO `tst` (`tst_id`, `result`, `date_read`, `patient_id`, `month`, `year`) VALUES
(1, 'Fucking Thesis', '2017-10-31', 18, 'Nov', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `position` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `position`, `username`, `password`) VALUES
(19, 'Sample', 'Account', 'Medical Technologist', 'medtech', 'HAHAHAHAHAda2550f00907e1601628524200439e35'),
(22, 'Dummy', 'Account', 'NTP Nurse Coordinator', 'admin', 'HAHAHAHAHA9573534ee6a886f4831ac5bcdfe85565'),
(23, 'Rommel', 'Adricula', 'Medical Technologist', 'rommel', 'HAHAHAHAHAdfeaf10390e560aea745ccba53e044ed'),
(24, 'Elmer', 'Haro', 'NTP Nurse Coordinator', 'elmer', 'HAHAHAHAHA7222de5ea00a35ee2669a02bbb8f9ed4'),
(25, 'qwe', 'qwe', 'NTP Nurse Coordinator', 'zxc', 'HAHAHAHAHA5fa72358f0b4fb4f2c5d7de8c9a41846'),
(26, 'Alvin', 'Yanson', 'NTP Nurse Coordinator', '', 'HAHAHAHAHA21232f297a57a5a743894a0e4a801fc3'),
(27, 'sample', 'sample', 'Medical Technologist', 'sample', 'HAHAHAHAHA5e8ff9bf55ba3508199d22e984129be6'),
(28, 'elmer', 'haro', 'NTP Nurse Coordinator', '', 'HAHAHAHAHA5fa72358f0b4fb4f2c5d7de8c9a41846'),
(29, 'I am Carl', 'Betio', 'NTP Nurse Coordinator', 'carl', 'HAHAHAHAHA76d80224611fc919a5d54f0ff9fba446'),
(30, 'Tenesse', 'Elinon', 'Medical Technologist', 'tenesse', 'HAHAHAHAHAb250cc96e7bc02f449ba080b7b559726');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
