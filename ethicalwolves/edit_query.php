<?php


if(ISSET($_POST['edit_patient'])){
	$patient_id = $_POST['patient_id'];
	$patient_name= $_POST['patient_name'];    
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$barangay = $_POST['barangay'];
	$birthdate = $_POST['birthdate'];
	$height = $_POST['height'];
	$contact_number = $_POST['contact_number'];
	$occupation = $_POST['occupation'];
	$philhealth_no = $_POST['philhealth_no'];
	$contact_person = $_POST['contact_person'];
	$emergency_no = $_POST['emergency_no'];
	require ('config.php');
	$conn->query("UPDATE `patient` SET `patient_name` = '$patient_name', `age` = '$age', `gender` = '$gender', `address` = '$address', 
			`barangay` = '$barangay', `age` = '$age', `address` = '$address', `gender` = '$gender', `address` = '$address', `birthdate` = '$birthdate', `height` = '$height', `contact_number` = '$contact_number', `province` = 'Negros Occidental', `occupation` = '$occupation', `philhealth_no` = '$philhealth_no', `contact_person` = '$contact_person', `emergency_no` = '$emergency_no' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully updated personal information!');</script>";
	echo "<script>document.location='master_file_patient.php'</script>";  
}

if(ISSET($_POST['edit_member'])){
	$member_id = $_POST['member_id'];
	$name= $_POST['name'];    
	$age = $_POST['age'];
	$date_screened = $_POST['date_screened'];
	require ('config.php');
	$conn->query("UPDATE `family_member` SET `name` = '$name', `age` = '$age', `date_screened` = '$date_screened' WHERE `member_id` = '$member_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully updated personal information!');</script>";
	echo "<script>document.location='master_file_patient.php'</script>";  
}

if(ISSET($_POST['edit_treatment_partner'])){
	$tb_case_no = $_POST['tb_case_no'];
	$treatment_partner_name= $_POST['treatment_partner_name'];    
	$designation_treatment_partner = $_POST['designation_treatment_partner'];
	require ('config.php');
	$conn->query("UPDATE `registration` SET `treatment_partner_name` = '$treatment_partner_name', `designation_treatment_partner` = '$designation_treatment_partner' WHERE `tb_case_no` = '$tb_case_no'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully updated treatment partner information!');</script>";
	echo "<script>document.location='master_file_patient.php'</script>";  
}

if(ISSET($_POST['edit_tst'])){
	$tst_id = $_POST['tst_id'];
	$result= $_POST['result'];    
	$date_read = $_POST['date_read'];

	require ('config.php');
	$conn->query("UPDATE `tst` SET `result` = '$result', `date_read` = '$date_read' WHERE `tst_id` = '$tst_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully updated Tuberculin Skin Testing result!');</script>";
	echo "<script>document.location='master_file_patient.php'</script>";  
}

if(ISSET($_POST['edit_cxr'])){
	$cxr_id = $_POST['cxr_id'];
	$cxr_findings= $_POST['cxr_findings'];    
	$date_of_exam = $_POST['date_of_exam'];
	$tbdc = $_POST['tbdc'];

	require ('config.php');
	$conn->query("UPDATE `cxr` SET `cxr_findings` = '$cxr_findings', `date_of_exam` = '$date_of_exam', `tbdc` = '$tbdc' WHERE `cxr_id` = '$cxr_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully updated Chest X-ray findings!');</script>";
	echo "<script>document.location='master_file_patient.php'</script>";  
}

if(ISSET($_POST['edit_ipt'])){
	$patient_id = $_POST['patient_id'];
	$name= $_POST['name'];    
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$emergency_no = $_POST['emergency_no'];
	$birthdate = $_POST['birthdate'];
	require ('config.php');
	$conn->query("UPDATE `patient_ipt` SET `name` = '$name', `age` = '$age', `gender` = '$gender', `address` = '$address', 
			`emergency_no` = '$emergency_no', `birthdate` = '$birthdate' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully updated personal information!');</script>";
	echo "<script>document.location='master_file_patient.php'</script>";  
}


if(ISSET($_POST['edit_medicine'])){
	$medicine_id = $_POST['medicine_id'];
	$medicine_name= $_POST['medicine_name'];    
	$medicine_type= $_POST['medicine_type'];    
	$medicine_description = $_POST['medicine_description'];

	require ('config.php');
	$conn->query("UPDATE `medicine` SET `medicine_name` = '$medicine_name', `medicine_type` = '$medicine_type', `medicine_description` = '$medicine_description' WHERE `medicine_id` = '$medicine_id'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully updated medicine!');</script>";
	echo "<script>document.location='medicine_table.php'</script>";  
}

if(ISSET($_POST['edit_dispensed'])){
	$dispensation_id = $_POST['dispensation_id'];
	$health_center= $_POST['health_center'];    
	$medicine_name = $_POST['medicine_name'];
	$date_given = $_POST['date_given'];
	$quantity = $_POST['quantity'];
	$received_by = $_POST['received_by'];

	require ('config.php');
	$conn->query("UPDATE `medication_dispensation` SET `health_center` = '$health_center', `medicine_name` = '$medicine_name', `date_given` = '$date_given', `quantity` = '$quantity', `received_by` = '$received_by' WHERE `dispensation_id` = '$dispensation_id'") or die(mysqli_error());

	$conn->query("UPDATE `medicine` SET `running_balance` = `running_balance` + '$quantity' WHERE `medicine_name` = '$medicine_name'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully updated dispensed medicine!');</script>";
	echo "<script>document.location='medication_dispensation.php'</script>";  
}

if(ISSET($_POST['edit_user'])){

	$user_id = $_POST['user_id'];
	$firstname = $_POST['firstname'];    
	$lastname = $_POST['lastname'];
	$license = $_POST['license'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];
	if ($password ==""){
		require ('config.php');
		$conn->query("UPDATE `user` SET `firstname` = '$firstname', `lastname` = '$lastname', `license` = '$license', `username` = '$username', `status` = '$status' WHERE `user_id` = '$user_id'") or die(mysqli_error());
		$conn->close();
		echo "<script type='text/javascript'>alert('Successfully updated user account!');</script>";
		echo "<script>document.location='user_mgmt.php'</script>";  
	}
	else {
		$pass1 = sha1($password);
		$salt = "aTya03gHJdTyqLkWQfg15yU";
		$pass1 = $salt.$pass1;

		require ('config.php');
		$conn->query("UPDATE `user` SET `firstname` = '$firstname', `lastname` = '$lastname', `license` = '$license', `username` = '$username', `password` = '$pass1', `status` = '$status' WHERE `user_id` = '$user_id'") or die(mysqli_error());
		$conn->close();
		echo "<script type='text/javascript'>alert('Successfully updated user account!');</script>";
		echo "<script>document.location='user_mgmt.php'</script>";  
	}
}
?>
