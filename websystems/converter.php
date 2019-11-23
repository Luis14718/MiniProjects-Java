<?php
$mysql_hostname = "db4free.net:3306";
$mysql_user = "administratorrs";
$mysql_password = "C1nc0Playas!9";
$mysql_database = "busapprs";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

if(mysqli_connect_error($bd)){

echo "failed to connect to database".mysqli_connect_error();

} 
$sql="SELECT* FROM busapprs.reportrs";
$result= mysqli_query($bd,$sql);
if($result)
{
    while($row=mysqli_fetch_array($result))
    {
        $flag[]=$row;
        
       
    }
 print(json_encode($flag));
}

?> 