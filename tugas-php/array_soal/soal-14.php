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

array_multisort(array_column($siswa, 'nilai'), SORT_DESC, $siswa);

foreach ($siswa as $urutan) {
    echo "<br>" .    $urutan["nama"] . " - Nilai : " . $urutan["nilai"];
};

?>