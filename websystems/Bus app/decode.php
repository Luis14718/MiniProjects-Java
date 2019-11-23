<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: index.php");
    die();
}

require "vendor/autoload.php";

$qrcode = new QrReader($_FILES['qrimage']['tmp_name']);
$text = $qrcode->text();

if ($text=='marketing'){
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Work-Study Stopwatch</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="portfolio, riddle, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<link href="img/favicon.ico" rel="shortcut icon"/>

	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        html, body {
            height: 100%;
            width: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
   <script src="src/facebox.js" type="text/javascript"></script>
   <script type="text/javascript">
	 jQuery(document).ready(function($) {
	   $('a[rel*=facebox]').facebox({
		 loadingImage : 'src/loading.gif',
		 closeImage   : 'src/closelabel.png'
	   })
	 })
   </script>
   <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
	
</head>
<body>

	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-3">
					<div class="logo">
						<h2 class="site-logo">Work-Study Hours Counter </h2>
					</div>
				</div>
				<div class="col-lg-8 col-md-9">
					<a href="index.php" class="site-btn header-btn">Log Out</a>
					<nav class="main-menu">
						<ul>
							<li><a href="studentview.php">Home</a></li>
							<li><a href="newsletter.html">Newsletter</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
	</header>
	
	<section class="intro-section">
		<div class="container text-center">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<h2 class="section-title">Press <span>START</span> to keep record of your Work-Study hours</h2>
				</div>
			</div>
		</div>
	</section>
	
	<section class="page-section">
		<div class="container">
		<div class="row" align="center">
				<div class="col-lg-12">
            <div class="milestone">
             <h1><time>00:00:00</time></h1>
            </div>
			<div class="row" align="center">
				<div class="col-lg-12">
					<p> <div class="stopwatch">
            <div class="controls">
				   <button  id="start" STYLE="font-size: 14px;  min-width: 140px; text-align: center; padding: 15px 10px; position: relative; color: #fff; border: none;background-color: #000;margin-right: 15px;z-index: 1;"> Start</button> 
                <button id="stop"STYLE="font-size: 14px; min-width: 140px;text-align: center;padding: 15px 10px;position: relative;color: #fff;border: none;background-color: #000;margin-right: 15px;z-index: 1;">Stop</button>
                <button id="reset"STYLE="font-size: 14px;min-width: 140px; text-align: center;padding: 15px 10px;position: relative;color: #fff;border: none;background-color: #000 ;margin-right: 15px; z-index: 1;">Reset</button>
				<button id="save" STYLE="font-size: 14px; min-width: 140px;text-align: center;padding: 15px 10px; position: relative; color: #fff; border: none; background-color: #000; margin-right: 15px; z-index: 1;">Save</button>
  
            </div>
			
        </div>

        <script src="stopwatch2.js"></script>
					</p>
					
					
			</div>
	
	</section>
	
	<footer class="footer-section text-center">
		<div class="container">
			<h2 class="section-title mb-5">Let's work together</h2>
			
			<div class="credits">
				<h3><span>Keiser University Latin American Campus</span></h3>
				<p>Daniel Rodriguez, Juan Bosco, Gandy Domínguez</p>

		</div>
	</footer>

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>


   

    
</body>
</html>
	<?php }
	
	
	
	else{
		?><!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Work-Study Stopwatch</title>
			<meta charset="UTF-8">
			<meta name="keywords" content="portfolio, riddle, onepage, creative, html">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		  
			<link href="img/favicon.ico" rel="shortcut icon"/> <?php
	echo " try again ";
		header('studentview.php');
	}
	?>