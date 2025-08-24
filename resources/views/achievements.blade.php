<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements - Tanjid Ahammed Shafin</title>
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
            --gradient-gold: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
            --gradient-silver: linear-gradient(135deg, #c0c0c0 0%, #a8a8a8 100%);
            --gradient-bronze: linear-gradient(135deg, #cd7f32 0%, #b8860b 100%);
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

        /* Achievement Stats */
        .achievement-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .stat-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        .stat-icon {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--gray-medium);
            font-weight: 500;
        }

        /* Achievements Grid */
        .achievements-section {
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 2rem;
            text-align: center;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .achievement-card {
            background: var(--white);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
            position: relative;
        }

        .achievement-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .achievement-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .achievement-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--white);
        }

        .gold .achievement-icon {
            background: var(--gradient-gold);
        }

        .silver .achievement-icon {
            background: var(--gradient-silver);
        }

        .bronze .achievement-icon {
            background: var(--gradient-bronze);
        }

        .blue .achievement-icon {
            background: var(--gradient);
        }

        .achievement-info h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .achievement-info .date {
            font-size: 0.9rem;
            color: var(--gray-medium);
        }

        .achievement-description {
            color: var(--gray-medium);
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .achievement-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid var(--light-bg);
        }

        .achievement-issuer {
            font-size: 0.9rem;
            color: var(--accent);
            font-weight: 600;
        }

        .achievement-badge {
            background: rgba(15, 130, 140, 0.1);
            color: var(--accent);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Certifications */
        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .certification-card {
            background: var(--white);
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            border-left: 4px solid var(--accent);
        }

        .certification-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .certification-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .certification-logo {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background: var(--light-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--accent);
        }

        .certification-info h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .certification-info .issuer {
            font-size: 0.9rem;
            color: var(--gray-medium);
        }

        .certification-date {
            font-size: 0.85rem;
            color: var(--gray-light);
            margin-top: 0.5rem;
        }

        .certification-status {
            display: inline-block;
            background: rgba(34, 197, 94, 0.1);
            color: #059669;
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-top: 0.5rem;
        }

        /* Timeline */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--accent);
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            width: 50%;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            padding-right: 2rem;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
            padding-left: 2rem;
        }

        .timeline-content {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            position: relative;
        }

        .timeline-item:nth-child(odd) .timeline-content::after {
            content: '';
            position: absolute;
            right: -8px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-left: 8px solid var(--white);
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            content: '';
            position: absolute;
            left: -8px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-right: 8px solid var(--white);
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
        }

        .timeline-dot {
            position: absolute;
            top: 50%;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--accent);
            border: 4px solid var(--white);
            box-shadow: var(--shadow-md);
            transform: translateY(-50%);
        }

        .timeline-item:nth-child(odd) .timeline-dot {
            right: -35px;
        }

        .timeline-item:nth-child(even) .timeline-dot {
            left: -35px;
        }

        .timeline-year {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }

        .timeline-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .timeline-description {
            color: var(--gray-medium);
            line-height: 1.6;
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

            .achievements-grid {
                grid-template-columns: 1fr;
            }

            .certifications-grid {
                grid-template-columns: 1fr;
            }

            .timeline::before {
                left: 20px;
            }

            .timeline-item {
                width: 100%;
                left: 0 !important;
                padding-left: 3rem !important;
                padding-right: 0 !important;
            }

            .timeline-dot {
                left: 10px !important;
                right: auto !important;
            }

            .timeline-content::after {
                display: none;
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

        .scale-in {
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.6s ease;
        }

        .scale-in.visible {
            opacity: 1;
            transform: scale(1);
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
                    <li><a href="{{ url('/projects') }}" class="nav-link">Projects</a></li>
                    <li><a href="{{ url('/achievements') }}" class="nav-link active">Achievements</a></li>
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
                <h1 class="page-title">Achievements</h1>
                <p class="page-subtitle">Recognition, awards, and milestones that mark my journey in technology and professional development.</p>
            </div>

            <!-- Achievement Stats -->
            <div class="achievement-stats fade-in">
                <div class="stat-card scale-in delay-1">
                    <div class="stat-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-number">12</div>
                    <div class="stat-label">Awards Won</div>
                </div>
                <div class="stat-card scale-in delay-2">
                    <div class="stat-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="stat-number">8</div>
                    <div class="stat-label">Certifications</div>
                </div>
                <div class="stat-card scale-in delay-3">
                    <div class="stat-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
                <div class="stat-card scale-in delay-4">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">5+</div>
                    <div class="stat-label">Team Collaborations</div>
                </div>
            </div>

            <!-- Awards & Recognitions -->
            <div class="achievements-section">
                <h2 class="section-title fade-in">Awards & Recognitions</h2>
                <div class="achievements-grid">
                    <div class="achievement-card gold slide-in-up delay-1">
                        <div class="achievement-header">
                            <div class="achievement-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="achievement-info">
                                <h3>Best Web Application</h3>
                                <div class="date">December 2023</div>
                            </div>
                        </div>
                        <p class="achievement-description">
                            Received first place for developing an innovative e-commerce platform with advanced features 
                            and exceptional user experience at the National Web Development Competition.
                        </p>
                        <div class="achievement-details">
                            <div class="achievement-issuer">Tech Innovation Awards</div>
                            <div class="achievement-badge">Gold Medal</div>
                        </div>
                    </div>

                    <div class="achievement-card silver slide-in-up delay-2">
                        <div class="achievement-header">
                            <div class="achievement-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="achievement-info">
                                <h3>Outstanding Developer</h3>
                                <div class="date">August 2023</div>
                            </div>
                        </div>
                        <p class="achievement-description">
                            Recognized for exceptional coding skills and innovative problem-solving approach in the 
                            Annual Developer Excellence Awards among 500+ participants.
                        </p>
                        <div class="achievement-details">
                            <div class="achievement-issuer">Developer Community</div>
                            <div class="achievement-badge">Silver Award</div>
                        </div>
                    </div>

                    <div class="achievement-card blue slide-in-up delay-3">
                        <div class="achievement-header">
                            <div class="achievement-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="achievement-info">
                                <h3>Best Team Player</h3>
                                <div class="date">June 2023</div>
                            </div>
                        </div>
                        <p class="achievement-description">
                            Acknowledged for exceptional collaboration skills and leadership in coordinating a 
                            cross-functional team to deliver a complex project ahead of schedule.
                        </p>
                        <div class="achievement-details">
                            <div class="achievement-issuer">Company Recognition</div>
                            <div class="achievement-badge">Team Excellence</div>
                        </div>
                    </div>

                    <div class="achievement-card bronze slide-in-up delay-4">
                        <div class="achievement-header">
                            <div class="achievement-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="achievement-info">
                                <h3>Coding Challenge Winner</h3>
                                <div class="date">March 2023</div>
                            </div>
                        </div>
                        <p class="achievement-description">
                            Third place in the International Coding Championship for solving complex algorithmic 
                            problems with optimal solutions under time constraints.
                        </p>
                        <div class="achievement-details">
                            <div class="achievement-issuer">Global Code Challenge</div>
                            <div class="achievement-badge">Bronze Medal</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certifications -->
            <div class="achievements-section">
                <h2 class="section-title fade-in">Certifications</h2>
                <div class="certifications-grid">
                    <div class="certification-card slide-in-up delay-1">
                        <div class="certification-header">
                            <div class="certification-logo">
                                <i class="fab fa-aws"></i>
                            </div>
                            <div class="certification-info">
                                <h4>AWS Certified Developer</h4>
                                <div class="issuer">Amazon Web Services</div>
                            </div>
                        </div>
                        <div class="certification-date">Issued: November 2023</div>
                        <div class="certification-status">Active</div>
                    </div>

                    <div class="certification-card slide-in-up delay-2">
                        <div class="certification-header">
                            <div class="certification-logo">
                                <i class="fab fa-google"></i>
                            </div>
                            <div class="certification-info">
                                <h4>Google Cloud Professional</h4>
                                <div class="issuer">Google Cloud Platform</div>
                            </div>
                        </div>
                        <div class="certification-date">Issued: September 2023</div>
                        <div class="certification-status">Active</div>
                    </div>

                    <div class="certification-card slide-in-up delay-3">
                        <div class="certification-header">
                            <div class="certification-logo">
                                <i class="fab fa-microsoft"></i>
                            </div>
                            <div class="certification-info">
                                <h4>Microsoft Azure Fundamentals</h4>
                                <div class="issuer">Microsoft Corporation</div>
                            </div>
                        </div>
                        <div class="certification-date">Issued: July 2023</div>
                        <div class="certification-status">Active</div>
                    </div>

                    <div class="certification-card slide-in-up delay-4">
                        <div class="certification-header">
                            <div class="certification-logo">
                                <i class="fab fa-react"></i>
                            </div>
                            <div class="certification-info">
                                <h4>React Developer Certification</h4>
                                <div class="issuer">Meta (Facebook)</div>
                            </div>
                        </div>
                        <div class="certification-date">Issued: May 2023</div>
                        <div class="certification-status">Active</div>
                    </div>

                    <div class="certification-card slide-in-up delay-1">
                        <div class="certification-header">
                            <div class="certification-logo">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <div class="certification-info">
                                <h4>Laravel Certified Developer</h4>
                                <div class="issuer">Laravel LLC</div>
                            </div>
                        </div>
                        <div class="certification-date">Issued: March 2023</div>
                        <div class="certification-status">Active</div>
                    </div>

                    <div class="certification-card slide-in-up delay-2">
                        <div class="certification-header">
                            <div class="certification-logo">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="certification-info">
                                <h4>MySQL Database Administrator</h4>
                                <div class="issuer">Oracle Corporation</div>
                            </div>
                        </div>
                        <div class="certification-date">Issued: January 2023</div>
                        <div class="certification-status">Active</div>
                    </div>
                </div>
            </div>

            <!-- Achievement Timeline -->
            <div class="achievements-section">
                <h2 class="section-title fade-in">Achievement Timeline</h2>
                <div class="timeline fade-in">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2023</div>
                            <div class="timeline-title">Best Web Application Award</div>
                            <div class="timeline-description">
                                Won first place in the National Web Development Competition for creating an innovative 
                                e-commerce platform with advanced features.
                            </div>
                        </div>
                        <div class="timeline-dot"></div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2023</div>
                            <div class="timeline-title">AWS Certification Achieved</div>
                            <div class="timeline-description">
                                Successfully obtained AWS Certified Developer certification, demonstrating expertise 
                                in cloud development and deployment.
                            </div>
                        </div>
                        <div class="timeline-dot"></div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2023</div>
                            <div class="timeline-title">Outstanding Developer Recognition</div>
                            <div class="timeline-description">
                                Received silver award for exceptional coding skills and innovative problem-solving 
                                approach in the Annual Developer Excellence Awards.
                            </div>
                        </div>
                        <div class="timeline-dot"></div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2023</div>
                            <div class="timeline-title">Team Leadership Excellence</div>
                            <div class="timeline-description">
                                Recognized for exceptional leadership in coordinating cross-functional teams and 
                                delivering complex projects ahead of schedule.
                            </div>
                        </div>
                        <div class="timeline-dot"></div>
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
                element.textContent = Math.floor(current) + (target === 25 ? '+' : '');
            }, 20);
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Animate counters for stat cards
                    if (entry.target.classList.contains('stat-card')) {
                        const number = entry.target.querySelector('.stat-number');
                        const target = parseInt(number.textContent);
                        animateCounter(number, target);
                    }
                }
            });
        }, observerOptions);

        // Observe all animation elements
        document.querySelectorAll('.fade-in, .slide-in-up, .scale-in').forEach(el => {
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
