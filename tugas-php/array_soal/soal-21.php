<?php
$siswa = [
    "Andi" => 80,
    "Budi" => 60,
    "Citra" => 85,
    "Doni" => 50
];

$totalNilai = 0;
$jumlahSiswa = count($siswa);

foreach ($siswa as $nama => $nilai) {
    $totalNilai += $nilai;
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Siswa dengan nilai dibawah rata-rata: ";

foreach ($siswa as $nama => $nilai) {
    if ($nilai < $rataRata) {
        echo $nama . "";
    }
}

?>
