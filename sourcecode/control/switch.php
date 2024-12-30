<?php
$kode = 1;

switch($kode){
    case 1:
        echo "Selamat datang Admin";
        break;
    case 2:
        echo "Selamat datang User";
        break;
    case 3:
        echo "Selamat datang Tamu";
        break;
    default:
        echo "Maaf, Akses ditolak..!";
        break;
}
?>