<?php
$servername = "localhost";  // Your MySQL server
$username = "root";         // Your MySQL username
$password = "123456";             // Your MySQL password (empty for local development)
$dbname = "formdata";       // The database name you created

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
