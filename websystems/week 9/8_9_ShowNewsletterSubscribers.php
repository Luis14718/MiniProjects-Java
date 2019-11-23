<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Newsletter Subscribers</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Newsletter Subscribers</h1>
<?php
include("inc_db_newsletter.php");
if ($DBConnect !== FALSE) {
     $TableName = "subscribers";
     $SQLstring = "SELECT * FROM $TableName";
     $QueryResult = @mysqli_query( $DBConnect, $SQLstring);
     echo "<table width='100%' border='1'>\n";
     echo "<tr><th>Subscriber ID</th>" .
          "<th>Name</th><th>Email</th>" .
          "<th>Subscribe Date</th>" .
          "<th>Confirm Date</th></tr>\n";
     while (($Row = mysqli_fetch_assoc($QueryResult)) ) {
          echo "<tr><td>{$Row['subscriberID']}</td>";
          echo "<td>{$Row['name']}</td>";
          echo "<td>{$Row['email']}</td>";
          echo "<td>{$Row['subscribe_date']}</td>";
          echo "<td>{$Row['confirmed_date']}</td></tr>\n";
     };
     echo "</table>\n";
     $NumRows = mysqli_num_rows($QueryResult);
     $NumFields = mysqli_num_fields($QueryResult);
     echo "<p>Your query returned the above "
          . mysqli_num_rows($QueryResult)
          . " rows and ". mysqli_num_fields($QueryResult)
          . " fields:</p>";
     mysqli_free_result($QueryResult);
     mysqli_close($DBConnect);
}
?>
</body>
</html>

