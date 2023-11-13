<?php
// Replace these credentials with your actual database credentials
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "prepaid_meter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$phonenumber = $_POST['phonenumber'];
$units = $_POST['units'];

// Insert data into the database
$sql = "INSERT INTO prepaid_meter_data (username, phonenumber, units) VALUES ('$username', '$phonenumber', '$units')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
