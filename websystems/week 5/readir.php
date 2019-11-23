 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Directory </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
/*$dir= "./files";
$diropen= opendir($dir);
while ($curfile= readdir($diropen ))
{

if ($curfile=readdir($diropen)){
if ((strcpmm ($curfile)!=0))&& 
(strcpmm($curfile,'..')!=0}
echo"<a href=\"file/ . $curfile."\">".$curfile."<a\><br81-<<
}   
    closedir($diropen)
    */
$dir= "\files";
$direntries= scandir($dir);
foreach($direntries as $entry){
    if((strcmp($entry)))

}
</body>
</html>