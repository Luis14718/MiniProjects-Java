

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

  
  body
	{
		background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image.jpg);
		height: 100vh;
        background-size: cover;
        color: white;
        background-position: center;
      
    }
    .main-nav 
	{
		float: right;
		list-style: none;
		margin-top: 30px;
	}
	
	.main-nav li 
	{
		display: inline-block;
		
	}
	
	.main-nav li a 
	{
		color: white;
		text-decoration: none;
		padding: 5px 20px;
		font-family: "Roboto", sans-serif;
		font-size: 15px;
	}
	
	.main-nav li.active a 
	{
		border: 1px solid white;
	}
	.main-nav li a:hover
	{
		border: 1px solid white;
	}
	
	.logo img
	{
		width:150px;
		height:auto;
		float: left;
	}
	

	
	
	.hero 
	{
		position: absolute;
		width: 1200px;
		margin-left: 0;
		margin-top: 0;
	}
	.hero2 
	{
		position: absolute;
		width: 800 px;
		margin-left: 0; 
		margin-top: 0;
	}
	
	h1 
	{
		color: white;
		text-transform: uppercase;
		font-size: 40px;
		text-align: center;
		margin-top: 275px;
		
	}
	
	
	
	.button
	{
		margin-top: 30px;
		margin-left: 440px;
	}
	
	.btn 
	{
		border: 1px solid white;
		padding: 10px 30px;
		color: white;
		text-decoration: none;
		margin-right: 5px;
		font-size: 13px;
		text-transform: uppercase;
	}
	
	.btn-one
	{
		
		font-family: "Roboto", sans-serif;
	}
	
	.btn-two
	{
        background-color: darkblue;
		font-family: "Roboto", sans-serif;
	}
	.btn-two:hover
	{
		background-color: darkblue;
		transition: all 0.5s ease-in;
	}
	.btn-three
	{
		font-family: "Roboto", sans-serif;
	}
	.btn-three:hover
	{
		background-color: darkblue;
		transition: all 0.5s ease-in;
	}
    </style>


    <script src="main.js"></script>

</head>
<body>
    
<?php
include ('inc_buttonnav.html');
include('keiserinfo.html');
$number="0";
$show = false;

if   (isset($_GET['Submit'])){ 
   
    try {
        
        $number= $_GET['Number'];
        if ($number>1912 && $number<2018)
        {
        $show =true;
        if ($show){
    echo "the number is $number";
        }
    }

    else{

        $show =true;
        if ($show){
    echo "enter a valid number";
        }



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
    echo"<td>","<img src='./",$zodiac[$c],".png'/>","</td>";



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