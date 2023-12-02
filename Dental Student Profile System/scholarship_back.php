<?php
if(isset($_POST['submit']))
{

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
session_start();
// $id=$_SESSION['id']

$scholarship=$_POST['scholarship_name'];
$agency_name=$_POST['agency'];
$scholarship_amt=$_POST['amount'];

$id = $_SESSION['id'];
$sql="UPDATE scholarship SET ";
$q='';
$cond=" WHERE ID='$id' ";
$ary=array("SCHOLARSHIP='$scholarship'","AGENCY_NAME='$agency_name'","SCHOLARSHIP_AMT='$scholarship_amt'");
$ary1=array($scholarship,$agency_name,$scholarship_amt);
 
for($i=0;$i<sizeof($ary);$i++)
{
	if($ary1[$i]!='')
	{
	    if($q=='')
	    {
	    	$q=$ary[$i];
	    	echo($q."<br>");
	    }
	    else
	    {
	    	$q=$q.",".$ary[$i];
	    	echo($q."<br>");
	    }
	}
}

$sql=$sql."  ".$q." ".$cond;
$result=mysqli_query($conn,$sql);
if($result)
{
	echo $sql;

}
else
{
	echo(mysqli_error($conn));
}
mysqli_close($conn);

}

 header('Location: scholarship.php');
?>