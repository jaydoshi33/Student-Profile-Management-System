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
$name_college_bds = $_POST["name_college_bds"];
$name_board_bds = $_POST["name_board_bds"];
$year_bds = $_POST["year_bds"];
$name_college_mds = $_POST["name_college_mds"];
$name_board_mds = $_POST["name_board_mds"];
$year_mds = $_POST["year_mds"];
$name_college_other = $_POST["name_college_other"];
$name_board_other = $_POST["name_board_other"];
$year_other = $_POST["year_other"];
$id = $_SESSION['id'];
// $id = "DY000001";

$sql = "UPDATE college_phd SET ";
$ary = array("NAME_COLLEGE_10='$name_college_10'","NAME_BOARD_10='$name_board_10'","YEAR_10='$year_10'","NAME_COLLEGE_12='$name_college_12'","NAME_BOARD_12='$name_board_12'","YEAR_12='$year_12'","NAME_COLLEGE_BDS='$name_college_bds'","NAME_BOARD_BDS='$name_board_bds'","YEAR_BDS='$year_bds'","NAME_COLLEGE_MDS='$name_college_mds'","NAME_BOARD_MDS='$name_board_mds'","YEAR_MDS='$year_mds'","NAME_COLLEGE_OTHER='$name_college_other'","NAME_BOARD_OTHER='$name_board_other'","YEAR_OTHER='$year_other'");
$ary1 = array($name_college_10,$name_board_10,$year_10,$name_college_12
,$name_board_12,$year_12,$name_college_bds,$name_board_bds,$year_bds,$name_college_mds,$name_board_mds,$year_mds,$name_college_other,$name_board_other,$year_other);
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
header("Location:clg_details_phd.php");
?>
