<?php

if(ISSET($_POST['save_medtech'])){
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $home_address = $_POST['home_address'];
    $contact_no = $_POST['contact_no'];

    $conn = new mysqli("localhost", 'root', '', 'thesis') or die(mysqli_error());
    $query = "INSERT INTO MEDICAL_TECHNOLOGIST(first_name, middle_name, last_name, gender, home_address, contact_no)
    VALUES('$first_name', '$middle_name', '$last_name', '$gender', '$home_address', '$contact_no')";
    mysqli_query($conn,$query) or die("Can't Execute Query...");
    header ('location:master_file_medtech.php');
}
?>

