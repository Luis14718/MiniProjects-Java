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

$StartingText = "mAdAm, i’M aDaM.";
$UppercaseText = strtoupper($StartingText);
$LowercaseText = strtolower($StartingText);
echo "<p>$UppercaseText</p>\n";
echo "<p>$LowercaseText</p>\n";
echo "<p>" . ucfirst($LowercaseText) . "</p>\n";
echo "<p>" . lcfirst($UppercaseText) . "</p>\n";
$WorkingText = ucwords($LowercaseText);
echo "<p>$WorkingText</p>\n";
echo "<p> -2,2:" . substr($WorkingText,-2,2) . "</p>\n";
echo "<p>" . md5($WorkingText) . "</p>\n";
echo "<p>" . substr($WorkingText,0,6) . "</p>\n";
echo "<p>" . substr($WorkingText,7) . "</p>\n";
echo "<p>" . strrev($WorkingText) . "</p>\n";
echo "<p>" . str_shuffle($WorkingText) . "</p>\n";
?>
</body>
</html>