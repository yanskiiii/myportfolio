<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar">
            <div class="logo">Portfolio</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <img src="images/profile.png" alt="Adrian Gallego" class="profile-img">
            <h1>Adrian Gallego</h1>
            <p>Professional Web Developer</p>
            <div class="hero-buttons">
                <a href="#about" class="cta-button">About Me</a>
                <a href="#contact" class="cta-button secondary">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Me</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="images/profile.png" alt="Adrian Gallego">
                    <div class="about-badges">
                        <span class="badge">BSIT Graduate</span>
                        <span class="badge">Web Developer</span>
                    </div>
            </div>
                <div class="about-text">
                    <h3>Adrian A. Gallego</h3>
                    <p class="about-intro">
                    I am a recent graduate from <strong>La Consolacion University Philippines</strong> with a Bachelor of Science in Information Technology. I am passionate about technology and eager to start my career in IT, where I can apply my academic knowledge and contribute to a dynamic team.
                </p>
                    <div class="about-details">
                        <div class="about-section">
                            <h4><i class="fas fa-user-graduate"></i> Education</h4>
                            <div class="education-info">
                                <h5>Bachelor of Science in Information Technology</h5>
                                <p class="institution">La Consolacion University Philippines</p>
                                <p class="year">2020 - 2024</p>
                            </div>
                        </div>
                        <div class="about-section">
                            <h4><i class="fas fa-bullseye"></i> Career Objective</h4>
                            <ul class="objective-list">
                            <li>Apply academic knowledge in a real-world setting</li>
                            <li>Contribute to team success through dedication and hard work</li>
                            <li>Continuously learn and grow in the IT industry</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section id="certifications" class="certifications">
        <div class="container">
            <h2>Certifications</h2>
            <div class="certifications-grid">
                <div class="certification-card">
                    <div class="certification-image">
                        <img src="images/specialist.png" alt="IT Specialist Certification in Databases">
                    </div>
                    <div class="certification-info">
                        <h3>IT Specialist Certification in Databases</h3>
                        <p class="certification-date">2024</p>
                        <p class="certification-desc">Professional certification demonstrating expertise in database management and optimization.</p>
                        <div class="certification-badge">
                            <i class="fas fa-award"></i>
                            <span>Verified</span>
                        </div>
                    </div>
                </div>
                <div class="certification-card">
                    <div class="certification-image">
                        <img src="images/microsoft.png" alt="Microsoft Office Specialist – Access 2019 Expert">
                    </div>
                    <div class="certification-info">
                        <h3>Microsoft Office Specialist – Access 2019 Expert</h3>
                        <p class="certification-date">2023</p>
                        <p class="certification-desc">Advanced certification in Microsoft Access database management and development.</p>
                        <div class="certification-badge">
                            <i class="fas fa-award"></i>
                            <span>Verified</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Section -->
    <section id="training" class="training">
        <div class="container">
            <h2>Webinars & Training</h2>
            <div class="training-slider">
                <div class="training-track">
                    <div class="training-item">
                        <div class="training-date">Dec 5, 2024</div>
                        <div class="training-content">
                            <h3>iThink Code Camp: Building DApps on #ICP</h3>
                            <p>Advanced training in decentralized application development on the Internet Computer Protocol.</p>
                        </div>
                    </div>
                    <div class="training-item">
                        <div class="training-date">Apr 13, 2024</div>
                        <div class="training-content">
                            <h3>CODING FOR IMPACT: Leveraging Technology to Solve Real-World Challenges</h3>
                            <p>Workshop focused on using technology to address real-world problems and create meaningful solutions.</p>
                        </div>
                    </div>
                    <div class="training-item">
                        <div class="training-date">Oct 12, 2023</div>
                        <div class="training-content">
                            <h3>IT Trends: Navigating the Ever-Changing Digital Landscape</h3>
                            <p>Comprehensive overview of current and emerging trends in information technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2>Technical Skills</h2>
            <div class="skills-slider">
                <div class="skills-track">
                <div class="skill-card">
                    <i class="fab fa-html5"></i>
                    <h3>HTML5</h3>
                        <p>Semantic markup and modern web structure</p>
                        <div class="skill-level">
                            <div class="skill-progress" data-level="90"></div>
                        </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-css3-alt"></i>
                    <h3>CSS3</h3>
                        <p>Responsive design and modern layouts</p>
                        <div class="skill-level">
                            <div class="skill-progress" data-level="85"></div>
                        </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-js"></i>
                    <h3>JavaScript</h3>
                        <p>Interactive web applications</p>
                        <div class="skill-level">
                            <div class="skill-progress" data-level="80"></div>
                        </div>
                </div>
                <div class="skill-card">
                    <i class="fab fa-php"></i>
                    <h3>PHP</h3>
                        <p>Server-side scripting and web development</p>
                        <div class="skill-level">
                            <div class="skill-progress" data-level="75"></div>
                        </div>
                    </div>
                    <div class="skill-card">
                        <i class="fab fa-laravel"></i>
                        <h3>Laravel</h3>
                        <p>PHP framework for web applications</p>
                        <div class="skill-level">
                            <div class="skill-progress" data-level="70"></div>
                        </div>
                    </div>
                    <div class="skill-card">
                        <i class="fab fa-react"></i>
                        <h3>React</h3>
                        <p>Frontend development and UI components</p>
                        <div class="skill-level">
                            <div class="skill-progress" data-level="65"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="projects-slider">
                <div class="projects-track">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="images/apartment.png" alt="Apartment Management System">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://github.com/yanskiiii" class="project-github" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3>Apartment Management System</h3>
                            <p class="project-category">Capstone Project</p>
                            <p class="project-description">A comprehensive system for managing apartment properties, including tenant management, billing, and maintenance tracking.</p>
                            <div class="project-tech">
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>HTML/CSS</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-image">
                            <img src="images/tripticket.png" alt="Tripticket System">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://github.com/yanskiiii" class="project-github" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3>Tripticket System</h3>
                            <p class="project-category">OJT Project at DICT</p>
                            <p class="project-description">Developed during internship at DICT, this system streamlines the process of managing and tracking trip tickets for official business travel.</p>
                            <div class="project-tech">
                                <span>PHP</span>
                                <span>Laravel</span>
                                <span>MySQL</span>
                                <span>Bootstrap</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-image">
                            <img src="images/qrcode.png" alt="QR-based Attendance System">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="https://github.com/yanskiiii" class="project-github" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h3>QR-based Attendance System</h3>
                            <p class="project-category">Personal Project</p>
                            <p class="project-description">A modern attendance tracking system using QR codes, featuring real-time monitoring and automated reporting.</p>
                            <div class="project-tech">
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>QR Code</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Get in Touch</h2>
            <div class="contact-content">
                <div class="contact-info-section">
                    <div class="contact-card">
                        <h3>Contact Information</h3>
                        <ul class="contact-details">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p>Calumpit, Bulacan</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <div>
                                    <h4>Phone</h4>
                                    <p><a href="tel:+639078944740">(+639) 078944740</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <h4>Email</h4>
                                    <p><a href="mailto:yayangallego10@gmail.com">yayangallego10@gmail.com</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                                <div>
                                    <h4>LinkedIn</h4>
                                    <p><a href="https://www.linkedin.com/in/adriangallego-4b4618350/" target="_blank">adriangallego-4b4618350</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contact-form-section">
                    <form action="includes/contact.php" method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/adriangallego-4b4618350/"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <p>&copy; <?php echo date('Y'); ?> My Portfolio. All rights reserved.</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html> 