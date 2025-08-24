<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills - Tanjid Ahammed Shafin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0f172a;
            --secondary: #1e293b;
            --accent: #0F828C;
            --light-bg: #f8fafc;
            --white: #ffffff;
            --gray-light: #64748b;
            --gray-medium: #475569;
            --gradient: linear-gradient(135deg, #0F828C 0%, #0a6b75 100%);
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--primary);
            background: var(--light-bg);
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 900;
            text-decoration: none;
            font-family: 'Inter', sans-serif;
            color: var(--primary);
            transition: all 0.3s ease;
            letter-spacing: -0.05em;
            position: relative;
        }

        .logo:hover {
            color: var(--accent);
            transform: scale(1.05);
        }

        .logo-text {
            font-weight: 900;
            font-family: 'Inter', sans-serif;
            color: inherit;
            transition: all 0.3s ease;
        }

        /* Logo Animation on Page Load */
        .logo {
            animation: logoEntrance 1s ease-out;
        }

        @keyframes logoEntrance {
            0% {
                opacity: 0;
                transform: translateY(-20px) scale(0.8);
            }
            50% {
                opacity: 0.7;
                transform: translateY(-5px) scale(1.05);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--gray-medium);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 8px;
        }

        .nav-link:hover {
            color: var(--accent);
            background: rgba(15, 130, 140, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(15, 130, 140, 0.15);
        }

        .nav-link:hover::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 2px;
            background: var(--accent);
            border-radius: 1px;
            animation: slideIn 0.3s ease;
        }

        .nav-link.active {
            color: var(--accent);
            background: rgba(15, 130, 140, 0.08);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--accent);
            border-radius: 1px;
        }

        @keyframes slideIn {
            from {
                width: 0;
                opacity: 0;
            }
            to {
                width: 80%;
                opacity: 1;
            }
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary);
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .mobile-menu-btn:hover {
            background: rgba(15, 130, 140, 0.1);
            color: var(--accent);
            transform: scale(1.1);
        }

        /* Resume Download Button */
        .resume-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--gradient);
            color: var(--white);
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            margin-left: 1rem;
        }

        .resume-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .resume-btn i {
            font-size: 0.9rem;
        }

        /* Main Content */
        .main-content {
            margin-top: 80px;
            padding: 80px 0;
        }

        .page-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .page-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-subtitle {
            font-size: 1.2rem;
            color: var(--gray-medium);
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Skills Categories */
        .skills-section {
            margin-bottom: 4rem;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .section-title p {
            color: var(--gray-medium);
            font-size: 1rem;
        }

        /* Technical Skills Grid */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .skill-category {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
        }

        .skill-category:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .category-icon {
            width: 80px;
            height: 80px;
            background: var(--accent);
            color: var(--white);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .skill-category h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .skill-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .skill-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .skill-name {
            font-weight: 600;
            color: var(--primary);
            font-size: 1rem;
        }

        .skill-level {
            font-size: 0.9rem;
            color: var(--gray-medium);
            font-weight: 500;
        }

        .skill-bar {
            width: 100%;
            height: 8px;
            background: var(--light-bg);
            border-radius: 4px;
            overflow: hidden;
            margin-top: 0.5rem;
        }

        .skill-progress {
            height: 100%;
            background: var(--accent);
            border-radius: 4px;
            transition: width 1s ease-in-out;
            width: 0;
        }

        /* Tools & Technologies */
        .tools-section {
            background: var(--white);
            border-radius: 24px;
            padding: 4rem;
            margin: 4rem 0;
            box-shadow: var(--shadow-lg);
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .tool-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1.5rem;
            background: var(--light-bg);
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .tool-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .tool-icon {
            width: 60px;
            height: 60px;
            background: var(--accent);
            color: var(--white);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .tool-name {
            font-weight: 600;
            color: var(--primary);
            text-align: center;
            font-size: 0.9rem;
        }

        /* Soft Skills */
        .soft-skills {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .soft-skill-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            text-align: center;
            transition: all 0.3s ease;
        }

        .soft-skill-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .soft-skill-icon {
            width: 70px;
            height: 70px;
            background: rgba(15, 130, 140, 0.1);
            color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 1rem;
        }

        .soft-skill-card h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .soft-skill-card p {
            color: var(--gray-medium);
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Experience Level */
        .experience-section {
            background: var(--primary);
            color: var(--white);
            border-radius: 24px;
            padding: 4rem;
            text-align: center;
            margin: 4rem 0;
        }

        .experience-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .experience-item {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .experience-number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            display: block;
        }

        .experience-label {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 2rem;
                gap: 1rem;
                border-top: 1px solid rgba(0, 0, 0, 0.05);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }

            .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .mobile-menu-btn {
                display: block;
            }

            .page-title {
                font-size: 2.5rem;
            }

            .skills-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .tools-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 1rem;
            }

            .soft-skills {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .experience-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .tools-section,
            .experience-section {
                padding: 2rem;
            }
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.6s ease;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.6s ease;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; }
        .delay-4 { transition-delay: 0.4s; }

        /* Footer */
        .footer {
            background: var(--primary);
            color: var(--white);
            padding: 3rem 0 2rem;
            margin-top: 4rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--white);
        }

        .footer-section p {
            color: var(--gray-light);
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .footer-social {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .footer-social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            color: var(--white);
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .footer-social-link:hover {
            background: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(15, 130, 140, 0.3);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: var(--gray-light);
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
            color: var(--gray-light);
        }

        .footer-contact i {
            color: var(--accent);
            width: 20px;
        }

        .footer-bottom {
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            color: var(--gray-light);
        }

        .footer-bottom p {
            margin: 0;
        }

        .footer-brand {
            font-size: 1.8rem;
            font-weight: 900;
            color: var(--white);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            background: linear-gradient(135deg, #ffffff 0%, #0F828C 50%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .footer-brand:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 4px 15px rgba(15, 130, 140, 0.3));
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .footer-social {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-container">
                <a href="{{ url('/') }}" class="logo">
                    <span class="logo-text">Shafin</span>
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                    <li><a href="{{ url('/education') }}" class="nav-link">Education</a></li>
                    <li><a href="{{ url('/skills') }}" class="nav-link active">Skills</a></li>
                    <li><a href="{{ url('/projects') }}" class="nav-link">Projects</a></li>
                    <li><a href="{{ url('/achievements') }}" class="nav-link">Achievements</a></li>
                    <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                </ul>
                <a href="{{ asset('assets/documents/resume.pdf') }}" class="resume-btn" download="Tanjid_Shafin_Resume.pdf">
                    <i class="fas fa-download"></i>
                    Resume
                </a>
                <button class="mobile-menu-btn" id="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header fade-in">
                <h1 class="page-title">Skills & Expertise</h1>
                <p class="page-subtitle">Technologies and tools I work with to bring ideas to life and create exceptional digital experiences.</p>
            </div>

            <!-- Technical Skills -->
            <div class="skills-section">
                <div class="section-title fade-in">
                    <h2>Technical Skills</h2>
                    <p>My proficiency in various programming languages and technologies</p>
                </div>
                
                <div class="skills-grid">
                    <!-- Frontend Development -->
                    <div class="skill-category slide-in-left delay-1">
                        <div class="category-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Frontend Development</h3>
                        <div class="skill-list">
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">React.js</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="90"></div>
                                    </div>
                                </div>
                                <span class="skill-level">90%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">JavaScript</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="95"></div>
                                    </div>
                                </div>
                                <span class="skill-level">95%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">HTML5 & CSS3</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="98"></div>
                                    </div>
                                </div>
                                <span class="skill-level">98%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">Vue.js</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="80"></div>
                                    </div>
                                </div>
                                <span class="skill-level">80%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Backend Development -->
                    <div class="skill-category slide-in-right delay-2">
                        <div class="category-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3>Backend Development</h3>
                        <div class="skill-list">
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">Laravel (PHP)</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="92"></div>
                                    </div>
                                </div>
                                <span class="skill-level">92%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">Node.js</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="85"></div>
                                    </div>
                                </div>
                                <span class="skill-level">85%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">Python</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="78"></div>
                                    </div>
                                </div>
                                <span class="skill-level">78%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">REST APIs</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="88"></div>
                                    </div>
                                </div>
                                <span class="skill-level">88%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Database & DevOps -->
                    <div class="skill-category slide-in-left delay-3">
                        <div class="category-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3>Database & DevOps</h3>
                        <div class="skill-list">
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">MySQL</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="90"></div>
                                    </div>
                                </div>
                                <span class="skill-level">90%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">MongoDB</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="82"></div>
                                    </div>
                                </div>
                                <span class="skill-level">82%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">Git & GitHub</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="95"></div>
                                    </div>
                                </div>
                                <span class="skill-level">95%</span>
                            </div>
                            <div class="skill-item">
                                <div>
                                    <div class="skill-name">Docker</div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-width="75"></div>
                                    </div>
                                </div>
                                <span class="skill-level">75%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tools & Technologies -->
            <div class="tools-section fade-in">
                <div class="section-title">
                    <h2>Tools & Technologies</h2>
                    <p>Development tools and technologies I use daily</p>
                </div>
                <div class="tools-grid">
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fab fa-react"></i>
                        </div>
                        <div class="tool-name">React</div>
                    </div>
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div class="tool-name">Laravel</div>
                    </div>
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fab fa-node-js"></i>
                        </div>
                        <div class="tool-name">Node.js</div>
                    </div>
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fab fa-js-square"></i>
                        </div>
                        <div class="tool-name">JavaScript</div>
                    </div>
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fab fa-php"></i>
                        </div>
                        <div class="tool-name">PHP</div>
                    </div>
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fab fa-python"></i>
                        </div>
                        <div class="tool-name">Python</div>
                    </div>
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fab fa-git-alt"></i>
                        </div>
                        <div class="tool-name">Git</div>
                    </div>
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fab fa-docker"></i>
                        </div>
                        <div class="tool-name">Docker</div>
                    </div>
                </div>
            </div>

            <!-- Soft Skills -->
            <div class="skills-section">
                <div class="section-title fade-in">
                    <h2>Soft Skills</h2>
                    <p>Personal qualities that enhance my professional capabilities</p>
                </div>
                
                <div class="soft-skills">
                    <div class="soft-skill-card fade-in delay-1">
                        <div class="soft-skill-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Team Collaboration</h4>
                        <p>Excellent at working in teams and communicating effectively with stakeholders.</p>
                    </div>
                    <div class="soft-skill-card fade-in delay-2">
                        <div class="soft-skill-icon">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h4>Problem Solving</h4>
                        <p>Strong analytical thinking and creative problem-solving abilities.</p>
                    </div>
                    <div class="soft-skill-card fade-in delay-3">
                        <div class="soft-skill-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Time Management</h4>
                        <p>Efficient project management and ability to meet tight deadlines.</p>
                    </div>
                    <div class="soft-skill-card fade-in delay-4">
                        <div class="soft-skill-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Continuous Learning</h4>
                        <p>Always eager to learn new technologies and improve existing skills.</p>
                    </div>
                </div>
            </div>

            <!-- Experience Level -->
            <div class="experience-section fade-in">
                <h2>Experience Overview</h2>
                <p>Years of dedication and continuous improvement in development</p>
                <div class="experience-grid">
                    <div class="experience-item">
                        <span class="experience-number">2+</span>
                        <span class="experience-label">Years Experience</span>
                    </div>
                    <div class="experience-item">
                        <span class="experience-number">25+</span>
                        <span class="experience-label">Projects Completed</span>
                    </div>
                    <div class="experience-item">
                        <span class="experience-number">15+</span>
                        <span class="experience-label">Technologies Mastered</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const navMenu = document.getElementById('nav-menu');

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = 'none';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Animate skill bars
                    if (entry.target.classList.contains('skill-category')) {
                        const skillBars = entry.target.querySelectorAll('.skill-progress');
                        skillBars.forEach(bar => {
                            const width = bar.getAttribute('data-width');
                            setTimeout(() => {
                                bar.style.width = width + '%';
                            }, 500);
                        });
                    }
                }
            });
        }, observerOptions);

        // Observe all animation elements
        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .skill-category').forEach(el => {
            observer.observe(el);
        });
    </script>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-brand">Shafin</div>
                    <p>Full Stack Developer passionate about creating innovative web solutions and bringing ideas to life through clean, efficient code.</p>
                    <div class="footer-social">
                        <a href="https://github.com/shaf1501" class="footer-social-link" title="GitHub" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://linkedin.com/in/tanjid-shafin" class="footer-social-link" title="LinkedIn" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://twitter.com/tanjid_shafin" class="footer-social-link" title="Twitter" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com/tanjid_shafin" class="footer-social-link" title="Instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://facebook.com/tanjid.shafin" class="footer-social-link" title="Facebook" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="{{ url('/about') }}"><i class="fas fa-user"></i> About Me</a></li>
                        <li><a href="{{ url('/skills') }}"><i class="fas fa-code"></i> Skills</a></li>
                        <li><a href="{{ url('/projects') }}"><i class="fas fa-laptop-code"></i> Projects</a></li>
                        <li><a href="{{ url('/achievements') }}"><i class="fas fa-trophy"></i> Achievements</a></li>
                        <li><a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Get In Touch</h3>
                    <div class="footer-contact">
                        <p><i class="fas fa-envelope"></i> tstanjidahmedshafin@gmail.com</p>
                        <p><i class="fas fa-phone"></i> +880 1794-567749</p>
                        <p><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</p>
                        <p><i class="fas fa-globe"></i> Available for freelance work</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Tanjid Ahammed Shafin. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
