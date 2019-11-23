<?php
session_start();
//$_SESSION['Username'];
include('connect.php');

if (isset($_POST['EmployeeID'])){
  
    $EmployeeID=$_POST['EmployeeID'];
    
    $vseparation= explode("/",$EmployeeID);
    
    
    for ($i = 0; $i <=sizeof($vseparation); $i++) {
      $sql="INSERT INTO `reportrs` (`Id`, `EmployeeID`, `Name`, `Lastname`, `Department`, `time`, `date`,`place`) VALUES ($vseparation[$i]);";
      mysqli_query($bd,$sql);
  }

    
      
   
    
    mysqli_close($bd);

}



?>
