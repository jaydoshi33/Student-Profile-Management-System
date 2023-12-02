<?php

if(isset($_POST["submit-login"]))
// if($_SERVER['REQUEST_METHOD']==='POST')
{
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "medical";

    $connect=mysqli_connect("localhost","root","","medical") or die("Unable to connect to database");

$id=$_POST['id'];
$password=$_POST['password'];

$query1="SELECT * FROM verify WHERE `SR_NO`='$id' AND `PASSWORD`='$password'";
$query="SELECT * FROM `users` WHERE `ID`='$id' AND `Password`='$password'";

$res_user=mysqli_query($connect,$query);
$ver_user=mysqli_query($connect, $query1);


if(mysqli_num_rows($res_user)>0)
{
  $user=mysqli_fetch_array($res_user);
  session_start();
  $_SESSION['id']=$user['ID'];
  echo $id;
  $sql = "SELECT `EMAIL_ID` FROM `users` WHERE ID='$id'";
  $result = mysqli_query($connect, $sql);
  if($result)
    echo "Sucess";
  else
    echo mysqli_error($connect);
  $row = mysqli_fetch_assoc($result);
  $email = $row["EMAIL_ID"];
  echo $email;
  $_SESSION['email']=$email;
  
  header('Location: home.php');
  //   echo '<div class="alert alert-success" style="text-align:center;">Login Successfull</div>';
}
else if(mysqli_num_rows($ver_user)>0)
{
  header('Location:verreq.php');
}
else{
  

  echo '<div class="alert alert-danger" style="text-align:center;">Invalid Credentials</div>';

}



}

  ?>


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  