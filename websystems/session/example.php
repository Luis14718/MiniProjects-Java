<?php
session_start();
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form method="POST" action="example2.php?">
User
<input type="text"  name="user" />
<?php 
$_SESSION['welcome_msg']='Welcome';
?>
<input type="submit" name="login" value =" log in"/>


</form>
</body>
</html>