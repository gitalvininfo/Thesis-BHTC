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
		<?php require '../../js/loadchart/filter/monthly_treatment_outcome.php'?>
		<style type="text/css">
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

							<h3 class="panel-title"><strong>Monthly Treatment Outcome</strong><span style="font-size:12px;"> <i>- as of <?php echo date('F j, Y', strtotime("+8 HOURS"));?></i></span></h3>
							<div class="btn-group pull-right">
								<div class="pull-left">
									<button id="print" class="btn btn-default btn-sm" onclick="javascript:window.print()">Print</button>      
								</div>
							</div>  
						</div>
						<div id="printDiv">
							<div class="panel-body">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th><center>Treatment Outcome</center></th>
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
										<?php require '../require/load_monthly_treatment_outcome.php'  ?>

										<tr class="success">
											<th><center>Cured</center></th>
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
										<tr class="warning">
											<th><center>Currently in Treatment</center></th>
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
										<tr class="info">
											<th><center>Died</center></th>
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
										<tr class="danger">
											<th><center>Not Evaluated</center></th>
											<td><center><?php echo $n1['total']?></center></td>
											<td><center><?php echo $n2['total']?></center></td>
											<td><center><?php echo $n3['total']?></center></td>
											<td><center><?php echo $n4['total']?></center></td>
											<td><center><?php echo $n5['total']?></center></td>
											<td><center><?php echo $n6['total']?></center></td>
											<td><center><?php echo $n7['total']?></center></td>
											<td><center><?php echo $n8['total']?></center></td>
											<td><center><?php echo $n9['total']?></center></td>
											<td><center><?php echo $n10['total']?></center></td>
											<td><center><?php echo $n11['total']?></center></td>
											<td><center><?php echo $n12['total']?></center></td>
										</tr>
										<tr class="info">
											<th><center>Lost to Follow-up</center></th>
											<td><center><?php echo $l1['total']?></center></td>
											<td><center><?php echo $l2['total']?></center></td>
											<td><center><?php echo $l3['total']?></center></td>
											<td><center><?php echo $l4['total']?></center></td>
											<td><center><?php echo $l5['total']?></center></td>
											<td><center><?php echo $l6['total']?></center></td>
											<td><center><?php echo $l7['total']?></center></td>
											<td><center><?php echo $l8['total']?></center></td>
											<td><center><?php echo $l9['total']?></center></td>
											<td><center><?php echo $l10['total']?></center></td>
											<td><center><?php echo $l11['total']?></center></td>
											<td><center><?php echo $l12['total']?></center></td>
										</tr>
										<tr class="success">
											<th><center>Failed</center></th>
											<td><center><?php echo $f1['total']?></center></td>
											<td><center><?php echo $f2['total']?></center></td>
											<td><center><?php echo $f3['total']?></center></td>
											<td><center><?php echo $f4['total']?></center></td>
											<td><center><?php echo $f5['total']?></center></td>
											<td><center><?php echo $f6['total']?></center></td>
											<td><center><?php echo $f7['total']?></center></td>
											<td><center><?php echo $f8['total']?></center></td>
											<td><center><?php echo $f9['total']?></center></td>
											<td><center><?php echo $f10['total']?></center></td>
											<td><center><?php echo $f11['total']?></center></td>
											<td><center><?php echo $f12['total']?></center></td>
										</tr>
										<tr class="warning">
											<th><center>Treatment Completed</center></th>
											<td><center><?php echo $tc1['total']?></center></td>
											<td><center><?php echo $tc2['total']?></center></td>
											<td><center><?php echo $tc3['total']?></center></td>
											<td><center><?php echo $tc4['total']?></center></td>
											<td><center><?php echo $tc5['total']?></center></td>
											<td><center><?php echo $tc6['total']?></center></td>
											<td><center><?php echo $tc7['total']?></center></td>
											<td><center><?php echo $tc8['total']?></center></td>
											<td><center><?php echo $tc9['total']?></center></td>
											<td><center><?php echo $tc10['total']?></center></td>
											<td><center><?php echo $tc11['total']?></center></td>
											<td><center><?php echo $tc12['total']?></center></td>
										</tr>
									</tbody>
								</table>

								<div class="row">
									<div class="panel-body">
										<div class="col-md-12">
											<div id="treatment_outcome" style="width: 100%; height: 275px"></div>
										</div>
									</div>
								</div>
								<h6 style="float:left"></h6><br><br>
								<h4 style="float:left"><strong><?php echo $find['firstname']. " " .$find['lastname']?></strong></h4><br><br>
								<h6 style="float:left">Approved by:</h6>
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




