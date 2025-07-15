@extends('layouts.master')

@section('title', 'About Me - Tanjid Ahammed Shafin')

@section('styles')
<style>
    .about-hero {
        background: var(--gradient-1);
        color: white;
        padding: 5rem 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
    }

    .about-hero h1 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        animation: fadeInUp 1s ease;
    }

    .about-hero p {
        font-size: 1.3rem;
        max-width: 600px;
        margin: 0 auto;
        opacity: 0.9;
        animation: fadeInUp 1s ease 0.2s both;
    }

    .about-content {
        padding: 5rem 0;
    }

    .about-grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 4rem;
        align-items: start;
        margin-bottom: 5rem;
    }

    .profile-section {
        text-align: center;
        position: sticky;
        top: 100px;
    }

    .profile-image-large {
        width: 300px;
        height: 300px;
        border-radius: 50%;
        object-fit: cover;
        border: 8px solid white;
        box-shadow: var(--shadow-xl);
        margin-bottom: 2rem;
        transition: all 0.3s ease;
        animation: fadeInLeft 1s ease;
    }

    .profile-image-large:hover {
        transform: scale(1.05);
        box-shadow: 0 30px 60px rgba(102, 126, 234, 0.3);
    }

    .profile-info {
        background: white;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: var(--shadow-md);
        animation: fadeInLeft 1s ease 0.2s both;
    }

    .profile-info h3 {
        color: var(--primary);
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }

    .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding: 0.5rem 0;
    }

    .info-item i {
        color: var(--secondary);
        width: 20px;
        margin-right: 1rem;
        font-size: 1.1rem;
    }

    .info-item span {
        color: var(--text-secondary);
        font-weight: 500;
    }

    .about-text {
        animation: fadeInRight 1s ease;
    }

    .about-text h2 {
        color: var(--primary);
        font-size: 2.5rem;
        margin-bottom: 2rem;
        position: relative;
    }

    .about-text h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: var(--gradient-1);
        border-radius: 2px;
    }

    .about-text p {
        color: var(--text-secondary);
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 2rem;
        text-align: justify;
    }

    .interests-section {
        background: white;
        padding: 5rem 0;
    }

    .interests-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .interest-card {
        background: linear-gradient(145deg, #f7fafc, white);
        padding: 2.5rem;
        border-radius: 20px;
        text-align: center;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        border: 1px solid rgba(102, 126, 234, 0.1);
        position: relative;
        overflow: hidden;
    }

    .interest-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: var(--gradient-3);
        transform: rotate(45deg);
        transition: all 0.6s ease;
        opacity: 0;
    }

    .interest-card:hover::before {
        opacity: 0.05;
        animation: shimmer 1.5s ease;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
    }

    .interest-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: var(--shadow-xl);
    }

    .interest-icon {
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

    .interest-card:hover .interest-icon {
        transform: scale(1.1) rotate(10deg);
    }

    .interest-icon i {
        font-size: 2rem;
        color: white;
    }

    .interest-card h3 {
        color: var(--text-primary);
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }

    .interest-card p {
        color: var(--text-secondary);
        line-height: 1.6;
    }

    .values-section {
        background: linear-gradient(135deg, #f7fafc, #edf2f7);
        padding: 5rem 0;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .value-item {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        border-left: 5px solid var(--primary);
    }

    .value-item:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-xl);
        border-left-color: var(--secondary);
    }

    .value-icon {
        width: 60px;
        height: 60px;
        background: var(--gradient-2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }

    .value-icon i {
        font-size: 1.5rem;
        color: white;
    }

    .value-item h4 {
        color: var(--text-primary);
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }

    .value-item p {
        color: var(--text-secondary);
        font-size: 1rem;
        line-height: 1.5;
    }

    .quote-section {
        background: var(--gradient-1);
        color: white;
        padding: 4rem 0;
        text-align: center;
        position: relative;
    }

    .quote-content {
        max-width: 800px;
        margin: 0 auto;
        position: relative;
    }

    .quote-text {
        font-size: 2rem;
        font-style: italic;
        margin-bottom: 2rem;
        position: relative;
        line-height: 1.5;
    }

    .quote-text::before,
    .quote-text::after {
        content: '"';
        font-size: 4rem;
        color: rgba(255, 255, 255, 0.3);
        position: absolute;
        top: -1rem;
    }

    .quote-text::before {
        left: -2rem;
    }

    .quote-text::after {
        right: -2rem;
    }

    .quote-author {
        font-size: 1.2rem;
        opacity: 0.9;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .about-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .profile-section {
            position: static;
        }

        .profile-image-large {
            width: 200px;
            height: 200px;
        }

        .about-hero h1 {
            font-size: 2.5rem;
        }

        .about-text h2 {
            font-size: 2rem;
        }

        .quote-text {
            font-size: 1.5rem;
        }

        .quote-text::before,
        .quote-text::after {
            font-size: 3rem;
        }

        .quote-text::before {
            left: -1rem;
        }

        .quote-text::after {
            right: -1rem;
        }
    }

    .download-cv {
        margin-top: 2rem;
        display: inline-block;
    }
</style>
@endsection

@section('content')
<!-- About Hero Section -->
<section class="about-hero">
    <div class="container">
        <h1><i class="fas fa-user"></i> About Me</h1>
        <p>Get to know the person behind the code - my journey, passions, and what drives me to create amazing digital experiences.</p>
    </div>
</section>

<!-- About Content -->
<section class="about-content">
    <div class="container">
        <div class="about-grid">
            <div class="profile-section animate-on-scroll">
                <img src="{{asset('assets/image/Formal_pic.png')}}" alt="Tanjid Ahammed Shafin" class="profile-image-large">

                <div class="profile-info">
                    <h3>Quick Info</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Dhaka, Bangladesh</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-birthday-cake"></i>
                        <span>22 Years Old</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-briefcase"></i>
                        <span>Web Developer</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Student</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-language"></i>
                        <span>Bengali, English</span>
                    </div>

                    <a href="#" class="btn btn-primary download-cv">
                        <i class="fas fa-download"></i> Download CV
                    </a>
                </div>
            </div>

            <div class="about-text animate-on-scroll">
                <h2>Hello, I'm Tanjid Ahammed Shafin</h2>
                <p>
                    I'm a passionate web developer currently pursuing my studies while building my skills in full-stack development. My journey in technology began with curiosity about how websites work, and it has evolved into a deep passion for creating meaningful digital experiences.
                </p>
                <p>
                    As an amateur developer, I'm constantly learning and experimenting with new technologies. I believe in the power of continuous learning and staying updated with the latest trends in web development. Every project I work on is an opportunity to grow and improve my skills.
                </p>
                <p>
                    What drives me is the ability to turn ideas into reality through code. I love the problem-solving aspect of programming and the satisfaction that comes from building something that works beautifully and efficiently. My goal is to create web applications that not only function well but also provide an exceptional user experience.
                </p>
                <p>
                    When I'm not coding, you'll find me exploring new technologies, reading about web development trends, or working on personal projects that challenge me to think creatively and push my boundaries.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Interests Section -->
<section class="interests-section">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>My Interests & Passions</h2>
            <p>Beyond coding, these are the things that inspire and motivate me every day.</p>
        </div>

        <div class="interests-grid">
            <div class="interest-card animate-on-scroll">
                <div class="interest-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>Creating responsive, user-friendly websites and applications using modern frameworks and technologies. I love turning ideas into reality through clean, efficient code.</p>
            </div>

            <div class="interest-card animate-on-scroll">
                <div class="interest-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Responsive Design</h3>
                <p>Crafting designs that work seamlessly across all devices. I believe in mobile-first approach and creating interfaces that adapt beautifully to any screen size.</p>
            </div>

            <div class="interest-card animate-on-scroll">
                <div class="interest-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Learning & Growth</h3>
                <p>Continuously expanding my knowledge through online courses, tutorials, and hands-on projects. I'm always eager to learn new technologies and improve my skills.</p>
            </div>

            <div class="interest-card animate-on-scroll">
                <div class="interest-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Problem Solving</h3>
                <p>I enjoy tackling complex challenges and finding creative solutions. Every bug is a puzzle to solve, and every project is an opportunity to think outside the box.</p>
            </div>

            <div class="interest-card animate-on-scroll">
                <div class="interest-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>UI/UX Design</h3>
                <p>Understanding user behavior and creating intuitive interfaces. I believe good design is not just about looks, but about creating meaningful user experiences.</p>
            </div>

            <div class="interest-card animate-on-scroll">
                <div class="interest-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Innovation</h3>
                <p>Staying updated with the latest technologies and trends. I'm always excited about new tools and frameworks that can help me build better applications.</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>My Core Values</h2>
            <p>These principles guide every decision I make in my development journey.</p>
        </div>

        <div class="values-grid">
            <div class="value-item animate-on-scroll">
                <div class="value-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h4>Quality</h4>
                <p>Striving for excellence in every line of code I write, focusing on clean, maintainable, and efficient solutions.</p>
            </div>

            <div class="value-item animate-on-scroll">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h4>Passion</h4>
                <p>Bringing enthusiasm and dedication to every project, treating each challenge as an opportunity to grow.</p>
            </div>

            <div class="value-item animate-on-scroll">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4>Creativity</h4>
                <p>Thinking outside the box to find innovative solutions and create unique user experiences.</p>
            </div>

            <div class="value-item animate-on-scroll">
                <div class="value-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h4>Collaboration</h4>
                <p>Working well with others, sharing knowledge, and learning from the development community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section class="quote-section">
    <div class="container">
        <div class="quote-content animate-on-scroll">
            <div class="quote-text">
                The best way to predict the future is to create it.
            </div>
            <div class="quote-author">
                - Peter Drucker
            </div>
        </div>
    </div>
</section>
@endsection
