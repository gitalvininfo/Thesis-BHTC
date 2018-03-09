<?php
require_once '../../logincheck.php';
require ('../../config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>        
		<title>BBB St., Bacolod City, Negros Occidental, Philippines 6100</title>            
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="../../assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="../../css/theme-blue.css"/>
		<script src="../../js/plugins/jquery/jquery.min.js"></script>
		<script src = "../../js/jquery.canvasjs.min.js"></script>
		<?php require '../../js/loadchart/filter/patient_type_bar.php'?>
		<style type="text/css">
			@media print {
				#print{
					display: none !important;
				}
			}
		</style>
	</head>
	<body>
		<?php 
	$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<!-- START TEXT ELEMENTS -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="btn-group pull-left">
								<div class="pull-left">
									<img src="../../assets/images/bcreport.png" alt="BC Logo"/>     
								</div>
							</div>
							<h3 class="panel-title"><strong>Bacolod City Health TB DOTS Center - Adult and Children Registration</strong><span style="font-size:12px;"> </span></h3>
							<div class="btn-group pull-right">
								<div class="pull-left">
									<div class="btn-group" id="print">
										<a href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Switch to<span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#" onclick="oBar()">Stacked Bar Graph</a></li>
											<li><a href="#" onclick="oLine()">Line Graph</a></li>
											<li><a href="#" onclick="oCol()">Stacked Column Graph</a></li>
											<li><a href="#" onclick="oAre()">Area Graph</a></li>
										</ul>
									</div>
									<button id="print" class="btn btn-default btn-md" onclick="javascript:window.print()">Print</button>  
									<i><?php echo date('F j, Y', strtotime("+8 HOURS"));?></i>
								</div>
							</div> 
						</div>
						<div class="row">
							<div class="panel-body">
								<div class="col-md-12">
									<?php 
									$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
									$query1 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` <= 15 && registration.year = '$year'") or die(mysqli_error());
									$fetch1 = $query1->fetch_array();

									$query2 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && `age` >= 16 && registration.year = '$year'") or die(mysqli_error());
									$fetch2 = $query2->fetch_array();

									$query3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.year = '$year'") or die(mysqli_error());
									$fetch3 = $query3->fetch_array();

									$percentchild = ($fetch1['total']/$fetch3['total']) * 100;
									$percentadult = ($fetch2['total']/$fetch3['total']) * 100;

									?>
									<h4>Total Population -  <strong><?php echo $fetch3['total']?> TB patients</strong></h4> <hr>
									<h4 class="title" id="print">Press F5 to print</h4>
									<table class="table table-condensed">
										<thead>
											<tr class="warning">
												<th><center>Patient</center></th>
												<th><center>Jan</center></th>
												<th><center>Feb</center></th>
												<th><center>Mar</center></th>
												<th><center>Apr</center></th>
												<th><center>May</center></th>
												<th><center>June</center></th>
												<th><center>July</center></th>
												<th><center>Aug</center></th>
												<th><center>Sep</center></th>
												<th><center>Oct</center></th>
												<th><center>Nov</center></th>
												<th><center>Dec</center></th>
												<th><center>Percentage</center></th>
											</tr>
										</thead>
										<tbody>
											<?php require '../require/load_monthly_patient.php'?>
											<tr class="success">
												<th><center>Adult</center></th>
												<td><center><?php echo $a1['total']?></center></td>
												<td><center><?php echo $a2['total']?></center></td>
												<td><center><?php echo $a3['total']?></center></td>
												<td><center><?php echo $a4['total']?></center></td>
												<td><center><?php echo $a5['total']?></center></td>
												<td><center><?php echo $a6['total']?></center></td>
												<td><center><?php echo $a7['total']?></center></td>
												<td><center><?php echo $a8['total']?></center></td>
												<td><center><?php echo $a9['total']?></center></td>
												<td><center><?php echo $a10['total']?></center></td>
												<td><center><?php echo $a11['total']?></center></td>
												<td><center><?php echo $a12['total']?></center></td>
												<td><center><strong><?php echo number_format($percentadult)?>%</strong></center></td>
											</tr>
											<tr class="info">
												<th><center>Children</center></th>
												<td><center><?php echo $c1['total']?></center></td>
												<td><center><?php echo $c2['total']?></center></td>
												<td><center><?php echo $c3['total']?></center></td>
												<td><center><?php echo $c4['total']?></center></td>
												<td><center><?php echo $c5['total']?></center></td>
												<td><center><?php echo $c6['total']?></center></td>
												<td><center><?php echo $c7['total']?></center></td>
												<td><center><?php echo $c8['total']?></center></td>
												<td><center><?php echo $c9['total']?></center></td>
												<td><center><?php echo $c10['total']?></center></td>
												<td><center><?php echo $c11['total']?></center></td>
												<td><center><?php echo $c12['total']?></center></td>
												<td><center><strong><?php echo number_format($percentchild)?>%</strong></center></td>
											</tr>
										</tbody>
									</table>
									<div id="bar" style="width: 100%; height: 400px"></div>
									<h6 style="float:left">Approved by:</h6><br><br>
									<h4 style="float:left"><strong><?php echo $find['firstname']. " " .$find['lastname']?></strong></h4><br><br>
									<h4 style="float:left"><strong><?php echo $find['position']?></strong></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script>
			function oBar() {
				window.location="monthly_population_children_bar.php?year=<?php echo $year?>";
			}
			function oLine() {
				window.location="monthly_population_children_line.php?year=<?php echo $year?>";
			}
			function oCol() {
				window.location="monthly_population_children.php?year=<?php echo $year?>";
			}
			function oAre() {
				window.location="monthly_population_children_area.php?year=<?php echo $year?>";
			}
		</script>
		<script>
			document.body.addEventListener("keydown", function (event) {
				if (event.keyCode === 116) {
					javascript:window.print();
				}
			});
		</script>
		<script type="text/javascript" src="../../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap.min.js"></script>        
		<script type="text/javascript" src="../../js/plugins/datatables/jquery.dataTables.min.js"></script>  
	</body>
</html>





