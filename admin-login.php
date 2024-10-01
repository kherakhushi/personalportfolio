
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2c2c2c; 
            color: #f4f4f9; 
        }

        header {
            background: #1a1a1a; 
            color: #f4f4f9;
            padding: 20px 0;
            text-align: center;
        }

        nav a {
            color: #f4f4f9; 
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
            color: #66bb6a; 
        }

        main {
            max-width: 400px; 
            margin: 100px auto; 
            padding: 20px;
            background: #3e3e3e;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        h1, h2 {
            margin-bottom: 20px;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 700;
            color: #f4f4f9; 
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #666; 
            border-radius: 4px;
            font-size: 16px;
            background: #444;
            color: #f4f4f9; 
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #66bb6a; 
            outline: none;
        }

        .btn {
            background: #66bb6a; 
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #57a65b; 
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background: #1a1a1a;
            color: #f4f4f9;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .error-message {
            color: #ff4c4c;
            margin-top: 10px;
        }
    </style>
    <title>Admin Login</title>
    <script>
        function validateForm(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');

            if (!username || !password) {
                event.preventDefault(); 
                errorMessage.textContent = 'Both fields are required.';
            } else {
                errorMessage.textContent = ''; 
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Admin Login</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Me</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <main>
        <section class="login-form">
            <h2>Login to Your Account</h2>
            <form action="admin-auth.php" method="post" onsubmit="validateForm(event)"> <!-- Changed to admin-auth.php -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div id="error-message" class="error-message"></div>
                <button type="submit" class="btn">Login</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>
</body>
</html>
