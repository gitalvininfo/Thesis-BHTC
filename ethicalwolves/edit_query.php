<?php


if(ISSET($_POST['edit_patient'])){
    $patient_id = $_POST['patient_id'];
    $patient_name= $_POST['patient_name'];    
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $height = $_POST['height'];
    $contact_number = $_POST['contact_number'];
    $province = $_POST['province'];
    $occupation = $_POST['occupation'];
    $philhealth_no = $_POST['philhealth_no'];
    $contact_person = $_POST['contact_person'];
    $emergency_no = $_POST['emergency_no'];
    $household_member = $_POST['household_member'];
    $household_member_age = $_POST['household_member_age'];
    $date_screened = $_POST['date_screened'];

    require ('config.php');
    $conn->query("UPDATE `patient` SET `patient_name` = '$patient_name', `age` = '$age', `gender` = '$gender', `address` = '$address', 
			`age` = '$age', `address` = '$address', `gender` = '$gender', `address` = '$address', `birthdate` = '$birthdate', `height` = '$height', `contact_number` = '$contact_number', `province` = '$province', `occupation` = '$occupation', `philhealth_no` = '$philhealth_no', `contact_person` = '$contact_person', `emergency_no` = '$emergency_no', `household_member` = '$household_member', `household_member_age` = '$household_member_age', `date_screened` = '$date_screened' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully updated patient record!');</script>";
    echo "<script>document.location='master_file_patient.php'</script>";  
}


if(ISSET($_POST['edit_medicine'])){
    $medicine_id = $_POST['medicine_id'];
    $medicine_name= $_POST['medicine_name'];    
    $medicine_description = $_POST['medicine_description'];

    require ('config.php');
    $conn->query("UPDATE `medicine` SET `medicine_name` = '$medicine_name', `medicine_description` = '$medicine_description' WHERE `medicine_id` = '$medicine_id'") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully updated medicine!');</script>";
    echo "<script>document.location='medication_dispensation.php'</script>";  
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


?>
