


<html>
<head>
<Title> Juan Bosco </Title>
</head>
<body>
<center><h2 id="for_loop"><font color="Orange">Chinesse Zodiac Calendar  </font></h2></center>

<br>
<br>
<?php


$beginningYear = 1924;
$endYear = 2031;
$numYears = ($beginningYear - $endYear) + 1;
$Description = array("RAT", "OX", "TIGER", "HARE", "DRAGON", "SNAKE", "HORSE", "GOAT", "MONKEY", "ROOSTER", "DOG", "PIG");
$Picture = array("RAT", "OX", "TIGER", "HARE", "DRAGON", "SNAKE", "HORSE", "GOAT", "MONKEY", "ROOSTER", "DOG", "PIG");


echo "<table align=\"center\"><tr>";

for ($i = 0; $i < 12; ++$i) {
    echo "<td align=\"center\">" . $Description[$i] . "</td>";
}

echo "</tr><tr>";

for ($i = 0; $i < 12; ++$i) {
    echo "<td align=\"center\"><img src=\"Images/" . $Picture[$i] . ".png\"></td>";
}

for ($i = $beginningYear; $i <= $endYear; ++$i) {
    if ((($i - $beginningYear) % 12) == 0) {
        echo "</tr><tr>";
    }
        echo "<td align=\"center\">" . $i . "</td>";
}

echo "</tr></table>";

?>
</body>

</html>