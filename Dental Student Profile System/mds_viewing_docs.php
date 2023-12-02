
<?php
    session_start();
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

$sql = "  SELECT * FROM mds_document WHERE ID='$id'  ";
$result = mysqli_query($conn,$sql) ;
$row = mysqli_fetch_array($result);
$msg1="Not Uploaded";
$msg2="View Uploaded File";

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MDS docs</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>    
    
    <link rel="icon" type="image/png" href="logo.png" sizes="15x15">

    <style>
   

   @media screen and (max-width:500px){
#box{
    padding: 1rem;
    font-size:1rem;
    font-family: 'Poppins', sans-serif;
    text-shadow:2px 2px #ccccb3; 
    border:solid 2px #c81e1e; 
    border-radius:1.5rem;
    box-shadow:3px 3px #ccccb3;
    margin-left:2.5rem;
    position:absolute; 
    top:7.5rem;
    background:#ffffff;


}
}

@media screen and (min-width:500px){
#box{
    padding: 1rem;
    font-size: 2rem;
    font-family: 'Poppins', sans-serif;
    text-shadow:2px 2px #ccccb3; 
    border:solid 2px #c81e1e; 
    border-radius:1.5rem;
    box-shadow:3px 3px #ccccb3;
    margin-left:2.5rem;
    position:absolute; 
    top:7.5rem;
    background:#ffffff;


}
}

@media screen and (max-width:500px){
button.btn{
background-image: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27 100%);
border:solid 1px #b90505;
border-radius:5px;color:#ffffff;
width:8rem;
height:2.5rem;
margin-left:5.5rem;
}
}
@media screen and (max-width:500px){
button.sidebtn{
    margin-left:1rem;
}
}
button.btn, button.sidebtn{
background-image: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27 100%);
border:solid 1px #b90505;
border-radius:5px;color:#ffffff;
width:8rem;
height:2.5rem

}
button.btn:hover{background-position: right;
}

a.back{
    background-image: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27 100%);
    border:solid 1px #b90505;
    border-radius:5px;color:#ffffff;
    padding-left:1.5rem;
    padding-right:1.5rem;
    padding-top:0.5rem;
    padding-bottom:0.5rem;
}

/* .form-control{
border-top:0px;
border-right:0px;
} */
</style>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
        <div class="sanskruti" style="height:1000px;">
            <div class="sidebar-header">
                <h2>DY Patil Dentistry</h2>
                <!-- <div id="hide"><span class="fas fa-user" style="color:green;"></span><?php echo " ".$email?></div> -->
                <strong>DY</strong>
            </div>
            
            <ul class="list-unstyled components">            
                <li class="active" title="Home">
                    <a href="home.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-home"></span>
                        <span id="hide">Home</span>
                        <strong></strong>
                    </a>
                </li>
                <li title="Personal Details">
                    <a href="personal_details.php" class="sidebar-header" style="height:60px;" >                    
                     <span class="fas fa-user fa"></span>
                        <span id="hide">Personal Details</span>
                        <strong></strong>
                    </a>
                </li>
                
                <li title="Contact Details">
                    <a href="contact_details.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-mobile fa"></span>
                       <span id="hide">Contact Details</span> 
                       <strong></strong>
                    </a>  
                </li>
                
                <li title="College Details" >
                    <a href="#pageSubmenu" style="height:60px;" data-toggle="collapse" aria-expanded="false" class="sidebar-header" class="dropdown-toggle">
   
                    <span class="fa fa-info fa"></span>
                        <span id="hide">College Details &nbsp;&nbsp;&nbsp;&nbsp;</span><div class="fas fa-angle-down"></div>
                        <strong></strong>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="clg_details_bds.php">BDS </a>
                        </li>
                        <li>
                            <a href="clg_details_mds.php">MDS </a>
                        </li>
                        <li>
                            <a href="clg_details_phd.php">Phd </a>
                        </li>
                        <li>
                            <a href="clg_details_fellowship.php">Fellowship </a>
                        </li>
                    </ul>
                </li>
                
                <li title="Scholarship">
                    <a href="scholarship.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-certificate fa"></span>
                        <span id="hide">Scholarship</span>
                        <strong></strong>
                    </a>
                </li>
                
                <li title="Documents">
                    <a href="#homeSubmenu" style="height:60px;" data-toggle="collapse" aria-expanded="false" class="sidebar-header" class="dropdown-toggle">
   
                    <span class="fa fa-file fa"></span>
                        <span id="hide">Documents &nbsp;&nbsp;&nbsp;&nbsp;</span><div class="fas fa-angle-down"></div>
                        <strong></strong>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="bds_documents.php">BDS </a>
                        </li>
                        <li>
                            <a href="mds_documents.php">MDS </a>
                        </li>
                       
                    </ul>
                </li>
                
                <li title="Progress of Student">
                    <a href="progress_student.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-tasks fa">    </span>
                        <span id="hide">Progess of Student</span>
                        <strong></strong>
                    </a>
                </li>
                <li title="Academic Achievement">
                    <a href="academic_achievement.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-trophy fa">    </span>
                        <span id="hide">Academic</span>
                        <strong></strong>
                    </a>
                </li>



<li title="Extracurricular Activities">
                    <a href="extracurricular.php" class="sidebar-header" style="height:60px;" >                    
                     <span class="fas fa-table-tennis"></span>
                        <span id="hide">Extracurricular</span>
                        <strong></strong>
                    </a>
                </li>

                <li title="Submit Form">
                    <a href="submit_form.php" class="sidebar-header" style="height:60px;" >                    
                     <span class="fas fa-print"></span>
                        <span id="hide">Submit Form</span>
                        <strong></strong>
                    </a>
                </li>

                <li title="Print Form">
                    <a href="print_submit.php" class="sidebar-header" style="height:60px;" >                    
                     <span class="fas fa-print"></span>
                        <span id="hide">Print Form</span>
                        <strong></strong>
                    </a>
                </li>

                <li title="Logout">
                    <a href="logout.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-sign-out-alt">    </span>
                        <span id="hide">Logout</span>
                        <strong></strong>
                    </a>
                </li>

            </ul> 
         </div>   
        </nav>
        <!-- Page Content  -->
<div id="content" style="height:1200px;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="sidebtn" style="width:3rem;">
                        <i class="fas fa-bars"></i>
                        <span></span>
                    </button>
                    <div id="enroll"><span class="fas fa-user" style="color:green;"></span><b> <?php echo $id; ?></b></div>
                </div>
            </nav>
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box">Documents MDS</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:3%;padding:3%;padding-top:3rem;" method="POST" action="mds_document_back.php" enctype="multipart/form-data">

    <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">NEET Admit Card</span>
          </div>
          <a target="<?php if($row['ADMIT_CARD']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['ADMIT_CARD']==NULL){
            echo '#';
          }else{
            echo $row['ADMIT_CARD'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['ADMIT_CARD']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['ADMIT_CARD']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
          </div>
          </div>
          
     
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">NEET Rank Letter</span>
          </div>
          <a target="<?php if($row['RANK_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['RANK_LETTER']==NULL){
            echo '#';
          }else{
            echo $row['RANK_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button"  >
          <i class=" <?php 
          if($row['RANK_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['RANK_LETTER']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
          </div>
          </div>
          
     </div>
        <br>
       <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Allotment Letter</span>
          </div>
          <a target="<?php if($row['ALT_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['ALT_LETTER']==NULL){
            echo '#';
          }else{
            echo $row['ALT_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['ALT_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['ALT_LETTER']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
          </div>
          </div>
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Admission Letter</span>
          </div>
          <a target="<?php if($row['ADM_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['ADM_LETTER']==NULL){
            echo '#';
          }else{
            echo $row['ADM_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['ADM_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['ADM_LETTER']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
          </div>
        </div>
    </div>

    <br>
    <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">10th Marksheet</span>
          </div>
          <a target="<?php if($row['TENTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['TENTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row['TENTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['TENTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['TENTH_MKS']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
          </div>
          </div>
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">10th Passing Certificate</span>
          </div>
          <a target="<?php if($row['TENTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['TENTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['TENTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['TENTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['TENTH_PASS_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
        </div>
    </div>
     
    <br>
    <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">12th Marksheet</span>
          </div>
          <a target="<?php if($row['TWELTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['TWELTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row['TWELTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['TWELTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['TWELTH_MKS']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
          </div>
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">12th Passing Certificate</span>
          </div>
          <a target="<?php if($row['TWELTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['TWELTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['TWELTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['TWELTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['TWELTH_PASS_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
        </div>
    </div>

    <br>
    <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">1st Year BDS Marksheet</span>
            </div>
            <a target="<?php if($row['FIRST_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['FIRST_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row['FIRST_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['FIRST_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['FIRST_BDS_MARKSHEET']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
            </div>
            </div>

            <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">2nd Year BDS Marksheet</span>
            </div>
            <a target="<?php if($row['SECOND_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['SECOND_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row['SECOND_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['SECOND_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['SECOND_BDS_MARKSHEET']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
            </div>
            </div>
    </div>

<br>

    <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">3rd Year BDS Marksheet</span>
            </div>
            <a target="<?php if($row['THIRD_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['THIRD_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row['THIRD_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['THIRD_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['THIRD_BDS_MARKSHEET']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
            </div>
            </div>

            <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">4th Year BDS Marksheet</span>
            </div>
            <a target="<?php if($row['FOURTH_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['FOURTH_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row['FOURTH_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['FOURTH_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['FOURTH_BDS_MARKSHEET']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
            </div>
            </div>
    </div>



    
            <!-- <div class="col-sm">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">2nd Year BDS Marksheet</span>
                </div>
                <a href="#" class="btn btn-secondary  active" role="button"  name="2ndyearbdsmarksheet"><i class="fa fa-eye-slash" aria-hidden="true"></i> Not Uploaded</a>
                </div>
            </div>
    </div>

    <br>

    <div class="row">
                <div class="col-sm">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">3rd Year BDS Marksheet</span>
                    </div>
                    <a href="#" class="btn btn-secondary  active" role="button" aria-pressed="true" name="3rdyrbdsmarksheet"><i class="fa fa-eye" aria-hidden="true"></i> View </a>
                    </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">4rth Year BDS Marksheet</span>
                        </div>
                        <a href="#" class="btn btn-secondary  active" role="button" aria-pressed="true" name="4rthyrbds"><i class="fa fa-eye" aria-hidden="true"></i> View </a>
                        </div>
                        </div>
    </div> -->
<br>

    <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Provisional Passing Certificate</span>
            </div>
            <a target="<?php if($row['PROVISION_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['PROVISION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['PROVISION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['PROVISION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['PROVISION_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
            </div>
        </div>
          <div class="col-sm-6">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Attempt Certificate</span>
                </div>
              <a target="<?php if($row['ATTEMPT_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['ATTEMPT_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['ATTEMPT_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['ATTEMPT_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['ATTEMPT_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
                </div>
                </div>
    </div>
<br>

    <div class="row">
          <div class="col-sm-6">
        
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">BDS Degree Certificate</span>
            </div>
            <a target="<?php if($row['BDS_DEG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['BDS_DEG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['BDS_DEG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['BDS_DEG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['BDS_DEG_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
            </div>
        </div>
           
          <div class="col-sm-6">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">College Internship Certificate</span>
                </div>
                <a target="<?php if($row['CLG_INTERN_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['CLG_INTERN_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['CLG_INTERN_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['CLG_INTERN_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['CLG_INTERN_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
                </div>
                </div>
    </div>
<br>

    <div class="row">
          <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">DCI Recognition Certificate(Private College)</span>
            </div>
            <a target="<?php if($row['DCI_RECOG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['DCI_RECOG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['DCI_RECOG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['DCI_RECOG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['DCI_RECOG_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
            </div>
            </div>
    </div>
        <br>
    <div class="row">
          <div class="col-sm-6">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">DCI Registration Certificate</span>
                </div>
                <a target="<?php if($row['DCI_REG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['DCI_REG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['DCI_REG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['DCI_REG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['DCI_REG_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
                </div>
            </div>
                
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">College Leaving Certificate</span>
          </div>
          <a target="<?php if($row['CLG_LEAVE_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['CLG_LEAVE_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['CLG_LEAVE_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['CLG_LEAVE_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['CLG_LEAVE_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
          </div>
    </div>

  
    <br>
    <div class="row">
        
            
            <div class="col-sm-6"> 
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Migration Certificate</span>
                    </div>
                    <a target="<?php if($row['MIGRATION_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['MIGRATION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['MIGRATION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['MIGRATION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['MIGRATION_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
                </div>
            </div>
    
    
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Disability Certificate</span>
          </div>
          <a target="<?php if($row['DISABILITY_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row['DISABILITY_CERTI']==NULL){
            echo '#';
          }else{
            echo $row['DISABILITY_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row['DISABILITY_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row['DISABILITY_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
          </div>
    </div>

    <div class="row">
     <div class="col-2"></div>
     <div class="col-3"></div>

     <div class="col-2">
    <a href="mds_documents.php" class="back">Upload</a>
     </div>
     <div class="col-2">
     </div>
     <div class="col-3"></div>
     </div>
          
     
     <!-- <div class="row">
     <div class="col-sm-5"></div>
     <div class="col-sm-5">
     <button type="submit" name="submit"  value="Submit" class="btn">Submit</button></div>
     <div class="col-sm-5"></div>
     </div> -->
</form>

</div>
</div>

    
    </div>

    </div><!--Wrapper ends-->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>
