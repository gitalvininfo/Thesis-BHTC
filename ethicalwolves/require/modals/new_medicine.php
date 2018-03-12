<!-- New Medicine-->
<div class="modal fade" id="new_medicine" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>New Medicine</strong></h4>
            </div>
            <form role="form" id="medicine" class="form-horizontal" action="medicine_table.php" method="post" onsubmit="return confirm('Are you sure you want to add this new medicine?');" >
                <div class="modal-body">
                    <div class="panel-body">
                        <h5 class="push-up-1">Medicine Name</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <input data-toggle="tooltip" data-placement="bottom" title="Medicine Name" type="text" class="form-control" name="medicine_name" required/>
                            </div>
                        </div>
                        <h5 class="push-up-1">Medicine Type</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <select class="form-control select" name="medicine_type" required>
                                    <option>Choose</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Syrup">Syrup</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="push-up-1">Medicine Description</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <textarea data-toggle="tooltip" data-placement="bottom" title="Medicine Name" type="text" class="form-control" name="medicine_description" required ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="new_medicine"><span class="fa fa-check"></span>Save</button> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End New Medicine-->
