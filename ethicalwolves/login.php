<?php
session_start();
?>
<html>
    <head>
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/project_logo.png">
        <link href="css/loading.css" rel="stylesheet" type="text/css" />
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
                height: 118px;
                width: 72px;
                margin-top: -59px;
                margin-left: -36px;
            }
            .object{
                width: 26px;
                height: 26px;
                background-color:#FFF;
                margin-right: 20px;
                float: left;
                margin-bottom: 20px;
            }
            .object:nth-child(2n+0) {
                margin-right: 0px;
            }


            #object_one {
                -webkit-animation: object_one 1s infinite;
                animation: object_one 1s infinite;
            }
            #object_two {
                -webkit-animation: object_two 1s infinite;
                animation: object_two 1s infinite;
            }
            #object_three {
                -webkit-animation: object_three 1s infinite;
                animation: object_three 1s infinite;
            }
            #object_four {
                -webkit-animation: object_four 1s infinite;
                animation: object_four 1s infinite;
            }
            #object_five {
                -webkit-animation: object_five 1s infinite;
                animation: object_five 1s infinite;
            }
            #object_six {
                -webkit-animation: object_six 1s infinite;
                animation: object_six 1s infinite;
            }

            @-webkit-keyframes object_one {


                50% {
                    -ms-transform: translate(-100px,46px) rotate(-179deg);
                    -webkit-transform: translate(-100px,46px) rotate(-179deg); 
                    transform: translate(-100px,46px) rotate(-179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }

            @keyframes object_one {
                50% {
                    -ms-transform: translate(-100px,46px) rotate(-179deg);
                    -webkit-transform: translate(-100px,46px) rotate(-179deg); 
                    transform: translate(-100px,46px) rotate(-179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }


            }


            @-webkit-keyframes object_two {

                50% {
                    -ms-transform: translate(100px,46px) rotate(179deg);
                    -webkit-transform: translate(100px,46px) rotate(179deg); 
                    transform: translate(100px,46px) rotate(179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }

            @keyframes object_two {

                50% {
                    -ms-transform: translate(100px,46px) rotate(179deg);
                    -webkit-transform: translate(100px,46px) rotate(179deg); 
                    transform: translate(100px,46px) rotate(179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }


            @-webkit-keyframes object_three {

                50% {
                    -ms-transform: translate(-100px,0) rotate(-179deg);
                    -webkit-transform: translate(-100px,0) rotate(-179deg);
                    transform: translate(-100px,0) rotate(-179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }

            @keyframes object_three {

                50% {
                    -ms-transform: translate(-100px,0) rotate(-179deg);
                    -webkit-transform: translate(-100px,0) rotate(-179deg);
                    transform: translate(-100px,0) rotate(-179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }

            @-webkit-keyframes object_four {

                50% {
                    -ms-transform: translate(100px,0) rotate(179deg);
                    -webkit-transform: translate(100px,0) rotate(179deg);
                    transform: translate(100px,0) rotate(179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }

            @keyframes object_four {

                50% {
                    -ms-transform: translate(100px,0) rotate(179deg);
                    -webkit-transform: translate(100px,0) rotate(179deg);
                    transform: translate(100px,0) rotate(179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }


            @-webkit-keyframes object_five {

                50% {
                    -ms-transform: translate(-100px,-46px) rotate(-179deg);
                    -webkit-transform: translate(-100px,-46px) rotate(-179deg);
                    transform: translate(-100px,-46px) rotate(-179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }

            @keyframes object_five {

                50% {
                    -ms-transform: translate(-100px,-46px) rotate(-179deg);
                    -webkit-transform: translate(-100px,-46px) rotate(-179deg);
                    transform: translate(-100px,-46px) rotate(-179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }


            @-webkit-keyframes object_six {

                50% {
                    -ms-transform: translate(100px,-46px) rotate(179deg);
                    -webkit-transform: translate(100px,-46px) rotate(179deg);
                    transform: translate(100px,-46px) rotate(179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }

            @keyframes object_six {

                50% {
                    -ms-transform: translate(100px,-46px) rotate(179deg);
                    -webkit-transform: translate(100px,-46px) rotate(179deg);
                    transform: translate(100px,-46px) rotate(179deg);
                }

                100% {
                    -ms-transform: translate(0,0); 
                    -webkit-transform: translate(0,0); 
                    transform: translate(0,0); 
                }

            }

        </style>

    </head>
    <body>
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                </div>
            </div>
        </div>
    </body>
</html>


<?php

include ('config.php');
if(ISSET($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = mysqli_real_escape_string($conn,$username);
    $pass1 = mysqli_real_escape_string($conn,$password);

    $pass = md5($pass1);
    $salt = "HAHAHAHAHA";
    $pass = $salt.$pass;

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `user` WHERE BINARY `username` = '$user' && BINARY `password` = '$pass'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $valid = $query->num_rows;
    $position = $fetch['position'];

    if($valid > 0){
        if ($position == 'NTP Nurse Coordinator') {
            $_SESSION['user_id'] = $fetch['user_id'];
            echo '<meta http-equiv="refresh" content="3;url=home.php">';
            echo '<i style="color:white">Retrieving Account. Please wait...</i>';

        }
        if ($position == 'Medical Technologist') {
            $_SESSION['user_id'] = $fetch['user_id'];
            echo '<meta http-equiv="refresh" content="3;url=dashboard_medtech.php">';
            echo '<i>Retrieving Account. Please wait...</i>';
        }
    }
    else{
        echo "<script>alert('Invalid account. Please check your username and password.')</script>";
        echo "<script>window.location = 'index.php'</script>";
    }

    $conn->close();
}	
?>
<!--  header("location:dashboard_medtech.php");
echo "<script type='text/javascript'>document.location='dashboard_medtech.php'</script>";-->
