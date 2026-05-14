<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">Mustafa Doğan</div>
        <div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <button id="theme-toggle" class="theme-btn">Dark Mode</button>
    </nav>

    <nav id="hamburger-nav">
    <div class="logo">Mustafa Doğan</div>

    <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="menu-links">
            <li><a href="#about" onclick="toggleMenu()">About</a></li>
            <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
            <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
    </div>
</nav>
    <section id="profile">
        <div class="section__pic-container">
            <img src="./assets/profileport.png" 
            alt="Mustafa Doğan profile picture" 
            class="profile-pic" />
        <div>
        <div class="section__text">
            <p class="section__Text__p1">Hello, I'm</p>
            <h1 class="title">Mustafa Doğan</h1>
            <p class="section__Text__p2"></p>
            <div class="btn-container">
                <button class=btn btn-color-2" 
                    onclick="window.open('./assets/CV.pdf')">
                    Download CV
                </button>
                <button class="btn btn-color-1"
                onclick=""location.href='./#contact'>
                Contact Me
                </button>
            </div>
            <div id="socials-container">
                <img src="./assets/linkedin.png"
                 alt="My LinkedIn profile"
                class="icon" 
                onclick="location.href='https://www.linkedin.com/in/mustafa-doğan-0310a73ab/'">
                <img src="./assets/github.png"
                 alt="MyGithub profile"
                class="icon" 
                onclick="location.href='https://github.com/mmustafadogann'">
            </div>
        </div>
    </section>

    <section id="about">
    <h1 class="title">About Me</h1>

    <div class="about-container">
        <div class="about-details-container">
           <div class="about-card">
    <h3>🎓 Education</h3>

    <p><strong>Software Engineering Student</strong></p>

    <p>
        Currently I am a 3rd year Software Engineering student in Haliç University.
    </p>
</div>
<div class="about-card">
    <h3>🥊 Hobbies</h3>
    <p><strong>Combat Sports & Football</strong></p>
    <p>
        I have been doing MMA for the last 2 years, and I have been playing football since childhood.
    </p>
</div>
        </div>
        <div class="text-container">
            <p>
                Hello, I am Mustafa Doğan, an engineering student who is interested in web development,
                software technologies, and building practical digital projects. I like doing all kinds of sports, but mostly combat sports and football.
            </p>
        </div>
    </div>
</section>

<section id="experience">

    <h1 class="title">Experience</h1>
    <br>
    <br>

    <div class="experience-empty-card">
        <h2>No Professional Experience Yet</h2>

        <p>
            I do not have professional work experience yet. However, I plan to update this section as I gain
            internship or professional experience in the future.
        </p>
    </div>
</section>

<section id="projects">
    <p class="section__text__p1">Browse My Recent</p>

    <h1 class="title">Projects</h1>

    <div class="projects-container" id="projectsContainer"></div>
</section>

<section id="contact">
    <p class="section__text__p1">Get in Touch</p>
    <h1 class="title">Contact Me</h1>

    <?php if (isset($_GET["status"]) && $_GET["status"] === "success"): ?>
        <p class="success-message">Your message has been sent successfully.</p>
    <?php endif; ?>

    <?php if (isset($_GET["status"]) && $_GET["status"] === "error"): ?>
        <p class="error-message">Please fill in all required fields.</p>
    <?php endif; ?>

    <div class="contact-info-upper-container">
        <div class="contact-info-container">
            <img
                src="./assets/email.png"
                alt="Email icon"
                class="icon contact-icon"
            >
            <p>
                <a href="mailto:mustafadogan.md41552@gmail.com">
                    mustafadogan.md41552@gmail.com
                </a>
            </p>
        </div>

        <div class="contact-info-container">
            <img
                src="./assets/linkedin.png"
                alt="LinkedIn icon"
                class="icon contact-icon"
            >
            <p>
                <a href="https://www.linkedin.com/in/mustafa-doğan-0310a73ab/">
                    LinkedIn
                </a>
            </p>
        </div>
    </div>

    <form id="contactForm" method="POST" action="contact.php" class="contact-form">
        <input 
            type="text" 
            id="name" 
            name="name" 
            placeholder="Your Name"
        >

        <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="Your Email"
        >

        <input 
            type="text" 
            id="subject" 
            name="subject" 
            placeholder="Subject"
        >

        <textarea 
            id="message" 
            name="message" 
            placeholder="Your Message"
        ></textarea>

        <button type="submit" class="btn btn-color-1">
            Send Message
        </button>
    </form>
</section>

<footer>
    <nav>
        <div class="nav-links-container">
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <p>Copyright &#169; </p>
</footer>





    <script src="script.js"></script> 
</body>
</html>