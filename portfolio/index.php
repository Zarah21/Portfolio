<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDRIE MATARO | Portfolio</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        body::before {
            content: '';
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: -1;
            background: linear-gradient(120deg, #ff9800 0%, #6a82fb 100%);
            background-size: 200% 200%;
            animation: gradientMove 8s ease-in-out infinite;
        }
        @keyframes gradientMove {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }
        .glass {
            background: rgba(255,255,255,0.7);
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.18);
            backdrop-filter: blur(8px);
            border-radius: 16px;
            border: 1px solid rgba(255,255,255,0.18);
        }
        .social-icons {
            display: flex;
            gap: 1.2rem;
            justify-content: center;
            margin: 1rem 0 0.5rem 0;
        }
        .social-icons a {
            color: #333;
            font-size: 1.5rem;
            transition: color 0.2s, transform 0.2s;
        }
        .social-icons a:hover {
            color: #ff9800;
            transform: scale(1.2);
        }
        .project .project-img {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .project:hover .project-img {
            transform: scale(1.05) rotate(-2deg);
            box-shadow: 0 4px 24px rgba(106,130,251,0.18);
        }
        .project h3 {
            margin-top: 0.5rem;
        }
        .project a {
            color: #6a82fb;
            text-decoration: underline;
        }
        .project a:hover {
            color: #ff9800;
        }
        .profile-img {
            box-shadow: 0 4px 24px rgba(255,152,0,0.12);
        }
        .skills-list li {
            font-weight: 500;
        }
        .glass-section {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
<?php
// Portfolio Homepage
?>
    <header class="glass">
        <div class="header-content">
            <img src="assets/images/andrie.png" alt="Profile Photo" class="profile-img">
            <div>
                <h1>ANDRIE MATARO</h1>
                <p class="tagline">Web Developer | Designer | Coder</p>
                <div class="social-icons">
                    <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#timeline">Timeline</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="hero-animated">
            <h2>Turning Ideas Into Reality</h2>
            <p class="hero-desc">I build beautiful, interactive, and modern web experiences.</p>
            <a href="#projects" class="hero-btn">See My Work <i class="fas fa-arrow-down"></i></a>
        </div>
    </header>
    <main>
        <section id="about" class="glass glass-section">
            <h2>About Me</h2>
            <p>Hello! I'm <strong>Andrie Mataro</strong>, a passionate web developer with experience in building modern, responsive websites and web applications. I love turning ideas into reality using code and design. I specialize in PHP, JavaScript, and UI/UX design.</p>
            <ul class="about-list">
                <li><strong>Location:</strong> Palo Leyte, Philippines</li>
                <li><strong>Email:</strong> mataroandrie455@gmail.com</li>
                <li><strong>Education:</strong> BSIT, Eastern Visayas State University - Tanauan Campus</li>
            </ul>
        </section>
        <section id="skills" class="glass glass-section">
            <h2>Skills</h2>
            <ul class="skills-list">
                <li>HTML5 & CSS3</li>
                <li>JavaScript (ES6+)</li>
                <li>PHP & MySQL</li>
                <li>Responsive Design</li>
                <li>Git & GitHub</li>
                <li>UI/UX Design</li>
                <li>Figma</li>
                <li>React Basics</li>
                <li>GSAP Animations</li>
                <li>WordPress</li>
            </ul>
        </section>
        <section id="projects" class="glass glass-section">
            <h2>Projects</h2>
            <div class="project-list">
                <div class="project interactive-card">
                    <img src="assets/images/project1.jpg" alt="Project 1" class="project-img">
                    <h3>Project One</h3>
                    <p>Short description of project one. <br><a href="#">View Details</a></p>
                </div>
                <div class="project interactive-card">
                    <img src="assets/images/project2.jpg" alt="Project 2" class="project-img">
                    <h3>Project Two</h3>
                    <p>Short description of project two. <br><a href="#">View Details</a></p>
                </div>
                <div class="project interactive-card">
                    <img src="assets/images/project3.jpg" alt="Project 3" class="project-img">
                    <h3>Project Three</h3>
                    <p>Short description of project three. <br><a href="#">View Details</a></p>
                </div>
            </div>
        </section>
        <section id="timeline" class="glass glass-section">
            <h2>My Journey</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>2025</h4>
                        <p>Started as a freelance web developer.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>2024</h4>
                        <p>Graduated from University with a degree in Computer Science.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>2023</h4>
                        <p>Interned at a top tech company.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="glass glass-section">
            <h2>Testimonials</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <p>“Andrie is a fantastic developer! He delivered our project on time and exceeded expectations.”</p>
                    <span>- Client A</span>
                </div>
                <div class="testimonial">
                    <p>“Creative, reliable, and highly skilled. Highly recommended!”</p>
                    <span>- Client B</span>
                </div>
            </div>
        </section>
        <section id="contact" class="glass glass-section">
            <h2>Contact Me</h2>
            <form id="contactForm" method="post" action="contact.php">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send</button>
            </form>
            <div id="formMessage"></div>
        </section>
    </main>
    
    <script src="assets/script.js"></script>
</body>
</html>
    
    
    
    
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Name. All rights reserved.</p>
    </footer>
    
</body>
</html>