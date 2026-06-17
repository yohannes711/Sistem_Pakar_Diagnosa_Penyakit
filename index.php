<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Center - Sistem Pakar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="hero-section">
        <div class="hero-content">
            <h1>MEDICAL CENTER AI</h1>
            <p>Sistem Pakar berbasis Kecerdasan Buatan menggunakan Metode Forward Chaining dan Backward Chaining.</p>
        </div>
    </header>

    <main class="container">
        <h2 class="section-title">Pilih Metode Deteksi Sistem Pakar</h2>
        
        <div class="menu-grid">
            <a href="deteksi.php" class="menu-card primary-menu">
                <div class="menu-icon">🔍</div>
                <h3>Metode Forward Chaining</h3>
                <p>Isi semua ciri-ciri gejala yang Anda rasakan terlebih dahulu, lalu sistem AI akan menyimpulkan penyakit Anda.</p>
                <span class="btn-link" >Mulai Deteksi</span>
            </a>

            <a href="backward_pilih.php" class="menu-card primary-menu">
                <div class="menu-icon">🔄</div>
                <h3>Metode Backward Chaining</h3>
                <p>Pilih target dugaan penyakit Anda terlebih dahulu, sistem akan menguji kebenarannya lewat ciri-ciri spesifik.</p>
                <span class="btn-link">Mulai Pembuktian</span>
            </a>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 - Kelompok 3 Teknik Rekayasa Perangkat Lunak</p>
    </footer>
</body>
</html>