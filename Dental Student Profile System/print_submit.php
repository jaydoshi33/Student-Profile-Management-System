<?php
    session_start();
    $id = $_SESSION['id'];
    $email =  $_SESSION['email'];
    $query1 = "SELECT `F_NAME` FROM student_details WHERE ID='$id' ";
    $query2 = "SELECT `L_NAME` FROM student_details WHERE ID='$id' ";

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($result1);
$fn=$row1['F_NAME'];
$result2 = mysqli_query($conn,$query2); 
$row2 = mysqli_fetch_assoc($result2);
$ln=$row2['L_NAME'];




            // if( isset($_POST['final_submit']))
            // {
            // $query ="UPDATE submit_status SET `F_NAME`='$fn',`L_NAME`='$ln' WHERE APPLICATION_ID='$id' "; 
            // $result = mysqli_query($conn,$query) ; 
            // $query3="UPDATE submit_status SET ALL_FORM=1 WHERE APPLICATION_ID='$id' ";
            // $result3=mysqli_query($conn,$query3);
            // //echo("data inserted");

            // }

            $sqlsubmit="SELECT * FROM submit_status WHERE APPLICATION_ID= '$id' ";
            $resultsubmit= mysqli_query($conn,$sqlsubmit);
            $rowsubmit= mysqli_fetch_array($resultsubmit);
?>

<!-- php for personal details
 -->
 <?php
  $sql    = "SELECT * FROM student_details WHERE ID='$id'";
            $result = mysqli_query($conn,$sql) ;
            $row = mysqli_fetch_array($result);
            $image=$row['BROWSE'];
            if($image==NULL)
            {
              $msg="No image uploaded";
            }
            else{
              $msg="View Image";
             }
?>
<?php
 $sql100    = "SELECT * FROM contact_details WHERE ID='$id'";
                $result100 = mysqli_query($conn,$sql100) ;
                $row100 = mysqli_fetch_array($result100);

?>
<?php 
 $sql200    = "SELECT * FROM scholarship WHERE ID='$id'";
            $result200 = mysqli_query($conn,$sql200) ;
            $row200 = mysqli_fetch_array($result200);
?>
<?php
  $sql300    = "SELECT * FROM progress_student WHERE ID='$id'";
            $result300 = mysqli_query($conn,$sql300) ;
            $row300 = mysqli_fetch_array($result300);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PRINT SUBMIT</title>
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
        /*position:absolute; 
        top:7.5rem;*/
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
        /*position:absolute; 
        top:11rem;*/
        background:#ffffff;


    }
}
  @media screen and (max-width:500px){
    #box1{
        padding: 1rem;
        font-size:1rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
       /* position:absolute; 
        top:7.5rem;*/
        background:#ffffff;


    }
}

@media screen and (min-width:500px){
    #box1{
        padding: 1rem;
        font-size: 2rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
        /*position:absolute; 
        top:64rem;*/
        background:#ffffff;


    }
}

 @media screen and (max-width:500px){
#box2{
    padding: 1rem;
    font-size:1rem;
    font-family: 'Poppins', sans-serif;
    text-shadow:2px 2px #ccccb3; 
    border:solid 2px #c81e1e; 
    border-radius:1.5rem;
    box-shadow:3px 3px #ccccb3;
    margin-left:2.5rem;
    /*position:absolute; 
    top:7.5rem;*/
    background:#ffffff;


}
}

@media screen and (min-width:500px){
#box2{
    padding: 1rem;
    font-size: 2rem;
    font-family: 'Poppins', sans-serif;
    text-shadow:2px 2px #ccccb3; 
    border:solid 2px #c81e1e; 
    border-radius:1.5rem;
    box-shadow:3px 3px #ccccb3;
    margin-left:2.5rem;
    /*position:absolute; 
    top:96.7rem;*/
    background:#ffffff;


}
}

 @media screen and (max-width:500px){
    #box3{
        padding: 1rem;
        font-size:1rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
      /*  position:absolute; 
        top:7.5rem;*/
        background:#ffffff;


    }
}

@media screen and (min-width:500px){
    #box3{
        padding: 1rem;
        font-size: 2rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
        /*position:absolute; 
        top:116rem;*/
        background:#ffffff;


    }
}

@media screen and (max-width:500px){
    #box4{
        padding: 1rem;
        font-size:1rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
      /*  position:absolute; 
        top:7.5rem;*/
        background:#ffffff;


    }
}

@media screen and (min-width:500px){
    #box4{
        padding: 1rem;
        font-size: 2rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
/*        position:absolute; */
/*        top:136rem;
*/        background:#ffffff;


    }
}

 @media screen and (max-width:500px){
    #box5{
        padding: 1rem;
        font-size:1rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
        /*position:absolute; 
        top:7.5rem;*/
        background:#ffffff;


    }
}

@media screen and (min-width:500px){
    #box5{
        padding: 1rem;
        font-size: 2rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
        /*position:absolute; 
        top:7.5rem;*/
        background:#ffffff;


    }
}
@media screen and (max-width:500px){
    #box6{
        padding: 1rem;
        font-size:1rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
        /*position:absolute; 
        top:7.5rem;*/
        background:#ffffff;


    }
}

@media screen and (min-width:500px){
    #box6{
        padding: 1rem;
        font-size: 2rem;
        font-family: 'Poppins', sans-serif;
        text-shadow:2px 2px #ccccb3; 
        border:solid 2px #c81e1e; 
        border-radius:1.5rem;
        box-shadow:3px 3px #ccccb3;
        margin-left:2.5rem;
        /*position:absolute; 
        top:96.7rem;*/
        background:#ffffff;


    }
}



.container{
    margin-bottom:1rem;
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
button.btn, button.sidebtn{
    background-image: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27 100%);
    border:solid 1px #b90505;
    border-radius:5px;color:#ffffff;
    width:8rem;
    height:2.5rem

}
button.btn:hover{background-position: right;
}
button.view{
  background-image: linear-gradient(to right, #b3b3b3 0%, #4d4d4d 51%, #b3b3b3 100%);
    border:solid 1px #b3b3b3;
    border-radius:5px;color:#ffffff;
    width:4.5rem;
    height:2.5rem
}




/* .form-control{
    border-top:0px;
    border-right:0px;
} */
    </style>
</head>
<body>
<?php
    if($rowsubmit['ALL_FORM']==0)
    {
?>

    <div class="wrapper">
        <nav id="sidebar">
        <div class="sanskruti" style="height:5000px;">
            <div class="sidebar-header">
                <h2>DY Patil Dentistry</h2>
                <!-- <div id="hide"><span class="fas fa-user" style="color:green;"></span><?php echo " ".$email; ?></div> -->
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
                <li title="Personal Details" >
                    <a href="personal_details.php" class="sidebar-header" style="height:60px;" >                    
                     <span class="fas fa-user fa"></span>
                        <span id="hide" >Personal Details</span>
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
                    <button type="button" id="sidebarCollapse" class="sidebtn"  style="width:3rem;">
                        <i class="fas fa-bars"></i>
                        <span></span>
                    </button>
                    <div id="enroll"><span class="fas fa-user" style="color:green;"></span><b> <?php echo $id; ?></b></div>
                </div>
            </nav>
           
        
        <!-- <form method="POST">
        <button type="submit" name="final_submit"   class="btn"  >Submit</button>
        </form> -->
        
<!-- PERSONAL DETAILS  -->
 <div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
<div class="row">
  <h1 id="box">Personal Details</h1>
  </div>


  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:5rem;" enctype="multipart/form-data" >
  <div class="row">
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
           </div>
           <input type="text" disabled  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="f_name"  value="<?php echo $row['F_NAME']; ?>">
         </div>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
           </div>
           <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="m_name" value="<?php echo $row['M_NAME']; ?>">
           </div>
     </div>
           <div class="col-sm-1"></div>

  </div>

 

  <div class="row">
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
           </div>
           <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="l_name" value="<?php echo $row['L_NAME']; ?>">
           </div>
      </div>
  </div>
  <br>
  <div class="row">
        <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Father's Name</span>
            </div>
            <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="father_name" value="<?php echo $row['FATHER_NAME']; ?>">
            </div>
        </div>
      <div class="col-sm-1"></div>
       <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Mother's Name</span>
            </div>
            <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mother_name" value="<?php echo $row['MOTHER_NAME']; ?>">
            </div>
      </div>
      <div class="col-sm-1"></div>

  </div>
  <div class="row">
        <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Reg. Number</span>
            </div>
            <input type="text" disabled  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="reg_no" value="<?php echo $row['REG_NO']; ?>">
            </div>
        </div>
      <div class="col-sm-1"></div>
     <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
            </div>
            <input type="text"   class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="gender" value="<?php echo $row['GENDER']; ?>" disabled>
            </div>
        </div>
        <div class="col-sm-1"></div>

  </div>
  
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Birth Date</span>
          </div>
          <input  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dob" value="<?php echo $row['DOB']; ?>" disabled>
          </div>
        </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Birthplace</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="birth_place" value="<?php echo $row['BIRTH_PLACE']; ?>">
          </div>
      </div>
      <div class="col-sm-1"></div>

  </div>
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Blood Group</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="blood_grp" value="<?php echo $row['BLOOD_GRP']; ?>">
          </div>
      </div>
  </div>
  <br>

  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">PAN Number</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pancard" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" value="<?php echo $row['PANCARD']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Aadhar Number</span>
          </div>
          <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="aadhar" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}" value="<?php echo $row['AADHAR']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
  </div>
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Passport Number</span>
          </div>
          <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="passport" pattern="[A-Z]{1}[0-9]{7}" value="<?php echo $row['PASSPORT']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Parent's Pancard Number</span>
          </div>
          <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="parent_pancard" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" value="<?php echo $row['PARENT_PANCARD']; ?>">
          </div>
        </div>
      <div class="col-sm-1"></div>
  </div>
  <br>

  <div class="row">
       <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Religion</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="religion" value="<?php echo $row['RELIGION']; ?>">
          </div>
      </div>
      <div class="col-sm-1"></div>
     <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Caste Reservation</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="reservation" value="<?php echo $row['RESERVATION']; ?>">
          </div>
      </div>
          <div class="col-sm-1"></div>
  </div>
  
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Caste</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="caste" value="<?php echo $row['CASTE']; ?>">
          </div>
        </div>
      <div class="col-sm-1"></div>
       <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="category" value="<?php echo $row['CATEGORY']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
  </div>
  <br>
  <div class="row">
        <div class="col-sm-7">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Photo</span>
          </div>
          <input  type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="photo">
          <a target="_blank" href=" <?php if($image!=NULL)
          {
             echo $image; 
          }
          else echo "#"; ?> " class="btn btn-secondary  active" aria-pressed="true"><i class="
          <?php 
          if($image!=NULL)
          {
             echo 'fas fa-eye'; 
          }
          else echo 'fas fa-eye-slash'; 
          ?>" aria-hidden="true"></i> <?php echo $msg; ?> </a>
        </div>
    </div>
        
  </div>

  </form>
</div>
</div>
<!-- CONTACT DETAILS  -->
  <div class="d-flex justify-content-center">
 <div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box1">Contact Details</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
  <br>
  <div class="row">
     <div class="col-sm-12">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Permanent Address</span>
           </div>
           <input textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="per_address" id="per_address" value="<?php echo $row100['PER_ADDRESS']; ?>" disabled>
         </div>
     </div>
  </div>
  <div class="row">
     <div class="col-sm-12">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Present Residencial Address</span>
           </div>
           <input textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="current_add" id="current_add"  value="<?php echo $row100['CURRENT_ADD']; ?>" disabled >
         </div>
     </div> 
  </div>
  <br>
  <div class="row">
     <div class="col-sm-5">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Domicile State</span>
           </div>
           <input textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dom_state" id="dom_state"  value="<?php echo $row100['DOM_STATE']; ?>" disabled >
         </div>
     </div>
  </div>
  <br>
  <div class="row">
         <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Student Contact Number</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="studentnumber" id="contact_no1" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row100['STUDENTNUMBER']; ?>">
            </div>
         </div>
         <div class="col-sm-1"></div>

         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Student Email ID</span>
            </div>
            <input disabled type="email"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="studentemail" value="<?php echo $row100['STUDENTEMAIL']; ?>">
            </div>
         </div>
     </div>

     <div class="row">
          <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Father's Contact Number</span>
            </div>
            <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fathernumber"id="contact_no2" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row100['FATHERNUMBER']; ?>">
            </div>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Father's Email ID</span>
            </div>
            <input type="email" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fatheremail" value="<?php echo $row100['FATHEREMAIL']; ?>">
            </div>
          </div>
          
     </div>
     <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Mother's Contact Number</span>
          </div>
          <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mothernumber" id="contact_no3" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row100['MOTHERNUMBER']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>

        <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Mother's Email ID</span>
          </div>
          <input type="email" disabled  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="motheremail" value="<?php echo $row100['MOTHEREMAIL']; ?>">
          </div>
        </div>
        
   </div>
  </form>
</div>
</div>

<!-- COLLEGE DETAILS -->
<?php
$query101="SELECT * FROM medical.college_bds WHERE ID='$id' ";
$result101=mysqli_query($conn,$query101);
$row101=mysqli_fetch_array($result101);

$query102="SELECT * FROM medical.college_mds WHERE ID='$id' ";
$result102=mysqli_query($conn,$query102);
$row102=mysqli_fetch_array($result102); 

$query103="SELECT * FROM medical.college_phd WHERE ID='$id' ";
$result103=mysqli_query($conn,$query103);
$row103=mysqli_fetch_array($result103); 

$query104="SELECT * FROM medical.college_fellowship WHERE ID='$id' ";
$result104=mysqli_query($conn,$query104);
$row104=mysqli_fetch_array($result104); 

if($row101['NAME_COLLEGE_10']!=NULL && $row102('NAME_COLLEGE_10')==NULL && $row103('NAME_COLLEGE_10')==NULL && $row104('NAME_COLLEGE_10')==NULL )
{
?>
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box6" >College Details BDS</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >

  <br>  
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th </h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row101['NAME_COLLEGE_10']; ?>" disabled>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row101['NAME_BOARD_10']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row101['YEAR_10']; ?>" disabled>
          </div>
          </div>
     </div>
         


    <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">HSC- 12th</h5>
     </div>
    <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row101['NAME_COLLEGE_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row101['NAME_BOARD_12']; ?>"disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row101['YEAR_12']; ?>"disabled>
          </div>
          </div>
     </div>

</form>
</div>
</div>

<?php    
}
else if($row102['NAME_COLLEGE_10']!=NULL && $row103('NAME_COLLEGE_10')==NULL && $row104('NAME_COLLEGE_10')==NULL )
{
?>

<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box6">College Details MDS</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;">

    <br>
    
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row102['NAME_COLLEGE_10']; ?>" disabled>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row102['NAME_BOARD_10']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row102['YEAR_10']; ?>" disabled>
          </div>
          </div>
     </div>
         


     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">HSC- 12th</h5>
     </div>
    <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row102['NAME_COLLEGE_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row102['NAME_BOARD_12']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row102['YEAR_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">BDS</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row102['NAME_COLLEGE_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row102['NAME_BOARD_BDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row102['YEAR_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
</form>
</div>
</div>

<?php 
}
else if($row103['NAME_COLLEGE_10']!=NULL &&  $row104('NAME_COLLEGE_10')==NULL )
{
?>

<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box6">College Details Phd</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
    <br>
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row103['NAME_COLLEGE_10']; ?>" disabled>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row103['NAME_BOARD_10']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row103['YEAR_10']; ?>" disabled>
          </div>
          </div>
     </div>
         


     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">HSC- 12th</h5>
     </div>
    <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row103['NAME_COLLEGE_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row103['NAME_BOARD_12']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row103['YEAR_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">BDS</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row103['NAME_COLLEGE_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row103['NAME_BOARD_BDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row103['YEAR_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">MDS</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_mds" value="<?php echo $row103['NAME_COLLEGE_MDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_mds" value="<?php echo $row103['NAME_BOARD_MDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_mds" value="<?php echo $row103['YEAR_MDS']; ?>" disabled>
          </div>
          </div>
     </div><br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">Any Other(Optional)</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_other" value="<?php echo $row103['NAME_COLLEGE_OTHER']; ?>" disabled >
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_other" value="<?php echo $row103['NAME_BOARD_OTHER']; ?>" disabled >
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_other" value="<?php echo $row103['YEAR_OTHER']; ?>" disabled >
          </div>
          </div>
     </div>

</form>
</div>
</div>

<?php 
}
else if($row104['NAME_COLLEGE_10']!=NULL)
{
?>

<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box6">College Details</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;">
    <br>
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row104['NAME_COLLEGE_10']; ?>" disabled>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row104['NAME_BOARD_10']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row104['YEAR_10']; ?>" disabled>
          </div>
          </div>
     </div>
         


     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">HSC- 12th</h5>
     </div>
    <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row104['NAME_COLLEGE_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row104['NAME_BOARD_12']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row104['YEAR_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">BDS</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row104['NAME_COLLEGE_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row104['NAME_BOARD_BDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row104['YEAR_BDS']; ?>" disabled>
          </div>
          </div>
     </div><br>

     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">MDS(Optional)</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_mds" value="<?php echo $row104['NAME_COLLEGE_MDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_mds" value="<?php echo $row104['NAME_BOARD_MDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_mds" value="<?php echo $row104['YEAR_MDS']; ?>" disabled >
          </div>
          </div>
     </div><br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">Any Other(Optional)</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_other" value="<?php echo $row104['NAME_COLLEGE_OTHER']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_other" value="<?php echo $row104['NAME_BOARD_OTHER']; ?>" disabled >
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_other" value="<?php echo $row104['YEAR_OTHER']; ?>" disabled >
          </div>
          </div>
     </div>
</form>
</div>
</div>

<?php 
}
?>

<!-- SCHOLARSHIP-->
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box2">Scholarship </h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;">

  <br>
  <div class="row">
            <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Scholarship Details</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="scholarship_name" value="<?php echo $row200['SCHOLARSHIP']; ?>" disabled>
            </div>
        </div>
     </div>


  <div class="row">
  
        <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Agency Name</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="agency" value="<?php echo $row200['AGENCY_NAME']; ?>" disabled>
            </div>
        </div>


    </div>

   <div class="row">
         <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Scholarship Amount</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" value="<?php echo $row200['SCHOLARSHIP_AMT']; ?>" disabled>
            </div>
         </div>
     </div>
</form>
</div>
</div>
<!--documents-->
<center>
<?php 
        $query201="SELECT * FROM bds_document WHERE ID='$id'";
        $result201=mysqli_query($conn,$query201);
        $row201=mysqli_fetch_array($result201);

        $query202="SELECT * FROM mds_document WHERE ID='$id'";
        $result202=mysqli_query($conn,$query202);
        $row202=mysqli_fetch_array($result202);

        $msg1="Not Uploaded";
        $msg2="View Uploaded File";

        if($row201['ADMIT_CARD']!=NULL && $row202['ADMIT_CARD'] == NULL ){
?>
        <div class="d-flex justify-content-center">
        <div class="container" style="margin-top:2rem;">
        <div class="row">
        <h1 id="box1">BDS Documents</h1>
        </div>
        <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
        <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">NEET Admit Card</span>
          </div>
          <a target="<?php if($row201['ADMIT_CARD']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['ADMIT_CARD']==NULL){
            echo '#';
          }else{
            echo $row201['ADMIT_CARD'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['ADMIT_CARD']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['ADMIT_CARD']==NULL){
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
          <a target="<?php if($row201['RANK_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['RANK_LETTER']==NULL){
            echo '#';
          }else{
            echo $row201['RANK_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button"  >
          <i class=" <?php 
          if($row201['RANK_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['RANK_LETTER']==NULL){
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
          <a target="<?php if($row201['ALT_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['ALT_LETTER']==NULL){
            echo '#';
          }else{
            echo $row201['ALT_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['ALT_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['ALT_LETTER']==NULL){
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
          <a target="<?php if($row201['ADM_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['ADM_LETTER']==NULL){
            echo '#';
          }else{
            echo $row201['ADM_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['ADM_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['ADM_LETTER']==NULL){
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
          <a target="<?php if($row201['TENTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['TENTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row201['TENTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['TENTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['TENTH_MKS']==NULL){
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
          <a target="<?php if($row201['TENTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['TENTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['TENTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['TENTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['TENTH_PASS_CERTI']==NULL){
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
          <a target="<?php if($row201['TWELTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['TWELTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row201['TWELTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['TWELTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['TWELTH_MKS']==NULL){
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
          <a target="<?php if($row201['TWELTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['TWELTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['TWELTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['TWELTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['TWELTH_PASS_CERTI']==NULL){
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
          <span class="input-group-text" id="inputGroup-sizing-default">College Leaving Certificate</span>
          </div>
          <a target="<?php if($row201['CLG_LEAVE_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['CLG_LEAVE_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['CLG_LEAVE_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['CLG_LEAVE_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['CLG_LEAVE_CERTI']==NULL){
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
                        <span class="input-group-text" id="inputGroup-sizing-default">Migration Certificate</span>
                    </div>
                    <a target="<?php if($row['MIGRATION_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['MIGRATION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['MIGRATION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['MIGRATION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['MIGRATION_CERTI']==NULL){
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
          <span class="input-group-text" id="inputGroup-sizing-default">Disability Certificate</span>
          </div>
          <a target="<?php if($row201['DISABILITY_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['DISABILITY_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['DISABILITY_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['DISABILITY_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['DISABILITY_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
          </div>
    </div>

    

     
          
    
</form>


        <?php } 
        
        else if($row202['ADMIT_CARD']!=NULL){
        ?>
        <div class="d-flex justify-content-center">
        <div class="container" style="margin-top:2rem;">
        <div class="row">
        <h1 id="box3">MDS documents</h1>
        </div>
        <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
        
        <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">NEET Admit Card</span>
          </div>
          <a target="<?php if($row202['ADMIT_CARD']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['ADMIT_CARD']==NULL){
            echo '#';
          }else{
            echo $row202['ADMIT_CARD'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['ADMIT_CARD']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['ADMIT_CARD']==NULL){
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
          <a target="<?php if($row202['RANK_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['RANK_LETTER']==NULL){
            echo '#';
          }else{
            echo $row202['RANK_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button"  >
          <i class=" <?php 
          if($row202['RANK_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['RANK_LETTER']==NULL){
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
          <a target="<?php if($row202['ALT_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['ALT_LETTER']==NULL){
            echo '#';
          }else{
            echo $row202['ALT_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['ALT_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['ALT_LETTER']==NULL){
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
          <a target="<?php if($row202['ADM_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['ADM_LETTER']==NULL){
            echo '#';
          }else{
            echo $row202['ADM_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['ADM_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['ADM_LETTER']==NULL){
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
          <a target="<?php if($row202['TENTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['TENTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row202['TENTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['TENTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['TENTH_MKS']==NULL){
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
          <a target="<?php if($row202['TENTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['TENTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['TENTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['TENTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['TENTH_PASS_CERTI']==NULL){
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
          <a target="<?php if($row202['TWELTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['TWELTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row202['TWELTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['TWELTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['TWELTH_MKS']==NULL){
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
          <a target="<?php if($row202['TWELTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['TWELTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['TWELTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['TWELTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['TWELTH_PASS_CERTI']==NULL){
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
            <a target="<?php if($row202['FIRST_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['FIRST_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row202['FIRST_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['FIRST_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['FIRST_BDS_MARKSHEET']==NULL){
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
            <a target="<?php if($row202['SECOND_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['SECOND_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row202['SECOND_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['SECOND_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['SECOND_BDS_MARKSHEET']==NULL){
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
            <a target="<?php if($row202['THIRD_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['THIRD_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row202['THIRD_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['THIRD_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['THIRD_BDS_MARKSHEET']==NULL){
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
            <a target="<?php if($row202['FOURTH_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['FOURTH_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row202['FOURTH_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['FOURTH_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['FOURTH_BDS_MARKSHEET']==NULL){
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
            <span class="input-group-text" id="inputGroup-sizing-default">Provisional Passing Certificate</span>
            </div>
            <a target="<?php if($row202['PROVISION_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['PROVISION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['PROVISION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['PROVISION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['PROVISION_CERTI']==NULL){
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
              <a target="<?php if($row202['ATTEMPT_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['ATTEMPT_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['ATTEMPT_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['ATTEMPT_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['ATTEMPT_CERTI']==NULL){
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
            <a target="<?php if($row202['BDS_DEG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['BDS_DEG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['BDS_DEG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['BDS_DEG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['BDS_DEG_CERTI']==NULL){
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
                <a target="<?php if($row202['CLG_INTERN_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['CLG_INTERN_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['CLG_INTERN_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['CLG_INTERN_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['CLG_INTERN_CERTI']==NULL){
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
            <a target="<?php if($row202['DCI_RECOG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['DCI_RECOG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['DCI_RECOG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['DCI_RECOG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['DCI_RECOG_CERTI']==NULL){
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
                <a target="<?php if($row202['DCI_REG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['DCI_REG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['DCI_REG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['DCI_REG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['DCI_REG_CERTI']==NULL){
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
          <a target="<?php if($row202['CLG_LEAVE_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['CLG_LEAVE_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['CLG_LEAVE_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['CLG_LEAVE_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['CLG_LEAVE_CERTI']==NULL){
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
                    <a target="<?php if($row202['MIGRATION_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['MIGRATION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['MIGRATION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['MIGRATION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['MIGRATION_CERTI']==NULL){
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
          <a target="<?php if($row202['DISABILITY_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['DISABILITY_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['DISABILITY_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['DISABILITY_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['DISABILITY_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
          </div>
    </div>

    
          
    
</form>



        <?php }?>

        

</center>
<!-- PROGRESS OF STUDENT -->
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box3">Progress of Student</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
  
  <br>
  <nav>
    <div class="row">
        
        <div class="col-sm-5">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Year</span>
                </div>
                <input type="number" min="1" max="5" class=" form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="year" value="<?php echo $row300['YEAR']; ?>" disabled>
            
            </div>
        </div>
        <div class="col-sm-1"></div>
    
        <div class="col-sm-5">
            <div class="input-group mb-3 ">
                <div class="input-group-prepend ">
                    <span class="input-group-text " id="inputGroup-sizing-default ">Marks obtained</span>
                </div>
                <input type="number" min="0" max="100" class=" form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="marks_obtained" value="<?php echo $row300['MARKS_OBTAINED']; ?>" disabled>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        
        <div class="col-sm-5 ">
           <!--  <div class="input-group mb-3 ">
                <div class="input-group-prepend ">
                    <label class="input-group-text " id="inputGroup-sizing-default ">Status</label>
                </div>
                <select class="custom-select " id="inputGroupSelect01" name="status" disabled>
                        <option selected value="">Choose... </option>
                        <option value="Pass">Pass</option>
                        <option value="ATKT">ATKT</option>
                        <option value="Fail">Fail</option>
                    </select>
            </div> -->
              <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text " id="inputGroup-sizing-default ">Status</span>
                    </div>
                    <input type="text" class="form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="status" value="<?php echo $row300['STATUS']; ?>" disabled>
                </div>
        </div>
        <div class="col-sm-1"></div>
    
            <div class="col-sm-5">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text " id="inputGroup-sizing-default ">Revaluation</span>
                    </div>
                    <input type="text" class="form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="revaluation" value="<?php echo $row300['REVALUATION']; ?>" disabled>
                </div>
            </div>
        <div class="col-sm"></div>
        </div>
        <div class="row">
            
            <div class="col-sm-5">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text " id="inputGroup-sizing-default ">Number of Attempts</span>
                    </div>
                    <input type=" " class="form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="no_attempts" value="<?php echo $row300['NO_ATTEMPTS']; ?>" disabled>

                </div>
            </div>
          <div class="col-sm"></div>  
        </div>
        </nav>
        
  </form>
</div>
</div>
<!-- ACADEMIC ACHIEVEMENTS -->
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box4">Academic Achievement</h1>
  </div>
   <?php
        include "signupdb.php";
        $sql400 = "SELECT * FROM `academic_achievements` WHERE ID='$id'";
        $result400 = mysqli_query($conn,$sql400);
        // echo mysqli_num_rows($result);
        if (mysqli_num_rows($result400) > 0 )
        {
            
            while( $row400 = mysqli_fetch_assoc($result400))
            {
            ?> 
  <form style="border:1px solid #f52929;border-radius:1rem;padding:3%;padding-top:3rem;">
 
  <br>
        <div class="row">
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                      </div>
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_name" value="<?php echo $row400["EVENT_NAME"]; ?>" disabled>
                    </div>
                </div>
           
                <div class="col-sm"></div>
              
                    <div class="col-sm-5">
                       <div class="input-group mb-3">
                         <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                       </div>
                       <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="level" value="<?php echo $row400["LEVEL"]; ?>" disabled>
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
                         <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="presentation_type" value="<?php echo $row400["PRESENTATION_TYPE"]; ?>" disabled>
                         </div>
                      </div>
                  
                       <div class="col-sm-1"></div>
                       <div class="col-sm-5">

                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Prize Won</span>
                       </div>
                       <!--<input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="prize_won">-->
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $row400["PRIZE_WON"]; ?>">View Document</a>
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
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $row400["CERTIFICATE"]; ?>">View Document</a>
                       </div>
                       </div>
                       <div class="col-sm"></div>
        </div>
    </form>
    <br>
    <?php
}
}
    ?>
 </div>
 </div>  
<!--  EXTRACURRICULAR ACTIVITIES -->
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box5">Extracurricular</h1>
  </div>
   <?php
 
    $sql500 = "SELECT * FROM `extracurricular` WHERE ID='$id'";
    $result500 = mysqli_query($conn,$sql500);
    // echo mysqli_num_rows($result);
    if (mysqli_num_rows($result500) > 0 )
    {
        
      while( $row500 = mysqli_fetch_assoc($result500))
      {
    ?> 
  <form style="border:1px solid #f52929;border-radius:1rem;padding:3%;padding-top:3rem;" method="POST">
 
  <br>
        <div class="row">
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                      </div>
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_name" value="<?php echo $row500["EVENT_NAME"]; ?>" disabled>
                    </div>
                </div>
           
                <div class="col-sm"></div>
              
                    <div class="col-sm-5">
                       <div class="input-group mb-3">
                         <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                       </div>
                       <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="level" value="<?php echo $row500["LEVEL"]; ?>" disabled>
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
                         <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_type" value="<?php echo $row500["EVENT_TYPE"]; ?>" disabled>
                         </div>
                      </div>
                  
                       <div class="col-sm-1"></div>
                       <div class="col-sm-5">

                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Prize Won</span>
                       </div>
          
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $row500["PRIZE_WON"]; ?>">View Document</a>
                       
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
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $row500["CERTIFICATE"]; ?>">View Document</a>
                       </div>
                       </div>
                       <div class="col-sm"></div>
        </div>

    </form>
    <br>
    <?php
    }
    }
    ?>
</div>
</div>
</div> 
</div>                        
<?php
}
else
{
?>
    
<div class="wrapper">
        <nav id="sidebar">
        <div class="sanskruti" style="height:5000px;">
            <div class="sidebar-header">
                <h2>DY Patil Dentistry</h2>
                <!-- <div id="hide"><span class="fas fa-user" style="color:green;"></span><?php echo " ".$email; ?></div> -->
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
                    <button type="button" id="sidebarCollapse" class="sidebtn"  style="width:3rem;">
                        <i class="fas fa-bars"></i>
                        <span></span>
                    </button>
                    <div id="enroll"><span class="fas fa-user" style="color:green;"></span><b> <?php echo $id; ?></b></div>
                </div>
            </nav>

            <div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
<div class="row">
  <h1 id="box">Personal Details</h1>
  </div>


  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:5rem;" enctype="multipart/form-data" >
  <div class="row">
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
           </div>
           <input type="text" disabled  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="f_name"  value="<?php echo $row['F_NAME']; ?>">
         </div>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
           </div>
           <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="m_name" value="<?php echo $row['M_NAME']; ?>">
           </div>
     </div>
           <div class="col-sm-1"></div>

  </div>

 

  <div class="row">
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
           </div>
           <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="l_name" value="<?php echo $row['L_NAME']; ?>">
           </div>
      </div>
  </div>
  <br>
  <div class="row">
        <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Father's Name</span>
            </div>
            <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="father_name" value="<?php echo $row['FATHER_NAME']; ?>">
            </div>
        </div>
      <div class="col-sm-1"></div>
       <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Mother's Name</span>
            </div>
            <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mother_name" value="<?php echo $row['MOTHER_NAME']; ?>">
            </div>
      </div>
      <div class="col-sm-1"></div>

  </div>
  <div class="row">
        <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Reg. Number</span>
            </div>
            <input type="text" disabled  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="reg_no" value="<?php echo $row['REG_NO']; ?>">
            </div>
        </div>
      <div class="col-sm-1"></div>
     <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
            </div>
            <input type="text"   class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="gender" value="<?php echo $row['GENDER']; ?>" disabled>
            </div>
        </div>
        <div class="col-sm-1"></div>

  </div>
  
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Birth Date</span>
          </div>
          <input  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dob" value="<?php echo $row['DOB']; ?>" disabled>
          </div>
        </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Birthplace</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="birth_place" value="<?php echo $row['BIRTH_PLACE']; ?>">
          </div>
      </div>
      <div class="col-sm-1"></div>

  </div>
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Blood Group</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="blood_grp" value="<?php echo $row['BLOOD_GRP']; ?>">
          </div>
      </div>
  </div>
  <br>

  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">PAN Number</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pancard" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" value="<?php echo $row['PANCARD']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Aadhar Number</span>
          </div>
          <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="aadhar" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}" value="<?php echo $row['AADHAR']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
  </div>
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Passport Number</span>
          </div>
          <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="passport" pattern="[A-Z]{1}[0-9]{7}" value="<?php echo $row['PASSPORT']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Parent's Pancard Number</span>
          </div>
          <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="parent_pancard" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" value="<?php echo $row['PARENT_PANCARD']; ?>">
          </div>
        </div>
      <div class="col-sm-1"></div>
  </div>
  <br>

  <div class="row">
       <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Religion</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="religion" value="<?php echo $row['RELIGION']; ?>">
          </div>
      </div>
      <div class="col-sm-1"></div>
     <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Caste Reservation</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="reservation" value="<?php echo $row['RESERVATION']; ?>">
          </div>
      </div>
          <div class="col-sm-1"></div>
  </div>
  
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Caste</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="caste" value="<?php echo $row['CASTE']; ?>">
          </div>
        </div>
      <div class="col-sm-1"></div>
       <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="category" value="<?php echo $row['CATEGORY']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
  </div>
  <br>
  <div class="row">
        <div class="col-sm-7">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Photo</span>
          </div>
          <input  type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="photo">
          <a target="_blank" href=" <?php if($image!=NULL)
          {
             echo $image; 
          }
          else echo "#"; ?> " class="btn btn-secondary  active" aria-pressed="true"><i class="
          <?php 
          if($image!=NULL)
          {
             echo 'fas fa-eye'; 
          }
          else echo 'fas fa-eye-slash'; 
          ?>" aria-hidden="true"></i> <?php echo $msg; ?> </a>
        </div>
    </div>
        
  </div>

  </form>
</div>
</div>
<!-- CONTACT DETAILS  -->
  <div class="d-flex justify-content-center">
 <div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box1">Contact Details</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
  <br>
  <div class="row">
     <div class="col-sm-12">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Permanent Address</span>
           </div>
           <input textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="per_address" id="per_address" value="<?php echo $row100['PER_ADDRESS']; ?>" disabled>
         </div>
     </div>
  </div>
  <div class="row">
     <div class="col-sm-12">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Present Residencial Address</span>
           </div>
           <input textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="current_add" id="current_add"  value="<?php echo $row100['CURRENT_ADD']; ?>" disabled >
         </div>
     </div> 
  </div>
  <br>
  <div class="row">
     <div class="col-sm-5">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Domicile State</span>
           </div>
           <input textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dom_state" id="dom_state"  value="<?php echo $row100['DOM_STATE']; ?>" disabled >
         </div>
     </div>
  </div>
  <br>
  <div class="row">
         <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Student Contact Number</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="studentnumber" id="contact_no1" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row100['STUDENTNUMBER']; ?>">
            </div>
         </div>
         <div class="col-sm-1"></div>

         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Student Email ID</span>
            </div>
            <input disabled type="email"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="studentemail" value="<?php echo $row100['STUDENTEMAIL']; ?>">
            </div>
         </div>
     </div>

     <div class="row">
          <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Father's Contact Number</span>
            </div>
            <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fathernumber"id="contact_no2" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row100['FATHERNUMBER']; ?>">
            </div>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Father's Email ID</span>
            </div>
            <input type="email" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fatheremail" value="<?php echo $row100['FATHEREMAIL']; ?>">
            </div>
          </div>
          
     </div>
     <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Mother's Contact Number</span>
          </div>
          <input type="text" disabled class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mothernumber" id="contact_no3" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row100['MOTHERNUMBER']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>

        <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Mother's Email ID</span>
          </div>
          <input type="email" disabled  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="motheremail" value="<?php echo $row100['MOTHEREMAIL']; ?>">
          </div>
        </div>
        
   </div>
  </form>
</div>
</div>

<!-- COLLEGE DETAILS -->
<?php
$query101="SELECT * FROM medical.college_bds WHERE ID='$id' ";
$result101=mysqli_query($conn,$query101);
$row101=mysqli_fetch_array($result101);

$query102="SELECT * FROM medical.college_mds WHERE ID='$id' ";
$result102=mysqli_query($conn,$query102);
$row102=mysqli_fetch_array($result102); 

$query103="SELECT * FROM medical.college_phd WHERE ID='$id' ";
$result103=mysqli_query($conn,$query103);
$row103=mysqli_fetch_array($result103); 

$query104="SELECT * FROM medical.college_fellowship WHERE ID='$id' ";
$result104=mysqli_query($conn,$query104);
$row104=mysqli_fetch_array($result104); 

if($row101['NAME_COLLEGE_10']!=NULL && $row102('NAME_COLLEGE_10')==NULL && $row103('NAME_COLLEGE_10')==NULL && $row104('NAME_COLLEGE_10')==NULL )
{
?>
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box6" >College Details BDS</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >

  <br>  
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th </h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row101['NAME_COLLEGE_10']; ?>" disabled>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row101['NAME_BOARD_10']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row101['YEAR_10']; ?>" disabled>
          </div>
          </div>
     </div>
         


    <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">HSC- 12th</h5>
     </div>
    <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row101['NAME_COLLEGE_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row101['NAME_BOARD_12']; ?>"disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row101['YEAR_12']; ?>"disabled>
          </div>
          </div>
     </div>

</form>
</div>
</div>

<?php    
}
else if($row102['NAME_COLLEGE_10']!=NULL && $row103('NAME_COLLEGE_10')==NULL && $row104('NAME_COLLEGE_10')==NULL )
{
?>

<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box6">College Details MDS</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;">

    <br>
    
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row102['NAME_COLLEGE_10']; ?>" disabled>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row102['NAME_BOARD_10']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row102['YEAR_10']; ?>" disabled>
          </div>
          </div>
     </div>
         


     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">HSC- 12th</h5>
     </div>
    <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row102['NAME_COLLEGE_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row102['NAME_BOARD_12']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row102['YEAR_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">BDS</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row102['NAME_COLLEGE_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row102['NAME_BOARD_BDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row102['YEAR_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
</form>
</div>
</div>

<?php 
}
else if($row103['NAME_COLLEGE_10']!=NULL &&  $row104('NAME_COLLEGE_10')==NULL )
{
?>

<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box6">College Details Phd</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
    <br>
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row103['NAME_COLLEGE_10']; ?>" disabled>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row103['NAME_BOARD_10']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row103['YEAR_10']; ?>" disabled>
          </div>
          </div>
     </div>
         


     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">HSC- 12th</h5>
     </div>
    <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row103['NAME_COLLEGE_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row103['NAME_BOARD_12']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row103['YEAR_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">BDS</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row103['NAME_COLLEGE_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row103['NAME_BOARD_BDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row103['YEAR_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">MDS</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_mds" value="<?php echo $row103['NAME_COLLEGE_MDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_mds" value="<?php echo $row103['NAME_BOARD_MDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_mds" value="<?php echo $row103['YEAR_MDS']; ?>" disabled>
          </div>
          </div>
     </div><br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">Any Other(Optional)</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_other" value="<?php echo $row103['NAME_COLLEGE_OTHER']; ?>" disabled >
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_other" value="<?php echo $row103['NAME_BOARD_OTHER']; ?>" disabled >
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_other" value="<?php echo $row103['YEAR_OTHER']; ?>" disabled >
          </div>
          </div>
     </div>

</form>
</div>
</div>

<?php 
}
else if($row104['NAME_COLLEGE_10']!=NULL)
{
?>

<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box6">College Details</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;">
    <br>
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row104['NAME_COLLEGE_10']; ?>" disabled>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row104['NAME_BOARD_10']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row104['YEAR_10']; ?>" disabled>
          </div>
          </div>
     </div>
         


     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">HSC- 12th</h5>
     </div>
    <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row104['NAME_COLLEGE_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row104['NAME_BOARD_12']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row104['YEAR_12']; ?>" disabled>
          </div>
          </div>
     </div>
     <br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">BDS</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row104['NAME_COLLEGE_BDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row104['NAME_BOARD_BDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row104['YEAR_BDS']; ?>" disabled>
          </div>
          </div>
     </div><br>

     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">MDS(Optional)</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_mds" value="<?php echo $row104['NAME_COLLEGE_MDS']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_mds" value="<?php echo $row104['NAME_BOARD_MDS']; ?>" disabled>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_mds" value="<?php echo $row104['YEAR_MDS']; ?>" disabled >
          </div>
          </div>
     </div><br>
     <div class="row">
         <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">Any Other(Optional)</h5>
     </div>
     <br>
     <div class="row">
          <div class="col-sm-12">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_other" value="<?php echo $row104['NAME_COLLEGE_OTHER']; ?>" disabled>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_other" value="<?php echo $row104['NAME_BOARD_OTHER']; ?>" disabled >
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_other" value="<?php echo $row104['YEAR_OTHER']; ?>" disabled >
          </div>
          </div>
     </div>
</form>
</div>
</div>

<?php 
}
?>

<!-- SCHOLARSHIP-->
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box2">Scholarship </h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;">

  <br>
  <div class="row">
            <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Scholarship Details</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="scholarship_name" value="<?php echo $row200['SCHOLARSHIP']; ?>" disabled>
            </div>
        </div>
     </div>


  <div class="row">
  
        <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Agency Name</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="agency" value="<?php echo $row200['AGENCY_NAME']; ?>" disabled>
            </div>
        </div>


    </div>

   <div class="row">
         <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Scholarship Amount</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" value="<?php echo $row200['SCHOLARSHIP_AMT']; ?>" disabled>
            </div>
         </div>
     </div>
</form>
</div>
</div>
<!--documents-->
<center>
<?php 
        $query201="SELECT * FROM bds_document WHERE ID='$id'";
        $result201=mysqli_query($conn,$query201);
        $row201=mysqli_fetch_array($result201);

        $query202="SELECT * FROM mds_document WHERE ID='$id'";
        $result202=mysqli_query($conn,$query202);
        $row202=mysqli_fetch_array($result202);

        $msg1="Not Uploaded";
        $msg2="View Uploaded File";

        if($row201['ADMIT_CARD']!=NULL && $row202['ADMIT_CARD'] == NULL ){
?>
        <div class="d-flex justify-content-center">
        <div class="container" style="margin-top:2rem;">
        <div class="row">
        <h1 id="box1">BDS Documents</h1>
        </div>
        <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
        <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">NEET Admit Card</span>
          </div>
          <a target="<?php if($row201['ADMIT_CARD']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['ADMIT_CARD']==NULL){
            echo '#';
          }else{
            echo $row201['ADMIT_CARD'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['ADMIT_CARD']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['ADMIT_CARD']==NULL){
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
          <a target="<?php if($row201['RANK_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['RANK_LETTER']==NULL){
            echo '#';
          }else{
            echo $row201['RANK_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button"  >
          <i class=" <?php 
          if($row201['RANK_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['RANK_LETTER']==NULL){
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
          <a target="<?php if($row201['ALT_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['ALT_LETTER']==NULL){
            echo '#';
          }else{
            echo $row201['ALT_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['ALT_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['ALT_LETTER']==NULL){
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
          <a target="<?php if($row201['ADM_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['ADM_LETTER']==NULL){
            echo '#';
          }else{
            echo $row201['ADM_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['ADM_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['ADM_LETTER']==NULL){
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
          <a target="<?php if($row201['TENTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['TENTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row201['TENTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['TENTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['TENTH_MKS']==NULL){
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
          <a target="<?php if($row201['TENTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['TENTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['TENTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['TENTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['TENTH_PASS_CERTI']==NULL){
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
          <a target="<?php if($row201['TWELTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['TWELTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row201['TWELTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['TWELTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['TWELTH_MKS']==NULL){
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
          <a target="<?php if($row201['TWELTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['TWELTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['TWELTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['TWELTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['TWELTH_PASS_CERTI']==NULL){
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
          <span class="input-group-text" id="inputGroup-sizing-default">College Leaving Certificate</span>
          </div>
          <a target="<?php if($row201['CLG_LEAVE_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['CLG_LEAVE_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['CLG_LEAVE_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['CLG_LEAVE_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['CLG_LEAVE_CERTI']==NULL){
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
                        <span class="input-group-text" id="inputGroup-sizing-default">Migration Certificate</span>
                    </div>
                    <a target="<?php if($row['MIGRATION_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['MIGRATION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['MIGRATION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['MIGRATION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['MIGRATION_CERTI']==NULL){
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
          <span class="input-group-text" id="inputGroup-sizing-default">Disability Certificate</span>
          </div>
          <a target="<?php if($row201['DISABILITY_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row201['DISABILITY_CERTI']==NULL){
            echo '#';
          }else{
            echo $row201['DISABILITY_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row201['DISABILITY_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row201['DISABILITY_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
          </div>
    </div>

    

     
          
    
</form>


        <?php } 
        
        else if($row202['ADMIT_CARD']!=NULL){
        ?>
        <div class="d-flex justify-content-center">
        <div class="container" style="margin-top:2rem;">
        <div class="row">
        <h1 id="box3">MDS documents</h1>
        </div>
        <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
        
        <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">NEET Admit Card</span>
          </div>
          <a target="<?php if($row202['ADMIT_CARD']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['ADMIT_CARD']==NULL){
            echo '#';
          }else{
            echo $row202['ADMIT_CARD'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['ADMIT_CARD']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['ADMIT_CARD']==NULL){
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
          <a target="<?php if($row202['RANK_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['RANK_LETTER']==NULL){
            echo '#';
          }else{
            echo $row202['RANK_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button"  >
          <i class=" <?php 
          if($row202['RANK_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['RANK_LETTER']==NULL){
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
          <a target="<?php if($row202['ALT_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['ALT_LETTER']==NULL){
            echo '#';
          }else{
            echo $row202['ALT_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['ALT_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['ALT_LETTER']==NULL){
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
          <a target="<?php if($row202['ADM_LETTER']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['ADM_LETTER']==NULL){
            echo '#';
          }else{
            echo $row202['ADM_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['ADM_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['ADM_LETTER']==NULL){
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
          <a target="<?php if($row202['TENTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['TENTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row202['TENTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['TENTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['TENTH_MKS']==NULL){
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
          <a target="<?php if($row202['TENTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['TENTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['TENTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['TENTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['TENTH_PASS_CERTI']==NULL){
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
          <a target="<?php if($row202['TWELTH_MKS']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['TWELTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row202['TWELTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['TWELTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['TWELTH_MKS']==NULL){
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
          <a target="<?php if($row202['TWELTH_PASS_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['TWELTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['TWELTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['TWELTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['TWELTH_PASS_CERTI']==NULL){
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
            <a target="<?php if($row202['FIRST_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['FIRST_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row202['FIRST_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['FIRST_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['FIRST_BDS_MARKSHEET']==NULL){
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
            <a target="<?php if($row202['SECOND_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['SECOND_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row202['SECOND_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['SECOND_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['SECOND_BDS_MARKSHEET']==NULL){
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
            <a target="<?php if($row202['THIRD_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['THIRD_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row202['THIRD_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['THIRD_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['THIRD_BDS_MARKSHEET']==NULL){
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
            <a target="<?php if($row202['FOURTH_BDS_MARKSHEET']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['FOURTH_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row202['FOURTH_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['FOURTH_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['FOURTH_BDS_MARKSHEET']==NULL){
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
            <span class="input-group-text" id="inputGroup-sizing-default">Provisional Passing Certificate</span>
            </div>
            <a target="<?php if($row202['PROVISION_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['PROVISION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['PROVISION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['PROVISION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['PROVISION_CERTI']==NULL){
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
              <a target="<?php if($row202['ATTEMPT_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['ATTEMPT_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['ATTEMPT_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['ATTEMPT_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['ATTEMPT_CERTI']==NULL){
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
            <a target="<?php if($row202['BDS_DEG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['BDS_DEG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['BDS_DEG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['BDS_DEG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['BDS_DEG_CERTI']==NULL){
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
                <a target="<?php if($row202['CLG_INTERN_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['CLG_INTERN_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['CLG_INTERN_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['CLG_INTERN_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['CLG_INTERN_CERTI']==NULL){
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
            <a target="<?php if($row202['DCI_RECOG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['DCI_RECOG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['DCI_RECOG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['DCI_RECOG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['DCI_RECOG_CERTI']==NULL){
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
                <a target="<?php if($row202['DCI_REG_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['DCI_REG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['DCI_REG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['DCI_REG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['DCI_REG_CERTI']==NULL){
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
          <a target="<?php if($row202['CLG_LEAVE_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['CLG_LEAVE_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['CLG_LEAVE_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['CLG_LEAVE_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['CLG_LEAVE_CERTI']==NULL){
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
                    <a target="<?php if($row202['MIGRATION_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['MIGRATION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['MIGRATION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['MIGRATION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['MIGRATION_CERTI']==NULL){
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
          <a target="<?php if($row202['DISABILITY_CERTI']!=NULL){echo '_blank';} else {echo '_self';}?>" href=" <?php 
          if($row202['DISABILITY_CERTI']==NULL){
            echo '#';
          }else{
            echo $row202['DISABILITY_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row202['DISABILITY_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row202['DISABILITY_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
          </div>
          </div>
    </div>

    
          
    
</form>



        <?php }?>

        

</center>
<!-- PROGRESS OF STUDENT -->
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box3">Progress of Student</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" >
  
  <br>
  <nav>
    <div class="row">
        
        <div class="col-sm-5">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Year</span>
                </div>
                <input type="number" min="1" max="5" class=" form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="year" value="<?php echo $row300['YEAR']; ?>" disabled>
            
            </div>
        </div>
        <div class="col-sm-1"></div>
    
        <div class="col-sm-5">
            <div class="input-group mb-3 ">
                <div class="input-group-prepend ">
                    <span class="input-group-text " id="inputGroup-sizing-default ">Marks obtained</span>
                </div>
                <input type="number" min="0" max="100" class=" form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="marks_obtained" value="<?php echo $row300['MARKS_OBTAINED']; ?>" disabled>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        
        <div class="col-sm-5 ">
           <!--  <div class="input-group mb-3 ">
                <div class="input-group-prepend ">
                    <label class="input-group-text " id="inputGroup-sizing-default ">Status</label>
                </div>
                <select class="custom-select " id="inputGroupSelect01" name="status" disabled>
                        <option selected value="">Choose... </option>
                        <option value="Pass">Pass</option>
                        <option value="ATKT">ATKT</option>
                        <option value="Fail">Fail</option>
                    </select>
            </div> -->
              <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text " id="inputGroup-sizing-default ">Status</span>
                    </div>
                    <input type="text" class="form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="status" value="<?php echo $row300['STATUS']; ?>" disabled>
                </div>
        </div>
        <div class="col-sm-1"></div>
    
            <div class="col-sm-5">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text " id="inputGroup-sizing-default ">Revaluation</span>
                    </div>
                    <input type="text" class="form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="revaluation" value="<?php echo $row300['REVALUATION']; ?>" disabled>
                </div>
            </div>
        <div class="col-sm"></div>
        </div>
        <div class="row">
            
            <div class="col-sm-5">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text " id="inputGroup-sizing-default ">Number of Attempts</span>
                    </div>
                    <input type=" " class="form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="no_attempts" value="<?php echo $row300['NO_ATTEMPTS']; ?>" disabled>

                </div>
            </div>
          <div class="col-sm"></div>  
        </div>
        </nav>
        
  </form>
</div>
</div>
<!-- ACADEMIC ACHIEVEMENTS -->
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box4">Academic Achievement</h1>
  </div>
   <?php
        include "signupdb.php";
        $sql400 = "SELECT * FROM `academic_achievements` WHERE ID='$id'";
        $result400 = mysqli_query($conn,$sql400);
        // echo mysqli_num_rows($result);
        if (mysqli_num_rows($result400) > 0 )
        {
            
            while( $row400 = mysqli_fetch_assoc($result400))
            {
            ?> 
  <form style="border:1px solid #f52929;border-radius:1rem;padding:3%;padding-top:3rem;">
 
  <br>
        <div class="row">
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                      </div>
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_name" value="<?php echo $row400["EVENT_NAME"]; ?>" disabled>
                    </div>
                </div>
           
                <div class="col-sm"></div>
              
                    <div class="col-sm-5">
                       <div class="input-group mb-3">
                         <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                       </div>
                       <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="level" value="<?php echo $row400["LEVEL"]; ?>" disabled>
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
                         <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="presentation_type" value="<?php echo $row400["PRESENTATION_TYPE"]; ?>" disabled>
                         </div>
                      </div>
                  
                       <div class="col-sm-1"></div>
                       <div class="col-sm-5">

                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Prize Won</span>
                       </div>
                       <!--<input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="prize_won">-->
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $row400["PRIZE_WON"]; ?>">View Document</a>
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
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $row400["CERTIFICATE"]; ?>">View Document</a>
                       </div>
                       </div>
                       <div class="col-sm"></div>
        </div>
    </form>
    <br>
    <?php
}
}
    ?>
 </div>
 </div>  
<!--  EXTRACURRICULAR ACTIVITIES -->
<div class="d-flex justify-content-center">
<div class="container" style="margin-top:2rem;">
  <div class="row">
  <h1 id="box5">Extracurricular</h1>
  </div>
   <?php
 
    $sql500 = "SELECT * FROM `extracurricular` WHERE ID='$id'";
    $result500 = mysqli_query($conn,$sql500);
    // echo mysqli_num_rows($result);
    if (mysqli_num_rows($result500) > 0 )
    {
        
      while( $row500 = mysqli_fetch_assoc($result500))
      {
    ?> 
  <form style="border:1px solid #f52929;border-radius:1rem;padding:3%;padding-top:3rem;" method="POST">
 
  <br>
        <div class="row">
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                      </div>
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_name" value="<?php echo $row500["EVENT_NAME"]; ?>" disabled>
                    </div>
                </div>
           
                <div class="col-sm"></div>
              
                    <div class="col-sm-5">
                       <div class="input-group mb-3">
                         <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                       </div>
                       <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="level" value="<?php echo $row500["LEVEL"]; ?>" disabled>
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
                         <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_type" value="<?php echo $row500["EVENT_TYPE"]; ?>" disabled>
                         </div>
                      </div>
                  
                       <div class="col-sm-1"></div>
                       <div class="col-sm-5">

                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Prize Won</span>
                       </div>
          
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $row500["PRIZE_WON"]; ?>">View Document</a>
                       
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
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $row500["CERTIFICATE"]; ?>">View Document</a>
                       </div>
                       </div>
                       <div class="col-sm"></div>
        </div>

    </form>
    <br>
    <?php
    }
    }
    ?>
</div>
</div>
           
        
        
        

        </div>
        </div>
<?php

}

?>


</body>











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
</html>
