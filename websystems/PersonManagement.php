<!DOCTYPE html>
<html>
    <head>
      <title> Introduction to Object-Oriented Programming </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
	<body>
      <p>
      <?php
      include_once('person.php');
        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $adam = new Person('Daniel', 'Rodriguez', 19);
        $me = new Person ('Daniel','Rodriguez',19);

        // Printing out, what the greet method returns
      
       
        echo $me ->greet()."". $me ->favfood();
    
		echo "</br>Lastname from public accesor: " . $adam->lastname;
		
		$serializedme=serialize($me);
		echo "<p> Serialized : " . $serializedme;
        ?>
        </p>
    </body>
</html>