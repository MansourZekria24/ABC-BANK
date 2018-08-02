<?php
         error_reporting(0);
ini_set('display_errors', 0);


		 session_start();
		 
	       $id=$_SESSION['user1']; 
            mysql_connect("localhost","root","");
            mysql_select_db("bank");
            $total=  mysql_query("SELECT `tratype`, `amt`, `id` FROM `totaltra` WHERE id='$id'");

          
echo '</br>';
        echo '<table border="2" align="center">';
       
        echo '<tr style="background-color: red">';
        echo '<td>Your Total Transection: <br></td>';
        echo '<tr style="background-color: pink"><td>';
        echo 'Deposit/Withdraw';
        echo '</td>';

        echo '<td>';
        echo 'Amount';
        echo '</td>';


        echo '</tr>';           
while($row=  mysql_fetch_array($total))
           {
                echo '<tr>';
           

            echo '<td>';
            echo $row['tratype'];
            echo '</td>';

            echo '<td>';
            echo $row['amt'];
            echo '</td>';


            echo '</tr>';
                
                
                
              
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
			
			<?php
         session_start();
        
      
        
	       $id=$_SESSION['user1']; 
            mysql_connect("localhost","root","");
            mysql_select_db("bank");
            $total=  mysql_query("SELECT `tratype`, `amt`, `id` FROM `totaltra` WHERE id='$id'");

          
echo '</br>';
        echo '<table border="2" align="center">';
       
        echo '<tr style="background-color: red">';
        echo '<td>Your Total Transection: <br></td>';
        echo '<tr style="background-color: pink"><td>';
        echo 'Deposit/Withdraw';
        echo '</td>';

        echo '<td>';
        echo 'Amount';
        echo '</td>';


        echo '</tr>';           
while($row=  mysql_fetch_array($total))
           {
                echo '<tr>';
           

            echo '<td>';
            echo $row['tratype'];
            echo '</td>';

            echo '<td>';
            echo $row['amt'];
            echo '</td>';


            echo '</tr>';
                
                
                
              
           }
        ?>
			
				<form action="stotaltra.php">
            <table border="2" align="auto">
                
           <tr><td> 
                   <input type="button" value="Back" name="home"ONCLICK="window.location.href='shome.php' ""/>
   <input type="button" value="Log-Out" name="home"ONCLICK="window.location.href='Staff.php' ""/>
   </table>
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