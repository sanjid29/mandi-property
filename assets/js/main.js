// Mobile nav toggle
const toggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
if (toggle && navLinks) {
  toggle.addEventListener('click', () => {
    navLinks.classList.toggle('open');
  });
  // Close on link click
  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => navLinks.classList.remove('open'));
  });
}

// Active nav highlight on scroll
const sections = document.querySelectorAll('section[id]');
const navItems = document.querySelectorAll('.nav-links a');
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      navItems.forEach(a => a.classList.remove('active'));
      const active = document.querySelector(`.nav-links a[href="#${entry.target.id}"]`);
      if (active) active.classList.add('active');
    }
  });
}, { rootMargin: '-40% 0px -55% 0px' });
sections.forEach(s => observer.observe(s));

// Sticky header shadow
const header = document.querySelector('.site-header');
window.addEventListener('scroll', () => {
  if (window.scrollY > 60) {
    header.style.boxShadow = '0 4px 32px rgba(0,0,0,0.4)';
  } else {
    header.style.boxShadow = 'none';
  }
});

// Stagger animation for cards on scroll
const animateOnScroll = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      entry.target.style.animationDelay = `${i * 0.08}s`;
      entry.target.classList.add('fade-up');
      animateOnScroll.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.service-card, .portfolio-card, .stat-card').forEach(el => {
  el.style.opacity = '0';
  animateOnScroll.observe(el);
});
