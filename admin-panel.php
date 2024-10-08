<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: admin-login.php");
    exit;
}
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "portfolio_db"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM contacts"; 
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
      
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #2c2c2c;
            color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #666;
            text-align: left;
        }

        th {
            background-color: #444;
        }

        tr:nth-child(even) {
            background-color: #3e3e3e;
        }

        tr:hover {
            background-color: #66bb6a;
        }

        .btn-logout {
            background-color: #ff5c5c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
            display: block;
            text-align: center;
        }

        .btn-logout:hover {
            background-color: #ff4a4a;
        }
    </style>
    <title>Admin Panel</title>
    <script>
        function confirmLogout() {
            return confirm("Are you sure you want to log out?");
        }
    </script>
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
    </header>
    
    <main>
        <h2>Contacts Data</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['message']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No data found</td></tr>";
            }
            ?>
        </table>
        <form method="post" action="admin-login.php" onsubmit="return confirmLogout();">
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </main>
</body>
</html>
<?php
$conn->close();
?>
