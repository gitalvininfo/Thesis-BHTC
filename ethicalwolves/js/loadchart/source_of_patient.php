<?php

$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$phc = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Public Health Center' && `year` = '$year'") or die(mysqli_error());
$fetch1 = $phc->fetch_array();
$oth = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Other Government Facilities' && `year` = '$year'") or die(mysqli_error());
$fetch2 = $oth->fetch_array();
$pri = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Private Hospitals' && `year` = '$year'") or die(mysqli_error());
$fetch3 = $pri->fetch_array();
$com = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `source_of_patient` = 'Community' && `year` = '$year'") or die(mysqli_error());
$fetch4 = $com->fetch_array();

?>
<script type="text/javascript"> 
	window.onload = function() { 
		$("#source_of_patient").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1800,
			exportFileName: "Source of Patient", 
			exportEnabled: true,
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Source of Patient - Year  <?php echo $year?>"
				}
			],
			legend :{ 
				verticalAlign: "center", 
				horizontalAlign: "left" 
			}, 
			data: [ 
				{ 
					type: "doughnut", 
					showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					dataPoints: [ 
						{ label: "Public Health Center",  y: 
						 <?php
	if($fetch1 == ""){
		echo 0;
	}else{
		echo $fetch1['total'];
	}	
						 ?>, legendText: "Public Health Center"},

						{ label: "Other Government Facilities/Hospitals",  y: 
						 <?php 
						 if($fetch2 == ""){
							 echo 0;
						 }else{
							 echo $fetch2['total'];
						 }	
						 ?>, legendText: "Other Government Facilities/Hospitals"},

						{ label: "Private Hospitals/Clinics/Physicians/NGO's",  y: 
						 <?php 
						 if($fetch3 == ""){
							 echo 0;
						 }else{
							 echo $fetch3['total'];
						 }	
						 ?>, legendText: "Private Hospitals/Clinics/Physicians/NGO's"},

						{ label: "Community",  y: 
						 <?php 
						 if($fetch4 == ""){
							 echo 0;
						 }else{
							 echo $fetch4['total'];
						 }	
						 ?>, legendText: "Community"}
					] 
				} 
			] 
		}); 
	} 
</script>