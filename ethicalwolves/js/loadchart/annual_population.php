<?php
$year = date('Y');
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$q11 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2013'") or die(mysqli_error());
$fetch11 = $q11->fetch_array();
$q12 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2014'") or die(mysqli_error());
$fetch12 = $q12->fetch_array();
$q13 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2015'") or die(mysqli_error());
$fetch13 = $q13->fetch_array();
$q1 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2016'") or die(mysqli_error());
$fetch1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2017'") or die(mysqli_error());
$fetch2 = $q2->fetch_array();
$q3 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2018'") or die(mysqli_error());
$fetch3 = $q3->fetch_array();
$q4 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2019'") or die(mysqli_error());
$fetch4 = $q4->fetch_array();
$q5 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2020'") or die(mysqli_error());
$fetch5 = $q5->fetch_array();
$q6 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2021'") or die(mysqli_error());
$fetch6 = $q6->fetch_array();
$q7 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2022'") or die(mysqli_error());
$fetch7 = $q7->fetch_array();
$q8 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2023'") or die(mysqli_error());
$fetch8 = $q8->fetch_array();
$q9 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2024'") or die(mysqli_error());
$fetch9 = $q9->fetch_array();
$q10 = $conn->query("SELECT COUNT(*) as total FROM `registration` WHERE `year` = '2025'") or die(mysqli_error());
$fetch10 = $q10->fetch_array();

$q14 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2013'") or die(mysqli_error());
$f14 = $q14->fetch_array();
$q15 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2014'") or die(mysqli_error());
$f15 = $q15->fetch_array();
$q16 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2015'") or die(mysqli_error());
$f16 = $q16->fetch_array();
$q17 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2016'") or die(mysqli_error());
$f17 = $q17->fetch_array();
$q18 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2017'") or die(mysqli_error());
$f18 = $q18->fetch_array();
$q19 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2018'") or die(mysqli_error());
$f19 = $q19->fetch_array();
$q20 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2019'") or die(mysqli_error());
$f20 = $q20->fetch_array();
$q21 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2020'") or die(mysqli_error());
$f21 = $q21->fetch_array();
$q22 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2021'") or die(mysqli_error());
$f22 = $q22->fetch_array();
$q23 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2022'") or die(mysqli_error());
$f23 = $q23->fetch_array();
$q24 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2023'") or die(mysqli_error());
$f24 = $q24->fetch_array();
$q25 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2024'") or die(mysqli_error());
$f25 = $q25->fetch_array();
$q26 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age >= 16 && registration.year = '2025'") or die(mysqli_error());
$f26 = $q26->fetch_array();

$q27 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2013'") or die(mysqli_error());
$f27 = $q27->fetch_array();
$q28 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2014'") or die(mysqli_error());
$f28 = $q28->fetch_array();
$q29 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2015'") or die(mysqli_error());
$f29 = $q29->fetch_array();
$q30 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2016'") or die(mysqli_error());
$f30 = $q30->fetch_array();
$q31 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2017'") or die(mysqli_error());
$f31 = $q31->fetch_array();
$q32 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2018'") or die(mysqli_error());
$f32 = $q32->fetch_array();
$q33 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2019'") or die(mysqli_error());
$f33 = $q33->fetch_array();
$q34 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2020'") or die(mysqli_error());
$f34 = $q34->fetch_array();
$q35 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2021'") or die(mysqli_error());
$f35 = $q35->fetch_array();
$q36 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2022'") or die(mysqli_error());
$f36 = $q36->fetch_array();
$q37 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2023'") or die(mysqli_error());
$f37 = $q37->fetch_array();
$q38 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2024'") or die(mysqli_error());
$f38 = $q38->fetch_array();
$q39 = $conn->query("SELECT COUNT(*) as total FROM `registration`, `patient` WHERE registration.patient_id = patient.patient_id && age <= 15 && registration.year = '2025'") or die(mysqli_error());
$f39 = $q39->fetch_array();
?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#annual_population").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Annual Patient Population", 
			exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Bacolod City Health TB DOTS Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Patient Annual Population"
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
				interval: 1,
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
					enabled: true 
				}
			}, 
			data: [ 
				{ 
					type: "column",
					showInLegend: true, 
					legendText: "Total Number of Patients",
					name: "Total Patients this Year",
					markerType: "cross",
					color: "#7f7f7f",
					dataPoints: [ 
						{ label: "2013", y: <?php echo $fetch11['total']?> },
						 { label: "2014", y: <?php echo $fetch12['total']?> },
						{ label: "2015", y: <?php echo $fetch13['total']?> },
						 { label: "2016", y: <?php echo $fetch1['total']?> },
						{ label: "2017", y: <?php echo $fetch2['total']?> },
						 { label: "2018", y: <?php echo $fetch3['total']?> },
						{ label: "2019", y: <?php echo $fetch4['total']?> },
						 { label: "2020", y: <?php echo $fetch5['total']?> },
						{ label: "2021", y: <?php echo $fetch6['total']?> },
						 { label: "2022", y: <?php echo $fetch7['total']?> },
						{ label: "2023", y: <?php echo $fetch8['total']?> },
						 { label: "2024", y: <?php echo $fetch9['total']?> },
						{ label: "2025", y: <?php echo $fetch10['total']?> },
						 ] 
						},
						{ 
							type: "splineArea",
							showInLegend: true, 
							legendText: "Adult",
							name: "Adult",
							markerType: "cross",
							dataPoints: [ 
								{ label: "2013", y: <?php echo $f14['total']?> },
								 { label: "2014", y: <?php echo $f15['total']?> },
								{ label: "2015", y: <?php echo $f16['total']?> },
								 { label: "2016", y: <?php echo $f17['total']?> },
								{ label: "2017", y: <?php echo $f18['total']?> },
								 { label: "2018", y: <?php echo $f19['total']?> },
								{ label: "2019", y: <?php echo $f20['total']?> },
								 { label: "2020", y: <?php echo $f21['total']?> },
								{ label: "2021", y: <?php echo $f22['total']?> },
								 { label: "2022", y: <?php echo $f23['total']?> },
								{ label: "2023", y: <?php echo $f24['total']?> },
								 { label: "2024", y: <?php echo $f25['total']?> },
								{ label: "2025", y: <?php echo $f26['total']?> }
								 ] 
								},
								{ 
									type: "splineArea",
									showInLegend: true, 
									legendText: "Children",
									name: "Children",
									markerType: "cross",
									dataPoints: [ 
										{ label: "2013", y: <?php echo $f27['total']?> },
										 { label: "2014", y: <?php echo $f28['total']?> },
										{ label: "2015", y: <?php echo $f29['total']?> },
										 { label: "2016", y: <?php echo $f30['total']?> },
										{ label: "2017", y: <?php echo $f31['total']?> },
										 { label: "2018", y: <?php echo $f32['total']?> },
										{ label: "2019", y: <?php echo $f33['total']?> },
										 { label: "2020", y: <?php echo $f34['total']?> },
										{ label: "2021", y: <?php echo $f35['total']?> },
										 { label: "2022", y: <?php echo $f36['total']?> },
										{ label: "2023", y: <?php echo $f37['total']?> },
										 { label: "2024", y: <?php echo $f38['total']?> },
										{ label: "2025", y: <?php echo $f39['total']?> }
										 ] 
										}
									] 
								}); 
								}
</script>