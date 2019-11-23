
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   <!--para sa add data sa textbox -->
	<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("combo");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
<form action="addengine.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">
    
 Username<br />
    <input name="username" type="text" id="username">
    <br />
    Password <br />
    <input name="password" type="password" id="password"  >
    <br />
  User ID <br />
    <input name="userID" type="text" id="userID" />
    <br />
    Permiso (admin/student) <br />
    <input name="permiso" type="text" id="permiso"  />
    <br />
	Name <br />
    <input name="name" type="text" id="name" />
    <br />
 Lastname <br />
    <input name="lastname" type="text" id="lastname"  />
    <br />
 Department <br />
  	<input type="text" name="Department" type="text"  />  <br />
	
 
 






 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
