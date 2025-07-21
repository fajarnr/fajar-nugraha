@extends('layouts.main')

@section('container')

<div class="container-fluid px-0">
  <div class="row gx-0 div-row"> <!-- gx-0: gap horizontal 0 -->
    <div class="col-8 text-black p-5 full-height d-flex flex-column">
      <!-- Bagian atas -->
      <div class="flex-fill d-flex align-items-center justify-content-center">
  
      </div>
      <!-- Bagian bawah -->
      <div class="flex-fill d-flex align-items-end justify-content-start custom-text">
        Data Analyst
      </div>
    </div>
    <div class="col-4 text-black p-5 full-height d-flex align-items-center custom-text-dua">
      Analisis dan visualisasi data, pengembangan web front-end, Python, Tableau, Microsoft Office, HTML, CSS, JavaScript, dengan kemampuan komunikasi dan kolaborasi tim.
    </div>
  </div>
</div>

<div class="container-fluid px-0 custom-container">
  <div class="row gx-0 div-row h-100"> <!-- h-100 agar penuh tinggi custom-container -->
    
    <!-- Kolom kiri -->
    <div class="col-4 text-black p-2 align-items-center">
    </div>

    <!-- Kolom kanan -->
    <div class="col text-black p-5 d-flex align-items-center justify-content-center custom-text-tiga">
      <div>
        <p class="mb-2">
          Saya adalah seorang <em>Data Scientist</em> dengan ketertarikan kuat pada <em>data, riset, dan teknologi</em>. Berpengalaman dalam <em>analisis data statistik</em>, <em>data mining</em>, dan <em>pengembangan solusi berbasis data</em>.
        </p>
        <p class="mb-2">
          🔍 Mampu mengolah data dari awal hingga akhir: mulai dari pengumpulan, pembersihan, visualisasi, hingga interpretasi hasil. Terbiasa menggunakan <em>Python (pandas, NumPy, Matplotlib, scikit-learn)</em>, <em>Tableau</em>, dan <em>Microsoft Office</em>.
        </p>
        <p class="mb-2">
          🌐 Saat ini memperluas kompetensi sebagai <em>Web Developer</em>, fokus pada integrasi data dan visualisasi interaktif berbasis web.
        </p>
        <p class="mb-0">
          📌 Terbuka untuk kolaborasi di bidang <em>data analysis</em>, <em>pengembangan aplikasi data-driven</em>, atau <em>riset berbasis teknologi web</em>.
        </p>
      </div>
    </div>

  </div>
</div>



<div class="container-fluid px-0 py-5">
  <div class="row gx-0 gy-5 warna">
    
    <!-- Baris pertama: Judul / Teks utama -->
    <div class="col-12 text-black p-5 d-flex align-items-center custom-text-empat">
      {{-- I can help you with… --}}
    </div>

    <!-- Baris kedua: Tiga kolom isi -->
    <div class="col-12 text-black px-5 pb-5">
      <div class="row g-4 text-center px-5">
        <div class="col-md-4 border-start border-1 border-dark">
          <div class="p-4 h-100">
            
            <div class="my-card">
              <div class="my-card-title">Data Analyst</div>
              <div class="my-card-text">
                Elevate your brand with custom web designs that captivate your audience and deliver the perfect user experience.
              </div>
              <div class="mt-4 text-start">
                <button class="btn fixed-btn">Go somewhere</button>
              </div>
            </div>

          </div>
        </div>
    
        <!-- Kolom 2 dengan garis di kanan -->
        <div class="col-md-4 border-start border-1 border-dark">
          <div class="p-4 h-100">

            <div class="my-card">
              <div class="my-card-title">Developer</div>
              <div class="my-card-text">
                I craft tailor-made websites that flawlessly blend with your design, from start to finish.
              </div>
              <div class="mt-4 text-start">
                <button class="btn fixed-btn">Go somewhere</button>
              </div>
            </div>

          </div>
        </div>
    
        <!-- Kolom 3 tanpa garis -->
        <div class="col-md-4 border-start border-1 border-dark">
          <div class="p-4 h-100">
            
            <div class="my-card">
              <div class="my-card-title">UI/UX</div>
              <div class="my-card-text">
                Unleash the full potential of your website with a winning combination of brand identity and functional features.
              </div>
              <div class="mt-4 text-start">
                <button class="btn fixed-btn">Go somewhere</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container-fluid px-0 py-5">
  <div class="row gx-0 gy-0 warna">
    
    <!-- Baris pertama: Judul / Teks utama -->
    <div class="col-12 text-black p-5 d-flex align-items-center custom-text-empat">
      Recent Projects
    </div>

    <div class="col-12 text-black d-flex px-5 align-items-center">
      These are recent samples of the rad projects I’ve been working on.
    </div>

    <!-- Baris kedua: Tiga kolom isi -->
    <div class="col-12 text-black px-3 pb-5 py-3">
      <div class="row g-4 text-center">
        <table class="table table-hover text-center" id="myTable">
          <thead class="table-dark">
            <!-- Kosongkan jika tidak pakai header -->
          </thead>
          <tbody>
            <tr onclick="animateRow(this)" data-image="https://picsum.photos/500/300?">
              <td>Website Portofolio</td>
              <td>
                <span class="badge bg-secondary">Web</span>
                <span class="badge bg-secondary">Design</span>
                <span class="badge bg-secondary">Developer</span>
              </td>
              <td style="font-size: 35px;">
                <i class="bi bi-arrow-right-circle"></i>
              </td>
            </tr>
            <tr onclick="animateRow(this)" data-image="https://picsum.photos/800/300?">
              <td>This Is An Awesomely Long Project Title</td>
              <td>
                <span class="badge bg-secondary">Web</span>
                <span class="badge bg-secondary">Design</span>
                <span class="badge bg-secondary">Developer</span>
              </td>
              <td style="font-size: 35px;">
                <i class="bi bi-arrow-right-circle"></i>
              </td>
            </tr>
            <tr onclick="animateRow(this)" data-image="https://picsum.photos/100/300?">
              <td>Desain UI Mobile</td>
              <td>
                <span class="badge bg-secondary">Web</span>
                <span class="badge bg-secondary">Design</span>
                <span class="badge bg-secondary">Developer</span>
              </td>
              <td style="font-size: 35px;">
                <i class="bi bi-arrow-right-circle"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>


<div class="container-fluid px-0 py-5">
  <div class="row gx-0 gy-0 warna">
    
    <!-- Baris pertama: Judul / Teks utama -->
    <div class="col-12 text-black p-5 d-flex align-items-center custom-text-empat">
      Latest Articles
    </div>

    <div class="col-4 text-black p-2 align-items-center">
      <!-- Kosong -->
    </div>

    <!-- Kolom kanan -->
    <div class="col text-black p-5 d-flex flex-column justify-content-between custom-text-tiga">
      <div>
        Have a project in mind? Or you want to say hello, get in touch with me.
      </div>
      <div class="mt-4 text-start">
        <button class="btn fixed-btn">Hubungi Saya</button>
      </div>
    </div>

  </div>
</div>

<!-- Gambar -->
<img id="hoverImage" src="" alt="Gambar" style="display: none; position: absolute;" />

<script>
  const table = document.getElementById("myTable");
  const image = document.getElementById("hoverImage");

  table.addEventListener("mouseover", function (e) {
    const row = e.target.closest("tr");
    if (row && row.dataset.image) {
      image.src = row.dataset.image;
      image.style.display = "block";
    }
  });

  table.addEventListener("mousemove", function (e) {
    image.style.top = e.pageY + 10 + "px";
    image.style.left = e.pageX + 10 + "px";
  });

  table.addEventListener("mouseout", function (e) {
    if (e.target.closest("tr")) {
      image.style.display = "none";
    }
  });
</script>


    
@endsection