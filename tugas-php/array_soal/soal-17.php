<?php 
$angka = [12, 45, 78, 3, 56];

$angka_terbesar = $angka[0];
$angka_terkecil = $angka[0];

foreach($angka as $nilai) {
    if ($nilai > $angka_terbesar) {
        $angka_terbesar = $nilai;
    }
}

foreach($angka as $nilai) {
    if ($nilai < $angka_terkecil) {
        $angka_terkecil = $nilai;
    }
}

echo "Nilai Terbesar : " . $angka_terbesar;
echo "<br>" . "Nilai Terkecil : " . $angka_terkecil;

?>