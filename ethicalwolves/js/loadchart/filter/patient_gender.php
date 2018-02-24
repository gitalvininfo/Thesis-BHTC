<?php require '../../reports/require/load_monthly_population_gender.php'  ?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#gender").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Monthly Population", 
			//exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Monthly Population",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Male and Female Registration - Year <?php echo $year?>"
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
				title: "Total Population", 
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
					legendText: "Male",
					name: "Male", 
					color: "#e05850",
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
						 { label: "October", y: <?php echo $c10['total']?>},
						{ label: "November", y: <?php echo $c11['total']?> },
						 { label: "December", y: <?php echo $c12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn", 
					showInLegend: true, 
					legendText: "Female",
					name: "Female", 
					dataPoints: [ 
						{ label: "January", y: <?php echo $a1['total']?> },
						 { label: "February", y: <?php echo $a2['total']?> },
						{ label: "March", y: <?php echo $a3['total']?> },
						 { label: "April", y: <?php echo $a4['total']?> },
						{ label: "May", y: <?php echo $a5['total']?> },
						 { label: "June", y: <?php echo $a6['total']?> },
						{ label: "July", y: <?php echo $a7['total']?> },
						 { label: "August", y: <?php echo $a8['total']?> },
						{ label: "September", y: <?php echo $a9['total']?> },
						 { label: "October", y: <?php echo $a10['total']?>},
						{ label: "November", y: <?php echo $a11['total']?> },
						 { label: "December", y: <?php echo $a12['total']?> }
					] 
				}
			] 
		}); 
	}
</script>