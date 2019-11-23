<?php
session_start();
//$_SESSION['Username'];
include('connect.php');
$variable= $_POST[code];
$vseparation= explode(";",$variable);

date_default_timezone_get("America/Managua");
$TIME=date("H:i:s");
$DATE=date("Y/m/d");

$sql="INSERT INTO `reportrs` (`Id`, `EmployeeID`, `Name`, `Lastname`, `Department`, `time`, `date`) VALUES (NULL, '$vseparation[0]', '$vseparation[1]', '$vseparation[2]', '$vseparation[3]', '$TIME', '$DATE');";

if (!mysqli_query($bd,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header("location: home.php");

mysqli_close($bd)
?>
