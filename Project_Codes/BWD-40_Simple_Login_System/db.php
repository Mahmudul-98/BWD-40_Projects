<?php
$servername = "localhost";
$username = "root";  // Change as per your DB user
$password = "usbw";      // Change as per your DB password
$dbname = "login_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
