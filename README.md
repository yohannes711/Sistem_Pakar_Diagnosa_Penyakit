## Sistem Pakar Mendeteksi Penyakit Ringan - Berbasis Web (PHP & Prolog Logic)

Aplikasi Sistem Pakar (Expert System) ini dikembangkan untuk membantu masyarakat atau pasien dalam mengenali gejala penyakit ringan (seperti pusing, batuk, pilek, diare, maag, dll) secara mandiri menggunakan bantuan Kecerdasan Buatan (Artificial Intelligence). Aplikasi ini merekomendasikan obat-obatan bebas yang tidak memerlukan resep dokter berdasarkan hasil analisis gejala.

Proyek ini menggunakan dua pendekatan metode penalaran inferensi, yaitu:
1. **Forward Chaining:** Pengguna memilih semua ciri-ciri gejala yang dirasakan terlebih dahulu, kemudian sistem menyimpulkan penyakitnya.
2. **Backward Chaining:** Pengguna memilih dugaan awal penyakit (hipotesis), lalu sistem membuktikannya lewat serangkaian pertanyaan gejala yang spesifik.

---

## 🛠️ Teknologi yang Digunakan
* **HTML5 & CSS3** (Layouting Grid & Flexbox Modern, Responsif)
* **PHP** (Server-side scripting & Engine Alur Logika Konjunktif)
* **Prolog Logic Concept** (Aturan dasar / Rules KB menggunakan basis data inferensi Prolog) 

---

## 📋 Daftar 8 Penyakit & Aturan (*Rules*)
Sistem pakar ini mendeteksi 8 jenis penyakit berdasarkan aturan konjungsi logika (AND) dari Pakar Apoteker:

* **Migrain:** Nyeri dada AND Sensitivitas cahaya AND Sensitivitas suara AND Sensitivitas bau AND Mual AND Pusing.
* **Diabetes:** Produksi urin berlebih AND Rasa haus berlebih AND Nafsu makan meningkat AND Lemas AND Penglihatan kabur AND Infeksi kulit AND Luka sulit sembuh.
* **Kolesterol:** Bercak kuning kelopak mata AND Nyeri dada AND Sesak nafas AND Lemas AND Kelumpuhan/kaku otot.
* **Maag:** Sensasi terbakar di dada AND Regurgitasi asam AND Nyeri dada AND Kesulitan menelan AND Batuk AND Mual AND Kembung AND Susah tidur.
* **Diare:** Tinja encer AND Frekuensi BAB meningkat AND Kram perut AND Mual AND Dehidrasi AND Lemas.
* **Influenza:** Demam AND Batuk AND Hidung tersumbat AND Sakit kepala AND Nyeri otot/sendi AND Lemas AND Mual.
* **Demam:** Suhu tubuh tinggi AND Menggigil AND Sakit kepala AND Nyeri otot/sendi AND Kehilangan nafsu makan AND Lemas AND Jantung berdebar AND Berkeringat AND Suhu kulit panas.
* **Asma:** Sesak nafas AND Dada terasa terikat AND Batuk AND Mengi AND Lemas AND Rasa gelisah AND Sering menghela nafas.

---

## 💻 Cara Menjalankan Proyek di Lokal (Localhost)

### 1. Prasyarat
* Pastikan Anda sudah menginstal **XAMPP** atau web server lokal sejenis yang mendukung PHP (versi 7.4 atau versi 8.x).

### 2. Langkah Instalasi
1. Unduh (*Download*) atau klon repositori ini ke komputer Anda:
   ```bash
   git clone [https://github.com/USERNAME_KAMU/NAMA_REPOSITORI.git](https://github.com/USERNAME_KAMU/NAMA_REPOSITORI.git)
2. Pindahkan folder proyek ke dalam direktori server lokal Anda:

Jika menggunakan XAMPP: pindahkan ke C:\xampp\htdocs\

3. Pastikan struktur folder di dalam htdocs/ berupa:

Plaintext
nomer_folder_proyek/
├── index.php
├── deteksi.php
├── backward_pilih.php
├── backward_proses.php
├── informasi.php
└── style.css

4. Jalankan aplikasi XAMPP Control Panel dan aktifkan modul Apache.

5. Buka peramban (browser) Anda dan akses tautan berikut:

Plaintext
http://localhost/nama_folder_proyek/index.php

# Preview 
<img width="1336" height="561" alt="image" src="https://github.com/user-attachments/assets/e8575d32-16a1-4287-b592-82499ce5eb9f" />

<img width="1182" height="527" alt="image" src="https://github.com/user-attachments/assets/8a9c4095-1fd3-4951-847a-b99c803cacc1" />

<img width="1160" height="583" alt="image" src="https://github.com/user-attachments/assets/676ebdbc-19ac-43e9-b371-57a74d2985a3" />
