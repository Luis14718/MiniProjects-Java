<?php
$ErrorMsgs = array();
$DBConnect = @new mysqli("localhost", "root", "", 
     "inventory");
if ($DBConnect->connect_error)
   $ErrorMsgs[] = "The database server is not available. " .
               "Connect Error is " . $mysqli->connect_errno . 
               " " . $mysqli->connect_error . ".";
?>

