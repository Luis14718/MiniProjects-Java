<?php
$myfavoritefood = array("pizza","spagetti","seafood");
array_splice($myfavoritefood,0,0,"vegetables");
print_r($myfavoritefood);
array_splice($myfavoritefood,1,1);
echo "</br>";
print_r($myfavoritefood);
unset($myfavoritefood[1]);
echo"</br>";
print_r($myfavoritefood);

echo"</br>";
print_r($myfavoritefood);
echo"</br>";
$myfavoritefood= array_values($myfavoritefood);
print_r($myfavoritefood);

$departments= array("Nicaragua"=>"managua","El_salvador"=>"san salvador","Honduras"=>"tegucigalpa");
print_r($departments);
$depart= $departments['Nicaragua'];
echo"$depart";

?>