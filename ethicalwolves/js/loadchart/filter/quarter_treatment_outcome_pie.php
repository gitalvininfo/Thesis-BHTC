<?php 
require "../../reports/require/load_quarter_treatment_outcome.php";
?>
<script type="text/javascript">
	window.onload = function() {
		CanvasJS.addColorSet("customColorSet", [ 
			"#e5d8B0", 
			"#393f63",
			"#ffb367", 
			"#f98461", 
			"#d9695f",
			"#e05850",
			"#7E8F74",
		]);
		$("#pie").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
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
					type: "pie", 
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