<?php
    session_start();
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

    $dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

            $sql    = "SELECT * FROM academic_achievements WHERE ID='$id'";
            $result = mysqli_query($conn,$sql) ;
            $row = mysqli_fetch_array($result);


    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Academic Achievements</title>
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



/* .form-control{
    border-top:0px;
    border-right:0px;
} */
    </style>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
        <div class="sanskruti" style="height:700px;">
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
                        <span id="hide">Documents  &nbsp;&nbsp;&nbsp;&nbsp; </span><div class="fas fa-angle-down"></div>
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
        <div id="content" style="height:800px;">
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
  <h1 id="box">Academic Achievement</h1>
  </div>
  <form style="border:1px solid #f52929;border-radius:1.5rem;padding:3%;padding-top:3rem;" method="POST" action="academic_achievements_back.php" enctype="multipart/form-data">
  
        
     <div id="final">   
        <div id="test">
        <br>
        
            <div class="row" id="event">
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                      </div>
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="event_name" required>
                    </div>
                </div>
           
                <div class="col-sm"></div>
              
                    <div class="col-sm-5">
                       <div class="input-group mb-3">
                         <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                       </div>
                       <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="level" required>
                       </div>
                    </div>
                    <div class="col-sm"></div>
           
                </div>
           
                <div class="row" id="prsentation">
                         <div class="col-sm-5">
                         <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="inputGroup-sizing-default">Presentation Type</span>
                         </div>
                         <select class="custom-select" id="inputGroupSelect01" name="presentation_type" required>
                            <option selected value="">Choose...</option>
                            <option value="cultural" name="cultural">Cultural</option>
                            <option value="sport" name="sport">Sport</option>
                         </select>           
                             </div>
                      </div>
                  
                       <div class="col-sm-1"></div>
                       <div class="col-sm-5">

                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Prize Won</span>
                       </div>
                       <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="prize_won" required>
                       </div>
                       </div>
                       <div class="col-sm"></div>
                  </div>
           
                  <div class="row" id="certificate">
                       <div class="col-sm-6">
                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroup-sizing-default">Certificate of Participation</span>
                       </div>
                       <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="certificate" required >
                       </div>
                       </div>
                       <div class="col-sm"></div>
                  </div>
                  </div>
                </div>
                  <!-- <input type="button" id="clone" onclick="function()" value="+">       
                  <input type="button" id="sub" value="-">
       -->


                
            <br>      
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
            <a href="academic_view.php" class="btn">View</a>
            </div>
            <div class="col-3">
            <button type="submit"  class="btn" name="submit" >Submit</button>
            </div>
            
        </div>
    </div>
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

<!-- <script>             
var i = 0;
var line='<hr/>';
$('#clone').click(function() {
 
//    $('#test').append(line);
   
    i++;
     $('#test').clone().appendTo('#final').prop('id', 'test' + i)
    //  $('#test').clone().appendTo('#final').prop('id', 'type' + i)
    //  $('#test').clone().appendTo('#final').prop('id', 'certificate' + i)


      });
 </script>

<script>

$(document).ready(function(){
  $("#sub").click(function(){
    $('#test'+ i).remove();
    // $('#presentation'+ i).remove();
    // $('#certificate'+ i).remove();
    // $(line=undefined).remove();

    i--;
    if(i== -1){
        i=0;
    }
  });
});
</script> -->
</body>
</html>