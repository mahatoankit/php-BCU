<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = "";     // Change if needed
$dbname = "services_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $service);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
