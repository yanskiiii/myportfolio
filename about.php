<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Adrian Gallego</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .about-page {
            padding-top: 80px;
            min-height: 100vh;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .about-header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .about-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        .about-header h1 {
            font-size: 3rem;
            color: var(--text-color);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .about-header p {
            color: var(--light-text);
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .about-card {
            background: white;
            border-radius: 1.5rem;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .about-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary-color);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .about-card:hover::before {
            transform: scaleX(1);
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .about-card h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .about-card h2 i {
            font-size: 2rem;
            background: rgba(37, 99, 235, 0.1);
            padding: 0.8rem;
            border-radius: 12px;
        }

        .profile-section {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 3rem;
            align-items: center;
        }

        .profile-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: block;
            margin: 0 auto;
        }

        .profile-content {
            padding: 2rem;
        }

        .profile-content h2 {
            font-size: 2.5rem;
            color: var(--text-color);
            margin-bottom: 1rem;
        }

        .profile-content p {
            color: var(--light-text);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: rgba(37, 99, 235, 0.05);
            border-radius: 1rem;
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-item h3 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            color: var(--light-text);
            font-size: 1rem;
            margin: 0;
        }

        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--primary-color);
            border-radius: 3px;
        }

        .timeline-item {
            position: relative;
            padding-bottom: 2.5rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -2.5rem;
            top: 0.3rem;
            width: 1.2rem;
            height: 1.2rem;
            border-radius: 50%;
            background: var(--primary-color);
            border: 3px solid white;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }

        .timeline-item h3 {
            color: var(--text-color);
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .timeline-item .date {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: inline-block;
            padding: 0.3rem 1rem;
            background: rgba(37, 99, 235, 0.1);
            border-radius: 1rem;
        }

        .timeline-item p {
            color: var(--light-text);
            line-height: 1.6;
        }

        .interests-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .interest-item {
            background: rgba(37, 99, 235, 0.1);
            padding: 1rem 1.5rem;
            border-radius: 2rem;
            color: var(--primary-color);
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .interest-item i {
            font-size: 1.2rem;
        }

        .interest-item:hover {
            transform: translateY(-3px);
            background: var(--primary-color);
            color: white;
        }

        @media (max-width: 1024px) {
            .about-grid {
                grid-template-columns: 1fr;
            }

            .profile-section {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .profile-image {
                margin: 0 auto;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .about-header h1 {
                font-size: 2.5rem;
            }
        }

        .expertise-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .expertise-item {
            background: rgba(37, 99, 235, 0.05);
            padding: 1.5rem;
            border-radius: 1rem;
            transition: transform 0.3s ease;
        }

        .expertise-item:hover {
            transform: translateY(-5px);
        }

        .expertise-item h3 {
            color: var(--primary-color);
            font-size: 1.3rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .expertise-item h3 i {
            font-size: 1.5rem;
        }

        .expertise-item p {
            color: var(--light-text);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tech-tag {
            background: white;
            color: var(--primary-color);
            padding: 0.4rem 0.8rem;
            border-radius: 2rem;
            font-size: 0.9rem;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .tech-tag:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .expertise-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar">
            <div class="logo">Portfolio</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="index.php#skills">Skills</a></li>
                <li><a href="index.php#projects">Projects</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <main class="about-page">
        <div class="about-container">
            <div class="about-header">
                <h1>About Me</h1>
                <p>Recent IT Graduate | Aspiring Web Developer | Tech Enthusiast</p>
            </div>

            <div class="about-grid">
                <!-- Profile Section -->
                <div class="about-card profile-section">
                    <img src="images/profile.png" alt="Adrian Gallego" class="profile-image">
                    <div class="profile-content">
                        <h2>Adrian Gallego</h2>
                        <p>I'm a recent Information Technology graduate with a passion for web development and creating user-friendly digital solutions. My academic journey has equipped me with strong technical foundations and practical skills. I'm eager to apply my knowledge in a professional setting and continue growing as a developer.</p>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <h3>1.43</h3>
                                <p>GWA</p>
                            </div>
                            <div class="stat-item">
                                <h3>5+</h3>
                                <p>Academic Projects</p>
                            </div>
                            <div class="stat-item">
                                <h3>3+</h3>
                                <p>Certifications</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education & Experience -->
                <div class="about-card">
                    <h2><i class="fas fa-graduation-cap"></i> Education & Experience</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <h3>Bachelor of Science in Information Technology</h3>
                            <div class="date">2020 - 2024</div>
                            <p>La Consolacion University Philippines</p>
                            <p>Graduated with a GWA of 1.43. Focused on self-directed learning and independent study of programming and web development. Completed a capstone project on web application development.</p>
                        </div>
                        <div class="timeline-item">
                            <h3>IT Intern</h3>
                            <div class="date">2023 - 2024</div>
                            <p>Department of Information and Communications Technology (DICT)</p>
                            <p>Assisted in developing and maintaining web applications. Gained hands-on experience with modern web technologies and development practices. Collaborated with senior developers on various projects.</p>
                        </div>
                        <div class="timeline-item">
                            <h3>Web Development Training</h3>
                            <div class="date">2023</div>
                            <p>Online Certification Program</p>
                            <p>Completed comprehensive training in modern web development technologies including HTML5, CSS3, JavaScript, and PHP. Built several practice projects to apply learned concepts.</p>
                        </div>
                        <div class="timeline-item">
                            <h3>Student Developer</h3>
                            <div class="date">2022 - 2023</div>
                            <p>University Tech Innovation Club</p>
                            <p>Developed and maintained the club's website. Organized coding workshops for fellow students. Participated in university-wide tech events and competitions.</p>
                        </div>
                    </div>
                </div>

                <!-- Professional Summary -->
                <div class="about-card">
                    <h2><i class="fas fa-user-tie"></i> Professional Summary</h2>
                    <p>As a recent IT graduate, I bring fresh perspectives and up-to-date technical knowledge to web development. My academic background has provided me with a solid foundation in both front-end and back-end development. I'm particularly interested in creating responsive, user-friendly web applications and am eager to contribute to meaningful projects while continuing to learn and grow professionally.</p>
                    <div class="key-achievements">
                        <h3>Key Achievements</h3>
                        <ul>
                            <li>Developed a full-stack web application as a capstone project</li>
                            <li>Created and maintained 3+ websites through self-directed learning</li>
                            <li>Successfully completed an internship at DICT, contributing to 2 major projects</li>
                            <li>Mastered multiple programming languages through independent study</li>
                            <li>Achieved a GWA of 1.43, demonstrating strong academic performance</li>
                            <li>Built a strong foundation in web development through self-learning</li>
                        </ul>
                    </div>
                </div>

                <!-- Technical Expertise -->
                <div class="about-card">
                    <h2><i class="fas fa-laptop-code"></i> Technical Expertise</h2>
                    <div class="expertise-grid">
                        <div class="expertise-item">
                            <h3><i class="fas fa-code"></i> Software Development</h3>
                            <p>Proficient in developing various types of applications including web applications, mobile apps, and system software. Experienced in multiple programming languages and frameworks.</p>
                            <div class="tech-stack">
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">Java</span>
                                <span class="tech-tag">C#</span>
                                <span class="tech-tag">JavaScript</span>
                                <span class="tech-tag">HTML/CSS</span>
                                <span class="tech-tag">PHP</span>
                            </div>
                        </div>
                        <div class="expertise-item">
                            <h3><i class="fas fa-chart-line"></i> Data Science & Analytics</h3>
                            <p>Skilled in data collection, analysis, and visualization. Capable of working with large datasets and creating meaningful insights through various analytical tools.</p>
                            <div class="tech-stack">
                                <span class="tech-tag">SQL</span>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">R</span>
                                <span class="tech-tag">Tableau</span>
                                <span class="tech-tag">Data Analysis</span>
                                <span class="tech-tag">Data Visualization</span>
                            </div>
                        </div>
                        <div class="expertise-item">
                            <h3><i class="fas fa-database"></i> Database Administration</h3>
                            <p>Experienced in database design, implementation, and management. Focused on ensuring data integrity, security, and optimal performance.</p>
                            <div class="tech-stack">
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">MongoDB</span>
                                <span class="tech-tag">Database Design</span>
                                <span class="tech-tag">Data Modeling</span>
                                <span class="tech-tag">Query Optimization</span>
                                <span class="tech-tag">Data Security</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Interests -->
                <div class="about-card">
                    <h2><i class="fas fa-heart"></i> Personal Interests</h2>
                    <div class="interests-list">
                        <div class="interest-item"><i class="fas fa-code"></i> Web Development</div>
                        <div class="interest-item"><i class="fas fa-paint-brush"></i> UI/UX Design</div>
                        <div class="interest-item"><i class="fas fa-database"></i> Database Design</div>
                        <div class="interest-item"><i class="fas fa-puzzle-piece"></i> Problem Solving</div>
                        <div class="interest-item"><i class="fas fa-lightbulb"></i> Tech Innovation</div>
                        <div class="interest-item"><i class="fas fa-book"></i> Learning New Technologies</div>
                        <div class="interest-item"><i class="fas fa-users"></i> Tech Community</div>
                        <div class="interest-item"><i class="fas fa-laptop-code"></i> Coding Challenges</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/main.js"></script>
</body>
</html> 