-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 06:54 AM
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
  `date_visited` date NOT NULL,
  `weight` int(3) NOT NULL,
  `q1` char(3) NOT NULL,
  `q2` char(3) NOT NULL,
  `q3` char(3) NOT NULL,
  `q4` char(3) NOT NULL,
  `q5` char(3) NOT NULL,
  `q6` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(13, '2017-10-25', 90, 'Yes', 'Yes', 'Yes', '', 'Yes', 'Yellowing of Sclerae and skin', 18);

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
(12, 89, '2017-10-12', 'Present', 18),
(13, 0, '2017-10-11', 'Absent', 18),
(14, 0, '2017-10-26', 'Absent', 18),
(15, 0, '2017-10-20', 'Absent', 18);

-- --------------------------------------------------------

--
-- Table structure for table `cxr`
--

CREATE TABLE `cxr` (
  `cxr_id` int(10) NOT NULL,
  `cxr_findings` varchar(20) NOT NULL,
  `date_of_exam` date NOT NULL,
  `tbdc` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cxr`
--

INSERT INTO `cxr` (`cxr_id`, `cxr_findings`, `date_of_exam`, `tbdc`, `patient_id`) VALUES
(1, 'Good Result', '2017-10-10', 'BDBDD', 10);

-- --------------------------------------------------------

--
-- Table structure for table `drug_intake`
--

CREATE TABLE `drug_intake` (
  `intake_id` int(10) NOT NULL,
  `status` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `drug_preparations` (
  `drug_preparation_id` int(10) NOT NULL,
  `date` date NOT NULL,
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

INSERT INTO `drug_preparations` (`drug_preparation_id`, `date`, `isoniazid`, `rifampicin`, `pyrazinamide`, `ethambutol`, `streptomycin`, `patient_id`) VALUES
(1, '0000-00-00', '45', '45', '45', '45', '45', 17),
(2, '2017-10-16', '12', '12', '12', '12', '12', 18),
(3, '2017-10-13', '89', '89', '89', '89', '89', 18);

-- --------------------------------------------------------

--
-- Table structure for table `dssm_examination`
--

CREATE TABLE `dssm_examination` (
  `dssm_id` int(11) NOT NULL,
  `date_examined` date NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `reading` varchar(30) NOT NULL,
  `laboratory_diagnosis` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dssm_examination`
--

INSERT INTO `dssm_examination` (`dssm_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `reading`, `laboratory_diagnosis`, `examined_by`, `date_released`, `patient_id`) VALUES
(1, '2017-10-04', '12', 'qwe', 'qwe', 'qwe', 'qwe', '2017-10-03', 15),
(2, '2017-10-10', '32', 'Good', 'Good', 'Good', 'Dr. Haro', '2017-10-18', 16),
(3, '2017-10-17', '45', 'Good', 'Good', 'Good', 'Good', '2017-10-12', 17);

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
  `isoniazid` varchar(30) NOT NULL,
  `rifampicin` varchar(30) NOT NULL,
  `ethambutol` varchar(30) NOT NULL,
  `streptomycin` varchar(30) NOT NULL,
  `pyrazinamide` varchar(30) NOT NULL,
  `levofloxacin` varchar(30) NOT NULL,
  `kanamycin` varchar(30) NOT NULL,
  `amikacin` varchar(30) NOT NULL,
  `capreomycin` varchar(30) NOT NULL,
  `pyrazinamide2` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `reviewed_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dst_examination`
--

INSERT INTO `dst_examination` (`dst_id`, `tb_culture_laboratory`, `dst_laboratory`, `date_collected`, `date_received`, `isoniazid`, `rifampicin`, `ethambutol`, `streptomycin`, `pyrazinamide`, `levofloxacin`, `kanamycin`, `amikacin`, `capreomycin`, `pyrazinamide2`, `examined_by`, `remarks`, `reviewed_by`, `date_released`, `patient_id`) VALUES
(1, '123', '123', '2017-10-04', '2017-10-12', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', '2017-10-22', 16);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#3a87ad',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `examination_sched` (
  `sched_id` int(10) NOT NULL,
  `examination_date` date NOT NULL,
  `test_requested` varchar(30) NOT NULL,
  `status` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination_sched`
--

INSERT INTO `examination_sched` (`sched_id`, `examination_date`, `test_requested`, `status`, `patient_id`) VALUES
(1, '2017-10-04', 'Xpert MTB/RIF', 'Pending', 10),
(2, '2017-10-05', 'DSSM', 'Pending', 16),
(3, '2017-12-02', 'Xpert MTB/RIF', 'Pending', 15);

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
  `result` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gene_expert_examination`
--

INSERT INTO `gene_expert_examination` (`xpert_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `reading`, `examined_by`, `date_released`, `result`, `patient_id`) VALUES
(1, '2017-10-11', '12', 'qwe', 'qwe', 'qwe', '2017-10-11', 'Positive', 14),
(2, '2017-10-11', '12', 'Good', 'Good', 'Good', '2017-10-18', 'Positive', 18);

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
(77, 0, '2017-10-20', 'Absent', 18);

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
  `sample_collector` varchar(30) NOT NULL,
  `contact_number` char(14) NOT NULL,
  `test_requested` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory_request`
--

INSERT INTO `laboratory_request` (`lab_request_id`, `collection_unit`, `date_of_request`, `requesting_physician`, `reason_for_examination`, `specimen_type`, `repeat_collection`, `date_sample_collected`, `sample_collector`, `contact_number`, `test_requested`, `patient_id`, `status`) VALUES
(23, 'Sum-ag Health Center', '2017-10-06', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-10-11', 'qwe', '12312', 'Xpert MTB/RIF', 14, 'Done'),
(24, 'Bata Health Center', '2017-10-03', 'qwe', 'Diagnostic', 'Sputum', 'Yes', '2017-10-11', 'qwe', '433-2449', 'DSSM', 15, 'Done'),
(25, 'Estefania Health Center', '2017-10-04', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-10-12', 'Dr. Haro', '433-2449', 'DSSM', 15, 'Pending'),
(26, 'Villamonte Health Center', '2017-09-29', 'Dr. Sabay', 'Baseline', 'Urine', 'No', '2017-09-24', 'Dr. Adricula', '433-2449', 'Xpert MTB/RIF', 15, 'Pending'),
(27, 'Bata Health Center', '2017-10-11', 'Dr. Haro', 'Follow-up', 'Sputum', 'Yes', '2017-10-11', 'Dr. Sabay', '433-2449', 'DSSM', 16, 'Done'),
(28, 'Bata Health Center', '2017-10-11', 'Dr. Haro', 'Follow-up', 'Sputum', 'Yes', '2017-10-10', 'Dr. Adricula', '433-2449', 'Drug Susceptible Testing', 16, 'Done'),
(29, 'Estefania Health Center', '2017-10-11', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-10-18', 'Dr. Haro', '433-2449', 'DSSM', 17, 'Done'),
(30, 'Bata Health Center', '2017-10-10', 'Dr. Haro', 'Diagnostic', 'Sputum', 'Yes', '2017-10-11', 'qwe', '2131', 'Xpert MTB/RIF', 18, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `medication_id` int(50) NOT NULL,
  `drugs` varchar(50) NOT NULL,
  `dosage` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `itr_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`medication_id`, `drugs`, `dosage`, `unit`, `date`, `itr_no`) VALUES
(67, 'Amoxicillin and Clavulanic Acid', '2', '2', '2017-08-22', '321'),
(68, 'P-AMINOSALICYLIC ACID', '2', '2', '2017-08-07', '4567'),
(69, 'AMIKACIN', '1', '1', '2017-08-14', '123'),
(70, 'CAPREOMYCIN', '22221', '333', '2017-08-14', '123'),
(71, 'Amoxicillin and Clavulanic Acid', '222', '1156', '2017-08-12', '123'),
(72, 'STREPTOMYCIN', '2', '2', '2017-08-07', '123'),
(73, 'LEVOFLOXACIN', '99', '99', '2017-08-21', '123'),
(74, 'CLOFFAZIMINE', '2', '2', '2017-08-14', '2'),
(75, 'VIOMYCIN', '2', '2', '2017-08-09', '2'),
(76, 'P-AMINOSALICYLIC ACID', '2', '2', '2017-08-10', '2'),
(77, 'ETHIONAMIDE', '45', '45', '2017-08-10', '123'),
(78, 'Amoxicillin and Clavulanic Acid', '12', '12', '2017-08-11', '5665568'),
(79, 'CLARITHROMYCIN', '22', '22', '2017-08-11', '123'),
(80, 'TERIZIDONE', 'qwe', 'qwe', '2017-08-11', '5665568'),
(81, 'ETHAMBUTOL', '2', '2', '2017-08-21', '123'),
(82, 'Amoxicillin and Clavulanic Acid', 'q', 'QWER', '2017-08-15', '1'),
(83, 'CAPREOMYCIN', '23', '32', '2017-09-14', '0');

-- --------------------------------------------------------

--
-- Table structure for table `medication_dispensation`
--

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL,
  `health_center` varchar(50) NOT NULL,
  `drug` varchar(50) NOT NULL,
  `date_given` date NOT NULL,
  `quantity` int(10) NOT NULL,
  `received_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication_dispensation`
--

INSERT INTO `medication_dispensation` (`dispensation_id`, `health_center`, `drug`, `date_given`, `quantity`, `received_by`) VALUES
(1, 'Sum-ag Health Center', 'CAPREOMYCIN', '2017-10-10', 123, 'eqweq'),
(2, 'Health Center', 'Name of Drug', '0000-00-00', 0, ''),
(3, 'Bata Health Center', 'CAPREOMYCIN', '2017-10-17', 300, 'Dr. Haro'),
(4, 'Mandalagan Health Center', 'Amoxicillin and Clavulanic Acid', '2017-10-19', 400, 'Dr. Haro'),
(5, 'Villa Esperanza Barangay Health Station', 'CLARITHROMYCIN', '2017-10-10', 344, 'Dr. Haro'),
(6, 'Choose Health Center', 'Name of Drug', '2017-10-10', 3445, 'Dr. Haro');

-- --------------------------------------------------------

--
-- Table structure for table `morris`
--

CREATE TABLE `morris` (
  `morris_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `morris`
--

INSERT INTO `morris` (`morris_id`, `type`, `number`) VALUES
(1, 'Bacteriolo', 50),
(2, 'Clinically', 99);

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
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `age`, `gender`, `address`, `birthdate`, `height`, `contact_number`, `province`, `occupation`, `philhealth_no`, `contact_person`, `emergency_no`, `household_member`, `household_member_age`, `date_screened`, `status`) VALUES
(17, 'Sample', 56, 'Male', 'Bacolod', '2017-10-24', 178, '433-2449', 'Negros', 'Student', '4333', 'Dr. Haro', '433-2449', 'Dr. Sabay', 56, '2017-10-24', 'Registered'),
(18, 'Dummy Account', 45, 'Male', 'Bacolod', '2017-10-24', 178, '433-2449', 'Negros', 'Student', '7771232', 'Mr. Haro', '433-2449', '4343', 34, '2017-10-10', 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `tb_case_no` int(10) NOT NULL,
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
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`tb_case_no`, `registration_date`, `dots_facility`, `source_of_patient`, `registration_group`, `diagnosis`, `bacteriological_status`, `classification_of_tb`, `bcg_scar`, `history`, `duration`, `patient_id`) VALUES
(13121, '2017-10-19', 'BHTC', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 18),
(34343, '2017-10-18', 'BHTC', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Pulmonary', 'NO', 'NO', 'Less than 1 month', 17);

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(10) NOT NULL,
  `status` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id`, `status`, `patient_id`) VALUES
(1, 'P', 0),
(2, 'A', 0);

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
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE `treatment_record` (
  `treatment_id` int(10) NOT NULL,
  `treatment_regimen_category` varchar(30) NOT NULL,
  `bcg_scar` char(8) NOT NULL,
  `weight` int(3) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `date_treatment_started` date NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`treatment_id`, `treatment_regimen_category`, `bcg_scar`, `weight`, `treatment_partner_name`, `designation_treatment_partner`, `date_treatment_started`, `patient_id`) VALUES
(1, 'Category Ia - 2HRZE/10HR', 'No', 56, 'Dr', 'Dr', '2017-10-04', 15),
(2, 'Category I - 2HRZE/4HR', 'Doubtful', 67, 'Dr. Sabay', 'BHW', '2017-10-10', 16),
(3, 'Category Ia - 2HRZE/10HR', 'Yes', 57, '45', 'bhw', '2017-10-11', 18),
(4, 'Category Ia - 2HRZE/10HR', 'No', 89, 'gjhj', 'bhw', '2017-10-25', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tst`
--

CREATE TABLE `tst` (
  `tst_id` int(10) NOT NULL,
  `result` varchar(20) NOT NULL,
  `date_read` date NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `position` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `position`, `username`, `password`) VALUES
(2, 'Alvin', 'Yanson', 'Medical Technologist', 'medtech', 'medtech'),
(9, 'Alvin', 'Yanson', 'NTP Nurse Coordinator', 'admin', 'admin'),
(10, 'iam', 'alvin', 'NTP Nurse Coordinator', 'myuser', 'mypass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
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
-- Indexes for table `drug_intake`
--
ALTER TABLE `drug_intake`
  ADD PRIMARY KEY (`intake_id`);

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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `laboratory_request`
--
ALTER TABLE `laboratory_request`
  ADD PRIMARY KEY (`lab_request_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`medication_id`);

--
-- Indexes for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  ADD PRIMARY KEY (`dispensation_id`);

--
-- Indexes for table `morris`
--
ALTER TABLE `morris`
  ADD PRIMARY KEY (`morris_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`tb_case_no`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `clinical_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `continuation_phase`
--
ALTER TABLE `continuation_phase`
  MODIFY `continuation_phase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cxr`
--
ALTER TABLE `cxr`
  MODIFY `cxr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `drug_intake`
--
ALTER TABLE `drug_intake`
  MODIFY `intake_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `drug_preparations`
--
ALTER TABLE `drug_preparations`
  MODIFY `drug_preparation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dssm_examination`
--
ALTER TABLE `dssm_examination`
  MODIFY `dssm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dst_examination`
--
ALTER TABLE `dst_examination`
  MODIFY `dst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `examination_sched`
--
ALTER TABLE `examination_sched`
  MODIFY `sched_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gene_expert_examination`
--
ALTER TABLE `gene_expert_examination`
  MODIFY `xpert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `intensive_phase`
--
ALTER TABLE `intensive_phase`
  MODIFY `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `laboratory_request`
--
ALTER TABLE `laboratory_request`
  MODIFY `lab_request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `medication_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  MODIFY `dispensation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `morris`
--
ALTER TABLE `morris`
  MODIFY `morris_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `tb_case_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34344;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_culture_examination`
--
ALTER TABLE `tb_culture_examination`
  MODIFY `tb_culture_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `treatment_record`
--
ALTER TABLE `treatment_record`
  MODIFY `treatment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tst`
--
ALTER TABLE `tst`
  MODIFY `tst_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
