<?php

$daftar_gejala = [
    'suhu_tubuh_tinggi' => 'Suhu tubuh tinggi',
    'menggigil' => 'Merasakan menggigil',
    'sakit_kepala' => 'Sakit kepala',
    'nyeri_otot_dan_sendi' => 'Nyeri otot dan sendi',
    'kehilangan_nafsu_makan' => 'Kehilangan nafsu makan',
    'lemas' => 'Badan terasa lemas',
    'jantung_berderbar' => 'Jantung berdebar-debar',
    'berkeringat' => 'Berkeringat berlebih',
    'suhu_kulit_yang_panas' => 'Suhu kulit yang panas',
    'demam' => 'Mengalami demam biasa',
    'batuk' => 'Mengalami batuk',
    'hidung_tersumbat' => 'Hidung tersumbat',
    'mual' => 'Merasakan mual',
    'tinja_encer' => 'Tinja encer saat buang air besar',
    'frekuensi_buang_air_besar_meningkat' => 'Frekuensi buang air besar meningkat',
    'kram_perut' => 'Kram perut',
    'dehidrasi' => 'Merasakan dehidrasi',
    'sensasi_terbakar_di_dada' => 'Sensasi terbakar di dada',
    'regurgitasi_asam' => 'Regurgitasi asam (asam lambung naik)',
    'nyeri_dada' => 'Nyeri di bagian dada',
    'kesulitan_menelan' => 'Kesulitan menelan makanan',
    'kembung' => 'Perut terasa kembung',
    'susah_tidur' => 'Susah tidur',
    'bercak_kuning_di_sekitar_kelopak_mata' => 'Bercak kuning di sekitar kelopak mata',
    'sesak_nafas' => 'Merasakan sesak nafas',
    'kelumpuhan_di_lengan_bahu_leher_rahang_punggung' => 'Kelumpuhan/kaku di lengan, bahu, leher, atau rahang',
    'produksi_urin_berlebihan' => 'Produksi urin berlebihan (sering kencing)',
    'rasa_haus_berlebihan' => 'Rasa haus yang berlebihan',
    'nafsu_makan_meningkat' => 'Nafsu makan meningkat',
    'penglihatan_kabur' => 'Penglihatan kabur/buram',
    'infeksi_kulit' => 'Mengalami infeksi kulit',
    'luka_sulit_sembuh' => 'Luka yang dialami sulit sembuh',
    'sensitivitas_terhadap_cahaya' => 'Sangat sensitif terhadap cahaya',
    'sensitivitas_terhadap_suara' => 'Sangat sensitif terhadap suara bising',
    'sensitivitas_terhadap_bau' => 'Sangat sensitif terhadap bau menyengat',
    'pusing' => 'Merasakan pusing',
    'dada_terasa_terikat' => 'Dada terasa seperti terikat',
    'mengi' => 'Mengi (muncul suara siulan saat bernapas)',
    'rasa_gelisah_yang_tidak_biasa' => 'Rasa gelisah yang tidak biasa',
    'sering_menghela_nafas' => 'Sering menghela nafas panjang'
];

// Aturan 8 Penyakit utama hasil transkrip Prolog kelompok 3
$rules_penyakit = [
    'Migrain' => ['nyeri_dada', 'sensitivitas_terhadap_cahaya', 'sensitivitas_terhadap_suara', 'sensitivitas_terhadap_bau', 'mual', 'pusing'],
    'Diabetes' => ['produksi_urin_berlebihan', 'rasa_haus_berlebihan', 'nafsu_makan_meningkat', 'lemas', 'penglihatan_kabur', 'infeksi_kulit', 'luka_sulit_sembuh'],
    'Cholesterol' => ['bercak_kuning_di_sekitar_kelopak_mata', 'nyeri_dada', 'sesak_nafas', 'lemas', 'kelumpuhan_di_lengan_bahu_leher_rahang_punggung'],
    'Maag' => ['sensasi_terbakar_di_dada', 'regurgitasi_asam', 'nyeri_dada', 'kesulitan_menelan', 'batuk', 'mual', 'kembung', 'susah_tidur'],
    'Diare' => ['tinja_encer', 'frekuensi_buang_air_besar_meningkat', 'kram_perut', 'mual', 'dehidrasi', 'lemas'],
    'Influenza' => ['demam', 'batuk', 'hidung_tersumbat', 'sakit_kepala', 'nyeri_otot_dan_sendi', 'lemas', 'mual'],
    'Demam' => ['suhu_tubuh_tinggi', 'menggigil', 'sakit_kepala', 'nyeri_otot_dan_sendi', 'kehilangan_nafsu_makan', 'lemas', 'jantung_berderbar', 'berkeringat', 'suhu_kulit_yang_panas'],
    'Asma' => ['sesak_nafas', 'dada_terasa_terikat', 'batuk', 'mengi', 'lemas', 'rasa_gelisah_yang_tidak_biasa', 'sering_menghela_nafas']
];

$solusi_obat = [
    'Migrain' => 'Bodrex Migra / Paramex',
    'Diabetes' => 'Konsultasikan ke Dokter Spesialis untuk terapi Insulin/Metformin.',
    'Cholesterol' => 'Konsultasikan ke Dokter (Diperlukan cek lab lipid darah).',
    'Maag' => 'Antasida Doen / Mylanta Cair',
    'Diare' => 'Oralit (mencegah dehidrasi) dan Diapet',
    'Influenza' => 'Procold / Decolgen / Parasetamol',
    'Demam' => 'Sanmol Tablet / Paracetamol Generik',
    'Asma' => 'Symbicort Turbuhaler atau Ventolin Inhaler'
];

$hasil_diagnosa = [];
$form_dikirim = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_dikirim = true;
    $gejala_user = $_POST['gejala'] ?? [];

    // Mesin Inferensi
    foreach ($rules_penyakit as $penyakit => $syarat) {
        $irisan = array_intersect($syarat, $gejala_user);
        
        // Menggunakan penalaran logika AND penuh dari Prolog
        if (count($irisan) === count($syarat)) {
            $hasil_diagnosa[] = $penyakit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deteksi Diagnosa Penyakit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <div class="header-back">
            <a href="index.php" class="btn-back">⬅ Kembali ke Menu</a>
            <h2>Mesin Deteksi Gejala Penyakit</h2>
        </div>

        <?php if (!$form_dikirim): ?>
            <p class="instruksi">Silakan beri tanda centang (✓) pada ciri-ciri fisik atau keluhan yang sedang Anda alami sekarang:</p>
            
            <form action="" method="POST">
                <div class="grid-checkbox">
                    <?php foreach ($daftar_gejala as $key => $label): ?>
                        <label class="card-checkbox">
                            <input type="checkbox" name="gejala[]" value="<?php echo $key; ?>">
                            <span class="custom-box"></span>
                            <span class="text-label"><?php echo $label; ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
                <button type="submit" class="btn-submit-pakar">Mulai Jalankan Diagnosa AI</button>
            </form>

        <?php else: ?>
            <div class="result-container">
                <h2>Hasil Analisis Keputusan Sistem Pakar:</h2>
                <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">

                <?php if (!empty($hasil_diagnosa)): ?>
                    <?php foreach ($hasil_diagnosa as $p): ?>
                        <div class="box-penyakit positif">
                            <h3>⚠️ Terdeteksi Akurat: <strong><?php echo $p; ?></strong></h3>
                            <p class="obat-info"><strong>Rekomendasi Penanganan Mandiri:</strong> <?php echo $solusi_obat[$p];?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="box-penyakit ragu">
                    <h3>ℹ️ Hasil: Tidak Ada Penyakit Spesifik yang Terdeteksi Penuh.</h3>
                    <p>Kombinasi gejala Anda tidak memenuhi basis aturan ketat 8 penyakit kami.Sistem menyarankan Anda untuk <strong>Istirahat yang cukup, makan teratur, dan minum air hangat</strong>. Jika keluhan berlanjut dalam 3 hari, segera hubungi fasilitas medis.</p>
                    </div>
                <?php endif; ?>

                <a href="deteksi.php" class="btn-ulang">Periksa Gejala Lain</a>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>