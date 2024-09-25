<?php
$host = 'localhost';
$db = 'portfolio_db';
$user = 'root'; // Change this if your username is different
$pass = ''; // Change this if you have a password

$conn = new mysqli("LOCALHOST","root","","portfolio_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
