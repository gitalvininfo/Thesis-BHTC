<?php 


$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$c1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Cured' && `year` = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$t1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Currently in Treatment' && `year` = '$year'") or die(mysqli_error());
$t1 = $t1->fetch_array();

$d1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Died' && `year` = '$year'") or die(mysqli_error());
$d1 = $d1->fetch_array();

$n1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Not Evaluated' && `year` = '$year'") or die(mysqli_error());
$n1 = $n1->fetch_array();

$l1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Lost to followup' && `year` = '$year'") or die(mysqli_error());
$l1 = $l1->fetch_array();

$f1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Failed' && `year` = '$year'") or die(mysqli_error());
$f1 = $f1->fetch_array();

$tc1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `status` = 'Treatment Completed' && `year` = '$year'") or die(mysqli_error());
$tc1 = $tc1->fetch_array();
?>
<script type="text/javascript">
	window.onload = function() {
		$("#doughnut").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Treatment Outcome", 
			//exportEnabled: true,
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Patient Treatment Outcome - Year <?php echo $year?>"
				}
			],
			legend :{ 
				verticalAlign: "center", 
				horizontalAlign: "left",
				cursor: "pointer",

			}, 
			data: [ 
				{ 
					type: "doughnut", 
					showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					dataPoints: [ 
						{ label: "Cured",  y: 
						 <?php
	if($c1 == ""){
		echo 0;
	}else{
		echo $c1['total'];
	}	
						 ?>, legendText: "Cured"},

						{ label: "Currently in Treatment",  y: 
						 <?php 
						 if($t1 == ""){
							 echo 0;
						 }else{
							 echo $t1['total'];
						 }	
						 ?>, legendText: "Currently in Treatment"},

						{ label: "Died",  y: 
						 <?php 
						 if($d1 == ""){
							 echo 0;
						 }else{
							 echo $d1['total'];
						 }	
						 ?>, legendText: "Died"}, 

						{ label: "Not Evaluated",  y: 
						 <?php 
						 if($n1 == ""){
							 echo 0;
						 }else{
							 echo $n1['total'];
						 }	
						 ?>, legendText: "Not Evaluated"},

						{ label: "Lost to Follow-up",  y: 
						 <?php 
						 if($l1 == ""){
							 echo 0;
						 }else{
							 echo $l1['total'];
						 }	
						 ?>, legendText: "Lost to Follow-up"}, 

						{ label: "Failed",  y: 
						 <?php 
						 if($f1 == ""){
							 echo 0;
						 }else{
							 echo $f1['total'];
						 }	
						 ?>, legendText: "Failed"}, 

						{ label: "Treatment Completed",  y: 
						 <?php 
						 if($tc1 == ""){
							 echo 0;
						 }else{
							 echo $tc1['total'];
						 }	
						 ?>, legendText: "Treatment Completed"}
					] 
				} 
			] 
		}); 
	} 
</script>
