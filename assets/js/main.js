// Mobile Navigation
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
});

// Smooth Scrolling for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            // Close mobile menu if open
            if (window.innerWidth <= 768) {
                navLinks.style.display = 'none';
            }
        }
    });
});

// Scroll to Top Button
const scrollButton = document.createElement('button');
scrollButton.innerHTML = '↑';
scrollButton.className = 'scroll-top';
document.body.appendChild(scrollButton);

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollButton.style.display = 'block';
    } else {
        scrollButton.style.display = 'none';
    }
});

scrollButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Add scroll-top button styles
const style = document.createElement('style');
style.textContent = `
    .scroll-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: none;
        font-size: 20px;
        z-index: 1000;
        transition: background-color 0.3s ease;
    }
    
    .scroll-top:hover {
        background-color: var(--secondary-color);
    }
`;
document.head.appendChild(style);

// Form Validation
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(response => {
            if (response.status === 'success') {
                showContactSuccess(response.message);
                contactForm.reset(); // Optionally reset the form
            } else {
                alert(response.message || 'There was an error. Please try again.');
            }
        })
        .catch(() => {
            alert('There was an error sending your message. Please try again.');
        });
    });
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Add animation on scroll
const animateOnScroll = () => {
    const elements = document.querySelectorAll('.skill-card, .project-card');
    
    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementBottom = element.getBoundingClientRect().bottom;
        
        if (elementTop < window.innerHeight && elementBottom > 0) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
};

// Add initial styles for animation
const animationStyle = document.createElement('style');
animationStyle.textContent = `
    .skill-card, .project-card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
`;
document.head.appendChild(animationStyle);

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// Skills Slider
document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.skills-track');
    const cards = document.querySelectorAll('.skill-card');
    
    if (!track || !cards.length) return; // Guard clause
    
    // Clone cards for infinite effect
    const clonedCards = Array.from(cards).map(card => card.cloneNode(true));
    clonedCards.forEach(card => track.appendChild(card));
    
    // Animate skill progress bars when they come into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progressBar = entry.target.querySelector('.skill-progress');
                if (progressBar) {
                    const level = progressBar.getAttribute('data-level');
                    progressBar.style.width = level + '%';
                }
            }
        });
    }, { threshold: 0.5 });
    
    // Observe all cards (original and cloned)
    document.querySelectorAll('.skill-card').forEach(card => observer.observe(card));
    
    // Pause animation on hover
    track.addEventListener('mouseenter', () => {
        track.style.animationPlayState = 'paused';
    });
    
    track.addEventListener('mouseleave', () => {
        track.style.animationPlayState = 'running';
    });
    
    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            // Reset animation
            track.style.animation = 'none';
            track.offsetHeight; // Trigger reflow
            track.style.animation = 'slideTrack 20s linear infinite';
        }, 250);
    });
});

// Projects Slider
document.addEventListener('DOMContentLoaded', function() {
    const projectsTrack = document.querySelector('.projects-track');
    const projectCards = document.querySelectorAll('.project-card');
    
    if (!projectsTrack || !projectCards.length) return; // Guard clause
    
    // Clone cards for infinite effect
    const clonedCards = Array.from(projectCards).map(card => card.cloneNode(true));
    clonedCards.forEach(card => projectsTrack.appendChild(card));
    
    // Pause animation on hover
    projectsTrack.addEventListener('mouseenter', () => {
        projectsTrack.style.animationPlayState = 'paused';
    });
    
    projectsTrack.addEventListener('mouseleave', () => {
        projectsTrack.style.animationPlayState = 'running';
    });
    
    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            // Reset animation
            projectsTrack.style.animation = 'none';
            projectsTrack.offsetHeight; // Trigger reflow
            projectsTrack.style.animation = 'slideProjects 30s linear infinite';
        }, 250);
    });
});

// Training Vertical Slider

document.addEventListener('DOMContentLoaded', function() {
    const trainingTrack = document.querySelector('.training-track');
    const trainingItems = document.querySelectorAll('.training-item');
    if (!trainingTrack || !trainingItems.length) return;

    // Clone items for infinite effect
    const clonedItems = Array.from(trainingItems).map(item => item.cloneNode(true));
    clonedItems.forEach(item => trainingTrack.appendChild(item));

    // Pause animation on hover
    trainingTrack.addEventListener('mouseenter', () => {
        trainingTrack.style.animationPlayState = 'paused';
    });
    trainingTrack.addEventListener('mouseleave', () => {
        trainingTrack.style.animationPlayState = 'running';
    });

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            trainingTrack.style.animation = 'none';
            trainingTrack.offsetHeight; // Trigger reflow
            trainingTrack.style.animation = 'slideTraining 18s linear infinite';
        }, 250);
    });
});

// Contact Form Success Toast
function showContactSuccess(message) {
    let toast = document.getElementById('contact-success-toast');
    let msgSpan = document.getElementById('contact-success-message');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'contact-success-toast';
        toast.className = 'contact-toast';
        toast.innerHTML = `
            <div class="contact-toast-content">
                <i class="fas fa-check-circle"></i>
                <span id="contact-success-message"></span>
                <button onclick="this.parentElement.parentElement.style.display='none'">&times;</button>
            </div>
        `;
        document.body.appendChild(toast);
        msgSpan = document.getElementById('contact-success-message');
    }
    msgSpan.textContent = message;
    toast.style.display = 'block';
    setTimeout(() => {
        toast.style.display = 'none';
    }, 5000);
}

// Update your AJAX contact form handler to use showContactSuccess
// Example (assuming you use fetch or XMLHttpRequest):
// if (response.status === 'success') {
//     showContactSuccess(response.message);
// } 