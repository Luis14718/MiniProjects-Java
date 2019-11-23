<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	

	$errflag = false;
	
	include('connect.php');
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($bd,$str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);	
		}
		// alert <?php  mysqli_real_escape_string($bd, $str); 
		$myvar= mysqli_real_escape_string($bd,$str); 
		echo $myvar;
		?>  alert <?php
		return mysqli_real_escape_string($bd,$str);
	}
		?>  hello <?php $_POST['username'];  ?> <?php
	//Sanitize the POST values
	$login = clean($bd,$_POST['username']);
	$password = clean($bd,$_POST['password']);
	
	
	
	//Create query
	$qry="SELECT * FROM login WHERE Username='$login' AND Password='$password'";

		$result=mysqli_query($bd,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
		
			$member = mysqli_fetch_assoc($result);
			$_SESSION['Name'] = $member['Name'];
			$_SESSION['Username']=$member['Username'];
		
			$_SESSION['ID'] = $member['ID'];
			$id=$_SESSION['ID'];
		

			$_SESSION['SESS_PRO_PIC'] = $member['Name'] .' '. $member['LastName'];
			
			session_write_close();
			
			header("location: home.php");
			exit();
		
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>