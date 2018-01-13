DROP TABLE backup;

CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL AUTO_INCREMENT,
  `remarks` char(40) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

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
INSERT INTO backup VALUES("104","Successfully imported database","January 3, 2018, 7:56 pm"); 
INSERT INTO backup VALUES("105","Successfully imported database","January 4, 2018, 12:19 am"); 
INSERT INTO backup VALUES("106","Successfully imported database","January 5, 2018, 2:52 pm"); 
INSERT INTO backup VALUES("107","Successfully imported database","January 5, 2018, 3:25 pm"); 
INSERT INTO backup VALUES("108","Successfully imported database","January 6, 2018, 12:21 am"); 
INSERT INTO backup VALUES("109","Successfully imported database","January 7, 2018, 2:16 am"); 
INSERT INTO backup VALUES("110","Successfully imported database","January 7, 2018, 11:27 pm"); 
INSERT INTO backup VALUES("111","Successfully imported database","January 9, 2018, 12:38 am"); 
INSERT INTO backup VALUES("112","Successfully exported database","January 11, 2018, 1:23 am"); 
INSERT INTO backup VALUES("113","Successfully imported database","January 12, 2018, 1:09 am"); 
INSERT INTO backup VALUES("114","Successfully imported database","January 12, 2018, 8:55 am"); 
INSERT INTO backup VALUES("115","Successfully imported database","January 13, 2018, 12:43 am"); 
INSERT INTO backup VALUES("116","Successfully imported database","January 14, 2018, 1:30 am"); 
INSERT INTO backup VALUES("117","Successfully imported database","January 14, 2018, 1:30 am"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

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
INSERT INTO clinical_findings VALUES("30","January 7, 2018","45","✓","✓","✓","0","✓","Joint Paints","2"); 
INSERT INTO clinical_findings VALUES("31","January 7, 2018","34","✓","✓","✓","✓","✓","Vomiting","6"); 
INSERT INTO clinical_findings VALUES("32","January 7, 2018","67","✓","✓","✓","✓","✓","Visual Disturbance","6"); 
INSERT INTO clinical_findings VALUES("33","January 7, 2018","67","0","0","✓","✓","✓","Skin Rashes","6"); 
INSERT INTO clinical_findings VALUES("34","January 7, 2018","67","0","0","✓","✓","✓","Joint Paints","6"); 
INSERT INTO clinical_findings VALUES("35","January 7, 2018","67","0","0","✓","✓","✓","Numbness","6"); 
INSERT INTO clinical_findings VALUES("36","January 7, 2018","67","✓","✓","✓","✓","✓","Abnormal Pain","3"); 
INSERT INTO clinical_findings VALUES("37","January 7, 2018","67","✓","✓","✓","✓","✓","Joint Paints","3"); 
INSERT INTO clinical_findings VALUES("38","January 7, 2018","78","0","0","✓","✓","✓","Skin Rashes","3"); 
INSERT INTO clinical_findings VALUES("39","January 7, 2018","78","0","0","✓","✓","✓","Skin Rashes","3"); 
INSERT INTO clinical_findings VALUES("40","January 7, 2018","78","0","0","✓","✓","✓","Vomiting","3"); 
INSERT INTO clinical_findings VALUES("41","January 7, 2018","78","0","0","✓","✓","✓","Abnormal Pain","3"); 
INSERT INTO clinical_findings VALUES("42","January 7, 2018","67","✓","✓","0","✓","0","","5"); 
INSERT INTO clinical_findings VALUES("43","","0","","","","","","Itchiness","0"); 
INSERT INTO clinical_findings VALUES("44","","0","","","","","","Skin Rashes","0"); 
INSERT INTO clinical_findings VALUES("45","January 7, 2018","67","✓","✓","0","✓","0","","5"); 
INSERT INTO clinical_findings VALUES("46","","0","","","","","","Itchiness","0"); 
INSERT INTO clinical_findings VALUES("47","","0","","","","","","Skin Rashes","0"); 
INSERT INTO clinical_findings VALUES("48","January 7, 2018","56","✓","0","✓","✓","✓","Skin Rashes","10"); 
INSERT INTO clinical_findings VALUES("49","January 7, 2018","78","✓","0","✓","✓","0","Itchiness","10"); 
INSERT INTO clinical_findings VALUES("50","January 7, 2018","78","✓","0","✓","✓","0","Abnormal Pain","10"); 
INSERT INTO clinical_findings VALUES("51","January 7, 2018","45","✓","✓","✓","✓","✓","Numbness","9"); 
INSERT INTO clinical_findings VALUES("52","January 7, 2018","89","✓","✓","✓","✓","✓","Itchiness,Skin Rashes,","13"); 
INSERT INTO clinical_findings VALUES("53","January 7, 2018","56","✓","✓","0","✓","✓","Yellowing of Sclerae and skin,Visual Disturbance,Hearing Disturbance,","2"); 
INSERT INTO clinical_findings VALUES("54","January 12, 2018","77","✓","✓","✓","✓","✓","Itchiness,Skin Rashes,Vomiting,","5"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO dssm_examination VALUES("19","2017-11-25","1001","Salivary","","Good","Good","Positive (+)","Dr. Haro","2017-11-22","2","Nov","2017"); 
INSERT INTO dssm_examination VALUES("20","2017-12-13","1064","Salivary","Salivary","Good","Good","Negative (0)","Dr. Haro","2017-12-13","7","Dec","2017"); 
INSERT INTO dssm_examination VALUES("21","2017-12-19","12","Muco-Purulent","Muco-Purulent","Good","Good","Positive (+)","Dr. Haro","2017-12-19","21","Dec","2017"); 
INSERT INTO dssm_examination VALUES("22","2017-12-13","1089","Salivary","Muco-Purulent","Good","Good","Positive (+)","Dr. Haro","2017-12-13","2","Dec","2017"); 
INSERT INTO dssm_examination VALUES("23","2018-01-17","123","Salivary","Salivary","good","","Positive (+)","Dr. Haro","2018-01-18","6","Jan","2018"); 
INSERT INTO dssm_examination VALUES("24","2018-01-17","2312","Salivary","Salivary","323","","Negative (0)","Dr. Haro","2018-01-05","7","Jan","2018"); 
INSERT INTO dssm_examination VALUES("25","2018-01-05","1065","Salivary","Salivary","Ok lng","","Positive (+)","Rommel Adricula","2018-01-07","3","Jan","2018"); 
INSERT INTO dssm_examination VALUES("26","2018-01-08","123","Salivary","Salivary","tubbol","","Positive (+)","mr.igit","2018-01-10","9","Jan","2018"); 
INSERT INTO dssm_examination VALUES("27","2018-01-12","1067","Muco-Purulent","Muco-Purulent","Good","","Positive (+)","Carl Betio","2018-01-12","2","Jan","2018"); 
INSERT INTO dssm_examination VALUES("28","2018-01-04","2211","Muco-Purulent","Muco-Purulent","Good","Good","Negative (0)","Alvin Yanson","2018-01-12","21","Jan","2018"); 
INSERT INTO dssm_examination VALUES("36","2018-01-17","12","Salivary","Salivary","good lng","good lng","Positive (+)","qweq","2018-01-10","17","Jan","2018"); 
INSERT INTO dssm_examination VALUES("37","2018-01-10","12","Salivary","Salivary","qwe","qwe","Negative (0)","Alvin Yanson","2018-01-10","18","Jan","2018"); 
INSERT INTO dssm_examination VALUES("38","0000-00-00","","","","","","","","0000-00-00","13","Jan","2018"); 
INSERT INTO dssm_examination VALUES("39","2018-01-17","90","Blood-Stained","Muco-Purulent","Good lng","Good c menard","Negative (0)","Carl Bets","2018-01-12","13","Jan","2018"); 
INSERT INTO dssm_examination VALUES("40","2018-01-10","12","Salivary","Muco-Purulent","Good lng c mark","Good lng c mark","Positive (+)","Alvin Yanson","2018-01-10","22","Jan","2018"); 
INSERT INTO dssm_examination VALUES("41","2018-01-06","34","Salivary","Salivary","Ako nisa","Ako nisa","Positive (+)","Alvin Yanson","2018-01-10","8","Jan","2018"); 
INSERT INTO dssm_examination VALUES("42","2018-01-24","12","Muco-Purulent","Muco-Purulent","Good lng","Good","Positive (+)","Alvin","2018-01-10","0","Jan","2018"); 
INSERT INTO dssm_examination VALUES("43","2018-01-25","12","Muco-Purulent","Muco-Purulent","eqw","eqeq","Positive (+)","eqe","2018-01-03","0","Jan","2018"); 
INSERT INTO dssm_examination VALUES("44","2018-01-17","1232","Salivary","Muco-Purulent","qweq","qweq","Positive (+)","qweq","2018-01-17","20","Jan","2018"); 
INSERT INTO dssm_examination VALUES("45","2018-01-12","102","Salivary","Salivary","Ok lng","Ok gd","Positive (+)","Dr. Alvin","2018-01-12","5","Jan","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO dst_examination VALUES("1","12","12","2017-12-03","2017-12-03","Method 1","Resistant","Resistant","Resistant","Resistant","Resistant","Susceptible","Resistant","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Haro","2017-12-05","6","Dec","2017"); 
INSERT INTO dst_examination VALUES("2","12","12","2017-12-12","2017-12-12","Method 1","Susceptible","Resistant","Resistant","Resistant","Resistant","Susceptible","Susceptible","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Adricula","2017-12-20","1","Dec","2017"); 
INSERT INTO dst_examination VALUES("3","12","12","2018-01-10","2018-01-03","Method 3","Resistant","Susceptible","Resistant","Resistant","Susceptible","Resistant","Susceptible","Susceptible","Resistant","Alvin Yanson","Good lng","Alvin Yanson","2018-01-10","12","Jan","2018"); 
INSERT INTO dst_examination VALUES("4","104","201","2018-01-10","2018-01-13","Method 3","Resistant","Susceptible","Susceptible","Resistant","Resistant","Resistant","Susceptible","Resistant","Susceptible","Dora the Explorer","Ok lng","Dora the Explorer","2018-01-13","20","Jan","2018"); 



DROP TABLE family_member;

CREATE TABLE `family_member` (
  `member_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `date_screened` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO family_member VALUES("5","Alvin Yanson","20","2017-12-11","1"); 
INSERT INTO family_member VALUES("6","Jyth Jerundio","21","2017-12-11","10"); 
INSERT INTO family_member VALUES("7","Carl Betio","20","2017-12-11","1"); 
INSERT INTO family_member VALUES("8","Sample Member","30","2017-12-11","1"); 
INSERT INTO family_member VALUES("9","Christan Plaza","20","2017-12-18","6"); 
INSERT INTO family_member VALUES("10","Alvin Yanson","20","2017-12-18","21"); 
INSERT INTO family_member VALUES("11","Sample Member","21","2017-12-11","21"); 
INSERT INTO family_member VALUES("12","Carl Betio","20","2017-12-27","2"); 
INSERT INTO family_member VALUES("13","Gabriel Banua","20","2017-12-27","1"); 
INSERT INTO family_member VALUES("14","Boots","12","2018-01-04","26"); 



DROP TABLE follow_up;

CREATE TABLE `follow_up` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO follow_up VALUES("7","2018-01-08","may klase na...","2"); 
INSERT INTO follow_up VALUES("15","2018-01-17","Alson","1"); 
INSERT INTO follow_up VALUES("16","2018-01-03","Alson gg","1"); 
INSERT INTO follow_up VALUES("17","0000-00-00","Alvin","2"); 
INSERT INTO follow_up VALUES("18","0000-00-00","Adasdsdfs","2"); 
INSERT INTO follow_up VALUES("19","0000-00-00","dasdadsa","2"); 
INSERT INTO follow_up VALUES("20","0000-00-00","wqeqeqeqwq","2"); 
INSERT INTO follow_up VALUES("21","2018-01-09","weqewewq","6"); 
INSERT INTO follow_up VALUES("22","2018-01-11","dpota ni nga follow-up","6"); 
INSERT INTO follow_up VALUES("23","2018-02-09","For Follow-up of DSSM...","3"); 
INSERT INTO follow_up VALUES("24","2018-01-18","For follow up","13"); 
INSERT INTO follow_up VALUES("25","2018-01-22","WTF","7"); 
INSERT INTO follow_up VALUES("26","2018-01-31","For follow-up","10"); 
INSERT INTO follow_up VALUES("27","2018-02-14","For follow-up","9"); 



DROP TABLE follow_up_ipt;

CREATE TABLE `follow_up_ipt` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO follow_up_ipt VALUES("1","2018-01-10","Balik ka d amu ni nga date","5"); 
INSERT INTO follow_up_ipt VALUES("2","2018-01-03","Balik ka d boots...","17"); 
INSERT INTO follow_up_ipt VALUES("3","2018-02-01","Balik ka d sa TB DOTS...","5"); 
INSERT INTO follow_up_ipt VALUES("4","2018-02-14","dpota ka nga boots fuck you!","17"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO gene_expert_examination VALUES("1","2017-11-26","12","Good","Good","Dr. Haro","2017-11-26","T","1","Nov","2017"); 
INSERT INTO gene_expert_examination VALUES("2","2017-12-06","1256","Salivary","wwwere","Dr","2017-12-06","TI","19","Dec","2017"); 
INSERT INTO gene_expert_examination VALUES("3","2017-12-13","1065","Salivary","Good","Dr. Haro","2017-12-13","RR","11","Dec","2017"); 
INSERT INTO gene_expert_examination VALUES("4","2018-01-04","1064","Salivary","Good","Boots","2018-01-04","T","26","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("5","2018-01-06","1064","Salivary","Ok","Arianne Torres","2018-01-05","T","26","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("6","2018-01-04","1064","Salivary","Ok lng","Jay Alvin Galoyo","2018-01-05","T","7","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("7","2018-01-10","12","Salivary","qweq","wqeqw","2018-01-10","TI","21","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("8","2018-01-02","12","Salivary","sdsds","gabriel","2018-01-02","RR","2","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("9","2018-01-12","1090","Muco-Purulent","0","Alvin Yanson","2018-01-09","T","3","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("10","0000-00-00","","","","","0000-00-00","","9","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("11","2018-01-10","78","Salivary","Good","Dr Hans","2018-01-17","RR","6","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("12","2018-01-12","100","Muco-Purulent","Ok lng c vincent","Dr. Leonel Entes","2018-01-12","T","8","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("13","2018-01-12","102","Muco-Purulent","May TB ka","Dr. Alvin","2018-01-12","T","12","Jan","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

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
INSERT INTO intensive_phase VALUES("53","50","January","8","2018","Present","2"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO intensive_phase_ipt VALUES("1","34","December","29","2017","Present","9"); 



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
  `designation` varchar(30) NOT NULL,
  `test_requested` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `status` char(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`lab_request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

INSERT INTO laboratory_request VALUES("68","Mandalagan Health Center","2017-11-26","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-27","2017-11-28","Dr. Haro","433-2449","DSSM","2","Done","2017"); 
INSERT INTO laboratory_request VALUES("69","Banago Health Center","2017-11-25","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-25","2017-11-25","Dr. Haro","433-2449","Xpert MTB/RIF","1","Done","2017"); 
INSERT INTO laboratory_request VALUES("70","Mandalagan Health Center","2017-11-26","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-26","2017-11-27","Dr. Haro","433-2449","DSSM","2","Done","2017"); 
INSERT INTO laboratory_request VALUES("71","Sum-ag Health Center","2017-11-27","Dr. Sabay","Diagnostic","Sputum","No","2017-11-26","2017-11-26","Dr. Sabay","433-2449","DSSM","3","Done","2017"); 
INSERT INTO laboratory_request VALUES("72","Bata Health Center","2017-11-28","Dr. Sabay","Diagnostic","Sputum","Yes","2017-11-21","2017-11-21","Dr. Haro","433-2449","DSSM","7","Done","2017"); 
INSERT INTO laboratory_request VALUES("74","Sum-ag Health Center","2017-11-22","2131","Diagnostic","Sputum","Yes","2017-11-14","2017-11-14","qeqw","1231","DSSM","7","Done","2017"); 
INSERT INTO laboratory_request VALUES("75","Banago Health Center","2017-12-03","Dr. haro","Diagnostic","Sputum","Yes","2017-12-03","2017-12-03","Dr. haro","433-2449","Drug Susceptible Testing","6","Done","2017"); 
INSERT INTO laboratory_request VALUES("76","Banago Health Center","2017-12-06","Dr. Sabay","Baseline","Sputum","Yes","2017-12-04","2017-12-04","Dr. Adricula","713-6113","TB Culture","1","Done","2017"); 
INSERT INTO laboratory_request VALUES("77","Taculing Health Center","2017-12-06","Dr. Torres","Diagnostic","Sputum","Yes","2017-12-04","2017-12-05","sadsa","42432","Xpert MTB/RIF","19","Done","2017"); 
INSERT INTO laboratory_request VALUES("78","Bata Health Center","2017-12-12","Dr. Sabay","Follow-up","Sputum","Yes","2017-12-12","2017-12-12","Dr. Haro","433-2449","Xpert MTB/RIF","11","Done","2017"); 
INSERT INTO laboratory_request VALUES("79","Sum-ag Health Center","2017-12-12","Dr. Haro","Diagnostic","Sputum","Yes","2017-12-12","2017-12-12","Dr. Haro","433-2449","DSSM","9","Done","2017"); 
INSERT INTO laboratory_request VALUES("80","Banago Health Center","2017-12-13","Dr. Sabay","Diagnostic","Sputum","Yes","2017-12-12","2017-12-13","Dr. Adricula","433-2449 local","Drug Susceptible Testing","1","Done","2017"); 
INSERT INTO laboratory_request VALUES("81","Mandalagan Health Center","2017-12-18","Dr. Haro","Diagnostic","Sputum","Yes","2017-12-18","2017-12-18","Dr. Haro","433-2449 local","DSSM","21","Done","2017"); 
INSERT INTO laboratory_request VALUES("82","Mandalagan Health Center","2017-12-18","Dr. Harp","Follow-up","Sputum","Yes","2017-12-18","2017-12-18","Dr. Adricula","433-2449 local","DSSM","21","Done","2017"); 
INSERT INTO laboratory_request VALUES("83","Banago Health Center","2017-12-11","Dr. Sabay","Diagnostic","Sputum","Yes","2017-12-12","2017-12-13","Dr. Haro","433-2449 local","DSSM","2","Done","2017"); 
INSERT INTO laboratory_request VALUES("84","Sum-ag Health Center","2017-12-05","Dr. Haro","Diagnostic","Sputum","Yes","2017-12-12","2017-12-12","Dr. Haro","433-2449","Xpert MTB/RIF","21","Done","2017"); 
INSERT INTO laboratory_request VALUES("85","Alangilan Barangay Health Station","2018-01-04","Swiper ","Diagnostic","Sputum","Yes","2018-01-01","2018-01-01","Alvin Yanson","713-6113","Xpert MTB/RIF","26","Done","2018"); 
INSERT INTO laboratory_request VALUES("86","Banago Barangay Health Station","2018-01-05","Dr. Haro","Diagnostic","Sputum","Yes","2018-01-17","2018-01-17","Dr. Haro","433-2449","DSSM","6","Done","2018"); 
INSERT INTO laboratory_request VALUES("87","Estefania Barangay Health Station","2018-01-06","Rommel Adricula","Diagnostic","Sputum","Yes","2018-01-01","2018-01-02","Reymund Sabay","433-2449","Xpert MTB/RIF","26","Done","2018"); 
INSERT INTO laboratory_request VALUES("88","Alijis Barangay Health Station","2018-01-04","Rommel Adricula","Diagnostic","Sputum","Yes","2018-01-05","2018-01-05","Reymund Sabay","433-2449","Xpert MTB/RIF","7","Done","2018"); 
INSERT INTO laboratory_request VALUES("89","Mandalagan Barangay Health Station","2018-01-10","Rommel Adricula","Diagnostic","Sputum","Yes","2018-01-03","2018-01-06","Alson John","Barangay Health Worker","Xpert MTB/RIF","2","Done","2018"); 
INSERT INTO laboratory_request VALUES("90","Sum-ag Barangay Health Station","2018-01-12","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-10","2018-01-11","Rommel Adricula","Barangay Health Worker","Xpert MTB/RIF","3","Done","2018"); 
INSERT INTO laboratory_request VALUES("91","Banago Barangay Health Station","2018-01-03","Dr. Haro","Diagnostic","Sputum","Yes","2018-01-10","2018-01-10","Ivan Buglosa","Barangay Health Worker","Xpert MTB/RIF","9","Done","2018"); 
INSERT INTO laboratory_request VALUES("92","Sum-ag Barangay Health Station","2018-01-11","Hans Legislador","Diagnostic","Sputum","Yes","2018-01-10","2018-01-11","Ivan Buglosa","Barangay Health Worker","DSSM","17","Done","2018"); 
INSERT INTO laboratory_request VALUES("93","Estefania Barangay Health Station","2018-01-12","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-10","2018-01-10","Alvin Yanson","Barangay Health Worker","DSSM","18","Done","2018"); 
INSERT INTO laboratory_request VALUES("94","Estefania Barangay Health Station","2018-01-12","Carl Betio","Diagnostic","Sputum","Yes","2018-01-10","2018-01-03","Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","13","Done","2018"); 
INSERT INTO laboratory_request VALUES("95","Estefania Barangay Health Station","2018-01-03","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-10","2018-01-10","Alvin Yanson","Barangay Health Worker","DSSM","13","Done","2018"); 
INSERT INTO laboratory_request VALUES("96","Banago Barangay Health Station","2018-01-03","Alson Buno","Diagnostic","Sputum","Yes","2018-01-04","2018-01-05","Alson John","Barangay Health Worker","Xpert MTB/RIF","6","Done","2018"); 
INSERT INTO laboratory_request VALUES("97","Banago Barangay Health Station","2018-01-03","Leonel Entes","Diagnostic","Sputum","Yes","2018-01-10","2018-01-11","Daniel Molabin","Barangay Health Worker","DSSM","8","Done","2018"); 
INSERT INTO laboratory_request VALUES("98","Banago Barangay Health Station","2018-01-09","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-10","2018-01-11","Daniel Molabin","Barangay Health Worker","Xpert MTB/RIF","8","Done","2018"); 
INSERT INTO laboratory_request VALUES("99","Granada Barangay Health Station","2018-01-10","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-10","2018-01-11","Alvin Yanson","Barangay Health Worker","TB Culture","24","Done","2018"); 
INSERT INTO laboratory_request VALUES("100","Handumanan Barangay Health Station","2018-01-10","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-17","2018-01-17","Alvin Yanson","Barangay Health Worker","Drug Susceptible Testing","12","Done","2018"); 
INSERT INTO laboratory_request VALUES("101","Banago Barangay Health Station","2018-01-10","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-11","2018-01-12","Alvin Yanson","Barangay Health Worker","DSSM","22","Done","2018"); 
INSERT INTO laboratory_request VALUES("102","Taculing Barangay Health Station","2018-01-04","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-05","2018-01-08","Alvin Yanson","Barangay Health Worker","DSSM","20","Done","2018"); 
INSERT INTO laboratory_request VALUES("103","Bata Barangay Health Station","2018-01-13","Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-11","2018-01-12","Alvin Yanson","Barangay Health Worker","DSSM","5","Done","2018"); 
INSERT INTO laboratory_request VALUES("104","Handumanan Barangay Health Station","2018-01-13","Christan Plaza","Baseline","Sputum","No","2018-01-11","2018-01-12","Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","12","Done","2018"); 
INSERT INTO laboratory_request VALUES("105","Granada Barangay Health Station","2018-01-12","Carl Betio","Diagnostic","Sputum","Yes","2018-01-10","2018-01-11","Alvin Yanson","Barangay Health Worker","Drug Susceptible Testing","20","Done","2018"); 



DROP TABLE medication_dispensation;

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL AUTO_INCREMENT,
  `health_center` varchar(50) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `date_given` varchar(30) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `received_by` varchar(30) NOT NULL,
  PRIMARY KEY (`dispensation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("18","Banago Barangay Health Station","Biogesic","January 11, 2018","Jan","2018","25","Alson Bayon-on"); 
INSERT INTO medication_dispensation VALUES("19","Banago Barangay Health Station","Biogesic","January 11, 2018","Jan","2018","15","Gabriel Banua"); 
INSERT INTO medication_dispensation VALUES("20","Alijis Barangay Health Station","Rifampicin","January 11, 2018","Jan","2018","26","Leonel Entes"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `running_balance` int(10) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Isoniazid","This is Isoniazid","2000002"); 
INSERT INTO medicine VALUES("2","name","nameolekfkldf","15"); 
INSERT INTO medicine VALUES("3","Rifampicin","This is Rifampicin","400"); 
INSERT INTO medicine VALUES("4","Ethambutol","This is Ethambutol","6"); 
INSERT INTO medicine VALUES("5","Streptomycin","This is Streptomycin","6"); 
INSERT INTO medicine VALUES("6","qweq","qwew","6"); 
INSERT INTO medicine VALUES("7","Sample Medicine","This is a sample medicine","6"); 
INSERT INTO medicine VALUES("8","Medicine Name","Medicine Description","6"); 
INSERT INTO medicine VALUES("11","Arendo","Arendo Coworking","150"); 
INSERT INTO medicine VALUES("12","Biogesic","aasdfsdfsd","10"); 
INSERT INTO medicine VALUES("13","Bulong","Bulong nisa","0"); 
INSERT INTO medicine VALUES("14","Bulong nisa","Bulong nisa","0"); 
INSERT INTO medicine VALUES("15","qwer","qwr","0"); 
INSERT INTO medicine VALUES("16","zxc","zxc","0"); 
INSERT INTO medicine VALUES("17","linte","linte","0"); 
INSERT INTO medicine VALUES("18","noty","noty","0"); 
INSERT INTO medicine VALUES("19","dpota","dpota ka","0"); 
INSERT INTO medicine VALUES("20","wtf","wtf","0"); 
INSERT INTO medicine VALUES("22","zxcczxcz","zcxczcz","0"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

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
INSERT INTO medicine_stocks VALUES("17","Isoniazid","100","January 5, 2018, 3:18 pm"); 
INSERT INTO medicine_stocks VALUES("18","Biogesic","100","January 5, 2018, 3:20 pm"); 
INSERT INTO medicine_stocks VALUES("19","Isoniazid","2000000","January 8, 2018, 3:51 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("1","Alson John Bayon-on","21","Male","Prk. Langis, Brgy. Banago, Bacolod City","Banago","2017-11-25","178","433-2449","Negros Occidental","Drug Lord","10992241","Dr. Sabay","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("2","Alvin Yanson","3","Male","eroreco bacolod city","Mandalagan","2017-01-08","178","433-2449","Negros Occidental","Student","1993121","Dr. Haro","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("3","Erul John Ubas","21","Male","Sum-ag, Bacolod City","Sumag ","2017-03-13","178","433-2449 local","Negros Occidental","","","Dr. Adricula","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("5","Gabriel Francis Banua","22","Male","Taculing, Bacolod City","Taculing","2017-10-29","178","433-2449","Negros Occidental","","","Dr. Sabay","433-2449","Registered","Done","2017"); 
INSERT INTO patient VALUES("6","Alec Rubiato","20","Male","Banago, Bacolod City","Banago","2016-12-25","174","433-2449","Negros Occidental","","","Dr. Torres","433-2449","Registered","Done","2017"); 
INSERT INTO patient VALUES("7","Daniel Molabin","20","Male","Lizares Avenue","Felisa","2017-10-29","168","433-2449","Negros Occidental","","","Dr. Haro","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("8","Vincent Suyo","20","Male","My Address","Pahanocoy","2017-10-29","178","433-2449","Negros Occidental","","","qwe","1312","Registered","Pending","2017"); 
INSERT INTO patient VALUES("9","Brix Nessia","22","Male","My Address","Mandalagan","2017-10-30","178","12312","Negros Occidental","","","qweqw","12313","Registered","Done","2017"); 
INSERT INTO patient VALUES("34","Alfred Perez","8","Male","Blk. 11, Lot 2, Firmville Subd., Bacolod City","Pahanocoy","2009-04-01","178","09245614783","Negros Occidental","","","Mark Perez","433-1238","Unregister","Pending","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO registration VALUES("26","November 25, 2017","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Alvin Yanson","Barangay Health Worker","Treatment Completed","2017","1","Nov","2017"); 
INSERT INTO registration VALUES("27","November 21, 2017","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Alson John Bayon-on","Nurse","Currently in Treatment","","2","Nov","2017"); 
INSERT INTO registration VALUES("28","November 21, 2017","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Clinically Diagnosed","Pulmonary","No","No","Less than 1 month","Category Ia - 2HRZE/10HR","Carl Betio","Nurse","Currently in Treatment","","6","Nov","2017"); 
INSERT INTO registration VALUES("29","November 21, 2017","Bacolod City Health TB DOTS Center","Community","PTOU","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Gabriel banua","Nurse","Currently in Treatment","","7","Nov","2017"); 
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
INSERT INTO registration VALUES("41","October 2, 2017","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","Less than 1 month","Category Ia - 2HRZE/10HR","Joey Franco","Nurse","Currently in Treatment","","17","Oct","2017"); 
INSERT INTO registration VALUES("42","December 3, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Menard Gardose","Barangay Health Worker","Currently in Treatment","","18","Dec","2017"); 
INSERT INTO registration VALUES("43","December 6, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Mark Torres","Barangay Health Worker","Currently in Treatment","","19","Dec","2017"); 
INSERT INTO registration VALUES("44","December 14, 2017","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Arvi Capuras","Nurse","Currently in Treatment","","20","Dec","2017"); 
INSERT INTO registration VALUES("45","December 19, 2017","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Steven Saludares","Barangay Health Worker","Currently in Treatment","","21","Dec","2017"); 
INSERT INTO registration VALUES("46","December 24, 2017","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Jam Dientes","Nurse","Currently in Treatment","","22","Dec","2017"); 
INSERT INTO registration VALUES("47","December 27, 2017","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Alvin Yanson","Nurse","Currently in Treatment","","23","Dec","2017"); 
INSERT INTO registration VALUES("48","December 27, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Rommel Adricula","Barangay Health Worker","Currently in Treatment","","24","Dec","2017"); 
INSERT INTO registration VALUES("49","Jan 31, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Boots","Barangay Health Worker","Currently in Treatment","2018","26","Jan","2018"); 
INSERT INTO registration VALUES("50","January 4, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","232","Barangay Health Worker","Currently in Treatment","2018","27","Jan","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tb_culture_examination VALUES("1","Method 1","1264","1265","2017-12-05","2017-12-05","Resistant","MTB detected","Dr. Torres","Dr. Torres","2017-12-06","1","Dec","2017"); 
INSERT INTO tb_culture_examination VALUES("2","Method 10","101","102","2018-01-11","2018-01-11","Not Done","Ok mn lng sa ","Dr. Alvin","Dr. Alvin","2018-01-13","24","Jan","2018"); 



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
INSERT INTO user VALUES("41","Yanson","Alvin","","NTP Nurse Coordinator","admin","aTya03gHJdTyqLkWQfg15yU21232f297a57a5a743894a0e4a801fc3","Active"); 
INSERT INTO user VALUES("42","Medtech","Medtech","1231-1231","Medical Technologist","medtech","aTya03gHJdTyqLkWQfg15yU647431b5ca55b04fdf3c2fce31ef1915","Active"); 



