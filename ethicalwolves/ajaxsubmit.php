<?php


    $name2 = $_POST['name1'];
    $description2 = $_POST['description1'];

    $conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
    $q1 = $conn->query ("SELECT * FROM `medicine` WHERE BINARY `medicine_name` = '$medicine_name'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Medicine name already exist!')</script>";
        echo "<script>document.location='medication_dispensation.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `medicine` VALUES('', '$medicine_name', '$medicine_description', '')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new medicine!');</script>";
        echo "<script>document.location='medicine_table.php'</script>";  
    }

?>