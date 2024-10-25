<?php 
$bulan = 7;

switch(true) {
    case($bulan >= 1 && $bulan <= 3) :
        echo "Musim Dingin";
        break;
    case($bulan >= 4 && $bulan <= 6) :
        echo "Musim Semi";
        break;
    case($bulan >= 7 && $bulan <= 9) :
        echo "Musim Panas";
        break;
    case($bulan >= 10 && $bulan <= 12) :
        echo "Musim Gugur";
        break;
    default:
        echo "Anda Memasukan Range yang Salah!";
}


?>