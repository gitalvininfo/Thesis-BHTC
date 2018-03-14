
CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL AUTO_INCREMENT,
  `remarks` char(40) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("169","Successfully exported database","March 6, 2018, 12:25 am"); 




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




CREATE TABLE `cxr` (
  `cxr_id` int(10) NOT NULL AUTO_INCREMENT,
  `cxr_findings` varchar(20) NOT NULL,
  `date_of_exam` date NOT NULL,
  `tbdc` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`cxr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO cxr VALUES("2","TB Disease","2017-12-04","Alson","1"); 



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





CREATE TABLE `follow_up` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO follow_up VALUES("7","2018-01-08","may klase na...","2"); 




CREATE TABLE `follow_up_ipt` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO follow_up_ipt VALUES("1","2018-03-10","added a follow-up date for ","21"); 
INSERT INTO follow_up_ipt VALUES("2","2018-03-10","added a follow-up date for John Peter","21"); 




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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO gene_expert_examination VALUES("1","2017-11-26","12","Good","Dr. Haro","2017-11-26","T","1","Nov","2017"); 



CREATE TABLE `health_center` (
  `health_center_id` int(10) NOT NULL AUTO_INCREMENT,
  `health_center` varchar(100) NOT NULL,
  PRIMARY KEY (`health_center_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO health_center VALUES("1","Abcasa Barangay Health Station"); 




CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

INSERT INTO history_log VALUES("127","57","Data Entry","Added test2 as new medicine","March 6, 2018","12:45 pm"); 
INSERT INTO history_log VALUES("129","57","Data Entry","Edited Kanamycin","March 6, 2018","12:52 pm"); 




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





CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `running_balance` int(10) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Isoniazid","Tablet","This is Isoniazid","158"); 



CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("1","Isoniazid","100","2017-11-25 20:52:15"); 


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

INSERT INTO patient VALUES("1","Alson John Bayon-on","0","Male","Prk. Langis, Brgy. Banago, Bacolod City","Banago","1991-06-12","178","433-2449","Negros Occidental","Teacher","10992241","Dr. Sabay","433-2449 local 181","Registered","Done","2017"); 




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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("57","Alvin","Yanson","","NTP Nurse Coordinator","nurse101","aTya03gHJdTyqLkWQfg15yU5b18b25be6c088cda0cc33754c98966b151312f6","Active","March 6, 2018, 12:33 pm"); 
INSERT INTO user VALUES("59","Medtech","Medtech","10313-13","Medical Technologist","medtech101","aTya03gHJdTyqLkWQfg15yUc6e9dc91aefe1a00974de3b68c57016e50f96a15","Active","March 6, 2018, 12:27 am"); 
INSERT INTO user VALUES("60","Erul","Ubas","100-9121","Medical Technologist","erulg","aTya03gHJdTyqLkWQfg15yU09775882de339a62dd9114f200b34b91a2aceb70","Active","February 10, 2018, 11:55 pm"); 
INSERT INTO user VALUES("62","Alson John","Bayon-on","109099-1212","Medical Technologist","alson","aTya03gHJdTyqLkWQfg15yU9639cda54513fdb91202fa34fdc5c79df7ac786e","Active","February 27, 2018, 9:42 pm"); 
INSERT INTO user VALUES("63","Gabriel","Banua","1009224","Medical Technologist","gabriel","aTya03gHJdTyqLkWQfg15yU18a98c35f49808b45edadc75fb1b25ebfd4037d6","Active","February 27, 2018, 9:34 pm"); 
INSERT INTO user VALUES("64","Alec","Rubiato","100909","Medical Technologist","alecboy","aTya03gHJdTyqLkWQfg15yU58c3975d6e9446c00516c194a87ebcc1b0602698","Active","February 27, 2018, 11:45 pm"); 
INSERT INTO user VALUES("65","Carl","Betio","1231238","Medical Technologist","carlss","aTya03gHJdTyqLkWQfg15yU59e70bb557be948145c54f24ab8d1cc42ec76296","Active"," "); 
INSERT INTO user VALUES("66","Leonel","Entes","10031231","Medical Technologist","leonel","aTya03gHJdTyqLkWQfg15yU33a11888bbcb40884b1f4402e6a514d039c63732","Active"," "); 
INSERT INTO user VALUES("67","Mark","Sombilla","1301123","Medical Technologist","markso","aTya03gHJdTyqLkWQfg15yUc56bd9d9502ab78c476d4a67a94ea869e7bfbd64","Active"," "); 
INSERT INTO user VALUES("68","Jam","Dientes","20123101","Medical Technologist","dientes","aTya03gHJdTyqLkWQfg15yU53e4a3b7ffd671ddf9330411ddc78d2d7cac9f8d","Inactive"," "); 
INSERT INTO user VALUES("69","Rommel ","Adricula","101231","Medical Technologist","rommel","aTya03gHJdTyqLkWQfg15yU146491abe266fa0b17b635acf441252338aca5dd","Inactive"," "); 
INSERT INTO user VALUES("70","Elmer","Haro","109931","Medical Technologist","elmers","aTya03gHJdTyqLkWQfg15yUeffc1b61012dd39a3d2996a1ab074f85878ff676","Inactive"," "); 



