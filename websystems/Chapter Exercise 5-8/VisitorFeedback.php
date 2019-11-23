<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Visitor Feedback</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h2>Visitor Feedback</h2>
<hr />

<?php
$Dir = "../comments";
if (is_dir($Dir)) {
     $CommentFiles = scandir($Dir);
     foreach ($CommentFiles as $FileName) {
          if (($FileName != ".") && ($FileName != "..")) {
               echo "From <strong>$FileName</strong><br />";
               $Comment = file($Dir . "/" . $FileName);
               echo "From: " . htmlentities($Comment[0]) . "<br />\n";
               echo "Email Address: " . htmlentities($Comment[1]) . "<br />\n";
               echo "hobbies". htmlentities([2])."<br/>\n";
               echo "Date: " . htmlentities($Comment[3]) . "<br />\n";
               $CommentLines = count($Comment);
               echo "Comment:<br />\n";
               for ($i = 3; $i < $CommentLines; ++$i) {
                    echo htmlentities($Comment[$i]) . "<br />\n";
               }
               echo "<hr />\n";
          }
     }
}

?>
</body>
</html>

