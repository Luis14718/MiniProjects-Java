<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Message Board</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Message Board</h1>
<?php
if (isset($_GET['action'])) {
     if ((file_exists(
          "MessageBoard/messages.txt")) &&
          (filesize(
          "MessageBoard/messages.txt") != 0)) {
          $MessageArray = file(
               "MessageBoard/messages.txt");
          switch ($_GET['action']) {
               case 'Delete First':
                    array_shift($MessageArray);
                    break;
               case 'Delete Last':
                    array_pop($MessageArray);
                    break;
          } // End of the switch statement
         if (count($MessageArray)>0) {
               $NewMessages =
                    implode($MessageArray);
               $MessageStore = fopen(
                    "MessageBoard/messages.txt",
                    "wb");
               if ($MessageStore === false)
                    echo "There was an error
                          updating the message
                          file\n";
               else {
                    fwrite($MessageStore,
                         $NewMessages);
                    fclose($MessageStore);
               }
          }
          else
               unlink(
                    "MessageBoard/messages.txt");
     }
}
if ((!file_exists("MessageBoard/messages.txt"))
     || (filesize("MessageBoard/messages.txt")
     == 0))
     echo "<p>There are no messages
          posted.</p>\n";
else {
     $MessageArray =
          file("MessageBoard/messages.txt");
     echo "<table
          style=\"background-color:lightgray\"
          border=\"1\" width=\"100%\">\n";
     $count = count($MessageArray);
     for ($i = 0; $i < $count; ++$i) {
          $CurrMsg = explode("~",
               $MessageArray[$i]);
          echo "<tr>\n";
          echo "<td width=\"5%\"
               style=\"text-align:center;
               font-weight:bold\">" .
               ($i + 1) . "</td>\n";
          echo "<td width=\"95%\"><span
               style=\"font-weight:bold\">Subject:
               </span> " .
               htmlentities($CurrMsg[0]) .
               "<br />\n";
          echo "<span
               style=\"font-weight:bold\">Name:
               </span> " .
               htmlentities($CurrMsg[1]) .
               "<br />\n";
          echo "<span
               style=\"text-decoration:underline;
               font-weight:bold\">Message
               </span><br />\n" .
               htmlentities($CurrMsg[2]) .
               "</td>\n";
          echo "</tr>\n";
    }
     echo "</table>\n";
}
?>
<p>
<a href="PostMessage.php">
     Post New Message</a><br />
<a href="MessageBoard.php?action=Delete%20First">
     Delete First Message</a><br />
<a href="MessageBoard.php?action=Delete%20Last">
     Delete Last Message</a>

</p>
</body>
</html>

