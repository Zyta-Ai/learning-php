<?php 
$pembelian  = 50000;

if($pembelian >= 50000) {
    $diskon = $pembelian * 20/100;
    echo "Anda Mendapakatkan diskon Sebesar $diskon";

}else if ($pembelian >= 25000) {
    $diskon = $pembelian * 10/100;
    echo "Anda Mendapatkan Diskon Sebesar $diskon";
    
}else if ($pembelian < 25000) {
    echo "Anda Tidak mendapatkan Diskon";
}
?>