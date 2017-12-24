<div class="row">                        
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body panel-body-table">                            
                <div class="tocify-content">
                    &nbsp;
                    <h2><strong>Intensive Phase</strong></h2> <hr>
                    <h3>January</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'config.php';
                            $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'January' ORDER BY `intensive_phase_id` ASC ") or die(mysqli_error());
                            $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'January'") or die(mysqli_error());
                            $f2 = $q2->fetch_array();
                            while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                            }
                            $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>February</h3>                                    
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'February' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'February'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>March</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'March' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'March'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>April</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'April' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'April'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>May</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'May' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'May'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>June</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'June' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'June'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>July</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'July' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'July'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>August</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'August' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'August'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>September</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'September' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'September'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>October</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'October' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'October'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>November</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'November' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'November'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>December</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'December' ORDER BY `intensive_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `intensive_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'December'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h2><strong>Continuation Phase</strong></h2> <hr>
                    <h3>January</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'January' ORDER BY `continuation_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'January'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>February</h3>                                    
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'February' ORDER BY `continuation_phase_id` DESC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'February'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>March</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'March' ORDER BY `continuation_phase_id` ASC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'March'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>April</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'April' ORDER BY `continuation_phase_id` ASC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'April'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>May</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'May' ORDER BY `continuation_phase_id` ASC ") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'May'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>June</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'June' ORDER BY `continuation_phase_id` ASC") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'June'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>July</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'July' ORDER BY `continuation_phase_id` ASC") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'July'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>August</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'August' ORDER BY `continuation_phase_id` ASC") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'August'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>September</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'September' ORDER BY `continuation_phase_id` ASC") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'September'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>October</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'October' ORDER BY `continuation_phase_id` ASC") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'October'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                        </tbody>
                    </table> <br>
                    <h3>November</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'config.php';
                            $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'November' ORDER BY `continuation_phase_id` ASC") or die(mysqli_error());
                            $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'November'") or die(mysqli_error());
                            $f2 = $q2->fetch_array();
                            while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                            }
                            $conn->close();
                            ?>

                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table> <br>
                    <h3>December</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr class="default">
                                <th><center>Date</center></th>
                                <th><center>Dosage</center></th>
                                <th><center>Remarks</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'config.php';
                                    $query = $conn->query("SELECT * FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'December' ORDER BY `continuation_phase_id` ASC") or die(mysqli_error());
                                    $q2 = $conn->query("SELECT sum(dosage) FROM `continuation_phase` WHERE `patient_id` = '$_GET[id]' && `month` = 'December'") or die(mysqli_error());
                                    $f2 = $q2->fetch_array();
                                    while($fetch = $query->fetch_array()){

                            ?>
                            <tr>
                                <td><center><?php echo $fetch['month']. " " .$fetch['day']?></center></td>
                                <td><center><?php echo $fetch['dosage']. " /mg"?></center></td>
                                <td><center><?php echo $fetch['remarks']?></center></td>
                            </tr>
                            <?php
                                    }
                                    $conn->close();
                            ?>
                            <tr class="danger">
                                <td><h6><center>Total dosage given this month</center></h6></td>
                                <td colspan="3"><center><strong><?php echo $f2['sum(dosage)']. " mg"?></strong></center></td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
    <div class="col-md-3" style="position: relative;">
        <div id="tocify"></div>
    </div>
</div>
