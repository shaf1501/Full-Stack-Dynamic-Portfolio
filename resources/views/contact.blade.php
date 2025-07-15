@extends('layouts.master')

@section('title', 'Contact - Tanjid Ahammed Shafin')

@section('styles')
<style>
    .contact-hero {
        background: var(--gradient-1);
        color: white;
        padding: 5rem 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="contact" width="50" height="50" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="2" fill="white" opacity="0.1"/><path d="M10 15l10 8 10-8" stroke="white" stroke-width="1" fill="none" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23contact)"/></svg>');
    }

    .contact-hero h1 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        animation: fadeInUp 1s ease;
    }

    .contact-hero p {
        font-size: 1.3rem;
        max-width: 600px;
        margin: 0 auto;
        opacity: 0.9;
        animation: fadeInUp 1s ease 0.2s both;
    }

    .contact-content {
        padding: 6rem 0;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 4rem;
        align-items: start;
        margin-bottom: 4rem;
    }

    .contact-info {
        background: white;
        padding: 3rem;
        border-radius: 20px;
        box-shadow: var(--shadow-lg);
        position: sticky;
        top: 100px;
        animation: fadeInLeft 1s ease;
    }

    .contact-info h2 {
        color: var(--primary);
        font-size: 2rem;
        margin-bottom: 2rem;
        position: relative;
    }

    .contact-info h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 50px;
        height: 4px;
        background: var(--gradient-1);
        border-radius: 2px;
    }

    .contact-info p {
        color: var(--text-secondary);
        line-height: 1.7;
        margin-bottom: 2rem;
        font-size: 1.1rem;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
        padding: 1.5rem;
        background: linear-gradient(145deg, #f7fafc, white);
        border-radius: 15px;
        border-left: 4px solid var(--primary);
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        transform: translateX(10px);
        box-shadow: var(--shadow-md);
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        background: var(--gradient-1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.5rem;
        transition: all 0.3s ease;
    }

    .contact-item:hover .contact-icon {
        transform: scale(1.1) rotate(10deg);
    }

    .contact-icon i {
        font-size: 1.5rem;
        color: white;
    }

    .contact-details h4 {
        color: var(--primary);
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
    }

    .contact-details p {
        color: var(--text-secondary);
        margin: 0;
        font-size: 1rem;
    }

    .contact-details a {
        color: var(--secondary);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details a:hover {
        color: var(--primary);
    }

    .social-links {
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid #e2e8f0;
    }

    .social-links h4 {
        color: var(--primary);
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }

    .social-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
        gap: 1rem;
    }

    .social-link {
        width: 50px;
        height: 50px;
        background: var(--gradient-2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }

    .social-link:hover {
        transform: translateY(-5px) scale(1.1);
        box-shadow: var(--shadow-lg);
    }

    .contact-form {
        background: white;
        padding: 3rem;
        border-radius: 20px;
        box-shadow: var(--shadow-lg);
        animation: fadeInRight 1s ease;
    }

    .contact-form h2 {
        color: var(--primary);
        font-size: 2rem;
        margin-bottom: 2rem;
        position: relative;
    }

    .contact-form h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 50px;
        height: 4px;
        background: var(--gradient-1);
        border-radius: 2px;
    }

    .form-group {
        margin-bottom: 2rem;
        position: relative;
    }

    .form-group label {
        display: block;
        color: var(--text-primary);
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 1rem;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 1rem 1.5rem;
        border: 2px solid #e2e8f0;
        border-radius: 15px;
        font-size: 1rem;
        font-family: inherit;
        transition: all 0.3s ease;
        background: #f7fafc;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--primary);
        background: white;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-group textarea {
        min-height: 120px;
        resize: vertical;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }

    .submit-btn {
        background: var(--gradient-1);
        color: white;
        border: none;
        padding: 1rem 2.5rem;
        border-radius: 25px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .submit-btn:hover::before {
        left: 100%;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-xl);
    }

    .submit-btn:active {
        transform: translateY(-1px);
    }

    .form-status {
        padding: 1rem;
        border-radius: 10px;
        margin-top: 1rem;
        text-align: center;
        font-weight: 600;
        display: none;
    }

    .form-status.success {
        background: linear-gradient(135deg, #48bb78, #38a169);
        color: white;
    }

    .form-status.error {
        background: linear-gradient(135deg, #f56565, #e53e3e);
        color: white;
    }

    .floating-elements {
        position: absolute;
        top: 50%;
        right: -50px;
        width: 100px;
        height: 100px;
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
    }

    .floating-elements:nth-child(2) {
        left: -50px;
        animation-delay: -3s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    .contact-map {
        background: white;
        padding: 3rem;
        border-radius: 20px;
        box-shadow: var(--shadow-lg);
        margin-top: 4rem;
        text-align: center;
        animation: fadeInUp 1s ease;
    }

    .contact-map h3 {
        color: var(--primary);
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    .contact-map p {
        color: var(--text-secondary);
        margin-bottom: 2rem;
        font-size: 1.1rem;
    }

    .map-placeholder {
        width: 100%;
        height: 300px;
        background: linear-gradient(135deg, #f7fafc, #edf2f7);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px dashed var(--primary);
        position: relative;
        overflow: hidden;
    }

    .map-placeholder::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M50 10a20 20 0 0 0-20 20c0 15 20 30 20 30s20-15 20-30a20 20 0 0 0-20-20zm0 25a5 5 0 1 1 0-10 5 5 0 0 1 0 10z" fill="%23667eea" opacity="0.1"/></svg>');
        background-size: 100px 100px;
        animation: mapPattern 10s linear infinite;
    }

    @keyframes mapPattern {
        0% { background-position: 0 0; }
        100% { background-position: 100px 100px; }
    }

    .map-content {
        position: relative;
        z-index: 2;
    }

    .map-icon {
        width: 80px;
        height: 80px;
        background: var(--gradient-1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }

    .map-icon i {
        font-size: 2rem;
        color: white;
    }

    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .contact-info {
            position: static;
        }

        .contact-hero h1 {
            font-size: 2.5rem;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .contact-form,
        .contact-info {
            padding: 2rem;
        }

        .social-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }
</style>
@endsection

@section('content')
<!-- Contact Hero Section -->
<section class="contact-hero">
    <div class="container">
        <h1><i class="fas fa-envelope"></i> Get In Touch</h1>
        <p>Ready to start a conversation? I'm here to help bring your ideas to life. Let's create something amazing together!</p>
    </div>

    <div class="floating-elements">
        <i class="fas fa-paper-plane"></i>
    </div>
    <div class="floating-elements">
        <i class="fas fa-comments"></i>
    </div>
</section>

<!-- Contact Content -->
<section class="contact-content">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info animate-on-scroll">
                <h2>Let's Connect</h2>
                <p>
                    I'm always excited to collaborate on new projects, discuss opportunities, or simply have a conversation about technology and development. Feel free to reach out through any of the channels below.
                </p>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Email</h4>
                        <p><a href="mailto:tanjid.shafin@example.com">tanjid.shafin@example.com</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Phone</h4>
                        <p><a href="tel:+8801XXXXXXXXX">+880 1X XXX XXXXX</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Location</h4>
                        <p>Dhaka, Bangladesh</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Response Time</h4>
                        <p>Usually within 24 hours</p>
                    </div>
                </div>

                <div class="social-links">
                    <h4>Follow Me</h4>
                    <div class="social-grid">
                        <a href="#" class="social-link" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" title="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-link" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form animate-on-scroll">
                <h2>Send Message</h2>

                <form id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Tell me about your project or just say hello..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>

                    <div class="form-status" id="formStatus"></div>
                </form>
            </div>
        </div>

        <!-- Location Map -->
        <div class="contact-map animate-on-scroll">
            <h3>Find Me Here</h3>
            <p>Based in Dhaka, Bangladesh - Available for remote work worldwide</p>

            <div class="map-placeholder">
                <div class="map-content">
                    <div class="map-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h4 style="color: var(--primary); margin: 0;">Dhaka, Bangladesh</h4>
                    <p style="color: var(--text-secondary); margin: 0.5rem 0 0 0;">Ready to work remotely or meet locally</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const formStatus = document.getElementById('formStatus');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(contactForm);
            const firstName = formData.get('firstName');
            const lastName = formData.get('lastName');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');

            // Basic validation
            if (!firstName || !lastName || !email || !subject || !message) {
                showFormStatus('Please fill in all required fields.', 'error');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showFormStatus('Please enter a valid email address.', 'error');
                return;
            }

            // Simulate form submission
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            // Simulate API call delay
            setTimeout(function() {
                showFormStatus('Thank you for your message! I\'ll get back to you within 24 hours.', 'success');
                contactForm.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        function showFormStatus(message, type) {
            formStatus.textContent = message;
            formStatus.className = `form-status ${type}`;
            formStatus.style.display = 'block';

            // Hide after 5 seconds
            setTimeout(function() {
                formStatus.style.display = 'none';
            }, 5000);
        }

        // Add floating animation to form inputs
        const inputs = contactForm.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });
    });
</script>
@endsection
