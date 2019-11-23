s<?php

session_start();
$name= $_SESSION['Name'];
$username= $_SESSION['Username'];
if($username==null){

	header("location: index.php");

}
else {


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="mobile-web-app-capable" content="yes"> 
	<meta name="description" content="Riddle - Portfolio Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css"/>
	<script>
window.addEventListener("load",function() {
  setTimeout(function(){
    window.scrollTo(0, 1);
  }, 0);
});
	</script>
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



</head>

<body style='background-image: url("rancho3.jpg")'  >


	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- header section start -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-3">
					<div class="logo">
						<h2 class="site-logo">Transportation app</h2>
					</div>
				</div>
				<div class="col-lg-8 col-md-9">
					<a href="logout.php" class="site-btn header-btn">Log Out</a>
					<nav class="main-menu">
						<ul>
							<li><a  href="data.php">Data recolected</a></li>
						
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
			
		</div>
		
	</header>

<div class="containaer text-center">
	
	<?php
         echo "Hello "."$name"." It's nice to see you again...";
		?>

	</div>
	<!-- intro section start -->
	<section class="intro-section">
	
		<div class="container text-center">
		
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<h2 class="section-title">Scan the <span>code</span></h2>
				</div>
			</div>
		</div>
		
		<div class="container">
		<div class="row" align="center">
				<div class="col-lg-12">
            <div class="">
		  <?php include('Qrconfig.php');
		  
		  ?>
            
		
			
        </div>

       
					</p>
					
					
			</div>
	</section>
	<!-- intro section end -->
	<section class="page-section">
<div class="services"> 
			<h1></h1>
		</div>
		
		

	</div>
	</section>




		
	
	<footer class="footer-section text-center">
		<div class="container">
			<a href="logout.php"class="site-btn">Log Out</a>
			<div class="credits">
				<h3><span>Rancho Santana Transportation service</span></h3>
			
			</div>

		</div>
	</footer>




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
<?php

}

?>