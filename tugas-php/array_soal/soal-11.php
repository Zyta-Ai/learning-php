<?php
$siswa = [
    [
        "nama" => "Andi",
        "kelas" => "X",
        "nilai" => 78,
    ],

    [
        "nama" => "Budi",
        "kelas" => "XI",
        "nilai" => 85,
    ],

    [
        "nama" => "Citra",
        "kelas" => "XII",
        "nilai" => 70,
    ]
];

$jumlahSiswaLulus = 0;

foreach($siswa as $nilai ) {
    if ($nilai["nilai"] > 75) {
        $jumlahSiswaLulus++;
    }
}

// Menampilkan jumlah siswa yang mendapatkan nilai di atas 75
echo "Jumlah siswa dengan nilai di atas 75: " . $jumlahSiswaLulus;
?>




