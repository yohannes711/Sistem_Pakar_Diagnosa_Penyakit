<?php
// Basis Pengetahuan Gejala Dominan vs Biasa dari Laporan Kelompok 3
$database_backward = [
    'demam' => [
        'dominan' => ['suhu_tubuh_tinggi' => 'Apakah Anda merasakan suhu tubuh tinggi?', 'menggigil' => 'Apakah Anda merasakan menggigil?', 'suhu_kulit_yang_panas' => 'Apakah suhu kulit Anda terasa panas?'],
        'biasa' => ['sakit_kepala' => 'Apakah Anda merasakan sakit kepala?', 'nyeri_otot_dan_sendi' => 'Apakah merasakan nyeri otot dan sendi?', 'kehilangan_nafsu_makan' => 'Apakah kehilangan nafsu makan?', 'lemas' => 'Apakah merasakan lemas?', 'jantung_berderbar' => 'Apakah jantung Anda berdebar?', 'berkeringat' => 'Apakah Anda berkeringat?']
    ],
    'asma' => [
        'dominan' => ['sesak_nafas' => 'Apakah Anda merasakan sesak nafas?', 'dada_terasa_terikat' => 'Apakah dada Anda terasa terikat?', 'mengi' => 'Apakah merasakan mengi (muncul suara siulan saat bernapas)?', 'sering_menghela_nafas' => 'Apakah Anda sering menghela nafas?'],
        'biasa' => ['batuk' => 'Apakah Anda merasakan batuk?', 'lemas' => 'Apakah merasakan lemas?', 'rasa_gelisah_yang_tidak_biasa' => 'Apakah merasakan rasa gelisah yang tidak biasa?']
    ],
    'influenza' => [
        'dominan' => ['demam' => 'Apakah Anda mengalami demam?', 'hidung_tersumbat' => 'Apakah mengalami hidung tersumbat?', 'lemas' => 'Apakah tubuh Anda lemas?'],
        'biasa' => ['batuk' => 'Apakah Anda mengalami batuk?', 'sakit_kepala' => 'Apakah merasakan sakit kepala?', 'nyeri_otot_dan_sendi' => 'Apakah merasakan nyeri otot dan sendi?', 'mual' => 'Apakah merasakan mual?']
    ],
    'diare' => [
        'dominan' => ['tinja_encer' => 'Apakah tinja Anda encer?', 'frekuensi_buang_air_besar_meningkat' => 'Apakah frekuensi buang air besar meningkat?'],
        'biasa' => ['kram_perut' => 'Apakah merasakan kram perut?', 'mual' => 'Apakah merasakan mual?', 'dehidrasi' => 'Apakah mengalami dehidrasi?', 'lemas' => 'Apakah tubuh terasa lemas?']
    ],
    'maag' => [
        'dominan' => ['regurgitasi_asam' => 'Apakah mengalami regurgitasi asam?', 'kembung' => 'Apakah perut terasa kembung?', 'susah_tidur' => 'Apakah Anda susah tidur?'],
        'biasa' => ['sensasi_terbakar_di_dada' => 'Apakah merasakan sensasi terbakar di dada?', 'nyeri_dada' => 'Apakah merasakan nyeri dada?', 'kesulitan_menelan' => 'Apakah mengalami kesulitan menelan?', 'batuk' => 'Apakah Anda batuk?', 'mual' => 'Apakah merasakan mual?']
    ],
    'kolestrol' => [
        'dominan' => ['kelumpuhan_di_lengan_bahu_leher_rahang_punggung' => 'Apakah merasakan kelumpuhan/kaku di lengan, bahu, leher, rahang, atau punggung?'],
        'biasa' => ['bercak_kuning_di_sekitar_kelopak_mata' => 'Apakah ada bercak kuning di sekitar kelopak mata?', 'nyeri_dada' => 'Apakah merasakan nyeri dada?', 'sesak_nafas' => 'Apakah Anda sesak nafas?', 'lemas' => 'Apakah badan terasa lemas?']
    ],
    'diabetes' => [
        'dominan' => ['produksi_urin_berlebihan' => 'Apakah produksi urin berlebihan?', 'rasa_haus_berlebihan' => 'Apakah rasa haus berlebihan?', 'luka_sulit_sembuh' => 'Apakah luka Anda sulit sembuh?'],
        'biasa' => ['nafsu_makan_meningkat' => 'Apakah nafsu makan meningkat?', 'lemas' => 'Apakah badan terasa lemas?', 'penglihatan_kabur' => 'Apakah penglihatan kabur?', 'infeksi_kulit' => 'Apakah mengalami infeksi kulit?']
    ],
    'migrain' => [
        'dominan' => ['sensitivitas_terhadap_cahaya' => 'Apakah sensitif terhadap cahaya?', 'mual' => 'Apakah merasakan mual?', 'pusing' => 'Apakah merasakan pusing?'],
        'biasa' => ['nyeri_dada' => 'Apakah merasakan nyeri dada?', 'sensitivitas_terhadap_suara' => 'Apakah sensitif terhadap suara?', 'sensitivitas_terhadap_bau' => 'Apakah sensitif terhadap bau?']
    ]
];

$solusi_obat = [
    'demam' => ['nama' => 'Sanmol (Paracetamol)', 'deskripsi' => 'Sanmol mengandung paracetamol yang efektif meredakan demam, serta sakit kepala yang terkadang menyertai demam.'],
    'asma' => ['nama' => 'Symbicort Turbuhaler', 'deskripsi' => 'Symbicort Turbuhaler adalah obat asma hirup yang digunakan ketika terjadi serangan asma sebagai pertolongan pertama.'],
    'influenza' => ['nama' => 'Procold / Decolgen', 'deskripsi' => 'Membantu meredakan gejala flu seperti demam, sakit kepala, dan hidung tersumbat.'],
    'diare' => ['nama' => 'Oralit & Diapet', 'deskripsi' => 'Membantu memadatkan tinja dan mencegah dehidrasi akibat frekuensi buang air besar yang tinggi.'],
    'maag' => ['nama' => 'Antasida Doen / Mylanta', 'deskripsi' => 'Mengurangi gejala kelebihan asam lambung, gastritis, ulu hati perih, dan perut kembung.'],
    'kolestrol' => ['nama' => 'Konsultasikan Dokter (Obat Resep)', 'deskripsi' => 'Kolesterol membutuhkan penanganan khusus dokter dan pemeriksaan laboratorium lipid darah.'],
    'diabetes' => ['nama' => 'Konsultasikan Dokter Spesialis', 'deskripsi' => 'Diabetes memerlukan terapi obat berkelanjutan dan pemantauan kadar gula darah berkala.'],
    'migrain' => ['nama' => 'Bodrex Migra / Paramex', 'deskripsi' => 'Membantu meredakan sakit kepala sebelah (migrain) yang disertai sensitivitas cahaya.']
];

$target = $_GET['penyakit'] ?? 'demam';
if (!array_key_exists($target, $database_backward)) { $target = 'demam'; }

$gejala_dominan = $database_backward[$target]['dominan'];
$gejala_biasa = $database_backward[$target]['biasa'];

$form_dikirim = false;
$status_keputusan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_dikirim = true;
    
    $yes_dominan = 0;
    $yes_biasa = 0;

    foreach ($gejala_dominan as $key => $val) {
        if (isset($_POST[$key]) && $_POST[$key] === 'Ya') { $yes_dominan++; }
    }
    foreach ($gejala_biasa as $key => $val) {
        if (isset($_POST[$key]) && $_POST[$key] === 'Ya') { $yes_biasa++; }
    }

    $total_dominan = count($gejala_dominan);
    $total_ya = $yes_dominan + $yes_biasa;

    // Evaluasi Aturan Inferensi Sesuai Bab IV Laporan Kelompok 3
    if ($yes_dominan === $total_dominan) {
        $status_keputusan = 'positif'; // Aturan 1: Semua Gejala Dominan dipilih "Ya"
    } elseif ($total_ya > 3 && $yes_dominan >= 1) {
        $status_keputusan = 'positif'; // Aturan 2: Total Ya > 3 & minimal 1 Gejala Dominan
    } elseif ($yes_biasa >= 3 && $yes_dominan === 0) {
        $status_keputusan = 'kurang_pasti'; // Aturan 3: Memilih > 3 gejala biasa tanpa dominan
    } else {
        $status_keputusan = 'negatif'; // Aturan 4: Kurang dari syarat / menjawab tidak semua
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Backward Chaining - <?php echo ucfirst($target); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <div class="header-back">
            <a href="backward_pilih.php" class="btn-back">⬅ Ganti Target Penyakit</a>
            <h2>Pembuktian Hipotesis Penyakit: <?php echo ucfirst($target); ?></h2>
        </div>

        <?php if (!$form_dikirim): ?>
            <p style="color:#555; margin-bottom: 20px;">Sistem sedang menguji apakah Anda benar-benar menderita <strong><?php echo ucfirst($target); ?></strong>. Jawab ciri-ciri berikut dengan jujur:</p>
            
            <form action="" method="POST" class="form-pakar">
                <?php foreach (array_merge($gejala_dominan, $gejala_biasa) as $key => $pertanyaan): ?>
                    <div class="card-question">
                        <p><?php echo $pertanyaan; ?></p>
                        <div class="radio-options">
                            <label><input type="radio" name="<?php echo $key; ?>" value="Ya" required> Ya</label>
                            <label><input type="radio" name="<?php echo $key; ?>" value="Tidak"> Tidak</label>
                        </div>
                    </div>
                <?php endforeach; ?>
                <button type="submit" class="btn-submit" style="background-color: #0077b6;">Kirim & Buktikan Hipotesis</button>
            </form>

        <?php else: ?>
            <div class="result-box">
                <?php if ($status_keputusan === 'positif'): ?>
                    <div class="alert alert-danger">
                        <h3>Hasil: Hipotesis Terbukti! Anda menderita <?php echo ucfirst($target);?></h3>
                    </div>
                    <div class="medicine-card">
                        <h4>Rekomendasi Obat Lama Proyek Anda: <?php echo $solusi_obat[$target]['nama'];?> </h4>
                        <p><?php echo $solusi_obat[$target]['deskripsi'];?> </p>
                    </div>

                <?php elseif ($status_keputusan === 'kurang_pasti'): ?>
                    <div class="alert alert-warning">
                        <h3>Hasil: Anda belum bisa dipastikan terkena Penyakit <?php echo ucfirst($target);?></h3>
                    <p>Berdasarkan Aturan 3, Anda disarankan untuk <strong>Istirahat yang cukup dan Minum Air hangat</strong></p>
                    </div>

                <?php else: ?>
                    <div class="alert alert-success">
                        <h3>Hasil: Hipotesis Gugur.Tidak ada penyakit yang terdeteksi.</h3>
                    <p>Gejala yang Anda pilih tidak memenuhi syarat minimal pengujian diagnosis.</p>
                    </div>
                <?php endif; ?>
                
                <a href="backward_pilih.php" class="btn-submit" style="display:inline-block; text-align:center; text-decoration:none; margin-top:20px; background-color: var(--dark);">Uji Penyakit Lain</a>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>