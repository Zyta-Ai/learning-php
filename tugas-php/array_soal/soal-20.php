<?php 
$penjualan = [
    "Laptop" => 120,
    "Smartphone" => 200,
    "Tablet" => 75,
    "Kamera" => 150
];

$jumlah_tertinggi = 0;
echo "Produk dengan Jumlah Tertinggi: " ;
foreach ($penjualan as $barang => $stok) {
    if($stok >= $jumlah_tertinggi){
        $jumlah_tertinggi = $stok;
    }
}

foreach ($penjualan as $barang => $stok){
    if($stok >= $jumlah_tertinggi) {
        echo $barang . " - " .  "Jumlah Penjualan: " . $stok ;
    }
}


?>