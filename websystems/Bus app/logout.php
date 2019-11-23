
<?php
//logout.php
include('connect.php');
session_start();



$id=$_SESSION['ID'];
          
            session_destroy();
            header("location:index.php");
?>
