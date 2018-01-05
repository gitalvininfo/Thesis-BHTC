<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("select * from `patient_ipt` where year = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

?>