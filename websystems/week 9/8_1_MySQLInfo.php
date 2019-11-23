<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MySQL Server Information</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>MySQL Database Server Information</h1>
<?php
$DBConnect = mysqli_connect("localhost", "root", "");

if ($DBConnect===FALSE)
   echo "<p>Connection failed with error " . mysqli_error($DBConnect) . "</p>\n";
else {
	echo "<p>MySQL client version: "
     . mysqli_get_client_info() . "</p>\n";
     echo "<p>MySQL connection: "
          . mysqli_get_host_info($DBConnect) . "</p>\n";
     echo "<p>MySQL protocol version: "
          . mysqli_get_proto_info($DBConnect) . "</p>\n";
     echo "<p>MySQL server version: "
          . mysqli_get_server_info($DBConnect) . "</p>\n";
     mysqli_close($DBConnect);
}
?>
</body>
</html>

