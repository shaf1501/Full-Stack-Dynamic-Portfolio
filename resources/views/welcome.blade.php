<!DOCTYPE h        :root {
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
        }ng="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanjid Ahammed Shafin - Full Stack Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a202c;
            --secondary: #2d3748;
            --accent: #0F828C;
            --light-bg: #f7fafc;
            --white: #ffffff;
            --gray-light: #718096;
            --gray-medium: #4a5568;
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

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            z-index: -1;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            width: 100%;
        }

        .hero-text {
            padding: 2rem 0;
        }

        .hero-greeting {
            font-size: 1.2rem;
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 1rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 1rem;
            line-height: 1.1;
            opacity: 0;
            animation: fadeInUp 0.8s ease 0.2s forwards;
        }

        .hero-title .highlight {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: var(--gray-medium);
            margin-bottom: 2rem;
            font-weight: 500;
            opacity: 0;
            animation: fadeInUp 0.8s ease 0.4s forwards;
        }

        .hero-description {
            font-size: 1.1rem;
            color: var(--gray-light);
            margin-bottom: 3rem;
            line-height: 1.7;
            opacity: 0;
            animation: fadeInUp 0.8s ease 0.6s forwards;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeInUp 0.8s ease 0.8s forwards;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--gradient);
            color: var(--white);
            box-shadow: var(--shadow-lg);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .btn-secondary {
            background: var(--white);
            color: var(--primary);
            border: 2px solid var(--light-bg);
            box-shadow: var(--shadow-md);
        }

        .btn-secondary:hover {
            border-color: var(--accent);
            color: var(--accent);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .profile-container {
            position: relative;
            width: 400px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--gradient);
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .profile-image {
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-xl);
            position: relative;
            z-index: 2;
            opacity: 0;
            animation: fadeInScale 1s ease 1s forwards;
            overflow: hidden;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        /* Social Links */
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease 1s forwards;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: var(--white);
            color: var(--gray-medium);
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
        }

        .social-link:hover {
            background: var(--accent);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Quick Stats */
        .quick-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 4rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease 1.2s forwards;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: var(--white);
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--gray-medium);
            font-weight: 500;
        }

        /* Floating Elements */
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: float 8s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
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

            .resume-btn {
                margin-left: 0;
                margin-top: 1rem;
                justify-self: center;
            }

            .hero-content {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .profile-container {
                width: 300px;
                height: 300px;
            }

            .profile-image {
                width: 240px;
                height: 240px;
            }

            .hero-buttons {
                justify-content: center;
            }

            .quick-stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(-20px) rotate(5deg);
            }
            66% {
                transform: translateY(10px) rotate(-5deg);
            }
        }

        /* Scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            color: var(--gray-medium);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }

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
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 1rem;
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
                    <li><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                    <li><a href="{{ url('/education') }}" class="nav-link">Education</a></li>
                    <li><a href="{{ url('/skills') }}" class="nav-link">Skills</a></li>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-elements">
            <div class="floating-element">
                <i class="fas fa-code" style="font-size: 3rem; color: var(--accent);"></i>
            </div>
            <div class="floating-element">
                <i class="fas fa-laptop-code" style="font-size: 2.5rem; color: var(--accent);"></i>
            </div>
            <div class="floating-element">
                <i class="fas fa-mobile-alt" style="font-size: 2rem; color: var(--accent);"></i>
            </div>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-greeting">
                        <i class="fas fa-hand-wave"></i> Hello, I'm
                    </div>
                    <h1 class="hero-title">
                        Tanjid Ahammed <span class="highlight">Shafin</span>
                    </h1>
                    <h2 class="hero-subtitle">Full Stack Developer & Problem Solver</h2>
                    <p class="hero-description">
                        Passionate about creating innovative web solutions and bringing ideas to life through clean, 
                        efficient code. Specialized in modern web technologies with a focus on user experience and performance.
                    </p>
                    
                    <div class="hero-buttons">
                        <a href="{{ url('/projects') }}" class="btn btn-primary">
                            <i class="fas fa-eye"></i>
                            View My Work
                        </a>
                        <a href="{{ url('/contact') }}" class="btn btn-secondary">
                            <i class="fas fa-envelope"></i>
                            Get In Touch
                        </a>
                    </div>

                    <div class="social-links">
                        <a href="#" class="social-link" title="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-link" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                    <div class="quick-stats">
                        <div class="stat-item">
                            <div class="stat-number">2+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">25+</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Technologies</div>
                        </div>
                    </div>
                </div>

                <div class="hero-image">
                    <div class="profile-container">
                        <div class="profile-bg"></div>
                        <div class="profile-image">
                            <img src="{{ asset('assets/image/Formal_pic.png') }}" alt="Tanjid Ahammed Shafin">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

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
                        <p><i class="fas fa-envelope"></i> tanjidshafin@gmail.com</p>
                        <p><i class="fas fa-phone"></i> +880 1234 567890</p>
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

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactivity to the profile image
        const profileImage = document.querySelector('.profile-image');
        profileImage.addEventListener('mouseenter', () => {
            profileImage.style.transform = 'scale(1.05)';
        });

        profileImage.addEventListener('mouseleave', () => {
            profileImage.style.transform = 'scale(1)';
        });

        // Counter animation for stats
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current) + (target === 25 ? '+' : target === 15 ? '+' : target === 2 ? '+' : '');
            }, 20);
        }

        // Trigger counter animation when stats come into view
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const target = parseInt(stat.textContent);
                        animateCounter(stat, target);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const quickStats = document.querySelector('.quick-stats');
        if (quickStats) {
            observer.observe(quickStats);
        }
    </script>
</body>
</html>