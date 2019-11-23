<!DOCTYPE html>
<html>
<head>
<title>Scholarship Form</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lName'];

echo "Thank you for filling out the scholarship form, ".$firstName." ".$lastName .". </br>" ;



$password = $_POST['password'];
$Show= false;

if((preg_match("/[A-Z]/",$password) ==1)&& 
		(preg_match("/[a-z]/", $password) ==1)&&
		(preg_match("/[0-9]/", $password) ==1)&&
		(preg_match("/\W/", $password) == 1) &&
		(preg_match("/\ /",$password)== 0)&&
		((strlen("$password") >7) && (strlen("$password")<17))
		)
        {
		echo "checking your Password </br>";
	"</br>";
		echo "<td class=correct >";
		echo "\n your password is a strong password";
		}
	     else{
			
		echo "checking your password </br>";
	    
		
         if ((preg_match("/[A-Z]/",$password) ==0)) {
		 echo "\nwarning your password has no upppercase letters </br>";
		
		 }
		  if ((preg_match("/[a-z]/",$password) ==0)) {
			echo "\nwarning your password has no lowercase letters </br>";
			
			}
		if ((preg_match("/\W/",$password) ==0)) {
				echo "\nwarning your password has no non-alphanumeric characters </br> ";
				"</br>";
				}
	 if ((preg_match("/[0-9]/",$password) ==0)) {
					echo "\nwarning  has no numbersyour password </br>";
				
					}
	if ((strlen("$password") <7)) {
						echo "\nwarning your password has less than 8 characters </br>";
					
	}	
	if ((strlen("$password")>17)) {
		echo "\nwarning your password has more than 16 characters  </br>";
		
}		
if (preg_match("/\ /",$password)== 1) {
	echo "\nwarning your password cointains one or more spaces </br>";
	
}		
echo "\n Your Password is not a strong password </br>";

		 }


?>
</body>
</html>

