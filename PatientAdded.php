<html>
<head>
<title>Add Patient</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<script src="js/regForm.js"></script>
</head>
<body>
<?php
 
if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['first_name'])){
 
        
        $data_missing[] = 'First Name';
 
    } else {
 
        
        $f_name = trim($_POST['myName']);
 
    }
 
    if(empty($_POST['myLastName'])){
 
        
        $data_missing[] = 'Last Name';
 
    } else{
 
        
        $l_name = trim($_POST['myLastName']);
 
    }
	
	if(empty($_POST['mobilenumber'])){
 
        
        $data_missing[] = 'Mobile Number';
 
    } else{
 
        
        $m_no = trim($_POST['mobilenumber']);
 
    }

	
	if(empty($_POST['MedRecordNo'])){
 
        
        $data_missing[] = 'Medical Record Number';
 
    } else{
 
        
        $mr_no = trim($_POST['MedRecordNo']);
 
    }

	if(empty($_POST['dob'])){
 
        
        $data_missing[] = 'Date of Brith';
 
    } else{
 
        
        $dofb = trim($_POST['dob']);
 
    }
	
    
    if(empty($data_missing)){
        
        require_once('dbCon.php');
        
        $query = "INSERT INTO patient.patientInfo (myName, myLastName, mobilenumber, MedRecordNo, dob) VALUES (?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        mysqli_stmt_bind_param($stmt, "ss", $f_name, $l_name, $m_no, $mr_no, $dofb);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Patient Added';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}
 
?>
<form id="regForm" onload = "registerationEvents()" action="http://localhost/PatientAdded.php" method="post">
  <fieldset>
  <legend>Patient Registeration</legend>
  <div>
 <label> First name:</label>
  <input type="text" name="myName" onfocus = "noteText(0)" onblur = "noteText(9)"/>
  </div>
  <div>
  <label>
  Last name:</label>
  <input type="text" name="myLastName" onfocus = "noteText(1)" onblur = "noteText(9)"/>
  </div>
  <div>
  <label>
  Medical Record Number:</label>
  <input type="text" name="MedRecordNo" onfocus = "noteText(2)" onblur = "noteText(9)"/>
 </div>
 <div>
 <label>
  Address:</label>
  <input type="text" name="address" onfocus = "noteText(3)" onblur = "noteText(9)"/>
  </div>
  <div>
  <label>
  Mobile Number:</label>
  <input type="number" name="mobilenumber" onfocus = "noteText(4)" onblur = "noteText(9)"/>
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
  <input type="submit" value="Submit">
</div>
</fieldset>
  
</form>
</body>
</html>