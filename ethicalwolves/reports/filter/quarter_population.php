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
					size:landscape;
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

							<h3 class="panel-title"><strong>Quarterly Population</strong> <span style="font-size:12px"><i>- as of <?php echo date('F j, Y', strtotime("+8 HOURS"));?></i></span></h3>
							<div class="btn-group pull-right">
								<div class="pull-left">
									<button class="btn btn-default btn-sm" onclick="javascript:window.print()">Print</button>
								</div>
							</div>  
						</div>
						<div class="row">
							<div class="panel-body">
								<div class="col-md-12">
									<?php 
									$query3 = $conn->query("select count(*) as total from `patient`, `registration` where registration.patient_id = patient.patient_id && registration.year = '$year'") or die(mysqli_error());
									$fetch3 = $query3->fetch_array();
									?>
									<h4><strong>Total Population -  <?php echo $fetch3['total']?></strong> TB Patients</h4> <hr>
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
									<div id="quarterly" style="width: 100%; height: 425px"></div>
									<h6 style="float:left">Approved by:</h6><br><br>
									<h4 style="float:left"><strong><?php echo $find['firstname']. " " .$find['lastname']?></strong></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="../../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap.min.js"></script>        
		<script type="text/javascript" src="../../js/plugins/datatables/jquery.dataTables.min.js"></script>  
	</body>
</html>





