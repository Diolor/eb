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
  if (!saved) {
    saved = (navigator.language || 'de').toLowerCase().startsWith('de') ? 'de' : 'en';
  }
  setLang(saved);
})();

// ---------- Sticky header ----------
const header = document.querySelector('.site-header');
const onScroll = () => {
  header.classList.toggle('scrolled', window.scrollY > 40);
  document.querySelector('.to-top').classList.toggle('visible', window.scrollY > 700);
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
  });
  navLinks.querySelectorAll('a').forEach((a) => {
    a.addEventListener('click', () => {
      navLinks.classList.remove('open');
      navToggle.setAttribute('aria-expanded', 'false');
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

// ---------- Footer year ----------
const yearEl = document.getElementById('year');
if (yearEl) yearEl.textContent = new Date().getFullYear();
