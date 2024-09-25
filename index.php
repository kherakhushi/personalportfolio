<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            border-bottom: 4px solid #66bb6a;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            margin: 0;
            font-size: 2.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: #f4f4f9; 
            margin: 0 20px;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            transition: color 0.3s;
        }

        nav a::after {
            content: '';
            display: block;
            height: 2px;
            width: 100%;
            background: #66bb6a;
            transform: scaleX(0);
            transition: transform 0.3s ease;
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        nav a:hover {
            color: #66bb6a;
        }

        nav a:hover::after {
            transform: scaleX(1);
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #3e3e3e; 
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.5s ease-in; 
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .intro {
            text-align: center;
        }

        .profile-image {
            max-width: 180px; 
            border-radius: 50%; 
            margin: 20px 0;
            border: 4px solid #66bb6a;
            transition: transform 0.3s;
        }

        .profile-image:hover {
            transform: scale(1.05); 
        }

        .projects {
            margin-top: 30px;
        }

        .project-list {
            display: flex;
            flex-direction: column; 
        }

        .project-item {
            background: #444; 
            padding: 20px;
            margin: 15px 0;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s, box-shadow 0.3s;         
        }

        .project-item:hover {
            transform: translateY(-5px); 
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
        }

        .project-item h3 {
            margin-top: 0; 
            font-size: 1.6rem;
        }

        .btn {
            display: inline-block;
            background: #66bb6a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: background 0.3s, transform 0.3s;
            margin-top: 10px;
        }

        .btn:hover {
            background: #57a65b;
            transform: translateY(-2px); 
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            nav a {
                margin: 0 10px;
            }

            main {
                padding: 15px;
            }

            .profile-image {
                max-width: 150px;
            }

            .project-list {
                flex-direction: column; /* Stack items vertically */
            }

            .project-item {
                padding: 15px;
            }

            .btn {
                padding: 8px 15px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5rem;
            }

            nav {
                flex-direction: column;
                align-items: center;
            }

            nav a {
                margin: 5px 0;
            }

            .intro p {
                font-size: 0.9rem; /* Slightly smaller font size */
            }
        }
    </style>
    <title>My Portfolio</title>
</head>
<body>
    <header>
        <h1>Welcome to My Portfolio</h1>
        <nav>
            <a href="about.php">About Me</a>
            <a href="contact.php">Contact</a>
            <a href="admin-login.php">Admin Login</a>
        </nav>
    </header>
    <main>
        <section class="intro">
            <h2>Hello!</h2>
            <img src="portfolio.jpg" alt="KHUSHI KHERA" class="profile-image"> <!-- Ensure the image path is correct -->
            <p>I am a passionate web developer with expertise in building responsive and dynamic web applications. Explore my work below!</p>
        </section>
        <section class="projects">
            <h2>My Projects</h2>
            <div class="project-list">
                <div class="project-item">
                    <h3>Hotel Management</h3>
                    <p>Description: Developing a comprehensive hostel management system to streamline room allocation, check-in/check-out processes, meal management, visitor tracking, staff management, inventory control, and billing systems.<br>
                    Role: Lead Developer<br>
                    Responsibilities: Designing user-friendly interfaces, implementing data security measures, ensuring project milestones are met.<br>
                    Technologies Used: HTML, CSS, MySQL, Adobe Photoshop, CorelDRAW.<br>
                    Tools: Notepad++, WampServer.</p>
                    <a href="project.php?id=1" class="btn">View Project</a>
                </div>
                <div class="project-item">
                    <h3>Personal Portfolio</h3>
                    <p>Description: Creating a professional portfolio showcasing web development projects, design work, and certifications to highlight skills and expertise.<br>
                    Role: Designer and Developer<br>
                    Responsibilities: Designing and developing an interactive portfolio website, showcasing projects, and updating content regularly.<br>
                    Technologies Used: HTML, CSS, Adobe Photoshop, CorelDRAW.<br>
                    Tools: Notepad++, WampServer.</p>
                    <a href="project.php?id=2" class="btn">View Project</a>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
