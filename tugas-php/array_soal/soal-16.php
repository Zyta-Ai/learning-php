<?php 
$siswa = [
    "Andi" => 80,
    "Budi" => 60,
    "Citra" => 85,
    "Doni" => 50
];

$nilai = 0;

echo "Siswa dibawah Rata-rata: ";
foreach($siswa as $nama => $nilai) { 
    if($nilai <= 75){
        echo $nama . " ";
    }
}





?>