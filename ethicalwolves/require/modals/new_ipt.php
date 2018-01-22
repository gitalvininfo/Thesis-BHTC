<!-- New IPT -->
<div class="modal fade" id="new_ipt" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="largeModalHead">New IPT Case</h4>
            </div>
            <form role="form" id="ipt" class="form-horizontal" action="actions/registration_table.php" method="post" onsubmit="return confirm('Are you sure you want to add new IPT case?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <h5 class="push-up-1">Complete Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Name" type="text" class="form-control" name="name" style="text-transform:capitalize" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Birthdate</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Birthdate" id="birthdate" type="text" class="form-control datepicker"  name="birthdate" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Age</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Age" id="age" type="number" class="form-control" name="age" style="font-size:11px;font-weight:bold;color:black" readonly/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Complete Home Address</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <textarea class="form-control" rows="3" name="address" data-toggle="tooltip" data-placement="bottom" title="Complete Home Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="push-up-1">Gender</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control select" name="gender" requried>
                                            <option>Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Height</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Height" type="number" class="form-control" name="height" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Contact Person</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Contact Person" type="text" class="form-control" name="contact_person" style="text-transform:capitalize" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Emergency Number</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Emergency Number" type="text" class="form-control" name="emergency_no" required/>
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
