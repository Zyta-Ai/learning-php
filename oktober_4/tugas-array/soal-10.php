<?php
$siswa = array(
    "Andi" => 80,
    "Budi" => 75,
    "Citra" => 90,
);

$totalNilai = 0;
$jumlahSiswa = count($siswa);

foreach ($siswa as $nama => $nilai) {
    $totalNilai += $nilai;
}

$rataRata = $totalNilai / $jumlahSiswa;

?>
