import React, { useEffect } from 'react';

// Ubah nama fungsi menjadi lebih deskriptif
function NavbarObserver() {
  useEffect(() => {
    // ...semua logika IntersectionObserver Anda di sini, tidak ada yang berubah...
    const sections = ['beranda', 'tentang', 'proyek', 'kontak'];
    const navLinks = sections.map(id => document.getElementById(`nav-${id}`));

    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.4
    };

    const observerCallback = (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          navLinks.forEach(link => {
            if (link) link.classList.remove('nav-active');
          });

          const activeLink = document.getElementById(`nav-${entry.target.id}`);
          if (activeLink) {
            activeLink.classList.add('nav-active');
          }
        }
      });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    sections.forEach(id => {
      const sectionEl = document.getElementById(id);
      if (sectionEl) {
        observer.observe(sectionEl);
      }
    });

    return () => {
      sections.forEach(id => {
        const sectionEl = document.getElementById(id);
        if (sectionEl) {
          observer.unobserve(sectionEl);
        }
      });
    };
  }, []);

  return null;
}

// Jangan lupa update export default
export default NavbarObserver;