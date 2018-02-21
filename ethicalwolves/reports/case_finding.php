<?php
require_once '../logincheck.php';
require ('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>        
		<title>Bacolod City, Negros Occidental, Philippines 6100</title>            
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css"/>
		<link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<script src="../js/plugins/jquery/jquery.min.js"></script>
		<?php require 'require/examination_reports_table1.php'?>
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
								<img src="../assets/images/bcreport.png" alt="BC Logo"/>     
							</div>
						</div>
						<h3 class="panel-title">Bacolod City Health TB DOTS Center - Case Finding - Year <?php echo $year?></h3>

						<div class="btn-group pull-right">
							<div class="pull-left">
								<span style="font-size:12px;"> <i><?php echo $date?></i></span> &nbsp;
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
						<?php
						require '../config.php';
						$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
						$find = $query->fetch_array();
						?>
						<h6 style="font-size:13px;color:#dc4141">A. Bacteriologically-confirmed TB Cases Registered During the Year by Registration Group and Sex</h6>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th >Classification</th>
									<th colspan="2" style="width:20%"><center>New</center></th>
									<th colspan="2"style="width:20%"><center>Relapse</center></th>
									<th colspan="2" style="width:25%"><center>Previously Treated (except relapse)</center></th>
									<th colspan="2"><center>Total</center></th>
								</tr>
							</thead>
							<tbody>
								<?php require 'require/case_finding_table2.php'?>
								<tr>
									<td></td>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
								</tr>
								<tr>
									<td>Pulmonary</td>
									<td><center><strong><?php echo $f1['total']?></strong></center></td>
									<td><center><strong><?php echo $f2['total']?></strong></center></td>
									<td><center><strong><?php echo $f3['total']?></strong></center></td>
									<td><center><strong><?php echo $f4['total']?></strong></center></td>
									<td><center><strong><?php echo $f5['total']?></strong></center></td>
									<td><center><strong><?php echo $f6['total']?></strong></center></td>
									<td><center><strong><?php echo $f7['total']?></strong></center></td>
									<td><center><strong><?php echo $f8['total']?></strong></center></td>
								</tr>
								<tr>
									<td>Extra-pulmonary</td>
									<td><center><strong><?php echo $f9['total']?></strong></center></td>
									<td><center><strong><?php echo $f10['total']?></strong></center></td>
									<td><center><strong><?php echo $f11['total']?></strong></center></td>
									<td><center><strong><?php echo $f12['total']?></strong></center></td>
									<td><center><strong><?php echo $f13['total']?></strong></center></td>
									<td><center><strong><?php echo $f14['total']?></strong></center></td>
									<td><center><strong><?php echo $f15['total']?></strong></center></td>
									<td><center><strong><?php echo $f16['total']?></strong></center></td>
								</tr>
								<tr>
									<td>Subtotal</td>
									<td><center><strong><?php echo $f17['total']?></strong></center></td>
									<td><center><strong><?php echo $f18['total']?></strong></center></td>
									<td><center><strong><?php echo $f19['total']?></strong></center></td>
									<td><center><strong><?php echo $f20['total']?></strong></center></td>
									<td><center><strong><?php echo $f21['total']?></strong></center></td>
									<td><center><strong><?php echo $f22['total']?></strong></center></td>
									<td><center><strong><?php echo $f23['total']?></strong></center></td>
									<td><center><strong><?php echo $f24['total']?></strong></center></td>
								</tr>
								<tr>
									<td>Total</td>
									<td colspan="2"><center><strong><?php echo $f25['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f26['total']?></strong></center></td>
									<td colspan="2"><center><strong></strong></center></td>
									<td class="danger" colspan="2"><center><strong><?php echo $f29['total']?></strong></center></td>
								</tr>
							</tbody>
						</table>

						<h6 style="font-size:13px;color:#dc4141">B. Clinically-diagnosed TB Cases Registered During the Year by Registration Group and Sex</h6>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th >Classification</th>
									<th colspan="2" style="width:20%"><center>New</center></th>
									<th colspan="2"style="width:20%"><center>Relapse</center></th>
									<th colspan="2" style="width:25%"><center>Previously Treated (except relapse)</center></th>
									<th colspan="2"><center>Total</center></th>
								</tr>
							</thead>
							<tbody>
								<?php require 'require/case_finding_table2.php'?>
								<tr>
									<td></td>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
								</tr>
								<tr>
									<td>Pulmonary</td>
									<td><center><strong><?php echo $f1['total']?></strong></center></td>
									<td><center><strong><?php echo $f2['total']?></strong></center></td>
									<td><center><strong><?php echo $f3['total']?></strong></center></td>
									<td><center><strong><?php echo $f4['total']?></strong></center></td>
									<td><center><strong><?php echo $f5['total']?></strong></center></td>
									<td><center><strong><?php echo $f6['total']?></strong></center></td>
									<td><center><strong><?php echo $f7['total']?></strong></center></td>
									<td><center><strong><?php echo $f8['total']?></strong></center></td>
								</tr>
								<tr>
									<td>Extra-pulmonary</td>
									<td><center><strong><?php echo $f9['total']?></strong></center></td>
									<td><center><strong><?php echo $f10['total']?></strong></center></td>
									<td><center><strong><?php echo $f11['total']?></strong></center></td>
									<td><center><strong><?php echo $f12['total']?></strong></center></td>
									<td><center><strong><?php echo $f13['total']?></strong></center></td>
									<td><center><strong><?php echo $f14['total']?></strong></center></td>
									<td><center><strong><?php echo $f15['total']?></strong></center></td>
									<td><center><strong><?php echo $f16['total']?></strong></center></td>
								</tr>
								<tr>
									<td>Subtotal</td>
									<td><center><strong><?php echo $f17['total']?></strong></center></td>
									<td><center><strong><?php echo $f18['total']?></strong></center></td>
									<td><center><strong><?php echo $f19['total']?></strong></center></td>
									<td><center><strong><?php echo $f20['total']?></strong></center></td>
									<td><center><strong><?php echo $f21['total']?></strong></center></td>
									<td><center><strong><?php echo $f22['total']?></strong></center></td>
									<td><center><strong><?php echo $f23['total']?></strong></center></td>
									<td><center><strong><?php echo $f24['total']?></strong></center></td>
								</tr>
								<tr>
									<td>Total</td>
									<td colspan="2"><center><strong><?php echo $f25['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f26['total']?></strong></center></td>
									<td colspan="2"><center><strong></strong></center></td>
									<td class="danger" colspan="2"><center><strong><?php echo $f29['total']?></strong></center></td>
								</tr>
							</tbody>
						</table>

						<h6 style="font-size:13px;color:#dc4141">C. All New and Relapse TB Cases (All Forms) by Age and Sex</h6>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th ></th>
									<th colspan="2" ><center>0-4</center></th>
									<th colspan="2"><center>5-14</center></th>
									<th colspan="2"><center>15-24</center></th>
									<th colspan="2"><center>25-34</center></th>
									<th colspan="2" ><center>35-44</center></th>
									<th colspan="2"><center>45-54</center></th>
									<th colspan="2"><center>55-64</center></th>
									<th colspan="2"><center>>=65</center></th>
									<th colspan="2" ><center>Total</center></th>
								</tr>
							</thead>
							<tbody>
								<?php require 'require/case_finding_table3.php'?>
								<tr>
									<th></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
									<th><center><strong>M</strong></center></th>
									<th><center><strong>F</strong></center></th>
								</tr>

								<tr>
									<td>New</td>
									<td><center><strong><?php echo $f1['total']?></strong></center></td>
									<td><center><strong><?php echo $f2['total']?></strong></center></td>
									<td><center><strong><?php echo $f3['total']?></strong></center></td>
									<td><center><strong><?php echo $f4['total']?></strong></center></td>
									<td><center><strong><?php echo $f5['total']?></strong></center></td>
									<td><center><strong><?php echo $f6['total']?></strong></center></td>
									<td><center><strong><?php echo $f7['total']?></strong></center></td>
									<td><center><strong><?php echo $f8['total']?></strong></center></td>
									<td><center><strong><?php echo $f9['total']?></strong></center></td>
									<td><center><strong><?php echo $f10['total']?></strong></center></td>
									<td><center><strong><?php echo $f11['total']?></strong></center></td>
									<td><center><strong><?php echo $f12['total']?></strong></center></td>
									<td><center><strong><?php echo $f13['total']?></strong></center></td>
									<td><center><strong><?php echo $f14['total']?></strong></center></td>
									<td><center><strong><?php echo $f15['total']?></strong></center></td>
									<td><center><strong><?php echo $f16['total']?></strong></center></td>
									<td><center><strong><?php echo $f17['total']?></strong></center></td>
									<td><center><strong><?php echo $f18['total']?></strong></center></td>
								</tr>

								<tr>
									<td>Relapse</td>
									<td><center><strong><?php echo $f19['total']?></strong></center></td>
									<td><center><strong><?php echo $f20['total']?></strong></center></td>
									<td><center><strong><?php echo $f21['total']?></strong></center></td>
									<td><center><strong><?php echo $f22['total']?></strong></center></td>
									<td><center><strong><?php echo $f23['total']?></strong></center></td>
									<td><center><strong><?php echo $f24['total']?></strong></center></td>
									<td><center><strong><?php echo $f25['total']?></strong></center></td>
									<td><center><strong><?php echo $f26['total']?></strong></center></td>
									<td><center><strong><?php echo $f27['total']?></strong></center></td>
									<td><center><strong><?php echo $f28['total']?></strong></center></td>
									<td><center><strong><?php echo $f29['total']?></strong></center></td>
									<td><center><strong><?php echo $f30['total']?></strong></center></td>
									<td><center><strong><?php echo $f31['total']?></strong></center></td>
									<td><center><strong><?php echo $f32['total']?></strong></center></td>
									<td><center><strong><?php echo $f33['total']?></strong></center></td>
									<td><center><strong><?php echo $f34['total']?></strong></center></td>
									<td><center><strong><?php echo $f35['total']?></strong></center></td>
									<td><center><strong><?php echo $f36['total']?></strong></center></td>
								</tr>

								<tr>
									<td>Subtotal</td>
									<td><center><strong><?php echo $f37['total']?></strong></center></td>
									<td><center><strong><?php echo $f38['total']?></strong></center></td>
									<td><center><strong><?php echo $f39['total']?></strong></center></td>
									<td><center><strong><?php echo $f40['total']?></strong></center></td>
									<td><center><strong><?php echo $f41['total']?></strong></center></td>
									<td><center><strong><?php echo $f42['total']?></strong></center></td>
									<td><center><strong><?php echo $f43['total']?></strong></center></td>
									<td><center><strong><?php echo $f44['total']?></strong></center></td>
									<td><center><strong><?php echo $f45['total']?></strong></center></td>
									<td><center><strong><?php echo $f46['total']?></strong></center></td>
									<td><center><strong><?php echo $f47['total']?></strong></center></td>
									<td><center><strong><?php echo $f48['total']?></strong></center></td>
									<td><center><strong><?php echo $f49['total']?></strong></center></td>
									<td><center><strong><?php echo $f50['total']?></strong></center></td>
									<td><center><strong><?php echo $f51['total']?></strong></center></td>
									<td><center><strong><?php echo $f52['total']?></strong></center></td>
									<td><center><strong><?php echo $f53['total']?></strong></center></td>
									<td><center><strong><?php echo $f54['total']?></strong></center></td>
								</tr>

								<tr>
									<td>Total</td>
									<td colspan="2"><center><strong><?php echo $f55['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f56['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f57['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f58['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f59['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f60['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f61['total']?></strong></center></td>
									<td colspan="2"><center><strong><?php echo $f62['total']?></strong></center></td>
									<td class="danger" colspan="2"><center><strong><?php echo $f63['total']?></strong></center></td>
								</tr>


							</tbody>
						</table>

						<h6 style="font-size:13px;color:#dc4141">D. Source of All New and Relapse TB Cases (All Forms)</h6>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th ></th>
									<th colspan="4"><center>Source of Patient</center></th>
								</tr>
								<tr>
									<th style="with:40%">Number of All New and Relapse TB Cases (All Forms)</th>
									<th style="width:20%"><center>Public Health Center</center></th>
									<th style="width:20%"><center>Other Public Facilities</center></th>
									<th style="width:20%"><center>Private</center></th>
									<th  style="width:20%"><center>Community</center></th>
								</tr>
							</thead>
							<tbody>
								<?php require 'require/case_finding_table4.php'?>
								<tr>
									<td><center><strong><?php echo $f1['total']?></strong></center></td>
									<td><center><strong><?php echo $f2['total']?></strong></center></td>
									<td><center><strong><?php echo $f3['total']?></strong></center></td>
									<td><center><strong><?php echo $f4['total']?></strong></center></td>
									<td><center><strong><?php echo $f5['total']?></strong></center></td>
								</tr>
							</tbody>
						</table>

						<h6 style="font-size:13px;color:#dc4141">E. TB in Children</h6>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Total TB Cases less than 15 years old</th>
									<th><center>Number</center></th>
								</tr>
							</thead>
							<tbody>
								<?php require 'require/case_finding_table5.php'?>
								<tr>
									<td>Pulmonary</td>
									<td><center><strong><?php echo $f1['total']?></strong></center></td>
								</tr>
								<tr>
									<td>Extra-pulmonary</td>
									<td><center><strong><?php echo $f2['total']?></strong></center></td>
								</tr>
							</tbody>
						</table>

						<h6 style="font-size:13px;color:#dc4141">F. Individuals given IPT</h6>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th></th>
									<th><center>Number</center></th>
								</tr>
							</thead>
							<tbody>
								<?php require 'require/case_finding_table5.php'?>
								<tr>
									<td>Children age 0-4</td>
									<td><center><strong><?php echo $f2['total']?></strong></center></td>
								</tr>

							</tbody>
						</table><hr> <br>
						<h6 style="float:left"></h6><br><br>
						<h4 style="float:left"><strong><?php echo $find['firstname']. " " .$find['lastname']?></strong></h4><br><br>
						<h6 style="float:left">Approved by:</h6>
					</div>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'case_finding.php?year='+year;
				});
			});
		</script>
		<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
		<script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="../js/plugins.js"></script>        
		<script type="text/javascript" src="../js/actions.js"></script>        
	</body>
</html>





