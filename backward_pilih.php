<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backward Chaining - Pilih Target</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <div class="header-back">
            <a href="index.php" class="btn-back">⬅ Kembali ke Beranda</a>
            <h2>Dugaan Awal Penyakit Anda (Hipotesis)</h2>
        </div>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">Pilih salah satu penyakit di bawah ini yang ingin Anda buktikan kebenarannya berdasarkan gejala spesifik:</p>

        <div class="card-grid">
            <?php
            $daftar_penyakit = [
                'demam' => ['nama' => 'Demam', 'icon' => '🌡️'],
                'kolestrol' => ['nama' => 'Kolesterol', 'icon' => '🩸'],
                'influenza' => ['nama' => 'Influenza', 'icon' => '🤧'],
                'diare' => ['nama' => 'Diare', 'icon' => '🤢'],
                'maag' => ['nama' => 'Maag', 'icon' => '🍞'],
                'diabetes' => ['nama' => 'Diabetes', 'icon' => '🍬'],
                'migrain' => ['nama' => 'Migrain', 'icon' => '🧠'],
                'asma' => ['nama' => 'Asma', 'icon' => '🫁']
            ];

            foreach ($daftar_penyakit as $key => $data) {
                echo "
                <a href='backward_proses.php?penyakit=$key' class='card'>
                    <div class='card-icon'>{$data['icon']}</div>
                    <h3>{$data['nama']}</h3>
                    <span class='btn-periksa' style='background-color: #0077b6;'>Uji Hipotesis</span>
                </a>
                ";
            }
            ?>
        </div>
    </main>
</body>
</html>