<?php
require_once '../../logincheck.php';
require ('../../config.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>        
		<title>BHTC-PMIS</title>            
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="../../assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="../../css/theme-blue.css"/>
		<script src="../../js/plugins/jquery/jquery.min.js"></script>
		<script src = "../../js/jquery.canvasjs.min.js"></script>
		<?php require '../../js/loadchart/filter/quarterly_population.php'?>
		<style type="text/css">
			@media print{
				@page{
					size:letter;
				}
			}
			#print{
				width:700px;
				height:1300px;
				overflow: hidden;
				margin:auto;
				border:0.5px solid #8f8888;
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

							<h3 class="panel-title"></h3>
							<div class="btn-group pull-right">
								<div class="pull-left">
									<button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
								</div>
							</div>  
						</div>
						<div id="print">
							<div class="panel-body">
								<div class="row">
									<h6 style="float:right"><u>Date: <?php echo date('F j, Y', strtotime("+8 HOURS"));?></u></h6>
									<div class="col-md-3"><img style="height:100px;width:100px;" src="../../assets/images/bc.png"></div><br>
									<div class="col-md-5">
										<h6>Bacolod City Health TB DOTS Center</h6>
										<p>BBB St., Bacolod City, Philippines  <br>
											(034) 434 4098 <br>
											cho_bacolod_city@yahoo.com
										</p>
									</div>
								</div>
								<hr>
								<?php 
								$query3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.year = '$year'") or die(mysqli_error());
								$fetch3 = $query3->fetch_array();
								?>
								<h4><mark>Patient Population - Quarterly - Year <?php echo $_GET['year']?></mark></h4> <hr>
								<h4><mark>Total Population -  <?php echo $fetch3['total']?> </mark></h4> <hr>
								<table class="table table-condensed">
									<thead>
										<tr>
											<th><center>Quarter 1</center></th>
											<th><center>Quarter 2</center></th>
											<th><center>Quarter 3</center></th>
											<th><center>Quarter 4</center></th>
										</tr>
									</thead>
									<tbody>
										<?php require '../require/load_quarter_population.php'?>
										<tr>
											<td><center><strong><?php echo $f1['total']?></strong></center></td>
											<td><center><strong><?php echo $f2['total']?></strong></center></td>
											<td><center><strong><?php echo $f3['total']?></strong></center></td>
											<td><center><strong><?php echo $f4['total']?></strong></center></td>
										</tr>


									</tbody>
								</table>
								<hr>
								<div class="row">
									<div class="panel-body">
										<div class="col-md-12">
											<div id="quarterly" style="width: 100%; height: 425px"></div>
										</div>
									</div>
								</div>
								<hr>
								<h6 style="float:left"></h6><br><br>
								<h4 style="float:left"><strong><?php echo $find['firstname']. " " .$find['lastname']?></strong></h4><br><br>
								<h6 style="float:left">Approved by:</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function printContent(el){
				var restorepage = document.body.innerHTML;
				var printcontent = document.getElementById(el).innerHTML;
				document.body.innerHTML = printcontent;
				window.print();
				document.body.innerHTML = restorepage;
			}
		</script>
		<script type="text/javascript" src="../../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap.min.js"></script>        
		<script type="text/javascript" src="../../js/plugins/datatables/jquery.dataTables.min.js"></script>  
	</body>
</html>





