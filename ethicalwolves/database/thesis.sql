-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2017 at 05:51 AM
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
  `date_visited` varchar(30) NOT NULL,
  `weight` int(3) NOT NULL,
  `q1` char(3) NOT NULL,
  `q2` char(3) NOT NULL,
  `q3` char(3) NOT NULL,
  `q4` char(3) NOT NULL,
  `q5` char(3) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`clinical_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `clinical_findings`
--

INSERT INTO `clinical_findings` (`clinical_id`, `date_visited`, `weight`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `patient_id`) VALUES
(5, 'Saturday 25th of November 2017', 68, 'Yes', 'Yes', 'No', 'Yes', 'No', 'Joint Pains', 1),
(6, 'Saturday 25th of November 2017', 70, 'No', 'No', 'No', 'No', 'No', 'Abdominal Pain', 1),
(7, 'Saturday 25th of November 2017', 45, 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Vomiting', 2);

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings_ipt`
--

CREATE TABLE IF NOT EXISTS `clinical_findings_ipt` (
  `clinical_id` int(10) NOT NULL AUTO_INCREMENT,
  `date_visited` varchar(50) NOT NULL,
  `weight` int(3) NOT NULL,
  `q1` char(3) NOT NULL,
  `q2` char(3) NOT NULL,
  `q3` char(3) NOT NULL,
  `q4` char(3) NOT NULL,
  `q5` char(3) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`clinical_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `clinical_findings_ipt`
--

INSERT INTO `clinical_findings_ipt` (`clinical_id`, `date_visited`, `weight`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `patient_id`) VALUES
(3, 'Saturday 25th of November 2017', 56, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Hearing Disturbance', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `continuation_phase`
--

INSERT INTO `continuation_phase` (`continuation_phase_id`, `dosage`, `date_taken`, `remarks`, `patient_id`) VALUES
(1, 0, '2017-11-22', 'Absent', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drug_preparations`
--

CREATE TABLE IF NOT EXISTS `drug_preparations` (
  `drug_preparation_id` int(10) NOT NULL AUTO_INCREMENT,
  `date_visited` varchar(30) NOT NULL,
  `isoniazid` varchar(20) NOT NULL,
  `rifampicin` varchar(20) NOT NULL,
  `pyrazinamide` varchar(20) NOT NULL,
  `ethambutol` varchar(20) NOT NULL,
  `streptomycin` varchar(20) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`drug_preparation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `drug_preparations`
--

INSERT INTO `drug_preparations` (`drug_preparation_id`, `date_visited`, `isoniazid`, `rifampicin`, `pyrazinamide`, `ethambutol`, `streptomycin`, `patient_id`) VALUES
(1, 'Sunday 26th of November 2017', '12', '12', '12', '12', '12', 2),
(2, 'Sunday 26th of November 2017', '89', '89', '89', '89', '9', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `dssm_examination`
--

INSERT INTO `dssm_examination` (`dssm_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `reading`, `laboratory_diagnosis`, `examined_by`, `date_released`, `patient_id`, `month`, `year`) VALUES
(19, '2017-11-25', '1001', 'Salivary', 'Good', 'Positive', 'Dr. Haro', '2017-11-22', 2, 'Nov', '2017'),
(20, '2017-11-23', '100', 'Salivary', 'Good', 'Positive', 'Dr. Haro', '2017-11-26', 3, 'Nov', '2017');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examination_sched`
--

CREATE TABLE IF NOT EXISTS `examination_sched` (
  `sched_id` int(10) NOT NULL AUTO_INCREMENT,
  `examination_date` date NOT NULL,
  `test_requested` varchar(30) NOT NULL,
  `status` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `intensive_phase`
--

INSERT INTO `intensive_phase` (`intensive_phase_id`, `dosage`, `date_taken`, `remarks`, `patient_id`) VALUES
(9, 97, '2017-11-25', 'Present', 1);

-- --------------------------------------------------------

--
-- Table structure for table `intensive_phase_ipt`
--

CREATE TABLE IF NOT EXISTS `intensive_phase_ipt` (
  `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`intensive_phase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `intensive_phase_ipt`
--

INSERT INTO `intensive_phase_ipt` (`intensive_phase_id`, `dosage`, `date_taken`, `remarks`, `patient_id`) VALUES
(1, 100, '2017-11-24', 'Present', 1),
(2, 0, '2017-11-24', 'Absent', 1),
(3, 0, '2017-11-25', 'Absent', 1),
(4, 0, '2017-11-25', 'Absent', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `medication_dispensation`
--

INSERT INTO `medication_dispensation` (`dispensation_id`, `health_center`, `medicine_name`, `date_given`, `quantity`, `received_by`) VALUES
(1, 'Banago Barangay Health Station', 'Isoniazid', '2017-11-25', 50, 'Dr. Haro');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_description`, `running_balance`) VALUES
(1, 'Isoniazid', 'This is Isoniazid', 50);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `medicine_stocks`
--

INSERT INTO `medicine_stocks` (`medicine_stock_id`, `medicine_name`, `quantity`, `date`) VALUES
(1, 'Isoniazid', 100, '2017-11-25 20:52:15');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `age`, `gender`, `address`, `barangay`, `birthdate`, `height`, `contact_number`, `province`, `occupation`, `philhealth_no`, `contact_person`, `emergency_no`, `household_member`, `household_member_age`, `date_screened`, `status`, `treatment_partner`, `year`) VALUES
(1, 'Alvin Yanson', 20, 'Male', 'Prk. Casiana', 'Mandalagan', '2017-08-12', 178, '09952784676', 'Negros Occidental', '', '', 'Dr. Sabay', '433-2449 local 181', 'Dr. Haro', 44, '2017-11-25', 'Registered', 'Pending', '2017'),
(2, 'Gabriel Banua', 21, 'Male', 'Lizares Ave', 'Brgy 39', '2017-01-02', 179, '433-2449 local', 'Negros Occidental', '', '', 'qwe', 'qwe', 'qwe', 23, '2017-11-14', 'Registered', 'Pending', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `patient_ipt`
--

CREATE TABLE IF NOT EXISTS `patient_ipt` (
  `patient_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` char(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `emergency_no` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `status` char(10) NOT NULL,
  `treatment_partner` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `tb_case_no` int(10) NOT NULL AUTO_INCREMENT,
  `registration_date` varchar(30) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`tb_case_no`, `registration_date`, `dots_facility`, `source_of_patient`, `registration_group`, `diagnosis`, `bacteriological_status`, `classification_of_tb`, `bcg_scar`, `history`, `duration`, `patient_id`, `month`, `year`) VALUES
(1, '', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 1, 'Nov', '2017'),
(2, 'November 26, 2017 | Sunday', 'Bacolod City Health TB DOTS Center', 'Private Hospitals', 'Relapse', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 2, 'Nov', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `registration_ipt`
--

CREATE TABLE IF NOT EXISTS `registration_ipt` (
  `ipt_no` int(10) NOT NULL AUTO_INCREMENT,
  `date_evaluated` date NOT NULL,
  `diagnosis` char(15) NOT NULL,
  `date_ipt_started` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`ipt_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`treatment_id`, `treatment_regimen_category`, `weight`, `treatment_partner_name`, `designation_treatment_partner`, `date_treatment_started`, `remarks`, `patient_id`) VALUES
(1, 'Category I - 2HRZE/4HR', 89, 'Dr. Haro', 'BHW', '2017-11-16', 'Done', 44),
(2, 'Category I - 2HRZE/4HR', 56, 'Dr. Sabay', 'BHW', '2017-11-24', 'Done', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `position`, `username`, `password`) VALUES
(19, 'Sample', 'Account', 'Medical Technologist', 'medtech', 'HAHAHAHAHAda2550f00907e1601628524200439e35'),
(22, 'Dummy', 'Account', 'NTP Nurse Coordinator', 'admin', 'HAHAHAHAHA9573534ee6a886f4831ac5bcdfe85565'),
(23, 'Rommel', 'Adricula', 'Medical Technologist', 'rommel', 'HAHAHAHAHAdfeaf10390e560aea745ccba53e044ed'),
(24, 'Elmer', 'Haro', 'NTP Nurse Coordinator', 'elmer', 'HAHAHAHAHA7222de5ea00a35ee2669a02bbb8f9ed4'),
(25, 'qwe', 'qwe', 'NTP Nurse Coordinator', 'zxc', 'HAHAHAHAHA5fa72358f0b4fb4f2c5d7de8c9a41846'),
(26, 'Alvin', 'Yanson', 'Medical Technologist', 'iamalvin', 'HAHAHAHAHAec8516df881627b945f3a0d04a2f5158');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
