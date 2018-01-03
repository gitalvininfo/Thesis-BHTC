<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
// A. Bacteriologically Confirmed
// 1st row
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("select * from `laboratory_request` where year = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

?>