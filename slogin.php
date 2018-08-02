 <?php
 //error_reporting(0);
//ini_set('display_errors', 0);

        session_start();
        if(isset($_GET['lgn']))
        {
            if((isset($_GET['uname']))=='' && (isset ($_GET['cid']))=='')
                         {
                         echo '<br>Plz Enter Value  <br> ';  
                        } 
      else if($_GET['uname']=='' && $_GET['cid']=='')
                     {
                         echo '<br><td>Plz Enter Value 1  <br> ';  
                         }
                        else if($_GET['uname'] && $_GET['cid']=='')
                     {
                         echo '<br><td>Plz Enter Value 2  <br> ';  
                         }
                         else

            {
            mysql_connect("localhost","root","");
            mysql_select_db("bank");
	
            $user=$_GET['uname'];
            $id=$_GET['cid'];
            $_SESSION['login']=$user;
            $_SESSION['login1']=$id;
            
	
            $Login=mysql_query("SELECT * FROM `user` WHERE username='$user' and id='$id'");
            $count1=mysql_num_rows($Login);
            $Amt1=mysql_query("SELECT intbalans,id FROM user where username='$user' and id='$id'");
           while($row=  mysql_fetch_array($Amt1))
           {
               echo 'Your Balance : ';
          echo $row['intbalans'];
          
          echo '<br>',$row['id'];
         $_SESSION['user']=$row['intbalans'];
         $_SESSION['user1']=$row['id'];
        //$_SESSION['intamt']=$_SESSION['user'];
           $_SESSION['intamt']=$row['intbalans'];
        
           }      
 
            if($count1>0)
	{
		
		// $_SESSION['user']=$Amt1;
                header('location:shome.php');
                
               
        }
 else   
     {
    echo "<td>login Faild" ;
     }
        
        }
        }
        ?>
		
		<?php
        if(isset($_GET['act']))
        {
                  mysql_connect("localhost","root","");
        mysql_select_db("bank");
        if(isset($_GET['act']))
        {
                $Name=$_GET['uname'];
		$Id=$_GET['cid'];
                $Amt=$_GET['amt'];
	 mysql_query("INSERT INTO `user`(`username`, `id`,intbalans) VALUES('$Name','$Id','$Amt')");
         header("location:sLogin.php");
         
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
            <h2 class="section-heading text-white"><h1>Welcome</h1></h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Your Logged-In us Staff</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Please Login</h2>
			
		<form action="slogin.php">
        
        <table border="2" align="center">
       
        <tr style="background-color: red" align="center">
            <th>
            Customer Login 
            </th>
        </tr>
        
        <table border="2" align="center">
       
       
            <tr style="background-color: pink" align="center"><td> Username:</td><td><input type="text" name="uname" value="" /><br>
           <tr style="background-color: pink" align="center">
                <td> ID:</td><td><input type="password" name="cid" value="" /><br>
           </tr>
               <td>
           <input type="submit" value="Login" name="lgn" />
           </td>
          
           
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

  </body>

</html>
