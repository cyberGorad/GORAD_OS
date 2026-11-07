const menuToggle = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');
menuToggle?.addEventListener('click', () => sidebar.classList.toggle('open'));
document.querySelectorAll('.side-nav a').forEach(link => link.addEventListener('click', () => sidebar.classList.remove('open')));

// Small local telemetry animation for the dashboard feeling.
const activityBars = document.querySelectorAll('.bars i');
setInterval(() => activityBars.forEach((bar, index) => {
  bar.style.height = `${6 + Math.round(Math.random() * 13)}px`;
  bar.style.opacity = index % 3 === 0 ? '.95' : '.65';
}), 1800);

const cards = document.querySelectorAll('.module-card');
const observer = new IntersectionObserver(entries => entries.forEach(entry => {
  if (entry.isIntersecting) entry.target.style.opacity = '1';
}), { threshold: .1 });
cards.forEach(card => { card.style.opacity = '0'; card.style.transition = 'opacity .6s ease, transform .25s, border-color .25s'; observer.observe(card); });

// Keep the navigation aligned with the section currently visible.
const navLinks = [...document.querySelectorAll('.side-nav a')];
const sections = [...document.querySelectorAll('#top, #modules, #architecture, #journal')];
const sectionObserver = new IntersectionObserver(entries => entries.forEach(entry => {
  if (!entry.isIntersecting) return;
  const id = entry.target.id;
  navLinks.forEach(link => link.classList.toggle('active', link.getAttribute('href') === `#${id}` || (id === 'modules' && link.getAttribute('href') === '#modules')));
}), { rootMargin: '-35% 0px -55% 0px', threshold: 0 });
sections.forEach(section => sectionObserver.observe(section));
