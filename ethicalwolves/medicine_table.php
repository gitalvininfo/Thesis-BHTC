<?php
require 'logincheck.php';
require 'config.php';

if(ISSET($_POST['new_medicine'])){
	$medicine_name = mysqli_real_escape_string($conn, $_POST['medicine_name']);
	$medicine_type = mysqli_real_escape_string($conn, $_POST['medicine_type']);
	$medicine_description = mysqli_real_escape_string($conn, $_POST['medicine_description']);

	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
	$q1 = $conn->query ("SELECT * FROM `medicine` WHERE BINARY `medicine_name` = '$medicine_name'") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$check = $q1->num_rows;
	if($check > 0){
		echo "<script> alert ('Medicine name already exist!')</script>";
		echo "<script>document.location='medicine_table.php'</script>";
	}
	else {
		$conn->query("INSERT INTO `medicine` VALUES('', '$medicine_name', '$medicine_type', '$medicine_description', '')") or die(mysqli_error());
		$conn->close();
		echo "<script type='text/javascript'>alert('Successfully added new medicine!');</script>";
		echo "<script>document.location='medicine_table.php'</script>";  
	}
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
					<li><a href="#">Home</a></li>
					<li>Data Entry</li>
					<li class="active"><strong><mark>Add New Medicine</mark></strong></li>
				</ul>
				<div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Medicine's List <strong></strong></h3>
									<div class="btn-group pull-right">
										<div class="pull-left">
											<button class="btn btn-danger btn-md" data-toggle="modal" data-target="#new_medicine"><span class="fa fa-plus"></span>New Medicine </button>
										</div>
									</div>
								</div>
								<div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
									<table class="table table-hover">
										<thead> 
											<tr>
												<th><center>Medicine ID</center></th>
												<th><center>Medicine Name</center></th>
												<th><center>Medicine Description</center></th>
												<th><center>Running Balance</center></th>
												<th><center>Action</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
	$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
			$query = $conn->query("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
											?>
											<tr>
												<td><center><?php echo $fetch['medicine_id']?></center></td>
												<td><center><?php echo $fetch['medicine_name']?></center></td>
												<td><center><?php echo $fetch['medicine_description']?></center></td>
												<td><center><strong><?php echo $fetch['running_balance']?></strong></center></td>
												<td><center>
													<a href="#updatedata<?php echo $fetch['medicine_id'];?>" data-target="#updatedata<?php echo $fetch['medicine_id'];?>" data-toggle="modal" class="btn btn-info btn-sm"><span class="fa fa-pencil-square-o"></span>Edit</a>
													</center></td>
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
		</div>
		<?php require 'require/modals/new_medicine.php'?>
		<?php require 'require/modals/edit_medicine.php'?>
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
		<script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/actions.js"></script>
		<script type="text/javascript" src="js/settings.js"></script>
		<script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
		<script type="text/javascript">
			var medicine = $("#medicine").validate({
				ignore: [],
				rules: {
					medicine_name: {
						required: true
					},
					medicine_description: {
						required: true
					}
				}
			});
		</script>
	</body>
</html>






