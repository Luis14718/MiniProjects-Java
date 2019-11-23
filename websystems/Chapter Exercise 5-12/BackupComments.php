<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Backup Comments</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$Source = "../comments";
$Destination = "../backups";
if (!is_dir($Destination))
     echo "The backup directory \"$Destination\" does not exist.\n";
else {
     if (is_dir($Source)) {
          $TotalFiles = 0;
          $FilesMoved = 0;
          $DirEntries = scandir($Source);
          foreach ($DirEntries as $Entry) {
               if (($Entry!=".") && ($Entry!="..")) {
                    ++$TotalFiles;
                    if (copy("$Source/$Entry", "$Destination/$Entry"))
                         ++$FilesMoved;
                    else
                         echo "Could not move file \"" . htmlentities($Entry) . "\".<br />\n";
               }
          }
        echo "<p>$FilesMoved of $TotalFiles comments successfully backed up.</p>";
     }
else
     echo "<p>The source directory \"$Source\" does not exist! </p>";
}

?>
</body>
</html>

