<div class="modal fade" id="new_physician" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><span class="fa fa-user-plus"></span> Medical Technologist Personal and Account Information</h4>
            </div>
            <form role="form" id="jvalidate" class="form-horizontal" action="master_file_medtech.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">First Name</label>
                                    <div class="col-md-8 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="First Name" type="text" class="form-control" name="firstname" placeholder="First Name" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Last Name</label>
                                    <div class="col-md-8 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Last Name" type="text" class="form-control" name="lastname" placeholder="Last Name" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">License Number</label>
                                    <div class="col-md-8 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="License Number" type="text" class="form-control" name="license" placeholder="License Number" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Username</label>
                                    <div class="col-md-8 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="username" placeholder="Username" required/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 col-xs-12 control-label">Password</label>
                                    <div class="col-md-8 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Password" type="password" class="form-control" name="password" placeholder="Password" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="save_user"><span class="fa fa-check"></span>Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
