<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "user";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
