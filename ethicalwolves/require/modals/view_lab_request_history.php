<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `laboratory_request`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="viewdata<?php echo $fetch['lab_request_id'];?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="display:none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="defModalHead">Laboratory Request</h4>
			</div>
			<form role="form" class="form-horizontal" action="edit_query.php" method="post">
				<div class="modal-body">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<h5 class="push-up-5">Name of Collection Unit : <u><?php echo $fetch['collection_unit']?></u></h5>
								<h5 class="push-up-5">Name of Requesting Physician : <u><?php echo $fetch['requesting_physician']?></u></h5>
								<h5 class="push-up-5">Reason for Examination : <u><?php echo $fetch['reason_for_examination']?></u></h5>
								<h5 class="push-up-5">Type of Specimen : <u><?php echo $fetch['specimen_type']?></u></h5>
								<h5 class="push-up-5">Test Requested : <u><?php echo $fetch['test_requested']?></u></h5>
								<h5 class="push-up-5">Specimen Collector : <u><?php echo $fetch['sample_collector']?></u></h5>
								<h5 class="push-up-5">Designation of Specimen Collector : <u><?php echo $fetch['designation']?></u></h5>
								<h5 class="push-up-5">Specimen 1 Date Collected : <u><?php echo $fetch['date_sample_collected']?></u></h5>
								<h5 class="push-up-5">Specimen 2 Date Collected : <u><?php echo $fetch['date_sample_collected2']?></u></h5>
							</div>
						</div>

					</div>                        
				</div>
				<div class="modal-footer">
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
