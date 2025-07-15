@extends('layouts.master')

@section('title', 'Home - Tanjid Ahammed Shafin')

@section('styles')
<style>
    .hero {
        min-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23667eea" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23764ba2" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.5;
    }

    .hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        max-width: 1200px;
        width: 100%;
        padding: 0 2rem;
        position: relative;
        z-index: 1;
    }

    .hero-text {
        opacity: 0;
        animation: fadeInLeft 1s ease 0.3s forwards;
    }

    .hero-text h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        background: var(--gradient-1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1.2;
    }

    .hero-text .subtitle {
        font-size: 1.5rem;
        color: var(--text-secondary);
        margin-bottom: 1.5rem;
        font-weight: 400;
    }

    .typing-text {
        border-right: 2px solid var(--primary);
        animation: typing 3s steps(30, end), blink-caret 0.75s step-end infinite;
        white-space: nowrap;
        overflow: hidden;
        display: inline-block;
    }

    @keyframes typing {
        from { width: 0; }
        to { width: 100%; }
    }

    @keyframes blink-caret {
        from, to { border-color: transparent; }
        50% { border-color: var(--primary); }
    }

    .hero-text p {
        font-size: 1.1rem;
        color: var(--text-secondary);
        margin-bottom: 2rem;
        line-height: 1.8;
    }

    .hero-buttons {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .hero-image {
        text-align: center;
        opacity: 0;
        animation: fadeInRight 1s ease 0.5s forwards;
    }

    .profile-image {
        width: 350px;
        height: 350px;
        border-radius: 50%;
        object-fit: cover;
        border: 8px solid white;
        box-shadow: var(--shadow-xl);
        transition: all 0.3s ease;
        position: relative;
    }

    .profile-image:hover {
        transform: scale(1.05);
        box-shadow: 0 25px 50px rgba(102, 126, 234, 0.3);
    }

    .image-container {
        position: relative;
        display: inline-block;
    }

    .image-container::before {
        content: '';
        position: absolute;
        top: -20px;
        left: -20px;
        right: -20px;
        bottom: -20px;
        background: var(--gradient-1);
        border-radius: 50%;
        z-index: -1;
        opacity: 0.1;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .features {
        padding: 5rem 0;
        background: white;
    }

    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        background: var(--gradient-1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-title p {
        font-size: 1.2rem;
        color: var(--text-secondary);
        max-width: 600px;
        margin: 0 auto;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .feature-card {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        border: 1px solid rgba(102, 126, 234, 0.1);
        position: relative;
        overflow: hidden;
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--gradient-3);
        opacity: 0.05;
        transition: left 0.3s ease;
    }

    .feature-card:hover::before {
        left: 0;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
    }

    .feature-icon {
        width: 80px;
        height: 80px;
        background: var(--gradient-1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        transition: all 0.3s ease;
    }

    .feature-card:hover .feature-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .feature-icon i {
        font-size: 2rem;
        color: white;
    }

    .feature-card h3 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .feature-card p {
        color: var(--text-secondary);
        line-height: 1.6;
    }

    .stats {
        background: var(--gradient-1);
        color: white;
        padding: 4rem 0;
        text-align: center;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .stat-item {
        padding: 1.5rem;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: bold;
        display: block;
        margin-bottom: 0.5rem;
        counter-reset: number;
    }

    .stat-label {
        font-size: 1.1rem;
        opacity: 0.9;
        font-weight: 300;
    }

    .floating-elements {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
    }

    .floating-element {
        position: absolute;
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
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

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    @media (max-width: 768px) {
        .hero-content {
            grid-template-columns: 1fr;
            gap: 2rem;
            text-align: center;
        }

        .hero-text h1 {
            font-size: 2.5rem;
        }

        .hero-text .subtitle {
            font-size: 1.2rem;
        }

        .profile-image {
            width: 250px;
            height: 250px;
        }

        .hero-buttons {
            justify-content: center;
        }

        .features-grid {
            grid-template-columns: 1fr;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="floating-elements">
        <div class="floating-element">
            <i class="fas fa-code" style="font-size: 4rem; color: var(--primary);"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-laptop" style="font-size: 3rem; color: var(--secondary);"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-rocket" style="font-size: 3.5rem; color: var(--accent);"></i>
        </div>
    </div>

    <div class="hero-content">
        <div class="hero-text">
            <h1>Hi, I'm Tanjid Ahammed Shafin</h1>
            <p class="subtitle">
                <span class="typing-text">Full Stack Developer</span>
            </p>
            <p>
                Passionate web developer crafting responsive and user-friendly digital experiences.
                I specialize in modern web technologies and love bringing creative ideas to life through code.
            </p>
            <div class="hero-buttons">
                <a href="/about_me" class="btn btn-primary">
                    <i class="fas fa-user"></i> About Me
                </a>
                <a href="/contact" class="btn btn-outline">
                    <i class="fas fa-envelope"></i> Get In Touch
                </a>
            </div>
        </div>

        <div class="hero-image">
            <div class="image-container">
                <img src="{{asset('assets/image/Formal_pic.png')}}" alt="Tanjid Ahammed Shafin" class="profile-image">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>What I Do</h2>
            <p>I create modern, responsive web applications using cutting-edge technologies and best practices.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card animate-on-scroll animate-delay-1">
                <div class="feature-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>Building responsive websites and web applications using modern frameworks like React, Vue.js, and Laravel.</p>
            </div>

            <div class="feature-card animate-on-scroll animate-delay-2">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Responsive Design</h3>
                <p>Creating mobile-first designs that work seamlessly across all devices and screen sizes.</p>
            </div>

            <div class="feature-card animate-on-scroll animate-delay-3">
                <div class="feature-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Performance</h3>
                <p>Optimizing applications for speed and performance to deliver the best user experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="section-title">
            <h2 style="color: white;">My Journey</h2>
            <p style="color: rgba(255, 255, 255, 0.9);">Here's a snapshot of my experience and achievements</p>
        </div>

        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number" data-target="25">0</span>
                <span class="stat-label">Projects Completed</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="2">0</span>
                <span class="stat-label">Years Learning</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="10">0</span>
                <span class="stat-label">Technologies</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="100">0</span>
                <span class="stat-label">Dedication %</span>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Counter animation for stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const increment = target / 50;
            let current = 0;

            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            updateCounter();
        });
    }

    // Trigger counter animation when stats section is visible
    const statsSection = document.querySelector('.stats');
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                statsObserver.unobserve(entry.target);
            }
        });
    });

    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Parallax effect for floating elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.3;

        document.querySelectorAll('.floating-element').forEach((element, index) => {
            const speed = (index + 1) * 0.2;
            element.style.transform = `translateY(${rate * speed}px) rotate(${scrolled * 0.1}deg)`;
        });
    });
</script>
@endsection
