<?php
    session_start();
    $id=$_SESSION['id'];
    $email=$_SESSION['email'];


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
	echo "No connection";
}
	echo "<script>console.log('BELLO')</script>";
	
$event_name = $_POST['event_name'] ;

$level = $_POST['level'] ;

$event_type = $_POST['event_type'] ;

$prize_won=$_FILES['prize_won'];

$certificate=$_FILES['certificate'];

$prize_name = $_FILES['prize_won']['name'];
$prize_size = $_FILES['prize_won']['size'];
$prize_Tmpname = $_FILES['prize_won']['tmp_name'];
$part = explode('.',$prize_name);
$extension = array('jpg', 'jpeg', 'pdf', 'png','jpg');
$ext = strtolower(end($part));
$ran1=date("jYhis");
print_r ($ran1);
$newName=$id."_".$event_name."_PRIZE_".$ran1.".".$ext ;

if (in_array($ext,$extension)) {
        
        $prizeDestination = '../MEDICAL/'.$id.'/'.$newName;
        move_uploaded_file($prize_Tmpname,$prizeDestination);
}

else {
    echo "Invalid Extension!";
}

$certificate_name = $_FILES['certificate']['name'];
$certificate_size= $_FILES['certificate']['size'];
$certificate_Tmpname = $_FILES['certificate']['tmp_name'];
$part1 = explode('.',$certificate_name);
$ext1 = strtolower(end($part1));
$ran2=date("jYhis");
$newname1= $id."_".$event_name."_CERTI_".$ran2.".".$ext1;
	if(in_array($ext1, $extension)){
    $certiDestination = '../MEDICAL/'.$id.'/'.$newname1;
    move_uploaded_file($certificate_Tmpname, $certiDestination);
}
else{
    echo "Invalid Extension";
}



// $sql = "INSERT INTO academic_achievements (EVENT_NAME,LEVEL, PRESENTATION_TYPE, PRIZE_WON,CERTIFICATE)
//  VALUES ($event_name, $level, $presentation_type, $prizeDestination, $certiDestination) WHERE ID=$id ";
$sql = "INSERT INTO extracurricular(EMAIL_ID,ID,EVENT_NAME,LEVEL, EVENT_TYPE, PRIZE_WON,CERTIFICATE)VALUES ('".$email."','".$id."','".$event_name."','".$level."','".$event_type."', '".$prizeDestination."','".$certiDestination."')";
$result=mysqli_query($conn,$sql);
if ($result){
	echo $sql;
     header('Location:extracurricular.php');
}
else{
	echo mysqli_error($conn);
}




?>