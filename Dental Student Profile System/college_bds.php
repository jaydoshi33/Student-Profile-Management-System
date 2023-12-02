<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if(!$conn) {
    echo("Connection to database failed");
}

$name_college_10 = $_POST["name_college_10"];
$name_board_10 = $_POST["name_board_10"];
$year_10 = $_POST["year_10"];
$name_college_12 = $_POST["name_college_12"];
$name_board_12 = $_POST["name_board_12"];
$year_12 = $_POST["year_12"];
$id = $_SESSION['id'];
// $id = "DY000001";

$sql = "UPDATE college_bds SET ";
$ary = array("NAME_COLLEGE_10='$name_college_10'","NAME_BOARD_10='$name_board_10'","YEAR_10='$year_10'","NAME_COLLEGE_12='$name_college_12'","NAME_BOARD_12='$name_board_12'","YEAR_12='$year_12'");
$ary1 = array($name_college_10,$name_board_10,$year_10,$name_college_12,$name_board_12,$year_12);
$q = '';
$cond = "WHERE ID='$id'";

for ($i=0;$i<sizeof($ary);$i++) {
    if($ary1[$i]!='') {
        if($q=='')
		{
			$q=$ary[$i];
		}
		else
		{
			$q=$q.",".$ary[$i];
		}
    }
    
}
$sql = $sql.$q." ".$cond;

$result=mysqli_query($conn,$sql);

if($result){
    echo $sql;
}
else{
    echo("Not success");
}
header("Location:clg_details_bds.php");
?>
