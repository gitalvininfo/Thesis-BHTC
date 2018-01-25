<!-- Edit TST-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `tst`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="updatetst<?php echo $fetch['tst_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="defModalHead"><strong>Edit Tuberculin Skin Testing Result</strong></h4>
			</div>
			<form role="form" id="jvalidate" class="form-horizontal" action="edit_query.php" method="post" onsubmit="return confirm('Are you sure you want to edit this Tuberculin Skin Test Result?');">
				<div class="modal-body">
					<div class="row">
						<div class="panel-body">
							<div class="col-md-12">
								<h5 class="push-up-1">Tuberculin Skin Test Result</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input type="hidden" class="form-control" name="tst_id" value="<?php echo $fetch['tst_id'];?>" required>
										<input data-toggle="tooltip" data-placement="bottom" title="Tuberculin Skin Test Result" type="text" class="form-control" name="result" value="<?php echo $fetch['result']?>" required/>
									</div>
								</div>
								<h5 class="push-up-1">Date Read</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="Date Read" type="text" class="form-control datepicker" value="<?php echo $fetch['date_read']?>" name="date_read" required/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info" name="edit_tst"><span class="fa fa-check"></span>Save</button>
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
<!-- End Edit TST-->
