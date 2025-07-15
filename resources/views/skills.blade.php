@extends('layouts.master')

@section('title', 'Skills - Tanjid Ahammed Shafin')

@section('styles')
<style>
    .skills-hero {
        background: var(--gradient-3);
        color: white;
        padding: 5rem 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .skills-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="code" width="40" height="40" patternUnits="userSpaceOnUse"><text x="5" y="15" font-family="monospace" font-size="8" fill="white" opacity="0.05">&lt;/&gt;</text><text x="25" y="30" font-family="monospace" font-size="6" fill="white" opacity="0.05">{}</text></pattern></defs><rect width="100" height="100" fill="url(%23code)"/></svg>');
    }

    .skills-hero h1 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        animation: fadeInUp 1s ease;
    }

    .skills-hero p {
        font-size: 1.3rem;
        max-width: 600px;
        margin: 0 auto;
        opacity: 0.9;
        animation: fadeInUp 1s ease 0.2s both;
    }

    .skills-content {
        padding: 6rem 0;
    }

    .skills-categories {
        margin-bottom: 5rem;
    }

    .category-section {
        margin-bottom: 5rem;
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease;
    }

    .category-section.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .category-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .category-header h2 {
        color: var(--primary);
        font-size: 2.5rem;
        margin-bottom: 1rem;
        position: relative;
    }

    .category-header h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--gradient-1);
        border-radius: 2px;
    }

    .category-header p {
        color: var(--text-secondary);
        font-size: 1.2rem;
        max-width: 600px;
        margin: 0 auto;
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2.5rem;
        margin-top: 3rem;
    }

    .skill-card {
        background: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: var(--shadow-md);
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid rgba(102, 126, 234, 0.1);
        position: relative;
        overflow: hidden;
    }

    .skill-card::before {
        content: '';
        position: absolute;
        top: -100%;
        left: -100%;
        width: 300%;
        height: 300%;
        background: linear-gradient(45deg, transparent, rgba(102, 126, 234, 0.1), transparent);
        transition: all 0.6s ease;
        transform: rotate(45deg);
    }

    .skill-card:hover::before {
        animation: shimmer 1.5s ease;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
    }

    .skill-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: var(--shadow-xl);
    }

    .skill-icon {
        width: 100px;
        height: 100px;
        background: var(--gradient-1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .skill-card:hover .skill-icon {
        transform: scale(1.1) rotate(10deg);
    }

    .skill-icon i {
        font-size: 2.5rem;
        color: white;
    }

    .skill-icon img {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }

    .skill-name {
        color: var(--primary);
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        position: relative;
        z-index: 2;
    }

    .skill-level {
        margin-bottom: 1.5rem;
        position: relative;
        z-index: 2;
    }

    .skill-percentage {
        color: var(--secondary);
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }

    .skill-bar {
        width: 100%;
        height: 8px;
        background: #e2e8f0;
        border-radius: 4px;
        overflow: hidden;
        position: relative;
    }

    .skill-progress {
        height: 100%;
        background: var(--gradient-1);
        border-radius: 4px;
        width: 0%;
        transition: width 2s ease;
        position: relative;
    }

    .skill-progress::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        animation: loading 2s ease-in-out infinite;
    }

    @keyframes loading {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    .skill-description {
        color: var(--text-secondary);
        line-height: 1.6;
        font-size: 1rem;
        position: relative;
        z-index: 2;
    }

    .proficiency-section {
        background: linear-gradient(135deg, #f7fafc, #edf2f7);
        padding: 5rem 0;
    }

    .proficiency-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .proficiency-card {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        border-left: 5px solid var(--primary);
    }

    .proficiency-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-xl);
        border-left-color: var(--secondary);
    }

    .proficiency-level {
        color: var(--primary);
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .proficiency-description {
        color: var(--text-secondary);
        line-height: 1.5;
    }

    .tools-section {
        background: white;
        padding: 5rem 0;
    }

    .tools-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .tool-item {
        background: linear-gradient(145deg, #f7fafc, white);
        padding: 2rem 1rem;
        border-radius: 15px;
        text-align: center;
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
        border: 1px solid rgba(102, 126, 234, 0.1);
    }

    .tool-item:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: var(--shadow-lg);
    }

    .tool-icon {
        width: 60px;
        height: 60px;
        background: var(--gradient-2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        transition: all 0.3s ease;
    }

    .tool-item:hover .tool-icon {
        transform: scale(1.1) rotate(10deg);
    }

    .tool-icon i {
        font-size: 1.5rem;
        color: white;
    }

    .tool-name {
        color: var(--text-primary);
        font-weight: 600;
        font-size: 0.9rem;
    }

    .learning-section {
        background: var(--gradient-1);
        color: white;
        padding: 5rem 0;
        text-align: center;
    }

    .learning-content {
        max-width: 800px;
        margin: 0 auto;
    }

    .learning-title {
        font-size: 2.5rem;
        margin-bottom: 2rem;
    }

    .learning-description {
        font-size: 1.2rem;
        line-height: 1.7;
        margin-bottom: 3rem;
        opacity: 0.9;
    }

    .learning-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
    }

    .learning-item {
        background: rgba(255, 255, 255, 0.1);
        padding: 1.5rem;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    .learning-item:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-5px);
    }

    .learning-item i {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: #f093fb;
    }

    .learning-item h4 {
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
    }

    .learning-item p {
        font-size: 0.9rem;
        opacity: 0.8;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .skills-hero h1 {
            font-size: 2.5rem;
        }

        .category-header h2 {
            font-size: 2rem;
        }

        .skills-grid {
            grid-template-columns: 1fr;
        }

        .learning-title {
            font-size: 2rem;
        }

        .learning-description {
            font-size: 1.1rem;
        }
    }
</style>
@endsection

@section('content')
<!-- Skills Hero Section -->
<section class="skills-hero">
    <div class="container">
        <h1><i class="fas fa-cogs"></i> Technical Skills</h1>
        <p>A comprehensive overview of my technical expertise, tools I work with, and technologies I'm passionate about.</p>
    </div>
</section>

<!-- Main Skills Content -->
<section class="skills-content">
    <div class="container">

        <!-- Frontend Skills -->
        <div class="category-section animate-on-scroll">
            <div class="category-header">
                <h2>Frontend Development</h2>
                <p>Creating beautiful, responsive, and interactive user interfaces</p>
            </div>

            <div class="skills-grid">
                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fab fa-html5"></i>
                    </div>
                    <h3 class="skill-name">HTML5</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">90%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="90"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Semantic markup, accessibility standards, and modern HTML5 features for building structured web content.
                    </p>
                </div>

                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <h3 class="skill-name">CSS3</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">85%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="85"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Advanced styling, animations, flexbox, grid, responsive design, and CSS frameworks like Bootstrap.
                    </p>
                </div>

                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <h3 class="skill-name">JavaScript</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">80%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="80"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        ES6+, DOM manipulation, async programming, event handling, and modern JavaScript frameworks.
                    </p>
                </div>

                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fab fa-react"></i>
                    </div>
                    <h3 class="skill-name">React</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">70%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="70"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Component-based architecture, hooks, state management, and building dynamic user interfaces.
                    </p>
                </div>
            </div>
        </div>

        <!-- Backend Skills -->
        <div class="category-section animate-on-scroll">
            <div class="category-header">
                <h2>Backend Development</h2>
                <p>Server-side development and database management</p>
            </div>

            <div class="skills-grid">
                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fab fa-php"></i>
                    </div>
                    <h3 class="skill-name">PHP</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">85%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="85"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Object-oriented programming, MVC architecture, and modern PHP frameworks for web development.
                    </p>
                </div>

                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fab fa-laravel"></i>
                    </div>
                    <h3 class="skill-name">Laravel</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">80%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="80"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Eloquent ORM, routing, middleware, authentication, and building robust web applications.
                    </p>
                </div>

                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="skill-name">MySQL</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">75%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="75"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Database design, complex queries, relationships, indexing, and database optimization.
                    </p>
                </div>

                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fab fa-python"></i>
                    </div>
                    <h3 class="skill-name">Python</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">70%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="70"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Data structures, algorithms, automation scripts, and exploring web frameworks like Django.
                    </p>
                </div>
            </div>
        </div>

        <!-- Programming Languages -->
        <div class="category-section animate-on-scroll">
            <div class="category-header">
                <h2>Programming Languages</h2>
                <p>Core languages I work with for various development needs</p>
            </div>

            <div class="skills-grid">
                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="skill-name">C</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">75%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="75"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Fundamental programming concepts, memory management, and system-level programming.
                    </p>
                </div>

                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="skill-name">C++</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">70%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="70"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        Object-oriented programming, STL, data structures, and competitive programming basics.
                    </p>
                </div>

                <div class="skill-card animate-on-scroll">
                    <div class="skill-icon">
                        <i class="fab fa-java"></i>
                    </div>
                    <h3 class="skill-name">Java</h3>
                    <div class="skill-level">
                        <div class="skill-percentage">65%</div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="65"></div>
                        </div>
                    </div>
                    <p class="skill-description">
                        OOP principles, collections framework, and basic enterprise application concepts.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proficiency Levels -->
<section class="proficiency-section">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>Proficiency Levels</h2>
            <p>Understanding my skill levels and areas of expertise</p>
        </div>

        <div class="proficiency-grid">
            <div class="proficiency-card animate-on-scroll">
                <div class="proficiency-level">Expert (80-90%)</div>
                <div class="proficiency-description">
                    Technologies I use daily and can solve complex problems with confidence. HTML5, CSS3, PHP.
                </div>
            </div>

            <div class="proficiency-card animate-on-scroll">
                <div class="proficiency-level">Proficient (70-80%)</div>
                <div class="proficiency-description">
                    Solid understanding with ability to build projects independently. JavaScript, Laravel, MySQL.
                </div>
            </div>

            <div class="proficiency-card animate-on-scroll">
                <div class="proficiency-level">Intermediate (60-70%)</div>
                <div class="proficiency-description">
                    Good foundation with some guidance needed for complex tasks. React, Python, C++, Java.
                </div>
            </div>

            <div class="proficiency-card animate-on-scroll">
                <div class="proficiency-level">Learning (40-60%)</div>
                <div class="proficiency-description">
                    Currently studying and building projects to improve. Node.js, MongoDB, Advanced React.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools & Technologies -->
<section class="tools-section">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>Tools & Technologies</h2>
            <p>Development tools and technologies I use in my workflow</p>
        </div>

        <div class="tools-grid">
            <div class="tool-item animate-on-scroll">
                <div class="tool-icon">
                    <i class="fab fa-git-alt"></i>
                </div>
                <div class="tool-name">Git</div>
            </div>

            <div class="tool-item animate-on-scroll">
                <div class="tool-icon">
                    <i class="fab fa-github"></i>
                </div>
                <div class="tool-name">GitHub</div>
            </div>

            <div class="tool-item animate-on-scroll">
                <div class="tool-icon">
                    <i class="fas fa-code"></i>
                </div>
                <div class="tool-name">VS Code</div>
            </div>

            <div class="tool-item animate-on-scroll">
                <div class="tool-icon">
                    <i class="fab fa-bootstrap"></i>
                </div>
                <div class="tool-name">Bootstrap</div>
            </div>

            <div class="tool-item animate-on-scroll">
                <div class="tool-icon">
                    <i class="fab fa-npm"></i>
                </div>
                <div class="tool-name">NPM</div>
            </div>

            <div class="tool-item animate-on-scroll">
                <div class="tool-icon">
                    <i class="fas fa-terminal"></i>
                </div>
                <div class="tool-name">Terminal</div>
            </div>

            <div class="tool-item animate-on-scroll">
                <div class="tool-icon">
                    <i class="fab fa-figma"></i>
                </div>
                <div class="tool-name">Figma</div>
            </div>

            <div class="tool-item animate-on-scroll">
                <div class="tool-icon">
                    <i class="fas fa-server"></i>
                </div>
                <div class="tool-name">XAMPP</div>
            </div>
        </div>
    </div>
</section>

<!-- Currently Learning -->
<section class="learning-section">
    <div class="container">
        <div class="learning-content animate-on-scroll">
            <h2 class="learning-title">Currently Learning</h2>
            <p class="learning-description">
                I believe in continuous learning and staying updated with the latest technologies. Here's what I'm currently focusing on to enhance my skills.
            </p>

            <div class="learning-list">
                <div class="learning-item animate-on-scroll">
                    <i class="fab fa-node-js"></i>
                    <h4>Node.js</h4>
                    <p>Server-side JavaScript development and building RESTful APIs</p>
                </div>

                <div class="learning-item animate-on-scroll">
                    <i class="fas fa-database"></i>
                    <h4>MongoDB</h4>
                    <p>NoSQL database design and modern data storage solutions</p>
                </div>

                <div class="learning-item animate-on-scroll">
                    <i class="fab fa-react"></i>
                    <h4>Advanced React</h4>
                    <p>Context API, Redux, and advanced React patterns</p>
                </div>

                <div class="learning-item animate-on-scroll">
                    <i class="fas fa-mobile-alt"></i>
                    <h4>React Native</h4>
                    <p>Cross-platform mobile app development</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Animate skill bars when they come into view
    function animateSkillBars() {
        const skillBars = document.querySelectorAll('.skill-progress');

        skillBars.forEach(bar => {
            const targetWidth = bar.getAttribute('data-width');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            bar.style.width = targetWidth + '%';
                        }, 500);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            observer.observe(bar);
        });
    }

    // Initialize animations when page loads
    document.addEventListener('DOMContentLoaded', function() {
        animateSkillBars();
    });
</script>
@endsection
