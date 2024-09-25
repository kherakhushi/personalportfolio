<?php
include 'db.php';

$id = $_GET['id']; // Ensure to validate and sanitize this input
$query = "SELECT * FROM projects WHERE id = $id";
$result = $conn->query($query);
$project = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $project['title']; ?></title>
</head>
<body>
    <header>
        <h1><?php echo $project['title']; ?></h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="admin-login.php">Admin Login</a>
        </nav>
    </header>
    <main>
        <p><?php echo $project['description']; ?></p>
        <img src="images/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
    </main>
    <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>
</body>
</html>
