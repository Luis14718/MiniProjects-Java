     <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conditional script </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1 aligment="center" >Chess board </h1>
<canvas id="myCanvas" width="560" height="560" style="border:2px solid #d3d3d3; ">

<script>

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");

for(i=0;i<8;i++)
{for(j=0;j<8;j++)
{ctx.moveTo(0,80*j);
ctx.lineTo(560,80*j);
ctx.stroke();

ctx.moveTo(80*i,0);
ctx.lineTo(80*i,560);
ctx.stroke();
var left = 0;
for(var a=0;a<8;a++) {
    for(var b=0; b<8;b+=2) {
      startX = b * 80;
      if(a%2==0) startX = (b+1) * 80;
     
      ctx.fillRect(startX + left,(a*80) ,80,80);
      
      
	}}
}}

	
</script>
</canvas>

<?php   
echo "
Print the odd numbers between 1 and 100 ";

for ($i=1;$i<100;$i++ )

{

    echo $i++;
   echo",";
    
    } ;



?>
</body>
</html>