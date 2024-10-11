<?php 
$tahun = 2400;

if($tahun % 400 == 0){
     echo "Tahun Kabisat";
}else if ($tahun % 100 == 0 ) {
    echo "Bukan Tahun Kabisat";
}else if ($tahun % 4 == 0) {
    echo "Tahun Kabisat";
}

?>