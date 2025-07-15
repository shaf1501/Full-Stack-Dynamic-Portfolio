@extends('layouts.master')

@section('title', 'Education - Tanjid Ahammed Shafin')

@section('styles')
<style>
    .education-hero {
        background: var(--gradient-2);
        color: white;
        padding: 5rem 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .education-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="books" width="30" height="30" patternUnits="userSpaceOnUse"><path d="M5 10h4v10h-4z M15 8h4v12h-4z M25 12h4v8h-4z" fill="white" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23books)"/></svg>');
    }

    .education-hero h1 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        animation: fadeInUp 1s ease;
    }

    .education-hero p {
        font-size: 1.3rem;
        max-width: 600px;
        margin: 0 auto;
        opacity: 0.9;
        animation: fadeInUp 1s ease 0.2s both;
    }

    .education-content {
        padding: 6rem 0;
    }

    .timeline-container {
        position: relative;
        max-width: 1000px;
        margin: 0 auto;
    }

    .timeline-line {
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 4px;
        background: var(--gradient-1);
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 4rem;
        display: flex;
        align-items: center;
        animation: fadeInUp 1s ease;
    }

    .timeline-item:nth-child(even) {
        flex-direction: row-reverse;
    }

    .timeline-item:nth-child(even) .timeline-content {
        animation: fadeInLeft 1s ease;
    }

    .timeline-item:nth-child(odd) .timeline-content {
        animation: fadeInRight 1s ease;
    }

    .timeline-content {
        width: calc(50% - 50px);
        background: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: var(--shadow-lg);
        position: relative;
        border: 1px solid rgba(102, 126, 234, 0.1);
        transition: all 0.3s ease;
    }

    .timeline-content:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
    }

    .timeline-content::before {
        content: '';
        position: absolute;
        top: 50%;
        width: 0;
        height: 0;
        border: 15px solid transparent;
        transform: translateY(-50%);
    }

    .timeline-item:nth-child(odd) .timeline-content::before {
        right: -30px;
        border-left-color: white;
    }

    .timeline-item:nth-child(even) .timeline-content::before {
        left: -30px;
        border-right-color: white;
    }

    .timeline-dot {
        position: absolute;
        left: 50%;
        width: 20px;
        height: 20px;
        background: var(--gradient-1);
        border-radius: 50%;
        transform: translateX(-50%);
        border: 4px solid white;
        box-shadow: var(--shadow-md);
        z-index: 10;
    }

    .timeline-year {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 35px;
        background: var(--primary);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        box-shadow: var(--shadow-md);
        z-index: 10;
    }

    .education-icon {
        width: 80px;
        height: 80px;
        background: var(--gradient-1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
    }

    .timeline-content:hover .education-icon {
        transform: scale(1.1) rotate(10deg);
    }

    .education-icon i {
        font-size: 2rem;
        color: white;
    }

    .education-title {
        color: var(--primary);
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
        font-weight: 700;
    }

    .education-institution {
        color: var(--secondary);
        font-size: 1.3rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .education-duration {
        display: inline-block;
        background: linear-gradient(135deg, #f093fb, #f5576c);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }

    .education-description {
        color: var(--text-secondary);
        line-height: 1.7;
        margin-bottom: 1.5rem;
        font-size: 1.1rem;
    }

    .education-highlights {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .education-highlights li {
        position: relative;
        padding-left: 2rem;
        margin-bottom: 0.8rem;
        color: var(--text-secondary);
        line-height: 1.5;
    }

    .education-highlights li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--accent);
        font-weight: bold;
        font-size: 1.2rem;
    }

    .stats-section {
        background: linear-gradient(135deg, #f7fafc, #edf2f7);
        padding: 5rem 0;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .stat-card {
        background: white;
        padding: 2.5rem 1.5rem;
        border-radius: 20px;
        text-align: center;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        border: 1px solid rgba(102, 126, 234, 0.1);
    }

    .stat-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        background: var(--gradient-1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        color: var(--text-secondary);
        font-weight: 600;
        font-size: 1.1rem;
    }

    .skills-acquired {
        background: white;
        padding: 5rem 0;
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1.5rem;
        margin-top: 3rem;
    }

    .skill-tag {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        padding: 1rem;
        border-radius: 15px;
        text-align: center;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .skill-tag:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: var(--shadow-lg);
    }

    @media (max-width: 768px) {
        .timeline-line {
            left: 30px;
        }

        .timeline-item {
            flex-direction: row !important;
            padding-left: 60px;
        }

        .timeline-content {
            width: 100%;
        }

        .timeline-content::before {
            left: -30px !important;
            border-right-color: white !important;
            border-left-color: transparent !important;
        }

        .timeline-dot {
            left: 30px;
        }

        .timeline-year {
            left: 30px;
        }

        .education-hero h1 {
            font-size: 2.5rem;
        }

        .education-title {
            font-size: 1.5rem;
        }

        .education-institution {
            font-size: 1.2rem;
        }

        .stat-number {
            font-size: 2.5rem;
        }
    }
</style>
@endsection

@section('content')
<!-- Education Hero Section -->
<section class="education-hero">
    <div class="container">
        <h1><i class="fas fa-graduation-cap"></i> Educational Journey</h1>
        <p>My academic path and the knowledge I've gained along the way to becoming a skilled developer.</p>
    </div>
</section>

<!-- Education Timeline -->
<section class="education-content">
    <div class="container">
        <div class="timeline-container">
            <div class="timeline-line"></div>

            <!-- Current Education -->
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2021 - Present</div>
                <div class="timeline-content">
                    <div class="education-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="education-title">Bachelor's in Computer Science & Engineering</h3>
                    <h4 class="education-institution">Daffodil International University</h4>
                    <div class="education-duration">Currently Pursuing • 4th Year</div>
                    <p class="education-description">
                        Currently pursuing my Bachelor's degree in Computer Science and Engineering, focusing on software development, algorithms, and modern web technologies. This program has provided me with a strong foundation in programming principles and software engineering practices.
                    </p>
                    <ul class="education-highlights">
                        <li>Relevant Coursework: Data Structures, Algorithms, Database Management, Software Engineering</li>
                        <li>Programming Languages: C, C++, Java, Python, JavaScript, PHP</li>
                        <li>Web Technologies: HTML5, CSS3, Laravel, React (Learning)</li>
                        <li>Database: MySQL, PostgreSQL</li>
                        <li>Tools & Frameworks: Git, VS Code, Laravel, Bootstrap</li>
                    </ul>
                </div>
            </div>

            <!-- Higher Secondary -->
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2018 - 2020</div>
                <div class="timeline-content">
                    <div class="education-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <h3 class="education-title">Higher Secondary Certificate (HSC)</h3>
                    <h4 class="education-institution">Safiuddin Sarkar Academy & College</h4>
                    <div class="education-duration">Completed • Science Group</div>
                    <p class="education-description">
                        Completed Higher Secondary education with a focus on Science subjects including Mathematics, Physics, and Chemistry. This period strengthened my analytical thinking and problem-solving abilities, which form the foundation of my programming mindset.
                    </p>
                    <ul class="education-highlights">
                        <li>Major Subjects: Mathematics, Physics, Chemistry, Biology</li>
                        <li>Strong foundation in Mathematics and logical reasoning</li>
                        <li>First exposure to computer programming concepts</li>
                        <li>Developed analytical and critical thinking skills</li>
                    </ul>
                </div>
            </div>

            <!-- Secondary Education -->
            <div class="timeline-item animate-on-scroll">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2016 - 2018</div>
                <div class="timeline-content">
                    <div class="education-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="education-title">Secondary School Certificate (SSC)</h3>
                    <h4 class="education-institution">I.E.T High School</h4>
                    <div class="education-duration">Completed • Science Group</div>
                    <p class="education-description">
                        Completed secondary education with excellent performance in Science subjects. This period established my interest in technology and mathematics, setting the stage for my future career in computer science.
                    </p>
                    <ul class="education-highlights">
                        <li>Science Group with Mathematics focus</li>
                        <li>Introduction to basic computer skills</li>
                        <li>Strong academic performance</li>
                        <li>Developed interest in technology and innovation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Statistics -->
<section class="stats-section">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>Academic Achievements</h2>
            <p>Numbers that represent my educational journey and continuous learning.</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card animate-on-scroll">
                <div class="stat-number counter" data-target="4">0</div>
                <div class="stat-label">Years in University</div>
            </div>

            <div class="stat-card animate-on-scroll">
                <div class="stat-number counter" data-target="15">0</div>
                <div class="stat-label">Courses Completed</div>
            </div>

            <div class="stat-card animate-on-scroll">
                <div class="stat-number counter" data-target="8">0</div>
                <div class="stat-label">Programming Languages</div>
            </div>

            <div class="stat-card animate-on-scroll">
                <div class="stat-number counter" data-target="12">0</div>
                <div class="stat-label">Projects Completed</div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Acquired Through Education -->
<section class="skills-acquired">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>Skills Acquired Through Education</h2>
            <p>Technical and soft skills developed during my academic journey.</p>
        </div>

        <div class="skills-grid">
            <div class="skill-tag animate-on-scroll">Data Structures</div>
            <div class="skill-tag animate-on-scroll">Algorithms</div>
            <div class="skill-tag animate-on-scroll">Object-Oriented Programming</div>
            <div class="skill-tag animate-on-scroll">Database Design</div>
            <div class="skill-tag animate-on-scroll">Software Engineering</div>
            <div class="skill-tag animate-on-scroll">Web Development</div>
            <div class="skill-tag animate-on-scroll">Problem Solving</div>
            <div class="skill-tag animate-on-scroll">System Analysis</div>
            <div class="skill-tag animate-on-scroll">Project Management</div>
            <div class="skill-tag animate-on-scroll">Team Collaboration</div>
            <div class="skill-tag animate-on-scroll">Research Skills</div>
            <div class="skill-tag animate-on-scroll">Critical Thinking</div>
        </div>
    </div>
</section>
@endsection
