
   <?php
    // session_start();
    // $id = $_SESSION['id'];
    // $email =  $_SESSION['email'];
    $app_id = $_GET['app_id'];
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

            $sql    = "SELECT * FROM student_details WHERE ID='$app_id'";
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

             $sql1    = "SELECT * FROM contact_details WHERE ID='$app_id'";
                $result = mysqli_query($conn,$sql1) ;
                $row1 = mysqli_fetch_array($result);

             $sql2    = "SELECT * FROM scholarship WHERE ID='$app_id'";
                $result = mysqli_query($conn,$sql2) ;
                $row2 = mysqli_fetch_array($result);

             $sql3    = "SELECT * FROM progress_student WHERE ID='$app_id'";
                $result = mysqli_query($conn,$sql3) ;
                $row3 = mysqli_fetch_array($result);

             $sql4    = "SELECT * FROM bds_document WHERE ID='$app_id'";
                $result = mysqli_query($conn,$sql4) ;
                $row4 = mysqli_fetch_array($result);
                $msg1="Not Uploaded";
                $msg2="View Uploaded File";

             $sql5 = "  SELECT * FROM mds_document WHERE ID='$app_id'  ";
                $result = mysqli_query($conn,$sql5) ;
                $row5 = mysqli_fetch_array($result);
                $msg1="Not Uploaded";
                $msg2="View Uploaded File";
                
             $sql6    = "SELECT * FROM college_bds WHERE ID='$app_id'";
                $result = mysqli_query($conn,$sql6) ;
                $row6 = mysqli_fetch_array($result);

             $sql7    = "SELECT * FROM college_mds WHERE ID='$app_id'";
                $result = mysqli_query($conn,$sql7) ;
                $row7 = mysqli_fetch_array($result);

             $sql8    = "SELECT * FROM college_phd WHERE ID='$app_id'";
                $result = mysqli_query($conn,$sql8) ;
                $row8 = mysqli_fetch_array($result);

             $sql9    = "SELECT * FROM college_fellowship WHERE ID='$app_id'";
                $result = mysqli_query($conn,$sql9) ;
                $row9 = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verify</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>    


  <title>Verify</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli:300,400,500,700,800,900&amp;display=swap'>
  <link rel='stylesheet' href='css/progress.css'>

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

    <script>
  window.console = window.console || function(t) {};
</script>
<!--Scripts for checkbox -->
<script src="verifierJavascript.js"></script>
  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
    <style>
    
    @media screen and (max-width:500px){
    button.sidebtn{
        margin-left:1.5rem;
    }
    }
    button.sidebtn{
    background-image: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27 100%);
    border:solid 1px #b90505;
    border-radius:5px;color:#ffffff;
    width:8rem;
    height:2.5rem

}
button.btn:hover{background-position: right;
}
button.btn:active{background-position: right;
}

@media screen and (min-width:500px){

  form, #from1{
        border:1px transparent #f52929;
        border-radius:1.5rem;
        padding-left:0rem;
      }
}

@media screen and (max-width:500px){

form, #form1  {
      border:1px transparent #f52929;
      border-radius:1.5rem;
      padding-left:0rem;
    }
}




body {
  /* font-family: 'Muli', sans-serif;
  color: #828282; */
  background: #f9f9f9;
}
body h1 {
  font-size: 60px;
  font-weight: 900;
  text-transform: uppercase;
  margin-bottom: 10px;
  text-align: center;
  background-color: #07a;
  -webkit-background-clip: text;
          background-clip: text;
  color: transparent;
  text-shadow: rgba(255, 255, 255, 0.5) 0px 3px 3px;
}
body .more-info {
  text-align: center;
  margin-bottom: 40px;
}
body .more-info a {
  color: #828282;
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
body .more-info a:hover {
  color: #07a;
}
body .accordion {
  width: 95%;
  height: 400px;
  position: relative;
  margin: 0 auto;
}
body .accordion details {
  font-size: 18px;
  padding: 20px;
  margin: 10px;
  border-radius: 15px;
  background: #f9f9f9;
  box-shadow: 4px 4px 4px 0px #f6dddd inset, -4px -4px 4px 0px white inset;
  cursor: pointer;
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
/* body.accordion details.with-code[open] {
  /* height: 100%; 
} */
body .accordion details:not([open]) {
  /* height: 5%;  */
  padding:1rem;
}
/* body.accordion details[open] {
    height: 300%; 
} */
body .accordion details summary {
  padding: 5px;
  padding-top: 0;
  outline: none;
}
body .accordion details .tag {
  color: #07a;
  font-weight: 700;
}
body .accordion details hr {
  border: 0;
  height: 2px;
  background-image: -webkit-linear-gradient(left, white, rgb(247,233,233), white);
}
body .accordion details p {
  font-size: 16px;
  line-height: 1.2em;
  cursor: auto;
  -webkit-animation: appear 1s ease;
          animation: appear 1s ease;
}
body .accordion details p.note {
  padding: 10px;
  background: rgba(0, 119, 170, 0.07);
  border-radius: 15px;
  box-shadow: 4px 4px 4px 0px rgba(0, 119, 170, 0.07) inset, -4px -4px 4px 0px white inset;
}
body .accordion details pre {
  font-size: 16px;
  padding: 20px;
  cursor: auto;
  border-radius: 15px;
  box-shadow: 4px 4px 4px 0px rgba(0, 119, 170, 0.07), -4px -4px 4px 0px white;
  -webkit-animation: appear 1.5s ease;
          animation: appear 1.5s ease;
}
body .accordion details pre .event-listener {
  color: #dd4a68;
}
body .accordion details pre .string {
  color: #690;
}
body .accordion details pre .keyword {
  color: #07a;
}

.btn{
    background-image: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27 100%);
    border:solid 1px #b90505;
    border-radius:5px;color:#ffffff;
    width:8rem;
    height:2.5rem;
}

@-webkit-keyframes appear {
  0%, 50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes appear {
  0%, 50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.fa-instagram {
  position: absolute;
  color: #828282;
  top: 3%;
  right: 2%;
  font-size: 38px;
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
  cursor: pointer;
}
.fa-instagram:hover {
  color: #07a;
  font-size: 42px;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 



</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
        <div class="sanskruti" style="height:3800px;">
            <div class="sidebar-header">
                <h2>DY Patil Dentistry</h2>
                <!-- <div id="hide"><span class="fas fa-user" style="color:green;"></span><?php echo " ".$email; ?></div> -->
                <strong>DY</strong>
            </div>
            
            <ul class="list-unstyled components">            
                <li class="active" title="Home">
                    <a href="verhome.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-home"></span>
                        <span id="hide">Home</span>
                        <strong></strong>
                    </a>
                </li>
                <li title="Personal Details">
                    <a href="#" class="sidebar-header" style="height:60px;" >                    
                     <span class="fas fa-user fa"></span>
                        <span3 id="hide">Verification Request</span>
                        <strong></strong>
                    </a>
                </li>
                
                <li title="Contact Details">
                    <a href="verapprove.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-check"></span>
                       <span id="hide">Approved</span> 
                       <strong></strong>
                    </a>  
                </li>
                
                
                <li title="Scholarship">
                    <a href="#" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-sign-out-alt"></span>
                        <span id="hide">Logout</span>
                        <strong></strong>
                    </a>
                </li>

               
            </ul> 
         </div>   
        </nav>
        <!-- Page Content  -->
        <div id="content" style="height:1000px;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="sidebtn" style="width:3rem;">
                        <i class="fas fa-bars"></i>
                        <span></span>
                    </button>
                    <!-- <div id="enroll"><span class="fas fa-user" style="color:green;"></span><b><?php echo " ".$id; ?></b></div> -->
                </div>
            </nav>

  <br>
  <!-- Progress bar-->
    <?php
      $value="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id'";
      $result=mysqli_query($conn,$value);
      $col=mysqli_fetch_array($result);
    
      $value2="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id'";
      $result2=mysqli_query($conn,$value2);
      $col2=mysqli_fetch_array($result2);

      $value3="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id' ";
      $result3=mysqli_query($conn,$value3);
      $col3=mysqli_fetch_array($result3);

      $value4="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id'";
      $result4=mysqli_query($conn,$value4);
      $col4=mysqli_fetch_array($result4);

      $value5="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id'";
      $result5=mysqli_query($conn,$value5);
      $col5=mysqli_fetch_array($result5);

      $value6="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id'";
      $result6=mysqli_query($conn,$value6);
      $col6=mysqli_fetch_array($result6);

      $value7="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id'";
      $result7=mysqli_query($conn,$value7);
      $col7=mysqli_fetch_array($result7);

      $value8="SELECT * FROM submit_status WHERE APPLICATION_ID='$app_id'";
      $result8=mysqli_query($conn,$value8);
      $col8=mysqli_fetch_array($result8);

      



      // $value2=$_POST['status2'];
      // $value3=$_POST['status3'];
      // $value4=$_POST['status4'];
      // $value5=$_POST['status5'];
      // $value6=$_POST['status6'];
      // $value7=$_POST['status7'];
      // $value8=$_POST['status8'];
      // $value9=$_POST['status9'];
      // $value10=$_POST['status10'];
      // $value11=$_POST['status11'];
      // $value12=$_POST['status12'];
    ?>

    

<div class="navigation_menu" id="navigation_menu">
  <ul class="navigation_tabs" id="navigation_tabs">
    <li class="<?php 
                if($col['STUDENT_DETAILS']==NULL)
                 {
                   echo 'tab_active';
                  }
                 else
                 {
                  echo 'tab_inactive';
                  }
                  ?>" >
        <a href="#PD">Personal Details</a>
    </li>
    <li class="<?php
                  if($col2['CONTACT_DETAILS']==NULL)
                  {
                    echo 'tab_active';
                  }
                  else
                  {
                    echo 'tab_inactive';
                  }
                  ?>
                    ">
        <a href="#CD">Contact Details</a>
    </li>
    <li class="<?php
                if($col3['COLLEGE_BDS']==NULL &&  $col3['COLLEGE_MDS']==NULL && $col3['COLLEGE_PHD']==NULL && $col3['COLLEGE_FELLOWSHIP']==NULL  )
                {
                  echo 'tab_active';
                }
                else
                {
                  echo 'tab_inactive';
                }
                ?>">
        <a href="#">College Details</a>
    </li>
    <li class="<?php
                if($col4['SCHOLARSHIP']==NULL)
                {
                  echo 'tab_active';
                }
                else
                {
                  echo 'tab_inactive';
                }
                ?>">
        <a href="#">Scholarship</a>
    </li>
     <li class="<?php
                  if($col5['BDS_DOCUMENTS']==NULL && $col5['MDS_DOCUMENTS']==NULL)
                  {
                    echo 'tab_active';
                  }
                  else{
                    echo 'tab_inactive';
                  }
                  ?>">
        <a href="#">Documents</a>
    </li>
     <li class="<?php
                if($col6['PROGRESS_STUDENT']==NULL)
                {
                  echo 'tab_active';
                }
                else{
                  echo 'tab_inactive';
                }
                ?>">
        <a href="#">Progress</a>
    </li>
    <li class="<?php 
                if($col7['ACADEMIC']==NULL)
                {
                  echo 'tab_active';
                }
                else
                {
                  echo 'tab_inactive';
                }
                ?>">
        <a href="#">Academics</a>
    </li>
    <li class="<?php
                if($col8['EXTRACURRICULAR']==NULL)
                {
                  echo 'tab_active';
                }
                else
                {
                  echo 'tab_inactive';
                }
                ?>">
        <a href="#"> Extracurricular</a>
    </li>
    
  </ul>
</div>


<br>

            <div style="border-radius:5px;box-shadow: 1px 1px 3px #b11616; height:3500px;">

                <br>
                
            <div class="accordion">
  <details>
    <summary id=PD>Personal Details</summary>
    <hr />
   
    <!-- <p>Creates a disclosure widget in which information is visible only when the widget is toggled into an "open" state. A summary or label can be provided using the <span class="tag">&lt;summary&gt;</span> element.</p> -->

 <!--    <form action="" method="POST" enctype="multipart/form-data" >
   -->
  
  <div class="row">
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text"  id="f_name">First Name</span>
           </div>
           <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="f_name"  value="<?php echo $row['F_NAME']; ?>">
          
           <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input"  class="check1" id="cb1" onclick="jquery1()">
           </div>
           </div>      
      </div>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="m_name">Middle Name</span>
           </div>
           <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="m_name" value="<?php echo $row['M_NAME']; ?>">

           <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb2" onclick="jquery2()" >
           </div>
           </div>
           </div>
     </div>
           <div class="col-sm-1"></div>

  </div>

 

  <div class="row">
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="l_name" >Last Name</span>
           </div>
           <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="l_name" value="<?php echo $row['L_NAME']; ?>">

           <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb3" onclick="jquery3()">
           </div>
           </div>
           </div>
      </div>
  </div>
  <br>
  <div class="row">
        <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="father_name">Father's Name</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="father_name" value="<?php echo $row['FATHER_NAME']; ?>">

            <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb4" onclick="jquery4()">
           </div>
           </div>
            </div>
        </div>
      <div class="col-sm-1"></div>
       <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="mother_name">Mother's Name</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mother_name" value="<?php echo $row['MOTHER_NAME']; ?>">

            <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb5" onclick="jquery5()" >
           </div>
           </div>
            </div>
      </div>
      <div class="col-sm-1"></div>

  </div>
  <div class="row">
        <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="reg">Reg. Number</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="reg_no" value="<?php echo $row['REG_NO']; ?>">

            <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb6" onclick="jquery6()">
           </div>
           </div>
            </div>
        </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="gender">Gender</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="gender" value="<?php echo $row['GENDER']; ?>">

            <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb7" onclick="jquery7()">
           </div>
           </div>
            </div>
        </div>
      
        <div class="col-sm-1"></div>

  </div>
  
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="bdate">Birth Date</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dob" value="<?php echo $row['DOB']; ?>">

          <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb8" onclick="jquery8()">
           </div>
           </div>
          </div>
        </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="bplace">Birthplace</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="birth_place" value="<?php echo $row['BIRTH_PLACE']; ?>">

          <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb9" onclick="jquery9()">
           </div>
           </div>
          </div>
      </div>
      <div class="col-sm-1"></div>

  </div>
  <div class="row">
        <div class="col-sm-5">
          
        
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="blood_grp">Blood Group</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="blood_grp" value="<?php echo $row['BLOOD_GRP']; ?>">

            <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb10" onclick="jquery10()">
           </div>
           </div>
            </div>
        </div>
        </div>
  
  

  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="pan_no">PAN Number</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pancard" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" value="<?php echo $row['PANCARD']; ?>">

          <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb11" onclick="jquery11()">
           </div>
           </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="aadhar">Aadhar Number</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="aadhar" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}" value="<?php echo $row['AADHAR']; ?>">

          <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb12" onclick="jquery12()">
           </div>
           </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
  </div>
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="pass_no">Passport Number</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="passport" pattern="[A-Z]{1}[0-9]{7}" value="<?php echo $row['PASSPORT']; ?>">

          <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb13" onclick="jquery13()" >
           </div>
           </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="par_pan_no">Parent's Pancard Number</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="parent_pancard" pattern="[A-Z]{1}[0-9]{7}" value="<?php echo $row['PARENT_PANCARD']; ?>">

          <div class="input-group-prepend">
           <div class="input-group-text">
           <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb14" onclick="jquery14()">
           </div>
           </div>
          </div>
        </div>
      <div class="col-sm-1"></div>
  </div>
  <br>

  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01" id="religion">Religion</label>
          </div>
          <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="religion" value="<?php echo $row['RELIGION']; ?>">

          <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb15" onclick="jquery15()">
        </div>
        </div>

          </div> 
        </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01" id="caste_res">Caste Reservation</label>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="reservation" value="<?php echo $row['RESERVATION']; ?>">

            <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb16" onclick="jquery16()" >
        </div>
        </div>

          </div> 
          </div>
          <div class="col-sm-1"></div>
  </div>
  
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="caste">Caste</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="caste" value="<?php echo $row['CASTE']; ?>">

          <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb17" onclick="jquery17()" >
        </div>
        </div>
          </div>
        </div>
      <div class="col-sm-1"></div>
       <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="category">Category</span>
          </div>
          <input disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="category" value="<?php echo $row['CATEGORY']; ?>">

          <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb18" onclick="jquery18()" >
        </div>
        </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
  </div>
  <br>
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="photo">Photo</span>
          </div>
          <input disabled type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="photo">

          <a target="_blank"  href=" <?php if($image!=NULL)
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

          <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check1" id="cb19" onclick="jquery19()">
        </div>
        </div>
        </div>
    </div>
        
  </div>

<br>

<center>
	 <form method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="personal_form">
                <input type="radio" name="status" value=10 style="margin:15px;" onclick="personal_func1()" id="a" >
                <label for="a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status" value=11 id="na" onclick="personal_func2()" style="margin:15px ;">
                <label for="na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
               
                <div id="personal_querybox" style="display: none;">
                
                        <h3>Upload appropriate documents of: </h3>
                        <textarea  name="query_box1" id="query_box1" rows="10" form="personal_form" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px;" readonly></textarea><br><br>
                </div>

                <input type="submit" name="personal-submit" value="SUBMIT" style="background-color: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27) ;color:white;font-weight:800;" class="btn">
            </form>
            <br><br><br><br><br>
</center>
 
<!-- </form> -->
</details>


<details>
    <summary id=CD>Contact Details</summary>
    <hr/>
  <br>
  
  <div class="row">
     <div class="col-sm-12">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="perm_addr">Permanent Address</span>
           </div>
           <input disabled textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="per_address" id="per_address" value="<?php echo $row1['PER_ADDRESS']; ?>">
           
        <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb20" onclick="jquery20()"  >
        </div>
        </div>

      </div>
     </div>
  </div>

  
  <div class="row">
     <div class="col-sm-12">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="pres_addr">Present Residencial Address</span>
           </div>
           <input disabled textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="current_add" id="current_add" value="<?php echo $row1['CURRENT_ADD']; ?>" >

           <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb21" onclick="jquery21()"  >
        </div>
        </div>
         </div>
     </div> 
  </div>
  
   <div class="row">
     <div class="col-sm-12">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="domicile">Domicile State</span>
           </div>
           <input disabled textarea row="3"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php  echo $row1['DOM_STATE']; ?>" >

           <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb22" onclick="jquery22()"  >
        </div>
        </div>
         </div>
     </div> 
  </div>
  
    <div class="row">
         <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="std_contact">Student Contact Number</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="studentnumber" id="contact_no1" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row1['STUDENTNUMBER']; ?>">

            <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb23" onclick="jquery23()"  >
        </div>
        </div>
            </div>
         </div>
         <div class="col-sm-1"></div>

         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="std_email">Student Email ID</span>
            </div>
            <input disabled type="email"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="studentemail" value="<?php echo $row1['STUDENTEMAIL']; ?>">

            <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb24" onclick="jquery24()"  >
        </div>
        </div>
            </div>
         </div>
     </div>

     <div class="row">
          <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="father_cont">Father's Contact Number</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fathernumber"id="contact_no2" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row1['FATHERNUMBER']; ?>">

            <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb25" onclick="jquery25()" >
        </div>
        </div>
            </div>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="father_email">Father's Email ID</span>
            </div>
            <input disabled type="email"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fatheremail" value="<?php echo $row1['FATHEREMAIL']; ?>">

            <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb26" onclick="jquery26()" >
        </div>
        </div>
            </div>
          </div>
          
     </div>
     <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="mother_cont">Mother's Contact Number</span>
          </div>
          <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mothernumber" id="contact_no3" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row1['MOTHERNUMBER']; ?>">

          <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb27" onclick="jquery27()" >
        </div>
        </div>
          </div>
        </div>
        <div class="col-sm-1"></div>

        <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="mother_email">Mother's Email ID</span>
          </div>
          <input disabled type="email"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="motheremail" value="<?php echo $row1['MOTHEREMAIL']; ?>">

          <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check2" id="cb28" onclick="jquery28()"  >
        </div>
        </div>
          </div>
        </div>
        
   </div>
   <br>
   <center>
                <form method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="contact_form">              
                <input type="radio" name="status2" value=10 style="margin:15px;" onclick="contact_func1()" id="contact_a" >
                <label for="contact_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status2" value=11 id="contact_na" onclick="contact_func2()" style="margin:15px ;">
                <label for="contact_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="contact_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box2" id="query_box2" form="contact_form" rows="10" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px;" readonly></textarea><br><br>
                </div>

                <input type="submit" name="contact-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
        </form>
    </center>
</details>

  <details class="with-code">
    <summary>College Details</summary>
    <hr />    
    
    <details class="with-code">
    <summary>BDS</summary>
    <hr />
  <br>
  
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th </h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="tenthnameBDS">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row6['NAME_COLLEGE_10']; ?> "required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check3" id="cb29" onclick="jquery29()"  >
            </div>
            </div>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="tenthboardBDS">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row6['NAME_BOARD_10']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check3"  id="cb30" onclick="jquery30()" >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="tenthyearBDS">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row6['YEAR_10']; ?>"required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check3"  id="cb31" onclick="jquery31()"  >
            </div>
            </div>
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
          <span class="input-group-text" id="twelthnameBDS">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row6['NAME_COLLEGE_12']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check3"  id="cb32" onclick="jquery32()"  >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="twelthboardBDS">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row6['NAME_BOARD_12']; ?>"required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check3"  id="cb33" onclick="jquery33()"  >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="twelthyearBDS">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row6['YEAR_12']; ?>"required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check3"  id="cb34" onclick="jquery34()" >
            </div>
            </div>
          </div>
          </div>
     </div>
<br>
   <center>
   	<form  method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="clgBDS_form">
                <input type="radio" name="status3" value=10 style="margin:15px;" onclick="clgBDS_func1()" id="clgBDS_a" >
                <label for="clgBDS_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status3" value=11 id="clgBDS_na" onclick="clgBDS_func2()" style="margin:15px ;">
                <label for="clgBDS_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgBDS_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box3" id="query_box3" form="clgBDS_form" rows="10" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px;" readonly></textarea><br><br>
                </div>

                <input type="submit" name="clgBDS-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
                </form>
            <br><br><br><br><br>
    </center>     

 

    </details>
    <details class="with-code">
    <summary>MDS</summary>
    <hr />

    <br>

  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="tenthnameMDS">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row7['NAME_COLLEGE_10']; ?>"required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4" id="cb35" onclick="jquery35()" >
            </div>
            </div>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="tenthboardMDS">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row7['NAME_BOARD_10']; ?>"required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4"id="cb36" onclick="jquery36()"   >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="tenthyearMDS">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row7['YEAR_10']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4" id="cb37" onclick="jquery37()"  >
            </div>
            </div>
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
          <span class="input-group-text" id="twelthnameMDS">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row7['NAME_COLLEGE_12']; ?>"required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4" id="cb38" onclick="jquery38()"  >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="twelthboardMDS">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row7['NAME_BOARD_12']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4" id="cb39" onclick="jquery39()"   >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="twelthyearMDS">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row7['YEAR_12']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4" id="cb40" onclick="jquery40()"   >
            </div>
            </div>
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
          <span class="input-group-text" id="bdsnameMDS">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row7['NAME_COLLEGE_BDS']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4" id="cb41" onclick="jquery41()"  >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="bdsboardMDS">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row7['NAME_BOARD_BDS']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4" id="cb42" onclick="jquery42()"   >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="bdsyearMDS">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row7['YEAR_BDS']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check4" id="cb43" onclick="jquery43()"   >
            </div>
            </div>
          </div>
          </div>
     </div>

<br>
   <center>
   	<form  method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="clgMDS_form">
                <input type="radio" name="status4" value=10 style="margin:15px;" onclick="clgMDS_func1()" id="clgMDS_a" >
                <label for="clgMDS_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status4" value=11 id="clgMDS_na" onclick="clgMDS_func2()" style="margin:15px ;">
                <label for="clgMDS_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgMDS_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box4" id="query_box4" rows="10" form="clgMDS_form" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" readonly></textarea><br><br>
                </div>

                <input type="submit" name="clgMDS-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
            </form>
    </center>     

     

    </details>
    <details class="with-code">
    <summary>PHD</summary>
    <hr />
    <!-- <p>Which is dispatched to the <span class="tag">&lt;details&gt;</span> element whenever its state changes between open and closed. It is sent after the state is changed, although if the state changes multiple times before the browser can dispatch the event, the events are coalesced so that only one is sent.;</p> -->
   
    <br>
    
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="tenthnamePHD">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row8['NAME_COLLEGE_10']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb44" onclick="jquery44()" >
            </div>
            </div>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="tenthboardPHD">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row8['NAME_BOARD_10']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb45" onclick="jquery45()" >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="tenthyearPHD">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row8['YEAR_10']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb46" onclick="jquery46()" >
            </div>
            </div>
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
          <span class="input-group-text" id="twelthnamePHD">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row8['NAME_COLLEGE_12']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb47" onclick="jquery47()"  >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="twelthboardPHD">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row8['NAME_BOARD_12']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb48" onclick="jquery48()" >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="twelthyearPHD">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row8['YEAR_12']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb49" onclick="jquery49()"  >
            </div>
            </div>
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
          <span class="input-group-text" id="bdsnamePHD">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row8['NAME_COLLEGE_BDS']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb50" onclick="jquery50()" >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="bdsboardPHD">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row8['NAME_BOARD_BDS']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb51" onclick="jquery51()" >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="bdsyearPHD">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row8['YEAR_BDS']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb52" onclick="jquery52()" >
            </div>
            </div>
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
          <span class="input-group-text" id="mdsnamePHD">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_mds" value="<?php echo $row8['NAME_COLLEGE_MDS']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb53" onclick="jquery53()" >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="mdsboardPHD">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_mds" value="<?php echo $row8['NAME_BOARD_MDS']; ?>" required>
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb54" onclick="jquery54()" >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="mdsyearPHD">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_mds" value="<?php echo $row8['YEAR_MDS']; ?>" required>
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb55" onclick="jquery55()" >
            </div>
            </div>
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
          <span class="input-group-text" id="othernamePHD" >Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_other" value="<?php echo $row8['NAME_COLLEGE_OTHER']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb56" onclick="jquery56()"  >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="otherboardPHD">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_other" value="<?php echo $row8['NAME_BOARD_OTHER']; ?>" >
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb57" onclick="jquery57()"  >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="otheryearPHD">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_other" value="<?php echo $row8['YEAR_OTHER']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check5" id="cb58" onclick="jquery58()" >
            </div>
            </div>
          </div>
          </div>
     </div>

<br>
   <center>
   	<form  method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="clgPHD_form">
                <input type="radio" name="status5" value=10 style="margin:15px;" onclick="clgPHD_func1()" id="clgPHD_a" >
                <label for="clgPHD_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status5" value=11 id="clgPHD_na" onclick="clgPHD_func2()" style="margin:15px ;">
                <label for="clgPHD_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgPHD_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box5" id="query_box5" form="clgPHD_form" rows="10" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" readonly></textarea><br><br>
                </div>

                <input type="submit" name="clgPHD-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
        </form>
    </center>




    </details>
    <details class="with-code">
    <summary>Fellowship</summary>
    <hr />
  
    <br>
  
  <div class="row">
        <h5 class="input-group-text" id="inputGroup-sizing-default" style="margin-left:1rem; border:solid 2px #bfbfbf;">SSC- 10th</h5>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="tenthnameFELL">Name Of Institute/ College</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_10" value="<?php echo $row9['NAME_COLLEGE_10']; ?>" >
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb59" onclick="jquery59()"  >
            </div>
            </div>
            </div>
         </div>        
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="tenthboardFELL">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_10" value="<?php echo $row9['NAME_BOARD_10']; ?>" >
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb60" onclick="jquery60()" >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="tenthyearFELL">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_10" value="<?php echo $row9['YEAR_10']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb61" onclick="jquery61()"  >
            </div>
            </div>
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
          <span class="input-group-text" id="twelthnameFELL">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_12" value="<?php echo $row9['NAME_COLLEGE_12']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb62" onclick="jquery62()"  >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="twelthboardFELL">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_12" value="<?php echo $row9['NAME_BOARD_12']; ?>" >
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6"  id="cb63" onclick="jquery63()"   >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="twelthyearFELL">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_12" value="<?php echo $row9['YEAR_12']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb64" onclick="jquery64()" >
            </div>
            </div>
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
          <span class="input-group-text" id="bdsnameFELL">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_bds" value="<?php echo $row9['NAME_COLLEGE_BDS']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb65" onclick="jquery65()"   >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="bdsboardFELL">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_bds" value="<?php echo $row9['NAME_BOARD_BDS']; ?>" >
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb66" onclick="jquery66()" >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="bdsyearFELL">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_bds" value="<?php echo $row9['YEAR_BDS']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb67" onclick="jquery67()" >
            </div>
            </div>
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
          <span class="input-group-text" id="mdsnameFELL">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_mds" value="<?php echo $row9['NAME_COLLEGE_MDS']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb68" onclick="jquery68()" >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="mdsboardFELL">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_mds" value="<?php echo $row9['NAME_BOARD_MDS']; ?>" >
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb69" onclick="jquery69()" >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="mdsyearFELL">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_mds" value="<?php echo $row9['YEAR_MDS']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb70" onclick="jquery70()" >
            </div>
            </div>
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
          <span class="input-group-text" id="othernameFELL">Name Of Institute/ College</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_college_other" value="<?php echo $row9['NAME_COLLEGE_OTHER']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6" id="cb71" onclick="jquery71()"  >
            </div>
            </div>
          </div>
          </div>
     </div>
     <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="otherboardFELL">Name Of Board</span>
            </div>
            <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name_board_other" value="<?php echo $row9['NAME_BOARD_OTHER']; ?>" >
            <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6"  id="cb72" onclick="jquery72()"  >
            </div>
            </div>
            </div>
         </div> 
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="otheryearFELL">Year Of Passing</span>
          </div>
          <input type="number" min="2000" max="2050" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="year_other" value="<?php echo $row9['YEAR_OTHER']; ?>" >
          <div class="input-group-prepend">
            <div class="input-group-text">
            <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check6"  id="cb73" onclick="jquery73()"  >
            </div>
            </div>
          </div>
          </div>
     </div>

    
   <center>
   	<form  method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="clgFELL_form">
                <input type="radio" name="status6" value=10 style="margin:15px;" onclick="clgFellowship_func1()" id="clgFellowship_a" >
                <label for="clgFellowship_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status6" value=11 id="clgFellowship_na" onclick="clgFellowship_func2()" style="margin:15px ;">
                <label for="clgFellowship_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgFellowship_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box6" id="query_box6" form="clgFELL_form" rows="10" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" readonly></textarea><br><br>
                </div>

                <input type="submit" name="clgFELL-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
    </form>        
    </center>



    </details>
    </details>
  
  
  <details>
    <summary>Scholarship</summary>
    <hr/>
    <!-- <p>You can programmatically open and close the widget by setting/removing its open attribute.</p>
    <p class="note"><b>Note:</b> Unfortunately, at this time there's no built-in way to animate the transition between open and closed.</p> -->
    <!-- <form method="POST" action="" > -->

  <br>

  <div class="row">
          <div class="col-sm">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" for="inputGroupSelect01" id="Scholardetails">Scholarship Details</span>
          <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="scholarship_name" value="<?php echo $row2['SCHOLARSHIP']; ?>">
          <div class="input-group-prepend">
          <div class="input-group-text">
          <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check7"  id="cb74" onclick="jquery74()"  >

          </div>
          </div>

          </div>
          
          </div> 
          </div>
     </div>

     <div class="row">
  
        <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="Scholaragencyname">Agency Name</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="agency" value="<?php echo $row2['AGENCY_NAME']; ?>">
            <div class="input-group-prepend">
          <div class="input-group-text">
          <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check7"  id="cb75" onclick="jquery75()" >
          </div>
          </div>
            </div>
        </div>


    </div>

    <div class="row">
         <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"  id="Scholaramt">Scholarship Amount</span>
            </div>
            <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="amount" value="<?php echo $row2['SCHOLARSHIP_AMT']; ?>">
            <div class="input-group-prepend">
          <div class="input-group-text">
          <input type="checkbox" checked  aria-label="Checkbox for following text input" class="check7"  id="cb76" onclick="jquery76()" >
          </div>
          </div>
            </div>
         </div>
     </div>

     <center>
                <form method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="scholarship_submit">
                <input type="radio" name="status7" value=10 style="margin:15px;" onclick="clgScholarship_func1()" id="clgScholarship_a" >
                <label for="clgScholarship_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status7" value=11 id="clgScholarship_na" onclick="clgScholarship_func2()" style="margin:15px ;">
                <label for="clgScholarship_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgScholarship_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box7" id="query_box7" rows="10" form="scholarship_submit" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" readonly></textarea><br><br>
                </div>

                <input type="submit" name="scholarship-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
                </form>
            <br><br><br><br><br>
    </center>

  </details>

  <details>
    <summary>Documents</summary>
    <hr/>
    
    <details>
    <summary>BDS</summary>
    <hr/>
    <!-- <p>You can programmatically open and close the widget by setting/removing its open attribute.</p> -->
    <!-- <p class="note"><b>Note:</b> Unfortunately, at this time there's no built-in way to animate the transition between open and closed.</p> -->
    <!-- <form  method="POST" action="" enctype="multipart/form-data"> -->
 
 <br>
 
 <div class="row">
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDSadmitcard">NEET Admit Card</span>
       </div>
       <a target="<?php if($row['ADMIT_CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['ADMIT_CARD']==NULL){
         echo '#';
       }else{
         echo $row4['ADMIT_CARD'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['ADMIT_CARD']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['ADMIT_CARD']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb77" onclick="jquery77()" >

</div>
</div>
       </div>
       </div>
       
  
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDSrankletter">NEET Rank Letter</span>
       </div>
       <a target="<?php if($row['RANK_LETTER']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['RANK_LETTER']==NULL){
         echo '#';
       }else{
         echo $row4['RANK_LETTER'];
       }
       ?> " class="btn btn-secondary  active" role="button"  >
       <i class=" <?php 
       if($row4['RANK_LETTER']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['RANK_LETTER']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb78" onclick="jquery78()">

</div>
</div>
       </div>
       </div>
       
  </div>
     <br>
    <div class="row">
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDSallotmentletter">Allotment Letter</span>
       </div>
       <a target="<?php if($row['ALT_LETTER']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['ALT_LETTER']==NULL){
         echo '#';
       }else{
         echo $row4['ALT_LETTER'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['ALT_LETTER']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['ALT_LETTER']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb79" onclick="jquery79()">

</div>
</div>
       </div>
       </div>
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDSadmissionletter">Admission Letter</span>
       </div>
       <a target="<?php if($row['ADM_LETTER']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['ADM_LETTER']==NULL){
         echo '#';
       }else{
         echo $row4['ADM_LETTER'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['ADM_LETTER']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['ADM_LETTER']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb80" onclick="jquery80()">

</div>
</div>
       </div>
     </div>
 </div>

 <br>
 <div class="row">
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDS10thmarksheet">10th Marksheet</span>
       </div>
       <a target="<?php if($row['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['TENTH_MKS']==NULL){
         echo '#';
       }else{
         echo $row4['TENTH_MKS'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['TENTH_MKS']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['TENTH_MKS']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb81" onclick="jquery81()">

</div>
</div>       
       </div>
       </div>
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDS10thpassingcerti">10th Passing Certificate</span>
       </div>
       <a target="<?php if($row4['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['TENTH_PASS_CERTI']==NULL){
         echo '#';
       }else{
         echo $row4['TENTH_PASS_CERTI'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['TENTH_PASS_CERTI']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['TENTH_PASS_CERTI']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb82" onclick="jquery82()">

</div>
</div>      
       </div>
     </div>
 </div>
  
 <br>
 <div class="row">
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDS12thmarksheet">12th Marksheet</span>
       </div>
       <a target="<?php if($row4['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['TWELTH_MKS']==NULL){
         echo '#';
       }else{
         echo $row4['TWELTH_MKS'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['TWELTH_MKS']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['TWELTH_MKS']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb83" onclick="jquery83()">

</div>
</div>       
       </div>
       </div>
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDS12thpassingcertificate">12th Passing Certificate</span>
       </div>
       <a target="<?php if($row4['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['TWELTH_PASS_CERTI']==NULL){
         echo '#';
       }else{
         echo $row4['TWELTH_PASS_CERTI'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['TWELTH_PASS_CERTI']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['TWELTH_PASS_CERTI']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb84" onclick="jquery84()">

</div>
</div>       
       </div>
     </div>
 </div>

 <br>
 

<div class="row">
       
             
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDSclgleavingcerti">College Leaving Certificate</span>
       </div>
       <a target="<?php if($row4['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['CLG_LEAVE_CERTI']==NULL){
         echo '#';
       }else{
         echo $row4['CLG_LEAVE_CERTI'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['CLG_LEAVE_CERTI']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['CLG_LEAVE_CERTI']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb85" onclick="jquery85()">

</div>
</div>       
       </div>
       </div>

     
         
         <div class="col-sm-6"> 
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="DocBDSmigrationcerti">Migration Certificate</span>
                 </div>
                 <a target="<?php if($row['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['MIGRATION_CERTI']==NULL){
         echo '#';
       }else{
         echo $row4['MIGRATION_CERTI'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['MIGRATION_CERTI']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['MIGRATION_CERTI']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb86" onclick="jquery86()">

</div>
</div>       
             </div>
         </div>
 </div>
 <br>
 <div class="row">
 
       <div class="col-sm-6">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="DocBDSdisablitycerti">Disability Certificate</span>
       </div>
       <a target="<?php if($row4['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
       if($row4['DISABILITY_CERTI']==NULL){
         echo '#';
       }else{
         echo $row4['DISABILITY_CERTI'];
       }
       ?> " class="btn btn-secondary  active" role="button" >
       <i class=" <?php 
       if($row4['DISABILITY_CERTI']==NULL){
         echo 'fas fa-eye-slash';
       }else{
         echo 'fas fa-eye';
       }
       ?> " aria-hidden="true"></i> 
       <?php 
       if($row4['DISABILITY_CERTI']==NULL){
         echo $msg1;
       }else{
         echo $msg2;
       }
       ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check8"  id="cb87" onclick="jquery87()">

</div>
</div>       
       </div>
       </div>
 </div>

 <center>
                <form method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="BDSdoc_submit"> 
                <input type="radio" name="status8" value=10 style="margin:15px;" onclick="clgDocBDS_func1()" id="clgDocBDS_a" >
                <label for="clgDocBDS_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status8" value=11 id="clgDocBDS_na" onclick="clgDocBDS_func2()" style="margin:15px ;">
                <label for="clgDocBDS_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgDocBDS_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box8" id="query_box8" rows="10" form="BDSdoc_submit" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" readonly></textarea><br><br>
                </div>

                <input type="submit" name="BDSdoc-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
            </form>
    </center>

  
       
 
<!-- </form> -->
  </details>
  
  <details>
    <summary>MDS</summary>
    <hr/>
    <!-- <p>You can programmatically open and close the widget by setting/removing its open attribute.</p> -->
    <!-- <p class="note"><b>Note:</b> Unfortunately, at this time there's no built-in way to animate the transition between open and closed.</p> -->
    <!-- <form  method="POST" action="" enctype="multipart/form-data"> -->


    <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDSadmitcard">NEET Admit Card</span>
          </div>
          <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['ADMIT_CARD']==NULL){
            echo '#';
          }else{
            echo $row5['ADMIT_CARD'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['ADMIT_CARD']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['ADMIT_CARD']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb88" onclick="jquery88()" >

</div>
</div>
          </div>
          </div>
          
     
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDSrankletter">NEET Rank Letter</span>
          </div>
          <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['RANK_LETTER']==NULL){
            echo '#';
          }else{
            echo $row5['RANK_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button"  >
          <i class=" <?php 
          if($row5['RANK_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['RANK_LETTER']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb89" onclick="jquery89()">

</div>
</div>          
          </div>
          </div>
          
     </div>
        <br>
       <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDSallotmentletter">Allotment Letter</span>
          </div>
          <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['ALT_LETTER']==NULL){
            echo '#';
          }else{
            echo $row5['ALT_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['ALT_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['ALT_LETTER']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb90" onclick="jquery90()">

</div>
</div>          
          </div>
          </div>
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDSadmissionletter">Admission Letter</span>
          </div>
          <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['ADM_LETTER']==NULL){
            echo '#';
          }else{
            echo $row5['ADM_LETTER'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['ADM_LETTER']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['ADM_LETTER']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb91" onclick="jquery91()" >

</div>
</div>          
          </div>
        </div>
    </div>

    <br>
    <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDS10thmarksheet">10th Marksheet</span>
          </div>
          <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['TENTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row5['TENTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['TENTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['TENTH_MKS']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?>  </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb92" onclick="jquery92()" >

</div>
</div>           
          </div>
          </div>
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDS10thpassingcerti">10th Passing Certificate</span>
          </div>
          <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['TENTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['TENTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['TENTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['TENTH_PASS_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb93" onclick="jquery93()" >

</div>
</div>           
          </div>
        </div>
    </div>
     
    <br>
    <div class="row">
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDS12thmarskheet">12th Marksheet</span>
          </div>
          <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['TWELTH_MKS']==NULL){
            echo '#';
          }else{
            echo $row5['TWELTH_MKS'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['TWELTH_MKS']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['TWELTH_MKS']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb94" onclick="jquery94()" >
</div>
</div>           
          </div>
          </div>
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDS12thpassingcerti">12th Passing Certificate</span>
          </div>
          <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['TWELTH_PASS_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['TWELTH_PASS_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['TWELTH_PASS_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['TWELTH_PASS_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb95" onclick="jquery95()" >
</div>
</div>           
          </div>
        </div>
    </div>

    <br>
    <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="DocMDS1bdsmarksheet">1st Year BDS Marksheet</span>
            </div>
            <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['FIRST_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row5['FIRST_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['FIRST_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['FIRST_BDS_MARKSHEET']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb96" onclick="jquery96()" >
</div>
</div>           
            </div>
            </div>

            <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="DocMDS2bdsmarksheet">2nd Year BDS Marksheet</span>
            </div>
            <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['SECOND_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row5['SECOND_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['SECOND_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['SECOND_BDS_MARKSHEET']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb97" onclick="jquery97()" >
</div>
</div>           
            </div>
            </div>
    </div>

<br>

    <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="DocMDS3bdsmarksheet">3rd Year BDS Marksheet</span>
            </div>
            <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['THIRD_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row5['THIRD_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['THIRD_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['THIRD_BDS_MARKSHEET']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb98" onclick="jquery98()" >
</div>
</div>           
            </div>
            </div>

            <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="DocMDS4bdsmarksheet">4th Year BDS Marksheet</span>
            </div>
            <a target="<?php if($row5['ADMIT CARD']!=NULL){echo '_blank';} else {echo '';}?> " href=" <?php 
          if($row5['FOURTH_BDS_MARKSHEET']==NULL){
            echo '#';
          }else{
            echo $row5['FOURTH_BDS_MARKSHEET'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['FOURTH_BDS_MARKSHEET']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['FOURTH_BDS_MARKSHEET']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb99"  onclick="jquery99()" >
</div>
</div>           
            </div>
            </div>
    </div>

<br>

    <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="DocMDSprovisionalpassingcerti">Provisional Passing Certificate</span>
            </div>
            <a target="_blank" href=" <?php 
          if($row5['PROVISION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['PROVISION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['PROVISION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['PROVISION_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb100" onclick="jquery100()" >
</div>
</div>           
            </div>
        </div>
          <div class="col-sm-6">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="DocMDSattemptcerti">Attempt Certificate</span>
                </div>
              <a target="_blank" href=" <?php 
          if($row5['ATTEMPT_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['ATTEMPT_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['ATTEMPT_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['ATTEMPT_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb101" onclick="jquery101()" >
</div>
</div>           
                </div>
                </div>
    </div>
<br>

    <div class="row">
          <div class="col-sm-6">
        
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="DocMDSbdsdegreecerti">BDS Degree Certificate</span>
            </div>
            <a target="_blank" href=" <?php 
          if($row5['BDS_DEG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['BDS_DEG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['BDS_DEG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['BDS_DEG_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb102" onclick="jquery102()" >
</div>
</div>           
            </div>
        </div>
           
          <div class="col-sm-6">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="DocMDSclginternshipcerti">College Internship Certificate</span>
                </div>
                <a target="_blank" href=" <?php 
          if($row5['CLG_INTERN_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['CLG_INTERN_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['CLG_INTERN_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['CLG_INTERN_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb103" onclick="jquery103()" >
</div>
</div>           
                </div>
                </div>
    </div>
<br>

    <div class="row">
          <div class="col-sm-12">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="DocMDSdcirecognitioncerti">DCI Recognition Certificate(Private College)</span>
            </div>
            <a target="_blank" href=" <?php 
          if($row5['DCI_RECOG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['DCI_RECOG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['DCI_RECOG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['DCI_RECOG_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb104" onclick="jquery104()" >
</div>
</div>           
            </div>
            </div>
    </div>
        <br>
    <div class="row">
          <div class="col-sm-6">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="DocMDSdciregcerti">DCI Registration Certificate</span>
                </div>
                <a target="_blank" href=" <?php 
          if($row5['DCI_REG_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['DCI_REG_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['DCI_REG_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['DCI_REG_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb105" onclick="jquery105()" >
</div>
</div>           
                </div>
            </div>
                
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDSclgleavingcerti">College Leaving Certificate</span>
          </div>
          <a target="_blank" href=" <?php 
          if($row5['CLG_LEAVE_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['CLG_LEAVE_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['CLG_LEAVE_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['CLG_LEAVE_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb106" onclick="jquery106()" >
</div>
</div>           
          </div>
          </div>
    </div>

  
    <br>
    <div class="row">
        
            
            <div class="col-sm-6"> 
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="DocMDSmigrationcerti">Migration Certificate</span>
                    </div>
                    <a target="_blank" href=" <?php 
          if($row5['MIGRATION_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['MIGRATION_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['MIGRATION_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['MIGRATION_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb107" onclick="jquery107()" >
</div>
</div>           
                </div>
            </div>
    
    
          <div class="col-sm-6">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="DocMDSdisablitycerti">Disability Certificate</span>
          </div>
          <a target="_blank" href=" <?php 
          if($row5['DISABILITY_CERTI']==NULL){
            echo '#';
          }else{
            echo $row5['DISABILITY_CERTI'];
          }
          ?> " class="btn btn-secondary  active" role="button" >
          <i class=" <?php 
          if($row5['DISABILITY_CERTI']==NULL){
            echo 'fas fa-eye-slash';
          }else{
            echo 'fas fa-eye';
          }
          ?> " aria-hidden="true"></i> 
          <?php 
          if($row5['DISABILITY_CERTI']==NULL){
            echo $msg1;
          }else{
            echo $msg2;
          }
          ?> </a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check9" id="cb108" onclick="jquery108()" >
</div>
</div>           
          </div>
          </div>
    </div>

    <center>
                <form method="POST" action="verifier_backend.php?app_id= <?php echo $app_id ?> " id="MDSdoc_submit">
                <input type="radio" name="status9" value=10 style="margin:15px;" onclick="clgDocMDS_func1()" id="clgDocMDS_a" >
                <label for="clgDocMDS_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status9" value=11 id="clgDocMDS_na" onclick="clgDocMDS_func2()" style="margin:15px ;">
                <label for="clgDocMDS_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgDocMDS_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box9" id="query_box9" rows="10" form="MDSdoc_submit" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" readonly></textarea><br><br>

                </div>

                <input type="submit" name="MDSdoc-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
            </form>
    </center>

          
     
     <!-- <div class="row">
     <div class="col-sm-5"></div>
     <div class="col-sm-5">
     <button type="submit" name="submit"  value="Submit" class="btn">Submit</button></div>
     <div class="col-sm-5"></div>
     </div> -->

  </details>

  </details>

  <details>
    <summary>Progress of Student</summary>
    <hr/>
    
    <!-- <form method="POST" style="border:1px transparent #f52929;border-radius:1.5rem;padding-left:5rem;" action=""> -->
     
  <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  <!-- <h1 style="font-size:25px; box-shadow: 2px 2px #ccccb3; width:13rem;padding-left:3.2rem" class="input-group-text">Progress</h1> -->
  </div>
  <div class="col-sm-4"></div>
  </div>
  <br>
  <nav>
    <div class="row">
        
        <div class="col-sm-5">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="clgPSyear">Year</span>
                </div>
                <input disabled type="number" min="1" max="5" class=" form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="year" value="<?php echo $row3['YEAR']; ?>">
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check10" id="cb109" onclick="jquery109()">

</div>
</div>                
            
            </div>
        </div>
        <div class="col-sm-1"></div>
    
        <div class="col-sm-5">
            <div class="input-group mb-3 ">
                <div class="input-group-prepend ">
                    <span class="input-group-text " id="clgPSmarksobtained">Marks obtained</span>
                </div>
                <input disabled type="number " min="0" max="100" class=" form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="marks_obtained" value="<?php echo $row3['MARKS_OBTAINED']; ?>">
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check10" id="cb110" onclick="jquery110()" >
</div>
</div>                 
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        
        <div class="col-sm-5 ">
            <div class="input-group mb-3 ">
                <div class="input-group-prepend ">
                    <label class="input-group-text " id="clgPSstatus">Status</label>
                    <input disabled type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="status" value="<?php echo $row3['STATUS']; ?>">
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check10" id="cb111" onclick="jquery111()" >
</div>
</div>                     

                </div>
                
            </div>
        </div>
        <div class="col-sm-1"></div>
    
            <div class="col-sm-5">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text " id="clgPSrevaluation">Revaluation</span>
                    </div>
                    <input disabled type=" " class="form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="revaluation" value="<?php echo $row3['REVALUATION']; ?>">
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check10" id="cb112" onclick="jquery112()" >
</div>
</div>                     
                </div>
            </div>
        <div class="col-sm"></div>
        </div>

        <div class="row">
            
            <div class="col-sm-5">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text " id="clgPSnoofattempts">Number of Attempts</span>
                    </div>
                    <input disabled type=" " class="form-control " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " name="no_attempts" value="<?php echo $row3['NO_ATTEMPTS']; ?>">
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check10" id="cb113" onclick="jquery113()" >
</div>
</div>                     

                </div>
            </div>
          <div class="col-sm"></div>  
        </div>
        </nav>
        <center>
                <form method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="progress_submit">
                <input type="radio" name="status10" value=10 style="margin:15px;" onclick="clgProgress_func1()" id="clgProgress_a" >
                <label for="clgProgress_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status10" value=11 id="clgProgress_na" onclick="clgProgress_func2()" style="margin:15px ;">
                <label for="clgProgress_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgProgress_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box10" id="query_box10" rows="10" form="progress_submit" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" readonly></textarea><br><br>
                </div>

                <input type="submit" name="progress-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
            </form>
    </center>
    
    
  </details>

  <details>
    <summary>Academics</summary>
    <hr/>
  
    <!-- <p>You can programmatically open and close the widget by setting/removing its open attribute.</p> -->
    <!-- <p class="note"><b>Note:</b> Unfortunately, at this time there's no built-in way to animate the transition between open and closed.</p> -->
    <?php

$sql10    = "SELECT * FROM `academic_achievements` WHERE ID='$app_id'";
$result = mysqli_query($conn,$sql10) ;

if (mysqli_num_rows($result) > 0 )
{
  while($rows10 = mysqli_fetch_array($result))
  {

    ?>


    <!-- <form > -->
  <div id="test">
   <div id="from1" class="academic_achievement" id="academic_achievement" style="border:1.5px solid #fa8989;border-radius:1rem;padding:3%;padding-top:3rem;"> 
        
        
  <br>
        <div class="row">
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                      </div>
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_name" value="<?php echo $rows10["EVENT_NAME"]; ?>" disabled>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check11"  >
</div>
</div>                      
                    </div>
                </div>
           
                <div class="col-sm"></div>
              
                    <div class="col-sm-5">
                       <div class="input-group mb-3">
                         <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                       </div>
                       <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="level" value="<?php echo $rows10["LEVEL"]; ?>" disabled>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check11"  >
</div>
</div>                       
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
                         <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="presentation_type" value="<?php echo $rows10["PRESENTATION_TYPE"]; ?>" disabled>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check11"  >
</div>
</div>                         
                         </div>
                      </div>
                  
                       <div class="col-sm-1"></div>
                       <div class="col-sm-5">

                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Prize Won</span>
                       </div>
                       <!--<input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="prize_won">-->
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $rows10["PRIZE_WON"]; ?>">View Document</a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check11"  >
</div>
</div>                       
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
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $rows10["CERTIFICATE"]; ?>">View Document</a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check11"  >
</div>
</div>                       
                       </div>
                       </div>
                       <div class="col-sm"></div>
        </div>
 </div>
 </div>  
 
 <div class="row">
 <div class="col-5"></div>
 <div class="col-4">
 <a href="academic_view.php?event_name=<?php echo $rows10['EVENT_NAME'];?>&level=<?php echo $rows10['LEVEL'];?>&presentation_type=<?php echo $rows10['PRESENTATION_TYPE'];?>&prize=<?php echo $rows10['PRIZE_WON'];?>&certi=<?php echo $rows10['CERTIFICATE'];?>&id=<?php echo $app_id; ?>&email=<?php echo $email; ?> "></a>
 <br>
 </div>
 <div class="col-3"></div>
 </div>

 
 
    <!-- </form> -->
    <?php
}
}
?>

<center>
                <form method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" id="academic_submit">
                <input type="radio" name="status11" value=10 style="margin:15px;" onclick="clgAcademics_func1()" id="clgAcademics_a" >
                <label for="clgAcademics_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status11" value=11 id="clgAcademics_na" onclick="clgAcademics_func2()" style="margin:15px ;">
                <label for="clgAcademics_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgAcademics_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box11" id="query_box11" rows="10" form="academic_submit" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" enabled></textarea><br><br>
                </div>

                <input type="submit" name="academic-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
            </form>
    </center>








  </details>

  <details>
    <summary>Extracurricular</summary>
    <hr/>
   
<?php

$sql11    = "SELECT * FROM `extracurricular` WHERE ID='$app_id'";
$result = mysqli_query($conn,$sql11) ;

if (mysqli_num_rows($result) > 0 )
{
  while($rows11 = mysqli_fetch_array($result))
  {

?>


  <!-- <form style="border:1px solid #f52929;border-radius:1rem;padding:3%;padding-top:3rem;" method="POST"> -->
  <div id="test">
   <div class="academic_achievement" id="academic_achievement" style="border:1.5px solid #fa8989;border-radius:1rem;padding:3%;padding-top:3rem;"> 
        
        
  <br>
        <div class="row">
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                      </div>
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_name" value="<?php echo $rows11["EVENT_NAME"]; ?>" disabled>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check12"  >
</div>
</div>                      
                    </div>
                </div>
           
                <div class="col-sm"></div>
              
                    <div class="col-sm-5">
                       <div class="input-group mb-3">
                         <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                       </div>
                       <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="level" value="<?php echo $rows11["LEVEL"]; ?>" disabled>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check12"  >
</div>
</div>                        
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
                         <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_type" value="<?php echo $rows11["EVENT_TYPE"]; ?>" disabled>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check12"  >
</div>
</div>                          
                         </div>
                      </div>
                  
                       <div class="col-sm-1"></div>
                       <div class="col-sm-5">

                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Prize Won</span>
                       </div>
                       <!--<input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="prize_won">-->
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $rows11["PRIZE_WON"]; ?>">View Document</a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check12"  >
</div>
</div>                        
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
                       <a class="form-control" target="blank" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" href="<?php echo $rows11["CERTIFICATE"]; ?>">View Document</a>
<div class="input-group-prepend">
<div class="input-group-text">
<input type="checkbox" checked  aria-label="Checkbox for following text input" class="check12"  >
</div>
</div>                        
                       </div>
                       </div>
                       <div class="col-sm"></div>
        </div>

    </div>
    </div>    
        
       <!-- <a href="extracurricular_delete.php" >Delete</a>-->  
  <!-- </form> -->
    <br>
    <br>
    <?php
    }
    }
    ?>

<center>
                <form method="POST" action="verifier_backend.php?app_id=<?php echo $app_id?>" id="extra_submit">
                <input type="radio" name="status12" value=10 style="margin:15px;" onclick="clgExtracurricular_func1()" id="clgExtracurricular_a" >
                <label for="clgExtracurricular_a" style="font-size:large;"><b>Approved</b></label>
                <input type="radio" name="status12" value=11 id="clgExtracurricular_na" onclick="clgExtracurricular_func2()" style="margin:15px ;">
                <label for="clgExtracurricular_na" style="font-size:large;"><b>Not Approved</b></label><br><br>
                <br><br>
                <div id="clgExtracurricular_querybox" style="display: none;">
            
                        <h3>Upload appropriate documents of: </h3>
                        <textarea name="query_box12" id="query_box12" rows="10" form="extra_submit" style="width:50%; border: 3px solid #D12823;font-size:large;border-radius:15px" enabled></textarea><br><br>
                </div>

                <input type="submit" name="extra-submit" value="SUBMIT" style="background-color:#090d63;color:white;font-weight:800;" class="btn">
            <br><br><br><br><br>
            </form>
    </center>


  </details>
  
  <center>
  <form method="POST" action="verifier_backend.php?app_id=<?php echo $app_id ?>" >
  <input type="submit" name="final_submit" class="btn">
  </center>
 


            </div>

        </div>

    <div>



    <!-- jQuery CDN - Slim version /div>
  </d(=without AJAX) -->
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
