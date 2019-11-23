<?php
echo "Hello world";
echo "<br>";
$countries = array("nicaragua",
"panama", "El Salvador");
echo "<br>";
print_r($countries);
echo "<br>";
$contries[2]="Guatemala";
echo"<br>";
print_r($contries);

echo"<br>";
echo"<br>";
$measurement= count($countries);
echo "the count of elements in countries is : $measurement";
echo"<br>";

$countries[$measurement+1]="argentina";
echo "<br>";
$newmeasurement= count($countries);
print_r($countries);
echo "<br>";
echo "thec count of elements in countries is : $newmeasurement";

?>