<?php
error_reporting(0);
ini_set('display_errors', 0);


        session_start();
		Echo 'Your Balance :',$_SESSION['user'];
              //echo '<br>',$_SESSION['user1'];
            //$user=$_SESSION['login'];
            //$pass=$_SESSION['login1'];
         $id=$_SESSION['user1'];
            mysql_connect("localhost","root","");
            mysql_select_db("bank");
            
            if(isset($_GET['dps']))
        {
            $depositamt=($_SESSION['user']+$_GET['text1']);
            //$realDepositamt=mysql_query("UPDATE user
//SET amt='$depositamt'
//WHERE id='$id'");
            
            $_SESSION['user']=$depositamt;
            $enamt=$_GET['text1'];
            echo $enamt;
            echo $id;
            $d='deposit';
            mysql_query("INSERT INTO `totaltra`(`id`, `tratype`, `amt`) VALUES ('$id','$d','$enamt')");
            //$intbl=  mysql_query("SELECT intbalans FROM `user` WHERE username='$user' and password='$pass'");
           // echo $intbl;
            //echo '<br>Now Your Real Balance is:','<b>',$depositamt,'</b>';
            
            }
            if(isset($_GET['wd']))
        {
            $withdraamt=($_SESSION['user']-$_GET['text2']);
            if($withdraamt>=0)
            {
                 $realwithdraamt=mysql_query("UPDATE user
SET amt='$withdraamt'
WHERE username='$user' and id='$id';");
           
            //echo '<br> Now Your Real Balance is :','<b>',$withdraamt,'</b>';
          $_SESSION['user']= $withdraamt;
            }
            else
            {
                echo '<br>Not have Amount Balance';
                
                echo '<br>Please Enter ';
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
			
          </ul>
        </div>
      </div>
    </nav>

       <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><h1>Welcome</h1></h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Your Logged-In</p>
          </div>
        </div>
      </div>
    </section>

	 <section id="Login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
			
				<form action="sDeposit.php">
          Enter Amount You Want To Deposit:  <input type="text" name="text1" value="" />
          <br><input type="submit" value="Sumbit" name="dps" /><br>
          <input type="button" value="Back To Home Page" name="home"ONCLICK="window.location.href='shome.php' ""/>
        <input type="BUTTON" value="WithDraw" name="wd">
            <input type="button" value="Log-Out" name="home"ONCLICK="window.location.href='Staff.php' ""/>
                </form>
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

  </body>

</html>