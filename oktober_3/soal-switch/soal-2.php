<?php 

$jenis = 'P';

switch ($jenis) {
    case 'L' : 
        echo "Jenis Kelamin Laki-laki";
        break;
    case 'P' :
        echo "Jenis Kelamin Perempuan";
        break;
    default : 
        echo "Anda Memasukan Jenis Kelamin yang tidak sesuai";
    
}

?>