<?php 
$kode = 'M';

switch(true) {
    case($switch = 'M'):
        echo "Mobil";
        break;
    case($switch = 'S'):
        echo "Sepeda Motor";
        break;
    case($switch = 'B'):
        echo "Bus";
        break;
    case($switch = 'T'):
        echo "Truk";
        break;
    default:
        echo "Anda Memasukan kode yang salah";
}
?>