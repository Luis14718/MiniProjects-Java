<head>
<title>Web System</title>

<style>
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
		background-color: darkblue;
		font-family: "Roboto", sans-serif;
	}
	.btn-three:hover
	{
		background-color: darkblue;
		transition: all 0.5s ease-in;
	}
</style>

	
	</head>
	
	<header>
	<body>
		<?php include('inc_buttonnav.html');
		?>
	<div class="hero">
			<h1> Contact us </h1>
				<div class="button">
					<a href="https://mail.google.com" class="btn btn-one"> Juan Bosco  </a>
					<a href="https://mail.google.com" class="btn btn-two"> Luis </a>
					<a href="https://mail.google.com" class="btn btn-three"> Gangy Mendieta </a>
				</div>
				</body>