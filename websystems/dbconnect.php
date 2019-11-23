<!DOCTYPE html>
<head>
</head>
<body>
<?php

 echo "hello";
$dbconnect= @new mysqli("localhost","root","","demodb");
$Erromsgs= array();

if ($dbconnect ->connect_error)
$ErrorMsgs[] = "The database server is not available. " .
"Connect Error is " . $mysqli->connect_errno . 
" " . $mysqli->connect_error . ".";





$Query=$dbconnect->query("SELECT * FROM vehicles");


echo "<table width='25%' border='1'>";
echo "<tr>";
echo "<th style='background-color:cyan'>" . "License" . "</th>";
echo "<th style='background-color:cyan'>" . "Make" . "</th>";
echo "</tr>";
while ($Row=$Query->fetch_row()) {
   echo "<tr>" ;
   echo "<td>" . $Row[0] . "</td>";
   echo "<td>" .  $Row[1] . "</td>";
   echo  "</tr>";
};


$Query->free();
$dbconnect->close();
echo "</table>";
?>

</body>