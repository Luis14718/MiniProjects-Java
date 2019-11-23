<?php
class OnlineStore {
     private $DBConnect = NULL;
     private $storeID = "";
     private $Order = array();
	 private $ErrorMsgs = array();

     function __construct() {
          include("inc_OnlineStoreDB.php");
          $this->DBConnect = $DBConnect;
		  $this->ErrorMsgs = $ErrorMsgs;
     }
	 
	 function getDB() {
		 return $this ->DBConnect;
	 }
	 function getErrorMsgs() {
		 return $this->ErrorMsgs;
	 }
	 
	 
}
?>
