<?php
include('config.php');
include('session.php');
$userDetails=$userClass->userDetails($session_uid);

/* Customer Signup Form */
if (!empty($_POST['csignupSubmit'])) 
{
$username=$_POST['usernameReg'];
$password=$_POST['passwordReg'];
$balance=$_POST['intbalansReg'];
/* Regular expression check */
$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

if($username_check && $password_check && strlen(trim($name))>0) 
{
$id=$userClass->customerRegistration($username,$password,$intbalans);
if($id)
{
//$url=BASE_URL.'home.php';
header("Location: staff.php"); // Page redirecting to home.php 
}
else
{
$errorMsgReg="Username already exists.";
}
}
}

/* staff Signup Form */
if (!empty($_POST['signupSubmit'])) 
{
$username=$_POST['usernameReg'];
$email=$_POST['emailReg'];
$password=$_POST['passwordReg'];
$name=$_POST['nameReg'];
/* Regular expression check */
$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

if($username_check && $email_check && $password_check && strlen(trim($name))>0) 
{
$uid=$userClass->userRegistration($username,$password,$email,$name);
if($uid)
{
//$url=BASE_URL.'home.php';
header("Location: staff.php"); // Page redirecting to home.php 
}
else
{
$errorMsgReg="Username or Email already exists.";
}
}
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ABC Bank</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ABC Bank</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">         
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="cutomerReg.php">Customer Register</a> 
            </li>
			  <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="allcustomers.php">All Customers</a> 
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="slogin.php">Transaction</a> 
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a> 
            </li>
          </ul>
        </div>
      </div>
    </nav>

       <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><h1>Welcome <?php echo $userDetails->name; ?></h1></h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Your Logged-In us Staff</p>
          </div>
        </div>
      </div>
    </section>

	 <section id="Login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
				
				<div id="signup">
					<h3>Staff Register</h3>
					<form method="post" action="" name="signup">
					<label>Name</label>
					<input type="text" name="nameReg" autocomplete="off" />
					<label>Email</label>
					<input type="text" name="emailReg" autocomplete="off" />
					<label>Username</label>
					<input type="text" name="usernameReg" autocomplete="off" />
					<label>Password</label>
					<input type="password" name="passwordReg" autocomplete="off"/>
					<div class="errorMsg"></div>
					<input type="submit" class="button" name="signupSubmit" value="Signup">
					</form>
					</div>
					
            <hr class="my-4">
          </div>
        </div>
      </div>
  
    </section>
    

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
	<script src="css/Allcss.css"></script>
	<link rel="stylesheet" href="css/Allcss.css" type="text/css">

  </body>

</html>
