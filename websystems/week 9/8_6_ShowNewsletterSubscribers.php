<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Vehicles</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>vehicles</h1>
<?php
include("inc_db_newsletter.php");
if ($DBConnect !== FALSE) {
     $TableName = "vehicles";
     $SQLstring = "SELECT * FROM $TableName";
     $QueryResult = @mysqli_query( $DBConnect, $SQLstring);
     echo "<table width='100%' border='1'>\n";
     echo "<tr><th>License</th>" .
          "<th>make</th><th>model</th>" .
          "<th>miles</th>" .
          "<th>assigned_to</th></tr>\n";
     while (($Row = mysqli_fetch_row($QueryResult)) ) {
          echo "<tr><td>{$Row[0]}</td>";
          echo "<td><b>{$Row[1]}</td>";
          echo "<td>{$Row[2]}</td>";
          echo "<td>{$Row[3]}</td>";
          echo "<td>{$Row[4]}</td></tr>\n";
		 
     };
     echo "</table>\n";
     mysqli_close($DBConnect);
}
?>
</body>
</html>

