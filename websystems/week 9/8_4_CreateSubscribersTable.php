<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create �subscribers� Table</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
include("inc_db_newsletter.php");
if ($DBConnect !== FALSE) {
     $TableName = "students";
     $SQLstring = "SHOW TABLES LIKE '$TableName'";
     $QueryResult = @mysqli_query($DBConnect,$SQLstring);
     if (@mysqli_num_rows($QueryResult) == 0) {
          $SQLstring = "CREATE TABLE students (sutudentID
          SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          firstname VARCHAR(80), lastname VARCHAR(100))";

          $QueryResult = @mysqli_query($DBConnect,$SQLstring);
          if ($QueryResult === FALSE)
               echo "<p>Unable to create the students table.</p>"
               . "<p>Error code " . mysqli_errno($DBConnect)
               . ": " . mysqli_error($DBConnect) . "</p>";
          else
               echo "<p>Successfully created the "
               . "students table.</p>";
     }
     else
          echo "<p>The students table already exists.</p>";
     mysqli_close($DBConnect);
}
?>
</body>
</html>

