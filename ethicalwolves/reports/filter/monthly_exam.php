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
		<?php require '../../js/loadchart/filter/monthly_exam_population.php'?>
		<style type="text/css">
			@media print{
				@page{
					size:letter;
				}
			}
			#print{
				width:1300px;
				height:770px;
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
									<div class="col-md-1"><img style="height:100px;width:100px;" src="../../assets/images/bc.png"></div><br>
									<div class="col-md-5">
										<h6>Bacolod City Health TB DOTS Center</h6>
										<p>BBB St., Bacolod City, Philippines  <br>
											(034) 434 4098 <br>
											cho_bacolod_city@yahoo.com
										</p>
									</div>
								</div>
								<hr>
								<table class="table table-condensed">
									<thead>
										<tr>
											<th><center>Type of Examination</center></th>
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
										</tr>
									</thead>
									<tbody>
										<?php require '../require/load_monthly_exam_population.php'  ?>

										<tr class="success">
											<th><center>Direct Sputum Smear Microscopy</center></th>
											<td><center><?php echo $d1['total']?></center></td>
											<td><center><?php echo $d2['total']?></center></td>
											<td><center><?php echo $d3['total']?></center></td>
											<td><center><?php echo $d4['total']?></center></td>
											<td><center><?php echo $d5['total']?></center></td>
											<td><center><?php echo $d6['total']?></center></td>
											<td><center><?php echo $d7['total']?></center></td>
											<td><center><?php echo $d8['total']?></center></td>
											<td><center><?php echo $d9['total']?></center></td>
											<td><center><?php echo $d10['total']?></center></td>
											<td><center><?php echo $d11['total']?></center></td>
											<td><center><?php echo $d12['total']?></center></td>
										</tr>
										<tr class="warning">
											<th><center>Xpert/MTB</center></th>
											<td><center><?php echo $x1['total']?></center></td>
											<td><center><?php echo $x2['total']?></center></td>
											<td><center><?php echo $x3['total']?></center></td>
											<td><center><?php echo $x4['total']?></center></td>
											<td><center><?php echo $x5['total']?></center></td>
											<td><center><?php echo $x6['total']?></center></td>
											<td><center><?php echo $x7['total']?></center></td>
											<td><center><?php echo $x8['total']?></center></td>
											<td><center><?php echo $x9['total']?></center></td>
											<td><center><?php echo $x10['total']?></center></td>
											<td><center><?php echo $x11['total']?></center></td>
											<td><center><?php echo $x12['total']?></center></td>
										</tr>
										<tr class="info">
											<th><center>Drug Susceptible Test</center></th>
											<td><center><?php echo $t1['total']?></center></td>
											<td><center><?php echo $t2['total']?></center></td>
											<td><center><?php echo $t3['total']?></center></td>
											<td><center><?php echo $t4['total']?></center></td>
											<td><center><?php echo $t5['total']?></center></td>
											<td><center><?php echo $t6['total']?></center></td>
											<td><center><?php echo $t7['total']?></center></td>
											<td><center><?php echo $t8['total']?></center></td>
											<td><center><?php echo $t9['total']?></center></td>
											<td><center><?php echo $t10['total']?></center></td>
											<td><center><?php echo $t11['total']?></center></td>
											<td><center><?php echo $t12['total']?></center></td>
										</tr>
										<tr class="danger">
											<th><center>TB Culture</center></th>
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
										</tr>
									</tbody>
								</table>
								<div class="row">
									<div class="panel-body">
										<div class="col-md-12">
											<div id="monthly_exam" style="width: 100%; height: 425px"></div>
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





