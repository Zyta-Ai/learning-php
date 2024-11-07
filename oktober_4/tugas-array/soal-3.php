<?php
// Membuat array multidimensi
$mahasiswa = array(
    array(
        "Nama" => "Andi",
        "Jurusan" => "Teknik Informatika",
        "Umur" => 20
    ),
    array(
        "Nama" => "Budi",
        "Jurusan" => "Sistem Informasi",
        "Umur" => 21
    ),
    array(
        "Nama" => "Citra",
        "Jurusan" => "Manajemen",
        "Umur" => 22
    )
);



echo $mahasiswa[0]["Nama"] . " - " . $mahasiswa[0]["Jurusan"] . " - " . $mahasiswa[0]["Umur"];
?>
