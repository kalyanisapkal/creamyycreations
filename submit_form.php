<?php
include 'db_config.php';

// Check if form data is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $orderdetails = $_POST['orderdetails'];

    // Prepare SQL query to insert form data
    $sql = "INSERT INTO orders (name, phone, orderdetails) VALUES ('$name', '$phone', '$orderdetails')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully! Thank you🥰";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
