const menuButton = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');
const sectionLinks = [...document.querySelectorAll('.file-nav a[href^="#"]')];

function setMenuOpen(open) {
  sidebar.classList.toggle('open', open);
  menuButton.setAttribute('aria-expanded', String(open));
  menuButton.setAttribute('aria-label', open ? 'Tutup navigasi' : 'Buka navigasi');
}

menuButton.addEventListener('click', () => setMenuOpen(!sidebar.classList.contains('open')));
sectionLinks.forEach(link => link.addEventListener('click', () => setMenuOpen(false)));
document.addEventListener('keydown', event => {
  if (event.key === 'Escape') setMenuOpen(false);
});
document.addEventListener('click', event => {
  if (sidebar.classList.contains('open') && !sidebar.contains(event.target) && !menuButton.contains(event.target)) setMenuOpen(false);
});

const sections = sectionLinks.map(link => document.querySelector(link.getAttribute('href'))).filter(Boolean);
const observer = new IntersectionObserver(entries => {
  const visible = entries.filter(entry => entry.isIntersecting).sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
  if (!visible) return;
  sectionLinks.forEach(link => link.classList.toggle('active', link.getAttribute('href') === `#${visible.target.id}`));
}, {rootMargin: '-20% 0px -55% 0px', threshold: [0, .1, .5]});
sections.forEach(section => observer.observe(section));

document.getElementById('year').textContent = new Date().getFullYear();
