<?php
$angka = 5;
$faktorial = 1; 

for ($i = $angka; $i > 0; $i--) {
    $faktorial *= $i; 
}

echo "Faktorial dari " . $angka . " adalah: " . $faktorial;
?>
