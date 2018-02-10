<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

// cured
$c1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();

$c5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$c5 = $c5->fetch_array();

$c6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$c6 = $c6->fetch_array();

$c7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$c7 = $c7->fetch_array();

$c8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$c8 = $c8->fetch_array();

$c9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$c9 = $c9->fetch_array();

$c10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$c10 = $c10->fetch_array();

$c11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$c11 = $c11->fetch_array();

$c12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$c12 = $c12->fetch_array();


// currently in treatment

$t1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$t1 = $t1->fetch_array();

$t2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$t2 = $t2->fetch_array();

$t3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$t3 = $t3->fetch_array();

$t4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$t4 = $t4->fetch_array();

$t5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$t5 = $t5->fetch_array();

$t6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$t6 = $t6->fetch_array();

$t7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$t7 = $t7->fetch_array();

$t8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$t8 = $t8->fetch_array();

$t9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$t9 = $t9->fetch_array();

$t10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$t10 = $t10->fetch_array();

$t11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$t11 = $t11->fetch_array();

$t12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$t12 = $t12->fetch_array();

// died

$d1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$d1 = $d1->fetch_array();

$d2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$d2 = $d2->fetch_array();

$d3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$d3 = $d3->fetch_array();

$d4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$d4 = $d4->fetch_array();

$d5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$d5 = $d5->fetch_array();

$d6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$d6 = $d6->fetch_array();

$d7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$d7 = $d7->fetch_array();

$d8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$d8 = $d8->fetch_array();

$d9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$d9 = $d9->fetch_array();

$d10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$d10 = $d10->fetch_array();

$d11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$d11 = $d11->fetch_array();

$d12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$d12 = $d12->fetch_array();

// not evaluated

$n1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$n1 = $n1->fetch_array();

$n2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$n2 = $n2->fetch_array();

$n3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$n3 = $n3->fetch_array();

$n4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$n4 = $n4->fetch_array();

$n5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$n5 = $n5->fetch_array();

$n6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$n6 = $n6->fetch_array();

$n7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$n7 = $n7->fetch_array();

$n8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$n8 = $n8->fetch_array();

$n9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$n9 = $n9->fetch_array();

$n10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$n10 = $n10->fetch_array();

$n11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$n11 = $n11->fetch_array();

$n12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$n12 = $n12->fetch_array();


// lost to follow-up
$l1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$l1 = $l1->fetch_array();

$l2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$l2 = $l2->fetch_array();

$l3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$l3 = $l3->fetch_array();

$l4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$l4 = $l4->fetch_array();

$l5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$l5 = $l5->fetch_array();

$l6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$l6 = $l6->fetch_array();

$l7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$l7 = $l7->fetch_array();

$l8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$l8 = $l8->fetch_array();

$l9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$l9 = $l9->fetch_array();

$l10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$l10 = $l10->fetch_array();

$l11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$l11 = $l11->fetch_array();

$l12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$l12 = $l12->fetch_array();


// failed

$f1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$f1 = $f1->fetch_array();

$f2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$f2 = $f2->fetch_array();

$f3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$f3 = $f3->fetch_array();

$f4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$f4 = $f4->fetch_array();

$f5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$f5 = $f5->fetch_array();

$f6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$f6 = $f6->fetch_array();

$f7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$f7 = $f7->fetch_array();

$f8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$f8 = $f8->fetch_array();

$f9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$f9 = $f9->fetch_array();

$f10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$f10 = $f10->fetch_array();

$f11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$f11 = $f11->fetch_array();

$f12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$f12 = $f12->fetch_array();


// treatment completed

$tc1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$tc1 = $tc1->fetch_array();

$tc2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$tc2 = $tc2->fetch_array();

$tc3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$tc3 = $tc3->fetch_array();

$tc4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$tc4 = $tc4->fetch_array();

$tc5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$tc5 = $tc5->fetch_array();

$tc6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$tc6 = $tc6->fetch_array();

$tc7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$tc7 = $tc7->fetch_array();

$tc8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$tc8 = $tc8->fetch_array();

$tc9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$tc9 = $tc9->fetch_array();

$tc10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$tc10 = $tc10->fetch_array();

$tc11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$tc11 = $tc11->fetch_array();

$tc12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$tc12 = $tc12->fetch_array();

?>
