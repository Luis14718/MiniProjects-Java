 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>



<?php

$r="jdoe:8w4d503a39yk2:1463:24:John Doe:/home/jdoe:/bin/bash:bla";
$pass= array("login name","Optional encrypted password","nuerical user id"," numerical grup id","user home directory","optional user command interpreter");
$fieldin= 0;
$extrafiel=0;
$fieldS= explode(":",$r);



foreach($fieldS as $fieldin => $fieldvalue){


    if($fieldin <count($pass)){
    echo "<p>the{$pass[$fieldin]}is <em> $fieldvalue </em> </P>\n";
    }
else{

$extrafiel++;
echo"<p> Extra field # $extrafiel is <em> $fieldvalue</em> </p>\n";

}
}

$numberstring="00125";


if (preg_match("/^0*//",$numberstring)==1);
{
    echo"$numberstring is valid";
}


?>
    
</body>
</html>