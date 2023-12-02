<?php
	session_start();
{
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


$year = $_POST['year'] ;

$marks_obtained = $_POST['marks_obtained'] ;

$status  = $_POST['status'] ;

$revaluation = $_POST['revaluation'];

$no_attempts = $_POST['no_attempts'];


 

$sql = "UPDATE `progress_student` SET ";
$id=$_SESSION['id'];
// $id = 'DY000004';
$cond = "WHERE ID='$id'";
$q='';

$ary=array("YEAR='$year'","MARKS_OBTAINED='$marks_obtained'","STATUS='$status'","REVALUATION='$revaluation'","NO_ATTEMPTS='$no_attempts'");
$ary1= array($year, $marks_obtained, $status, $revaluation,$no_attempts);

for($i=0;$i<sizeof($ary);$i++)
{ 
	if($ary1[$i]!='')
	{  	
		if($q=='')
		{
			$q=$ary[$i];
			echo $q."<br>";
		}
		else
		{
			$q=$q.",".$ary[$i];
			echo $q."<br>";
		}
	}	
}
// $file = $_FILES[""];
// print_r($file);
// echo "<br>";
// $fileName = $_FILES['photo']['name'];
// $fileSize = $_FILES['photo']['size'];
// $fileTmpname = $_FILES['photo']['tmp_name'];
// $part = explode('.',$fileName);
// $extension = array('jpg', 'jpeg', 'pdf', 'png');
// $actalExtsn = strtolower(end($part));

// if (in_array($actalExtsn,$extension)) {
   
//         $fileDestination = '../MEDICAL/'.$id.'/'.$fileName;
//         move_uploaded_file($fileTmpname,$fileDestination);
// }

// else {
//     //echo "Invalid Extension!";
// }

// if($fileName != '')
// {
//  $q=$q.","."BROWSE='$fileDestination'";
// }


$sql=$sql.$q."  ".$cond;


//echo $sql."<br>";
$result=mysqli_query($conn,$sql);
if ($result){
	echo $sql;
}
else{echo mysqli_error($conn);}


  mysqli_close($conn);
}
 header("Location:progress_student.php");
?>
<!--</body>
</html>-->

