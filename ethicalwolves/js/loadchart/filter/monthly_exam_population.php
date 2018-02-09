<?php require "../../reports/require/load_monthly_exam_population.php"?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#monthly_exam").CanvasJSChart({
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
					text: "Monthly Examination Conducted as of Year <?php echo $year?>"
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
						{ label: "January", y: <?php echo $d1['total']?> },
						 { label: "February", y: <?php echo $d2['total']?> },
						{ label: "March", y: <?php echo $d3['total']?> },
						 { label: "April", y: <?php echo $d4['total']?> },
						{ label: "May", y: <?php echo $d5['total']?> },
						 { label: "June", y: <?php echo $d6['total']?> },
						{ label: "July", y: <?php echo $d7['total']?> },
						 { label: "August", y: <?php echo $d8['total']?> },
						{ label: "September", y: <?php echo $d9['total']?> },
						 { label: "October", y: <?php echo $d10['total']?> },
						{ label: "November", y: <?php echo $d11['total']?> },
						 { label: "December", y: <?php echo $d12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Xpert MTB/RIF",
					color:"#FEA223",
					name: "Xpert MTB/RIF",
					dataPoints: [ 
						{ label: "January", y: <?php echo $x1['total']?> },
						 { label: "February", y: <?php echo $x2['total']?> },
						{ label: "March", y: <?php echo $x3['total']?> },
						 { label: "April", y: <?php echo $x4['total']?> },
						{ label: "May", y: <?php echo $x5['total']?> },
						 { label: "June", y: <?php echo $x6['total']?> },
						{ label: "July", y: <?php echo $x7['total']?> },
						 { label: "August", y: <?php echo $x8['total']?> },
						{ label: "September", y: <?php echo $x9['total']?> },
						 { label: "October", y: <?php echo $x10['total']?> },
						{ label: "November", y: <?php echo $x11['total']?> },
						 { label: "December", y: <?php echo $x12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "Drug Susceptible Test",
					color:"#1caf9a",
					name: "Drug Susceptible Test",
					dataPoints: [ 
						{ label: "January", y: <?php echo $t1['total']?> },
						 { label: "February", y: <?php echo $t2['total']?> },
						{ label: "March", y: <?php echo $t3['total']?> },
						 { label: "April", y: <?php echo $t4['total']?> },
						{ label: "May", y: <?php echo $t5['total']?> },
						 { label: "June", y: <?php echo $t6['total']?> },
						{ label: "July", y: <?php echo $t7['total']?> },
						 { label: "August", y: <?php echo $t8['total']?> },
						{ label: "September", y: <?php echo $t9['total']?> },
						 { label: "October", y: <?php echo $t10['total']?> },
						{ label: "November", y: <?php echo $t11['total']?> },
						 { label: "December", y: <?php echo $t12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn",
					showInLegend: true, 
					legendText: "TB Culture Examination",
					color:"#ff5050",
					name: "TB Culture Examination",
					dataPoints: [ 
						{ label: "January", y: <?php echo $c1['total']?> },
						 { label: "February", y: <?php echo $c2['total']?> },
						{ label: "March", y: <?php echo $c3['total']?> },
						 { label: "April", y: <?php echo $c4['total']?> },
						{ label: "May", y: <?php echo $c5['total']?> },
						 { label: "June", y: <?php echo $c6['total']?> },
						{ label: "July", y: <?php echo $c7['total']?> },
						 { label: "August", y: <?php echo $c8['total']?> },
						{ label: "September", y: <?php echo $c9['total']?> },
						 { label: "October", y: <?php echo $c10['total']?> },
						{ label: "November", y: <?php echo $c11['total']?> },
						 { label: "December", y: <?php echo $c12['total']?> }
					] 
				}
			] 
		}); 
	}
</script>