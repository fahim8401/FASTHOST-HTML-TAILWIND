/**
 * FASTHOST Animation & Effects Library
 * Provides smooth animations, transitions, and interactive effects
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initSmoothScroll();
        initScrollAnimations();
        initFAQAccordion();
        initCounterAnimations();
        initParallaxEffects();
        initHoverEffects();
    });

    /**
     * Smooth scrolling for anchor links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerOffset = 80; // Account for sticky navbar
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Scroll-triggered animations using Intersection Observer
     */
    function initScrollAnimations() {
        // Add animation classes to elements
        const animateElements = document.querySelectorAll(
            '.animate-on-scroll, ' +
            'section > div > h1, ' +
            'section > div > h2, ' +
            'section > div > h3, ' +
            '.service-card, ' +
            '.pricing-card, ' +
            '.feature-card, ' +
            '.testimonial-card'
        );

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    // Add staggered delay for multiple elements
                    setTimeout(() => {
                        entry.target.classList.add('animate-fade-in-up');
                        entry.target.style.opacity = '1';
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animateElements.forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    }

    /**
     * FAQ Accordion functionality
     */
    function initFAQAccordion() {
        const faqButtons = document.querySelectorAll('#faq button[aria-expanded]');
        
        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const expanded = this.getAttribute('aria-expanded') === 'true';
                const content = this.nextElementSibling;
                const icon = this.querySelector('svg');

                // Close all other FAQs
                faqButtons.forEach(btn => {
                    if (btn !== this) {
                        btn.setAttribute('aria-expanded', 'false');
                        btn.nextElementSibling.classList.add('hidden');
                        btn.querySelector('svg').style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle current FAQ
                this.setAttribute('aria-expanded', !expanded);
                content.classList.toggle('hidden');
                
                if (icon) {
                    icon.style.transform = expanded ? 'rotate(0deg)' : 'rotate(180deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });
        });
    }

    /**
     * Animated counters for statistics
     */
    function initCounterAnimations() {
        const counters = document.querySelectorAll('#it-solutions h3');
        let animated = false;

        const animateCounter = (counter) => {
            const text = counter.textContent;
            const match = text.match(/(\d+)\+?/);
            
            if (match) {
                const target = parseInt(match[1]);
                const suffix = text.replace(/\d+/, '');
                let current = 0;
                const increment = target / 50;
                const duration = 2000;
                const stepTime = duration / 50;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target + suffix;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current) + suffix;
                    }
                }, stepTime);
            }
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animated) {
                    animated = true;
                    counters.forEach((counter, index) => {
                        setTimeout(() => animateCounter(counter), index * 200);
                    });
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('#it-solutions');
        if (statsSection) {
            observer.observe(statsSection);
        }
    }

    /**
     * Parallax scrolling effects
     */
    function initParallaxEffects() {
        const parallaxElements = document.querySelectorAll('.parallax-bg, [class*="absolute"]');
        
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            
            parallaxElements.forEach(el => {
                // Only apply to decorative elements
                if (el.classList.contains('animate-pulse') || 
                    el.classList.contains('animate-spin-slow') ||
                    el.style.animationName) {
                    const speed = 0.5;
                    el.style.transform = `translateY(${scrolled * speed}px)`;
                }
            });
        });
    }

    /**
     * Enhanced hover effects
     */
    function initHoverEffects() {
        // Card hover effects
        const cards = document.querySelectorAll(
            '.bg-white.rounded-lg, ' +
            '.shadow-lg, ' +
            '[class*="hover:shadow"]'
        );

        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.3s ease';
                this.style.transform = 'translateY(-5px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Button ripple effect
        const buttons = document.querySelectorAll('button, a.bg-blue-600, a.bg-green-600, a.bg-yellow-500');
        
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple-effect');

                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);
            });
        });
    }

    /**
     * Add loading animation
     */
    function showPageTransition() {
        const loader = document.createElement('div');
        loader.className = 'page-loader';
        loader.innerHTML = '<div class="loader-spinner"></div>';
        document.body.appendChild(loader);

        window.addEventListener('load', function() {
            setTimeout(() => {
                loader.style.opacity = '0';
                setTimeout(() => loader.remove(), 300);
            }, 500);
        });
    }

    // Initialize page transition
    if (document.readyState === 'loading') {
        showPageTransition();
    }

})();

// Add custom animation keyframes via CSS
const style = document.createElement('style');
style.textContent = `
    /* Fade in up animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    /* Fade in down animation */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
    }

    /* Slide in left animation */
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slide-in-left {
        animation: slideInLeft 0.8s ease-out forwards;
    }

    /* Slide in right animation */
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slide-in-right {
        animation: slideInRight 0.8s ease-out forwards;
    }

    /* Ripple effect */
    .ripple-effect {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple 0.6s ease-out;
        pointer-events: none;
    }

    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    /* Page loader */
    .page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: opacity 0.3s ease;
    }

    .loader-spinner {
        width: 50px;
        height: 50px;
        border: 4px solid #f3f4f6;
        border-top: 4px solid #2563eb;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Slow spin for decorative elements */
    @keyframes spin-slow {
        to { transform: rotate(360deg); }
    }

    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }

    /* Ensure smooth transitions */
    * {
        scroll-behavior: smooth;
    }

    /* Enhanced card hover */
    .hover\:shadow-2xl:hover {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
`;
document.head.appendChild(style);
