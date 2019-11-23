<!DOCTYPE html>
<head>
</head>
<body>
<?php
$DBConnect =@mysqli_connect("localhost", "root","");

mysqli_select_db( $DBConnect, "demodb");

$Query=mysqli_query($DBConnect,"SELECT * FROM vehicles where make='Toyota'");

echo "<table width='25%' border='1'>";
echo "<tr>";
echo "<th style='background-color:cyan'>" . "License" . "</th>";
echo "<th style='background-color:cyan'>" . "Make" . "</th>";
echo "</tr>";
while ($Row=mysqli_fetch_row($Query)) {
   echo "<tr>" ;
   echo "<td>" . $Row[0] . "</td>";
   echo "<td>" .  $Row[1] . "</td>";
   echo  "</tr>";
};
mysqli_free_result($Query);
mysqli_close($DBConnect);
echo "</table>";
?>
</body>

