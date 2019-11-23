

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chinese Zodiac calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        td.searched{

    
       
position: relative;
background-color:#efefea;
animation-name:example;
animation-duration: 1s;
animation-iteration-count: infinite;


}
@keyframes example {
    0%   {background-color: rgb(255, 0, 98);}
    25%  {background-color: purple}
    50%  {background-color: blue;}
    100% {background-color: gray;}
  }
    </style>


    <script src="main.js"></script>

</head>
<body>
<?php include('keiserinfo.html');
$number="0";
$show = false;

if   (isset($_GET['Submit'])){ 
   
    try {

        $number= $_GET['Number'];
        $show =true;
        if ($show){
    echo "the number is $number";
    }

    } catch (Exception $e) {
        echo 'Caught exception: insert a number ',  $e->getMessage(), "\n";
    }
            
   

}


?>


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
if ($r==$number){
    echo "<td class='searched'>",$r,"</td>";
}
//this make all the numbers in a row 
else{
    echo "<td>",$r,"</td>";

}
}
echo "</tr>","</table>";
//end table
    ?>
</body>
</html>