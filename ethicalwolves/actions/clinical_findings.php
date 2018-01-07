<?php
require_once '../logincheck.php';
require ('../config.php');
$date = date('F j, Y');
if(ISSET($_POST['add_new_clinical'])){
    $date_visited = $date;
    $weight = $_POST['weight'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $new = "";

    foreach($q6 as $value)  
    {  
        $new .= $value . ",";  
    }  
    $patient_id = $_POST['patient_id'];

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $conn->query("INSERT INTO `clinical_findings` VALUES('', '$date_visited', '$weight', '$q1', '$q2', '$q3', '$q4', '$q5', '$new', '$patient_id')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new clinical findings!');</script>";
    echo "<script>document.location='../patient_treatment_table.php'</script>";
}
?>