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
    <title>Education - Tanjid Ahammed Shafin</title>
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

        /* Education Timeline */
        .education-timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }

        .education-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--accent);
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .education-item {
            position: relative;
            margin-bottom: 4rem;
        }

        .education-item:nth-child(odd) .education-card {
            margin-left: 0;
            margin-right: 55%;
        }

        .education-item:nth-child(even) .education-card {
            margin-left: 55%;
            margin-right: 0;
        }

        .education-card {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            position: relative;
            transition: all 0.3s ease;
        }

        .education-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .education-card::before {
            content: '';
            position: absolute;
            top: 50%;
            width: 20px;
            height: 20px;
            background: var(--accent);
            border-radius: 50%;
            transform: translateY(-50%);
            border: 4px solid var(--white);
            box-shadow: 0 0 0 4px var(--accent);
        }

        .education-item:nth-child(odd) .education-card::before {
            right: -60px;
        }

        .education-item:nth-child(even) .education-card::before {
            left: -60px;
        }

        .education-year {
            display: inline-block;
            background: var(--accent);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .education-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .education-institution {
            font-size: 1.1rem;
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .education-grade {
            background: var(--light-bg);
            color: var(--primary);
            padding: 0.5rem 1rem;
            border-radius: 15px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .education-description {
            color: var(--gray-medium);
            line-height: 1.7;
            margin-bottom: 1rem;
        }

        .education-highlights {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .highlight-tag {
            background: rgba(15, 130, 140, 0.1);
            color: var(--accent);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .education-image {
            width: 80px;
            height: 80px;
            border-radius: 16px;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 3px solid var(--light-bg);
        }

        /* Stats Section */
        .education-stats {
            background: var(--white);
            border-radius: 24px;
            padding: 4rem;
            margin: 4rem 0;
            box-shadow: var(--shadow-lg);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            background: var(--light-bg);
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 0.5rem;
            display: block;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--gray-medium);
            font-weight: 500;
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

            .page-title {
                font-size: 2.5rem;
            }

            .education-timeline::before {
                left: 20px;
            }

            .education-item:nth-child(odd) .education-card,
            .education-item:nth-child(even) .education-card {
                margin-left: 50px;
                margin-right: 0;
            }

            .education-item:nth-child(odd) .education-card::before,
            .education-item:nth-child(even) .education-card::before {
                left: -45px;
                right: auto;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .education-stats {
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
                    <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                    <li><a href="{{ url('/education') }}" class="nav-link active">Education</a></li>
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

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header fade-in">
                <h1 class="page-title">Education</h1>
                <p class="page-subtitle">My academic journey and continuous learning path that has shaped my knowledge and skills in technology and development.</p>
            </div>

            <!-- Education Timeline -->
            <div class="education-timeline">
                <div class="education-item slide-in-left">
                    <div class="education-card">
                        <img src="{{asset('assets/image/university-logo.png')}}" alt="University" class="education-image">
                        <div class="education-year">2020 - Present</div>
                        <h3 class="education-title">Bachelor of Science in Computer Science</h3>
                        <div class="education-institution">Daffodil International University</div>
                        <div class="education-grade">CGPA: 3.85 / 4.00</div>
                        <p class="education-description">
                            Currently pursuing my degree with a focus on software development, algorithms, data structures, 
                            and modern web technologies. Maintaining excellent academic performance while actively 
                            participating in coding competitions and tech communities.
                        </p>
                        <div class="education-highlights">
                            <span class="highlight-tag">Top 10%</span>
                            <span class="highlight-tag">Dean's List</span>
                            <span class="highlight-tag">Programming Club President</span>
                        </div>
                    </div>
                </div>

                <div class="education-item slide-in-right">
                    <div class="education-card">
                        <img src="{{asset('assets/image/college-logo.png')}}" alt="College" class="education-image">
                        <div class="education-year">2017 - 2019</div>
                        <h3 class="education-title">Higher Secondary Certificate (HSC)</h3>
                        <div class="education-institution">Daud Public School & College</div>
                        <div class="education-grade">GPA: 5.00 / 5.00</div>
                        <p class="education-description">
                            Completed with excellent grades focusing on Science and Mathematics. Developed strong 
                            analytical and problem-solving skills that form the foundation of my programming journey. 
                            Actively participated in science fairs and mathematics olympiads.
                        </p>
                        <div class="education-highlights">
                            <span class="highlight-tag">Golden GPA</span>
                            <span class="highlight-tag">Science Group</span>
                            <span class="highlight-tag">Merit Position</span>
                        </div>
                    </div>
                </div>

                <div class="education-item slide-in-left">
                    <div class="education-card">
                        <img src="{{asset('assets/image/school-logo.png')}}" alt="School" class="education-image">
                        <div class="education-year">2015 - 2017</div>
                        <h3 class="education-title">Secondary School Certificate (SSC)</h3>
                        <div class="education-institution">Genius Laboratory School and College</div>
                        <div class="education-grade">GPA: 5.00 / 5.00</div>
                        <p class="education-description">
                            Graduated with distinction, demonstrating consistent academic excellence and developing 
                            a strong foundation in mathematics and logical reasoning. First exposure to computer 
                            science which sparked my interest in programming.
                        </p>
                        <div class="education-highlights">
                            <span class="highlight-tag">Golden GPA</span>
                            <span class="highlight-tag">Science Group</span>
                            <span class="highlight-tag">Computer Science</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Education Stats -->
            <div class="education-stats fade-in">
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">3.85</span>
                        <span class="stat-label">Current CGPA</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Courses Completed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Certifications</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Years Learning</span>
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
                }
            });
        }, observerOptions);

        // Observe all animation elements
        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
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
</body>
</html>
