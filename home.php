        <?php
		error_reporting(0);
ini_set('display_errors', 0);

        session_start();
        mysql_connect("localhost","root","");
        mysql_select_db("bank");
        $id=$_SESSION['user1']; 
        //echo '<br>',$id;
        
       $bb= mysql_query("SELECT  `intbalans` FROM `user` where id='$id'");
       while($row=  mysql_fetch_array($bb))
           {
               //echo 'Your Initial Balance : ';
          echo $row['intbalans'];
           }
	        //echo '<br>Your Initial balance is=',$row['intbalans'];
                $z=mysql_query("SELECT ((((SELECT intbalans FROM user WHERE id ='$id') + 
(SELECT COALESCE(SUM(amt),0) FROM  `totaltra` WHERE tratype =  'deposit' AND id ='$id') - 
(SELECT COALESCE( SUM( amt ),0) FROM  `totaltra` WHERE tratype =  'withdraw' AND id ='$id' ))+(SELECT COALESCE(SUM(amt),0)ttransfer FROM  `transfer` 
WHERE 
Toid ='$id'))-(SELECT COALESCE(SUM(amt),0)ttransfer FROM  `transfer` 
WHERE 
Fromid ='$id')) AS tbalance");
          
                $row = mysql_fetch_array($z);
      $tbalance=$row["tbalance"]; 
		$_SESSION['z']=$row["tbalance"];
               // echo '<table border="2" align="center">';
                //echo "<td>Your Last balance is=".$tbalance;
                
                //$_SESSION['intamt']=$_SESSION['user'];
          
            
            if(isset($_GET["trn"]))
        {
            header("location:transection.php");
        }
        if(isset($_GET["demo"]))
        {
            header("location:Realbalance.php");
        }
        if(isset($_GET["tf"]))
        {
            header("location:totaltransfer.php");
        }
           if(isset($_GET["trs"]))
        {
            header("location:totaltra.php");
        }
        
           // session_destroy();
       
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
            <h2 class="section-heading text-white"><h1>Welcome </h1></h2>
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
				<form action="home.php">
    
   <input type="submit" value="Transection" name="trn" />
   <input type="button" value="Transfer Amount" name="home"ONCLICK="window.location.href='transfer.php' ""/>
   <input type="submit" value="All Transection" name="trs" />
   <input type="submit" value="All Transfer" name="tf" />
   <input type="button" value="Log-Out" name="home"ONCLICK="window.location.href='index.php' ""/>
				<?php echo '<table border="2" align="center">';?>
                <h2>
				<?php echo "<td>Your balance is=".$tbalance;?> </h2>
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