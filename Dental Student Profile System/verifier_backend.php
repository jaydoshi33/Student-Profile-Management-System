<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);



$app_id = $_GET['app_id'];
if(isset($_POST['personal-submit']))
{
	$personal_querybox=$_POST["query_box1"];
	echo $personal_querybox;
	$value=$_POST['status'];
	echo $value;

	$sql="UPDATE submit_status SET STUDENT_DETAILS='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);
	if($value==11)
	{
		$sql2="UPDATE submit_status SET PERSONAL_QUERYBOX='$personal_querybox' WHERE APPLICATION_ID='$app_id' ";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET PERSONAL_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");
}
// contact_form php 
if(isset($_POST['contact-submit']))
{
	$contact_querybox=$_POST["query_box2"];
	echo $contact_querybox;
	$value=$_POST['status2'];
	echo $value;

	$sql="UPDATE submit_status SET CONTACT_DETAILS='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);
	
	if($value==11)
	{
		$sql2="UPDATE submit_status SET CONTACT_QUERYBOX='$contact_querybox' WHERE APPLICATION_ID='$app_id' ";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET CONTACT_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");
}

//clgBDS_form php
if(isset($_POST['clgBDS-submit']))
{
	$clgBDS_querybox=$_POST["query_box3"];
	echo $clgBDS_querybox;
	$value=$_POST['status3'];
	echo $value;

	$sql="UPDATE submit_status SET COLLEGE_BDS='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);
	if($value==11)
	{
		$sql2="UPDATE submit_status SET CLGBDS_QUERYBOX='$clgBDS_querybox' WHERE APPLICATION_ID='$app_id' ";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET CLGBDS_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");
}

//clgMDS_form php
if(isset($_POST['clgMDS-submit']))
{
	$clgMDS_querybox=$_POST["query_box4"];
	echo $clgMDS_querybox;
	$value=$_POST['status4'];
	echo $value;

	$sql="UPDATE submit_status SET COLLEGE_MDS='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);
	if($value==11)
	{
		$sql2="UPDATE submit_status SET CLGMDS_QUERYBOX='$clgMDS_querybox' WHERE APPLICATION_ID='$app_id' ";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET CLGMDS_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");
}

//clgPHD_form php
if(isset($_POST['clgPHD-submit']))
{
	$clgPHD_querybox=$_POST["query_box5"];
	echo $clgPHD_querybox;
	$value=$_POST['status5'];
	echo $value;

	$sql="UPDATE submit_status SET COLLEGE_PHD='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);
	if($value==11)
	{
		$sql2="UPDATE submit_status SET CLGPHD_QUERYBOX='$clgPHD_querybox' WHERE APPLICATION_ID='$app_id' ";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET CLGPHD_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");
}

//clgFELL_form php
if(isset($_POST['clgFELL-submit']))
{
	$clgFELL_querybox=$_POST["query_box6"];
	echo $clgFELL_querybox;
	$value=$_POST['status6'];
	echo $value;

	$sql="UPDATE submit_status SET COLLEGE_FELLOWSHIP='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);
	if($value==11)
	{
		$sql2="UPDATE submit_status SET CLGFELL_QUERYBOX='$clgFELL_querybox' WHERE APPLICATION_ID='$app_id' ";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET CLGFELL_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");
}

//scholarship_form php
if(isset($_POST['scholarship-submit']))
{
	$scholarship_querybox=$_POST["query_box7"];
	echo $scholarship_querybox;
	$value=$_POST['status7'];
	echo $value;

	$sql="UPDATE submit_status SET SCHOLARSHIP='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);

	if($value==11)
	{
		$sql2="UPDATE submit_status SET SCHOLARSHIP_QUERYBOX='$scholarship_querybox' WHERE APPLICATION_ID='$app_id'";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET SCHOLARSHIP_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id'"; 
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");
	
}

//bds_form php

if(isset($_POST['BDSdoc-submit']))
{	
	$bdsdoc_querybox=$_POST["query_box8"];
	echo $bdsdoc_querybox;
	$value=$_POST["status8"];
	echo $value;

	$sql="UPDATE submit_status SET BDS_DOCUMENTS='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);

	if($value==11)
	{
		$sql2="UPDATE submit_status SET BDSDOC_QUERYBOX='$bdsdoc_querybox' WHERE APPLICATION_ID='$app_id'";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET BDSDOC_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3); 
	}
	header("Location:verify.php?app_id=$app_id");
}

//mds_form php

if(isset($_POST['MDSdoc-submit']))
{	
	$mdsdoc_querybox=$_POST["query_box9"];
	echo $mdsdoc_querybox;
	$value=$_POST["status9"];
	echo $value;

	$sql="UPDATE submit_status SET MDS_DOCUMENTS='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);

	if($value==11)
	{
		$sql2="UPDATE submit_status SET MDSDOC_QUERYBOX='$mdsdoc_querybox' WHERE APPLICATION_ID='$app_id'";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET MDSDOC_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3); 
	}
	header("Location:verify.php?app_id=$app_id");

}

//progress_form php

if(isset($_POST['progress-submit']))
{
	$progress_querybox=$_POST["query_box10"];
	echo $progress_querybox;
	$value=$_POST["status10"];
	echo $value;

	$sql="UPDATE submit_status SET PROGRESS_STUDENT='$value' WHERE APPLICATION_ID='$app_id' ";
	$result=mysqli_query($conn,$sql);

	if($value==11)
	{
		$sql2="UPDATE submit_status SET PROGRESS_QUERYBOX='$progress_querybox' WHERE APPLICATION_ID='$app_id' ";
		$result1=mysqli_query($conn,$sql2);
	}

	if($value==10)
	{
		$sql3="UPDATE submit_status SET PROGRESS_QUERYBOX=NULL WHERE APPLICATION_ID='$app_id' ";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");

}

//academic_form php

if(isset($_POST['academic-submit']))
{
	$academic_querybox=$_POST['query_box11'];
	echo $academic_querybox;
	$value=$_POST['status11'];
	echo $value;

	$sql="UPDATE submit_status SET ACADEMIC='$value' WHERE APPLICATION_ID='$app_id'";
	$result=mysqli_query($conn,$sql);

	if($value==11)
	{
		$sql2="UPDATE submit_status SET ACADEMIC_QUERYBOX='$academic_querybox' WHERE APPLICAIOTN_ID='$app_id'";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET ACADEMIC_QUERYBOX=NULL WHERE APPLICAIOTN_ID='$app_id'";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");

}

//extracurricular_form php

if(isset($_POST['extra-submit']))
{
	$extracurricular_querybox=$_POST['query_box12'];
	echo $extracurricular_querybox;
	$value=$_POST['status12'];
	echo $value;

	$sql="UPDATE submit_status SET EXTRACURRICULAR='$value' WHERE APPLICATION_ID='$app_id'";
	$result=mysqli_query($conn,$sql);

	if($value==11)
	{
		$sql2="UPDATE submit_status SET EXTRACURRICULAR_QUERYBOX='$extracurricular_querybox' WHERE APPLICAIOTN_ID='$app_id'";
		$result2=mysqli_query($conn,$sql2);
	}
	else if($value==10)
	{
		$sql3="UPDATE submit_status SET EXTRACURRICULAR_QUERYBOX=NULL WHERE APPLICAIOTN_ID='$app_id'";
		$result3=mysqli_query($conn,$sql3);
	}
	header("Location:verify.php?app_id=$app_id");

}
//final submit

if(isset($_POST['final_submit']))
{
	$sql="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id'";
	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

	if($row['STUDENT_DETAILS']==10 && $row['CONTACT_DETAILS']==10 && $row['SCHOLARSHIP']==10 	&& $row['PROGRESS_STUDENT']==10 && $row['ACADEMIC']==10 && $row['EXTRACURRICULAR']==10 && ($row['COLLEGE_BDS']==10 || $row['COLLEGE_MDS']==10 || $row['COLLEGE_PHD']==10 || $row['COLLEGE_FELLOWSHIP']==10) && ($row['BDS_DOCUMENTS']==10 || $row['MDS_DOCUMENTS']==10) )
	{
		$sql1="UPDATE submit_status SET ALL_FORM='2' WHERE APPLICATION_ID='$app_id'";
		$result1=mysqli_query($conn,$sql1);
	}
	else{
		$sql2="UPDATE submit_status SET ALL_FORM='0' WHERE APPLICATION_ID='$app_id'";
		$result2=mysqli_query($conn,$sql2);
		$makenull = "UPDATE `submit_status` SET `STUDENT_DETAILS`=NULL,`CONTACT_DETAILS`=NULL,`COLLEGE_BDS`=NULL,`COLLEGE_MDS`=NULL,`COLLEGE_PHD`=NULL,`COLLEGE_FELLOWSHIP`=NULL,`SCHOLARSHIP`=NULL,`BDS_DOCUMENTS`=NULL,`MDS_DOCUMENTS`=NULL,`PROGRESS_STUDENT`=NULL,`ACADEMIC`=NULL,`EXTRACURRICULAR`=NULL WHERE `APPLICATION_ID`='$app_id' ";	
		$makenullquery = mysqli_query($conn,$makenull);
		echo $makenull;
		if(!$makenullquery)
		{
			echo(mysqli_error($conn));
		}
	}

	header("Location:verreq.php");	
}
?>
