
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "patient";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `patientInfo`";
//$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["fname"]. " - Last Name: " . $row["lname"]. " - Medical Record Number : " . $row["mrecno"]."<br>" ."Address: " . $row["address"]." - Mobile: " . $row["mobile"]." - Email: " . $row["email"]." - Date of Birth: " . $row["dob"]. "<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

