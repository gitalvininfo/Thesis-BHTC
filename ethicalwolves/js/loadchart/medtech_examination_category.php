<?php

$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$dssm = $conn->query("SELECT COUNT(*) as total FROM `dssm_examination` WHERE `year` = '$year'") or die(mysqli_error());
$fetch1 = $dssm->fetch_array();
$xpert = $conn->query("SELECT COUNT(*) as total FROM `gene_expert_examination` WHERE `year` = '$year'") or die(mysqli_error());
$fetch2 = $xpert->fetch_array();
$tbculture = $conn->query("SELECT COUNT(*) as total FROM `tb_culture_examination` WHERE `year` = '$year'") or die(mysqli_error());
$fetch3 = $tbculture->fetch_array();
$dst = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `year` = '$year'") or die(mysqli_error());
$fetch4 = $dst->fetch_array();
?>

<script type="text/javascript"> 
	window.onload = function() { 
		CanvasJS.addColorSet("customColorSet", [ 
			"#393f63",
			"#e5d8B0", 
			"#ffb367", 
			"#f98461", 
			"#d9695f",
			"#e05850",
			"#7E8F74",
		]);
		$("#examination").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
			exportFileName: "Examinations Conducted", 
			exportEnabled: true,
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 22
			},
			subtitles:[
				{
					text: "Total Number of Examinations Conducted per Category as of Year <?php echo $year?>"
				}
			],
			axisY: { 
				title: "Examinations" 
			}, 
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
						{ label: "Direct Sputum Smear Microscopy",  y: 
						 <?php
	if($fetch1 == ""){
		echo 0;
	}else{
		echo $fetch1['total'];
	}	
						 ?>, legendText: "Direct Sputum Smear Microscopy"},

						{ label: "Xpert MTB/RIF",  y: 
						 <?php 
						 if($fetch2 == ""){
							 echo 0;
						 }else{
							 echo $fetch2['total'];
						 }	
						 ?>, legendText: "Xpert MTB/RIF"},

						{ label: "TB Culture",  y: 
						 <?php 
						 if($fetch3 == ""){
							 echo 0;
						 }else{
							 echo $fetch3['total'];
						 }	
						 ?>, legendText: "TB Culture"},

						{ label: "Drug Susceptible Testing",  y: 
						 <?php 
						 if($fetch4 == ""){
							 echo 0;
						 }else{
							 echo $fetch4['total'];
						 }	
						 ?>, legendText: "Drug Susceptible Testing"}

					] 
				} 
			] 
		}); 
	} 
</script>