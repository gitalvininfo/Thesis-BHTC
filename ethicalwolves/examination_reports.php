<?php
require_once 'logincheck.php';
require ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>        
		<title>Bacolod City, Negros Occidental, Philippines 6100</title>            
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
		<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<script src="js/plugins/jquery/jquery.min.js"></script>
		<?php require 'reports/require/examination_reports_table1.php'?>
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
		date_default_timezone_set('Asia/Manila');
		$date = date('F j, Y');
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="btn-group pull-left">
							<div class="pull-left">
								<img src="assets/images/bcreport.png" alt="BC Logo"/>     
							</div>
						</div>
						<h3 class="panel-title">Bacolod City Health TB DOTS Center - DSSM and Xpert MTB/RIF - Year <?php echo $year?></h3>
						<div class="btn-group pull-right">
							<div class="pull-left">
								<span style="font-size:12px;"> <i><?php echo $date;?></i></span> &nbsp;
								<div class="btn-group pull-right" id="print">
									<button id="print" class="btn btn-default btn-sm" onclick="javascript:window.print()">Print</button>
									<div class="pull-left">
										<select id="pyear" class="validate[required] select" data-style="btn-primary" data-live-search="true">
											<option value="<?php 
														   if(isset($_GET['year'])){
															   $value=$_GET['year']; 
															   echo $value;
														   }
														   else{
															   echo date('Y');
														   }
														   ?>">
												<?php 
												if(isset($_GET['year'])){
													$value=$_GET['year']; 
													echo $value;
												}
												else{
													echo date('Y');
												}
												?></option>
											<?php
											for($y=2013; $y<=2025; $y++){
											?>
											<option value="<?php echo $y ?>"><?php echo $y; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-body">        
						<h6 style="font-size:13px;color:#dc4141">A. Case Finding</h6>

						<table class="table table-bordered">
							<thead>
								<tr>
									<th colspan="2"></th>
									<th colspan="3"><center>Xpert</center></th>
								</tr>
								<tr>
									<th>Laboratory Activities</th>
									<th><center>DSSM</center></th>
									<th><center>New</center></th>
									<th><center>Relapse</center></th>
									<th><center>Previously Treated</center></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>1. No. of Examined</strong></td>
									<td><center><?php echo $f1['total']?></center></td>
									<td><center><?php echo $wtf['total']?></center></td>
									<td><center><?php echo $f3['total']?></center></td>
									<td><center><?php echo $f4['total']?></center></td>
								</tr>
								<tr>
									<td><strong>2. No. with (+) result</strong></td>
									<td><center><?php echo $f5['total']?></center></td>
									<td><center><?php echo $f6['total']?></center></td>
									<td><center><?php echo $f7['total']?></center></td>
									<td><center></center></td>
								</tr>
								<tr>
									<td><strong>3. No. with Rifampicin Resistance [RR]</strong></td>
									<td ><center>---</center></td>
									<td><center><?php echo $f8['total']?></center></td>
									<td><center><?php echo $f9['total']?></center></td>
									<td><center><?php echo $f19['total']?></center></td>
								</tr>
								<tr >
									<td><strong>4. No. with Rifampicin not Detected [T]</strong></td>
									<td><center>---</center></td>
									<td><center><?php echo $f10['total']?></center></td>
									<td><center><?php echo $f11['total']?></center></td>
									<td><center><?php echo $f20['total']?></center></td>
								</tr>
								<tr>
									<td><strong>5. No. with Rifampicin Resistance Undetermine [TI]</strong></td>
									<td><center>---</center></td>
									<td><center><?php echo $f12['total']?></center></td>
									<td><center><?php echo $f13['total']?></center></td>
									<td><center><?php echo $f21['total']?></center></td>
								</tr>
								<tr>
									<td><strong>6. No. with error or invalid result [I]</strong></td>
									<td><center>---</center></td>
									<td><center><?php echo $f14['total']?></center></td>
									<td><center><?php echo $f15['total']?></center></td>
									<td><center><?php echo $f22['total']?></center></td>
								</tr>
								<tr>
									<td><strong>7. No. with MTB not Detected [N]</strong></td>
									<td><center>---</center></td>
									<td><center><?php echo $f16['total']?></center></td>
									<td><center><?php echo $f17['total']?></center></td>
									<td><center><?php echo $f23['total']?></center></td>
								</tr>
							</tbody>
						</table>

						<h6 style="font-size:13px; color:#dc4141">B. Treatment Follow-up (DSSM Only)</h6>

						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Laboratory Activities</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>1. No. of Follow-up cases examined</strong></td>
									<td><center><?php echo $f18['total']?></center></td>
								</tr>
							</tbody>
						</table>
						<hr> <br>
						<h6 style="float:left">Approved by:</h6><br><br>
						<h4 style="float:left"><strong><?php echo $find['firstname']. " " .$find['lastname']?></strong></h4><br><br>
						<h6 style="float:left"><strong><?php echo $find['position']?></strong></h6>

					</div>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'examination_reports.php?year='+year;
				});
			});
		</script>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="js/plugins.js"></script>        
		<script type="text/javascript" src="js/actions.js"></script>        
	</body>
</html>






