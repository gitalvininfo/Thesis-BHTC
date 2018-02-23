<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$pul = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Pulmonary' && `year` = '$year'") or die(mysqli_error());
$fetch1 = $pul->fetch_array();
$ext = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `classification_of_tb` = 'Extra-pulmonary' && `year` = '$year'") or die(mysqli_error());
$fetch2 = $ext->fetch_array();

?>
<script type="text/javascript"> 
	window.onload = function() { 
		CanvasJS.addColorSet("customColorSet", [ 
			"#393f63",
			"#ffb367", 
			"#e5d8B0", 
			"#f98461", 
			"#d9695f",
			"#e05850",
		]);
		$("#classification_of_tb").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
			exportFileName: "TB Classification", 
			exportEnabled: true,
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 20
			}, 
			subtitles:[
				{
					text: "Classification of Tuberculosis - Year <?php echo $year?>"
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
						{ label: "Pulmonary",  y: 
						 <?php
	if($fetch1 == ""){
		echo 0;
	}else{
		echo $fetch1['total'];
	}	
						 ?>, legendText: "Pulmonary"},

						{ label: "Extra-Pulmonary",  y: 
						 <?php 
						 if($fetch2 == ""){
							 echo 0;
						 }else{
							 echo $fetch2['total'];
						 }	
						 ?>, legendText: "Extra-Pulmonary"}
					] 
				} 
			] 
		}); 
	} 
</script>