<?php
$host = "localhost";          // Server name (default for XAMPP)
$user = "root";               // MySQL username (default is "root")
$password = "";               // MySQL password (default is empty)
$database = "kamarakhojo";    // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>