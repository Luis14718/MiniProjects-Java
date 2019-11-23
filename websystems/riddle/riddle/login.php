<?php
	//Start session
	session_start();
	

	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Work study Counter</title>
	<meta charset="UTF-8">
	<meta name="description" content="Riddle - Portfolio Template">
	<meta name="keywords" content="portfolio, riddle, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="img/favicon.ico" rel="shortcut icon"/>


	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
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

    <script type="text/javascript">
function validateForm()
{
var x=document.forms["myform"]["username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
  
var x=document.forms["myform"]["password"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
</head>
<body >

<div class="login12">
<div class="container" width=205>
 <H1 align="center"> login</H1> 
 
 <form action="loginengine.php" name="myform" method="post" onsubmit="return validateForm()">
    <div class= "form-group" align="center">
    <input  type= "text" name="username" placeholder= "Enter your username"value="">
    </div>
    <div class= "form-group" align ="center">
    <input type="password" name="password" placeholder= "Enter your password"value="">
    </div>
    <div class= "form-group" align ="center">
    <input class="site-btn" type="submit" value= "send" > 
    </div>
    </form>
</div>
<div>

</body>
</html>