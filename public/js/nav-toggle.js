document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('.nav-link-item');
  
    links.forEach(link => {
      const originalText = link.dataset.label;
  
      link.addEventListener('click', function (e) {
        // Jika href="#" → mencegah reload & ganti jadi titik
        if (this.getAttribute('href') === "#") {
          e.preventDefault();
  
          // Reset semua link ke teks asal
          links.forEach(l => {
            l.textContent = l.dataset.label;
          });
  
          // Jadikan titik
          this.textContent = '•';
        } else {
          // Link asli? Reset semua sebelum pindah halaman
          links.forEach(l => {
            l.textContent = l.dataset.label;
          });
        }
      });
    });
  });