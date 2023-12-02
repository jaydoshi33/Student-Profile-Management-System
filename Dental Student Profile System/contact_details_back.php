<?php
 if(isset($_POST['contact_submit']))
 {
     echo "hello";
 	$dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "medical";
    $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
    session_start();
    if(!$conn)
    {

    }
   
    $per_address=$_POST['per_address'];
    $dom_state=$_POST['dom_state'];
    $current_add=$_POST['current_add'];
    $studentnumber=$_POST['studentnumber'];
    $studentemail=$_POST['studentemail'];
    $fathernumber=$_POST['fathernumber'];
    $fatheremail=$_POST['fatheremail'];
    $mothernumber=$_POST['mothernumber'];
    $motheremail=$_POST['motheremail'];

    // $id="DY000004";
    $sql = "UPDATE `contact_details` SET ";
    $id=$_SESSION['id']; 
    $cond="WHERE ID='$id'";
    $q='';

    $ary=array("PER_ADDRESS='$per_address'","DOM_STATE=' $dom_state'","CURRENT_ADD='$current_add'","STUDENTNUMBER='$studentnumber'","STUDENTEMAIL='$studentemail'","FATHERNUMBER='$fathernumber'","FATHEREMAIL='$fatheremail'","MOTHERNUMBER='$mothernumber'","MOTHEREMAIL='$motheremail'");
    $ary1=array($per_address,$dom_state,$current_add,$studentnumber,$studentemail,$fathernumber,$fatheremail, $mothernumber,$motheremail);

    for($i=0;$i<sizeof($ary);$i++)
    {
    	if($ary1[$i]!='')
    	{
    		if($q=='')
    		{
    			$q=$ary[$i];
    			// echo $q."<br>";
    		}	
    		else
    		{
    			$q=$q.",".$ary[$i];
    			// echo $q."<br>";
    		}

    	}
    }

    $sql=$sql.$q."  ".$cond;
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    	 echo $sql;
    }
    else
    {
    	echo mysqli_error($conn);
    }
    mysqli_close($conn);
}
header("Location:contact_details.php"); 
?>

    

