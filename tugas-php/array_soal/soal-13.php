<?php 
$produk = [
    "buku" => 15,
    "pensil" => 5,
    "laptop" => 12,
    "tas" => 8
]

?>

<?php 
$produk = [
    "buku" => 15,
    "pensil" => 5,
    "laptop" => 12,
    "tas" => 8
];

echo "Produk dengan stok lebih dari 10: <br>";
foreach ($produk as $namaProduk => $stok) {
    if ($stok > 10) {
        echo $namaProduk . " - Stok: " . $stok . "<br>";
    }   
};
?>
