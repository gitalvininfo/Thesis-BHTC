<?php
session_start();
?>
<html>
    <head>
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/project_logo.png">
        <link href="../css/loading.css" rel="stylesheet" type="text/css" />
        <style>
            #loading{
                background-color: #1caf9a;
                height: 100%;
                width: 100%;
                position: fixed;
                z-index: 1;
                margin-top: 0px;
                top: 0px;
            }
            #loading-center{
                width: 100%;
                height: 100%;
                position: relative;
            }
            #loading-center-absolute {
                position: absolute;
                left: 50%;
                top: 50%;
                height: 100px;
                width: 100px;
                margin-top: -50px;
                margin-left: -50px;	
            }
            .object{
                width: 25px;
                height: 25px;
                background-color: rgba(255,255,255,0);
                margin-right: auto;
                margin-left: auto;
                border: 4px solid rgba(255,255,255,1);
                left: 37px;
                top: 37px;
                position: absolute;
            }

            #first_object{
                -webkit-animation: first_object 1s infinite;
                animation: first_object 1s infinite;
                -webkit-animation-delay: 0.5s; 
                animation-delay: 0.5s; 
            }
            #second_object{
                -webkit-animation: second_object 1s infinite;
                animation: second_object 1s infinite;
            }	
            #third_object{
                -webkit-animation: third_object 1s infinite;
                animation: third_object 1s infinite;
                -webkit-animation-delay: 0.5s; 
                animation-delay: 0.5s; 
            }	
            #forth_object{
                -webkit-animation: forth_object 1s infinite;
                animation: forth_object 1s infinite;
            }	






            @-webkit-keyframes first_object {
                0% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
                50% {
                    -ms-transform: translate(150%,150%) scale(2,2); 
                    -webkit-transform: translate(150%,150%) scale(2,2); 
                    transform: translate(150%,150%) scale(2,2);
                }

                100% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }	 
            }		
            @keyframes first_object {
                0% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
                50% {
                    -ms-transform: translate(150%,150%) scale(2,2); 
                    -webkit-transform: translate(150%,150%) scale(2,2); 
                    transform: translate(150%,150%) scale(2,2);
                }

                100% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
            }




            @-webkit-keyframes second_object {
                0% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
                50% {
                    -ms-transform: translate(-150%,150%) scale(2,2); 
                    -webkit-transform: translate(-150%,150%) scale(2,2);
                    transform: translate(-150%,150%) scale(2,2);
                }
                100% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
            }		
            @keyframes second_object {
                0% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
                50% {
                    -ms-transform: translate(-150%,150%) scale(2,2); 
                    -webkit-transform: translate(-150%,150%) scale(2,2);
                    transform: translate(-150%,150%) scale(2,2);
                }
                100% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
            }




            @-webkit-keyframes third_object {
                0% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }	
                50% {
                    -ms-transform: translate(-150%,-150%) scale(2,2); 
                    -webkit-transform: translate(-150%,-150%) scale(2,2);
                    transform: translate(-150%,-150%) scale(2,2);
                }
                100% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }	
            }		
            @keyframes third_object {
                0% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }	
                50% {
                    -ms-transform: translate(-150%,-150%) scale(2,2); 
                    -webkit-transform: translate(-150%,-150%) scale(2,2);
                    transform: translate(-150%,-150%) scale(2,2);
                }
                100% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
            }






            @-webkit-keyframes forth_object {
                0% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
                50% {
                    -ms-transform: translate(150%,-150%) scale(2,2); 
                    -webkit-transform: translate(150%,-150%) scale(2,2);
                    transform: translate(150%,-150%) scale(2,2);
                }
                100% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }	
            }		
            @keyframes forth_object {
                0% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
                50% {
                    -ms-transform: translate(150%,-150%) scale(2,2); 
                    -webkit-transform: translate(150%,-150%) scale(2,2);
                    transform: translate(150%,-150%) scale(2,2);
                }
                100% {
                    -ms-transform: translate(1,1) scale(1,1); 
                    -webkit-transform: translate(1,1) scale(1,1); 
                    transform: translate(1,1) scale(1,1); 
                }
            }
        </style>

    </head>
    <body>
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="first_object"></div>
                    <div class="object" id="second_object"></div>
                    <div class="object" id="third_object"></div>
                    <div class="object" id="forth_object"></div>
                </div>
            </div>
        </div>
    </body>
</html>


<?php
require_once '../logincheck.php';
require ('../config.php');
if(ISSET($_POST['end_treatment'])){
    $status = $_POST['status'];
    $patient_id = $_POST['patient_id'];

    require 'config.php';
    $conn->query("UPDATE `treatment_record` SET `status` = '$status' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $conn->close();
    echo '<meta http-equiv="refresh" content="2;url=../patient_treatment_table.php">';
    echo "<script>alert('Successfully ended treatment.')</script>";
}
?>