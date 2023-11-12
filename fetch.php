<?php
// Replace these credentials with your actual database credentials
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr class='align-middle alert' role='alert'>";
        echo "<td><div class='d-flex align-items-center'><div class='img-container'></div></div></td>";
        echo "<td><div class='d-inline-flex align-items-center active'><div class='circle'></div><div class='ps-2'>" . $row["username"] . "</div></div></td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . $row["current"] . "</td>";
        echo "<td>" . $row["voltage"] . "</td>";
        echo "<td>" . $row["power"] . "</td>";
        echo "<td>" . $row["units"] . "</td>";
        echo "<td>" . $row["date_loaded"] . "</td>";
        echo "<td><div class='btn p-0' data-bs-dismiss='alert'><span class='fas fa-times'></span></div></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
