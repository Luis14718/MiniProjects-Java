<doctype:<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="main.js"></script>
	<style>

table {


border: 2px;

border-color: black;
border-collapse: initial;
border-right: 2px;

}
td{

	white-space:pre-wrap; 
	word-wrap:break-word;
}
td.correct{
	background-color:#7FFF00;

}
	</style>

</head>
<body>
<table border='1px' cellspacing='opx' cellpadding='1px' >
	
	
		<?php
		$myvarible="hello";
		echo "$myvarible";


		$password = "Pass%word1";
	$passwordArray = array(
		"NoDigitsOrOthers",
		"NoDigits...",
		"NoOthers999",
		"2 Spaces !",
		"0LOWERCASE?",
		"0uppercase+",
		"Sh0r+",
		"This1IsMuchTooLongForAPassword!",
		"1GoodPassword!",
	    "GoodPassword2!");
	 echo "<tr>";
	
	foreach($passwordArray as $password)

	{
		if((preg_match("/[A-Z]/",$password) ==1)&& 
		(preg_match("/[a-z]/", $password) ==1)&&
		(preg_match("/[0-9]/", $password) ==1)&&
		(preg_match("/\W/", $password) == 1) &&
		(preg_match("/\ /",$password)== 0)&&
		((strlen("$password") >7) && (strlen("$password")<17))
		)
        {
		echo"<td>";
		echo "checking \"	$password \" </br>";
		echo "</tr>";
		echo "<td class=correct >";
		echo "\n $password is a strong password";
		echo "</td>";
		
		echo"</td>";
		
	     echo "</tr>";
		}
	     else{
			
        echo "<td>";
		echo "checking \" $password \"</br>";
	     echo"</td>";
		echo "</tr>";
		echo"<tr>";
		echo "<td>";
         if ((preg_match("/[A-Z]/",$password) ==0)) {
		 echo "\nwarning \" $password \" has no upppercase letters";
		 
		 }
		  if ((preg_match("/[a-z]/",$password) ==0)) {
			echo "\nwarning \" $password \" has no lowercase letters ";
			
			}
		if ((preg_match("/\W/",$password) ==0)) {
				echo "\nwarning \" $password \" has no non-alphanumeric characters ";
				
				}
	 if ((preg_match("/[0-9]/",$password) ==0)) {
					echo "\nwarning \" $password \" has no numbers ";
					
					}
	if ((strlen("$password") <7)) {
						echo "\nwarning \" $password \" has less than 8 characters ";
	}	
	if ((strlen("$password")>17)) {
		echo "\nwarning \" $password \" has more than 16 characters ";

}		
if (preg_match("/\ /",$password)== 1) {
	echo "\nwarning \" $password \" cointains one or more spaces ";
}		
echo "\n $password is nota a strong password";
		echo "</td>";
		echo "</tr>";

		 }

	}
	
	?>		
				
		</table>
		
</body>
