<?php
session_start();

// Database connection settings (if needed for admin functions)
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
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Hardcoded credentials
    $admin_username = "khushi";
    $admin_password = "215512";

    // Validate credentials
    if ($username === $admin_username && $password === $admin_password) {
        // Set session variable and redirect to admin panel
        $_SESSION['loggedin'] = true;
        header("location: admin-panel.php");
        exit;
    } else {
        echo "<p style='color:red;'>Invalid username or password.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}

// Close the database connection
$conn->close();
?>
