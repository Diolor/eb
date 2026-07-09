/* Emmauswald bleibt! – site scripts */

// ---------- Language toggle ----------
const root = document.documentElement;
root.classList.add('js');

function setLang(lang) {
  root.setAttribute('data-lang', lang);
  root.setAttribute('lang', lang);
  try { localStorage.setItem('emmauswald-lang', lang); } catch (e) {}
  document.querySelectorAll('.lang-switch button').forEach((btn) => {
    btn.classList.toggle('active', btn.dataset.setLang === lang);
  });
}

document.querySelectorAll('.lang-switch button').forEach((btn) => {
  btn.addEventListener('click', () => setLang(btn.dataset.setLang));
});

(function initLang() {
  let saved = null;
  try { saved = localStorage.getItem('emmauswald-lang'); } catch (e) {}
  if (!saved || !['de', 'en', 'tr'].includes(saved)) {
    const nav = (navigator.language || 'de').toLowerCase();
    saved = nav.startsWith('de') ? 'de' : nav.startsWith('tr') ? 'tr' : 'en';
  }
  setLang(saved);
})();

// ---------- Sticky header + hero parallax ----------
const header = document.querySelector('.site-header');
const heroBg = document.querySelector('.hero-bg');
const toTop = document.querySelector('.to-top');
const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
let parallaxTicking = false;

function applyParallax() {
  parallaxTicking = false;
  const y = window.scrollY;
  if (y <= window.innerHeight * 1.2) {
    heroBg.style.transform = `translate3d(0, ${(y * 0.28).toFixed(1)}px, 0)`;
  }
}

const onScroll = () => {
  header.classList.toggle('scrolled', window.scrollY > 40);
  if (toTop) toTop.classList.toggle('visible', window.scrollY > 700);
  if (heroBg && !reducedMotion && !parallaxTicking) {
    parallaxTicking = true;
    requestAnimationFrame(applyParallax);
  }
};
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();

// ---------- Mobile nav ----------
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');
if (navToggle) {
  navToggle.addEventListener('click', () => {
    const open = navLinks.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', String(open));
    header.classList.toggle('menu-open', open);
  });
  navLinks.querySelectorAll('a').forEach((a) => {
    a.addEventListener('click', () => {
      navLinks.classList.remove('open');
      navToggle.setAttribute('aria-expanded', 'false');
      header.classList.remove('menu-open');
    });
  });
}

// ---------- Reveal on scroll ----------
const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.12 }
);
document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el));

// ---------- Gallery lightbox ----------
const lightbox = document.getElementById('lightbox');
if (lightbox) {
  const lbImg = lightbox.querySelector('img');
  const galleryLinks = Array.from(document.querySelectorAll('.gallery a'));
  let current = 0;

  function openLightbox(index) {
    current = (index + galleryLinks.length) % galleryLinks.length;
    lbImg.src = galleryLinks[current].href;
    lbImg.alt = galleryLinks[current].querySelector('img')?.alt || '';
    lightbox.classList.add('open');
    lightbox.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
  function closeLightbox() {
    lightbox.classList.remove('open');
    lightbox.setAttribute('aria-hidden', 'true');
    lbImg.src = '';
    document.body.style.overflow = '';
  }

  galleryLinks.forEach((link, i) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      openLightbox(i);
    });
  });

  lightbox.querySelector('.lb-close').addEventListener('click', closeLightbox);
  lightbox.querySelector('.lb-prev').addEventListener('click', () => openLightbox(current - 1));
  lightbox.querySelector('.lb-next').addEventListener('click', () => openLightbox(current + 1));
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('open')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') openLightbox(current - 1);
    if (e.key === 'ArrowRight') openLightbox(current + 1);
  });
}

// ---------- Expandable lists (older news / earlier events) ----------
document.querySelectorAll('[data-expand]').forEach((btn) => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.expand);
    if (target) target.hidden = false;
    btn.remove();
  });
});

// ---------- Footer year ----------
const yearEl = document.getElementById('year');
if (yearEl) yearEl.textContent = new Date().getFullYear();
