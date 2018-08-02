<?php
include("config.php");
include('class/userClass.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
/* Login Form */
if (!empty($_POST['loginSubmit'])) 
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];
if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
{
$uid=$userClass->userLogin($usernameEmail,$password);
if($uid)
{
//$url=BASE_URL.'home.php';
header("Location: staff.php"); // Page redirecting to home.php 
}
else
{
$errorMsgLogin="Please check login details.";
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
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
               
<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Staff Login</a>
            </li>
			
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Cusotmer Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Welcome to ABC Online Banking</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">A few of our top features Online Banking from ABC Bank is secure, easy to use and convenient, and gives you all the tools you need to manage your money online. Here are just a few of our top features:</p>
              <p>View your balance</p>
              <p>Make payments </p>
              <p>Transfer money between your accounts</p>
              <p>Set up and manage your regular payments</p>
              <p>View your transaction details</p>

            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Lets start with Online Banking</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Login</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Please Login</h2>
			
				<div id="login">
				<div class="login">
				<h3>Login</h3>
				<form method="post" action="" name="login">
				<label>Username or Email</label>
				<input type="text" name="usernameEmail" autocomplete="off" />
				<label>Password</label>
				<input type="password" name="password" autocomplete="off"/>
				<div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
				<input type="submit" class="button" name="loginSubmit" value="Login">
				</form>
				</div>
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
