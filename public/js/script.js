// document.querySelectorAll('.nav-link-item').forEach(link => {
//   const originalText = link.dataset.label;
//   link.addEventListener('click', function(e) {
//     e.preventDefault();
//     this.textContent = (this.textContent === '•') ? originalText : '•';
//   });
// });

const links = document.querySelectorAll('.nav-link-item');
const currentPath = window.location.pathname;

// Fungsi: reset semua link ke label aslinya
function resetLinks() {
  links.forEach(link => {
    link.textContent = link.dataset.label;
  });
}

// Jalankan saat DOM siap
document.addEventListener('DOMContentLoaded', () => {
  let foundMatch = false;

  links.forEach(link => {
    const href = link.getAttribute('href');

    // Event klik untuk link "#" saja
    if (href === '#') {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        resetLinks();
        this.textContent = '•';
      });
    }

    // Cek jika href cocok dengan path sekarang
    if (href === currentPath) {
      foundMatch = true;
      resetLinks();
      link.textContent = '•';
    }
  });

  // Jika tidak cocok satupun (misal home di '/'), bisa set default jika mau
  if (!foundMatch && currentPath === '/') {
    const homeLink = document.querySelector('.nav-link-item[href="/baru"]');
    if (homeLink) {
      resetLinks();
      homeLink.textContent = '•';
    }
  }
});

