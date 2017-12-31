<!-- New IPT -->
<div class="modal fade" id="new_ipt" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-user-plus"></span> New IPT Case</h4>
            </div>
            <form role="form" id="ipt" class="form-horizontal" action="actions/registration_table.php" method="post" onsubmit="return confirm('Are you sure you want to add new IPT case?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Name</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Name" type="text" class="form-control" name="name" placeholder="Patient Name" style="text-transform:capitalize" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Age</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Age" type="number" class="form-control" name="age" placeholder="Age" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Birthdate</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Birthdate" type="text" class="form-control datepicker" value="Birthdate" name="birthdate" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Height</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Height" type="number" class="form-control" name="height" placeholder="Height" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-xs-12 control-label">Gender</label>
                                    <div class="col-md-9">                                        
                                        <select class="form-control select" name="gender">
                                            <option value="">Choose Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-xs-12 control-label">Address</label>
                                    <div class="col-md-9 col-xs-12">                                            
                                        <textarea class="form-control" rows="3" name="address" placeholder="Complete Home Address" data-toggle="tooltip" data-placement="bottom" title="Complete Home Address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Contact Person</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Contact Person" type="text" class="form-control" name="contact_person" placeholder="Contact Person" style="text-transform:capitalize" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-2 col-xs-12 control-label">Emergency No.</label>
                                    <div class="col-md-9 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Emergency Number" type="text" class="form-control" name="emergency_no" placeholder="Emergency Number" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End New IPT -->
