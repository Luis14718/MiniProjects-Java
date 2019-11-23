<!Doctype <!DOCTYPE html>
<html xmls= "http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Weeks</title>
   
 
   
</head>
<body>
    <?php
echo"The days of the weeks in english are";
echo "<br>";
$englishweek = array("Sunday",
"Monday", "Tuesday","Wednesday","Thursday","Friday","Saturday");


// repeating the same action for each day 

    for($i=0;$i<=6;$i++) {

        echo $englishweek[$i];
        echo "<br>";
        
        } ;
      

echo"<br>";
echo"<br>";


$frenchweek = array("Dimanche",
"Lundi", "Mardi","Mercredi","Jeudi","Vendredi","Samandi");
print " The days of the week in french are:" ;
echo "<br>";
for($i=0;$i<=6;$i++) {

    echo $frenchweek[$i];
    echo"<br>";
    
    } ;

    ?>
</body>
</html>