<?php
    session_start();
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $event_name = $_POST['event_name'];


    $dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

$del =" DELETE FROM `extracurricular` WHERE EVENT_NAME='$event_name' ";
$result=mysqli_query($conn,$del);


if($result){
    echo $del;
    // header('Location:extracuricular.php');
}
else{
    echo mysqli_error($conn);
}
?>
