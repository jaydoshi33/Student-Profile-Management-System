<?php
if(isset($_POST["submit"]))
{
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
session_start();

$f_name = $_POST['f_name'] ;

$m_name = $_POST['m_name'];

$l_name  = $_POST['l_name'] ;

$father_name  = $_POST['father_name'] ;

$mother_name = $_POST['mother_name'];

$reg_no = $_POST['reg_no'] ;
 
$gender = $_POST['gender'] ;
 
$dob = $_POST['dob'] ;
 
$birth_place = $_POST['birth_place']  ;
 
$blood_grp = $_POST['blood_grp'] ;
 
$pancard = $_POST['pancard'] ;
 
$aadhar = $_POST['aadhar'] ;
 
$passport = $_POST['passport'] ;
 
$parent_pancard = $_POST['parent_pancard'] ;
 
$religion = $_POST['religion'] ;

$caste = $_POST['caste'];
 
$reservation = $_POST['reservation'];

$category = $_POST['category'] ;
 

$sql = "UPDATE `student_details` SET ";
$id=$_SESSION['id'];
// $id = 'DY000004';
$cond = "WHERE ID='$id'";
$q='';

$ary=array("F_NAME='$f_name'","M_NAME='$m_name'","L_NAME='$l_name'","FATHER_NAME='$father_name'","MOTHER_NAME='$mother_name'","REG_NO='$reg_no'","GENDER='$gender'","DOB='$dob	'","BIRTH_PLACE='$birth_place'","BLOOD_GRP='$blood_grp'","PANCARD='$pancard'","AADHAR='$aadhar'","PASSPORT='$passport'","PARENT_PANCARD='$parent_pancard'", "RELIGION='$religion'","CASTE='$caste'","RESERVATION='$reservation'","CATEGORY='$category'");

$ary1= array($f_name,$m_name,$l_name,$father_name,$mother_name,$reg_no,$gender,$dob,$birth_place,$blood_grp,$pancard,$aadhar,$passport,$parent_pancard,$religion,$caste,$reservation,$category);


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
$file = $_FILES["photo"];
print_r($file);
echo "<br>";
$fileName = $_FILES['photo']['name'];
$fileSize = $_FILES['photo']['size'];
$fileTmpname = $_FILES['photo']['tmp_name'];
$part = explode('.',$fileName);
$extension = array('jpg', 'jpeg', 'pdf', 'png');
$actalExtsn = strtolower(end($part));
$newName=$id."_Photo.".$actalExtsn;

if (in_array($actalExtsn,$extension)) {
   
	$fileDestination = '../MEDICAL/'.$id.'/'.$newName;

		// if (file_exists($fileDestination)) {
        //     echo "The file exists";
        //     unlink($fileDestination);
        // }	
        move_uploaded_file($fileTmpname,$fileDestination);
		echo "File moved";
}

else {
    //echo "Invalid Extension!";
}

if($fileName != '')
{
 $q=$q.","."BROWSE='$fileDestination'";
}


$sql=$sql.$q."  ".$cond;

//echo $sql."<br>";
$result=mysqli_query($conn,$sql);
if ($result){
	echo $sql;
}
else{echo mysqli_error($conn);}


  mysqli_close($conn);
}
 header("Location:personal_details.php");
?>
<!--</body>
</html>-->

