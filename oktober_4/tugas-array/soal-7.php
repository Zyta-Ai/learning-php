<?php
// Membuat array asosiatif
$hargaBarang = array(
    "Buku" => 20000,
    "Pensil" => 5000,
);

// Menampilkan semua barang beserta harganya menggunakan foreach
foreach ($hargaBarang as $barang => $harga) {
    echo "Barang : " . $barang . ", Harga: " . $harga . "<br>";
}
?>
