<?php
				include('connect.php');
				$get=$_GET['id'];
				$result = mysqli_query($bd,"delete from login where ID='$get'");
				echo "Deleted " . mysqli_affected_rows($bd);	
			    mysqli_close($bd);
				header('location:StudentsReports.php');
				exit();
			
?> 


