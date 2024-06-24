<?php

// Database configuration
$servername = "localhost";       // Change this to your database server name
$username = "root";     // Change this to your database username
$password = "";     // Change this to your database password
$dbname = "WAD";       // Change this to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful


?>
