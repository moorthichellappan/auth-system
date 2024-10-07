<?php
// Database configuration
$host = 'db'; // Updated to the service name
$dbname = 'auth_system';
$username = 'user'; // Use the user defined in the Dockerfile
$password = 'user_password'; // Use the corresponding password

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
