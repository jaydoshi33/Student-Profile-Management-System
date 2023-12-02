<?php
            session_start();
include "signupdb.php";    
	$neet_admit = $_FILES['neet_admit'];
	$neet_rank = $_FILES['neet_rank'];
	$allotment_letter = $_FILES['allotment_letter'];
	$admission_letter = $_FILES['admission_letter'];
	$tenth_marksheet = $_FILES['tenth_marksheet'];
	$tenth_passing_certificate = $_FILES['tenth_passing_certificate'];
	$twelth_marksheet=$_FILES['twelth_marksheet'];
	$twelth_passing_certificate = $_FILES['twelth_passing_certificate'];
	$college_leaving_certificate = $_FILES['college_leaving_certificate'];
	$migration_certificate = $_FILES['migration_certificate'];
	$disability_certificate = $_FILES['disability_certificate'];
	
        
    $valid_extension = array("pdf","png","jpeg","html","jpg");
    //$extension = explode(".",$selection_rpt["name"]);
	$checking='';
    $col_name  =    array("ADMIT_CARD","RANK_LETTER","ALT_LETTER","ADM_LETTER","TENTH_MKS","TENTH_PASS_CERTI","TWELTH_MKS","TWELTH_PASS_CERTI","CLG_LEAVE_CERTI","MIGRATION_CERTI","DISABILITY_CERTI");                       

    $check  =    array(($neet_admit),($neet_rank),($allotment_letter),($admission_letter),($tenth_marksheet),($tenth_passing_certificate),($twelth_marksheet),($twelth_passing_certificate),($college_leaving_certificate),($migration_certificate),($disability_certificate));                       

	$temp_name  =    array(($neet_admit["tmp_name"]),($neet_rank["tmp_name"]),($allotment_letter["tmp_name"]),($admission_letter["tmp_name"]),($tenth_marksheet["tmp_name"]),($tenth_passing_certificate["tmp_name"]),($twelth_marksheet["tmp_name"]),($twelth_passing_certificate["tmp_name"]),($college_leaving_certificate["tmp_name"]),($migration_certificate["tmp_name"]),($disability_certificate["tmp_name"]));

	$value  =    array(($neet_admit["name"]),($neet_rank["name"]),($allotment_letter["name"]),($admission_letter["name"]),($tenth_marksheet["name"]),($tenth_passing_certificate["name"]),($twelth_marksheet["name"]),($twelth_passing_certificate["name"]),($college_leaving_certificate["name"]),($migration_certificate["name"]),($disability_certificate["name"]));                       
 
$id=$_SESSION["id"];
//    $id = "DY000004";
   $value1 = '';
   $q1='';
   for($i=0;$i<sizeof($check);$i++)
   {
	   if($check[$i]["name"]!='')
	   {
		   $ext=strtolower(end(explode('.',$check[$i]["name"])));
		   if(in_array($ext, $valid_extension)) 
		   {   
		   $newName=$id."_".$col_name[$i].".".$ext  ;  
		   $concatenate = '../MEDICAL/'.$id.'/'.$newName;
		   // $concatenate = '../MEDICAL/'.$id.'/';
			   //$concatenate="docs/";
			   // $concatenate=$concatenate.$value[$i];
			   echo $concatenate."<br>";
			   echo $temp_name[$i]."<br>";
			   move_uploaded_file($temp_name[$i],$concatenate);
			   
   
			   if ($q1 == NULL)
			   {
				   $q1="$col_name[$i]='$concatenate'";
			   }
			   else
			   { 
			   $q1=$q1.","."$col_name[$i]='$concatenate'";
			   }
   
		   }
	   }
   }
    //$e=$_SESSION["email"];
    $sql = "UPDATE `bds_document` SET ".$q1." WHERE ID="."'$id'";
    
    $result = mysqli_query($conn,$sql);
    	   if ($result)
	        echo "sucess"."<br>";
	    else
	    	echo (mysqli_error($conn))."<br>"; 
    echo $sql;
	    	
    mysqli_close($conn);
	header("Location: bds_documents.php");
?>
	
                                                       
           
             
            
