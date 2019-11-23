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
  $musicalScale= array("do","re","mi","fa","sol","la","si");
  $outputString= "the notes of the muscial scle are:";
  foreach ($musicalScale as $currentnote)
    $outputString.= " ". $currentnote;
  echo"<p>$outputString</p>";

    ?>



</body>
</html>

