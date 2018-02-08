<!-- Edit Family Member-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `family_member`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updatemember<?php echo $fetch['member_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="height:auto">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="defModalHead"><strong>Update Family Member</strong></h4>
			</div>
			<form role="form" class="form-horizontal" action="edit_query.php" method="post">
				<div class="modal-body">
					<div class="panel-body">
						<h5 class="push-up-1">Complete Name</h5>
						<div class="form-group ">
							<div class="col-md-12 col-xs-12">
								<input type="hidden" class="form-control" name="member_id" value="<?php echo $fetch['member_id'];?>" required>
								<input data-toggle="tooltip" data-placement="bottom" title="Name" type="text" class="form-control" name="name" value="<?php echo $fetch['name']?>" required/>
							</div>
						</div>
						<h5 class="push-up-1">Age</h5>
						<div class="form-group ">
							<div class="col-md-12 col-xs-12">
								<input data-toggle="tooltip" data-placement="bottom" title="Age" type="text" class="form-control" name="age" value="<?php echo $fetch['age']?>" required/>
							</div>
						</div>
						<h5 class="push-up-1">Date Screened</h5>
						<div class="form-group ">
							<div class="col-md-12 col-xs-12">
								<input data-toggle="tooltip" data-placement="bottom" title="Date Screened" type="text" class="form-control datepicker" name="date_screened" value="<?php echo $fetch['date_screened']?>" required/>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info" name ="edit_member"><span class="fa fa-check"></span>Save</button> 
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
<!-- End of Edit Family Member-->
