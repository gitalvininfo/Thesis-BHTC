<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `user` where `position` = 'Medical Technologist'") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="updateuser<?php echo $fetch['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="defModalHead"><strong>Edit Account</strong></h4>
			</div>
			<form role="form" id="medtech" class="form-horizontal" action="edit_query.php" method="post" onsubmit="return myFunction()">
				<div class="modal-body">
					<div class="row">
						<div class="panel-body">
							<div class="col-md-12">
								<h5 class="push-up-1">First Name</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input type="hidden" class="form-control" name="user_id" value="<?php echo $fetch['user_id'];?>" required>
										<input data-toggle="tooltip" data-placement="bottom" title="First Name" type="text" class="form-control" name="firstname" value="<?php echo $fetch['firstname']?>" required/>
									</div>
								</div>
								<h5 class="push-up-1">Last Name</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="Last Name" type="text" class="form-control" name="lastname" value="<?php echo $fetch['lastname']?>" required/>
									</div>
								</div>
								<h5 class="push-up-1">License Number</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="License Number" type="text" class="form-control" name="license" value="<?php echo $fetch['license']?>" required/>
									</div>
								</div>
								<h5 class="push-up-1">Username</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="username" value="<?php echo $fetch['username']?>" required/>
									</div>
								</div>
								<h5 class="push-up-1">New Password</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" id="password" title="Password" type="text" class="form-control" name="password"/>
									</div>
								</div>
								<h5 class="push-up-1">Confirm Password</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="Confirm Password" type="text" class="form-control" name="newpassword"/>
									</div>
								</div>
								<h5 class="push-up-1">Status</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<select class="form-control select" name="status">
											<option value="<?php echo $fetch['status']?>"><?php echo $fetch['status']?></option>
											<option value="Active">Active</option>
											<option value="Inactive">Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info" name="edit_user"><span class="fa fa-check"></span>Save</button>
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