<!-- New Patient -->
<div class="modal fade" id="new_patient" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="largeModalHead">New Patient</h4>
            </div>
            <form id="tbcase" role="form" class="form-horizontal" action="actions/registration_table.php" method="post" onsubmit="return confirm('Are you sure you want to add new patient?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <h5 class="push-up-1">Complete Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Name" type="text" class="form-control" name="patient_name" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Gender</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control select" name="gender">
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Birthdate</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Birthdate" id="tbirthdate" type="text" class="form-control datepicker"  name="birthdate" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Age</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Age" id="tage" type="number" class="form-control" name="age" style="font-size:11px;font-weight:bold;color:black" readonly/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Street Address</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <textarea class="form-control" rows="3" name="address" data-toggle="tooltip" data-placement="bottom" title="Street Address | Home Address"></textarea>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Barangay</h5>
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12">                                                    
                                        <select class="form-control select" data-live-search="true" name="barangay">
                                            <option>Select</option>
                                            <option value="Abcasa">Brgy. Abcasa</option>
                                            <option value="Alangilan">Brgy. Alangilan</option>
                                            <option value="Alijis">Brgy. Alijis</option>
                                            <option value="Banago">Brgy. Banago</option>
                                            <option value="Bata">Brgy. Bata</option>
                                            <option value="Cabug">Brgy. Cabug </option>
                                            <option value="Estefania ">Brgy. Estefania</option>
                                            <option value="Felisa">Brgy. Felisa</option>
                                            <option value="Granada ">Brgy. Granada</option>
                                            <option value="Handumanan">Brgy. Handumanan</option>
                                            <option value="Lopez Jaena">Brgy. Lopez Jaena</option>
                                            <option value="Mabini">Brgy. Mabini</option>
                                            <option value="Mandalagan">Brgy. Mandalagan</option>
                                            <option value="Mansilingan">Brgy. Mansilingan</option>
                                            <option value="Montevista">Brgy. Montevista</option>
                                            <option value="Pahanocoy">Brgy. Pahanocoy</option>
                                            <option value="Punta Taytay ">Brgy. Punta Taytay</option>
                                            <option value="Singcang">Brgy. Singcang</option>
                                            <option value="Sumag ">Brgy. Sum-ag</option>
                                            <option value="Taculing">Brgy. Taculing</option>
                                            <option value="Tangub">Brgy. Tangub</option>
                                            <option value="Villamonte">Brgy. Villamonte</option>
                                            <option value="Vista Alegre">Brgy. Vista Alegre</option>
                                            <option value="Brgy 1">Brgy. 1</option>
                                            <option value="Brgy 2">Brgy. 2</option>
                                            <option value="Brgy 3">Brgy. 3</option>
                                            <option value="Brgy 4">Brgy. 4</option>
                                            <option value="Brgy 5">Brgy. 5</option>
                                            <option value="Brgy 6">Brgy. 6</option>
                                            <option value="Brgy 7">Brgy. 7</option>
                                            <option value="Brgy 8">Brgy. 8</option>
                                            <option value="Brgy 9">Brgy. 9</option>
                                            <option value="Brgy 10">Brgy. 10</option>
                                            <option value="Brgy 11">Brgy. 11</option>
                                            <option value="Brgy 12">Brgy. 12</option>
                                            <option value="Brgy 13">Brgy. 13</option>
                                            <option value="Brgy 14">Brgy. 14</option>
                                            <option value="Brgy 15">Brgy. 15</option>
                                            <option value="Brgy 16">Brgy. 16</option>
                                            <option value="Brgy 17">Brgy. 17</option>
                                            <option value="Brgy 18">Brgy. 18</option>
                                            <option value="Brgy 19">Brgy. 19</option>
                                            <option value="Brgy 20">Brgy. 20</option>
                                            <option value="Brgy 21">Brgy. 21</option>
                                            <option value="Brgy 22">Brgy. 22</option>
                                            <option value="Brgy 23">Brgy. 23</option>
                                            <option value="Brgy 24">Brgy. 24</option>
                                            <option value="Brgy 25">Brgy. 25</option>
                                            <option value="Brgy 26">Brgy. 26</option>
                                            <option value="Brgy 27">Brgy. 27</option>
                                            <option value="Brgy 28">Brgy. 28</option>
                                            <option value="Brgy 29">Brgy. 29</option>
                                            <option value="Brgy 30">Brgy. 30</option>
                                            <option value="Brgy 31">Brgy. 31</option>
                                            <option value="Brgy 32">Brgy. 32</option>
                                            <option value="Brgy 33">Brgy. 33</option>
                                            <option value="Brgy 34">Brgy. 34</option>
                                            <option value="Brgy 35">Brgy. 35</option>
                                            <option value="Brgy 36">Brgy. 36</option>
                                            <option value="Brgy 37">Brgy. 37</option>
                                            <option value="Brgy 38">Brgy. 38</option>
                                            <option value="Brgy 39">Brgy. 39</option>
                                            <option value="Brgy 40">Brgy. 40</option>
                                            <option value="Brgy 41">Brgy. 41</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="push-up-1">Height in cms</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Patient Height" type="text" class="form-control" name="height" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Contact Number</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Contact Number" type="text" class="form-control" name="contact_number"  required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Occupation</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Occupation * optional" type="text" class="form-control" name="occupation" />
                                    </div>
                                </div>
                                <h5 class="push-up-1">Philhealth Number</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Philhealth Number * optional" type="text" class="form-control" name="philhealth_no" />
                                    </div>
                                </div>
                                <h5 class="push-up-1">Contact Person</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Contact Person" type="text" class="form-control" name="contact_person" required/>
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
                    <span class="pull-left"><label class="col-md-12 col-xs-12 control-label" style="color:red"><i>* Occupation & Philhealth Number is optional</i></label></span>
                    <button type="submit" class="btn btn-info" name="add_new_patient"><span class="fa fa-check"></span>Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End New Patient -->
