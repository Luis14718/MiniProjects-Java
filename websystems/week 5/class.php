<<!DOCTYPE html>
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
$Dir = "./files";
$filename=htmlentities($_FILES['new_file']['name']);
if (isset($_POST['upload'])) {   
      if (isset($_FILES['new_file'])) {      
              if (move_uploaded_file($_FILES['new_file']['tmp_name'], $Dir . "/" . $filename) == TRUE)  {    
                    echo "File \"" . $filename . "\" successfully uploaded.  " .    "<a href=\"  $Dir/" . $filename . "\" > $filename </a>" . 
                    
                    "<br />\n";
                    $filetype= $_FILES['new_file']['type'];

                    echo "the file type is $filetype "; 

              }
               else               echo "There was an error uploading \"" . $filename . "\".<br />\n";     }}


?>
<form action = "class.php" method= "post" enctype="multipart/form-data">
<input type="hidden" name= "MAX_FILE_SIZE" value= "25000000"/> <br>
file to upload: <br>
<input type="file"name="new_file"/>
<br>
(25,000 bytes limit)<br>
<input type="submit" name="upload" value="upload the file"/>
</form>
</body>
</html>