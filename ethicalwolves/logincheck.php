<?php
session_start();
if(!ISSET($_SESSION['user_id']))
{
    echo "<script> alert ('Your cannot just type the filename and hit enter. Login Idiot!')</script>";
    echo "<script>document.location='index.php'</script>";

}
?>
