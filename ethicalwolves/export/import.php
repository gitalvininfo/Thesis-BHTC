<?php
$connection = mysqli_connect('localhost', 'root', '', 'thesis');
$date = date("Y-m-d H:i:s");

$filename = 'thesis.sql';
$handle = fopen($filename, "r+");
$contents = fread($handle, filesize($filename));

$sql = explode(';', $contents);
foreach ($sql as $query){
    $result = mysqli_query($connection, $query);
    if($result){
        echo '<tr><td><br></td></tr>';
        echo '<tr><td>'.$query.' <b> IMPORTED </b><br></td></tr>';
        echo '<tr><td><br></td></tr>';
    }

}
fclose($handle);
$connection->query("INSERT INTO `backup` VALUES('', 'Successfully imported database', '$date')") or die(mysqli_error());
echo "<script>alert('Successfully imported database!')</script>";
echo "<script>document.location='../download_database.php'</script>";  


?>