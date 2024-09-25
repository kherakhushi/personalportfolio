<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>body {
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

h1.animated-header {
    margin: 0;
    font-size: 2.5rem;
    animation: fadeIn 1s ease-in-out; 
}

nav a {
    color: #f4f4f9;     margin: 0 15px;
    text-decoration: none;
    transition: color 0.3s;
}

nav a:hover {
    color: #66bb6a; 
}

main {
    max-width: 800px; 
    margin: 40px auto; 
    padding: 20px;
    background: #3e3e3e;     border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}

section {
    margin-bottom: 30px; }

h2.animated-header {
    font-size: 2rem;
    margin-bottom: 10px;
    animation: fadeIn 1s ease-in-out;
}

p.animated-text {
    line-height: 1.6;
    margin-bottom: 15px;
}

.skills ul {
    list-style: none; 
    padding: 0; 
}

.skills li.animated-item {
    background: #444; 
    padding: 10px;
    border-radius: 5px;
    margin: 5px 0;
    animation: fadeIn 1s ease-in-out; 
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

</style>    <title>About Me</title>
</head>
<body>
    <header>
        <h1 class="animated-header">About Me</h1>
        <nav>
            <a href="index.php" class="underline-effect">Home</a>
            <a href="about.php" class="underline-effect">About</a>
            <a href="contact.php" class="underline-effect">Contact</a>
            <a href="admin-login.php" class="underline-effect">Admin Login</a>
        </nav>
    </header>
    <main>
        <section>
            <p class="animated-text">Hi, I’m Khushi Khera, a passionate web developer and student currently pursuing a degree in Computer Science. I have experience in developing dynamic web applications using HTML, CSS, JavaScript, and PHP. Recently, I created a student registration form and a hotel website as part of my coursework.</p>

            <p class="animated-text">My skill set includes Java, PHP, MySQL, and front-end technologies like HTML, CSS, and JavaScript. I’m also familiar with database connections and server-side scripting. I’m currently studying at Panjab University affiliated college GURU GOBIND SINGH COLLEGE FOR WOMEN, where I’m focusing on web development and database management.</p>

            <p class="animated-text">In my free time, I enjoy exploring new programming languages, working on personal projects, and playing chess. I’m eager to continue learning and growing as a developer, with the goal of becoming a full-stack web developer and contributing to innovative projects.</p>
        </section>
        <section class="skills">
            <h2 class="animated-header">Skills</h2>
            <ul>
                <li class="animated-item">PHP & MySQL</li>
                <li class="animated-item">JavaScript & jQuery</li>
                <li class="animated-item">HTML & CSS</li>
                <li class="animated-item">React & Angular</li>
            </ul>
        </section>
    </main>
   </body>
</html>
