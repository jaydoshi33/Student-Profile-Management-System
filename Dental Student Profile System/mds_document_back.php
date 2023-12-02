<?php
            session_start();
include "signupdb.php";    
	$neet_admit = $_FILES['neet_admit'];
	$neet_rank = $_FILES['neet_rank'];
	$allotment_letter = $_FILES['allotment_letter'];
	$admission_letter = $_FILES['admission_letter'];
	$tenth_marksheet = $_FILES['tenth_marksheet'];
	$tenth_passing_certificate = $_FILES['tenth_passing_certificate'];
	$twelth_marksheet= $_FILES['twelth_marksheet'];
	$twelth_passing_certificate = $_FILES['twelth_passing_certificate'];
	$first_bds_marksheet = $_FILES['first_bds_marksheet'];
	$second_bds_marksheet = $_FILES['second_bds_marksheet'];
	$third_bds_marksheet = $_FILES['third_bds_marksheet'];
	$fourth_bds_marksheet = $_FILES['fourth_bds_marksheet'];
	$provision_certi = $_FILES['provision_certi'];
	$attempt_certi = $_FILES['attempt_certi'];
	$bds_deg_certi = $_FILES['bds_deg_certi'];
	$clg_intern_certi = $_FILES['clg_intern_certi'];
	$dci_recog_certi = $_FILES['dci_recog_certi'];
	$dci_reg_certi = $_FILES['dci_reg_certi'];
	$college_leaving_certificate = $_FILES['college_leaving_certificate'];
	$migration_certificate = $_FILES['migration_certificate'];
	$disability_certificate = $_FILES['disability_certificate'];
	
        
    $valid_extension = array("pdf","png","jpeg","html","jpg");
    //$extension = explode(".",$selection_rpt["name"]);
	$checking='';
    $col_name  =    array("ADMIT_CARD","RANK_LETTER","ALT_LETTER","ADM_LETTER","TENTH_MKS","TENTH_PASS_CERTI","TWELTH_MKS","TWELTH_PASS_CERTI","FIRST_BDS_MARKSHEET","SECOND_BDS_MARKSHEET","THIRD_BDS_MARKSHEET","FOURTH_BDS_MARKSHEET","PROVISION_CERTI","ATTEMPT_CERTI","BDS_DEG_CERTI","CLG_INTERN_CERTI ","DCI_RECOG_CERTI","DCI_REG_CERTI","CLG_LEAVE_CERTI","MIGRATION_CERTI","DISABILITY_CERTI");                       

    $check  =    array(($neet_admit),($neet_rank),($allotment_letter),($admission_letter),($tenth_marksheet),($tenth_passing_certificate),($twelth_marksheet),($twelth_passing_certificate),($first_bds_marksheet),($second_bds_marksheet),($third_bds_marksheet),($fourth_bds_marksheet),($provision_certi),($attempt_certi),($bds_deg_certi),($clg_intern_certi),($dci_recog_certi),($dci_reg_certi),($college_leaving_certificate),($migration_certificate),($disability_certificate));                       

	$temp_name  =    array(($neet_admit["tmp_name"]),($neet_rank["tmp_name"]),($allotment_letter["tmp_name"]),($admission_letter["tmp_name"]),($tenth_marksheet["tmp_name"]),($tenth_passing_certificate["tmp_name"]),($twelth_marksheet["tmp_name"]),($twelth_passing_certificate["tmp_name"]),($first_bds_marksheet["tmp_name"]),($second_bds_marksheet["tmp_name"]),($third_bds_marksheet["tmp_name"]),($fourth_bds_marksheet["tmp_name"]),($provision_certi["tmp_name"]),($attempt_certi["tmp_name"]),($bds_deg_certi["tmp_name"]),($clg_intern_certi["tmp_name"]),($dci_recog_certi["tmp_name"]),($dci_reg_certi["tmp_name"]),($college_leaving_certificate["tmp_name"]),($migration_certificate["tmp_name"]),($disability_certificate["tmp_name"]));

	$value  =    array(($neet_admit["name"]),($neet_rank["name"]),($allotment_letter["name"]),($admission_letter["name"]),($tenth_marksheet["name"]),($tenth_passing_certificate["name"]),($twelth_marksheet["name"]),($twelth_passing_certificate["name"]),($first_bds_marksheet["name"]),($second_bds_marksheet["name"]),($third_bds_marksheet["name"]),($fourth_bds_marksheet["name"]),($provision_certi["name"]),($attempt_certi["name"]),($bds_deg_certi["name"]),($clg_intern_certi["name"]),($dci_recog_certi["name"]),($dci_reg_certi["name"]),($college_leaving_certificate["name"]),($migration_certificate["name"]),($disability_certificate["name"]));                       
 
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
    	// if($check[$i]["name"]!='')
    	// { 
		// $concatenate = '../MEDICAL/'.$id.'/';
    	// 	//$concatenate="docs/";
    	// 	$concatenate=$concatenate.$value[$i];
		// 	echo $concatenate."<br>";
		// 	echo $temp_name[$i]."<br>";
    	// 	move_uploaded_file($temp_name[$i],$concatenate);
    		

        //     if ($q1 == NULL)
    	//     {
    	//     	$q1="$col_name[$i]='$concatenate'";
    	//     }
    	//     else
    	//     { 
    	// 	$q1=$q1.","."$col_name[$i]='$concatenate'";
        //     }

    	// }

    //$e=$_SESSION["email"];
    $sql = 'UPDATE `mds_document` SET ' .$q1. " WHERE ID=" ."'$id'";
    
    $result = mysqli_query($conn,$sql);
    	   if ($result)
	        echo "sucess"."<br>";
	    else
	    	echo (mysqli_error($conn))."<br>"; 
    echo $sql;
	    	
    mysqli_close($conn);
    header("Location: mds_documents.php");
?>
	
                                                       
           
             
            
