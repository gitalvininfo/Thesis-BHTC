<?php

$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$new = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'New' && `year` = '$year'") or die(mysqli_error());
$fetch3 = $new->fetch_array();
$relapse = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Relapse' && `year` = '$year'") or die(mysqli_error());
$fetch4 = $relapse->fetch_array();
$talf = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'TALF' && `year` = '$year'") or die(mysqli_error());
$fetch5 = $talf->fetch_array();
$taf = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Treatment After Failure' && `year` = '$year'") or die(mysqli_error());
$fetch6 = $taf->fetch_array();
$ptou = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'PTOU' && `year` = '$year'") or die(mysqli_error());
$fetch7 = $ptou->fetch_array();
$tra = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Transfer-in' && `year` = '$year'") or die(mysqli_error());
$fetch8 = $tra->fetch_array();
$oth = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `registration_group` = 'Others' && `year` = '$year'") or die(mysqli_error());
$fetch9 = $oth->fetch_array();
?>
<script type="text/javascript">
	window.onload = function() {
		$("#registration_group").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "TB Patient Registration Group", 
			exportEnabled: true,
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Patient Registration Group - Year <?php echo $year?>"
				}
			],
			axisY: { 
				title: "Registration" 
			}, 
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
						{ label: "New",  y: 
						 <?php
	if($fetch3 == ""){
		echo 0;
	}else{
		echo $fetch3['total'];
	}	
						 ?>, legendText: "New"},

						{ label: "Relapse",  y: 
						 <?php 
						 if($fetch4 == ""){
							 echo 0;
						 }else{
							 echo $fetch4['total'];
						 }	
						 ?>, legendText: "Relapse"},

						{ label: "Treatment After Loss Follow-up",  y: 
						 <?php 
						 if($fetch5 == ""){
							 echo 0;
						 }else{
							 echo $fetch5['total'];
						 }	
						 ?>, legendText: "Treatment After Loss Follow-up"}, 

						{ label: "Treatment After Failure",  y: 
						 <?php 
						 if($fetch6 == ""){
							 echo 0;
						 }else{
							 echo $fetch6['total'];
						 }	
						 ?>, legendText: "Treatment After Failure"},

						{ label: "Previous Treatment Outcome Unknown",  y: 
						 <?php 
						 if($fetch7 == ""){
							 echo 0;
						 }else{
							 echo $fetch7['total'];
						 }	
						 ?>, legendText: "Previous Treatment Outcome Unknown"}, 

						{ label: "Transfer-in",  y: 
						 <?php 
						 if($fetch8 == ""){
							 echo 0;
						 }else{
							 echo $fetch8['total'];
						 }	
						 ?>, legendText: "Transfer-in"}, 

						{ label: "Others",  y: 
						 <?php 
						 if($fetch9 == ""){
							 echo 0;
						 }else{
							 echo $fetch9['total'];
						 }	
						 ?>, legendText: "Others"}
					] 
				} 
			] 
		}); 
	} 
</script>