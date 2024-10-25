<?php 
$golongan = 1;

switch(true) {
    case($golongan == 1):
        echo "Anda Golongan 1 : Gaji 5.000.000";
        break;
    case($golongan == 2):
        echo "Anda Golongan 2 : Gaji 4.000.000";
        break;
    case($golongan == 1):
        echo "Anda Golongan 3 : Gaji 3.000.000";
        break;
    case($golongan == 1):
        echo "Anda Golongan 4 : Gaji 2.000.000";
        break;
    default:
        echo "Golongan Tidak Diketahui!";
}
?>