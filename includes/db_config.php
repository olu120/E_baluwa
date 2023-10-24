<?php
// Database configuration
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "e_baluwa"; // Replace with your database name

// Create a connection
$conn = new mysqli($db_host, $db_user, $db_password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database
$conn->select_db($db_name);

// Create 'users' table if it doesn't exist
$query = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($query) === TRUE) {
    echo "";
} else {
    echo "Error creating table: " . $conn->error;
}


?>

