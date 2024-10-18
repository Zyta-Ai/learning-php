<?php 

$kode_kendaraan = 'S';

switch($kode_kendaraan){
    case 'M': 
        echo "Mobil";
        break;
    case 'S': 
        echo "Sepeda Motor";
        break;
    case 'B': 
        echo "Bus";
        break;
    case 'T': 
        echo "Truk";
        break;
    default:
        echo "Anda Memasukan Kode Yang Tidak Diketahui";   
}
?>