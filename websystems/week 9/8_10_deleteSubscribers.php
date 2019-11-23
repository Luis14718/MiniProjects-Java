<!DOCTYPE html>
<head>
</head>
<body>
<?php
$DBConnect =mysqli_connect("localhost", "root","");

mysqli_select_db( $DBConnect,"demodb");

$Query=mysqli_query($DBConnect,"DELETE FROM Subscribers");

echo "Deleted " . mysqli_affected_rows($DBConnect);

mysqli_close($DBConnect);

?>
</body>

