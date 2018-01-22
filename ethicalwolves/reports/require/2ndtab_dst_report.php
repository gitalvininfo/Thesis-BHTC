<div class="row">
    <div class="col-md-6">
        <table class="table table-hover">
            <thead>
                <tr class="danger">
                    <th colspan="3">Resistant</th>
                </tr>
                <tr>
                    <th>Drugs</th>
                    <th><center>Number of Patients with Resistant</center></th>
                    <th><center>View Patients</center></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                $ami = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `amikacin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f1 = $ami->fetch_array();
                $cap = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `capreomycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f2 = $cap->fetch_array();
                $eth = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `ethambutol` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f3 = $eth->fetch_array();
                $iso = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `isoniazid` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f4 = $iso->fetch_array();
                $kan = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `kanamycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f5 = $kan->fetch_array();
                $lev = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `levofloxacin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f6 = $lev->fetch_array();
                $pyr = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `pyrazinamide` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f7 = $pyr->fetch_array();
                $rif = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `rifampicin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f8 = $rif->fetch_array();
                $str = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `streptomycin` = 'Resistant' && `year` = '$year'") or die(mysqli_error());
                $f9 = $str->fetch_array();

                ?>
                <tr>
                    <td>Amikacin</td>
                    <td><center><strong><?php echo $f1['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#ami"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Capreomycin</td>
                    <td><center><strong><?php echo $f2['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#cap"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Ethambutol</td>
                    <td><center><strong><?php echo $f3['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#eth"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Isoniazid</td>
                    <td><center><strong><?php echo $f4['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#iso"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Kanamycin</td>
                    <td><center><strong><?php echo $f5['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#kan"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Levofloxacin</td>
                    <td><center><strong><?php echo $f6['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#lev"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Pyrazinamide</td>
                    <td><center><strong><?php echo $f7['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#pyr"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Rifampicin</td>
                    <td><center><strong><?php echo $f8['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#rif"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Streptomycin</td>
                    <td><center><strong><?php echo $f9['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#str"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-hover">
            <thead>
                <tr class="warning">
                    <th colspan="3">Susceptible</th>
                </tr>
                <tr>
                    <th>Drugs</th>
                    <th><center>Number of Patients with Susceptible</center></th>
                    <th><center>View Patients</center></th>
                </tr>
            </thead>
            <tbody>
                <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
                        $ami = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `amikacin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f1 = $ami->fetch_array();
                        $cap = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `capreomycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f2 = $cap->fetch_array();
                        $eth = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `ethambutol` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f3 = $eth->fetch_array();
                        $iso = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `isoniazid` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f4 = $iso->fetch_array();
                        $kan = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `kanamycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f5 = $kan->fetch_array();
                        $lev = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `levofloxacin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f6 = $lev->fetch_array();
                        $pyr = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `pyrazinamide` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f7 = $pyr->fetch_array();
                        $rif = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `rifampicin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f8 = $rif->fetch_array();
                        $str = $conn->query("SELECT COUNT(*) as total FROM `dst_examination` WHERE `streptomycin` = 'Susceptible' && `year` = '$year'") or die(mysqli_error());
                        $f9 = $str->fetch_array();

                ?>
                <tr>
                    <td>Amikacin</td>
                    <td><center><strong><?php echo $f1['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#sami"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Capreomycin</td>
                    <td><center><strong><?php echo $f2['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#scap"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Ethambutol</td>
                    <td><center><strong><?php echo $f3['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#seth"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Isoniazid</td>
                    <td><center><strong><?php echo $f4['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#siso"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Kanamycin</td>
                    <td><center><strong><?php echo $f5['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#skan"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Levofloxacin</td>
                    <td><center><strong><?php echo $f6['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#slev"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Pyrazinamide</td>
                    <td><center><strong><?php echo $f7['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#spyr"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Rifampicin</td>
                    <td><center><strong><?php echo $f8['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#srif"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Streptomycin</td>
                    <td><center><strong><?php echo $f9['total']?></strong></center></td>
                    <td><center>
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#sstr"><span class="fa fa-search"></span></button>
                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
