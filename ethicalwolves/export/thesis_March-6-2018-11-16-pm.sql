DROP TABLE backup;

CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL AUTO_INCREMENT,
  `remarks` char(40) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("161","Successfully imported database","March 6, 2018, 11:14 pm"); 
INSERT INTO backup VALUES("162","Successfully exported database","March 6, 2018, 11:14 pm"); 
INSERT INTO backup VALUES("163","Successfully exported database","March 6, 2018, 11:16 pm"); 
INSERT INTO backup VALUES("164","Successfully exported database","March 6, 2018, 11:16 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO clinical_findings VALUES("1","January 16, 2018","2147483647","?","0","?","?","?","Itchiness,Skin Rashes,Vomiting,Abnormal Pain,Joint Paints,Numbness,Yellowing of Sclerae and skin,Vis","26"); 
INSERT INTO clinical_findings VALUES("2","February 1, 2018","50","?","?","?","?","?","Itchiness,Skin Rashes,Vomiting,","2"); 
INSERT INTO clinical_findings VALUES("3","February 3, 2018","60","?","?","?","?","0","Itchiness,Skin Rashes,Vomiting,Abnormal Pain,","27"); 
INSERT INTO clinical_findings VALUES("4","February 15, 2018","89","?","?","?","?","?","Itchiness,Skin Rashes,Joint Paints,","6"); 
INSERT INTO clinical_findings VALUES("5","February 15, 2018","45","0","?","?","?","?","Skin Rashes,Vomiting,Numbness,","6"); 
INSERT INTO clinical_findings VALUES("6","February 25, 2018","56","?","?","?","0","0","Skin Rashes,Abnormal Pain,Joint Paints,Yellowing of Sclerae and skin,","6"); 
INSERT INTO clinical_findings VALUES("7","February 26, 2018","89","X","?","X","X","?","Itchiness,Skin Rashes,Abnormal Pain,","6"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO clinical_findings_ipt VALUES("3","Saturday 25th of November 2017","56","Yes","Yes","Yes","Yes","Yes","Hearing Disturbance","1"); 
INSERT INTO clinical_findings_ipt VALUES("4","Friday 29th of December 2017","45","No","No","Yes","Yes","Yes","Abdominal Pain","9"); 
INSERT INTO clinical_findings_ipt VALUES("5","December 29, 2017","34","?","?","?","?","0","Abnormal Pain","9"); 
INSERT INTO clinical_findings_ipt VALUES("6","January 16, 2018","45","?","?","?","?","?","Joint Paints","20"); 
INSERT INTO clinical_findings_ipt VALUES("7","February 1, 2018","50","?","?","?","?","?","Skin Rashes","20"); 
INSERT INTO clinical_findings_ipt VALUES("8","February 7, 2018","60","?","?","?","?","?","Array","21"); 
INSERT INTO clinical_findings_ipt VALUES("9","February 7, 2018","89","?","0","?","?","?","Itchiness,Abnormal Pain,Joint Paints,","21"); 
INSERT INTO clinical_findings_ipt VALUES("10","February 17, 2018","65","?","?","?","?","?","Itchiness,Skin Rashes,Vomiting,Joint Paints,Numbness,Yellowing of Sclerae and skin,Visual Disturbanc","20"); 



DROP TABLE continuation_phase;

CREATE TABLE `continuation_phase` (
  `continuation_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` char(10) NOT NULL,
  `month` char(10) NOT NULL,
  `date_taken` varchar(20) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`continuation_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO continuation_phase VALUES("13","100","Feb","February 17, 2018","Isoniazid","2018","Present","6"); 
INSERT INTO continuation_phase VALUES("14","250","Feb","February 17, 2018","Rifampicin","2018","Present","6"); 
INSERT INTO continuation_phase VALUES("15","250","Feb","February 17, 2018","Rifampicin","2018","Present","5"); 
INSERT INTO continuation_phase VALUES("16","50","Feb","February 17, 2018","Rifampicin","2018","Present","7"); 
INSERT INTO continuation_phase VALUES("17","200","Feb","February 17, 2018","Biogesic","2018","Present","6"); 
INSERT INTO continuation_phase VALUES("18","250","Feb","February 17, 2018","Kanamycin","2018","Present","6"); 
INSERT INTO continuation_phase VALUES("19","20","Feb","February 17, 2018","Pyrazinamide","2018","Present","6"); 



DROP TABLE cxr;

CREATE TABLE `cxr` (
  `cxr_id` int(10) NOT NULL AUTO_INCREMENT,
  `cxr_findings` varchar(20) NOT NULL,
  `date_of_exam` date NOT NULL,
  `tbdc` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`cxr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO cxr VALUES("2","TB Disease","2017-12-04","Alson","1"); 
INSERT INTO cxr VALUES("3","TB Infection","2017-12-12","Leonel","1"); 
INSERT INTO cxr VALUES("4","Suggestive of TB","2017-12-18","Alvin Yanson","21"); 
INSERT INTO cxr VALUES("5","No TB","2017-12-04","Alvin Yanson","21"); 
INSERT INTO cxr VALUES("6","Good","2017-12-28","Dr. Haro","1"); 
INSERT INTO cxr VALUES("7","Suggestive of TB","2018-01-17","Alvin Yanson","26"); 
INSERT INTO cxr VALUES("8","Good lng","2018-01-18","Dr. Elmer Haro","26"); 
INSERT INTO cxr VALUES("9","Suggestive of Tuberc","2018-01-24","Mark Jagonoy","26"); 
INSERT INTO cxr VALUES("10","Suggestive of TB","2018-02-15","Alvin Yanson","1"); 
INSERT INTO cxr VALUES("11","Suggestive of TB","2018-02-15","Alson John Bayon-on","6"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO drug_preparations VALUES("1","Wednesday 29th of November 201","1","1","1","1","1","1"); 
INSERT INTO drug_preparations VALUES("2","Tuesday 5th of December 2017","12","12","12","12","12","6"); 
INSERT INTO drug_preparations VALUES("3","Sunday 24th of December 2017","12","12","11","12","12","1"); 
INSERT INTO drug_preparations VALUES("4","December 24, 2017","34","34","34","34","34","1"); 
INSERT INTO drug_preparations VALUES("5","January 15, 2018","45","45","45","45","45","1"); 
INSERT INTO drug_preparations VALUES("6","January 15, 2018","89","89","12","56","31","1"); 
INSERT INTO drug_preparations VALUES("7","January 15, 2018","11","11","11","11","11","1"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;

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
INSERT INTO dssm_examination VALUES("42","2018-01-12","1065","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-12","59","Jan","2018"); 
INSERT INTO dssm_examination VALUES("43","2018-01-12","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Daniel Molabin","2018-01-12","60","Jan","2018"); 
INSERT INTO dssm_examination VALUES("44","2018-01-12","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-13","63","Jan","2018"); 
INSERT INTO dssm_examination VALUES("45","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-13","58","Jan","2018"); 
INSERT INTO dssm_examination VALUES("46","2018-01-12","10","Muco-Purulent","Muco-Purulent","0","0","Negative (0)","Dr. Alec Rubiato","2018-01-13","62","Jan","2018"); 
INSERT INTO dssm_examination VALUES("47","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Gabriel Banua","2018-01-13","64","Jan","2018"); 
INSERT INTO dssm_examination VALUES("48","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alson John Bayon-on","2018-01-13","37","Jan","2018"); 
INSERT INTO dssm_examination VALUES("49","2018-01-12","10","Salivary","Salivary","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-13","38","Jan","2018"); 
INSERT INTO dssm_examination VALUES("50","2018-01-12","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Erul Ubas","2018-01-13","39","Jan","2018"); 
INSERT INTO dssm_examination VALUES("51","2018-01-12","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alec Rubiato","2018-01-12","20","Jan","2018"); 
INSERT INTO dssm_examination VALUES("52","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","75","Jan","2018"); 
INSERT INTO dssm_examination VALUES("53","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","73","Jan","2018"); 
INSERT INTO dssm_examination VALUES("54","2018-01-12","11","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","67","Jan","2018"); 
INSERT INTO dssm_examination VALUES("55","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-12","72","Jan","2018"); 
INSERT INTO dssm_examination VALUES("56","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Daniel Molabin","2018-01-12","70","Jan","2018"); 
INSERT INTO dssm_examination VALUES("57","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Carl Betio","2018-01-12","68","Jan","2018"); 
INSERT INTO dssm_examination VALUES("58","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Gabriel Banua","2018-01-12","74","Jan","2018"); 
INSERT INTO dssm_examination VALUES("59","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Jaly Alvin Galoyo","2018-01-12","69","Jan","2018"); 
INSERT INTO dssm_examination VALUES("60","2018-01-12","12","Blood-Stained","Muco-Purulent","1+","1+","Positive (+)","Dr. Alec Rubiato","2018-01-12","71","Jan","2018"); 
INSERT INTO dssm_examination VALUES("61","2018-01-12","21","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","76","Jan","2018"); 
INSERT INTO dssm_examination VALUES("62","2018-01-12","12","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","39","Jan","2018"); 
INSERT INTO dssm_examination VALUES("63","2018-01-15","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Gabriel Banua","2018-01-15","45","Jan","2018"); 
INSERT INTO dssm_examination VALUES("64","2018-01-15","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Haro","2018-01-15","1","Jan","2018"); 
INSERT INTO dssm_examination VALUES("65","2018-01-24","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alson John","2018-01-24","31","Jan","2018"); 
INSERT INTO dssm_examination VALUES("66","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Vincent Suyo","2018-01-24","78","Jan","2018"); 
INSERT INTO dssm_examination VALUES("67","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","24","Jan","2018"); 
INSERT INTO dssm_examination VALUES("68","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","20","Jan","2018"); 
INSERT INTO dssm_examination VALUES("69","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","30","Jan","2018"); 
INSERT INTO dssm_examination VALUES("70","2018-01-24","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alson John Bayon-on","2018-01-24","59","Jan","2018"); 
INSERT INTO dssm_examination VALUES("71","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","34","Jan","2018"); 
INSERT INTO dssm_examination VALUES("72","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-24","33","Jan","2018"); 
INSERT INTO dssm_examination VALUES("73","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","32","Jan","2018"); 
INSERT INTO dssm_examination VALUES("74","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","36","Jan","2018"); 
INSERT INTO dssm_examination VALUES("75","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Carl Betio","2018-01-24","29","Jan","2018"); 
INSERT INTO dssm_examination VALUES("76","2018-01-25","101","Muco-Purulent","Salivary","1+","1+","Positive (+)","Dr. Erul John Ubas","2018-01-25","73","Jan","2018"); 
INSERT INTO dssm_examination VALUES("77","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Sean Wilkins","2018-01-26","54","Jan","2018"); 
INSERT INTO dssm_examination VALUES("78","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Derrick Wagner","2018-01-26","51","Jan","2018"); 
INSERT INTO dssm_examination VALUES("79","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alson Bayon-on","2018-01-26","53","Jan","2018"); 
INSERT INTO dssm_examination VALUES("80","2018-01-26","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","56","Jan","2018"); 
INSERT INTO dssm_examination VALUES("81","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","49","Jan","2018"); 
INSERT INTO dssm_examination VALUES("82","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","48","Jan","2018"); 
INSERT INTO dssm_examination VALUES("83","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","52","Jan","2018"); 
INSERT INTO dssm_examination VALUES("84","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","55","Jan","2018"); 
INSERT INTO dssm_examination VALUES("85","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","50","Jan","2018"); 
INSERT INTO dssm_examination VALUES("86","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","47","Jan","2018"); 
INSERT INTO dssm_examination VALUES("87","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","39","Jan","2018"); 
INSERT INTO dssm_examination VALUES("88","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","45","Jan","2018"); 
INSERT INTO dssm_examination VALUES("89","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","41","Jan","2018"); 
INSERT INTO dssm_examination VALUES("90","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","44","Jan","2018"); 
INSERT INTO dssm_examination VALUES("91","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","42","Jan","2018"); 
INSERT INTO dssm_examination VALUES("92","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","43","Jan","2018"); 
INSERT INTO dssm_examination VALUES("93","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","46","Jan","2018"); 
INSERT INTO dssm_examination VALUES("94","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","67","Jan","2018"); 
INSERT INTO dssm_examination VALUES("95","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","72","Jan","2018"); 
INSERT INTO dssm_examination VALUES("96","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","83","Jan","2018"); 
INSERT INTO dssm_examination VALUES("97","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","84","Jan","2018"); 
INSERT INTO dssm_examination VALUES("98","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","80","Jan","2018"); 
INSERT INTO dssm_examination VALUES("99","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","25","Jan","2018"); 
INSERT INTO dssm_examination VALUES("100","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","70","Jan","2018"); 
INSERT INTO dssm_examination VALUES("101","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","40","Jan","2018"); 
INSERT INTO dssm_examination VALUES("102","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","81","Jan","2018"); 
INSERT INTO dssm_examination VALUES("103","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","82","Jan","2018"); 
INSERT INTO dssm_examination VALUES("104","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","75","Jan","2018"); 
INSERT INTO dssm_examination VALUES("105","2018-02-02","10","Salivary","Muco-Purulent","1+","1+","Positive (+)","Dr. Haro","2018-02-02","90","Feb","2018"); 
INSERT INTO dssm_examination VALUES("106","2018-02-07","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin","2018-02-07","97","Feb","2018"); 
INSERT INTO dssm_examination VALUES("107","2018-02-08","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin","2018-02-08","57","Feb","2018"); 
INSERT INTO dssm_examination VALUES("108","2018-02-08","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Haro","2018-02-08","89","Feb","2018"); 
INSERT INTO dssm_examination VALUES("109","2018-02-08","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Haro","2018-02-08","92","Feb","2018"); 
INSERT INTO dssm_examination VALUES("110","2018-02-15","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-15","93","Feb","2018"); 
INSERT INTO dssm_examination VALUES("111","2018-02-16","100","Salivary","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-15","95","Feb","2018"); 
INSERT INTO dssm_examination VALUES("112","2018-02-23","100","Muco-Purulent","Blood-Stained","1+","1+","Positive (+)","Vena Lorenzana","2018-02-23","175","Feb","2018"); 
INSERT INTO dssm_examination VALUES("113","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Maryln Kluender","2018-02-23","171","Feb","2018"); 
INSERT INTO dssm_examination VALUES("114","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Jamie Corona","2018-02-23","169","Feb","2018"); 
INSERT INTO dssm_examination VALUES("115","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Shanelle Tumlin","2018-02-23","89","Feb","2018"); 
INSERT INTO dssm_examination VALUES("116","2018-02-23","100","Muco-Purulent","Salivary","1+","1+","Positive (+)","Audrie Pappan","2018-02-23","177","Feb","2018"); 
INSERT INTO dssm_examination VALUES("117","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Cecilia Render","2018-02-23","181","Feb","2018"); 
INSERT INTO dssm_examination VALUES("118","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Sharell Rueckert","2018-02-23","174","Feb","2018"); 
INSERT INTO dssm_examination VALUES("119","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Illa Sanches","2018-02-23","179","Feb","2018"); 
INSERT INTO dssm_examination VALUES("120","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Alva Hazelwood","2018-02-23","172","Feb","2018"); 
INSERT INTO dssm_examination VALUES("121","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Garnett Bolton","2018-02-23","168","Feb","2018"); 
INSERT INTO dssm_examination VALUES("122","2018-02-23","100","Muco-Purulent","Salivary","1+","1+","Positive (+)","Kraig Villela","2018-02-23","180","Feb","2018"); 
INSERT INTO dssm_examination VALUES("123","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Doug Cutts","2018-02-23","178","Feb","2018"); 
INSERT INTO dssm_examination VALUES("124","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Vivian Big","2018-02-23","176","Feb","2018"); 
INSERT INTO dssm_examination VALUES("125","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Arcelia Difilippo","2018-02-23","173","Feb","2018"); 
INSERT INTO dssm_examination VALUES("126","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Lorelei Kelty","2018-02-23","170","Feb","2018"); 
INSERT INTO dssm_examination VALUES("127","2018-02-24","100","Salivary","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-24","94","Feb","2018"); 
INSERT INTO dssm_examination VALUES("128","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-23","99","Feb","2018"); 
INSERT INTO dssm_examination VALUES("129","2018-02-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alson John Bayon-on","2018-02-23","96","Feb","2018"); 
INSERT INTO dssm_examination VALUES("130","2018-02-25","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yansn","2018-02-25","21","Feb","2018"); 
INSERT INTO dssm_examination VALUES("131","2018-02-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-26","182","Feb","2018"); 
INSERT INTO dssm_examination VALUES("132","2018-02-26","100","Muco-Purulent","Muco-Purulent","1+","1+1","Positive (+)","Dr. Elmer Haro","2018-02-26","189","Feb","2018"); 
INSERT INTO dssm_examination VALUES("133","2018-02-26","100","Salivary","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-26","184","Feb","2018"); 
INSERT INTO dssm_examination VALUES("134","2018-02-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-26","184","Feb","2018"); 
INSERT INTO dssm_examination VALUES("135","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","187","Feb","2018"); 
INSERT INTO dssm_examination VALUES("136","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","191","Feb","2018"); 
INSERT INTO dssm_examination VALUES("137","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","91","Feb","2018"); 
INSERT INTO dssm_examination VALUES("138","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","75","Feb","2018"); 
INSERT INTO dssm_examination VALUES("139","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","2","Feb","2018"); 
INSERT INTO dssm_examination VALUES("140","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","73","Feb","2018"); 
INSERT INTO dssm_examination VALUES("141","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","171","Feb","2018"); 
INSERT INTO dssm_examination VALUES("142","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","89","Feb","2018"); 
INSERT INTO dssm_examination VALUES("143","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","44","Feb","2018"); 
INSERT INTO dssm_examination VALUES("144","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","30","Feb","2018"); 
INSERT INTO dssm_examination VALUES("145","2018-02-27","199","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","172","Feb","2018"); 
INSERT INTO dssm_examination VALUES("146","2018-02-28","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","21","Feb","2018"); 
INSERT INTO dssm_examination VALUES("147","2018-02-28","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","21","Feb","2018"); 
INSERT INTO dssm_examination VALUES("148","2018-02-28","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","21","Feb","2018"); 
INSERT INTO dssm_examination VALUES("149","2018-02-28","100","Muco-Purulent","Blood-Stained","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","75","Feb","2018"); 
INSERT INTO dssm_examination VALUES("150","2018-02-28","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","32","Feb","2018"); 
INSERT INTO dssm_examination VALUES("151","2018-03-01","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","29","Mar","2018"); 
INSERT INTO dssm_examination VALUES("152","2018-03-01","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","57","Mar","2018"); 
INSERT INTO dssm_examination VALUES("153","2018-03-01","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","57","Mar","2018"); 
INSERT INTO dssm_examination VALUES("154","2018-03-01","100","Muco-Purulent","Salivary","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","57","Mar","2018"); 
INSERT INTO dssm_examination VALUES("155","2018-03-01","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","57","Mar","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO dst_examination VALUES("1","12","12","2017-12-03","2017-12-03","Method 1","Resistant","Resistant","Resistant","Resistant","Resistant","Susceptible","Resistant","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Haro","2017-12-05","6","Dec","2017"); 
INSERT INTO dst_examination VALUES("2","12","12","2017-12-12","2017-12-12","Method 1","Susceptible","Resistant","Resistant","Resistant","Resistant","Susceptible","Susceptible","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Adricula","2017-12-20","1","Dec","2017"); 
INSERT INTO dst_examination VALUES("3","12","12","2018-01-10","2018-01-03","Method 3","Resistant","Susceptible","Resistant","Resistant","Susceptible","Resistant","Susceptible","Susceptible","Resistant","Alvin Yanson","Good lng","Alvin Yanson","2018-01-10","12","Jan","2018"); 
INSERT INTO dst_examination VALUES("4","100","100","2018-02-08","2018-02-08","Method","Resistant","Resistant","Susceptible","Susceptible","Resistant","Not Done","Not Done","Not Done","Not Done","Dr. Alvin","Good","Dr. Alvin","2018-02-08","1","Feb","2018"); 
INSERT INTO dst_examination VALUES("5","100","100","2018-02-08","2018-02-08","Method 1","Resistant","Resistant","Resistant","Resistant","Resistant","Not Done","Not Done","Not Done","Not Done","Dr. Haro","Good","Dr. Haro","2018-02-08","73","Feb","2018"); 
INSERT INTO dst_examination VALUES("6","102","100","2018-02-24","2018-02-24","Method 1","Resistant","Resistant","Susceptible","Susceptible","Susceptible","Resistant","Resistant","Resistant","Susceptible","Dr. ALvin Yanson","Resistant","Dr. Alvin","2018-02-24","59","Feb","2018"); 
INSERT INTO dst_examination VALUES("7","100","100","2018-02-27","2018-02-27","Method 1","Resistant","Resistant","Resistant","Susceptible","Susceptible","Resistant","Susceptible","Susceptible","Susceptible","Dr. Alvin Yanson","Good","Dr. Alvin Yanson","2018-02-27","69","Feb","2018"); 



DROP TABLE family_member;

CREATE TABLE `family_member` (
  `member_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `date_screened` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

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
INSERT INTO family_member VALUES("15","Diego","12","2018-01-19","76"); 
INSERT INTO family_member VALUES("16","John","14","2018-01-19","76"); 
INSERT INTO family_member VALUES("17","Alec  Rubiato","12","2018-01-19","76"); 
INSERT INTO family_member VALUES("18","Erul John Ubas","19","2018-01-18","76"); 
INSERT INTO family_member VALUES("19","Erul John Ubaszxc","19","2018-01-19","2"); 



DROP TABLE follow_up;

CREATE TABLE `follow_up` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

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
INSERT INTO follow_up VALUES("28","2018-01-17","baalik d","1"); 
INSERT INTO follow_up VALUES("29","2018-02-08","ALson balik ka...","1"); 
INSERT INTO follow_up VALUES("30","2018-03-07","fsdfsd","7"); 
INSERT INTO follow_up VALUES("31","2018-03-15","Remarks","7"); 
INSERT INTO follow_up VALUES("32","2018-02-23","Remarks","7"); 
INSERT INTO follow_up VALUES("33","2018-02-23","Remarks","10"); 
INSERT INTO follow_up VALUES("34","2018-02-24","Remarks","7"); 
INSERT INTO follow_up VALUES("35","2018-02-22","Remarks","3"); 
INSERT INTO follow_up VALUES("36","2018-02-28","Remarks","93"); 
INSERT INTO follow_up VALUES("37","2018-02-28","added a follow-up date for Erul John Ubas","3"); 
INSERT INTO follow_up VALUES("38","2018-03-10","added a follow-up date for Erul John Ubas","3"); 
INSERT INTO follow_up VALUES("39","2018-03-29","added a follow-up date for Ivan Buglosa","11"); 
INSERT INTO follow_up VALUES("40","2018-03-30","added a follow-up date for Daniel Molabin","7"); 
INSERT INTO follow_up VALUES("41","2018-03-30","added a follow-up date for Alec Rubiato","6"); 
INSERT INTO follow_up VALUES("42","2018-03-29","added a follow-up date for Alec Rubiato","6"); 
INSERT INTO follow_up VALUES("43","2018-03-31","linte ka nga follow-up","6"); 



DROP TABLE follow_up_ipt;

CREATE TABLE `follow_up_ipt` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO follow_up_ipt VALUES("1","2018-03-10","added a follow-up date for ","21"); 
INSERT INTO follow_up_ipt VALUES("2","2018-03-10","added a follow-up date for John Peter","21"); 



DROP TABLE gene_expert_examination;

CREATE TABLE `gene_expert_examination` (
  `xpert_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_examined` date NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `result` varchar(2) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`xpert_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO gene_expert_examination VALUES("1","2017-11-26","12","Good","Dr. Haro","2017-11-26","T","1","Nov","2017"); 
INSERT INTO gene_expert_examination VALUES("2","2017-12-06","1256","Salivary","Dr","2017-12-06","TI","19","Dec","2017"); 
INSERT INTO gene_expert_examination VALUES("3","2017-12-13","1065","Salivary","Dr. Haro","2017-12-13","RR","11","Dec","2017"); 
INSERT INTO gene_expert_examination VALUES("4","2018-01-04","1064","Salivary","Boots","2018-01-04","T","26","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("5","2018-01-06","1064","Salivary","Arianne Torres","2018-01-05","T","26","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("6","2018-01-04","1064","Salivary","Jay Alvin Galoyo","2018-01-05","T","7","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("7","2018-01-10","12","Salivary","wqeqw","2018-01-10","TI","21","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("8","2018-01-02","12","Salivary","gabriel","2018-01-02","RR","2","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("9","2018-01-12","1090","Muco-Purulent","Alvin Yanson","2018-01-09","T","3","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("10","0000-00-00","","","","0000-00-00","","9","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("11","2018-01-10","78","Salivary","Dr Hans","2018-01-17","RR","6","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("12","2018-01-12","100","Muco-Purulent","Dr. Leonel Entes","2018-01-12","T","8","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("13","2018-01-10","10","Muco-Purulent","Dr. Daniel Molabin","2018-01-10","T","57","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("14","2018-01-12","12","Muco-Purulent","Dr. Alson John Bayon-on","2018-01-12","RR","66","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("15","2018-01-12","11","Muco-Purulent","Dr. Alvin Yanson","2018-01-12","T","65","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("16","2018-01-12","10","Muco-Purulent","Dr. Carl Betio","2018-01-12","TI","61","Jan","2018"); 
INSERT INTO gene_expert_examination VALUES("17","2018-02-08","100","Muco-Purulent","Dr. Haro","2018-02-08","RR","1","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("18","2018-02-18","100","Muco-Purulent","Dr. Alvin","2018-02-18","T","59","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("19","2018-02-01","012345","Salivary","ewewewe@#$","2018-02-23","N","59","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("20","2018-02-24","100","Salivary","Dr. Alvin Yanson","2018-02-23","T","99","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("21","2018-02-25","100","Muco-Purulent","Dr. Elmer Haro","2018-02-23","T","61","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("22","2018-02-27","100","Muco-Purulent","Dr. Elmer Haro","2018-02-27","T","186","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("23","2018-02-27","100","Muco-Purulent","Dr. Elmer Haro","2018-02-27","T","185","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("24","2018-02-27","100","Muco-Purulent","Dr. Elmer Haro","2018-02-27","RR","190","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("25","2018-02-27","199","Muco-Purulent","Dr. Elmer Haro","2018-02-27","T","192","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("26","2018-02-28","100","Muco-Purulent","Leonel Entes","2018-02-28","T","175","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("27","2018-02-27","100","Muco-Purulent","Dr. Elmer Haro","2018-02-28","T","188","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("28","2018-02-28","100","Muco-Purulent","Dr. Elmer Haro","2018-02-28","T","1","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("29","2018-02-28","100","Muco-Purulent","Dr. Elmer Haro","2018-02-28","T","73","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("30","2018-02-28","100","Muco-Purulent","Dr. Elmer Haro","2018-02-28","RR","2","Feb","2018"); 
INSERT INTO gene_expert_examination VALUES("31","2018-03-03","100","Muco-Purulent","Dr. Leonel Entes","2018-03-03","T","198","Mar","2018"); 
INSERT INTO gene_expert_examination VALUES("32","2018-03-05","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-05","RR","53","Mar","2018"); 
INSERT INTO gene_expert_examination VALUES("33","2018-03-05","100","Muco-Purulent","Dr. Leonel Entes","2018-03-06","RR","83","Mar","2018"); 
INSERT INTO gene_expert_examination VALUES("34","2018-03-05","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-05","RR","72","Mar","2018"); 
INSERT INTO gene_expert_examination VALUES("35","2018-03-05","100","Muco-Purulent","Dr. Leonel Entes","2018-03-05","T","189","Mar","2018"); 
INSERT INTO gene_expert_examination VALUES("36","2018-03-05","100","Muco-Purulent","Dr. Leonel Entes","2018-03-05","RR","182","Mar","2018"); 
INSERT INTO gene_expert_examination VALUES("37","2018-03-05","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-05","RR","67","Mar","2018"); 
INSERT INTO gene_expert_examination VALUES("38","2018-03-05","100","Muco-Purulent","Dr. Leonel Entes","2018-03-06","RR","31","Mar","2018"); 



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



DROP TABLE history_log;

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

INSERT INTO history_log VALUES("123","57","System Maintenance","Successfully imported database","March 6, 2018","11:14 pm"); 
INSERT INTO history_log VALUES("124","0","System Maintenance","Exported database","March 6, 2018","11:16 pm"); 
INSERT INTO history_log VALUES("125","0","System Maintenance","Exported database","March 6, 2018","11:16 pm"); 



DROP TABLE intensive_phase;

CREATE TABLE `intensive_phase` (
  `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` char(10) NOT NULL,
  `month` char(10) NOT NULL,
  `date_taken` varchar(20) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`intensive_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

INSERT INTO intensive_phase VALUES("103","100","Feb","February 13, 2018","Isoniazid","2018","Present","5"); 
INSERT INTO intensive_phase VALUES("104","100","Feb","February 14, 2018","Rifampicin","2018","Present","5"); 
INSERT INTO intensive_phase VALUES("105","100","Feb","February 14, 2018","Pyrazinamide","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("106","100","Feb","February 15, 2018","Ethambutol","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("107","190","Feb","February 15, 2018","Levofloxacin","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("108","180","Feb","February 15, 2018","Isoniazid","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("109","200","Feb","February 15, 2018","Streptomycin","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("110","150","Feb","February 15, 2018","Rifampicin","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("111","140","Feb","February 16, 2018","Sample Medicine","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("112","50","Feb","February 17, 2018","Rifampicin","2018","Present","7"); 
INSERT INTO intensive_phase VALUES("113","200","Feb","February 17, 2018","Biogesic","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("114","150","Feb","February 16, 2018","Levofloxacin","2018","Present","5"); 
INSERT INTO intensive_phase VALUES("115","50","Feb","February 17, 2018","Kanamycin","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("116","20","Feb","February 17, 2018","Kanamycin","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("117","20","Feb","February 17, 2018","Biogesic","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("118","20","Feb","February 17, 2018","Pyrazinamide","2018","Present","6"); 
INSERT INTO intensive_phase VALUES("119","-","Feb","February 09, 2018","","2018","Absent","6"); 
INSERT INTO intensive_phase VALUES("120","20","Feb","February 18, 2018","Isoniazid","2018","Present","6"); 



DROP TABLE intensive_phase_ipt;

CREATE TABLE `intensive_phase_ipt` (
  `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT,
  `dosage` char(10) NOT NULL,
  `month` char(10) NOT NULL,
  `date_taken` varchar(20) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`intensive_phase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO intensive_phase_ipt VALUES("1","20","January","31","Ethambutol","2018","Present","20"); 
INSERT INTO intensive_phase_ipt VALUES("2","-","February","1","","2018","Absent","20"); 
INSERT INTO intensive_phase_ipt VALUES("3","20","February","3","Isoniazid","2018","Present","20"); 
INSERT INTO intensive_phase_ipt VALUES("4","20","February","3","Isoniazid","2018","Present","20"); 
INSERT INTO intensive_phase_ipt VALUES("5","100","February","7","Isoniazid","2018","Present","21"); 
INSERT INTO intensive_phase_ipt VALUES("6","100","February","7","Rifampicin","2018","Present","21"); 
INSERT INTO intensive_phase_ipt VALUES("7","100","Feb","February 13, 2018","Isoniazid","2018","Present","20"); 
INSERT INTO intensive_phase_ipt VALUES("8","100","Feb","February 14, 2018","Ethambutol","2018","Present","20"); 
INSERT INTO intensive_phase_ipt VALUES("9","-","Feb","February 15, 2018","","2018","Absent","20"); 
INSERT INTO intensive_phase_ipt VALUES("10","100","Feb","February 14, 2018","Isoniazid","2018","Present","21"); 
INSERT INTO intensive_phase_ipt VALUES("11","100","Feb","February 16, 2018","Isoniazid","2018","Present","20"); 
INSERT INTO intensive_phase_ipt VALUES("12","100","Feb","February 17, 2018","Isoniazid","2018","Present","20"); 
INSERT INTO intensive_phase_ipt VALUES("13","100","Feb","February 17, 2018","Isoniazid","2018","Present","20"); 
INSERT INTO intensive_phase_ipt VALUES("14","100","Mar","March 04, 2018","Isoniazid","2018","Present","22"); 
INSERT INTO intensive_phase_ipt VALUES("15","-","Mar","March 02, 2018","","2018","Absent","22"); 



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
  `date_today` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`lab_request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=latin1;

INSERT INTO laboratory_request VALUES("68","Mandalagan Health Center","2017-11-26","Dr. Haro","Diagnostic","Sputum","Yes","2017-11-27","2017-11-28","Dr. Haro","433-2449","DSSM","2","Done","","2017"); 
INSERT INTO laboratory_request VALUES("127","Banago Barangay Health Station","2018-01-15","Dr. Alson John Bayon-on","Diagnostic","Sputum","Yes","2018-01-12","2018-01-12","Gabriel Banua","Barangay Health Worker","DSSM","45","Done","","2018"); 
INSERT INTO laboratory_request VALUES("128","Banago Barangay Health Station","2018-01-15","Dr. Gabriel Banua","Diagnostic","Sputum","Yes","2018-01-12","2018-01-12","Leonel Entes","Barangay Health Worker","DSSM","1","Done","","2018"); 
INSERT INTO laboratory_request VALUES("129","Mandalagan Barangay Health Station","2018-01-12","Dr. Daniel Molabin","Diagnostic","Sputum","Yes","2018-01-12","2018-01-12","Vincent Suyo","Barangay Health Worker","DSSM","59","Done","","2018"); 
INSERT INTO laboratory_request VALUES("130","Banago Barangay Health Station","2018-01-12","Dr. Alson","Diagnostic","Sputum","Yes","2018-01-12","2018-01-12","Gabriel Banua","Barangay Health Worker","Xpert MTB/RIF","1","Done","","2018"); 
INSERT INTO laboratory_request VALUES("131","Banago Barangay Health Station","2018-01-19","Dr. Alson","Diagnostic","Sputum","Yes","2018-01-19","2018-01-19","Gabriel Banua","Barangay Health Worker","TB Culture","6","Done","","2018"); 
INSERT INTO laboratory_request VALUES("132","Banago Barangay Health Station","2018-01-19","Dr. Gabrie Banua","Diagnostic","Sputum","Yes","2018-01-19","2018-01-19","Alec Rubiato","Barangay Health Worker","Drug Susceptible Testing","1","Done","","2018"); 
INSERT INTO laboratory_request VALUES("133","Singcang Barangay Health Station","2018-01-24","Dr. Vincent","Diagnostic","Sputum","Yes","2018-01-23","2018-01-24","Daniel Molabin","Barangay Health Worker","DSSM","78","Done","","2018"); 
INSERT INTO laboratory_request VALUES("134","Singcang Barangay Health Station","2018-01-24","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-23","2018-01-24","Alson John Bayon-on","Barangay Health Worker","DSSM","29","Done","","2018"); 
INSERT INTO laboratory_request VALUES("135","Mansilingan Barangay Health Station","2018-01-24","Dr. Carl Betio","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Daniel Molabin","Barangay Health Worker","DSSM","31","Done","","2018"); 
INSERT INTO laboratory_request VALUES("136","Alijis Barangay Health Station","2018-01-24","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Daniel Molabin","Barangay Health Worker","DSSM","33","Done","","2018"); 
INSERT INTO laboratory_request VALUES("137","Mandalagan Barangay Health Station","2018-01-24","Dr. Gabriel Banua","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Dr. Leonel Entes","Barangay Health Worker","DSSM","36","Done","","2018"); 
INSERT INTO laboratory_request VALUES("138","Estefania Barangay Health Station","2018-01-24","Dr. Alec Rubiato","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Alvin Yanson","Barangay Health Worker","DSSM","32","Done","","2018"); 
INSERT INTO laboratory_request VALUES("139","Mansilingan Barangay Health Station","2018-01-24","Dr. Vincent Suyo","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Alson John Bayon-on","Barangay Health Worker","DSSM","34","Done","","2018"); 
INSERT INTO laboratory_request VALUES("140","Sum-ag Barangay Health Station","2018-01-24","Dr. Alec Rubiato","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Jay Alvin Galoyo","Barangay Health Worker","DSSM","30","Done","","2018"); 
INSERT INTO laboratory_request VALUES("141","Banago Barangay Health Station","2018-01-24","Dr. Gabriel Banua","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Carl Betio","Barangay Health Worker","DSSM","24","Done","","2018"); 
INSERT INTO laboratory_request VALUES("142","Handumanan Barangay Health Station","2018-01-24","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Alvin Yanson","Barangay Health Worker","DSSM","20","Done","","2018"); 
INSERT INTO laboratory_request VALUES("143","Alangilan Barangay Health Station","2018-01-24","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-22","2018-01-23","Daniel Molabin","Barangay Health Worker","DSSM","73","Done","","2018"); 
INSERT INTO laboratory_request VALUES("144","Banago Barangay Health Station","2018-01-24","Dr. Alvin","Diagnostic","Sputum","No","2018-01-24","2018-01-25","Daniel Molabin","Barangay Health Worker","DSSM","39","Done","","2018"); 
INSERT INTO laboratory_request VALUES("145","Granada Barangay Health Station","2018-01-26","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-24","2018-01-25","Dr. Alvin Yanson","Barangay Health Worker","DSSM","57","Done","","2018"); 
INSERT INTO laboratory_request VALUES("146","Estefania Barangay Health Station","2018-01-25","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-01-24","2018-01-25","Alvin Yanson","Barangay Health Worker","Drug Susceptible Testing","73","Done","","2018"); 
INSERT INTO laboratory_request VALUES("147","Banago Barangay Health Station","2018-01-26","Dr. Alvin","Diagnostic","Sputum","Yes","2018-01-25","2018-01-26","Alson John Bayon-on","Barangay Health Worker","DSSM","54","Done","","2018"); 
INSERT INTO laboratory_request VALUES("148","Alangilan Barangay Health Station","2018-01-24","Cecelia Hayes","Diagnostic","Sputum","Yes","2018-01-25","2018-01-25","Austin Poole","Barangay Health Worker","DSSM","51","Done","","2018"); 
INSERT INTO laboratory_request VALUES("149","Cabug Barangay Health Station","2018-01-25","Jermaine Hogan","Diagnostic","Sputum","Yes","2018-01-25","2018-01-25","Michael Morgan","Barangay Health Worker","DSSM","53","Done","","2018"); 
INSERT INTO laboratory_request VALUES("150","Cabug Barangay Health Station","2018-01-26","Mattie Myers","Diagnostic","Sputum","Yes","2018-01-25","2018-01-25","Salvatore Ballard","Barangay Health Worker","DSSM","56","Done","","2018"); 
INSERT INTO laboratory_request VALUES("151","Felisa Barangay Health Station","2018-01-25","Candice	Jacobs","Diagnostic","Sputum","Yes","2018-01-25","2018-01-25","Walter Jenkins","Barangay Health Worker","DSSM","49","Done","","2018"); 
INSERT INTO laboratory_request VALUES("152","Granada Barangay Health Station","2018-01-25","Darla Cain","Diagnostic","Sputum","Yes","2018-01-25","2018-01-25","Johanna	Floyd","Barangay Health Worker","DSSM","48","Done","","2018"); 
INSERT INTO laboratory_request VALUES("153","Granada Barangay Health Station","2018-01-25","Tom Fleming","Diagnostic","Sputum","Yes","2018-01-25","2018-01-25","Sergio Perez","Barangay Health Worker","DSSM","55","Done","","2018"); 
INSERT INTO laboratory_request VALUES("154","Handumanan Barangay Health Station","2018-01-26","Dorothy	Horton","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Kim	Mendoza","Barangay Health Worker","DSSM","52","Done","","2018"); 
INSERT INTO laboratory_request VALUES("155","Felisa Barangay Health Station","2018-01-26","Francis Alvarez","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Lois	Stephens","Midwife","DSSM","50","Done","","2018"); 
INSERT INTO laboratory_request VALUES("156","Mandalagan Barangay Health Station","2018-01-25","Darlene	Gibbs","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Ethel Webb","Barangay Health Worker","DSSM","47","Done","","2018"); 
INSERT INTO laboratory_request VALUES("157","Abcasa Barangay Health Station","2018-01-26","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Jessie Page","Barangay Health Worker","DSSM","45","Done","","2018"); 
INSERT INTO laboratory_request VALUES("158","Banago Barangay Health Station","2018-01-26","Dr. Emmett Poole","Diagnostic","Sputum","No","2018-01-26","2018-01-26","Gabriel Banua","Barangay Health Worker","DSSM","41","Done","","2018"); 
INSERT INTO laboratory_request VALUES("159","Banago Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Daniel Molabin","Barangay Health Worker","DSSM","44","Done","","2018"); 
INSERT INTO laboratory_request VALUES("160","Abcasa Barangay Health Station","2018-01-26","Dr. Emmett Poole","Diagnostic","Sputum","No","2018-01-26","2018-01-26","Daniel Molabin","Barangay Health Worker","DSSM","42","Done","","2018"); 
INSERT INTO laboratory_request VALUES("161","Cabug Barangay Health Station","2018-01-26","Dr. Emmett Poole","Diagnostic","Sputum","No","2018-01-26","2018-01-26","Daniel Molabin","Barangay Health Worker","DSSM","43","Done","","2018"); 
INSERT INTO laboratory_request VALUES("162","Felisa Barangay Health Station","2018-01-26","Dr. Mercedes Douglas","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","46","Done","","2018"); 
INSERT INTO laboratory_request VALUES("163","Banago Barangay Health Station","2018-01-26","Dr. Emmett Poole","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Daniel Molabin","Barangay Health Worker","DSSM","40","Done","","2018"); 
INSERT INTO laboratory_request VALUES("164","Tangub Barangay Health Station","2018-01-26","Dr. Emmett Poole","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Daniel Molabin","Barangay Health Worker","DSSM","25","Done","","2018"); 
INSERT INTO laboratory_request VALUES("165","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-25","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","75","Done","","2018"); 
INSERT INTO laboratory_request VALUES("166","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","67","Done","","2018"); 
INSERT INTO laboratory_request VALUES("167","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","72","Done","","2018"); 
INSERT INTO laboratory_request VALUES("168","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","83","Done","","2018"); 
INSERT INTO laboratory_request VALUES("169","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","84","Done","","2018"); 
INSERT INTO laboratory_request VALUES("170","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","80","Done","","2018"); 
INSERT INTO laboratory_request VALUES("171","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","82","Done","","2018"); 
INSERT INTO laboratory_request VALUES("172","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","70","Done","","2018"); 
INSERT INTO laboratory_request VALUES("173","Sum-ag Barangay Health Station","2018-01-26","Dr. Ian Gardner","Diagnostic","Sputum","Yes","2018-01-26","2018-01-26","Alessander Rubiato","Barangay Health Worker","DSSM","81","Done","","2018"); 
INSERT INTO laboratory_request VALUES("174","Pahanocoy Barangay Health Station","2018-01-26","Dr. Emmett Poole","Diagnostic","Sputum","No","2018-01-26","2018-01-26","Daniel Molabin","Barangay Health Worker","DSSM","89","Done","","2018"); 
INSERT INTO laboratory_request VALUES("175","Alangilan Barangay Health Station","2018-02-07","Dr. Mark Edwards","Diagnostic","Sputum","Yes","2018-02-01","2018-02-02","Daniel Molabin","Barangay Health Worker","DSSM","90","Done","","2018"); 
INSERT INTO laboratory_request VALUES("176","Alangilan Barangay Health Station","2018-02-08","Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-01","2018-02-01","Daniel Molabin","Barangay Health Worker","DSSM","97","Done","","2018"); 
INSERT INTO laboratory_request VALUES("177","Banago Barangay Health Station","2018-02-08","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-08","2018-02-08","Dr. Alvin","Barangay Health Worker","DSSM","92","Done","","2018"); 
INSERT INTO laboratory_request VALUES("178","Alijis Barangay Health Station","2018-02-15","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-14","2018-02-15","Alvin Yanson","Barangay Health Worker","DSSM","93","Done","","2018"); 
INSERT INTO laboratory_request VALUES("179","Felisa Barangay Health Station","2018-02-15","Dr. ALvin Yanson","Diagnostic","Sputum","Yes","2018-02-15","2018-02-15","Alvin Yanson","Midwife","DSSM","95","Done","","2018"); 
INSERT INTO laboratory_request VALUES("180","Cabug Barangay Health Station","2018-02-16","Dr. Elmer Haro","Diagnostic","Sputum","Yes","2018-02-15","2018-02-16","Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","59","Done","","2018"); 
INSERT INTO laboratory_request VALUES("181","Alangilan Barangay Health Station","2018-02-19","erul&*&*(&","Diagnostic","Sputum","Yes","2018-02-25","2018-02-28","ahahahaha@@@#","Barangay Health Worker","Xpert MTB/RIF","59","Done","","2018"); 
INSERT INTO laboratory_request VALUES("182","Alangilan Barangay Health Station","2018-02-20","Dr. Elmer Haro","Diagnostic","Sputum","No","2018-02-19","2018-02-19","Alvin Yanson","Barangay Health Worker","DSSM","89","Done","","2018"); 
INSERT INTO laboratory_request VALUES("183","Abcasa Barangay Health Station","2018-02-23","Myron Harrill","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Cherryl Patillo","Barangay Health Worker","DSSM","175","Done","","2018"); 
INSERT INTO laboratory_request VALUES("184","Abcasa Barangay Health Station","2018-02-23","Jacalyn Weekly","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Olimpia Keely","Barangay Health Worker","DSSM","171","Done","","2018"); 
INSERT INTO laboratory_request VALUES("185","Abcasa Barangay Health Station","2018-02-23","Tamesha Sandlin","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Tanesha Beckett","Barangay Health Worker","DSSM","169","Done","","2018"); 
INSERT INTO laboratory_request VALUES("186","Abcasa Barangay Health Station","2018-02-23","Vergie Vallone","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Elois Turpen","Barangay Health Worker","DSSM","177","Done","","2018"); 
INSERT INTO laboratory_request VALUES("187","Abcasa Barangay Health Station","2018-02-23","Tanna Chica","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Maryland Riel","Barangay Health Worker","DSSM","181","Done","","2018"); 
INSERT INTO laboratory_request VALUES("188","Abcasa Barangay Health Station","2018-02-23","Hailey Farrish","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Walton Onofrio","Barangay Health Worker","DSSM","174","Done","","2018"); 
INSERT INTO laboratory_request VALUES("189","Abcasa Barangay Health Station","2018-02-23","Delia Tullius","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Macie Harger","Barangay Health Worker","DSSM","179","Done","","2018"); 
INSERT INTO laboratory_request VALUES("190","Abcasa Barangay Health Station","2018-02-23","Rowena Dahlgren","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Evelina Baley","Barangay Health Worker","DSSM","172","Done","","2018"); 
INSERT INTO laboratory_request VALUES("191","Abcasa Barangay Health Station","2018-02-23","Fairy Casazza","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Exie Lueras","Barangay Health Worker","DSSM","168","Done","","2018"); 
INSERT INTO laboratory_request VALUES("192","Abcasa Barangay Health Station","2018-02-23","Mariano Brehmer","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Fairy Casazza","Barangay Health Worker","DSSM","180","Done","","2018"); 
INSERT INTO laboratory_request VALUES("193","Abcasa Barangay Health Station","2018-02-23","Exie Lueras","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Marcelina Belt","Barangay Health Worker","DSSM","178","Done","","2018"); 
INSERT INTO laboratory_request VALUES("194","Abcasa Barangay Health Station","2018-02-23","Mariano Brehmer","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Jutta Frederickson","Barangay Health Worker","DSSM","176","Done","","2018"); 
INSERT INTO laboratory_request VALUES("195","Abcasa Barangay Health Station","2018-02-23","Amee Langford","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Freddy Badon","Barangay Health Worker","DSSM","173","Done","","2018"); 
INSERT INTO laboratory_request VALUES("196","Abcasa Barangay Health Station","2018-02-23","Shante Newbern","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Merilyn Boden","Barangay Health Worker","DSSM","170","Done","","2018"); 
INSERT INTO laboratory_request VALUES("197","Abcasa Barangay Health Station","2018-02-23","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Daniel Molabin","Barangay Health Worker","Xpert MTB/RIF","61","Done","","2018"); 
INSERT INTO laboratory_request VALUES("198","Banago Barangay Health Station","2018-02-23","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Alson John Bayon-on","Barangay Health Worker","TB Culture","6","Done","","2018"); 
INSERT INTO laboratory_request VALUES("199","Banago Barangay Health Station","2018-02-23","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Leonel Entes","Barangay Health Worker","Drug Susceptible Testing","59","Done","","2018"); 
INSERT INTO laboratory_request VALUES("200","Abcasa Barangay Health Station","2018-02-23","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Alson John Bayon-on","Barangay Health Worker","DSSM","99","Done","","2018"); 
INSERT INTO laboratory_request VALUES("201","Abcasa Barangay Health Station","2018-02-23","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Alson John Bayon-on","Barangay Health Worker","Xpert MTB/RIF","99","Done","February 24, 2018","2018"); 
INSERT INTO laboratory_request VALUES("202","Abcasa Barangay Health Station","2018-02-23","Dr. Carl Betio","Diagnostic","Sputum","Yes","2018-02-23","2018-02-23","Alvin Yanson","Barangay Health Worker","DSSM","94","Done","February 24, 2018","2018"); 
INSERT INTO laboratory_request VALUES("203","Alijis Barangay Health Station","2018-02-24","Dr. Elmer haro","Diagnostic","Sputum","No","2018-02-23","2018-02-23","Alvin Yanson","Barangay Health Worker","DSSM","96","Done","February 25, 2018","2018"); 
INSERT INTO laboratory_request VALUES("204","Mandalagan Barangay Health Station","2018-02-25","Alvin Yanson","Diagnostic","Sputum","No","2018-02-24","2018-02-24","Alvin Yanson","Barangay Health Worker","DSSM","21","Done","February 25, 2018","2018"); 
INSERT INTO laboratory_request VALUES("205","Taculing Barangay Health Station","2018-02-26","Elmer Haro","Diagnostic","Sputum","Yes","2018-02-26","2018-02-26","Dr. Alvin Yanson","Barangay Health Worker","DSSM","182","Done","February 26, 2018","2018"); 
INSERT INTO laboratory_request VALUES("206","Abcasa Barangay Health Station","2018-02-23","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-26","2018-02-26","Dr. Alvin Yanson","Barangay Health Worker","DSSM","189","Done","February 26, 2018","2018"); 
INSERT INTO laboratory_request VALUES("207","Villamonte Barangay Health Station","2018-02-26","Dr. Elmer Haro","Diagnostic","Sputum","No","2018-02-26","2018-02-26","Alvin Yanson","Midwife","DSSM","184","Done","February 26, 2018","2018"); 
INSERT INTO laboratory_request VALUES("208","Alangilan Barangay Health Station","2018-02-23","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-26","2018-02-26","Alvin Yanson","Barangay Health Worker","DSSM","184","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("209","Alangilan Barangay Health Station","2018-02-27","Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-26","2018-02-26","Alvin Yanson","Barangay Health Worker","DSSM","187","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("210","Banago Barangay Health Station","2018-02-27","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Alvin Yanson","Barangay Health Worker","DSSM","191","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("211","Banago Barangay Health Station","2018-02-27","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Leonel Entes","Barangay Health Worker","DSSM","91","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("212","Banago Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","190","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("213","Banago Barangay Health Station","2018-02-27","Dr. Elmer Haro","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","188","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("214","Banago Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","192","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("215","Banago Barangay Health Station","2018-02-27","Dr. Elmer Haro","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","186","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("216","Banago Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","185","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("217","Banago Barangay Health Station","2018-02-27","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","75","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("218","Mandalagan Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","2","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("219","Estefania Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","73","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("220","Bata Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","171","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("221","Pahanocoy Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","89","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("222","Mandalagan Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","44","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("223","Alijis Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","30","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("224","Cabug Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","172","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("225","Alijis Barangay Health Station","2018-02-27","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","TB Culture","39","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("226","Alijis Barangay Health Station","2018-02-27","Dr. Elmer Haro","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","TB Culture","35","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("227","Banago Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Drug Susceptible Testing","69","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("228","Estefania Barangay Health Station","2018-02-27","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","DSSM","21","0","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("229","Granada Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","73","Done","February 28, 2018","2018"); 
INSERT INTO laboratory_request VALUES("230","Mandalagan Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","2","Done","February 28, 2018","2018"); 
INSERT INTO laboratory_request VALUES("231","Banago Barangay Health Station","2018-02-27","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","175","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("232","Banago Barangay Health Station","2018-02-27","Leonel Entes","Diagnostic","Sputum","Yes","2018-02-27","2018-02-27","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","1","Done","February 27, 2018","2018"); 
INSERT INTO laboratory_request VALUES("234","Alijis Barangay Health Station","2018-02-28","Dr. Leonel Entes","Follow-up","Sputum","Yes","2018-02-28","2018-02-28","Dr. Alvin Yanson","Barangay Health Worker","DSSM","29","Done","March 1, 2018","2018"); 
INSERT INTO laboratory_request VALUES("235","Cabug Barangay Health Station","2018-02-28","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-28","2018-02-28","Dr. Alvin Yanson","Barangay Health Worker","DSSM","75","0","February 28, 2018","2018"); 
INSERT INTO laboratory_request VALUES("236","Banago Barangay Health Station","2018-02-23","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-02-28","2018-02-28","Dr. Alvin Yanson","Barangay Health Worker","DSSM","32","Done","February 28, 2018","2018"); 
INSERT INTO laboratory_request VALUES("237","Alangilan Barangay Health Station","2018-03-01","Dr. Rommel Adricula","Diagnostic","Sputum","Yes","2018-03-02","2018-03-02","Dr. Leonel Entes","Barangay Health Worker","DSSM","57","Done","March 2, 2018","2018"); 
INSERT INTO laboratory_request VALUES("238","Alangilan Barangay Health Station","2018-03-01","Dr. Rommel Adricula","Diagnostic","Sputum","Yes","2018-03-02","2018-03-02","Dr. Leonel Entes","Barangay Health Worker","DSSM","57","Done","March 2, 2018","2018"); 
INSERT INTO laboratory_request VALUES("239","Alangilan Barangay Health Station","2018-03-01","Dr. Rommel Adricula","Diagnostic","Sputum","Yes","2018-03-02","2018-03-02","Dr. Leonel Entes","Barangay Health Worker","DSSM","57","Done","March 3, 2018","2018"); 
INSERT INTO laboratory_request VALUES("240","Abcasa Barangay Health Station","2018-03-03","Dr. Rommel Adricula","Diagnostic","Sputum","Yes","2018-03-03","2018-03-03","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","198","Done","March 3, 2018","2018"); 
INSERT INTO laboratory_request VALUES("241","Alangilan Barangay Health Station","2018-03-05","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","72","Done","March 4, 2018","2018"); 
INSERT INTO laboratory_request VALUES("242","Alijis Barangay Health Station","2018-03-05","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","67","Done","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("243","Cabug Barangay Health Station","2018-03-05","Dr. Daniel Molabin","Diagnostic","Sputum","Yes","2018-03-06","2018-03-06","Dr. Daniel Molabin","Barangay Health Worker","Xpert MTB/RIF","31","Done","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("244","Estefania Barangay Health Station","2018-03-05","Dr. Daniel Molabin","Diagnostic","Sputum","Yes","2018-03-05","0000-00-00","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","33","Done","March 6, 2018","2018"); 
INSERT INTO laboratory_request VALUES("245","Alangilan Barangay Health Station","2018-03-05","Dr. Vincent Suyo","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Vincent Suyo","Barangay Health Worker","Xpert MTB/RIF","93","Pending","March 4, 2018","2018"); 
INSERT INTO laboratory_request VALUES("246","Bata Barangay Health Station","2018-03-05","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","189","Done","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("247","Alijis Barangay Health Station","2018-03-05","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","83","Done","March 4, 2018","2018"); 
INSERT INTO laboratory_request VALUES("248","Felisa Barangay Health Station","2018-03-05","Dr. Alvin Yanson","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","53","Done","March 4, 2018","2018"); 
INSERT INTO laboratory_request VALUES("249","Alijis Barangay Health Station","2018-03-05","Dr. Alson Bayon-on","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Carl Betio","Barangay Health Worker","Xpert MTB/RIF","32","Pending","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("250","Punta Taytay Barangay Health Station","2018-03-05","Dr. Alec Rubiato","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Carl Betio","Barangay Health Worker","Xpert MTB/RIF","37","Pending","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("251","Mabini Health Plus","2018-03-05","Dr. Carl Betio","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Alec Rubiato","Barangay Health Worker","Xpert MTB/RIF","42","Pending","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("252","Bata Barangay Health Station","2018-03-05","Dr. Erul John Ubas","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","193","Pending","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("253","Granada Barangay Health Station","2018-03-05","Dr. Carl Betio","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Alec Rubiato","Barangay Health Worker","Xpert MTB/RIF","34","Pending","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("254","Pahanocoy Barangay Health Station","2018-03-05","Dr. Carl Betio","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Alvin Yanson","Barangay Health Worker","Xpert MTB/RIF","94","Pending","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("255","Alijis Barangay Health Station","2018-03-05","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-03-06","2018-03-06","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","172","Pending","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("256","Handumanan Barangay Health Station","2018-03-05","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","182","Done","March 5, 2018","2018"); 
INSERT INTO laboratory_request VALUES("257","Alijis Barangay Health Station","2018-03-05","Dr. Leonel Entes","Diagnostic","Sputum","Yes","2018-03-05","2018-03-05","Dr. Leonel Entes","Barangay Health Worker","Xpert MTB/RIF","35","Pending","March 5, 2018","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("18","Banago Barangay Health Station","Biogesic","January 11, 2018","Jan","2018","25","Alson Bayon-on"); 
INSERT INTO medication_dispensation VALUES("19","Banago Barangay Health Station","Biogesic","January 11, 2018","Jan","2018","15","Gabriel Banua"); 
INSERT INTO medication_dispensation VALUES("20","Alijis Barangay Health Station","Rifampicin","January 11, 2018","Jan","2018","26","Leonel Entes"); 
INSERT INTO medication_dispensation VALUES("21","Banago Barangay Health Station","medicine sample","January 15, 2018","Jan","2018","50","alson"); 
INSERT INTO medication_dispensation VALUES("22","Banago Barangay Health Station","medicine sample","January 15, 2018","Jan","2018","25","gabriel"); 
INSERT INTO medication_dispensation VALUES("23","ABCASA Barangay Health Station","Isoniazid","January 22, 2018","Jan","2018","2","Dr. Haro"); 
INSERT INTO medication_dispensation VALUES("24","Alangilan Barangay Health Station","Ethambutol","January 27, 2018","Jan","2018","10","Sir Rogy"); 
INSERT INTO medication_dispensation VALUES("25","Mandalagan Barangay Health Station","Pyrazinamide","February 8, 2018","Feb","2018","47","Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("26","Handumanan Barangay Health Station","Ethambutol","February 8, 2018","Feb","2018","97","alvin"); 
INSERT INTO medication_dispensation VALUES("27","ABCASA Barangay Health Station","Streptomycin","February 8, 2018","Feb","2018","7","Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("28","Bata Barangay Health Station","Streptomycin","February 8, 2018","Feb","2018","95","Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("29","Estefania Barangay Health Station","Streptomycin","February 8, 2018","Feb","2018","3","Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("30","Alijis Barangay Health Station","Pyrazinamide","February 8, 2018","Feb","2018","80","Dr. Alvin"); 
INSERT INTO medication_dispensation VALUES("31","Granada Barangay Health Station","Pyrazinamide","February 8, 2018","Feb","2018","20","Dr. Alvin"); 
INSERT INTO medication_dispensation VALUES("32","Granada Barangay Health Station","Pyrazinamide","February 8, 2018","Feb","2018","100","Dr. Alvin"); 
INSERT INTO medication_dispensation VALUES("33","Estefania Barangay Health Station","Levofloxacin","February 8, 2018","Feb","2018","100","Dr. Alvin"); 
INSERT INTO medication_dispensation VALUES("34","Handumanan Barangay Health Station","Pyrazinamide","February 8, 2018","Feb","2018","100","Dr. Alvin"); 
INSERT INTO medication_dispensation VALUES("35","Alijis Barangay Health Station","Pyrazinamide","February 9, 2018","Feb","2018","2","alson"); 
INSERT INTO medication_dispensation VALUES("36","Lopez Jaena Health Plus","Rifampicin","February 10, 2018","Feb","2018","300","Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("37","Alijis Barangay Health Station","Pyrazinamide","February 15, 2018","Feb","2018","100","Dr. Alvin"); 
INSERT INTO medication_dispensation VALUES("38","Alijis Barangay Health Station","Levofloxacin","February 15, 2018","Feb","2018","97","Dr. Alvin"); 
INSERT INTO medication_dispensation VALUES("39","ABCASA Barangay Health Station","Levofloxacin","February 17, 2018","Feb","2018","50","Dr. Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("40","Alijis Barangay Health Station","Rifampicin","February 27, 2018","Feb","2018","4","Dr. Leonel Entes"); 
INSERT INTO medication_dispensation VALUES("41","Villa Esperanza Barangay Health Station","Isoniazid","February 27, 2018","Feb","2018","20","Alvin Yanson"); 
INSERT INTO medication_dispensation VALUES("42","Banago Barangay Health Station","Isoniazid","February 27, 2018","Feb","2018","20","ALson John Bayon-on"); 
INSERT INTO medication_dispensation VALUES("43","Estefania Barangay Health Station","Rifampicin","March 3, 2018","Mar","2018","20","Dr. Elmer Haro"); 
INSERT INTO medication_dispensation VALUES("44","Alijis Barangay Health Station","Kanamycin","March 5, 2018","Mar","2018","97","Alvin yanson"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `running_balance` int(10) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Isoniazid","Tablet","This is Isoniazid","158"); 
INSERT INTO medicine VALUES("3","Rifampicin","Tablet","This is Rifampicin","76"); 
INSERT INTO medicine VALUES("4","Ethambutol","Tablet","This is Ethambutol","99"); 
INSERT INTO medicine VALUES("5","Streptomycin","Tablet","This is Streptomycin","101"); 
INSERT INTO medicine VALUES("21","Pyrazinamide","Tablet","Pyrazinamide","101"); 
INSERT INTO medicine VALUES("22","Levofloxacin","Syrup","This is Levofloxacin","58"); 
INSERT INTO medicine VALUES("25","Kanamycin","Tablet","This is Kanamycin","3"); 
INSERT INTO medicine VALUES("46","Test","Tablet","Test 2","4"); 
INSERT INTO medicine VALUES("47","test2","Syrup","test2","0"); 
INSERT INTO medicine VALUES("48","dpota","Tablet","This is test","0"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

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
INSERT INTO medicine_stocks VALUES("16","Arendo","300","December 31, 2017, 7:18 pm"); 
INSERT INTO medicine_stocks VALUES("17","Isoniazid","100","January 5, 2018, 3:18 pm"); 
INSERT INTO medicine_stocks VALUES("18","Biogesic","100","January 5, 2018, 3:20 pm"); 
INSERT INTO medicine_stocks VALUES("19","Isoniazid","2000000","January 8, 2018, 3:51 pm"); 
INSERT INTO medicine_stocks VALUES("20","medicine sample","100","January 15, 2018, 6:55 pm"); 
INSERT INTO medicine_stocks VALUES("21","Pyrazinamide","50","February 7, 2018, 10:49 pm"); 
INSERT INTO medicine_stocks VALUES("22","Ethambutol","100","February 8, 2018, 11:22 am"); 
INSERT INTO medicine_stocks VALUES("23","Streptomycin","100","February 8, 2018, 9:05 pm"); 
INSERT INTO medicine_stocks VALUES("24","Pyrazinamide","100","February 8, 2018, 9:17 pm"); 
INSERT INTO medicine_stocks VALUES("25","Levofloxacin","100","February 8, 2018, 9:41 pm"); 
INSERT INTO medicine_stocks VALUES("26","Ethambutol","100","February 8, 2018, 9:41 pm"); 
INSERT INTO medicine_stocks VALUES("27","Streptomycin","100","February 8, 2018, 9:41 pm"); 
INSERT INTO medicine_stocks VALUES("28","Pyrazinamide","100","February 8, 2018, 9:48 pm"); 
INSERT INTO medicine_stocks VALUES("29","Pyrazinamide","100","February 8, 2018, 9:50 pm"); 
INSERT INTO medicine_stocks VALUES("30","Sample Medicine","250","February 11, 2018, 1:29 am"); 
INSERT INTO medicine_stocks VALUES("31","Pyrazinamide","100","February 15, 2018, 10:21 pm"); 
INSERT INTO medicine_stocks VALUES("32","Levofloxacin","100","February 15, 2018, 10:21 pm"); 
INSERT INTO medicine_stocks VALUES("33","Pyrazinamide","100","February 15, 2018, 10:26 pm"); 
INSERT INTO medicine_stocks VALUES("34","Levofloxacin","50","February 17, 2018, 1:09 am"); 
INSERT INTO medicine_stocks VALUES("35","Levofloxacin","55","February 24, 2018, 9:34 pm"); 
INSERT INTO medicine_stocks VALUES("36","Kanamycin","100","February 28, 2018, 12:17 am"); 
INSERT INTO medicine_stocks VALUES("37","Biogesic","50","February 28, 2018, 12:17 am"); 
INSERT INTO medicine_stocks VALUES("38","Test","20","March 3, 2018"); 
INSERT INTO medicine_stocks VALUES("39","New Medicine","20","March 3, 2018"); 
INSERT INTO medicine_stocks VALUES("40","Test","4","March 5, 2018"); 



DROP TABLE patient;

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` char(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("1","Alson John Bayon-onzzz","0","Male","Prk. Langis, Brgy. Banago, Bacolod City","Banago","1991-06-12","178","433-2449","Negros Occidental","Teacher","10992241","Dr. Sabay","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("2","Alvin Yanson","3","Male","eroreco bacolod city","Pahanocoy","2017-01-08","178","433-2449","Negros Occidental","Student","1993121","Dr. Haro","433-2449 local 181","Registered","Done","2017"); 
INSERT INTO patient VALUES("3","Erul John Ubas","21","Male","Sum-ag, Bacolod City","Sumag ","1997-08-19","178","433-2449 local","Negros Occidental","","","Dr. Adricula","433-2449 local 181","Registered","Done","2017"); 
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
INSERT INTO patient VALUES("21","Aldren Yanson","23","Male","Prk. Casiana Bacolod City","Mandalagan","1995-02-07","178","7136113","Negros Occidental","Student","No Philhealth","Alvin Yanson","09952784676","Registered","Done","2017"); 
INSERT INTO patient VALUES("22","Mark Torres","21","Male","lizares ave. bacolod","Brgy 39","1997-07-28","178","4332449","Negros Occidental","Student","No Philhealth","Dr. Haro","433-2449","Registered","Pending","2017"); 
INSERT INTO patient VALUES("23","qe","7","Male","qweqweq","Banago","2017-11-07","31","31231","Negros Occidental","eqeqw","eqweq","qweqweq","31231","Registered","Pending","2017"); 
INSERT INTO patient VALUES("24","John Wick","43","Male","Blk 33, Lot 4, Firmville Subd. Bacolod","Estefania ","2017-12-27","125","4332449","Negros Occidental","Killer","10-3213131-98","Dr. Haro","433-2449 local 181","Registered","Pending","2017"); 
INSERT INTO patient VALUES("25","Kenneth Cayetano","20","Male","Bacolod City","Sumag ","1997-05-08","178","4332449","Negros Occidental","Student","10-2312321-10","Alvin Yanson","433-2449","Registered","Pending","2017"); 
INSERT INTO patient VALUES("26","Matt Labarerjos","7","Male","qeqweqw","Banago","2011-08-24","123","4332449","Negros Occidental","Student","31321","Boots","433-2449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("27","Gabriel Banua","8","Male","asdahda","Bata","2009-04-15","178","2323303232","Negros Occidental","Student","2343242","21321","43234","Registered","Pending","2018"); 
INSERT INTO patient VALUES("28","Natasha	Rose","17","Female","Blk. 1, Lot 2, Firmville Subd., Bacolod City","Pahanocoy","2000-04-16","167","09125560202","Negros Occidental","","","Traci	Warren","433-2393","Registered","Pending","2018"); 
INSERT INTO patient VALUES("29","Cynthia	Smith","20","Female","Blk. 2, Lot 2, Firmville Subd., Bacolod City","Pahanocoy","1997-09-23","156","09123127267","Negros Occidental","","","Salvador Buchanan","433-2491","Registered","Pending","2018"); 
INSERT INTO patient VALUES("30","James Hunter","19","Male","Blk. 3, Lot 3, Firmville Subd., Bacolod City","Pahanocoy","1998-10-28","178","09235923789","Negros Occidental","","","Santos Boone","444-2333","Registered","Pending","2018"); 
INSERT INTO patient VALUES("31","Darlene	Conner","41","Female","Blk. 3, Lot 3, Firmville Subd., Bacolod City","Pahanocoy","1976-10-09","178","09992365307","Negros Occidental","","","Rochelle	Wong","433-1233","Registered","Pending","2018"); 
INSERT INTO patient VALUES("32","Holly Washington","61","Male","Blk. 4, Lot 4, Firmville Subd., Bacolod City","Pahanocoy","1956-08-26","178","09236059390","Negros Occidental","Teacher","","Billy	Bowen","453-2342","Registered","Pending","2018"); 
INSERT INTO patient VALUES("33","Della Ellis","28","Female","Blk. 6, Lot 6, Firmville Subd., Bacolod City","Pahanocoy","1989-09-28","178","09989014134","Negros Occidental","Teacher","","Orlando	Pittman","443-0967","Registered","Pending","2018"); 
INSERT INTO patient VALUES("34","Jack	Stone","29","Male","Blk. 7, Lot 7, Firmville Subd., Bacolod City","Pahanocoy","1988-10-29","189","09982697063","Negros Occidental","Engineer","","Al Horton","444-5678","Registered","Pending","2018"); 
INSERT INTO patient VALUES("35","Wayne Walters","50","Male","Blk. 8, Lot 8, Firmville Subd., Bacolod City","Pahanocoy","1967-09-10","189","09179692416","Negros Occidental","Teaher","","Kristopher Craig","09455555122","Registered","Pending","2018"); 
INSERT INTO patient VALUES("36","Dianne Day","26","Female","Blk. 9, Lot 10, FIrmville Subd., Bacolod City","Pahanocoy","1991-10-29","167","09971820372","Negros Occidental","Teacher","","Wade Gilbert","143-4733","Registered","Pending","2018"); 
INSERT INTO patient VALUES("37","Israel Pope","14","Male","Blk. 1, Lot 1, Eroreco Subd., Bacolod City","Mandalagan","1992-10-12","167","09183650258","Negros Occidental","Architect","","Kayla Fitzgerald","444-6789","Registered","Pending","2018"); 
INSERT INTO patient VALUES("38","Rachel Bailey","24","Female","Blk. 2, Lot 2, Eroreco Subd., Bacolod City","Mandalagan","1993-08-03","189","09219146897","Negros Occidental","Make-up Artist","","Carroll Hoffman","432-0978","Registered","Pending","2018"); 
INSERT INTO patient VALUES("39","Willie Fields","50","Male","Blk. 4, Lot 4, Eroreco Subd., Bacolod City","Mandalagan","1967-12-28","159","09982745139","Negros Occidental","Driver","","Lee	Todd","433-8909","Registered","Pending","2018"); 
INSERT INTO patient VALUES("40","Rose Richardson","26","Female","Blk. 1, Lot 2, Estefania Subd., Bacolod City","Estefania ","1991-10-26","178","09789256557","Negros Occidental","Taxi Driver","","Patsy Hill","445-1879","Registered","Pending","2018"); 
INSERT INTO patient VALUES("41","Cora Alexander","27","Female","Blk. 3, Lot 3, RPHS, Bacolod City","Alijis","1990-12-12","178","09187843740","Negros Occidental","Driver","","Colin Patton","431-9019","Registered","Pending","2018"); 
INSERT INTO patient VALUES("42","Gretchen Gross","39","Male","Blk. 2, Lot 2, RPHS Subd., Bacolod City","Alijis","1978-12-10","167","09185597119","Negros Occidental","Teacher","","Tanya Pena","444-5627","Registered","Pending","2018"); 
INSERT INTO patient VALUES("43","Julian Hicks","26","Male","Blk. 3, Lot 3, RPHS Subd., Bacolod City","Alijis","1991-06-06","190","09168459796","Negros Occidental","Driver","","Josefina Rose","444-9017","Registered","Pending","2018"); 
INSERT INTO patient VALUES("44","Garrett Warren","28","Male","Blk. 4, Lot 4, RPHS, Bacolod City","Alijis","1989-10-11","165","09185865441","Negros Occidental","Driver","","Colleen Gibbs","442-1790","Registered","Pending","2018"); 
INSERT INTO patient VALUES("45","Angelina Morrison","39","Female","Blk. 5, Lot ,5 RPHS, Bacolod City","Alijis","1978-02-02","189","09176378293","Negros Occidental","Teacher","","Rochelle	Freeman","433-1654","Registered","Pending","2018"); 
INSERT INTO patient VALUES("46","Rose Barker","19","Female","Blk. 6, Lot 7, RPHS, Bacolod City","Alijis","1998-06-08","189","09162196131","Negros Occidental","","","Noel Burke","444-5612","Registered","Pending","2018"); 
INSERT INTO patient VALUES("47","Rudolph	Moreno","27","Male","Blk. 4, Lot 5, Terra Nova Subd., Bacolod City","Mansilingan","1990-11-11","156","09256102730","Negros Occidental","","","Percy Goodwin","434-7810","Registered","Pending","2018"); 
INSERT INTO patient VALUES("48","Malcolm Dennis","36","Male","Blk. 3, Lot 3, Terra Nova Subd., Bacolod City","Mansilingan","1981-04-02","189","09958997710","Negros Occidental","Driver","","Enrique Paul","421-8910","Registered","Pending","2018"); 
INSERT INTO patient VALUES("49","Lewis Reeves","33","Male","Blk. 4, Lot 4, Terra Nova Subd., Bacolod City","Mansilingan","1984-03-26","178","09984930569","Negros Occidental","Driver","","Wilfred Flowers","421-8936","Registered","Pending","2018"); 
INSERT INTO patient VALUES("50","Roman Reyes","32","Male","Blk. 11, Lot 11, Terra Nova Subd., Bacolod City","Mansilingan","1985-10-09","171","09195892969","Negros Occidental","Driver","","Jasmine	Singleton","433-2019","Registered","Pending","2018"); 
INSERT INTO patient VALUES("51","Elsa	Stevens","25","Female","Blk. 12, Lot 12, Terra Nova Subd., Mansilingan","Mansilingan","1992-08-11","172","09157734718","Negros Occidental","","","Stacey Lyons","442-1868","Registered","Pending","2018"); 
INSERT INTO patient VALUES("52","Maryann Collier","24","Female","Blk. 14, Lot 4, Terra Nova Subd., Bacolod City","Mansilingan","1993-07-07","175","09942493132","Negros Occidental","","","Julian Torres","445-1893","Registered","Pending","2018"); 
INSERT INTO patient VALUES("53","Ervin Hughes","22","Male","Blk. 15, Lot 5, Terra Nova Subd., Bacolod City","Mansilingan","1995-02-07","176","09173945635","Negros Occidental","","","Wilfred Vega","453-2890","Registered","Pending","2018"); 
INSERT INTO patient VALUES("54","Elias Moody","20","Male","Blk. 21, Lot 5, Terra Nova Subd., Bacolod City","Mansilingan","1997-12-08","177","09967642920","Negros Occidental","","","Alton Ball","442-9078","Registered","Pending","2018"); 
INSERT INTO patient VALUES("55","Margarita Owen","18","Female","Blk. 25, Lot 1, Terra Nova Subd., Bacolod City","Mansilingan","1999-12-04","165","09955554660","Negros Occidental","","","Julie	Phillips","423-7890","Registered","Pending","2018"); 
INSERT INTO patient VALUES("56","Jason Massey","26","Male","Blk. 12, Lot 29, Terra Nova Subd., Bacolod City","Mansilingan","1991-05-02","167","09214176038","Negros Occidental","","","Tami Walker","432-9019","Registered","Pending","2018"); 
INSERT INTO patient VALUES("57","Andrea Page","18","Female","Blk. 1, Lot 1, Florida St., Bacolod City","Villamonte","1999-10-02","168","09537241774","Negros Occidental","","","Marc Shelton","443-9078","Registered","Pending","2018"); 
INSERT INTO patient VALUES("58","Jon	Richardson","25","Male","Blk. 2, Lot 2, Florida St., Bacolod City","Villamonte","1992-10-08","189","09589695040","Negros Occidental","","","Penny Barnes","444-2719","Registered","Pending","2018"); 
INSERT INTO patient VALUES("59","Abraham Fuller","37","Male","Blk. 4, Lot 4, Florida St., Bacolod City","Villamonte","1981-01-01","189","09556797405","Negros Occidental","","","Peggy Weber","442-1902","Registered","Pending","2018"); 
INSERT INTO patient VALUES("60","Dianna Reese","35","Female","Blk. 5, Lot 5, Florida St., Bacolod City","Villamonte","1982-02-02","188","09487684788","Negros Occidental","","","Nadine Watkins","444-1212","Registered","Pending","2018"); 
INSERT INTO patient VALUES("61","Violet Harrington","34","Female","Blk. 7, Lot 7, Florida St., Bacolod City","Villamonte","1983-03-03","163","09943612962","Negros Occidental","","","Samuel Mcguire","489-2791","Registered","Pending","2018"); 
INSERT INTO patient VALUES("62","Lawrence Knight","33","Male","Blk. 8, Lot 8, Florida St., Bacolod City","Villamonte","1984-04-04","164","09756630879","Negros Occidental","","","Brenda	Gardner","421-9056","Registered","Pending","2018"); 
INSERT INTO patient VALUES("63","Evan Morgan","32","Male","Blk. 9, Lot 9, Florida St., Bacolod City","Villamonte","1985-05-05","165","09135735035","Negros Occidental","","","Troy Nelson","405-2145","Registered","Pending","2018"); 
INSERT INTO patient VALUES("64","Lewis Rice","31","Male","Blk. 10, Lot 10, Florida St., Bacolod City","Villamonte","1986-06-06","172","09108600183","Negros Occidental","","","Clayton Ramos","489-2302","Registered","Pending","2018"); 
INSERT INTO patient VALUES("65","Robin Gutierrez","30","Male","Blk. 11, Lot 11, Florida St., Bacolod City","Villamonte","1987-07-07","145","09354451350","Negros Occidental","","","Rudolph	Pittman","456-1234","Registered","Pending","2018"); 
INSERT INTO patient VALUES("66","Philip Young","29","Male","Blk. 12, Lot 12, Florida St., Bacolod City","Villamonte","1988-08-08","177","09961592547","Negros Occidental","","","Jimmie Adkins","421-9078","Registered","Pending","2018"); 
INSERT INTO patient VALUES("67","Brian Porter","28","Male","Blk. 1, Lot 1, Fiesta Homes Subd., Bacolod City","Sumag ","1989-09-09","177","09529213492","Negros Occidental","","","Shane Benson","444-2901","Registered","Pending","2018"); 
INSERT INTO patient VALUES("68","Mae Hunter","27","Female","Blk. 2, Lot 2, Fiesta Homes Subd., Bacolod City","Sumag ","1990-10-10","188","09248536079","Negros Occidental","","","Tabitha	Gregory","489-7621","Registered","Pending","2018"); 
INSERT INTO patient VALUES("69","Terrance Delgado","26","Male","Blk. 4, Lot 4, Fiesta Homes Subd., Bacolod City","Sumag ","1991-11-11","181","09856243918","Negros Occidental","","","Kristine Miller","456-1241","Registered","Pending","2018"); 
INSERT INTO patient VALUES("70","Kristine	Miller","25","Female","Blk. 14, Lot 14, Fiesta Homes Subd., Bacolod City","Sumag ","1992-12-12","171","09981969707","Negros Occidental","","","Annette	Perkins","433-2448","Registered","Pending","2018"); 
INSERT INTO patient VALUES("71","Terry Patterson","47","Male","Blk. 16, Lot 17, Fiesta Homes Subd., Bacolod City","Sumag ","1971-01-01","172","09987739610","Negros Occidental","","","Anne Medina","489-1299","Registered","Pending","2018"); 
INSERT INTO patient VALUES("72","Brittany	Stone","45","Female","Blk. 21, Lot 22, Fiesta Homes Subd., Bacolod City","Sumag ","1972-02-02","189","09727452567","Negros Occidental","","","Alejandro Santiago","456-1289","Registered","Pending","2018"); 
INSERT INTO patient VALUES("73","Blake Hamilton","44","Male","Blk. 22, Lot 23, Fiesta Homes Subd., Bacolod City","Sumag ","1973-03-03","172","09914284238","Negros Occidental","","","Elsa	Perry","442-9078","Registered","Pending","2018"); 
INSERT INTO patient VALUES("74","Samantha Robbins","43","Female","Blk. 23, Lot 24, Fiesta Homes Subd., Bacolod City","Sumag ","1974-04-04","188","09725363134","Negros Occidental","","","Kristina Lamb","456-1232","Registered","Pending","2018"); 
INSERT INTO patient VALUES("75","Alfredo Mills","42","Male","Blk. 24, Lot 25, Fiesta Homes Subd., Bacolod City","Sumag ","1975-05-05","189","09961319942","Negros Occidental","","","Nicole Buchanan","421-1891","Registered","Pending","2018"); 
INSERT INTO patient VALUES("76","Viola Sandoval","41","Female","Blk. 25, Lot 26, Fiesta Homes Subd., Bacolod City","Sumag ","1976-06-06","156","09786503712","Negros Occidental","","","Steve Wallace","476-2382","Registered","Pending","2018"); 
INSERT INTO patient VALUES("78","Cookies Leonel","7","Female","Blk. 1, Lot 2, Firmville Subd., Bacolod City","Pahanocoy","0000-00-00","178","4332449","Negros Occidental","Student","","Vincent Suyo","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("79","Michael De Los Santos","28","Male","Blk. 11, Lot 36, Firmville Subd., Bacolod City","Pahanocoy","April 12, 1989","178","4332449","Negros Occidental","Teacher","12","Dr. Haro","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("80","Gilberto Lopez","28","Male","Blk. 1, Lot 2, Fiesta Homes Subd., Bacolod City","Sumag ","February 01, 1989","178","4332449","Negros Occidental","Teacher","","Monique Peterson","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("81","Lorenzo Steele","26","Male","Blk. 1, Lot 2, Fiesta Homes, Subd., Bacolod City","Sumag ","February 08, 1991","178","7136113","Negros Occidental","Teacher","","Ellis	Sullivan","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("82","Howard Carlson","8","Male","Blk. 3, Lot 3, Fiesta Homes Subd., Bacolod City","Sumag ","February 05, 2009","178","7136113","Negros Occidental","Teacher","","Kathryn	Jenkins","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("83","Erika Grant","7","Female","Blk. 4, Lot 4, Fiesta Homes, Bacolod City","Sumag ","February 10, 2010","178","7136113","Negros Occidental","Teacher","","Angelica	Rice","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("84","Fred Alvarez","37","Male","Blk. 5, Lot 5, Fiesta Homes, Subd., Bacolod City","Sumag ","April 09, 1980","178","7136113","Negros Occidental","Teacher","","Kristina Taylor","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("85","Tiffany Burns","21","Female","Blk. 7, Lot 7, Fiesta Homes Subd., Bacolod City","Sumag ","April 18, 1996","178","7136113","Negros Occidental","Driver","","Abraham Pratt","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("86","Troy Owens","15","Male","Blk. 8, Lot 8, Fiesta Homes Subd., Bacolod City","Sumag ","April 17, 2002","178","7136113","Negros Occidental","Driver","","Duane Pierce","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("87","Mildred Powers","18","Male","Blk. 9, Lot 9, Fiesta Homes Subd., Bacolod City","Sumag ","March 10, 1999","178","7136113","Negros Occidental","Driver","","Todd Barnett","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("88","Ricardo Warner","18","Male","Blk. 10, Lot 10, Fiesta Homes Subd., Bacolod City","Sumag ","April 14, 1999","178","7136113","Negros Occidental","Driver","","Kellie Bates","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("89","Earl Floyd","17","Male","Blk. 1, Lot 1, Firmville Subd., Bacolod City","Pahanocoy","February 01, 2000","178","4337867","Negros Occidental","Teacher","","Karl	Lynch","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("90","Christy Weber","18","Male","Blk. 1, Lot 1, Florida St., Bacolod City","Villamonte","February 17, 1999","178","7136113","Negros Occidental","Teacher","","Roxanne Padilla","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("91","Lorena Hunt","16","Male","Blk. 1, Lot 2, Florida St., Bacolod City","Villamonte","March 12, 2001","178","7136113","Negros Occidental","Driver","","Christina Pratt","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("92","Mike Moore","16","Male","Blk. 3, Lot 3, Florida St., Bacolod City","Villamonte","April 04, 2001","178","4345678","Negros Occidental","Teacher","","Natasha	James","7138979","Registered","Pending","2018"); 
INSERT INTO patient VALUES("93","Donald Brewer","18","Male","Blk. 5, Lot 5, Florida St., Bacolod City","Villamonte","March 17, 1999","178","4335897","Negros Occidental","Teacher","","Cheryl Peterson","4330998","Registered","Pending","2018"); 
INSERT INTO patient VALUES("94","Glenn Fleming","18","Male","Blk. 6, Lot 6, Florida St., Bacolod City","Villamonte","February 03, 1999","178","4332354","Negros Occidental","Driver","","Clay	Bailey","4323890","Registered","Pending","2018"); 
INSERT INTO patient VALUES("95","Jan Torres","18","Male","Blk. 7, Lot 7, Florida St., Bacolod City","Villamonte","April 15, 1999","178","4337856","Negros Occidental","Teacher","","Horace	Townsend","43367231","Registered","Pending","2018"); 
INSERT INTO patient VALUES("96","Leigh Mendoza","17","Male","Blk. 8, Lot 8, Florida St., Bacolod City","Villamonte","February 03, 2000","178","4561323","Negros Occidental","Teacher","","Otis	Diaz","4338912","Registered","Pending","2018"); 
INSERT INTO patient VALUES("97","Julio Frank","17","Male","Blk. 9, Lot 9, Florida St., Bacolod City","Villamonte","February 11, 2000","178","4335678","Negros Occidental","Teacher","","Ann	Pittman","4356132","Registered","Pending","2018"); 
INSERT INTO patient VALUES("98","Russel Lopez","16","Male","Blk. 1, Lot 56, Florida St., Bacolod City","Villamonte","April 04, 2001","178","4332449","Negros Occidental","Student","12","Dr. Haro","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("99","Mark Jason Jagonoy","26","Male","Blk. 1, Lot 2, Pahanocoy Village, Bacolod City","Pahanocoy","April 18, 1991","178","09932313142","Negros Occidental","Student","12","Alvin Yanson","7136113","Registered","Pending","2018"); 
INSERT INTO patient VALUES("168","Kathleen Lindblad","38","Female","Blk. 1, Lot 1, Villa Lucasan, Bacolod City","Abcasa","January 09, 1980","178","4332449","Negros Occidental","Teacher","123412412421","Coreen Miles","43323545","Registered","Pending","2018"); 
INSERT INTO patient VALUES("169","Coreen Miles","8","Female","Blk. 2, Lot 2, Villa Lucasan, Bacolod City","Abcasa","April 08, 2009","178","4335678","Negros Occidental","","","Harriette Ahn","4335623","Registered","Pending","2018"); 
INSERT INTO patient VALUES("170","Shanika Ramon","19","Female","Blk. 3, Lot 3, Villa Lucasan, Bacolod City","Abcasa","February 03, 1999","189","4562453","Negros Occidental","Employee","100934257893","Cassaundra Legrande","4242456","Registered","Pending","2018"); 
INSERT INTO patient VALUES("171","Cathy Halsted","23","Female","Blk. 4, Lot 4, Villa Lucasan, Bacolod City","Abcasa","June 15, 1994","167","4335698","Negros Occidental","Teacher","109935251561","Elissa Bouley","4563433","Registered","Pending","2018"); 
INSERT INTO patient VALUES("172","Jazmine Peskin","23","Female","Blk. 5, Lot 5, Villa Lucasan, Bacolod City","Abcasa","June 22, 1994","156","4447863","Negros Occidental","Teacher","109934193412","Tressa Starke","4335467","Registered","Pending","2018"); 
INSERT INTO patient VALUES("173","Omar Wheeless","25","Male","Blk. 6, Lot 6, Villa Lucasan, Bacolod City","Abcasa","April 15, 1992","178","4338909","Negros Occidental","Teacher","109313099311","Darlene Freeburg","4534356","Registered","Pending","2018"); 
INSERT INTO patient VALUES("174","Janay Pickrell","13","Female","Blk. 7, Lot 7, Villa Lucasan, Bacolod City","Abcasa","April 14, 2004","170","4335624","Negros Occidental","Teacher","1099312383419","Huey Dias","4335357","Registered","Pending","2018"); 
INSERT INTO patient VALUES("175","Amira Strobel","21","Female","Blk. 8, Lot 8, Villa Lucasan, Bacolod City","Abcasa","June 05, 1996","170","43389068","Negros Occidental","Teacher","1099314755632","Eusebia Mix","4335698","Registered","Pending","2018"); 
INSERT INTO patient VALUES("176","Nicki Gagnier","20","Female","Blk. 9, Lot 9, Villa Lucasan, Bacolod City","Abcasa","June 11, 1997","170","4335356","Negros Occidental","Teacher","109931747532","Fanny Nussbaum","43324756","Registered","Pending","2018"); 
INSERT INTO patient VALUES("177","Elodia Whitis","16","Female","Blk. 10, Lot 10, Villa Lucasan, Bacolod City","Abcasa","March 12, 2001","170","4338697","Negros Occidental","Teacher","109983126422","Joi Capron","4339308","Registered","Pending","2018"); 
INSERT INTO patient VALUES("178","Lavonia Nuckles","33","Female","Blk. 11, Lot 11, Villa Lucasan, Bacolod City","Abcasa","June 13, 1984","170","4339327","Negros Occidental","Teacher","100831624122","Faviola Vonderheide","4339506","Registered","Pending","2018"); 
INSERT INTO patient VALUES("179","Janella Escamilla","16","Female","Blk. 12, Lot 12, Villa Lucasan, Bacolod City","Abcasa","March 06, 2001","170","4332456","Negros Occidental","Teacher","109931831252","Johnna Hauser","4331345","Registered","Pending","2018"); 
INSERT INTO patient VALUES("180","Krissy Reisner","19","Female","Blk. 13, Lot 13, Villa Lucasan, Bacolod City","Abcasa","June 03, 1998","167","4335123","Negros Occidental","Teacher","101327141245","Earnest Clutter","4332671","Registered","Pending","2018"); 
INSERT INTO patient VALUES("181","Francene Chevere","18","Female","Blk. 14, Lot 14, Villa Lucasan, Bacolod City","Abcasa","March 09, 1999","180","4332456","Negros Occidental","Teacher","1099317138742","Jeanice Hartsell","433023","Registered","Pending","2018"); 
INSERT INTO patient VALUES("182","John Doe","28","Male","Blk. 1, Lot 90, Firmville Subd., Bacolod City","Taculing","March 07, 1989","178","4332449","Negros Occidental","Teacher","109234204234","Elmer Haro","4332449","Registered","Pending","2018"); 
INSERT INTO patient VALUES("184","Samuel Newton","21","Male","Blk. 2, Lot 2, Fortune Towne, Bacolod City","Estefania","January 21, 1996","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("185","Yvette Ramos","21","Female","Blk. 3, Lot 1, Fortune Towne, Bacolod City","Estefania","January 21, 1996","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("186","Wilson Phelps","21","Male","Blk. 4, Lot 1, Fortune Towne, Bacolod City","Estefania","January 21, 1996","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("187","Jay Webb","21","Male","Blk. 5, Lot 1, Fortune Towne, Bacolod City","Estefania","January 21, 1996","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("188","Vicki Santiago","21","Female","Blk. 6, Lot 1, Fortune Towne, Bacolod City","Estefania","January 21, 1996","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("189","Eloise Dunn","20","Female","Blk. 7, Lot 1, Fortune Towne, Bacolod City","Estefania","January 21, 1997","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("190","Velma Dennis","40","Female","Blk. 8, Lot 1, Fortune Towne, Bacolod City","Estefania","January 21, 1977","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("191","Lamar Robertson","41","Male","Blk. 9, Lot 1, Fortune Towne, Bacolod City","Estefania","January 21, 1976","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("192","Victoria Higgins
","41","Female","Blk. 10, Lot 1, Fortune Towne, Bacolod City","Estefania","January 21, 1976","178","4332489","Negros Occidental","Teacher","102453509081","Elmer Haro","4332783","Registered","Pending","2018"); 
INSERT INTO patient VALUES("193","Jake Wall","19","Male","Blk. 1, Lot 2, Firmville Subd., Bacolod City","Pahanocoy","1999-02-10","178","4332449","Negros Occidental","Teacher","109234204234","Leonel Entes","4332449","Unregister","Pending","2018"); 
INSERT INTO patient VALUES("194","Mike Andrew","18","Male","Blk. 1, Lot 3, Firmville, Bacolod City","Pahanocoy","1999-03-15","178","4332449","Negros Occidental","Teacher","109234204234","Leonel Entes","4332449","Unregister","Pending","2018"); 
INSERT INTO patient VALUES("195","Paul Bill","25","Male","Blk. 2, Lot 5, Firmville Bacolod City","Pahanocoy","1992-04-08","178","4332449","Negros Occidental","Teacher","109234204234","Leonel Entes","4332449","Unregister","Pending","2018"); 
INSERT INTO patient VALUES("196","Peter George","24","Male","Blk. 4, Lot 7, Firmville Bacolod City","Pahanocoy","1993-06-23","178","4332449","Negros Occidental","Teacher","109234204234","Leonel Entes","4332449","Unregister","Pending","2018"); 
INSERT INTO patient VALUES("197","Russel Moore","20","Male","Blk. 1, Lot 8, Firmville, Bacolod City","Pahanocoy","1997-08-09","178","4332449","Negros Occidental","Teacher","109234204234","Leonel Entes","4332449","Unregister","Pending","2018"); 
INSERT INTO patient VALUES("198","Willie Frank","28","Male","Blk. 1, Lot 2, Villa Lucasan, Bacolod City","Abcasa","1989-03-08","178","4332449","Negros Occidental","Teacher","1232132435312","Max McDonald","4332449","Registered","Pending","2018"); 



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
  `birthdate` varchar(20) NOT NULL,
  `status` char(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO patient_ipt VALUES("20","Carl Betio","1","171","Male","Blk. 1, Lot 12, Firmville, Bacolod City","Negros Occidental","Alvin Yanson","433-2449","2016-04-07","Registered","2018"); 
INSERT INTO patient_ipt VALUES("21","John Peter","4","178","Male","Bacolod City","Negros Occidental","Peter John","433-2449","2013-06-12","Registered","2018"); 
INSERT INTO patient_ipt VALUES("22","Louise Perez","4","178","Male","Blk. 1, Lot 2, Firmville Subd., Bacolod City","Negros Occidental","Dr. Haro","4332449","0000-00-00","Registered","2018"); 
INSERT INTO patient_ipt VALUES("23","Peter John","3","178","Male","Blk. 2, Lot 16, Florida St., Bacolod City","Negros Occidental","Alvin Yanson","7136113","June 20, 2014","Unregister","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;

INSERT INTO registration VALUES("26","November 25, 2017","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Alvin Yanson","Barangay Health Worker","Cured","2018","1","Nov","2017"); 
INSERT INTO registration VALUES("27","November 21, 2017","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Alson John Bayon-on","Nurse","Cured","2018","2","Nov","2017"); 
INSERT INTO registration VALUES("28","November 21, 2017","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Clinically Diagnosed","Pulmonary","No","No","Less than 1 month","Category Ia - 2HRZE/10HR","Carl Betio","Nurse","Currently in Treatment","2018","6","Nov","2017"); 
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
INSERT INTO registration VALUES("42","December 3, 2017","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Menard Gardose","Barangay Health Worker","Currently in Treatment","","18","Dec","2017"); 
INSERT INTO registration VALUES("43","December 6, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Mark Torres","Barangay Health Worker","Currently in Treatment","","19","Dec","2017"); 
INSERT INTO registration VALUES("44","December 14, 2017","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Arvi Capuras","Nurse","Failed","2018","20","Dec","2017"); 
INSERT INTO registration VALUES("45","December 19, 2017","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Steven Saludares","Barangay Health Worker","Currently in Treatment","","21","Dec","2017"); 
INSERT INTO registration VALUES("46","December 24, 2017","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Jam Dientes","Nurse","Currently in Treatment","","22","Dec","2017"); 
INSERT INTO registration VALUES("47","December 27, 2017","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Alvin Yanson","Nurse","Currently in Treatment","","23","Dec","2017"); 
INSERT INTO registration VALUES("48","December 27, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Rommel Adricula","Barangay Health Worker","Currently in Treatment","","24","Dec","2017"); 
INSERT INTO registration VALUES("49","Jan 31, 2017","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Boots","Barangay Health Worker","Currently in Treatment","2018","26","Jan","2018"); 
INSERT INTO registration VALUES("50","January 4, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","232","Barangay Health Worker","Currently in Treatment","2018","27","Jan","2018"); 
INSERT INTO registration VALUES("51","January 14, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Jake	Price","Barangay Health Worker","Currently in Treatment","2018","60","Jan","2018"); 
INSERT INTO registration VALUES("52","January 14, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Pat	Kelley","Barangay Health Worker","Currently in Treatment","2018","59","Jan","2018"); 
INSERT INTO registration VALUES("53","January 14, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Tami Harmon","Barangay Health Worker","Currently in Treatment","2018","57","Jan","2018"); 
INSERT INTO registration VALUES("54","January 14, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Tim	Wise","Barangay Health Worker","Died","2018","63","Jan","2018"); 
INSERT INTO registration VALUES("55","January 14, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Pearl Walters","Barangay Health Worker","Currently in Treatment","2018","58","Jan","2018"); 
INSERT INTO registration VALUES("56","January 14, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Clinically Diagnosed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Amanda	Flowers","Barangay Health Worker","Currently in Treatment","2018","62","Jan","2018"); 
INSERT INTO registration VALUES("57","January 14, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Ricardo	Cunningham","Barangay Health Worker","Currently in Treatment","2018","64","Jan","2018"); 
INSERT INTO registration VALUES("58","January 14, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Dallas Hubbard","Barangay Health Worker","Currently in Treatment","2018","66","Jan","2018"); 
INSERT INTO registration VALUES("59","January 14, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Wesley Russell","Barangay Health Worker","Currently in Treatment","2018","65","Jan","2018"); 
INSERT INTO registration VALUES("60","January 14, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Roosevelt Warner","Barangay Health Worker","Currently in Treatment","2018","61","Jan","2018"); 
INSERT INTO registration VALUES("61","January 14, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Jorge Owens","Barangay Health Worker","Currently in Treatment","2018","37","Jan","2018"); 
INSERT INTO registration VALUES("62","January 14, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Domingo Henry","Barangay Health Worker","Currently in Treatment","2018","38","Jan","2018"); 
INSERT INTO registration VALUES("63","January 14, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Kristin Lyons","Barangay Health Worker","Died","2018","39","Jan","2018"); 
INSERT INTO registration VALUES("64","January 14, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Francis Newman","Barangay Health Worker","Currently in Treatment","2018","75","Jan","2018"); 
INSERT INTO registration VALUES("65","January 14, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Damon Lawrence","Barangay Health Worker","Currently in Treatment","2018","73","Jan","2018"); 
INSERT INTO registration VALUES("66","January 14, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Jessica Carroll","Barangay Health Worker","Currently in Treatment","2018","67","Jan","2018"); 
INSERT INTO registration VALUES("67","January 14, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Frances Bryan","Barangay Health Worker","Currently in Treatment","2018","72","Jan","2018"); 
INSERT INTO registration VALUES("68","January 14, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Brett Miles","Barangay Health Worker","Currently in Treatment","2018","70","Jan","2018"); 
INSERT INTO registration VALUES("69","January 14, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category Ia - 2HRZE/10HR","Tracey Caldwell","Barangay Health Worker","Currently in Treatment","2018","68","Jan","2018"); 
INSERT INTO registration VALUES("70","January 14, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Melba Lloyd","Barangay Health Worker","Currently in Treatment","2018","74","Jan","2018"); 
INSERT INTO registration VALUES("71","January 14, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Brendan Collins","Barangay Health Worker","Currently in Treatment","2018","69","Jan","2018"); 
INSERT INTO registration VALUES("72","January 14, 2018","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Steven Mcbride","Barangay Health Worker","Currently in Treatment","2018","71","Jan","2018"); 
INSERT INTO registration VALUES("73","January 14, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Mamie Howard","Barangay Health Worker","Currently in Treatment","2018","76","Jan","2018"); 
INSERT INTO registration VALUES("74","January 24, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","78","Jan","2018"); 
INSERT INTO registration VALUES("75","January 24, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Alson Bayon-on","Barangay Health Worker","Currently in Treatment","2018","29","Jan","2018"); 
INSERT INTO registration VALUES("76","January 24, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","34","Jan","2018"); 
INSERT INTO registration VALUES("77","January 24, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Erul John Ubas","Barangay Health Worker","Currently in Treatment","2018","44","Jan","2018"); 
INSERT INTO registration VALUES("78","January 24, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Dr. Erul Ubas","Nurse","Currently in Treatment","2018","31","Jan","2018"); 
INSERT INTO registration VALUES("79","January 24, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","33","Jan","2018"); 
INSERT INTO registration VALUES("80","January 24, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","36","Jan","2018"); 
INSERT INTO registration VALUES("81","January 24, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","32","Jan","2018"); 
INSERT INTO registration VALUES("82","January 24, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Dr. Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","30","Jan","2018"); 
INSERT INTO registration VALUES("83","January 24, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Dr. Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","79","Jan","2018"); 
INSERT INTO registration VALUES("84","January 24, 2018","Bacolod City Health TB DOTS Center","Community","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","None","Category I - 2HRZE/4HR","Dr. Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","28","Jan","2018"); 
INSERT INTO registration VALUES("85","January 24, 2018","Bacolod City Health TB DOTS Center","Community","PTOU","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Dr. Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","35","Jan","2018"); 
INSERT INTO registration VALUES("86","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","54","Jan","2018"); 
INSERT INTO registration VALUES("87","January 27, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","51","Jan","2018"); 
INSERT INTO registration VALUES("88","January 27, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","53","Jan","2018"); 
INSERT INTO registration VALUES("89","January 27, 2018","Bacolod City Health TB DOTS Center","Public Health Center","PTOU","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","56","Jan","2018"); 
INSERT INTO registration VALUES("90","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","49","Jan","2018"); 
INSERT INTO registration VALUES("91","January 27, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","48","Jan","2018"); 
INSERT INTO registration VALUES("92","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Midwife","Currently in Treatment","2018","55","Jan","2018"); 
INSERT INTO registration VALUES("93","January 27, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","52","Jan","2018"); 
INSERT INTO registration VALUES("94","January 27, 2018","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","50","Jan","2018"); 
INSERT INTO registration VALUES("95","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","47","Jan","2018"); 
INSERT INTO registration VALUES("96","January 27, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","Treatment After Loss Follow-up","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","45","Jan","2018"); 
INSERT INTO registration VALUES("97","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Clinically Diagnosed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","41","Jan","2018"); 
INSERT INTO registration VALUES("98","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","42","Jan","2018"); 
INSERT INTO registration VALUES("99","January 27, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","Yes","Yes","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","43","Jan","2018"); 
INSERT INTO registration VALUES("100","January 27, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","46","Jan","2018"); 
INSERT INTO registration VALUES("101","January 27, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","84","Jan","2018"); 
INSERT INTO registration VALUES("102","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","83","Jan","2018"); 
INSERT INTO registration VALUES("103","January 27, 2018","Bacolod City Health TB DOTS Center","Community","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","80","Jan","2018"); 
INSERT INTO registration VALUES("104","January 27, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","82","Jan","2018"); 
INSERT INTO registration VALUES("105","January 27, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","81","Jan","2018"); 
INSERT INTO registration VALUES("106","January 27, 2018","Bacolod City Health TB DOTS Center","Community","Transfer-in","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","87","Jan","2018"); 
INSERT INTO registration VALUES("107","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Clinically Diagnosed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","88","Jan","2018"); 
INSERT INTO registration VALUES("108","January 27, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","85","Jan","2018"); 
INSERT INTO registration VALUES("109","January 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","86","Jan","2018"); 
INSERT INTO registration VALUES("110","January 27, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Treatment After Loss Follow-up","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","25","Jan","2018"); 
INSERT INTO registration VALUES("111","January 27, 2018","Bacolod City Health TB DOTS Center","Community","PTOU","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Gabriel Banua","Barangay Health Worker","Currently in Treatment","2018","40","Jan","2018"); 
INSERT INTO registration VALUES("112","February 7, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Clinically Diagnosed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","90","Feb","2018"); 
INSERT INTO registration VALUES("113","February 7, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Cured","2018","97","Feb","2018"); 
INSERT INTO registration VALUES("114","February 8, 2018","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Dr. Alvin Yanson","Barangay Health Worker","Cured","2018","92","Feb","2018"); 
INSERT INTO registration VALUES("115","February 15, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","93","Feb","2018"); 
INSERT INTO registration VALUES("116","February 15, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","95","Feb","2018"); 
INSERT INTO registration VALUES("117","February 23, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Corrinne Tousant","Barangay Health Worker","Currently in Treatment","2018","175","Feb","2018"); 
INSERT INTO registration VALUES("118","February 23, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Maximina Bigelow","Barangay Health Worker","Currently in Treatment","2018","171","Feb","2018"); 
INSERT INTO registration VALUES("119","February 23, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","Transfer-in","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Wilda Deyoung","Barangay Health Worker","Currently in Treatment","2018","169","Feb","2018"); 
INSERT INTO registration VALUES("120","February 23, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Stanley Morning","Barangay Health Worker","Currently in Treatment","2018","89","Feb","2018"); 
INSERT INTO registration VALUES("121","February 23, 2018","Bacolod City Health TB DOTS Center","Community","Treatment After Loss Follow-up","TB Disease","Clinically Diagnosed","Extra-pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Bennie Mccaster","Barangay Health Worker","Currently in Treatment","2018","177","Feb","2018"); 
INSERT INTO registration VALUES("122","February 23, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Tyrell Kamen","Barangay Health Worker","Currently in Treatment","2018","181","Feb","2018"); 
INSERT INTO registration VALUES("123","February 23, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Jerrold Goodwill","Barangay Health Worker","Currently in Treatment","2018","174","Feb","2018"); 
INSERT INTO registration VALUES("124","February 23, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Nam Chapell","Barangay Health Worker","Currently in Treatment","2018","179","Feb","2018"); 
INSERT INTO registration VALUES("125","February 23, 2018","Bacolod City Health TB DOTS Center","Community","New","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Johana Venturini","Barangay Health Worker","Currently in Treatment","2018","172","Feb","2018"); 
INSERT INTO registration VALUES("126","February 23, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","None","Category I - 2HRZE/4HR","Jazmin Kono","Barangay Health Worker","Currently in Treatment","2018","173","Feb","2018"); 
INSERT INTO registration VALUES("127","February 23, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Mandie Wuensche","Barangay Health Worker","Currently in Treatment","2018","168","Feb","2018"); 
INSERT INTO registration VALUES("128","February 23, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Mandie Wuensche","Barangay Health Worker","Currently in Treatment","2018","180","Feb","2018"); 
INSERT INTO registration VALUES("129","February 23, 2018","Bacolod City Health TB DOTS Center","Community","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category Ia - 2HRZE/10HR","Maximina Elizalde","Barangay Health Worker","Currently in Treatment","2018","178","Feb","2018"); 
INSERT INTO registration VALUES("130","February 23, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Serita Pinckard","Barangay Health Worker","Currently in Treatment","2018","176","Feb","2018"); 
INSERT INTO registration VALUES("131","February 23, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Earlene Hare","Barangay Health Worker","Currently in Treatment","2018","170","Feb","2018"); 
INSERT INTO registration VALUES("132","February 24, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","ALvin Yanson","Barangay Health Worker","Currently in Treatment","2018","181","Feb","2018"); 
INSERT INTO registration VALUES("133","February 24, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","ALson Bayon-on","Barangay Health Worker","Currently in Treatment","2018","99","Feb","2018"); 
INSERT INTO registration VALUES("134","February 24, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","None","Category Ia - 2HRZE/10HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","98","Feb","2018"); 
INSERT INTO registration VALUES("135","February 24, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","94","Feb","2018"); 
INSERT INTO registration VALUES("136","February 26, 2018","Bacolod City Health TB DOTS Center","Public Health Center","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","Yes","Less than 1 month","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","189","Feb","2018"); 
INSERT INTO registration VALUES("137","February 26, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Alvin Yanson","Barangay Health Worker","Currently in Treatment","2018","96","Feb","2018"); 
INSERT INTO registration VALUES("138","February 26, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","New","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Alson John Bayon-on","Barangay Health Worker","Currently in Treatment","2018","182","Feb","2018"); 
INSERT INTO registration VALUES("139","February 26, 2018","Bacolod City Health TB DOTS Center","Public Health Center","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","No","None","Category I - 2HRZE/4HR","Carl Betio","Barangay Health Worker","Currently in Treatment","2018","184","Feb","2018"); 
INSERT INTO registration VALUES("140","February 27, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Leonel Entes","Barangay Health Worker","Currently in Treatment","2018","191","Feb","2018"); 
INSERT INTO registration VALUES("141","February 28, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Dr. Leonel","Barangay Health Worker","Currently in Treatment","2018","187","Feb","2018"); 
INSERT INTO registration VALUES("142","February 28, 2018","Bacolod City Health TB DOTS Center","Community","PTOU","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","1 month or more","Category I - 2HRZE/4HR","Dr. Leonel","Barangay Health Worker","Currently in Treatment","2018","91","Feb","2018"); 
INSERT INTO registration VALUES("143","March 2, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Dr. Leonel Entes","Barangay Health Worker","Currently in Treatment","2018","190","Mar","2018"); 
INSERT INTO registration VALUES("144","March 2, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Pulmonary","Yes","Yes","Less than 1 month","Category I - 2HRZE/4HR","Dr. Leonel Entes","Barangay Health Worker","Currently in Treatment","2018","188","Mar","2018"); 
INSERT INTO registration VALUES("145","March 2, 2018","Bacolod City Health TB DOTS Center","Private Hospitals","Relapse","TB Disease","Bacteriologically Confirmed","Pulmonary","No","No","None","Category I - 2HRZE/4HR","Dr. Leonel Entes","Barangay Health Worker","Currently in Treatment","2018","192","Mar","2018"); 
INSERT INTO registration VALUES("146","March 2, 2018","Bacolod City Health TB DOTS Center","Community","Transfer-in","TB Disease","Clinically Diagnosed","Extra-pulmonary","Yes","Yes","1 month or more","Category I - 2HRZE/4HR","Dr. Leonel Entes","Barangay Health Worker","Currently in Treatment","2018","186","Mar","2018"); 
INSERT INTO registration VALUES("147","March 2, 2018","Bacolod City Health TB DOTS Center","Other Government Facilities","Treatment After Failure","TB Disease","Bacteriologically Confirmed","Extra-pulmonary","No","No","None","Category I - 2HRZE/4HR","Dr. Leonel Entes","Barangay Health Worker","Currently in Treatment","2018","185","Mar","2018"); 
INSERT INTO registration VALUES("148","March 3, 2018","Bacolod City Health TB DOTS Center","Community","PTOU","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","None","Category I - 2HRZE/4HR","Dr. Leonel Entes","Barangay Health Worker","Currently in Treatment","2018","198","Mar","2018"); 
INSERT INTO registration VALUES("149","March 3, 2018","Bacolod City Health TB DOTS Center","Community","PTOU","TB Disease","Clinically Diagnosed","Extra-pulmonary","No","No","None","Category I - 2HRZE/4HR","Dr. Leonel Entes","Barangay Health Worker","Currently in Treatment","2018","198","Mar","2018"); 



DROP TABLE registration_ipt;

CREATE TABLE `registration_ipt` (
  `ipt_no` int(10) NOT NULL AUTO_INCREMENT,
  `date_evaluated` varchar(20) NOT NULL,
  `diagnosis` char(20) NOT NULL,
  `date_ipt_started` varchar(30) NOT NULL,
  `source_of_patient` varchar(30) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `dots_facility` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `year_ended` int(4) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`ipt_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO registration_ipt VALUES("2","January 16, 2018","TB Infection","January 16, 2018","Public Health Center","Alvin Yanson","Barangay Health Worker","Bacolod City Health TB DOTS Center","Currently in Treatment","20","2018","2018"); 
INSERT INTO registration_ipt VALUES("3","February 7, 2018","TB Infection","February 7, 2018","Public Health Center","Alvin Yanson","Barangay Health Worker","Bacolod City Health TB DOTS Center","Currently in Treatment","21","2018","2018"); 
INSERT INTO registration_ipt VALUES("4","March 3, 2018","TB Infection","March 3, 2018","Public Health Center","Dr. Leonel Entes","Barangay Health Worker","Bacolod City Health TB DOTS Center","Currently in Treatment","22","0","2018"); 



DROP TABLE submission;

CREATE TABLE `submission` (
  `submission_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(30) NOT NULL,
  `date1` varchar(30) NOT NULL,
  `date2` varchar(30) NOT NULL,
  `health_center` varchar(50) NOT NULL,
  `date_created` varchar(30) NOT NULL,
  PRIMARY KEY (`submission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO submission VALUES("27","Alvin Yanson","March 4, 2018","March 4, 2018","Mandalagan Health Center","March 5, 2018, 11:30 pm"); 
INSERT INTO submission VALUES("28","Carl Betio","March 4, 2018","March 4, 2018","Mandalagan Health Center","March 5, 2018, 11:30 pm"); 
INSERT INTO submission VALUES("29","Alson Bayon-on","March 5, 2018","March 5, 2018","Mandalagan Health Center","March 5, 2018, 11:34 pm"); 
INSERT INTO submission VALUES("32","Gabriel Banua","March 5, 2018","March 5, 2018","Mandalagan Health Center","March 5, 2018, 11:42 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tb_culture_examination VALUES("1","Method 1","1264","1265","2017-12-05","2017-12-05","Resistant","MTB detected","Dr. Torres","Dr. Torres","2017-12-06","1","Dec","2017"); 
INSERT INTO tb_culture_examination VALUES("2","Method 1","100","100","2018-02-07","2018-02-08","Resistant","Good","Dr. Haro","Dr. Haro","2018-02-08","6","Feb","2018"); 
INSERT INTO tb_culture_examination VALUES("3","Method 1","100","100","2018-02-25","2018-02-26","Resistant","Good","Dr. Alvin","Dr. Alvin","2018-02-26","6","Feb","2018"); 
INSERT INTO tb_culture_examination VALUES("4","Method 1","100","100","2018-02-27","2018-02-27","Resistant","confirmed the laboratory reque","Dr. Leonel Entes","Dr. Leonel Entes","2018-02-28","39","Feb","2018"); 
INSERT INTO tb_culture_examination VALUES("5","Method 2","199","100","2018-02-27","2018-02-27","Resistant","Good","Dr. Elmer Haro","Dr. Elmer Haro","2018-02-27","35","Feb","2018"); 



DROP TABLE tst;

CREATE TABLE `tst` (
  `tst_id` int(10) NOT NULL AUTO_INCREMENT,
  `result` varchar(20) NOT NULL,
  `date_read` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tst_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO tst VALUES("1","10 mm","2017-12-11","1","Dec","2017"); 
INSERT INTO tst VALUES("2","10 mm","2017-12-11","1","Dec","2017"); 
INSERT INTO tst VALUES("3","12 mm","2017-12-12","1","Dec","2017"); 
INSERT INTO tst VALUES("4","5 mm","2017-12-19","21","Dec","2017"); 
INSERT INTO tst VALUES("5","12 mm","2017-12-18","21","Dec","2017"); 
INSERT INTO tst VALUES("6","32 mm","2017-12-19","21","Dec","2017"); 
INSERT INTO tst VALUES("7","14","2017-12-19","21","Dec","2017"); 
INSERT INTO tst VALUES("8","23 mm","2017-12-27","1","Dec","2017"); 
INSERT INTO tst VALUES("9","15mm","2018-01-17","26","Jan","2018"); 
INSERT INTO tst VALUES("10","20 mm","2018-01-25","26","Jan","2018"); 



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
  `login` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("57","Alvin","Yanson","","NTP Nurse Coordinator","nurse101","aTya03gHJdTyqLkWQfg15yU5b18b25be6c088cda0cc33754c98966b151312f6","Active","March 6, 2018, 10:55 pm"); 
INSERT INTO user VALUES("59","Medtech","Medtech","10313-13","Medical Technologist","medtech101","aTya03gHJdTyqLkWQfg15yUc6e9dc91aefe1a00974de3b68c57016e50f96a15","Active","March 6, 2018, 10:55 pm"); 
INSERT INTO user VALUES("60","Erul","Ubas","100-9121","Medical Technologist","erulg","aTya03gHJdTyqLkWQfg15yU09775882de339a62dd9114f200b34b91a2aceb70","Active","February 10, 2018, 11:55 pm"); 
INSERT INTO user VALUES("62","Alson John","Bayon-on","109099-1212","Medical Technologist","alson","aTya03gHJdTyqLkWQfg15yU9639cda54513fdb91202fa34fdc5c79df7ac786e","Active","February 27, 2018, 9:42 pm"); 
INSERT INTO user VALUES("63","Gabriel","Banua","1009224","Medical Technologist","gabriel","aTya03gHJdTyqLkWQfg15yU18a98c35f49808b45edadc75fb1b25ebfd4037d6","Active","February 27, 2018, 9:34 pm"); 
INSERT INTO user VALUES("64","Alec","Rubiato","100909","Medical Technologist","alecboy","aTya03gHJdTyqLkWQfg15yU58c3975d6e9446c00516c194a87ebcc1b0602698","Active","February 27, 2018, 11:45 pm"); 
INSERT INTO user VALUES("65","Carl","Betio","1231238","Medical Technologist","carlss","aTya03gHJdTyqLkWQfg15yU59e70bb557be948145c54f24ab8d1cc42ec76296","Active"," "); 
INSERT INTO user VALUES("66","Leonel","Entes","10031231","Medical Technologist","leonel","aTya03gHJdTyqLkWQfg15yU33a11888bbcb40884b1f4402e6a514d039c63732","Active"," "); 
INSERT INTO user VALUES("67","Mark","Sombilla","1301123","Medical Technologist","markso","aTya03gHJdTyqLkWQfg15yUc56bd9d9502ab78c476d4a67a94ea869e7bfbd64","Active"," "); 
INSERT INTO user VALUES("68","Jam","Dientes","20123101","Medical Technologist","dientes","aTya03gHJdTyqLkWQfg15yU53e4a3b7ffd671ddf9330411ddc78d2d7cac9f8d","Inactive"," "); 
INSERT INTO user VALUES("69","Rommel ","Adricula","101231","Medical Technologist","rommel","aTya03gHJdTyqLkWQfg15yU146491abe266fa0b17b635acf441252338aca5dd","Active"," "); 
INSERT INTO user VALUES("70","Elmer","Haro","109931","Medical Technologist","elmers","aTya03gHJdTyqLkWQfg15yUeffc1b61012dd39a3d2996a1ab074f85878ff676","Active"," "); 
INSERT INTO user VALUES("71","Test","Test","1009123","Medical Technologist","Testss","aTya03gHJdTyqLkWQfg15yU4fe099f88d4b7e27d9ce69aac768bc1091790893","Active"," "); 



