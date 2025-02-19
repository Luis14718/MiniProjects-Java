<?php

session_start();
require_once("class_OnlineStore.php");
if (class_exists("OnlineStore")) {
  
          $Store = new OnlineStore();
}
else {
     $ErrorMsgs[] = "The OnlineStore class is not available!";
     $Store = NULL;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gosselin's Gourmet Coffee</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Gosselin's Gourmet Coffee</h1>
<h2>Description goes here</h2>
<p>Welcome message goes here</p>
<?php
if ($Store !== NULL) 
     echo "<p>Successfully instantiated an object of " .
          " the OnlineStore class.</p>\n";

if (count($Store->getErrorMsgs())==0) {
     $SQLstring = "SELECT * FROM inventory " .
                    "WHERE storeID='COFFEE'";
     $QueryResult = $Store->getDB()->query($SQLstring);
     if ($QueryResult === FALSE)
          exit();
}

if (count($Store->getErrorMsgs())) {
     foreach ($Store->getErrorMsgs() as $Msg) 
          echo "<p>" . $Msg . "</p>\n";
}
else {
     echo "<table width='100%'>\n";
     echo "<tr><th>Product</th><th>Description</th>" .
          "<th>Price Each</th></tr>\n";
     while (($Row = $QueryResult->fetch_assoc()) !== NULL) {
          echo "<tr><td>" . htmlentities($Row['name']) . 
               "</td>\n";
          echo "<td>" . htmlentities($Row['description']) . 
               "</td>\n";
          printf("<td>$%.2f</td></tr>\n", $Row['price']);
     }
     echo "</table>";
     $_SESSION['currentStore'] = serialize($Store);
}
?>
</body>
</html>
<?php
if (!$Store->getDB()->connect_error)
     $Store->getDB()->close();
?>

