<?php

require_once('dbCon.php');

$query = "SELECT fname, lname, mobile, mrecno, dob FROM patientInfo";

$response = @mysqli_query($dbc, $query);

if($response){
 
echo '<table align="left"
cellspacing="5" cellpadding="8">
 
<tr><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="center"><b>Mobile</b></td>
<td align="center"><b>Medical No.</b></td>
<td align="center"><b>Brith Date</b></td></tr>';

while($row = mysqli_fetch_array($response)){
 
echo '<tr><td align="left">' . 
$row['fname'] . '</td><td align="left">' . 
$row['lname'] . '</td>'. '</td><td align="center">' . 
$row['mobile'] . '</td>'. '</td><td align="center">' . 
$row['mrecno'] . '</td>'. '</td><td align="center">' . 
$row['dob'] . '</td>';
 
echo '</tr>';
}
 
echo '</table>';
 
} else {
 
echo "Couldn't issue database query<br />";
 
echo mysqli_error($dbc);
 
}
 
mysqli_close($dbc);
 


?>