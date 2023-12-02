<?php

    if(isset($_GET['event_name'])){
    $msg1="Not uploaded";
    $msg2="View Document";
    include "signupdb.php";
  $event_name = $_GET['event_name'];
  $level = $_GET['level'];
  $event_type = $_GET['event_type'];
  $id = $_GET['id'];
  $email = $_GET['email'];
  $prize=$_GET['prize'];
  $certi=$_GET['certi'];
  $sql = "DELETE FROM `extracurricular` WHERE ID='$id' AND EMAIL_ID='$email' AND EVENT_TYPE='$event_type' AND LEVEL='$level' AND EVENT_NAME='$event_name' AND PRIZE_WON='$prize' AND CERTIFICATE='$certi' ";
  unlink($prize);
  unlink($certi);
  $result = mysqli_query($conn,$sql);
  if ($result){
    //echo $sql;
    //header("Location : extracurricular_view.php");
    }
  else
    echo mysqli_error($conn);
  //header("Location : extracurricular_view.php");
  }
?>


<?php
    session_start();
    $id = $_SESSION['id'];
    //$id = 'DY000034';
    $email = $_SESSION['email'];
    //$email = 'bbb@gmail.com';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Extracurricular View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Collapsible sidebar using Bootstrap 4</title>
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
        margin-left:1.5rem;
    }
}
button.btn, button.sidebtn, a.btn{
    background-image: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27 100%);
    border:solid 1px #b90505;
    border-radius:5px;color:#ffffff;
    width:8rem;
    height:2.5rem

}
button.btn:hover{background-position: right;
}
/* div.academic_achievement{
    border:1px solid #eccbcb;
    border-radius:3%;
    padding:3%;
    padding-top:3rem;
    margin:1rem;
    background-image: linear-gradient(to bottom, #f3e0e0, #ffffff);
} */

/* .form-control{
    border-top:0px;
    border-right:0px;
} */
    </style>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
        <div class="sanskruti" style="height:2000px;">
            <div class="sidebar-header">
                <h2>DY Patil Dentistry</h2>
<!--                 <div id="hide"><span class="fas fa-user" style="color:green;"></span><?php echo " ".$email?></div> -->
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
                     <span class="fas fa-baseball-ball"></span>
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
        <div id="content" style="height:1500px;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse"  class="sidebtn" style="width:3rem;">
                        <i class="fas fa-bars"></i>
                        <span></span>
                    </button>
                    <div id="enroll"><span class="fas fa-user" style="color:green;"></span><b> <?php echo $id; ?></b></div>
                </div>
            </nav>
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box">Extracurricular</h1>
  </div>
   <?php
          include "signupdb.php";
          
         
    $sql = "SELECT * FROM `extracurricular` WHERE ID='$id'";
    $result = mysqli_query($conn,$sql);
    // echo mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0 )
    {
        
      while( $rows = mysqli_fetch_assoc($result))
      {
        ?> 
  <form style="border:1px solid #f52929;border-radius:1rem;padding:3%;padding-top:3rem;" method="POST">
  <div id="test">
   <div class="academic_achievement" id="academic_achievement"> 
        
        
  <br>
        <div class="row">
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                      </div>
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_name" value="<?php echo $rows["EVENT_NAME"]; ?>" disabled>
                    </div>
                </div>
           
                <div class="col-sm"></div>
              
                    <div class="col-sm-5">
                       <div class="input-group mb-3">
                         <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                       </div>
                       <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="level" value="<?php echo $rows["LEVEL"]; ?>" disabled>
                       </div>
                    </div>
                    <div class="col-sm"></div>
           
        </div>
           
        <div class="row">
                         <div class="col-sm-5">
                         <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="inputGroup-sizing-default">Presentation Type</span>
                         </div>
                         <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_type" value="<?php echo $rows["EVENT_TYPE"]; ?>" disabled>
                         </div>
                      </div>
                  
                       <div class="col-sm-1"></div>
                       <div class="col-sm-5">

                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Prize Won</span>
                       </div>
          
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $rows["PRIZE_WON"]; ?>">View Document</a>
                       
                       </div>
                       </div>
                       <div class="col-sm"></div>
        </div>
           
        <div class="row">
                       <div class="col-sm-6">
                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Certificate of Participation</span>
                       </div>
                       <!--<input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="certificate">-->
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $rows["CERTIFICATE"]; ?>">View Document</a>
                       </div>
                       </div>
                       <div class="col-sm"></div>
        </div>
        
       <!-- <a href="extracurricular_delete.php" >Delete</a>-->
 </div>
 </div>  

 <div class="row">
 <div class="col-5"></div>
 <div class="col-4">
 <!--<a href="extracurricular.php" class="btn">Upload</a>-->
<a href="extracurricular_view.php?event_name=<?php echo $rows["EVENT_NAME"]; ?>&level=<?php echo $rows["LEVEL"]; ?>&event_type=<?php echo $rows["EVENT_TYPE"]; ?>&prize=<?php echo $rows["PRIZE_WON"]; ?>&certi=<?php echo $rows["CERTIFICATE"]; ?>&id=<?php echo $id; ?>&email=<?php echo $email; ?>" class="btn">Delete</a>
 </div>
 <div class="col-3"></div>

 </div>
 
 
    </form>
    <br>
    <br>
    <?php
    }
    }
    ?>
</div>
</div>
<center><a href="extracurricular.php" class="btn">Back</a></center>
 

        </div>
</div>
<!--Wrapper ends-->
</body>
</html>
