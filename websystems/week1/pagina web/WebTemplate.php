<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The Best Website Ever</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php include ("inc_header.html"); ?>
<div style = "width:20%; text-align:center; float:center">
<?php include ("inc_buttonnav.html"); ?>
</div>
<!-- Start of Dynamic Content section -->
<?php 
if (isset($_GET['content'])) {
     switch ($_GET['content']) {
          case 'About Me':
               include('inc_about.html');
               break;
          case 'Contact Me':
               include('inc_contact.html');
               break;
          case 'Home': 
               include('inc_home.html');
			    break;
		  case 'Zodiac calendar':
		        include('zodiacocalendar.php');
				break;
          default:
               include('inc_home.html');
               break;
     }
}
else // No button has been selected
     include('inc_home.html');
?>
<!-- End of Dynamic Content section -->
<?php include ("inc_footer.php"); ?>

</body>
</html>
