<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q1 = $conn->query("select count(*) as total from `dssm_examination` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$a1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `dssm_examination` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$a2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `dssm_examination` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$a3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `dssm_examination` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$a4 = $q4->fetch_array();

$w1 = $conn->query("select count(*) as total from `gene_expert_examination` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$x1 = $w1->fetch_array();

$w2 = $conn->query("select count(*) as total from `gene_expert_examination` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$x2 = $w2->fetch_array();

$w3 = $conn->query("select count(*) as total from `gene_expert_examination` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$x3 = $w3->fetch_array();

$w4 = $conn->query("select count(*) as total from `gene_expert_examination` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$x4 = $w4->fetch_array();

$e1 = $conn->query("select count(*) as total from `tb_culture_examination` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$c1 = $e1->fetch_array();

$e2 = $conn->query("select count(*) as total from `tb_culture_examination` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$c2 = $e2->fetch_array();

$e3 = $conn->query("select count(*) as total from `tb_culture_examination` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$c3 = $e3->fetch_array();

$e4 = $conn->query("select count(*) as total from `tb_culture_examination` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$c4 = $e4->fetch_array();

$r1 = $conn->query("select count(*) as total from `dst_examination` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$d1 = $r1->fetch_array();

$r2 = $conn->query("select count(*) as total from `dst_examination` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$d2 = $r2->fetch_array();

$r3 = $conn->query("select count(*) as total from `dst_examination` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$d3 = $r3->fetch_array();

$r4 = $conn->query("select count(*) as total from `dst_examination` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$d4 = $r4->fetch_array();

?>