<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Tanjid Ahammed Shafin</title>
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

        /* Filter Tabs */
        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 4rem;
            flex-wrap: wrap;
        }

        .filter-tab {
            padding: 0.75rem 1.5rem;
            background: var(--white);
            color: var(--gray-medium);
            border: 2px solid var(--light-bg);
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .filter-tab.active,
        .filter-tab:hover {
            background: var(--accent);
            color: var(--white);
            border-color: var(--accent);
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .project-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
            position: relative;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
        }

        .project-image {
            width: 100%;
            height: 200px;
            background: var(--light-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--accent);
            position: relative;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 130, 140, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-links {
            display: flex;
            gap: 1rem;
        }

        .project-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: var(--white);
            color: var(--accent);
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .project-link:hover {
            background: var(--accent);
            color: var(--white);
            transform: scale(1.1);
        }

        .project-content {
            padding: 2rem;
        }

        .project-category {
            display: inline-block;
            background: rgba(15, 130, 140, 0.1);
            color: var(--accent);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .project-description {
            color: var(--gray-medium);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .tech-tag {
            background: var(--light-bg);
            color: var(--primary);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .project-status {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .status-completed {
            color: #059669;
        }

        .status-ongoing {
            color: #d97706;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .status-completed .status-dot {
            background: #059669;
        }

        .status-ongoing .status-dot {
            background: #d97706;
        }

        /* Featured Project */
        .featured-project {
            background: var(--white);
            border-radius: 24px;
            padding: 3rem;
            margin-bottom: 4rem;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .featured-project::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        .featured-badge {
            display: inline-block;
            background: var(--gradient);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .featured-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .featured-text h3 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .featured-text p {
            color: var(--gray-medium);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .featured-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin: 2rem 0;
        }

        .featured-stat {
            text-align: center;
            padding: 1rem;
            background: var(--light-bg);
            border-radius: 12px;
        }

        .featured-stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent);
        }

        .featured-stat-label {
            font-size: 0.9rem;
            color: var(--gray-medium);
        }

        .featured-image {
            text-align: center;
        }

        .featured-image i {
            font-size: 8rem;
            color: var(--accent);
            opacity: 0.3;
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

            .projects-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .featured-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .featured-stats {
                grid-template-columns: 1fr;
            }

            .featured-project {
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

        .slide-in-up {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease;
        }

        .slide-in-up.visible {
            opacity: 1;
            transform: translateY(0);
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
                    <li><a href="{{ url('/education') }}" class="nav-link">Education</a></li>
                    <li><a href="{{ url('/skills') }}" class="nav-link">Skills</a></li>
                    <li><a href="{{ url('/projects') }}" class="nav-link active">Projects</a></li>
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
                <h1 class="page-title">My Projects</h1>
                <p class="page-subtitle">A showcase of my recent work and creative solutions that demonstrate my skills and passion for development.</p>
            </div>

            <!-- Featured Project -->
            <div class="featured-project fade-in">
                <div class="featured-badge">
                    <i class="fas fa-star"></i> Featured Project
                </div>
                <div class="featured-content">
                    <div class="featured-text">
                        <h3>E-Commerce Platform</h3>
                        <p>
                            A comprehensive e-commerce solution built with modern technologies. Features include user authentication, 
                            product management, shopping cart, payment integration, and admin dashboard. The platform is designed 
                            for scalability and optimal performance.
                        </p>
                        <div class="featured-stats">
                            <div class="featured-stat">
                                <div class="featured-stat-number">1000+</div>
                                <div class="featured-stat-label">Users</div>
                            </div>
                            <div class="featured-stat">
                                <div class="featured-stat-number">500+</div>
                                <div class="featured-stat-label">Products</div>
                            </div>
                            <div class="featured-stat">
                                <div class="featured-stat-number">99.9%</div>
                                <div class="featured-stat-label">Uptime</div>
                            </div>
                        </div>
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">React.js</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Stripe</span>
                            <span class="tech-tag">AWS</span>
                        </div>
                    </div>
                    <div class="featured-image">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>

            <!-- Filter Tabs -->
            <div class="filter-tabs fade-in">
                <div class="filter-tab active" data-filter="all">All Projects</div>
                <div class="filter-tab" data-filter="web">Web Development</div>
                <div class="filter-tab" data-filter="mobile">Mobile Apps</div>
                <div class="filter-tab" data-filter="api">APIs</div>
                <div class="filter-tab" data-filter="tools">Tools</div>
            </div>

            <!-- Projects Grid -->
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card slide-in-up delay-1" data-category="web">
                    <div class="project-image">
                        <i class="fas fa-tasks"></i>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link" title="Source Code">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Web Application</div>
                        <h3 class="project-title">Task Management System</h3>
                        <p class="project-description">
                            A collaborative task management application with real-time updates, team collaboration features, 
                            and intuitive project organization tools.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Vue.js</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">Socket.io</span>
                            <span class="tech-tag">MongoDB</span>
                        </div>
                        <div class="project-status status-completed">
                            <span class="status-dot"></span>
                            Completed
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card slide-in-up delay-2" data-category="web">
                    <div class="project-image">
                        <i class="fas fa-chart-line"></i>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link" title="Source Code">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Dashboard</div>
                        <h3 class="project-title">Analytics Dashboard</h3>
                        <p class="project-description">
                            An interactive analytics dashboard with data visualization, real-time charts, and comprehensive 
                            reporting features for business intelligence.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">React.js</span>
                            <span class="tech-tag">D3.js</span>
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">PostgreSQL</span>
                        </div>
                        <div class="project-status status-completed">
                            <span class="status-dot"></span>
                            Completed
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card slide-in-up delay-3" data-category="mobile">
                    <div class="project-image">
                        <i class="fas fa-mobile-alt"></i>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link" title="Source Code">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Mobile App</div>
                        <h3 class="project-title">Weather Forecast App</h3>
                        <p class="project-description">
                            A beautiful weather application with location-based forecasts, interactive maps, and weather alerts. 
                            Clean UI with smooth animations.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">React Native</span>
                            <span class="tech-tag">Weather API</span>
                            <span class="tech-tag">Maps SDK</span>
                            <span class="tech-tag">Firebase</span>
                        </div>
                        <div class="project-status status-ongoing">
                            <span class="status-dot"></span>
                            In Progress
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card slide-in-up delay-4" data-category="api">
                    <div class="project-image">
                        <i class="fas fa-code"></i>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" title="Documentation">
                                    <i class="fas fa-book"></i>
                                </a>
                                <a href="#" class="project-link" title="Source Code">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">REST API</div>
                        <h3 class="project-title">Blog API Service</h3>
                        <p class="project-description">
                            A robust RESTful API for blog management with authentication, CRUD operations, search functionality, 
                            and comprehensive documentation.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">JWT Auth</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Swagger</span>
                        </div>
                        <div class="project-status status-completed">
                            <span class="status-dot"></span>
                            Completed
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card slide-in-up delay-1" data-category="tools">
                    <div class="project-image">
                        <i class="fas fa-tools"></i>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link" title="Source Code">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Developer Tool</div>
                        <h3 class="project-title">Code Snippet Manager</h3>
                        <p class="project-description">
                            A developer tool for organizing and managing code snippets with syntax highlighting, 
                            tagging system, and quick search functionality.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Electron</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">SQLite</span>
                            <span class="tech-tag">Prism.js</span>
                        </div>
                        <div class="project-status status-completed">
                            <span class="status-dot"></span>
                            Completed
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="project-card slide-in-up delay-2" data-category="web">
                    <div class="project-image">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" title="Live Demo">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link" title="Source Code">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Educational Platform</div>
                        <h3 class="project-title">Learning Management System</h3>
                        <p class="project-description">
                            An online learning platform with course management, video streaming, progress tracking, 
                            and interactive quizzes for students and instructors.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">Vue.js</span>
                            <span class="tech-tag">Redis</span>
                            <span class="tech-tag">FFmpeg</span>
                        </div>
                        <div class="project-status status-ongoing">
                            <span class="status-dot"></span>
                            In Progress
                        </div>
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

        // Filter functionality
        const filterTabs = document.querySelectorAll('.filter-tab');
        const projectCards = document.querySelectorAll('.project-card');

        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                filterTabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                tab.classList.add('active');

                const filter = tab.getAttribute('data-filter');

                projectCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
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
        document.querySelectorAll('.fade-in, .slide-in-up').forEach(el => {
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
