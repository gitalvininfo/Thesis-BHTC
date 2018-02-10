<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

//cured
$c1 = $conn->query("select count(*) as total from `registration` where `status` = 'Cured' && (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("select count(*) as total from `registration` where `status` = 'Cured' && (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("select count(*) as total from `registration` where `status` = 'Cured' && (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("select count(*) as total from `registration` where `status` = 'Cured' && (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();


//treatment compteted
$tc1 = $conn->query("select count(*) as total from `registration` where `status` = 'Treatment Completed' && (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$tc1 = $tc1->fetch_array();

$tc2 = $conn->query("select count(*) as total from `registration` where `status` = 'Treatment Completed' && (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$tc2 = $tc2->fetch_array();

$tc3 = $conn->query("select count(*) as total from `registration` where `status` = 'Treatment Completed' && (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$tc3 = $tc3->fetch_array();

$tc4 = $conn->query("select count(*) as total from `registration` where `status` = 'Treatment Completed' && (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$tc4 = $tc4->fetch_array();


//died
$d1 = $conn->query("select count(*) as total from `registration` where `status` = 'Died' && (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$d1 = $d1->fetch_array();

$d2 = $conn->query("select count(*) as total from `registration` where `status` = 'Died' && (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$d2 = $d2->fetch_array();

$d3 = $conn->query("select count(*) as total from `registration` where `status` = 'Died' && (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$d3 = $d3->fetch_array();

$d4 = $conn->query("select count(*) as total from `registration` where `status` = 'Died' && (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$d4 = $d4->fetch_array();


//failed
$f1 = $conn->query("select count(*) as total from `registration` where `status` = 'Failed' && (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$f1 = $f1->fetch_array();

$f2 = $conn->query("select count(*) as total from `registration` where `status` = 'Failed' && (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$f2 = $f2->fetch_array();

$f3 = $conn->query("select count(*) as total from `registration` where `status` = 'Failed' && (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$f3 = $f3->fetch_array();

$f4 = $conn->query("select count(*) as total from `registration` where `status` = 'Failed' && (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$f4 = $f4->fetch_array();


//lost to follow-up
$l1 = $conn->query("select count(*) as total from `registration` where `status` = 'Lost to followup' && (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$l1 = $l1->fetch_array();

$l2 = $conn->query("select count(*) as total from `registration` where `status` = 'Lost to followup' && (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$l2 = $l2->fetch_array();

$l3 = $conn->query("select count(*) as total from `registration` where `status` = 'Lost to followup' && (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$l3 = $l3->fetch_array();

$l4 = $conn->query("select count(*) as total from `registration` where `status` = 'Lost to followup' && (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$l4 = $l4->fetch_array();



//not evaluated
$n1 = $conn->query("select count(*) as total from `registration` where `status` = 'Not Evaluated' && (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$n1 = $n1->fetch_array();

$n2 = $conn->query("select count(*) as total from `registration` where `status` = 'Not Evaluated' && (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$n2 = $n2->fetch_array();

$n3 = $conn->query("select count(*) as total from `registration` where `status` = 'Not Evaluated' && (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$n3 = $n3->fetch_array();

$n4 = $conn->query("select count(*) as total from `registration` where `status` = 'Not Evaluated' && (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$n4 = $n4->fetch_array();


//Currently in treatment
$t1 = $conn->query("select count(*) as total from `registration` where `status` = 'Currently in Treatment' && (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$t1 = $t1->fetch_array();

$t2 = $conn->query("select count(*) as total from `registration` where `status` = 'Currently in Treatment' && (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$t2 = $t2->fetch_array();

$t3 = $conn->query("select count(*) as total from `registration` where `status` = 'Currently in Treatment' && (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$t3 = $t3->fetch_array();

$t4 = $conn->query("select count(*) as total from `registration` where `status` = 'Currently in Treatment' && (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$t4 = $t4->fetch_array();
?>