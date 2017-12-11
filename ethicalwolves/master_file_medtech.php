<?php
require_once 'logincheck.php';
require ('config.php');

if(ISSET($_POST['save_user'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $license = $_POST['license'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $pass1 = md5($password);
    $salt = "HAHAHAHAHA";
    $pass1 = $salt.$pass1;

    $conn = new mysqli("localhost", 'root', '', 'thesis') or die(mysqli_error());
    $q1 = $conn->query ("SELECT * FROM `user` WHERE BINARY `username` = '$username'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Username already taken. Try another one.')</script>";
    }
    else{
        $conn->query ("INSERT INTO `user` VALUES(' ', '$firstname', '$lastname', '$license', 'Medical Technologist', '$username', '$pass1')") or die(mysqli_error());
        echo "<script type='text/javascript'> alert ('Account registered successfully!');</script>";
        echo "<script>window.location='master_file_medtech.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>BHTC-PMIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/images/project_logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css"/>
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>
        <?php 
        $query = $conn->query("SELECT * FROM `user` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Data Entry</li>
                    <li class="active">Physicians</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-user-md"></span> Medical Technologists</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#new_physician"><span class="fa fa-key"></span> New Account </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body list-group list-group-contacts scroll" style="height: 474px;">
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead> 
                                                <tr class="info">
                                                    <th><center>ID</center></th>
                                                    <th><center>First Name</center></th>
                                                    <th><center>Last Name</center></th>
                                                    <th><center>License Number</center></th>
                                                    <th><center>Username</center></th>
                                                    <th><center>Password</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `user` WHERE `position` = 'Medical Technologist' ORDER BY `user_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><center><?php echo $fetch['user_id']?></center></td>
                                                    <td><center><?php echo $fetch['firstname']?></center></td>
                                                    <td><center><?php echo $fetch['lastname']?></center></td>
                                                    <td><center><?php echo $fetch['license']?></center></td>
                                                    <td><center><?php echo $fetch['username']?></center></td>
                                                    <td><center>*******</center></td>
                                                </tr>
                                                <?php
            }
            $conn->close();
                                                ?>
                                            </tbody>
                                        </table>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>            
            </div>
        </div>
        <div class="modal fade" id="new_physician" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead"><span class="fa fa-key"></span> Physicians Personal and Account Information</h4>
                    </div>
                    <form role="form" id="jvalidate" class="form-horizontal" action="master_file_medtech.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="First Name" type="text" class="form-control" name="firstname" placeholder="First Name" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="Last Name" type="text" class="form-control" name="lastname" placeholder="Last Name" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input data-toggle="tooltip" data-placement="right" title="License Number" type="text" class="form-control" name="license" placeholder="License Number" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input type="text" class="form-control" name="username" placeholder="Username" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-info-circle"></span></span>
                                                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                                                </div>
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

        <?php require 'require/logout.php'?>

        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>    
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>           
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {
                    username: {
                        required: true,
                        minlength: 2,
                        maxlength: 8
                    },
                    password: {
                        required: true,
                        minlength: 5,
                        maxlength: 10
                    },
                    're-password': {
                        required: true,
                        minlength: 5,
                        maxlength: 10,
                        equalTo: "#password2"
                    },
                    age: {
                        required: true,
                        min: 18,
                        max: 100
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    date: {
                        required: true,
                        date: true
                    },
                    credit: {
                        required: true,
                        creditcard: true
                    },
                    site: {
                        required: true,
                        url: true
                    }
                }
            });
        </script>
    </body>
</html>






