<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("select count(*) as total from registration where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from registration where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from registration where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from registration where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();


?>