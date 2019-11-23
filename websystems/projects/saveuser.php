<?php
include('config.php');

$sql="INSERT INTO user (name, lastname, department, username, password)
VALUES
('$_POST[name]','$_POST[lastname]','$_POST[dept]','$_POST[username]','$_POST[password]')";

if (!mysqli_query($bd,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header("location: index.php");

mysqli_close($bd)
?>