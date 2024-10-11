<?php 
$nilai_siswa = 1.00;

if($nilai_siswa >= 90) {
    echo "Nilai Siswa = A";
}elseif ($nilai_siswa >= 80){
    echo "Nilai Siswa = B";
}elseif ($nilai_siswa >= 70){
    echo "Nilai Siswa = C";
}elseif ($nilai_siswa >= 60){
    echo "Nilai Siswa = D";
}else{
    echo "Nilai Siswa = E";
}
?>