<?php
$servername = "localhost:3306"; // For Truehost use 'localhost'
$username = "wljsqoac_iskillinfo.com"; // your cPanel DB username
$password = "Astur@#2025@#"; // your DB password
$database = "wljsqoac_iskillinfo.com"; // your DB name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
