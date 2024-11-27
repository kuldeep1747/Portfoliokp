<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('skills') }}">Skills</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header> --}}
    <header>
        <nav>
            <ul>
                <li><a href="#intro">Home</a></li> <!-- This points to the home section -->
                <li><a href="#about">About</a></li> <!-- This points to the about section -->
                <li><a href="#skills">Skills</a></li> <!-- This points to the skills section -->
                <li><a href="#projects">Projects</a></li> <!-- This points to the projects section -->
                <li><a href="#contact">Contact</a></li> <!-- This points to the contact section -->
            </ul>
        </nav>
    </header>
    

    <main>
        <section id="intro">
            <h1>Welcome to My Portfolio</h1>
            <p>I am a Laravel Developer with a passion for building web applications.</p>
            <a href="{{ route('contact') }}" class="cta-btn">Get in Touch</a>
        </section>

        <section id="about">
            <h1>About Me</h1>
            <p>I'm a passionate web developer with expertise in Laravel, JavaScript, and modern web technologies. I love building clean, scalable applications and always strive to improve my skills.</p>
        </section>

        <section id="skills">
            <h1>My Skills</h1>
            <ul>
                <li>Laravel</li>
                <li>Vue.js</li>
                <li>PHP</li>
                <li>JavaScript</li>
                <li>CSS / HTML</li>
            </ul>
        </section>

        <section id="projects">
            <h1>My Projects</h1>
            <div class="project-card">
                <h3>Project 1</h3>
                <p>Description of the project goes here.</p>
            </div>
            <div class="project-card">
                <h3>Project 2</h3>
                <p>Description of the project goes here.</p>
            </div>
        </section>

        <section id="contact">
            <h1>Contact Me</h1>
            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <label for="name">Your Name</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Your Email</label>
                <input type="email" name="email" id="email" required>

                <label for="message">Your Message</label>
                <textarea name="message" id="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Your Name | All rights reserved.</p>
    </footer>
</body>
</html>
