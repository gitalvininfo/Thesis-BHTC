<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

// dssm
$q1 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$d1 = $q1->fetch_array();

$q2 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$d2 = $q2->fetch_array();

$q3 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$d3 = $q3->fetch_array();

$q4 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$d4 = $q4->fetch_array();

$q5 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$d5 = $q5->fetch_array();

$q6 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$d6 = $q6->fetch_array();

$q7 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$d7 = $q7->fetch_array();

$q8 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$d8 = $q8->fetch_array();

$q9 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$d9 = $q9->fetch_array();

$q10 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$d10 = $q10->fetch_array();

$q11 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$d11 = $q11->fetch_array();

$q12 = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$d12 = $q12->fetch_array();


// xpert mtb/rif

$w1 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$x1 = $w1->fetch_array();

$w2 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$x2 = $w2->fetch_array();

$w3 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$x3 = $w3->fetch_array();

$w4 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$x4 = $w4->fetch_array();

$w5 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$x5 = $w5->fetch_array();

$w6 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$x6 = $w6->fetch_array();

$w7 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$x7 = $w7->fetch_array();

$w8 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$x8 = $w8->fetch_array();

$w9 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$x9 = $w9->fetch_array();

$w10 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$x10 = $w10->fetch_array();

$w11 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$x11 = $w11->fetch_array();

$w12 = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$x12 = $w12->fetch_array();




// tb culture

$r1 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$c1 = $r1->fetch_array();

$r2 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$c2 = $r2->fetch_array();

$r3 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$c3 = $r3->fetch_array();

$r4 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$c4 = $r4->fetch_array();

$r5 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$c5 = $r5->fetch_array();

$r6 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$c6 = $r6->fetch_array();

$r7 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$c7 = $r7->fetch_array();

$r8 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$c8 = $r8->fetch_array();

$r9 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$c9 = $r9->fetch_array();

$r10 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$c10 = $r10->fetch_array();

$r11 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$c11 = $r11->fetch_array();

$r12 = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$c12 = $r12->fetch_array();



// dst

$e1 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$t1 = $e1->fetch_array();

$e2 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$t2 = $e2->fetch_array();

$e3 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$t3 = $e3->fetch_array();

$e4 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$t4 = $e4->fetch_array();

$e5 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$t5 = $e5->fetch_array();

$e6 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$t6 = $e6->fetch_array();

$e7 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$t7 = $e7->fetch_array();

$e8 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$t8 = $e8->fetch_array();

$e9 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$t9 = $e9->fetch_array();

$e10 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$t10 = $e10->fetch_array();

$e11 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$t11 = $e11->fetch_array();

$e12 = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$t12 = $e12->fetch_array();
?>