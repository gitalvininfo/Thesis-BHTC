<?php

$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$bs = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Bacteriologically Confirmed' && `year` = '$year'") or die(mysqli_error());
$fetch1 = $bs->fetch_array();
$cd = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `bacteriological_status` = 'Clinically Diagnosed' && `year` = '$year'") or die(mysqli_error());
$fetch2 = $cd->fetch_array();

?>
<script type="text/javascript"> 
	window.onload = function() { 
		$("#bacteriological_status").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Bacteriological Status", 
			exportEnabled: true,
			title: { 
				text: "Bacolod City Health TB DOTS Center - Year <?php echo $year?>",
				fontSize: 20
			}, 
			subtitles:[
				{
					text: "Patient Bacteriological Status - Year <?php echo $year?>"
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
						{ label: "Bacteriologically Confirmed",  y: 
						 <?php
	if($fetch1 == ""){
		echo 0;
	}else{
		echo $fetch1['total'];
	}	
						 ?>, legendText: "Bacteriologically Confirmed"},

						{ label: "Clinically Diagnosed",  y: 
						 <?php 
						 if($fetch2 == ""){
							 echo 0;
						 }else{
							 echo $fetch2['total'];
						 }	
						 ?>, legendText: "Clinically Diagnosed"}
					] 
				} 
			] 
		}); 
	} 
</script>