DROP TABLE backup;

CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL AUTO_INCREMENT,
  `remarks` char(40) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("61","Successfully imported database","December 20, 2017, 7:53 pm"); 
INSERT INTO backup VALUES("62","Successfully imported database","December 20, 2017, 7:56 pm"); 
INSERT INTO backup VALUES("63","Successfully imported database","December 20, 2017, 7:57 pm"); 
INSERT INTO backup VALUES("64","Successfully imported database","December 20, 2017, 8:04 pm"); 
INSERT INTO backup VALUES("65","Successfully imported database","December 20, 2017, 8:13 pm"); 
INSERT INTO backup VALUES("66","Successfully exported database","December 20, 2017, 8:14 pm"); 
INSERT INTO backup VALUES("67","Successfully imported database","December 20, 2017, 9:12 pm"); 
INSERT INTO backup VALUES("68","Successfully imported database","December 21, 2017, 7:52 am"); 
INSERT INTO backup VALUES("69","Successfully imported database","December 21, 2017, 2:55 pm"); 
INSERT INTO backup VALUES("70","Successfully imported database","December 21, 2017, 3:38 pm"); 
INSERT INTO backup VALUES("71","Successfully exported database","December 21, 2017, 3:38 pm"); 
INSERT INTO backup VALUES("72","Successfully imported database","December 21, 2017, 10:30 pm"); 
INSERT INTO backup VALUES("73","Successfully imported database","December 22, 2017, 10:54 am"); 
INSERT INTO backup VALUES("74","Successfully exported database","December 22, 2017, 10:55 am"); 
INSERT INTO backup VALUES("75","Successfully imported database","December 24, 2017, 2:37 am"); 
INSERT INTO backup VALUES("76","Successfully exported database","December 24, 2017, 3:05 am"); 
INSERT INTO backup VALUES("77","Successfully exported database","December 24, 2017, 3:08 am"); 
INSERT INTO backup VALUES("78","Successfully imported database","December 24, 2017, 4:55 pm"); 
INSERT INTO backup VALUES("79","Successfully imported database","December 25, 2017, 12:53 am"); 
INSERT INTO backup VALUES("80","Successfully imported database","December 25, 2017, 5:37 pm"); 
INSERT INTO backup VALUES("81","Successfully exported database","December 25, 2017, 11:56 pm"); 
INSERT INTO backup VALUES("82","Successfully imported database","December 27, 2017, 12:55 am"); 
INSERT INTO backup VALUES("83","Successfully imported database","December 27, 2017, 2:37 pm"); 
INSERT INTO backup VALUES("84","Successfully exported database","December 27, 2017, 10:34 pm"); 
INSERT INTO backup VALUES("85","Successfully exported database","December 27, 2017, 10:34 pm"); 
INSERT INTO backup VALUES("86","Successfully exported database","December 27, 2017, 10:35 pm"); 
INSERT INTO backup VALUES("87","Successfully exported database","December 27, 2017, 10:35 pm"); 
INSERT INTO backup VALUES("88","Successfully exported database","December 27, 2017, 10:36 pm"); 
INSERT INTO backup VALUES("89","Successfully exported database","December 27, 2017, 10:36 pm"); 
INSERT INTO backup VALUES("90","Successfully exported database","December 27, 2017, 10:43 pm"); 
INSERT INTO backup VALUES("91","Successfully imported database","December 28, 2017, 1:51 am"); 
INSERT INTO backup VALUES("92","Successfully imported database","December 29, 2017, 1:52 am"); 
INSERT INTO backup VALUES("93","Successfully imported database","December 30, 2017, 1:52 am"); 
INSERT INTO backup VALUES("94","Successfully exported database","December 30, 2017, 1:53 am"); 
INSERT INTO backup VALUES("95","Successfully exported database","December 30, 2017, 1:53 am"); 
INSERT INTO backup VALUES("96","Successfully exported database","December 30, 2017, 1:53 am"); 
INSERT INTO backup VALUES("97","Successfully imported database","December 30, 2017, 1:54 am"); 
INSERT INTO backup VALUES("98","Successfully imported database","December 31, 2017, 8:23 pm"); 
INSERT INTO backup VALUES("99","Successfully imported database","December 31, 2017, 9:02 pm"); 
INSERT INTO backup VALUES("100","Successfully imported database","January 1, 2018, 2:24 am"); 
INSERT INTO backup VALUES("101","Successfully imported database","January 1, 2018, 11:36 pm"); 
INSERT INTO backup VALUES("102","Successfully imported database","January 2, 2018, 12:41 am"); 
INSERT INTO backup VALUES("103","Successfully imported database","January 3, 2018, 1:53 am"); 



DROP TABLE clinical_findings;

CREATE TABLE `clinical_findings` (
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO clinical_findings VALUES("7","Saturday 25th of November 2017","45","/","/","/","/","0","Vomiting","2"); 
INSERT INTO clinical_findings VALUES("8","Tuesday 5th of December 2017","78","/","/","/","/","/","Abdominal Pain","7"); 
INSERT INTO clinical_findings VALUES("9","Tuesday 5th of December 2017","67","/","/","0","/","/","Numbness","2"); 
INSERT INTO clinical_findings VALUES("11","Saturday 9th of December 2017","67","/","/","/","/","/","Numbness","1"); 
INSERT INTO clinical_findings VALUES("12","Saturday 9th of December 2017","68","/","/","/","/","/","Joint Paints","1"); 
INSERT INTO clinical_findings VALUES("13","Saturday 9th of December 2017","89","0","0","0","0","0","Hearing Disturbance","1"); 
INSERT INTO clinical_findings VALUES("14","Saturday 9th of December 2017","56","/","/","/","/","/","Abdominal Pain","1"); 
INSERT INTO clinical_findings VALUES("15","December 9, 2017","67","/","/","/","/","/","Skin Rashes","7"); 
INSERT INTO clinical_findings VALUES("17","December 11, 2017","67","/","/","/","/","/","Joint Paints","6"); 
INSERT INTO clinical_findings VALUES("18","December 11, 2017","78","0","0","/","/","/","Numbness","1"); 
INSERT INTO clinical_findings VALUES("19","December 14, 2017","78","/","0","/","/","/","Vomiting","6"); 
INSERT INTO clinical_findings VALUES("20","December 19, 2017","45","/","/","/","/","0","Numbness","21"); 
INSERT INTO clinical_findings VALUES("21","December 20, 2017","50","0","0","0","0","0","Itchiness","2"); 
INSERT INTO clinical_findings VALUES("22","December 20, 2017","53","0","0","0","0","0","Joint Paints","2"); 
INSERT INTO clinical_findings VALUES("23","December 20, 2017","55","0","0","/","/","/","Joint Paints","6"); 
INSERT INTO clinical_findings VALUES("24","December 20, 2017","56","0","0","0","0","0","Numbness","6"); 
INSERT INTO clinical_findings VALUES("25","December 20, 2017","67","0","0","0","0","0","Hearing Disturbance","7"); 
INSERT INTO clinical_findings VALUES("26","December 20, 2017","68","0","0","0","0","0","Vomiting","7"); 
INSERT INTO clinical_findings VALUES("27","December 23, 2017","78","0","0","/","/","/","Itchiness","2"); 
INSERT INTO clinical_findings VALUES("28","December 24, 2017","45","/","/","/","/","/","Yellowing of Sclerae and skin","1"); 
INSERT INTO clinical_findings VALUES("29","December 27, 2017","67","✓","✓","✓","✓","✓","Numbness","1"); 



DROP TABLE clinical_findings_ipt;

CREATE TABLE `clinical_findings_ipt` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO clinical_findings_ipt VALUES("3","Saturday 25th of November 2017","56","Yes","Yes","Yes","Yes","Yes","Hearing Disturbance","1"); 
INSERT INTO clinical_findings_ipt VALUES("4","Friday 29th of December 2017","45","No","No","Yes","Yes","Yes","Abdominal Pain","9"); 
INSERT INTO clinical_findings_ipt VALUES("5","December 29, 2017","34","✓","✓","✓","✓","0","Abnormal Pain","9"); 



DROP TABLE continuation_phase;

CREATE TABLE `continuation_phase` (
  `continuation_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `month` char(10) NOT NULL,
  `day` char(2) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`continuation_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO continuation_phase VALUES("21","12","February","1","2017","Present","1"); 
INSERT INTO continuation_phase VALUES("22","0","January","1","2017","Absent","1"); 
INSERT INTO continuation_phase VALUES("23","0","January","1","2017","Absent","2"); 
INSERT INTO continuation_phase VALUES("25","12","January","1","2017","Present","6"); 
INSERT INTO continuation_phase VALUES("26","0","January","2","2017","Absent","6"); 
INSERT INTO continuation_phase VALUES("27","0","February","1","2017","Absent","1"); 
INSERT INTO continuation_phase VALUES("28","12","December","30","2017","Present","1"); 



DROP TABLE cxr;

CREATE TABLE `cxr` (
  `cxr_id` int(10) NOT NULL AUTO_INCREMENT,
  `cxr_findings` varchar(20) NOT NULL,
  `date_of_exam` date NOT NULL,
  `tbdc` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`cxr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO cxr VALUES("2","TB Disease","2017-12-04","Alson","1","Dec","2017"); 
INSERT INTO cxr VALUES("3","TB Infection","2017-12-12","Leonel","1","Dec","2017"); 
INSERT INTO cxr VALUES("4","Suggestive of TB","2017-12-18","Alvin Yanson","21","Dec","2017"); 
INSERT INTO cxr VALUES("5","No TB","2017-12-04","Alvin Yanson","21","Dec","2017"); 
INSERT INTO cxr VALUES("6","Good","2017-12-28","Dr. Haro","1","Dec","2017"); 



DROP TABLE drug_preparations;

CREATE TABLE `drug_preparations` (
  `drug_preparation_id` int(10) NOT NULL AUTO_INCREMENT,
  `date_visited` varchar(30) NOT NULL,
  `isoniazid` varchar(20) NOT NULL,
  `rifampicin` varchar(20) NOT NULL,
  `pyrazinamide` varchar(20) NOT NULL,
  `ethambutol` varchar(20) NOT NULL,
  `streptomycin` varchar(20) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`drug_preparation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO drug_preparations VALUES("1","Wednesday 29th of November 201","1","1","1","1","1","1"); 
INSERT INTO drug_preparations VALUES("2","Tuesday 5th of December 2017","12","12","12","12","12","6"); 
INSERT INTO drug_preparations VALUES("3","Sunday 24th of December 2017","12","12","11","12","12","1"); 
INSERT INTO drug_preparations VALUES("4","December 24, 2017","34","34","34","34","34","1"); 



DROP TABLE dssm_examination;

CREATE TABLE `dssm_examination` (
  `dssm_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`dssm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO dssm_examination VALUES("19","2017-11-25","1001","Salivary","","Good","Good","Positive (+)","Dr. Haro","2017-11-22","2","Nov","2017"); 
INSERT INTO dssm_examination VALUES("20","2017-12-13","1064","Salivary","Salivary","Good","Good","Negative (0)","Dr. Haro","2017-12-13","7","Dec","2017"); 
INSERT INTO dssm_examination VALUES("21","2017-12-19","12","Muco-Purulent","Muco-Purulent","Good","Good","Positive (+)","Dr. Haro","2017-12-19","21","Dec","2017"); 
INSERT INTO dssm_examination VALUES("22","2017-12-13","1089","Salivary","Muco-Purulent","Good","Good","Positive (+)","Dr. Haro","2017-12-13","2","Dec","2017"); 



DROP TABLE dst_examination;

CREATE TABLE `dst_examination` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO dst_examination VALUES("1","12","12","2017-12-03","2017-12-03","Method 1","Resistant","Resistant","Resistant","Resistant","Resistant","Susceptible","Resistant","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Haro","2017-12-05","6","Dec","2017"); 
INSERT INTO dst_examination VALUES("2","12","12","2017-12-12","2017-12-12","Method 1","Susceptible","Resistant","Resistant","Resistant","Resistant","Susceptible","Susceptible","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Adricula","2017-12-20","1","Dec","2017"); 



DROP TABLE family_member;

CREATE TABLE `family_member` (
  `member_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `date_screened` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO family_member VALUES("5","Alvin Yanson","20","2017-12-11","1"); 
INSERT INTO family_member VALUES("6","Jyth Jerundio","21","2017-12-11","10"); 
INSERT INTO family_member VALUES("7","Carl Betio","20","2017-12-11","1"); 
INSERT INTO family_member VALUES("8","Sample Member","30","2017-12-11","1"); 
INSERT INTO family_member VALUES("9","Christan Plaza","20","2017-12-18","6"); 
INSERT INTO family_member VALUES("10","Alvin Yanson","20","2017-12-18","21"); 
INSERT INTO family_member VALUES("11","Sample Member","21","2017-12-11","21"); 
INSERT INTO family_member VALUES("12","Carl Betio","20","2017-12-27","2"); 
INSERT INTO family_member VALUES("13","Gabriel Banua","20","2017-12-27","1"); 



DROP TABLE follow_up;

CREATE TABLE `follow_up` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO follow_up VALUES("7","2018-01-08","may klase na...","2"); 



DROP TABLE follow_up_ipt;

CREATE TABLE `follow_up_ipt` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `examination_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO follow_up_ipt VALUES("1","2018-01-10","Balik ka d amu ni nga date","5"); 
INSERT INTO follow_up_ipt VALUES("2","2018-01-03","Balik ka d boots...","17"); 



DROP TABLE gene_expert_examination;

CREATE TABLE `gene_expert_examination` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO gene_expert_examination VALUES("1","2017-11-26","12","Good","Good","Dr. Haro","2017-11-26","T","1","Nov","2017"); 
INSERT INTO gene_expert_examination VALUES("2","2017-12-06","1256","Salivary","wwwere","Dr","2017-12-06","TI","19","Dec","2017"); 
INSERT INTO gene_expert_examination VALUES("3","2017-12-13","1065","Salivary","Good","Dr. Haro","2017-12-13","RR","11","Dec","2017"); 



DROP TABLE health_center;

CREATE TABLE `health_center` (
  `health_center_id` int(10) NOT NULL AUTO_INCREMENT,
  `health_center` varchar(100) NOT NULL,
  PRIMARY KEY (`health_center_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO health_center VALUES("1","Abcasa Barangay Health Station"); 
INSERT INTO health_center VALUES("2","Alangilan Barangay Health Station"); 
INSERT INTO health_center VALUES("3","Alijis Barangay Health Station"); 
INSERT INTO health_center VALUES("4","Banago Barangay Health Station"); 
INSERT INTO health_center VALUES("5","Bata Barangay Health Station"); 
INSERT INTO health_center VALUES("6","Cabug Barangay Health Station"); 
INSERT INTO health_center VALUES("7","Estefania Barangay Health Station"); 
INSERT INTO health_center VALUES("8","Felisa Barangay Health Station"); 
INSERT INTO health_center VALUES("9","Granada Barangay Health Station"); 
INSERT INTO health_center VALUES("10","Handumanan Barangay Health Station"); 
INSERT INTO health_center VALUES("11","Lopez Jaena Health Plus"); 
INSERT INTO health_center VALUES("12","Mabini Health Plus"); 
INSERT INTO health_center VALUES("13","Mandalagan Barangay Health Station"); 
INSERT INTO health_center VALUES("14","Mansilingan Barangay Health Station"); 
INSERT INTO health_center VALUES("15","Montevista Barangay Health Station"); 
INSERT INTO health_center VALUES("16","Pahanocoy Barangay Health Station"); 
INSERT INTO health_center VALUES("17","Punta Taytay Barangay Health Station"); 
INSERT INTO health_center VALUES("18","Singcang Barangay Health Station"); 
INSERT INTO health_center VALUES("19","Sum-ag Barangay Health Station"); 
INSERT INTO health_center VALUES("20","Taculing Barangay Health Station"); 
INSERT INTO health_center VALUES("21","Tangub Barangay Health Station"); 
INSERT INTO health_center VALUES("22","Villa Esperanza Barangay Health Station"); 
INSERT INTO health_center VALUES("23","Villamonte Barangay Health Station"); 
INSERT INTO health_center VALUES("24","Vista Alegre Barangay Health Station"); 



DROP TABLE intensive_phase;

CREATE TABLE `intensive_phase` (
  `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `month` char(10) NOT NULL,
  `day` char(2) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`intensive_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

INSERT INTO intensive_phase VALUES("32","34","December","25","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("33","45","December","26","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("34","56","December","27","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("35","56","December","27","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("36","12","December","Da","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("37","45","December","29","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("38","46","December","30","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("39","56","December","31","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("40","12","December","25","2017","Present","2"); 
INSERT INTO intensive_phase VALUES("41","56","January","1","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("42","45","December","23","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("43","9","December","22","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("44","10","December","Da","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("45","0","January","1","2017","Absent","1"); 
INSERT INTO intensive_phase VALUES("46","0","January","1","2017","Absent","2"); 
INSERT INTO intensive_phase VALUES("47","12","December","1","2017","Present","6"); 
INSERT INTO intensive_phase VALUES("49","0","December","2","2017","Absent","6"); 
INSERT INTO intensive_phase VALUES("50","10","January","4","2017","Present","1"); 
INSERT INTO intensive_phase VALUES("51","67","January","1","2018","Present","1"); 
INSERT INTO intensive_phase VALUES("52","45","January","3","2018","Present","1"); 



DROP TABLE intensive_phase_ipt;

CREATE TABLE `intensive_phase_ipt` (
  `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `month` char(10) NOT NULL,
  `day` char(2) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`intensive_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO intensive_phase_ipt VALUES("1","34","December","29","2017","Present","9"); 
INSERT INTO intensive_phase_ipt VALUES("2","0","December","27","2017","Absent","9"); 
INSERT INTO intensive_phase_ipt VALUES("3","0","December","29","2017","Absent","9"); 
INSERT INTO intensive_phase_ipt VALUES("4","14","December","28","2017","Present","13"); 
INSERT INTO intensive_phase_ipt VALUES("5","15","December","29","2017","Present","13"); 
INSERT INTO intensive_phase_ipt VALUES("6","0","December","30","2017","Absent","13"); 
INSERT INTO intensive_phase_ipt VALUES("7","10","January","1","2017","Present","13"); 
INSERT INTO intensive_phase_ipt VALUES("8","10","January","2","2017","Present","13"); 



DROP TABLE laboratory_request;

CREATE TABLE `laboratory_request` (
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
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`lab_request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

INSERT INTO laboratory_request VALUES("68","Mandalagan Health Center","2017-11-26","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-27","2017-11-28","Dr. Haro","433-2449","DSSM","2","Done","2017"); 
INSERT INTO laboratory_request VALUES("69","Banago Health Center","2017-11-25","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-25","2017-11-25","Dr. Haro","433-2449","Xpert MTB/RIF","1","Done","2017"); 
INSERT INTO laboratory_request VALUES("70","Mandalagan Health Center","2017-11-26","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-26","2017-11-27","Dr. Haro","433-2449","DSSM","2","Done","2017"); 
INSERT INTO laboratory_request VALUES("71","Sum-ag Health Center","2017-11-27","Dr. Sabay","Diagnostic","Sputum","No","2017-11-26","2017-11-26","Dr. Sabay","433-2449","DSSM","3","Pending","2017"); 
INSERT INTO laboratory_request VALUES("72","Bata Health Center","2017-11-28","Dr. Sabay","Diagnostic","Sputum","Yes","2017-11-21","2017-11-21","Dr. Haro","433-2449","DSSM","7","Done","2017"); 
INSERT INTO laboratory_request VALUES("74","Sum-ag Health Center","2017-11-22","2131","Diagnostic","Sputum","Yes","2017-11-14","2017-11-14","qeqw","1231","DSSM","7","Pending","2017"); 
INSERT INTO laboratory_request VALUES("75","Banago Health Center","2017-12-03","Dr. haro","Diagnostic","Sputum","Yes","2017-12-03","2017-12-03","Dr. haro","433-2449","Drug Susceptible Testing","6","Done","2017"); 
INSERT INTO laboratory_request VALUES("76","Banago Health Center","2017-12-06","Dr. Sabay","Baseline","Sputum","Yes","2017-12-04","2017-12-04","Dr. Adricula","713-6113","TB Culture","1","Done","2017"); 
INSERT INTO laboratory_request VALUES("77","Taculing Health Center","2017-12-06","Dr. Torres","Diagnostic","Sputum","Yes","2017-12-04","2017-12-05","sadsa","42432","Xpert MTB/RIF","19","Done","2017"); 
INSERT INTO laboratory_request VALUES("78","Bata Health Center","2017-12-12","Dr. Sabay","Follow-up","Sputum","Yes","2017-12-12","2017-12-12","Dr. Haro","433-2449","Xpert MTB/RIF","11","Done","2017"); 
INSERT INTO laboratory_request VALUES("79","Sum-ag Health Center","2017-12-12","Dr. Haro","Diagnostic","Sputum","Yes","2017-12-12","2017-12-12","Dr. Haro","433-2449","DSSM","9","Pending","2017"); 
INSERT INTO laboratory_request VALUES("80","Banago Health Center","2017-12-13","Dr. Sabay","Diagnostic","Sputum","Yes","2017-12-12","2017-12-13","Dr. Adricula","433-2449 local","Drug Susceptible Testing","1","Done","2017"); 
INSERT INTO laboratory_request VALUES("81","Mandalagan Health Center","2017-12-18","Dr. Haro","Diagnostic","Sputum","Yes","2017-12-18","2017-12-18","Dr. Haro","433-2449 local","DSSM","21","Pending","2017"); 
INSERT INTO laboratory_request VALUES("82","Mandalagan Health Center","2017-12-18","Dr. Harp","Follow-up","Sputum","Yes","2017-12-18","2017-12-18","Dr. Adricula","433-2449 local","DSSM","21","Done","2017"); 
INSERT INTO laboratory_request VALUES("83","Banago Health Center","2017-12-11","Dr. Sabay","Diagnostic","Sputum","Yes","2017-12-12","2017-12-13","Dr. Haro","433-2449 local","DSSM","2","Pending","2017"); 
INSERT INTO laboratory_request VALUES("84","Sum-ag Health Center","2017-12-05","Dr. Haro","Diagnostic","Sputum","Yes","2017-12-12","2017-12-12","Dr. Haro","433-2449","Xpert MTB/RIF","21","Pending","2017"); 



DROP TABLE medication_dispensation;

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL AUTO_INCREMENT,
  `health_center` varchar(50) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `month` char(10) NOT NULL,
  `day` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `received_by` varchar(30) NOT NULL,
  PRIMARY KEY (`dispensation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("1","Banago Barangay Health Station","Isoniazid","December","1","2017","50","Dr. Haro"); 
INSERT INTO medication_dispensation VALUES("2","Alijis Barangay Health Station","name","December","2","2017","10","Menard Gardose"); 
INSERT INTO medication_dispensation VALUES("3","Banago Barangay Health Station","Isoniazid","November","25","2017","5","qewq"); 
INSERT INTO medication_dispensation VALUES("4","Alijis Barangay Health Station","Rifampicin","November","26","2017","7","Dr"); 
INSERT INTO medication_dispensation VALUES("5","Alijis Barangay Health Station","Rifampicin","October","28","2017","5","Alson Bayon-on"); 
INSERT INTO medication_dispensation VALUES("6","Banago Barangay Health Station","Isoniazid","December","2","2017","4","Alson Bayon-on"); 
INSERT INTO medication_dispensation VALUES("7","Choose Health Center","Isoniazid","December","5","2017","12","Gabriel Banua"); 
INSERT INTO medication_dispensation VALUES("8","Mandalagan Barangay Health Station","Isoniazid","December","28","2017","10","Juan Dela Cruz"); 
INSERT INTO medication_dispensation VALUES("9","Alijis Barangay Health Station","Rifampicin","December","28","2017","4","Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("10","Alangilan Barangay Health Station","Rifampicin","December","28","2017","45","Juan Dela Cruz"); 
INSERT INTO medication_dispensation VALUES("11","Felisa Barangay Health Station","Rifampicin","December","29","2017","100","Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("12","Felisa Barangay Health Station","Isoniazid","December","29","2017","5","Alson John Bayon-on"); 
INSERT INTO medication_dispensation VALUES("13","Felisa Barangay Health Station","Isoniazid","January","1","2017","380","Gabriel Banua"); 
INSERT INTO medication_dispensation VALUES("14","Mandalagan Barangay Health Station","Isoniazid","December","30","2017","3","Alec Rubiato"); 
INSERT INTO medication_dispensation VALUES("15","Alijis Barangay Health Station","Arendo","December","31","2017","150","Alvin Yanson"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `running_balance` int(10) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Isoniazid","This is Isoniazidskie","3"); 
INSERT INTO medicine VALUES("2","name","nameolekfkldf","15"); 
INSERT INTO medicine VALUES("3","Rifampicin","This is Rifampicin","426"); 
INSERT INTO medicine VALUES("4","Ethambutol","This is Ethambutol","6"); 
INSERT INTO medicine VALUES("5","Streptomycin","This is Streptomycin","6"); 
INSERT INTO medicine VALUES("6","qweq","qwew","6"); 
INSERT INTO medicine VALUES("7","Sample Medicine","This is a sample medicine","6"); 
INSERT INTO medicine VALUES("8","Medicine Name","Medicine Description","6"); 
INSERT INTO medicine VALUES("11","Arendo","Arendo Coworking","150"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("1","Isoniazid","100","2017-11-25 20:52:15"); 
INSERT INTO medicine_stocks VALUES("2","name","12","2017-11-29 20:11:39"); 
INSERT INTO medicine_stocks VALUES("3","name","13","2017-11-29 20:12:42"); 
INSERT INTO medicine_stocks VALUES("4","Isoniazid","78","2017-12-11 23:04:56"); 
INSERT INTO medicine_stocks VALUES("5","Rifampicin","455","2017-12-27 00:01:58"); 
INSERT INTO medicine_stocks VALUES("6","Isoniazid","2","2017-12-27 00:09:12"); 
INSERT INTO medicine_stocks VALUES("7","Isoniazid","50","2017-12-27 00:11:10"); 
INSERT INTO medicine_stocks VALUES("8","Isoniazid","30","2017-12-27 00:11:36"); 
INSERT INTO medicine_stocks VALUES("9","Isoniazid","100","2017-12-27 00:11:49"); 
INSERT INTO medicine_stocks VALUES("10","Rifampicin","45","2017-12-27 00:28:14"); 
INSERT INTO medicine_stocks VALUES("11","Isoniazid","14","December 27, 2017, 1"); 
INSERT INTO medicine_stocks VALUES("12","Rifampicin","45","December 27, 2017, 12:31 "); 
INSERT INTO medicine_stocks VALUES("13","Rifampicin","10","December 27, 2017, 12:32 am"); 
INSERT INTO medicine_stocks VALUES("14","Isoniazid","100","December 27, 2017, 12:33 am"); 
INSERT INTO medicine_stocks VALUES("15","#","0","December 28, 2017, 12:35 am"); 
INSERT INTO medicine_stocks VALUES("16","Arendo","300","December 31, 2017, 7:18 pm"); 



DROP TABLE patient;

CREATE TABLE `patient` (
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
  `status` char(10) NOT NULL,
  `treatment_partner` char(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("1","Alson John Bayon-on","3","Male","Prk. Langis, Brgy. Banago, Bacolod City","Banago","2017-11-25","178","433-2449","Negros Occidental","Drug Lord","10992241","Dr. Sabay","433-2449 local 181","Registered","Done","tae"); 
INSERT INTO patient VALUES("2","Alvin Yanson","3","Male","eroreco bacolod city","Mandalagan","2017-01-08","178","433-2449","Negros Occidental","Student","1993121","Dr. Haro","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("3","Erul John Ubas","21","Male","Sum-ag, Bacolod City","Sumag ","2017-03-13","178","433-2449 local","Negros Occidental","","","Dr. Adricula","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("5","Gabriel Francis Banua","22","Male","Taculing, Bacolod City","Taculing","2017-10-29","178","433-2449","Negros Occidental","","","Dr. Sabay","433-2449","Registered","Done","2017"); 
INSERT INTO patient VALUES("6","Alec Rubiato","20","Male","Banago, Bacolod City","Banago","2016-12-25","174","433-2449","Negros Occidental","","","Dr. Torres","433-2449","Registered","Done","2017"); 
INSERT INTO patient VALUES("7","Daniel Molabin","20","Male","Lizares Avenue","Felisa","2017-10-29","168","433-2449","Negros Occidental","","","Dr. Haro","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("8","Vincent Suyo","20","Male","My Address","Pahanocoy","2017-10-29","178","433-2449","Negros Occidental","","","qwe","1312","Registered","Pending","2017"); 
INSERT INTO patient VALUES("9","Brix Nessia","22","Male","My Address","Mandalagan","2017-10-30","178","12312","Negros Occidental","","","qweqw","12313","Registered","Done","2017"); 
INSERT INTO patient VALUES("10","Hans Patrick Legislador","22","Male","My Address","Mandalagan","2017-10-30","178","12321","Negros Occidental","","","eqewq","1231","Registered","Done","2017"); 
INSERT INTO patient VALUES("11","Ivan Buglosa","22","Male","My Address","Granada ","2017-10-30","178","433-2494","Negros Occidental","","","qewq","12","Registered","Pending","2017"); 
INSERT INTO patient VALUES("12","Steven Saludares","20","Male","","Handumanan","2017-10-30","178","123","Negros Occidental","student","no philhealth","eqweqw","12","Registered","Done","2017"); 
INSERT INTO patient VALUES("13","Menard Gardose","10","Male","My Address","Tangub","2017-10-29","178","3123","Negros Occidental","","","wqeqw","2131","Registered","Done","2017"); 
INSERT INTO patient VALUES("14","qw","12","Male","wqew","Bata","2017-11-20","1231","1231","Negros Occidental","","","eqeqw","132","Registered","Done","2017"); 
INSERT INTO patient VALUES("15","qwe","21","Male","tga banago","Brgy 38","2017-11-26","12","232","Negros Occidental","","","wqeq","123","Registered","Done","2017"); 
INSERT INTO patient VALUES("16","zx","23","Female","qweq","Brgy 14","2017-11-26","12","433-2449","Negros Occidental","","","qwe","123","Registered","Pending","2017"); 
INSERT INTO patient VALUES("17","Jemmel Ano","12","Male","Singcang","Singcang","1997-03-19","178","433-2449 local","Negros Occidental","Student lng ah","","Dr. Sabay","433-2449 local","Registered","Done","2017"); 
INSERT INTO patient VALUES("18","Jay Alvin Galoyo","20","Male","Sum-ag, Bacolod City","Sumag ","1997-09-16","178","433-2449 local","Negros Occidental","Student","no philhealth","Reymund Sabay","0909442423","Registered","Pending","2017"); 
INSERT INTO patient VALUES("19","Jam Dientes","20","Female","safasfa","Tangub","1997-10-14","156","3213212","Negros Occidental","","","eqeq","321312","Registered","Pending","2017"); 
INSERT INTO patient VALUES("20","Juan Dela Cruz","20","Male","Blk. 11, Lot 22, Firmville Subd","Alangilan","1997-07-10","178","7136113","Negros Occidental","Student","No Philhealth","Dr. Haro","4332449","Registered","Pending","2017"); 
INSERT INTO patient VALUES("21","Aldren Yanson","23","Male","Prk. Casiana Bacolod City","Mandalagan","1995-02-07","178","7136113","Negros Occidental","Student","No Philhealth","Alvin Yanson","09952784676","Registered","Done","2017"); 
INSERT INTO patient VALUES("22","Mark Torres","21","Male","lizares ave. bacolod","Brgy 39","1997-07-28","178","4332449","Negros Occidental","Student","No Philhealth","Dr. Haro","433-2449","Registered","Pending","2017"); 
INSERT INTO patient VALUES("23","qe","7","Male","qweqweq","Banago","2017-11-07","31","31231","Negros Occidental","eqeqw","eqweq","qweqweq","31231","Registered","Pending","2017"); 
INSERT INTO patient VALUES("24","John Wick","43","Male","Blk 33, Lot 4, Firmville Subd. Bacolod","Estefania ","2017-12-27","125","4332449","Negros Occidental","Killer","10-3213131-98","Dr. Haro","433-2449 local 181","Registered","Pending","2017"); 
INSERT INTO patient VALUES("25","Kenneth Cayetano","20","Male","Bacolod City","Sumag ","1997-05-08","178","4332449","Negros Occidental","Student","10-2312321-10","Alvin Yanson","433-2449","Unregister","Pending","2017"); 
INSERT INTO patient VALUES("26","Dora Explorer","7","Female","qeqweqw","Banago","2011-08-24","123","4332449","Negros Occidental","Student","31321","Boots","433-2449","Registered","Pending","2018"); 



DROP TABLE patient_ipt;

CREATE TABLE `patient_ipt` (
  `patient_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `gender` char(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `province` varchar(30) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `emergency_no` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `status` char(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO patient_ipt VALUES("5","Alvin Yanson","3","0","Male","qwe","","","433-2449 local 181","2017-11-25","Registered","2017"); 
INSERT INTO patient_ipt VALUES("6","Carl Betio","3","0","Male","Taculing, Bacolod City","","","433-2449 local 181","2017-01-02","Registered","2017"); 
INSERT INTO patient_ipt VALUES("7","Franz Licanel","3","0","Male","unor bacolod","","","433-2449 local 181","2015-05-11","Registered","2017"); 
INSERT INTO patient_ipt VALUES("8","Juan Dela Cruz","3","0","Male","Blk. 11, Lot 5, Brgy. Estefania, Bacolod City","","","713-6113","2014-07-09","Registered","2017"); 
INSERT INTO patient_ipt VALUES("13","Jay Alvin Galoyo","3","0","Male","Bacolod City","","","433-2449","2015-07-07","Registered","2017"); 
INSERT INTO patient_ipt VALUES("14","Christan Plaza","5","0","Male","Bacolod City","","","433-2449","2017-12-29","Registered","2017"); 
INSERT INTO patient_ipt VALUES("15","Pedro Dela Cruz","2","0","Male","Bacolod City","","","433-2449","2017-12-29","Unregister","2017"); 
INSERT INTO patient_ipt VALUES("16","Dora the Explorer ","5","178","Male","Lizares Avenue, Bacolod City","","Dr. Sabay","433-2449","2012-04-11","Unregister","2017"); 
INSERT INTO patient_ipt VALUES("17","Boots","3","113","Male","Lizares Avenue Bacolod","Negros Occidental","Dora","433-2449","2014-06-18","Registered","2017"); 
INSERT INTO patient_ipt VALUES("18","Spongebob","2","111","Male","Firmville Subd., Bacolod City","Negros Occidental","Patrick and Mr. Crabs","433-2449","2015-03-10","Unregister","2018"); 



DROP TABLE registration;

CREATE TABLE `registration` (
  `tb_case_no` int(10) NOT NULL AUTO_INCREMENT,
  `registration_date` varchar(40) NOT NULL,
  `dots_facility` varchar(50) NOT NULL,
  `source_of_patient` varchar(50) NOT NULL,
  `registration_group` varchar(30) NOT NULL,
  `diagnosis` varchar(20) NOT NULL,
  `bacteriological_status` varchar(30) NOT NULL,
  `classification_of_tb` varchar(20) NOT NULL,
  `bcg_scar` char(8) NOT NULL,
  `history` varchar(10) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `treatment_regimen_category` varchar(30) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `year_ended` char(4) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tb_case_no`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO registration VALUES("26","November 25, 2017","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Alvin Yanson","Barangay Health Worker","Treatment Completed","2017","1","Nov","2017"); 
INSERT INTO registration VALUES("27","November 21, 2017","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Alson John Bayon-on","Nurse","Currently in Treatment","","2","Nov","2017"); 
INSERT INTO registration VALUES("28","November 21, 2017","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Clinically Diagnosed","Pulmonary","No","No","Less than 1 month","Category Ia - 2HRZE/10HR","Carl Betio","Nurse","Currently in Treatment","","6","Nov","2017"); 
INSERT INTO registration VALUES("29","November 21, 2017","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Gabriel banua","Nurse","Currently in Treatment","","7","Nov","2017"); 
INSERT INTO registration VALUES("30","November 25, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Clinically Diagnosed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Jal Alvin Galoyo","Nurse","Currently in Treatment","","3","Nov","2017"); 
INSERT INTO registration VALUES("31","November 31, 2017","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Erul John Ubas","Nurse","Currently in Treatment","","5","Nov","2017"); 
INSERT INTO registration VALUES("32","November 31, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Jemmel Dave Ano","Barangay Health Worker","Currently in Treatment","","9","Nov","2017"); 
INSERT INTO registration VALUES("33","November 30, 2017","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","1 month or more","Category Ia - 2HRZE/10HR","Miles Pallarco","Barangay Health Worker","Currently in Treatment","","10","Nov","2017"); 
INSERT INTO registration VALUES("34","November 30, 2017","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Daniel Molabin","Barangay Health Worker","Currently in Treatment","","11","Nov","2017"); 
INSERT INTO registration VALUES("35","November 31, 2017","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Clinically Diagnosed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Leonel Entes","Nurse","Currently in Treatment","","13","Nov","2017"); 
INSERT INTO registration VALUES("36","November 31, 2017","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Vincent Suyo","Nurse","Currently in Treatment","","12","Nov","2017"); 
INSERT INTO registration VALUES("37","November 31, 2017","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Clinically Diagnosed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Ivan Buglosa","Barangay Health Worker","Currently in Treatment","","8","Nov","2017"); 
INSERT INTO registration VALUES("38","December 1, 2017","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","Less than 1 month","Category Ia - 2HRZE/10HR","Hans Patrick Legislador","Nurse","Currently in Treatment","","16","Dec","2017"); 
INSERT INTO registration VALUES("39","December 1, 2017","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Brix Nessia","Nurse","Currently in Treatment","","14","Dec","2017"); 
INSERT INTO registration VALUES("40","December 1, 2017","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Exposior, for IPT","Clinically Diagnosed","Extra-pulmonary","No","No","1 month or more","Category Ia - 2HRZE/10HR","Nina Garcia","Nurse","Currently in Treatment","","15","Dec","2017"); 
INSERT INTO registration VALUES("41","December 2, 2017","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","Less than 1 month","Category Ia - 2HRZE/10HR","Joey Franco","Nurse","Currently in Treatment","","17","Oct","2017"); 
INSERT INTO registration VALUES("42","December 3, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Menard Gardose","Barangay Health Worker","Currently in Treatment","","18","Dec","2017"); 
INSERT INTO registration VALUES("43","December 6, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Mark Torres","Barangay Health Worker","Currently in Treatment","","19","Dec","2017"); 
INSERT INTO registration VALUES("44","December 14, 2017","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Arvi Capuras","Nurse","Currently in Treatment","","20","Dec","2017"); 
INSERT INTO registration VALUES("45","December 19, 2017","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Steven Saludares","Barangay Health Worker","Currently in Treatment","","21","Dec","2017"); 
INSERT INTO registration VALUES("46","December 24, 2017","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Jam Dientes","Nurse","Currently in Treatment","","22","Dec","2017"); 
INSERT INTO registration VALUES("47","December 27, 2017","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Alvin Yanson","Nurse","Currently in Treatment","","23","Dec","2017"); 
INSERT INTO registration VALUES("48","December 27, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Rommel Adricula","Barangay Health Worker","Currently in Treatment","","24","Dec","2017"); 
INSERT INTO registration VALUES("49","December 31, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Boots","Barangay Health Worker","Currently in Treatment","2018","26","Jan","2018"); 



DROP TABLE registration_ipt;

CREATE TABLE `registration_ipt` (
  `ipt_no` int(10) NOT NULL AUTO_INCREMENT,
  `date_evaluated` varchar(20) NOT NULL,
  `diagnosis` char(20) NOT NULL,
  `date_ipt_started` date NOT NULL,
  `source_of_patient` varchar(30) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `dots_facility` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`ipt_no`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO registration_ipt VALUES("1","2017-11-20","TB Infection","2017-11-26","Other Government Facilities","","","Bacolod City Health TB DOTS Center","5","2017"); 
INSERT INTO registration_ipt VALUES("2","2017-12-03","TB Infection","2017-12-03","Other Government Facilities","","","Bacolod City Health TB DOTS Center","6","2017"); 
INSERT INTO registration_ipt VALUES("3","2017-12-02","TB Infection","2017-12-02","Other Government Facilities","","","Bacolod City Health TB DOTS Center","7","2017"); 
INSERT INTO registration_ipt VALUES("4","2017-12-14","TB Exposure","2017-12-14","Other Government Facilities","","","Bacolod City Health TB DOTS Center","8","2017"); 
INSERT INTO registration_ipt VALUES("5","2017-10-31","TB Infection","2017-12-12","Other Government Facilities","","","Bacolod City Health TB DOTS Center","10","2017"); 
INSERT INTO registration_ipt VALUES("9","2017-12-21","TB Infection","2017-12-23","Other Government Facilities","","","Bacolod City Health TB DOTS Center","13","2017"); 
INSERT INTO registration_ipt VALUES("10","2017-12-29","TB Infection","2017-12-29","Public Health Center","Alec Rubiatio","Barangay Health Worker","Bacolod City Health TB DOTS Center","14","2017"); 
INSERT INTO registration_ipt VALUES("12","December 31, 2017","TB Infection","2017-12-31","Public Health Center","Dr. Haro","Barangay Health Worker","Bacolod City Health TB DOTS Center","17","2017"); 



DROP TABLE tb_culture_examination;

CREATE TABLE `tb_culture_examination` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tb_culture_examination VALUES("1","Method 1","1264","1265","2017-12-05","2017-12-05","Resistant","MTB detected","Dr. Torres","Dr. Torres","2017-12-06","1","Dec","2017"); 



DROP TABLE tst;

CREATE TABLE `tst` (
  `tst_id` int(10) NOT NULL AUTO_INCREMENT,
  `result` varchar(20) NOT NULL,
  `date_read` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tst_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tst VALUES("1","10 mm","2017-12-11","1","Dec","2017"); 
INSERT INTO tst VALUES("2","10 mm","2017-12-11","1","Dec","2017"); 
INSERT INTO tst VALUES("3","12 mm","2017-12-12","1","Dec","2017"); 
INSERT INTO tst VALUES("4","5 mm","2017-12-19","21","Dec","2017"); 
INSERT INTO tst VALUES("5","12 mm","2017-12-18","21","Dec","2017"); 
INSERT INTO tst VALUES("6","32 mm","2017-12-19","21","Dec","2017"); 
INSERT INTO tst VALUES("7","14","2017-12-19","21","Dec","2017"); 
INSERT INTO tst VALUES("8","23 mm","2017-12-27","1","Dec","2017"); 



DROP TABLE user;

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `license` char(20) NOT NULL,
  `position` char(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` char(8) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("40","Alson John","Bayon-on","132-131","Medical Technologist","alsonz","aTya03gHJdTyqLkWQfg15yUb31e3e4d864da1c761e4c8115745f801","Inactive"); 
INSERT INTO user VALUES("41","Admin","Alvin","","NTP Nurse Coordinator","admin","aTya03gHJdTyqLkWQfg15yU21232f297a57a5a743894a0e4a801fc3","Active"); 
INSERT INTO user VALUES("42","Gabriel","Banua","1231-1231","Medical Technologist","gabriel","aTya03gHJdTyqLkWQfg15yU647431b5ca55b04fdf3c2fce31ef1915","Active"); 



