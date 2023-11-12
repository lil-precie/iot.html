<?php
$conn = new mysqli("localhost", "username", "password", "prepaid_meter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $phone_number = $_POST["phone_number"];
    $status = $_POST["status"];
    $current = $_POST["current"];
    $voltage = $_POST["voltage"];
    $power = $_POST["power"];
    $units = $_POST["units"];
    $date_loaded = $_POST["date_loaded"];

    $sql = "INSERT INTO user_data (username, phone_number, status, current, voltage, power, units, date_loaded) VALUES ('$username', '$phone_number', '$status', '$current', '$voltage', '$power', '$units', '$date_loaded')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
