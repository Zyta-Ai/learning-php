
<?php 
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$arrayGabungan = array_merge($array1, $array2);

echo "Array gabungan: ";
foreach ($arrayGabungan as $nilai) {
    echo $nilai . " ";
}


?>
