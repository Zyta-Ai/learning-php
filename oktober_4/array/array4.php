<?php 
$data_siswa = [
    [
        "nama" => "Ayanokouji",
        "kelas" => "B",
        "umur" => 18,
    ],

    [
        "nama" => "Kariwizawa",
        "kelas" => "B",
        "umur" => 17,
    ],
];

foreach($data_siswa as $item) {
    echo "<br> Nama Siswa : " . $item["nama"] . "<br>";
    echo "Kelas : " . $item['kelas'] . "<br>";
    echo "Umur : " . $item['umur'] . "<br>";
}

?>