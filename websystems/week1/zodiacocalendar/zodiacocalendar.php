

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chinese Zodiac calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>Chinese Zodiac for Loop     </h1>
<div id="table">
    <?php
    $zodiac = array("Rat", "Ox","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster","Dog","Pig");
echo "<table align= center >","<tr>";
//this start the first row deviding into 12 columns
for ($c=0; $c<12;$c++)
{

echo"<th>",$zodiac[$c],"</th>";

}

echo "</tr>","<tr>";
// then this look for the picture of each column
for ($c=0;$c<12;$c++)
{
    echo"<td>","<img src='./",$zodiac[$c],".gif'/>","</td>";



}
echo "</tr>";
//then starting with the tarjet year 
$starting= 1912;
$actual=2019;
$r=$starting;
$i=0;
for($r;$r<=$actual;$r++)
{
$i++;
if($i==13){
    echo"<tr>","</tr>";
    $i=1;

//this make a separate counter when this is equal 13  pass to another line 
}
    echo "<td>",$r,"</td>";
//this make all the numbers in a row 

}
echo "</tr>","</table>";
//end table
    ?>
</body>
</html>