<?php
    session_start();
    // $id = $_SESSION['id'];
    // $email =  $_SESSION['email'];
    // $f_name = $_SESSION['f_name'];
    // $l_name = $_SESSION['l_name'];

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

            // $sql    = "SELECT * FROM student_details WHERE ID='$id'";
            // $result = mysqli_query($conn,$sql) ;
            // $row = mysqli_fetch_array($result);
            
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
    <link rel="stylesheet" type="text/css" href="table.css">

  <title>Verify</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli:300,400,500,700,800,900&amp;display=swap'>
  <link rel='stylesheet' href='progress.css'>

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
        padding-left:5rem;
      }
}

@media screen and (max-width:500px){

form, #form1  {
      border:1px transparent #f52929;
      border-radius:1.5rem;
      padding-left:0rem;
    }
}

th{
  width:20rem;
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
 height: 100%; 
} */
body .accordion details:not([open]) {
  /* height: 5%;  */
  padding:1rem;
}
/* body .accordion details[open] {
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
        <div class="sanskruti" style="height:3700px;">
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
                <li title="Verification request" >
                    <a href="verreq.php" class="sidebar-header" style="height:60px;" >                    
                     <span class="fas fa-user fa"></span>
                        <span3 id="hide">Verification Request</span>
                        <strong></strong>
                    </a>
                </li>
                
                <li title="Approved">
                    <a href="verapprove.php" class="sidebar-header" style="height:60px;">
                        <span class="fas fa-check"></span>
                       <span id="hide" >Approved</span> 
                       <strong></strong>
                    </a>  
                </li>
                
                
                <li title="Logout">
                    <a href="frontt.php" class="sidebar-header" style="height:60px;">
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
  <!-- Table-->

        
    <table>
        <tr>
        <th id="rad1">Student ID</th>
        <th>Student Name</th>
        <th>View Form</th>
        <!-- <th id="rad2">Approved</th> -->
        </tr>

         <?php
         $query="SELECT * FROM submit_status WHERE `ALL_FORM`='1'";
         $result=mysqli_query ($conn,$query);
         if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr> 
                    <td>$row[APPLICATION_ID]</td> 
                    <td>$row[F_NAME] $row[L_NAME]</td>
                    <td><a href='verify.php?app_id=$row[APPLICATION_ID]'>View form<a></td>
                    
                     </tr>";
            }
        }

         ?>   
        

        </table>


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
