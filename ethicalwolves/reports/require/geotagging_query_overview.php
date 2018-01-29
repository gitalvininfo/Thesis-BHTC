<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());
$overview = $conn->query("select barangay, count(*) as total from patient where status = 'Registered' group by barangay order by total desc") or die (mysqli_error());
$o1 = $overview->fetch_array();
?>