
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
              <a class="nav-link js-scroll-trigger" href="Staff.php">Staff Register</a> 
            </li>
			
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="cutomerReg.php">Customer Register</a> 
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
            <h2 class="section-heading text-white"><h1>All Customers</h1></h2>
            <hr class="light my-4">
          </div>
        </div>
      </div>
    </section>

	 <section id="Login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">All Customer Account</h2>
			
			<div class="maindiv">
<div class="divA">

<div class="divB">
<div class="divD">
<p>All Customers</p>
<?php
error_reporting(0);
ini_set('display_errors', 0);

$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
$db = mysql_select_db("bank", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from user where id=$del", $connection);
}
$query = mysql_query("select * from user", $connection); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"allcustomers.php?id={$row['id']}\">{$row['username']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysql_query("select * from user where id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<form class="form">
<h2>---Details---</h2><br></br><br></br>
<span>Name:</span> <?php echo $row1['username']; ?><br></br>
<span>Balance:</span> <?php echo $row1['intbalans']; ?>
<?php echo "<b><a href=\"allcustomers.php?del={$row1['id']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?>
</form><?php
}
}
// Closing Connection with Server.
mysql_close($connection);
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
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

	<style type="text/css">
	@import "http://fonts.googleapis.com/css?family=Droid+Serif";
/* Above line is to import Google font style */
.maindiv{
margin:0 auto;
width:980px;
height:500px;
background:#fff;
padding-top:20px;
font-size:14px;
font-family:'Droid Serif',serif
}
.title{
width:100%;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center;
font-family:'Droid Serif',serif
}
.divA{
width:70%;
float:left;
margin-top:30px
}
.form{
width:400px;
float:left;
background-color:#fff;
font-family:'Droid Serif',serif;
padding-left:30px
}
.divB{
width:100%;
height:100%;
background-color:#fff;
border:dashed 1px #999
}
.divD{
width:200px;
height:480px;
padding:0 20px;
float:left;
background-color:#f0f8ff;
border-right:dashed 1px #999
}
p{
text-align:center;
font-weight:700;
color:#5678C0;
font-size:18px;
text-shadow:2px 2px 2px #cfcfcf
}
.submit{
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:4px;
margin-top:40px;
border:none;
width:100px;
height:30px;
box-shadow:0 0 1px 1px #123456;
font-size:16px;
cursor:pointer
}
.form h2{
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
a{
text-decoration:none;
font-size:16px;
margin:2px 0 0 30px;
padding:3px;
color:#1F8DD6
}
a:hover{
text-shadow:2px 2px 2px #cfcfcf;
font-size:18px
}
.clear{
clear:both
}
span{
font-weight:700
}
	</style>
  </body>

</html>
