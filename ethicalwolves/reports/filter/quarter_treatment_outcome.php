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
		<?php require '../../js/loadchart/filter/quarter_treatment_outcome.php'?>
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

							<h3 class="panel-title"><strong>Quarter Treatment Outcome</strong><span style="font-size:12px;"> <i>- as of <?php echo date('F j, Y', strtotime("+8 HOURS"));?></i></span></h3>
							<div class="btn-group pull-right">
								<div class="pull-left">
									<button id="print" class="btn btn-default btn-sm" onclick="javascript:window.print()">Print</button>      
								</div>
							</div>  
						</div>
						<div id="printDiv">
							<div class="panel-body">
								<div class="row">
									<table class="table table-condensed">
										<thead>
											<tr>
												<th><center>Type of Examination</center></th>
												<th><center>Quarter 1</center></th>
												<th><center>Quarter 2</center></th>
												<th><center>Quarter 3</center></th>
												<th><center>Quarter 4</center></th>
											</tr>
										</thead>
										<tbody>
											<?php require '../require/load_quarter_treatment_outcome.php'  ?>

											<tr class="success">
												<th><center>Cured</center></th>
												<td><center><?php echo $c1['total']?></center></td>
												<td><center><?php echo $c2['total']?></center></td>
												<td><center><?php echo $c3['total']?></center></td>
												<td><center><?php echo $c4['total']?></center></td>
											</tr>
											<tr class="warning">
												<th><center>Currently in Treatment</center></th>
												<td><center><?php echo $t1['total']?></center></td>
												<td><center><?php echo $t2['total']?></center></td>
												<td><center><?php echo $t3['total']?></center></td>
												<td><center><?php echo $t4['total']?></center></td>
											</tr>
											<tr class="danger">
												<th><center>Died</center></th>
												<td><center><?php echo $d1['total']?></center></td>
												<td><center><?php echo $d2['total']?></center></td>
												<td><center><?php echo $d3['total']?></center></td>
												<td><center><?php echo $d4['total']?></center></td>
											</tr>
											<tr class="warning">
												<th><center>Not Evaluated</center></th>
												<td><center><?php echo $n1['total']?></center></td>
												<td><center><?php echo $n2['total']?></center></td>
												<td><center><?php echo $n3['total']?></center></td>
												<td><center><?php echo $n4['total']?></center></td>
											</tr>
											<tr class="info">
												<th><center>Lost to Follow-up</center></th>
												<td><center><?php echo $l1['total']?></center></td>
												<td><center><?php echo $l2['total']?></center></td>
												<td><center><?php echo $l3['total']?></center></td>
												<td><center><?php echo $l4['total']?></center></td>
											</tr>
											<tr class="danger">
												<th><center>Failed</center></th>
												<td><center><?php echo $f1['total']?></center></td>
												<td><center><?php echo $f2['total']?></center></td>
												<td><center><?php echo $f3['total']?></center></td>
												<td><center><?php echo $f4['total']?></center></td>
											</tr>
											<tr class="success">
												<th><center>Treatment Completed</center></th>
												<td><center><?php echo $tc1['total']?></center></td>
												<td><center><?php echo $tc2['total']?></center></td>
												<td><center><?php echo $tc3['total']?></center></td>
												<td><center><?php echo $tc4['total']?></center></td>
											</tr>
										</tbody>
									</table>
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
		<script>
			$('#print').on('click', function(){
				$('#printDiv').printThis({
					importStyle: true,
					canvas: true
				});
			});
		</script>
	</body>
</html>





