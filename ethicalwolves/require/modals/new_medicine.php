<!-- New Medicine-->
<div class="modal fade" id="new_medicine" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-plus"></span> New Medicine</h4>
            </div>
            <form id="medicine" role="form" class="form-horizontal" action="medicine_table.php" method="post" onsubmit="return confirm('Are you sure you want to add this new medicine?');">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="form-group ">
                            <label class="col-md-3 col-xs-12 control-label">Medicine Name</label>
                            <div class="col-md-8 col-xs-12">
                                <input data-toggle="tooltip" data-placement="bottom" title="Medicine Name" type="text" class="form-control" name="medicine_name" placeholder="Medicine name" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-md-3 col-xs-12 control-label">Description</label>
                            <div class="col-md-8 col-xs-12">
                                <input data-toggle="tooltip" data-placement="bottom" title="Medicine Description" type="text" class="form-control" name="medicine_description" placeholder="Medicine Description" required/>
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
