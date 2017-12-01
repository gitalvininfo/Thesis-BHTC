-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 06:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings`
--

CREATE TABLE `clinical_findings` (
  `clinical_id` int(10) NOT NULL,
  `date_visited` varchar(30) NOT NULL,
  `weight` int(3) NOT NULL,
  `q1` char(3) NOT NULL,
  `q2` char(3) NOT NULL,
  `q3` char(3) NOT NULL,
  `q4` char(3) NOT NULL,
  `q5` char(3) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `clinical_findings_ipt` (
  `clinical_id` int(10) NOT NULL,
  `date_visited` varchar(50) NOT NULL,
  `weight` int(3) NOT NULL,
  `q1` char(3) NOT NULL,
  `q2` char(3) NOT NULL,
  `q3` char(3) NOT NULL,
  `q4` char(3) NOT NULL,
  `q5` char(3) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_findings_ipt`
--

INSERT INTO `clinical_findings_ipt` (`clinical_id`, `date_visited`, `weight`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `patient_id`) VALUES
(3, 'Saturday 25th of November 2017', 56, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Hearing Disturbance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `continuation_phase`
--

CREATE TABLE `continuation_phase` (
  `continuation_phase_id` int(10) NOT NULL,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continuation_phase`
--

INSERT INTO `continuation_phase` (`continuation_phase_id`, `dosage`, `date_taken`, `remarks`, `patient_id`) VALUES
(1, 0, '2017-11-22', 'Absent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cxr`
--

CREATE TABLE `cxr` (
  `cxr_id` int(10) NOT NULL,
  `cxr_findings` varchar(20) NOT NULL,
  `date_of_exam` date NOT NULL,
  `tbdc` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drug_preparations`
--

CREATE TABLE `drug_preparations` (
  `drug_preparation_id` int(10) NOT NULL,
  `date_visited` varchar(30) NOT NULL,
  `isoniazid` varchar(20) NOT NULL,
  `rifampicin` varchar(20) NOT NULL,
  `pyrazinamide` varchar(20) NOT NULL,
  `ethambutol` varchar(20) NOT NULL,
  `streptomycin` varchar(20) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug_preparations`
--

INSERT INTO `drug_preparations` (`drug_preparation_id`, `date_visited`, `isoniazid`, `rifampicin`, `pyrazinamide`, `ethambutol`, `streptomycin`, `patient_id`) VALUES
(1, 'Wednesday 29th of November 201', '1', '1', '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dssm_examination`
--

CREATE TABLE `dssm_examination` (
  `dssm_id` int(11) NOT NULL,
  `date_examined` date NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `visual_appearance2` char(15) NOT NULL,
  `reading` varchar(30) NOT NULL,
  `reading2` char(15) NOT NULL,
  `laboratory_diagnosis` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dssm_examination`
--

INSERT INTO `dssm_examination` (`dssm_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `visual_appearance2`, `reading`, `reading2`, `laboratory_diagnosis`, `examined_by`, `date_released`, `patient_id`, `month`, `year`) VALUES
(19, '2017-11-25', '1001', 'Salivary', '', 'Good', '', 'Positive', 'Dr. Haro', '2017-11-22', 2, 'Nov', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `dst_examination`
--

CREATE TABLE `dst_examination` (
  `dst_id` int(11) NOT NULL,
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
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examination_sched`
--

CREATE TABLE `examination_sched` (
  `sched_id` int(10) NOT NULL,
  `examination_date` date NOT NULL,
  `status` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination_sched`
--

INSERT INTO `examination_sched` (`sched_id`, `examination_date`, `status`, `patient_id`) VALUES
(1, '2017-12-02', 'Pending', 1),
(2, '2017-11-01', 'Pending', 1),
(3, '2017-12-21', 'Pending', 13);

-- --------------------------------------------------------

--
-- Table structure for table `gene_expert_examination`
--

CREATE TABLE `gene_expert_examination` (
  `xpert_id` int(11) NOT NULL,
  `date_examined` date NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `reading` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `result` varchar(2) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gene_expert_examination`
--

INSERT INTO `gene_expert_examination` (`xpert_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `reading`, `examined_by`, `date_released`, `result`, `patient_id`, `month`, `year`) VALUES
(1, '2017-11-26', '12', 'Good', 'Good', 'Dr. Haro', '2017-11-26', 'T', 1, 'Nov', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `intensive_phase`
--

CREATE TABLE `intensive_phase` (
  `intensive_phase_id` int(10) NOT NULL,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intensive_phase`
--

INSERT INTO `intensive_phase` (`intensive_phase_id`, `dosage`, `date_taken`, `remarks`, `patient_id`) VALUES
(9, 97, '2017-11-25', 'Present', 1);

-- --------------------------------------------------------

--
-- Table structure for table `intensive_phase_ipt`
--

CREATE TABLE `intensive_phase_ipt` (
  `intensive_phase_id` int(10) NOT NULL,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intensive_phase_ipt`
--

INSERT INTO `intensive_phase_ipt` (`intensive_phase_id`, `dosage`, `date_taken`, `remarks`, `patient_id`) VALUES
(1, 100, '2017-11-24', 'Present', 1),
(2, 0, '2017-11-24', 'Absent', 1),
(3, 0, '2017-11-25', 'Absent', 1),
(4, 0, '2017-11-25', 'Absent', 1),
(5, 67, '2017-11-23', 'Present', 1);

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_request`
--

CREATE TABLE `laboratory_request` (
  `lab_request_id` int(10) NOT NULL,
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
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory_request`
--

INSERT INTO `laboratory_request` (`lab_request_id`, `collection_unit`, `date_of_request`, `requesting_physician`, `reason_for_examination`, `specimen_type`, `repeat_collection`, `date_sample_collected`, `date_sample_collected2`, `sample_collector`, `contact_number`, `test_requested`, `patient_id`, `status`, `year`) VALUES
(68, 'Mandalagan Health Center', '2017-11-26', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-27', '2017-11-28', 'Dr. Haro', '433-2449', 'DSSM', 2, 'Done', '2017'),
(69, 'Banago Health Center', '2017-11-25', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-25', '2017-11-25', 'Dr. Haro', '433-2449', 'Xpert MTB/RIF', 1, 'Done', '2017'),
(70, 'Mandalagan Health Center', '2017-11-26', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-11-26', '2017-11-27', 'Dr. Haro', '433-2449', 'DSSM', 2, 'Pending', '2017'),
(71, 'Sum-ag Health Center', '2017-11-27', 'Dr. Sabay', 'Diagnostic', 'Sputum', 'No', '2017-11-26', '2017-11-26', 'Dr. Sabay', '433-2449', 'DSSM', 3, 'Pending', '2017'),
(72, 'Bata Health Center', '2017-11-28', 'Dr. Sabay', 'Diagnostic', 'Sputum', 'Yes', '2017-11-21', '2017-11-21', 'Dr. Haro', '433-2449', 'DSSM', 7, 'Pending', '2017'),
(73, 'Sum-ag Health Center', '2017-11-21', 'Wqeq', 'Diagnostic', 'Sputum', 'Yes', '2017-11-28', '2017-11-28', 'qweq', '1231', 'DSSM', 0, 'Pending', '2017'),
(74, 'Sum-ag Health Center', '2017-11-22', '2131', 'Diagnostic', 'Sputum', 'Yes', '2017-11-14', '2017-11-14', 'qeqw', '1231', 'DSSM', 7, 'Pending', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `medication_dispensation`
--

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL,
  `health_center` varchar(50) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `date_given` date NOT NULL,
  `quantity` int(10) NOT NULL,
  `received_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication_dispensation`
--

INSERT INTO `medication_dispensation` (`dispensation_id`, `health_center`, `medicine_name`, `date_given`, `quantity`, `received_by`) VALUES
(1, 'Banago Barangay Health Station', 'Isoniazid', '2017-11-25', 50, 'Dr. Haro'),
(2, 'Alijis Barangay Health Station', 'name', '2017-11-29', 10, 'Menard Gardose');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `running_balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_description`, `running_balance`) VALUES
(1, 'Isoniazid', 'This is Isoniazid', 50),
(2, 'name', 'nameolekfkldf', 15);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stocks`
--

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_stocks`
--

INSERT INTO `medicine_stocks` (`medicine_stock_id`, `medicine_name`, `quantity`, `date`) VALUES
(1, 'Isoniazid', 100, '2017-11-25 20:52:15'),
(2, 'name', 12, '2017-11-29 20:11:39'),
(3, 'name', 13, '2017-11-29 20:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL,
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
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `age`, `gender`, `address`, `barangay`, `birthdate`, `height`, `contact_number`, `province`, `occupation`, `philhealth_no`, `contact_person`, `emergency_no`, `household_member`, `household_member_age`, `date_screened`, `status`, `treatment_partner`, `year`) VALUES
(1, 'Alson John Bayon-on', 123, 'Male', 'Prk. Langis, Brgy. Banago, Bacolod City', 'Banago', '2017-11-25', 178, '433-2449', 'Negros Occidental', 'Student', '10992241', 'Dr. Sabay', '433-2449 local 181', 'Dr. Adricula', 34, '0000-00-00', 'Registered', 'Done', '2017'),
(2, 'Alvin Yanson', 20, 'Male', 'Prk. Casiana, Eroreco, Bacolod City', 'Mandalagan', '2017-01-08', 178, '433-2449', 'Negros Occidental', 'Student', '1993121', 'Dr. Haro', '433-2449 local 181', 'Dr. Sabay', 28, '2017-11-25', 'Registered', 'Pending', '2017'),
(3, 'Erul John Ubas', 21, 'Male', 'Sum-ag, Bacolod City', 'Sumag ', '2017-03-13', 178, '433-2449 local', 'Negros Occidental', '', '', 'Dr. Adricula', '433-2449 local 181', 'Reymund Sabay', 34, '2017-11-26', 'Registered', 'Pending', '2017'),
(5, 'Gabriel Francis Banua', 22, 'Male', 'Taculing, Bacolod City', 'Taculing', '2017-10-29', 178, '433-2449', 'Negros Occidental', '', '', 'Dr. Sabay', '433-2449', 'Dr. Adricula', 4, '2017-11-27', 'Registered', 'Pending', '2017'),
(6, 'Alec Rubiato', 20, 'Male', 'Banago, Bacolod City', 'Banago', '2016-12-25', 174, '433-2449', 'Negros Occidental', '', '', 'Dr. Torres', '433-2449', 'Dr. Sabay', 34, '2017-11-27', 'Registered', 'Pending', '2017'),
(7, 'Daniel Molabin', 20, 'Male', 'Lizares Avenue', 'Felisa', '2017-10-29', 168, '433-2449', 'Negros Occidental', '', '', 'Dr. Haro', '433-2449 local 181', 'Dr. Sabay', 23, '2017-11-27', 'Registered', 'Pending', '2017'),
(8, 'Vincen Suyo', 20, 'Male', 'My Address', 'Pahanocoy', '2017-10-29', 178, '433-2449', 'Negros Occidental', '', '', 'qwe', '1312', 'qweqw', 12, '2017-11-30', 'Registered', 'Pending', '2017'),
(9, 'Brix Nessia', 22, 'Male', 'My Address', 'Mandalagan', '2017-10-30', 178, '12312', 'Negros Occidental', '', '', 'qweqw', '12313', 'qeqewq', 12, '2017-11-30', 'Registered', 'Pending', '2017'),
(10, 'Hans Patrick Legislador', 22, 'Male', 'My Address', 'Mandalagan', '2017-10-30', 178, '12321', 'Negros Occidental', '', '', 'eqewq', '1231', 'ewqeq', 12, '2017-11-30', 'Registered', 'Pending', '2017'),
(11, 'Ivan Buglosa', 22, 'Male', 'My Address', 'Granada ', '2017-10-30', 178, '433-2494', 'Negros Occidental', '', '', 'qewq', '12', 'eqeqw', 12, '2017-11-30', 'Registered', 'Pending', '2017'),
(12, 'Steven Saludares', 20, 'Male', 'My Address', 'Handumanan', '2017-10-30', 178, '123', 'Negros Occidental', '', '', 'eqweqw', '12', 'wqeqwe', 12, '2017-11-30', 'Registered', 'Pending', '2017'),
(13, 'Menard Gardose', 10, 'Male', 'My Address', 'Tangub', '2017-10-29', 178, '3123', 'Negros Occidental', '', '', 'wqeqw', '2131', 'eqweqw', 2, '2017-12-29', 'Registered', 'Pending', '2017'),
(14, 'qw', 12, 'Male', 'wqew', 'Bata', '2017-11-20', 1231, '1231', 'Negros Occidental', '', '', 'eqeqw', '132', 'qweqq', 13, '2017-11-20', 'Registered', 'Pending', '2017'),
(15, 'qwe', 21, 'Male', '231', 'Brgy 38', '2017-11-26', 12, '232', 'Negros Occidental', '', '', 'wqeq', '123', 'eqeq', 21, '2017-11-28', 'Registered', 'Pending', '2017'),
(16, 'zx', 23, 'Female', 'qweq', 'Brgy 14', '2017-11-26', 12, '433-2449', 'Negros Occidental', '', '', 'qwe', '123', 'qeqe', 12, '2017-11-27', 'Registered', 'Pending', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `patient_ipt`
--

CREATE TABLE `patient_ipt` (
  `patient_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` char(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `emergency_no` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `status` char(10) NOT NULL,
  `treatment_partner` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_ipt`
--

INSERT INTO `patient_ipt` (`patient_id`, `name`, `age`, `gender`, `address`, `emergency_no`, `birthdate`, `status`, `treatment_partner`, `year`) VALUES
(5, 'Carl Betio', 2, 'Male', 'Taculing Bacolod City', '433-2449 local 181', '2017-11-25', 'Registered', 'Pending', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `tb_case_no` int(10) NOT NULL,
  `registration_date` varchar(25) NOT NULL,
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
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`tb_case_no`, `registration_date`, `dots_facility`, `source_of_patient`, `registration_group`, `diagnosis`, `bacteriological_status`, `classification_of_tb`, `bcg_scar`, `history`, `duration`, `patient_id`, `month`, `year`) VALUES
(26, '2017-11-25', 'Bacolod City Health TB DOTS Center', 'Community', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Extra-pulmonary', 'Yes', 'Yes', 'Less than 1 month', 1, 'Nov', '2017'),
(27, '2017-11-25', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'Relapse', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 2, 'Nov', '2017'),
(28, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Other Government Facilities', 'Relapse', 'TB Disease', 'Clinically Diagnosed', 'Pulmonary', 'No', 'No', 'Less than 1 month', 6, 'Nov', '2017'),
(29, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Community', 'Transfer-in', 'TB Disease', 'Clinically Diagnosed', 'Extra-pulmonary', 'No', 'Yes', 'Less than 1 month', 7, 'Nov', '2017'),
(30, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'Treatment After Failure', 'TB Disease', 'Clinically Diagnosed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 3, 'Nov', '2017'),
(31, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Private Hospitals', 'Treatment After Failure', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 5, 'Nov', '2017'),
(32, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 9, 'Nov', '2017'),
(33, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Other Government Facilities', 'Relapse', 'TB Disease', 'Clinically Diagnosed', 'Extra-pulmonary', 'No', 'No', '1 month or more', 10, 'Nov', '2017'),
(34, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Private Hospitals', 'Treatment After Failure', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 11, 'Nov', '2017'),
(35, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Community', 'TALF', 'TB Disease', 'Clinically Diagnosed', 'Extra-pulmonary', 'Yes', 'Yes', 'Less than 1 month', 13, 'Nov', '2017'),
(36, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'PTOU', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 12, 'Nov', '2017'),
(37, '0000-00-00', 'Bacolod City Health TB DOTS Center', 'Other Government Facilities', 'Transfer-in', 'TB Disease', 'Clinically Diagnosed', 'Extra-pulmonary', 'Yes', 'Yes', 'Less than 1 month', 8, 'Nov', '2017'),
(38, 'December 1, 2017 | Friday', 'Bacolod City Health TB DOTS Center', 'Private Hospitals', 'Others', 'TB Disease', 'Clinically Diagnosed', 'Extra-pulmonary', 'No', 'No', 'Less than 1 month', 16, 'Dec', '2017'),
(39, 'December 1, 2017 | Friday', 'Bacolod City Health TB DOTS Center', 'Other Government Facilities', 'PTOU', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 14, 'Dec', '2017'),
(40, 'December 1, 2017 | Friday', 'Bacolod City Health TB DOTS Center', 'Private Hospitals', 'TALF', 'TB Exposior, for IPT', 'Clinically Diagnosed', 'Extra-pulmonary', 'No', 'No', '1 month or more', 15, 'Dec', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `registration_ipt`
--

CREATE TABLE `registration_ipt` (
  `ipt_no` int(10) NOT NULL,
  `date_evaluated` date NOT NULL,
  `diagnosis` char(20) NOT NULL,
  `date_ipt_started` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_ipt`
--

INSERT INTO `registration_ipt` (`ipt_no`, `date_evaluated`, `diagnosis`, `date_ipt_started`, `patient_id`, `year`) VALUES
(1, '2017-11-20', 'TB Infection', '2017-11-26', 5, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_culture_examination`
--

CREATE TABLE `tb_culture_examination` (
  `tb_culture_id` int(11) NOT NULL,
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
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE `treatment_record` (
  `treatment_id` int(10) NOT NULL,
  `treatment_regimen_category` varchar(30) NOT NULL,
  `weight` int(3) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `date_treatment_started` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tst` (
  `tst_id` int(10) NOT NULL,
  `result` varchar(20) NOT NULL,
  `date_read` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `license` char(20) NOT NULL,
  `position` char(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `license`, `position`, `username`, `password`) VALUES
(22, 'Dummy', 'Account', '', 'NTP Nurse Coordinator', 'admin', 'HAHAHAHAHA9573534ee6a886f4831ac5bcdfe85565'),
(31, 'Gabriel', 'Banua', '213931', 'Medical Technologist', 'gab', 'HAHAHAHAHA639bee393eecbc62256936a8e64d17b1'),
(32, 'Menard', 'Gardose', '1243443', 'Medical Technologist', 'menard', 'HAHAHAHAHA9f5ab0cd889e06d101d3e45e0296ed23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  ADD PRIMARY KEY (`clinical_id`);

--
-- Indexes for table `clinical_findings_ipt`
--
ALTER TABLE `clinical_findings_ipt`
  ADD PRIMARY KEY (`clinical_id`);

--
-- Indexes for table `continuation_phase`
--
ALTER TABLE `continuation_phase`
  ADD PRIMARY KEY (`continuation_phase_id`);

--
-- Indexes for table `cxr`
--
ALTER TABLE `cxr`
  ADD PRIMARY KEY (`cxr_id`);

--
-- Indexes for table `drug_preparations`
--
ALTER TABLE `drug_preparations`
  ADD PRIMARY KEY (`drug_preparation_id`);

--
-- Indexes for table `dssm_examination`
--
ALTER TABLE `dssm_examination`
  ADD PRIMARY KEY (`dssm_id`);

--
-- Indexes for table `dst_examination`
--
ALTER TABLE `dst_examination`
  ADD PRIMARY KEY (`dst_id`);

--
-- Indexes for table `examination_sched`
--
ALTER TABLE `examination_sched`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `gene_expert_examination`
--
ALTER TABLE `gene_expert_examination`
  ADD PRIMARY KEY (`xpert_id`);

--
-- Indexes for table `intensive_phase`
--
ALTER TABLE `intensive_phase`
  ADD PRIMARY KEY (`intensive_phase_id`);

--
-- Indexes for table `intensive_phase_ipt`
--
ALTER TABLE `intensive_phase_ipt`
  ADD PRIMARY KEY (`intensive_phase_id`);

--
-- Indexes for table `laboratory_request`
--
ALTER TABLE `laboratory_request`
  ADD PRIMARY KEY (`lab_request_id`);

--
-- Indexes for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  ADD PRIMARY KEY (`dispensation_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `medicine_stocks`
--
ALTER TABLE `medicine_stocks`
  ADD PRIMARY KEY (`medicine_stock_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_ipt`
--
ALTER TABLE `patient_ipt`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`tb_case_no`);

--
-- Indexes for table `registration_ipt`
--
ALTER TABLE `registration_ipt`
  ADD PRIMARY KEY (`ipt_no`);

--
-- Indexes for table `tb_culture_examination`
--
ALTER TABLE `tb_culture_examination`
  ADD PRIMARY KEY (`tb_culture_id`);

--
-- Indexes for table `treatment_record`
--
ALTER TABLE `treatment_record`
  ADD PRIMARY KEY (`treatment_id`);

--
-- Indexes for table `tst`
--
ALTER TABLE `tst`
  ADD PRIMARY KEY (`tst_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  MODIFY `clinical_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clinical_findings_ipt`
--
ALTER TABLE `clinical_findings_ipt`
  MODIFY `clinical_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `continuation_phase`
--
ALTER TABLE `continuation_phase`
  MODIFY `continuation_phase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cxr`
--
ALTER TABLE `cxr`
  MODIFY `cxr_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drug_preparations`
--
ALTER TABLE `drug_preparations`
  MODIFY `drug_preparation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dssm_examination`
--
ALTER TABLE `dssm_examination`
  MODIFY `dssm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `dst_examination`
--
ALTER TABLE `dst_examination`
  MODIFY `dst_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `examination_sched`
--
ALTER TABLE `examination_sched`
  MODIFY `sched_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gene_expert_examination`
--
ALTER TABLE `gene_expert_examination`
  MODIFY `xpert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `intensive_phase`
--
ALTER TABLE `intensive_phase`
  MODIFY `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `intensive_phase_ipt`
--
ALTER TABLE `intensive_phase_ipt`
  MODIFY `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `laboratory_request`
--
ALTER TABLE `laboratory_request`
  MODIFY `lab_request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  MODIFY `dispensation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medicine_stocks`
--
ALTER TABLE `medicine_stocks`
  MODIFY `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `patient_ipt`
--
ALTER TABLE `patient_ipt`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `tb_case_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `registration_ipt`
--
ALTER TABLE `registration_ipt`
  MODIFY `ipt_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_culture_examination`
--
ALTER TABLE `tb_culture_examination`
  MODIFY `tb_culture_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `treatment_record`
--
ALTER TABLE `treatment_record`
  MODIFY `treatment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tst`
--
ALTER TABLE `tst`
  MODIFY `tst_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
