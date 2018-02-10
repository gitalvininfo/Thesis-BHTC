<?php require '../../reports/require/load_quarter_population.php'?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#quarterly").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Quarter Population", 
			exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Quarterly Population as of Year <?php echo $year?>",
				fontSize: 20
			},
			axisX: {		       
				gridDashType: "dot",
				gridThickness: 1,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			},
			axisY: { 
				title: "Number of Patients", 
				includeZero: false,
				labelFontColor: "black",
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			}, 
			data: [ 
				{ 
					type: "column", 
					name: "Total Patients this quarter",
					color: "#ff5050",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $f1['total']?> },
						 { label: "Quarter 2", y: <?php echo $f2['total']?> },
						{ label: "Quarter 3", y: <?php echo $f3['total']?> },
						 { label: "Quarter 4", y: <?php echo $f4['total']?> }
					] 
				}
			] 
		}); 
	}
</script>