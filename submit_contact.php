<?php
// submit_contact.php

// Database connection settings
$servername = "localhost"; // Change if your DB server is different
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "portfolio_db"; // Your database name

// Create connection
$conn = new mysqli("localhost", "root", "", "portfolio_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    // Insert data into database
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Thank you for your message, $name! We will get back to you soon.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "<p>Invalid request.</p>";
}

// Close the database connection
$conn->close();
?>
