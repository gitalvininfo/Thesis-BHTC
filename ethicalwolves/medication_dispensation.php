<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['medication_dispensation'])){
	$health_center = $_POST['health_center'];
	$medicine_name = $_POST['medicine_name'];
	$date_given = date('F j, Y');
	$month = date("M", strtotime("+8 HOURS"));
	$year = date("Y", strtotime("+8 HOURS"));
	$quantity = $_POST['quantity'];
	$received_by = $_POST['received_by'];

	$conn = new mysqli("localhost", 'root', '', 'thesis') or die(mysqli_error());
	$query = $conn->query ("SELECT * FROM `medicine` where `medicine_name` = '$medicine_name'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$running_balance = $fetch['running_balance'];
	if($quantity > $running_balance){
		echo "<script> alert ('You only have $running_balance kits left. Your input is $quantity. Enter Again.') </script>";
		echo "<script>document.location='medication_dispensation.php'</script>"; 
	}

	else {
		$conn->query("INSERT INTO `medication_dispensation` VALUES('', '$health_center', '$medicine_name', '$date_given', '$month', '$year', '$quantity', '$received_by')") or die(mysqli_error());
		$conn->query("UPDATE `medicine` SET `running_balance` = `running_balance` - '$quantity' WHERE `medicine_name` = '$medicine_name'") or die(mysqli_error());
		$conn->close();
		echo "<script type='text/javascript'>alert('Successfully dispensed medicine!');</script>";
		echo "<script>document.location='medication_dispensation.php'</script>";  
	}
}


if(ISSET($_POST['medicine_stock'])){
	$medicine_name = $_POST['medicine_name'];
	$quantity = $_POST['quantity'];
	date_default_timezone_set('Asia/Manila');
	$date=date("F j, Y, g:i a");
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$conn->query("INSERT INTO `medicine_stocks` VALUES('', '$medicine_name', '$quantity', '$date')") or die(mysqli_error());
	$conn->query("UPDATE `medicine` SET `running_balance` = `running_balance` + '$quantity' WHERE `medicine_name` = '$medicine_name'") or die(mysqli_error());
	$conn->close();
	echo "<script type='text/javascript'>alert('Successfully added new stocks!');</script>";
	echo "<script>document.location='medication_dispensation.php'</script>";  
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>        
		<!-- META SECTION -->
		<title>BHTC-PMIS</title>            
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
		<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
	</head>
	<body>
		<?php
		$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user_id]'") or die(mysqli_error());
		$find = $query->fetch_array();
		?>
		<!-- START PAGE CONTAINER -->
		<div class="page-container">
			<?php require 'require/sidebar.php'?>
			<div class="page-content">
				<?php require 'require/header.php'?>
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li>Transaction</li>
					<li class="active"><strong><mark>Medication Dispensation and Add Stocks</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li><a href="#tab-first" role="tab" data-toggle="tab">Medication Dispensation Log</a></li>
									<li class="active"><a href="#tab-second" role="tab" data-toggle="tab">Medicine Stockin List</a></li>
									<div class="btn-group pull-right">
										<div class="pull-left">
											<button class="btn btn-default btn-md" data-toggle="modal" data-target="#dispensed">Dispense Stocks </button>
											<button class="btn btn-info btn-md" data-toggle="modal" data-target="#new_stock">Add Stocks</button>
										</div>
									</div>
								</ul>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 485px;">
									<div class="panel-body tab-content">
										<div class="tab-pane" id="tab-first">
											<div class="row">
												<div class="panel panel-default">
													<div class="panel-body">
														<table id="medication_dispensation" class="table datatable">
															<thead> 
																<tr class="warning">
																	<th><center>Health Center</center></th>
																	<th><center>Medicine Name</center></th>
																	<th><center>Date</center></th>
																	<th><center>Number of Kits</center></th>
																	<th><center>Received By</center></th>
																</tr>
															</thead>
															<tbody>
																<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
			$query = $conn->query("SELECT * FROM `medication_dispensation` ORDER BY `dispensation_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
																?>
																<tr>
																	<td><center><?php echo $fetch['health_center']?></center></td>
																	<td><center><?php echo $fetch['medicine_name']?></center></td>
																	<td><center><?php echo $fetch['date_given']?></center></td>
																	<td><center><?php echo $fetch['quantity']?> kits</center></td>
																	<td><center><?php echo $fetch['received_by']?></center></td>
																</tr>
																<?php
			}
			$conn->close();
																?>
															</tbody>
														</table>   
													</div>
												</div>  
											</div>
										</div>
										<div class="tab-pane active" id="tab-second">
											<div class="row">
												<div class="panel panel-default">
													<div class="panel-body">
														<table id="medication_dispensation" class="table datatable">
															<thead> 
																<tr class="warning">
																	<th><center>Medicine Name</center></th>
																	<th><center>Number of Kits</center></th>
																	<th><center>Date Created</center></th>

																</tr>
															</thead>
															<tbody>
																<?php
																$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
																$query = $conn->query("SELECT * FROM `medicine_stocks` ORDER BY `medicine_stock_id` DESC") or die(mysqli_error());
																while($fetch = $query->fetch_array()){

																?>
																<tr>
																	<td><center><?php echo $fetch['medicine_name']?></center></td>
																	<td><center><?php echo $fetch['quantity']?></center></td>
																	<td><center><?php echo $fetch['date']?></center></td>
																</tr>

																<?php
																}
																$conn->close();
																?>  
															</tbody>
														</table>   
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END TABS -->
							</div>
						</div>
					</div>                    
				</div>
			</div>            
		</div>

		<?php require 'require/modals/dispensed_add_stocks.php'?>
		<?php require 'require/logout.php'?>
		<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
		<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>  
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
		<script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
		<script type="text/javascript">
			$('#dispensation').validate({
				ignore: [],
				rules: {
					health_center: {
						required: true
					},
					medicine_name: {
						required: true
					},
					quantity: {
						required: true,
						number: true,
						min:1
					},
					received: {
						required: true,
						lettersonly: true
					}
				}
			});
		</script>

	</body>
</html>






