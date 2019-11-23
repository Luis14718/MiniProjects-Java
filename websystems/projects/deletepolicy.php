<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysqli_query($bd,"delete from policy where pol_id='$get'");
				echo "Deleted " . mysqli_affected_rows($bd);	
			    mysqli_close($bd);
				header('location:policy.php');
				exit();
			
?> 


