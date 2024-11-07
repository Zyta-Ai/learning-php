<?php 
$karyawan = [
    [
        "nama" => "Andi",
        "divisi" => "IT",
        "gaji" => 5000000,
    ],
   
    [
        "nama" => "Budi",
        "divisi" => "HRD",
        "gaji" => 3000000,
    ],
    
    [
        "nama" => "Citra",
        "divisi" => "IT",
        "gaji" => 6000000,
    ],
    
    [
        "nama" => "Doni",
        "divisi" => "Finance",
        "gaji" => 5000000
    ]

];

$nilai_gaji_it = 0;
$nilai_gaji_hrd = 0;
$nilai_gaji_fin = 0;
$gaji_div_tertinggi = "";

foreach($karyawan as $nilai) {
    if($nilai["divisi"] == "IT") {
        $nilai["gaji"] + $nilai["gaji"];
        $nilai_gaji_it += $nilai["gaji"];       
    }
    else if($nilai["divisi"] == "HRD") {
        $nilai_gaji_hrd = $nilai["gaji"];
    }
    else if($nilai["divisi"] == "Finance") {
        $nilai_gaji_hrd = $nilai["gaji"];
    }   
};

echo "Total Gaji di Divisi IT: " . $nilai_gaji_it;

if($nilai_gaji_it > $nilai_gaji_hrd) {
    if($nilai_gaji_it > $nilai_gaji_fin){
        $divisi = "IT";
        echo "<br>" . "Divisi dengan total Gaji Tertinggi: " . $divisi;
    }
    else if($nilai_gaji_fin > $nilai_gaji_it){
        $divisi = "Finance";
        echo "Divisi dengan total Gaji Tertinggi: " . $divisi;
    }
    else if($nilai_gaji_hrd > $nilai_gaji_it || $nilai_gaji_hrd > $nilai_gaji_fin){
        $divisi = "HRD";
        echo "Divisi dengan total Gaji Tertinggi: " . $divisi;
    };
};




?>