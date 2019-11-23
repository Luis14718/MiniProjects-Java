<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chess Board</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<table   width="800px" cellspacing="0px" cellpadding="0px"  >
  <h1>Chess Board</h1>
   <?php
   //this change the color of the table every second 
header("Refresh: 1; URL='chessboard.php'");



  $color= code(6); 
$color2= code2(6);
   
      for($x=1;$x<=8;$x++)
	  {
          echo "<tr>";
          for($y=1;$y<=8;$y++)
		  {
          $result=$x+$y;
          if($result%2==0)
		  {
          echo "<td height=80px width=60px bgcolor=$color></td>";
          }
		  else
		  {
          echo "<td height=80px width=60px bgcolor=$color2></td>";
          }
          }
          
    }
          ?>
  </table>
   

</body>
</html>