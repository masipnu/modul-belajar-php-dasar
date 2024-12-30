<?php

$login = true;
if($login) echo "Selamat Datang";


$nama = "Joko";
$nilai = 80;

if($nilai >= 80){
    echo "Selamat $nama,";
    echo "Anda dinyatakan lulus..!";
}

if($nilai < 80){
    echo "Maaf $nama,";
    echo "Anda dinyatakan belum lulus..!";
}
?>