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
$topsellers = array ("Chevrolet impala","chevrolet malibu","dodge ram");
array_shift($topsellers);
array_unshift($topsellers);
echo "<pre>\n";
print_r($topsellers);
echo "</pre>\n";
array_pop($topsellers);

print_r($topsellers);
array_push($topsellers,"toyota yaris");
print_r($topsellers);
?>
    
</body>
</html>