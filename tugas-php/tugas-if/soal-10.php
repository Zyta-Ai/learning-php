<?php 
$angka1 = 90;
$angka2 = 70;
$angka3 = 96;

if ($angka1 >= $angka2 and $angka1 >= $angka3) {
    echo "Angka terbesar adalah: $angka1";
} else if ($angka2 >= $angka1 and $angka2 >= $angka3) {
    echo "Angka terbesar adalah: $angka2";
} else {
    echo "Angka terbesar adalah: $angka3";
}
?>