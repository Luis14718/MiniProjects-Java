<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multiplication table </title>
    
    <link rel="stylesheet" type="text/css" media="screen" href="main2.css" />
    <script src="main.js"></script>
</head>
<body >
<h1 > Multiplication Table </h1>

<div id="space" >

<table id="multiplication"  border='1px' cellspacing='opx' cellpadding='1px' >
<?php
echo "<tr>";
$c=0;
for ($r=1;$r<=10;$r++){


echo"<tr>";
for ($c=1; $c<=10;$c++){
$result=$c*$r;


if ($result==3 || $result==5 || $result==7)
{

echo "<td class='prime'>",$result,"</td>";
}
else
{

    echo "<td >",$result,"</td>";
}

}
echo "</tr>";
$c++;
}

?>
    </table>
</div>
</body>
</html>