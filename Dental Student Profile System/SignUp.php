<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Registration</title>

  <style type="text/css">
    body {
      font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }

    body {
      background: #ffffff;;
    }

    .register-box-body {
      display: block;
      background-color: white;
      padding: 20px;
      margin-bottom: 40px;
      box-sizing: border-box;
      border:solid 2px #cc0000;
    }

    h1 {
      text-align: center;
      padding: 15px;
    }

    .login-box-message {
      text-align: center;
      font-weight: bold;
    }

    .submit-button {
      width: 100%;
      background-image: linear-gradient(to right, #e52d27 0%, #731013 51%, #e52d27 100%);;
      color: white;
      margin: 10px, 0, 10px, 0;
      border: 0px;
      padding: 5px;
      border-radius:1rem;
    }

    .form-group {
      padding: 0.7px;
    }

    .login {
      text-align: center;
    }

    p.login {
      margin-top: 1rem;
    }

    div.container {
      display: flex;
      justify-content: center;

    }

    a:hover {
      text-decoration: none;
    }

    div.container {
      margin-top: 50px;
    }
  </style>

</head>

<body>

  <div class="container">
    <div class="register-box-body">

      <p class="login-box-message">Register</p>

      <form action="SignUp.php" method="post">
        <fieldset>

          <div class="form-group">

            <label for="email"> E-mail</label>
            <input size="50" type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>

          </div>

          <div class="form-group">

            <label for="password"> Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>

          </div>

          <div class="form-group">

            <label for="confirm_password"> Confirm Password</label>
            <input type="password" class="form-control" name="re_password" placeholder="Confirm Password"
              id="confirm_password" required>

          </div>

          <input type="submit" class="submit-button" value="Register">
        </fieldset>
      </form>

      <p class="login"><a href="login.php" style="color:#cc0000">Already Registered? Log in</a></p>





      <?php

if($_SERVER['REQUEST_METHOD']==='POST')
{

$email=$_POST['email'];
$password=$_POST['password'];

  $connect=mysqli_connect("localhost","root","","medical") or die("Unable to connect to database");

$query="SELECT * FROM `users` WHERE `EMAIL_ID`='$email' ";

$res_user=mysqli_query($connect,$query);
if($res_user)
{
	//echo "sucess";
}
else
{
	echo mysqli_error($connect);
}
if(mysqli_num_rows($res_user)>0)
{
  echo '<div class="alert alert-danger" style="text-align:center;">E-mail ID already exists</div>';
}

else{
    
    $query="INSERT INTO medical.users(`EMAIL_ID`,`Password`)VALUES('$email','$password')";
    $check = mysqli_query($connect,$query);
    /*if($check)
    	echo $check;
    else
    	echo mysqli_error($connect)."<br>";*/

    $query="SELECT `SR_NO` FROM `users` WHERE `EMAIL_ID`='$email' ";
    $res_user=mysqli_query($connect,$query);
   /* if ($res_user)
    	echo $query;
    else
    	echo mysqli_error($connect);*/
    while($row=$res_user->fetch_assoc())
    {
      $sr_no="{$row['SR_NO']}";
    }
    //echo $sr_no;
    $sr_no=substr(str_repeat(0,6).$sr_no,-6);
    $id="DY{$sr_no}";
    $query="UPDATE `users` SET `ID` = '$id' WHERE `users`.`EMAIL_ID` = '$email'";
    $res_user=mysqli_query($connect,$query);
    if($res_user=mysqli_query($connect,$query)){
      echo '<div class="alert alert-danger" style="text-align:center;">Your Unique ID is '.$id.'.</div>';
    }
    $query1[1]="INSERT INTO medical.bds_document(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[2]="INSERT INTO medical.college_bds(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[3]="INSERT INTO medical.college_fellowship(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[4]="INSERT INTO medical.college_mds(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[5]="INSERT INTO medical.college_phd(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[6]="INSERT INTO medical.contact_details(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[7]="INSERT INTO medical.mds_document(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[8]="INSERT INTO medical.scholarship(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[9]="INSERT INTO medical.student_details(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[10]="INSERT INTO medical.progress_student(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    // $query1[11]="INSERT INTO medical.academic_achievements(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    // $query1[12]="INSERT INTO medical.student_details(`EMAIL_ID`,`ID`)VALUES('$email','$id')";


    for($i=1;$i<11;$i++)
    {

        $parse_query=mysqli_query($connect,$query1[$i]);
	/*if($parse_query)
		//echo "suceess";
	else
		echo mysqli_error($connect);*/
    }
    mkdir("../MEDICAL/$id");
    }


}

  ?>


    </div>
  </div>


  <script type="text/javascript">
    var password = document.getElementById("password"),
      confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
      if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords don't match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>
