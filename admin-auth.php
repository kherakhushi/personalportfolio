<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "portfolio_db"; 


$conn = new mysqli("localhost", "root", "", "portfolio_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $admin_username = "khushi";
    $admin_password = "215512";
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
$conn->close();
?>
