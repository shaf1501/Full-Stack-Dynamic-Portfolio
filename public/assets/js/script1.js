document.addEventListener('DOMContentLoaded', function() {
    // Get navigation links and sections
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');

    // Handle navigation clicks
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetSection = this.getAttribute('data-section');

            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));

            // Remove active class from all sections
            sections.forEach(s => s.classList.remove('active'));

            // Add active class to clicked link
            this.classList.add('active');

            // Show target section
            const target = document.getElementById(targetSection);
            if (target) {
                target.classList.add('active');
            }
        });
    });

    // Handle contact form submission
    const contactForm = document.querySelector('.contact-form form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form inputs
            const name = this.querySelector('input[type="text"]').value;
            const email = this.querySelector('input[type="email"]').value;
            const subject = this.querySelector('input[type="text"]:nth-of-type(2)').value;
            const message = this.querySelector('textarea').value;

            // Simple validation
            if (!name || !email || !subject || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Show success message
            alert('Thank you for your message! I will get back to you soon.');

            // Reset form
            this.reset();
        });
    }

    // Add some simple interactions to skill tags
    const skillTags = document.querySelectorAll('.skill');
    skillTags.forEach(skill => {
        skill.addEventListener('click', function() {
            this.style.backgroundColor = '#2980b9';
            setTimeout(() => {
                this.style.backgroundColor = '#3498db';
            }, 200);
        });
    });

    console.log('Portfolio loaded successfully!');
});
