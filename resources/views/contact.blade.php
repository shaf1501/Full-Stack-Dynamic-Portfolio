<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Tanjid Ahammed Shafin</title>
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
            min-height: calc(100vh - 80px);
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

        /* Contact Section */
        .contact-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: start;
        }

        .contact-info {
            background: var(--white);
            padding: 3rem;
            border-radius: 24px;
            box-shadow: var(--shadow-lg);
            height: fit-content;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .contact-info p {
            color: var(--gray-medium);
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: var(--light-bg);
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--accent);
            color: var(--white);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-details h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .contact-details span {
            color: var(--gray-medium);
            font-size: 0.95rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-link {
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: var(--white);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .social-link:hover {
            background: var(--accent);
            transform: translateY(-2px);
        }

        /* Contact Form */
        .contact-form {
            background: var(--white);
            padding: 3rem;
            border-radius: 24px;
            box-shadow: var(--shadow-lg);
        }

        .contact-form h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .contact-form p {
            color: var(--gray-medium);
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(15, 130, 140, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        .btn-primary {
            background: var(--accent);
            color: var(--white);
        }

        .btn-primary:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Map Section */
        .map-section {
            margin-top: 6rem;
            background: var(--white);
            border-radius: 24px;
            padding: 3rem;
            box-shadow: var(--shadow-lg);
            text-align: center;
        }

        .map-section h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .map-section p {
            color: var(--gray-medium);
            margin-bottom: 2rem;
        }

        .map-placeholder {
            width: 100%;
            height: 300px;
            background: var(--light-bg);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-medium);
            font-size: 1.1rem;
            border: 2px dashed #e2e8f0;
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

            .contact-section {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .contact-info,
            .contact-form,
            .map-section {
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
                    <li><a href="{{ url('/education') }}" class="nav-link">Education</a></li>
                    <li><a href="{{ url('/skills') }}" class="nav-link">Skills</a></li>
                    <li><a href="{{ url('/projects') }}" class="nav-link">Projects</a></li>
                    <li><a href="{{ url('/achievements') }}" class="nav-link">Achievements</a></li>
                    <li><a href="{{ url('/contact') }}" class="nav-link active">Contact</a></li>
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
                <h1 class="page-title">Get In Touch</h1>
                <p class="page-subtitle">Let's discuss your project or just say hello. I'm always excited to work on new ideas and collaborate with great people.</p>
            </div>

            <!-- Contact Section -->
            <div class="contact-section">
                <!-- Contact Info -->
                <div class="contact-info slide-in-left">
                    <h3>Let's Connect</h3>
                    <p>I'm always open to discussing new opportunities, interesting projects, or just having a friendly chat about technology and development.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <span>tstanjidahmedshafin@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <span>+880 1794-567749</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <span>Dhaka, Bangladesh</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Response Time</h4>
                            <span>Usually within 24 hours</span>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form slide-in-right">
                    <h3>Send Message</h3>
                    <p>Fill out the form below and I'll get back to you as soon as possible.</p>
                    
                    <form>
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="firstName" class="form-label">First Name *</label>
                                <input type="text" id="firstName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Last Name *</label>
                                <input type="text" id="lastName" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="subject" class="form-label">Subject *</label>
                            <input type="text" id="subject" class="form-control" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" class="form-control" required placeholder="Tell me about your project or just say hello!"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map Section -->
            <div class="map-section fade-in delay-3">
                <h3>My Location</h3>
                <p>Based in Dhaka, Bangladesh - Available for remote work worldwide</p>
                <div class="map-placeholder">
                    <div>
                        <i class="fas fa-map-marked-alt" style="font-size: 2rem; margin-bottom: 1rem; display: block;"></i>
                        Interactive Map - Dhaka, Bangladesh
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

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            
            // Show success message (you can integrate with your backend here)
            alert('Thank you for your message! I\'ll get back to you soon.');
            
            // Reset form
            this.reset();
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

    <script>
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
    </script>
</body>
</html>
