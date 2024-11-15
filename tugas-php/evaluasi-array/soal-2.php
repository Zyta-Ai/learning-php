<?php
$siswa = [
    "nama" => "Ahmad Rifai",
    "kelas" => "XI RPL",
    "nilai" => [
        [
            "mapel" => "Matematika",
            "Formatif" => 85,
            "Absensi" => 90,
            "UTS" => 88,
            "UAS" => 87
        ],
        [
            "mapel" => "Bahasa Inggris",
            "Formatif" => 78,
            "Absensi" => 95,
            "UTS" => 80,
            "UAS" => 82
        ],
        [
            "mapel" => "Bahasa Indonesia",
            "Formatif" => 83,
            "Absensi" => 92,
            "UTS" => 85,
            "UAS" => 88
        ],
        [
            "mapel" => "PKN",
            "Formatif" => 80,
            "Absensi" => 94,
            "UTS" => 82,
            "UAS" => 84
        ],
        [
            "mapel" => "Sejarah",
            "Formatif" => 75,
            "Absensi" => 96,
            "UTS" => 78,
            "UAS" => 80
        ],
        [
            "mapel" => "Basis Data",
            "Formatif" => 90,
            "Absensi" => 92,
            "UTS" => 88,
            "UAS" => 91
        ],
        [
            "mapel" => "Mobile Design",
            "Formatif" => 85,
            "Absensi" => 93,
            "UTS" => 87,
            "UAS" => 89
        ],
        [
            "mapel" => "PKK",
            "Formatif" => 88,
            "Absensi" => 94,
            "UTS" => 90,
            "UAS" => 92
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Daftar Nilai Siswa</h2>
        </div>
        <div class="info">
            Nama: <?php echo $siswa["nama"]; ?> | Kelas: <?php echo $siswa["kelas"]; ?>
        </div>
        <table>
            <tr>
                <th>Mata Pelajaran</th>
                <th>Formatif</th>
                <th>Absensi</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
            </tr>

            <?php
            foreach ($siswa["nilai"] as $nilai) {
                $nilaiAkhir = 0.1 * $nilai["Absensi"] + 0.2 * $nilai["Formatif"] + 0.3 * $nilai["UTS"] + 0.4 * $nilai["UAS"];
                
                echo "<tr>
                        <td>{$nilai['mapel']}</td>
                        <td>{$nilai['Formatif']}</td>
                        <td>{$nilai['Absensi']}</td>
                        <td>{$nilai['UTS']}</td>
                        <td>{$nilai['UAS']}</td>
                        <td>$nilaiAkhir</td>
                        </tr>";
            }

            ?>
        </table>
    </div>
</body>
</html>
