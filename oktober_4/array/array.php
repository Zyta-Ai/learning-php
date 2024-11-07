<?php
// Deklarasi Array -- Cara 1 : 

$nama_khodam = array("Harimau Putih ", "Monyet Terbang ", "Kucing Putih ", "Gajah Duduk ");


// Deklarasi Array -- Cara 2 :

$kelas_khodam = ["A ", "B ", "C ", "S ", "SSS "];

// Deklarasi Array -- Cara 3 :

$tingkat_khodam[] = "Basic";
$tingkat_khodam[] = "Rare";
$tingkat_khodam[] = "Legendary";


echo "<br> Nama Khodam : ". $nama_khodam[0]. "<br>" . "Kelas Khodam : ".  $kelas_khodam[4] . "<br>". "Tingkat : " . $tingkat_khodam[2] . "<br>"; 

echo "<br> Nama Khodam : ". $nama_khodam[1]. "<br>" . "Kelas Khodam : ".  $kelas_khodam[2] . "<br>". "Tingkat : " . $tingkat_khodam[1] . "<br>"; 

echo "<br> Nama Khodam : ". $nama_khodam[3]. "<br>" . "Kelas Khodam : ".  $kelas_khodam[3] . "<br>". "Tingkat : " . $tingkat_khodam[0] . "<br>"; 


$siswa = [
    "nama" => "Ayanokouji",
    "umur" => "17",
    "alamat" => "Tokyo, Jepang",
];

echo "<br> Nama Siswa : " . $siswa["nama"] . "<br>" . "Umur : " . $siswa["umur"] . "<br>" . "Alamat : " . $siswa["alamat"] ;
?>