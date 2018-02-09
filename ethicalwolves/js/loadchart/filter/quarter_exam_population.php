<?php require "../../reports/require/load_quarter_exam_population.php"?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#quarter_exam").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Monthly Examination Conducted", 
			exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 22
			},
			subtitles:[
				{
					text: "Quarterly Examination Conducted as of Year <?php echo $year?>"
				}
			],
			legend: {
				cursor: "pointer",
				itemclick: function (e) {
					if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}
					e.chart.render();
				}
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
				title: "Total Examinations Conducted", 
				includeZero: false,
				labelFontColor: "black",
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			}, 
			data: [ 
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Direct Sputum Smear Microscopy",
					color:"#95B75D",
					name: "Direct Sputum Smear Microscopy",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $a1['total']?> },
						 { label: "Quarter2", y: <?php echo $a2['total']?> },
						{ label: "Quarter3", y: <?php echo $a3['total']?> },
						 { label: "Quarter4", y: <?php echo $a4['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Xpert MTB/RIF",
					color:"#FEA223",
					name: "Xpert MTB/RIF",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $x1['total']?> },
						 { label: "Quarter 2", y: <?php echo $x2['total']?> },
						{ label: "Quarter 3", y: <?php echo $x3['total']?> },
						 { label: "Quarter 4", y: <?php echo $x4['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Drug Susceptible Test",
					color:"#1caf9a",
					name: "Drug Susceptible Test",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $d1['total']?> },
						 { label: "Quarter 2", y: <?php echo $d2['total']?> },
						{ label: "Quarter 3", y: <?php echo $d3['total']?> },
						 { label: "Quarter 4", y: <?php echo $d4['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "TB Culture Examination",
					color:"#ff5050",
					name: "TB Culture Examination",
					dataPoints: [ 
						{ label: "Quarter 1", y: <?php echo $c1['total']?> },
						 { label: "Quarter 2", y: <?php echo $c2['total']?> },
						{ label: "Quarter 3", y: <?php echo $c3['total']?> },
						 { label: "Quarter 4", y: <?php echo $c4['total']?> }
					] 
				}

			] 
		}); 
	}
</script>