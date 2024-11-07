<?php
// Membuat array multidimensi dengan informasi barang
$barang = array(
    array("Nama Barang" => "Buku", "Kategori" => "Alat Tulis", "Harga" => 20000),
    array("Nama Barang" => "Laptop", "Kategori" => "Elektronik", "Harga" => 500000),
    array("Nama Barang" => "Penggaris", "Kategori" => "Alat Tulis", "Harga" => 7000)
);


echo "Nama Barang: " . $barang[0]["Nama Barang"] . " - Kategori: " .$barang[0]["Kategori"] . " - Harga: " . $barang[0]["Harga"];


?>
