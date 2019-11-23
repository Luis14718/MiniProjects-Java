<?php
include('connect.php');




	
		
			
			
			
		
			$ID=$_POST['ID'];
			$username=$_POST['IDemployee'];
			$userID=$_POST['Time'];
			$name=$_POST['Date'];
			$lastname=$_POST['Driver'];
		
			$id=$_POST['ID'];
			

			
			$update=mysqli_query($bd,"UPDATE `usertp` SET `IDemployee` = '$username', `Time` = '$userID',`Date` = '$name', `Driver` = '$lastname' WHERE `login`.`ID` = $ID");
			
			
			header("location: StudentsReports.php");
			exit();
		
			
	

?>
