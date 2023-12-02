<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

$sql = "INSERT INTO `extracurricular` (`EMAIL_ID`,`ID`) VALUES ('sans.tikone@gmail.com','DY000019' )";
$result = mysqli_query($conn,$sql);
if($result)
	echo $sql;
else
	echo mysqli_error($conn);
	
mysqli_close($conn);

?>
