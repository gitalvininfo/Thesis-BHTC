<!-- New Family Member-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="new_member<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="defModalHead">New Family Member</h4>
			</div>
			<form role="form" id="jvalidate" class="form-horizontal" action="actions/add_member.php" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="panel-body">
							<div class="col-md-12">
								<h5 class="push-up-1">Complete Name</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
										<input data-toggle="tooltip" data-placement="bottom" title="Name" type="text" class="form-control" name="name" required/>
									</div>
								</div>
								<h5 class="push-up-1">Age</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="Age" type="text" class="form-control" name="age" required/>
									</div>
								</div>
								<h5 class="push-up-1">Date Screened</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="Date Screened" type="text" class="form-control datepicker" name="date_screened" required/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info" name="add_member"><span class="fa fa-check"></span>Save</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
									 }
$conn->close();
?> 
<!-- End Family Member-->
