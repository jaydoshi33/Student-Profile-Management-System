

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- <link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" /> -->
<!-- <meta name="apple-mobile-web-app-title" content="CodePen"> -->
<!-- <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" /> -->
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>Student Profile System</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="front.css">
<link rel="icon" type="image/png" href="logo.png" sizes="15x15">

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');


/* @media screen and (max-width:500px){
body
 {
    background-image: url('26841.jpg');
	background-repeat:no-repeat;
	background-size: 100%;
	background-position:50% 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
	font-family: 'Montserrat', sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
 }
} */

/* @media screen and (min-width:500px){ */
body
 {
    background-image: url('hex5.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	background-position:50% 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
	font-family: 'Montserrat', sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
 }
/* } */


h1{
    font-weight: bold;
	margin: 0px;
	
}

h3{
    font-weight: bold;
	margin: 0px;
	margin-bottom: 10px;
	background-image: linear-gradient(to right,#FC9491,#f54945);
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
}

h2{
    text-align: center;
}

p{
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

span{
    font-size: 12px;

}

a{
color: #333;
font-size: 14px;
text-decoration: none;
margin: 15px 0;

}

button{
    border-radius: 5px;
    border: 1px solid #FF4B2B;
    background-color: #FF4B2B;
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active{
    transform: scale(0.95);
}

button:focus{
    outline: none;
}

button.ghost{
background-color: transparent;
border-color: #ffffff;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

/* input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
} */

.container {
	width:100%;
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #3946a1	;
	background: -webkit-linear-gradient(to right,#FC9491,#800000,#f54945);
	background: linear-gradient(to right, #FC9491,#800000,#f54945);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}





.my_form-control
{
    width: 100%;
    padding: 8px;
    padding-top: 18px;
    border: none;
    border-bottom: 1pt solid #bfbfbf;
    transition: all 200ms ease-in-out;
}

.form-group
{
    position: relative;
}

label
{
    
    width: 100%;
}

.my_place
{
    position: absolute;
    pointer-events: none;
    top: 25px;
    left: 5px;
    color: #800000;
    transition:  0.2s ease all;
    

}

.my_form-control:focus
{
    width: 100%;
    padding: 8px;
    padding-top: 18px;
    border: none;
    border-bottom: 2px solid #f58584;
    outline: none;
}




input:focus ~ .my_place,
input:not(:focus):valid ~ .my_place
{
    top: -6px;
}



.btn
{
    border-radius: 5px;
    box-shadow: 0 3px 4px #fabdbb;
    background-image: linear-gradient(to right, #FC9491, #800000, #f54945);
    background-size: 200%;
    width: 250px;
    border: none;
    outline: none;
	transition: .3s ease-in-out;
	color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
/*     font-family: Verdana, Geneva, Tahoma, sans-serif;
 */}

.btn:hover
{
    background-position: right;
}
.btns{
	background-image:linear-gradient(to right, #DA3C79, #BB387C, #6A3688);
	 border:#ffffff;
}

.btn:focus, .btn:active, .btn:active:focus {
    outline: none !important;
    box-shadow: 0 3px 4px #8abfff !important;
  }

  .forgot
  {
      font-size: 12px;
      color: #800000;
      cursor: pointer;
  }
</style>
<!-- <script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script> -->
</head>
<body translate="no">
<div class="container" id="container" style="width:70%;" >
<div class="form-container sign-up-container" >

<!--Signup-->
<form action="sign_back.php" method="post" id="contact-form" class="main-form needs-validation" role="form" >
<h3>Create Account</h3>
<div class="form-group">
<label>
<input type="text" id="form_emaile" class="my_form-control" name="email" required>
<small class="my_place">Email</small>
<div class="invalid-feedback">Please fill out this field.</div>
</label>
</div>

 <div class="form-group">
<label>
<input type="text" id="form_password" class="my_form-control" name="password" required>
<small class="my_place">Password</small>
<div class="invalid-feedback">Please fill out this field.</div>
</label>
</div> 
<div class="form-group">
<label>
<input type="password" id="form_confirmpassword" class="my_form-control" name="re_password" required>
<small class="my_place">Confirm Password</small>
<div class="invalid-feedback">Please fill out this field.</div>
</label>
</div>
<div class="form-group text-center">
<input type="submit" value="CREATE ACCOUNT" name="submit-signup" class="btn btn-primary mt-2 mx-auto"></button>
</div>

</form>
</div>
<!--Login-->
<div class="form-container sign-in-container">
<form action="login_back.php" method="post" id="contact-form" class="main-form needs-validation" role="form" novalidate>
<h3 >Sign In</h3>
<div class="form-group">
<label>
 <input type="text" id="form_email" name="id" class="my_form-control" required>
<small class="my_place">Unique Id</small>
<div class="invalid-feedback">Please fill out this field.</div>
</label>
</div>
<div class="form-group">
<label>
<input type="password" id="form_password" name="password" class="my_form-control" required>
<small class="my_place">Your password</small>
<div class="invalid-feedback">Please fill out this field.</div>
</label>
</div>
<div class="form-group text-center">
<button type="submit" name="submit-login" class="btn btn-primary mt-2 mx-auto">SIGN IN</button>
</div>
<div class="form-group mt-2 text-center">
<span class="forgot">Forgot password ?</span>
<p><button id="signUp" class="btn btn-primary mt-2 mx-auto">Create Account</button></p>
</div>
</form>
</div>
<div class="overlay-container">
<div class="overlay">
<div class="overlay-panel overlay-left">

<button class="ghost" id="signIn">SIGN IN</button>
</div>
<div class="overlay-panel overlay-right" style="background-image:url('7215a.jpg'); background-repeat:no-repeat; background-color:#ffffff; background-position: center; background-size:108% 100%;">

<!-- <button class="ghost" id="signUp" style=" background-color:#DF387A; margin-top:400px;">CREATE ACCOUNT</button> -->
</div>
</div>
</div>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script id="rendered-js">
(function () {
  'use strict';
  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});
//# sourceURL=pen.js
    </script>
	
</body>
</html>
