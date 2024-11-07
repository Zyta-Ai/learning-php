<?php 
$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 5000000],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 3000000],
    ["nama" => "Buku", "kategori" => "Alat Tulis", "harga" => 20000],
    ["nama" => "Pulpen", "kategori" => "Alat Tulis", "harga" => 5000]
];

$total_harga = 0;

foreach($produk as $nilai) {
    if($nilai["kategori"] == "Elektronik"){
        $nilai["harga"] + $nilai["harga"];
        $total_harga += $nilai["harga"];
    }
}

echo "Total Harga untuk Kategori Elektronik : " . $total_harga; 
?>