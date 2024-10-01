<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #3e3e3e;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        h1, h2 {
            margin-bottom: 20px;
        }

        .contact-form {
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
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #666;
            border-radius: 4px;
            font-size: 16px;
            background: #444;
            color: #f4f4f9;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
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
            margin-top: 20px;
            text-align: center;
            padding: 10px 0;
            background: #1a1a1a;
        }

        .social-icons {
            margin: 10px 0;
        }

        .social-icons a {
            color: #f4f4f9;
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
        }

        .contact-info {
            color: #f4f4f9;
        }

    </style>
    <title>Contact Me</title>
</head>
<body>
    <header>
        <h1>Contact Me</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Me</a>
            <a href="admin-login.php">Admin Login</a>
        </nav>
    </header>
    <main>
        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form action="submit_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="social-icons">
            <a href="https://www.instagram.com/itz_khushi_120105?igsh=MWFpdW5kbWkxZ3kyMQ==" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/kherakhushi" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="mailto:kherakhushi317@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
            <a href="tel:+1234567890" title="Phone"><i class="fas fa-phone"></i></a>
        </div>
        <div class="contact-info">
            <p>Phone: +1 234 567 890</p>
        </div>
    </footer>
    
</body>
</html>
