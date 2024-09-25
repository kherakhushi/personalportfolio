<?php
$host = 'localhost';
$db = 'portfolio_db';
$user = 'root'; 
$pass = ''; 

$conn = new mysqli("LOCALHOST","root","","portfolio_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
