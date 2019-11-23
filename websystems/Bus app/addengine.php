<?php
include('connect.php');



$username=$_POST['username'];
$password=$_POST['password'];

$userID=$_POST['userID'];
$permiso=$_POST['permiso'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$Department=$_POST['Department'];
$id=$_POST['ID'];

			

			
			$update=mysqli_query($bd,"INSERT INTO login (username,password,userID,permiso,name,lastname,department)
VALUES
('$username','$password','$userID','$permiso','$name','$lastname','$Department')");
		
			
			header("location: StudentsReports.php");
			exit();
		
			
	


?>
