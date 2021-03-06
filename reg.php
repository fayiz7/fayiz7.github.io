<!DOCTYPE html>
<html>
<head>
<title>Patient Registeration</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <script src="js/regForm.js"></script>

</head>
<body>
<p id="note">
Note: You must first make official paper registration and get a Medical Record Number <em>(MRN)</em> in order to proceed and get the benefits from our e-Services!</p>

<form id="regForm" onload = "registerationEvents()" action="http://localhost/PatientAdded.php" method="post">
  <fieldset>
  <legend>Patient Registeration</legend>
  <div>
 <label> First name:</label>
  <input type="text" name="fname" onfocus = "noteText(0)" onblur = "noteText(9)"/>
  </div>
  <div>
  <label>
  Last name:</label>
  <input type="text" name="lname" onfocus = "noteText(1)" onblur = "noteText(9)"/>
  </div>
  <div>
  <label>
  Medical Record Number:</label>
  <input type="text" name="mrecno" onfocus = "noteText(2)" onblur = "noteText(9)"/>
 </div>
 <div>
 <label>
  Address:</label>
  <input type="text" name="address" onfocus = "noteText(3)" onblur = "noteText(9)"/>
  </div>
  <div>
  <label>
  Mobile Number:</label>
  <input type="number" name="mobile" onfocus = "noteText(4)" onblur = "noteText(9)"/>
  </div>
  <div>
  <label>
  Email Address </label>
<input name="UserName" type="text"  onfocus = "noteText(5)" onblur = "noteText(9)"/>
</div>
<div>
<label>
Password : </label>
<input name="Password" type="password" onfocus = "noteText(6)" onblur = "noteText(9)"/>
</div>
<div>
<label>
Retype Password : </label>
<input name="rePassword" type="password" onfocus = "noteText(7)" onblur = "noteText(9)"/>
</div>
<div>
<label>
  Date of Birth:</label>
  <input name = "dob" id="datepicker" onfocus = "noteText(8)" onblur = "noteText(9)"/>
  </div>
  <div><p id="help"></p></div>
  <div id ="buttonDiv">
  <input type="submit" value="Submit" />
</div>
</fieldset>
  
</form>
 
<a href="sitemap.html">Site Map</a>
</body>
</html>
