
<?php
    session_start();
    $id = $_SESSION['id'];
    $email =  $_SESSION['email'];

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Details</title>
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



</style>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
        <div class="sanskruti" style="height:1000px;">
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


  <form action="personal_details_back.php" method="POST" style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:5rem;" enctype="multipart/form-data" >
  <div class="row">
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
           </div>
           <input type="text" required  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="f_name"  value="<?php echo $row['F_NAME']; ?>">
         </div>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
           <div class="input-group mb-3">
           <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
           </div>
           <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="m_name" value="<?php echo $row['M_NAME']; ?>">
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
           <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="l_name" value="<?php echo $row['L_NAME']; ?>">
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
            <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="father_name" value="<?php echo $row['FATHER_NAME']; ?>">
            </div>
        </div>
      <div class="col-sm-1"></div>
       <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Mother's Name</span>
            </div>
            <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mother_name" value="<?php echo $row['MOTHER_NAME']; ?>">
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
            <input type="text" required  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="reg_no" value="<?php echo $row['REG_NO']; ?>">
            </div>
        </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Gender</label>
          </div>
          <select  class="custom-select" name="gender" id="inputGroupSelect01" required>
          <option value="" >Choose...</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Rather not say</option>
          </select>
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
          <input required type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dob" value="<?php echo $row['DOB']; ?>">
          </div>
        </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Birthplace</span>
          </div>
          <input required type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="birth_place" value="<?php echo $row['BIRTH_PLACE']; ?>">
          </div>
      </div>
      <div class="col-sm-1"></div>

  </div>
  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Blood Group</label>
          </div>
          <select required class="custom-select" name="blood_grp" id="inputGroupSelect01">
          <option selected value="">Choose...</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          </select>
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
          <input required type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pancard" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" value="<?php echo $row['PANCARD']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Aadhar Number</span>
          </div>
          <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="aadhar" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}" value="<?php echo $row['AADHAR']; ?>">
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
          <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="passport" pattern="[A-Z]{1}[0-9]{7}" value="<?php echo $row['PASSPORT']; ?>">
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Parent's Pancard Number</span>
          </div>
          <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="parent_pancard" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" value="<?php echo $row['PARENT_PANCARD']; ?>">
          </div>
        </div>
      <div class="col-sm-1"></div>
  </div>
  <br>

  <div class="row">
        <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Religion</label>
          </div>
          <select required class="custom-select" name="religion"  id="inputGroupSelect01">
            <option selected value="">Choose...</option>
            <option value="Hindu">Hindu</option>
            <option value="Islam">Islam</option>
            <option value="Christian">Christian</option>
            <option value="Jain">Jain</option>
            <option value="Buddhist">Buddhist</option>
            <option value="Sikh">Sikh</option>
            <option value="Others">Others</option>
          </select>
          </div> 
        </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Caste Reservation</label>
            </div>
            <select required class="custom-select" name="reservation" id="inputGroupSelect01" value="<?php echo $row['RESERVATION']; ?>">
            <option selected value="">Choose...</option>
            <option value="Open">Open</option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="DT">DT</option>
            <option value="OBC">OBC</option>
            <option value="SBC">SBC</option>
            <option value="NT">NT</option>
            <option value="NT-1">NT-1</option>
            <option value="NT-2">NT-2</option>
            <option value="Nt-3">NT-3</option>
            <option value="VJ">VJ</option>
            <option value="Others">Others</option>
            </select>
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
          <input required type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="caste" value="<?php echo $row['CASTE']; ?>">
          </div>
        </div>
      <div class="col-sm-1"></div>
       <div class="col-sm-5">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
          </div>
          <input required type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="category" value="<?php echo $row['CATEGORY']; ?>">
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
          else echo '#'; ?> " class="btn btn-secondary  active" aria-pressed="true"><i class="
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

  <div class="row">

      <div class="col-sm-2"></div>
      <div class="col-sm-3"></div>
      <div class="col-sm-2">
       <button type="submit" name="submit"  value="Submit" class="btn"  >Submit</button>
       <button onclick="window.print()" class="btn"  ></button>

     </div>
     <div class="col-sm-3"></div>
     <div class="col-sm-2"></div>
  </div></form>
</div>
</div>
<script>
                var input=document.getElementById("pan");
                input.oninvalid=function(event){
                event.target.setCustomValidity('Enter Valid PAN number');}
    </script>
    <!-- Aadhar Card Validate -->
    <script>
                var input=document.getElementById("aadhar");
                input.oninvalid=function(event){
                event.target.setCustomValidity('Enter valid Aadhar Card Number');}
    </script>
    <!--Passport number Validate -->
    <script>
                var input=document.getElementById("passport");
                input.oninvalid=function(event){
                event.target.setCustomValidity('Enter valid Passport Number');
                }
    </script>
    <script>
                var input=document.getElementById("par_passport");
                input.oninvalid=function(event){
                event.target.setCustomValidity('Enter valid Passport Number');
                }
    </script>
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
