<?php
if(isset($_POST['insert']))
{
    $patient_id = $_GET['id'];
    
    $conn = mysqli_connect('localhost', 'root', '', 'thesis');
    $query = "INSERT INTO treatment(day) VALUES('".$_POST["insert"]."')";
    $result = mysqli_query($conn, $query);
    $conn->close();
}
?>