<?php
$siswa = [
    [
        "nama" => "Andi",
        "umur" => 20,
        "nilai" => 90,
    ],
    [
        "nama" => "Budi",
        "umur" => 22,
        "nilai" => 75,
    ],
    [
        "nama" => "Citra",
        "umur" => 21,
        "nilai" => 85,
    ],
];

for ($i = 0; $i < 3 - 1; $i++) {
    for ($j = 0; $j < 3 - $i - 1; $j++) {
        if ($siswa[$j]["nilai"] < $siswa[$j + 1]["nilai"]) {
            $temporary = $siswa[$j];
            $siswa[$j] = $siswa[$j + 1];
            $siswa[$j + 1] = $temporary;
        }
    }
}

foreach ($siswa as $data) {
    echo "<br>" . "{$data['nama']} - Nilai: {$data['nilai']}\n";
}
?>
