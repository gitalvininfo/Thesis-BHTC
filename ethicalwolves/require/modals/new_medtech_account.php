<div class="modal fade" id="new_physician" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Create New Account</h4>
            </div>
            <form role="form" id="medtech" class="form-horizontal" action="master_file_medtech.php" method="post" onsubmit="return confirm('Are you sure you want to add this account?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <h5 class="push-up-1">First Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="First Name" type="text" class="form-control" name="firstname" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Last Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Last Name" type="text" class="form-control" name="lastname" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">License Number</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="License Number" type="text" class="form-control" name="license" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Username</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="username" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Password</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Password" type="password" class="form-control" name="password" required/>
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
