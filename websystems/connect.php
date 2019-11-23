<?php
$mysql_hostname = "db4free.net:3306";
$mysql_user = "administratorrs";
$mysql_password = "C1nc0Playas!9";
$mysql_database = "busapprs";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

mysqli_select_db($bd,$mysql_database) or die("Could not select database");

?>.
.