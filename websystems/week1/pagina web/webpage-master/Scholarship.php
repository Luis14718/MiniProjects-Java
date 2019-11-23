<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <style>
     
	  body
		{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image.jpg);
			height: 100vh;
			background-size: cover;
			color: white;
			background-position: center;

		  
		}
		
  
		body
	{
		background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image.jpg);
		height: 100vh;
        background-size: cover;
        color: white;
        background-position: center;
      
    }
    .main-nav 
	{
		float: right;
		list-style: none;
		margin-top: 30px;
	}
	
	.main-nav li 
	{
		display: inline-block;
		
	}
	
	.main-nav li a 
	{
		color: white;
		text-decoration: none;
		padding: 5px 20px;
		font-family: "Roboto", sans-serif;
		font-size: 15px;
	}
	
	.main-nav li.active a 
	{
		border: 1px solid white;
	}
	.main-nav li a:hover
	{
		border: 1px solid white;
	}
	
	.logo img
	{
		width:150px;
		height:auto;
		float: left;
	}
	

	
	
	.hero 
	{
		position: absolute;
		width: 1200px;
		margin-left: 0;
		margin-top: 0;
	}
	.hero2 
	{
		position: absolute;
		width: 800 px;
		margin-left: 0; 
		margin-top: 0;
	}
	
	h1 
	{
		color: white;
		text-transform: uppercase;
		font-size: 40px;
		text-align: center;
		margin-top: 275px;
		
	}
	
	
	
	.button
	{
		margin-top: 30px;
		margin-left: 440px;
	}
	
	.btn 
	{
		border: 1px solid white;
		padding: 10px 30px;
		color: white;
		text-decoration: none;
		margin-right: 5px;
		font-size: 13px;
		text-transform: uppercase;
	}
	
	.btn-one
	{
		background-color: darkblue;
		font-family: "Roboto", sans-serif;
	}
	
	.btn-two
	{
		font-family: "Roboto", sans-serif;
	}
	.btn-two:hover
	{
		background-color: darkblue;
		transition: all 0.5s ease-in;
	}
	.btn-three
	{
		font-family: "Roboto", sans-serif;
	}
	.btn-three:hover
	{
		background-color: darkblue;
		transition: all 0.5s ease-in;
	}
    </style>
<title>Scholarship Form</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>
	<?php

include('inc_buttonnav.html');

	?>
<h2 >Scholarship Form</h2>
<form name = "scholarship" action = "process_scholarship.php" method = "POST">
<p>First Name: <input type="text" name="firstName" /></p>
<p>Last Name: <input type="text" name="lName" /></p>
<p>Password: <input type= "password" name="password"  /></p>
<input type="reset" value="Clear Form" />
<input type="submit" name="Submit" value="Send Form" />
</form>

</body>
</html>

