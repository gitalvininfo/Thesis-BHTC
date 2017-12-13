DROP TABLE backup;

CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL AUTO_INCREMENT,
  `remarks` char(40) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("20","Successfully imported database","2017-12-12 09:31:01"); 
INSERT INTO backup VALUES("21","Successfully exported database","2017-12-12 16:31:06"); 
INSERT INTO backup VALUES("22","Successfully exported database","2017-12-13 00:20:41"); 
INSERT INTO backup VALUES("23","Successfully exported database","2017-12-13 14:48:17"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO clinical_findings VALUES("7","Saturday 25th of November 2017","45","Yes","Yes","Yes","Yes","No","Vomiting","2"); 
INSERT INTO clinical_findings VALUES("8","Tuesday 5th of December 2017","78","Yes","Yes","Yes","Yes","Yes","Abdominal Pain","7"); 
INSERT INTO clinical_findings VALUES("9","Tuesday 5th of December 2017","67","Yes","Yes","No","Yes","Yes","Numbness","2"); 
INSERT INTO clinical_findings VALUES("11","Saturday 9th of December 2017","67","Yes","Yes","Yes","Yes","Yes","Numbness","1"); 
INSERT INTO clinical_findings VALUES("12","Saturday 9th of December 2017","68","Yes","Yes","Yes","Yes","Yes","Joint Paints","1"); 
INSERT INTO clinical_findings VALUES("13","Saturday 9th of December 2017","89","No","No","No","No","No","Hearing Disturbance","1"); 
INSERT INTO clinical_findings VALUES("14","Saturday 9th of December 2017","56","Yes","Yes","Yes","Yes","Yes","Abdominal Pain","1"); 
INSERT INTO clinical_findings VALUES("15","December 9, 2017","67","Yes","Yes","Yes","Yes","Yes","Skin Rashes","7"); 
INSERT INTO clinical_findings VALUES("17","December 11, 2017","67","/","/","/","/","/","Joint Paints","6"); 
INSERT INTO clinical_findings VALUES("18","December 11, 2017","78","0","0","/","/","/","Numbness","1"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO clinical_findings_ipt VALUES("3","Saturday 25th of November 2017","56","Yes","Yes","Yes","Yes","Yes","Hearing Disturbance","1"); 



DROP TABLE continuation_phase;

CREATE TABLE `continuation_phase` (
  `continuation_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`continuation_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO continuation_phase VALUES("1","0","2017-11-22","Absent","1"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO cxr VALUES("2","TB Disease","2017-12-04","Alson","1","Dec","2017"); 
INSERT INTO cxr VALUES("3","TB Infection","2017-12-12","Leonel","1","Dec","2017"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO drug_preparations VALUES("1","Wednesday 29th of November 201","1","1","1","1","1","1"); 
INSERT INTO drug_preparations VALUES("2","Tuesday 5th of December 2017","12","12","12","12","12","6"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO dssm_examination VALUES("19","2017-11-25","1001","Salivary","","Good","","Positive","Dr. Haro","2017-11-22","2","Nov","2017"); 
INSERT INTO dssm_examination VALUES("20","2017-12-13","1064","Salivary","Salivary","Good","","Negative","Dr. Haro","2017-12-13","7","Dec","2017"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO dst_examination VALUES("1","12","12","2017-12-03","2017-12-03","Method 1","Resistant","Resistant","Resistant","Resistant","Resistant","Susceptible","Resistant","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Haro","2017-12-05","6","Dec","2017"); 



DROP TABLE examination_sched;

CREATE TABLE `examination_sched` (
  `sched_id` int(10) NOT NULL AUTO_INCREMENT,
  `examination_date` date NOT NULL,
  `status` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO examination_sched VALUES("1","2017-12-02","Pending","1"); 
INSERT INTO examination_sched VALUES("2","2017-11-01","Pending","1"); 
INSERT INTO examination_sched VALUES("3","2017-12-21","Pending","13"); 



DROP TABLE family_member;

CREATE TABLE `family_member` (
  `member_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `date_screened` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO family_member VALUES("5","Alvin Yanson","20","2017-12-11","1"); 
INSERT INTO family_member VALUES("6","Jyth Jerundio","21","2017-12-11","10"); 
INSERT INTO family_member VALUES("7","Carl Betio","20","2017-12-11","1"); 
INSERT INTO family_member VALUES("8","Sample Member","30","2017-12-11","1"); 



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

INSERT INTO gene_expert_examination VALUES("1","2017-11-26","12","Good","Good","Dr. Haro","2017-11-26","TI","1","Nov","2017"); 
INSERT INTO gene_expert_examination VALUES("2","2017-12-06","1256","Salivary","wwwere","Dr","2017-12-06","T","19","Dec","2017"); 
INSERT INTO gene_expert_examination VALUES("3","2017-12-13","1065","Salivary","Good","Dr. Haro","2017-12-13","RR","11","Dec","2017"); 



DROP TABLE intensive_phase;

CREATE TABLE `intensive_phase` (
  `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`intensive_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO intensive_phase VALUES("9","97","2017-11-25","Present","1"); 



DROP TABLE intensive_phase_ipt;

CREATE TABLE `intensive_phase_ipt` (
  `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` int(10) NOT NULL,
  `date_taken` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`intensive_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO intensive_phase_ipt VALUES("1","100","2017-11-24","Present","1"); 
INSERT INTO intensive_phase_ipt VALUES("2","0","2017-11-24","Absent","1"); 
INSERT INTO intensive_phase_ipt VALUES("3","0","2017-11-25","Absent","1"); 
INSERT INTO intensive_phase_ipt VALUES("4","0","2017-11-25","Absent","1"); 
INSERT INTO intensive_phase_ipt VALUES("5","67","2017-11-23","Present","1"); 
INSERT INTO intensive_phase_ipt VALUES("6","12","2017-12-20","Present","7"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

INSERT INTO laboratory_request VALUES("68","Mandalagan Health Center","2017-11-26","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-27","2017-11-28","Dr. Haro","433-2449","DSSM","2","Done","2017"); 
INSERT INTO laboratory_request VALUES("69","Banago Health Center","2017-11-25","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-25","2017-11-25","Dr. Haro","433-2449","Xpert MTB/RIF","1","Done","2017"); 
INSERT INTO laboratory_request VALUES("70","Mandalagan Health Center","2017-11-26","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-26","2017-11-27","Dr. Haro","433-2449","DSSM","2","Pending","2017"); 
INSERT INTO laboratory_request VALUES("71","Sum-ag Health Center","2017-11-27","Dr. Sabay","Diagnostic","Sputum","No","2017-11-26","2017-11-26","Dr. Sabay","433-2449","DSSM","3","Pending","2017"); 
INSERT INTO laboratory_request VALUES("72","Bata Health Center","2017-11-28","Dr. Sabay","Diagnostic","Sputum","Yes","2017-11-21","2017-11-21","Dr. Haro","433-2449","DSSM","7","Done","2017"); 
INSERT INTO laboratory_request VALUES("73","Sum-ag Health Center","2017-11-21","Wqeq","Diagnostic","Sputum","Yes","2017-11-28","2017-11-28","qweq","1231","DSSM","0","Pending","2017"); 
INSERT INTO laboratory_request VALUES("74","Sum-ag Health Center","2017-11-22","2131","Diagnostic","Sputum","Yes","2017-11-14","2017-11-14","qeqw","1231","DSSM","7","Pending","2017"); 
INSERT INTO laboratory_request VALUES("75","Banago Health Center","2017-12-03","Dr. haro","Diagnostic","Sputum","Yes","2017-12-03","2017-12-03","Dr. haro","433-2449","Drug Susceptible Testing","6","Done","2017"); 
INSERT INTO laboratory_request VALUES("76","Banago Health Center","2017-12-06","Dr. Sabay","Baseline","Sputum","Yes","2017-12-04","2017-12-04","Dr. Adricula","713-6113","TB Culture","1","Done","2017"); 
INSERT INTO laboratory_request VALUES("77","Taculing Health Center","2017-12-06","Dr. Torres","Diagnostic","Sputum","Yes","2017-12-04","2017-12-05","sadsa","42432","Xpert MTB/RIF","19","Done","2017"); 
INSERT INTO laboratory_request VALUES("78","Bata Health Center","2017-12-12","Dr. Sabay","Follow-up","Sputum","Yes","2017-12-12","2017-12-12","Dr. Haro","433-2449","Xpert MTB/RIF","11","Done","2017"); 



DROP TABLE medication_dispensation;

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL AUTO_INCREMENT,
  `health_center` varchar(50) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `date_given` date NOT NULL,
  `quantity` int(10) NOT NULL,
  `received_by` varchar(30) NOT NULL,
  PRIMARY KEY (`dispensation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("1","Banago Barangay Health Station","Isoniazid","2017-11-25","50","Dr. Haro"); 
INSERT INTO medication_dispensation VALUES("2","Alijis Barangay Health Station","name","2017-11-29","10","Menard Gardose"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `running_balance` int(10) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Isoniazid","This is Isoniazid","128"); 
INSERT INTO medicine VALUES("2","name","nameolekfkldf","15"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("1","Isoniazid","100","2017-11-25 20:52:15"); 
INSERT INTO medicine_stocks VALUES("2","name","12","2017-11-29 20:11:39"); 
INSERT INTO medicine_stocks VALUES("3","name","13","2017-11-29 20:12:42"); 
INSERT INTO medicine_stocks VALUES("4","Isoniazid","78","2017-12-11 23:04:56"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("1","Alson John Bayon-on","123","Female","Prk. Langis, Brgy. Banago, Bacolod City","Banago","2017-11-25","178","433-2449","Negros Occidental","Drug Lord","10992241","Dr. Sabay","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("2","Alvin Yanson","20","Male","eroreco bacolod city","Mandalagan","2017-01-08","178","433-2449","Negros Occidental","Student","1993121","Dr. Haro","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("3","Erul John Ubas","21","Male","Sum-ag, Bacolod City","Sumag ","2017-03-13","178","433-2449 local","Negros Occidental","","","Dr. Adricula","433-2449 local 181","Registered","Pending","2017"); 
INSERT INTO patient VALUES("5","Gabriel Francis Banua","22","Male","Taculing, Bacolod City","Taculing","2017-10-29","178","433-2449","Negros Occidental","","","Dr. Sabay","433-2449","Registered","Pending","2017"); 
INSERT INTO patient VALUES("6","Alec Rubiato","20","Male","Banago, Bacolod City","Banago","2016-12-25","174","433-2449","Negros Occidental","","","Dr. Torres","433-2449","Registered","Done","2017"); 
INSERT INTO patient VALUES("7","Daniel Molabin","20","Male","Lizares Avenue","Felisa","2017-10-29","168","433-2449","Negros Occidental","","","Dr. Haro","433-2449 local 181","Registered","Pending","2017"); 
INSERT INTO patient VALUES("8","Vincen Suyo","20","Male","My Address","Pahanocoy","2017-10-29","178","433-2449","Negros Occidental","","","qwe","1312","Registered","Pending","2017"); 
INSERT INTO patient VALUES("9","Brix Nessia","22","Male","My Address","Mandalagan","2017-10-30","178","12312","Negros Occidental","","","qweqw","12313","Registered","Pending","2017"); 
INSERT INTO patient VALUES("10","Hans Patrick Legislador","22","Male","My Address","Mandalagan","2017-10-30","178","12321","Negros Occidental","","","eqewq","1231","Registered","Pending","2017"); 
INSERT INTO patient VALUES("11","Ivan Buglosa","22","Male","My Address","Granada ","2017-10-30","178","433-2494","Negros Occidental","","","qewq","12","Registered","Pending","2017"); 
INSERT INTO patient VALUES("12","Steven Saludares","20","Male","","Handumanan","2017-10-30","178","123","Negros Occidental","student","no philhealth","eqweqw","12","Registered","Pending","2017"); 
INSERT INTO patient VALUES("13","Menard Gardose","10","Male","My Address","Tangub","2017-10-29","178","3123","Negros Occidental","","","wqeqw","2131","Registered","Pending","2017"); 
INSERT INTO patient VALUES("14","qw","12","Male","wqew","Bata","2017-11-20","1231","1231","Negros Occidental","","","eqeqw","132","Registered","Pending","2017"); 
INSERT INTO patient VALUES("15","qwe","21","Male","tga banago","Brgy 38","2017-11-26","12","232","Negros Occidental","","","wqeq","123","Registered","Pending","2017"); 
INSERT INTO patient VALUES("16","zx","23","Female","qweq","Brgy 14","2017-11-26","12","433-2449","Negros Occidental","","","qwe","123","Registered","Pending","2017"); 
INSERT INTO patient VALUES("17","Jemmel Ano","12","Male","Singcang","Singcang","1997-03-19","178","433-2449 local","Negros Occidental","Student lng ah","","Dr. Sabay","433-2449 local","Registered","Pending","2017"); 
INSERT INTO patient VALUES("18","Jal Alvin Galoyo","20","Male","Sum-ag, Bacolod City","Sumag ","1997-09-16","178","433-2449 local","Negros Occidental","Student","no philhealth","Reymund Sabay","0909442423","Registered","Pending","2017"); 
INSERT INTO patient VALUES("19","Jam Dientes","20","Female","safasfa","Tangub","1997-10-14","156","3213212","Negros Occidental","","","eqeq","321312","Registered","Pending","2017"); 



DROP TABLE patient_ipt;

CREATE TABLE `patient_ipt` (
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO patient_ipt VALUES("5","Alvin Yanson","3","Male","qwe","433-2449 local 181","2017-11-25","Registered","Pending","2017"); 
INSERT INTO patient_ipt VALUES("6","Carl Betio","3","Male","Taculing, Bacolod City","433-2449 local 181","2017-01-02","Registered","Pending","2017"); 
INSERT INTO patient_ipt VALUES("7","Franz Licanel","3","Male","unor bacolod","433-2449 local 181","2015-05-11","Registered","Pending","2017"); 



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
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tb_case_no`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO registration VALUES("26","2017-11-25","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","Yes","Yes","Less than 1 month","1","Nov","2017"); 
INSERT INTO registration VALUES("27","2017-11-25","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","2","Nov","2017"); 
INSERT INTO registration VALUES("28","0000-00-00","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Clinically Diagnosed","Pulmonary","No","No","Less than 1 month","6","Nov","2017"); 
INSERT INTO registration VALUES("29","0000-00-00","Bacolod City Health TB DOTS Center","Community","Transfer-in","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","Yes","Less than 1 month","7","Nov","2017"); 
INSERT INTO registration VALUES("30","0000-00-00","Bacolod City Health TB DOTS Center","Public Health Center","Treatment After Failure","TB Disease","Clinically Diagnosed","Pulmonary","Yes","Yes","Less than 1 month","3","Nov","2017"); 
INSERT INTO registration VALUES("31","0000-00-00","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","5","Nov","2017"); 
INSERT INTO registration VALUES("32","0000-00-00","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","9","Nov","2017"); 
INSERT INTO registration VALUES("33","0000-00-00","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","1 month or more","10","Nov","2017"); 
INSERT INTO registration VALUES("34","0000-00-00","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","11","Nov","2017"); 
INSERT INTO registration VALUES("35","0000-00-00","Bacolod City Health TB DOTS Center","Community","TALF","TB Disease","Clinically Diagnosed","Extra-pulmonary","Yes","Yes","Less than 1 month","13","Nov","2017"); 
INSERT INTO registration VALUES("36","0000-00-00","Bacolod City Health TB DOTS Center","Public Health Center","PTOU","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","12","Nov","2017"); 
INSERT INTO registration VALUES("37","0000-00-00","Bacolod City Health TB DOTS Center","Other Government Facilities","Transfer-in","TB Disease","Clinically Diagnosed","Extra-pulmonary","Yes","Yes","Less than 1 month","8","Nov","2017"); 
INSERT INTO registration VALUES("38","December 1, 2017 | Friday","Bacolod City Health TB DOTS Center","Private Hospitals","Others","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","Less than 1 month","16","Dec","2017"); 
INSERT INTO registration VALUES("39","December 1, 2017 | Friday","Bacolod City Health TB DOTS Center","Other Government Facilities","PTOU","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","14","Dec","2017"); 
INSERT INTO registration VALUES("40","December 1, 2017 | Friday","Bacolod City Health TB DOTS Center","Private Hospitals","TALF","TB Exposior, for IPT","Clinically Diagnosed","Extra-pulmonary","No","No","1 month or more","15","Dec","2017"); 
INSERT INTO registration VALUES("41","December 2, 2017 | Saturd","Bacolod City Health TB DOTS Center","Community","TALF","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","Less than 1 month","17","Oct","2017"); 
INSERT INTO registration VALUES("42","December 3, 2017 | Sunday","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","18","Dec","2017"); 
INSERT INTO registration VALUES("43","December 6, 2017 | Wednesday","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","19","Dec","2017"); 



DROP TABLE registration_ipt;

CREATE TABLE `registration_ipt` (
  `ipt_no` int(10) NOT NULL AUTO_INCREMENT,
  `date_evaluated` date NOT NULL,
  `diagnosis` char(20) NOT NULL,
  `date_ipt_started` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`ipt_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO registration_ipt VALUES("1","2017-11-20","TB Infection","2017-11-26","5","2017"); 
INSERT INTO registration_ipt VALUES("2","2017-12-03","TB Infection","2017-12-03","6","2017"); 
INSERT INTO registration_ipt VALUES("3","2017-12-02","TB Infection","2017-12-02","7","2017"); 



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



DROP TABLE treatment_record;

CREATE TABLE `treatment_record` (
  `treatment_id` int(10) NOT NULL AUTO_INCREMENT,
  `treatment_regimen_category` varchar(30) NOT NULL,
  `weight` int(3) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `date_treatment_started` date NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`treatment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO treatment_record VALUES("1","Category I - 2HRZE/4HR","89","Dr. Haro","BHW","2017-11-16","Done","44"); 
INSERT INTO treatment_record VALUES("2","Category I - 2HRZE/4HR","56","Dr. Sabay","BHW","2017-11-24","Done","1"); 
INSERT INTO treatment_record VALUES("3","Category I - 2HRZE/4HR","45","Dr. Haro","BHW","2017-12-10","Done","2"); 
INSERT INTO treatment_record VALUES("4","Category II - 2HRZES/1HRZE/5HR","34","eqeq","eqeq","2017-12-05","Done","6"); 



DROP TABLE tst;

CREATE TABLE `tst` (
  `tst_id` int(10) NOT NULL AUTO_INCREMENT,
  `result` varchar(20) NOT NULL,
  `date_read` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tst_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tst VALUES("1","10 mm","2017-12-11","1","Dec","2017"); 
INSERT INTO tst VALUES("2","10 mm","2017-12-11","1","Dec","2017"); 
INSERT INTO tst VALUES("3","12 mm","2017-12-12","1","Dec","2017"); 



DROP TABLE user;

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `license` char(20) NOT NULL,
  `position` char(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("22","Dummy","Account","","NTP Nurse Coordinator","nurse","HAHAHAHAHA0701aa317da5a004fbf6111545678a6c"); 
INSERT INTO user VALUES("31","Gabriel","Banua","213931","Medical Technologist","gab","HAHAHAHAHA639bee393eecbc62256936a8e64d17b1"); 
INSERT INTO user VALUES("32","Menard","Gardose","1243443","Medical Technologist","menard","HAHAHAHAHA9f5ab0cd889e06d101d3e45e0296ed23"); 
INSERT INTO user VALUES("33","Sample","Sample","12319","Medical Technologist","sample","HAHAHAHAHA5e8ff9bf55ba3508199d22e984129be6"); 
INSERT INTO user VALUES("34","Alson John","Bayon-on","12324","Medical Technologist","alsonz","HAHAHAHAHAb31e3e4d864da1c761e4c8115745f801"); 
INSERT INTO user VALUES("35","Leonel","Entes","9832-32","Medical Technologist","medtech","HAHAHAHAHAda2550f00907e1601628524200439e35"); 



