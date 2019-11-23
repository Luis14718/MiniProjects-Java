<?php
$mysql_hostname = "remotemysql.com:3306";
$mysql_user = "mANqYSyeyP";
$mysql_password = "8aitBK3zje";
$mysql_database = "busapprs";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

mysqli_select_db($bd,$mysql_database) or die("Could not select database");

?>.
.