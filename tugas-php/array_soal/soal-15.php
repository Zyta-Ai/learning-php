<?php 
$buku = [
    [
        "judul" => "Pemrograman PHP",
        "penulis" => "Andi",
        "harga" => 50000,
    ],

    [
        "judul" => "Belajar Laravel",
        "penulis" => "Budi",
        "harga" => 75000,
    ]
];

$judulCari = "Pemrograman PHP";

$hasil = "Buku tidak ditemukan.";

foreach ($buku as $b) {
    if ($b["judul"] == $judulCari) { 
        $hasil = "Judul: ". "{$b['judul']} <br>" . "Penulis: {$b['penulis']} <br>" . "Harga: Rp{$b['harga']}";
        break;
    }
}

echo $hasil;

?>